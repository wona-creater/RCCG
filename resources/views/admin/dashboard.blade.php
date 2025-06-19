<x-app-layout>


    <div class="content-container flex flex-col max-w-[960px] mx-auto">
        <div class="section-header p-4">
            <p class="text-[#0e141b] text-[32px] font-bold leading-tight">Users</p>
            <p class="text-[#4e7097] text-sm">Manage all users of the application</p>
        </div>
        <div class="table-container px-4 py-3">
            <div class="overflow-x-auto rounded-lg border border-[#d0dbe7] bg-slate-50">
                <table class="min-w-full table-fixed">
                    <thead>
                        <tr class="bg-slate-50">
                            <th
                                class="px-2 py-3 text-left text-[#0e141b] text-sm font-medium leading-normal w-[100px] min-w-[100px]">
                                Name
                            </th>
                            <th
                                class="px-2 py-3 text-left text-[#0e141b] text-sm font-medium leading-normal w-[180px] min-w-[180px]">
                                Email
                            </th>
                            <th
                                class="px-2 py-3 text-left text-[#0e141b] text-sm font-medium leading-normal w-[80px] min-w-[80px]">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr class="border-t border-t-[#d0dbe7]">
                                <td
                                    class="h-[72px] px-2 py-2 text-[#4e7097] text-sm font-normal leading-normal truncate">
                                    {{ $user->name }}
                                </td>
                                <td
                                    class="h-[72px] px-2 py-2 text-[#4e7097] text-sm font-normal leading-normal break-all">
                                    {{ $user->email }}
                                </td>
                                <td class="h-[72px] px-2 py-2 text-[#4e7097] text-sm font-normal leading-normal">
                                    <form action="{{ route('admin.destroy', $user->id) }}" method="POST"
                                        onsubmit="return confirm('Are you sure you want to delete this user?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="dropdown-button bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600 w-full text-center text-sm">
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
                min-width: 360px;
            }

            th,
            td {
                min-width: 80px;
                font-size: 0.75rem;
                padding: 0.5rem;
            }

            td:nth-child(2),
            th:nth-child(2) {
                min-width: 180px;
                word-break: break-all;
            }
        }
    </style>

</x-app-layout>
