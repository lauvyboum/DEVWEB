<div class="navbar">
    <div class="navbar-inner">
        <div class="sidebar-pusher">
            <a href="javascript:void(0);" class="waves-effect waves-button waves-classic push-sidebar">
                <i class="fa fa-bars"></i>
            </a>
        </div>
        <div class="logo-box">
            <a href="index.php" class="logo-text"><img src="assets/images/logo.png" alt="LETOA-G" height="50"></a>
        </div><!-- Logo Box -->
        <div class="search-button">
            <a href="javascript:void(0);" class="waves-effect waves-button waves-classic show-search"><i class="fa fa-search"></i></a>
        </div>
        <div class="topmenu-outer">
            <div class="top-menu">
                <ul class="nav navbar-nav navbar-left">
                    <li>
                        <a href="javascript:void(0);" class="waves-effect waves-button waves-classic sidebar-toggle"><i class="fa fa-bars"></i></a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="javascript:void(0);" class="waves-effect waves-button waves-classic show-search"><i class="fa fa-search"></i></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown">
                            <span class="user-name"><?php echo $_SESSION['username']; ?><i class="fa fa-angle-down"></i></span>
                            <img class="img-circle avatar" src="assets/images/avatar1.png" width="40" height="40" alt="">
                        </a>
                        <ul class="dropdown-menu dropdown-list" role="menu">
                            <li role="presentation"><a href="#"><i class="fa fa-user"></i>Profile</a>
                            </li>
                            <li role="presentation"><a href="#"><i class="fa fa-calendar"></i>Calendar</a></li>
                            <li role="presentation"><a href="#"><i class="fa fa-envelope"></i>Inbox<span class="badge badge-success pull-right">4</span></a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a href="#"><i class="fa fa-lock"></i>Lock
                                    screen</a></li>
                            <li role="presentation"><a href="logout.php"><i class="fa fa-sign-out m-r-xs"></i>Se déconnecter</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="logout.php" class="log-out waves-effect waves-button waves-classic">
                            <span><i class="fa fa-sign-out m-r-xs"></i>Se déconnecter</span>
                        </a>
                    </li>
                </ul><!-- Nav -->
            </div><!-- Top Menu -->
        </div>
    </div>
</div><!-- Navbar -->