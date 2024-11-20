<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <style>
      * {
        margin: 20px;
        text-align: center;
        font-family: "Times New Roman";
      }
      body {
        background-color: #3c2684; 
        margin: 0;
        padding: 0;
        display: flex; 
        justify-content: center; 
        align-items: center; 
        height: 100vh; 
      }
      .container {
        text-align: center; /* Centrar texto dentro del contenedor */
        background-color: white; 
        padding: 40px; 
        border-radius: 8px; 
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Sombra suave */
      }
      hr {
        width: 50%;
        margin: auto;
      }
    </style>
</head>
<body>
  <div class="container">
    <?php
      $username=$_POST["username"];
      $psw=$_POST["psw"];
      if($username=="tallergrupal"&&$psw=="12345"):
          echo"<center><h1><font color='#3c2684'>USUARIO REGISTRADO</font></h1></center>
          <br/> 
          <center>
          <h2>¿Que desea hacer <?php echo $username;?>?<h2>
          <img src='img/img.png' width='100px'><br></br>
          <a href = '../index.html'>Regresar al inicio</a> ||| <a href = 'formulario.html'>Registrar Formulario</a><br> 
          </center>";
      else:
          echo"<h1>Registro</h1>
          <p>Usuario o Contraseña Incorrectos</p><hr>
          <a href='index.html'>Regresar al Registro</a>";
      endif;
    ?>
  </div>
</body>
</html>