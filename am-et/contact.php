<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        /* Default size for desktop */
        .logo {
            max-width: 100px;
        }

        /* Media query for mobile devices */
        @media (max-width: 768px) {
            .logo {
                max-width: 80px;
            }
        }

        .form-control.is-invalid {
            border-color: #dc3545;
        }

        .form-control.is-valid {
            border-color: #198754;
        }
    </style>
    <meta charset="utf-8">
    <title>ሐረር ብድርና ቁጠባ ተቋም አ.ማ.</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Inter:slnt,wght@-10..0,100..900&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" href="lib/animate/animate.min.css" />
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="scss/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/snowflake.css">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <!--tab icon  -->
    <link rel="icon" type="image/png" href="img/logo.png" />
    <!-- Start WOWSlider.com HEAD section -->
    <link rel="stylesheet" type="text/css" href="engine1/style.css" />
    <script type="text/javascript" src="engine1/jquery.js"></script>
    <!-- End WOWSlider.com HEAD section -->
    <meta content="microfinance, loans, savings, Harar, Ethiopia, financial services" name="keywords">
    <meta content="Harar Microfinance Institute S.C. provides financial services including loans, savings, and Islamic products in Ethiopia." name="description">

</head>

<body>


    <!-- Topbar Start -->

    <div class="container-fluid nav-bar px-0 px-lg-1 py-lg-0">
        <div class="container">
            <nav style="padding: 0px" class="navbar navbar-expand-lg navbar-light">
                <!-- Logo and Institution Name aligned left -->
                <a href="#" class="d-flex align-items-center">
                    <img class="logo" src="img/logotrasparent.png" loading="lazy" alt="Logo" />

                    <h4 class="text-primary text-uppercase fw-bold px-lg-1 py-lg-1 mb-0 text-center ms-2">
                        ሐረር ብድርና ቁጠባ <br />
                        ተቋም አ.ማ.
                    </h4>
                </a>

                <!-- Toggle button for mobile view -->
                <button style="padding: 1px; border: none" class="navbar-toggler" type="button"
                    data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>

                <!-- Navbar Links aligned to the right -->
                <div class="collapse navbar-collapse ms-auto" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="index.html" class="nav-item nav-link  ">መነሻ</a>
                        <a href="about.html" class="nav-item nav-link ">ስለ ተቋሙ</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">ምርትና አገልግሎቶች</a>
                            <div class="dropdown-menu">
                                <a href="saving.html" class="dropdown-item">ቁጠባ</a>
                                <a href="loan.html" class="dropdown-item">ብድር</a>
                                <a href="islamic.html" class="dropdown-item ">ከወለድ ነፃ</a>
                            </div>
                        </div>
                        <a href="contact.php" class="nav-item nav-link">ያግኙን </a>


                        <div class="dropdown ms-3">
                            <a href="#" class="dropdown-toggle text-dark" data-bs-toggle="dropdown">
                                <small> <span id="selected-lang">አማርኛ</span></small>
                            </a>
                            <div class="dropdown-menu rounded">

                                <a href="/index.html" class="dropdown-item"
                                    onclick="changeLanguage('English')">English</a>
                                <!-- <a href="/ao-et/index.html" class="dropdown-item"
                                    onclick="changeLanguage('Afaan Oromo')">Afaan Oromo</a>
                                <a href="/hr-et/index.html" class="dropdown-item"
                                    onclick="changeLanguage('ሐረሪ ሲናን')">ሐረሪ ሲናን</a> -->
                            </div>
                        </div>
                        <script>
                            function changeLanguage(language) {

                                document.getElementById('selected-lang').textContent = language;
                            }
                        </script>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar & Hero Start -->

    <div class="container-fluid nav-bar px-0 px-lg-1 py-lg-0">
        <div class="container">
            <nav style="padding: 0px" class="navbar navbar-expand-lg navbar-light">
                <!-- Logo and Institution Name aligned left -->
                <a href="#" class="d-flex align-items-center">
                    <img class="logo" src="img/logotrasparent.png" loading="lazy" alt="Harar Microfinance Institute Logo" />
                    <h4 class="text-primary text-uppercase fw-bold px-lg-1 py-lg-1 mb-0 text-center ms-2">
                        Harar Microfinance <br />
                        Institution S.C.
                    </h4>
                </a>

                <!-- Toggle button for mobile view -->
                <button style="padding: 1px; border: none" class="navbar-toggler" type="button"
                    data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>

                <!-- Navbar Links aligned to the right -->
                <div class="collapse navbar-collapse ms-auto" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="index.html" class="nav-item nav-link ">Home</a>
                        <a href="about.html" class="nav-item nav-link">About</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Products &
                                Services</a>
                            <div class="dropdown-menu">
                                <a href="saving.html" class="dropdown-item">Saving Products</a>
                                <a href="loan.html" class="dropdown-item">Loan Products</a>
                                <a href="islamic.html" class="dropdown-item ">Islamic Products</a>
                            </div>
                        </div>
                        <a href="contact.php" class="nav-item nav-link  active">Contact Us</a>

                    </div>
                </div>
            </nav>
        </div>
    </div>

    <!-- Navbar & Hero End -->


    <!-- Header Start -->


    <!-- Header End -->


    <!-- Contact Start -->
    <div class="container-fluid contact bg-light py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="display-4 text-primary">ያግኙን</h4>
                <h1 class="display-4 mb-4">ሃሳብዎን ያካፍሉን</h1>
            </div>
            <div class="row g-5">
                <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="row g-4 mb-4">
                        <div class="col-md-3 col-lg-3 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="contact-add-item">
                                <div class="contact-icon text-primary mb-4">
                                    <i class="fas fa-map-marker-alt fa-2x"></i>
                                </div>
                                <div>
                                    <h4>አድራሻ</h4>
                                    <p class="mb-5">ሐረር ,ኢትዮጵያ</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-lg-3 wow fadeInUp" data-wow-delay="0.6s">
                            <div class="contact-add-item">
                                <div class="contact-icon text-primary mb-4">
                                    <i class="fa fa-phone-alt fa-2x"></i>
                                </div>
                                <div>
                                    <h4>ስልክh4>
                                        <p class="mb-0">+251-256-663745</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 wow fadeInUp" data-wow-delay="0.6s">
                            <div class="contact-add-item">
                                <div class="contact-icon text-primary mb-4">
                                    <i class="fas fa-envelope fa-2x"></i>
                                </div>
                                <div>
                                    <h4>ኢ-ሜይል
                                    </h4>
                                    <p class="mb-0">ContactCenter@Hararmfi.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contact-img d-flex justify-content-center">
                        <div class="contact-img-inner">
                            <img src="img/contacus.jpg" loading="lazy" class="img-fluid w-100" alt="Image">
                        </div>
                    </div>



                </div>
                <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.4s">
                    <div>
                        <h4 class="text-primary">መልዕክቶን ይላኩ</h4>
                        <!-- Success/Error Message Display -->
                        <!-- Display Success or Error Messages Here -->
                        <?php if (isset($_GET['success']) && $_GET['success'] == 'true'): ?>
                            <div class="alert alert-success">እናመሰግናለን!</div>
                        <?php elseif (isset($_GET['error']) && $_GET['error'] == 'true'): ?>
                            <div class="alert alert-danger">ድጋሚ ይሞክሩ </div>
                        <?php endif; ?>
                        <form id="contactForm" action="send.php" method="post" class="needs-validation" novalidate>
                            <div class="row g-3">
                                <!-- Name Field -->
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                                        <label for="name">ስም <span style="color:red">*</span></label>
                                        <div class="invalid-feedback">እባክዎ ስምዎን ያስገቡ </div>
                                    </div>
                                </div>
                                <!-- Email Field -->
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
                                        <label for="email">ኢመይል<span style="color:red">*</span></label>
                                        <div class="invalid-feedback">እባክዎ ስበትክክል ኢሜይሎትን ያስገቡ</div>
                                    </div>
                                </div>
                                <!-- Subject Field -->
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                                        <label for="subject">ርዕሰ ጉዳይ</label>
                                    </div>
                                </div>
                                <!-- Message Field -->
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" id="message" name="message" placeholder="Leave a message here" style="height: 200px" required></textarea>
                                        <label for="message">መልእክት<span style="color:red">*</span></label>
                                        <div class="invalid-feedback">እባክዎ መልዕክቶን ያስቅምጡ</div>
                                    </div>
                                </div>
                                <!-- Submit Button -->
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary w-100 py-3">መልዕክት ላክ</button>
                                </div>
                            </div>
                        </form>






                    </div>
                </div>
                <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script> -->
                <script>
                    // Bootstrap Validation
                    (function() {
                        'use strict';
                        var forms = document.querySelectorAll('.needs-validation');
                        Array.prototype.slice.call(forms).forEach(function(form) {
                            form.addEventListener('submit', function(event) {
                                if (!form.checkValidity()) {
                                    event.preventDefault();
                                    event.stopPropagation();
                                }
                                form.classList.add('was-validated');
                            }, false);
                        });
                    })();
                </script>
            </div>
            <div class="row g-5 ">
                <div class="col-12 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="rounded">
                        <iframe class="rounded w-100 py-3 px-3"
                            style="height: 400px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1968.618406946123!2d42.12451493969717!3d9.312273015806987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1631bdb91ace6319%3A0x1ad25cb41c4e8ac6!2sOriental%20Studio%20harar!5e0!3m2!1sen!2set!4v1725891413837!5m2!1sen!2set"
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
    <!-- Footer Start -->
    <!-- Footer Start -->
    <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
        <div class="container py-5 border-start-0 border-end-0"
            style="border: 1px solid; border-color: rgb(255, 255, 255, 0.08)">
            <div class="row g-5">
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="footer-item">
                        <div class="footer-item" style="margin: 0 auto 0 auto">
                            <div class="text-center">

                                <img class="logo" loading="lazy" src="img/logotrasparent.png" style="max-width: 100px"
                                    alt="Logo" />
                            </div>
                            <h4 class="text-primary text-uppercase fw-bold px-lg-1 py-lg-1 mb-0 text-center">
                                <br />ሐረር ብድርና ቁጠባ <br />ተቋም አ.ማ
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class=" text-white container footer-item">

                        <h4 class="text-white mb-4">ምርትና አገልግሎቶች</h4>
                        <a href="saving.html"><i class="fas fa-angle-right me-2"></i> ቁጠባ </a>
                        <a href="loan.html"><i class="fas fa-angle-right me-2"></i> ብድር</a>
                        <a href="islamic.html"><i class="fas fa-angle-right me-2"></i> ከወለድ ነጻ</a>
                        <a href="index.html#faq"><i class="fas fa-angle-right me-2"></i> ጥያቀዎች</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="footer-item">
                        <div class="container">
                            <h4 class="text-white mb-4">አድራሻ</h4>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-map-marker-alt text-primary me-3"></i>
                                <p class="text-white mb-0">ሐረር ,ኢትዮጵያ </p>
                            </div>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-envelope text-primary me-3"></i>
                                <p class="text-white mb-0">ContactCenter@Hararmfi.com</p>
                            </div>
                            <div class="d-flex align-items-center">
                                <i class="fa fa-phone-alt text-primary me-3"></i>
                                <p class="text-white mb-0">0256663745 , 0256664078</p>
                            </div>

                            <div class="d-flex">
                                <br />
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3"
                                    href="https://www.facebook.com/people/Harar-MicroFinance-Institution/61565622741044/"><i
                                        class="fab fa-facebook-f text-white"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3"
                                    href="https://x.com/hararmfi/"><i class="fab fa-twitter text-white"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-0"
                                    href="https://www.linkedin.com/in/harar-microfinance-institution-s-c-420141329/"><i
                                        class="fab fa-linkedin-in text-white"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row g-4 align-items-center text-center">
                <span class=" text-white">&copy; 2024 ሐብቁተ</span>
            </div>
        </div>
    </div>
    <!-- Copyright End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>


</body>

</html>