<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
  <title>SUPER BOLETOS REGISTRO</title>
</head>
<body>
<section class="form-register">
<h4>REGISTRO DE CUENTA</h4>
<br>
<form  action="guardarUsuario.php" method="post">
		  <div> 
		  </div>
		  <label>Nombre</label>
          <input class="control" type="text" name="nombre" placeholder="Captura tu nombre" required>
          <br>
		  <label >Direccion</label>
          <input class="control" type="text" name="direccion" placeholder="captura tu direccion" required>
          </div>
		  <label>Correo</label>
          <input class="control" type="text" name="correo" placeholder="Captura tu correo" required>
          <br>
		  <label >Contraseña</label>
          <input class="control" type="password" name="password" placeholder="captura tu contraseña" required>
          <br>
          <input class="boton" type="submit" value="Guardar">
          <br>     
		</form>					
  
    </section>
    <br>
    <br>
    <br>
    <div class="piepagina">
        <br>
        <a href="https://api.whatsapp.com/send?phone=+529611604999&text=hola" target="_blank" rel="noopener noreferrer"> <img src="img/wha.png" width="65px"></a>
        <a href="https://twitter.com/bkevinprince7" target="_blank" rel="noopener noreferrer"><img src="img/twitter.png" width="65px"></a>
        <a href="https://www.facebook.com/kevin.prince99" target="_blank" rel="noopener noreferrer"><img src="img/facebook.png" width="65px"></a>
       <br>
       <p>&copy; Copyriht 2020.  Team la movie</p>
    </div>

</body>
</html>