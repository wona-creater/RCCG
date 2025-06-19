<html>
<head>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?display=swap&family=Noto+Sans:wght@400;500;700;900&family=Plus+Jakarta+Sans:wght@400;500;700;800" />
    <title>Hac-Wallet Register</title>
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
        input[type="text"], input[type="email"], input[type="password"] {
            width: 100%;
            height: 56px;
            padding: 16px;
            border: none;
            border-radius: 12px;
            font-size: 16px;
            color: #141414;
            background-color: #f2f2f2;
            box-sizing: border-box;
        }
        input[type="text"]::placeholder, input[type="email"]::placeholder, input[type="password"]::placeholder {
            color: #757575;
        }
        input[type="text"]:focus, input[type="email"]:focus, input[type="password"]:focus {
            outline: none;
            background-color: #f2f2f2;
        }
        .error-message {
            color: red;
            font-size: 14px;
            margin-top: 8px;
            padding: 0 16px;
        }
        button {
            width: 100%;
            height: 48px;
            background-color: #000;
            color: #fff;
            font-size: 16px;
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
            text-decoration: none;
            color: #757575;
            font-size: 14px;
            text-align: center;
            display: block;
            padding: 8px 16px;
        }
        a p:last-child {
            text-decoration: underline;
        }
        a:hover p {
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
            input[type="text"], input[type="email"], input[type="password"] {
                height: 44px;
                font-size: 13px;
                padding: 10px;
                border-radius: 8px;
            }
            button {
                height: 36px;
                font-size: 12px;
                margin: 6px 8px;
            }
            .form-group {
                padding: 6px 8px;
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
            input[type="text"], input[type="email"], input[type="password"] {
                height: 52px;
                font-size: 15px;
            }
            button {
                height: 44px;
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
            <h2>Create your account</h2>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <label>
                        <input placeholder="Name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    </label>
                    <x-input-error :messages="$errors->get('name')" class="error-message" />
                </div>
                <div class="form-group">
                    <label>
                        <input placeholder="Email address" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    </label>
                    <x-input-error :messages="$errors->get('email')" class="error-message" />
                </div>
                <div class="form-group">
                    <label>
                        <input placeholder="Password" type="password" name="password" required autocomplete="new-password" />
                    </label>
                    <x-input-error :messages="$errors->get('password')" class="error-message" />
                </div>
                <div class="form-group">
                    <label>
                        <input placeholder="Confirm password" type="password" name="password_confirmation" required autocomplete="new-password" />
                    </label>
                    <x-input-error :messages="$errors->get('password_confirmation')" class="error-message" />
                </div>
                <button type="submit">Register</button>
                <a href="{{ route('login') }}">
                    <p>Already have an account?</p>
                    <p>Log in</p>
                </a>
            </form>
        </div>
    </div>
</body>
</html>
