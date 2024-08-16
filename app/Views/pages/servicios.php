<?= $this->extend('layout/main') ?>

<?= $this->section('title') ?>
Servicios - Transporte Ejecutivo
<?= $this->endSection() ?>

<?= $this->section('description') ?>
Ofrecemos una amplia gama de servicios de transporte, incluyendo traslados al aeropuerto, servicios foráneos, mensajería y transporte por tiempo. Nuestro compromiso con la calidad y la satisfacción del cliente nos distingue.
<?= $this->endSection() ?>

<?= $this->section('keywords') ?>
servicios de transporte, transporte ejecutivo, traslados al aeropuerto, mensajería, Monterrey, transporte foráneo, transporte por tiempo
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Hero Section with Video -->
<section id="hero" class="d-flex align-items-center justify-content-center">
    <video autoplay muted loop playsinline class="bg-video" poster="<?= base_url('assets/images/servicios-mensajeria.jpg') ?>">
        <source src="<?= base_url('assets/images/servicios.mp4') ?>" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="container position-relative text-center text-white" data-aos="fade-up">
        <h1>Servicios de Transporte Ejecutivo</h1>
        <p>Calidad, Confort y Seguridad en Cada Viaje</p>
        <a href="#services" class="btn-get-started scrollto">Descubre Más</a>
    </div>
</section>


<!-- Servicios Section -->
<section id="services" class="services-page">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 mb-4">Nuestros Servicios</h1>
                <p class="lead">Le ofrecemos un servicio de Transporte de primera calidad con unidades de reciente modelo, conductores amables y certificados. Nuestro espíritu de servicio nos distingue.</p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-6 col-md-12 mb-4">
                <div class="icon-box p-4">
                    <div class="icon mb-3"><i class="fas fa-plane"></i></div>
                    <h3 class="h4">Aeropuerto</h3>
                    <p>Transporte Ciudad-Aeropuerto-Ciudad. Disfrute de un traslado seguro y puntual hacia y desde el aeropuerto.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 mb-4">
                <div class="icon-box p-4">
                    <div class="icon mb-3"><i class="fas fa-road"></i></div>
                    <h3 class="h4">Foráneos</h3>
                    <p>Transporte dentro y fuera de la ciudad. Viaje cómodamente con nuestro servicio interurbano de alta calidad.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 mb-4">
                <div class="icon-box p-4">
                    <div class="icon mb-3"><i class="fas fa-shipping-fast"></i></div>
                    <h3 class="h4">Mensajería</h3>
                    <p>Servicio de mensajería dentro y fuera de la ciudad. Entregas rápidas y seguras para su tranquilidad.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 mb-4">
                <div class="icon-box p-4">
                    <div class="icon mb-3"><i class="fas fa-clock"></i></div>
                    <h3 class="h4">Servicio por tiempo</h3>
                    <p>Este tipo de servicio le permite realizar visitas a diferentes clientes en el área metropolitana de Monterrey mientras nosotros le esperamos.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>

<?= $this->section('styles') ?>

<?= $this->endSection() ?>