<html>

<head>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?display=swap&family=Noto+Sans:wght@400;500;700;900&family=Plus+Jakarta+Sans:wght@400;500;700;800" />
    <title>Hac-Wallet Login</title>
    <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64," />
    <style>
        body {
            margin: 0;
            font-family: "Plus Jakarta Sans", "Noto Sans", sans-serif;
            background-color: #fff;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .layout-container {
            display: flex;
            flex-direction: column;
            width: 100%;
            max-width: 960px;
            margin: 0 auto;
            padding: 20px;
            box-sizing: border-box;
        }

        .layout-content-container {
            display: flex;
            flex-direction: column;
            width: 100%;
            max-width: 512px;
            margin: 0 auto;
            padding: 20px 0;
        }

        h2 {
            color: #141414;
            font-size: 28px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 12px;
            padding: 20px 16px 12px;
        }

        .form-group {
            padding: 12px 16px;
            width: 100%;
            box-sizing: border-box;
        }

        label {
            display: flex;
            flex-direction: column;
            width: 100%;
        }

        label p {
            color: #141414;
            font-size: 16px;
            font-weight: 500;
            margin-bottom: 8px;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            height: 56px;
            padding: 15px;
            border: 1px solid #e0e0e0;
            border-radius: 12px;
            font-size: 16px;
            color: #141414;
            background-color: #fff;
            box-sizing: border-box;
        }

        input[type="email"]::placeholder,
        input[type="password"]::placeholder {
            color: #757575;
        }

        input[type="email"]:focus,
        input[type="password"]:focus {
            outline: none;
            border-color: #e0e0e0;
        }

        .error-message {
            color: red;
            font-size: 14px;
            margin-top: 8px;
            padding: 0 16px;
        }

        .remember-me {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 16px;
            height: 56px;
        }

        .remember-me p {
            color: #141414;
            font-size: 16px;
            font-weight: 400;
            flex: 1;
        }

        input[type="checkbox"] {
            width: 20px;
            height: 20px;
            border: 2px solid #e0e0e0;
            border-radius: 4px;
            background-color: transparent;
            appearance: none;
            cursor: pointer;
        }

        input[type="checkbox"]:checked {
            background-color: #000;
            border-color: #000;
            background-image: url('data:image/svg+xml,%3csvg viewBox=%270 0 16 16%27 fill=%27rgb(255,255,255)%27 xmlns=%27http://www.w3.org/2000/svg%27%3e%3cpath d=%27M12.207 4.793a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0l-2-2a1 1 0 011.414-1.414L6.5 9.086l4.293-4.293a1 1 0 011.414 0z%27/%3e%3c/svg%3e');
            background-size: 16px;
            background-repeat: no-repeat;
            background-position: center;
        }

        button {
            width: 100%;
            height: 40px;
            background-color: #000;
            color: #fff;
            font-size: 14px;
            font-weight: bold;
            border: none;
            border-radius: 12px;
            cursor: pointer;
            margin: 12px 16px;
            text-align: center;
        }

        button:hover {
            background-color: #333;
        }

        a {
            text-decoration: underline;
            color: #757575;
            font-size: 14px;
            text-align: center;
            display: block;
            padding: 8px 16px;
        }

        a:hover {
            color: #555;
        }

        /* Small devices (phones, <640px) */
        @media (max-width: 639px) {
            .layout-container {
                padding: 8px;
            }

            h2 {
                font-size: 20px;
                padding: 12px 8px 6px;
                margin-bottom: 8px;
            }

            .layout-content-container {
                max-width: 100%;
                padding: 8px 0;
            }

            input[type="email"],
            input[type="password"] {
                height: 44px;
                font-size: 13px;
                padding: 10px;
                border-radius8px;
            }

            button {
                height: 36px;
                font-size: 12px;
                margin: 6px 8px;
            }

            .form-group {
                padding: 6px 8px;
            }

            .remember-me {
                padding: 0 8px;
                height: 44px;
            }

            .remember-me p {
                font-size: 14px;
            }

            input[type="checkbox"] {
                width: 18px;
                height: 18px;
            }

            .error-message {
                font-size: 12px;
                margin-top: 6px;
                padding: 0 8px;
            }

            a {
                font-size: 12px;
                padding: 6px 8px;
            }
        }

        /* Medium devices (tablets, 640px - 1023px) */
        @media (min-width: 640px) and (max-width: 1023px) {
            .layout-container {
                padding: 24px;
            }

            h2 {
                font-size: 26px;
            }

            .layout-content-container {
                max-width: 480px;
            }

            input[type="email"],
            input[type="password"] {
                height: 52px;
                font-size: 15px;
            }

            button {
                height: 38px;
                margin: 10px 14px;
            }

            .form-group {
                padding: 10px 14px;
            }
        }

        /* Large devices (desktops, >=1024px) */
        @media (min-width: 1024px) {
            .layout-container {
                padding: 40px;
            }

            .layout-content-container {
                max-width: 512px;
            }
        }
    </style>
</head>

<body>
    <div class="layout-container">
        <div class="layout-content-container">
            <h2>Welcome back</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <x-auth-session-status class="mb-4" :status="session('status')" />
                <div class="form-group">
                    <label>
                        <p>Email</p>
                        <input placeholder="Email" type="email" name="email" :value="old('email')" required
                            autofocus autocomplete="username" />
                    </label>
                    <x-input-error :messages="$errors->get('email')" class="error-message" />
                </div>
                <div class="form-group">
                    <label>
                        <p>Password</p>
                        <input placeholder="Password" type="password" name="password" required
                            autocomplete="current-password" />
                    </label>
                    <x-input-error :messages="$errors->get('password')" class="error-message" />
                </div>
                <div class="remember-me">
                    <p>Remember me</p>
                    <input type="checkbox" name="remember" />
                </div>
                <button type="submit">Login</button>
                <a href="{{ route('register') }}">Don't have an account? Sign up</a>
                <a href="{{ route('password.request') }}">Forgot your Password?</a>
            </form>
        </div>
    </div>
</body>

</html>
