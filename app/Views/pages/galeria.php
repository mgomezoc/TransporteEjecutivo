<?= $this->extend('layout/main') ?>

<?= $this->section('title') ?>
<?= lang('Messages.gallery_page_title') ?>
<?= $this->endSection() ?>

<?= $this->section('description') ?>
<?= lang('Messages.gallery_page_description') ?>
<?= $this->endSection() ?>

<?= $this->section('keywords') ?>
<?= lang('Messages.gallery_page_keywords') ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Galería de Imágenes y Videos -->
<section id="galeria" class="gallery-page section-bg-dark">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 mb-4"><?= lang('Messages.image_gallery') ?></h1>
                <p class="lead"><?= lang('Messages.explore_gallery') ?></p>
            </div>
        </div>

        <!-- Galería de Certificados -->
        <div class="row justify-content-center mt-5">
            <div class="col-12">
                <h2 class="mb-4 text-center"><?= lang('Messages.certifications') ?></h2>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <!-- Agregar certificados -->
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
                <h2 class="mb-4 text-center"><?= lang('Messages.vehicles') ?></h2>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <?php for ($i = 1; $i <= 27; $i++): ?>
                        <div class="col">
                            <div class="gallery-item-wrapper">
                                <a href="<?= base_url("assets/images/galeria/$i.jpg") ?>" class="gallery-item" data-fancybox="vehiculos">
                                    <div class="gallery-item-inner">
                                        <img src="<?= base_url("assets/images/galeria/$i.jpg") ?>" class="img-fluid rounded" alt="<?= lang('Messages.vehicle') ?> <?= $i ?>">
                                        <div class="gallery-item-overlay"></div>
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
                <h2 class="mb-4 text-center"><?= lang('Messages.videos') ?></h2>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="video-wrapper">
                            <a href="<?= base_url('assets/videos/VID-20240815-WA0015.mp4') ?>" data-fancybox="videos" data-caption="Video 1">
                                <img src="<?= base_url('assets/images/video_thumbnails/thumb1.png') ?>" alt="Video 1" class="img-fluid rounded">
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="video-wrapper">
                            <a href="<?= base_url('assets/videos/VID-20240815-WA0021.mp4') ?>" data-fancybox="videos" data-caption="Video 2">
                                <img src="<?= base_url('assets/images/video_thumbnails/thumb2.png') ?>" alt="Video 2" class="img-fluid rounded">
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="video-wrapper">
                            <a href="<?= base_url('assets/videos/VID-20240815-WA0022.mp4') ?>" data-fancybox="videos" data-caption="Video 3">
                                <img src="<?= base_url('assets/images/video_thumbnails/thumb3.png') ?>" alt="Video 3" class="img-fluid rounded">
                            </a>
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