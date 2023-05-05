<!--
Template Name: Home Page
-->
<?php get_header() ?>
<main>
    <section>
        <div>
            <div class="your-class position-relative">
                <?php if (have_rows('slider')): ?>
                    <?php while (have_rows('slider')):
                        the_row();
                        $img = get_sub_field('background');
                        $title = get_sub_field('title');
                        $text = get_sub_field('text');
                        ?>
                        <div style="position-relative">
                            <img class="slider w-100" src="<?php echo $img ?>" alt="">
                            <div style="" class="bottom w-50 position-absolute p-3 intro text-white block">
                                <h1 class="fs-1 ">
                                    <?php echo $title ?>
                                </h1>
                                <div class="">
                                    <?php echo $text ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <section class="mt-5 bg-white z-2">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center flex-wrap flex-md-row flex-column">
                <?php if (have_rows('repeater')): ?>
                    <?php while (have_rows('repeater')):
                        the_row();
                        $img = get_sub_field('image');
                        $text = get_sub_field('icontitle');
                        echo "<script>console.log('{$img}');</script>"; ?>
                        <div class="d-flex flex-column align-items-center">
                            <img src="<?php echo $img ?>" alt="">
                            <div class="text text-center fs-3 fw-bold">
                                <?php echo $text ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="text fs-4 mt-5 text-center">
                       <?php echo get_field( 'description_text' ) ?>
            </div>
        </div>

    </section>
    <section class="header mt-5 py-5 position-relative z-2">
        <img class="position-absolute bottom-0 end-0"
            src="<?php echo get_template_directory_uri(); ?>/assets/img/newsBackground.png" alt="">
        <div class="d-flex align-items-center">
            <div style="height: 20px; width:100px" class="bg-white"></div>
            <div style="width: 40px; height:40px; margin-left: -5px" class="bg-white rounded-circle"></div>
            <h1 class="text-white">LATEST NEWS</h1>
        </div>
        <div class="container">
            <div class="mt-4 d-flex justify-content-center flex-wrap gap-3">
                <?php
                $my_posts = get_posts([
                    'numberposts' => 3,
                    'post_type' => 'post',
                    'suppress_filters' => true, // suppression of filters of SQL query change
                ]);

                foreach ($my_posts as $post):
                    setup_postdata($post);
                    ?>
                    <div style="max-width: 400px; border-top-right-radius: 30px; border-bottom-left-radius: 30px;"
                        class="position-relative title flex-grow-0 flex-shrink-1 bg-white">
                        <h1 class="fs-4 p-4">
                            <?php the_title() ?>
                        </h1>
                        <div class="text px-4 pb-5 fs-5">
                            <?php the_excerpt() ?>
                        </div>
                        <a href="<?php the_permalink() ?>">
                            <div style="border-bottom-left-radius: 25px;"
                                class="text-white fs-4 text-decoration-none start-0 p-2 position-absolute bottom-0 w-100 intro border-0">
                                read more</div>
                        </a>
                    </div>
                    <?php
                endforeach;
                wp_reset_postdata(); // reset $post 
                ?>

            </div>
        </div>
    </section>
    <section class="marketplace py-5 position-relative">
        <img class="position-absolute bottom-0 start-0"
            src="<?php echo get_template_directory_uri(); ?>/assets/img/marketplaceBackground.png" alt="">
        <div class="d-flex align-items-center">
            <div style="height: 20px; width:100px" class="bg-white"></div>
            <div style="width: 40px; height:40px; margin-left: -5px" class="bg-white rounded-circle"></div>
            <h1 class="text-white">Marketplace</h1>
        </div>
        <div class="container">

            <div class="mt-4 d-flex justify-content-between flex-wrap row-gap-3">
                <?php
                $my_posts = get_posts([
                    'numberposts' => 3,
                    'post_type' => 'marketplaces',
                    'suppress_filters' => true, // suppression of filters of SQL query change
                ]); foreach ($my_posts as $post):
                    setup_postdata($post);
                    ?>
                    <div style="max-width: 500px; border-bottom-left-radius: 30px; border-top-right-radius: 30px;"
                        class="text flex-grow-0 z-2 flex-shrink-1 bg-white">
                        <a style="" href="<?php the_field('img') ?>" data-fancybox="gallery" data-caption="Caption #1">
                            <img style="height: 250px; border-top-right-radius: 30px;" class="w-100"
                                src="<?php the_field('img') ?>" alt="">
                        </a>
                        <h1 class="fs-4 p-4">
                            <?php the_title() ?>
                        </h1>
                        <div class="text px-4 pb-4 fs-5">
                            <?php the_excerpt() ?>
                        </div>
                        <a href="<?php the_permalink() ?>">
                            <button style="" class="p-3 button text-white border-0 mb-2 me-5 float-end">FIND OUT
                                MORE</button>
                        </a>
                    </div>
                    <?php
                endforeach;
                wp_reset_postdata(); // reset $post 
                ?>

            </div>
        </div>
    </section>
    <section class="mt-5">
        <div class="d-flex align-items-center">
            <div style="height: 20px; width:100px; background-color:#808285;"></div>
            <div style="width: 40px; height:40px; margin-left: -5px; background-color:#808285;" class="rounded-circle">
            </div>
            <h1 class="text">POLICY & REGULATION</h1>
        </div>
        <div class="container">
            <div class="mt-5 d-flex justify-content-center gap-4 flex-wrap">
                <?php if (have_rows('secondrepeater')): ?>
                    <?php while (have_rows('secondrepeater')):
                        the_row();
                        $img = get_sub_field('image');
                        $text = get_sub_field('text');
                        $title = get_sub_field('title');
                        ?>
                        <div style="max-width:400px" class="d-flex flex-column align-items-center">
                            <img src="<?php echo $img ?>" alt="">
                            <div class="text h-25 text-center fs-3 fw-bold">
                                <?php echo $title ?>
                            </div>
                            <div class="mt-4 text text-center fs-4">
                                <?php echo $text ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <section
        style="background: url('<?php echo get_template_directory_uri(); ?>/assets/img/formBackground.png') 0 0/100% 100% no-repeat;"
        class="mt-5 text">
        <div class="container pt-5">
            <?php echo do_shortcode('[contact-form-7 id="63" title="Контактная форма 1"]') ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>