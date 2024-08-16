<?= $this->extend('layout/main') ?>

<?= $this->section('title') ?>
Inicio - Transporte Ejecutivo Terrestre
<?= $this->endSection() ?>

<?= $this->section('description') ?>
Transporte Ejecutivo Terrestre - Servicios de transporte seguro y cómodo.
<?= $this->endSection() ?>

<?= $this->section('keywords') ?>
transporte ejecutivo, transporte terrestre, servicios de transporte, seguridad, comodidad
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
            <p>Te ofrecemos servicios de transporte ejecutivo adaptados a tus necesidades</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 icon-box aeropuerto" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon"><i class="fas fa-plane"></i></div>
                <h4 class="title"><a href="#">Transporte al Aeropuerto</a></h4>
                <p class="description">Transporte confiable desde y hacia el aeropuerto.</p>
            </div>
            <div class="col-lg-4 col-md-6 icon-box foreano" data-aos="zoom-in" data-aos-delay="200">
                <div class="icon"><i class="fas fa-road"></i></div>
                <h4 class="title"><a href="#">Transporte Foráneo</a></h4>
                <p class="description">Viaja seguro dentro y fuera de la ciudad.</p>
            </div>
            <div class="col-lg-4 col-md-6 icon-box mensajeria" data-aos="zoom-in" data-aos-delay="300">
                <div class="icon"><i class="fas fa-shipping-fast"></i></div>
                <h4 class="title"><a href="#">Mensajería Ejecutiva</a></h4>
                <p class="description">Servicio de mensajería dentro y fuera de la ciudad.</p>
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
                <img src="<?= base_url('assets/images/porque-elegirnos.jpg') ?>" class="img-fluid" alt="">
                <a href="https://www.youtube.com/watch?v=-JdG_iIP8WY&list=RD-JdG_iIP8WY&start_radio=1" class="play-btn mb-4"></a>
            </div>
            <div class="col-lg-6 pt-3 pt-lg-0 content">
                <h3>Experiencia y Calidad en Cada Viaje</h3>
                <p class="fst-italic">
                    Más de 20 años proporcionando servicios de transporte ejecutivo de alta calidad.
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