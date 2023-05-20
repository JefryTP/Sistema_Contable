<?php
session_start();
if (isset($_SESSION['dni_admin'])) {
  header('location: plantilla/');
} else {
?>
<!--  VISTA LOGIN   -->
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!--  link de bootrack  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--  link de iconos de bootrack  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/login.css">

    
</head>
<body>
<div class="login_container">
    <div class="login_background">
      <div class="img_container img_figura1">
        <img src="svg/figura1.svg" alt="elipce modificado">
      </div>
      <div class="img_container img_figura2">
        <img src="svg/figura2.svg" alt="elipce modificado">
      </div>
      <div class="img_container img_admin">
        <img src="svg/admin.svg" alt="imágen administrado">
      </div>
    </div>
    <div class="login_formulario__container">
      <form class="login_form" action="" method="post">
        <div class="img_container img_avatar">
          <img src="svg/avatar.svg" alt="imágen de un avatar">
        </div>
        <h1 class="login_titulo">Bienvenido</h1>
          <div class="login_input__container" id="login" >
            <div class="img_container img_user">
              <img src="svg/user.svg" alt="imagén usuario">
            </div>
            <input type="text" class="login_input input_dni" id="dni_admin" placeholder="DNI :" max="8" name="dni_admin" onpaste="return false">
          </div>
          <div class="login_input__container" id="login">
            <div class="img_container img_password">
              <img src="svg/candado.svg" alt="imagén candado">
            </div>
            <input type="password" class="login_input input_password" id="contra_log" min="3" max="15" pattern="[a-zA-z]{0,9}" placeholder="Contraseña :" name ="contraseña">
          </div>
        <button type="button" id="login-ingresar" class="login_btn">Ingresar</button>
      </form>
      
    </div>
  </div>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="login.js"></script>

<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

<!-- Script para desactivar el F12 -->
 <script disable-devtool-auto src='https://cdn.jsdelivr.net/npm/disable-devtool'></script> 

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</body>
</html>
<?php 
}
?>