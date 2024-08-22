<?= $this->extend('layout/main') ?>

<?= $this->section('title') ?>
<?= lang('Messages.title') ?>
<?= $this->endSection() ?>

<?= $this->section('description') ?>
<?= lang('Messages.description') ?>
<?= $this->endSection() ?>

<?= $this->section('keywords') ?>
<?= lang('Messages.keywords') ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<section id="hero" class="d-flex align-items-center">
    <div class="container-fluid p-0">
        <div class="swiper hero-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="<?= base_url('assets/images/slider/slider-1.png') ?>" alt="Slider 1" class="img-fluid">
                    <div class="overlay"></div>
                    <div class="hero-content">
                        <h1><?= lang('Messages.hero_title') ?></h1>
                        <h2><?= lang('Messages.hero_subtitle') ?></h2>
                        <a href="#services" class="btn-get-started scrollto"><?= lang('Messages.learn_more') ?></a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="<?= base_url('assets/images/slider/slider-2.png') ?>" alt="Slider 2" class="img-fluid">
                    <div class="overlay"></div>
                    <div class="hero-content">
                        <h1><?= lang('Messages.hero_title') ?></h1>
                        <h2><?= lang('Messages.hero_subtitle') ?></h2>
                        <a href="#services" class="btn-get-started scrollto"><?= lang('Messages.learn_more') ?></a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="<?= base_url('assets/images/slider/slider-3.png') ?>" alt="Slider 3" class="img-fluid">
                    <div class="overlay"></div>
                    <div class="hero-content">
                        <h1><?= lang('Messages.hero_title') ?></h1>
                        <h2><?= lang('Messages.hero_subtitle') ?></h2>
                        <a href="#services" class="btn-get-started scrollto"><?= lang('Messages.learn_more') ?></a>
                    </div>
                </div>
            </div>
            <!-- Swiper Navigation -->
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</section>


<!-- Services Section -->
<section id="services" class="services section-bg-dark">
    <div class="container" data-aos="fade-up">
        <div class="section-title text-center text-light">
            <h2><?= lang('Messages.services_title') ?></h2>
            <p><?= lang('Messages.services_description') ?></p>
        </div>
        <div class="row justify-content-center g-3">
            <div class="col-md-6 icon-box">
                <div class="icon"><i class="fas fa-plane"></i></div>
                <h4 class="title"><a href="#"><?= lang('Messages.airport_transport') ?></a></h4>
                <p class="description"><?= lang('Messages.airport_transport_desc') ?></p>
            </div>
            <div class="col-md-6 icon-box">
                <div class="icon"><i class="fas fa-road"></i></div>
                <h4 class="title"><a href="#"><?= lang('Messages.foreign_transport') ?></a></h4>
                <p class="description"><?= lang('Messages.foreign_transport_desc') ?></p>
            </div>
            <div class="col-md-6 icon-box">
                <div class="icon"><i class="fas fa-shipping-fast"></i></div>
                <h4 class="title"><a href="#"><?= lang('Messages.executive_messaging') ?></a></h4>
                <p class="description"><?= lang('Messages.executive_messaging_desc') ?></p>
            </div>
            <div class="col-md-6 icon-box">
                <div class="icon"><i class="fas fa-clock"></i></div>
                <h4 class="title"><a href="#"><?= lang('Messages.time_service') ?></a></h4>
                <p class="description"><?= lang('Messages.time_service_desc') ?></p>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section id="why-us" class="why-us section-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2><?= lang('Messages.why_choose_us') ?></h2>
        </div>
        <div class="row">
            <div class="col-lg-6 video-box align-self-baseline" data-aos="zoom-in" data-aos-delay="100">
                <video class="img-fluid" controls preload="auto" loading="lazy" poster="<?= base_url('assets/images/porque-elegirnos.jpg') ?>">
                    <source src="<?= base_url('assets/images/porque-elegirnos.mp4') ?>" type="video/mp4">
                    <source src="<?= base_url('assets/images/porque-elegirnos.webm') ?>" type="video/webm">
                    <source src="<?= base_url('assets/images/porque-elegirnos.ogv') ?>" type="video/ogg">
                    <?= lang('Messages.video_not_supported') ?>
                </video>
            </div>
            <div class="col-lg-6 pt-3 pt-lg-0 content">
                <h3><?= lang('Messages.experience_quality') ?></h3>
                <p class="fst-italic">
                    <?= lang('Messages.experience_quality_desc') ?>
                </p>
                <ul>
                    <li><i class="bx bx-check-double"></i> <?= lang('Messages.certified_drivers') ?></li>
                    <li><i class="bx bx-check-double"></i> <?= lang('Messages.service_24_7') ?></li>
                    <li><i class="bx bx-check-double"></i> <?= lang('Messages.security_comfort') ?></li>
                </ul>
                <a href="https://wa.me/528444277018" target="_blank" class="read-more"><?= lang('Messages.discover_more') ?> <i class="bi bi-arrow-right"></i></a>
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