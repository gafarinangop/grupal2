<?php
header('Content-Type: text/html; charset=UTF-8;');
    if(isset($_FILES["myFile"]) && $_FILES["myFile"]["error"]=== UPLOAD_ERR_OK):
        $nombre_img=$_FILES["myFile"]["name"];
        $rutat_img=$_FILES["myFile"]["tmp_name"];
        $tipo_img=$_FILES["myFile"]["type"];
        $tam_img=$_FILES["myFile"]["size"];
        list($ancho,$alto)=getimagesize($rutat_img);
        if($ancho=="100" && $alto=="100" && $tipo_img=='image/png'):
            $carpeta="img/";
            $id=uniqid()."_".$nombre_img;
            $destino=$carpeta.$id;
            if(move_uploaded_file($rutat_img,$destino)):
                if(!empty($_POST['tour'])):
                    $nom=$_POST["nombre"];
                    $ape=$_POST["apellido"];
                    $fnac=$_POST["bday"];
                    $correo=$_POST["email"];
                    $tel=$_POST["phone"];
                    $color=$_POST["colori"];
                    $pag=$_POST["homepage"];
                    $plani=$_POST["daytime"];
                    $viaje=$_POST["fecha"];
                    $host=$_POST["host"];
                    $contador =$_POST['tour'];
                    $lista=implode(",",$contador);
                    $act=$_POST["actividades"];
                    $personas=$_POST["personas"];
                    $presu=$_POST["presu"];
                    echo "
                    <style>
                        body {
                            font-family: Arial, sans-serif;
                            background-color: $color; 
                            margin: 0;
                            padding: 0;
                            display: flex; 
                            justify-content: center; 
                            align-items: center; 
                            height: 300vh;
                        }
                        .container {
                            text-align: center; /* Centrar texto dentro del contenedor */
                            background-color: white; 
                            padding: 90px; 
                            border-radius: 8px; 
                            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Sombra suave */
                        }
                        .main-container {
                            display: flex;
                            max-width: 1200px;
                            margin: auto;
                            padding: 30px;
                        }

                        /* Contenido de texto principal */
                        .content {
                            flex: 2;
                            font-size: 1.2em;
                            line-height: 1.6;
                            text-align: justify;
                            padding-left: 50px;
                        }
                        .sidebar {
                            flex: 1;
                            text-align: center;
                            padding-rigth: 40px;
                        }

                        .sidebar img {
                            width: 100%;
                            max-width: 250px;
                            margin: 40px 0;
                            border-radius: 10px;
                        }
                        hr {
                            width: 50%;
                            margin: auto;
                        }
                        h2{
                            font-size: 18px;
                            color: #315282;
                        }
                        h1{
                            color:#3c2684;
                        }
                    </style>
                    <body>
                        <div class='container'>
                            <center><h1><font color='#3c2684'>Itinerario de $nom</font></h1></center>
                            <center>
                                <div class='main-container'>
                                    <div class='sidebar'>
                                        <img src=$destino alt='Tema'><br></br>
                                        <img src=$destino alt='Tema'><br></br>
                                        <img src=$destino alt='Tema'><br></br>
                                        <img src=$destino alt='Tema'><br></br>
                                        <img src=$destino alt='Tema'><br></br>
                                    </div>
                                    <div class='content'>
                                        <h2>Información Personal</h2>
                                        Nombre y Apellido del Planificador:<br> $nom $ape<br></br>
                                        Nacimiento:<br> $fnac<br></br>
                                        Correo Electrónico:<br> $correo<br></br>
                                        Teléfono:<br> $tel<br></br>
                                        <hr>
                                        
                                        <h2>Información</h2>
                                        Página web del lugar:<br>
                                        <a href=$pag>Ir a la página</a><br></br>
                                        Fecha de Planificación:<br> $plani<br></br>
                                        Fecha en la que llevará a cabo su itinerario:<br> $viaje<br></br>
                                        <hr />

                                        <h2>Hospedaje</h2>
                                        Lugar de hospedaje de preferencia:<br> $host<br></br>
                                        <hr />

                                        <h2>Tour</h2>
                                        Transportes con los que desearía realizar el tour:<br> $lista<br></br>
                                        <hr />

                                        <h2>Actividad Deseada</h2>
                                        Actividad que más desea del viaje:<br> $act<br></br>
                                        <hr>
                                        <h2>Acompañantes</h2>
                                        Cantidad de personas:<br> $personas<br></br>
                                        Presupuesto:<br> $presu<br>
                                    </div>
                                </div>
                                
                                <a href = '../index.html'>Regresar al inicio</a> ||| <a href = 'formulario.html'>Regresar al Formulario</a>
                        
                            </center>
                        </div>
                    </body>";
                endif;
            else:
                echo"ERROR AL MOVER LA IMAGEN A RUTA<br><hr>";
            endif;
        else:
            echo"La imágen es demasiado grande o no es png<br><hr>";
        endif;
    else:
        echo"ERROR<br><hr>";
    endif;
?>