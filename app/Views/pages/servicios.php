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

<section class="services-page mt-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 mb-4">Nuestros Servicios</h1>
                <p class="lead">Le ofrecemos un servicio de Transporte de primera calidad con unidades de reciente modelo, conductores amables y certificados. Nuestro espíritu de servicio nos distingue.</p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-6">
                <div class="service-card mb-4 p-4 bg-light rounded">
                    <h3 class="h4">Aeropuerto</h3>
                    <p>Transporte Ciudad-Aeropuerto-Ciudad. Disfrute de un traslado seguro y puntual hacia y desde el aeropuerto.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="service-card mb-4 p-4 bg-light rounded">
                    <h3 class="h4">Foráneos</h3>
                    <p>Transporte dentro y fuera de la ciudad. Viaje cómodamente con nuestro servicio interurbano de alta calidad.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="service-card mb-4 p-4 bg-light rounded">
                    <h3 class="h4">Mensajería</h3>
                    <p>Servicio de mensajería dentro y fuera de la ciudad. Entregas rápidas y seguras para su tranquilidad.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="service-card mb-4 p-4 bg-light rounded">
                    <h3 class="h4">Servicio por tiempo</h3>
                    <p>Este tipo de servicio le permite realizar visitas a diferentes clientes en el área metropolitana de Monterrey mientras nosotros le esperamos.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>

<?= $this->section('styles') ?>
<style>
    .services-page {
        padding: 60px 0;
    }

    .service-card {
        background-color: #f8f9fa;
        border: 1px solid #dee2e6;
        border-radius: 8px;
        transition: box-shadow 0.3s ease-in-out;
    }

    .service-card:hover {
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    .service-card h3 {
        color: @primary-color;
    }

    .service-card p {
        color: @text-color;
    }

    @media (max-width: 768px) {
        .services-page {
            padding: 30px 0;
        }
    }
</style>
<?= $this->endSection() ?>