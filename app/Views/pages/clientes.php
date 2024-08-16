<?= $this->extend('layout/main') ?>

<?= $this->section('title') ?>
Nuestros Clientes - Transporte Ejecutivo
<?= $this->endSection() ?>

<?= $this->section('description') ?>
Descubra las empresas que confían en nosotros para sus necesidades de transporte. Conozca a nuestros clientes.
<?= $this->endSection() ?>

<?= $this->section('keywords') ?>
clientes, transporte ejecutivo, empresas, confianza, Monterrey, servicios de transporte
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="clients-page">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 mb-4">Nuestros Clientes</h1>
                <p class="lead">Estas son algunas de las empresas que confían en nuestros servicios de transporte ejecutivo.</p>
            </div>
        </div>

        <div class="row mt-5 justify-content-center">
            <!-- Galería de Clientes -->
            <?php
            $clientes = [
                '_0000_lazboy.png',
                '_0015_doubletree.png',
                '_0007_martinrea.png',
                '_0005_powertrain.png',
                '_0016_formex.png',
                '_0002_chrysler.png',
                '_0004_azteca.png',
                '_0009_televisa.png',
                '_0001_polyone.png',
                '_0010_faurencia.png',
                '_0013_leon.png',
                '_0006_millsteel.png',
                '_0008_jiffytite.png',
                '_0014_maussan.png',
                '_0011_kpmg.png',
                '_0003_bocar.png',
                '_0012_metalflow.png',
                '_0017_hegenscheidt.png',
                '_0018_universal.png',
                '_0019_spentech.png',
                '_0020_das.png',
                '_0022_brunner.png',
                'pacCNC.jpg',
                'yanfeng.png',
                'airway.png',
                'ufi.png',
                'Captura de Pantalla 2021-05-25 a la(s) 18.04.06.png',
                'Screenshot_20240815_131132_Chrome.jpg'
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