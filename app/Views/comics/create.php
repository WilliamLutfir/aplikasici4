<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="row">
    <div class="col-8">
        <h1 class="mb-3"><?= $title; ?></h1>
        <!-- <pre> -->
        <?php //var_dump(session("_ci_validation_errors")/*->getFlashdata()*/)?>
        <?php //echo \Config\Services::validation()->listErrors() ?>
        <?php //if (session()->has("validation")): ?>
        <!-- <ul> -->
        <?php //foreach (session("validation") as $error): ?>
            <!-- <li><?php //echo $error ?></li> -->
        <?php //endforeach; ?>
        <!-- </ul> -->
    <?php //endif; ?>
        <!-- </pre> -->
        <form action="<?=getenv('app_baseURL')?>/comics/save" method="POST" enctype="multipart/form-data" <?php echo 'novalidate'?>>
            <?= csrf_field(); ?>
            <div class="row mb-3">
                <label for="title" class="col-sm-2 col-form-label">Judul</label>
                <div class="col-sm-10 px-4">
                    <input type="text" class="form-control <?=isset(session()->getFlashdata('validation')['title'])?'is-invalid':''?>"
                        id="title" name="title" autocomplete="off" value="<?=old('title');?>" required autofocus>
                    <div class="invalid-feedback"><?=isset(session()->getFlashdata('validation')['title'])?session()->getFlashdata('validation')['title']:''?></div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="author" class="col-sm-2 col-form-label">Penulis</label>
                <div class="col-sm-10 px-4">
                    <input type="text" class="form-control <?=isset(session()->getFlashdata('validation')['author'])?'is-invalid':''?>" id="author" name="author" autocomplete="off" value="<?=old('author');?>" required>
                    <div class="invalid-feedback"><?=isset(session()->getFlashdata('validation')['author'])?session()->getFlashdata('validation')['author']:''?></div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="publisher" class="col-sm-2 col-form-label">Penerbit</label>
                <div class="col-sm-10 px-4">
                    <input type="text" class="form-control <?=isset(session()->getFlashdata('validation')['publisher'])?'is-invalid':''?>" id="publisher" name="publisher" autocomplete="off" value="<?=old('publisher');?>" required>
                    <div class="invalid-feedback"><?=isset(session()->getFlashdata('validation')['publisher'])?session()->getFlashdata('validation')['publisher']:''?></div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="cover" class="col-sm-2 col-form-label">Sampul</label>
                <div class="col-sm-10 px-4">
                    <!-- <input type="text" class="form-control <?php //echo isset(session()->getFlashdata('validation')['cover'])?'is-invalid':''?>" id="cover" name="cover" autocomplete="off" value="<?php //echo old('cover');?>" required> -->
                    <!-- <div class="invalid-feedback"><?php //echo isset(session()->getFlashdata('validation')['cover'])?session()->getFlashdata('validation')['cover']:''?></div> -->
                    
                    <input class="form-control <?=isset(session()->getFlashdata('validation')['cover'])?'is-invalid':''?>" type="file" id="cover" name="cover" onchange="document.previewImg()">
                    <div class="invalid-feedback"><?= isset(session()->getFlashdata('validation')['cover'])?session()->getFlashdata('validation')['cover']:''?></div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-2 col-form-label"></div>
                <div class="col-sm-10 px-4">
                    <img src="<?=getenv('app_baseURL')?>/img/Default.PNG" class="img-thumbnail" alt="Default.PNG" width="110">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2 col-form-label"></div>
                <div class="col-sm-10 px-4">
                    <button type="submit" class="btn btn-info">Tambah Komik</button>
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