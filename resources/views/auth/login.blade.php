<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('assets/web/images/navbar_logo.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/web/style/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>NOON O KABAB</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");
        @import url('https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400..700;1,400..700&display=swap');

        * {
            box-sizing: border-box;
        }

        :root {
            --Seized-Future-Regular: "Seized-Future-Regular";
            --PlayfairDisplay-Bold: "PlayfairDisplay-Bold";
        }

        @font-face {
            font-family: "Seized-Future-Regular";
            src: url('{{ asset('assets/web/fonts/Seized-Future/Seized-Future-Regular/Seized Future Regular.ttf Future Regular.ttf') }}');
        }

        @font-face {
            font-family: "PlayfairDisplay-Bold";
            src: url('{{ asset('assets/web/fonts/PlayfairDisplay-Black.ttf') }}');
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            font-family: "Poppins";
            position: relative;
            background-image: url('{{ asset('assets/web/images/login-bg-img.png') }}');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            margin: 0;
            padding: 50px 0;
            min-height: 100vh;
        }

        .login-logo {
            height: 80px;
            width: 80px;
        }

        h1 {
            margin: 0;
            font-size: 55px;
            color: #202020;
            font-family: var(--PlayfairDisplay-Bold);
            line-height: 1.5;
            margin-bottom: 40px;
        }

        h2.login-main-title {
            text-align: center;
            font-size: 90px;
            color: #2F2F2F;
            margin: 0 0 90px;
            text-transform: capitalize;
            font-family: "Cabin", sans-serif;
        }

        p {
            font-size: 20px;
            font-weight: 400;
            line-height: 30px;
            letter-spacing: 0.5px;
            margin: 20px 0 0px;
        }

        span {
            font-size: 12px;
        }

        h1.explorer-margin {
            margin-bottom: 0;
        }

        a {
            color: white;
            font-size: 18px;
            text-decoration: none;
            margin: 15px 0;
        }

        .flex-btns {
            display: flex;
            justify-content: center;
            z-index: 9999;
            position: relative;
            top: -58px;
            width: fit-content;
            border-radius: 20px 20px 0px 0px;
            overflow: hidden;
            left: 50%;
            transform: translateX(-47.8%);
            background-color: #F2F2F2;
        }

        .submit-color {
            background: #4C719E !important;
            border-radius: 50px;
            color: #E3B332;
            margin-top: 40px;
            max-width: 230px;
            width: 100%;
            padding: 17px 15px;
        }

        button {
            border: none;
            background: #2d3447 !important;
            color: #ffffff;
            font-weight: 500;
            padding: 17px 80px;
            letter-spacing: 1px;
            text-transform: uppercase;
            transition: transform 80ms ease-in;
            font-size: 18px;
            line-height: 27px;
            cursor: pointer;
            border-radius: 20px 20px 0 0;
        }

        .ghost.grey-color {
            background: #f2f2f2 !important;
            color: black;
        }

        .ghost.black.black-color {
            background: #2d3447 !important;
            color: white;
        }

        .ghost.active {
            background: black !important;
        }

        button:focus {
            outline: none;
        }



        form {
            background-color: #F2F2F2;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 50px;
            height: 100%;
            text-align: center;
            border-radius: 50px 0 0 50px;
        }

        .container {
            background-color: transparent;
            border-radius: 14px;
            box-shadow: 0 34px 48px 10px rgb(0 0 0 / 22%);
            position: relative;
            width: 1018px;
            max-width: 100%;
            min-height: 600px;
            border-radius: 50px;
        }

        .container.right-panel-active form {
            border-radius: 0px 50px 50px 0px;
        }

        .container.right-panel-active .overlay-container {
            border-radius: 50px 0px 0px 50px;
        }

        .form-container {
            position: absolute;
            top: 0;
            height: 100%;
            transition: all 0.6s ease-in-out;
        }

        .sign-in-container {
            left: 0;
            width: 50%;
            z-index: 2;
        }

        .container.right-panel-active .sign-in-container {
            transform: translateX(100%);
        }

        .sign-up-container {
            left: 0;
            width: 50%;
            opacity: 0;
            z-index: 1;
        }

        .container.right-panel-active .sign-up-container {
            transform: translateX(100%);
            opacity: 1;
            z-index: 5;
            animation: show 0.6s;
        }

        @keyframes show {

            0%,
            49.99% {
                opacity: 0;
                z-index: 1;
            }

            50%,
            100% {
                opacity: 1;
                z-index: 5;
            }
        }

        .overlay-container {
            position: absolute;
            top: 0;
            left: 50%;
            width: 50%;
            height: 100%;
            overflow: hidden;
            transition: transform 0.6s ease-in-out;
            z-index: 100;
            border-radius: 0px 50px 50px 0px;
        }

        .container.right-panel-active .overlay-container {
            transform: translateX(-100%);
        }

        .overlay {
            background: #2D3447;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 0 0;
            color: #ffffff;
            position: relative;
            left: -100%;
            height: 100%;
            width: 200%;
            transform: translateX(0);
            transition: transform 0.6s ease-in-out;
        }

        .container.right-panel-active .overlay {
            transform: translateX(50%);
        }

        .overlay-panel {
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 40px;
            text-align: center;
            top: 0;
            height: 100%;
            width: 50%;
            transform: translateX(0);
            transition: transform 0.6s ease-in-out;
        }

        .overlay-left {
            transform: translateX(-20%);
        }

        .container.right-panel-active .overlay-left {
            transform: translateX(0);
        }

        .overlay-right {
            right: 0;
            transform: translateX(0);
        }

        .container.right-panel-active .overlay-right {
            transform: translateX(20%);
        }

        .social-container {
            margin: 13px 0 3px;
        }

        .social-container a {
            border: 2px solid #E3B332;
            border-radius: 50%;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            margin: 0 5px;
            height: 40px;
            width: 40px;
            color: #E3B332;
        }

        .input-fields-form {
            width: 100%;
            margin-bottom: 20px;
            padding: 11px 10px;
            border: 1px solid #e3b33296;
            background: transparent;
            outline: none;
            box-sizing: border-box;
            font-size: 18px;
            font-weight: 400;
            color: black;
            border-radius: 3px;
        }

        .input-fields-form::placeholder {
            color: #D1D1D1;
        }

        p.emailregistration {
            font-size: 20px;
            color: white;
            font-weight: 400;
            font-family: 'Poppins';
            line-height: 30px;
        }

        .ghost.black {
            background: #F2F2F2 !important;
            color: #303030;
        }

        .ghost.active {
            background: #F2F2F2 !important;
            color: black;
        }


        @media (max-width: 1600px) {
            body {
                padding: 10px 0 50px;
            }

            .flex-btns {
                transform: translateX(-48%);
            }
        }

        @media (max-width: 1440px) {
            .container {
                width: 1000px;
                min-height: 530px;
            }

            h2.login-main-title {
                font-size: 80px;
                margin: 0 0 70px;
            }
        }

        @media (max-width: 1280px) {
            h2.login-main-title {
                font-size: 75px;
                margin: 0px 0 60px;
            }

            h1 {
                font-size: 45px;
                margin-bottom: 30px;
            }
        }

        @media (max-width: 1024px) {
            .container {
                width: 750px;
                max-width: 100%;
            }

            form {
                padding: 0 20px;
            }

            .overlay-panel {
                padding: 0 20px;
            }

            .submit-color {
                max-width: 200px;
                padding: 14px 15px;
            }

            h2.login-main-title {
                font-size: 65px;
            }

            p {
                font-size: 16px;
                line-height: 20px;
                margin: 14px 0 0px;
            }

            h1 {
                font-size: 40px;
                margin-bottom: 30px;
            }

        }

        @media (max-width:991px) {
            .container.right-panel-active .sign-in-container {
                transform: translateX(0%);
            }

            .overlay-panel {
                display: none;
            }

            .sign-in-container {
                left: 0;
                width: 100%;
                z-index: 9999;
            }

            .container.right-panel-active .sign-up-container {
                transform: translateX(0%);
                opacity: 1;
                z-index: 99999;
                animation: show 0.6s;
                /* width: 100%; */
            }

            .sign-up-container {
                width: 100%;
            }

            .overlay {
                background: transparent;
            }

            .container.right-panel-active form {
                border-radius: 40px 40px 40px 40px;
            }

            form {
                border-radius: 40px 40px 40px 40px;
            }

            h2.login-main-title {
                font-size: 65px;
                margin: 0px 0 60px;
            }

            .container {
                width: 640px;
                max-width: 100%;
            }

            button {
                padding: 11px 60px;
                font-size: 14px;
            }

            .flex-btns {
                top: -48px;
            }

            .input-fields-form {
                margin-bottom: 15px;
                font-size: 15px;
            }

            .input-fields-form::placeholder {
                font-size: 15px;
            }

            .container {
                box-shadow: unset;
            }
        }

        @media (max-width: 590px) {
            .flex-btns {
                top: -42px;
            }

            .submit-color {
                max-width: 170px;
                padding: 10px 15px;
                margin-top: 25px;
            }

            button {
                padding: 8px 40px;
                font-size: 12px;
            }

            h2.login-main-title {
                font-size: 55px;
                margin: 0px 0 60px;
            }

            .container {
                width: 100%;
                max-width: 500px;
                min-height: 500px;
                padding: 0 10px;
            }
        }

        @media (max-width: 490px) {
            .container {
                width: 100%;
                max-width: 400px;
                min-height: 500px;
            }

            button {
                padding: 8px 20px;
                font-size: 12px;
                border-radius: 10px 10px 0 0;
            }

            .flex-btns {
                border-radius: 10px 10px 0px 0px;
            }
        }

        @media (max-width: 434px) {
            .container {
                width: 100%;
                max-width: 340px;
                min-height: 480px;
            }

            .login-logo {
                height: 70px;
                width: 70px;
            }

            button {
                font-size: 11px;
            }

            h1 {
                font-size: 35px;
            }

            h2.login-main-title {
                font-size: 45px;
                margin: 0px 0 50px;
            }

            .social-container a {
                height: 30px;
                width: 30px;
                font-size: 12px;
            }

            p {
                font-size: 14px;
                margin: 5px 0 0px;
            }
        }

        .input-container {
            position: relative;
            width: 100%;
        }

        .input-fields-form {
            padding-right: 30px;
            /* Space for the eye icon */
        }

        .toggle-password {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
        }
    </style>
</head>

<body>
    <a class="mt-0 mb-0" href="{{ route('index') }}">
        <img class="img-fluid login-logo" src="{{ asset('assets/web/images/noon-o-kabab-logo.png') }}" alt="">
    </a>
    <h2 class="login-main-title">Noon O Kabab</h2>
    <div class="container" id="container">
        <div class="buttons">
            <div class="flex-btns">
                <button class="ghost  grey-color" id="signIn">LOGIN</button>
                <button class="ghost black black-color" id="signUp">SIGN UP</button>
            </div>
            <div class="form-container sign-up-container">
                <form action="{{ route('register') }}" method="post">
                    @csrf
                    <h1 class="explorer-margin">Sign Up</h1>
                    <div class="social-container">
                        <a href="#" class="social"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="social"><i class="fa-brands fa-google"></i></a>
                    </div>
                    <p class="emailregistration text-black mb-3">or Create Account</p>
                    <input class="input-fields-form" type="text" name="name" placeholder="Name" />
                    @error('name')
                        <span class="text-danger mb-3" style="font-size: 14px">{{ $message }}</span>
                    @enderror
                     <input class="input-fields-form" type="text" name="phone" placeholder="phone" />
                    @error('phone')
                        <span class="text-danger mb-3" style="font-size: 14px">{{ $message }}</span>
                    @enderror
                    <input class="input-fields-form" type="email" name="email" placeholder="Email" />
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="input-container">
                        <input class="input-fields-form mb-0" name="password" type="password" id="passwordInput1"
                            placeholder="Password" />
                        <i class="toggle-password fas fa-eye" onclick="togglePasswordVisibility('passwordInput1')"></i>
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <button class="submit-color">Sign Up</button>
                </form>
            </div>
            <div class="form-container sign-in-container">
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <h1>Login</h1>
                    <input class="input-fields-form" type="email" name="email" placeholder="Email" />
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="input-container">
                        <input class="input-fields-form mb-0" type="password" id="passwordInput2" name="password"
                            placeholder="Password" />
                        <i class="toggle-password fas fa-eye" onclick="togglePasswordVisibility('passwordInput2')"></i>

                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- <a href="#">Forgot your password?</a> -->
                    <button type="submit" class="submit-color">Sign In</button>
                </form>
            </div>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1 class="explorer-margin text-white">Welcome!</h1>
                    <p>Enter your detail & Start <br> journey with us</p>
                    <button class="ghost submit-color" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1 class="explorer-margin text-white">Hello, Friend!</h1>
                    <p>Enter your detail & Start <br> journey with us</p>
                    <button class="ghost submit-color" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        function togglePasswordVisibility(inputId) {
            var passwordInput = document.getElementById(inputId);
            var icon = passwordInput.nextElementSibling; // Assuming icon is immediately after input

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                icon.classList.remove("fa-eye");
                icon.classList.add("fa-eye-slash");
            } else {
                passwordInput.type = "password";
                icon.classList.remove("fa-eye-slash");
                icon.classList.add("fa-eye");
            }
        }
    </script>
    <script>
        const signUpButton = document.querySelectorAll("#signUp");
        const signInButton = document.querySelectorAll("#signIn");
        const container = document.getElementById("container");

        signUpButton.forEach(item => {
            item.addEventListener("click", () => {
                container.classList.add("right-panel-active");
                signInButton.forEach(btn => btn.classList.remove('active'));
                signInButton.forEach(btn => btn.classList.remove('grey-color'));
                signUpButton.forEach(btn => btn.classList.remove('black-color'));
                signUpButton.forEach(btn => btn.classList.add('black'));
            });
        });

        signInButton.forEach(item => {
            item.addEventListener("click", () => {
                container.classList.remove("right-panel-active");
                signInButton.forEach(btn => btn.classList.add('active'));
                signUpButton.forEach(btn => btn.classList.remove('black'));
            });
        });
    </script>
</body>

</html>
