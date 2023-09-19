<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Inicio de secion </title>
     <link rel="stylesheet" href="estilos.css">	
</head>
<body>
<div class="caja1">
<form method="post" action="login.php">
<div class="formtlo">Iniciar sesión</div>
<div class="ub1">&#128273; Ingresar usuario</div>
<input type="text" name="usuario">
<div class="ub1">&#128274; Ingresar Contraseña</div>

<input type="password" name="contraseña" id="txtpassword">

<div class="ub1">
<input type="checkbox" onclick="verpassword()" >Mostrar contraseña
 </div>
<div class="ub1">Rol</div>
<select name="rol">
<option value="0" style="display:none;"><label>Seleccionar</label></option>
<option value="Usuario">Usuario</option>
<option value="Admin">Administrador</option>
</select>

<div >
<input type="submit" value="Ingresar">

<input type="reset" value="Cancelar">
</div>
</form>
</div>
</body>
<script>
  function verpassword(){
      var tipo = document.getElementById("txtpassword");
      if(tipo.type == "password")
	  {
          tipo.type = "text";
      }
	  else
	  {
          tipo.type = "password";
      }
  }
</script>
</html>