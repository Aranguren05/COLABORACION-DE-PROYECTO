<!DOCTYPE html>
<html lang="es">
<head>
     <title>Papeleria</title>
    <meta charset="UTF-8">
    <!--conecta a bootstrap-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <!--Link para font awesome-->
    <link rel="stylesheet" type="text/css" href="fontawesome-free-5.8.2-web/css/all.css">
    <!--Estilos Propios-->
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <!--scrol reveal para los efectos en JS-->
    <script src=""></script>
</head>

<body>
    <?php 

        try
        {
            $arrOptions = array(
                PDO::ATTR_EMULATE_PREPARES => FALSE, 
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"
            );

            $base= new PDO('mysql:dbname=pizarra;host=localhost', 'root', '', $arrOptions);
            
            $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql="select * from empleados where usuarios= :login and password= :password";

            $resultado=$base->prepare($sql);

            $login=htmlentities(addslashes($_POST['login']));

            $password=htmlentities(addslashes($_POST['password']));

            $resultado->bindValue("login", $login);

            $resultado->bindValue("password", $password);

            $resultado->execute();

            $numero_registro=$resultado->rowcount();

            if($numero_registro!=0)
            {
                session_start();
                $_SESSION["usuario"]=$_POST["login"];
                header("location:VISTA/MENU/frm_menu.php");
            }

            else
            {
                header("location:login.php");
            }


        }catch(exception $e)
        {
            die ("Error: ".$e->getMessage());
        }

    ?>
   
    
    
    <footer id="main-footer">
      <p>&copy; 2020 <a href="">DesarrolloAramez.Com</a></p>
    </footer> <!-- / #main-footer -->
   


          



    <script src="bootstrap-4.3.1-dist/js/jquery-3.4.1.min.js"></script>
	<script src="bootstrap-4.3.1-dist/js/popper.min.js"></script>
	<script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
</body>
