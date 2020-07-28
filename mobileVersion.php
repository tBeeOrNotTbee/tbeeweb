<!DOCTYPE html>
<html lang="en">

<?php require_once('partials/head.php'); ?>

<body>

    <?php $view = "mobile"; require_once('js/mobileOrDesktop.php');?>

    <div class="container-fluid h100 d-flex flex-column justify-content-around tr-bc overflow-hidden">
        <div class="row px-3">
            <div class="col-9">
                <a href="tbeeMobileVersion.php"><img src="img/logoTbee.png" class="img-fluid" alt="T-Bee Media"
                data-aos="zoom-out-left" data-aos-duration="3000"></a>
            </div>
        </div>
        <div class="row px-3 justify-content-end">
            <div class="col-7">
                <a href="#"><img src="img/logoMad.png" class="img-fluid" alt="MAD Brainstorm"
                data-aos="zoom-out-right" data-aos-duration="3000"></a>
            </div>
        </div>
    </div>

    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/aos.js"></script>

    <script>
        AOS.init();
    </script>
</body>
</html>