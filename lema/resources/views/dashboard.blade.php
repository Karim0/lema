<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{asset('img/logo.svg')}}" type="image/cvg">
    <title>LEMA</title>


    {{--    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">--}}
    {{--    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">--}}
    {{--    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">--}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{ asset('css/awesome/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<header class="shadow">
    <nav>
        <div class="nav_left_side">
            <div class="nav_logo">
                <a href="{{url('/')}}">
                    <img src="{{asset('img/logo.svg')}}" alt="logo">
                    <span>LEMA</span>
                </a>
            </div>

            <div class="menu_burger">
                <button id="btn_burger">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path
                            d="M 3 5 A 1.0001 1.0001 0 1 0 3 7 L 21 7 A 1.0001 1.0001 0 1 0 21 5 L 3 5 z M 3 11 A 1.0001 1.0001 0 1 0 3 13 L 21 13 A 1.0001 1.0001 0 1 0 21 11 L 3 11 z M 3 17 A 1.0001 1.0001 0 1 0 3 19 L 21 19 A 1.0001 1.0001 0 1 0 21 17 L 3 17 z"></path>
                    </svg>
                </button>
            </div>
        </div>
        <div class="nav_right_side">
            <a href="#" class="nav_help_link">Get Help</a>

            <form class="search-form ml-3" action="">
                <input type="text" class="form-control" placeholder="Search">
                <button class="btn" type="submit"><i class="fa fa-search"></i></button>
            </form>


            <ul>
                <li class="nav-item dropdown">
                    <a href="#notifications_menu" class="nav-link dropdown-toggle notifications_dropdown"
                       data-toggle="dropdown"
                       data-caret="false">
                        <span>
                            <img src="{{asset('img/clock.svg')}}" alt="clock">
                        </span>
                    </a>
                    <div id="notifications_menu" class="dropdown-menu dropdown-menu-right navbar-notifications-menu">
                        <div class="dropdown-item d-flex align-items-center py-2">
                            <span class="flex navbar-notifications-menu__title m-0">Notifications</span>
                            <a href="#" class="text-muted"><small>Clear all</small></a>
                        </div>
                        <div class="navbar-notifications-menu__content ps" data-perfect-scrollbar="">
                            <div class="py-2">

                                <div class="dropdown-item d-flex">
                                    <div class="mr-3">
                                        <div class="avatar avatar-xs">
                                            <img src="{{asset('img/256_daniel-gaffey-1060698-unsplash.jpg')}}"
                                                 alt="Avatar" class="avatar-img rounded-circle">
                                        </div>
                                    </div>
                                    <div class="flex">
                                        <a href="">A.Demian</a> left a comment on <a href="">Stack</a><br>
                                        <small class="text-muted">1 minute ago</small>
                                    </div>
                                </div>
                                <div class="dropdown-item d-flex">
                                    <div class="mr-3">
                                        <a href="#">
                                            <div class="avatar avatar-xs">
                                                        <span class="avatar-title bg-primary rounded-circle"><i
                                                                class="material-icons icon-16pt">person_add</i></span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="flex">
                                        New user <a href="#">Peter Parker</a> signed up.<br>
                                        <small class="text-muted">1 hour ago</small>
                                    </div>
                                </div>
                                <div class="dropdown-item d-flex">
                                    <div class="mr-3">
                                        <a href="#">
                                            <div class="avatar avatar-xs">
                                                <span class="avatar-title rounded-circle">JD</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="flex">
                                        <a href="#">Big Joe</a> <small class="text-muted">wrote:</small><br>
                                        <div>Hey, how are you? What about our next meeting</div>
                                        <small class="text-muted">2 minutes ago</small>
                                    </div>
                                </div>

                                <div class="dropdown-item d-flex">
                                    <div class="mr-3">
                                        <div class="avatar avatar-xs">
                                            <img src="{{asset('img/256_daniel-gaffey-1060698-unsplash.jpg')}}"
                                                 alt="Avatar" class="avatar-img rounded-circle">
                                        </div>
                                    </div>
                                    <div class="flex">
                                        <a href="">A.Demian</a> left a comment on <a href="">Stack</a><br>
                                        <small class="text-muted">1 minute ago</small>
                                    </div>
                                </div>
                                <div class="dropdown-item d-flex">
                                    <div class="mr-3">
                                        <a href="#">
                                            <div class="avatar avatar-xs">
                                                        <span class="avatar-title bg-primary rounded-circle"><i
                                                                class="material-icons icon-16pt">person_add</i></span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="flex">
                                        New user <a href="#">Peter Parker</a> signed up.<br>
                                        <small class="text-muted">1 hour ago</small>
                                    </div>
                                </div>
                                <div class="dropdown-item d-flex">
                                    <div class="mr-3">
                                        <a href="#">
                                            <div class="avatar avatar-xs">
                                                <span class="avatar-title rounded-circle">JD</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="flex">
                                        <a href="#">Big Joe</a> <small class="text-muted">wrote:</small><br>
                                        <div>Hey, how are you? What about our next meeting</div>
                                        <small class="text-muted">2 minutes ago</small>
                                    </div>
                                </div>

                                <div class="dropdown-item d-flex">
                                    <div class="mr-3">
                                        <div class="avatar avatar-xs">
                                            <img src="{{asset('img/256_daniel-gaffey-1060698-unsplash.jpg')}}"
                                                 alt="Avatar" class="avatar-img rounded-circle">
                                        </div>
                                    </div>
                                    <div class="flex">
                                        <a href="">A.Demian</a> left a comment on <a href="">Stack</a><br>
                                        <small class="text-muted">1 minute ago</small>
                                    </div>
                                </div>
                                <div class="dropdown-item d-flex">
                                    <div class="mr-3">
                                        <a href="#">
                                            <div class="avatar avatar-xs">
                                                        <span class="avatar-title bg-primary rounded-circle"><i
                                                                class="material-icons icon-16pt">person_add</i></span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="flex">
                                        New user <a href="#">Peter Parker</a> signed up.<br>
                                        <small class="text-muted">1 hour ago</small>
                                    </div>
                                </div>
                                <div class="dropdown-item d-flex">
                                    <div class="mr-3">
                                        <a href="#">
                                            <div class="avatar avatar-xs">
                                                <span class="avatar-title rounded-circle">JD</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="flex">
                                        <a href="#">Big Joe</a> <small class="text-muted">wrote:</small><br>
                                        <div>Hey, how are you? What about our next meeting</div>
                                        <small class="text-muted">2 minutes ago</small>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <a href="#"
                           class="dropdown-item text-center navbar-notifications-menu__footer">View All</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="#events-drawer" data-toggle="sidebar" class="nav-link d-flex align-items-center">
                        <span class="nav-icon">
                            <img src="{{asset('img/calendar.svg')}}" alt="logo">
                        </span>
                    </a>
                </li>
            </ul>
            <div class="dropdown nav_user_menu">
                <a href="#" class="dropdown-toggle"
                   data-toggle="dropdown">
                    <img src="{{asset('img/demi.png')}}" class="rounded-circle" width="32" alt="Frontted">
                    <span class="ml-1 d-flex-inline">
                                    <span class="text-light">Adrian D.</span>
                                </span>
                </a>
                <div id="company_menu" class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-item">
                        <span class="mr-3">
                            <img src="{{asset('img/frontted-logo-blue.svg')}}" width="50" height="50" alt="avatar">
                        </span>
                        <span class="flex d-flex flex-column">
                            <strong class="h5 m-0">Adrian D.</strong>
                            <small class="text-muted text-uppercase">STUDENT</small>
                        </span>
                    </div>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item d-flex align-items-center py-2" href="#">
                        Edit Account
                    </a>
                    <a class="dropdown-item d-flex align-items-center py-2" href="#">
                        Settings
                    </a>
                    <a class="dropdown-item d-flex align-items-center py-2" href="#">
                        Logout
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <div class="nav_pages" id="secondaryNavbar">
        <div class="h-100 container d-flex flex-wrap align-items-center">
            <div class="navbar navbar-secondary navbar-light navbar-expand-sm p-0 h-100 d-flex flex-wrap">
                <div class="nav_title">
                    <h1>Student Dashboard</h1>

                </div>
                <ul class="">
                    <li class="nav-item">
                        <a href="{{url('/')}}" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item active dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Student</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item active" href="#">Dashboard</a>
                            <a class="dropdown-item" href="#">Series</a>
                            <a class="dropdown-item" href="#">Courses</a>
                            <a class="dropdown-item" href="#">Course Lessons</a>
                            <a class="dropdown-item" href="#">Take Course</a>
                            <a class="dropdown-item" href="#">Take Quiz</a>
                            <a class="dropdown-item" href="#">Billing</a>
                            <a class="dropdown-item" href="#">Edit Account</a>
                            <a class="dropdown-item" href="#">Student Profile</a>
                            <a class="dropdown-item" href="/login">Login</a>
                            <a class="dropdown-item" href="#">Sign Up</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Instructor</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Dashboard</a>
                            <a class="dropdown-item" href="#">My Courses</a>
                            <a class="dropdown-item" href="#">Edit Course</a>
                            <a class="dropdown-item" href="#">Edit Lesson</a>
                            <a class="dropdown-item" href="#">Create Quiz</a>
                            <a class="dropdown-item" href="#">Earnings</a>
                            <a class="dropdown-item" href="#">Profile</a>
                            <a class="dropdown-item" href="#">Payout</a></div>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">UI Components</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Buttons</a>
                            <a class="dropdown-item" href="#">Alerts</a>
                            <a class="dropdown-item" href="#">Avatars</a>
                            <a class="dropdown-item" href="#">Modals</a>
                            <a class="dropdown-item" href="#">Charts</a>
                            <a class="dropdown-item" href="#">Icons</a>
                            <a class="dropdown-item" href="#">Forms</a>
                            <a class="dropdown-item" href="#">Range Sliders</a>
                            <a class="dropdown-item" href="#">Time &amp; Date</a>
                            <a class="dropdown-item" href="#">Tables</a>
                            <a class="dropdown-item" href="#">Tabs</a>
                            <a class="dropdown-item" href="#">Loaders</a>
                            <a class="dropdown-item" href="#">Drag &amp; Drop</a>
                            <a class="dropdown-item" href="#">Pagination</a>
                            <a class="dropdown-item" href="#">Vector Maps</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Layouts</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Admin</a>
                            <a class="dropdown-item active" href="#">Full Width</a>
                            <a class="dropdown-item" href="#">Fixed</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
<div id="header__gap"></div>

<section id="dash_alert">
    <div class="container">
        <div class="alert_container">
            <p><i class="fa fa-info-circle"></i></p>
        </div>
    </div>
</section>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-3 mb-4 mb-md-0">
                <a href="" class="footer_logo">
                    <span class="mr-2">
                        <img src="{{asset('img/footer-logo.svg')}}" alt="logo">
                    </span>
                    LEMA
                </a>
            </div>
            <div class="col-md-9 col-12 col-sm-12">
                <div class="row">
                    <div class="col-sm-6 col-md-3 mb-4 mb-md-0">
                        <h5>Student</h5>
                        <ul class="list-group list-group-flush mb-3">
                            <li class="">
                                <a href="#">Courses</a>
                            </li>
                            <li class="">
                                <a href="#">Take Course</a>
                            </li>
                            <li class="">
                                <a href="#">Profile</a>
                            </li>
                            <li class="">
                                <a href="#">Edit Account</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 mb-4 mb-md-0">
                        <h5>Instructor</h5>
                        <ul class="list-group list-group-flush mb-3">
                            <li class="">
                                <a href="#">Dashboard</a>
                            </li>
                            <li class="">
                                <a href="#">Edit Course</a>
                            </li>
                            <li class="">
                                <a href="#">Instructor Profile</a>
                            </li>
                            <li class="">
                                <a href="#">Quizzes</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 mb-4 mb-md-0">
                        <h5>Account</h5>
                        <ul class="list-group list-group-flush mb-3">
                            <li class="">
                                <a href="#">Login</a>
                            </li>
                            <li class="">
                                <a href="#">Sign up</a>
                            </li>
                            <li class="">
                                <a href="#">Edit Account</a>
                            </li>
                            <li class="">
                                <a href="#">Payout</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3 mb-4 mb-md-0">
                        <h5>Contact us</h5>
                        <p class="text-light">Street Name, Suite 12<br class="d-none d-md-block"> Dublin, Ireland</p>

                        <div class="contact_social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-github"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="{{asset('js/app.js')}}"></script>


</body>
</html>
