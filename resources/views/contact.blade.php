<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Contact Us | Inficorehub | Get in Touch for Web Development, IT Solutions & Digital Marketing</title>

    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />

    <!-- Meta Description for SEO -->
    <meta name="description"
        content="Contact Inficorehub for all your web development, software solutions, digital marketing, and IT support needs. We're here to help your business thrive. Reach out today to discuss your project requirements." />
    <meta name="keywords"
        content="Contact Inficorehub, web development, digital marketing agency Kenya, software solutions, IT support, customer service, project inquiry, business inquiries, Inficorehub phone, Inficorehub email" />
    <meta name="author" content="Inficorehub" />
    <meta name="robots" content="index, follow" />

    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="Contact Inficorehub | Web Development, Digital Marketing, IT Support" />
    <meta property="og:description"
        content="Get in touch with Inficorehub for all your web development, software, and digital marketing needs. Let’s discuss how we can help grow your business." />
    <meta property="og:image" content="assets/images/og-contact-page.png" />
    <meta property="og:url" content="https://www.inficorehub.com/contact" />
    <meta property="og:type" content="website" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Contact Us | Inficorehub | Reach Out for Digital Solutions" />
    <meta name="twitter:description"
        content="Contact Inficorehub for expert web development, digital marketing, and IT solutions. We’re here to support your business growth." />
    <meta name="twitter:image" content="assets/images/twitter-contact-page.png" />

    <!-- Fonts and Stylesheets -->
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&amp;display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-select/bootstrap-select.min.css" />
    <link rel="stylesheet" href="assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="assets/vendors/tiny-slider/tiny-slider.css" />
    <link rel="stylesheet" href="assets/vendors/tiny-slider/tiny-slider.css" />
    <link rel="stylesheet" href="assets/vendors/growim-icons/style.css" />
    <link rel="stylesheet" href="assets/vendors/slick/slick.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-flipster-master/jquery.flipster.min.css" />
    <link rel="stylesheet" href="assets/vendors/owl-carousel/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/vendors/owl-carousel/css/owl.theme.default.min.css" />

    <!-- Template Styles -->
    <link rel="stylesheet" href="assets/css/growim.css" />

</head>





<body class="custom-cursor">



    <div class="custom-cursor__cursor"></div>

    <div class="custom-cursor__cursor-two"></div>



    <div class="preloader">

        <div class="preloader__image" style="background-image: url(assets/images/loader.png);"></div>

    </div>

    <!-- /.preloader -->

    <div class="page-wrapper">
        @include('header')

        <section class="page-header">

            <div class="page-header__bg"></div>

            <!-- /.page-header__bg -->

            <div class="container">

                <h2 class="page-header__title">Contact Us</h2>

                <ul class="growim-breadcrumb list-unstyled">

                    <li><a href="/">Home</a></li>

                    <li><span>Contact Us</span></li>

                </ul><!-- /.thm-breadcrumb list-unstyled -->

            </div><!-- /.container -->

        </section><!-- /.page-header -->



        <section class="contact-two">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact-two__image">
                            <img src="assets/images/shapes/contact-page-1.png" alt="growim">
                            <div class="contact-two__image__video">
                                <img src="assets/images/resources/contact-page-video.jpg" alt="growim">
                                <a href="https://youtu.be/f5uECY3WxV8?feature=shared" class="video-popup">
                                    <span class="ripple"></span>
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                        </div>
                    </div><!-- /.col-lg-6 -->

                    <div class="col-lg-6">
                        <div class="contact-two__content">
                            <h3 class="contact-two__title">We'll respond to you in an hour.</h3>
                            <p class="contact-two__text">We Value You as a Customer</p>

                            <style>
                                .loader-container {
                                    display: none;
                                    position: fixed;
                                    top: 0;
                                    left: 0;
                                    width: 100%;
                                    height: 100%;
                                    background-color: rgba(0, 0, 0, 0.5);
                                    z-index: 9999;
                                    justify-content: center;
                                    align-items: center;
                                }

                                .loader {
                                    border: 5px solid #f3f3f3;
                                    border-top: 5px solid #3498db;
                                    border-radius: 50%;
                                    width: 50px;
                                    height: 50px;
                                    animation: spin 1s linear infinite;
                                }

                                @keyframes spin {
                                    0% {
                                        transform: rotate(0deg);
                                    }

                                    100% {
                                        transform: rotate(360deg);
                                    }
                                }

                                .message {
                                    padding: 10px;
                                    margin-top: 20px;
                                    border-radius: 5px;
                                    display: none;
                                }

                                .success {
                                    background-color: #d4edda;
                                    color: #155724;
                                }

                                .error {
                                    background-color: #f8d7da;
                                    color: #721c24;
                                }
                            </style>

                            <form id="contactForm"
                                class="contact-two__form contact-form-validated form-one wow fadeInUp"
                                data-wow-duration="1500ms">
                                @csrf
                                <h4 class="contact-two__form__title">Get In Touch</h4>
                                <div class="form-one__group">
                                    <div class="form-one__control">
                                        <input type="text" name="name" placeholder="Name" required>
                                    </div>
                                    <div class="form-one__control">
                                        <input type="email" name="email" placeholder="Email Address" required>
                                    </div>
                                    <div class="form-one__control">
                                        <input type="text" name="phone" placeholder="Phone Number" required>
                                    </div>
                                    <div class="form-one__control">
                                        <input type="text" name="subject" placeholder="Subject" required>
                                    </div>
                                    <div class="form-one__control form-one__control--full">
                                        <textarea name="message" placeholder="Write Message . . ." required></textarea>
                                    </div>
                                    <div class="form-one__control form-one__control--full">
                                        <button class="growim-btn" type="submit">
                                            <span class="growim-btn__text">Send Message</span>
                                            <span class="growim-btn__icon"><i
                                                    class="flaticon-up-right-arrow"></i></span>
                                        </button>
                                    </div>
                                </div>
                            </form>

                            <!-- Modern loader -->
                            <div id="loaderContainer" class="loader-container">
                                <div class="loader"></div>
                            </div>

                            <!-- Success message -->
                            <div id="successMessage" class="message success">Your message has been sent successfully!
                            </div>

                            <!-- Error message -->
                            <div id="errorMessage" class="message error">There was a problem sending your message.
                                Please try again.</div>

                            <script>
                                document.addEventListener('DOMContentLoaded', function() {
                                    const form = document.getElementById('contactForm');
                                    const loaderContainer = document.getElementById('loaderContainer');
                                    const successMessage = document.getElementById('successMessage');
                                    const errorMessage = document.getElementById('errorMessage');
                                    let isSubmitting = false;

                                    form.addEventListener('submit', function(e) {
                                        e.preventDefault();

                                        // Prevent double submission
                                        if (isSubmitting) {
                                            console.log('Form is already being submitted');
                                            return;
                                        }

                                        isSubmitting = true;

                                        // Hide any existing messages
                                        successMessage.style.display = 'none';
                                        errorMessage.style.display = 'none';

                                        // Show loading spinner
                                        loaderContainer.style.display = 'flex';

                                        // Simulate form submission
                                        setTimeout(() => {
                                            // Hide loading spinner
                                            loaderContainer.style.display = 'none';

                                            // Simulate successful submission
                                            successMessage.style.display = 'block';
                                            form.reset(); // Clear the form

                                            // Reset submission flag
                                            isSubmitting = false;
                                        }, 2000); // Simulate a 2-second process

                                        // Log form data (for debugging)
                                        const formData = new FormData(form);
                                        for (let [key, value] of formData.entries()) {
                                            console.log(key, value);
                                        }
                                    });
                                });
                            </script>
                        </div>
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.contact-two -->




        <section class="google-map">

            <div class="google-map__contact">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63821.19742895915!2d36.740349894853864!3d-1.2786446695377276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f19f7e205e1d1%3A0x8ec37f283d52eb04!2sLavington%2C%20Nairobi!5e0!3m2!1sen!2ske!4v1729009751464!5m2!1sen!2ske"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>


            <!-- /.google-map -->

            <div class="google-map__wrapper">

                <div class="container">

                    <div class="google-map__info">

                        <h3 class="google-map__info__title">Contact Info</h3>

                        <ul class="list-unstyled google-map__info__list">

                            <li><i class="flaticon-pin"></i>Kenya, Nairobi, Lavington</li>

                            <li><i class="flaticon-phone"></i><a href="tel:+61086660112">+254 712 787744</a></li>

                            <li><i class="flaticon-email"></i><a
                                    href="mailto:info@inficoreHub.com">info@inficoreHub.com</a></li>

                        </ul>

                    </div>

                </div>

            </div>

        </section><!-- /.google-map -->


        @include('footer')

        <!-- Sidebar One Start -->



        <a href="#" data-target="html" class="scroll-to-target scroll-to-top">

            <span class="scroll-to-top__text">back top</span>

            <span class="scroll-to-top__wrapper"><span class="scroll-to-top__inner"></span></span>

        </a>





        <script src="assets/vendors/jquery/jquery-3.7.0.min.js"></script>

        <script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>

        <script src="assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>

        <script src="assets/vendors/jarallax/jarallax.min.js"></script>

        <script src="assets/vendors/jquery-ui/jquery-ui.js"></script>

        <script src="assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>

        <script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script>

        <script src="assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>

        <script src="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>

        <script src="assets/vendors/jquery-validate/jquery.validate.min.js"></script>

        <script src="assets/vendors/nouislider/nouislider.min.js"></script>

        <script src="assets/vendors/tiny-slider/tiny-slider.js"></script>

        <script src="assets/vendors/wnumb/wNumb.min.js"></script>

        <script src="assets/vendors/owl-carousel/js/owl.carousel.min.js"></script>

        <script src="assets/vendors/wow/wow.js"></script>

        <script src="assets/vendors/imagesloaded/imagesloaded.min.js"></script>

        <script src="assets/vendors/isotope/isotope.js"></script>

        <script src="assets/vendors/slick/slick.min.js"></script>

        <script src="assets/vendors/jquery-flipster-master/jquery.flipster.min.js"></script>

        <script src="assets/vendors/countdown/countdown.min.js"></script>

        <script src="assets/vendors/jquery-circleType/jquery.circleType.js"></script>

        <script src="assets/vendors/jquery-lettering/jquery.lettering.min.js"></script>

        <!-- template js -->

        <script src="assets/js/growim.js"></script>

</body>


</html>
