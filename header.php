 <div class="topbar">

            <!-- LOGO -->
            <div class="topbar-left">
                <a href="index.php" class="logo">
                    <span>
                        <img src="assets/images/focuslogo.png" alt="logo-small" class="logo-sm">
                    </span>
                    <span>
                        <img src="assets/images/focuslong.png" alt="logo-large" class="logo-lg logo-light" style="height: 45px">
                        <img src="assets/images/focuslong.png" alt="logo-large" class="logo-lg" style="height: 25px">
                    </span>
                </a>
            </div>
            <!--end logo-->
            <!-- Navbar -->
            <nav class="navbar-custom">    
                <ul class="list-unstyled topbar-nav float-right mb-0"> 
                    
                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <i class="ti-bell noti-icon"></i>
                            <span class="badge badge-danger badge-pill noti-icon-badge">1</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-lg pt-0">
                           
                            <h6 class="dropdown-item-text font-15 m-0 py-3 bg-primary text-white d-flex justify-content-between align-items-center">
                                Notifications <span class="badge badge-light badge-pill">1</span>
                            </h6> 
                            <div class="slimscroll notification-list">
                                <!-- item-->
                                <a href="#" class="dropdown-item py-3">
                                    <small class="float-right text-muted pl-2">2 min ago</small>
                                    <div class="media">
                                        <div class="avatar-md bg-primary">
                                           <i class="la la-calendar text-white"></i>
                                        </div>
                                        <div class="media-body align-self-center ml-2 text-truncate">
                                            <h6 class="my-0 font-weight-normal text-dark">Plans update</h6>
                                            <small class="text-muted mb-0">You can now edit plans for dates till Dec 2021.</small>
                                        </div><!--end media-body-->
                                    </div><!--end media-->
                                </a><!--end-item-->
                               
                            </div>
                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item text-center text-primary">
                                View all <i class="fi-arrow-right"></i>
                            </a>
                        </div>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <img src="assets/images/users/user-1.png" alt="profile-user" class="rounded-circle" /> 
                            <span class="ml-1 nav-user-name hidden-sm"><?php echo $_SESSION['staff_name'] ;?> <i class="mdi mdi-chevron-down"></i> </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#"><i class="ti-user text-muted mr-2"></i> Profile</a>                            
                            <a class="dropdown-item" href="#"><i class="ti-settings text-muted mr-2"></i> Settings</a>
                            <a class="dropdown-item" href="#"><i class="ti-lock text-muted mr-2"></i> Lock screen</a>
                            <div class="dropdown-divider mb-0"></div>
                            <a class="dropdown-item" href="login.php"><i class="ti-power-off text-muted mr-2"></i> Logout</a>
                        </div>
                    </li>
                </ul><!--end topbar-nav-->
    
                <ul class="list-unstyled topbar-nav mb-0">                        
                    <li>
                        <button class="nav-link button-menu-mobile waves-effect waves-light">
                            <i class="ti-menu nav-icon"></i>
                        </button>
                    </li>
                    <li class="hide-phone app-search">
                        <form role="search" class="">
                            <input type="text" id="" placeholder="Search..." class="form-control">
                            <a href=""><i class="fas fa-search"></i></a>
                        </form>
                    </li>
                </ul>
            </nav>
            <!-- end navbar-->
        </div>
        <!-- Top Bar End -->

       <!-- Left Sidenav -->
        <div class="left-sidenav">
            <ul class="metismenu left-sidenav-menu">
                <li>
                    <a href="index.php" class="active"><i class="ti-home text-warning"></i><span>Dashboard</span></a>
                </li>              
           
                  <li>
                    <a href="javascript: void(0);"><i class="ti-star"></i><span>4 SPAs</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li class="nav-item text-truncate"><a class="nav-link" href="discipleship.php"><i class="ti-control-record "></i>Discipleship</a></li>
                        <li class="nav-item text-truncate"><a class="nav-link" href="leadership.php"><i class="ti-control-record "></i>Leadership Development</a></li>
                        <li class="nav-item text-truncate"><a class="nav-link" href="evangelism.php"><i class="ti-control-record "></i>Evangelism</a></li>
                        <li class="nav-item text-truncate"><a class="nav-link" href="social.php"><i class="ti-control-record "></i>Social Transformation </a></li>
                    </ul>
                </li>
             <!--    <li>
                    <a href="javascript: void(0);"><i class="ti-user text-primary"></i><span>Discipleship</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href="discipleship.php"><i class="ti-control-record"></i>Plan Here</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><i class="ti-control-record"></i>Submit Data</a></li>
                    </ul>                        
                </li>

                <li>
                    <a href="javascript: void(0);"><i class="ti-crown text-primary"></i><span>Leadership Dev...</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href="leadership.php"><i class="ti-control-record"></i>Plan Here</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><i class="ti-control-record"></i>Submit Data</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);"><i class="ti-star text-primary"></i><span>Evangelism</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                       
                        <li class="nav-item"><a class="nav-link" href="evangelism.php"><i class="ti-control-record"></i>Plan Here</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><i class="ti-control-record"></i>Submit Data</a></li>
                       
                    </ul>
                </li>                   
 --><!-- 
                <li>
                    <a href="javascript: void(0);"><i class="ti-layers-alt text-primary"></i><span>Social Trans...</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href="social.php"><i class="ti-control-record"></i>Plan Here</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><i class="ti-control-record"></i>Submit Data</a></li>
                    </ul> -->
                </li>
               
                <li>
                    <a href="javascript: void(0);"><i class="ti-world text-pink"></i><span>5 Enablers</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li class="nav-item text-truncate"><a class="nav-link" href="instgrowth.php"><i class="ti-control-record "></i>Institutional Growth and Sustaininability</a></li>
                        <li class="nav-item text-truncate"><a class="nav-link" href="stratpdn.php"><i class="ti-control-record "></i>Strategic Partnerships Development & Networking</a></li>
                        <li class="nav-item text-truncate"><a class="nav-link" href="research.php"><i class="ti-control-record "></i>Research, Innovation and Publishing</a></li>
                        <li class="nav-item text-truncate"><a class="nav-link" href="digital.php"><i class="ti-control-record "></i>Investment in Digital Media & Strategies </a></li>
                        <li class="nav-item text-truncate"><a class="nav-link" href="infrastructure.php"><i class="ti-control-record "></i>Infrastructural Development </a></li>
                        
                    </ul>
                </li>
                <hr>
                <li>
                    <a href="timeline.php" class="active"><i class="ti-calendar text-success"></i><span>My Plans</span></a>
                </li>                
                <li> 
                    <a href="javascript: void(0);"><i class="ti-folder"></i><span>Data Reports</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                         <li class="nav-item"><a class="nav-link" href="#"><i class="ti-control-record"></i>My Reports</a></li>
                        <!--  <li class="nav-item"><a class="nav-link" href="#"><i class="ti-control-record"></i>Regionally</a></li>
                         <li class="nav-item"><a class="nav-link" href="#"><i class="ti-control-record"></i>Nationally</a></li> -->
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);"><i class="ti-wallet "></i><span>Switch To</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                       <li class="nav-item"><a class="nav-link" href="#"><i class="ti-control-record"></i>CMF</a></li>
                      <!--  <li class="nav-item"><a class="nav-link" href="#"><i class="ti-control-record"></i>RC</a></li>
                       <li class="nav-item"><a class="nav-link" href="#"><i class="ti-control-record"></i>Management</a></li> -->
                    </ul>
                </li>
                <hr>
                <li>
                    <a href="https://www.focuskenya.org/focus-sp-2021-25-full-version/" target="_blank" class="active"><i class="ti-download text-success"></i><span>SP Full Version</span></a>
                </li>
                <li>
                    <a href="https://www.focuskenya.org/focus-strategic-plan-2021-2025-students-version/" target="_blank" class="active"><i class="ti-download text-secondary"></i><span>SP Students' Copy</span></a>
                </li>
                <li>
                    <a href="https://www.focuskenya.org/focus-strategic-plan-2021-2025-associates-version/" target="_blank" class="active"><i class="ti-download text-pink"></i><span>SP Associates' Copy</span></a>
                </li>
                <li>
                    <a href="https://www.focuskenya.org/focus-sp-2021-25-abridged-version/" target="_blank" class="active"><i class="ti-download text-warning"></i><span>SP Abridged Version</span></a>
                </li>
                <li>
                    <a href="https://www.focuskenya.org/focus-sp-2021-25-in-graphics/" target="_blank" class="active"><i class="ti-download text-purple"></i><span>SP Graphics Version</span></a>
                </li>
                <hr>
             <!--    <li>
                    <a href="#" class="active"><i class="ti-user text-dark"></i><span>My Profile</span></a>
                </li> -->
                <li>
                    <a href="#" class="active"><i class="ti-help text-secondary"></i><span>Need Help?</span></a>
                </li>
                <li>
                    <a href="login.php" class="active"><i class="ti-power-off text-danger"></i><span>Logout</span></a>
                </li>

            </ul>
        </div>