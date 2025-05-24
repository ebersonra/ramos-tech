<?php
/**
 * Template Name: Página Inicial Selavie
 */

get_header(); ?>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <div class="hero-content">
            <h1><?php echo get_field('hero_title') ?: 'Tratamento Humanizado para Dependência Química'; ?></h1>
            <p><?php echo get_field('hero_description') ?: 'O Instituto Sélavie oferece tratamentos personalizados em ambiente acolhedor, com equipe multidisciplinar especializada para recuperação efetiva e sustentável.'; ?></p>
            <a href="#cta-section" class="cta-button"><?php echo get_field('hero_button_text') ?: 'Iniciar recuperação agora'; ?></a>
        </div>
    </div>
    <div class="scroll-indicator">
        <i class="fas fa-chevron-down"></i>
    </div>
</section>

<!-- About Section -->
<section class="about" id="about">
    <div class="container">
        <div class="about-grid">
            <div class="about-image">
                <?php 
                $about_image = get_field('about_image');
                if ($about_image): ?>
                    <img src="<?php echo esc_url($about_image['url']); ?>" alt="<?php echo esc_attr($about_image['alt']); ?>">
                <?php endif; ?>
            </div>
            <div class="about-content">
                <h2><?php echo get_field('about_title') ?: 'Quem Somos'; ?></h2>
                <?php echo get_field('about_content'); ?>
                <a href="<?php echo get_field('about_link'); ?>" class="service-link"><?php echo get_field('about_link_text') ?: 'Conheça nossa história'; ?> <span>&rarr;</span></a>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="services" id="services">
    <div class="container">
        <div class="section-header">
            <h2><?php echo get_field('services_title') ?: 'Nossos Tratamentos'; ?></h2>
            <p><?php echo get_field('services_description'); ?></p>
        </div>
        <div class="services-grid">
            <?php if(have_rows('services')): while(have_rows('services')): the_row(); ?>
                <div class="service-card">
                    <div class="service-image">
                        <?php $image = get_sub_field('image'); ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                    </div>
                    <div class="service-content">
                        <h3><?php the_sub_field('title'); ?></h3>
                        <p><?php the_sub_field('description'); ?></p>
                        <a href="<?php the_sub_field('link'); ?>" class="service-link">Saiba mais <span>&rarr;</span></a>
                    </div>
                </div>
            <?php endwhile; endif; ?>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section" id="cta-section">
    <div class="container cta-container">
        <h2><?php echo get_field('cta_title') ?: 'Transforme sua vida hoje mesmo'; ?></h2>
        <p><?php echo get_field('cta_description'); ?></p>
        <div class="cta-buttons">
            <a href="<?php echo get_field('whatsapp_link') ?: 'https://wa.me/5541998558987?text=Olá,%20Instituto%20Selavie!%20Vim%20pelo%20site%20e%20gostaria%20de%20mais%20informações.'; ?>" target="_blank" class="cta-main"><?php echo get_field('cta_main_text') ?: 'Fale conosco no WhatsApp'; ?></a>
            <a href="<?php echo get_field('cta_secondary_link'); ?>" class="cta-secondary"><?php echo get_field('cta_secondary_text') ?: 'Conheça nossos planos'; ?></a>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="testimonials" id="testimonials">
    <div class="container">
        <div class="section-header">
            <h2><?php echo get_field('testimonials_title') ?: 'Depoimentos'; ?></h2>
            <p><?php echo get_field('testimonials_description'); ?></p>
        </div>
        <div class="testimonials-grid">
            <?php if(have_rows('testimonials')): while(have_rows('testimonials')): the_row(); ?>
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <p class="testimonial-text"><?php the_sub_field('text'); ?></p>
                        <div class="testimonial-author">
                            <div class="author-image">
                                <?php $author_image = get_sub_field('author_image'); ?>
                                <img src="<?php echo esc_url($author_image['url']); ?>" alt="<?php echo esc_attr($author_image['alt']); ?>">
                            </div>
                            <div class="author-info">
                                <h4><?php the_sub_field('author_name'); ?></h4>
                                <p><?php the_sub_field('author_title'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; endif; ?>
        </div>
    </div>
</section>

<!-- Floating WhatsApp Button -->
<a href="<?php echo get_field('whatsapp_link') ?: 'https://wa.me/5541998558987?text=Olá,%20Instituto%20Selavie!%20Vim%20pelo%20site%20e%20gostaria%20de%20mais%20informações.'; ?>" target="_blank" class="whatsapp-btn">
    <i class="fab fa-whatsapp fa-2x"></i>
</a>

<!-- Floating CTA -->
<a href="<?php echo get_field('floating_cta_link'); ?>" class="floating-cta"><?php echo get_field('floating_cta_text') ?: 'Fale conosco'; ?></a>

<?php get_footer(); ?> 