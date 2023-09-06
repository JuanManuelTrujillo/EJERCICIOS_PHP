
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Inicio</title>
  
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
     <!-- Font Awesome -->
     <link rel="stylesheet" href="iconos/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="css/tempusdominus-bootstrap-4.min.css">
     <!-- icheck bootstrap -->
     <link rel="stylesheet" href="css/icheck-bootstrap.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="css/jqvmap.min.css">
      <!-- Theme style -->
      <link rel="stylesheet" href="css/adminlte.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="css/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="css/summernote-bs4.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  </head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Buscar" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <a class="nav-link" data-toggle="dropdown" href="#">
          <div class="user-panel">
            <div class="icon">
              <img src="img/user2-160x160.jpg" class="img-circle" alt="icon">
            </div>
            
          </div>
    
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <p>Juan Manuel Trujillo</p>
            </div>
          </div>
          <div class="dropdown-divider"></div>
          
          <a href="perfil-usuarios.php" class="dropdown-item">
            <i class="fa-solid fa-user"></i>  Tu Perfil
            <span class="float-right text-muted text-sm"></span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="olvido-contraseña-panel.php" class="dropdown-item">
            <i class="fa-solid fa-lock"></i>  Cambiar Contraseña
            <span class="float-right text-muted text-sm"></span>
          </a>
          
          <div class="dropdown-divider"></div>
          <a href="cerrar_sesion.php" class="dropdown-item">
            <i class="fa-solid fa-circle-xmark"></i> Cerrar Sesión
            <span class="float-right text-muted text-sm"></span>
          </a>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Juan Manuel Trujillo</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Buscar" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
                <a href="dashboard-inicio.php" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Inicio
                    <span class="right badge badge-danger"></span>
                  </p>
                </a>
              </li>
          <li class="nav-item">
              <a href="tabla-datos.php" class="nav-link active">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Usuarios
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="informes.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Informes
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
          
          
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">USUARIOS</h1>

        </div><!-- /.col -->
        
       <!-- modal-content -->
        <div class="col-6">
          <ol class="breadcrumb float-sm-right">
              <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#modal-default">Registrar Usuarios</button>
            </div>
            <div class="modal fade" id="modal-default">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Formulario Registro</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <p>
                      <!-- forms -->
                      <div class="card card-primary">
                        <div class="card-header">
                          <h3 class="card-title">Formulario Registro</h3>
                        </div>
                        <div class="card-body">
                          <div class="row">
                            <div class="col-6">
                              <input type="text" class="form-control" placeholder="Nombres">
                            </div>
                            <div class="col-6">
                              <input type="text" class="form-control" placeholder="Apellidos">
                            </div>
                          </div>
                          <br>
                          <div class="row">
                          <div class="col-12">
                          <input type="text" class="form-control" placeholder="Correo Electrónico">
                          </div>
                        </div>
                        <br>
                        <div class="row">
                          <div class="col-6">
                          <input type="text" class="form-control" placeholder="Edad">
                          </div>
                        </div>
                        <br>
                        <div class="row">
                          <div class="col-12">
                          <input type="text" class="form-control" placeholder="Teléfono">
                          </div>
                        </div>
                        </div>
                      </div>
                       <!--/..forms -->

                    </p>
                  </div>
                  <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary">Guardar Cambios</button>
                  </div>
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>
      </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
  
  
  
  
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
              
                <!-- /.card-header -->
                
                <!-- /.card-body -->
              </div>
              <!-- /.card -->

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Usuarios Registrados:</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nombres</th>
                  <th>Apellidos</th>
                  <th>Edad</th>
                  <th>Correo Electrónico</th>
                  <th>Teléfono</th>
                </tr>
                </thead>
                <tbody>
        


                <tr>
                  <td>Yulieth</td>
                  <td>Vanegas</td>
                  <td>18</td>
                  <td>yfacundo@gmail.com</td>
                  <td>3167039524</td>
                </tr>
                <tr>
                  <td>Juan</td>
                  <td>Trujillo</td>
                  <td>17</td>
                  <td>trujillo27@gmail.com</td>
                  <td>3153640383</td>
                </tr>

                <tr>
                  <td>Paula</td>
                  <td>Cano</td>
                  <td>19</td>
                  <td>pcano@gmail.com</td>
                  <td>3232507436</td>
                </tr>
 
                <tr>
                  <td>Juana</td>
                  <td>Walles</td>
                  <td>20</td>
                  <td>walles@gmail.com</td>
                  <td>317593729</td>
                </tr>
                <tr>
                  <td>Sofia</td>
                  <td>Zambrano</td>
                  <td>23</td>
                  <td>aafia@gmail.com</td>
                  <td>3214658923</td>
                </tr>
                </tbody>
                <tfoot>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>

    <!-- Inicio de Pie de pagina -->
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2023 <a href="https://oferta.senasofiaplus.edu.co/sofia-oferta/">ADSO Sena</a>.</strong>
    Todos los derechos reservados.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="js/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="js/sparkline.js"></script>
<!-- JQVMap -->
<script src="js/jquery.vmap.min.js"></script>
<script src="js/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="js/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="js/moment.min.js"></script>
<script src="js/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="js/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="js/dashboard.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>



