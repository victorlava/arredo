<section class="section section-cta" style="background-image:url(<?php echo get_field('contact_section_background', 'option')['url']; ?>);">
    <div class="container">
        <div class="cta">
            <h3 class="title"><?php the_field('contact_section_text', 'option');?></h3>
            <a href="<?php the_field('contact_section_link', 'option'); ?>">
                <span class="arrow arrow-left"></span>
                <span class="btn btn-lg">Susiekite</span>
                <span class="arrow arrow-right"></span>
            </a>
        </div>
    </div>
</section>
