<?php
$cookieFooterDisplayClass = !empty($_COOKIE['cookiesApproved']) ? 'd-none' : 'd-block';
?>
<div id="cookie-footer" class="row cookie-footer p-2 <?= $cookieFooterDisplayClass ?>">
    <div class="col text-center">
        Az oldalon történő böngészéssel elfogadja, hogy a személyre szabott tartalom érdekében az oldal cookie-kat használ.
        Adatkezelési tájékoztatónkat
        <a href="cookie-tajekoztato.php"><span style="text-decoration: underline; font-weight: bold;">Itt</span> olvashatja.</a>
        <button type="button" class="btn btn-primary cookie-button" onclick="cookiesApproved(); return false;">Értem</button>
    </div>
</div>
<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
    <div class="footer-legal">
        <div class="container">

            <div class="row justify-content-between">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    <div class="copyright">
                        © <strong><span>Borpatika1986</span></strong><br /> Minden jog fenntartva
                    </div>

                    <div class="credits">
                        <!-- All the links in the footer should remain intact. -->
                        <!-- You can delete the links only if you purchased the pro version. -->
                        <!-- Licensing information: https://bootstrapmade.com/license/ -->
                        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
                        <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="social-links mb-3 mb-lg-0 text-center text-md-end">
                        <a href="https://twitter.com/borpatika1986" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="https://www.facebook.com/borpatikus" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="https://www.instagram.com/b0rpatika" class="instagram"><i class="bi bi-instagram"></i></a>
                        <!-- <a href="https://www.tiktok.com/@borpatika19861" class="instagram"><i class="bi bi-tiktok"></i></a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>