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
                            {{-- <li class="dropdown messages-menu">
                                <a
                                    href="#"
                                    class="dropdown-toggle"
                                    data-toggle="dropdown"
                                >
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="label label-success">4</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">You have 4 messages</li>
                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class="menu">
                                            <li>
                                                <!-- start message -->
                                                <a href="#">
                                                    <div class="pull-left">
                                                        <img
                                                            src="dist/img/user2-160x160.jpg"
                                                            class="img-circle"
                                                            alt="User Image"
                                                        />
                                                    </div>
                                                    <h4>
                                                        Support Team
                                                        <small
                                                            ><i
                                                                class="fa fa-clock-o"
                                                            ></i>
                                                            5 mins</small
                                                        >
                                                    </h4>
                                                    <p>
                                                        Why not buy a new
                                                        awesome theme?
                                                    </p>
                                                </a>
                                            </li>
                                            <!-- end message -->
                                        </ul>
                                    </li>
                                    <li class="footer">
                                        <a href="#">See All Messages</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- Notifications: style can be found in dropdown.less -->
                            <li class="dropdown notifications-menu">
                                <a
                                    href="#"
                                    class="dropdown-toggle"
                                    data-toggle="dropdown"
                                >
                                    <i class="fa fa-bell-o"></i>
                                    <span class="label label-warning">10</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">
                                        You have 10 notifications
                                    </li>
                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class="menu">
                                            <li>
                                                <a href="#">
                                                    <i
                                                        class="fa fa-users text-aqua"
                                                    ></i>
                                                    5 new members joined today
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="footer">
                                        <a href="#">View all</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- Tasks: style can be found in dropdown.less -->
                            <li class="dropdown tasks-menu">
                                <a
                                    href="#"
                                    class="dropdown-toggle"
                                    data-toggle="dropdown"
                                >
                                    <i class="fa fa-flag-o"></i>
                                    <span class="label label-danger">9</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">You have 9 tasks</li>
                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class="menu">
                                            <li>
                                                <!-- Task item -->
                                                <a href="#">
                                                    <h3>
                                                        Design some buttons
                                                        <small
                                                            class="pull-right"
                                                            >20%</small
                                                        >
                                                    </h3>
                                                    <div class="progress xs">
                                                        <div
                                                            class="progress-bar progress-bar-aqua"
                                                            style="width: 20%"
                                                            role="progressbar"
                                                            aria-valuenow="20"
                                                            aria-valuemin="0"
                                                            aria-valuemax="100"
                                                        >
                                                            <span
                                                                class="sr-only"
                                                                >20%
                                                                Complete</span
                                                            >
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <!-- end task item -->
                                        </ul>
                                    </li>
                                    <li class="footer">
                                        <a href="#">View all tasks</a>
                                    </li>
                                </ul>
                            </li> --}}
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
                                    <!-- User image -->
                                    {{-- <li class="user-header">
                                        <img
                                            src="{{ public_path('/img/download.png') }}"
                                            class="img-circle"
                                            alt="User Image"
                                        /> --}}

                                        <p>
                                          Easter Campout Admin

                                        </p>
                                    </li>
                                    <!-- Menu Body -->
                                    {{-- <li class="user-body">
                                        <div class="row">
                                            <div class="col-xs-4 text-center">
                                                <a href="#">Followers</a>
                                            </div>
                                            <div class="col-xs-4 text-center">
                                                <a href="#">Sales</a>
                                            </div>
                                            <div class="col-xs-4 text-center">
                                                <a href="#">Friends</a>
                                            </div>
                                        </div>
                                        <!-- /.row -->
                                    </li> --}}
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        {{-- <div class="pull-left">
                                            <a
                                                href="#"
                                                class="btn btn-default btn-flat"
                                                >Profile</a
                                            >
                                        </div> --}}
                                        {{-- <div class="pull-left">
                                            <a
                                                href="#"
                                                class="btn btn-default btn-flat"
                                                >Sign out</a
                                            >
                                        </div> --}}
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
                        {{-- <div class="pull-left image">
                            <img
                                src="{{ public_path('/img/download.png') }}"
                                class="img-circle"
                                alt="User Image"
                            />
                        </div> --}}
                        {{-- <div class="pull-left info">
                            <>Admin</>

                        </div> --}}
                    </div>
                    <!-- search form -->
                    {{-- <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input
                                type="text"
                                name="q"
                                class="form-control"
                                placeholder="Search..."
                            />
                            <span class="input-group-btn">
                                <button
                                    type="submit"
                                    name="search" --}}
                                    {{-- id="search-btn"
                                    class="btn btn-flat"
                                >
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form> --}}
                    <!-- /.search form -->
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
                        {{-- Displaying Registered campers --}}

                            {{-- @if (count($users)> 0)
                                 <table  class="table table-bordered">
                                <tr>
                                    <th>S/N</th>
                                    <th>Surname</th>
                                    <th>First Name</th>
                                    <th>Actions (Edit, View, Download PDF)</th>
                                </tr>
                                <tr>
                                    @foreach ($users as $user)
                                                          <td>{{$user->id}}</td>
                                                          <td>{{$user->surname}}</td>
                                                          <td>{{$user->firstName}}</td>
                                <td>

                                    <a href="/admin/{{$user->id}}/edit"  class="mr-3"> <i class=" fa fa-edit mr-3" title="Edit Profile"> </i> </a>
                                     <a href="/admin/{{$user->id}}" class=""> <i class="mr-3 fa fa-eye " title="View Profile"> </i></a>
                                    <a href="{{ url('/downloadPDF/'.$user->id) }}"> <i class=" fa fa-download" title="Download PDF" ></i></a>
                                </td>
                                    @endforeach
                                </tr>
                            </table>                                    {{ $users->links() }}

                            @endif --}}


                        <!-- /.box-body -->
                        <div class="box-footer bg-dark">
                            <p class="text-center pt-3 pb-3 bg-dark text-white ">&copy; 2019 - {{ date('Y') }}, RCCG Junior Church, All rights reserved...</p>

                        </div>
                        <!-- /.box-footer-->
                    </div>
                    <!-- /.box -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->



            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Create the tabs -->
                <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                    <li>
                        <a href="#control-sidebar-home-tab" data-toggle="tab"
                            ><i class="fa fa-home"></i
                        ></a>
                    </li>

                    <li>
                        <a
                            href="#control-sidebar-settings-tab"
                            data-toggle="tab"
                            ><i class="fa fa-gears"></i
                        ></a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <!-- Home tab content -->
                    <div class="tab-pane" id="control-sidebar-home-tab">
                        <h3 class="control-sidebar-heading">Recent Activity</h3>
                        <ul class="control-sidebar-menu">
                            <li>
                                <a href="javascript:void(0)">
                                    <i
                                        class="menu-icon fa fa-birthday-cake bg-red"
                                    ></i>

                                    <div class="menu-info">
                                        <h4 class="control-sidebar-subheading">
                                            Langdon's Birthday
                                        </h4>

                                        <p>Will be 23 on April 24th</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <i
                                        class="menu-icon fa fa-user bg-yellow"
                                    ></i>

                                    <div class="menu-info">
                                        <h4 class="control-sidebar-subheading">
                                            Frodo Updated His Profile
                                        </h4>

                                        <p>New phone +1(800)555-1234</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <i
                                        class="menu-icon fa fa-envelope-o bg-light-blue"
                                    ></i>

                                    <div class="menu-info">
                                        <h4 class="control-sidebar-subheading">
                                            Nora Joined Mailing List
                                        </h4>

                                        <p>nora@example.com</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <i
                                        class="menu-icon fa fa-file-code-o bg-green"
                                    ></i>

                                    <div class="menu-info">
                                        <h4 class="control-sidebar-subheading">
                                            Cron Job 254 Executed
                                        </h4>

                                        <p>Execution time 5 seconds</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <!-- /.control-sidebar-menu -->

                        <h3 class="control-sidebar-heading">Tasks Progress</h3>
                        <ul class="control-sidebar-menu">
                            <li>
                                <a href="javascript:void(0)">
                                    <h4 class="control-sidebar-subheading">
                                        Custom Template Design
                                        <span
                                            class="label label-danger pull-right"
                                            >70%</span
                                        >
                                    </h4>

                                    <div class="progress progress-xxs">
                                        <div
                                            class="progress-bar progress-bar-danger"
                                            style="width: 70%"
                                        ></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <h4 class="control-sidebar-subheading">
                                        Update Resume
                                        <span
                                            class="label label-success pull-right"
                                            >95%</span
                                        >
                                    </h4>

                                    <div class="progress progress-xxs">
                                        <div
                                            class="progress-bar progress-bar-success"
                                            style="width: 95%"
                                        ></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <h4 class="control-sidebar-subheading">
                                        Laravel Integration
                                        <span
                                            class="label label-warning pull-right"
                                            >50%</span
                                        >
                                    </h4>

                                    <div class="progress progress-xxs">
                                        <div
                                            class="progress-bar progress-bar-warning"
                                            style="width: 50%"
                                        ></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <h4 class="control-sidebar-subheading">
                                        Back End Framework
                                        <span
                                            class="label label-primary pull-right"
                                            >68%</span
                                        >
                                    </h4>

                                    <div class="progress progress-xxs">
                                        <div
                                            class="progress-bar progress-bar-primary"
                                            style="width: 68%"
                                        ></div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <!-- /.control-sidebar-menu -->
                    </div>
                    <!-- /.tab-pane -->
                    <!-- Stats tab content -->
                    <div class="tab-pane" id="control-sidebar-stats-tab">
                        Stats Tab Content
                    </div>
                    <!-- /.tab-pane -->
                    <!-- Settings tab content -->
                    <div class="tab-pane" id="control-sidebar-settings-tab">
                        <form method="post">
                            <h3 class="control-sidebar-heading">
                                General Settings
                            </h3>

                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Report panel usage
                                    <input
                                        type="checkbox"
                                        class="pull-right"
                                        checked
                                    />
                                </label>

                                <p>
                                    Some information about this general settings
                                    option
                                </p>
                            </div>
                            <!-- /.form-group -->

                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Allow mail redirect
                                    <input
                                        type="checkbox"
                                        class="pull-right"
                                        checked
                                    />
                                </label>

                                <p>
                                    Other sets of options are available
                                </p>
                            </div>
                            <!-- /.form-group -->

                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Expose author name in posts
                                    <input
                                        type="checkbox"
                                        class="pull-right"
                                        checked
                                    />
                                </label>

                                <p>
                                    Allow the user to show his name in blog
                                    posts
                                </p>
                            </div>
                            <!-- /.form-group -->

                            <h3 class="control-sidebar-heading">
                                Chat Settings
                            </h3>

                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Show me as online
                                    <input
                                        type="checkbox"
                                        class="pull-right"
                                        checked
                                    />
                                </label>
                            </div>
                            <!-- /.form-group -->

                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Turn off notifications
                                    <input type="checkbox" class="pull-right" />
                                </label>
                            </div>
                            <!-- /.form-group -->

                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Delete chat history
                                    <a
                                        href="javascript:void(0)"
                                        class="text-red pull-right"
                                        ><i class="fa fa-trash-o"></i
                                    ></a>
                                </label>
                            </div>
                            <!-- /.form-group -->
                        </form>
                    </div>
                    <!-- /.tab-pane -->
                </div>
            </aside>
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
