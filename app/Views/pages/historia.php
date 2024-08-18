<?= $this->extend('layout/main') ?>

<?= $this->section('title') ?>
Historia - Transporte Ejecutivo Terrestre
<?= $this->endSection() ?>

<?= $this->section('description') ?>
Descubre la historia de Transporte Ejecutivo Terrestre: más de 18 años brindando servicios de transporte seguro y confiable en Saltillo, Monterrey y otros destinos.
<?= $this->endSection() ?>

<?= $this->section('keywords') ?>
transporte ejecutivo, historia de transporte, transporte seguro, transporte en Saltillo, transporte en Monterrey, transporte terrestre, evasive driving, seguridad en transporte
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<section id="hero" class="d-flex align-items-center historia">
    <div class="container text-center" data-aos="fade-up">
        <h1>Nuestra Historia</h1>
        <p>Más de 18 años ofreciendo transporte seguro y de calidad en el norte de México</p>
    </div>
</section>

<!-- History Section -->
<section id="history" class="history section-bg">
    <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <img src="<?= base_url('assets/images/historia.png') ?>" alt="Historia de Transporte Ejecutivo Terrestre" class="img-fluid rounded mb-4">
            </div>
            <div class="col-lg-6">
                <h2>Historia de Transporte Ejecutivo Terrestre</h2>
                <p>
                    Con sede en Saltillo, Transporte Ejecutivo Terrestre ha sido un pilar de confianza en servicios de transporte en el norte de México, abarcando Saltillo, Monterrey, Nuevo Laredo y Laredo, Tx. Desde que comenzamos nuestras operaciones hace más de 18 años, nos hemos dedicado a ofrecer servicios de transporte seguros, confiables y de alta calidad.
                </p>
                <p>
                    Nuestra reputación se ha construido sobre la base de la satisfacción de nuestros clientes. Con un enfoque constante en la seguridad, nuestros conductores son capacitados anualmente en el curso "Evasive Driving & Accident Avoidance", asegurando que cada viaje esté en manos de expertos.
                </p>
                <p>
                    Ya sea para transporte al aeropuerto o servicios dentro y fuera de la ciudad, nos hemos comprometido a ofrecer un servicio excepcional con atención 24/7. La calidad de nuestro servicio nos ha permitido ganar la preferencia de clientes a lo largo de los años, convirtiéndonos en su opción de transporte de confianza.
                </p>
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