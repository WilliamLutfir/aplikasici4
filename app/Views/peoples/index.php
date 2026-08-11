<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="row">
    <div class="col-md-6">
        <h1><?= $title; ?></h1>
        <form action="" method="GET">
            <div class="input-group mb-3">
                <input type="search" class="form-control" placeholder="Cari nama seseorang..." aria-label="Search for someone's name" name="search" autocomplete="off" value="<?= $_GET['search']??''; ?>">
                <button class="btn btn-info fw-medium" type="submit">Cari</button>
            </div>
        </form>
    </div>
</div>
<div class="row">
    <div class="col">
        <table class="table table-hover table-striped bg-success-subtle  border border-black">
            <thead class="table-success border border-black">
                <tr>
                    <th scope="col" class="text-center align-middle">No.</th>
                    <th scope="col" class="text-center align-middle">Nama</th>
                    <th scope="col" class="text-center align-middle">Alamat</th>  
                    <th scope="col" class="text-center align-middle">Aksi</th>  
                </tr>
            </thead>
            <tbody class="table-group-divider">
                      <?php // Sesuai dgn 1 halaman menampilkn brp record! (lihat di file controllernya, parameter dari method paginate()!) ?>
                <?php $i= 1 + (10 * ($currentPage-1)) ?>
                <?php foreach($peoples as $p): ?>
                <tr>
                    <td class="text-center align-middle"><?=$i++?></td>
                    <td class="align-middle"><?= $p['name']; ?></td>
                    <td class="align-middle"><?=$p['address']?></td>
                    <td class="align-middle"><center><a class="btn btn-success">Detail</a></center></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?= $pager->links('peoples','peoples_pagination'); ?>
    </div>
</div>
<?= $this->endSection(); ?>