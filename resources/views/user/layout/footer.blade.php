<footer>
    <!-- Contact Section -->
    <section class="services-area services-padding bg-dark text-white">
        <div class="container text-center">
            <h2 style="color: white;"><a href="#">dipeshmishra.in</a></h2>
            <p style="color: white;">
                Entrepreneur | Youth Institution Builder | Empowerment Leader <br>
                Building India’s Youth Economy <br>
            </p>
        </div>
    </section>
    <!-- Footer Start-->
    <div class="footer-area">
        <div class="container">
            <div class="footer-top footer-padding">
                <div class="row justify-content-center">
                    <div class="col-lg-6" style="display: flex;justify-content:space-between;">
                        <div class="footer-top-cap text-left">
                            <ul>
                                <li class="m-3">
                                    <a href="{{ '/' }}">home</a>
                                </li>
                                <li class="m-3">
                                    <a href="{{ route('about.index') }}">About</a>
                                </li>

                            </ul>
                        </div>
                        <div class="footer-top-cap text-right">
                            <ul>
                                <li class="m-3">
                                    <a href="{{ route('services.index') }}">Services</a>
                                </li>
                                <li class="m-3">
                                    <a href="{{ route('contact.index') }}">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-xl-9 col-lg-8">
                        <div class="footer-copy-right">
                            <p style="color: white;">
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>
                                All rights reserved | This template is made
                                by <a href="https://colorlib.com" target="_blank">Rays It & Design World</a>
                            </p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4">
                        <!-- Footer Social -->
                        <div class="footer-social f-right">
                            <a class="text-white">Stay Connected</a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fas fa-globe"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
</footer>

<!-- Scroll Up -->
<div id="back-top">
    <a title="Go to Top" href="#">
        <i class="fas fa-level-up-alt"></i>
    </a>
</div>

<!-- JS here -->

<!-- Modernizr -->
<script src="{{ asset('user/assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>

<!-- Jquery, Popper, Bootstrap -->
<script src="{{ asset('user/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('user/assets/js/popper.min.js') }}"></script>
<script src="{{ asset('user/assets/js/bootstrap.min.js') }}"></script>

<!-- Jquery Mobile Menu -->
<script src="{{ asset('user/assets/js/jquery.slicknav.min.js') }}"></script>

<!-- Owl-Carousel, Slick -->
<script src="{{ asset('user/assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('user/assets/js/slick.min.js') }}"></script>

<!-- Animation -->
{{-- <script src="{{ asset('user/assets/js/wow.min.js') }}"></script> --}}
<script src="{{ asset('user/assets/js/animated.headline.js') }}"></script>
<script src="{{ asset('user/assets/js/jquery.magnific-popup.js') }}"></script>

<!-- Nice-select, sticky -->
<script src="{{ asset('user/assets/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('user/assets/js/jquery.sticky.js') }}"></script>

<!-- Contact JS -->
<script src="{{ asset('user/assets/js/contact.js') }}"></script>
<script src="{{ asset('user/assets/js/jquery.form.js') }}"></script>
<script src="{{ asset('user/assets/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('user/assets/js/mail-script.js') }}"></script>
<script src="{{ asset('user/assets/js/jquery.ajaxchimp.min.js') }}"></script>

<!-- Main JS -->
<script src="{{ asset('user/assets/js/plugins.js') }}"></script>
<script src="{{ asset('user/assets/js/main.js') }}"></script>

{{-- AOS(animation On Scroll ) JS --}}
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 1000, // animation speed
        easing: 'ease-in-out',
        once: true // animation only once
    });
</script>
{{-- ------------ AOS JS End ------------------------ --}}
<!-- WhatsApp Floating Button -->
<a href="https://wa.me/919876543210" class="whatsapp-float" target="_blank">
    <i class="fab fa-whatsapp"></i>
</a>
{{-- -----------typing effect -------------- --}}
<script>
    document.addEventListener("DOMContentLoaded", function() {

        const texts = [
            "Visionary Entrepreneur | Youth Institution Builder",
            "Founder & CEO – iYouth Pvt. Ltd.",
            "Founder & President – Chhattisgarh Youth Federation",
            "Founder – Chhattisgarh Youth Federation",
            "Founder & President – Chhattisgarh Adventure Sports Association"
        ];

        const speed = 70; // typing speed
        const eraseSpeed = 40; // deleting speed
        const delayBetween = 1500; // delay before deleting
        let textIndex = 0;
        let charIndex = 0;
        const typewriter = document.getElementById("typewriter");

        function type() {
            if (charIndex < texts[textIndex].length) {
                typewriter.innerHTML += texts[textIndex].charAt(charIndex);
                charIndex++;
                setTimeout(type, speed);
            } else {
                setTimeout(erase, delayBetween);
            }
        }

        function erase() {
            if (charIndex > 0) {
                typewriter.innerHTML = texts[textIndex].substring(0, charIndex - 1);
                charIndex--;
                setTimeout(erase, eraseSpeed);
            } else {
                textIndex++;
                if (textIndex >= texts.length) textIndex = 0;
                setTimeout(type, 500);
            }
        }

        type();
    });
</script>
</body>

</html>
