<!DOCTYPE php>
<php lang="en">
  <meta http-equiv="content-type" content="text/php;charset=UTF-8" />

  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard</title>
    <link rel="shortcut icon" href="{{ asset("assets/admin/images/logo.png") }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset("assets/admin/vendor/jqvmap/css/jqvmap.min.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("assets/admin/vendor/chartist/css/chartist.min.css") }}" rel="stylesheet" type="text/css" />
    <link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css" integrity="sha512-XcIsjKMcuVe0Ucj/xgIXQnytNwBttJbNjltBV18IOnru2lDPe9KRRyvCXw6Y5H415vbBLRm8+q6fmLUU7DfO6Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset("assets/admin/vendor/owl-carousel/owl.carousel.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("assets/admin/vendor/bootstrap-select/dist/css/bootstrap-select.min.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("assets/admin/vendor/datatables/css/jquery.dataTables.min.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("assets/admin/vendor/bootstrap-select/dist/css/bootstrap-select.min.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("assets/admin/css/style.css") }}" rel="stylesheet" type="text/css" />

    <script src="https://cdn.tiny.cloud/1/dfpwqzta0shla64s4zi0rqjezy639oqfj9hnk8bwsqr8lu08/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
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
          <img src="{{ asset("assets/admin/images/logo.png") }}" class="img-fluid headertop-side">
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
                <div class="dashboard_bar">Dashboard</div>
              </div>
              <ul class="navbar-nav header-right">
                <!-- <li class="nav-item dropdown notification_dropdown">
                  <a class="nav-link ai-icon" href="#" role="button" data-bs-toggle="dropdown">
                    <svg width="26" height="28" viewBox="0 0 26 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M9.45251 25.6682C10.0606 27.0357 11.4091 28 13.0006 28C14.5922 28 15.9407 27.0357 16.5488 25.6682C15.4266 25.7231 14.2596 25.76 13.0006 25.76C11.7418 25.76 10.5748 25.7231 9.45251 25.6682Z" fill="#3E4954" />
                      <path d="M25.3531 19.74C23.8769 17.8785 21.3995 14.2195 21.3995 10.64C21.3995 7.09073 19.1192 3.89758 15.7995 2.72382C15.7592 1.21406 14.5183 0 13.0006 0C11.4819 0 10.2421 1.21406 10.2017 2.72382C6.88095 3.89758 4.60064 7.09073 4.60064 10.64C4.60064 14.2207 2.12434 17.8785 0.647062 19.74C0.154273 20.3616 0.00191325 21.1825 0.240515 21.9363C0.473484 22.6721 1.05361 23.2422 1.79282 23.4595C3.08755 23.8415 5.20991 24.2715 8.44676 24.491C9.84785 24.5851 11.3543 24.64 13.0007 24.64C14.646 24.64 16.1524 24.5851 17.5535 24.491C20.7914 24.2715 22.9127 23.8415 24.2085 23.4595C24.9477 23.2422 25.5268 22.6722 25.7597 21.9363C25.9983 21.1825 25.8448 20.3616 25.3531 19.74Z" fill="#3E4954" />
                    </svg>
                    <span class="badge light text-white bg-primary rounded-circle">52</span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end">
                    <div id="DZ_W_Notification1" class="widget-media dz-scroll p-3 height380">
                      <ul class="timeline">
                        <li>
                          <div class="timeline-panel">
                            <div class="media-body">
                              <h6 class="mb-1">Dr sultads Send you Photo</h6>
                              <small class="d-block">29 July 2020 - 02:26 PM</small>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="timeline-panel">
                            <div class="media-body">
                              <h6 class="mb-1">Resport created successfully</h6>
                              <small class="d-block">29 July 2020 - 02:26 PM</small>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="timeline-panel">
                            <div class="media-body">
                              <h6 class="mb-1">Reminder : Treatment Time!</h6>
                              <small class="d-block">29 July 2020 - 02:26 PM</small>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="timeline-panel">
                            <div class="media-body">
                              <h6 class="mb-1">Dr sultads Send you Photo</h6>
                              <small class="d-block">29 July 2020 - 02:26 PM</small>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="timeline-panel">
                            <div class="media-body">
                              <h6 class="mb-1">Resport created successfully</h6>
                              <small class="d-block">29 July 2020 - 02:26 PM</small>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="timeline-panel">
                            <div class="media-body">
                              <h6 class="mb-1">Reminder : Treatment Time!</h6>
                              <small class="d-block">29 July 2020 - 02:26 PM</small>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                    <a class="all-notification" href="notifications.php">See all notifications <i class="ti-arrow-right"></i></a>
                  </div>
                </li> -->
                <li class="nav-item dropdown header-profile">
                  <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown">
                    <img src="{{ asset("assets/admin/images/profile/17.jpg") }}" width="20" alt="" />
                    <div class="header-info">
                      <span class="text-black">Noon o Kabab</span>
                      <p class="fs-12 mb-0">Admin</p>
                    </div>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end">
                    <a href="profile.php" class="dropdown-item ai-icon">
                      <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                      </svg>
                      <span class="ms-2">Profile </span>
                    </a>
                    <a href="page-login.php" class="dropdown-item ai-icon">
                      <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                        <polyline points="16 17 21 12 16 7"></polyline>
                        <line x1="21" y1="12" x2="9" y2="12"></line>
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
              <a class="has-arrow ai-icon" href="{{ route('admin.index') }}" aria-expanded="false">
                <i class="fa-solid fa-gauge-high"></i>
                <span class="nav-text">Dashboard</span>
              </a>
            </li>
            {{-- <li class="has-menu">
              <a class="has-arrow ai-icon" href="profile.php" aria-expanded="false">
                <i class="fa-solid fa-user"></i>
                <span class="nav-text">Profile</span>
              </a>
            </li> --}}
            <li class="has-menu">
              <a class="has-arrow ai-icon" href="{{ route('admin.orders.index') }}" aria-expanded="false">
                <i class="fa-solid fa-bars-staggered"></i>
                <span class="nav-text">Orders </span>
              </a>
            </li>
            {{-- <li class="has-menu">
              <a class="has-arrow ai-icon" href="./user-impressions.php" aria-expanded="false">
                <i class="fa-regular fa-eye"></i>
                <span class="nav-text">Impressions</span>
              </a>
            </li> --}}
            <li class="has-menu">
              <a class="has-arrow ai-icon" href="{{ route('admin.user.index') }}" aria-expanded="false">
                <i class="fa-solid fa-users"></i>
                <span class="nav-text">Users</span>
              </a>
            </li>

            <li class="has-menu">
              <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
              <i class="fas fa-store"></i>
                <span class="nav-text">Branches</span>
              </a>
              <ul class="metismenu" id="menu">
                <li class="has-menu">
                  <a class="has-arrow ai-icon" href="{{ route('admin.branch.create') }}" aria-expanded="false">
                    <span class="nav-text">Add Branch</span>
                  </a>
                </li>
                <li class="has-menu">
                  <a class="has-arrow ai-icon" href="{{ route('admin.branch.index') }}" aria-expanded="false">
                    <span class="nav-text">Branch List</span>
                  </a>
                </li>
              </ul>
            </li>
            {{-- <li class="has-menu">
              <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                <i class="fa-solid fa-location-dot"></i>
                <span class="nav-text">Locations</span>
              </a>
              <ul class="metismenu" id="menu">
                <li class="has-menu">
                  <a class="has-arrow ai-icon" href="add-location.php" aria-expanded="false">
                    <span class="nav-text">Add Location</span>
                  </a>
                </li>
                <li class="has-menu">
                  <a class="has-arrow ai-icon" href="locations.php" aria-expanded="false">
                    <span class="nav-text">Location List</span>
                  </a>
                </li>
              </ul>
            </li> --}}
            <li class="has-menu">
              <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                <i class="fa-solid fa-clock"></i>
                <span class="nav-text">Lunch Time</span>
              </a>
              <ul class="metismenu" id="menu">
                <li class="has-menu">
                  <a class="has-arrow ai-icon" href="{{ route('admin.lunchtime.create') }}" aria-expanded="false">
                    <span class="nav-text">Add Lunch Time</span>
                  </a>
                </li>
                <li class="has-menu">
                  <a class="has-arrow ai-icon" href="{{ route('admin.lunchtime.index') }}" aria-expanded="false">
                    <span class="nav-text">Lunch Time List</span>
                  </a>
                </li>
              </ul>
            </li>
            {{-- <li class="has-menu">
              <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
              <i class="fas fa-external-link-alt"></i>
                <span class="nav-text">Externals</span>
              </a>
              <ul class="metismenu" id="menu">
                <li class="has-menu">
                  <a class="has-arrow ai-icon" href="add-externals.php" aria-expanded="false">
                    <span class="nav-text">Add Externals</span>
                  </a>
                </li>
                <li class="has-menu">
                  <a class="has-arrow ai-icon" href="externals.php" aria-expanded="false">
                    <span class="nav-text">Externals List</span>
                  </a>
                </li>
              </ul>
            </li> --}}
            <li class="has-menu">
              <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                 <i class="fas fa-utensils"></i>
                <span class="nav-text">Menu</span>
              </a>
              <ul class="metismenu" id="menu">
                <li class="has-menu">
                  <a class="has-arrow ai-icon" href="{{ route('admin.menu.create') }}" aria-expanded="false">
                    <span class="nav-text">Add Menu</span>
                  </a>
                </li>
                <li class="has-menu">
                  <a class="has-arrow ai-icon" href="{{ route('admin.menu.index') }}" aria-expanded="false">
                    <span class="nav-text">Menu List</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="has-menu">
              <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                <i class="fa-solid fa-list"></i>
                <span class="nav-text">Categories</span>
              </a>
              <ul class="metismenu" id="menu">
                <li class="has-menu">
                  <a class="has-arrow ai-icon" href="{{ route('admin.category.create') }}" aria-expanded="false">
                    <span class="nav-text">Add Categories</span>
                  </a>
                </li>
                <li class="has-menu">
                  <a class="has-arrow ai-icon" href="{{ route('admin.category.index') }}" aria-expanded="false">
                    <span class="nav-text">Categories List</span>
                  </a>
                </li>
              </ul>
            </li>
            {{-- <li class="has-menu">
              <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                <i class="fa-regular fa-image"></i>
                <span class="nav-text">Galleries</span>
              </a>
              <ul class="metismenu" id="menu">
                <li class="has-menu">
                  <a class="has-arrow ai-icon" href="add-gallery.php" aria-expanded="false">
                    <span class="nav-text">Add Galleries</span>
                  </a>
                </li>
                <li class="has-menu">
                  <a class="has-arrow ai-icon" href="gallery.php" aria-expanded="false">
                    <span class="nav-text">Galleries List</span>
                  </a>
                </li>
              </ul>
            </li> --}}
            <li class="has-menu">
              <a class="has-arrow ai-icon" href="reservation.php" aria-expanded="false">
              <i class="fas fa-calendar-check"></i>
                <span class="nav-text">Reservation</span>
              </a>
            </li>
            {{-- <li class="has-menu">
              <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
              <i class="fas fa-user-tie"></i>
                <span class="nav-text">Careers</span>
              </a>
              <ul class="metismenu" id="menu">
                <li class="has-menu">
                  <a class="has-arrow ai-icon" href="add-career.php" aria-expanded="false">
                    <span class="nav-text">Add Career</span>
                  </a>
                </li>
                <li class="has-menu">
                  <a class="has-arrow ai-icon" href="careers.php" aria-expanded="false">
                    <span class="nav-text">Career List</span>
                  </a>
                </li>
                <li class="has-menu">
                  <a class="has-arrow ai-icon" href="applied-careers.php" aria-expanded="false">
                    <span class="nav-text">Applied Careers</span>
                  </a>
                </li>
              </ul>
            </li> --}}
            <li class="has-menu">
              <a class="has-arrow ai-icon" href="contacts.php" aria-expanded="false">
                <i class="fa-solid fa-address-book"></i>
                <span class="nav-text">Contact</span>
              </a>
            </li>
            <li class="has-menu">
              <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                <i class="fa-solid fa-star"></i>
                <span class="nav-text">Reviews</span>
              </a>
              <ul class="metismenu" id="menu">
                <li class="has-menu">
                  <a class="has-arrow ai-icon" href="add-review.php" aria-expanded="false">
                    <span class="nav-text">Add Reviews</span>
                  </a>
                </li>
                <li class="has-menu">
                  <a class="has-arrow ai-icon" href=" reviews.php" aria-expanded="false">
                    <span class="nav-text">Review List</span>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
