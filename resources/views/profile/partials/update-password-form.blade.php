{{-- <!-- Main Content -->
<div class="layout-content-container flex flex-col max-w-[960px] flex-1 md:ml-4 px-4 py-6">
    <header>
        <h2 class="text-[#0e141b] text-[32px] font-bold leading-tight tracking-light">
            {{ __('Update Password') }}
        </h2>
        <p class="mt-2 text-[#0e141b] text-base font-normal leading-normal">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <!-- Password Update Form -->
    <form method="POST" action="{{ route('password.update') }}" class="mt-6 flex flex-col gap-4">
        @csrf
        @method('PUT')

        <div class="flex flex-col gap-2">
            <label for="current_password"
                class="text-[#0e141b] text-sm font-medium leading-normal">{{ __('Current Password') }}</label>
            <input type="password" id="current_password" name="current_password"
                class="rounded-lg border border-[#d0dbe7] px-3 py-2 text-[#0e141b] text-sm focus:outline-none focus:ring-2 focus:ring-[#1978e5]"
                placeholder="Enter current password" autocomplete="current-password">
            @error('current_password', 'updatePassword')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex flex-col gap-2">
            <label for="password"
                class="text-[#0e141b] text-sm font-medium leading-normal">{{ __('New Password') }}</label>
            <input type="password" id="password" name="password"
                class="rounded-lg border border-[#d0dbe7] px-3 py-2 text-[#0e141b] text-sm focus:outline-none focus:ring-2 focus:ring-[#1978e5]"
                placeholder="Enter new password" autocomplete="new-password">
            @error('password', 'updatePassword')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex flex-col gap-2">
            <label for="password_confirmation"
                class="text-[#0e141b] text-sm font-medium leading-normal">{{ __('Confirm Password') }}</label>
            <input type="password" id="password_confirmation" name="password_confirmation"
                class="rounded-lg border border-[#d0dbe7] px-3 py-2 text-[#0e141b] text-sm focus:outline-none focus:ring-2 focus:ring-[#1978e5]"
                placeholder="Confirm new password" autocomplete="new-password">
            @error('password_confirmation', 'updatePassword')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex items-center gap-4">
            <button type="submit"
                class="flex min-w-[84px] max-w-[200px] cursor-pointer items-center justify-center rounded-lg h-10 px-4 bg-[#1976d2] text-white text-sm font-bold leading-normal tracking-[0.015em]">
                <span class="truncate">{{ __('Save') }}</span>
            </button>

            @if (session('status') === 'password-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="text-[#0e141b] text-sm">
                    {{ __('Saved.') }}
                </p>
            @endif
        </div>
    </form>
</div> --}}
