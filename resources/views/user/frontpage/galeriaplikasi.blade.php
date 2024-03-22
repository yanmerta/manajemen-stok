@extends('user.general.layout')
@section('content')
    <div id="galeri_aplikasi">
        <!-- Galeri Aplikasi Desktop -->
        <div
            class="main-page-wrapper font-gordita fancy-feature-thirtyFive position-relative lg-container mt-25 md-mt-120 d-none d-md-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="block-style-thirtySix">
                            <div class="title-style-fourteen text-lg-start text-center">
                                <div class="upper-title">{{ $gallery->gallery_title }}</div>
                                <h2>{{ $gallery->gallery_subtitle }}<img
                                        src="../storage/public/assets/template_user/images/shape/line-shape-13.svg"
                                        class="m-auto m-lg-0" alt="">
                                </h2>
                            </div>
                            <div class="tag-line text-lg-start text-center">{{ $gallery->gallery_description }}
                            </div>
                            <ul
                                class="slider-arrows d-flex justify-content-center justify-content-lg-end pt-0 md-pt-10 md-pb-30">
                                <li class="prev_case2 ripple-btn slick-arrow" style=""><i
                                        class="flaticon-right-arrow"></i></li>
                                <li class="next_case2 ripple-btn slick-arrow" style=""><i
                                        class="flaticon-right-arrow"></i></li>
                            </ul>
                        </div> <!-- /.block-style-thirtySix -->
                    </div>
                </div>
            </div>
            <div class="slider-wrapper margin-top50px-mockup">
                <div class="portfolio_slider_two">
                    @foreach ($galleryimage as $gallery)
                        @if ($gallery->gallery_active_status === 'yes')
                            <div class="item">
                                <div class="card-block">
                                    <a href="{{ asset('/storage/public/' . $gallery->gallery_image) }}"
                                        data-lightbox="image1" class="w-100 h-100">
                                        <div class="item-logo d-flex justify-content-center align-items-center">
                                            <img src="{{ asset('/storage/public/' . $gallery->gallery_image) }}"
                                                alt="">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div> <!-- /.portfolio_slider_two -->

            </div> <!-- /.slider-wrapper -->
            <div class="position-absolute style-mockup-desktop d-lg-block d-none">
                <img src="../storage/public/assets/template_user/images/screenshot/desktop/mockup-mackbook.png"
                    alt="">
            </div>
        </div> <!-- /.fancy-feature-thirtyFive -->

        <!-- Galeri Aplikasi Mobile -->
        <div
            class="main-page-wrapper h-150vh font-gordita fancy-feature-thirtyFive position-relative lg-container mt-25 md-mt-120 d-block d-md-none"">
            <div class=" container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="block-style-thirtySix">
                            <div class="title-style-fourteen text-md-start text-center">
                                <div class="upper-title">Galeri Aplikasi</div>
                                <h2>Tampilan dari Aplikasi Stoki<img
                                        src="../storage/public/assets/template_user/images/shape/line-shape-13.svg"
                                        alt=""></h2>
                            </div>
                            <div class="tag-line text-md-start text-center">Beberapa tampilan dari aplikasi Stoki.
                            </div>
                            <ul
                                class="slider-arrows d-flex justify-content-center justify-content-lg-end pt-0 md-pt-10 md-pb-30">
                                <li class="prev_case_baru position-absolute ripple-btn slick-arrow" style=""><i
                                        class="flaticon-right-arrow"></i></li>
                                <li class="next_case_baru position-absolute ripple-btn slick-arrow" style=""><i
                                        class="flaticon-right-arrow"></i></li>
                            </ul>
                        </div> <!-- /.block-style-thirtySix -->
                    </div>
                </div>
            </div>
            <div class="slider-wrapper">
                <div class="portfolio_slider_baru">
                    <div class="item-smartphone">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/mobile/1.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/mobile/1.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="item-smartphone">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/mobile/2.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/mobile/2.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="item-smartphone">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/mobile/3.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/mobile/3.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="item-smartphone">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/mobile/4.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/mobile/4.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="item-smartphone">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/mobile/5.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/mobile/5.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="item-smartphone">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/mobile/6.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/mobile/6.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="item-smartphone">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/mobile/7.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/mobile/7.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="item-smartphone">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/mobile/8.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/mobile/8.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="item-smartphone">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/mobile/9.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/mobile/9.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="item-smartphone">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/mobile/10.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/mobile/10.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="item-smartphone">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/mobile/11.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/mobile/11.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="item-smartphone">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/mobile/12.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/mobile/12.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="item-smartphone">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/mobile/13.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/mobile/13.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="item-smartphone">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/mobile/14.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/mobile/14.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="item-smartphone">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/mobile/15.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/mobile/15.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="item-smartphone">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/mobile/16.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/mobile/16.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="item-smartphone">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/mobile/17.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/mobile/17.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="item-smartphone">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/mobile/18.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/mobile/18.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="item-smartphone">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/mobile/19.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/mobile/19.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="item-smartphone">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/mobile/20.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/mobile/20.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="item-smartphone">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/mobile/11.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/mobile/21.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="item-smartphone">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/mobile/22.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/mobile/22.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="item-smartphone">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/mobile/23.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/mobile/23.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="item-smartphone">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/mobile/24.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/mobile/24.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="item-smartphone">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/mobile/25.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/mobile/25.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="item-smartphone">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/mobile/26.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/mobile/26.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="item-smartphone">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/mobile/27.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/mobile/27.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="item-smartphone">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/mobile/28.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/mobile/28.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="item-smartphone">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/mobile/29.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/mobile/29.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="item-smartphone">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/mobile/30.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/mobile/30.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="item-smartphone">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/mobile/31.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/mobile/31.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="item-smartphone">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/mobile/32.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/mobile/32.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="item-smartphone">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/mobile/33.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/mobile/33.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="item-smartphone">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/mobile/34.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/mobile/34.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="item-smartphone">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/mobile/35.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/mobile/35.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="item-smartphone">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/mobile/36.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/mobile/36.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="item-smartphone">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/mobile/37.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/mobile/37.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="item-smartphone">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/mobile/38.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/mobile/38.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="item-smartphone">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/mobile/39.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/mobile/39.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="item-smartphone">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/mobile/40.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/mobile/40.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="item-smartphone">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/mobile/41.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/mobile/41.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                </div> <!-- /.portfolio_slider_two -->
            </div> <!-- /.slider-wrapper -->

            <div class="position-absolute style-mockup-smartphonemobile">
                <img src="../storage/public/assets/template_user/images/screenshot/mobile/mockup-smartphone.png"
                    alt="">
            </div>
        </div> <!-- /.fancy-feature-thirtyFive -->
    </div>
@endsection
