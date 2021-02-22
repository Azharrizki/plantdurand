<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="description" content="Mobile Application HTML5 Template">

    <meta name="copyright" content="MACode ID, https://www.macodeid.com/">

    <title>Plantduran.id</title>

    <link rel="shortcut icon" href="../assets/favicon.png" type="image/x-icon">

    <link rel="stylesheet" href="../assets/css/maicons.css">

    <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

    <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.min.css">

    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <link rel="stylesheet" href="../assets/css/mobster.css">

    <!-- my font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:wght@500&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700;900&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>

    <div class="page-hero-section bg-image1 hero-home-2" style="background-image: url(../assets/img/login1.png);">
        <div class="hero-caption">
            <div class="container h-100">
                <div class="row h-100">

                    <div class="container masuk m-auto">
                        <?php if (session()->getFlashdata('gagal')) : ?>
                            <div class="wow fadeIn alert alert-danger" role="alert">
                                <?= session()->getFlashdata('gagal'); ?>
                            </div>
                        <?php endif; ?>
                        <div class="card m-auto zoomIn wow" style="height: 20rem; width: 20rem;">

                            <div class="card-body ml-3 mr-3 c-daftar">
                                <h4 class="card-title text-lg-center mt-3 mb-4">Masuk</h4>

                                <form class="form-floating mt-3" method="post" action="/login/login">
                                    <div class="mt-3">
                                        <input type="email" class="form-control" style="font-size: smaller;" name="email" placeholder="Email">
                                    </div>
                                    <div class="mt-3">
                                        <input type="password" class="form-control" style="font-size: smaller;" name="password" placeholder="Password">
                                    </div>
                                    <button class="btn btn-gradient mt-4 mb-3" type="submit" style="width: 100%;">Masuk</button>
                                </form>
                                <div style="font-size: smaller;">
                                    <a href="/login/lupa">Lupa kata sandi?</a>
                                </div>
                            </div>
                        </div> <br>
                        <div class="card m-auto wow fadeInUp" style="height: 50px; width: 20rem;">
                            <div class="card-body c-masuk">
                                Tidak mempunyai akun?<a href="/login/daftar"> Daftar</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script src="../assets/js/jquery-3.5.1.min.js"></script>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <script src="../assets/vendor/wow/wow.min.js"></script>

    <script src="../assets/js/mobster.js"></script>

    <script src="../assets/js/jquery-3.5.1.min.js"></script>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <script src="../assets/vendor/wow/wow.min.js"></script>

    <script src="../assets/js/mobster.js"></script>

    <script src="../assets/js/google-maps.js"></script>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap"></script>


</body>

</html>