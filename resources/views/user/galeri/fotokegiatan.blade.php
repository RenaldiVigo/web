<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/user/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha512-Kx22U8IiIwSKYEPPTN6bjolK0XMhQ4ZDcOwR+GzXnoWbpyQDPKNXQfJLOt6o5MzhtXorMb0M+LptuR8h47/I5A==" crossorigin="anonymous" />
    <!-- <link rel="stylesheet" href="galery.css"> -->
    <link rel="shortcut icon" href="{{asset('public/user/img/sd.png')}}">
    <title>SDN 1 Banjar</title>
    <style type="text/css">
    @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700;800;900&display=swap');
      body{
         font-family: 'Raleway', sans-serif;
      }
      .navbar {
  padding-bottom: 15px;
  padding-top: 15px;
}
.navbar .collapse ul li {
  margin-right: 10vh;
  margin-left: -15px;
  font-size: 18px;
}
.navbar .navbar-brand img{
  width: 30px;
  margin-left: 70px;
}
.navbar .collapse .navbar-nav a{
  color: white;
}
.navbar .collapse .navbar-nav .dropdown-menu a{
  color: black;
  margin-bottom: 5px;
}
.navbar h1{
  font-size: 20px;
  color: white;
  margin-top: 10px;
}
.navbar .nav-item:not(:last-child) {
  margin-right: 35px;
}

.dropdown-toggle::after {
   transition: transform 0.15s linear; 
}

.show.dropdown .dropdown-toggle::after {
  transform: translateY(3px);
}

.dropdown-menu {
  margin-top: 0;
}

/* Gallery */

      .lightbox_gallery {
         background-color: whitesmoke;
         overflow-x: hidden;
      }
      .lightbox_gallery .heading h2{
         font-size: 30px;
         font-weight: bold;
         color: #fff;
         text-transform: uppercase;
         padding-top: 15vh;
         margin-bottom: 7vh;
         color: black;
      }
      .lightbox_gallery .photos{
         padding-bottom: 20px;
      }
      .lightbox_gallery .item{
         padding-bottom: 30px;
      }
      .lightbox_gallery .item img{
         border: 3px solid grey;
         border-radius: 10px;
      }
    </style>

</head>
   <body>
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
               <a class="nav-link" href="{{ asset('/')}}">Home</a>
            </li>
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="{{ asset('#guru')}}" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Profil Sekolah
               </a>
               <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                  <a class="dropdown-item" href="{{ asset('sambutan')}}">Sambutan Sekolah</a>
                  <a class="dropdown-item" href="{{ asset('visimisi')}}">Visi-Misi</a>
                  <a class="dropdown-item" href="<?= url("fotokegiatan")?>">Galery</a>
               </div>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="{{ asset('/#guru')}}">Guru</a>
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
               <a class="nav-link" href="{{ asset('/#profil')}}">Berita</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="<?= url("/#contact")?>">Hubungi Kami</a>
            </li>
         </ul>
      </div>
   </div>
</nav>
<!-- Navbar end -->

<!-- Gallery Start -->
<section class="gallery">
<div class="lightbox_gallery">
   <div class="container">
   <div class="heading">
      <h2 class="text-center">Gallery SD N 1 Banjar</h2>
   </div>
   <div class="row photos">
      <div class="col-lg-4 col-md-4 col-sm-6 item">
         <a href="{{asset('public/user/img/1.jpg')}}" data-lightbox="photos">
         <img class="img-fluid" src="{{asset('public/user/img/1.jpg')}}" alt=""></a>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6 item">
         <a href="{{asset('public/user/img/2.jpg')}}" data-lightbox="photos">
         <img class="img-fluid" src="{{asset('public/user/img/2.jpg')}}" alt=""></a>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6 item">
         <a href="{{asset('public/user/img/3.jpg')}}" data-lightbox="photos">
         <img class="img-fluid" src="{{asset('public/user/img/3.jpg')}}" alt=""></a>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6 item">
         <a href="{{asset('public/user/img/4.jpg')}}" data-lightbox="photos">
         <img class="img-fluid" src="{{asset('public/user/img/4.jpg')}}" alt=""></a>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6 item">
         <a href="{{asset('public/user/img/5.jpg')}}" data-lightbox="photos">
         <img class="img-fluid" src="{{asset('public/user/img/5.jpg')}}" alt=""></a>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6 item">
         <a href="{{asset('public/user/img/6.jpg')}}" data-lightbox="photos">
         <img class="img-fluid" src="{{asset('public/user/img/6.jpg')}}" alt=""></a>
      </div>
   </div>
   </div>
</div>
</section>
<!-- Gallery End -->
             
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