<!doctype html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Pagination & Searching</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    </head>
    <body>
        <?= $this->include('layout/navbar'); ?>
        <main class="mt-2 container" style="text-align: justify;">
            <h1>Pagination & Searching</h1>
            <h2>paginate(number)</h2>
            <p>paginate(number), method digunkn utk menentukn data yg ditampilkn dihalaman ada berapa banyak record, disetiap halamannya.</p>
            <h2>pager()</h2>
            <p>pager(), method digunkn utk mengenerate komponen link paginationnya.</p>
            <h2>$pager->links() & $pager->simpleLinks()</h2>
            <p>Digunkn utk menampilkn link paginationnya di halaman viewsnya.</p>
            
        </main>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</html>