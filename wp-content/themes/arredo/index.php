<?php get_header(); ?>

    <main>

        <section class="section section-intro bg-overlay" style="background-image: url(<?php echo get_field('main_image')['url']; ?>);">
            <h1>
                <?php the_field('main_heading'); ?>
            </h1>
        </section>

        <section class="section section-featured section-right">
            <div class="container-fluid">
                <div class="row">
                    <?php $image = get_field('about_image'); ?>
                    <?php if ($image): ?>
                    <div class="col-xs-12 col-md-12 col-lg-6 offset-section-left">
                        <div class="img img-wooden img-wooden-circle img-styling-right">
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        </div>
                    </div>
                    <?php endif; ?>
                    <div class="col-xs-12 col-md-12 col-lg-6 align-vertical">
                        <div class="content">
                            <h2><?php the_field('about_heading'); ?></h2>
                            <p><?php the_field('about_text'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php get_template_part('quote'); ?>

        <?php if (have_rows('objects')): ?>
        <?php $i = 0; ?>
        <?php while (have_rows('objects')) : the_row(); ?>
        <?php $className = ($i % 2 > 0)? ' section-left' : ' section-right'; ?>
        <section class="section section-simple<?php echo $className; ?>">
            <div class="container">
                <div class="row">
                    <?php if ($className == ' section-left'): ?>
                        <div class="col-xs-12 col-md-6 align-vertical">
                            <div class="content">
                                <h2><?php the_sub_field('heading'); ?></h2>
                                <p class="spaced"><?php the_sub_field('text'); ?></p>
                            </div>
                        </div>
                        <?php $image = get_sub_field('image'); ?>
                        <?php if ($image): ?>
                        <div class="col-xs-12 col-md-6">
                            <div class="img img-wooden img-styling-left">
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                            </div>
                        </div>
                        <?php endif; ?>
                    <?php else: ?>
                        <?php $image = get_sub_field('image'); ?>
                        <?php if ($image): ?>
                        <div class="col-xs-12 col-md-6">
                            <div class="img img-wooden img-styling-right">
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                            </div>
                        </div>
                        <?php endif; ?>
                        <div class="col-xs-12 col-md-6 align-vertical">
                            <div class="content">
                                <h2><?php the_sub_field('heading'); ?></h2>
                                <p class="spaced"><?php the_sub_field('text'); ?></p>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <?php $i++; ?>
        <?php endwhile; ?>
        <?php endif; ?>


        <section class="section section-gallery">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <div class="section-gallery-background big" style="background-image:url('<?php echo get_field('image_1')['url']; ?>');">
                            <a href="<?php the_field('image_1_link'); ?>"></a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <div class="section-gallery-background" style="background-image:url('<?php echo get_field('image_2')['url']; ?>');">
                            <a href="<?php the_field('image_2_link'); ?>"></a>
                        </div>
                        <div class="section-gallery-text img img-line bg-overlay" style="background-image:url('<?php echo get_field('quote_background', 'option')['url']; ?>');">
                            <a href="<?php the_field('heading_link'); ?>">
                                <h2><?php the_field('images_heading'); ?></h2>
                                <p class="spaced"><?php the_field('images_text'); ?></p>
                            </a>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-7">
                                <div class="section-gallery-background" style="background-image:url('<?php echo get_field('image_3')['url']; ?>');">
                                    <a href="<?php the_field('image_3_link'); ?>"></a>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-5">
                                <div class="section-gallery-background" style="background-image:url('<?php echo get_field('image_4')['url']; ?>');">
                                    <a href="<?php the_field('image_4_link'); ?>"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <?php get_template_part('cta'); ?>

    </main>


<?php get_footer(); ?>
