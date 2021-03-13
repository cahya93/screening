    <!-- footer section start -->
    <div class="footer_section layout_padding">
        <div class="container">
            <div class="footer_section_2">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <h2 class="useful_text">Resources</h2>
                        <div class="footer_menu">
                            <ul>
                                <li><a href="#">What we do</a></li>
                                <li><a href="#">Media</a></li>
                                <li><a href="#">Travel Advice</a></li>
                                <li><a href="#">Protection</a></li>
                                <li><a href="#">Care</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <h2 class="useful_text">About</h2>
                        <p class="footer_text">Aplikasi ini dibuat dalam rangka pencegahan COVID-19 dilingkungan SMK Muhammadiyah. Oleh TIM Satgas COVID Muhka.</p>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <h2 class="useful_text">Contact Us</h2>
                        <div class="location_text">
                            <ul>
                                <li>
                                    <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <span class="padding_15">SMK Muh Karangmojo</span></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-phone" aria-hidden="true"></i>
                                        <span class="padding_15">(0274) 391939</span></a>
                                </li>
                                <!-- <li>
                                    <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        <span class="padding_15">official@smkmuhkarangmojo.sch.id</span></a>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <h2 class="useful_text">MAPS</h2>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7902.880108217903!2d110.68094099999999!3d-7.953393799999999!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7bb530e9c31da7%3A0x2c12be3b566e2d00!2sSMK%20Muhammadiyah%20Karangmojo!5e0!3m2!1sid!2sid!4v1615642111125!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        <!-- <div class="map_image"><img src="<?= base_url(); ?>/assets/fronted/images/map-bg.png"></div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer section end -->
    <!-- copyright section start -->
    <div class="copyright_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- <p class="copyright_text">© 2020 All Rights Reserved.<a href="https://html.design"> Free html Templates</a></p> -->
                    <p class="copyright_text">© 2020 All Rights Reserved.<a href="#"> SATGAS COVID-19 SMK Muhammadiyah Karangmojo</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- copyright section end -->
    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url(); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url(); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url(); ?>/assets/fronted/js/sb-admin-2.min.js"></script>
    <!-- Page level plugins -->
    <script src="<?= base_url(); ?>vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url(); ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?= base_url(); ?>/assets/fronted/js/datatables-demo.js"></script>
    <!-- Javascript files-->
    <script src="<?= base_url(); ?>/assets/fronted/js/jquery.min.js"></script>
    <script src="<?= base_url(); ?>/assets/fronted/js/popper.min.js"></script>
    <script src="<?= base_url(); ?>/assets/fronted/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>/assets/fronted/js/jquery-3.0.0.min.js"></script>
    <script src="<?= base_url(); ?>/assets/fronted/js/plugin.js"></script>
    <!-- sidebar -->
    <script src="<?= base_url(); ?>/assets/fronted/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?= base_url(); ?>/assets/fronted/js/custom.js"></script>
    <!-- javascript -->
    <script src="<?= base_url(); ?>/assets/fronted/js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });

            $(".zoom").hover(function() {

                $(this).addClass('transition');
            }, function() {

                $(this).removeClass('transition');
            });
        });
    </script>
    <script>
        function openNav() {
            document.getElementById("myNav").style.width = "100%";
        }

        function closeNav() {
            document.getElementById("myNav").style.width = "0%";
        }
    </script>
    </body>

    </html>