<?= $this->extend('layout/main') ?>

<?= $this->section('title') ?>
<?= lang('Messages.clients_page_title') ?>
<?= $this->endSection() ?>

<?= $this->section('description') ?>
<?= lang('Messages.clients_page_description') ?>
<?= $this->endSection() ?>

<?= $this->section('keywords') ?>
<?= lang('Messages.clients_page_keywords') ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section id="clients" class="clients-page section-bg-dark">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 mb-4"><?= lang('Messages.our_clients') ?></h1>
                <p class="lead"><?= lang('Messages.clients_trust') ?></p>
            </div>
        </div>

        <div class="row mt-5 justify-content-center">
            <!-- Galería de Clientes -->
            <?php
            $clientes = [
                'airway.png',
                'goss.png',
                'LaZboy.jpg',
                'pacCNC.jpg',
                'ufi.png',
                'yanfeng.png',
                'yanfeng_2.jpg',
                '_0000_lazboy.png',
                '_0001_polyone.png',
                '_0002_chrysler.png',
                '_0003_bocar.png',
                '_0004_azteca.png',
                '_0005_powertrain.png',
                '_0006_millsteel.png',
                '_0007_martinrea.png',
                '_0008_jiffytite.png',
                '_0009_televisa.png',
                '_0010_faurencia.png',
                '_0011_kpmg.png',
                '_0012_metalflow.png',
                '_0013_leon.png',
                'maussan.jpeg',
                '_0015_doubletree.png',
                '_0016_formex.png',
                '_0017_hegenscheidt.png',
                'el_universal.jpeg',
                '_0019_spentech.png',
                '_0020_das.png',
                '_0022_brunner.png',
                'adient.jpeg',
                'bocar.jpeg',
                'gm.jpeg'
            ];
            foreach ($clientes as $cliente): ?>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">
                    <div class="client-logo-wrapper">
                        <img src="<?= base_url('assets/images/clientes/' . $cliente) ?>" class="img-fluid client-logo" alt="<?= pathinfo($cliente, PATHINFO_FILENAME) ?>">
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?= $this->endSection() ?>