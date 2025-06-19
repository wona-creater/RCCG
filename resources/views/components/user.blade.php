<!-- If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link rel="stylesheet" as="style" onload="this.rel='stylesheet'"
        href="https://fonts.googleapis.com/css2?display=swap&family=Inter:wght@400;500;700;900&family=Noto+Sans:wght@400;500;700;900" />
    <title>Hac-Wallet</title>
    <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64," />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <style>
        Prevent body scrolling when sidebar is open body.sidebar-open {
            overflow: hidden;
        }
    </style>
    <style>
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            align-items: center;
            justify-content: center;
            z-index: 1000;
            overflow-y: auto;
            padding: 16px;
        }

        .modal-content {
            background: white;
            padding: 24px;
            border-radius: 8px;
            max-width: 500px;
            width: 100%;
            max-height: 90vh;
            overflow-y: auto;
            box-sizing: border-box;
        }

        .copy-btn {
            margin-left: 8px;
            padding: 2px 8px;
            background: #e7edf3;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
        }

        @media (max-width: 640px) {
            .modal-content {
                padding: 16px;
                max-height: 80vh;
            }

            .copy-btn {
                font-size: 12px;
                padding: 2px 6px;
            }
        }
    </style>
</head>

<body>
    <div class="relative flex size-full min-h-screen flex-col bg-slate-50 group/design-root overflow-x-hidden"
        style='font-family: Inter, "Noto Sans", sans-serif;'>
        <div class="layout-container flex h-full grow flex-col">
            <!-- Hamburger Menu for Mobile -->
            <div class="flex items-center justify-between px-6 py-4 md:hidden">
                <h1 class="text-[#0e141b] text-base font-medium leading-normal">Hac-Wallet</h1>
                <button id="menu-toggle" class="text-[#0e141b]" aria-label="Toggle menu" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        viewBox="0 0 256 256">
                        <path
                            d="M224,128a8,8,0,0,1-8,8H40a8,8,0,0,1,0-16H216A8,8,0,0,1,224,128ZM40,72H216a8,8,0,0,0,0-16H40a8,8,0,0,0,0,16ZM216,184H40a8,8,0,0,0,0,16H216a8,8,0,0,0,0-16Z">
                        </path>
                    </svg>
                </button>
            </div>

            <div class="flex flex-col md:flex-row gap-1 px-6 flex-1 justify-center py-5">

                <!-- Sidebar -->
                <div id="sidebar"
                    class="layout-content-container flex flex-col w-4/5 md:w-80 fixed inset-y-0 left-0 bg-slate-50 transform -translate-x-full md:translate-x-0 transition-transform duration-300 ease-in-out z-50 md:static md:flex"
                    aria-hidden="true">
                    <div class="flex h-full min-h-[700px] flex-col justify-between bg-slate-50 p-4">
                        <div class="flex flex-col gap-4">
                            <h1 class="text-[#0e141b] text-base font-medium leading-normal hidden md:block">Hacwallet
                            </h1>
                            <nav class="flex flex-col gap-2" aria-label="Main navigation">
                                <a href="{{ route('dashboard') }}"
                                    class="flex items-center gap-3 px-3 py-2 rounded-lg bg-[#e7edf3]"
                                    aria-current="page">
                                    <div class="text-[#0e141b]" data-icon="House" data-size="24px" data-weight="fill">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                            fill="currentColor" viewBox="0 0 256 256">
                                            <path
                                                d="M224,115.55V208a16,16,0,0,1-16,16H168a16,16,0,0,1-16-16V168a8,8,0,0,0-8-8H112a8,8,0,0,0-8,8v40a16,16,0,0,1-16,16H48a16,16,0,0,1-16-16V115.55a16,16,0,0,1,5.17-11.78l80-75.48.11-.11a16,16,0,0,1,21.53,0,1.14,1.14,0,0,0,.11.11l80,75.48A16,16,0,0,1,224,115.55Z">
                                            </path>
                                        </svg>
                                    </div>
                                    <p class="text-[#0e141b] text-sm font-medium leading-normal">Dashboard</p>
                                </a>
                                <a href="{{ route('user.sendmail') }}"
                                    class="flex items-center gap-3 px-3 py-2 hover:bg-[#e7edf3] rounded-lg">
                                    <div class="text-[#0e141b]" data-icon="Envelope" data-size="24px"
                                        data-weight="regular">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                            fill="currentColor" viewBox="0 0 256 256">
                                            <path
                                                d="M224,48H32a8,8,0,0,0-8,8V192a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V56A8,8,0,0,0,224,48Zm-96,85.15L52.57,64H203.43ZM98.71,128,40,181.81V74.19Zm11.84,10.85,12,11.05a8,8,0,0,0,10.82,0l12-11.05,58,53.15H52.57ZM157.29,128,216,74.18V181.82Z">
                                            </path>
                                        </svg>
                                    </div>
                                    <p class="text-[#0e141b] text-sm font-medium leading-normal">Send Mail</p>
                                </a>
                                <a href="{{ route('user.subscribe') }}"
                                    class="flex items-center gap-3 px-3 py-2 hover:bg-[#e7edf3] rounded-lg">
                                    <div class="text-[#0e141b]" data-icon="Users" data-size="24px"
                                        data-weight="regular">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                            fill="currentColor" viewBox="0 0 256 256">
                                            <path
                                                d="M117.25,157.92a60,60,0,1,0-66.5,0A95.83,95.83,0,0,0,3.53,195.63a8,8,0,1,0,13.4,8.74,80,80,0,1,1,134.14,0,8,8,0,0,0,13.4-8.74A95.83,95.83,0,0,0,117.25,157.92ZM40,108a44,44,0,1,1,44,44A44.05,44.05,0,0,1,40,108Zm210.14,98.7a8,8,0,0,1-11.07-2.33A79.83,79.83,0,0,0,172,168a8,8,0,0,1,0-16,44,44,0,1,0-16.34-84.87,8,8,0,1,1-5.94-14.85,60,60,0,0,1,55.53,105.64,95.83,95.83,0,0,1,47.22,37.71A8,8,0,0,1,250.14,206.7Z">
                                            </path>
                                        </svg>
                                    </div>
                                    <p class="text-[#0e141b] text-sm font-medium leading-normal">Subscribe</p>
                                </a>
                                <a href="{{ route('user.raids') }}"
                                    class="flex items-center gap-3 px-3 py-2 hover:bg-[#e7edf3] rounded-lg">
                                    <div class="text-[#0e141b]" data-icon="Megaphone" data-size="24px"
                                        data-weight="regular">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                            fill="currentColor" viewBox="0 0 256 256">
                                            <path
                                                d="M240,120a48.05,48.05,0,0,0-48-48H152.2c-2.91-.17-53.62-3.74-101.91-44.24A16,16,0,0,0,24,40V200a16,16,0,0,0,26.29,12.25c37.77-31.68,77-40.76,93.71-43.3v31.72A16,16,0,0,0,151.12,214l11,7.33A16,16,0,0,0,186.5,212l11.77-44.36A48.07,48.07,0,0,0,240,120ZM40,199.93V40h0c42.81,35.91,86.63,45,104,47.24v65.48C126.65,155,82.84,164.07,40,199.93Zm131,8,0,.11-11-7.33V168h21.6ZM192,152H160V88h32a32,32,0,1,1,0,64Z">
                                            </path>
                                        </svg>
                                    </div>
                                    <p class="text-[#0e141b] text-sm font-medium leading-normal">Raids</p>
                                </a>
                                <a href="{{ route('profile.edit') }}"
                                    class="flex items-center gap-3 px-3 py-2 hover:bg-[#e7edf3] rounded-lg">
                                    <div class="text-[#0e141b]" data-icon="User" data-size="24px" data-weight="regular">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                            fill="currentColor" viewBox="0 0 256 256">
                                            <path
                                                d="M230.92,212c-15.23-26.33-38.7-45.21-66.09-54.16a72,72,0,1,0-73.66,0C63.78,166.78,40.31,185.66,25.08,212a8,8,0,1,0,13.85,8c18.84-32.56,52.14-52,89.07-52s70.23,19.44,89.07,52a8,8,0,1,0,13.85-8ZM72,96a56,56,0,1,1,56,56A56.06,56.06,0,0,1,72,96Z">
                                            </path>
                                        </svg>
                                    </div>
                                    <p class="text-[#0e141b] text-sm font-medium leading-normal">Profile</p>
                                </a>
                                <form action="{{ route('logout') }}" method="POST"
                                    class="flex items-center gap-3 px-3 py-2 hover:bg-[#e7edf3] rounded-lg">
                                    @csrf
                                    <button type="submit" class="flex items-center gap-3 w-full text-left">
                                        <div class="text-[#0e141b]" data-icon="SignOut" data-size="24px"
                                            data-weight="regular">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                fill="currentColor" viewBox="0 0 256 256">
                                                <path
                                                    d="M112,216a8,8,0,0,1-8,8H48a16,16,0,0,1-16-16V48A16,16,0,0,1,48,32H104a8,8,0,0,1,0,16H48V208h56A8,8,0,0,1,112,216Zm110.39-92.94a8,8,0,0,1-2.08,5.52L188.94,160H120a8,8,0,0,1,0-16h68.94l31.37-31.38a8,8,0,0,1,7.78-2.08,8.08,8.08,0,0,1,5.66,5.66Z">
                                                </path>
                                            </svg>
                                        </div>
                                        <p class="text-[#0e141b] text-sm font-medium leading-normal">Logout</p>
                                    </button>
                                </form>
                            </nav>
                        </div>
                    </div>
                </div>

                <script>
                    const menuToggle = document.getElementById('menu-toggle');
                    const sidebar = document.getElementById('sidebar');

                    menuToggle.addEventListener('click', () => {
                        const isOpen = sidebar.classList.contains('-translate-x-full');
                        sidebar.classList.toggle('-translate-x-full');
                        document.body.classList.toggle('sidebar-open');
                        menuToggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
                        sidebar.setAttribute('aria-hidden', isOpen ? 'false' : 'true');
                    });

                    // Close sidebar when clicking outside on mobile
                    document.addEventListener('click', (e) => {
                        if (window.innerWidth < 768 && !sidebar.contains(e.target) && !menuToggle.contains(e.target)) {
                            sidebar.classList.add('-translate-x-full');
                            document.body.classList.remove('sidebar-open');
                            menuToggle.setAttribute('aria-expanded', 'false');
                            sidebar.setAttribute('aria-hidden', 'true');
                        }
                    });

                    // Close sidebar when clicking a navigation link on mobile
                    const navLinks = document.querySelectorAll('#sidebar a');
                    navLinks.forEach(link => {
                        link.addEventListener('click', () => {
                            if (window.innerWidth < 768) {
                                sidebar.classList.add('-translate-x-full');
                                document.body.classList.remove('sidebar-open');
                                menuToggle.setAttribute('aria-expanded', 'false');
                                sidebar.setAttribute('aria-hidden', 'true');
                            }
                        });
                    });
                </script>
</body>

</html>
