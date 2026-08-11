<nav class="navbar navbar-expand-lg bg-info">
    <div class="container">
        <a class="navbar-brand" href="<?=base_url('/')?>"><b>William Lutfir</b></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link <?php //echo 'active'?>" <?php //echo 'aria-current="page"'?> href="<?=base_url('/')?>" id="navLinkHome">Beranda</a></li>
                <li class="nav-item"><a class="nav-link" href="<?=base_url('/about')?>" id="navLinkAbout">Tentang</a></li>
                <li class="nav-item"><a class="nav-link" href="<?=base_url('/contact')?>" id="navLinkContact">Kontak</a></li>
                <li class="nav-item"><a class="nav-link" href="<?=base_url('/comics')?>" id="navLinkComics">Komik</a></li>
                <li class="nav-item"><a class="nav-link" href="<?=base_url('/peoples')?>" id="navLinkPeoples">Orang</a></li>
                <li class="nav-item"><a class="nav-link" href="<?=base_url('/materi')?>" id="navLinkMaterials">Materi</a></li>
            </ul>
        </div>
    </div>
</nav>
<script>
    if((window.location.pathname)==='/'){
        navLinkHome.setAttribute('aria-current','page')
        navLinkHome.classList.add('active','fw-medium')
    }
    else if((window.location.pathname).includes('about')){
        navLinkAbout.setAttribute('aria-current','page')
        navLinkAbout.classList.add('active','fw-medium')
    }
    else if((window.location.pathname).includes('contact')){
        navLinkContact.setAttribute('aria-current','page')
        navLinkContact.classList.add('active','fw-medium')
    }
    else if((window.location.pathname).includes('comics')){
        navLinkComics.setAttribute('aria-current','page')
        navLinkComics.classList.add('active','fw-medium')
    }
    else if((window.location.pathname).includes('materi')){
        navLinkMaterials.setAttribute('aria-current','page')
        navLinkMaterials.classList.add('active','fw-medium')
    }
    else if((window.location.pathname).includes('peoples')){
        navLinkPeoples.setAttribute('aria-current','page')
        navLinkPeoples.classList.add('active','fw-medium')
    }
</script>