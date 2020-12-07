<?php
    $page="cocktail-dinner";
    include_once 'header.php';
    $resultados = '[
        {
            "imagen":"lounge-1.png",
            "modal":"lounge-modal-1.png"
        },
        {
            "imagen":"lounge-2.png",
            "modal":"lounge-modal-2.png"
        },
        {
            "imagen":"lounge-3.png",
            "modal":"lounge-modal-3.png"
        },
        {
            "imagen":"lounge-4.png",
            "modal":"lounge-modal-4.png"
        },
        {
            "imagen":"lounge-5.png",
            "modal":"lounge-modal-5.png"
        },
        {
            "imagen":"lounge-6.png",
            "modal":"lounge-modal-6.png"
        },
        {
            "imagen":"lounge-7.png",
            "modal":"lounge-modal-7.png"
        },
        {
            "imagen":"lounge-8.png",
            "modal":"lounge-modal-8.png"
        }

        ]';
    $array = json_decode($resultados, true);
?>
<div class="container tz-gallery">
    <div class="caja-title-galery d-flex justify-content-center align-items-center">
        <a href="wedding.php" class="caja-fecha">
            <img src="images/regresar.png">
        </a>
        <div class="">
            <h3>LOUNGE</h3>
            <hr class="line_regresar">
        </div>
    </div>
    <div  class="containerGalWedding">
        <?php
        foreach ($array as $value) {
            ?>
            <div class="galeryWeddingGeneral imagen_wedding">
                <a class="lightbox" href="images/wedding/lounge/modal/<?=$value['modal']?>">
                    <img src="images/wedding/lounge/<?=$value['imagen']?>">
                    <div class="overlay_wedding"></div>
                </a>
            </div>
            <?php
        }
        ?>
    </div>
</div>

<?php include_once 'footer.php';?>
