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
    <title>Productos - Clinika</title>
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
   
   <div class="shop shop-real">
      <div class="shop-presentation">
       <h1>Tienda</h1>
       <h2>Compre nuestros productos de confianza de acuerdo con sus preferencias y recomendaciones médicas.</h2>
       </div>
   </div>
   
   <div class="shop-category">
       <div class="shop-category-first">
           <h3>Se muestran <?php 
               if(isset($_GET['limit'])){
                if($_GET['limit']<35){
                echo ($_GET['limit']+1);
                echo '-' ;
                echo($_GET['limit']+12);
                }
                if($_GET['limit']>35){
                echo ($_GET['limit']+1);
                echo '-' ;
                echo($_GET['limit']+7);}
               }else{
                echo '1-12';
               }
               ?> de 43 resultados
            </h3>
       </div>
       <div class="shop-category-second">
           <select onchange="location = this.options[this.selectedIndex].value;">
               <option value="shop">Clasificación por defecto</option>
               <option value="shop?orderby=popularity">Ordenar por popularidad</option>
               <option value="shop?orderby=calification">Ordenar por calificación promedio</option>
               <option value="shop?orderby=last">Ordenar por último</option>
               <option value="shop?orderby=lowerprice">Ordenar por precio: de menor a mayor</option>
               <option value="shop?orderby=higherprice">Ordenar por precio: de mayor a menor</option>
           </select>
       </div>
   </div>
      
       <div class="index-products">
           <div class="shop-products"> 
              <?php
                include("./php/conexion.php");
                    $limit = 12;
               
                   $totalQuery = $conexion->query('select count(*) from productos')or die($conexion->error);
                   $totalProductos = mysqli_fetch_row($totalQuery);
                   $totalBotones = $totalProductos[0]/$limit;
                   if(isset($_GET['limit'])){
                       $resultado = $conexion ->query("select * from productos order by id limit ".$_GET['limit'].",".$limit)or die($conexion -> error);
                   }else{
                   $resultado = $conexion ->query("select * from productos order by id limit ".$limit)or die($conexion -> error); 
                   }
               if(isset($_GET['orderby'])){
                       if($_GET['orderby']== 'last'){
                       $resultado = $conexion ->query("select * from productos order by id desc limit 12")or die($conexion -> error);
                    }
                       if($_GET['orderby']== 'lowerprice'){
                       $resultado = $conexion ->query("select * from productos order by precio asc limit 12")or die($conexion -> error);
                    }
                   if($_GET['orderby']== 'higherprice'){
                       $resultado = $conexion ->query("select * from productos order by precio desc limit 12")or die($conexion -> error);
                    }
                   if($_GET['orderby']== 'popularity'){
                       $resultado = $conexion ->query("select * from productos order by nombre asc limit 12")or die($conexion -> error);
                    }
                   if($_GET['orderby']== 'calification'){
                       $resultado = $conexion ->query("select * from productos order by categoria asc limit 12")or die($conexion -> error);
                    }
                   }
               else{
                   $resultado = $conexion ->query("select * from productos order by id asc limit 12")or die($conexion -> error); 
                   }
                
                while($fila = mysqli_fetch_array($resultado)){
                    
                
                ?>
              <div class="shop-items"><!-- copia a partir de aqui y ponlo de otro contenedor en la tienda, este solo es el contenedor individual de los productos -->
                <a href="shop-single?id=<?php echo $fila[0]; ?>"><div class="shop-items-img">
                <img loading="lazy" src="img/<?php echo $fila[4]; ?>" alt="<?php echo $fila[1]; ?>" title="<?php echo $fila[1]; ?>">
                   
                    </div></a>
                    <div class="shop-items-img-icons">
                       <a href="cart?id=<?php echo $fila[0] ?>">
                           <span>
                               <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-plus-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM4 14a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm7 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z"/>
</svg>
                           </span></a>
                           <a href="wishlist?id=<?php echo $fila[0] ?>">
                            <span>
                               <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
</svg>
                               </span></a>
                            <a href="shop-single?id=<?php echo $fila[0]; ?>">
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
               <?php }  ?>
           </div>
   </div>
   <div class="pre-shop-buttons">
   <div class="shop-buttons">
       <?php
       if(isset($_GET['limit'])){
           if($_GET['limit']>0){
               echo '<a href="shop?limit='.($_GET['limit']-12).'"><span><p>←</p></span></a>';
           }
       }
       for($k=0;$k<$totalBotones;$k++){
           echo '<a href="shop?limit='.($k*12).'"><span><p>'.($k+1).'</p></span></a>';
       }
       if(isset($_GET['limit'])){
           if($_GET['limit']+12 < $totalBotones*12){
           echo '<a href="shop?limit='.($_GET['limit']+12).'"><span><p>→</p></span></a>';
           }
       }else{
           echo '<a href="shop?limit=12"><span><p>→</p></span></a>';
       }
       ?>
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
