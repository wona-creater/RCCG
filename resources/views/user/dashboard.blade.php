<x-app-layout>

    <div class="relative flex size-full min-h-screen flex-col bg-slate-50 group/design-root overflow-x-hidden"
        style='font-family: Inter, "Noto Sans", sans-serif;'>
        <div class="layout-container flex h-full grow flex-col">


            <div class="flex flex-col md:flex-row gap-1 px-6 flex-1 justify-center py-5">



                <!-- Main Content -->
                <div class="layout-content-container flex flex-col max-w-[960px] flex-1 md:ml-4">
                    <div class="flex flex-wrap justify-between gap-3 p-4">
                        <p class="text-[#0e141b] tracking-light text-[32px] font-bold leading-tight min-w-72">Hi,
                            {{ Auth::user()->name }}</p>
                    </div>
                    <h3 class="text-[#0e141b] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">
                        Dashboard</h3>
                    <div class="flex flex-wrap gap-4 p-4">
                        <div class="flex min-w-[158px] flex-1 flex-col gap-2 rounded-lg p-6 border border-[#d0dbe7]">
                            <p class="text-[#0e141b] text-base font-medium leading-normal">Total Campaigns</p>
                            <p class="text-[#0e141b] tracking-light text-2xl font-bold leading-tight">1,234</p>
                        </div>
                        <div class="flex min-w-[158px] flex-1 flex-col gap-2 rounded-lg p-6 border border-[#d0dbe7]">
                            <p class="text-[#0e141b] text-base font-medium leading-normal">Active Campaigns</p>
                            <p class="text-[#0e141b] tracking-light text-2xl font-bold leading-tight">5,678</p>
                        </div>
                        <div class="flex min-w-[158px] flex-1 flex-col gap-2 rounded-lg p-6 border border-[#d0dbe7]">
                            <p class="text-[#0e141b] text-base font-medium leading-normal">Total Value</p>
                            <p class="text-[#0e141b] tracking-light text-2xl font-bold leading-tight">25%</p>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex flex-wrap gap-4 px-4 py-4">
                        <a href="{{ route('user.raids') }}"
                            class="flex min-w-[84px] max-w-[200px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-[#1976d2] text-white text-sm font-bold leading-normal tracking-[0.015em]">
                            <span class="truncate">Raids</span>
                        </a>
                        <a href="{{ route('user.subscribe') }}"
                            class="flex min-w-[84px] max-w-[200px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-[#1976d2] text-white text-sm font-bold leading-normal tracking-[0.015em]">
                            <span class="truncate">Subscribe</span>
                        </a>
                        <a href="{{ route('user.sendmail') }}"
                            class="flex min-w-[84px] max-w-[200px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-[#1976d2] text-white text-sm font-bold leading-normal tracking-[0.015em]">
                            <span class="truncate">Send Mail</span>
                        </a>
                    </div>

                    <h3 class="text-[#0e141b] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">
                        Performance</h3>
                    <div class="flex flex-wrap gap-4 px-4 py-6">
                        <div class="flex min-w-72 flex-1 flex-col gap-2 rounded-lg border border-[#d0dbe7] p-6">
                            <p class="text-[#0e141b] text-base font-medium leading-normal">Email Open Rate</p>
                            <p class="text-[#0e141b] tracking-light text-[32px] font-bold leading-tight truncate">25%
                            </p>
                            <div class="flex gap-1">
                                <p class="text-[#4e7097] text-base font-normal leading-normal">Last 30 Days</p>
                                <p class="text-[#07883b] text-base font-medium leading-normal">+2%</p>
                            </div>
                            <div class="flex min-h-[180px] flex-1 flex-col gap-8 py-4">
                                <svg width="100%" height="148" viewBox="-3 0 478 150" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                                    <path
                                        d="M0 109C18.1538 109 18.1538 21 36.3077 21C54.4615 21 54.4615 41 72.6154 41C90.7692 41 90.7692 93 108.923 93C127.077 93 127.077 33 145.231 33C163.385 33 163.385 101 181.538 101C199.692 101 199.692 61 217.846 61C236 61 236 45 254.154 45C272.308 45 272.308 121 290.462 121C308.615 121 308.615 149 326.769 149C344.923 149 344.923 1 363.077 1C381.231 1 381.231 81 399.385 81C417.538 81 417.538 129 435.692 129C453.846 129 453.846 25 472 25V149H326.769H0V109Z"
                                        fill="url(#paint0_linear_1131_5935)"></path>
                                    <path
                                        d="M0 109C18.1538 109 18.1538 21 36.3077 21C54.4615 21 54.4615 41 72.6154 41C90.7692 41 90.7692 93 108.923 93C127.077 93 127.077 33 145.231 33C163.385 33 163.385 101 181.538 101C199.692 101 199.692 61 217.846 61C236 61 236 45 254.154 45C272.308 45 272.308 121 290.462 121C308.615 121 308.615 149 326.769 149C344.923 149 344.923 1 363.077 1C381.231 1 381.231 81 399.385 81C417.538 81 417.538 129 435.692 129C453.846 129 453.846 25 472 25"
                                        stroke="#4e7097" stroke-width="3" stroke-linecap="round"></path>
                                    <defs>
                                        <linearGradient id="paint0_linear_1131_5935" x1="236" y1="1"
                                            x2="236" y2="149" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#e7edf3"></stop>
                                            <stop offset="1" stop-color="#e7edf3" stop-opacity="0"></stop>
                                        </linearGradient>
                                    </defs>
                                </svg>
                                <div class="flex justify-around">
                                    <p class="text-[#4e7097] text-[13px] font-bold leading-normal tracking-[0.015em]">
                                        Jul 1</p>
                                    <p class="text-[#4e7097] text-[13px] font-bold leading-normal tracking-[0.015em]">
                                        Jul 8</p>
                                    <p class="text-[#4e7097] text-[13px] font-bold leading-normal tracking-[0.015em]">
                                        Jul 15</p>
                                    <p class="text-[#4e7097] text-[13px] font-bold leading-normal tracking-[0.015em]">
                                        Jul 22</p>
                                    <p class="text-[#4e7097] text-[13px] font-bold leading-normal tracking-[0.015em]">
                                        Jul 29</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
