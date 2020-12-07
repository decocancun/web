<?php
    $page = "thematic-wedding";
    include_once 'header.php';

    $resultados = '[
        {
            "imagen":"thematic-1.png",
            "modal":"thematic-modal-1.png"
        },
        {
            "imagen":"thematic-2.png",
            "modal":"thematic-modal-2.png"
        },
        {
            "imagen":"thematic-3.png",
            "modal":"thematic-modal-3.png"
        },
        {
            "imagen":"thematic-4.png",
            "modal":"thematic-modal-4.png"
        },
        {
            "imagen":"thematic-5.png",
            "modal":"thematic-modal-5.png"
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
            <h3>THEMATIC WEDDING</h3>
            <hr class="line_regresar">
        </div>
    </div>
    <div  class="containerGalWedding">
        <?php
        foreach ($array as $value) {
            ?>
            <div class="galeryWeddingGeneral imagen_wedding">
                <a class="lightbox" href="images/wedding/thematic_wedding/modal/<?=$value['modal']?>">
                    <img src="images/wedding/thematic_wedding/<?=$value['imagen']?>">
                    <div class="overlay_wedding"></div>
                </a>
            </div>
            <?php
        }
        ?>
    </div>
</div>

<?php include_once 'footer.php';?>
