@extends('user.general.layout')

@section('content')
    {{-- Halaman Breanda --}}
    <div class="hero-banner-two" id="beranda">
        <div class="container">
            <div class="row align-items-start justify-content-between">
                <div class="col-lg-6 order-lg-last d-flex order-2 justify-content-center justify-content-lg-start">
                    <div class="illustration-holder">
                        <img src="{{ asset('/storage/public/' . $data->home_image) }}" alt="" class="illustration_01">
                        <img src="../storage/public/assets/template_user/images/ATK/beranda/cloud.svg" alt=""
                            class="shapes shape-one">
                    </div>
                </div>

                <div class="font-gordita col-xl-5 col-lg-6 order-lg-first d-flex order-1">
                    <div class="hero-text-wrapper md-mt-50 text-lg-start text-center">
                        <h1>
                            <span>
                                {{ $data->home_title }}
                                <img src="../storage/public/assets/template_user/images/shape/line-shape-1.svg"
                                    alt="" class="cs-screen">
                            </span>
                            <p class="mt-4">
                                {{ $data->home_subtitle }}
                            </p>
                        </h1>
                        <p class="sub-text fs-20px">{{ $data->home_description }}</p>

                        <div class="d-flex justify-content-lg-start justify-content-evenly align-items-center">
                            <a href="https://api.whatsapp.com/send/?phone=6281934364063&text&type=phone_number&app_absent=0"
                                target="_blank
                                        ">
                                <div
                                    class="btn btn-bg-yellowdeep border-radius-25px d-flex justify-content-center align-items-center">
                                    <i class="fa fa-whatsapp fs-4"></i>
                                    <span class="ms-1 font-btn-hubungikami"> {{ $data->home_contactme }} </span>
                                </div>
                            </a>
                            <div class="ms-3 d-flex justify-content-end justify-content-lg-center">
                                <a href="{{ $data->home_video }}" autoplay data-lity=""
                                    class="play-btn d-flex align-items-center justify-content-center">
                                    <span class="icon me-2 for-video">
                                        <i class="fa fa-play"></i>
                                    </span>
                                    <p class="small warna-yellowdeep-hover">Video <br> Pengenalan</p>
                                </a>
                            </div>
                        </div>

                        <div
                            class="list-item d-flex row mt-20 justify-content-around justify-content-lg-start text-start text-md-center flex-row text-lg-start">
                            <div class="col-3 d-flex justify-content-center align-items-center">
                                <i
                                    class="fa fa-check fs-6 bg-hijau-centang text-white style-3fitur icon-checklist-bg me-1"></i>
                                <p class="font-14px">{{ $data->home_advantage_1 }}</p>
                            </div>
                            <div class="col-3 d-flex justify-content-center align-items-center ms-2">
                                <i
                                    class="fa fa-check fs-6 bg-hijau-centang text-white style-3fitur icon-checklist-bg me-1"></i>
                                <p class="font-14px">{{ $data->home_advantage_2 }}</p>
                            </div>
                            <div class="col-3 d-flex justify-content-center align-items-center">
                                <i
                                    class="fa fa-check fs-6 bg-hijau-centang text-white style-3fitur icon-checklist-bg me-1"></i>
                                <p class="font-14px">{{ $data->home_advantage_3 }}</p>
                            </div>
                        </div>
                    </div> <!-- /.hero-text-wrapper -->
                </div>
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div>

    <div class="useable-tools-section-three" style="margin: 100px 0 0 0;">
        <div class="container">
            <div class="row">
                <div class="title-style-four text-center">
                    <h2>
                        <span> {{ $homeSlider->hms_title }}<img
                                src="../storage/public/assets/template_user/images/shape/line-shape-10.svg"
                                alt=""></span>
                    </h2>
                </div>
                <p class="sub-text text-center"> {{ $homeSlider->hms_description }}</p>
            </div>
            <div class="row mt-4">
                <div class="col-12">
                    <div class="companies-logo-slider">
                        @foreach ($homeSliderImage as $item)
                            @if ($item->hms_active_status === 'yes')
                                <div class="item-logo d-flex justify-content-center align-items-center">
                                    <img src="{{ asset('/storage/public/' . $item->image) }}" alt="">
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <ul class="slider-arrows position-relative">
                        <li class="prev-logo ripple-btn slick-arrow position-absolute prev-arrow-logo"><i
                                class="flaticon-right-arrow"></i></li>
                        <li class="next-logo ripple-btn slick-arrow position-absolute next-arrow-logo"><i
                                class="flaticon-right-arrow"></i></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>

    <div class="counter-with-icon-one py-5 my-5">

        <div class="container">
            <div class="row justify-content-center">
                @foreach ($container as $container)
                    <div class="col-lg-3 col-6 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1200">
                        <div class="counter-box-three">
                            <div class="icon"><img src="{{ asset('/storage/public/' . $container->logo) }}"
                                    alt=""></div>
                            <h2 class="number">
                                <span data-to="{{ $container->container_title }}" data-speed="1500"
                                    data-refresh-interval="6">{{ $container->container_title }}</span>
                                <p class="font-rubik">{{ $container->container_description }}</p>
                            </h2>
                        </div> <!-- /.counter-box-three -->
                    </div>
                @endforeach
            </div>
        </div>

    </div>

    {{-- Halaman Fitur --}}

    <div class="useable-tools-section-three mt-150px d-md-block d-none">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-md-start text-center">
                    <div class="title-style-four text-lg-start text-center">
                        <h2>
                            <span>Who is using ours <img
                                    src="../storage/public/assets/template_user/images/shape/line-shape-10.svg"
                                    alt=""></span>
                            deski docs?
                        </h2>
                    </div>
                    <p class="sub-text text-lg-start text-center">Deski ties into your existing tools, services,
                        &amp; workflow. Get
                        notifications or create story with others tools.</p>
                    <div
                        class="w-100 d-flex justify-content-center align-items-center justify-content-lg-start align-items-lg-start">
                        <a href="index-doc.html#" class="all-button">See all partners <i
                                class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
            </div>
        </div> <!-- /.container -->
        <div class="logo-wrapper d-flex flex-wrap justify-content-center align-items-center">
            <div class="logo d-flex align-items-center justify-content-center"><img
                    src="../storage/public/assets/template_user/images/logo/rsia-frisdhy-angel.png" alt=""></div>
            <div class="logo d-flex align-items-center justify-content-center"><img
                    src="../storage/public/assets/template_user/images/logo/rumah-sakit-umum-daerah-Dr-mohamad-soewandhie-halaman-klien.png"
                    alt=""></div>
            <div class="logo d-flex align-items-center justify-content-center"><img
                    src="../storage/public/assets/template_user/images/logo/sumia-aesthetic-clinic.png" alt="">
            </div>
            <div class="logo d-flex align-items-center justify-content-center"><img
                    src="../storage/public/assets/template_user/images/logo/logo-circle-dental-halaman-klien.png"
                    alt=""></div>
            <div class="logo d-flex align-items-center justify-content-center"><img
                    src="../storage/public/assets/template_user/images/logo/klinik-krakatau.png" alt="">
            </div>
            <div class="logo d-flex align-items-center justify-content-center"><img
                    src="../storage/public/assets/template_user/images/logo/cedine-mechala-halaman-klien.png"
                    alt=""></div>
        </div> <!-- /.logo-wrapper -->
    </div>

    <!-- logo mobile -->
    <div class="useable-tools-section-three mt-100 d-md-none d-block mb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-md-start text-center">
                    <div class="title-style-four text-md-start text-center">
                        <h2>
                            <span>Who ooo is using ours <img
                                    src="../storage/public/assets/template_user/images/shape/line-shape-10.svg"
                                    alt=""></span>
                            deski docs?
                        </h2>
                    </div>
                    <p class="sub-text text-md-start text-center">Deski ties into your existing tools,
                        services,
                        &amp; workflow. Get
                        notifications or create story with others tools.</p>
                    <a href="index-doc.html#" class="all-button">See all partners <i
                            class="flaticon-right-arrow"></i></a>
                </div>
            </div>
        </div> <!-- /.container -->
        <div class="companies-logo-slider-bubble mt-4">
            @foreach ($homeSlider as $item)
                <div class="logo-bubble d-flex align-items-center justify-content-center"><img
                        src="../storage/public/assets/template_user/images/logo/cedine-mechala-halaman-klien.png"
                        alt=""></div>
            @endforeach
        </div> <!-- /.logo-wrapper -->
        <ul class="slider-arrows position-relative">
            <li class="prev ripple-btn slick-arrow position-absolute prev-arrow-logo-bubble"><i
                    class="flaticon-right-arrow"></i></li>
            <li class="next ripple-btn slick-arrow position-absolute next-arrow-logo-bubble"><i
                    class="flaticon-right-arrow"></i></li>
        </ul>
    </div>



    {{-- Testimoni --}}


    <!-- Testimoni Mobile -->


    <!-- Harga Desktop -->


    {{-- Galleri --}}



    <!-- Blog -->



    <!-- Promo Akhir -->
    <div class="fancy-short-banner-eleven bg-color mt-70 mb-50 md-mb-20 md-mt-30">
        <div class="container">
            <div class="clearfix">
                <div class="row">
                    <div class="col-lg-8 m-auto">
                        <h2 class="font-gordita" data-aos="fade-up" data-aos-duration="1200">{{ $contacts->title }}
                        </h2>
                        <a href="{{ $contacts->button_url }}" target="blank"
                            class="btn btn-bg-yellowdeep btn-lg mt-50 md-mt-30 border-radius-25px" data-aos="fade-up"
                            data-aos-duration="1200" data-aos-delay="100"><i
                                class="fa fa-whatsapp fs-5 me-2"></i>{{ $contacts->button_teks }}</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="bubble-one"></div>
        <div class="bubble-two"></div>
        <div class="bubble-three"></div>
        <div class="bubble-four"></div>
        <img src="../storage/public/assets/template_user/images/shape/212.svg" alt="" class="shapes shape-one">
        <img src="../storage/public/assets/template_user/images/shape/213.svg" alt="" class="shapes shape-two">
    </div>
@endsection
