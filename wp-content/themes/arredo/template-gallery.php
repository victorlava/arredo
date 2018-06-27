<?php /* Template Name: Gallery Template */ get_header(); ?>

    <main>

		<?php $background = get_field('background'); ?>

        <section class="section section-heading section-heading-xs">

		    <div class="container">
		        <div class="row">
		            <div class="col-md-6">
		                <h1><?php the_field('heading'); ?></h1>
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
		        </div>
		    </div>

		</section>

        <?php if (have_rows('gallery')): ?>
        <?php while (have_rows('gallery')) : the_row(); ?>
        <?php   $vertical = get_sub_field('vertical');
                $position = get_sub_field('position');
                $image_1 = get_sub_field('image_1');
                $image_2 = get_sub_field('image_2');

                print_r($position);
                $verticalClass = ($vertical == 1)? ' section-vertical' : '';
                $positionClass = ($position == 0)? ' section-left' : ' section-right';
                $positionClass = ($vertical == 1)? '' : $positionClass;
        ?>
        <section class="section section-simple<?php echo $positionClass; ?><?php echo $verticalClass; ?>">
            <div class="container">
                <div class="row">
                    <?php if ($positionClass != ''): ?>
                    <?php if ($position == 0): ?>
                    <div class="col-xs-12 col-md-6 align-vertical">
                        <div class="content">
                            <h2>
                                <a href="<?php the_sub_field('link_1'); ?>"><?php echo the_sub_field('heading_1'); ?></a>
                            </h2>
                            <p class="spaced">
                                <?php echo the_sub_field('text_1'); ?>
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <div class="img img-line img-styling-right">
                              <img class="d-block w-100" src="<?php echo $image_1['url']; ?>" alt="<?php echo $image_1['alt']; ?>" />
                        </div>
                    </div>
                    <?php elseif ($position == 1): ?>
                        <div class="col-xs-12 col-md-6">
                            <div class="img img-line img-styling-right">
                                <img class="d-block w-100" src="<?php echo $image_1['url']; ?>" alt="<?php echo $image_1['alt']; ?>" />
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 align-vertical">
                            <div class="content">
                                <h2>
                                    <a href="<?php the_sub_field('link_1')?>"><?php echo the_sub_field('heading_1'); ?></a>
                                </h2>
                                <p class="spaced">
                                    <?php echo the_sub_field('text_1'); ?>
                                </p>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php else: ?>
                        <div class="col-xs-12 col-lg-6">
                            <div class="img img-line img-styling-bottom">
                                <img src="<?php echo $image_1['url']; ?>" alt="<?php echo $image_1['alt']; ?>" />
                            </div>
                            <div class="content">
                                <h2>
                                    <a href="<?php the_sub_field('link_1')?>">
                                        <?php echo the_sub_field('heading_1'); ?>
                                    </a>
                                </h2>
                                <p class="spaced">
                                    <?php echo the_sub_field('text_1'); ?>
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-lg-6">
                            <div class="content">
                                <h2>
                                    <a href="<?php the_sub_field('link_2')?>">
                                    <?php echo the_sub_field('heading_2'); ?>
                                    </a>
                                </h2>
                                <p class="spaced">
                                    <?php echo the_sub_field('text_2'); ?>
                                </p>
                            </div>
                            <div class="img img-line img-styling-top">
                                <img src="<?php echo $image_2['url']; ?>" alt="<?php echo $image_2['alt']; ?>" />
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <?php endwhile; ?>
        <?php endif; ?>




        <?php get_template_part('cta'); ?>

    </main>


<?php get_footer(); ?>
