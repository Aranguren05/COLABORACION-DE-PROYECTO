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
            
            
          </ul>
  </nav>

  <section id="main-content">
	 <br><br><br>
      <article>
        <center>
         <form action="comprueba_login.php" method="POST">
           <h2>Login</h2>
           <input type="text" placeholder="🔐 Usuario" name="login">
           <input type="password" placeholder="🔐Contraseña" name="password">
           <input type="submit" value="Ingresar">
         </form>
      </center>
        
        <div class="content">
          
   
        </div>
       
      </article> <!-- /article -->
    
    </section> <!-- / #main-content -->
   
    <br><br>
    
    <footer id="main-footer">
      <p>&copy; 2020 <a href="">DesarrolloAramez.Com</a></p>
    </footer> <!-- / #main-footer -->
   


          



    <script src="bootstrap-4.3.1-dist/js/jquery-3.4.1.min.js"></script>
	<script src="bootstrap-4.3.1-dist/js/popper.min.js"></script>
	<script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
</body>