<?php /* Template Name: Contact Template */ get_header(); ?>

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


        <section class="section section-contact">
            <div class="contact-wrapper">
                <?php $image = get_field('contact_image'); ?>
                <?php if ($image): ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                <?php endif; ?>
                <div class="address-wrapper">
                    <div class="address img img-line img-styling-top">
                        <h3><?php the_field('contact_heading_1'); ?></h3>

                        <?php if (have_rows('contact_information_1')): ?>
                        <ul class="contacts">
                            <?php while (have_rows('contact_information_1')) : the_row(); ?>
                            <li>
                                <a href="<?php the_sub_field('link'); ?>">
                                    <?php the_sub_field('text'); ?>
                                </a>
                            </li>
                            <?php endwhile; ?>
                        </ul>
                        <?php endif; ?>
                    </div>

                    <div class="address img img-line img-styling-top">
                        <h3><?php the_field('contact_heading_2'); ?></h3>
                        <ul class="contacts">
                            <li>
                                <a href="#">vardenis@aredodeko.lt</a>
                            </li>
                            <li>
                                <a href="#">+370 123 45678 </a>
                            </li>
                            <li>
                                <a href="#">linkedin: v_pavardenis</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div></div>
            <div class="contact-box"
                style="background-image:url(<?php echo $background['url']; ?>);">
                <h2>Kontaktai</h2>
                <div>
                    <h4><?php the_field('contact_heading_3'); ?></h4>
                    <ul class="contacts">
                        <li>
                            <a href="#">vardenis@aredodeko.lt</a>
                        </li>
                        <li>
                            <a href="#">+370 123 45678 </a>
                        </li>
                        <li>
                            <a href="#">linkedin: v_pavardenis</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h4><?php the_field('contact_heading_4'); ?></h4>
                    <ul class="contacts">
                        <li>
                            <a href="#">vardenis@aredodeko.lt</a>
                        </li>
                        <li>
                            <a href="#">+370 123 45678 </a>
                        </li>
                        <li>
                            <a href="#">linkedin: v_pavardenis</a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <?php get_template_part('quote'); ?>


    </main>


<?php get_footer(); ?>
