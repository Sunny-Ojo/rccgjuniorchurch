<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>search for users</title>
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
                <a href="/admin" class="logo">
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
                            <!-- Control Sidebar Toggle Button -->
                            <li>
                                <a href="#" data-toggle="control-sidebar"
                                    ><i class="fa fa-gears"></i
                                ></a>
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
                    <div class="user-panel">

                    </div>
                                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="header">MAIN NAVIGATION</li>
                        <li class="treeview">
                            <a href="/pin">
                                <i class="fa fa-dashboard"></i>
                                <span>Generate Pins</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu text-white">
                                <li>
                                    <a href="/generatedPins"
                                        ><i class="fa fa-circle-o"></i> Generated Pins</a
                                    >
                                </li>
                                <li class="treeview">
                                    {!! Form::open(['action'=>'PagesController@checked', 'method'=>'GET', 'class'=>'form-inline']) !!}
                                    {{-- {{ Form::label('pin', 'Generate Pins', ['class'=>'text-white']) }} --}}

                                    {{ Form::select('pin', ['1' => 1, '2'=>2,'3'=>3,'4'=>4,'5'=>5],'',['class'=>'form-control']) }}

                                    {{ Form::email('email', '', ['class'=>'form-control',  'placeholder'=>' Email Address']) }}

                                    {{ Form::submit('Send pin(s)', ['class'=>'btn btn-warning mt-2' ]) }}
                                    {!! Form::close() !!}
                                    >
                                </li>
                            </ul>
                        </li>

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
                    </h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#"><i class="fa fa-dashboard"></i> Home</a>
                        </li>
                        <li><a href="/pin">Pins</a></li>
                        <li class=""><a href="/teachers"> Teachers</a></li>
                    </ul>
                </section>

                <!-- Main content -->
                <section class="content">
                    <!-- Default box -->
                    <div class="box">
                        <div class="box-header with-border">
<a href="/admin" class="btn btn-bitbucket ml-3">Back</a>
                            {{-- <div class="box-tools pull-right">
                                <button
                                    type="button"
                                    class="btn btn-box-tool"
                                    data-widget="collapse"
                                    data-toggle="tooltip"
                                    title="Collapse"
                                >
                                    <i class="fa fa-minus"></i>
                                </button>
                                <button
                                    type="button"
                                    class="btn btn-box-tool"
                                    data-widget="remove"
                                    data-toggle="tooltip"
                                    title="Remove"
                                >
                                    <i class="fa fa-times"></i>
                                </button>
                            </div> --}}
                            <form action="/search" method="POST" class="sidebar-form">
                                {{ csrf_field() }}
                                <div class="input-group">
                                    <input
                                        type="text"
                                        name="q"
                                        class="form-control  "
                                        placeholder="Search for a teenager"
                                    />
                                    <span class="input-group-btn">
                                        <button
                                            type="submit"
                                            id="search-btn"
                                            class="btn btn-box-tool"
                                        >
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                            </form>
                            @if (isset($details))
                        <p >your search result for <b>{{$query}}</b> are:</p>
                        <table class="table table-striped table-hover table-bordered">
                            <tr>
                              <th>Surname</th>
                              <th>First Name</th>
                              <th>Actions</th>
                            </tr>
                            @foreach ($details as $item)
                                <tr>
                                    <td><h3>{{$item->surname}}</h3></td>
                                    <td><h3>{{$item->firstName}}</h3></td>
                                    <td>

                                        <h3><a href="/admin/{{$item->id}}/edit"  class="mr-3"> <i class=" fa fa-edit mr-3" title="Edit Profile"> </i> </a>
                                         <a href="/admin/{{$item->id}}" class=""> <i class="mr-3 fa fa-eye " title="View Profile"> </i></a>
                                        <a href="{{ url('/downloadPDF/'.$item->id) }}"> <i class=" fa fa-download" title="Download PDF" ></i></a>
                                    </h3></td>
                                </tr>
                            @endforeach
                        </table>
                            @endif
                        </div>
                        <div class="box-body">
                                                      @include('layouts.msg')

                            </body>
                        </div>

                        <!-- /.box-body -->
                        <div class="box-footer bg-dark">
                            <p class="text-center pt-3 pb-3 bg-dark text-white ">&copy; 2019 - {{ date('Y') }}. RCCG Junior Church, All rights reserved...</p>

                        </div>
                        <!-- /.box-footer-->
                    </div>
                    <!-- /.box -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->




            <!-- /.control-sidebar -->
            <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
        </div>
        <!-- ./wrapper -->

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
