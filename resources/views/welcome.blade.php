<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Selamat datang di Website SDN 1 Banjar</title>
      <!-- Fonts -->
      <link rel="shortcut icon" href="{{asset('public/user/img/sd.png')}}">
      <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>           
      <meta name="viewport" content="width=device-width,initial-scale=1.0">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="{{asset('public/user/css/style.css')}}">
   </head>
   <body>
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
         <div class="container-fluid">
            <a class="navbar-brand" href="{{ asset('/')}}">
            <img class="logo horizontal-logo" src="{{asset('public/user/img/tutwuri.png')}}" alt="forecastr logo">
            </a>
            <h1>SDN 1 Banjar</h1>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                     <a class="nav-link" href="{{ url('/') }}">Home</a>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Profil Sekolah
                     </a>
                     <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                        <a class="dropdown-item" href="{{ asset('sambutan')}}">Sambutan Sekolah</a>
                        <a class="dropdown-item" href="{{ asset('visimisi')}}">Visi-Misi</a>
                        <a class="dropdown-item" href="<?= url("fotokegiatan")?>">Galery</a>
                     </div>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="{{ asset('#guru')}}">Guru</a>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Siswa
                     </a>
                     <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                        <a class="dropdown-item" href="<?= url("kelas1")?>">Kelas 1</a>
                        <a class="dropdown-item" href="<?= url("kelas2")?>">Kelas 2</a>
                        <a class="dropdown-item" href="<?= url("kelas3")?>">Kelas 3</a>
                        <a class="dropdown-item" href="<?= url("kelas4")?>">Kelas 4</a>
                        <a class="dropdown-item" href="<?= url("kelas5")?>">Kelas 5</a>
                        <a class="dropdown-item" href="<?= url("kelas6")?>">Kelas 6</a>
                     </div>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="{{ asset('#profil')}}">Berita</a>
                  </li>
                  <li class="nav-item mr-3">
                     <a class="nav-link" href="<?= url("#contact")?>">Hubungi Kami</a>
                  </li>
               </ul>
            </div>
         </div>
      </nav>
      <!-- Navbar End -->
      <!-- logo -->
      <section id="awal" class="awal">
         <div class="container">
            <div class="row pt-4 mb-4">
               <div class="col text-center">
               </div>
            </div>
            <div class="container text-center">
               <img src="{{ asset('public/user/img/sd.png')}}" width="25%" alt="sd.png">
               <h1 class="display-4"><b>SD NEGERI 1 BANJAR</b></h1>
               <h2 class="welcome">Mewujudkan Siswa Yang <span class="typed"></span></h2>
            </div>
         </div>
      </section>
      <!-- section profil sekolah -->
      <section id="profil" class="profil">
         <div class="container">
         <div class="row">
            <div class="col text-center">
               <h2><b>Berita Terbaru</b></h2>
            </div>
         </div>
         <div class="card-deck">
            <div class="card">
               <a href="<?= url("berita")?>" target="_blank"><img class="card-img-top"  src="{{asset('public/user/img/12.jpg')}}"  width="300" height="260" alt="2"></a>
               <div class="card-body">
                  <h5 class="card-text" style="padding-bottom:5px;"><b>Memperingati HUT RI ke-75</b></h5>
                  <p>Peringatan HUT RI ke 75 yang dilakukan oleh para siswa SD N 1 Banjar </p>
                  <a target="_blank" href="<?= url("berita")?>">READ MORE
                  </a> 
               </div>
            </div>
            <div class="card">
               <a href="<?= url("berita")?>" target="_blank"><img class="card-img-top" src="{{asset('public/user/img/13.jpg')}}" width="300" height="260" alt="2"></a>
               <div class="card-body">
                  <h5 class="card-text" style="padding-bottom:5px;"><b>Sambang Belajar Lare (SAMBEL BANJAR)</b></h5>
                  <p>Sambang Belajare Lare (SAMBEL BANJAR) merupakan kegiatan belajara yang dilakukan para guru SD N 1 Banjar </p>
                  <a target="_blank" href="<?= url("berita")?>">READ MORE
                  </a> 
               </div>
            </div>
            <div class="card">
               <a href="<?= url("berita")?>" target="_blank"><img class="card-img-top" src="{{asset('public/user/img/14.jpg')}}" width="300" height="260" alt="2"></a>
               <div class="card-body">
                  <h5 class="card-text" style="padding-bottom:5px;"><b>PPDB SDN 1 BANJAR dalam ERA NEW NORMAL</b></h5>
                  <p>Informasi hasil seleksi Penerimaan Peserta Didik Baru (PPDB) Tahun Pelajaran 2020/2021</p>
                  <a target="_blank" href="<?= url("berita")?>">READ MORE
                  </a>            
               </div>
            </div>
         </div>
      </section>
      <!-- Guru Start-->
      <section class="tabelguru" id="guru">
         <div class="container">
            <div class="row pt-4 mb-4">
               <div class="col text-center">
                  <h2 class="guru"><b>Daftar Guru</b></h2>
               </div>
            </div>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
               <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
               </ol>
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="row">
                        <div class="col-3" id="col1">
                           <a href="<?= url("tabelguru1")?>"><img class="d-block w-100" src="{{asset('public/user/img/man.png')}}" alt="guru 1"></a>
                           <h4>ABDUL AZIS, S.Pd</h4>
                        </div>
                        <div class="col-3" id="col1">
                           <a href="<?= url("tabelguru2")?>"><img class="d-block w-100" src="{{asset('public/user/img/man.png')}}" alt="guru 1"></a>
                           <h4>WITONO, S.Pd</h4>
                        </div>
                        <div class="col-3" id="col1">
                           <a href="<?= url("tabelguru3")?>"><img class="d-block w-100" src="{{asset('public/user/img/man.png')}}" alt="guru 1"></a>
                           <h4>ISTILA'AH, S.Pd</h4>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="row">
                        <div class="col-3" id="col1">
                           <a href="<?= url("tabelguru4")?>"><img class="d-block w-100" src="{{asset('public/user/img/man.png')}}" alt="guru 1"></a>
                           <h4>AMAK PADHOLI, S.Pd</h4>
                        </div>
                        <div class="col-3" id="col1">
                           <a href="<?= url("tabelguru5")?>"><img class="d-block w-100" src="{{asset('public/user/img/man.png')}}" alt="guru 1"></a>
                           <h4>ZULIYATIN NURYAH, S.Pd</h4>
                        </div>
                        <div class="col-3" id="col1">
                           <a href="<?= url("tabelguru6")?>"><img class="d-block w-100" src="{{asset('public/user/img/man.png')}}" alt="guru 1"></a>
                           <h4>RINI ANTIKA</h4>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="row">
                        <div class="col-3" id="col1">
                           <a href="<?= url("tabelguru4")?>"><img class="d-block w-100" src="{{asset('public/user/img/man.png')}}" alt="guru 1"></a>
                           <h4>LU'LUIL MAKNUN, Spd AID</h4>
                        </div>
                        <div class="col-3" id="col1">
                           <a href="<?= url("tabelguru5")?>"><img class="d-block w-100" src="{{asset('public/user/img/man.png')}}" alt="guru 1"></a>
                           <h4>IDA SAFITRI</h4>
                        </div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="sr-only">Previous</span>
               </a>
               <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="sr-only">Next</span>
               </a>
            </div>
            <a href="<?= url("guruall")?>">
               <button type="button" class="btn">
                  <h5><b>TAMPILKAN SEMUA GURU</b></h5>
               </button>
            </a>
         </div>
      </section>
      <!-- Guru End -->
      <!-- Hubungi Kami Start -->
      <section class="contact" id="contact">
         <div class="container">
            <div class="col text-center">
               <h2><b>Hubungi Kami</b></h2>
            </div>
            <div class="row">
               <div class="col-md-7">
                  <h4><b>Denah Lokasi</b></h4>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13636.471345731521!2d114.263614!3d-8.200399!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x67a27ed47849490e!2sSDN%201%20BANJAR!5e1!3m2!1sen!2sid!4v1602037569224!5m2!1sen!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
               </div>
               <div class="col-md-5">
                  <h4><strong>Kontak</strong></h4>
                  <div class="det">
                     <img src="{{ asset('public/user/img/phone.png')}}" alt="phone" class="rounded" style="width: 30px;">
                     <h2>Phone</h2>
                     <h1>-</h1>
                  </div>
                  <div class="det">
                     <img src="{{ asset('public/user/img/email.png')}}" alt="email" class="rounded" style="width: 30px;">
                     <h2>Email</h2>
                     <h1>sdn1banjar@yahoo.com</h1>
                  </div>
                  <div class="det">
                     <img src="{{ asset('public/user/img/address.png')}}" alt="address" class="rounded" style="width: 30px;">
                     <h2>Address</h2>
                     <h1>Jl. Banjar Licin, Dus.Krajan Rt. 04 Rw 01, Des. Banjar, Kec. Licin</h1>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Hubungi Kami End -->
      <p class="copyright">&copy; SDN 1 BANJAR</p>
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="{{ asset('public/user/js/bootstrap.min.js')}}"></script>
      <script src="{{ asset('public/user/js/jquery.min.js')}}"></script>
      <script src="{{ asset('public/user/js/typed.js')}}"></script>
      <script src="{{ asset('public/user/js/halaman.js')}}"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
   </body>
</html>