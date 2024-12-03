<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu Empresa de Programación</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <header class="hero">
        <nav class="navbar">
            <div class="logo">iDevs<span>Solutions</span></div>
            <ul class="nav-links">
                <li><a href="#about">Nosotros</a></li>
                <li><a href="#services">Servicios</a></li>
                <li><a href="#portfolio">Portafolio</a></li>
                <li><a href="#contact">Contacto</a></li>
            </ul>
        </nav>
        <div class="hero-content">
            <h1>Impulsamos tu negocio con tecnología</h1>
            <p>Ofrecemos soluciones innovadoras en desarrollo web, aplicaciones móviles y software personalizado.</p>
            <a href="#contact" class="btn">Contáctanos</a>
        </div>
    </header>

    <section id="about" class="about-section">
        <h2>¿Quiénes somos?</h2>
        <p>Somos una empresa de desarrollo tecnológico con pasión por la innovación. Ayudamos a las empresas a crecer digitalmente con soluciones eficientes y personalizadas.</p>
    </section>

    <section id="services" class="services-section">
        <h2>Nuestros servicios</h2>
        <div class="services-container">
            <div class="service-card">
                <h3>Desarrollo Web</h3>
                <p>Diseñamos y desarrollamos sitios web modernos, rápidos y seguros.</p>
            </div>
            <div class="service-card">
                <h3>Aplicaciones Móviles</h3>
                <p>Creamos aplicaciones móviles intuitivas para Android e iOS.</p>
            </div>
            <div class="service-card">
                <h3>Software a medida</h3>
                <p>Soluciones personalizadas para satisfacer tus necesidades específicas.</p>
            </div>
        </div>
    </section>

    <section id="portfolio" class="portfolio-section">
        <h2>Portafolio</h2>
        <p>Estos son algunos de los proyectos en los que hemos trabajado:</p>
        <div class="portfolio-container">
            <div class="portfolio-item">Proyecto 1</div>
            <div class="portfolio-item">Proyecto 2</div>
            <div class="portfolio-item">Proyecto 3</div>
            <div class="portfolio-item">Proyecto 4</div>
        </div>
    </section>

    <footer id="contact" class="footer-section">
        <h2>Contáctanos</h2>
        <p>¡Estamos listos para colaborar contigo!</p>
        <form action="#" class="contact-form">
            <input type="text" placeholder="Nombre" required>
            <input type="email" placeholder="Correo electrónico" required>
            <textarea placeholder="Tu mensaje" required></textarea>
            <button type="submit" class="btn">Enviar</button>
        </form>
    </footer>
</body>
</html>
