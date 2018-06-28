<?php get_header(); ?>

    <?php $background = get_field('background'); ?>
    <main>

        <section class="section section-heading section-heading-xs">

            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1><?php the_title(); ?></h1>
                    </div>
                </div>
            </div>

            <div class="heading-flex">
                <div class="heading-column background bg-overlay"
                style="background-image:url(<?php echo $background['url']; ?>);">

                </div>

                <div class="heading-column">

                </div>

                <div class="heading-column heading-reverse">
                    <div class="heading-row background bg-overlay"
                    style="background-image:url(<?php echo $background['url']; ?>);">

                    </div>
                </div>
            </div>

        </section>


        <section class="section section-simple section-left">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-6 align-vertical">
                        <div class="content">
                            <h3 class="sub-title"><?php the_field('sub_heading'); ?></h3>
                            <h2><?php the_field('heading'); ?></h2>
                            <p class="spaced">
                                <?php the_field('description'); ?>
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <?php $image = get_field('image'); ?>
                        <?php if ($image): ?>
                        <div class="img img-line img-styling-left">
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>

        <?php if (have_rows('gallery')): ?>
        <section class="section section-images">
            <div class="container">
                <div class="row">
                    <?php while (have_rows('gallery')) : the_row(); ?>
                    <?php $image = get_sub_field('image'); ?>
                    <div class="col-sm-6 col-md-3">
                        <a href="#">
                            <div class="background lightbox" data-mfp-src="<?php echo $image['url']; ?>" style="background-image:url(<?php echo $image['url']; ?>);">
                            </div>
                        </a>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </section>
        <?php endif; ?>



        <?php get_template_part('cta'); ?>

    </main>

    <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery('.lightbox').magnificPopup({type:'image'});
        });
    </script>

<?php get_footer(); ?>
