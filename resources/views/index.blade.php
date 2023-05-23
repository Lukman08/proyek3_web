<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Talkdent</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('guest/img/logo.png') }}" rel="icon">
    <link href="{{ asset('guest/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('guest/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('guest/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('guest/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('guest/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('guest/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('guest/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('guest/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('guest/css/style.css') }}" rel="stylesheet">

    <!-- Tautan CSS DataTables -->
    <link rel="stylesheet" type="text/css" href="{{ asset('datatable/datatables.min.css') }}">

    <!-- =======================================================
  * Template Name: Arsha - v4.11.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            {{-- <h1 class="logo me-auto"><a href="#">Arsha</a></h1> --}}
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="#" class="logo me-auto"><img src="{{ asset('guest/img/logo.png') }}" alt="" class="img-fluid"></a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
                    {{-- <li><a class="nav-link   scrollto" href="#portfolio">Portfolio</a></li> --}}
                    {{-- <li><a class="nav-link scrollto" href="#contact">Contact</a></li> --}}
                    <li><a class="nav-link scrollto" href="#services">Diagnosa</a></li>
                    <li><a class="nav-link scrollto" href="#team">Info Penyakit</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1>Hai Sobat Talkdent, mari konsultasikan penyakit gigi anda segera!</h1>
                    <h2>Jagalah kesehtan gigi anda, karena gigi merupakan salahsatu organ paling penting yang kita
                        gunakan.</h2>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="#about" class="btn-get-started scrollto">Bergabung Sekarang --></a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{ asset('guest/img/about.png') }}" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Tentang</h2>
                    <p>Sudahkan anda memeriksakan kondisi kesehatan pada gigi anda secara rutin?
                        Jagalah kesehatan gigi anda, karena gigi merupakan prgan penting bagi kita.
                        Talkdent hadir untuk memberikan solusi bagi sobat yang ingin melakukan
                        pemeriksaan penyakit gigi secara mandiri, dan dapat dilakukan dimana
                        saja. Talkdent atau Sistem Pakar Diagnosa Penyakit Gigi adalah sebuah
                        aplikasi konsultasi yang dibuat untuk membantu para sobat mendiagnosa
                        secara dini penyakit gigi yang anda alami dengan mandiri berdasarkan gejala yang dirasakan.
                        Disini anda dapat melihat informasi berbagai
                        penyakit gigi yang biasa dialami dan tentunnya dapat melakukan
                        diagnosa secara mandiri yang disertai dengan informasi pencegahan
                        atau penangan awal berdasarkan penyakit gigi yang dialami.</p>
                </div>

                <div class="row content">
                    <div class="col-lg-6">
                        <p>"Talkdent Dental Clinic Klinik terbaik, terbesar, terbaru, di kota Jatibarang Indramayu.
                            Terdiri dari dokter gigi dan dokter gigi spesialis berpengalaman, trampil dan profesional.
                            Layanan perawatan gigi, estetika gigi."
                        </p>
                        <ul>
                            <li><i class="ri-check-double-line"></i> Treatment bleaching untuk menghempaskan noda
                                kekuningan dan pulihkan cerah gigi.</li>
                            <li><i class="ri-check-double-line"></i> Treatment veneer untuk membuat tekstur gigi rata
                                dan tidak bernoda.</li>
                            <li><i class="ri-check-double-line"></i> Scaling akan membantu membersihkan dan mengangkat
                                karang gigi yang sudah menumpul.</li>
                            <li><i class="ri-check-double-line"></i> Implan gigi merupakan metode penanaman akar gigi
                                buatan ke dalam rahang sebagai pondasi gigi pengganti.</li>
                            <li><i class="ri-check-double-line"></i> Veneer biasanya digunakan untuk memperbaiki gigi
                                yang berubah warna,patah,rusak,tidak sejajar,tidak rata,tidak teratur bentuknya,atau
                                yang memiliki celah.</li>
                            <li><i class="ri-check-double-line"></i> Penggunaan behel bertujuan agar gigi tumbuh
                                ditempat yang semestinya, selain itu pemakai behel juga dapat melaraskan struktur gigi.
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 d-flex align-items-stretch">
                        <div class="info">
                            <div class="address mb-3">
                                <h4>Lokasi:</h4>
                                <p>Jl Raya Bulak No.14, Bulak, Kec. Jatibarang, Kabupaten Indramayu, Jawa Barat 45273
                                </p>
                            </div>

                            <div class="phone mb-3">
                                <h4>Telepon:</h4>
                                <p>0812-2010-9191</p>
                            </div>

                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.362267119907!2d108.3097006153718!3d-6.475715865118641!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6ec78adc432d9f%3A0x6e4f0a22c19955cc!2sTalkdent%20Dental%20Clinic!5e0!3m2!1sen!2sid!4v1678236679338!5m2!1sen!2sid"
                                frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Diagnosa</h2>
                    <p>Daftar hasil diagnosa yang dilakukan pasien.</p>
                </div>

                <div class="row">
                  <div class="container">
                    <table id="myTable" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <!-- Tambahkan kolom-kolom lain sesuai kebutuhan -->
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Tambahkan data-data dari loop atau sumber data lainnya -->
                        </tbody>
                    </table>
                </div>

                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Info Penyakit Pada Gigi</h2>
                    <p>Lihat beberapa informasi seputar penyakit gigi.</p>
                </div>

                <div class="row">

                    <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="{{ asset('guest/img/penyakit/pulpitis.png') }}"
                                    class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Pulpitis</h4>
                                <!-- <span>Chief Executive Officer</span> -->
                                <p>Pulpitis adalah kondisi inflamasi atau peradangan pada pulpa gigi yang merupakan
                                    jaringan lunak di dalam gigi yang mengandung saraf dan pembuluh darah.</p>
                                <a href="https://www.google.com/search?q=Pulpitis&oq=Pulpitis&aqs=chrome..69i57j69i59j0i512j0i131i433i512j0i512j69i61j69i60j69i61.1007j0j7&sourceid=chrome&ie=UTF-8"
                                    target="_blank">Lihat selengkapnya.</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="{{ asset('guest/img/penyakit/karies.png') }}"
                                    class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Karies</h4>
                                <!-- <span>Product Manager</span> -->
                                <p>Karies atau kerusakan gigi adalah kondisi di mana lapisan keras luar (enamel) pada
                                    gigi mengalami pengikisan dan membusuk akibat adanya aktivitas bakteri di dalam
                                    mulut.</p>
                                <a href="https://www.google.com/search?q=Karies&oq=Karies&aqs=chrome..69i57j0i433i512j0i131i433i512j0i512l7.894j0j9&sourceid=chrome&ie=UTF-8"
                                    target="_blank">Lihat selengkapnya.</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="300">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="{{ asset('guest/img/penyakit/gingivitis.png') }}"
                                    class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Gingivitis</h4>
                                <!-- <span>CTO</span> -->
                                <p>Gingivitis adalah kondisi peradangan pada gusi yang disebabkan oleh penumpukan plak
                                    pada gigi dan gusi</p>
                                <a href="https://www.google.com/search?q=Gingivitis&oq=Gingivitis&aqs=chrome..69i57j0i512l9.574j0j9&sourceid=chrome&ie=UTF-8"
                                    target="_blank">Lihat selengkapnya.</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="400">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="{{ asset('guest/img/penyakit/periodontitis.png') }}"
                                    class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Periodontitis</h4>
                                <!-- <span>Accountant</span> -->
                                <p>Periodontitis adalah kondisi peradangan pada jaringan pendukung gigi yang lebih
                                    serius dibandingkan gingivitis.</p>
                                <a href="https://www.google.com/search?q=Periodontitis&oq=Periodontitis&aqs=chrome..69i57j0i512l9.1519j0j9&sourceid=chrome&ie=UTF-8"
                                    target="_blank">Lihat selengkapnya.</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="300">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="{{ asset('guest/img/penyakit/stomatitis.png') }}"
                                    class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Stomatitis</h4>
                                <!-- <span>CTO</span> -->
                                <p>Stomatitis adalah kondisi inflamasi pada selaput lendir di dalam mulut yang biasanya
                                    disebabkan oleh infeksi bakteri, virus, atau jamur, atau dapat pula disebabkan oleh
                                    kondisi medis yang lebih serius.</p>
                                <a href="https://www.google.com/search?q=Stomatitis&oq=Stomatitis&aqs=chrome..69i57j0i512l9.911j0j9&sourceid=chrome&ie=UTF-8"
                                    target="_blank">Lihat selengkapnya.</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="400">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="{{ asset('guest/img/penyakit/lainnya.png') }}"
                                    class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Penyakit gigi lainnya</h4>
                                <!-- <span>Accountant</span> -->
                                <p>Selain penyakit gigi yang telah disebutkan seperti karies gigi, pulpitis, gingivitis,
                                    dan periodontitis, masih ada banyak penyakit gigi lainnya yang dapat mempengaruhi
                                    kesehatan gigi dan mulut.</p>
                                
                                <a href="https://www.google.com/search?q=penyakit+gigi&oq=penyakit+gigi&aqs=chrome..69i57j0i13i512l6j69i60.3295j0j9&sourceid=chrome&ie=UTF-8"
                                    target="_blank">Lihat selengkapnya.</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Team Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>Talkdent</h3>
                        <p>
                            Jl Raya Bulak No.14, Bulak, <br>
                            Kec. Jatibarang, Kabupaten Indramayu, <br>
                            Jawa Barat 45273<br><br>
                            <strong>Phone:</strong> 0812-2010-9191<br>
                            {{-- <strong>Email:</strong> info@example.com<br> --}}
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Link</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#about">Tentang</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#services">Diagnosa</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#team">Info Penyakit</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Team</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="https://www.instagram.com/lukmanhkmz_/"
                                    target="_blank">Lukman Hakim</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="https://www.instagram.com/_ayuwyuni/"
                                    target="_blank">Sri Wahyuni</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="https://www.instagram.com/deafaradisa/"
                                    target="_blank">Dea Faradisa</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="https://www.instagram.com/spptrii/"
                                    target="_blank">Siti Putri Rohayati</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Sosial Media</h4>
                        <p>Kunjungi sosial media kami lainnya.</p>
                        <div class="social-links mt-3">
                            <!-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a> -->
                            <a href="https://www.facebook.com/senyumsehatsumringah/" target="_blank"
                                class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="https://www.instagram.com/klinikgigi_talkdent/?hl=id" target="_blank"
                                class="instagram"><i class="bx bxl-instagram"></i></a>
                            <!-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a> -->
                            <!-- <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> -->
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>Kelompok 5 Proyek 3</span></strong>. D4RPL3 2023
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
                Designed by <a href="https://bootstrapmade.com/" target="_blank">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('guest/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('guest/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('guest/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('guest/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('guest/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('guest/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('guest/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('guest/js/main.js') }}"></script>

</body>

</html>
