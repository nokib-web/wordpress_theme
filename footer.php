    <footer class="site-footer">
        <div class="footer-container">
            <div class="footer-columns">
                <div class="footer-col">
                    <h4>OPENING HOURS</h4>
                    <p>MONDAY &ndash; THURSDAY<br>16:00 &ndash; 23:00</p>
                    <p>FRIDAY &ndash; SATURDAY<br>4:00 PM &ndash; 11:30 PM</p>
                    <p>KITCHEN 10:00 PM</p>
                    <p>LAST ARRIVAL: 9:30 PM</p>
                </div>
                <div class="footer-col">
                    <h4>SOCIAL</h4>
                    <a href="#">&oplus; FACEBOOK</a>
                    <a href="#">&commat; INSTAGRAM</a>
                </div>
                <div class="footer-col">
                    <h4>MENU</h4>
                    <?php
                    if ( has_nav_menu( 'footer-menu' ) ) {
                        wp_nav_menu( array(
                            'theme_location' => 'footer-menu',
                            'container'      => false,
                            'items_wrap'     => '%3$s', // removes the <ul> wrapper
                        ) );
                    } else {
                    ?>
                        <a href="<?php echo home_url('/'); ?>">HOME</a>
                        <a href="<?php echo home_url('/#menu'); ?>">MENU</a>
                        <a href="<?php echo home_url('/about'); ?>">ABOUT LAMFUZ</a>
                        <a href="<?php echo home_url('/contact'); ?>">CONTACT</a>
                    <?php } ?>
                </div>
                <div class="footer-col">
                    <h4>ABOUT</h4>
                    <a href="<?php echo home_url('/about'); ?>">DISCOVER MORE FROM LAMFUZ</a>
                </div>
                <div class="footer-col">
                    <h4>CONTACT</h4>
                    <p>70 60 56 57</p>
                    <p>INFO@LAMFUZ.COM</p>
                    <p>TURESENSGADE 6, 1368,<br>COPENHAGEN K,<br>DENMARK</p>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="footer-bottom-links">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Cookie Policy</a>
                    <a href="#">&oplus; Find Smiley</a>
                </div>
                <div class="footer-copyright">
                    All rights reserved &copy; 2026 Lamfuz.dk | Powered by Blavora
                </div>
                <button class="back-to-top" id="backToTop" aria-label="Back to Top">
                    <svg viewBox="0 0 24 24" width="20" height="20">
                        <polyline points="18 15 12 9 6 15" fill="none" stroke="currentColor" stroke-width="2"></polyline>
                    </svg>
                </button>
            </div>
        </div>
    </footer>
    <!-- Google Translate Widget -->
    <div id="google_translate_element" style="display:none;"></div>
    <script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({pageLanguage: 'da', includedLanguages: 'da,en', autoDisplay: false}, 'google_translate_element');
    }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <?php wp_footer(); ?>
</body>
</html>


