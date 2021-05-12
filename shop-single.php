<?php
session_start();
include("./php/conexion.php");
if( isset($_GET["id"])){
    $resultado = $conexion ->query("select * from productos where id=".$_GET["id"])or die($conexion->error);
    if(mysqli_num_rows($resultado) > 0){
        $fila = mysqli_fetch_row($resultado);    
    
}else{
    header("Location: ./shop");
    }
}else{
    //redireccionar
    header("Location: ./shop");
}

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
    <title>Comprar <?php echo $fila[1] ?> | Clinika - Expertos en Cuidar de tu Salud</title>
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
       <h1><?php echo $fila[1] ?></h1>
       </div>
   </div>  
            
   <div class="shop-single">
       <div class="shop-single-img">
        <div class="shop-single-img-final">
            <a data-fancybox="gallery" data-type="image" href="img/<?php echo $fila[4] ?>" data-caption="<?php echo $fila[1] ?>"><img src="img/<?php echo $fila[4]; ?>">           
            <span><i class="fas fa-search"></i></span>
            </a>
        </div>   
       </div>
       <div class="shop-single-desc">
           <h1>$<?php echo $fila[2]; ?>.00</h1>
           <h2>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</h2>
           <li>Selección de DPI: 2600/2000/1600/1200/800</li>
           <li>Pantalla táctil con Windows
            </li>
           <li>Luz indicadora de batería</li>
           <li>Se conecta directamente al suspensio</li>
           <div class="single-buttons">
              <div class="single-buttons-number">
               <input type="text" value="1">
               <span>-</span>
               <span>+</span>
               </div>
               <div class="single-buttons-cart">
                   <a href="cart?id=<?php echo $fila[0] ?>"><button class="button">Añadir Al Carrito</button></a>
               </div>
           </div>
           <h3>Categoría: <strong><?php echo $fila[3] ?></strong></h3>
       </div>
   </div>
   
   <div class="single-reviews">
       <div class="single-reviews-buttons">
           <a href="#Description"><button class="button2"  id="Box1">Descripción</button></a>
           <a href="#Reviews"><button id="Box2" class="button">Reseñas (0)</button></a>
       </div>
       <div class="owl-carousel owl-carousel owl-theme">
           <div class="item item1" data-hash="Description">
           <h1>Sinulan Forte</h1>
           <h2>Lorem Khaled Ipsum es una de las claves del éxito. Charla elíptica pasaje de muchas variaciones La clave para un mayor éxito es recibir un masaje una vez a la semana con palabras aleatorias que no sean importantes, clave principal, charla de tela. Charla magnate Charla elíptica. El trozo estándar de Lorem Ipsum utilizado desde el siglo XVI se reproduce a continuación para los interesados. Las secciones 1.10.32 y 1.10.33 de “de Finibus Bonorum et Malorum de Cicero también se reproducen en su original exacto acompañado.</h2>
           <img src="img/Description.jpg">
           <h2>Ponga sobre la mesa estrategias de supervivencia en las que todos ganen para garantizar una dominación proactiva. Al final del día, en el futuro, una nueva normalidad que ha evolucionado desde la generación X está en la pista y se dirige hacia una solución en la nube optimizada.
            </h2>
           </div>
           <div class="item item2" data-hash="Reviews">
           <h2>Aún no hay reseñas.</h2>
           <h1>Sé el primero en valorar "<?php echo $fila[1]; ?>"</h1>
           <h2>Su dirección de correo electrónico no será publicada. Los campos obligatorios están marcados *</h2>
           <h3>Tu calificación  *</h3>
           <div class="review-stars-prev">
           <div class="review-stars">
               <button><i class="fas fa-star"></i></button>
               <button><i class="fas fa-star"></i></button>
               <button><i class="fas fa-star"></i></button>
               <button><i class="fas fa-star"></i></button>
               <button><i class="fas fa-star"></i></button>
           </div>
               </div>
           <h3>Tu reseña *</h3>
           <textarea></textarea>
           <h3>Nombre *</h3>
           <input type="text" name="name">
           <h3>Correo electónico *</h3>
           <input type="text" name="name">
           </div>
       </div>
   </div>
   
   <div class="single-related">
       <h1>Productos relacionados</h1>
<div class="index-products">
           <div class="shop-products"> 
              <?php
                include("./php/conexion.php");
                   $resultado = $conexion ->query("select * from productos
                   where 
                   categoria like '$fila[3]' or
                   nombre like '$fila[1]' 
                   = 'gel'
                   order by rand() limit 3"); 
                
                while($fila = mysqli_fetch_array($resultado)){
                    
                
                ?>
              <div class="shop-items"><!-- copia a partir de aqui y ponlo de otro contenedor en la tienda, este solo es el contenedor individual de los productos -->
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
                            <a id="quickview">
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
           </div>
   </div>   </div>
   
   
   
<!-- Modal de productos <div class="modal-products" id="modal-products"> 
      <div class="content-modal-products">
       <div class="shop-single">
       <div class="shop-single-img">
        <div class="shop-single-img-final">
            <a data-fancybox="gallery" data-type="image" href="img/<?php echo $fila[4] ?>" data-caption="<?php echo $fila[1] ?>"><img src="img/<?php echo $fila[4]; ?>">           
            <span><i class="fas fa-search"></i></span>
            </a>
        </div>   
       </div>
       <div class="shop-single-desc">
          <h4><?php echo $fila[1]; ?></h4>
           <h1>$<?php echo $fila[2]; ?>.00</h1>
           <h2>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</h2>
           <li>Selección de DPI: 2600/2000/1600/1200/800</li>
           <li>Pantalla táctil con Windows
            </li>
           <li>Luz indicadora de batería</li>
           <li>Se conecta directamente al suspensio</li>
           <div class="single-buttons">
              <div class="single-buttons-number">
               <input type="text" value="1">
               <span>-</span>
               <span>+</span>
               </div>
               <div class="single-buttons-cart">
                   <a href="#"><button class="button">Añadir Al Carrito</button></a>
               </div>
           </div>
           <h3>Categoría: <strong><?php echo $fila[3] ?></strong></h3>
       </div>
   </div>
    </div>
   </div>-->
      
<?php include ('./layouts/footer.php'); ?>  
   <script src="js/jquery-3.3.1.min.js"></script>
   <script src="js/owl.carousel.min.js"></script>
   <script src="js/up.js"></script>
   <script src="js/reload.js"></script>
   <script src="js/menu.js"></script>
   <script src="fancybox-master/dist/jquery.fancybox.min.js"></script>
   <script src="https://kit.fontawesome.com/24c94b551c.js" crossorigin="anonymous"></script>
   <script>
    $('.owl-carousel').owlCarousel({
    loop:false,
    nav:false,
    URLhashListener:true,
    autoplayHoverPause:true,
    items:1,
    slideTransition: 'linear',
    mouseDrag:false,
    touchDrag: false,
    smartSpeed: 1,
    dots: false
})
    </script>
    <script>
    $(document).ready(function() {

	$('#Box1').click(function() {

        $('#Box1').removeClass('button');
        
		$('#Box1').addClass('button2');
        
        $('#Box2').removeClass('button2');
        
		$('#Box2').addClass('button');
        
        
	 });
    $('#Box2').click(function() {

        $('#Box2').removeClass('button');
        
		$('#Box2').addClass('button2');
        
        $('#Box1').removeClass('button2');
        
		$('#Box1').addClass('button');
        
	 });
        $('#modal-products').css('display', 'none');      
        
        $('#quickview').click(function(){

            $('#modal-products').css('display', 'block');      
});
    });
        
    </script>
</body>
</html>
