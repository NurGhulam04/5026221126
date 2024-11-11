<!-- Nur Ghulam Musthafa Al Kautsar -->
<!-- 5026221126 -->
<!-- www.indah-wisata.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <title>Indah Wisata</title>
</head>
<body>
    <style>
        .carousel-item{
            height:32rem;
            background:#000;
            color: white;
            position: relative;
            background-position: center;
            background-size: cover;
        }
        .carousel-item .container {
            position: absolute;
            bottom: 0;
            left: 50;
            right: 0;
            padding-bottom: 50px;
            z-index: 1;
        }
        .carousel-item .overlay-image{
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            top: 0;
            background-position: center;
            background-size: cover;
            opacity: 0.5;
        }
        .carousel-control-prev,
        .carousel-control-next {
            width: 60px;

        }
        #haji {
            position: relative;
            background-image: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url('https://wallpapers.com/images/high/kaaba-at-night-q0k57wem295af8nx.webp');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            animation: kenburns 20s infinite alternate;
            color: white;
        }

        @keyframes kenburns {
            from {
                background-size: 110%;
            }
            to {
                background-size: 100%;
            }
        }

    </style>
<!-- Sumber img #haji: https://wallpapers.com/wallpapers/kaaba-at-night-q0k57wem295af8nx.html -->

<!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-success navbar-dark">
        <div class="container">
        <a href="#" class="navbar-brand">
            <img class="" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQcJ-hgkGQFbQ58PplzwMpaNrB0Np6FMRg5iQ&s" class="rounded-circle" style="width: 75px; border-radius:50%"></a>
            <!-- sumber: foto profil https://www.instagram.com/indahwisatatravel/ -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ms-auto" id="navmenu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="#umroh" class="nav-link">Paket Umroh</a>
                </li>
                <li class="nav-item">
                    <a href="#haji" class="nav-link">Paket Haji</a>
                </li>
                <li class="nav-item">
                    <a href="#tour" class="nav-link">Paket Tour</a>
                </li>
                <li class="nav-item">
                    <a href="#aboutus" class="nav-link">About Us</a>
                </li>
                <li class="nav-item">
                    <a href="#contactus" class="nav-link">Contact Us</a>
                </li>

            </ul>
        </div>
        </div>
    </nav>

    <!--showcase carousel-->
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active" >
                <div class="overlay-image" style="background-image:url(https://bb71d2eac085c69b0.nos.wjv-1.neo.id/1638869882-890430/17014115669639-X78rsE0TmjKIdTT96ppCVjuIEvqleYDlnpFLsAGu.jpg)"></div>
                <!-- sumber: https://hajjumrahqatar.com/review-video/ -->
                <div class="container">
                    <h1>Paket Umroh</h1>
                    <p class="text-break">Kami memiliki berbagai macam paket Umroh yang dapat anda pilih, klik Lihat Paket di bawah ini untuk melihat berbagai macam layanan yang kami sediakan</p>
                    <a href="#umroh" class="btn btn-lg btn-primary">
                        Lihat Paket
                    </a>

                </div>
            </div>

            <div class="carousel-item" >
                <div class="overlay-image" style="background-image:url(https://live.staticflickr.com/3437/3204383034_5898303db8_b.jpg)"></div>
                <!-- sumber: https://www.flickr.com/photos/32069665@N03/3204383034 -->
                <div class="container">
                    <h1>Paket Haji</h1>
                    <p class="text-break">Kami memiliki berbagai macam paket Haji yang dapat anda pilih, klik Lihat Paket di bawah ini untuk melihat berbagai macam layanan yang kami sediakan</p>
                    <a href="#haji" class="btn btn-lg btn-primary">
                        Lihat Paket
                    </a>
                </div>
            </div>

            <div class="carousel-item" >
                <div class="overlay-image" style="background-image:url(https://dynamic-media-cdn.tripadvisor.com/media/photo-o/26/38/e6/55/caption.jpg?w=1400&h=1400&s=1)"></div>
                <!-- sumber: https://www.tripadvisor.co.za/Tourism-g187428-Andalucia-Vacations.html -->
                <div class="container">
                    <h1>Paket Tour</h1>
                    <p class="text-break">Kami memiliki berbagai macam paket Tour yang dapat anda pilih, klik Lihat Paket di bawah ini untuk melihat berbagai macam layanan yang kami sediakan</p>
                    <a href="#tour" class="btn btn-lg btn-primary">
                        Lihat Paket
                    </a>
                </div>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- paket umroh -->
     <section class="p-5" id="umroh">
        <div class="container" >
            <h1 class="text-center text-success p-5 fw-bold">PAKET UMROH</h1>
            <div class="row text-center g-4">
                <div class="col-md d-flex justify-content-center">
                    <div class="card h-100" style="width: 18rem;">
                        <img src="https://lh3.googleusercontent.com/Qcr2axhJe3KCOr8XrcQRW8YvM0NTG_L5eumlvFq6s0ZIz9lM7_TxsWTb5m9II0rsERVCDLOK_xf00wNKTrAVXUWC7twyMefJCpkBjua8AFW0ZKmKxEh0PYk=s1000" class="card-img-top" alt="..." style="height: 215px;">
                        <!-- sumber: https://www.indah-wisata.com/umroh.html -->
                        <div class="card-body ">
                            <h3 class="card-title text-success">PAKET UMROH PLUS TURKI</h3>
                            <ul class="list-unstyled">
                                <li>Program Reguler 12 hari By Turkish Air</li>
                                <p></p>
                                <li class="text-success fw-bold text-uppercase">HARGA UMROH PLUS TURKI</li>
                                <li>QUAD   : <h6 class="text-danger"> Rp 40.650.000/pax</h6></li>
                                <li>TRIPLE : <h6 class="text-danger">Rp 42.350.000/pax</h6></li>
                                <li>DOUBLE : <h6 class="text-danger">Rp 44.650.000/pax</h6></li>
                            </ul>
                            <a href="https://wa.me/6281217212964" class="btn btn-success">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex justify-content-center"><div class="card h-100" style="width: 18rem;">
                    <img src="https://lh3.googleusercontent.com/bLRjktQQ0RerjlbxEsp6hD46mFfyxMesbtoKLf50Z617ZsqeKYwAXWVgQqSp8QvesKSkKyE6j8fTDSmqXb3I2LiAX44K7TmbRyUo22NSfZXMaSonyEKzWw=s1000" class="card-img-top" alt="">
                    <div class="card-body ">
                        <h3 class="card-title text-success ">PAKET UMROH PLUS AQSHO</h3>
                        <ul class="list-unstyled">
                            <li>Program 13 Hari By Oman Air</li>
                            <p></p>
                            <li class="text-success fw-bold text-uppercase">Harga Umroh Plus Aqsha</li>
                            <li>QUAD   : <h6 class="text-danger">Rp 48.750.000/pax</h6></li>
                            <li>TRIPLE : <h6 class="text-danger">Rp 50.750.000/pax</h6></li>
                            <li>Double : <h6 class="text-danger">Rp 53.750.000/pax</h6></li>
                        </ul>
                        <a href="https://wa.me/6281217212964" class="btn btn-success">Contact Us</a>
                    </div>
                </div></div>
                <div class="col-md d-flex justify-content-center"><div class="card h-100" style="width: 18rem;">
                    <img src="https://lh3.googleusercontent.com/aFYw4z_MIQGCEuXZVJTrnioIr-qq2fPAZImY1_2PVnVAh3pOm3U5g_JU-TI9BS5jAiBLmMl-dGwfu7VNM-WoYQtSu5PJGvsvjqvnPI3Ztvc172lh95Li9A" class="card-img-top" alt="...">
                    <!-- sumber: https://www.indah-wisata.com/umroh.html -->
                    <div class="card-body ">
                        <h3 class="card-title text-success">PAKET UMROH INDAH 2</h3>
                        <ul class="list-unstyled">
                            <li>Program 9 Hari By Garuda Indonesia</li>
                            <p></p>
                            <li class="text-success fw-bold text-uppercase">Harga Indah 2</li>

                            <li>Quad : <h6 class="text-danger">Rp 31.950.000/pax</h6></li>
                            <li>Triple : <h6 class="text-danger">Rp 33.950.000/pax</h6></li>
                            <li>Double : <h6 class="text-danger">Rp 35.950.000/pax</h6></li>
                        </ul>
                        <a href="https://wa.me/6281217212964" class="btn btn-success">Contact Us</a>
                    </div>
                </div></div>
                <div class="col-md d-flex justify-content-center"><div class="card h-100" style="width: 18rem;">
                    <img src="https://lh3.googleusercontent.com/ZR9F3LknXuMyk2xPihoAra_fdKMkKGBQ9S851Q2XdxLV38lAh_o7Z_jb4vLUIbd9V3U7dqT-Y-_8AOq3h-JGLBc3VXwWNoX0FEGE8Iyyu8JcztuNOp_Nnf4" class="card-img-top" alt="...">
                    <!-- sumber: https://www.indah-wisata.com/umroh.html -->
                    <div class="card-body ">
                        <h3 class="card-title text-success">PAKET UMROH INDAH 3</h3>
                        <ul class="list-unstyled">
                            <li>Konsorium By Lion Air</li>
                            <p></p>
                            <li class="text-success fw-bold text-uppercase">Harga Indah 3</li>

                            <li>Quad : <h6 class="text-danger">Rp 28.350.000/pax</h6></li>
                            <li>Triple : <h6 class="text-danger">Rp 29.450.000/pax</h6></li>
                            <li>Double : <h6 class="text-danger">Rp 30.800.000/pax</h6></li>
                        </ul>
                        <a href="https://wa.me/6281217212964" class="btn btn-success">Contact Us</a>
                    </div>
                </div></div>
            </div>
        </div>
     </section>
     <!-- Haji -->
      <section id="haji" class="bg-dark">
        <div class="container">
            <h1 class="text-center text-light p-5 fw-bold">PAKET HAJI</h1>

            <h3 class="text-center text-light p-5 fw-bold">PAKET HAJI FURODA</h3>
            <div class="row  justify-content-between">
                <div class="col-md d-flex justify-content-center">
                    <img src="https://cendekiamuslim.or.id/uploads/images/202401/image_870x_65a5f36290ec8.jpg" style="width: 400px; border-radius: 20px;">
                    <!--Sumber: https://cendekiamuslim.or.id/mengapa-kabah-begitu-suci-makna-dan-sejarah-di-balik-keagungan-kabah  -->
                </div>
                <div class="col-md">
                    <ul class="list-unstyled text-light">
                        <p></p>
                        <li class="text-light fw-bold">Fasilitas Hotel :</li>
                        <li>Makkah : By Sistem Ehajj *5 & *4/Setaraf</li>
                        <li>Madinah : By Sistem *5 & *4/Setaraf</li>
                        <li>Arafah - Mina : By Sistem</li>
                        <li>Hotel Transit</li>
                    </ul>
                </div>
                <div class="col-md">
                    <ul class="list-unstyled text-light">
                        <p></p>
                        <li class="text-light fw-bold">Informasi Penerbangan:</li>
                        <li>EK 357 10 JUN JKT-DXB 17,55-22,55</li>
                        <li>EK 801 11 JUN DXB-JED 00.20-02,10</li>
                        <li>EK 810 01 JUL MED-DXB 17.35-21.15</li>
                        <li>EK 356 02 JUL DXB-JKT 04,10-15,40</li>
                    </ul>
                </div>
                <div class="col-md">
                    <ul class="list-unstyled text-light">
                        <p></p>
                        <li class="text-light fw-bold">Harga Haji :</li>
                        <li>1 Kamar 2 orang : US$. 15.500</li>
                        <li>1 kamar 3 orang : US$. 15.000</li>
                        <li>1 Kamar 4 orang : US$. 14.500</li>
                    </ul>
                </div>

            </div>
            <p></p>
            <h3 class="text-center text-light p-5 fw-bold">PAKET HAJI KHUSUS</h3>
            <div class="row  justify-content-between p-3">
                <div class="col-md d-flex justify-content-center">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/1/10/Kaaba_at_night.jpg?20090605190304" style="width: 400px; border-radius: 20px;">
                    <!--Sumber: https://commons.wikimedia.org/wiki/File:Kaaba_at_night.jpg  -->
                </div>
                <div class="col-md ">
                    <ul class="list-unstyled text-light">
                        <p></p>
                        <li class="text-light fw-bold">Fasilitas Hotel :</li>
                        <li>Makkah : Movenpick Hajar Tower *5/Setaraf</li>
                        <li>Madinah : Moevenpick Anwar Madinah *5 Setaraf</li>
                        <li>Arafah – Mina : TENDA VIP Haji Khusus</li>
                        <li>Hotel Transit Informasi</li>
                    </ul>
                </div>
                <div class="col-md">
                    <ul class="list-unstyled text-light">
                        <p></p>
                        <li class="text-light fw-bold">Informasi Penerbangan:</li>
                        <li>EK 357 10 JUN JKT-DXB 17,55-22,55</li>
                        <li>EK 801 11 JUN DXB-JED 00.20-02,10</li>
                        <li>EK 810 01 JUL MED-DXB 17.35-21.15</li>
                        <li>EK 356 02 JUL DXB-JKT 04,10-15,40</li>
                    </ul>
                </div>
                <div class="col-md">
                    <ul class="list-unstyled text-light">
                        <p></p>
                        <li class="text-light fw-bold">Harga Haji :</li>
                        <li>1 Kamar 2 orang : US$. 15.500</li>
                        <li>1 kamar 3 orang : US$. 15.000</li>
                        <li>1 Kamar 4 orang : US$. 14.500</li>
                    </ul>
                </div>

            </div>

        </div>
      </section>

      <!-- Tour -->

      <section class="p-5" id="tour">
        <div class="container" >
            <h1 class="text-center text-primary p-5 fw-bold">PAKET TOUR</h1>
            <div class="row text-center g-4">
                <div class="col-md d-flex justify-content-center">
                    <div class="card" style="width: 18rem;">
                        <img src="https://lh3.googleusercontent.com/RmzHLMXElcP914Op6AnlnrrZ6_HoMTRdesHsRnlgCMkCFccVwHmp6uaouZNutYSbhZiCQ_fS_ke9NYLBPtde97N8J-szUld-4jzzBa-OuwKE9ZCAsGPOkw=s1000" class="card-img-top" alt="..." style="height: 215px;">
                        <!-- sumber: https://www.indah-wisata.com/tour.html -->
                        <div class="card-body ">
                            <h5 class="card-title text-primary fw-bold">
                                AMAZING ANDALUCIA & MOROCCO
                                </h5>
                            <ul class="list-unstyled">
                                <li>Program 12H 10M By Qatar</li>
                                <p></p>
                                <li>Keberangkatan:</li>
                                <li>10-21 FEBRUARY 2024</li>
                                <p></p>
                                <li class="text-primary fw-bold text-uppercase">HARGA:</li>
                                <li class="text-danger">Rp 42.250.000</li>
                            </ul>
                            <a href="https://wa.me/6281217212964" class="btn btn-primary">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex justify-content-center">
                    <div class="card" style="width: 18rem;">
                        <img src="https://lh3.googleusercontent.com/wvL-_RrrteyS08zN-Dvta_UaC3rwdxq63eWOOSK7t3xVBQYRStdF8P3BRPwAf4o7ap7irLuBaglWhDipmdLUZ-NEcrx2g8RIJtadFgcq4RY33atA5uvvgg=s1158" class="card-img-top" alt="..." style="height: 215px;">
                        <!-- sumber: https://www.indah-wisata.com/tour.html -->
                        <div class="card-body ">
                            <h5 class="card-title text-primary fw-bold">
                                TURKIYE–HIGHLIGHT TURKIYE
                                </h5>
                            <ul class="list-unstyled">
                                <li>Program 9H 6M BY ETIHAD AIRWAYS</li>
                                <p></p>
                                <li>Keberangkatan:</li>
                                <li>26 Desember 2023–03 Januari 2024</li>
                                <p></p>
                                <li class="text-primary fw-bold text-uppercase">HARGA:</li>
                                <li class="text-danger">Rp 20.899.000</li>
                            </ul>
                            <a href="https://wa.me/6281217212964" class="btn btn-primary">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex justify-content-center">
                    <div class="card" style="width: 18rem;">
                        <img src="https://lh3.googleusercontent.com/at95nQqKEbW3DUIHQmqyyxxms3XJyzeLYnk73P7AVAsHwUAznLRi0S6A046pl3hVhWKiLxIjnvEU-2fkjq9r2WLkE0cZTxLNyadx4VRlM2i4fGOq1bFJJg=s1000" class="card-img-top" alt="..." style="height: 215px;">
                        <!-- sumber: https://www.indah-wisata.com/tour.html -->
                        <div class="card-body ">
                            <h5 class="card-title text-primary fw-bold">
                                JEPANG BEAUTIFUL GOLDEN ROUTE
                                </h5>
                                <p></p>
                            <ul class="list-unstyled">
                                <li>Program 7H 5M</li>
                                <p></p>
                                <li>Keberangkatan:</li>
                                <li>10-16 JAN’24, 21-31 JAN’24</li>
                                <p></p>
                                <li class="text-primary fw-bold text-uppercase">HARGA:</li>
                                <li class="text-danger">Rp 22.900.000</li>
                            </ul>
                            <a href="https://wa.me/6281217212964" class="btn btn-primary">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex justify-content-center">
                    <div class="card" style="width: 18rem;">
                        <img src="https://lh3.googleusercontent.com/isrrhKa07yg3K59FU4T9kd1s8UIHTGfEUuonOHuHiFDRp7DT2tX9nEbWNMFyiDZVkyevbs6zochuJVKLd3Yi4vi-Hqnfefdpy0DkZK_gwJJ3J0lxGPL8pQ=s1000" class="card-img-top" alt="..." style="height: 215px;">
                        <!-- sumber: https://www.indah-wisata.com/tour.html -->
                        <div class="card-body ">
                            <h5 class="card-title text-primary fw-bold">
                                NATIONAL TREASURE BALI PACKAGE
                                </h5>
                            <ul class="list-unstyled">
                                <li>Program 3H 2M BY BATIK AIR</li>
                                <p></p>
                                <li>Keberangkatan:</li>
                                <li>-</li>
                                <p></p>
                                <li class="text-primary fw-bold text-uppercase">HARGA:</li>
                                <li class="text-danger">Rp 4.299.000</li>
                            </ul>
                            <a href="https://wa.me/6281217212964" class="btn btn-primary">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </section>

     <!-- About Us -->

     <section id="aboutus" class="p-5">
        <div class="container">
            <h1 class="text-center mb-4 fw-bold">About Us</h1>
            <div class="accordion accordion-flush" id="aboutus">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#companyprofile" aria-expanded="false" aria-controls="companyprofile">
                      Company Profile
                    </button>
                  </h2>
                  <div id="companyprofile" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#aboutus">
                    <div class="accordion-body">PT.DEWISERASI INDAHWISATA Berdiri pada tahun 1992, sebagai biro perjalanan wisata, dengan nama dagang indah wisata. Indah Wisata mendapatkan izin Umrah pada tahun 1995, dan pembarahuran SK No. 33 Tahun 2021 Indah Wisata mendapatkan izin Haji pada tahun 1998, SK No. 143 Tahun 2019 Sebagai agen resmi IATA (International Air Transport Association) sejak tahun 1997 Sertifikat ISO 9001 : 2015 pada tahun 2017 Tahun 2019 Indah Wisata mendapatkan Sertifikat standar jasa perjalanan wisata dari SUCOFINDO dan KAN (Komite Akreditasi Nasional).</div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#visi" aria-expanded="false" aria-controls="visi">
                      Visi
                    </button>
                  </h2>
                  <div id="visi" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#aboutus">
                    <div class="accordion-body">Kami terdepan di bidang jasa pelayanan dan fokus ke pengelolaan pelanggan sehingga kami berkomitmen untuk melebihi harapan mereka.</div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#misi" aria-expanded="false" aria-controls="misi">
                      Misi
                    </button>
                  </h2>
                  <div id="misi" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#aboutus">
                    <div class="accordion-body">Pertumbuhan ekspansi yang menguntungkan akan dicapai melalui staf kami yang terlatih dan termotivasi serta memberikan jasa pelayanan yang superior kepada pelanggan sesuai dengan motto kami ‘We Serve and Care’.</div>
                  </div>
                </div>
              </div>
        </div>

     </section>
     {{-- tugas --}}
    <section class="p-5" id="tour">
        <div class="container" >
            <h1 class="text-center text-dark p-5 fw-bold">Tugas Pertemuan 1-7</h1>
            <div class="row text-center g-4">
                <div class="col-md d-flex justify-content-center">
                    <a href="/hello" class="btn btn-primary">hello</a>
                </div>
                <div class="col-md d-flex justify-content-center">
                    <a href="/style" class="btn btn-primary">style</a>
                </div>
                <div class="col-md d-flex justify-content-center">
                    <a href="/style2" class="btn btn-primary">style2</a>
                </div>
                <div class="col-md d-flex justify-content-center">
                    <a href="/responsive" class="btn btn-primary">responsive</a>
                </div>
                <div class="col-md d-flex justify-content-center">
                    <a href="/form" class="btn btn-primary">form</a>
                </div>
                <div class="col-md d-flex justify-content-center">
                    <a href="/linktree" class="btn btn-primary">linktree</a>
                </div>
                <div class="col-md d-flex justify-content-center">
                    <a href="/testimoni" class="btn btn-primary">testimoni</a>
                </div>
            </div>
        </div>
    </section>

     <!-- contact Us -->

     <section id="contactus" class="p-5 bg-dark">
        <div class="container">
            <div class="row g-4">
                <div class="col-md">
                    <h2 class="text-center text-light mb-4">Contact Info</h2>
                    <ul class="list-group list-group-flush lead">
                        <li class="list-group-item bg-dark">
                            <span class="fw-bold text-light">Head Office</span>
                        </li>
                        <ul class="list-unstyled">
                        <li class="text-light">Rukan Indah Wisata</li>
                        <li class="text-light">Jl.Tebet Raya No.25c Tebet Timur, Tebet, Jakarta Selatan 12820</li>
                        </ul>
                    </ul>
                </div>
                <div class="col-md d-flex align-items-center">
                    <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.2597868107605!2d106.85044897455639!3d-6.229441693758702!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f39083d63cf5%3A0xedee1693ef793185!2sJl.%20Tebet%20Raya%20No.25c%2C%20RT.1%2FRW.2%2C%20Tebet%20Tim.%2C%20Kec.%20Tebet%2C%20Kota%20Jakarta%20Selatan%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2012820!5e0!3m2!1sid!2sid!4v1729400671428!5m2!1sid!2sid" width="400" height="250" style="border-radius:10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-md">
                    <h2 class="text-center text-light mb-4">Email Us</h2>
                    <form target="_blank" action="https://formsubmit.co/5026221126@student.its.ac.id" method="post">
                        <div class="mb-3">
                            <label for="Inputnama" class="form-label text-light">Nama</label>
                            <input type="nama" class="form-control" id="Inputnama" required name="nama">
                          </div>
                        <div class="mb-3">
                            <label for="InputEmail" class="form-label text-light">Alamat Email</label>
                            <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" required name="email">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                          </div>
                          <div class="mb-3">
                            <textarea cols="55" rows="3" name="pesan"></textarea>
                        </div>
                        <input type="hidden" name="_captcha" value="false">
                        <input type="hidden" name="_next" value="https://nurghulam04.github.io/terimakasih.html">
                        <button type="submit" class="btn btn-primary">Submit</button>

                    </form>
                </div>
            </div>
        </div>
     </section>

</body>
</html>
