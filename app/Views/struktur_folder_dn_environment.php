<!doctype html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Struktur Folder & Environment</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    </head>
    <body>
        <?php // require_once 'layout/navbar.php';?>
        <?= $this->include('layout/navbar'); ?>

        <main class="mt-2 container"><h1>Struktur Folder & Environment</h1>
        <h2>Folder app</h2>
        <p>Folder app, adalah folder inti/core dari aplikasi CodeIgniternya.</p>
        <h2>Folder public</h2>
        <p>Folder public, adalah tempat menyimpan aset dari aplikasi CodeIgniter kita & folder yg dpt diakses/dilihat oleh user di browser.</p>
        <h2>Folder writable</h2>
        <p>Folder writable, adalah aplikasi CodeIgniter akan mengisikn sesuatu secara otomatis, utk cache, debug, log.</p>
        <h2>Folder app/Controllers</h2>
        <p>Folder utk menyimpan class2 controller.</p>
        <h2>Folder app/Models</h2>
        <p>Folder utk menyimpan class2 yg mengelola tabel didlm database.</p>
        <h2>Folder app/Views</h2>
        <p>Folder utk menyimpan berbagai tampilan halaman web.</p>
        <h2>Folder app/Config/Routes.php</h2>
        <p>File Routes.php menyimpan segala rute url pd aplikasi CodeIgniter kita.</p>
        <h2>File .env</h2>
        <p>File berisi nilai konfigurasi utk aplikasi CodeIgniter kita, (jgn lupa rename file env menjdi .env agar dpt digunakn menjdi file system).</p>
        <p>Jika nilai konfigurasi di file .env dikomentari, maka aplikasi CodeIgniter akan menggunakn nilai konfigurasi yg ada didlm folder config. Tetapi jika nilai konfigurasi di file .env dihapus komentarnya, maka akan menggunakn nilai konfigurasi di file .env (overwrite settings value).</p></main>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</html>