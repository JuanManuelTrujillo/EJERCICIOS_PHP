<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="Recursos/Css/login.css">
    <title>Document</title>
</head>
<body>
    <div class="register-photo mt-5">
    <div class="form-container">
        <div class="image-holder">
            <img src="img/logo.png" alt="">
        </div>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <h2 class="text-center"><strong>Bienvenido a T.A.C!</strong></h2>
            <div class="form-group"><input class="form-control" type="name" name="name" placeholder="Nombre" required></div>
            <div class="form-group"><input class="form-control" type="text" name="apellido" placeholder="Apellido" required></div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Correo Electronico" required>
                <div id="error-message" class="alert alert-danger" style="display:none;"></div> <!-- alerta de si ya tienes cuenta-->

            </div>
            
            <div class="form-group">
                <input class="form-control" type="text" name="Username" placeholder="Usuario" required>
            </div>
            
            <div class="form-group">
                <input class="form-control" type="password" name="password" id="password" placeholder="Contraseña" onkeyup="checkPasswordStrength();" required>
                <div id="password-strength" style="height: 10px; margin-top: 5px;"></div>
            </div>

            <div class="form-group"><input class="form-control" type="password" name="confirmpassword" placeholder="Repita su Contraseña" required></div>
            <div class="form-group">
                <div class="d-flex justify-content-between">
                    <a href="#" class="btn btn-block btn-danger">
                        <i class="fab fa-google-plus mr-2"></i>Registrarse con Google+
                      </a>
                </div>
                <div class="mt-3"><p>Ya tienes cuenta  <a href="login.php" class="text-info">Iniciar Sesion</a></p></div>
            </div>
            <div class="form-group"><button class="btn btn-success btn-block btn-info" type="submit">Acceder</button></div><a class="already" href="#">Términos de uso y política de privacidad</a>
            
            <div id="success-message" class="alert alert-success" style="display:none;">
              Su registro ha sido exitoso. Ahora inicia sesión con tu cuenta.
            </div>
        </form>
    </div>
</div>
<script>
function checkPasswordStrength() {
    var password = document.getElementById('password').value;
    var strength = 0;

    if (password.match(/[a-z]+/)) {
        strength += 1;
    }
    if (password.match(/[A-Z]+/)) {
        strength += 1;
    }
    if (password.match(/[0-9]+/)) {
        strength += 1;
    }
    if (password.length >= 8) {
        strength += 1;
    }

    var passwordStrengthElement = document.getElementById('password-strength');

    switch(strength) {
        case 0:
        case 1:
            passwordStrengthElement.style.backgroundColor = 'red';
            break;
        case 2:
            passwordStrengthElement.style.backgroundColor = 'orange';
            break;
        case 3:
            passwordStrengthElement.style.backgroundColor = 'orange';
            break;
        case 4:
            passwordStrengthElement.style.backgroundColor = 'green';
            break;
        default:
            passwordStrengthElement.style.backgroundColor = 'transparent';
    }
}
</script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>