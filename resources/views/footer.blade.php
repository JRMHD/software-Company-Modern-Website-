<section class="mail-section">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <div class="container">
        <div class="mail-section__inner wow fadeInUp">
            <div class="mail-section__shape-one" style="background-image: url(assets/images/shapes/mail-shape-1.png);">
            </div>

            <div class="mail-section__shape-two" style="background-image: url(assets/images/shapes/mail-shape-2.png);">
            </div>

            <div class="mail-section__shape-three" style="background-image: url(assets/images/shapes/mail-shape-3.png);">
            </div>

            <div class="mail-section__shape-four" style="background-image: url(assets/images/shapes/mail-shape-4.png);">
            </div>

            <div class="row">
                <div class="col-lg-5 col-xl-6">
                    <div class="mail-section__image">
                        <img src="assets/images/resources/mail-1-1.png" alt="Growim" />
                    </div>
                </div>

                <div class="col-lg-7 col-xl-6">
                    <div class="mail-section__form">
                        <h3 class="mail-section__form__title">
                            Subscribe To Our Newsletter!
                        </h3>

                        <form action="#" data-url="MAILCHIMP_FORM_URL" class="mc-form" id="newsletter-form">
                            <input type="text" name="EMAIL" placeholder="Enter Email Address" />
                            <button type="submit" class="flaticon-paper-plan">
                                <span class="sr-only">submit</span><!-- /.sr-only -->
                            </button>
                        </form>

                        <div id="loading"></div>
                        <div id="success-message"></div>

                        <style>
                            #loading {
                                display: none;
                                /* Hide initially */
                                width: 40px;
                                /* Increase size */
                                height: 40px;
                                /* Increase size */
                                border: 6px solid #007bff;
                                /* Thicker blue border */
                                border-top: 6px solid transparent;
                                /* Transparent top */
                                border-radius: 50%;
                                animation: spin 1s linear infinite;
                                /* Spin animation */
                                margin: 10px 0;
                                /* Add some margin */
                            }

                            @keyframes spin {
                                0% {
                                    transform: rotate(0deg);
                                }

                                100% {
                                    transform: rotate(360deg);
                                }
                            }

                            #success-message {
                                display: none;
                                /* Hide initially */
                                font-size: 16px;
                                color: white;
                                /* Change to white */
                                font-weight: bold;
                                /* Make the text bold */
                                margin-top: 10px;
                                /* Add some margin */
                            }
                        </style>

                        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                        <script>
                            $(document).ready(function() {
                                $('#newsletter-form').on('submit', function(e) {
                                    e.preventDefault(); // Prevent the default form submission

                                    // Show loading indicator
                                    $('#loading').show();

                                    // Clear previous success message
                                    $('#success-message').hide();

                                    // Get the email value
                                    var email = $('input[name="EMAIL"]').val();

                                    // AJAX request to subscribe
                                    $.ajax({
                                        url: '/subscribe', // Adjust this to your actual route
                                        type: 'POST',
                                        data: {
                                            EMAIL: email,
                                            _token: '{{ csrf_token() }}' // Include CSRF token for Laravel
                                        },
                                        success: function(response) {
                                            // Hide loading indicator
                                            $('#loading').hide();

                                            // Show success message
                                            $('#success-message').text(response.message).show();
                                            $('input[name="EMAIL"]').val(''); // Clear input field
                                        },
                                        error: function(xhr) {
                                            // Hide loading indicator
                                            $('#loading').hide();

                                            // Handle validation errors
                                            var errors = xhr.responseJSON.errors;
                                            if (errors) {
                                                alert(errors.EMAIL[0]); // Show the first error message
                                            } else {
                                                alert('An error occurred. Please try again.');
                                            }
                                        }
                                    });
                                });
                            });
                        </script>


                        <!-- /. mc-form -->

                        <div class="mc-form__response"></div>
                        <!-- /.mc-form__response -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="main-footer">
    <div class="main-footer__bg" style="background-image: url(assets/images/shapes/footer-bg-1-1.png)"></div>

    <div class="main-footer__shape" style="background-image: url(assets/images/shapes/footer-1-shape-1.png);">
    </div>
    <!-- /.main-footer__bg -->

    <div class="main-footer__top">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xl-4">
                    <div class="footer-widget footer-widget--about">
                        <a href="index.html" class="footer-widget__logo">
                            <img src="assets/images/logo-light.png" width="160" alt="Growim HTML Template" />
                        </a>

                        <p class="footer-widget__text">
                            Providing tailored solutions for Kenyan businesses to thrive in the digital landscape.
                        </p>

                        <a class="growim-btn growim-btn--white" href="contact.html">
                            <span class="growim-btn__text">Contact Us</span>
                            <span class="growim-btn__icon"><i class="flaticon-up-right-arrow"></i></span>
                        </a>

                        <div class="footer-widget__social">
                            <p class="footer-widget__social__text">Follow on</p>

                            <a href="https://facebook.com/">
                                <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                <span class="sr-only">Facebook</span>
                            </a>

                            <a href="https://twitter.com/">
                                <i class="fab fa-twitter" aria-hidden="true"></i>
                                <span class="sr-only">Twitter</span>
                            </a>

                            <a href="https://www.linkedin.com/">
                                <i class="fab fa-linkedin-in" aria-hidden="true"></i>
                                <span class="sr-only">LinkedIn</span>
                            </a>

                            <a href="https://youtube.com/">
                                <i class="fab fa-youtube" aria-hidden="true"></i>
                                <span class="sr-only">YouTube</span>
                            </a>
                        </div>
                        <!-- /.footer-widget__social -->
                    </div>
                    <!-- /.footer-widget -->
                </div>
                <!-- /.col-md-6 -->

                <div class="col-md-6 col-xl-2">
                    <div class="footer-widget">
                        <h2 class="footer-widget__title">Quick Links</h2>
                        <!-- /.footer-widget__title -->

                        <ul class="list-unstyled footer-widget__links">
                            <li><a href="about">About Us</a></li>
                            <li><a href="contact">Contact Us</a></li>
                            <li><a href="services">Blog & News</a></li>
                            <li><a href="faq">FAQs</a></li>

                        </ul>
                        <!-- /.list-unstyled footer-widget__links -->
                    </div>
                    <!-- /.footer-widget -->
                </div>
                <!-- /.col-md-6 -->

                <div class="col-md-6 col-xl-2">
                    <div class="footer-widget footer-widget--links">
                        <h2 class="footer-widget__title">Our Services</h2>
                        <!-- /.footer-widget__title -->

                        <ul class="list-unstyled footer-widget__links">
                            <li><a href="services">Digital Marketing</a></li>
                            <li><a href="services">Web Development</a></li>
                            <li><a href="services">SEO Optimization</a></li>
                            <li><a href="services">App Development</a></li>
                            <li><a href="services">Email Marketing</a></li>
                        </ul>
                        <!-- /.list-unstyled footer-widget__links -->
                    </div>
                    <!-- /.footer-widget -->
                </div>
                <!-- /.col-md-6 -->

                <div class="col-md-6 col-xl-4">
                    <div class="footer-widget footer-widget--contact">
                        <h2 class="footer-widget__title">Contact Us</h2>
                        <!-- /.footer-widget__title -->

                        <ul class="list-unstyled footer-widget__info">
                            <li>
                                <i class="flaticon-pin"></i>Kenya, Nairobi, Lavington
                            </li>

                            <li>
                                <i class="flaticon-phone"></i><a href="tel:+254700000000">+254 712 787744</a>
                            </li>
                            <li>
                                <i class="flaticon-phone"></i><a href="tel:+254700000000">+254 706 378245</a>
                            </li>

                            <li>
                                <i class="flaticon-email"></i><a
                                    href="mailto:info@inficoreHub.com">info@inficoreHub.com</a>
                            </li>
                        </ul>
                        <!-- /.list-unstyled -->
                    </div>
                    <!-- /.footer-widget -->
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.main-footer__top -->

    <div class="main-footer__bottom">
        <div class="container">
            <div class="main-footer__bottom__inner">
                <p class="main-footer__copyright">
                    &copy; Copyright <span class="dynamic-year"></span> InficoreHub
                </p>

                <ul class="main-footer__bottom__menu">
                    <li><a href="checkout">Terms & Conditions</a></li>
                    <li><a href="contact">Privacy Policy</a></li>
                </ul>
            </div>
            <!-- /.main-footer__inner -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.main-footer__bottom -->
</footer>
<!-- /.main-footer -->
</div>
<!-- /.page-wrapper -->

<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <!-- /.mobile-nav__overlay -->

    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

        <div class="logo-box">
            <a href="index.html" aria-label="logo image"><img src="assets/images/logo-light.png" width="155"
                    alt="" /></a>
        </div>
        <!-- /.logo-box -->

        <div class="mobile-nav__container"></div>
        <!-- /.mobile-nav__container -->

        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <i class="fa fa-envelope"></i>
                <a href="mailto:info@inficorehub.com">info@inficorehub.com</a>
            </li>

            <li>
                <i class="fa fa-phone-alt"></i>
                <a href="tel:+254700000000">+254 712 787744</a>
            </li>
            <li>
                <i class="fa fa-phone-alt"></i>
                <a href="tel:+254700000000">+254 706 378245</a>
            </li>
        </ul>
        <!-- /.mobile-nav__contact -->

        <div class="mobile-nav__social">
            <a href="https://facebook.com/">
                <i class="fab fa-facebook-f" aria-hidden="true"></i>
                <span class="sr-only">Facebook</span>
            </a>

            <a href="https://twitter.com/">
                <i class="fab fa-twitter" aria-hidden="true"></i>
                <span class="sr-only">Twitter</span>
            </a>

            <a href="https://www.linkedin.com/">
                <i class="fab fa-linkedin-in" aria-hidden="true"></i>
                <span class="sr-only">LinkedIn</span>
            </a>

            <a href="https://youtube.com/">
                <i class="fab fa-youtube" aria-hidden="true"></i>
                <span class="sr-only">YouTube</span>
            </a>
        </div>
        <!-- /.mobile-nav__social -->
    </div>
    <!-- /.mobile-nav__content -->
</div>
<!-- /.mobile-nav__wrapper -->
