<x-app-layout>
    <div class="content-container flex flex-col max-w-[960px] mx-auto">
        <div class="layout-content-container p-4">
            <div class="header-section">
                <p class="text-[#0e141b] text-[32px] font-bold leading-tight">Codes</p>
            </div>
            <form action="{{ route('admin.code') }}" method="POST" class="form-group">
                @csrf
                <label class="form-label">
                    <p>Number of Codes to Generate</p>
                    <div class="input-with-copy flex gap-2">
                        <input id="code-count-input" name="code_count" class="form-input border rounded w-full p-2" placeholder="Enter number of codes" value="{{ old('code_count') }}" required />
                        <button type="button" class="copy-button bg-gray-200 px-2 rounded" onclick="copyCodeCount()">📋</button>
                    </div>
                    @error('code_count')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </label>
                <div class="form-group justify-start py-3">
                    <button type="submit" class="generate-button bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Generate Codes</button>
                </div>
            </form>
            <div class="table-container px-4 py-3">
                <div class="overflow-x-auto rounded-lg border border-[#d0dbe7] bg-slate-50">
                    <table class="min-w-full table-fixed">
                        <thead>
                            <tr class="bg-slate-50">
                                <th class="px-2 py-3 text-left text-[#0e141b] text-sm font-medium leading-normal w-[100px] min-w-[100px]">
                                    Code
                                </th>
                                <th class="px-2 py-3 text-left text-[#0e141b] text-sm font-medium leading-normal w-[120px] min-w-[120px]">
                                    User
                                </th>

                                <th class="px-2 py-3 text-left text-[#0e141b] text-sm font-medium leading-normal w-[80px] min-w-[80px]">
                                    Status
                                </th>
                                <th class="px-2 py-3 text-left text-[#0e141b] text-sm font-medium leading-normal w-[100px] min-w-[100px]">
                                    Start Date
                                </th>
                                <th class="px-2 py-3 text-left text-[#0e141b] text-sm font-medium leading-normal w-[100px] min-w-[100px]">
                                    End Date
                                </th>
                                <th class="px-2 py-3 text-left text-[#0e141b] text-sm font-medium leading-normal w-[80px] min-w-[80px]">
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($codes as $code)
                                <tr class="border-t border-t-[#d0dbe7]">
                                    <td class="h-[72px] px-2 py-2 text-[#4e7097] text-sm font-normal leading-normal truncate">
                                        {{ $code->code }}
                                    </td>
                                    <td class="h-[72px] px-2 py-2 text-[#4e7097] text-sm font-normal leading-normal truncate">
                                        {{ $code->user ? $code->user->email : 'Unassigned' }}
                                    </td>

                                    <td class="h-[72px] px-2 py-2 text-[#4e7097] text-sm font-normal leading-normal">
                                        <span class="status-button {{ $code->isActive() ? 'bg-green-500' : 'bg-red-500' }} text-white px-2 py-1 rounded">
                                            {{ $code->status }}
                                        </span>
                                    </td>
                                    <td class="h-[72px] px-2 py-2 text-[#4e7097] text-sm font-normal leading-normal truncate">
                                        {{ $code->start_date->format('m/d/Y') }}
                                    </td>
                                    <td class="h-[72px] px-2 py-2 text-[#4e7097] text-sm font-normal leading-normal truncate">
                                        {{ $code->end_date->format('m/d/Y') }}
                                    </td>
                                    <td class="h-[72px] px-2 py-2 text-[#4e7097] text-sm font-normal leading-normal">
                                        <form action="{{ route('admin.code.destroy', $code->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this code?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600 w-full text-center text-sm">
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
                    min-width: 680px;
                }
                th, td {
                    min-width: 80px;
                    font-size: 0.75rem;
                    padding: 0.5rem;
                }
                td:nth-child(1), th:nth-child(1) {
                    min-width: 100px;
                }
                td:nth-child(2), th:nth-child(2) {
                    min-width: 120px;
                }
            }
        </style>
        <script>
            function copyCodeCount() {
                const input = document.getElementById('code-count-input');
                input.select();
                document.execCommand('copy');
                alert('Code count copied!');
            }
        </script>
</x-app-layout>
