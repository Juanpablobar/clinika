<?php
session_start();
?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suscripciones - Clinika</title>
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
    
<div class="shop shop3">
      <div class="shop-presentation">
       <h1>Suscripciones</h1>
       </div>
       <div class="waves-contact"></div>
   </div>
   
   <div class="subscriptions-buttons">
       <div class="subscriptions-content">
           <div class="subscriptions-first" id="first"><h1 class="h12" id="h1">Mensual</h1></div>
           <div class="subscriptions-second" id="second"><h1 class="h1" id="h12">Anual</h1></div>
           <div class="blue-float" id="blue-float"></div>
       </div>
   </div>

    <div class="subscriptions">
        <div class="subscriptions-card">
            <h1>COMFORT</h1>
            <h2>/</h2>
            <h3><i class="fas fa-check"></i> 3 chequeos de medicina general e interna</h3>
            <h3><i class="fas fa-check"></i> 3 controles para más de 20 especialidades médicas + hasta un 30% de descuento</h3>
            <h3><i class="fas fa-check"></i> 30% de descuento en imágenes y pruebas de laboratorio</h3>
            <h3><i class="fas fa-check"></i> Línea directa médica 24/7</h3>
            <a href="services"><button class="button"><h4>Todos los Servicios</h4></button></a>
        </div>
        <div class="subscriptions-card">
            <h1>COMFORT START</h1>
            <h2>/</h2>
            <h3><i class="fas fa-check"></i> 6 chequeos de medicina general e interna</h3>
            <h3><i class="fas fa-check"></i> 6 controles para más de 20 especialidades médicas + hasta 50% de descuento</h3>
            <h3><i class="fas fa-check"></i> 50% de descuento en imágenes y pruebas de laboratorio</h3>
            <h3><i class="fas fa-check"></i> Línea directa médica 24/7</h3>
            <a href="services"><button class="button"><h4>Todos los Servicios</h4></button></a>
        </div>
        <div class="subscriptions-card">
            <h1>COMFORT PLUS</h1>
            <h2>/</h2>
            <h3><i class="fas fa-check"></i> 10 chequeos de medicina general e interna</h3>
            <h3><i class="fas fa-check"></i> 10 revisiones para más de 20 especialidades médicas + hasta un 70% de descuento</h3>
            <h3><i class="fas fa-check"></i> 70% de descuento en imágenes y pruebas de laboratorio</h3>
            <h3><i class="fas fa-check"></i> Línea directa médica 24/7</h3>
            <a href="services"><button class="button"><h4>Todos los Servicios</h4></button></a>
        </div>
        <div class="subscriptions-card">
            <h1>COMFORT EXTRA</h1>
            <h2>/</h2>
            <h3><i class="fas fa-check"></i> 20 chequeos de medicina general e interna</h3>
            <h3><i class="fas fa-check"></i> 20 chequeos para más de 20 especialidades médicas + hasta 80% de descuento</h3>
            <h3><i class="fas fa-check"></i> 80% de descuento en imágenes y pruebas de laboratorio</h3>
            <h3><i class="fas fa-check"></i> Línea directa médica 24/7</h3>
            <a href="services"><button class="button"><h4>Todos los Servicios</h4></button></a>
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
    <script>
    $(document).ready(function() {

	$('#first').click(function() {

        $('#blue-float').removeClass('blue-float2');
        
		$('#blue-float').addClass('blue-float');
        
		$('#h1').addClass('h12');
        
		$('#h1').removeClass('h1');
        
		$('#h12').addClass('h1');
        
		$('#h12').removeClass('h12');
        
		$('.subscriptions-card').removeClass('subscriptions-card2');
        
        
        });
        
        $('#second').click(function() {

        $('#blue-float').removeClass('blue-float');
        
		$('#blue-float').addClass('blue-float2');
                    
		$('#h1').addClass('h1');
        
		$('#h1').removeClass('h12');
                    
		$('#h12').addClass('h12');
        
		$('#h12').removeClass('h1');
            
        $('.subscriptions-card').addClass('subscriptions-card2');

        });
    });
        
    
    </script>   
</body>
</html>
