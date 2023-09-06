<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Index Acueducto</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="iconos/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="css/icheck-bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="css/adminlte.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="index.html"><b>Acueducto</b> La Jagua</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Inicio de Sesión</p>

      <form action="conexion_inicio.php" method="POST">
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="correo"  placeholder="Correo Electrónico" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="contraseña"  placeholder="Contraseña" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
         <!-- /.col -->
         <div class="row">
         <div class="col-12">
          <button type="submit" class="btn btn-primary btn-block">Iniciar Sesión</button>
        </div>
      </div>
        <!-- /.col -->
      </form>
      <div class="social-auth-links text-center">
        <p>- O -</p>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i>
          Regístrese usando Google+
        </a>
      </div>
      <!-- /.social-auth-links -->
      <p class="mb-1">
        <a href="olvido-contraseña.php">Olvidé mi contraseña</a>
      </p>
      <p class="mb-0">
        <a href="registro.php" class="text-center">Registrar una nueva cuenta</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="js/adminlte.min.js"></script>
</html>
