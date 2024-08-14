<?= $this->extend('layout/main') ?>

<?= $this->section('title') ?>
<?= lang('Messages.welcome_message') ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<h1><?= lang('Messages.welcome_message') ?></h1>
<p><?= lang('Messages.history') ?></p>
<p><?= lang('Messages.services') ?></p>
<p><?= lang('Messages.gallery') ?></p>
<p><?= lang('Messages.clients') ?></p>
<?= $this->endSection() ?>