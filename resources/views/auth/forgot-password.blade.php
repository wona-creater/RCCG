<html>
<head>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?display=swap&family=Noto+Sans:wght@400;500;700;900&family=Plus+Jakarta+Sans:wght@400;500;700;800" />
    <title>Hac-Wallet Forget-password</title>
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
        .description {
            color: #141414;
            font-size: 16px;
            font-weight: normal;
            text-align: center;
            padding: 8px 16px;
            margin-bottom: 12px;
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
        input[type="email"] {
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
        input[type="email"]::placeholder {
            color: #757575;
        }
        input[type="email"]:focus {
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
            .description {
                font-size: 14px;
                padding: 6px 8px;
            }
            .layout-content-container {
                max-width: 100%;
                padding: 8px 0;
            }
            input[type="email"] {
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
            .description {
                font-size: 15px;
            }
            .layout-content-container {
                max-width: 480px;
            }
            input[type="email"] {
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
            <h2>Forgot your password?</h2>
            <p class="description">
                Enter the email address associated with your account and we'll send you a link to reset your password.
            </p>
            <x-auth-session-status class="mb-4" :status="session('status')" />
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="form-group">
                    <label>
                        <input placeholder="Email" type="email" name="email" :value="old('email')" required autofocus />
                    </label>
                    <x-input-error :messages="$errors->get('email')" class="error-message" />
                </div>
                <button type="submit">Submit</button>
            </form>
            <a href="{{ route('login') }}">Back to login</a>
        </div>
    </div>
</body>
</html>
