<?php
session_start();
?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservas - Clinika</title>
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
       <h1>Reserva</h1>
       </div>
       <div class="waves-booking waves-contact"></div>
   </div>
   
   <div class="booking" id="booking">
      <div class="content-first">
       <h1>Reserve una ranura</h1>
       <h2>¿Cuando quieres venir?</h2>
       <div class="booking-date">
           <div class="booking-date-first">
               <h3>Seleccione un día</h3>
               <div class="booking-input">
                   <select>
                    <option>
                    <script>
                    var meses = new Array ("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");
                    var fecha=new Date();
                	document.write(+fecha.getDate() + " " + meses[fecha.getMonth()] + " " + fecha.getFullYear());
                    </script></option>
                    
                    <option><script>
                    var ayer=new Date(fecha.getTime() + 24*60*60*1000);
                	document.write(+ayer.getDate() + " " + meses[ayer.getMonth()] + " " + ayer.getFullYear());
                    </script></option>
                    
                    <option><script>
                    var ayer=new Date(fecha.getTime() + 48*60*60*1000);
                	document.write(+ayer.getDate() + " " + meses[ayer.getMonth()] + " " + ayer.getFullYear());
                    </script></option>
                    
                    <option><script>
                    var ayer=new Date(fecha.getTime() + 72*60*60*1000);
                	document.write(+ayer.getDate() + " " + meses[ayer.getMonth()] + " " + ayer.getFullYear());
                    </script></option>
                    
                    <option><script>
                    var ayer=new Date(fecha.getTime() + 106*60*60*1000);
                	document.write(+ayer.getDate() + " " + meses[ayer.getMonth()] + " " + ayer.getFullYear());
                    </script></option>
                    
                    <option><script>
                    var ayer=new Date(fecha.getTime() + 130*60*60*1000);
                	document.write(+ayer.getDate() + " " + meses[ayer.getMonth()] + " " + ayer.getFullYear());
                    </script></option>
                    
                    <option><script>
                    var ayer=new Date(fecha.getTime() + 154*60*60*1000);
                	document.write(+ayer.getDate() + " " + meses[ayer.getMonth()] + " " + ayer.getFullYear());
                    </script></option>
                    
                    <option><script>
                    var ayer=new Date(fecha.getTime() + 178*60*60*1000);
                	document.write(+ayer.getDate() + " " + meses[ayer.getMonth()] + " " + ayer.getFullYear());
                    </script></option>
                    
                    <option><script>
                    var ayer=new Date(fecha.getTime() + 202*60*60*1000);
                	document.write(+ayer.getDate() + " " + meses[ayer.getMonth()] + " " + ayer.getFullYear());
                    </script></option>
                    
                    <option><script>
                    var ayer=new Date(fecha.getTime() + 226*60*60*1000);
                	document.write(+ayer.getDate() + " " + meses[ayer.getMonth()] + " " + ayer.getFullYear());
                    </script></option>
                    
                   </select>
                   <span><i class="far fa-calendar"></i></span>
               </div>
           </div>
           <div class="booking-date-second">
               <h3>Seleccione una hora</h3>
               <div class="booking-input">
               <select>
                   <option value="">8:00</option>
                   <option value="">9:00</option>
                   <option value="">10:00</option>
                   <option value="">11:00</option>
                   <option value="">12:00</option>
                   <option value="">13:00</option>
                   <option value="">14:00</option>
                   <option value="">15:00</option>
                   <option value="">16:00</option>
                   <option value="">17:00</option>
                   <option value="">18:00</option>
                   <option value="">19:00</option>
                   <option value="">20:00</option>
               </select>
               <span><i class="far fa-clock"></i></span>
           </div>
           </div>
       </div>
       <button id="first" class="button">PRÓXIMO PASO <i class="fas fa-angle-right"></i></button>
   </div>
   <div class="booking-preload">
       <div class="booking-preload-first">
        <i class="far fa-clock"></i>   <h4>Comprobando Disponibilidad</h4> <span class="clock"></span>
       </div>
   </div>
    </div>
  <?php include ('./layouts/footer.php'); ?>   
  <script src="js/jquery-3.3.1.min.js"></script>
   <script src="js/owl.carousel.min.js"></script>
   <script src="js/up.js"></script>
   <script src="js/reload.js"></script>
   <script src="js/menu.js"></script>
   <script src="https://kit.fontawesome.com/24c94b551c.js" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
                            $('.booking-preload').hide();

       $('#first').click(function(){
            $.ajax({
                type:'POST',
                url:'./php/loadmore.php',
                beforeSend: function(){
                $('.booking-preload').show();
                },
                success:function(html){
                    $('.content-first').remove();
                    $('#booking').append(html);
                    $('.booking-preload').hide();
                    $('#second').click(function(){
            $.ajax({
                type:'POST',
                url:'./php/loadmores.php',
                beforeSend: function(){
                $('.booking-preload').show();
                },
                success:function(html){
                    $('.content-second').remove();
                    $('#booking').append(html);
                    $('.booking-preload').hide();
                    $('#third').click(function(){
            $.ajax({
                type:'POST',
                url:'./php/loadmoref.php',
                beforeSend: function(){
                $('.booking-preload').show();
                },
                success:function(html){
                    $('.content-third').remove();
                    $('#booking').append(html);
                    $('.booking-preload').hide();
                }
            
}); // ajax 3
})                   
}            
}); // ajax 2
})
}            
}); // ajax 1
}) //Funcion              
});
    </script>  
    
    </body>
</html>
