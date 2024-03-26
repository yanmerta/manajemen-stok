@extends('user.general.layout')
@section('content')
    <div id="testimoni">
        <div class="client-feedback-slider-one d-md-block d-none">
            <div class="shapes-holder">
                <img src="../storage/public/assets/template_user/images/shape/39.svg" alt="">
                <img src="../storage/public/assets/template_user/images/shape/42.svg" alt="" class="shapes shape-one">
                <img src="../storage/public/assets/template_user/images/media/img_21.png" alt="" class="cp-img-one">
                <img src="../storage/public/assets/template_user/images/media/img_22.png" alt="" class="cp-img-two">
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
                            <!-- Di dalam file Blade Anda -->
                            <div class="clientSliderOne">
                                @foreach ($testimonis as $testimoni)
                                    <div class="item">
                                        <p class="font-rubik">{{ $testimoni->testi_description }}</p>
                                        <div class="d-lg-flex align-items-center">
                                            <img src="{{ asset('/storage/public/' . $testimoni->image) }}" alt=""
                                                class="img">
                                            <div class="info">
                                                <strong>{{ $testimoni->testi_name }}</strong>
                                                <span>{{ $testimoni->position }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
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
    <div class="client-feedback-slider-one d-md-none d-block">
        <div class="shapes-holder">
            <img src="../storage/public/assets/template_user/images/shape/39.svg" alt="">
            <img src="../storage/public/assets/template_user/images/shape/42.svg" alt="" class="shapes shape-one">
            <img src="../storage/public/assets/template_user/images/media/img_21.png" alt="" class="cp-img-one">
            <img src="../storage/public/assets/template_user/images/media/img_22.png" alt="" class="cp-img-two">
            <img src="../storage/public/assets/template_user/images/media/img_23.png" alt="" class="cp-img-three">
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
                        <img src="../storage/public/assets/template_user/images/icon/30.svg" alt="" class="icon">
                        <div class="clientSliderMobile">
                            <div class="item">
                                <p class="font-rubik">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                    Porro temporibus laborum aliquid? Assumenda mollitia, debitis est totam beatae
                                    laudantium nesciunt?</p>
                                <div class="d-lg-flex align-items-center">
                                    <img src="../storage/public/assets/template_user/images/media/img_20.png" alt=""
                                        class="c_img">
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
                                    <img src="../storage/public/assets/template_user/images/media/img_20.png" alt=""
                                        class="c_img">
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
                                    <img src="../storage/public/assets/template_user/images/media/img_20.png" alt=""
                                        class="c_img">
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
                                    <img src="../storage/public/assets/template_user/images/media/img_20.png" alt=""
                                        class="c_img">
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
@endsection
