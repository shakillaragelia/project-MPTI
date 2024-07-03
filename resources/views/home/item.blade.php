<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Sekarang</title>
    <link rel="icon" type="image/png" href="{{ asset('profil/img/logo.png') }}">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <!-- Font Google APIs -->
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&family=Comfortaa:wght@300..700&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('profil/css/product.css?v=1.0') }}">
    <link rel="stylesheet" href="{{ asset('profil/css/nav.css') }}">
</head>
<body>
  <!-- Navbar Start -->
  <nav class="navbar1">
    <a href="{{route('welcome')}}">
        <img src="{{ asset('profil/img/logo.png') }}" class="navbar-logo" alt="Terrarium.qu Logo">
    </a>
    <div class="navbar1-nav">
        <a href="{{route('welcome')}}">HOME</a>
        <a href="{{route('about')}}">TENTANG KAMI</a>
        <a href="{{route('item')}}">PRODUK</a>
        <a href="{{route('foto')}}">GALERI</a>
        <a href="{{route('panduan')}}">PANDUAN</a>
        <a href="{{route('kontak')}}">KONTAK</a>
    </div>
    <div class="navbar1-extra">
        <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
    </div>
  </nav>
  <!-- Navbar End -->

  <!-- Hero Section Start -->
  <section class="hero" id="home">
    <main class="content">
        <p>PRODUK KAMI</p>
        <h1>Membawa Hutan Kedalam Ruangan</h1>
    </main>
  </section>
  
  <br><br>
  <!-- Product Section Start -->
  <section id="product" class="product">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="product-card">
            <img src="{{ asset('profil/img/Special/spesial.png')}}" class="card-img-top" alt="Kit DIY Terrarium Tipe Premium">
            <div class="card-body">
              <h5 class="card-title">TERRARIUM.QU KIT SPECIAL EDITION</h5>
              <p class="card-text">Terrarium.qu</p>
              <p class="card-text"><small class="text-muted">RP. 160.000,-</small></p>
              <a href="{{route('detail_spes')}}" class="btn btn-outline-success">Lihat detail <i class="fas fa-arrow-up-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="product-card">
            <img src="{{ asset('profil/img/Premium/premium.png')}}" class="card-img-top" alt="Kit DIY Terrarium Tipe Premium">
            <div class="card-body">
              <h5 class="card-title">TERRARIUM.QU KIT PREMIUM</h5>
              <p class="card-text">Terrarium.qu</p>
              <p class="card-text"><small class="text-muted">RP. 75.000,-</small></p>
              <!-- <p class="card-text"><small class="text-muted">RP. 65.000,-</small></p> -->
              <a href="{{route('detail_prem')}}" class="btn btn-outline-success">Lihat detail <i class="fas fa-arrow-up-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="product-card">
            <img src="{{ asset('profil/img/Medium/medium.png')}}" class="card-img-top" alt="Kit DIY Terrarium Tipe Medium">
            <div class="card-body">
              <h5 class="card-title">TERRARIUM.QU KIT MEDIUM</h5>
              <p class="card-text">Terrarium.qu</p>
              <p class="card-text"><small class="text-muted">RP. 50.000,-</small></p>
              <!-- <p class="card-text"><small class="text-muted">RP. 40.000,-</small></p> -->
              <a href="{{route('detail_med')}}" class="btn btn-outline-success">Lihat detail <i class="fas fa-arrow-up-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="product-card">
            <img src="{{ asset('profil/img/Standard/standar.jpg')}}" class="card-img-top" alt="Kit DIY Terrarium Tipe Standard">
            <div class="card-body">
              <h5 class="card-title">TERRARIUM.QU KIT STANDAR</h5>
              <p class="card-text">Terrarium.qu</p>
              <p class="card-text"><small class="text-muted">RP. 25.000,-</small></p>
              <!-- <p class="card-text"><small class="text-muted">RP. 20.000,-</small></p> -->
              <a href="{{route('detail_stand')}}" class="btn btn-outline-success">Lihat detail <i class="fas fa-arrow-up-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>  
 <!-- Product Section End -->

  <!-- Footer Start -->
  <footer>
    <div class="footer-container">
      <div class="footer-left">
        <a href="{{route('welcome')}}">
        <img src="{{ asset('profil/img/logo.png')}}" alt="Terrarium.qu Logo" class="footer-logo"></a>
      </div>
      <div class="footer-center">
        <h3>TERRARIUM.QU</h3>
        <p>Membawa Hutan Kedalam Ruangan</p><br>
        <p>© Created and Copyright by Tech Titans. 2024.</p>
      </div>
      <div class="footer-right">
        <div class="social-icons">
            <a href="https://www.instagram.com/terrarium.qu?igsh=MW50ZHpjNTYyb2YxNQ=="><i class="fab fa-instagram"></i></a>
            <a href="https://www.tiktok.com/@terrarium.qu?_t=8mamJWuB8St&_r=1"><i class="fab fa-tiktok"></i></a>
            <a href="https://wa.me/089608543320"><i class="fab fa-whatsapp"></i></a>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer Section End -->

  <!-- Feather Icons -->
  <script>
    feather.replace();
  </script>

  <!-- Bootstrap JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <!-- My JavaScript -->
  <script>
    // Toggle class active
    const navbar1Nav = document.querySelector(".navbar1-nav");

    // ketika humburger menu di klik
    document.querySelector("#hamburger-menu").onclick = () => {
      navbar1Nav.classList.toggle("active");
    };

    //Klik diluar sidebar untuk menghilangkan nav
    document.addEventListener("click", function (e) {
      const hamburger = document.querySelector("#hamburger-menu");
      if (!hamburger.contains(e.target) && !navbar1Nav.contains(e.target)) {
        navbar1Nav.classList.remove("active");
      }
    });
  </script>
</body>
</html>
