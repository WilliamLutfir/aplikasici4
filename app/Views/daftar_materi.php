<!doctype html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Daftar Materi</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    </head>
    <body>
        <?php // require_once 'layout/navbar.php';?>
        <?= $this->include('layout/navbar'); ?>

        <main class="mt-2 container">
            <h1>Daftar Materi</h1>
            <ol>
                <li><a href="materi/introcodeigniter4" target="_blank">Intro CodeIgniter 4</a></li>
                <li><a href="materi/persiapandninstalasi" target="_blank">Persiapan & Instalasi</a></li>
                <li><a href="materi/strukturfolderdnenvironment" target="_blank">Struktur Folder & Environment</a></li>
                <li><a href="materi/routesdncontrollers" target="_blank">Routes & Controllers</a></li>
                <li><a href="materi/view5" target="_blank">Views</a></li>
                <li><a href="materi/viewlayouts" target="_blank">View Layouts</a></li>
                <li><a href="materi/modeI" target="_blank">Model</a></li>
                <li><a href="materi/model2" target="_blank">Model Bagian 2</a></li>
                <li><a href="materi/insertdata" target="_blank">Insert Data</a></li>
                <li><a href="materi/vaIidation" target="_blank">Validation</a></li>
                <li><a href="materi/deletednedit" target="_blank">Delete & Edit</a></li>
                <li><a href="materi/uploadfile" target="_blank">Upload File</a></li>
                <li><a href="materi/migrationseederfaker" target="_blank">Migration, Seeder, & Faker</a></li>
                <li><a href="materi/paginationdnsearching" target="_blank">Pagination & Searching</a></li>
            </ol>
        </main>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</html>