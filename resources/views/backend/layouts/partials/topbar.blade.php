<header class="topbar">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header">
            <!-- This is for the sidebar toggle which is visible on mobile only -->
            <a class="nav-toggler d-block d-md-none" href="javascript:void(0)">
                <i class="ti-menu ti-close"></i>
            </a>
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <div class="navbar-brand">
                <a href="{{asset('/')}}" class="logo">
                    <!-- Logo icon -->
                    <b class="logo-icon">
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->
                        <img src="{{asset('assets/images/logo-icon.png')}}" alt="homepage" class="dark-logo"/>
                        <!-- Light Logo icon -->
                        <img src="{{asset('assets/images/logo-light-icon.png')}}" alt="homepage" class="light-logo"/>
                    </b>
                    <!--End Logo icon -->
                    <!-- Logo text -->
                    <span class="logo-text">
                                <!-- dark Logo text -->
                                <img src="{{asset('assets/images/logo-text.png')}}" alt="homepage" class="dark-logo"/>
                        <!-- Light Logo text -->
                                <img src="{{asset('assets/images/logo-light-text.png')}}" class="light-logo"
                                     alt="homepage"/>
                            </span>
                </a>
                <a class="sidebartoggler d-none d-lg-block" href="javascript:void(0)" data-sidebartype="mini-sidebar">
                    <i data-feather="menu"></i>
                </a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Toggle which is visible on mobile only -->
            <!-- ============================================================== -->
            <a class="topbartoggler d-block d-md-none" href="javascript:void(0)" data-toggle="collapse"
               data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
               aria-label="Toggle navigation">
                <i class="ti-more"></i>
            </a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse collapse" id="navbarSupportedContent">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-left mr-auto">
                <!-- ============================================================== -->
                <!-- create new -->
                <!-- ============================================================== -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        <span class="d-none d-md-block"><i data-feather="sidebar"></i></span>
                        <span class="d-block d-md-none"><i class="fa fa-plus"></i></span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <!-- ============================================================== -->
                <!-- mega menu -->
                <!-- ============================================================== -->
                <li class="nav-item dropdown mega-dropdown">
                    <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        <span class="d-none d-md-block">Mega <i data-feather="more-vertical"></i></span>
                        <span class="d-block d-md-none"><i class="mdi mdi-dialpad font-24"></i></span>
                    </a>
                    <div class="dropdown-menu animated bounceInDown">
                        <div class="mega-dropdown-menu row">
                            <div class="col-lg-3 col-xlg-2 mb-4">
                                <h4 class="mb-3">Carousel</h4>
                                <!-- CAROUSEL -->
                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner" role="listbox">
                                        <div class="carousel-item active">

                                            <div class="container p-0"><img class="d-block img-fluid"
                                                                            src="https://via.placeholder.com/600x600?text=Image"
                                                                            alt="First slide"></div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="container p-0"><img class="d-block img-fluid"
                                                                            src="https://via.placeholder.com/600x600?text=Image"
                                                                            alt="Second slide"></div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="container p-0"><img class="d-block img-fluid"
                                                                            src="https://via.placeholder.com/600x600?text=Image"
                                                                            alt="Third slide"></div>
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                       data-slide="prev"> <span class="carousel-control-prev-icon"
                                                                aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span> </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                       data-slide="next"> <span class="carousel-control-next-icon"
                                                                aria-hidden="true"></span>
                                        <span class="sr-only">Next</span> </a>
                                </div>
                                <!-- End CAROUSEL -->
                            </div>
                            <div class="col-lg-3 mb-4">
                                <h4 class="mb-3">Accordion</h4>
                                <!-- Accordian -->
                                <div id="accordion">
                                    <div class="card mb-1">
                                        <div class="card-header" id="headingOne">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                        data-target="#collapseOne"
                                                        aria-expanded="true" aria-controls="collapseOne">
                                                    Collapsible Group Item #1
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                             data-parent="#accordion">
                                            <div class="card-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life
                                                accusamus terry.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-1">
                                        <div class="card-header" id="headingTwo">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                        data-target="#collapseTwo" aria-expanded="false"
                                                        aria-controls="collapseTwo">
                                                    Collapsible Group Item #2
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                             data-parent="#accordion">
                                            <div class="card-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life
                                                accusamus terry.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-1">
                                        <div class="card-header" id="headingThree">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                        data-target="#collapseThree" aria-expanded="false"
                                                        aria-controls="collapseThree">
                                                    Collapsible Group Item #3
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                             data-parent="#accordion">
                                            <div class="card-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life
                                                accusamus terry.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3  mb-4">
                                <h4 class="mb-3">Contact Us</h4>
                                <!-- Contact -->
                                <form>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="exampleInputname1"
                                               placeholder="Enter Name"></div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                                <textarea class="form-control" id="exampleTextarea" rows="3"
                                                          placeholder="Message"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary text-white">Submit</button>
                                </form>
                            </div>
                            <div class="col-lg-3 col-xlg-4 mb-4">
                                <h4 class="mb-3">List style</h4>
                                <!-- List style -->
                                <ul class="list-style-none">
                                    <li><a href="javascript:void(0)"><i class="fa fa-check text-primary mr-2"></i>
                                            You can give link</a></li>
                                    <li><a href="javascript:void(0)"><i class="fa fa-check text-primary mr-2"></i>
                                            Give link</a></li>
                                    <li><a href="javascript:void(0)"><i class="fa fa-check text-primary mr-2"></i>
                                            Another Give link</a></li>
                                    <li><a href="javascript:void(0)"><i class="fa fa-check text-primary mr-2"></i>
                                            Forth link</a></li>
                                    <li><a href="javascript:void(0)"><i class="fa fa-check text-primary mr-2"></i>
                                            Another fifth link</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- ============================================================== -->
                <!-- End mega menu -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Search -->
                <!-- ============================================================== -->
                <li class="nav-item search-box">
                    <a class="nav-link waves-effect waves-dark" href="javascript:void(0)">
                        <i data-feather="search"></i>
                    </a>
                    <form class="app-search position-absolute">
                        <input type="text" class="form-control" placeholder="Search &amp; enter">
                        <a class="srh-btn">
                            <i class="ti-close"></i>
                        </a>
                    </form>
                </li>
            </ul>
            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-right">
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
                <li class="nav-item dropdown">
                    @if(auth()->check())
                        <a class="nav-link dropdown-toggle waves-effect waves-dark pro-pic" href=""
                           data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                                <span class="mr-3 font-normal d-none d-sm-inline-block pro-name"><span>Hello,</span>
                                    {{auth()->user()->name}} </span>


                            @if(auth()->user()->profile->pic == null)
                                <img class="rounded-circle"
                                     width="40" src="{{asset('storage/uploads/users/no_avatar.jpg')}}"
                                     alt="user-img"
                                >
                            @else
                                <img class="rounded-circle"
                                     width="40" src="{{asset('storage/uploads/users/'.auth()->user()->profile->pic)}}"
                                     alt="user-img">
                            @endif
                        </a>
                        <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                            <div class="d-flex no-block align-items-center p-3 bg-light mb-2">
                                <div class="">

                                    @if(auth()->user()->profile->pic == null)
                                        <img class="rounded-circle"
                                             width="60" src="{{asset('storage/uploads/users/no_avatar.jpg')}}"
                                             alt="user-img"
                                        >
                                    @else
                                        <img class="rounded-circle"
                                             width="60"
                                             src="{{asset('storage/uploads/users/'.auth()->user()->profile->pic)}}"
                                             alt="user-img">
                                    @endif
                                </div>
                                <div class="ml-2">
                                    <h4 class="mb-0">  {{auth()->user()->name}}</h4>
                                    <p class="mb-0">  {{auth()->user()->email}}</p>
                                </div>
                            </div>
                            <div class="profile-dis scrollable">
                                <a class="dropdown-item" href="{{asset('/')}}">
                                    <i class="fas fa-home mx-1"></i> Home</a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="ti-user mx-1"></i> My Profile</a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="ti-wallet mx-1"></i> My Balance</a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="ti-email mx-1"></i> Inbox</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{asset('account-settings')}}">
                                    <i class="ti-settings mx-1"></i> Account Setting</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{asset('logout')}}">
                                    <i class="fa fa-power-off mx-1"></i> Logout</a>
                            </div>
                        </div>

                    @else
                        <a class="nav-link waves-effect waves-dark pro-pic" href="{{asset('login')}}">LogIn</a>
                    @endif
                </li>
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Notifications -->
                <!-- ============================================================== -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        <i data-feather="bell"></i>
                        <span class="badge badge-pill badge-danger noti">5</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown">
                        <ul class="list-style-none">
                            <li>
                                <div class="drop-title bg-light">
                                    <h4 class="mb-0 mt-1">4 new notifications</h4>
                                </div>
                            </li>
                            <li>
                                <div class="message-center notifications">
                                    <!-- Message -->
                                    <a href="javascript:void(0)" class="message-item">
                                                <span class="btn btn-danger btn-circle">
                                                    <i class="fa fa-link"></i>
                                                </span>
                                        <div class="mail-contnet">
                                            <h5 class="message-title">Luanch Admin</h5>
                                            <span class="mail-desc">Just see the my new admin!</span>
                                            <span class="time">9:30 AM</span>
                                        </div>
                                    </a>
                                    <!-- Message -->
                                    <a href="javascript:void(0)" class="message-item">
                                                <span class="btn btn-success btn-circle">
                                                    <i class="ti-calendar"></i>
                                                </span>
                                        <div class="mail-contnet">
                                            <h5 class="message-title">Event today</h5>
                                            <span class="mail-desc">Just a reminder that you have event</span>
                                            <span class="time">9:10 AM</span>
                                        </div>
                                    </a>
                                    <!-- Message -->
                                    <a href="javascript:void(0)" class="message-item">
                                                <span class="btn btn-info btn-circle">
                                                    <i class="ti-settings"></i>
                                                </span>
                                        <div class="mail-contnet">
                                            <h5 class="message-title">Settings</h5>
                                            <span class="mail-desc">You can customize this template as you want</span>
                                            <span class="time">9:08 AM</span>
                                        </div>
                                    </a>
                                    <!-- Message -->
                                    <a href="javascript:void(0)" class="message-item">
                                                <span class="btn btn-primary btn-circle">
                                                    <i class="ti-user"></i>
                                                </span>
                                        <div class="mail-contnet">
                                            <h5 class="message-title">Pavan kumar</h5>
                                            <span class="mail-desc">Just see the my admin!</span>
                                            <span class="time">9:02 AM</span>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <a class="nav-link text-center m-b-5 text-dark" href="javascript:void(0);">
                                    <strong>Check all notifications</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- ============================================================== -->
                <!-- End Notifications -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Messages -->
                <!-- ============================================================== -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" id="2" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        <i data-feather="mail"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown"
                         aria-labelledby="2">
                        <ul class="list-style-none">
                            <li>
                                <div class="drop-title bg-light">
                                    <h4 class="mb-0 mt-1">5 new messages</h4>
                                </div>
                            </li>
                            <li>
                                <div class="message-center message-body">
                                    <!-- Message -->
                                    <a href="javascript:void(0)" class="message-item">
                                                <span class="user-img">
                                          <img src="https://via.placeholder.com/52x52?text=User" alt="user"
                                               class="rounded-circle">
                                                    <span class="profile-status online pull-right"></span>
                                                </span>
                                        <div class="mail-contnet">
                                            <h5 class="message-title">Pavan kumar</h5>
                                            <span class="mail-desc">Just see the my admin!</span>
                                            <span class="time">9:30 AM</span>
                                        </div>
                                    </a>
                                    <!-- Message -->
                                    <a href="javascript:void(0)" class="message-item">
                                                <span class="user-img">

                                                    <img src="https://via.placeholder.com/52x52?text=User" alt="user"
                                                         class="rounded-circle">
                                                    <span class="profile-status busy pull-right"></span>
                                                </span>
                                        <div class="mail-contnet">
                                            <h5 class="message-title">Sonu Nigam</h5>
                                            <span class="mail-desc">I've sung a song! See you at</span>
                                            <span class="time">9:10 AM</span>
                                        </div>
                                    </a>
                                    <!-- Message -->
                                    <a href="javascript:void(0)" class="message-item">
                                                <span class="user-img">

                                                    <img src="https://via.placeholder.com/52x52?text=User" alt="user"
                                                         class="rounded-circle">
                                                    <span class="profile-status away pull-right"></span>
                                                </span>
                                        <div class="mail-contnet">
                                            <h5 class="message-title">Arijit Sinh</h5>
                                            <span class="mail-desc">I am a singer!</span>
                                            <span class="time">9:08 AM</span>
                                        </div>
                                    </a>
                                    <!-- Message -->
                                    <a href="javascript:void(0)" class="message-item">
                                                                                        <span class="user-img">


                                                    <img src="https://via.placeholder.com/52x52?text=User" alt="user"
                                                         class="rounded-circle">
                                                    <span class="profile-status offline pull-right"></span>
                                                                                        </span>
                                        <div class="mail-contnet">
                                            <h5 class="message-title">Pavan kumar</h5>
                                            <span class="mail-desc">Just see the my admin!</span>
                                            <span class="time">9:02 AM</span>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <a class="nav-link text-center link text-dark" href="javascript:void(0);">
                                    <b>See all e-Mails</b>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- ============================================================== -->
                <!-- End Messages -->
                <!-- ============================================================== -->
            </ul>
        </div>
    </nav>
</header>