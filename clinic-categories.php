<?php
session_start();
?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubicaciones de las clínicas - Clinika</title>
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
       <h1>Ubicaciones de las clínicas</h1>
       </div>
   </div>
   
<div class="maps">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15059.660736061753!2d-99.59026201146236!3d19.329486391308727!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2smx!4v1608215807947!5m2!1ses!2smx" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    
<div class="clinics">
    <div class="clinic-items">
        <div class="clinics-img">
            <img src="img/clinica%201.jpg">
        </div>
        <div class="clinics-text">
            <h1>Islington Reino Unido</h1>
            <h2><i class="fas fa-map-pin"></i> 1400 Dobrich Street nr. 2, 82010</h2>
            <h2><i class="fas fa-phone-alt"></i> 72 28 55 25 18</h2>
            <h2><i class="far fa-envelope"></i> healtcare@example.com</h2>
        </div>
    </div>
    <div class="clinic-items">
        <div class="clinics-img">
            <img src="img/clinica%202.jpg">
        </div>
        <div class="clinics-text">
            <h1>Little London, Reino Unido</h1>
            <h2><i class="fas fa-map-pin"></i> 1400 Dobrich Street nr. 2, 82010</h2>
            <h2><i class="fas fa-phone-alt"></i> 72 28 55 25 18</h2>
            <h2><i class="far fa-envelope"></i> healtcare@example.com</h2>
        </div>
    </div>
    <div class="clinic-items">
        <div class="clinics-img">
            <img src="img/clinika%203.jpg">
        </div>
        <div class="clinics-text">
            <h1>Uttoxeter, Reino Unido</h1>
            <h2><i class="fas fa-map-pin"></i> 1400 Dobrich Street nr. 2, 82010</h2>
            <h2><i class="fas fa-phone-alt"></i> 72 28 55 25 18</h2>
            <h2><i class="far fa-envelope"></i> healtcare@example.com</h2>
        </div>
    </div>
    <div class="clinic-items">
        <div class="clinics-img">
            <img src="img/clinica%204.jpg">
        </div>
        <div class="clinics-text">
            <h1>Londres, Paddington Square</h1>
            <h2><i class="fas fa-map-pin"></i> 1400 Dobrich Street nr. 2, 82010</h2>
            <h2><i class="fas fa-phone-alt"></i> 72 28 55 25 18</h2>
            <h2><i class="far fa-envelope"></i> healtcare@example.com</h2>
        </div>
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
