<!DOCTYPE html>
<html lang="es">
<head>
     <title>Pizarra</title>
    <meta charset="UTF-8">
    <!--conecta a bootstrap-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="../bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <!--Link para font awesome-->
    <link rel="stylesheet" type="text/css" href="../fontawesome-free-5.8.2-web/css/all.css">
    <!--Estilos Propios-->
    <link rel="stylesheet" type="text/css" href="../estilo.css">
    <link rel="stylesheet" type="text/css" href="../tabla.css">
    <!--scrol reveal para los efectos en JS-->
    <script src=""></script>
</head>

<body>
  <?php 
    
    session_start();

    if(!isset($_SESSION["usuario"]))
    {
      header("location:../login.php");
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
              <a class="nav-link" href="../VISTA/MENU/frm_menu.php">Menu</span></a>
            </li>
  
            <li class="nav-item">
              <a class="nav-link" href="../cierre.php">Cerrar Sesion</span></a>
            </li>
          </ul>
     </nav>

    <section id="main-content">
    
        <br><br>
		<form action="../CONTROLADOR/control_cargo.php" method="POST">
             <h1>Actualizacion de Cargos</h1>
            <!--Pasar el dato de la bd a una variable de php-->
            <?Php $ref = $res[0];?>
            
            
			<!--Mostrar el dato de la informacion en una caja de texto invisible-->
            <input type="hidden" name="txcod_car" value="<?php echo $ref; ?>">
            <input type="hidden" name="sueldo" value="<?php echo $ref; ?>">

            <!--Mostrar campo llave dato unico-->
            <center>
                <label>CODIGO</label>
			    <?php echo $ref; ?>
		    	<br>
			    
          </center>
			      <p>Cargo</p>
            <input type="text" name="txNomCar" value="<?php echo $res[1]?>">
            <p>Sueldo</p>
            <input type="text" name="sueldo" value="<?php echo $res[2]?>">
			      <input type="submit" name="sub_actualizar" value="💾 ACTUALIZAR">
        

		</form>
        <br> <br><br>
    </section> <!-- / #main-content -->
    
   
  
   
    
    
    <footer id="main-footer">
      <p>&copy; 2020 <a href="">DesarrolloAramez.Com</a></p>
    </footer> <!-- / #main-footer -->
   


          



    <script src="../bootstrap-4.3.1-dist/js/jquery-3.4.1.min.js"></script>
  <script src="../bootstrap-4.3.1-dist/js/popper.min.js"></script>
  <script src="../bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
</body>
