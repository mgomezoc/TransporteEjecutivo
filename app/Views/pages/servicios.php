<?= $this->extend('layout/main') ?>

<?= $this->section('title') ?>
<?= lang('Messages.services_page_title') ?>
<?= $this->endSection() ?>

<?= $this->section('description') ?>
<?= lang('Messages.services_page_description') ?>
<?= $this->endSection() ?>

<?= $this->section('keywords') ?>
<?= lang('Messages.services_page_keywords') ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Hero Section with Video -->
<section id="hero" class="d-flex align-items-center justify-content-center hero-video-section">
    <video autoplay muted loop playsinline class="bg-video" poster="<?= base_url('assets/images/slider/slider-historia.png') ?>">
        <source src="<?= base_url('assets/images/servicios.mp4') ?>" type="video/mp4">
        <?= lang('Messages.video_not_supported') ?>
    </video>

    <!-- Aquí se agrega el overlay -->
    <div class="overlay"></div>

    <div class="container position-relative text-center text-white" data-aos="fade-up">
        <h1><?= lang('Messages.services_hero_title') ?></h1>
        <p><?= lang('Messages.services_hero_subtitle') ?></p>
        <a href="#services" class="btn-get-started scrollto"><?= lang('Messages.services_hero_button') ?></a>
    </div>
</section>

<!-- Servicios Section -->
<section id="services" class="section-bg-dark services-page">
    <div class="container" data-aos="fade-up">
        <div class="section-title text-center">
            <h2><?= lang('Messages.our_services') ?></h2>
            <p><?= lang('Messages.services_description') ?></p>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12 mb-4">
                <div class="icon-box">
                    <div class="icon mb-3"><i class="fas fa-plane"></i></div>
                    <h4 class="title"><?= lang('Messages.airport') ?></h4>
                    <p class="description"><?= lang('Messages.airport_desc') ?></p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 mb-4">
                <div class="icon-box">
                    <div class="icon mb-3"><i class="fas fa-road"></i></div>
                    <h4 class="title"><?= lang('Messages.foraneos') ?></h4>
                    <p class="description"><?= lang('Messages.foraneos_desc') ?></p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 mb-4">
                <div class="icon-box">
                    <div class="icon mb-3"><i class="fas fa-shipping-fast"></i></div>
                    <h4 class="title"><?= lang('Messages.mensajeria') ?></h4>
                    <p class="description"><?= lang('Messages.mensajeria_desc') ?></p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 mb-4">
                <div class="icon-box">
                    <div class="icon mb-3"><i class="fas fa-clock"></i></div>
                    <h4 class="title"><?= lang('Messages.tiempo') ?></h4>
                    <p class="description"><?= lang('Messages.tiempo_desc') ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>

<?= $this->section('styles') ?>
<?= $this->endSection() ?>