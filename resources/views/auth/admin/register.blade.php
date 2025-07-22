<!DOCTYPE php>
<php lang="en" class="h-100">
    <meta http-equiv="content-type" content="text/php;charset=UTF-8" />

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Sign Up </title>
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/admin/images/logo.png') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
            integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="{{ asset('assets/admin/css/style.css') }}" rel="stylesheet">
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
                                            <a href="javascript:void()"><img
                                                    src="{{ asset('assets/admin/images/logo.png') }}"
                                                    class="img-fluid"></a>
                                        </div>
                                        <h4 class="text-center mb-4 text-white login-signup-title">Sign up your account
                                        </h4>
                                        <form action="{{ route('admin.register') }}" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <label class="mb-1 text-white"><strong>Username</strong></label>
                                                <input type="text"
                                                    class="form-control @error('name') is-invalid @enderror"
                                                    name="name" placeholder="username">
                                                @error('name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label class="mb-1 text-white"><strong>Email</strong></label>
                                                <input type="email" name="email"
                                                    class="form-control @error('email') is-invalid @enderror"
                                                    placeholder="hello@example.com">
                                                @error('email')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label class="mb-1 text-white"><strong>Password</strong></label>
                                                <div class="position-relative">
                                                    <input type="password"
                                                        class="form-control @error('password') is-invalid @enderror"
                                                        name="password" placeholder="Password">
                                                    <button type="button" class="pass-eye-btn eye-btn">
                                                        <i class="fa-solid fa-eye-slash"></i>
                                                    </button>
                                                    @error('password')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="mb-1 text-white"><strong>Phone</strong></label>
                                                <input type="text"
                                                    class="form-control @error('phone') is-invalid @enderror"
                                                    name="phone" id="phone" placeholder="phone">
                                                @error('phone')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="text-center mt-4">
                                                <button type="submit" class="btn bg-white text-black btn-block">Sign
                                                    Up</button>
                                            </div>
                                        </form>
                                        <div class="new-account mt-3">
                                            <p class="text-white">Already have an account? <a class="text-white"
                                                    href="page-login.php">Sign in</a></p>
                                        </div>
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
