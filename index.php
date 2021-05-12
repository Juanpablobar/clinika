<?php
session_start();

$star = '<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.523-3.356c.329-.314.158-.888-.283-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767l-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288l1.847-3.658 1.846 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.564.564 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
</svg><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.523-3.356c.329-.314.158-.888-.283-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767l-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288l1.847-3.658 1.846 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.564.564 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
</svg><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.523-3.356c.329-.314.158-.888-.283-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767l-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288l1.847-3.658 1.846 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.564.564 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
</svg><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.523-3.356c.329-.314.158-.888-.283-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767l-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288l1.847-3.658 1.846 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.564.564 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
</svg><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.523-3.356c.329-.314.158-.888-.283-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767l-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288l1.847-3.658 1.846 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.564.564 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
</svg>'
?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinika - Expertos en Cuidar de tu Salud</title>
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
   
   <div class="index">
       <div class="index-presentation">
       <div class="index-presentation-first">
        <h1>Encuentre un médico y
        reserve una cita</h1>
        <h2>Desde los primeros días de funcionamiento de Medify, nuestro equipo se ha centrado en crear un servicio médico de alta calidad por parte de clinika.</h2>
          <a href="services-pricing"><button class="button button-index2">Especialidad de búsqueda</button></a>
           </div>
           <div class="index-presentation-second">
               <img loading="lazy" src="img/index%201.png">
           </div>
       </div>
       <div class="index-waves">
       </div>
       
       <div class="index-about">
           <div class="index-about-first">
               <img loading="lazy" src="img/index2.png">
           </div>
           <div class="index-about-second">
               <img loading="lazy" src="img/about.png">
               <div>
                <h1>Clinika - Mejor Clínica Médica,
                Miles de especialidades para cualquier<br>
                tipo de diagnóstico.</h1>
              <h2>Aenean volutpat, sem sit amet ullamcoer gravida, molestie risus enim nulla. Pellentesqu velit faucibus kodale dolor rhoncu. Conservador de porttitor de Laciniam Efficitur. Chuniks predefinidos.</h2>
                   <a href="services"><button class="button">Navegar por el diagnóstico</button></a>
               </div>
           </div>
       </div>
       
       <div class="index-checkup">
          <div class="index-waves2">
       </div>
        <div class="index-waves3">
       </div>

           <div class="index-checkup-first">
               <img loading="lazy" src="img/benefit.png" class="img">
               <h1>Chequeo médico especializado a
                medida del paciente</h1>
                
                <div class="index-checkup-first-desc">
                    <div class="checkup-item">
                        <img loading="lazy" src="img/checkup%201.png">
                        <h3>Toda la instalación médica</h3>
                        <h4>Súplicas bastante desagradables que<br>
                        pocos pianoforte descubren.</h4>
                    </div>
                    
                    <div class="checkup-item">
                        <img loading="lazy" src="img/checkup%202.png">
                        <h3>Tarifas más bajas en la ciudad</h3>
                        <h4>Puede encontrar algún valor de redención<br>
                        con esperar, copia ficticia.</h4>
                    </div>
                       
                    <div class="checkup-item">
                        <img loading="lazy" src="img/checkup%203.png">
                        <h3>Doctor experimentado</h3>
                        <h4>Un cliente que no está contento por la<br>
                        razón de las hormigas es peor.</h4>
                    </div>
                       
                    <div class="checkup-item">
                        <img loading="lazy" src="img/checkup%204.png">
                        <h3>5000+ paciente feliz</h3>
                        <h4>Incluso si te gusta menos el diseño y<br>
                        más la estrategia de contenido.</h4>
                    </div>
                </div>
        </div>
        <div class="index-checkup-second">
            <img loading="lazy" src="img/index3.png">
        </div>
       </div>
       <div class="index-speciality">
           <img loading="lazy" src="img/facility.png" class="speciality-img">
           <h1>Especialidades disponibles en Clinika</h1>
           <h2>Donec pulvinar, eros quis convallis vestibulum, neque turpis
            iaculis mi, in ultrices nisl magna ut leo.</h2>
    
    <div class="speciality-sections">
       
        <a href="#iconbox-1" id="iconbox1" class="iconbox2">
        <div class="items">
        <img loading="lazy" src="img/cardiology.png" class="heart">
        <p>Cardiologia</p>
            </div></a>
        
        <a href="#iconbox-2" id="iconbox2" class="iconbox">
        <div class="items">
        <img loading="lazy" src="img/stomalogy.png">
        <p>Estomatología</p>
            </div></a>
        
        <a href="#iconbox-3" id="iconbox3" class="iconbox">
        <div class="items">
        <img loading="lazy" src="img/radiology.png">
        <p>Radiología</p>
            </div></a>
        
        <a href="#iconbox-4" id="iconbox4" class="iconbox">
        <div class="items">
        <img loading="lazy" src="img/neurology.png">
        <p>Neurología</p>
            </div></a>
        
        <a href="#iconbox-5" id="iconbox5" class="iconbox">
        <div class="items">
        <img loading="lazy" src="img/ophthamology.png">
        <p>Oftalmología</p>
            </div></a>
        
    </div>        
    <div class="index-speciality-carousel">
    <div class="owl-carousel owl-carousel2 owl-theme">
    <div class="item" data-hash="iconbox-1">
        <div class="item-img">
            <img loading="lazy" src="img/cardiology2.png">
        </div>
        <div class="item-text">
            <h4>Cardiología</h4>
            <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non leo nunc. Vivamus lacinia massa nec sem sagittis, quis consequat augue rhoncus. Phasellus varius quam quis ligula congue, eu aliquam eros feugiat. Entero bibendum mauris euismod ex cursus, en facilisis.</h5>
            <a href="services"><button class="button">Ver especialidad</button></a>
        </div>
    </div>
    <div class="item" data-hash="iconbox-2">
           <div class="item-img">
            <img loading="lazy" src="img/stomatology2.png">
        </div>
        <div class="item-text">
            <h4>Estomatología</h4>
            <h5>Vivamus sit amet tellus consectetur, convallis purus id, convallis turpis. Phasellus mi tortor, luctus sit amet ligula vel, tincidunt consequat mi. Phasellus placerat ullamcorper lectus, vitae rhoncus nisl commodo non. Fusce vehicula a neque nec condimentum. Sed ut tellus et erat interdum lacinia.</h5>
            <a href="services"><button class="button">Ver especialidad</button></a>
        </div>
        </div>
    <div class="item" data-hash="iconbox-3">
        <div class="item-img">
            <img loading="lazy" src="img/radiology2.png">
        </div>
        <div class="item-text">
            <h4>Radiología</h4>
            <h5>Duis porttitor, turpis sollicitudin maximus bibendum, eros sapien feugiat magna, id interdum ex justo ut dolor. Nulla facilisis urna sed ipsum euismod porta. Cras maximus commodo purus, eget accumsan purus. Entero semper massa nec lectus blandit malesuada.</h5>
            <a href="services"><button class="button">Ver especialidad</button></a>
        </div>
        </div>
    <div class="item" data-hash="iconbox-4">
        <div class="item-img">
            <img loading="lazy" src="img/neurology2.png">
        </div>
        <div class="item-text">
            <h4>Neurología</h4>
            <h5>Nam elit lacus, vulputate vitae libero eu, ullamcorper volutpat velit. Mecenas vulputate mollis tortor, una sollicitudin sapien condimentum quis. Duis sed condimentum quam, ut tempus ligula. Mecenas sit amet erat vel mi ornare maleuada eu at orci. Pellentesque en diam quis elit blandit varius.</h5>
            <a href="services"><button class="button">Ver especialidad</button></a>
        </div>
        </div>
    <div class="item" data-hash="iconbox-5">
        <div class="item-img">
            <img loading="lazy" src="img/ophthamology2.png">
        </div>
        <div class="item-text">
            <h4>Oftalmología</h4>
            <h5>Praesent iaculis, augue id mattis suscipit, elit est commodo erat, a gravida sem nibh in ipsum. Quisque sodales leo in lacus fringilla, sit amet consectetur urna molestie. Donec gravida, est quis tempor lobortis, ex nisl accumsan ligula, in mollis dolor odio a lacus. Sed vel nisi interdum, iaculis nulla a, scelerisque erat.</h5>
            <a href="services"><button class="button">Ver especialidad</button></a>
        </div>
        </div>
      </div>
           </div>
           
        <div class="index-services">
        <div class="index-waves2"></div>
        <img loading="lazy" src="img/service.png" class="services">
        <h1>Servicios prestados por Clinika</h1>
        <h2>¡Un equipo de médicos expertos que lideran nuestra clínica! ¡Conozca a nuestro personal y visítenos para su próximo problema!</h2>
        <div class="index-services-desc">
            <div class="services-items">
               <div class="services-img">
                <img loading="lazy" src="img/analisis.png">
                </div>
                <div class="services-text">
                <a href="services-pricings"><h3>Análisis de sangre</h3></a>
                <h4>Lleva a la mesa estrategias de supervivencia beneficiosas para todos para ...</h4>
                </div>
            </div>
            <div class="services-items">
                <div class="services-img">
                <img loading="lazy" src="img/blanqueamiento.png">
                </div>
                <div class="services-text">
                <a href="services-pricings"><h3>Blanqueamiento dental</h3></a>
                <h4>Aproveche la fruta madura para identificar un ...</h4>
                </div>
            </div>
            <div class="services-items">
               <div class="services-img">
                <img loading="lazy" src="img/examen%20de%20ets.png">
                </div>
                <div class="services-text">
                <a href="services-pricings"><h3>Examen de ETS</h3></a>
                <h4>Llevando indicadores clave sin interrupciones a la cola larga. ...</h4>
            </div>
            </div>
        </div>
        <a href="services"><button class="button">Ver todos los servicios</button></a>
        <div class="index-waves3"></div>
        </div>
       </div>
       
       <div class="index-products">
           <img loading="lazy" src="img/products.png">
           <h1>Productos seleccionados para usted</h1>
           <div class="shop-products"> 
              <?php
                include("./php/conexion.php");
                   $resultado = $conexion ->query("select * from productos WHERE id IN (1,5,22,4,17,13) ORDER BY FIELD(id,1,5,22,4,17,13) limit 6"); 
                
                while($fila = mysqli_fetch_array($resultado)){
                    
                
                ?>
              <div class="shop-items"><!-- cpia a partir de aqui y ponlo de otro contenedor en la tienda, este solo es el contenedor individual de los productos -->
                <a href="shop-single?id=<?php echo $fila[0]; ?>"><div class="shop-items-img">
                <img loading="lazy" src="img/<?php echo $fila[4]; ?>" alt="<?php echo $fila[1]; ?>" title="<?php echo $fila[1]; ?>">
                   
                    </div></a>
                    <div class="shop-items-img-icons">
                       <a href="cart">
                           <span>
                               <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-plus-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM4 14a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm7 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z"/>
</svg>
                           </span></a>
                           <a href="#">
                            <span>
                               <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
</svg>
                               </span></a>
                            <a href="#">
                            <span>
                               <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z"/>
  <path fill-rule="evenodd" d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
</svg>
                               </span></a>
                   </div>
                    <div class="shop-items-text">
                        <a href="shop-single?id=<?php echo $fila[0]; ?>">
                        <h2><?php echo $fila[1]; ?></h2></a>
                        <div class="shop-items-text-second">
                        <h3>$<?php echo $fila[2]; ?>.00</h3>
                        <?php echo $star ?>
                        </div>
                    </div>
              </div>
               <?php } ?>
               <a href="shop"><button class="button button2">Explore todos los productos</button></a>
           </div>
       </div>
       
       <div class="index-review">
           <div class="index-waves2"></div>
           <div class="index-review-center">
            <div class="index-review-center-first">
                <img loading="lazy" src="img/review.png">
                <h1>Pensamientos de la mejor
                experiencia de nuestro paciente</h1>
                <h2>¿Busca verbal de la calidad de nuestro servicio? Encuéntrelos aquí. Todo es transparente y sencillo para su sentido de jusitifcación.</h2>
                <a href="about"><button class="button">Ver todas las reseñas</button></a>
            </div>
            <div class="index-review-center-second">
            <div class="owl-carousel owl-carousel3 owl-theme">
            <div class="item">
                <div class="index-comments" id="comments1">
                    <h1>Los médicos de Clinika trabajan duro para garantizar la calidad</h1>
                    <h2>Vivamus vel fringilla est. Fusce fermentum, quam a aliquet semper, eros sapien ullamcorper ligula, quis ornare elit sem en sem. Ut arco de diámetro de eficiencia.</h2>
                    <div class="index-comments-person">
                        <div class="index-comments-person-img">
                            <img loading="lazy" src="img/review%201.jpg" alt="Máscara Stevens">
                        </div>
                        <div class="index-comments-person-text">
                            <h3>Máscara Stevens</h3>
                            <h4>Paciente</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="index-comments" id="comments2">
                    <h1>La mejor comunicación de Doctor - Paciente que tuve</h1>
                    <h2>Vivamus vel fringilla est. Fusce fermentum, quam a aliquet semper, eros sapien ullamcorper ligula, quis ornare elit sem en sem. Ut arco de diámetro de eficiencia.</h2>
                    <div class="index-comments-person">
                        <div class="index-comments-person-img">
                            <img loading="lazy" src="img/review%202.jpg" alt="Andrew Jackson">
                        </div>
                        <div class="index-comments-person-text">
                            <h3>Andrew Jackson</h3>
                            <h4>Paciente</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="index-comments" id="comments3">
                    <h1>Excelentes médicos y un buen servicio de recepción</h1>
                    <h2>Vivamus vel fringilla est. Fusce fermentum, quam a aliquet semper, eros sapien ullamcorper ligula, quis ornare elit sem en sem. Ut arco de diámetro de eficiencia.</h2>
                    <div class="index-comments-person">
                        <div class="index-comments-person-img">
                            <img loading="lazy" src="img/review%203.jpg" alt="Ella López">
                        </div>
                        <div class="index-comments-person-text">
                            <h3>Ella López</h3>
                            <h4>Paciente</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="index-comments" id="comments4">
                    <h1>Los servicios de calidad de Clinika satisfacen plenamente mis necesidades</h1>
                    <h2>Vivamus vel fringilla est. Fusce fermentum, quam a aliquet semper, eros sapien ullamcorper ligula, quis ornare elit sem en sem. Ut arco de diámetro de eficiencia.</h2>
                    <div class="index-comments-person">
                        <div class="index-comments-person-img">
                            <img loading="lazy" src="img/review%204.jpg" alt="Madison Smith">
                        </div>
                        <div class="index-comments-person-text">
                            <h3>Madison Smith</h3>
                            <h4>Paciente</h4>
                        </div>
                    </div>
                </div>
            </div>
</div>
            </div>
           </div>
           <div class="index-waves3"></div>
       </div>
       
       <div class="index-member">
        <img loading="lazy" src="img/member.png">
        <h1>Nuestros doctores experimentados</h1>
        <h2>¡Un equipo de médicos expertos que lideran nuestra clínica! ¡Conozca a nuestro personal y visítenos para su próximo problema!</h2>
        <div class="index-member-carousel">
            <div class="owl-carousel owl-carousel4 owl-theme">
            <div class="item">
            <div class="index-member-item">
                <div class="index-member-item-img">
                    <img loading="lazy" src="img/doctor%201.jpg">
                    <div class="index-member-item-icons">
                        <a href="mailto:mail@example.com"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-envelope" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383l-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
</svg></a>
                        <a href="https://www.facebook.com/"><i class="icofont-facebook"></i></a>
                        <a href="https://www.linkedin.com/"><i class="icofont-linkedin"></i></a>
                    </div>
                </div>
                <div class="index-member-item-text">
                    <h3>Dr. Jimmy Larsen</h3>
                    <h4>Cardiólogo</h4>
                </div>
            </div>    
            </div>
            
            <div class="item">
            <div class="index-member-item">
                <div class="index-member-item-img">
                    <img loading="lazy" src="img/doctor%202.jpg">
                    <div class="index-member-item-icons">
                        <a href="mailto:mail@example.com"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-envelope" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383l-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
</svg></a>
                        <a href="https://www.facebook.com/"><i class="icofont-facebook"></i></a>
                        <a href="https://www.linkedin.com/"><i class="icofont-linkedin"></i></a>
                    </div>
                </div>
                <div class="index-member-item-text">
                    <h3>Dr. Antonio Irving</h3>
                    <h4>Ortodoncista</h4>
                </div>
            </div>    
            </div>
            
            <div class="item">
            <div class="index-member-item">
                <div class="index-member-item-img">
                    <img loading="lazy" src="img/doctor%203.jpg">
                    <div class="index-member-item-icons">
                        <a href="mailto:mail@example.com"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-envelope" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383l-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
</svg></a>
                        <a href="https://www.facebook.com/"><i class="icofont-facebook"></i></a>
                        <a href="https://www.linkedin.com/"><i class="icofont-linkedin"></i></a>
                    </div>
                </div>
                <div class="index-member-item-text">
                    <h3>Dr. Brandon Currie</h3>
                    <h4>Cirujano</h4>
                </div>
            </div>    
            </div>
            
            <div class="item">
            <div class="index-member-item">
                <div class="index-member-item-img">
                    <img loading="lazy" src="img/doctor%204.jpg">
                    <div class="index-member-item-icons">
                        <a href="mailto:mail@example.com"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-envelope" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383l-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
</svg></a>
                        <a href="https://www.facebook.com/"><i class="icofont-facebook"></i></a>
                        <a href="https://www.linkedin.com/"><i class="icofont-linkedin"></i></a>
                    </div>
                </div>
                <div class="index-member-item-text">
                    <h3>Dr. Aisha Mays</h3>
                    <h4>Pediátra</h4>
                </div>
            </div>    
            </div>
            
            <div class="item">
            <div class="index-member-item">
                <div class="index-member-item-img">
                    <img loading="lazy" src="img/doctor%205.jpg">
                    <div class="index-member-item-icons">
                        <a href="mailto:mail@example.com"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-envelope" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383l-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
</svg></a>
                        <a href="https://www.facebook.com/"><i class="icofont-facebook"></i></a>
                        <a href="https://www.linkedin.com/"><i class="icofont-linkedin"></i></a>
                    </div>
                </div>
                <div class="index-member-item-text">
                    <h3>Dr. Paul Andrews</h3>
                    <h4>Oncólogo</h4>
                </div>
            </div>    
            </div>
</div>
        </div>
        <a href="doctors"><button class="button">Ver a todos los doctores</button></a>
       </div>
       
       <div class="index-subscribe">
           <div class="index-waves2"></div>
           <div class="index-subscribe-email">
               <img loading="lazy" src="img/subscribe.png">
               <h1>¡Suscríbase ahora a nuestro boletín!</h1>
               <h2>¡Un equipo de médicos expertos que lideran nuestra clínica! ¡Conozca a nuestro personal y visítenos para su próximo problema!</h2>
               <form method="post" action="#">
               <div class="index-subscribe-input">
                   <input type="text" name="email" placeholder="Ingrese su dirección de correo electrónico..." required>
                   <a href=""><button class="button">Suscribir</button></a>
               </div>
               </form>
           </div>
           <div class="index-waves3"></div>
       </div>
       
       <div class="index-news">
        <img loading="lazy" src="img/news.png" class="news">
        <h1>Novedades de Clinika</h1>   
        <h2>¡Un equipo de médicos expertos que lideran nuestra clínica! ¡Conozca a nuestro personal y visítenos para su próximo problema!</h2>
        <div class="index-news-cards">
            <div class="card">
                <a href="about"><div class="card-img">
                    <img loading="lazy" src="img/card%201.jpg">
                    </div></a>
                <div class="card-text">
                    <h3>14 de agosto de 2020</h3>
                    <a href="about"><h4>Diagnóstico de enfermedades e infecciones.</h4></a>
                    <h5>Experiencia basada en multimedia y estrategias de crecimiento multimedios previstas de forma proactiva. Visualice perfectamente el capital intelectual de calidad sin una colaboración superior y ...</h5>
                    <a href="about"><h6>Lee más</h6> <i class="icofont-rounded-right"></i></a>
                </div>
            </div>
               
            <div class="card">
                <div class="card-img">
                    <img loading="lazy" src="img/card%202.jpg">
                </div>
                <div class="card-text">
                    <h3>14 de agosto de 2020</h3>
                    <a href="about"><h4>Atención de alta calidad para pacientes en espera</h4></a>
                    <h5>Realice una sinergia completa de las relaciones de impuestos sobre los recursos a través de los principales nichos de mercado. Cultive profesionalmente el servicio al cliente uno a uno con ideas sólidas. Dinámicamente ...</h5>
                    <a href="about"><h6>Lee más</h6> <i class="icofont-rounded-right"></i></a>
                </div>
            </div>
               
            <div class="card">
                <div class="card-img">
                    <img loading="lazy" src="img/card%203.jpg">
                </div>
                <div class="card-text">
                    <h3>14 de julio de 2020</h3>
                    <a href="about"><h4>Departamento de Equipo Médico en Salud</h4></a>
                    <h5>Podcasting sobre la gestión del cambio operativo dentro de los flujos de trabajo para establecer un marco. Poner fuera de línea los indicadores clave de rendimiento integrados para ...</h5>
                    <a href="about"><h6>Lee más</h6> <i class="icofont-rounded-right"></i></a>
                </div>
            </div>
        </div>
       </div>
       <div class="index-partner">
           <img loading="lazy" src="img/partner.png" class="partner">
           <h1>Nuestros socios de marca</h1>
           <h2>¡Un equipo de médicos expertos que lideran nuestra clínica! ¡Conozca a nuestro personal y visítenos para su próximo problema!</h2>
           <div class="index-partner-img">
            <img loading="lazy" src="img/partner%201.png" width="300" height="155">
            <img loading="lazy" src="img/partner%202.png" width="300" height="168">
            <img loading="lazy" src="img/partner%203.png" width="284" height="137">
            <img loading="lazy" src="img/partner%204.png" width="300" height="61">
            <img loading="lazy" src="img/partner%205.png" width="300" height="109">
            <img loading="lazy" src="img/partner%206.png" width="300" height="91">
           </div>
       </div>
       <a href="services-pricings"><button class="button button-index">Especialidad de búsqueda</button></a>
   </div>
   
<?php include ('./layouts/footer.php'); ?> 
   <script src="js/jquery-3.3.1.min.js"></script>
   <script src="js/owl.carousel.min.js"></script>
   <script src="js/up.js"></script>
   <script src="js/menu.js"></script>
   <script src="js/reload.js"></script>
   <script src="https://kit.fontawesome.com/24c94b551c.js" crossorigin="anonymous"></script>

   <script>
    $('.owl-carousel2').owlCarousel({
    loop:false,
    nav:false,
    URLhashListener:true,
    autoplayHoverPause:true,
    items:1,
    slideTransition: 'linear',
    mouseDrag:false,
    touchDrag:false,
    smartSpeed: 1,
    dots: false
})
    </script>
    <script>
    $('.owl-carousel3').owlCarousel({
    loop:false,
    nav:false,
    items:1,
    mouseDrag:true,
    rewind: true,
    autoplay: true,
    dots: true,
    dotsEach: true,
    margin: 400

})
    </script>
    <script>
    $('.owl-carousel4').owlCarousel({
    loop:false,
    nav:true,
    items:4,
    mouseDrag:true,
    rewind: true,
    autoplay: false,
    dots:false,
    navText:["<i class='icofont-simple-left'></i>","<i class='icofont-simple-right'></i>"],
    smartSpeed:1100,
    responsive:{
        0:{
        items:2,
            margin:30 
    },
        1000:{
        items:3
    },
        1250:{
            items:4
        }
    }

})
    </script>
    <script>
    $(document).ready(function() {

	$('#iconbox1').click(function() {

        $('#iconbox1').removeClass('iconbox');
        
		$('#iconbox1').addClass('iconbox2');
        
        $('#iconbox2').removeClass('iconbox2');
        
		$('#iconbox2').addClass('iconbox');
        
        $('#iconbox3').removeClass('iconbox2');
        
		$('#iconbox3').addClass('iconbox');
        
        $('#iconbox4').removeClass('iconbox2');
        
		$('#iconbox4').addClass('iconbox');
		
        $('#iconbox5').removeClass('iconbox2');
        
		$('#iconbox5').addClass('iconbox');
		

	 });
        $('#iconbox2').click(function() {

		$('#iconbox1').removeClass('iconbox2');
        
		$('#iconbox1').addClass('iconbox');
        
        $('#iconbox2').removeClass('iconbox');
        
		$('#iconbox2').addClass('iconbox2');
        
        $('#iconbox3').removeClass('iconbox2');
        
		$('#iconbox3').addClass('iconbox');
        
        $('#iconbox4').removeClass('iconbox2');
        
		$('#iconbox4').addClass('iconbox');
		
        $('#iconbox5').removeClass('iconbox2');
        
		$('#iconbox5').addClass('iconbox');
		

	 });
        $('#iconbox3').click(function() {

		$('#iconbox1').removeClass('iconbox2');
        
		$('#iconbox1').addClass('iconbox');
        
        $('#iconbox2').removeClass('iconbox2');
        
		$('#iconbox2').addClass('iconbox');
        
        $('#iconbox3').removeClass('iconbox');
        
		$('#iconbox3').addClass('iconbox2');
        
        $('#iconbox4').removeClass('iconbox2');
        
		$('#iconbox4').addClass('iconbox');
		
        $('#iconbox5').removeClass('iconbox2');
        
		$('#iconbox5').addClass('iconbox');
		

	 });
        $('#iconbox4').click(function() {

		$('#iconbox1').removeClass('iconbox2');
        
		$('#iconbox1').addClass('iconbox');
        
        $('#iconbox2').removeClass('iconbox2');
        
		$('#iconbox2').addClass('iconbox');
        
        $('#iconbox3').removeClass('iconbox2');
        
		$('#iconbox3').addClass('iconbox');
        
        $('#iconbox4').removeClass('iconbox');
        
		$('#iconbox4').addClass('iconbox2');
		
        $('#iconbox5').removeClass('iconbox2');
        
		$('#iconbox5').addClass('iconbox');
		

	 });
        $('#iconbox5').click(function() {

		$('#iconbox1').removeClass('iconbox2');
        
		$('#iconbox1').addClass('iconbox');
        
        $('#iconbox2').removeClass('iconbox2');
        
		$('#iconbox2').addClass('iconbox');
        
        $('#iconbox3').removeClass('iconbox2');
        
		$('#iconbox3').addClass('iconbox');
        
        $('#iconbox4').removeClass('iconbox2');
        
		$('#iconbox4').addClass('iconbox');
		
        $('#iconbox5').removeClass('iconbox');
        
		$('#iconbox5').addClass('iconbox2');
		

	 });
    });
        
    
    </script>
</body>
</html>
