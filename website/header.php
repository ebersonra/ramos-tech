<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <link rel="icon" href="<?php echo esc_url(wp_upload_dir()['baseurl'] . '/2025/01/cropped-ICONE-1.png'); ?>" type="image/x-icon">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    
    <!-- Header -->
    <header>
        <div class="container header-container">
            <div class="logo">
                <?php 
                $custom_logo_id = get_theme_mod('custom_logo');
                $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
                if ($logo): ?>
                    <img src="<?php echo esc_url($logo[0]); ?>" alt="<?php echo get_bloginfo('name'); ?>">
                <?php else: ?>
                    <img src="<?php echo content_url(); ?>/uploads/2025/01/LOGO-6.png" alt="Instituto Sélavie">
                <?php endif; ?>
            </div>
            <nav class="nav-menu">
                <a href="<?php echo home_url(); ?>" class="nav-link">Home</a>
                <a href="#about" class="nav-link">Quem Somos</a>
                <a href="#services" class="nav-link">Tratamentos</a>
                <a href="#testimonials" class="nav-link">Depoimentos</a>
                <a href="#contact" class="nav-link">Contato</a>
            </nav>
            <a href="<?php echo get_field('whatsapp_link', 'option') ?: '#'; ?>" class="header-cta">Fale com um especialista</a>
        </div>
    </header>
</body>
</html> 