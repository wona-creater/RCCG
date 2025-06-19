<x-app-layout>
    <!-- Main Content -->
    <div class="layout-content-container flex flex-col max-w-[960px] flex-1 md:ml-4 px-4 py-6">
        <header>
            <h2 class="text-[#0e141b] text-[32px] font-bold leading-tight tracking-light">
                {{ __('Profile') }}
            </h2>
        </header>

        <div class="mt-6 flex flex-col gap-4">
            <!-- Profile Information -->
            <div class="rounded-lg border border-[#d0dbe7] p-6">
                <header>
                    <h3 class="text-[#0e141b] text-lg font-bold leading-tight tracking-[-0.015em]">
                        {{ __('Profile Information') }}
                    </h3>
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
                        <label for="name"
                            class="text-[#0e141b] text-sm font-medium leading-normal">{{ __('Name') }}</label>
                        <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}"
                            class="rounded-lg border border-[#d0dbe7] px-3 py-2 text-[#0e141b] text-sm focus:outline-none focus:ring-2 focus:ring-[#1978e5]"
                            placeholder="Enter your name" required autofocus autocomplete="name">
                        @error('name')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex flex-col gap-2">
                        <label for="email"
                            class="text-[#0e141b] text-sm font-medium leading-normal">{{ __('Email') }}</label>
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
            </div>

            <!-- Update Password -->
            <div class="rounded-lg border border-[#d0dbe7] p-6">
                <header>
                    <h3 class="text-[#0e141b] text-lg font-bold leading-tight tracking-[-0.015em]">
                        {{ __('Update Password') }}
                    </h3>
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
            </div>

            {{-- <!-- Delete Account -->
            <div class="rounded-lg border border-[#d0dbe7] p-6">
                <header>
                    <h3 class="text-[#0e141b] text-lg font-bold leading-tight tracking-[-0.015em]">
                        {{ __('Delete Account') }}
                    </h3>
                    <p class="mt-2 text-[#0e141b] text-base font-normal leading-normal">
                        {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
                    </p>
                </header>

                <!-- Delete Account Trigger -->
                <div class="mt-6">
                    <button type="button" x-data=""
                        x-on:click="$dispatch('open-user-deletion-modal')"
                        class="flex min-w-[84px] max-w-[200px] cursor-pointer items-center justify-center rounded-lg h-10 px-4 bg-[#dc2626] text-white text-sm font-bold leading-normal tracking-[0.015em]">
                        <span class="truncate">{{ __('Delete Account') }}</span>
                    </button>
                </div>

                <!-- Delete Account Modal -->
                <div x-data="{ showModal: false }" x-show="showModal"
                    x-on:open-user-deletion-modal.window="showModal = true; console.log('Delete modal opened')"
                    x-on:close-user-deletion-modal.window="showModal = false"
                    class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50" x-transition>
                    <div class="bg-white rounded-lg p-6 max-w-[480px] w-full">
                        <form method="POST" action="{{ route('profile.destroy') }}" class="flex flex-col gap-4">
                            @csrf
                            @method('DELETE')

                            <h3 class="text-[#0e141b] text-lg font-bold leading-tight tracking-[-0.015em]">
                                {{ __('Are you sure you want to delete your account?') }}
                            </h3>
                            <p class="text-[#0e141b] text-sm font-normal leading-normal">
                                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
                            </p>

                            <div class="flex flex-col gap-2">
                                <label for="password" class="sr-only">{{ __('Password') }}</label>
                                <input type="password" id="password" name="password"
                                    class="rounded-lg border border-[#d0dbe7] px-3 py-2 text-[#0e141b] text-sm focus:outline-none focus:ring-2 focus:ring-[#1978e5]"
                                    placeholder="Enter your password">
                                @error('password', 'userDeletion')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="flex justify-end gap-4">
                                <button type="button" x-on:click="$dispatch('close-user-deletion-modal')"
                                    class="flex min-w-[84px] max-w-[200px] cursor-pointer items-center justify-center rounded-lg h-10 px-4 bg-[#4e7097] text-white text-sm font-bold leading-normal tracking-[0.015em]">
                                    <span class="truncate">{{ __('Cancel') }}</span>
                                </button>
                                <button type="submit"
                                    class="flex min-w-[84px] max-w-[200px] cursor-pointer items-center justify-center rounded-lg h-10 px-4 bg-[#dc2626] text-white text-sm font-bold leading-normal tracking-[0.015em]">
                                    <span class="truncate">{{ __('Delete Account') }}</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>


</x-app-layout>
