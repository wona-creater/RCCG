<x-app-layout>





    <div class="content-container flex flex-col max-w-[960px] mx-auto">
        <div class="layout-content-container p-4">
            <div class="header-section">
                <p class="text-[#0e141b] text-[32px] font-bold leading-tight">Add Payment Method</p>
            </div>
            <div class="radio-group flex flex-col gap-4 py-4">
                <label class="radio-label flex items-center gap-2">
                    <input type="radio" name="payment-method" value="bank" onchange="toggleForm(this.value)" checked />
                    Bank Transfer
                </label>
                <label class="radio-label flex items-center gap-2">
                    <input type="radio" name="payment-method" value="crypto" onchange="toggleForm(this.value)" />
                    Cryptocurrency Wallet
                </label>
            </div>
            <div id="bank-form">
                <h2 class="section-title text-[#0e141b] text-xl font-semibold py-2">Bank Transfer</h2>
                <form action="{{ route('bank-accounts.store') }}" method="POST">
                    @csrf
                    <div class="form-group py-2">
                        <label class="form-label">
                            <p>Bank Name</p>
                            <input class="form-input border rounded w-full p-2" name="bank_name"
                                placeholder="Enter bank name" value="{{ old('bank_name') }}" required />
                            @error('bank_name')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </label>
                    </div>
                    <div class="form-group py-2">
                        <label class="form-label">
                            <p>Account Number</p>
                            <input class="form-input border rounded w-full p-2" name="account_number"
                                placeholder="Enter account number" value="{{ old('account_number') }}" required />
                            @error('account_number')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </label>
                    </div>
                    <div class="form-group py-2">
                        <label class="form-label">
                            <p>Account Name</p>
                            <input class="form-input border rounded w-full p-2" name="account_name"
                                placeholder="Enter account name" value="{{ old('account_name') }}" required />
                            @error('account_name')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </label>
                    </div>
                    <div class="flex px-4 py-3 justify-start">
                        <button type="submit"
                            class="submit-button bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Add
                            Payment Method</button>
                    </div>
                </form>
            </div>
            <div id="crypto-form" class="hidden">
                <h2 class="section-title text-[#0e141b] text-xl font-semibold py-2">Cryptocurrency Wallet</h2>
                <form action="{{ route('crypto-wallets.store') }}" method="POST">
                    @csrf
                    <div class="form-group py-2">
                        <label class="form-label">
                            <p>Cryptocurrency</p>
                            {{-- <select class="form-input border rounded w-full p-2" name="cryptocurrency" required>
                                <option value="">Select cryptocurrency</option>
                                <option value="BTC">BTC</option>
                                <option value="ETH">ETH</option>
                                <option value="USDT">USDT (BNB Chain)</option>
                            </select> --}}
                             <input class="form-input border rounded w-full p-2" name="cryptocurrency"
                                placeholder="Enter Crypto Name" value="{{ old('cryptocurrency') }}" required />
                            @error('cryptocurrency')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </label>
                    </div>
                    <div class="form-group py-2">
                        <label class="form-label">
                            <p>Wallet Address</p>
                            <input class="form-input border rounded w-full p-2" name="wallet_address"
                                placeholder="Enter wallet address" value="{{ old('wallet_address') }}" required />
                            @error('wallet_address')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </label>
                    </div>
                    <div class="form-group py-2">
                        <label class="form-label">
                            <p>Network</p>
                            <input class="form-input border rounded w-full p-2" name="network"
                                placeholder="Select network" value="{{ old('network') }}" required />
                            @error('network')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </label>
                    </div>
                    <div class="flex px-4 py-3 justify-start">
                        <button type="submit"
                            class="submit-button bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Add
                            Payment Method</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        function toggleForm(value) {
            document.getElementById('bank-form').classList.toggle('hidden', value !== 'bank');
            document.getElementById('crypto-form').classList.toggle('hidden', value !== 'crypto');
        }
    </script>





</x-app-layout>
