<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="row">
    <div class="col-8">
        <h1 class="mb-3"><?= $title; ?></h1>
        <?php // var_dump(session()->getFlashdata('validation'))?>
        <?php //var_dump(session("_ci_validation_errors")/*->getFlashdata()*/)?>
        <form action="<?=getenv('app_baseURL')?>/comics/update/<?= $comic['id']; ?>" method="POST" enctype="multipart/form-data" <?php echo 'novalidate'?>>
            <?= csrf_field(); ?>
            <input type="hidden" name="slug" value="<?= $comic['slug']; ?>">
            <input type="hidden" name="oldcover" value="<?= $comic['cover']; ?>">
            <div class="row mb-3">
                <label for="title" class="col-sm-2 col-form-label">Judul</label>
                <div class="col-sm-10 px-4">
                    <input type="text" class="form-control <?=isset(session("_ci_validation_errors")['title'])?'is-invalid':''?>"
                        id="title" name="title"autocomplete="off" value="<?= (old('title'))?old('title'):$comic['title'] ?>" required autofocus>
                    <div class="invalid-feedback"><?=session("_ci_validation_errors")['title']??''?></div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="author" class="col-sm-2 col-form-label">Penulis</label>
                <div class="col-sm-10 px-4">
                    <input type="text" class="form-control <?=isset(session("_ci_validation_errors")['author'])?'is-invalid':''?>" id="author" name="author" autocomplete="off" value="<?= (old('author'))?old('author'):$comic['author'] ?>" required>
                    <div class="invalid-feedback"><?=session("_ci_validation_errors")['author']??''?></div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="publisher" class="col-sm-2 col-form-label">Penerbit</label>
                <div class="col-sm-10 px-4">
                    <input type="text" class="form-control <?=isset(session("_ci_validation_errors")['publisher'])?'is-invalid':''?>" id="publisher" name="publisher" autocomplete="off" value="<?= (old('publisher'))?old('publisher'):$comic['publisher'] ?>" required>
                    <div class="invalid-feedback"><?=session("_ci_validation_errors")['publisher']??''?></div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="cover" class="col-sm-2 col-form-label">Sampul</label>
                <div class="col-sm-10 px-4">
                    <input class="form-control <?=isset(session("_ci_validation_errors")['cover'])?'is-invalid':''?>" type="file" id="cover" name="cover" onchange="document.previewImg()">
                    <div class="invalid-feedback"><?=session("_ci_validation_errors")['cover']??''?></div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-2 col-form-label"></div>
                <div class="col-sm-10 px-4">
                    <img src="<?=getenv('app_baseURL')?>/img/<?= $comic['cover']; ?>" class="img-thumbnail" alt="<?= $comic['cover']; ?>" width="110">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2 col-form-label"></div>
                <div class="col-sm-10 px-4">
                    <button type="submit" class="btn btn-info">Ubah Komik</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    document.moveCursorToEnd=function(){
        let lengthInputTitle=title.value.length
        title.setSelectionRange(lengthInputTitle,lengthInputTitle)
    };window.onload=document.moveCursorToEnd()

    document.previewImg=function(){
        let fileCover=new FileReader()
        fileCover.readAsDataURL(cover.files[0])
        fileCover.onload=function(e){
            document.querySelector('.img-thumbnail').src=e.target.result;
        }
    }
</script>
<?= $this->endSection(); ?>