<!doctype html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Intro CodeIgniter 4</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    </head>
    <body>
        <?php // require_once 'layout/navbar.php';?>
        <?= $this->include('layout/navbar'); ?>

        <main class="mt-2 container"><h1>Intro CodeIgniter 4</h1>
        <h2>Apa Itu Framework</h2>
        <p>"Framework (Software Framework) adalah sebuah abstraksi pembuatn perangkat lunak dmna di dlmnya menyediakn fungsi2 umum yg dpt digunakn & diubah sesuai kebutuhan."</p>
        <p><a href="https://en.wikipedia.org/wiki/Software_framework" target="_blank"><button>Informasi Lebih Lanjut!</button></a></p>
        <h2>Software Framework</h2>
        <ul>
            <li>Kerangka kerja.</li>
            <li>Menyediakn standar & aturan pembuatn perangkat lunak.</li>
            <li>Reusability.</li>
            <li>Bisa terdiri dari program, compiler, library, tool sets, api, komponen, dll.</li>
            <li>Semua bahasa pemrograman populer, pasti memiliki framework.</li>
        </ul>
        <h2>Web Application Framework</h2>
        <center><table class="table table-hover bg-success-subtle table-bordered border border-black w-75">
            <thead class="table-success table-bordered border border-black">
                <tr>
                    <th scope="col" class="text-center align-middle">Bahasa Pemrograman</th>
                    <th scope="col" class="text-center align-middle">Framework</th>  
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <tr>
                    <td>PHP</td>
                    <td>CodeIgniter, Laravel, Symphony, Yii</td>
                </tr>
                <tr>
                    <td>JavaScript</td>
                    <td>React, Vue, Express, Ember</td>
                </tr>
                <tr>
                    <td>Java</td>
                    <td>Spring, JSF, Struts, Hibernate</td>
                </tr>
                <tr>
                    <td>Python</td>
                    <td>Django, CherryPy, Flask, Pyramid</td>
                </tr>
                <tr>
                    <td>CSS</td>
                    <td>Bootstrap, Tailwind, Materialize</td>
                </tr>
            </tbody>
        </table></center>
        <h2>Knp Menggunakn Framework</h2>
        <ul>
            <li>Mempersingkat waktu pengembangan.</li>
            <li>Struktur aplikasi yg terorganisir.</li>
            <li>Tools & Libraries.</li>
            <li>Fleksibilitas.</li>
            <li>Security.</li>
            <li>Mempermudah teamwork.</li>
        </ul>
        <h2>Kekurangan Menggunakn Framework</h2>
        <ul>
            <li>Eksekusi yg lebih lambat.</li>
            <li>Butuh waktu belajar.</li>
            <li>Solusi umum utk masalah yg spesifik.</li>
            <li>Keterbatasan kendali.</li>
            <li>Dependency.</li>            
        </ul>
        <h2>Definisi CodeIgniter</h2>
        <p>"CodeIgniter adalah sebuah Application Development Framework atau toolkit utk membuat website menggunakn bahasa PHP. Bertujuan utk mempercpt proses pembuatn dgn menyediakn banyak library yg dibutuhkn."</p>
        <p><a href="https://codeigniter.com/user_guide/intro/index.html" target="_blank"><button>Informasi Lebih Lanjut!</button></a></p>
        <h2>Knp Pakai CodeIgniter</h2>
        <ul>
            <li>Small footprint (Framework kecil).</li>
            <li>Performance yg baik.</li>
            <li>Hampir 'zero configuration'.</li>
            <li>Tdk harus menggunakn Command Line.</li>
            <li>Tdk harus mengikuti aturan coding yg ketat.</li>
            <li>Tdk harus menggunakn Templating Engine.</li>
            <li>Dokumentasi yg jelas.</li>
            <li>Menggunakn pattern MVC.</li>
        </ul>
        <h2>MVC (Model-View-Controller)</h2>
        <p>"MVC adalah sebuah pola arsitektur pd perancangan perangkat lunak berorientasi objek, yg memisahkn antara tampilan, data & proses."</p>
        <p><a href="https://en.wikipedia.org/wiki/Model-view-controller" target="_blank"><button>Informasi Lebih Lanjut!</button></a></p>
        <p><img src="<?=base_url('img/DiagramMVC.PNG')?>" alt="Diagram MVC" width="500"></p>
        <p><img src="<?=base_url('img/DiagramMVC2.PNG')?>" alt="Diagram MVC2" width="500"></p>
        <h2>Pre-Requisite</h2>
        <ul>
            <li>PHP Dasar.</li>
            <li>OOP PHP.</li>
            <li>MVC PHP.</li>
        </ul>
        <h2>System Requirement</h2>
        <ul>
            <li>PHP 7.2++</li>
            <li>*intl* extentions & *mbstring* extentions</li>
            <li>libcurl</li>
            <li>MySQL 5.1++</li>
        </ul></main>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</html>