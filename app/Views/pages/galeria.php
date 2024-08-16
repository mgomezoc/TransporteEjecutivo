<?= $this->extend('layout/main') ?>

<?= $this->section('title') ?>
Galería de Imágenes - Transporte Ejecutivo
<?= $this->endSection() ?>

<?= $this->section('description') ?>
Explore nuestra galería de imágenes y videos. Conozca nuestras certificaciones, vehículos y más.
<?= $this->endSection() ?>

<?= $this->section('keywords') ?>
galería de imágenes, transporte ejecutivo, certificaciones, vehículos, videos, Monterrey
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="gallery-page mt-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 mb-4">Galería de Imágenes</h1>
                <p class="lead">Explore nuestras certificaciones, vehículos y más a través de esta galería de imágenes y videos.</p>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-12">
                <h2 class="mb-4">Certificados</h2>
                <div class="row">
                    <!-- Galería de Certificados -->
                    <div class="col-md-3 col-sm-6 mb-4">
                        <a href="<?= base_url('assets/images/certificados/cert1.png') ?>" class="gallery-item" data-fancybox="certificados">
                            <img src="<?= base_url('assets/images/certificados/cert1.png') ?>" class="img-fluid rounded" alt="Certificado 1">
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-4">
                        <a href="<?= base_url('assets/images/certificados/cert2.png') ?>" class="gallery-item" data-fancybox="certificados">
                            <img src="<?= base_url('assets/images/certificados/cert2.png') ?>" class="img-fluid rounded" alt="Certificado 2">
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-4">
                        <a href="<?= base_url('assets/images/certificados/cert3.jpg') ?>" class="gallery-item" data-fancybox="certificados">
                            <img src="<?= base_url('assets/images/certificados/cert3.jpg') ?>" class="img-fluid rounded" alt="Certificado 3">
                        </a>
                    </div>
                    <!-- Agregar más certificados aquí -->
                </div>
            </div>

            <div class="col-12 mt-5">
                <h2 class="mb-4">Vehículos</h2>
                <div class="row">
                    <!-- Galería de Vehículos -->
                    <div class="col-md-3 col-sm-6 mb-4">
                        <a href="<?= base_url('assets/images/galeria/20200521_154023.jpg') ?>" class="gallery-item" data-fancybox="vehiculos">
                            <img src="<?= base_url('assets/images/galeria/20200521_154023.jpg') ?>" class="img-fluid rounded" alt="Vehículo 1">
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-4">
                        <a href="<?= base_url('assets/images/galeria/20200730_104157.jpg') ?>" class="gallery-item" data-fancybox="vehiculos">
                            <img src="<?= base_url('assets/images/galeria/20200730_104157.jpg') ?>" class="img-fluid rounded" alt="Vehículo 2">
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-4">
                        <a href="<?= base_url('assets/images/galeria/20201208_143428.jpg') ?>" class="gallery-item" data-fancybox="vehiculos">
                            <img src="<?= base_url('assets/images/galeria/20201208_143428.jpg') ?>" class="img-fluid rounded" alt="Vehículo 3">
                        </a>
                    </div>
                    <!-- Agregar más vehículos aquí -->
                </div>
            </div>

            <div class="col-12 mt-5">
                <h2 class="mb-4">Videos</h2>
                <div class="row">
                    <!-- Videos -->
                    <div class="col-md-4 col-sm-6 mb-4">
                        <div class="video-wrapper">
                            <iframe src="https://player.vimeo.com/video/689116476?portrait=0&amp;wmode=transparent" width="100%" height="200" allow="autoplay; fullscreen" allowfullscreen="true" frameborder="0" scrolling="no"></iframe>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-4">
                        <div class="video-wrapper">
                            <iframe src="https://player.vimeo.com/video/689116512?portrait=0&amp;wmode=transparent" width="100%" height="200" allow="autoplay; fullscreen" allowfullscreen="true" frameborder="0" scrolling="no"></iframe>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-4">
                        <div class="video-wrapper">
                            <iframe src="https://player.vimeo.com/video/689116451?portrait=0&amp;wmode=transparent" width="100%" height="200" allow="autoplay; fullscreen" allowfullscreen="true" frameborder="0" scrolling="no"></iframe>
                        </div>
                    </div>
                    <!-- Agregar más videos aquí -->
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>

<?= $this->section('styles') ?>
<style>
    .gallery-page {
        padding: 60px 0;
    }

    .gallery-item img {
        transition: transform 0.3s ease-in-out;
    }

    .gallery-item:hover img {
        transform: scale(1.05);
    }

    .video-wrapper {
        background-color: #f8f9fa;
        border-radius: 8px;
        overflow: hidden;
    }

    h2 {
        color: @primary-color;
    }

    @media (max-width: 768px) {
        .gallery-page {
            padding: 30px 0;
        }

        .video-wrapper iframe {
            height: 150px;
        }
    }
</style>
<?= $this->endSection() ?>