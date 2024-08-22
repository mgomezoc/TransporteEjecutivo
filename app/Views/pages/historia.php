<?= $this->extend('layout/main') ?>

<?= $this->section('title') ?>
<?= lang('Messages.history_title') ?> - <?= lang('Messages.company_name') ?>
<?= $this->endSection() ?>

<?= $this->section('description') ?>
<?= lang('Messages.history_description') ?>
<?= $this->endSection() ?>

<?= $this->section('keywords') ?>
<?= lang('Messages.history_keywords') ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<section id="hero" class="d-flex align-items-center historia">
    <div class="container text-center" data-aos="fade-up">
        <h1><?= lang('Messages.history_heading') ?></h1>
        <p><?= lang('Messages.history_subheading') ?></p>
    </div>
</section>

<!-- History Section -->
<section id="history" class="history section-bg-dark">
    <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <img src="<?= base_url('assets/images/historia.png') ?>" alt="<?= lang('Messages.history_image_alt') ?>" class="img-fluid rounded mb-4">
            </div>
            <div class="col-lg-6">
                <h2><?= lang('Messages.history_title') ?></h2>
                <p>
                    <?= lang('Messages.history_content_1') ?>
                </p>
                <p>
                    <?= lang('Messages.history_content_2') ?>
                </p>
                <p>
                    <?= lang('Messages.history_content_3') ?>
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