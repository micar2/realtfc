<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->

        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Compañias</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{ route('admin.companies.show') }}"><i class="fa fa-circle-o"></i>Ver</a></li>
                    <li><a href={{ route('admin.companies.create') }}><i class="fa fa-circle-o"></i>Crear</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Articulos</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{ route('admin.articles.show') }}"><i class="fa fa-circle-o"></i>Ver</a></li>
                    <li><a href="{{ route('admin.articles.create') }}"><i class="fa fa-circle-o"></i>Crear</a></li>
                </ul>
            </li>

            {{--<li class="treeview">--}}
                {{--<a href="#">--}}
                    {{--<i class="fa fa-dashboard"></i> <span>Gestion</span>--}}
                    {{--<span class="pull-right-container">--}}
              {{--<i class="fa fa-angle-left pull-right"></i>--}}
            {{--</span>--}}
                {{--</a>--}}
                {{--<ul class="treeview-menu">--}}
                    {{--<li class="active"><a href="#"><i class="fa fa-circle-o"></i>Ver</a></li>--}}
                    {{--<li><a href="index2.html"><i class="fa fa-circle-o"></i>Crear</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Pedidos</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{ route('admin.orders.show') }}"><i class="fa fa-circle-o"></i>Ver</a></li>
                    <li><a href="{{ route('admin.orders.create') }}"><i class="fa fa-circle-o"></i>Crear</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Usuarios</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{ route('admin.users.show') }}"><i class="fa fa-circle-o"></i>Ver</a></li>
                    <li><a href="{{ route('admin.users.create') }}"><i class="fa fa-circle-o"></i>Crear</a></li>
                </ul>
            </li>

            </ul>
    </section>
    <!-- /.sidebar -->
</aside>