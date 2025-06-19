<x-app-layout>
    <!-- Main Content -->
    <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
        <div class="flex flex-wrap justify-between gap-3 p-4">
            <p class="text-[#0e141b] tracking-light text-[32px] font-bold leading-tight min-w-72">
                Subscribe
            </p>
        </div>
        <div class="grid grid-cols-[repeat(auto-fit,minmax(228px,1fr))] gap-2.5 px-4 py-3 @3xl:grid-cols-4">

            <div class="flex flex-1 flex-col gap-4 rounded-lg border border-solid border-[#d0dbe7] bg-slate-50 p-6 m-4">
                <div class="flex flex-col gap-1">
                    <div class="flex items-center justify-between">
                        <h1 class="text-[#0e141b] text-base font-bold leading-tight">
                            Pro
                        </h1>
                        <p
                            class="text-slate-50 text-xs font-medium leading-normal tracking-[0.015em] rounded-lg bg-[#1978e5] px-3 py-[3px] text-center">
                            Most Popular
                        </p>
                    </div>
                    <p class="flex items-baseline gap-1 text-[#0e141b]">
                        <span class="text-[#0e141b] text-4xl font-black leading-tight tracking-[-0.033em]">35k</span>
                        <span class="text-[#0e141b] text-base font-bold leading-tight">/month</span>
                    </p>
                </div>
                <button id="chooseProBtn"
                    class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-[#e7edf3] text-[#0e141b] text-sm font-bold leading-normal tracking-[0.015em]">
                    <span class="truncate">Choose Pro</span>
                </button>
                <div class="flex flex-col gap-2">
                    <div class="text-[13px] font-normal leading-normal flex gap-3 text-[#0e141b]">
                        <div class="text-[#0e141b]" data-icon="Check" data-size="20px" data-weight="regular">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor"
                                viewBox="0 0 256 256">
                                <path
                                    d="M229.66,77.66l-128,128a8,8,0,0,1-11.32,0l-56-56a8,8,0,0,1,11.32-11.32L96,188.69,218.34,66.34a8,8,0,0,1,11.32,11.32Z">
                                </path>
                            </svg>
                        </div>
                        Unlimited emails
                    </div>
                </div>
            </div>

            <div id="paymentModal" class="modal">
                <div class="modal-content">
                    <h2 class="text-xl font-bold mb-4">Payment Details</h2>
                    <div class="mb-4">
                        <h3 class="text-lg font-semibold">Bank Account</h3>
                        @foreach ($banks as $bank)
                            <p><strong>Bank:</strong> {{ $bank->bank_name }}</p>
                            <p><strong>Bank Name:</strong> {{ $bank->account_name }} <button class="copy-btn"
                                    onclick="copyToClipboard('{{ $bank->account_number }}', event)">Copy</button></p>
                            <p><strong>Account Number:</strong> {{ $bank->account_number }} <button class="copy-btn"
                                    onclick="copyToClipboard('{{ $bank->account_number }}', event)">Copy</button></p>
                            <br>
                        @endforeach
                    </div>
                    <div class="mb-4">
                        <h3 class="text-lg font-semibold">Cryptocurrency</h3>
                        @foreach ($cryptos as $crypto)
                            <p><strong>{{ $crypto->cryptocurrency }}:</strong> {{ $crypto->network }}:
                                {{ $crypto->wallet_address }} <button class="copy-btn"
                                    onclick="copyToClipboard('{{ $crypto->wallet_address }}', event)">Copy</button></p>
                            <br>
                        @endforeach
                    </div>
                    <button id="closeModalBtn" class="mt-4 px-4 py-2 bg-gray-200 rounded-lg">Close</button>
                </div>
            </div>

            <script>
                function copyToClipboard(text, event) {
                    navigator.clipboard.writeText(text).then(() => {
                        alert('Copied to clipboard!');
                    });
                }
            </script>

            <script>
                const chooseProBtn = document.getElementById('chooseProBtn');
                const paymentModal = document.getElementById('paymentModal');
                const closeModalBtn = document.getElementById('closeModalBtn');

                chooseProBtn.addEventListener('click', (event) => {
                    event.stopPropagation();
                    paymentModal.style.display = 'flex';
                });

                closeModalBtn.addEventListener('click', (event) => {
                    event.stopPropagation();
                    paymentModal.style.display = 'none';
                });

                window.addEventListener('click', (event) => {
                    if (event.target === paymentModal) {
                        paymentModal.style.display = 'none';
                    }
                });

                function copyToClipboard(text, event) {
                    event.stopPropagation();
                    if (navigator.clipboard && window.isSecureContext) {
                        navigator.clipboard.writeText(text).then(() => {
                            alert('Copied to clipboard!');
                        }).catch(err => {
                            console.error('Failed to copy: ', err);
                            fallbackCopy(text);
                        });
                    } else {
                        fallbackCopy(text);
                    }
                }

                function fallbackCopy(text) {
                    const textArea = document.createElement('textarea');
                    textArea.value = text;
                    document.body.appendChild(textArea);
                    textArea.select();
                    try {
                        document.execCommand('copy');
                        alert('Copied to clipboard!');
                    } catch (err) {
                        console.error('Fallback copy failed: ', err);
                        alert('Failed to copy. Please copy manually.');
                    }
                    document.body.removeChild(textArea);
                }
            </script>

        </div>

        <!-- Payment Code Section -->
        <div class="px-4 py-6">
            <h2 class="text-[#0e141b] text-lg font-bold leading-tight tracking-[-0.015em] pb-4">Activate Subscription
            </h2>
            <form action="{{ route('codes.use') }}" method="POST" class="flex flex-col gap-4 max-w-[480px]">
                @csrf
                <div class="flex flex-col gap-2">
                    <label for="payment_code" class="text-[#0e141b] text-sm font-medium leading-normal">Subscription
                        Code</label>
                    <input type="text" id="payment_code" name="code"
                        class="rounded-lg border border-[#d0dbe7] px-3 py-2 text-[#0e141b] text-sm focus:outline-none focus:ring-2 focus:ring-[#1978e5]"
                        placeholder="Enter your payment code" required>
                    @error('code')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <button
                    class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-[#1976d2] text-white text-sm font-bold leading-normal tracking-[0.015em]">
                    <span class="truncate">Apply</span>
                </button>
            </form>

            @if (session('success'))
                <div class="mt-4 text-green-600 text-sm">{{ session('success') }}</div>
            @elseif (session('error'))
                <div class="mt-4 text-red-600 text-sm">{{ session('error') }}</div>
            @endif

            @if (auth()->user()->codes()->where('status', 'active')->exists())
                @php
                    $activeCode = auth()->user()->codes()->where('status', 'active')->first();
                @endphp
                <div class="mt-6 rounded-lg border border-[#d0dbe7] p-6 bg-slate-50">
                    <h3 class="text-[#0e141b] text-base font-bold leading-tight">Subscription Details</h3>
                    <div class="mt-2 text-[#0e141b] text-sm">
                        <p>Code: {{ $activeCode->code }}</p>
                        <p>Start Date: {{ $activeCode->start_date->format('m/d/Y') }}</p>
                        <p>End Date: {{ $activeCode->end_date->format('m/d/Y') }}</p>
                    </div>
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
