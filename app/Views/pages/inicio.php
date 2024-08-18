<?= $this->extend('layout/main') ?>

<?= $this->section('title') ?>
Transporte Ejecutivo Terrestre - Servicio Seguro y Confiable
<?= $this->endSection() ?>

<?= $this->section('description') ?>
Ofrecemos servicios de transporte ejecutivo seguro, puntual y confiable dentro y fuera de la ciudad, con atención 24/7. ¡Descubre cómo podemos ayudarte a llegar a tu destino de manera cómoda y segura!
<?= $this->endSection() ?>

<?= $this->section('keywords') ?>
transporte ejecutivo, transporte terrestre, servicios de transporte, transporte seguro, transporte confiable, seguridad, comodidad, transporte aeropuerto, transporte foráneo
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<section id="hero" class="d-flex align-items-center">
    <div class="container text-center" data-aos="fade-up">
        <h1>Transporte Seguro, Puntual y Confiable</h1>
        <h2>Tu mejor aliado en transporte ejecutivo terrestre</h2>
        <a href="#services" class="btn-get-started scrollto">Conoce Más</a>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="services section-bg-dark">
    <div class="container" data-aos="fade-up">
        <div class="section-title text-center text-light">
            <h2>Servicios</h2>
            <p>Te ofrecemos servicios de transporte ejecutivo adaptados a tus necesidades, dentro y fuera de la ciudad, con personal altamente capacitado y atención 24/7.</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 icon-box aeropuerto" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon"><i class="fas fa-plane"></i></div>
                <h4 class="title"><a href="#">Transporte al Aeropuerto</a></h4>
                <p class="description">Transporte confiable desde y hacia el aeropuerto, asegurando un viaje seguro y cómodo.</p>
            </div>
            <div class="col-lg-4 col-md-6 icon-box foreano" data-aos="zoom-in" data-aos-delay="200">
                <div class="icon"><i class="fas fa-road"></i></div>
                <h4 class="title"><a href="#">Transporte Foráneo</a></h4>
                <p class="description">Viaja seguro dentro y fuera de la ciudad con nuestro servicio de transporte foráneo.</p>
            </div>
            <div class="col-lg-4 col-md-6 icon-box mensajeria" data-aos="zoom-in" data-aos-delay="300">
                <div class="icon"><i class="fas fa-shipping-fast"></i></div>
                <h4 class="title"><a href="#">Mensajería Ejecutiva</a></h4>
                <p class="description">Servicio rápido y seguro de mensajería dentro y fuera de la ciudad.</p>
            </div>
            <div class="col-lg-4 col-md-6 icon-box por-tiempo" data-aos="zoom-in" data-aos-delay="400">
                <div class="icon"><i class="fas fa-clock"></i></div>
                <h4 class="title"><a href="#">Servicio por Tiempo</a></h4>
                <p class="description">Ideal para visitas a diferentes clientes en el área metropolitana mientras nosotros te esperamos.</p>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section id="why-us" class="why-us section-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>¿Por Qué Elegirnos?</h2>
        </div>
        <div class="row">
            <div class="col-lg-6 video-box align-self-baseline" data-aos="zoom-in" data-aos-delay="100">
                <video class="img-fluid" controls preload="auto" loading="lazy" poster="<?= base_url('assets/images/porque-elegirnos.jpg') ?>">
                    <source src="<?= base_url('assets/images/porque-elegirnos.mp4') ?>" type="video/mp4">
                    <source src="<?= base_url('assets/images/porque-elegirnos.webm') ?>" type="video/webm">
                    <source src="<?= base_url('assets/images/porque-elegirnos.ogv') ?>" type="video/ogg">
                    Tu navegador no soporta la reproducción de este video.
                </video>
            </div>
            <div class="col-lg-6 pt-3 pt-lg-0 content">
                <h3>Experiencia y Calidad en Cada Viaje</h3>
                <p class="fst-italic">
                    Con más de 20 años en el mercado, proporcionamos servicios de transporte ejecutivo de alta calidad, priorizando la seguridad y confort en cada viaje.
                </p>
                <ul>
                    <li><i class="bx bx-check-double"></i> Conductores certificados y vehículos modernos.</li>
                    <li><i class="bx bx-check-double"></i> Servicio 24/7 y atención personalizada.</li>
                    <li><i class="bx bx-check-double"></i> Seguridad y confort garantizados en cada viaje.</li>
                </ul>
                <a href="#" class="read-more">Descubre más <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>

<?= $this->section('styles') ?>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script src="<?= base_url('assets/js/inicio.js') ?>"></script>
<?= $this->endSection() ?>