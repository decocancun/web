<?php
    $page ="reception";
    include_once 'header.php';
    $resultados = '[
        {
            "imagen":"reception-1.png",
            "modal":"reception-modal-1.png"
        },
        {
            "imagen":"reception-2.png",
            "modal":"reception-modal-2.png"
        },
        {
            "imagen":"reception-3.png",
            "modal":"reception-modal-3.png"
        },
        {
            "imagen":"reception-4.png",
            "modal":"reception-modal-4.png"
        },
        {
            "imagen":"reception-5.png",
            "modal":"reception-modal-5.png"
        },
        {
            "imagen":"reception-6.png",
            "modal":"reception-modal-6.png"
        },
        {
            "imagen":"reception-7.png",
            "modal":"reception-modal-7.png"
        },
        {
            "imagen":"reception-8.png",
            "modal":"reception-modal-8.png"
        },
        {
            "imagen":"reception-9.png",
            "modal":"reception-modal-9.png"
        },
        {
            "imagen":"reception-10.png",
            "modal":"reception-modal-10.png"
        },
        {
            "imagen":"reception-11.png",
            "modal":"reception-modal-11.png"
        },
        {
            "imagen":"reception-12.png",
            "modal":"reception-modal-12.png"
        },
        {
            "imagen":"reception-13.png",
            "modal":"reception-modal-13.png"
        },
        {
            "imagen":"reception-14.png",
            "modal":"reception-modal-14.png"
        },
        {
            "imagen":"reception-15.png",
            "modal":"reception-modal-15.png"
        },
        {
            "imagen":"reception-16.png",
            "modal":"reception-modal-16.png"
        },
        {
            "imagen":"reception-17.png",
            "modal":"reception-modal-17.png"
        },
        {
            "imagen":"reception-18.png",
            "modal":"reception-modal-18.png"
        },
        {
            "imagen":"reception-19.png",
            "modal":"reception-modal-19.png"
        },
        {
            "imagen":"reception-20.png",
            "modal":"reception-modal-20.png"
        },
        {
            "imagen":"reception-21.png",
            "modal":"reception-modal-21.png"
        },
        {
            "imagen":"reception-22.png",
            "modal":"reception-modal-22.png"
        },
        {
            "imagen":"reception-23.png",
            "modal":"reception-modal-23.png"
        },
        {
            "imagen":"reception-24.png",
            "modal":"reception-modal-24.png"
        },
        {
            "imagen":"reception-25.png",
            "modal":"reception-modal-25.png"
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
            <h3>RECEPTION</h3>
            <hr class="line_regresar">
        </div>
    </div>
    <div  class="containerGalWedding">
        <?php
        foreach ($array as $value) {
            ?>
            <div class="galeryWeddingGeneral imagen_wedding">
                <a class="lightbox" href="images/wedding/reception/modal/<?=$value['modal']?>">
                    <img src="images/wedding/reception/<?=$value['imagen']?>">
                    <div class="overlay_wedding"></div>
                </a>
            </div>
            <?php
        }
        ?>
    </div>
</div>

<?php include_once 'footer.php';?>
