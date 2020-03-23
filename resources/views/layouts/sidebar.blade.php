<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Admin</title>
  <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="/plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  {{-- full calander --}}
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>

  <link rel="stylesheet" href="/plugins/toastr/toastr.min.css">
  <link rel="stylesheet" href="/css/bootstrap-datepicker3.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
<style>
    .breadcrumb{
      margin: 0!important;
      background-color: whitesmoke!important;
      border-radius: 0!important;
    }
    .btn-delete{
      background: transparent!important;
      border: none!important;
    }
    .text-dark{
      color: #000!important;
    }
  /* custom */
  .wrappers {
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .wrappers .file-upload {
    height: 200px;
    width: 200px;
    border-radius: 100px;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    border: 4px solid #fff;
    overflow: hidden;
    background-image: linear-gradient(to bottom, #2590eb 50%, #fff 50%);
    background-size: 100% 200%;
    transition: all 1s;
    color: #fff;
    font-size: 100px;
  }
.file-upload{
  background-position: center center!important;
  background-repeat: no-repeat!important;
  background-size: cover!important;
  height: 310px!important;
  width: 310px!important;
}
  .wrappers .file-upload input[type='file'] {
    height: 200px;
    width: 200px;
    position: absolute;
    top: 0;
    left: 0;
    opacity: 0;
    cursor: pointer;
  }

  .wrappers .file-upload:hover {

    color: #2590eb;
  }
body.swal2-toast-shown .swal2-container-fluid.swal2-center {
    top: 0!important;
    right: 0!important;
    bottom: unset!important;
    left: 0!important;
    transform: none!important;
}
.custom-radio{
  position: absolute;
  clip: rect(0,0,0,0);
  pointer-events: none;
}
textarea{
  resize: none;
}
input[type=date]::-webkit-inner-spin-button {
    -webkit-appearance: none;
    display: none;
}
</style>
@yield('bs')
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper active">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
          <!-- Left navbar links -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
            </li>
          </ul>

        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
          <!-- Brand Logo -->
          <a href="/home" class="brand-link">
            <img src="/images/logo/logo_1.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">Basic English School</span>
          </a>

          <!-- Sidebar -->
          <div class="sidebar">
          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
                  with font-awesome or any other icon font library -->
              <li class="nav-item">
                <a href="/home" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard</p>
                </a>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    School Managment
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="/classes" class="nav-link">
                      <i class="fas fa-circle nav-icon"></i>
                      <p>Add Class</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/teacher" class="nav-link">
                      <i class="fas fa-circle nav-icon"></i>
                      <p>Teacher List</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/fees" class="nav-link">
                      <i class="fas fa-circle nav-icon"></i>
                      <p>Fees</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/feerecord/create" class="nav-link">
                      <i class="fas fa-circle nav-icon"></i>
                      <p>Fee Record Create</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/feerecord" class="nav-link">
                      <i class="fas fa-circle nav-icon"></i>
                      <p>Student Fee Record</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item has-treeview">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Student Managment
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="/student/create" class="nav-link ">
                      <i class="fas fa-circle nav-icon"></i>
                      <p>Add Student</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/attendance" class="nav-link">
                      <i class="fas fa-circle nav-icon"></i>
                      <p>Daily Attendance</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/student" class="nav-link ">
                      <i class="fas fa-circle nav-icon"></i>
                      <p>Show All Student</p>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="nav-item has-treeview">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Subjects
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">

                  <li class="nav-item">
                    <a href="/subject" class="nav-link ">
                      <i class="fas fa-circle nav-icon"></i>
                      <p>Show All Subject</p>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="nav-item has-treeview">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Time-Table
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="/timetable" class="nav-link ">
                      <i class="fas fa-circle nav-icon"></i>
                      <p> Show Time-Table</p>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="nav-item has-treeview">
                <a href="/calendar" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Calendar
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="/events" class="nav-link ">
                      <i class="fas fa-circle nav-icon"></i>
                      <p> Show Calendar</p>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="nav-item has-treeview">
                <a href="/leave" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Leave
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="/leave" class="nav-link ">
                      <i class="fas fa-circle nav-icon"></i>
                      <p> Show All Leave</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item has-treeview">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Holiday
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="/holiday" class="nav-link ">
                      <i class="fas fa-circle nav-icon"></i>
                      <p> Show Holiday </p>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="nav-item has-treeview">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Notice Board
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">

                  <li class="nav-item">
                    <a href="/notice" class="nav-link ">
                      <i class="fas fa-circle nav-icon"></i>
                      <p>Notice All</p>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="nav-item has-treeview">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Result
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">

                  <li class="nav-item">
                    <a href="/result" class="nav-link ">
                      <i class="fas fa-circle nav-icon"></i>
                      <p>Show Result</p>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="nav-item has-treeview">
                <a href="/facility" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Facility
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">

                  <li class="nav-item">
                    <a href="/facility" class="nav-link ">
                      <i class="fas fa-circle nav-icon"></i>
                      <p> Show All</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item has-treeview">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Diary
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="/diary/create" class="nav-link ">
                      <i class="fas fa-circle nav-icon"></i>
                      <p>Add To Diary</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/diary" class="nav-link ">
                      <i class="fas fa-circle nav-icon"></i>
                      <p>Show All</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item has-treeview">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Gallery
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="/gallery" class="nav-link ">
                      <i class="fas fa-circle nav-icon"></i>
                      <p>Show All</p>
                    </a>
                  </li>

                </ul>
              </li>
              <li class="nav-item has-treeview">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Driver
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="/driver" class="nav-link ">
                      <i class="fas fa-circle nav-icon"></i>
                      <p>Show all</p>
                    </a>
                  </li>

                </ul>
              </li></ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
          <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="min-height: 600px;">
          <!-- Content Header (Page header) -->
          <div class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
              @yield('breadcrumbs')
            </div><!-- /.row -->
            </div><!-- /.container-fluid -->
          </div>
          <!-- /.content-header -->

          <!-- Main content -->
          <div class="content">
            @yield('content')
          </div>
          <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
    </div>
<!-- ./wrapper -->
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<!-- Bootstrap4 Duallistbox -->
<!-- InputMask -->
<script src="/plugins/moment/moment.min.js"></script>
<!-- date-range-picker -->
<script src="/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Alert -->
<script src="/plugins/sweetalert2/sweetalert2.min.js"></script>
<script src="/plugins/toastr/toastr.min.js"></script>
<!-- bootstrap color picker -->
<script src="/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- AdminLTE App -->
<script src="/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/dist/js/demo.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
<script src="/js/bootstrap-datepicker.min.js"></script>
    <script>
      $(document).ready(function() {
        $('#profile').change(function(e) {
          var url = URL.createObjectURL(e.target.files[0]);
          var z = 'background-image:url(' + url + ')';
          $('.file-upload').attr('style', z);
          $('.fa-arrow-up').css('display', 'none');
        });

      });
    </script>
    <script>
      // Add the following code if you want the name of the file appear on select
      $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
      });
      </script>
      <script>
      $(document).ready(function() {
        var url = window.location.pathname;
        $('a[href="' + url + '"]').addClass('active');
        $('a[href="' + url + '"]').parent().parent().css('display','block');
        $('a[href="' + url + '"]').parent().parent().parent().addClass('menu-open');
        $('a[href="' + url + '"]').parent().parent().parent().children(0).addClass('active');
      });
      </script>
      @if (session('status'))
          <script>
            $(function() {
              const Toast = Swal.mixin({
                toast: true,
                showConfirmButton: false,
                timer:3000
              });
                Toast.fire({
                type: 'success',
                title: "&nbsp;&nbsp;{{session('status')}}"
                })
            });
          </script>
      @endif
    @yield('js')
</body>
</html>
