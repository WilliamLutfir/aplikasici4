<!doctype html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>View Layouts</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    </head>
    <body>
        <?= $this->include('layout/navbar'); ?>
        <main class="mt-2 container">
            <h1>View Layouts</h1>
            <h2>&lt;?= $this->renderSection('NamaFile.php'); ?&gt;</h2>
            <p>Ditempatkn di file template.php, utk merender section konten.</p>
            <h2>&lt;?= $this->extend('layout/template'); ?&gt;</h2>
            <p>Utk memberitahu CodeIgniter, bahwa halaman ini akan menggunakn file template yg ada didlm folder layout.</p>
            <h2>&lt;?= $this->section('content'); ?&gt; Dan &lt;?= $this->endSection(); ?&gt;</h2>
            <p>Utk memberitahu CodeIgniter, bagian mna yg akan menjdi konten.</p>
            <h2>&lt;?= $this->include('layout/navbar'); ?&gt;</h2>
            <p>Menggunakn parsials utk memanggil komponen navbar didlm folder layout. (fungsi mirip include pd PHP biasa, tetapi ini milik CodeIgniter).</p>
        </main>
        
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</html>