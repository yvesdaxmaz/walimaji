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
    </nav>
</header>

<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                <img src="http://www.gstatic.com/webp/gallery/2.jpg" class="img-circle" alt="User Image" style=" height: 45px">
            </div>
            <div class="pull-left info">
                <p>{{$userDetail[0]->name}}</p>
                <span>{{$userDetail[0]->email}}</span>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">Mon compte

            <li class="active">
                <a href="/">
                    <i class="fa fa-dashboard"></i>
                    <span>Accueil</span>
                </a>
            </li>
            <li>
                <a href="/user/products">
                    <i class="fa fa-files-o"></i>
                    <span>Mon stock</span>
                    <span class="pull-right-container">
                                <span class="label label-primary pull-right">4</span>
                            </span>
                </a>
            </li>
            <li>
                <a href="/user/followers">
                    <i class="fa fa-th"></i>
                    <span>Mes abonnes</span>
                </a>
            </li>
            <li>
                <a href="user/following" >
                    <i class="fa fa-pie-chart"></i>
                    <span>Mes abonnements</span>
                </a>
            </li>
            <li>
                <a href="list_product_user.html" >
                    <i class="fa fa-pie-chart"></i>
                    <span>Mes fournisseurs</span>
                </a>
            </li>
            <li>
                <a href="/user/providers" >
                    <i class="fa fa-pie-chart"></i>
                    <span>Mes fournisseurs</span>
                </a>
            </li>
            <li>
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                    <i class="fa fa-pie-chart"></i>
                    <span>{{ __('Deconnextion') }}</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
    </section>
</aside>