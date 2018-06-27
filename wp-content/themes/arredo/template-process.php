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
		        <div class="heading-column background"
				style="background-image:url(<?php echo $background['url']; ?>);">

		        </div>

		        <div class="heading-column">

		        </div>

		        <div class="heading-column heading-reverse">
		            <div class="heading-row background"
					style="background-image:url(<?php echo $background['url']; ?>);">

		            </div>
		            <div class="heading-row">

		            </div>
		            <div class="heading-row background"
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
                                <div class="carousel-item<?php echo $className; ?>">
                                  <img class="d-block w-100" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
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
                            <h2>Medžiagos</h2>
                            <p class="spaced">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
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
