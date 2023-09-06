<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registro Usuario</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="css/all.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="css/icheck-bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="css/adminlte.css">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="index.php"><b>Acueducto</b> La Jagua</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Registra una nueva cuenta</p>

      <form action="conexion_registro.php" method="POST">
        <div class="input-group mb-3">
          <input type="text" class="form-control" id="nombre" name="nombre"  placeholder="Nombre completo" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" id="correo" name="correo"  placeholder="Correo Electrónico" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" id="contraseña" name="contraseña"   placeholder="Contraseña" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="acepta_terminos" value="agree" required>
              <label for="agreeTerms">
               Acepto<a href="#"> terminos y condiciones</a>
              </label>
            </div>
          </div>
        </div>
        <!-- /.col -->
        <div class="row">
        <div class="col-12">
        <input  type="submit" class="btn btn-primary btn-block" value="Registrarse">
          
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

      <a href="index.php" class="text-center">ya tengo una cuenta</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="js/adminlte.min.js"></script>
</body>
</html>
