@extends('home.templates.index')

@section('page-content')
    <div class="hero-wrap" style="background-image: url('{{ asset('assets/home/images/bgwisata(1).jpg') }}');"
        data-stellar-background-ratio="0.5">
        <div class=""></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-8 ftco-animate d-flex align-items-end">
                    <div class="text w-100 text-center">
                        <h1 class="mb-4">Selamat Datang Di <span>Ticket Trek</span>.</h1>
                        <p><a href="{{ url('home/wisata') }}" class="btn btn-danger py-2 px-4">Daftar Wisata</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-intro" style="background-color: #764ca3;">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-4 d-flex">
                    <div class="intro d-lg-flex w-100 ftco-animate" style="background-color: #6953f5;">
                        <div class="icon">
                            <span class="flaticon-support"></span>
                        </div>
                        <div class="text">
                            <h2>Layanan 24 Jam</h2>
                            <p>Melayani Dengan Integritas Dan Pelayanan Yang Terpadu</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex">
                    <div class="intro color-1 d-lg-flex w-100 ftco-animate" style="background-color: #6777ef;">
                        <div class="icon">
                            <span class="flaticon-cashback"></span>
                        </div>
                        <div class="text">
                            <h2>Harga Worth It</h2>
                            <p>Kami menjual tiket wisata dengan harga paling murah</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex">
                    <div class="intro color-2 d-lg-flex w-100 ftco-animate" style="background-color: #6953f5;">
                        <div class="icon">
                            <span class="flaticon-shopping-bag"></span>
                        </div>
                        <div class="text">
                            <h2>Terpercaya</h2>
                            <p>Menjual tiket wisata yang terpercaya</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pb mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 img img-3 d-flex justify-content-center align-items-center">
                    <img src="{{ asset('assets/home/images/about.png') }}" width="100%" style="border-radius: 10px">
                </div>
                <div class="col-md-6 wrap-about pl-md-5 ftco-animate py-5">
                    <div class="heading-section">

                        <h3 class="mt-4">Tentang kami</h3>
                        <p>Selamat datang di TicketTrek, platform pemesanan wisata yang didedikasikan untuk memberikan pengalaman perjalanan yang tak terlupakan bagi setiap pelanggan.</p>
                        <p>Kami adalah tim yang terdiri dari para pecinta perjalanan yang percaya bahwa setiap petualangan memiliki cerita yang berharga untuk dibagikan. Dengan semangat ini, kami bertekad untuk menyediakan akses mudah dan aman ke destinasi wisata terbaik di seluruh dunia.</p>
                        <p>Kami percaya bahwa setiap perjalanan adalah kesempatan untuk belajar, tumbuh, dan menjalin hubungan yang lebih dalam dengan dunia di sekitar kita. Dengan TicketTrek, mari kita jelajahi dunia bersama-sama dan ciptakan kenangan yang abadi.</p>
                        <p>Terima kasih telah memilih TicketTrek sebagai mitra perjalanan Anda. Mari kita jadikan setiap petualangan sebagai cerita yang tak terlupakan!</p>

                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
