<?php // Utk memberitahu CodeIgniter, bahwa halaman ini akan menggunakn file template yg ada didlm folder layout. ?>
<?= $this->extend('layout/template'); ?>

<?php // Utk memberitahu CodeIgniter, bagian mna yg akan menjdi konten ?>
<?= $this->section('content'); ?>
<div class="row">
    <div class="col">
        <h1><?= $title; ?></h1>
        <?php d($fruits)?>
        <?php d($name)?>
    </div>
</div>
<?= $this->endSection(); ?>