<section class="section section-quote" style="background-image:url(<?php echo get_field('quote_background', 'option')['url']; ?>);">
    <div class="container">
        <div class="row">
            <blockquote class="quote">
                <h3 class="title"><?php the_field('quote_text', 'option'); ?></h3>
                <cite><?php the_field('quote_author', 'option'); ?></cite>
            </blockquote>
        </div>
    </div>
</section>
