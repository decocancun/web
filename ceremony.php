<?php
    $page = "ceremony";
    include_once 'header.php';
    $resultados = '[
        {
            "imagen":"ceremony-1.png",
            "modal":"ceremony-modal-1.png"
        },
        {
            "imagen":"ceremony-2.png",
            "modal":"ceremony-modal-2.png"
        },
        {
            "imagen":"ceremony-3.png",
            "modal":"ceremony-modal-3.png"
        },
        {
            "imagen":"ceremony-4.png",
            "modal":"ceremony-modal-4.png"
        },
        {
            "imagen":"ceremony-5.png",
            "modal":"ceremony-modal-5.png"
        },
        {
            "imagen":"ceremony-6.png",
            "modal":"ceremony-modal-6.png"
        },
        {
            "imagen":"ceremony-7.png",
            "modal":"ceremony-modal-7.png"
        },
        {
            "imagen":"ceremony-8.png",
            "modal":"ceremony-modal-8.png"
        },
        {
            "imagen":"ceremony-9.png",
            "modal":"ceremony-modal-9.png"
        },
        {
            "imagen":"ceremony-10.png",
            "modal":"ceremony-modal-10.png"
        },
        {
            "imagen":"ceremony-11.png",
            "modal":"ceremony-modal-11.png"
        },
        {
            "imagen":"ceremony-12.png",
            "modal":"ceremony-modal-12.png"
        },
        {
            "imagen":"ceremony-13.png",
            "modal":"ceremony-modal-13.png"
        },
        {
            "imagen":"ceremony-14.png",
            "modal":"ceremony-modal-14.png"
        },
        {
            "imagen":"ceremony-15.png",
            "modal":"ceremony-modal-15.png"
        },
        {
            "imagen":"ceremony-16.png",
            "modal":"ceremony-modal-16.png"
        },
        {
            "imagen":"ceremony-17.png",
            "modal":"ceremony-modal-17.png"
        },
        {
            "imagen":"ceremony-18.png",
            "modal":"ceremony-modal-18.png"
        },
        {
            "imagen":"ceremony-19.png",
            "modal":"ceremony-modal-19.png"
        },
        {
            "imagen":"ceremony-20.png",
            "modal":"ceremony-modal-20.png"
        },
        {
            "imagen":"ceremony-21.png",
            "modal":"ceremony-modal-21.png"
        },
        {
            "imagen":"ceremony-22.png",
            "modal":"ceremony-modal-22.png"
        },
        {
            "imagen":"ceremony-23.png",
            "modal":"ceremony-modal-23.png"
        },
        {
            "imagen":"ceremony-24.png",
            "modal":"ceremony-modal-24.png"
        },
        {
            "imagen":"ceremony-25.png",
            "modal":"ceremony-modal-25.png"
        },
        {
            "imagen":"ceremony-26.png",
            "modal":"ceremony-modal-26.png"
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
            <h3>CEREMONY</h3>
            <hr class="line_regresar">
        </div>
    </div>
    <div  class="containerGalWedding">
        <?php
        foreach ($array as $value) {
            ?>
            <div class="galeryWeddingGeneral imagen_wedding">
                <a class="lightbox" href="images/wedding/ceremony/modal/<?=$value['modal']?>">
                    <img src="images/wedding/ceremony/<?=$value['imagen']?>">
                    <div class="overlay_wedding"></div>
                </a>
            </div>
            <?php
        }
        ?>
    </div>
</div>

<?php include_once 'footer.php';?>
