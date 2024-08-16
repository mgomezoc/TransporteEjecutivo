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

<!-- Galería de Imágenes y Videos -->
<section class="gallery-page">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 mb-4">Galería de Imágenes</h1>
                <p class="lead">Explore nuestras certificaciones, vehículos y más a través de esta galería de imágenes y videos.</p>
            </div>
        </div>

        <!-- Galería de Certificados -->
        <div class="row justify-content-center mt-5">
            <div class="col-12">
                <h2 class="mb-4 text-center">Certificados</h2>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <a href="<?= base_url('assets/images/certificados/cert1.png') ?>" class="gallery-item" data-fancybox="certificados">
                            <img src="<?= base_url('assets/images/certificados/cert1.png') ?>" class="img-fluid rounded" alt="Certificado 1">
                        </a>
                    </div>
                    <div class="col">
                        <a href="<?= base_url('assets/images/certificados/cert2.png') ?>" class="gallery-item" data-fancybox="certificados">
                            <img src="<?= base_url('assets/images/certificados/cert2.png') ?>" class="img-fluid rounded" alt="Certificado 2">
                        </a>
                    </div>
                    <div class="col">
                        <a href="<?= base_url('assets/images/certificados/cert3.jpg') ?>" class="gallery-item" data-fancybox="certificados">
                            <img src="<?= base_url('assets/images/certificados/cert3.jpg') ?>" class="img-fluid rounded" alt="Certificado 3">
                        </a>
                    </div>
                    <!-- Agregar más certificados aquí si es necesario -->
                </div>
            </div>
        </div>

        <!-- Galería de Vehículos -->
        <div class="row justify-content-center mt-5">
            <div class="col-12">
                <h2 class="mb-4 text-center">Vehículos</h2>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <!-- Galería de Vehículos -->
                    <?php for ($i = 1; $i <= 27; $i++): ?>
                        <div class="col">
                            <div class="gallery-item-wrapper">
                                <a href="<?= base_url("assets/images/galeria/$i.jpg") ?>" class="gallery-item" data-fancybox="vehiculos">
                                    <div class="gallery-item-inner">
                                        <img src="<?= base_url("assets/images/galeria/$i.jpg") ?>" class="img-fluid rounded" alt="Vehículo <?= $i ?>">
                                        <div class="gallery-item-overlay">
                                            <div class="gallery-item-title">Vehículo <?= $i ?></div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>

        <!-- Galería de Videos -->
        <div class="row justify-content-center mt-5">
            <div class="col-12">
                <h2 class="mb-4 text-center">Videos</h2>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="video-wrapper">
                            <iframe src="https://player.vimeo.com/video/689116476?portrait=0&amp;wmode=transparent" width="100%" height="200" allow="autoplay; fullscreen" allowfullscreen="true" frameborder="0" scrolling="no"></iframe>
                        </div>
                    </div>
                    <div class="col">
                        <div class="video-wrapper">
                            <iframe src="https://player.vimeo.com/video/689116512?portrait=0&amp;wmode=transparent" width="100%" height="200" allow="autoplay; fullscreen" allowfullscreen="true" frameborder="0" scrolling="no"></iframe>
                        </div>
                    </div>
                    <div class="col">
                        <div class="video-wrapper">
                            <iframe src="https://player.vimeo.com/video/689116451?portrait=0&amp;wmode=transparent" width="100%" height="200" allow="autoplay; fullscreen" allowfullscreen="true" frameborder="0" scrolling="no"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>

<?= $this->section('styles') ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0.27/dist/fancybox.css">
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0.27/dist/fancybox.umd.js"></script>
<script src="<?= base_url('assets/js/galeria.js') ?>"></script>
<?= $this->endSection() ?>