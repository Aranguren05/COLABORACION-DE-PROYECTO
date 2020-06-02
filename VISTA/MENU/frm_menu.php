<!DOCTYPE html>
<html lang="es">
<head>
     <title>Papeleria</title>
    <meta charset="UTF-8">
    <!--conecta a bootstrap-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="../../bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <!--Link para font awesome-->
    <link rel="stylesheet" type="text/css" href="../../fontawesome-free-5.8.2-web/css/all.css">
    <!--Estilos Propios-->
    <link rel="stylesheet" type="text/css" href="../../estilo.css">
    <!--scrol reveal para los efectos en JS-->
</head>

<body>
    <?php 
    
      session_start();

      if(!isset($_SESSION["usuario"]))
      {
        header("location:../../login.php");
      }
    
    ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="navbar">
        <a class="navbar-brand">La Pizarra</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="../../index.php">Inicio</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../cierre.php">Cerrar Sesion</span></a>
            </li>
          </ul>
  </nav>

  <section id="main-content">
	 <br><br><br>
      <article>
        <center>
         <form action="../../CONTROLADOR/control.php" method="POST">
            <?php
              //PONER DE MEJOR MANERA 
              // echo"<h2>Bienvenido: " . $_SESSION["usuario"] ."</h2><br>";
            ?>
           <h2>Seleccione una opcion</h2>
           <input type="submit" name="sub_cargo" value="CARGO">
           <input type="submit" name="sub_doc" value="DOCUMENTO">
           <input type="submit" name="sub_prov" value="PROVEEDORES">
           <input type="submit" name="sub_pro" value="PRODUCTOS">
           <input type="submit" name="sub_dev" value="VALOR DEVENGADO">
           <input type="submit" name="sub_cli" value="CLIENTES">
           <input type="submit" name="sub_com" value="COMPRAS">
           <input type="submit" name="sub_ven" value="VENTAS">

         </form>
      </center>
        
        <div class="content">
          
   
        </div>
       
      </article> <!-- /article -->
    
    </section> <!-- / #main-content -->
   
    <br><br><br><br>
    
    <footer id="main-footer">
      <p>&copy; 2020 <a href="">DesarrolloAramez.Com</a></p>
    </footer> <!-- / #main-footer -->
   


          



    <script src="bootstrap-4.3.1-dist/js/jquery-3.4.1.min.js"></script>
	<script src="bootstrap-4.3.1-dist/js/popper.min.js"></script>
	<script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
</body>