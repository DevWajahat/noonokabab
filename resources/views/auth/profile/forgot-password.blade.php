<!DOCTYPE html>
<html lang="en" class="h-100">

<meta http-equiv="content-type" content="text/php;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login </title>
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/admin/images/logo.png') }}">
    <link href="{{ asset('assets/admin/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloud0flare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                                            <img src="{{ asset('assets/admin/images/logo.png') }}" class="img-fluid">
                                        </a>
                                    </div>
                                    <h4 class="text-center mb-4 text-white login-signup-title">forgot Password</h4>
                                    <form action="{{ route('forgot_password_post') }}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Email</strong></label>
                                            <input type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                placeholder="hello@example.com">
                                            @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>


                                        <div class="text-center">
                                            <button type="submit" class="btn bg-white text-black btn-block">Send Mail</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/admin/vendor/global/global.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/admin/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('assets/admin/js/custom.min.js ') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/admin/js/deznav-init.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/admin/js/demo.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/admin/js/styleSwitcher.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/admin/js/index.js') }}"></script>

</body>
</php>
