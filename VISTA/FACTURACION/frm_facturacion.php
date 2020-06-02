<!DOCTYPE html>
<html lang="es">
<head>
     <title>Papeleria</title>
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
   <br>
  <center>
   <!-- <form action="" method="POST" >
      <input type="submit" value="Buscar" name="buscar">
      
       <a href=".php"" class="btn btn-info">Buscar</a>
       <a href=".php"" class="btn btn-info">Crear</a>
       <a href=".php"" class="btn btn-info">Editar</a>
       <a href=".php"" class="btn btn-info">Eliminar</a>
     </form>-->
  </center>

  <br>
      <article>
        <center>
         <form action="../CONTROLADOR/control_facturacion.php" method="POST">
          <h2>Facturas</h2>
          <!--<input type="number" placeholder="Codigo cargo" name="txcod_car">-->
          <input type="text" placeholder="Empleado" name="txemp_fac">
          <input type="text" placeholder="Cliente" name="txcli_fac">
          <input type="text" placeholder="" name="txcor_prov">
          <input type="text" placeholder="Direccion" name="txdir_prov">
          <input type="number" placeholder="Telefono" name="tel_prov">
           <input type="submit" value="Agregar" name="agregar">
         </form>
      </center>
        
        <div class="content">
           <hr>   
    <center> 
      <label>REPORTE DE FACTURACION</label>
      <table>
        <thead>
          <tr>
          <th>CODIGO</th>
          <th>APELLIDOS</th>
          <th>NOMBRES</th>
          <th>DIRECCION</th>
          <th>TELEFONO</th>
          <th>CORREO</th>
          </tr>
        </thead>
        
        <!--crear una nueva fila-->
        <tr>
        <?php 
        
          foreach ($res as $key) 
          {
            
        ?>
          <td><?php echo $key['pkcod_prov'];//nombre campos bd?></td>
          <td><?php echo $key['ape_prov'];//nombre campos bd?></td>
          <td><?php echo $key['nom_prov'];//nombre campos bd?></td>
          <td><?php echo $key['dir_prov'];//nombre campos bd?></td>
          <td><?php echo $key['tel_prov'];//nombre campos bd?></td>
          <td><?php echo $key['cor_prov'];//nombre campos bd?></td>
        </tr>
        <?php 
          }//cierre foreach
        ?>
      </table>
    </center>
   
        </div>
       
      </article> <!-- /article -->
    
    </section> <!-- / #main-content -->
    
   
  
   
    
    
    <footer id="main-footer">
      <p>&copy; 2020 <a href="">DesarrolloAramez.Com</a></p>
    </footer> <!-- / #main-footer -->
   


          



    <script src="../bootstrap-4.3.1-dist/js/jquery-3.4.1.min.js"></script>
  <script src="../bootstrap-4.3.1-dist/js/popper.min.js"></script>
  <script src="../bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
</body>
