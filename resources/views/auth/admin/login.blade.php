<!DOCTYPE html>
<html lang="en" class="h-100">

    <meta http-equiv="content-type" content="text/php;charset=UTF-8" />
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login </title>
        <link rel="icon" type="image/png" sizes="16x16" href="public/images/logo.png">
        <link href="public/css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body class="h-100">
        <div class="authincation h-100">
            <div class="container h-100">
                <div class="row justify-content-center h-100 align-items-center">
                    <div class="col-md-6">
                        <div class="authincation-content">
                            <div class="row no-gutters">
                                <div class="col-xl-12">
                                    <div class="auth-form">
                                        <div class="text-center mb-3">
                                            <a href="javascript:void()">
                                                <img src="public/images/logo.png" class="img-fluid">
                                            </a>
                                        </div>
                                        <h4 class="text-center mb-4 text-white login-signup-title">Sign in your account</h4>
                                        <form action="index.php">
                                            <div class="form-group">
                                                <label class="mb-1 text-white"><strong>Email</strong></label>
                                                <input type="email" class="form-control" placeholder="hello@example.com" >
                                            </div>
                                            <div class="form-group">
                                                <label class="mb-1 text-white"><strong>Password</strong></label>
                                                <div class="position-relative">
                                                    <input type="password" class="form-control" placeholder="Password" >
                                                    <button type="button" class="pass-eye-btn eye-btn">
                                                        <i class="fa-solid fa-eye-slash"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                                <div class="form-group">
                                                    <div class="custom-control d-flex justify-content-start align-items-center gap-2 custom-checkbox ms-1 text-white">
                                                        <input type="checkbox" class="custom-control-input remember-checkbox" id="basic_checkbox_1">
                                                        <label class="custom-control-label mb-0" for="basic_checkbox_1">Remember my preference</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <a class="text-white" href="page-forgot-password.php">Forgot Password?</a>
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <button type="submit" class="btn bg-white text-black btn-block">Sign In</button>
                                            </div>
                                        </form>
                                        <div class="new-account mt-3">
                                            <p class="text-white">Don't have an account? <a class="text-white" href="page-register.php">Sign up</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="public/vendor/global/global.min.js" type="text/javascript"></script>
        <script src="public/vendor/bootstrap-select/dist/js/bootstrap-select.min.js" type="text/javascript"></script>
        <script src="public/js/custom.min.js" type="text/javascript"></script>
        <script src="public/js/deznav-init.js" type="text/javascript"></script>
        <script src="public/js/demo.js" type="text/javascript"></script>
        <script src="public/js/styleSwitcher.js" type="text/javascript"></script>
        <script src="public/js/index.js"></script>

    </body>
</php>
