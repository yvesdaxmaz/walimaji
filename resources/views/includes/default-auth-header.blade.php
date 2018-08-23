<header class="main-header">
    <a href="/" class="logo">
        <span class="logo-mini">
                    <b>W</b>LJ</span>
        <span class="logo-lg">
                    <b>WALI</b>MAJI</span>
    </a>
    <nav class="navbar navbar-static-top">
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown notifications-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i>
                        <span class="label label-warning">10</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">You have 10 notifications</li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class="menu">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the page and may cause
                                        design problems
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-users text-red"></i> 5 new members joined
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-user text-red"></i> You changed your username
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="footer">
                            <a href="notification_user.html">View all</a>
                        </li>
                    </ul>
                </li>
                <!-- Messages: style can be found in dropdown.less-->
                <li class="dropdown messages-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-user-o"></i>
                        <span class="label label-success">4</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">You have 4 followers</li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class="menu">
                                <li>
                                    <!-- start message -->
                                    <a href="#">
                                        <div class="pull-left">
                                            <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                        </div>
                                        <h4>
                                            Alexander Pierce
                                            <small>Now</small>
                                        </h4>
                                        <p>Traders</p>
                                    </a>
                                </li>
                                <!-- end message -->
                                <li>
                                    <a href="#">
                                        <div class="pull-left">
                                            <img src="../../dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                                        </div>
                                        <h4>
                                            Norman Poppins
                                            <small> 2 hours ago</small>
                                        </h4>
                                        <p>Tranformers</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="pull-left">
                                            <img src="../../dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                                        </div>
                                        <h4>
                                            Jane Middelthon
                                            <small>Yesterday</small>
                                        </h4>
                                        <p>Traders</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="pull-left">
                                            <img src="../../dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                                        </div>
                                        <h4>
                                            John Ruscue
                                            <small>10 jan</small>
                                        </h4>
                                        <p>Transformers</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="footer">
                            <a href="followers.html">See All followers</a>
                        </li>
                    </ul>
                </li>

                {{--//////////////////// users dropdown ////////////////////--}}
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="../../dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                        <span class="hidden-xs">NAME</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="user-header">
                            <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                            <p>
                                TYPE
                                <small>DATE</small>
                            </p>
                        </li>


                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">Profil</a>
                            </div>
                            <div class="pull-right">
                                <a href="#" class="btn btn-default btn-flat">Deconnexion</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>

<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="http://www.gstatic.com/webp/gallery/2.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>NAME</p>
                <p>TYPE</p>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">Mon compte</li>
            <li class="active">
                <a href="#">
                    <i class="fa fa-dashboard"></i>
                    <span>Acceuil</span>
                </a>
            </li>
            <li>
                <a href="followers.html">
                    <i class="fa fa-files-o"></i>
                    <span>Mes fournisseurs</span>
                    <span class="pull-right-container">
                                <span class="label label-primary pull-right">4</span>
                            </span>
                </a>
            </li>
            <li>
                <a href="following.html">
                    <i class="fa fa-th"></i>
                    <span>Mes abonnes</span>
                </a>
            </li>
            <li>
                <a href="list_product_user.html">
                    <i class="fa fa-pie-chart"></i>
                    <span>Mon stock</span>
                </a>
            </li>
        </ul>
    </section>
</aside>