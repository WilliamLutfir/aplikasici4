<!doctype html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Persiapan & Instalasi</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    </head>
    <body>
        <?php // require_once 'layout/navbar.php';?>
        <?= $this->include('layout/navbar'); ?>

        <main class="mt-2 container"><h1>Persiapan & Instalasi</h1>
        <h2>Software Requirement</h2>
        <ul>
            <li>XAMPP.</li>
            <li>VS Code.</li>
            <li>Composer.</li>
            <li>Git Bash.</li>
        </ul>
        <h2>Ekstensi VS Code</h2>
        <ul>
            <li>Intelephense.</li>
            <li>Prettier.</li>
            <li>Snippet.</li>
        </ul>
        <h2>Instalasi CodeIgniter</h2>
        <p>Utk menginstal projek baru CodeIgniter, gunakn perintah berikut :</p>
        <p class="text-success fw-bold">composer create-project codeigniter4/appstarter NamaProjek</p>
        <h2>Menjlnkn Aplikasi CodeIgniter</h2>
        <p>Utk menjlnkn server punya CodeIgniter, gunakn perintah berikut :</p>
        <p class="text-success fw-bold">php spark serve</p>
        <p>Cara lain utk menjlnkn aplikasi CodeIgniter dgn cara, arahkn url ke direktori ke projek CodeIgniter, kemudian masuk ke folder public :</p>
        <p class="text-success fw-bold">DirektoriProjekCodeIgniter/public</p></main>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</html>