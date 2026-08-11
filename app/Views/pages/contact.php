<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="row">
    <div class="col">
        <h1><?= $title; ?></h1>
        <?php foreach($address as $a): ?>
        <ul class="ps-4">
            <li><?= $a['type']; ?>.</li>
            <li><?= $a['address']; ?>.</li>
            <li><?= $a['city']; ?>.</li>
        </ul>
        <?php endforeach; ?>
    </div>
</div>
<?= $this->endSection(); ?>