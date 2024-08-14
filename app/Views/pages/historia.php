<?= $this->extend('layout/main') ?>

<?= $this->section('title') ?>
<?= lang('Messages.history') ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<h1><?= lang('Messages.history') ?></h1>
<p><?= lang('Messages.history_content') ?></p>
<?= $this->endSection() ?>