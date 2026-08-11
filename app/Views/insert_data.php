<!doctype html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Insert Data</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    </head>
    <body>
        <?= $this->include('layout/navbar'); ?>
        <main class="mt-2 container" style="text-align: justify;">
            <h1>Insert Data</h1>
            <h2>CSRF (Cross-Site Request Forgery)</h2>
            <p>Fungsi <b>csrf_field();</b> digunakn utk menangkal CSRF, agar menjaga formnya hanya bisa diinput lwt halaman ini saja. Jika ada hacker yg ingin membajak formya melalui aplikasi pihak ketiga yg jahat/halaman selain dari aplikasi web yg bersangkutan, tdk akan bisa dikirim datanya. Formnya hanya bisa berjln pd halaman aplikasi web yg bersangkutan.</p>
            <h2>$this->request->getVar('arrKey'); Dan $this->request->getPost('arrKey');</h2>
            <p>Diletakkn didlm suatu file control, yg berfungsi utk mengambil nilai request method GET atau POST.</p>
            <p><b>$this->request->getVar('arrKey');</b> = utk mengambil nilai request method GET atau POST.</p>
            <p><b>$this->request->getPost('arrKey');</b> = utk mengambil nilai request method POST saja.</p>
            <h2>throw new \CodeIgniter\Exceptions<br>\PageNotFoundException("Pesan",KodeStatusResponsHTTP);</h2>
            <p>Utk mengembalikn berupa halaman Page Not Found Exception.</p>
            <h2>Memasukkan Data Ke Tabel Didlm Database</h2>
            <p>Menggunakn perintah :</p>
            <p><b>$this->instansiasiModel->save([<br>
                'namaField'=>$this->request->getPost('arrKey'),<br>
                'namaField'=>$this->request->getPost('arrKey'),<br>
                ...
                <br>
            ]);</b></p>
            <h2>Mengubah String Yg Ramah Utk Ada Di URL (Membuat Slug)</h2>
            <p>Menggunakn perintah :</p>
            <p><b>url_title('string','separator',lowercase=boolean);</b></p>
            <h2>Redirect Pd CodeIgniter</h2>
            <p>Redirect adalah perintah yg digunakn utk mengarahkn user ke suatu halaman tertentu.</p>
            <p>Menggunakn perintah :</p>
            <p><b>redirect()->to('URLhalaman');</b></p>
            <h2>protected $allowedFields=['namaField','namaField'];</h2>
            <p>Diletakkn didlm suatu file model, yg berfungsi utk mengizinkn field mana saja pd tabel yg boleh diisikn oleh user.</p>
            <h2>Flash Data</h2>
            <p>Flash Data digunakn utk membuat flash notifikasi. Flash Data adalah data yg ada didlm variabel super global session yg hanya muncul 1x pd halaman saat ini, jika halaman direfresh/berpindah ke halaman lain, data flash tsb akan hilang.</p>
            <p>Utk mengatur flash data, gunakn perintah berikut :</p>
            <p><b>session()->setFlashdata('arrKey','pesan');</b></p>
            <p>Utk memunculkn flash data, gunakn perintah berikut :</p>
            <p><b>session()->getFlashdata('arrKey');</b></p>
        </main>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</html>