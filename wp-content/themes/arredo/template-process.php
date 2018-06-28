<?php /* Template Name: Process Template */ get_header(); ?>

    <main>

		<?php $background = get_field('background'); ?>

		<section class="section section-heading">

		    <div class="container">
		        <div class="row">
		            <div class="col-md-6">
		                <h1><?php the_title(); ?></h1>
						<?php the_field('description'); ?>
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
		            <div class="heading-row">

		            </div>
		            <div class="heading-row background bg-overlay"
					style="background-image:url(<?php echo $background['url']; ?>);">

		            </div>
		        </div>
		    </div>

		</section>


		<section class="section section-carousel section-right">
            <div class="container">
                <div class="row">
					<?php if (have_rows('carousel_images')): ?>
                    <div class="col-xs-12 col-md-6">
                        <div class="img">
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                              <div class="carousel-inner">
								<?php $i = 0; ?>
								<?php while (have_rows('carousel_images')) : the_row(); ?>
								<?php $image = get_sub_field('image'); ?>
								<?php $className = ($i == 0)? ' active': ''; ?>
                                <div class="carousel-item<?php echo $className; ?>" style="background-image:url('<?php echo $image['url']; ?>');">
                                </div>
								<?php $i++; ?>
								<?php endwhile; ?>
                              </div>
                              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              </a>
                              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              </a>
                            </div>
                        </div>
                    </div>
					<?php endif; ?>
                    <div class="col-xs-12 col-md-6 align-vertical">
                        <div class="content">
                            <h2><?php the_field('carousel_heading'); ?></h2>
                            <p class="spaced">
                                <?php the_field('carousel_description'); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php if (have_rows('objects')): ?>
        <?php $i = 0; ?>
        <?php while (have_rows('objects')) : the_row(); ?>
        <?php $className = ($i % 2 > 0)? ' section-right' : ' section-left'; ?>
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

		<?php if (have_rows('gallery')): ?>
        <section class="section section-images">
            <div class="container">
				<div class="row">
                    <div class="col-12">
                        <h2><?php the_field('gallery_heading'); ?></h2>
                    </div>
                </div>
                <div class="row">
                    <?php while (have_rows('gallery')) : the_row(); ?>
                    <?php $image = get_sub_field('image'); ?>
                    <div class="col-sm-6 col-md-3">
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </section>
        <?php endif; ?>

        <?php get_template_part('cta'); ?>

    </main>


<?php get_footer(); ?>
