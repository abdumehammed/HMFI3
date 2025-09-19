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
    <title>Harar Microfinance Institute S.C.</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script>
        function enableSubmitBtn() {
            document.getElementById("mySubmitBtn").disabled = false;

        }
    </script>


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

    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid topbar px-0 px-lg-4 bg-light py-2 d-none d-lg-block">
        <div class="container">
            <div class="row gx-0 align-items-center">
                <div class="col-lg-8 text-center text-start mb-lg-0">
                    <div class="d-flex flex-wrap">
                        <div class="border-end border-primary pe-3">
                            <a href="#" class="text-muted small"><i
                                    class="fas fa-map-marker-alt text-primary me-2"></i>Ethiopia,Harar</a>
                        </div>
                        <div class="ps-3">
                            <a href="tel:+251256663745" class="text-muted small"><i
                                    class="fas fa-fax text-primary me-2"></i>+251-256-663745</a>
                        </div>
                        <div class="ps-3">
                            <a href="mailto:example@gmail.com" class="text-muted small"><i
                                    class="fas fa-phone-alt text-primary me-2"></i>025 666
                                3745 ,025 666 4078</a>
                        </div>
                        <div class="ps-3">
                            <a href="mailto:ContactCenter@Hararmfi.com.et" class="text-muted small"><i
                                    class="fas fa-envelope text-primary me-2"></i>ContactCenter@Hararmfi.com.et</a>
                        </div>

                        <div class="ps-3">
                                 <a href="https://mail.ethionet.et/webmail/login/login.do" target="_blank" title="Webmail">
                                <img src="img/webmail_logo.png" alt="Webmail"
                                    style="height:14px;vertical-align:middle;">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-center text-lg-end">
                    <div class="d-flex justify-content-end">
                        <div class="d-flex border-end border-primary pe-3">
                            <a class="btn p-0 text-primary me-3" href="https://www.facebook.com/people/Harar-MicroFinance-Institution/61565622741044/"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn p-0 text-primary me-3" href="https://x.com/hararmfi/"><i class="fab fa-twitter"></i></a>
                            <a class="btn p-0 text-primary me-0" href="https://www.linkedin.com/in/harar-microfinance-institution-s-c-420141329/"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <!--                           <div class="dropdown ms-3">
                                <a href="#" class="dropdown-toggle text-dark" data-bs-toggle="dropdown"><small><i
                                            class="fas fa-globe-europe text-primary me-2"></i>
                                        English</small></a>
                                <div class="dropdown-menu rounded">
                                    <a href="#" class="dropdown-item">English</a>
                                    <a href="#" class="dropdown-item">አማርኛ</a>
                                    <a href="#" class="dropdown-item">Afaan Oromo</a>
                                    <a href="#" class="dropdown-item">ሐረሪ ሲናን</a>
                                </div>
                            </div> -->
                    </div>
                </div>
            </div>
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

    <!-- Modal Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center bg-primary">
                    <div class="input-group w-75 mx-auto d-flex">
                        <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                        <span id="search-icon-1" class="btn bg-light border nput-group-text p-3"><i class="fa fa-search"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Search End -->


    <!-- Header Start -->


    <!-- Header End -->


    <!-- Contact Start -->
    <div class="container-fluid contact bg-light py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="display-4 text-primary">Contact Us</h4>
                <h1 class="display-4 mb-4">We love hearing from you</h1>
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
                                    <h4>Address</h4>
                                    <p class="mb-5">Harar,Ethiopia</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-lg-3 wow fadeInUp" data-wow-delay="0.6s">
                            <div class="contact-add-item">
                                <div class="contact-icon text-primary mb-4">
                                    <i class="fa fa-phone-alt fa-2x"></i>
                                </div>
                                <div>
                                    <h4>Telephone</h4>
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
                                    <h4>E-Mail</h4>
                                    <p class="mb-0">ContactCenter@Hararmfi.com.et</p>
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
                        <h4 class="text-primary">Send Your Message</h4>
                        <!-- Success/Error Message Display -->
                        <!-- Display Success or Error Messages Here -->
                        <?php if (isset($_GET['success']) && $_GET['success'] == 'true'): ?>
                            <div class="alert alert-success">Thank you for Your feedback ,Your message has been sent successfully!</div>
                        <?php elseif (isset($_GET['error']) && $_GET['error'] == 'true'): ?>
                            <div class="alert alert-danger">There was an error sending your message. Please try again later.</div>
                        <?php endif; ?>
                        <form id="contactForm" action="send.php" method="post" class="needs-validation" novalidate>
                            <div class="row g-3">
                                <!-- Name Field -->
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                                        <label for="name">Your Name <span style="color:red">*</span></label>
                                        <div class="invalid-feedback">Please enter your name.</div>
                                    </div>
                                </div>
                                <!-- Email Field -->
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
                                        <label for="email">Your Email<span style="color:red">*</span></label>
                                        <div class="invalid-feedback">Please enter a valid email address.</div>
                                    </div>
                                </div>
                                <!-- Subject Field -->
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <!-- Message Field -->
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" id="message" name="message" placeholder="Leave a message here" style="height: 200px" required></textarea>
                                        <label for="message">Message<span style="color:red">*</span></label>
                                        <div class="invalid-feedback">Please leave a message.</div>
                                    </div>
                                </div>
                                <!-- Submit Button -->
                                <div class="g-recaptcha" data-sitekey="6Leo1aErAAAAAFdN5fX61HFqF8tKBrlLV5j-7cP1" data-callback="enableSubmitBtn"></div>
                                <div class="col-12">
                                    <button type="submit" id="mySubmitBtn" class="btn btn-primary w-100 py-3" disabled="disabled">Send Message</button>
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
    <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
        <div class="container py-5 border-start-0 border-end-0"
            style="border: 1px solid; border-color: rgb(255, 255, 255, 0.08)">
            <div class="row g-5">
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="footer-item">
                        <div class="footer-item" style="margin: 0 auto 0 auto">
                            <div class="text-center">
                                <img class="logo" src="img/logotrasparent.png" loading="lazy" alt="Logo" />
                            </div>
                            <h4 class="text-primary text-uppercase fw-bold px-lg-1 py-lg-1 mb-0 text-center">
                                <br />Harar Microfinance <br />Institution S.C.
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class=" text-white container footer-item">

                        <h4 class="text-white mb-4">Products & Services</h4>
                        <a href="saving.html"><i class="fas fa-angle-right me-2"></i> Saving Products </a>
                        <a href="loan.html"><i class="fas fa-angle-right me-2"></i> Loan Products</a>
                        <a href="islamic.html"><i class="fas fa-angle-right me-2"></i> Islamic Products</a>
                        <a href="index.html#faq"><i class="fas fa-angle-right me-2"></i> FAQ</a>


                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="footer-item">
                        <div class="container">
                            <h4 class="text-white mb-4">Contact Info</h4>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-map-marker-alt text-primary me-3"></i>
                                <p class="text-white mb-0">Harar , Ethiopia</p>
                            </div>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-envelope text-primary me-3"></i>
                                <p class="text-white mb-0">ContactCenter@Hararmfi.com.et</p>
                            </div>
                            <div class="d-flex align-items-center">
                                <i class="fa fa-phone-alt text-primary me-3"></i>
                                <p class="text-white mb-0">0256663745 , 0256664078</p>
                            </div>

                            <div class="d-flex">
                                <br />
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3" href="https://www.facebook.com/people/Harar-MicroFinance-Institution/61565622741044/"><i
                                        class="fab fa-facebook-f text-white"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3" href="https://x.com/hararmfi/"><i
                                        class="fab fa-twitter text-white"></i></a>

                                <a class="btn btn-primary btn-sm-square rounded-circle me-0" href="https://www.linkedin.com/in/harar-microfinance-institution-s-c-420141329/"><i
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
                <span class=" text-white">&copy; 2024 HMFI , All right reserved.</span>
            </div>
        </div>
    </div>
    <!-- Copyright End -->

    <!-- Back to Top -->
    <!-- <a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a> -->

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


    <!--Start of Tawk.to Script-->
    <!-- <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/6811eb2400e88619103f2de7/1iq2vt1rr';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script> -->
    <!--End of Tawk.to Script-->
</body>

</html>