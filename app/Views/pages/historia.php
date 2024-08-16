<?= $this->extend('layout/main') ?>

<?= $this->section('title') ?>
Historia - Transporte Ejecutivo Terrestre
<?= $this->endSection() ?>

<?= $this->section('description') ?>
Conoce la historia de Transporte Ejecutivo Terrestre. Más de 18 años ofreciendo servicios de transporte seguro y confiable en Saltillo, Monterrey y más.
<?= $this->endSection() ?>

<?= $this->section('keywords') ?>
transporte ejecutivo, historia de transporte, transporte seguro, transporte en Saltillo, transporte en Monterrey
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<section id="hero" class="d-flex align-items-center">
    <div class="container text-center" data-aos="fade-up">
        <h1>Nuestra Historia</h1>
        <p>Más de 18 años ofreciendo transporte seguro y de calidad</p>
    </div>
</section>

<!-- History Section -->
<section id="history" class="history section-bg">
    <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <img src="<?= base_url('assets/images/historia-image.jpg') ?>" alt="Historia de Transporte Ejecutivo" class="img-fluid rounded mb-4">
            </div>
            <div class="col-lg-6">
                <h2>Historia de Transporte Ejecutivo Terrestre</h2>
                <p>
                    Somos un servicio de Transporte Ejecutivo seguro en Saltillo, Monterrey, Nuevo Laredo y Laredo, Tx.
                    Iniciamos operaciones hace más de 18 años, posicionándonos como una opción confiable y de alta calidad
                    para el transporte al aeropuerto y otros destinos.
                </p>
                <p>
                    A lo largo de los años, hemos ganado la preferencia de nuestros clientes gracias a la calidad de nuestro servicio.
                    Cada año, nuestros conductores se capacitan en el curso "Evasive Driving & Accident Avoidance" para brindar un servicio
                    aún más seguro y eficiente.
                </p>
                <p>
                    Ofrecemos atención y reservas 24/7, asegurando que siempre puedas contar con nosotros para tus necesidades de transporte ejecutivo.
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