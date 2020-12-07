<?php
    $page ="sount-asian";
    include_once 'header.php';

    $resultados = '[
        {
            "imagen":"south-1.png",
            "modal":"south-modal-1.png"
        },
        {
            "imagen":"south-2.png",
            "modal":"south-modal-2.png"
        },
        {
            "imagen":"south-3.png",
            "modal":"south-modal-3.png"
        },
        {
            "imagen":"south-4.png",
            "modal":"south-modal-4.png"
        },
        {
            "imagen":"south-5.png",
            "modal":"south-modal-5.png"
        },
        {
            "imagen":"south-6.png",
            "modal":"south-modal-6.png"
        },
        {
            "imagen":"south-7.png",
            "modal":"south-modal-7.png"
        },
        {
            "imagen":"south-8.png",
            "modal":"south-modal-8.png"
        },
        {
            "imagen":"south-9.png",
            "modal":"south-modal-9.png"
        },
        {
            "imagen":"south-10.png",
            "modal":"south-modal-10.png"
        },
        {
            "imagen":"south-11.png",
            "modal":"south-modal-11.png"
        },
        {
            "imagen":"south-12.png",
            "modal":"south-modal-12.png"
        },
        {
            "imagen":"south-13.png",
            "modal":"south-modal-13.png"
        },
        {
            "imagen":"south-14.png",
            "modal":"south-modal-14.png"
        },
        {
            "imagen":"south-15.png",
            "modal":"south-modal-15.png"
        },
        {
            "imagen":"south-16.png",
            "modal":"south-modal-16.png"
        },
        {
            "imagen":"south-17.png",
            "modal":"south-modal-17.png"
        },
        {
            "imagen":"south-18.png",
            "modal":"south-modal-18.png"
        },
        {
            "imagen":"south-19.png",
            "modal":"south-modal-19.png"
        },
        {
            "imagen":"south-20.png",
            "modal":"south-modal-20.png"
        },
        {
            "imagen":"south-21.png",
            "modal":"south-modal-21.png"
        },
        {
            "imagen":"south-22.png",
            "modal":"south-modal-22.png"
        },
        {
            "imagen":"south-23.png",
            "modal":"south-modal-23.png"
        },
        {
            "imagen":"south-24.png",
            "modal":"south-modal-24.png"
        },
        {
            "imagen":"south-25.png",
            "modal":"south-modal-25.png"
        },
        {
            "imagen":"south-26.png",
            "modal":"south-modal-26.png"
        },
        {
            "imagen":"south-27.png",
            "modal":"south-modal-27.png"
        },
        {
            "imagen":"south-28.png",
            "modal":"south-modal-28.png"
        },
        {
            "imagen":"south-29.png",
            "modal":"south-modal-29.png"
        },
        {
            "imagen":"south-30.png",
            "modal":"south-modal-30.png"
        },
        {
            "imagen":"south-31.png",
            "modal":"south-modal-31.png"
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
            <h3>SOUTH ASIAN WEDDING</h3>
            <hr class="line_regresar">
        </div>
    </div>
    <div  class="containerGalWedding">
        <?php
        foreach ($array as $value) {
            ?>
            <div class="galeryWeddingGeneral imagen_wedding">
                <a class="lightbox" href="images/wedding/south/modal/<?=$value['modal']?>">
                    <img src="images/wedding/south/<?=$value['imagen']?>">
                    <div class="overlay_wedding"></div>
                </a>
            </div>
            <?php
        }
        ?>
    </div>
</div>

<?php include_once 'footer.php';?>
