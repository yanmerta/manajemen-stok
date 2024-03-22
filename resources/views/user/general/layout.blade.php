<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="keywords"
        content="Digital marketing agency, Digital marketing company, Digital marketing services, sass, software company">
    <meta name="description"
        content="Deski is a creative saas and software html template designed for saas and software Agency websites.">
    <meta property="og:site_name" content="deski">
    <meta property="og:url" content="https://heloshape.com/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Deski: creative saas and software html template">
    <meta name='og:image' content='../storage/public/assets/template_user/images/assets/ogg.png'>
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- For Resposive Device -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- For Window Tab Color -->
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#fd6a5e">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#fd6a5e">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#fd6a5e">
    <title>Aplikasi Manajemen Stok ATK</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="56x56"
        href="../storage/public/assets/template_user/images/logo/favicon-atk.png">
    <!-- Main style sheet -->
    <link rel="stylesheet" type="text/css" href="../storage/public/assets/template_user/css/style.css">
    <!-- responsive style sheet -->
    <link rel="stylesheet" type="text/css" href="../storage/public/assets/template_user/css/responsive.css">

    <link rel="stylesheet" type="text/css" href="../storage/public/assets/template_user/style.css">

    <link rel="stylesheet" href="../storage/public/assets/template_userdist/css/lightbox.min.css">

    <link rel="stylesheet" href="../storage/public/assets/template_user/css/lity.css">

    <!-- Fix Internet Explorer ______________________________________-->
    <!--[if lt IE 9]>
   <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
   <script src="vendor/html5shiv.js"></script>
   <script src="vendor/respond.js"></script>
  <![endif]-->
</head>

<body>
    <div class="main-page-wrapper">
        <!-- ===================================================
                Loading
            ==================================================== -->
        <section>
            <div id="preloader">
                <div id="ctn-preloader" class="ctn-preloader">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                        <div class="txt-loading">
                            <span data-text-preloader="S" class="letters-loading">
                                S
                            </span>
                            <span data-text-preloader="T" class="letters-loading">
                                T
                            </span>
                            <span data-text-preloader="O" class="letters-loading">
                                O
                            </span>
                            <span data-text-preloader="K" class="letters-loading">
                                K
                            </span>
                            <span data-text-preloader="I" class="letters-loading">
                                I
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Navbar -->
        @include('user.general.navbar')

        @yield('content')

        <!-- Footer -->
        @include('user.general.footer')





        <!-- Scroll Top Button -->
        <a href="https://api.whatsapp.com/send/?phone=6281934364063&text&type=phone_number&app_absent=0"
            class="for-wa-fixed">
            <img src="../storage/public/assets/template_user/images/logo/whatsapp-kontak.png" alt="Hubungi Kami">
        </a>
        <button class="scroll-top">
            <i class="fa fa-angle-up" aria-hidden="true"></i>
        </button>




        <!-- Optional JavaScript _____________________________  -->

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="../storage/public/assets/template_user/dist/js/lightbox-plus-jquery.js"></script>
        <!-- jQuery -->
        <script src="../storage/public/assets/template_user/vendor/jquery.min.js"></script>
        <!-- Popper js -->
        <script src="../storage/public/assets/template_user/vendor/popper.js/popper.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="../storage/public/assets/template_user/vendor/bootstrap/js/bootstrap.min.js"></script>
        <!-- menu  -->
        <script src="../storage/public/assets/template_user/vendor/mega-menu/assets/js/custom.js"></script>
        <!-- AOS js -->
        <script src="../storage/public/assets/template_user/vendor/aos-next/dist/aos.js"></script>
        <!-- js count to -->
        <script src="../storage/public/assets/template_user/vendor/jquery.appear.js"></script>
        <script src="../storage/public/assets/template_user/vendor/jquery.countTo.js"></script>
        <!-- Slick Slider -->
        <script src="../storage/public/assets/template_user/vendor/slick/slick.min.js"></script>

        <!-- Theme js -->
        <script src="../storage/public/assets/template_user/js/theme.js"></script>
        <script src="../storage/public/assets/template_user/js/lity.js"></script>


    </div> <!-- /.main-page-wrapper -->
</body>

</html>
