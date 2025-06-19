<x-app-layout>





    <div class="content-container flex flex-col max-w-[960px] mx-auto">
        <div class="header-section p-4 flex justify-between items-center">
            <p class="text-[#0e141b] text-[32px] font-bold leading-tight">Payment Options</p>
            <a href="{{ route('add') }}"
                class="add-button bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Add Payment Method</a>
        </div>
        <h2 class="section-title text-[#0e141b] text-xl font-semibold p-4">Bank Transfers</h2>
        <div class="table-container px-4 py-3">
            <div class="overflow-x-auto rounded-lg border border-[#d0dbe7] bg-slate-50">
                <table class="min-w-full table-fixed">
                    <thead>
                        <tr class="bg-slate-50">
                            <th
                                class="px-2 py-3 text-left text-[#0e141b] text-sm font-medium leading-normal w-[150px] min-w-[150px]">
                                Bank Name
                            </th>
                            <th
                                class="px-2 py-3 text-left text-[#0e141b] text-sm font-medium leading-normal w-[200px] min-w-[200px]">
                                Account Name
                            </th>
                            <th
                                class="px-2 py-3 text-left text-[#0e141b] text-sm font-medium leading-normal w-[200px] min-w-[200px]">
                                Account Number
                            </th>
                            <th
                                class="px-2 py-3 text-left text-[#0e141b] text-sm font-medium leading-normal w-[100px] min-w-[100px]">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($banks as $account)
                            <tr class="border-t border-t-[#d0dbe7]">
                                <td
                                    class="h-[72px] px-2 py-2 text-[#4e7097] text-sm font-normal leading-normal truncate">
                                    {{ $account->bank_name }}
                                </td>
                                <td
                                    class="h-[72px] px-2 py-2 text-[#4e7097] text-sm font-normal leading-normal break-all">
                                    {{ $account->account_name }}
                                </td>
                                <td
                                    class="h-[72px] px-2 py-2 text-[#4e7097] text-sm font-normal leading-normal break-all">
                                    {{ $account->account_number }}
                                </td>
                                <td class="h-[72px] px-2 py-2 text-[#4e7097] text-sm font-normal leading-normal">
                                    <form action="{{ route('bank-accounts.destroy', $account->id) }}" method="POST"
                                        onsubmit="return confirm('Are you sure you want to delete this bank account?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600 w-full text-center text-sm">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <h2 class="section-title text-[#0e141b] text-xl font-semibold p-4">Cryptocurrency Wallets</h2>
        <div class="table-container px-4 py-3">
            <div class="overflow-x-auto rounded-lg border border-[#d0dbe7] bg-slate-50">
                <table class="min-w-full table-fixed">
                    <thead>
                        <tr class="bg-slate-50">
                            <th
                                class="px-2 py-3 text-left text-[#0e141b] text-sm font-medium leading-normal w-[150px] min-w-[150px]">
                                Cryptocurrency
                            </th>
                            <th
                                class="px-2 py-3 text-left text-[#0e141b] text-sm font-medium leading-normal w-[200px] min-w-[200px]">
                                Network
                            </th>
                            <th
                                class="px-2 py-3 text-left text-[#0e141b] text-sm font-medium leading-normal w-[200px] min-w-[200px]">
                                Wallet Address
                            </th>
                            <th
                                class="px-2 py-3 text-left text-[#0e141b] text-sm font-medium leading-normal w-[100px] min-w-[100px]">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cryptos as $wallet)
                            <tr class="border-t border-t-[#d0dbe7]">
                                <td
                                    class="h-[72px] px-2 py-2 text-[#4e7097] text-sm font-normal leading-normal truncate">
                                    {{ $wallet->cryptocurrency }}
                                </td>
                                <td
                                    class="h-[72px] px-2 py-2 text-[#4e7097] text-sm font-normal leading-normal break-all">
                                    {{ $wallet->network }}
                                </td>
                                <td
                                    class="h-[72px] px-2 py-2 text-[#4e7097] text-sm font-normal leading-normal break-all">
                                    {{ $wallet->wallet_address }}
                                </td>
                                <td class="h-[72px] px-2 py-2 text-[#4e7097] text-sm font-normal leading-normal">
                                    <form action="{{ route('crypto-wallets.destroy', $wallet->id) }}" method="POST"
                                        onsubmit="return confirm('Are you sure you want to delete this wallet?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600 w-full text-center text-sm">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <style>
        @media (max-width: 640px) {
            .table-container {
                -webkit-overflow-scrolling: touch;
            }

            table {
                width: max-content;
                min-width: 450px;
            }

            th,
            td {
                min-width: 100px;
                font-size: 0.75rem;
                padding: 0.5rem;
            }

            td:nth-child(2),
            th:nth-child(2) {
                min-width: 200px;
                word-break: break-all;
            }
        }
    </style>




</x-app-layout>
