<!doctype html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Model</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    </head>
    <body>
        <?= $this->include('layout/navbar'); ?>
        <main class="mt-2 container" style="text-align: justify;">
            <h1>Model</h1>
            <p>Model digunakn ketika akan berinteraksi dgn data didlm database.</p>
            <p>"Model CodeIgniter menyediakan fitur-fitur kemudahan dan fungsionalitas tambahan yang biasa digunakan developer untuk bekerja dengan <b>single tabel</b> dalam database Anda lebih mudah."</p>
            <p>"Ia hadir out of the box dengan helper method untuk banyak cara standar yang Anda perlukan untuk berinteraksi dengan tabel didlm database, termasuk mencari record, update record, menghapus record, dan banyak lagi."</p>
            <h2>Sekilas Ttg Migration</h2>
            <p>Migration adalah cara utk membuat tabel didlm database dgn cara menulisknnya pd skrip PHP, bukan melalui software DBMS sprti di phpmyadmin.</p>
            <h2>SoftDeletes Pd CodeIgniter</h2>
            <p>SoftDeletes adalah jika ada data yg dihapus pd tabel didlm database, tdk akan pernah dihapus, datanya tetap ada, tetapi akan ditambahkn sebuah field bernama 'deleted_at' (seperti diberikn badge/flag telah dihapus saja).</p>
            <h2>Membuat File Model Baru</h2>
            <p>Penamaan utk file model baru, nama modelnya harus sama dgn nama pd tabel dlm database!</p>
            <p>Contoh : <b>UsersModel.php</b></p>
            <h2>findAll()</h2>
            <p>Method pd query builder utk mengambil semua record pd suatu tabel tertentu (Mirip dgn, SELECT * FROM NamaTabel). </p>
        </main>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</html>