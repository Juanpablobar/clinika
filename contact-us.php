<?php
session_start();
?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contáctenos - Clinika</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="icofont/icofont.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/icon%20logo.png">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
</head>

<body>
   <?php include ('./layouts/header.php'); ?>
   <?php include ('./layouts/up.php'); ?>
   <?php include ('./layouts/reload.php'); ?>
   
   <div class="shop shop3">
      <div class="shop-presentation">
       <h1>Contáctenos</h1>
       </div>
       <div class="waves-contact"></div>
   </div>
   
   <div class="contact">
       <div class="contact-first">
           <div class="contact-methods">
              
               <div class="contact-item">
                   <div class="contact-item-first">
                       <span><i class="fas fa-phone-alt"></i></span>
                   </div>
                   <div class="contact-item-second">
                       <h1>NÚMERO DE TELÉFONO</h1>
                       <h2>72 28 55 25 18</h2>
                   </div>
               </div>
                
                <div class="contact-item">
                   <div class="contact-item-first">
                       <span><i class="far fa-envelope"></i></span>
                   </div>
                   <div class="contact-item-second">
                       <h1>DIRECCIÓN DE CORREO ELECTRÓNICO</h1>
                       <h2>juanpablobb6@hotmail.com</h2>
                   </div>
               </div>
                  
                <div class="contact-item">
                   <div class="contact-item-first">
                       <span><i class="fas fa-map-marker-alt"></i></span>
                   </div>
                   <div class="contact-item-second">
                       <h1>UBICACIÓN</h1>
                       <h2>Toluca, Estado de México</h2>
                   </div>
               </div>
                  
                <div class="contact-item">
                   <div class="contact-item-first">
                       <span><i class="far fa-clock"></i></span>
                   </div>
                   <div class="contact-item-second">
                       <h1>CALENDARIO</h1>
                       <h2>10:00 - 16:00 todos los días</h2>
                   </div>
               </div>
           </div>
           <div class="contact-img">
               <img src="img/contact.png">
           </div>
       </div>
       <div class="contact-second">
          <form action="" method="post">
           <div class="contact-card">
               <h1>Mandanos un mensaje</h1>
               <div class="contact-input">
                 <span><i class="far fa-user"></i></span>  
                 <input type="text" placeholder="Nombre completo" name="name" required>
               </div>
               <div class="contact-input">
                   <span><i class="far fa-envelope"></i></span>
                   <input type="text" placeholder="Dirección de correo electrónico" name="email" required>
               </div>
               <div class="contact-input">
                   <span><i class="fas fa-edit"></i></span>
                   <textarea placeholder="Mensaje..." required></textarea>
               </div>
               <button type="submit"><span class="send"><i class="far fa-paper-plane"></i></span></button>
           </div>
           </form>
       </div>
   </div>
   
<?php include ('./layouts/footer.php'); ?>   
   <script src="js/jquery-3.3.1.min.js"></script>
   <script src="js/owl.carousel.min.js"></script>
   <script src="js/up.js"></script>
   <script src="js/reload.js"></script>
   <script src="js/menu.js"></script>
   <script src="https://kit.fontawesome.com/24c94b551c.js" crossorigin="anonymous"></script>

</body>
</html>
