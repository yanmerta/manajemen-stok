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
                                    data-refresh-interval="5">{{ $container->container_title }}</span>
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
                                                                                                                                                            ==============================================
                                                                                                                                                            -->
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
                        <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-duration="1200">
                            <div class="block-style-five">
                                <div class="icon"><img src="../storage/public/assets/template_user/images/icon/20.svg"
                                        class="m-auto" alt="">
                                </div>
                                <h6 class="title w-100 text-center"><span>Update Stok Barang Otomatis</span></h6>
                                <p class="text-justify">Menambah stok barang ketika terjadi pembelian serta
                                    mengurangi stok barang ketika
                                    terjadi penjualan. Berisi juga peringatan stok kurang jika stok yang tersedia
                                    tersisa sedikit.</p>
                            </div> <!-- /.block-style-five -->
                        </div>
                        <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-duration="1200"
                            data-aos-delay="100">
                            <div class="block-style-five">
                                <div class="icon"><img src="../storage/public/assets/template_user/images/icon/21.svg"
                                        class="m-auto" alt="">
                                </div>
                                <h6 class="title w-100 text-center"><span>Penyesuaian Stok Barang</span></h6>
                                <p class="text-justify">Anda dapat mencatat pengurangan atau penambahan jumlah
                                    barang, begitupun
                                    perubahan nilai barang persediaan anda.</p>
                            </div> <!-- /.block-style-five -->
                        </div>
                        <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-duration="1200"
                            data-aos-delay="200">
                            <div class="block-style-five">
                                <div class="icon"><img src="../storage/public/assets/template_user/images/icon/22.svg"
                                        class="m-auto" alt="">
                                </div>
                                <h6 class="title w-100 text-center"><span>Retur Barang</span></h6>
                                <p class="text-justify">Mengetahui barang apa saja yang dikembalilkan dari pihak
                                    pembeli kepada anda yang
                                    disebab karena barang yang diterima tidak sesuai dengan yang diinginkan.</p>
                            </div> <!-- /.block-style-five -->
                        </div>
                    </div>
                    <div class="row justify-content-center d-lg-flex d-none">
                        <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-duration="1200">
                            <div class="block-style-five">
                                <div class="icon"><img src="../storage/public/assets/template_user/images/icon/20.svg"
                                        class="m-auto" alt="">
                                </div>
                                <h6 class="title w-100 text-center"><span>Kartu Stok</span></h6>
                                <p class="text-justify">Sekumpulan catatan pembukuan yang berisi rincian lengkap
                                    aktivitas transaksi yang
                                    terjadi. Atau dengan kata lain, berisi ringkasan perputaan stok dan sisa saldo
                                    yang anda miliki. misalkan transaksi pembelian, penjualan, pemesanan, hingga
                                    pengembalian.</p>
                            </div> <!-- /.block-style-five -->
                        </div>
                        <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-duration="1200"
                            data-aos-delay="100">
                            <div class="block-style-five">
                                <div class="icon"><img src="../storage/public/assets/template_user/images/icon/21.svg"
                                        class="m-auto" alt="">
                                </div>
                                <h6 class="title w-100 text-center"><span>Hutang Piutang</span></h6>
                                <p class="text-justify">Menghitung hutang piutang yang dimiliki usaha anda.
                                    Menjumlahkan dan mengurangi
                                    hutang piutang secara akurat.</p>
                            </div> <!-- /.block-style-five -->
                        </div>
                        <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-duration="1200"
                            data-aos-delay="200">
                            <div class="block-style-five">
                                <div class="icon"><img src="../storage/public/assets/template_user/images/icon/22.svg"
                                        class="m-auto" alt="">
                                </div>
                                <h6 class="title w-100 text-center"><span>Laporan Stok Barang</span></h6>
                                <p class="text-justify">Kemudahan dalam mengakses laporan barang secara mudah serta
                                    cepat. Berisi
                                    informasi terkait status barang sampai penjualan barang.</p>
                            </div> <!-- /.block-style-five -->
                        </div>
                    </div>

                    <!--Mobile-->
                    <div class="row justify-content-center d-lg-none d-flex">
                        <section class="fitur-terbaru">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6 ms-auto">
                                        <div class="feedback-meta">
                                            <div class="clientSliderTerbaru">
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
                                                <div class="item">
                                                    <div class="block-style-five text-center">
                                                        <div class="icon d-flex justify-content-center"><img
                                                                src="../storage/public/assets/template_user/images/icon/21.svg"
                                                                alt="">
                                                        </div>
                                                        <h6 class="title"><span>Penyesuaian Stok Barang</span>
                                                        </h6>
                                                        <p>Anda dapat mencatat pengurangan atau penambahan jumlah
                                                            barang, begitupun
                                                            perubahan nilai barang</p>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="block-style-five text-center">
                                                        <div class="icon d-flex justify-content-center"><img
                                                                src="../storage/public/assets/template_user/images/icon/22.svg"
                                                                alt="">
                                                        </div>
                                                        <h6 class="title"><span>Retur Barang</span></h6>
                                                        <p>Mengetahui barang apa saja yang dikembalilkan dari pihak
                                                            pembeli kepada anda yang
                                                            disebab karena barang yang diterima tidak sesuai </p>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="block-style-five text-center">
                                                        <div class="icon d-flex justify-content-center"><img
                                                                src="../storage/public/assets/template_user/images/icon/20.svg"
                                                                alt="">
                                                        </div>
                                                        <h6 class="title"><span>Kartu Stok</span></h6>
                                                        <p>Sekumpulan catatan pembukuan yang berisi rincian lengkap
                                                            aktivitas transaksi yang
                                                            terjadi. Atau dengan kata lain, berisi ringkasan </p>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="block-style-five text-center">
                                                        <div class="icon d-flex justify-content-center"><img
                                                                src="../storage/public/assets/template_user/images/icon/21.svg"
                                                                alt="">
                                                        </div>
                                                        <h6 class="title"><span>Hutang Piutang</span></h6>
                                                        <p>Menghitung hutang piutang yang dimiliki usaha anda.
                                                            Menjumlahkan dan mengurangi
                                                            hutang piutang secara akurat.</p>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="block-style-five text-center">
                                                        <div class="icon d-flex justify-content-center"><img
                                                                src="../storage/public/assets/template_user/images/icon/22.svg"
                                                                alt="">
                                                        </div>
                                                        <h6 class="title"><span>Laporan Stok Barang</span></h6>
                                                        <p>Kemudahan dalam mengakses laporan barang secara mudah
                                                            serta cepat. Berisi
                                                            informasi terkait status barang sampai penjualan </p>
                                                    </div>
                                                </div>
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
                        <h6>How it works</h6>
                        <h2>Awesome place to start creating your
                            <span>first doc with <img
                                    src="../storage/public/assets/template_user/images/shape/line-shape-2.svg"
                                    alt=""></span>deski
                        </h2>
                    </div>
                </div>
            </div>

            <div class="block-style-twelve">
                <div class="row">
                    <div class="col-lg-6 col-md-8 ml-auto order-lg-last aos-init aos-animate" data-aos="fade-left"
                        data-aos-duration="1200">
                        <div class="illustration-holder">
                            <img src="../storage/public/assets/template_user/images/assets/ils_10.svg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-5 order-lg-first aos-init aos-animate" data-aos="fade-right"
                        data-aos-duration="1200">
                        <div class="text-wrapper text-lg-start text-center">
                            <h6>Documentation</h6>
                            <h2 class="font-rubik title">A home for your team, best-practices &amp; thoughts.</h2>
                            <div class="d-flex flex-column">
                                <div class="mb-3">
                                    <p class="fs-6"><i
                                            class="fa fa-check me-2 fs-6 bg-hijau-centang text-white style-3fitur"></i>Lorem
                                        ipsum dolor sit amet consectetur.</p>
                                </div>
                                <div class="mb-3">
                                    <p class="fs-6"><i
                                            class="fa fa-check me-2 fs-6 bg-hijau-centang text-white style-3fitur"></i>Lorem
                                        ipsum dolor sit amet consectetur.</p>
                                </div>
                                <div class="mb-40">
                                    <p class="fs-6"><i
                                            class="fa fa-check me-2 fs-6 bg-hijau-centang text-white style-3fitur"></i>Lorem
                                        ipsum dolor sit amet consectetur.</p>
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
                            <img src="../storage/public/assets/template_user/images/assets/ils_11.svg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-5 aos-init" data-aos="fade-left" data-aos-duration="1200">
                        <div class="text-wrapper text-lg-start text-center">
                            <h6>User Guides</h6>
                            <h2 class="font-rubik title">Docs for your APIs, products, FAQs and user guides,</h2>
                            <div class="d-flex flex-column">
                                <div class="mb-3">
                                    <p class="fs-6"><i
                                            class="fa fa-check me-2 fs-6 bg-hijau-centang text-white style-3fitur"></i>Lorem
                                        ipsum dolor sit amet consectetur.</p>
                                </div>
                                <div class="mb-3">
                                    <p class="fs-6"><i
                                            class="fa fa-check me-2 fs-6 bg-hijau-centang text-white style-3fitur"></i>Lorem
                                        ipsum dolor sit amet consectetur.</p>
                                </div>
                                <div class="mb-40">
                                    <p class="fs-6"><i
                                            class="fa fa-check me-2 fs-6 bg-hijau-centang text-white style-3fitur"></i>Lorem
                                        ipsum dolor sit amet consectetur.</p>
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
                            <img src="../storage/public/assets/template_user/images/assets/ils_12.svg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-5 order-lg-first aos-init" data-aos="fade-right" data-aos-duration="1200">
                        <div class="text-wrapper text-lg-start text-center">
                            <h6>Combine Idea</h6>
                            <h2 class="font-rubik title">A place to think and track ideas for you &amp; your team
                            </h2>
                            <div class="d-flex flex-column align-items-center align-items-lg-start">
                                <div class="mb-3">
                                    <p class="fs-6"><i
                                            class="fa fa-check me-2 fs-6 bg-hijau-centang text-white style-3fitur"></i>Lorem
                                        ipsum dolor sit amet consectetur.</p>
                                </div>
                                <div class="mb-3">
                                    <p class="fs-6"><i
                                            class="fa fa-check me-2 fs-6 bg-hijau-centang text-white style-3fitur"></i>Lorem
                                        ipsum dolor sit amet consectetur.</p>
                                </div>
                                <div class="mb-40">
                                    <p class="fs-6"><i
                                            class="fa fa-check me-2 fs-6 bg-hijau-centang text-white style-3fitur"></i>Lorem
                                        ipsum dolor sit amet consectetur.</p>
                                </div>
                                <a href="https://wa.me/6281934364063?text=Saya%20tertarik%20dengan%20aplikasi%20Stoki.%20Saya%20ingin%20pesan."
                                    target="blank"
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
                            <h2 class="font-gordita"><span>Dapatkan Harga Terbaik<img
                                        src="../storage/public/assets/template_user/images/shape/line-shape-1.svg"
                                        alt="" class=""></span>
                            </h2>
                            <p class="mt-40 md-mt-20">Dapatkan fitur yang menarik dan sesuai dengan kebutuhan Anda.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="pricing-table-area-seven">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200">
                            <div class="pr-table-wrapper md-mb-40">
                                <img src="../storage/public/assets/template_user/images/icon/paper-plane.png"
                                    alt="" class="icon style-icon-pricing">
                                <div class="pack-name">Paket Terjangkau</div>
                                <ul class="pr-feature">
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
                                <div class="price">Rp. 2.500.00,00/<span>Bulan</span></div>
                                <div class="trial-text">menyediakan sampai 20.000++ kapasitas barang.</div>
                                <a href="#" class="trial-button border-radius-25px"><i
                                        class="fa fa-whatsapp fs-5 me-2"></i>Pilih Paket</a>
                            </div> <!-- /.pr-table-wrapper -->
                        </div>
                        <div class="harga position-relative col-lg-4 col-md-6" data-aos="fade-up"
                            data-aos-duration="1200">
                            <div class="pr-table-wrapper md-mb-40">
                                <img src="../storage/public/assets/template_user/images/icon/plane.png" alt=""
                                    class="icon style-icon-pricing">
                                <div class="pack-name">Paket Terbaik</div>
                                <ul class="pr-feature">
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
                                <div class="price">Rp. 9.500.00,00/<span>Bulan</span></div>
                                <div class="trial-text">menyediakan sampai 100.000++ kapasitas barang.</div>
                                <a href="#" class="trial-button border-radius-25px"><i
                                        class="fa fa-whatsapp fs-5 me-2"></i>Pilih Paket</a>
                            </div> <!-- /.pr-table-wrapper -->
                        </div>
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200">
                            <div class="pr-table-wrapper active md-mb-40">
                                <img src="../storage/public/assets/template_user/images/icon/space-ship.png"
                                    alt="" class="icon style-icon-pricing">
                                <div class="pack-name">Paket Terlengkap</div>
                                <ul class="pr-feature">
                                    <li>Pemantauan Real Time</li>
                                    <li>Penyesuaian stok</li>
                                    <li>Notifikasi Stok Kosong</li>
                                    <li>Harga jual rata-rata</li>
                                    <li>Data Barang terlaris</li>
                                    <li>Pergerakan Barang</li>
                                    <li>Unlimited Barang</li>
                                </ul>
                                <div class="price">Rp. 15.00.00,00/<span>Bulan</span></div>
                                <div class="trial-text">menyediakan sampai 500.000++ kapasitas barang.</div>
                                <a href="#" class="trial-button border-radius-25px"><i
                                        class="fa fa-whatsapp fs-5 me-2"></i>Pilih Paket</a>
                                <div class="diskon">
                                    <span>
                                    </span>
                                </div>
                            </div> <!-- /.pr-table-wrapper -->
                        </div>
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
                                <div class="upper-title">Galeri Aplikasi</div>
                                <h2>Tampilan dari Aplikasi Stoki<img
                                        src="../storage/public/assets/template_user/images/shape/line-shape-13.svg"
                                        class="m-auto m-lg-0" alt="">
                                </h2>
                            </div>
                            <div class="tag-line text-lg-start text-center">Beberapa tampilan dari aplikasi Stoki.
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
                    <div class="item">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/desktop/1.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/desktop/1.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/desktop/2.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/desktop/2.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/desktop/3.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/desktop/3.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/desktop/4.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/desktop/4.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/desktop/5.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/desktop/5.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/desktop/6.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/desktop/6.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/desktop/7.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/desktop/7.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/desktop/8.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/desktop/8.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/desktop/9.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/desktop/9.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/desktop/10.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/desktop/10.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/desktop/11.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/desktop/11.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/desktop/12.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/desktop/12.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/desktop/13.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/desktop/13.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/desktop/14.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/desktop/14.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/desktop/15.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/desktop/15.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/desktop/16.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/desktop/16.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/desktop/17.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/desktop/17.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/desktop/18.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/desktop/18.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/desktop/19.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/desktop/19.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/desktop/20.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/desktop/20.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/desktop/11.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/desktop/21.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/desktop/22.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/desktop/22.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/desktop/23.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/desktop/23.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/desktop/24.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/desktop/24.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/desktop/25.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/desktop/25.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/desktop/26.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/desktop/26.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/desktop/27.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/desktop/27.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/desktop/28.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/desktop/28.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/desktop/29.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/desktop/29.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/desktop/30.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/desktop/30.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/desktop/31.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/desktop/31.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/desktop/32.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/desktop/32.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/desktop/33.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/desktop/33.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/desktop/34.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/desktop/34.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/desktop/35.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/desktop/35.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/desktop/36.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/desktop/36.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/desktop/37.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/desktop/37.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/desktop/38.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/desktop/38.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/desktop/39.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/desktop/39.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/desktop/40.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/desktop/40.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card-block">
                            <a href="../storage/public/assets/template_user/images/screenshot/desktop/41.png"
                                data-lightbox="image1" class="w-100 h-100">
                                <img src="../storage/public/assets/template_user/images/screenshot/desktop/41.png"
                                    alt="" class="w-100">
                            </a>
                        </div>
                    </div>
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
                                                    class="rounded-circle" width="30" height="50"
                                                    alt="">
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
                                                    class="rounded-circle" width="30" height="50"
                                                    alt="">
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
                        <h2 class="font-gordita" data-aos="fade-up" data-aos-duration="1200">Tertarik dengan
                            Stoki?
                            Dapatkan Sekarang!</h2>
                        <a href="https://wa.me/6281934364063?text=Saya%20tertarik%20dengan%20aplikasi%20Stoki.%20Saya%20ingin%20pesan."
                            target="blank" class="btn btn-bg-yellowdeep btn-lg mt-50 md-mt-30 border-radius-25px"
                            data-aos="fade-up" data-aos-duration="1200" data-aos-delay="100"><i
                                class="fa fa-whatsapp fs-5 me-2"></i>Hubungi Kami</a>
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
