@extends('user.general.layout')

@section('content')
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

    <!--
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            =============================================
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                Fitur
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            ==============================================                                                                                                                                                                                                                                                                                                                                                                                                                                                                         -->
    <div class="fancy-feature-four mt-20" id="fitur">
        <div class="bg-wrapper">
            <img src="../storage/public/assets/template_user/images/shape/18.svg" alt="" class="shapes shape-right">
            <img src="../storage/public/assets/template_user/images/shape/19.svg" alt="" class="shapes shape-left">
            <div class="container">
                <div class="title-style-two text-center mb-100 md-mb-50">
                    <div class="row">
                        <div class="col-xl-8 col-lg-9 col-md-10 m-auto">
                            <p>{{ $fitur->fitur_title }}</p>
                            <h2>{{ $fitur->fitur_subtitle }}<span><img
                                        src="../storage/public/assets/template_user/images/shape/line-shape-2.svg"
                                        alt=""></span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="inner-content">
                    <img src="../storage/public/assets/template_user/images/shape/20.svg" alt=""
                        class="shapes shape-one">
                    <img src="../storage/public/assets/template_user/images/shape/21.svg" alt=""
                        class="shapes shape-two">
                    <div class="row justify-content-center d-lg-flex d-none">
                        {{-- loop 3x 3 data teratas --}}
                        @foreach ($dataFiturMenu as $item)
                            <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-duration="1200">
                                <div class="block-style-five">
                                    <div class="icon"><img
                                            src="{{ asset('/storage/public/' . $item->fitur_menu_image) }}"
                                            class="m-auto" alt="">
                                    </div>
                                    <h6 class="title w-100 text-center"><span
                                            class="h6">{{ $item->fitur_menu_title }}</span>
                                    </h6>
                                    <p class="text-justify">
                                        <span class="h6">{{ $item->fitur_menu_description }}</span>
                                    </p>
                                </div> <!-- /.block-style-five -->
                            </div>
                        @endforeach
                    </div>


                    <!--Mobile-->
                    <div class="row justify-content-center d-lg-none d-flex">
                        <section class="fitur-terbaru">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6 ms-auto">
                                        <div class="feedback-meta">
                                            <div class="clientSliderTerbaru">
                                                {{-- mobile loop all data --}}
                                                @foreach ($dataFiturMenu as $item)
                                                    <div class="item">
                                                        <div class="block-style-five text-center">
                                                            <div class="icon d-flex justify-content-center"><img
                                                                    src="{{ asset('/storage/public/' . $item->fitur_menu_image) }}"
                                                                    alt="">
                                                            </div>
                                                            <h6 class="title">
                                                                <span>{{ $item->fitur_menu_title }}</span>
                                                            </h6>
                                                            <p>{{ $item->fitur_menu_description }}</p>
                                                        </div>
                                                    </div>
                                                @endforeach
                                                {{-- @for ($i = 0; $i < 6; $i++)
                                                    <div class="item">
                                                        <div class="block-style-five text-center">
                                                            <div class="icon d-flex justify-content-center"><img
                                                                    src="../storage/public/assets/template_user/images/icon/20.svg"
                                                                    alt="">
                                                            </div>
                                                            <h6 class="title"><span>Update Stok Barang Otomatis</span>
                                                            </h6>
                                                            <p>Menambah stok barang ketika terjadi pembelian serta
                                                                mengurangi stok barang
                                                                ketika
                                                                terjadi penjualan..</p>
                                                        </div>
                                                    </div>
                                                @endfor --}}


                                            </div>
                                            <ul class="d-flex slider-arrow mt-20">
                                                <li class="prev_clientterbaru position-absolute prev-arrow-fitur">
                                                    <i class="flaticon-right-arrow"></i>
                                                </li>
                                                <li class="next_clientterbaru position-absolute next-arrow-fitur">
                                                    <i class="flaticon-right-arrow"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- /.fancy-feature-four -->

    <div class="fancy-feature-eight pt-150 md-pt-100">
        <div class="container">
            <div class="title-style-four text-center mb-60 md-mb-40">
                <div class="row">
                    <div class="col-lg-10 m-auto">
                        <h6>{{ $workprocces->title }}</h6>
                        <h2>{{ $workprocces->sub_title }}</h2>
                        <div class="d-flex justify-content-center">
                            <img src="../storage/public/assets/template_user/images/shape/line-shape-2.svg" alt=""
                                class="text-center">
                        </div>
                    </div>
                </div>
            </div>

            <div class="block-style-twelve">
                <div class="row">
                    <div class="col-lg-6 col-md-8 ml-auto order-lg-last aos-init aos-animate" data-aos="fade-left"
                        data-aos-duration="1200">
                        <div class="illustration-holder">
                            <img src="{{ asset('/storage/public/' . $workprocces->image) }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-5 order-lg-first aos-init aos-animate" data-aos="fade-right"
                        data-aos-duration="1200">
                        <div class="text-wrapper text-lg-start text-center">
                            <h6>{{ $workprocces->title_description }}</h6>
                            <h2 class="font-rubik title">{{ $workprocces->description }}</h2>
                            <div class="d-flex flex-column">
                                <div class="mb-3">
                                    <p class="fs-6"><i
                                            class="fa fa-check me-2 fs-6 bg-hijau-centang text-white style-3fitur"></i>{{ $workprocces->list1 }}
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <p class="fs-6"><i
                                            class="fa fa-check me-2 fs-6 bg-hijau-centang text-white style-3fitur"></i>{{ $workprocces->list2 }}
                                    </p>
                                </div>
                                <div class="mb-40">
                                    <p class="fs-6"><i
                                            class="fa fa-check me-2 fs-6 bg-hijau-centang text-white style-3fitur"></i>{{ $workprocces->list3 }}
                                    </p>
                                </div>
                            </div>
                        </div> <!-- /.text-wrapper -->
                    </div>
                </div>
            </div> <!-- /.block-style-twelve -->

            <div class="block-style-twelve">
                <div class="row">
                    <div class="col-lg-6 col-md-8 mr-auto aos-init" data-aos="fade-right" data-aos-duration="1200">
                        <div class="illustration-holder">
                            <img src="{{ asset('/storage/public/' . $workprocces->image) }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-5 aos-init" data-aos="fade-left" data-aos-duration="1200">
                        <div class="text-wrapper text-lg-start text-center">
                            <h6>{{ $workprocces_2->title }}</h6>
                            <h2 class="font-rubik title">{{ $workprocces_2->description }}</h2>
                            <div class="d-flex flex-column">
                                <div class="mb-3">
                                    <p class="fs-6"><i
                                            class="fa fa-check me-2 fs-6 bg-hijau-centang text-white style-3fitur"></i>{{ $workprocces_2->list1 }}
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <p class="fs-6"><i
                                            class="fa fa-check me-2 fs-6 bg-hijau-centang text-white style-3fitur"></i>{{ $workprocces_2->list2 }}
                                    </p>
                                </div>
                                <div class="mb-40">
                                    <p class="fs-6"><i
                                            class="fa fa-check me-2 fs-6 bg-hijau-centang text-white style-3fitur"></i>{{ $workprocces_2->list3 }}
                                    </p>
                                </div>
                            </div>
                        </div> <!-- /.text-wrapper -->
                    </div>
                </div>
            </div> <!-- /.block-style-twelve -->

            <div class="block-style-twelve">
                <div class="row">
                    <div class="col-lg-6 col-md-8 ml-auto order-lg-last aos-init" data-aos="fade-left"
                        data-aos-duration="1200">
                        <div class="illustration-holder">
                            <img src="{{ asset('/storage/public/' . $combine->image) }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-5 order-lg-first aos-init" data-aos="fade-right" data-aos-duration="1200">
                        <div class="text-wrapper text-lg-start text-center">
                            <h6>{{ $combine->title }}</h6>
                            <h2 class="font-rubik title">{{ $combine->description }}
                            </h2>
                            <div class="d-flex flex-column align-items-center align-items-lg-start">
                                <div class="mb-3">
                                    <p class="fs-6"><i
                                            class="fa fa-check me-2 fs-6 bg-hijau-centang text-white style-3fitur"></i>{{ $combine->list1 }}
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <p class="fs-6"><i
                                            class="fa fa-check me-2 fs-6 bg-hijau-centang text-white style-3fitur"></i>{{ $combine->list2 }}
                                    </p>
                                </div>
                                <div class="mb-40">
                                    <p class="fs-6"><i
                                            class="fa fa-check me-2 fs-6 bg-hijau-centang text-white style-3fitur"></i>{{ $combine->list3 }}
                                    </p>
                                </div>
                                <a href="{{ $combine->contact }}" target="blank"
                                    class="btn btn-bg-yellowdeep w-50 btn-lg  border-radius-25px fs-12px d-flex justify-content-center align-items-center"
                                    data-aos="fade-up" data-aos-duration="1200" data-aos-delay="100"><i
                                        class="fa fa-whatsapp fs-5 me-2"></i>Hubungi Kami</a>
                            </div>
                        </div> <!-- /.text-wrapper -->
                    </div>
                </div>
            </div> <!-- /.block-style-twelve -->
        </div>
    </div>

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



    <!-- Testimoni -->
    <div id="testimoni">
        <div class="client-feedback-slider-one d-md-block d-none">
            <div class="shapes-holder">
                <img src="../storage/public/assets/template_user/images/shape/39.svg" alt="">
                <img src="../storage/public/assets/template_user/images/shape/42.svg" alt=""
                    class="shapes shape-one">
                <img src="../storage/public/assets/template_user/images/media/img_21.png" alt=""
                    class="cp-img-one">
                <img src="../storage/public/assets/template_user/images/media/img_22.png" alt=""
                    class="cp-img-two">
                <img src="../storage/public/assets/template_user/images/media/img_23.png" alt=""
                    class="cp-img-three">
                <img src="../storage/public/assets/template_user/images/media/img_24.png" alt=""
                    class="cp-img-four">
                <div class="title-style-two">
                    <h2>Apa <br>Pendapat <br>Mereka?</h2>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-lg-6 ms-auto">
                        <div class="feedback-meta">
                            <div class="watermark font-gilroy-bold">Testimoni</div>
                            <img src="../storage/public/assets/template_user/images/icon/30.svg" alt=""
                                class="icon">
                            <div class="clientSliderOne">
                                <div class="item">
                                    <p class="font-rubik">Aplikasi ini bagus dan sangat membantu saya dalam
                                        mengurus
                                        kegiatan operasional ATK.</p>
                                    <div class="d-lg-flex align-items-center">
                                        <img src="../storage/public/assets/template_user/images/media/img_20.png"
                                            alt="" class="c_img">
                                        <div class="info">
                                            <strong>Pramanta Dharma</strong> <span>Pemilik ATK Nadura</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <p class="font-rubik">Sangat merekomendasi aplikasi yang berbasis website satu
                                        ini.
                                        Selain adanya fitur dan paket yang bisa dipilih, aplikasi ini juga berjalan
                                        dengan lancar dan tanpa kendala.</p>
                                    <div class="d-lg-flex align-items-center">
                                        <img src="../storage/public/assets/template_user/images/media/img_20.png"
                                            alt="" class="c_img">
                                        <div class="info">
                                            <strong>Prama</strong> <span>Pemilik ATK Nadhu Mart</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="d-flex slider-arrow mt-20">
                                <li class="prev_c"><i class="flaticon-right-arrow"></i></li>
                                <li class="next_c"><i class="flaticon-right-arrow"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimoni Mobile -->
    <div class="client-feedback-slider-one d-md-none d-block">
        <div class="shapes-holder">
            <img src="../storage/public/assets/template_user/images/shape/39.svg" alt="">
            <img src="../storage/public/assets/template_user/images/shape/42.svg" alt=""
                class="shapes shape-one">
            <img src="../storage/public/assets/template_user/images/media/img_21.png" alt="" class="cp-img-one">
            <img src="../storage/public/assets/template_user/images/media/img_22.png" alt="" class="cp-img-two">
            <img src="../storage/public/assets/template_user/images/media/img_23.png" alt=""
                class="cp-img-three">
            <img src="../storage/public/assets/template_user/images/media/img_24.png" alt="" class="cp-img-four">
            <div class="title-style-two">
                <h2>Apa <br>Pendapat <br>Mereka?</h2>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-6 ms-auto">
                    <div class="feedback-meta">
                        <div class="watermark font-gilroy-bold">Testimoni</div>
                        <img src="../storage/public/assets/template_user/images/icon/30.svg" alt=""
                            class="icon">
                        <div class="clientSliderMobile">
                            <div class="item">
                                <p class="font-rubik">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                    Porro temporibus laborum aliquid? Assumenda mollitia, debitis est totam beatae
                                    laudantium nesciunt?</p>
                                <div class="d-lg-flex align-items-center">
                                    <img src="../storage/public/assets/template_user/images/media/img_20.png"
                                        alt="" class="c_img">
                                    <div class="info">
                                        <strong>Pramanta Dharma</strong> <span>Pemilik ATK Nadura</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <p class="font-rubik">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                    Porro temporibus laborum aliquid? Assumenda mollitia, debitis est totam beatae
                                    laudantium nesciunt?</p>
                                <div class="d-lg-flex align-items-center">
                                    <img src="../storage/public/assets/template_user/images/media/img_20.png"
                                        alt="" class="c_img">
                                    <div class="info">
                                        <strong>Prama</strong> <span>Pemilik ATK Nadhu Mart</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <p class="font-rubik">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                    Porro temporibus laborum aliquid? Assumenda mollitia, debitis est totam beatae
                                    laudantium nesciunt?</p>
                                <div class="d-lg-flex align-items-center">
                                    <img src="../storage/public/assets/template_user/images/media/img_20.png"
                                        alt="" class="c_img">
                                    <div class="info">
                                        <strong>Pramanta Dharma</strong> <span>Pemilik ATK Nadura</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <p class="font-rubik">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                    Porro temporibus laborum aliquid? Assumenda mollitia, debitis est totam beatae
                                    laudantium nesciunt?</p>
                                <div class="d-lg-flex align-items-center">
                                    <img src="../storage/public/assets/template_user/images/media/img_20.png"
                                        alt="" class="c_img">
                                    <div class="info">
                                        <strong>Prama</strong> <span>Pemilik ATK Nadhu Mart</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="d-flex slider-arrow mt-20">
                            <li class="prev_clientmobile position-absolute"><i class="flaticon-right-arrow"></i>
                            </li>
                            <li class="next_clientmobile position-absolute"><i class="flaticon-right-arrow"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Harga Desktop -->
    <div id="harga">
        <div class="pricing-section-seven pt-160 pb-200 d-none d-md-block">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-lg-10 col-md-10 m-auto">
                        <div class="title-style-twelve text-center pb-120 md-pb-60">
                            <h2 class="font-gordita"><span>{{ $price->harga_title }}<img
                                        src="../storage/public/assets/template_user/images/shape/line-shape-1.svg"
                                        alt="" class=""></span>
                            </h2>
                            <p class="mt-40 md-mt-20">{{ $price->harga_description }}
                            </p>
                        </div>
                    </div>
                </div>

                <div class="pricing-table-area-seven">
                    <div class="row align-items-center justify-content-center">
                        @foreach ($listprice as $item)
                            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200">
                                <div class="pr-table-wrapper md-mb-40">
                                    <img src="{{ asset('/storage/public/' . $item->listprice_image) }}" alt=""
                                        class="border-0 w-40px style-icon-pricing">
                                    <div class="pack-name text-center">{{ $item->listprice_title }}</div>
                                    <ul class="pr-feature d-flex justify-content-center flex-column">
                                        {{-- {{ if ($service1_active == true) {
                                            <div class="pudar">
                                                <li>{{ $item->service1 }}</li>
                                            </div>
                                        } else {
                                            <li>{{ $item->service1 }}</li>
                                        }
                                         }}
                                        <li>{{ $item->service1 }}</li>
                                        <li>{{ $item->service2 }}</li>
                                        <li>{{ $item->service3 }}</li>
                                        <div class="pudar">
                                            <li>{{ $item->service4 }}</li>
                                            <li>{{ $item->service5 }}</li>
                                            <li>{{ $item->service6 }}</li>
                                            <li>{{ $item->service7 }}</li>
                                        </div> --}}
                                        @if (!$item->service1_active == true)
                                            <div class="pudar">
                                                <li>{{ $item->service1 }}</li>
                                            </div>
                                        @else
                                            <li>{{ $item->service1 }}</li>
                                        @endif

                                        @if (!$item->service2_active == true)
                                            <div class="pudar">
                                                <li>{{ $item->service2 }}</li>
                                            </div>
                                        @else
                                            <li>{{ $item->service2 }}</li>
                                        @endif

                                        @if (!$item->service3_active == true)
                                            <div class="pudar">
                                                <li>{{ $item->service3 }}</li>
                                            </div>
                                        @else
                                            <li>{{ $item->service3 }}</li>
                                        @endif

                                        @if (!$item->service4_active == true)
                                            <div class="pudar">
                                                <li>{{ $item->service4 }}</li>
                                            </div>
                                        @else
                                            <li>{{ $item->service4 }}</li>
                                        @endif

                                        @if (!$item->service5_active == true)
                                            <div class="pudar">
                                                <li>{{ $item->service5 }}</li>
                                            </div>
                                        @else
                                            <li>{{ $item->service5 }}</li>
                                        @endif

                                        @if (!$item->service6_active == true)
                                            <div class="pudar">
                                                <li>{{ $item->service6 }}</li>
                                            </div>
                                        @else
                                            <li>{{ $item->service6 }}</li>
                                        @endif

                                        @if (!$item->service7_active == true)
                                            <div class="pudar">
                                                <li>{{ $item->service7 }}</li>
                                            </div>
                                        @else
                                            <li>{{ $item->service7 }}</li>
                                        @endif

                                    </ul>
                                    <div class="price text-center">{{ $item->price }}/</div>
                                    <div class="trial-text text-center">{{ $item->listprice_description }}</div>
                                    <div class="d-flex justify-content-center">
                                        <a href="{{ $item->button_url }}"
                                            class="trial-button border-radius-25px text-center"><i
                                                class="fa fa-whatsapp fs-5 me-2"></i>{{ $item->button_teks }}</a>
                                        <!-- Tambahkan kelas text-center di sini -->
                                    </div>
                                </div> <!-- /.pr-table-wrapper -->
                            </div>
                        @endforeach
                    </div>
                </div> <!-- /.pricing-table-area-seven -->

            </div>

        </div> <!-- /.pricing-section-seven -->

        <!--Harga Mobile-->
        <div
            class="main-page-wrapper font-gordita fancy-feature-thirtyFive position-relative lg-container d-block d-md-none bg-pricing-terbaru py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="block-style-thirtySix">
                            <div class="title-style-fourteen text-md-start text-center">
                                <div class="upper-title">Harga</div>
                                <h2>Dapatkan Harga Terbaik<img
                                        src="../storage/public/assets/template_user/images/shape/line-shape-13.svg"
                                        alt=""></h2>
                            </div>
                            <div class="tag-line text-md-start text-center">Dapatkan fitur yang menarik dan sesuai
                                dengan kebutuhan Anda.</div>
                            <ul
                                class="slider-arrows d-flex justify-content-center justify-content-lg-end pt-0 md-pt-10 md-pb-30">
                                <li class="prev_case_harga position-absolute ripple-btn slick-arrow" style=""><i
                                        class="flaticon-right-arrow"></i></li>
                                <li class="next_case_harga position-absolute ripple-btn slick-arrow" style=""><i
                                        class="flaticon-right-arrow"></i></li>
                            </ul>
                        </div> <!-- /.block-style-thirtySix -->
                    </div>
                </div>
            </div>
            <div class="slider-wrapper">
                <div class="portfolio_slider_harga">
                    <div class="item pricing-section-seven">
                        <div class="pricing-table-area-seven">
                            <div class="row">
                                <div class="card-block">
                                    <div class="pr-table-wrapper">
                                        <img src="../storage/public/assets/template_user/images/icon/paper-plane.png"
                                            alt="" class="border-0 w-40px style-icon-pricing">
                                        <div class="pack-name text-center">Paket Terjangkau</div>
                                        <ul class="pr-feature d-flex justify-content-center flex-column">
                                            <li>Pemantauan Real Time</li>
                                            <li>Penyesuaian stok</li>
                                            <li>Notifikasi Stok Kosong</li>
                                            <div class="pudar">
                                                <li>Harga jual rata-rata</li>
                                                <li>Data Barang terlaris</li>
                                                <li>Pergerakan Barang</li>
                                                <li>Unlimited Barang</li>
                                            </div>
                                        </ul>
                                        <div class="price text-center">Rp. 2.500.00,00/<span>Bulan</span></div>
                                        <div class="trial-text text-center">menyediakan sampai 20.000++ kapasitas
                                            barang.</div>
                                        <div class="d-flex align-items-center justify-content-center">
                                            <a href="#" class="trial-button border-radius-25px"><i
                                                    class="fa fa-whatsapp fs-5 me-2"></i>Pilih Paket</a>
                                        </div>
                                    </div> <!-- /.pr-table-wrapper -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item pricing-section-seven">
                        <div class="card-block">
                            <div class="pricing-table-area-seven">
                                <div class="row">
                                    <div class="card-block">
                                        <div class="pr-table-wrapper most-popular">
                                            <img src="../storage/public/assets/template_user/images/icon/plane.png"
                                                alt="" class="border-0 w-40px style-icon-pricing">
                                            <div class="pack-name text-center">Paket Terbaik</div>
                                            <ul class="pr-feature d-flex justify-content-center flex-column">
                                                <li>Pemantauan Real Time</li>
                                                <li>Penyesuaian stok</li>
                                                <li>Notifikasi Stok Kosong</li>
                                                <li>Harga jual rata-rata</li>
                                                <li>Data Barang terlaris</li>
                                                <div class="pudar">
                                                    <li>Pergerakan Barang</li>
                                                    <li>Unlimited Barang</li>
                                                </div>
                                            </ul>
                                            <div class="price text-center">Rp. 9.500.00,00/<span>Bulan</span></div>
                                            <div class="trial-text text-center">menyediakan sampai 100.000++
                                                kapasitas barang.
                                            </div>
                                            <div class="d-flex align-items-center justify-content-center">
                                                <a href="#" class="trial-button border-radius-25px"><i
                                                        class="fa fa-whatsapp fs-5 me-2"></i>Pilih Paket</a>
                                            </div>
                                        </div> <!-- /.pr-table-wrapper -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item pricing-section-seven">
                        <div class="card-block">
                            <div class="pricing-table-area-seven">
                                <div class="row">
                                    <div class="card-block">
                                        <div class="pr-table-wrapper active">
                                            <img src="../storage/public/assets/template_user/images/icon/space-ship.png"
                                                alt="" class="border-0 w-40px style-icon-pricing">
                                            <div class="pack-name text-center">Paket Terlengkap</div>
                                            <ul class="pr-feature d-flex justify-content-center flex-column">
                                                <li>Pemantauan Real Time</li>
                                                <li>Penyesuaian stok</li>
                                                <li>Notifikasi Stok Kosong</li>
                                                <li>Harga jual rata-rata</li>
                                                <li>Data Barang terlaris</li>
                                                <li>Pergerakan Barang</li>
                                                <li>Unlimited Barang</li>
                                            </ul>
                                            <div class="price text-center">Rp. 15.00.00,00/<span>Bulan</span></div>
                                            <div class="trial-text text-center">menyediakan sampai 500.000++
                                                kapasitas barang.
                                            </div>
                                            <div class="d-flex align-items-center justify-content-center">
                                                <a href="#" class="trial-button border-radius-25px"><i
                                                        class="fa fa-whatsapp fs-5 me-2"></i>Pilih Paket</a>
                                            </div>
                                            <div class="diskon-mobile">
                                                <span>
                                                </span>
                                            </div>

                                        </div> <!-- /.pr-table-wrapper -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- /.portfolio_slider_two -->
            </div> <!-- /.slider-wrapper -->


        </div> <!-- /.fancy-feature-thirtyFive -->
    </div>

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


    <!-- Blog -->
    <div class="feature-blog-one pt-170 pb-120 md-pt-100 md-pb-60" id="blog">
        <div class="container">
            <div class="header d-md-flex align-items-center justify-content-between mb-90 md-mb-40">
                <div class="title-style-one text-md-start text-center">
                    <h6 class="font-rubik">Artikel Kami</h6>
                    <h2>Ketahui Kegiatan Terkini Kami.</h2>
                </div> <!-- /.title-style-one -->
                <div class="d-flex justify-content-center align-items-center">
                    <a href="blogs.html" class="btn btn-bg-yellowdeep sm-mt-30 border-radius-25px">Go to
                        Blog</a>
                </div>
            </div>

            <div class="row justify-content-center d-md-flex d-none">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200">
                    <div class="post-meta">
                        <img src="../storage/public/assets/template_user/images/blog/media_01.png" alt=""
                            class="image-meta">
                        <div class="tag justify-content-between d-flex">
                            <span class="d-flex gap-2">
                                <img src="../storage/public/assets/template_user/images/media/img_24.png"
                                    class="rounded-circle" width="30" height="30" alt="">
                                <span>Technology</span>
                            </span>
                            <span>24 April 2022</span>
                            <!-- <div class="tag">Technology, 24 Apr. 2022</div> -->
                        </div>
                        <h3><a href="blog.html" class="title">A Discount Cartridge Is Better Ever.</a></h3>
                        <a href="blog.html" class="read-more d-flex align-items-center">
                            <span class="me-2">Read More</span>
                            <i class="flaticon-right-arrow"></i>
                        </a>
                    </div> <!-- /.post-meta -->
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="100">
                    <div class="post-meta">
                        <img src="../storage/public/assets/template_user/images/blog/media_02.png" alt=""
                            class="image-meta">
                        <div class="tag justify-content-between d-flex">
                            <span class="d-flex gap-2">
                                <img src="../storage/public/assets/template_user/images/media/img_24.png"
                                    class="rounded-circle" width="30" height="30" alt="">
                                <span>Technology</span>
                            </span>
                            <span>24 April 2022</span>
                            <!-- <div class="tag">Technology, 24 Apr. 2022</div> -->
                        </div>
                        <h3><a href="blog.html" class="title">Quis Nostr Exercitation Ullamco Laboris nisi ut
                                Aliquip
                                exea.</a></h3>
                        <a href="blog.html" class="read-more d-flex align-items-center">
                            <span class="me-2">Read More</span>
                            <i class="flaticon-right-arrow"></i>
                        </a>
                    </div> <!-- /.post-meta -->
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                    <div class="post-meta">
                        <img src="../storage/public/assets/template_user/images/blog/media_03.png" alt=""
                            class="image-meta">
                        <div class="tag justify-content-between d-flex">
                            <span class="d-flex gap-2">
                                <img src="../storage/public/assets/template_user/images/media/img_24.png"
                                    class="rounded-circle" width="30" height="30" alt="">
                                <span>Technology</span>
                            </span>
                            <span>24 April 2022</span>
                            <!-- <div class="tag">Technology, 24 Apr. 2022</div> -->
                        </div>
                        <h3>
                            <a href="blog.html" class="title">Excepteur sint occaat cupidatat proidet nisi sunt
                                in culpa
                                ,</a>
                        </h3>
                        <a href="blog.html" class="read-more d-flex align-items-center">
                            <span class="me-2">Read More</span>
                            <i class="flaticon-right-arrow"></i>
                        </a>
                    </div> <!-- /.post-meta -->
                </div>
            </div>
        </div>
    </div>

    <section class="blog-versi-mobile d-md-none d-flex">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 ms-auto">
                    <div class="feedback-meta">
                        <div class="blog-slider-terbaru">
                            <div class="item">
                                <div class="feature-blog-one">
                                    <div class="feature-blog-one post-meta">
                                        <img src="../storage/public/assets/template_user/images/blog/media_01.png"
                                            alt="" class="feature-blog-one image-meta">
                                        <div class="tag justify-content-between d-flex">
                                            <span class="d-flex gap-2 justify-content-center align-items-center">
                                                <img src="../storage/public/assets/template_user/images/media/img_24.png"
                                                    class="rounded-circle" width="30" height="50" alt="">
                                                <span>Technology</span>
                                            </span>
                                            <div class="d-flex justify-content-center align-items-center">
                                                <span>24 April 2022</span>
                                            </div>
                                            <!-- <div class="tag">Technology, 24 Apr. 2022</div> -->
                                        </div>
                                        <h3><a href="blog.html" class="title">A Discount
                                                Cartridge Is Better Ever.</a></h3>
                                        <a href="blog.html" class="read-more d-flex align-items-center">
                                            <span class="me-2">Read More</span>
                                            <i class="flaticon-right-arrow"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="feature-blog-one">
                                    <div class="feature-blog-one post-meta">
                                        <img src="../storage/public/assets/template_user/images/blog/media_03.png"
                                            alt="" class="feature-blog-one image-meta">
                                        <div class="tag justify-content-between d-flex">
                                            <span class="d-flex gap-2 justify-content-center align-items-center">
                                                <img src="../storage/public/assets/template_user/images/media/img_24.png"
                                                    class="rounded-circle" width="30" height="50" alt="">
                                                <span>Technology</span>
                                            </span>
                                            <div class="d-flex justify-content-center align-items-center">
                                                <span>24 April 2022</span>
                                            </div>
                                            <!-- <div class="tag">Technology, 24 Apr. 2022</div> -->
                                        </div>
                                        <h3><a href="blog.html" class="title">Excepteur sint occaat cupidatat
                                                proidet
                                                nisi sunt in culpa ,</a></h3>
                                        <a href="blog.html" class="read-more d-flex align-items-center">
                                            <span class="me-2">Read More</span>
                                            <i class="flaticon-right-arrow"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="feature-blog-one">
                                    <div class="feature-blog-one post-meta">
                                        <img src="../storage/public/assets/template_user/images/blog/media_02.png"
                                            alt="" class="feature-blog-one image-meta">
                                        <div class="tag justify-content-between d-flex">
                                            <span class="d-flex gap-2 justify-content-center align-items-center">
                                                <img src="../storage/public/assets/template_user/images/media/img_24.png"
                                                    class="rounded-circle" width="30" height="50"
                                                    alt="">
                                                <span>Technology</span>
                                            </span>
                                            <div class="d-flex justify-content-center align-items-center">
                                                <span>24 April 2022</span>
                                            </div>
                                            <!-- <div class="tag">Technology, 24 Apr. 2022</div> -->
                                        </div>
                                        <h3><a href="blog.html" class="title">Quis Nostr Exercitation Ullamco
                                                Laboris
                                                nisi ut Aliquip exea.</a></h3>
                                        <a href="blog.html" class="read-more d-flex align-items-center">
                                            <span class="me-2">Read More</span>
                                            <i class="flaticon-right-arrow"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="d-flex slider-arrow mt-20 position-relative">
                            <li class="prev_blog_terbaru position-absolute prev-arrow-fitur"><i
                                    class="flaticon-right-arrow"></i>
                            </li>
                            <li class="next_blog_terbaru position-absolute next-arrow-fitur"><i
                                    class="flaticon-right-arrow"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


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
        <img src="../storage/public/assets/template_user/images/shape/212.svg" alt=""
            class="shapes shape-one">
        <img src="../storage/public/assets/template_user/images/shape/213.svg" alt=""
            class="shapes shape-two">
    </div>
@endsection
