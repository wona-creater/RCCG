{{-- <!-- Main Content -->
<div class="layout-content-container flex flex-col max-w-[960px] flex-1 md:ml-4 px-4 py-6">
    <header>
        <h2 class="text-[#0e141b] text-[32px] font-bold leading-tight tracking-light">
            {{ __('Profile Information') }}
        </h2>
        <p class="mt-2 text-[#0e141b] text-base font-normal leading-normal">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <!-- Send Verification Form -->
    <form id="send-verification" method="POST" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <!-- Profile Update Form -->
    <form method="POST" action="{{ route('profile.update') }}" class="mt-6 flex flex-col gap-4">
        @csrf
        @method('PATCH')

        <div class="flex flex-col gap-2">
            <label for="name" class="text-[#0e141b] text-sm font-medium leading-normal">{{ __('Name') }}</label>
            <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}"
                class="rounded-lg border border-[#d0dbe7] px-3 py-2 text-[#0e141b] text-sm focus:outline-none focus:ring-2 focus:ring-[#1978e5]"
                placeholder="Enter your name" required autofocus autocomplete="name">
            @error('name')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex flex-col gap-2">
            <label for="email" class="text-[#0e141b] text-sm font-medium leading-normal">{{ __('Email') }}</label>
            <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}"
                class="rounded-lg border border-[#d0dbe7] px-3 py-2 text-[#0e141b] text-sm focus:outline-none focus:ring-2 focus:ring-[#1978e5]"
                placeholder="Enter your email" required autocomplete="username">
            @error('email')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                <div class="mt-2 flex flex-col gap-2">
                    <p class="text-[#0e141b] text-sm">
                        {{ __('Your email address is unverified.') }}
                        <button form="send-verification"
                            class="text-[#1978e5] text-sm font-medium hover:underline focus:outline-none focus:ring-2 focus:ring-[#1978e5] rounded-md">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>
                    @if (session('status') === 'verification-link-sent')
                        <p class="text-green-600 text-sm font-medium">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4">
            <button type="submit"
                class="flex min-w-[84px] max-w-[200px] cursor-pointer items-center justify-center rounded-lg h-10 px-4 bg-[#1976d2] text-white text-sm font-bold leading-normal tracking-[0.015em]">
                <span class="truncate">{{ __('Save') }}</span>
            </button>

            @if (session('status') === 'profile-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="text-[#0e141b] text-sm">
                    {{ __('Saved.') }}
                </p>
            @endif
        </div>
    </form>
</div> --}}
