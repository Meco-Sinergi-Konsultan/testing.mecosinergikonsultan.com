<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Meco Sinergi Konsultan</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <?php
            include 'asset/navbar.php';
            ?>
            <div class="container-xxl py-5 hero-header bg-primary">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-12 text-center">
                            <h1 class="text-white animated slideInDown">Kontak Kami</h1>
                            <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Page Content -->
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-8">
                        <!-- Embedded Google Map -->
                        <iframe width="100%" height="500px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5611.121978023642!2d106.05921895474043!3d-6.040976404573245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e418e80bd80a375%3A0xefccdc40e8986d1c!2sJl.!5e0!3m2!1sen!2sid!4v1506654699282"></iframe>
                    </div>

                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                        <p class="section-title text-secondary">Kontak Kami<span></span></p>
                        <p>
                            <b>Kantor Pusat:</b><br>
                            Griya Cilegon Blok K1 No. 7
                            <br>Serang, Provinsi Banten 42426
                            <br>
                        </p>
                        <p>
                            <i class="fa fa-phone"></i> (0254) 8492040 <br>
                            <i class="fab fa-whatsapp"></i> 08114821114
                        </p>
                        <p>
                            <i class="fa fa-envelope"></i>
                            <a href="mailto:info@mecosinergikonsultan.com">info@mecosinergikonsultan.com
                            </a>
                        </p>
                        <p>
                            <b>Kantor Jabodetabek:</b><br>
                            <b class="text-secondary">Coming Soon</b>
                            <br>
                        </p>
                        <p>
                            <b>Kantor Jawa Timur:</b><br>
                            <b class="text-secondary">Coming Soon</b>
                            <br>
                        </p>
                        <p>
                            <b>Kantor Papua:</b><br>
                            Jl. Elang Blok C No. 63, Btn Skyline Indah,<br>
                            Kotaraja, Kel. Wai Mhorock,<br>
                            Kec. Abepura, Jayapura, Papua
                            <br>
                        </p>
                        <p>
                            <i class="fa fa-phone"></i> (0967) 5185466
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kontak Start -->
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="text-center mb-4">Kirimi Kami Pesan</h1>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="wow fadeInUp" data-wow-delay="0.3s">
                            <form name="sentMessage" id="contactForm" novalidate>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name" placeholder="Nama Lengkap">
                                            <label for="name">Nama Lengkap</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="phone" placeholder="Nomor Telepon">
                                            <label for="phone">Nomor Telepon</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email" placeholder="Email">
                                            <label for="email">Email</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Tinggalkan pesan di sini" id="message" style="height: 150px"></textarea>
                                            <label for="message">Pesan</label>
                                        </div>
                                    </div>
                                    <div id="success"></div>
                                    <!-- For success/fail messages -->
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">Kirim</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->


        <!-- Footer Start -->
        <?php
        include 'asset/footer.php';
        ?>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="js/contact_me.js"></script>
    <script src="js/jqBootstrapValidation.js"></script>

</body>

</html>