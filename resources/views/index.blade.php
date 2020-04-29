<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>@yield('title', 'Admin Dashboard')</title>

  <!-- Custom fonts for this template-->
<link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
<link href="{{asset('css1/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">
@php
    $allPins = count($adminPins)
@endphp
  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-icon">
            <i class="ml-3 fa fa-user-shield"></i>
        </div>
    <div class="sidebar-brand-text mx-3"> {{auth()->user()->name}}</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="/admin">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-user"></i>
          <span>Campers</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="/campers">View Registered Campers</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-user"></i>
          <span>Teachers</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item" href="/teachers">View Registered Teachers</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-wrench"></i>
          <span>Pins</span>
        </a>
        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="/pin">Generate Pins</a>
            <a class="collapse-item" href="/generatedpins">View Generated Pins <span class="bg-danger text-white p-1">{{ $allPins }}</span></a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Addons
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Logout</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Logout screen:</h6>
          <a class="collapse-item" href="{{ url('/logoutadmin') }}">
            <i
                   class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"
               ></i> {{ __('Logout') }}
       </a>



          </div>
        </div>
      </li>

      <!-- Nav Item - Charts -->

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>


  <li class="nav-item dropdown no-arrow  list-unstyled">
                <a title="" class="nav-link " href="/admin" id="" role="link" data-toggle="" aria-haspopup="true" aria-expanded="false">
                    <img style="height:40px;width:40px;border-radius:50px" src="{{asset('/img/download.png')}}" alt="Rccg Logo">

                </a>
            </li>
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto mr-5">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->


            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
                <a title="Homepage" class="nav-link " href="/" id="" role="link" data-toggle="" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-home fa-1x"></i>
                </a>
            </li>
            <li class="nav-item dropdown no-arrow mx-1">
              <a title="Campers" class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-users fa-2x"></i>
                @php
                    $campers = count($campers);
                    $teachers = count($teachers);
                @endphp
                <!-- Counter - Alerts -->
              <span class="badge badge-danger badge-counter">{{$campers}}</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                 Campers Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="/campers">

                    <div class="font-weight-bold">
                      <div class="text-truncate">@php
                          if($campers == 0){
                                 echo ' No camper has registered';

                          }
                           elseif ($campers == 1) {
                               echo $campers. ' camper has registered ';
                           }
                           else {
                               echo $campers. ' Campers have registered';
                           }
                      @endphp
                      </div>
                    </div>
                  </a>
                  <a class="dropdown-item d-flex align-items-center" href="/campers">

                    <div>
                      <div class="text-truncate font-weight-bold">Go to Campers board</div>
                    </div>
                  </a>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a title="Teachers"class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user fa-fw fa-2x"></i>
                <!-- Counter - Messages -->
              <span class="badge badge-danger badge-counter">{{$teachers}}</span>
              </a>
              <!-- Dropdown - Messages -->
              <div  class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                 Teachers Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="/teachers">

                  <div class="font-weight-bold">
                    <div class="text-truncate">@php
                        if($teachers == 0){
                               echo 'No Teacher has registered';

                        }
                         elseif ($teachers == 1) {
                             echo $teachers. ' teacher has registered ';
                         }
                         else {
                             echo $teachers. ' teachers have registered';
                         }
                    @endphp
                    </div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="/teachers">

                  <div>
                    <div class="text-truncate font-weight-bold">Go to teachers board</div>
                  </div>
                </a>
                </div>
            </li>
            <li class="nav-item dropdown no-arrow mx-1">

              <a title="Logout" class="nav-link dropdown-toggle" href="{{ url('/logoutadmin') }}">
                <i
                class="fas fa-sign-out-alt fa-2x fa-fw mr-2 text-gray-400"
            ></i>
               </a>

          </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <h1 class="lead bg-gradient-dark text-white text-center p-2 " style="border-radius:20px"><marquee behavior="" direction="left">Welcome to 2020 Easter Campout Admin Dashboard. </marquee></h1>
            @include('layouts.msg')
        <div class="jumbotron text-dark text-center">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-6">
                <img src="{{asset('/img/admin2.jpg')}} "style="width:100%;height:100%" alt="welcome image for admin">
                </div>
                <div class="col-md-6 col-lg-6">
                    <h1 class="text-success xs text-uppercase lead mt-2">Welcome {{ auth()->user()->name }},</h1>
                    <h5 class="text-primary">We are proud to have you as an <b class="text-danger">ADMIN</b> for this campout</h5>
                    <h6>Here you can manage all the teenagers that has registered.
                    you can view, edit and print out their slips</h6>
                </div>

            </div>
            {{-- <h1 class="text-success xs">Welcome Admin !!!</h1>
            <h5 class="text-primary">We are proud to have you as an Admin for this campout</h5>
            <h6>Here you can manage all the teenagers that has registered.
            you can view, edit and print out their slips</h6> --}}
        </div>
        <div class="row my-5 ">
            <div class="col-lg-6 col-md-6 mb-4">
                <div class="card border-left-danger shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                              <a class="btn btn-lg btn-danger p-2" href="/campers">
              @php
                   if($campers == 0){
                             echo 'No camper has registered';

                      }
                       elseif ($campers == 1) {
                           echo $campers. ' camper has registered ';
                       }
                       else {
                           echo $campers. ' Campers have registered';
                       }
              @endphp
          </a>

                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Total number of registered Campers</div>

                      </div>
                      <div class="col-auto">
                        <i class="fa fa-users fa-3x text-gray-300 text-center"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>




                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                      <div class="card-body">
                        <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                <a class="btn btn-lg btn-success p-2" href="/teachers">

                                     @php
                    if($teachers == 0){
                               echo 'No Teacher has registered';

                        }
                         elseif ($teachers == 1) {
                             echo $teachers. ' teacher has registered ';
                         }
                         else {
                             echo $teachers. ' teachers have registered';
                         }
               @endphp

        </a>
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Total number of registered Campers</div>

                          </div>
                          <div class="col-auto ">
                            <i class="fa fa-user-alt fa-3x text-gray-300 text-center" ></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>


        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class=" my-auto">
          <div class="container-fluid copyright text-center bg-dark my-auto pt-3 pb-3">
            <span class="text-white">Copyright &copy; 2019 - {{ date('Y') }}. RCCG Junior Church, All rights reserved...</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->


  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
<script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
<script src="{{asset('js1/sb-admin-2.min.js')}}"></script>

  <!-- Page level plugins -->
<script src="{{asset('vendor/chart.js/Chart.min.js')}}"></script>

  <!-- Page level custom scripts -->
<script src="{{asset('js1/demo/chart-area-demo.js')}}"></script>
<script src="{{asset('js1/demo/chart-pie-demo.js')}}"></script>

</body>

</html>
