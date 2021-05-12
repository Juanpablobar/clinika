<?php
session_start();
?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dr. Jimmy Larsen - Clinika</title>
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
       <h1>Dr. Jimmy Larsen</h1>
       </div>
   </div>  
   
   <div class="doctors">
       <div class="doctors-jimmy">
           <div class="doctor-img">
               <img src="img/doctor%20jimmy.jpg">
           </div>
           <div class="doctor-jimmy-desc">
               <div class="doctor-jimmy-desc-img">
                   <img src="img/doctor%20theet.png">
                   <h1>Experto en Estomatología</h1>
               </div>
               <h2>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisi erat, mattis id sollicitudin sed, vulputate sed neque. Suspendisse luctus commodo nibh id aliquet. Phasellus aliquam lacus en sapien egestas auctor. Etiam a urna id mi eficitur porttitor. Sed id pretium massa. Etiam et scelerisque ipsum. Duis a justo sapien.</h2>
                <div class="doctor-jimmy-contact">
                    <div class="doctor-item"><i class="far fa-envelope"></i>  paulandrews@example.com</div>
                    <div class="doctor-item"><i class="fas fa-map-pin"></i> Clínica London Paddington</div>
                    <div class="doctor-item"><i class="far fa-calendar-alt"></i> Empleado desde agosto de 2018</div>
                </div>
                <a href="booking"><button class="button">Haga una cita</button></a>
           </div>
       </div>
       <div class="index-services doctor-services">
        <img loading="lazy" src="img/services%20doctors.png" class="services">
        <h1>Servicios prestados por Clinika</h1>
        <h2>¡Un equipo de médicos expertos que lideran nuestra clínica! ¡Conozca a nuestro personal y visítenos para su próximo problema!</h2>
        <div class="index-services-desc">
            <div class="services-items">
               <div class="services-img">
                <img loading="lazy" src="img/analisis.png">
                </div>
                <div class="services-text">
                <a href="services"><h3>Análisis de sangre</h3></a>
                <h4>Lleva a la mesa estrategias de supervivencia beneficiosas para todos para ...</h4>
                </div>
            </div>
            <div class="services-items">
               <div class="services-img">
                <img loading="lazy" src="img/blanqueamiento.png">
                </div>
                <div class="services-text">
                <a href="services"><h3>Blanqueamiento dental</h3></a>
                <h4>Aproveche la fruta madura para identificar un ...</h4>
                </div>
            </div>
            <div class="services-items">
               <div class="services-img">
                <img loading="lazy" src="img/examen%20de%20ets.png">
                </div>
                <div class="services-text">
                <a href="services"><h3>Examen de ETS</h3></a>
                <h4>Llevando indicadores clave sin interrupciones a la cola larga. ...</h4>
                </div>
            </div>
        </div>
        <a href="services"><button class="button">Ver todos los servicios</button></a>
        <div class="index-waves3"></div>
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
