<div class="content-second">
    <h1>Reserve una ranura</h1>
    <h2>¿Que necesitas?</h2>
    <div class="booking-dentist" id="booking-dentist">
        <div class="booking-dentist-first">
            <span>
                <i class="fas fa-check"></i>
            </span>
        </div>
        <div class="booking-dentist-second">
            <h4>Estomatología</h4>
            <h5>Dentista</h5>
        </div>
        <div class="booking-dentist-third">
            <h4>$15</h4>
        </div>
    </div>
    <div class="booking-price">
        <div class="booking-price-first">
        <h4>Total Parcial</h4>
        </div>
        <div class="booking-price-second">
        <h4 class="precio" id="precio"></h4>
        </div>
    </div>
    <div class="booking-buttons">
    <div class="booking-buttons-first">
    <button class="button button5">ATRÁS</button>
        </div>
        <div class="booking-buttons-second">
    <button class="button" id="second">PRÓXIMO PASO</button>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
       $('.booking-dentist').click(function(){
           $('#precio').removeClass('precio');
           $('#precio').addClass('precio2');
           $('.booking-dentist .booking-dentist-first span i').css('opacity','1')
       });
    })
    </script>