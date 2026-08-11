<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="row">
    <div class="col">
        <h1><?= $title; ?></h1>
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                <img src="<?=getenv('app_baseURL')?>/img/<?=$comic['cover']?>" class="img-fluid rounded-start" alt="<?=$comic['cover']?>">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?=$comic['title']?></h5>
                        <p class="card-text"><b>Penulis :</b> <?=$comic['author']?></p>
                        <p class="card-text"><small class="text-body-secondary"><b>Penerbit :</b> <?=$comic['publisher']?></small></p>
                        <a href="<?=getenv('app_baseURL')?>/comics/edit/<?= $comic['slug']; ?>" class="btn btn-warning">Edit</a>
                        <form class="d-inline" action="<?=getenv('app_baseURL')?>/comics/<?= $comic['id']; ?>" method="POST">
                            <?= csrf_field(); ?>
                                                              <?php // Override request method dgn method DELETE ?>
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin hapus komik bernama <?=$comic['title']?>?')">Hapus</button>
                        </form><br><br>
                        <a href="<?=getenv('app_baseURL')?>/comics">Kembali ke daftar komik</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>