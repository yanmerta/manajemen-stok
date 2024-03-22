@extends('user.general.layout')
@section('content')
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
@endsection
