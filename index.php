<!DOCTYPE html>
<html lang="es">
<?php include 'layout/archivosheader.php'; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Le Francé Hot Dog</title>
</head>
<!-- Codigo del preloader -->
<style>
    #wrap-preload {
        position: fixed;
        z-index: 10;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background: #fff;
        opacity: 1;
        visibility: visible;
        transition: opacity .5s ease, visibility .5s ease;
        z-index: 1032;
    }

    #wrap-preload.close {
        opacity: 0;
        visibility: hidden;
    }

    .fixed-top {
        position: fixed;
        top: 0;
        right: 0;
        left: 0;
        z-index: 10;
    }

    #wrap-preload>img.gif {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate3d(-50%, -50%, 0);
        z-index: 1032;
        height: 20%;
    }
</style>
<div id="wrap-preload">
    <img src="images/logo.gif" alt="gif" class="gif" id="gif">
</div>
<script>
    var loader = document.getElementById("wrap-preload");
    window.addEventListener("load", function() {
        loader.style.visibility = "hidden";
    });
</script>
<!-- Fin de codigo preloader -->

<body>
    <div class="wrap-social">
        <div class="show" id="showId"><i class="fa fa-caret-right"></i></div>
        <div class="social">
            <div class="socials facebook">
                <a href="https://www.facebook.com/Le-Franc%C3%A9s-Hot-Dog-111278137160457" target="_blank">
                    <i class="fab fa-facebook-f icono"></i>
                </a>
            </div>
            <div class="socials insta">
                <a href="https://instagram.com/hotdoglefrances?igshid=pws6eez6spr2" target="_blank">
                    <i class="fab fa-instagram icono"></i>
                </a>
            </div>
            <div class="socials whatApp">
                <a href="https://wa.me/message/LKFFNW3WKZK4I1" target="_blank">
                    <i class="fab fa-whatsapp icono"></i>
                </a>
            </div>
        </div>
    </div>
    </div>
    <div class="col-12 cuadro">
        <h1 class="titulo text-center tamaño_titulo">LE FRANCÉ HOT DOG</h1>
    </div>
    <div class="col-12 d-flex flex-wrap align-items-center justify-content-center cont_img">
        <div class="col-lg-4 col-md-6 col-12 mb-3">
            <img src="images/1.jpeg" class="card-img-top card_img" alt="...">
        </div>
        <div class="col-lg-4 col-md-6 col-12 mb-3">
            <img src="images/2.jpeg" class="card-img-top card_img" alt="...">
        </div>
        <div class="col-lg-4 col-md-6 col-12 mb-3">
            <img src="images/3.jpeg" class="card-img-top card_img" alt="...">
        </div>
        <div class="col-lg-4 col-md-6 col-12 mb-3">
            <img src="images/4.jpeg" class="card-img-top card_img" alt="...">
        </div>
    </div>
    <div class="col-lg-12col-md-9 col-12 logo-block copy d-flex align-items-center d-flex justify-content-center">
        <p class="text-center espacio"><a href="https://www.facebook.com/Le-Franc%C3%A9s-Hot-Dog-111278137160457" style="font-weight: bold;color: #4d4d4d;" target="_blank"> Le Francés Hot Dog </a>
            &copy; Copyright 2020. <br> Todos los derechos reservados. </p>
        <br />


    </div>
</body>
<?php include 'layout/archivosfooter.php'; ?>

</html>
