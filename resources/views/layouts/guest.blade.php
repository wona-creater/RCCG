<html>

<head>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?display=swap&family=Inter:wght@400;500;700;900&family=Noto+Sans:wght@400;500;700;900" />
    <title>Hacwallet</title>
    <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64," />
    <style>
        body {
            margin: 0;
            font-family: Inter, "Noto Sans", sans-serif;
            background-color: #f7fafc;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .layout-container {
            display: flex;
            flex-direction: column;
            width: 100%;
            max-width: 960px;
            margin: 0 auto;
            padding: 20px;
            box-sizing: border-box;
            flex-grow: 1;
        }

        header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid #e7edf4;
            padding: 12px 20px;
            background-color: #fff;
        }

        .logo-container {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .logo {
            width: 24px;
            height: 24px;
        }

        .logo-text {
            color: #0d141c;
            font-size: 20px;
            font-weight: bold;
        }

        .nav-menu {
            display: flex;
            align-items: center;
            gap: 24px;
        }

        .nav-menu a {
            color: #0d141c;
            font-size: 14px;
            font-weight: 500;
            text-decoration: none;
        }

        .nav-menu a:hover {
            color: #0c7ff2;
        }

        .nav-buttons {
            display: flex;
            gap: 8px;
        }

        .btn {
            padding: 10px 16px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: bold;
            text-align: center;
            cursor: pointer;
            min-width: 84px;
        }

        .btn-primary {
            background-color: #0c7ff2;
            color: #fff;
        }

        .btn-primary:hover {
            background-color: #0960c0;
        }

        .btn-secondary {
            background-color: #e7edf4;
            color: #0d141c;
        }

        .btn-secondary:hover {
            background-color: #d1d9e6;
        }

        .hamburger {
            display: none;
            font-size: 24px;
            cursor: pointer;
            color: #0d141c;
        }

        .hero {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 400px;
            background: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.4)), url("https://lh3.googleusercontent.com/aida-public/AB6AXuA4G0zDdaboRiaZR5laQx2jgZDmS7h1rCx5sh8ZN_NsAbGEnfaqSkmHWzTgD0L9MeV5k2p9AhmuG_xCcga5b6O15fFPkbKpFAuFNLrZsUwxAp-poXoi6WIEP9bQd3WpJ25jO09J7HvXQ3JXs9iMbuXH98svzJOc2E24gYc2xdBewwYtH-7A7famQBa6sLtIP6ESzdIiawVFa_KrgJYAM6mVDQGJeEfCmdqVCoWX9LHnV0fhhZEj4kUIY6bmDItkwL8g8ksHEccyYQ");
            background-size: cover;
            background-position: center;
            padding: 20px;
            border-radius: 8px;
            margin: 16px 0;
            text-align: center;
        }

        .hero h1 {
            color: #fff;
            font-size: 36px;
            font-weight: 900;
            margin-bottom: 12px;
        }

        .hero p {
            color: #fff;
            font-size: 16px;
            font-weight: normal;
            max-width: 600px;
            margin-bottom: 20px;
        }

        .features-section {
            padding: 40px 16px;
        }

        .features-section h1 {
            color: #0d141c;
            font-size: 32px;
            font-weight: bold;
            margin-bottom: 12px;
        }

        .features-section p {
            color: #0d141c;
            font-size: 16px;
            max-width: 720px;
            margin-bottom: 24px;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 16px;
        }

        .feature-card {
            display: flex;
            flex-direction: column;
            gap: 8px;
            padding: 16px;
            border: 1px solid #cedbe8;
            border-radius: 8px;
            background-color: #f7fafc;
        }

        .feature-card svg {
            width: 24px;
            height: 24px;
        }

        .feature-card h2 {
            color: #0d141c;
            font-size: 16px;
            font-weight: bold;
        }

        .feature-card p {
            color: #49739c;
            font-size: 14px;
            margin: 0;
        }

        .testimonials-section {
            padding: 20px 16px;
        }

        .testimonials-section h2 {
            color: #0d141c;
            font-size: 22px;
            font-weight: bold;
            margin-bottom: 24px;
        }

        .testimonial {
            display: flex;
            flex-direction: column;
            gap: 12px;
            padding: 16px;
            background-color: #f7fafc;
        }

        .testimonial-header {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .testimonial-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-size: cover;
            background-position: center;
        }

        .testimonial-info p {
            margin: 0;
        }

        .testimonial-name {
            color: #0d141c;
            font-size: 16px;
            font-weight: 500;
        }

        .testimonial-date {
            color: #49739c;
            font-size: 14px;
        }

        .stars {
            display: flex;
            gap: 2px;
        }

        .stars svg {
            width: 20px;
            height: 20px;
        }

        .testimonial p {
            color: #0d141c;
            font-size: 16px;
            margin: 0;
        }

        .feedback-buttons {
            display: flex;
            gap: 24px;
        }

        .feedback-buttons button {
            display: flex;
            align-items: center;
            gap: 8px;
            background: none;
            border: none;
            color: #49739c;
            font-size: 14px;
            cursor: pointer;
        }

        .feedback-buttons svg {
            width: 20px;
            height: 20px;
        }

        footer {
            padding: 40px 16px;
            text-align: center;
        }

        .footer-links {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 24px;
            margin-bottom: 16px;
        }

        .footer-links a {
            color: #49739c;
            font-size: 16px;
            text-decoration: none;
        }

        .footer-links a:hover {
            color: #0c7ff2;
        }

        .footer-text {
            color: #49739c;
            font-size: 16px;
        }

        /* Hamburger Menu */
        .nav-menu {
            display: flex;
        }

        .hamburger {
            display: none;
        }

        .nav-menu.active {
            display: flex;
            flex-direction: column;
            position: absolute;
            top: 60px;
            left: 0;
            width: 100%;
            background-color: #fff;
            padding: 16px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }

        .nav-menu.active a,
        .nav-menu.active .nav-buttons {
            margin: 8px 0;
        }

        /* Small devices (phones, <640px) */
        @media (max-width: 639px) {
            .layout-container {
                padding: 8px;
            }

            header {
                padding: 8px 12px;
            }

            .logo-text {
                font-size: 16px;
            }

            .logo {
                width: 20px;
                height: 20px;
            }

            .hamburger {
                display: block;
            }

            .nav-menu {
                display: none;
            }

            .nav-menu.active {
                display: flex;
            }

            .hero {
                min-height: 300px;
                padding: 12px;
            }

            .hero h1 {
                font-size: 24px;
            }

            .hero p {
                font-size: 14px;
            }

            .btn-primary {
                padding: 8px 12px;
                font-size: 12px;
            }

            .features-section {
                padding: 20px 8px;
            }

            .features-section h1 {
                font-size: 24px;
            }

            .features-section p {
                font-size: 14px;
            }

            .feature-card {
                padding: 12px;
            }

            .feature-card h2 {
                font-size: 14px;
            }

            .feature-card p {
                font-size: 12px;
            }

            .testimonials-section {
                padding: 12px 8px;
            }

            .testimonials-section h2 {
                font-size: 18px;
            }

            .testimonial {
                padding: 12px;
            }

            .testimonial-name {
                font-size: 14px;
            }

            .testimonial-date {
                font-size: 12px;
            }

            .testimonial p {
                font-size: 14px;
            }

            .footer-links a,
            .footer-text {
                font-size: 14px;
            }
        }

        /* Medium devices (tablets, 640px - 1023px) */
        @media (min-width: 640px) and (max-width: 1023px) {
            .layout-container {
                padding: 16px;
            }

            .hero h1 {
                font-size: 32px;
            }

            .hero p {
                font-size: 15px;
            }

            .features-section h1 {
                font-size: 28px;
            }

            .features-section p {
                font-size: 15px;
            }

            .testimonials-section h2 {
                font-size: 20px;
            }
        }

        /* Large devices (desktops, >=1024px) */
        @media (min-width: 1024px) {
            .layout-container {
                padding: 40px;
            }
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const hamburger = document.querySelector('.hamburger');
            const navMenu = document.querySelector('.nav-menu');
            hamburger.addEventListener('click', () => {
                navMenu.classList.toggle('active');
                hamburger.textContent = navMenu.classList.contains('active') ? '✕' : '☰';
            });
        });
    </script>
</head>

<body>
    <div class="layout-container">
        <header>
            <div class="logo-container">
                <svg class="logo" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M36.7273 44C33.9891 44 31.6043 39.8386 30.3636 33.69C29.123 39.8386 26.7382 44 24 44C21.2618 44 18.877 39.8386 17.6364 33.69C16.3957 39.8386 14.0109 44 11.2727 44C7.25611 44 4 35.0457 4 24C4 12.9543 7.25611 4 11.2727 4C14.0109 4 16.3957 8.16144 17.6364 14.31C18.877 8.16144 21.2618 4 24 4C26.7382 4 29.123 8.16144 30.3636 14.31C31.6043 8.16144 33.9891 4 36.7273 4C40.7439 4 44 12.9543 44 24C44 35.0457 40.7439 44 36.7273 44Z"
                        fill="currentColor"></path>
                </svg>
                <h2 class="logo-text">EmailPro</h2>
            </div>
            <div class="hamburger">☰</div>
            <div class="nav-menu">
                <a href="#">Features</a>
                <a href="#">Pricing</a>
                <a href="#">Support</a>
                <div class="nav-buttons">

                    <a href="{{ route('register')}}"> <button class="btn btn-primary">Sign Up</button> </a>


                    <a href="{{ route('login')}}">   <button class="btn btn-secondary">Log In</button></a>
                </div>
            </div>
        </header>
        {{ $slot }}

        <footer>

            <p class="footer-text"> All rights reserved.</p>
        </footer>
    </div>
</body>

</html>
