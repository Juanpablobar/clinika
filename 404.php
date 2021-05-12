<?php
session_start();
?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página no encontrada - Clinika</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="icofont/icofont.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/icon%20logo.png">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fancybox-master/dist/jquery.fancybox.min.css">
</head>

<body>
   <?php include ('./layouts/header.php'); ?>
   <?php include ('./layouts/up.php'); ?>
   <?php include ('./layouts/reload.php'); ?>
    
   <div class="shop shop2">
      <div class="shop-presentation">
       <h1>404</h1>
       </div>
   </div>  
   
   <div class="error">
   <div class="error-first">
       <img src="img/error%20404-1.png">
       <h1>¡Lo siento! No se pudo encontrar la página que buscaba. Intente buscarlo o navegue por nuestro sitio web.</h1>
       <a href="./"><button class="button">DE VUELTA A CASA</button></a>
   </div>
   <div class="error-second">
       <img src="img/error%20404-2.png">
   </div>
   </div>
   
<?php include ('./layouts/footer.php'); ?>   
   <script src="js/jquery-3.3.1.min.js"></script>
   <script src="js/owl.carousel.min.js"></script>
   <script src="js/up.js"></script>
   <script src="js/reload.js"></script>
   <script src="js/menu.js"></script>
   <script src="fancybox-master/dist/jquery.fancybox.min.js"></script>
   <script src="https://kit.fontawesome.com/24c94b551c.js" crossorigin="anonymous"></script>
</body>
</html>
