<?php
    /*
        Template Name: LP Selavie
    */
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name');?> | <?php the_title(); ?></title>
    <link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style-selavie.css">    
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" href="<?php echo esc_url( wp_upload_dir()['baseurl'] . '/2025/01/cropped-ICONE-1.png' ); ?>" type="image/x-icon">

</head>
<body>

<!-- Header -->
<header>
    <div class="container header-container">
        <div class="logo">
            <img src="<?php echo content_url(); ?>/uploads/2025/01/LOGO-6.png" alt="Instituto Sélavie">
        </div>
        <nav class="nav-menu">
            <a href="#" class="nav-link">Home</a>
            <a href="#" class="nav-link">Quem Somos</a>
            <a href="#" class="nav-link">Tratamentos</a>
            <a href="#" class="nav-link">Equipe</a>
            <a href="#" class="nav-link">Blog</a>
            <a href="#" class="nav-link">Contato</a>
        </nav>
        <a href="#" class="header-cta">Fale com um especialista</a>
    </div>
</header>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <div class="hero-content">
            <h1>Tratamento Humanizado para Dependência Química</h1>
            <p>O Instituto Sélavie oferece tratamentos personalizados em ambiente acolhedor, com equipe multidisciplinar especializada para recuperação efetiva e sustentável.</p>
            <a href="#" class="cta-button">Iniciar recuperação agora</a>
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
                <img src="<?php echo content_url(); ?>/uploads/2025/04/banner_bruna_gabriela_selavie_01.png" alt="Instituto Sélavie">
            </div>
            <div class="about-content">
                <h2>Quem Somos</h2>
                <p>Fundado com o propósito de oferecer tratamento humanizado e eficaz para dependência química, o Instituto Sélavie integra métodos terapêuticos comprovados com acolhimento personalizado.</p>
                <p>Nossa abordagem multidisciplinar combina psicoterapia, terapia ocupacional, acompanhamento médico e nutricional, práticas integrativas e suporte familiar, visando a recuperação integral do paciente.</p>
                <a href="#" class="service-link">Conheça nossa história <span>&rarr;</span></a>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="services" id="services">
    <div class="container">
        <div class="section-header">
            <h2>Nossos Tratamentos</h2>
            <p>Desenvolvemos programas terapêuticos personalizados para cada paciente, considerando suas necessidades específicas e contexto individual.</p>
        </div>
        <div class="services-grid">
            <div class="service-card">
                <div class="service-image">
                    <img src="/api/placeholder/400/300" alt="Internação">
                </div>
                <div class="service-content">
                    <h3>Internação Voluntária</h3>
                    <p>Tratamento intensivo em ambiente acolhedor e seguro, com equipe presente 24 horas para suporte completo durante a recuperação.</p>
                    <a href="#" class="service-link">Saiba mais <span>&rarr;</span></a>
                </div>
            </div>
            <div class="service-card">
                <div class="service-image">
                    <img src="/api/placeholder/400/300" alt="Atendimento Ambulatorial">
                </div>
                <div class="service-content">
                    <h3>Atendimento Ambulatorial</h3>
                    <p>Acompanhamento terapêutico sem internação, ideal para quem precisa manter suas atividades diárias durante o tratamento.</p>
                    <a href="#" class="service-link">Saiba mais <span>&rarr;</span></a>
                </div>
            </div>
            <div class="service-card">
                <div class="service-image">
                    <img src="/api/placeholder/400/300" alt="Acompanhamento Familiar">
                </div>
                <div class="service-content">
                    <h3>Acompanhamento Familiar</h3>
                    <p>Suporte terapêutico para familiares, essencial para a recuperação sustentável do paciente e reconstrução dos vínculos afetivos.</p>
                    <a href="#" class="service-link">Saiba mais <span>&rarr;</span></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section" id="cta-section">
    <div class="container cta-container">
        <h2>Transforme sua vida hoje mesmo</h2>
        <p>Não espere mais para iniciar sua jornada de recuperação. Entre em contato agora e converse com nossa equipe especializada sobre as melhores opções de tratamento.</p>
        <div class="cta-buttons">
            <a href="#" class="cta-main">Fale conosco agora</a>
            <a href="#" class="cta-secondary">Conheça nossos planos</a>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="testimonials" id="testimonials">
    <div class="container">
        <div class="section-header">
            <h2>Depoimentos</h2>
            <p>Histórias reais de transformação e superação de pessoas que passaram pelo Instituto Sélavie.</p>
        </div>
        <div class="testimonials-grid">
            <div class="testimonial-card">
                <div class="testimonial-content">
                    <p class="testimonial-text">O tratamento no Instituto Sélavie mudou completamente minha vida. A equipe é extremamente preparada e acolhedora. Hoje estou há 2 anos sem recaídas e reconquistei minha família e meu emprego.</p>
                    <div class="testimonial-author">
                        <div class="author-image">
                            <img src="/api/placeholder/100/100" alt="Carlos M.">
                        </div>
                        <div class="author-info">
                            <h4>Carlos M.</h4>
                            <p>Paciente recuperado</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-card">
                <div class="testimonial-content">
                    <p class="testimonial-text">Como mãe, vi meu filho renascer após o tratamento. O suporte que recebemos durante todo o processo foi fundamental não só para ele, mas para toda a família aprender a lidar com a situação.</p>
                    <div class="testimonial-author">
                        <div class="author-image">
                            <img src="/api/placeholder/100/100" alt="Márcia P.">
                        </div>
                        <div class="author-info">
                            <h4>Márcia P.</h4>
                            <p>Familiar de paciente</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-card">
                <div class="testimonial-content">
                    <p class="testimonial-text">O diferencial do Sélavie é o tratamento humanizado. Não me senti apenas mais um paciente, mas alguém que realmente importava. As terapias são personalizadas e isso faz toda diferença na recuperação.</p>
                    <div class="testimonial-author">
                        <div class="author-image">
                            <img src="/api/placeholder/100/100" alt="Roberto S.">
                        </div>
                        <div class="author-info">
                            <h4>Roberto S.</h4>
                            <p>Paciente recuperado</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="footer-grid">
            <div class="footer-about">
                <img src="/api/placeholder/180/60" alt="Instituto Sélavie" class="footer-logo">
                <p>O Instituto Sélavie é especializado no tratamento humanizado de dependência química, oferecendo suporte completo para recuperação efetiva e sustentável.</p>
                <div class="social-links">
                    <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-youtube"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="footer-links-column">
                <h3 class="footer-heading">Links Rápidos</h3>
                <ul class="footer-links">
                    <li><a href="#">Página Inicial</a></li>
                    <li><a href="#">Sobre Nós</a></li>
                    <li><a href="#">Nossos Tratamentos</a></li>
                    <li><a href="#">Equipe</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contato</a></li>
                </ul>
            </div>
            <div class="footer-links-column">
                <h3 class="footer-heading">Tratamentos</h3>
                <ul class="footer-links">
                    <li><a href="#">Internação Voluntária</a></li>
                    <li><a href="#">Atendimento Ambulatorial</a></li>
                    <li><a href="#">Acompanhamento Familiar</a></li>
                    <li><a href="#">Terapias Integrativas</a></li>
                    <li><a href="#">Prevenção de Recaídas</a></li>
                </ul>
            </div>
            <div class="footer-links-column">
                <h3 class="footer-heading">Contato</h3>
                <ul class="contact-info">
                    <li>
                        <i class="fas fa-map-marker-alt"></i>
                        <span class="contact-text">Av. Principal, 123 - São Paulo, SP</span>
                    </li>
                    <li>
                        <i class="fas fa-phone"></i>
                        <span class="contact-text">(11) 99999-9999</span>
                    </li>
                    <li>
                        <i class="fas fa-envelope"></i>
                        <span class="contact-text">contato@institutoselavie.com.br</span>
                    </li>
                    <li>
                        <i class="fas fa-clock"></i>
                        <span class="contact-text">Atendimento 24 horas</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="copyright">
            <p>&copy; 2025 Instituto Sélavie. Todos os direitos reservados.</p>
        </div>
    </div>
</footer>

<!-- Floating WhatsApp Button -->
<a href="#" class="whatsapp-btn">
    <i class="fab fa-whatsapp fa-2x"></i>
</a>

<!-- Floating CTA -->
<a href="#" class="floating-cta">Fale conosco</a>

</body>
</html><?php
    /*
        Template Name: LP Selavie
    */
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name');?> | <?php the_title(); ?></title>
    <link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style-selavie.css">    
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

<!-- Header -->
<header>
    <div class="container header-container">
        <div class="logo">
            <img src="<?php echo content_url(); ?>/uploads/2025/01/LOGO-6.png" alt="Instituto Sélavie">
        </div>
        <nav class="nav-menu">
            <a href="#" class="nav-link">Home</a>
            <a href="#about" class="nav-link">Quem Somos</a>
            <a href="#services" class="nav-link">Tratamentos</a>
            <a href="#testimonials" class="nav-link">Depoimentos</a>
            <a href="#contact" class="nav-link">Contato</a>
        </nav>
        <a href="#" class="header-cta">Fale com um especialista</a>
    </div>
</header>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <div class="hero-content">
            <h1>Tratamento Humanizado para Dependência Química</h1>
            <p>O Instituto Sélavie oferece tratamentos personalizados em ambiente acolhedor, com equipe multidisciplinar especializada para recuperação efetiva e sustentável.</p>
            <a href="#" class="cta-button">Iniciar recuperação agora</a>
        </div>
    </div>
    <div class="scroll-indicator">
        <i class="fas fa-chevron-down"></i>
    </div>
</section>

<!-- About Section -->
<section class="about">
    <div class="container">
        <div class="about-grid">
            <div class="about-image">
                <img src="<?php echo content_url(); ?>/uploads/2025/04/banner_bruna_gabriela_selavie_01.png" alt="Instituto Sélavie">
            </div>
            <div class="about-content">
                <h2>Quem Somos</h2>
                <p>Fundado com o propósito de oferecer tratamento humanizado e eficaz para dependência química, o Instituto Sélavie integra métodos terapêuticos comprovados com acolhimento personalizado.</p>
                <p>Nossa abordagem multidisciplinar combina psicoterapia, terapia ocupacional, acompanhamento médico e nutricional, práticas integrativas e suporte familiar, visando a recuperação integral do paciente.</p>
                <a href="#" class="service-link">Conheça nossa história <span>&rarr;</span></a>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="services">
    <div class="container">
        <div class="section-header">
            <h2>Nossos Tratamentos</h2>
            <p>Desenvolvemos programas terapêuticos personalizados para cada paciente, considerando suas necessidades específicas e contexto individual.</p>
        </div>
        <div class="services-grid">
            <div class="service-card">
                <div class="service-image">
                    <img src="/api/placeholder/400/300" alt="Internação">
                </div>
                <div class="service-content">
                    <h3>Internação Voluntária</h3>
                    <p>Tratamento intensivo em ambiente acolhedor e seguro, com equipe presente 24 horas para suporte completo durante a recuperação.</p>
                    <a href="#" class="service-link">Saiba mais <span>&rarr;</span></a>
                </div>
            </div>
            <div class="service-card">
                <div class="service-image">
                    <img src="/api/placeholder/400/300" alt="Atendimento Ambulatorial">
                </div>
                <div class="service-content">
                    <h3>Atendimento Ambulatorial</h3>
                    <p>Acompanhamento terapêutico sem internação, ideal para quem precisa manter suas atividades diárias durante o tratamento.</p>
                    <a href="#" class="service-link">Saiba mais <span>&rarr;</span></a>
                </div>
            </div>
            <div class="service-card">
                <div class="service-image">
                    <img src="/api/placeholder/400/300" alt="Acompanhamento Familiar">
                </div>
                <div class="service-content">
                    <h3>Acompanhamento Familiar</h3>
                    <p>Suporte terapêutico para familiares, essencial para a recuperação sustentável do paciente e reconstrução dos vínculos afetivos.</p>
                    <a href="#" class="service-link">Saiba mais <span>&rarr;</span></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container cta-container">
        <h2>Transforme sua vida hoje mesmo</h2>
        <p>Não espere mais para iniciar sua jornada de recuperação. Entre em contato agora e converse com nossa equipe especializada sobre as melhores opções de tratamento.</p>
        <div class="cta-buttons">
            <a href="#" class="cta-main">Fale conosco agora</a>
            <a href="#" class="cta-secondary">Conheça nossos planos</a>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="testimonials">
    <div class="container">
        <div class="section-header">
            <h2>Depoimentos</h2>
            <p>Histórias reais de transformação e superação de pessoas que passaram pelo Instituto Sélavie.</p>
        </div>
        <div class="testimonials-grid">
            <div class="testimonial-card">
                <div class="testimonial-content">
                    <p class="testimonial-text">O tratamento no Instituto Sélavie mudou completamente minha vida. A equipe é extremamente preparada e acolhedora. Hoje estou há 2 anos sem recaídas e reconquistei minha família e meu emprego.</p>
                    <div class="testimonial-author">
                        <div class="author-image">
                            <img src="/api/placeholder/100/100" alt="Carlos M.">
                        </div>
                        <div class="author-info">
                            <h4>Carlos M.</h4>
                            <p>Paciente recuperado</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-card">
                <div class="testimonial-content">
                    <p class="testimonial-text">Como mãe, vi meu filho renascer após o tratamento. O suporte que recebemos durante todo o processo foi fundamental não só para ele, mas para toda a família aprender a lidar com a situação.</p>
                    <div class="testimonial-author">
                        <div class="author-image">
                            <img src="/api/placeholder/100/100" alt="Márcia P.">
                        </div>
                        <div class="author-info">
                            <h4>Márcia P.</h4>
                            <p>Familiar de paciente</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-card">
                <div class="testimonial-content">
                    <p class="testimonial-text">O diferencial do Sélavie é o tratamento humanizado. Não me senti apenas mais um paciente, mas alguém que realmente importava. As terapias são personalizadas e isso faz toda diferença na recuperação.</p>
                    <div class="testimonial-author">
                        <div class="author-image">
                            <img src="/api/placeholder/100/100" alt="Roberto S.">
                        </div>
                        <div class="author-info">
                            <h4>Roberto S.</h4>
                            <p>Paciente recuperado</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="footer-grid">
            <div class="footer-about">
                <img src="/api/placeholder/180/60" alt="Instituto Sélavie" class="footer-logo">
                <p>O Instituto Sélavie é especializado no tratamento humanizado de dependência química, oferecendo suporte completo para recuperação efetiva e sustentável.</p>
                <div class="social-links">
                    <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-youtube"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="footer-links-column">
                <h3 class="footer-heading">Links Rápidos</h3>
                <ul class="footer-links">
                    <li><a href="#">Página Inicial</a></li>
                    <li><a href="#">Sobre Nós</a></li>
                    <li><a href="#">Nossos Tratamentos</a></li>
                    <li><a href="#">Equipe</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contato</a></li>
                </ul>
            </div>
            <div class="footer-links-column">
                <h3 class="footer-heading">Tratamentos</h3>
                <ul class="footer-links">
                    <li><a href="#">Internação Voluntária</a></li>
                    <li><a href="#">Atendimento Ambulatorial</a></li>
                    <li><a href="#">Acompanhamento Familiar</a></li>
                    <li><a href="#">Terapias Integrativas</a></li>
                    <li><a href="#">Prevenção de Recaídas</a></li>
                </ul>
            </div>
            <div class="footer-links-column">
                <h3 class="footer-heading">Contato</h3>
                <ul class="contact-info">
                    <li>
                        <i class="fas fa-map-marker-alt"></i>
                        <span class="contact-text">Av. Principal, 123 - São Paulo, SP</span>
                    </li>
                    <li>
                        <i class="fas fa-phone"></i>
                        <span class="contact-text">(11) 99999-9999</span>
                    </li>
                    <li>
                        <i class="fas fa-envelope"></i>
                        <span class="contact-text">contato@institutoselavie.com.br</span>
                    </li>
                    <li>
                        <i class="fas fa-clock"></i>
                        <span class="contact-text">Atendimento 24 horas</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="copyright">
            <p>&copy; 2025 Instituto Sélavie. Todos os direitos reservados.</p>
        </div>
    </div>
</footer>

<!-- Floating WhatsApp Button -->
<a href="#" class="whatsapp-btn">
    <i class="fab fa-whatsapp fa-2x"></i>
</a>

<!-- Floating CTA -->
<a href="#" class="floating-cta">Fale conosco</a>

</body>
</html>