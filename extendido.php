

<!-- Forma A -->

<div class="row">

    <?php for ($i=0; $i < 12; $i++) { ?> 

        <div class="col-md-3">
            <img src="imagenes/foto<?php echo $i ?>.jpg">
        </div>
    <?php } ?>
</div>



<!-- Forma B -->

<div class="row">

    <?php for ($i=0; $i < 12; $i++) { ?> 
        <div class="col-md-3">
            <img src="imagenes/foto<?= $i ?>.jpg">

        </div>

    

    <?php } ?>

</div>


<!-- Forma C -->

    <div class="row">
    <?php for ($i=0; $i < 12; $i++) { 
        echo '<div class="col-md-3">';
            echo '<img src="imagenes/foto'.$i.'.jpg">';
        echo '</div>';
    } ?>

</div>

