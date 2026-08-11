<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="row">
    <div class="col">
        <?php if(session()->getFlashdata('message')): ?>
        <div class="mb-0 alert alert-success alert-dismissible fade show" role="alert">
            <?= session()->getFlashdata('message') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php endif; ?>
        <h1><?= $title; ?></h1>
        <a href="<?=getenv('app_baseURL')?>/comics/create" class="mb-3 btn btn-info">Tambah Komik</a>
        <table class="table table-hover table-striped bg-success-subtle  border border-black">
            <thead class="table-success border border-black">
                <tr>
                    <th scope="col" class="text-center align-middle">No.</th>
                    <th scope="col" class="text-center align-middle">Sampul</th>
                    <th scope="col" class="text-center align-middle">Judul</th>  
                    <th scope="col" class="text-center align-middle">Aksi</th>  
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php foreach($comics as $key=>$c): ?>
                <tr>
                    <td class="text-center align-middle"><?=$key+1?></td>
                    <td><center><img src="<?=getenv('app_baseURL')?>/img/<?=$c['cover']?>" alt="<?=$c['cover']?>" width="100"></center></td>
                    <td class="align-middle"><?=$c['title']?></td>
                    <td class="align-middle"><center><a href="<?=getenv('app_baseURL')?>/comics/<?=$c['slug'];?>" class="btn btn-success">Detail</a></center></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection(); ?>