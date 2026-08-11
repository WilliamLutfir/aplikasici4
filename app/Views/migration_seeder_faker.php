<!doctype html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Migration, Seeder, & Faker</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    </head>
    <body>
        <?= $this->include('layout/navbar'); ?>
        <main class="mt-2 container" style="text-align: justify;">
            <h1>Migration, Seeder, & Faker</h1>
            <h2>Migration</h2>
            <p>"Migration adalah cara praktis bagi Anda untuk mengubah database secara terstruktur dan terorganisir. Anda dapat mengedit fragmen SQL secara manual, tetapi Anda kemudian bertanggung jawab untuk memberi tahu ke developer lain bahwa mereka perlu menjalankannya. Anda juga harus melacak perubahan mana yang perlu dijalankan pada mesin produksi saat Anda melakukan deploy berikutnya."</p>
            <p>Dgn menggunakn migration, kita bisa membuat struktur database dgn cara menulisknnya dgn bahasa permrograman PHP bukan dari dbms phpmyadmin, dgn cara membuat class yg didlmnya memuat skema dari tabelnya.</p>
            <h2>Membuat File Migration Baru</h2>
            <p>Utk membuat file migration baru, ketikkan perintah berikut di terminal :</p>
            <p class="fw-bold text-success">php spark make:migration NamaFileMigration(Sesuaikn Dgn Nama Tabel Didlm Database)</p>
            <h2>Menjlnkn File Migration</h2>
            <p>Utk menjlnkn file migration (semua file migration), ketikkan perintah berikut di terminal :</p>
            <p class="fw-bold text-success">php spark migrate</p>
            <h2>Seeder</h2>
            <p>Seeder digunakn utk mengisi data secara otomatis pd tabel didlm database.</p>
            <p>"Seeding database adalah cara sederhana untuk menambahkan data ke dalam database Anda. Hal ini sangat berguna selama pengembangan, terutama saat Anda perlu mengisi database dengan data sampel yang dapat Anda kembangkan, tetapi tidak terbatas pada itu. Seeder dapat berisi data statis yang tidak ingin Anda sertakan dalam migration, seperti negara, tabel geo-coding, informasi acara atau pengaturan, dan lainnya."</p>
            <h2>Menjlnkn File Seeder</h2>
            <p>Utk menjlnkn file seeder, ketikkan perintah berikut di terminal :</p>
            <p class="fw-bold text-success">php spark db:seed NamaFileSeeder</p>
            <h2>Menghapus Semua Record Didlm Tabel, & Mengulang Penomoran Auto_Increment</h2>
            <p class="fw-bold text-success">Pd phpmyadmin, pilih tabel > Operations > Empty the table (TRUNCATE)</p>
        </main>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</html>