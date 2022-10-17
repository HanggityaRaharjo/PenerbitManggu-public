<header class="main-header">
            <div class="topbar">
                <div class="container">
                    <div class="main-logo">
                        <a href="/" class="logo">
                            <img src="{{asset('assets')}}/images/manggulogo1.png" width="200" alt="">
                        </a>
                        <span class="fa fa-bars mobile-nav__toggler"></span>
                    </div><!-- /.main-logo -->
  
                    <div class="topbar__left">
                        <div class="topbar__social">
                            <a href="https://twitter.com/penerbit_manggu" class="fab fa-twitter"></a>
                            <a href="https://www.facebook.com/penerbitmanggu" class="fab fa-facebook-square"></a>
                            <a href="https://www.linkedin.com/in/penerbit-manggu-532888122" class="fab fa-linkedin"></a> 
                        </div><!-- /.topbar__social -->
                        <div class="topbar__info">
                            <i class="organik-icon-calling" style="color : #a01f24;"></i>
                            <p>Whatsapp <a href="https://wa.me/082214136659">0822-1413-6659</a></p>
                        </div><!-- /.topbar__info -->
                    </div><!-- /.topbar__left -->
                    <div class="topbar__right">
                        <div class="topbar__info">
                            <i class="organik-icon-email" style="color : #a01f24;"></i>
                            <p>Email <a href="mailto:info@organik.com">penerbitmanggu<br>@gmail.com</a></p>
                        </div><!-- /.topbar__info -->
                            <div class="topbar__social" style="border-left: 2px solid #f4f4f4;border-right: none;margin-left: 40px;margin-right: 0px; padding-right: 0px;">
                            <a href="/login" class="nav-link"><i></i></a>
                            <a href="https://www.instagram.com/penerbit_manggu/" class="fab fa-instagram"></a>    
                            <a href="https://www.youtube.com/c/PenerbitManggu/" class="fab fa-youtube"></a>
                        </div>
                    </div><!-- /.topbar__left -->

                </div><!-- /.container -->
            </div><!-- /.topbar -->
            <nav class="main-menu">
                <div class="container">
                    <ul class="main-menu__list">
                        <li class="dropdown">
                            <a href="/" style="font-size:14px;"><i class="fas fa-home fa-fw"></i>Beranda</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" style="font-size:14px;"><i class="fas fa-globe fa-fw"></i> Tentang</a>
                            <ul>
                                <li><a href="/sekilas-tentang-penerbit-manggu">Sekilas Tentang Penerbit Manggu</a></li>
                                <li><a href="/visi-misi-tujuan">Visi Misi & Tujuan</a></li>
                                <li><a href="/legalitas">Legalitas</a></li>
                                <li><a href="/manajemen">Manajemen</a></li>
                            </ul>
                        </li>
                         <li class="dropdown">
                            <a href="#" style="font-size:14px;"><i class="fas fa-layer-group"></i>Grup Bisnis</a>
                            <ul>
                                <li><a href="/">Penerbitan Buku</a></li>
                                <li><a href="https://www.percetakanmanggu.com">Percetakan Buku</a></li>
                                <li><a href="https://www.toko.penerbitmanggu.co.id">MangguStore</a></li>
                                <li><a href="https://www.manggumedia.com/">MangguMedia</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="https://manggustore.com/" style="font-size:14px;"><i class="fas fa-book"></i>Produk</a>
                            <ul>
                                <li><a href="https://toko.penerbitmanggu.co.id/">Manggu Store</a></li>
                                <li><a href="/katalog-buku">Katalog Buku</a></li>
                                <!-- <li><a href="#">Cara Belanja</a></li>
                                <li><a type="button" data-toggle="modal" data-target="#carabayar">Cara Pembayaran</a></li>
                                <li><a type="button" data-toggle="modal" data-target="#reseller">Jadi Reseller</a></li> -->
                            </ul>
                        </li>
                        <li class="dropdown" style="font-size:10px;"><a href="/penulis"><i class="fas fa-user-edit"></i>Penulis</a></li>
                        <li class="dropdown" style="font-size:12px;"><a href="/data-penjualan-dan-royalti"><i class="fas fa-dollar-sign"></i>Royalti</a></li>
                        <li class="dropdown" style="font-size:8px;"><a href="#"><i class="fas fa-newspaper"></i>Berita & Kegiatan</a>
                          <ul>
                                <li><a href="/manggu-info">Manggu Info</a></li>
                                <li><a type="button" data-toggle="modal" data-target="#event">Manggu Event</a></li>
                                <li><a type="button" data-toggle="modal" data-target="#pressrelease">Press Release</a></li>
                                <li><a href="/product-launching">Product Launching</a></li>
                            </ul>
                        </li>
                         <li class="dropdown">
                            <a href="#" style="font-size:14px;"><i class="fas fa-file-alt"></i>Kirim Naskah</a>
                            <ul>
                                <li><a href="/faq">FAQ</a></li>
                                <li><a href="/cara-kirim-naskah">Cara Kirim Naskah</a></li>
                                <li><a href="/daftar-jadi-penulis">Daftar Jadi Penulis</a></li>
                                
                            </ul>
                        </li>
                         <li class="dropdown">
                            <a href="#" style="font-size:14px;"><i class="fas fa-concierge-bell"></i>Layanan</a>
                            <ul>
                                <li><a href="#">Konversi</a></li>
                                <li><a href="#">Lembaga</a></li>
                            </ul>
                        </li>
                    </ul>
            </nav>
            <!-- /.main-menu -->
        </header><!-- /.main-header -->

<!-- DROPDOWN Modal -->
    <div class="modal fade" id="pressrelease" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
           <img src="{{asset('assets')}}/images/manggulogo1.png" width="400" alt="">
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="carabayar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
           <img src="{{asset('assets')}}/images/Cara Pembayaran.png" width="400" alt="">
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="reseller" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
           <img src="{{asset('assets')}}/images/reseller.png" width="400" alt="">
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="event" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
           <img src="{{asset('assets')}}/images/main-slider/picture-flayer-beasiswa.jpeg" width="400" alt="">
      </div>
    </div>
