<div class="theme-main-menu sticky-menu theme-menu-one">
    <div class="d-flex align-items-center justify-content-lg-evenly justify-content-between">
        <div class="logo"><a href="/"><img
                    src="../storage/public/assets/template_user/images/logo/logo-sistem-atk.png" alt=""></a>
        </div>
        <nav id="mega-menu-holder" class="navbar navbar-expand-lg">
            <div class="nav-container me-3 me-md-none p-10px">
                <button class="navbar-toggler d-inline-block d-lg-none">
                    Menu
                </button>
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <div class="d-lg-flex align-items-center ">
                        <ul class="navbar-nav text-center text-lg-start">
                            <li
                                class="nav-item dropdown oren position-static {{ $active === 'index' ? 'active' : '' }} ">
                                <a class="nav-link" href="{{ route('frontpage.index') }}">Beranda</a>
                            </li>
                            <li class="nav-item dropdown oren {{ $active === 'fitur' ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('frontpage.fitur') }}">Fitur</a>
                            </li>
                            <li
                                class="nav-item dropdown oren mega-dropdown-md {{ $active === 'gallery' ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('frontpage.gallery') }}">Galeri Aplikasi</a>
                            </li>
                            <li class="nav-item dropdown oren {{ $active === 'price' ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('frontpage.price') }}">Harga</a>
                            </li>
                            <li class="nav-item dropdown oren {{ $active === 'testimoni' ? 'active' : '' }}">
                                <a class="nav-link" href="#testimoni">Testimoni</a>
                            </li>
                            <li class="nav-item dropdown oren {{ $active === 'blog' ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('frontpage.blog') }}">Blog</a>
                            </li>
                            <li
                                class="nav-item dropdown oren d-flex d-sm-none align-items-center justify-content-center">
                                <a href="login.html" class="nav-link signIn-action align-items-center">
                                    <h6 class="hover-oren text-center"><i class="fa fa-user me-2'"></i><span
                                            class="ms-2">Login</span></h6>
                                </a>
                            </li>

                            <!-- <li class="nav-item dropdown">
                                    <a class="nav-link" href="/#footer">Kontak Kami</a>
                                </li> -->
                        </ul>



                        <ul class="right-button-group d-flex align-items-center justify-content-center">

                            <li>
                                <a href="login.html" class="signIn-action d-none d-sm-flex align-items-center">
                                    <h6 class="hover-oren"><i class="fa fa-user me-2'"></i><span
                                            class="ms-2">Login</span></h6>
                                </a>
                            </li>


                            <li class="d-flex justify-content-center align-items-center mx-md-3">
                                <a href="sign-up.html"
                                    class="ms-0 signUp-action border-radius-25px d-flex justify-content-center align-items-center"><i
                                        class="fa fa-whatsapp fs-5 me-2"></i> <span>
                                        Registrasi </span></a>
                            </li>
                            <div class="ms-2">
                                <ul class="d-flex align-items-center">
                                    <li>
                                        <div class="dropdown ">
                                            <button class="dropdown-toggle" type="button" id="dropdownMenuButton"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img src="../storage/public/assets/template_user/images/logo/logo-inggris.png"
                                                    alt="">
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"
                                                x-placement="bottom-start"
                                                style="position: absolute; will-change: transform; top: 0px; left: -200px; transform: translate3d(0px, 59px, 0px);">
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    <span class="d-flex justify-content-center align-items-center">
                                                        <img src="../storage/public/assets/template_user/images/logo/logo-indo.png"
                                                            alt="" style="width: 30px; height: 30px;"
                                                            class="me-2">
                                                        Indonesia</span>
                                                </a>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    <span class="d-flex justify-content-center align-items-center">
                                                        <img src="../storage/public/assets/template_user/images/logo/logo-inggris.png"
                                                            alt="" style="width: 30px; height: 30px;"
                                                            class="me-2">
                                                        English</span>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div> <!-- /.theme-main-menu -->
