    <!-- Footer -->
    <footer id="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-about">
                    <?php 
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
                    if ($logo): ?>
                        <img src="<?php echo esc_url($logo[0]); ?>" alt="<?php echo get_bloginfo('name'); ?>" class="footer-logo">
                    <?php else: ?>
                        <img src="<?php echo content_url(); ?>/uploads/2025/01/LOGO-6.png" alt="Instituto Sélavie" class="footer-logo">
                    <?php endif; ?>
                    <p><?php echo get_field('footer_about_text', 'option') ?: 'O Instituto Sélavie é especializado no tratamento humanizado de dependência química, oferecendo suporte completo para recuperação efetiva e sustentável.'; ?></p>
                    <div class="social-links">
                        <?php if(get_field('facebook_link', 'option')): ?>
                            <a href="<?php echo get_field('facebook_link', 'option'); ?>" class="social-link" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <?php endif; ?>
                        <?php if(get_field('instagram_link', 'option')): ?>
                            <a href="<?php echo get_field('instagram_link', 'option'); ?>" class="social-link" target="_blank"><i class="fab fa-instagram"></i></a>
                        <?php endif; ?>
                        <?php if(get_field('youtube_link', 'option')): ?>
                            <a href="<?php echo get_field('youtube_link', 'option'); ?>" class="social-link" target="_blank"><i class="fab fa-youtube"></i></a>
                        <?php endif; ?>
                        <?php if(get_field('linkedin_link', 'option')): ?>
                            <a href="<?php echo get_field('linkedin_link', 'option'); ?>" class="social-link" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="footer-links-column">
                    <h3 class="footer-heading">Links Rápidos</h3>
                    <ul class="footer-links">
                        <li><a href="<?php echo home_url(); ?>">Página Inicial</a></li>
                        <li><a href="#about">Sobre Nós</a></li>
                        <li><a href="#services">Nossos Tratamentos</a></li>
                        <li><a href="#testimonials">Depoimentos</a></li>
                        <li><a href="#contact">Contato</a></li>
                    </ul>
                </div>
                <div class="footer-links-column">
                    <h3 class="footer-heading">Tratamentos</h3>
                    <ul class="footer-links">
                        <?php if(have_rows('services')): while(have_rows('services')): the_row(); ?>
                            <li><a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('title'); ?></a></li>
                        <?php endwhile; endif; ?>
                    </ul>
                </div>
                <div class="footer-links-column" id="contact">
                    <h3 class="footer-heading">Contato</h3>
                    <ul class="contact-info">
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <span class="contact-text"><?php echo get_field('address', 'option') ?: 'Av. Principal, 123 - São Paulo, SP'; ?></span>
                        </li>
                        <li>
                            <i class="fas fa-phone"></i>
                            <span class="contact-text"><?php echo get_field('phone', 'option') ?: '(11) 99999-9999'; ?></span>
                        </li>
                        <li>
                            <i class="fas fa-envelope"></i>
                            <span class="contact-text"><?php echo get_field('email', 'option') ?: 'contato@institutoselavie.com.br'; ?></span>
                        </li>
                        <li>
                            <i class="fas fa-clock"></i>
                            <span class="contact-text"><?php echo get_field('working_hours', 'option') ?: 'Atendimento 24 horas'; ?></span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

    <!-- Floating WhatsApp Button -->
    <?php if(get_field('whatsapp_link', 'option')): ?>
        <a href="<?php echo get_field('whatsapp_link', 'option'); ?>" target="_blank" class="whatsapp-btn">
            <i class="fab fa-whatsapp fa-2x"></i>
        </a>
    <?php endif; ?>

    <!-- Floating CTA -->
    <?php if(get_field('floating_cta_link', 'option') && get_field('floating_cta_text', 'option')): ?>
        <a href="<?php echo get_field('floating_cta_link', 'option'); ?>" class="floating-cta">
            <?php echo get_field('floating_cta_text', 'option'); ?>
        </a>
    <?php endif; ?>

    <?php wp_footer(); ?>
</body>
</html> 