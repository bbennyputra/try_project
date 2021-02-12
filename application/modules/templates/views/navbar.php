 <!-- Navigation -->
 <nav class="navbar navbar-expand-lg navbar-dark bg-custom-2 fixed-top" id="mainNav">
     <div class="container">
         <a href="<?= base_url('blog') ?>"><img src="<?= base_url('assets/') ?>img/logo_small.png"></a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
             aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarResponsive">
             <ul class="navbar-nav ml-auto">
                 <li class="nav-item">
                     <a class="nav-link js-scroll-trigger text-white " href="<?= base_url('blog') ?>">Beranda</a>
                 </li>
                 <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle text-white " href="#" id="navbarDropdown" role="button"
                         data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         Tentang Kami
                     </a>
                     <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                         <a class="dropdown-item btn3" href="<?= base_url('blog/Blog/Auriga') ?>">Tentang
                             Auriga</a>
                         <div class="dropdown-divider"></div>
                         <a class="dropdown-item btn3" href="<?= base_url('blog/Blog/Auriga') ?>">Hukum
                             Lingkungan</a>
                         <div class="dropdown-divider"></div>
                         <a class="dropdown-item btn3" href="<?= base_url('blog/Blog/Auriga') ?>">Elearning</a>
                     </div>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link js-scroll-trigger text-white"
                         href="<?= base_url('blog/Blog/Kursus') ?>">Kursus</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link js-scroll-trigger text-white"
                         href="<?= base_url('blog/Blog/Kalender') ?>">Kalender</a>
                 </li>
                 <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                         data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         Forum
                     </a>
                     <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                         <a class="dropdown-item btn3" href="<?= base_url('blog/Blog/Japri') ?>">Japri Tenang Ahli</a>
                         <div class="dropdown-divider"></div>
                         <a class="dropdown-item btn3" href="<?= base_url('blog/Blog/Diskusi') ?>">Diskusi di Forum</a>
                     </div>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link js-scroll-trigger text-white"
                         href="<?= base_url('blog/Blog/TenagaAhli') ?>">Tenaga
                         Ahli</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link js-scroll-trigger text-white" href="<?= base_url('blog/Blog/Kontak') ?>">KontaK
                         Kami</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link js-scroll-trigger text-white"
                         href="<?= base_url('auth/Auth/Registrasi') ?>">Registrasi</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link js-scroll-trigger text-white" href="<?= base_url('auth/Auth') ?>">Login</a>
                 </li>
             </ul>
         </div>
     </div>
 </nav>