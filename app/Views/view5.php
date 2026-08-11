<!doctype html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Views</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    </head>
    <body>
        <?php // require_once 'layout/navbar.php';?>
        <?= $this->include('layout/navbar'); ?>

        <main class="mt-2 container">
            <h1>Views</h1>
            <p>Views adalah komponen didlm framework CodeIgniter yg berfungsi utk menampilkn halaman web / mengatur tampilan halaman web.</p>
            <h2>base_url()</h2>
            <p>Biasakn, dlm mengarahkn link utk mengakses resource dari website kita, gunakn base_url()!</p>
            <h2>d() Atau dd() - Utk Debugging Pd CodeIgniter</h2>
            <ul>
                <li>d() -dump = Mirip sprti var_dump() pd php biasa, d() merupakan var_dump() milik CodeIgniter.</li>
                <li>dd() -dump & die = Merupakan gabungan antara var_dump() & die() milik CodeIgniter.</li>
            </ul>
        </main>
        
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</html>