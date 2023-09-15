<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

     <!-- Scripts -->
     <script src="{{ asset('js/app.js') }}" defer></script>

     <!-- Styles -->
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
</head>
<body>

    <nav   class="navbar navbar-expand-lg fixed-top bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand text-white" href="#">Laundry Hitam</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link text-white" href="">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#layanan">Layanan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#lokasi">Lokasi</a>
              </li>
            </ul>
            <div>
                <a class="navbar-brand text-white" href="{{ route('login') }}">Login</a>
            </div>
          </div>
        </div>
      </nav>
   <div id="hero">
    <div class="container">
        <div class="row align-items-center text-center">
            <div class="col-md-6">
                <h1 class="display-4">Laravel Laundry</h1>
                <p class="mb-5">Pelayanan yang bagus dan murah</p>
            </div>
            <div class="col-md-6">
                <img src="/images/hero.svg" class="img-fluid" alt="">
            </div>
        </div>
    </div>
   </div>
   <section id="layanan">
   <div id="layanan">
       <div class="container">
           <div class="row text-center">
               <div class="col-md-12">
                   <h1>Layanan</h1>
               </div>
               @foreach ($layanan as $item)
                    <div class="col-lg-3 col-6">
                        <div class="card shadow my-4">
                            <div class="card-body">
                                <h2 class="mb-4">{{$item->nama}}</h2>
                                <p>Durasi : {{$item->durasi}} jam</p>
                                <p>Harga : Rp. {{number_format($item->harga)}}</p>
                            </div>
                        </div>
                    </div>
               @endforeach
           </div>
       </div>
   </div>
    </section>

    <section id="lokasi">
   <div id="lokasi">
       <div class="container">
           <div class="row text-center">
               <div class="col-md-12">
                   <h1>Lokasi</h1>
               </div>
               <div class="col-md-12 my-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63408.797432942614!2d106.74847624863281!3d-6.640733399999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c8b16ee07ef5%3A0x14ab253dd267de49!2sSMK%20Negeri%204%20Bogor%20(Nebrazka)!5e0!3m2!1sid!2sid!4v1694737071033!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
               </div>
           </div>
       </div>
   </div>
</section>

   <div id="footer">
       <p class="text-center">Copyright Barudak Hitam</p>
   </div>
</body>
</html>
