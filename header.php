<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logoipsum</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <?php wp_head() ?>
</head>

<body>
    <header>
        <div class="header">
            <div class="container d-flex p-2 justify-content-between align-items-center">
                <div class="d-flex gap-3">
                    <i class="fa-brands fa-facebook-f" style="color: #ffffff;"></i>
                    <i class="fa-brands fa-twitter" style="color: #ffffff;"></i>
                    <i class="fa-brands fa-linkedin-in" style="color: #ffffff;"></i>
                </div>
                <div class="d-flex gap-3 me-5 text-white">
                    <span class="">Join</span>
                    <span class="">Login</span>
                </div>
            </div>
        </div>
        <div class="py-4 container justify-content-between d-flex align-items-center">
            <div class="d-flex align-items-center gap-3">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="">
                <span class="fs-2 title fw-bold">
                    <?php bloginfo('name') ?>
                </span>
            </div>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <div class="navbar-nav">
                            <?php wp_nav_menu(
                                array(
                                    'container' => false,
                                    'theme_location' => 'primary',
                                    'menu_class' => 'nav d-flex nav align-items-center gap-2',
                                )
                            ); ?>
                        </div>
                    </div>
                </div>
            </nav>


        </div>
    </header>