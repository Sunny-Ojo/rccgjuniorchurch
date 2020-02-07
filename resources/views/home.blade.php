<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>Admin Dashboard</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta
            content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"
            name="viewport"
        />
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
        <!-- Font Awesome -->
        <link rel="stylesheet" href="fonts/font-awesome.min.css" />
        <!-- Ionicons -->
        <link rel="stylesheet" href="fonts/ionicons.min.css" />
        <!-- Theme style -->
        <link rel="stylesheet" href="dist/css/AdminLTE.min.css" />
        <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="hold-transition skin-purple sidebar-mini">
        <!-- Site wrapper -->
        <div class="wrapper">
            <header class="main-header">
                <!-- Logo -->
                <a href="/" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>Menu</b></span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg">Easter Campout 2020</span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a
                        href="#"
                        class="sidebar-toggle"
                        data-toggle="offcanvas"
                        role="button"
                    >
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>

                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- Messages: style can be found in dropdown.less-->

                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a
                                    href="#"
                                    class="dropdown-toggle"
                                    data-toggle="dropdown"
                                >
                                    {{-- <img
                                        src="{{ public_path('/img/download.png') }}"
                                        class="user-image"
                                        alt="User Image"
                                    /> --}}
                                    <span class="hidden-xs"
                                        {{-- >{{ auth()->user()->name }}</span --}}
                                        ></span
                                    >
                                </a>
                                <ul class="dropdown-menu">


                                        <p>
                                          Easter Campout Admin

                                        </p>
                                    </li>

                                    <!-- Menu Footer-->
                                    <li class="user-footer">

                                    </li>
                                </ul>
                            </li>


                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>

            <!-- =============================================== -->

            <!-- Left side column. contains the sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->

                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="header">MAIN NAVIGATION</li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-share"></i>
                                <span>Pins</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                    <a href="/pin"
                                        ><i class="fa fa-circle-o"></i> Generate Pins</a
                                    >
                                </li>
                                <li>
                                    <a href="/generatedPins"
                                        ><i class="fa fa-circle-o"></i> Generated Pins</a
                                    >
                                </li>

                    </ul>

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-share"></i>
                                <span>Teachers</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                    <a href="/teachers"
                                        ><i class="fa fa-circle-o"></i> View registered teachers</a
                                    >
                                </li>

                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- =============================================== -->

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                     Admin Dashboard
                        <small></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <a href="#"><i class="fa fa-dashboard"></i> Home</a>
                        </li>
                        <li><a href="/pin">Pins</a></li>
                        <li class=""><a href="/teachers"> Teachers</a></li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <!-- Default box -->
                    <div class="box">
                        <div class="box-header with-border">


                            <form action="/search" method="POST" class="sidebar-form">
                                {{ csrf_field() }}
                                <div class="input-group">
                                    <input
                                        type="text"
                                        name="q"
                                        class="form-control"
                                        placeholder="Search for a teenager"
                                    />
                                    <span class="input-group-btn">
                                        <button
                                            type="submit"
                                            {{-- name="search" --}}
                                            id="search-btn"
                                            class="btn btn-flat"
                                        >
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                            </form>

                        </div>
                        <div class="box-body">
                                                      @include('layouts.msg')

                            </body>
                        </div>
                        {{-- Displaying Registered campers --}}
                        <div class="text-center card-header">

                          <h3 class="breadcrumb"> Registered Campers</h3>
                        </div>
                        <div  class="card-body">

                            @if (count($users)> 0)
                            <table class="table table-striped table-hover table-bordered">
                                <tr>
                                  <th>Surname</th>
                                  <th>First Name</th>
                                  <th>Actions</th>
                                </tr>
                                @foreach ($users as $user)
                                    <tr>
                                        <td><h3>{{$user->surname}}</h3></td>
                                        <td><h3>{{$user->firstName}}</h3></td>
                                        <td>

                                            <h3><a href="/admin/{{$user->id}}/edit"  class="mr-3"> <i class=" fa fa-edit mr-3" title="Edit Profile"> </i> </a>
                                             <a href="/admin/{{$user->id}}" class=""> <i class="mr-3 fa fa-eye " title="View Profile"> </i></a>
                                            <a href="{{ url('/downloadPDF/'.$user->id) }}"> <i class=" fa fa-download" title="Download PDF" ></i></a>
                                        </h3></td>
                                    </tr>
                                @endforeach
                                {{ $users->links() }}
                            </table>
                            @else
                        <h4 class="text-danger mr-3">{{'No registered users found!!!'}}</h4>

                            @endif


                        </div>
                        <!-- /.box-body -->
                        <div class="">
                            <p class="text-center pt-3 pb-3 bg-dark text-white ">&copy; 2019 - {{ date('Y') }}. RCCG Junior Church, All rights reserved...</p>

                        </div>
                        <!-- /.box-footer-->
                    </div>
                    <!-- /.box -->
                </section>
                <!-- /.content -->
            </div>

        <!-- jQuery 2.2.3 -->
        <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <!-- SlimScroll -->
        <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script src="plugins/fastclick/fastclick.js"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/app.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="dist/js/demo.js"></script>
    </body>
</html>
