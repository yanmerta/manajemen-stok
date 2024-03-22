@extends('user.general.layout')
@section('content')
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
                                    <div class="icon"><img src="{{ asset('/storage/public/' . $item->fitur_menu_image) }}"
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
@endsection
