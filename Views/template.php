<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<div class="container">

<div class="container text-center pt-5">
    <h1>
        Login
    </h1>
</div>

<div class="container pt-5" style="width: 40%;">
<form method="POST">
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="inEmail" required>
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="passw" class="form-label">Password</label>
    <input type="password" class="form-control" id="passw" name="inPassw" required>
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>

  <!--div class="div">
    <div class="alert alert-success">
      Ingreso al Sistema
    </div>
  </div ->

  <div class="div">
    <div class="alert alert-danger">
      Usuario u Contraseña incorrecto
    </div>
  </div-->

 
<?php
    $respuesta = new UsuariosController();
    $respuesta->ctrSesion();

    echo '<script>if(window.history.replaceState){
      window.history.replaceState(null,null,window.location.href);
      } </script>';

    

    
?>

  <button type="submit" class="btn btn-primary">Login</button>
</form>
</div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>    
</body>
</html>