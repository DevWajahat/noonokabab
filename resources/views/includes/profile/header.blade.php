<!DOCTYPE php>
<php lang="en">
    <meta http-equiv="content-type" content="text/php;charset=UTF-8" />

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Admin Dashboard</title>
        <link rel="shortcut icon" href="{{ asset('assets/admin/images/logo.png') }}" type="image/x-icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
            integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="{{ asset('assets/admin/vendor/jqvmap/css/jqvmap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/admin/vendor/chartist/css/chartist.min.css') }}" rel="stylesheet"
            type="text/css" />
        <link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
            integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css"
            integrity="sha512-XcIsjKMcuVe0Ucj/xgIXQnytNwBttJbNjltBV18IOnru2lDPe9KRRyvCXw6Y5H415vbBLRm8+q6fmLUU7DfO6Q=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="{{ asset('assets/admin/vendor/owl-carousel/owl.carousel.css') }}" rel="stylesheet"
            type="text/css" />
        <link href="{{ asset('assets/admin/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}"
            rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/admin/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet"
            type="text/css" />
        <link href="{{ asset('assets/admin/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}"
            rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/admin/css/style.css') }}" rel="stylesheet" type="text/css" />

        <script src="https://cdn.tiny.cloud/1/dfpwqzta0shla64s4zi0rqjezy639oqfj9hnk8bwsqr8lu08/tinymce/7/tinymce.min.js"
            referrerpolicy="origin"></script>
    </head>

    <body>
        <div id="preloader">
            <div class="sk-three-bounce">
                <div class="sk-child sk-bounce1"></div>
                <div class="sk-child sk-bounce2"></div>
                <div class="sk-child sk-bounce3"></div>
            </div>
        </div>
        <div id="main-wrapper">
            <div class="nav-header">
                <a href="index.php" class="brand-logo">
                    <img src="{{ asset('assets/admin/images/logo.png') }}" class="img-fluid headertop-side">
                </a>
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="line"></span><span class="line"></span><span class="line"></span>
                    </div>
                </div>
            </div>
            <div class="chatbox">
                <div class="chatbox-close"></div>
                <div class="custom-tab-1">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" href="./chats.php">Chat</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="header">
                <div class="header-content">
                    <nav class="navbar navbar-expand">
                        <div class="collapse navbar-collapse justify-content-between">
                            <div class="header-left">
                                <div class="dashboard_bar">User Details</div>
                            </div>
                            <ul class="navbar-nav header-right">

                                <li class="nav-item dropdown header-profile">
                                    <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown">
                                        <img src="{{ asset('assets/admin/images/profile/17.jpg') }}" width="20"
                                            alt="" />
                                        <div class="header-info">
                                            <span class="text-black">Noon o Kabab</span>
                                            <p class="fs-12 mb-0">Admin</p>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="{{ route('user.index') }}" class="dropdown-item ai-icon">
                                            <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary"
                                                width="18" height="18" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="12" cy="7" r="4"></circle>
                                            </svg>
                                            <span class="ms-2">Profile </span>
                                        </a>
                                        <a href="{{ route('logout') }}" class="dropdown-item ai-icon">
                                            <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg"
                                                class="text-danger" width="18" height="18"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                                <polyline points="16 17 21 12 16 7"></polyline>
                                                <line x1="21" y1="12" x2="9" y2="12">
                                                </line>
                                            </svg>
                                            <span class="ms-2">Logout </span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="deznav">
                <div class="deznav-scroll">
                    <ul class="metismenu" id="menu">
                        <li class="has-menu">
                            <a class="has-arrow ai-icon" href="{{ route('user.index') }}" aria-expanded="false">
                                <i class="fa-solid fa-gauge-high"></i>
                                <span class="nav-text">User Details</span>
                            </a>
                        </li>

                        <li class="has-menu">
                            <a class="has-arrow ai-icon" href="{{ route('user.orders') }}"
                                aria-expanded="false">
                                <i class="fa-solid fa-bars-staggered"></i>
                                <span class="nav-text">Orders </span>
                            </a>
                        </li>






                    </ul>
                </div>
            </div>
