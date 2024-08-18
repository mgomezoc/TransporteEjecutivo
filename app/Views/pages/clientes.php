<?= $this->extend('layout/main') ?>

<?= $this->section('title') ?>
Nuestros Clientes - Transporte Ejecutivo Terrestre
<?= $this->endSection() ?>

<?= $this->section('description') ?>
Descubra las empresas que confían en Transporte Ejecutivo Terrestre para sus necesidades de transporte. Conozca a nuestros clientes y por qué nos eligen.
<?= $this->endSection() ?>

<?= $this->section('keywords') ?>
nuestros clientes, transporte ejecutivo, empresas confiables, Monterrey, transporte seguro, transporte corporativo
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section id="clients" class="clients-page">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 mb-4">Nuestros Clientes</h1>
                <p class="lead text-white">Estas son algunas de las empresas que confían en nuestros servicios de transporte ejecutivo.</p>
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
                '_0014_maussan.png',
                '_0015_doubletree.png',
                '_0016_formex.png',
                '_0017_hegenscheidt.png',
                '_0018_universal.png',
                '_0019_spentech.png',
                '_0020_das.png',
                '_0022_brunner.png'
            ];
            foreach ($clientes as $cliente): ?>
                <div class="col-6 col-sm-4 col-md-3 mb-4">
                    <div class="client-logo-wrapper">
                        <img src="<?= base_url('assets/images/clientes/' . $cliente) ?>" class="img-fluid client-logo" alt="<?= pathinfo($cliente, PATHINFO_FILENAME) ?>">
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?= $this->endSection() ?>