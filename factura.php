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

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="navbar">
        <a class="navbar-brand">La Pizarra</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Inicio</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Empleados.php">Empleados</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="clientes.php">Clientes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="productos-modulo.php">Productos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="proveedores.php">Proveedores</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="factura.php">Factura</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="documento.php">Documento</a>
            </li>
             <li class="nav-item">
                <a class="nav-link" href="cargo.php">Cargo</a>
            </li>          </ul>
  </nav>

  <section id="main-content">
	 <br><br><br>
  <center>
  <a href=".php"" class="btn btn-info">Buscar</a>
  <a href=".php"" class="btn btn-info">Crear</a>
  <a href=".php"" class="btn btn-info">Editar</a>
  <a href=".php"" class="btn btn-info">Eliminar</a>
  </center>

  <br>
      <article>
        <center>
         <form action="">
          <h2>Factura</h2>
          <input type="number" placeholder="Codigo Factura" name="cod_fac">
          <input type="text" placeholder="Empleado" name="emp_fac">
          <input type="text" placeholder="Cliente" name="cli_fac">
          <input type="text" placeholder="$Precio unidad" name="preu_fac">
          <input type="text" placeholder="$Precio Total" name="nom_cli">
          <input type="text" placeholder="Fecha" name="nom_cli">
          <input type="text" placeholder="Hora" name="nom_cli">
           
           <input type="submit" value="Agregar">
         </form>
      </center>
        
        <div class="content">
          
   
        </div>
       
      </article> <!-- /article -->
    
    </section> <!-- / #main-content -->
   
    
    
    <footer id="main-footer">
      <p>&copy; 2020 <a href="">DesarrolloAramez.Com</a></p>
    </footer> <!-- / #main-footer -->
   


          



    <script src="bootstrap-4.3.1-dist/js/jquery-3.4.1.min.js"></script>
	<script src="bootstrap-4.3.1-dist/js/popper.min.js"></script>
	<script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
</body>
