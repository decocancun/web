<?php
    $page ="customized";
    include_once 'header.php';
    $resultados = '[
        {
            "imagen":"customized-1.png",
            "modal":"customized-1.png"
        },
        {
            "imagen":"customized-2.png",
            "modal":"customized-2.png"
        },
        {
            "imagen":"customized-3.png",
            "modal":"customized-3.png"
        },
        {
            "imagen":"customized-4.png",
            "modal":"customized-4.png"
        },
        {
            "imagen":"customized-5.png",
            "modal":"customized-5.png"
        },
        {
            "imagen":"customized-6.png",
            "modal":"customized-6.png"
        },
        {
            "imagen":"customized-7.png",
            "modal":"customized-7.png"
        },
        {
            "imagen":"customized-8.png",
            "modal":"customized-8.png"
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
            <h3>CUSTOMIZED DETAILS</h3>
            <hr class="line_regresar">
        </div>
    </div>
    <div  class="containerGalWedding">
        <?php
        foreach ($array as $value) {
            ?>
            <div class="galeryWeddingGeneral imagen_wedding">
                <a class="lightbox" href="images/wedding/customized/modal/<?=$value['modal']?>">
                    <img src="images/wedding/customized/<?=$value['imagen']?>">
                    <div class="overlay_wedding"></div>
                </a>
            </div>
            <?php
        }
        ?>
    </div>
</div>

<?php include_once 'footer.php';?>
