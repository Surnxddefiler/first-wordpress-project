<footer class="d-flex footer justify-content-center flex-column align-items-center">
    <div class="mt-5 d-flex gap-3 align-items-center">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/footerLogo.png" alt="">
        <h1 class="text-white">
            <?php bloginfo('name') ?>
        </h1>
    </div>
    <div class="mt-3 d-flex gap-4 align-items-center">
        <i class="fa-brands fa-facebook-f" style="color: #ffffff;"></i>
        <i class="fa-brands fa-twitter" style="color: #ffffff;"></i>
        <i class="fa-brands fa-linkedin-in" style="color: #ffffff;"></i>
    </div>
    <nav class="d-flex align-items-center gap-2">
    <?php
            wp_nav_menu(
                array(
                    'container' => false,
                    'theme_location' => 'secondary',
                    'menu_class' => 'flex-wrap footerNav align-items-center gap-2 d-flex text-white',
                )
            );
            ?>
    </nav>
</footer>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.your-class').slick({
            infinite: true,
            speed: 500,
            fade: true,
            cssEase: 'linear',
            prevArrow: '<button style="background-color:transparent; border: 0" type="button" class="slick-prev position-absolute z-1 bottom-50 end-0"><i class="fa-solid fa-circle-right fa-2xl" style="color: #ffffff;"></i></button>',
            nextArrow: '<button style="background-color:transparent; border: 0" type="button" class="slick-prev position-absolute z-1 bottom-50 start-0"><i class="fa-solid fa-circle-left fa-2xl" style="color: #ffffff;"></i></button>'
        });
    });
</script>
</body>

</html>