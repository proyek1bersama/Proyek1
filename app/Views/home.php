<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Konter Kita</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />

  <style>
    body {
      min-height: 100vh;
      background: linear-gradient(to bottom right,
          #c8455d 0%,
          #c23f56 10%,
          #a0334c 25%,
          #7e2a40 45%,
          #5a1b34 65%,
          #2f0d19 80%,
          #1e0712 100%);
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
      color: white;
      font-family: Georgia, 'Times New Roman', Times, serif;
    }

    .navbar {
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      height: 70px;
    }

    .navbar-brand,
    .nav-link {
      color: #fff !important;
      font-weight: 500;
      font-size: 20px;
    }

    .navbar .nav-link:hover {
      transform: translateY(-3px);
      color: #ffffff;
      /* warna putih cerah biar kontras */
      text-shadow:
        0 2px 4px rgba(0, 0, 0, 0.7),
        0 4px 8px rgba(0, 0, 0, 0.6),
        0 6px 12px rgba(0, 0, 0, 0.5);
    } 
    .navbar-toggler-icon {
  filter: invert(1);
}

    .header-section {
      margin-top: 100px;
      padding: 100px;
    }

    .custom-header p {
      text-align: justify;
      color: white;
      font-size: 18px;
    }

    .animate {
      opacity: 0;
    }

    .animate.show {
      opacity: 1;
      animation-duration: 1s;
      animation-fill-mode: both;
    }

    .animate-from-top.show {
      animation-name: fadeInTop;
    }

    .animate-from-bottom.show {
      animation-name: fadeInBottom;
    }

    .animate-from-right.show {
      animation-name: fadeInRight;
    }

    @keyframes fadeInTop {
      from {
        opacity: 0;
        transform: translateY(-30px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes fadeInBottom {
      from {
        opacity: 0;
        transform: translateY(30px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes fadeInRight {
      from {
        opacity: 0;
        transform: translateX(50px);
      }

      to {
        opacity: 1;
        transform: translateX(0);
      }
    }

    /* slider gambar next */
    .slider-wrapper {
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 60px auto;
  padding: 0 20px;
}

#sliderCreativeCell {
  width: 100%;
  max-width: 900px;
  height: 400px;
  position: relative;
  border-radius: 15px;
  overflow: hidden;
  background-color: rgba(255, 255, 255, 0.1);
  backdrop-filter: blur(6px);
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
  padding-top: 20px;
  padding-bottom: 20px;
  padding-left: 20px;
  padding-right: 20px;
}

.carousel-inner {
  height: 100%;
}

.carousel-item {
  height: 100%;
  text-align: center;
}

/* gambar tetap rapi & responsif */
.carousel-item img {
  height: 100%;
  width: auto;
  max-width: 100%;
  object-fit: contain;
  border-radius: 12px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
}

/* tombol navigasi tetap rapi */
.carousel-control-prev,
.carousel-control-next {
  width: 50px;
  top: 50%;
  transform: translateY(-50%);
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
  background-color: rgba(0, 0, 0, 0.4);
  width: 30px;
  height: 30px;
  border-radius: 50%;
}


    .card {
      background-color: rgba(0, 0, 0, 0);
      /* transparan */
      backdrop-filter: blur(8px);
      color: white;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      border-radius: 15px;
      border-width: 2px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
    }

    .card:hover {
      transform: translateY(-15px);
      box-shadow:
        0 12px 30px rgba(0, 0, 0, 0.5),
        0 0 25px rgba(255, 255, 255, 0.2),
        0 0 35px rgba(255, 254, 254, 0.2);
    }

    #layanan h2 {
      font-size: 50px;
      color: #ffffff;
      font-weight: 700;
      margin-bottom: 40px;
      font-family: Georgia, 'Times New Roman', Times, serif;
      margin-top: 50px;
    }

    .logo-layanan {
      max-height: 60px;
      object-fit: contain;
    }

    .custom-image {
      max-width: 100%;
      /* kecilkan ukuran gambar */
      height: auto;

    }

    /* animasi  */
    .animate-left,
    .animate-right {
  opacity: 0;
  transform: translateX(50px);
  transition: all 0.6s ease-in-out;
}
/* animasi masuk dari kiri */
    .animate-left {
      opacity: 0;
      transform: translateX(-50px);
      transition: opacity 0.8s ease, transform 0.8s ease;
    }

    .animate-left.show {
      opacity: 1;
      transform: translateX(0);
    } 

    /* animasi masuk dari kanan */
    .animate-right {
      opacity: 0;
      transform: translateX(50px);
      transition: opacity 0.8s ease, transform 0.8s ease;
    }

    .animate-right.show {
      opacity: 1;
      transform: translateX(0);
    }

    /* animasi slide untuk kontak */
    .kontak-slide-left {
      opacity: 0;
      transform: translateX(-100%);
      transition: all 0.6s ease-out;
    }

    .kontak-slide-right {
      opacity: 0;
      transform: translateX(100%);
      transition: all 0.6s ease-out;
    }

    .kontak-show {
      opacity: 1;
      transform: translateX(0);
    }

    footer {
      background-color: rgba(0, 0, 0, 0.3);
      /* semi-transparan hitam */
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
    }

    section {
      padding-top: 4rem;
      padding-bottom: 4rem;
    }

    .form-control,
    .btn {
      border-radius: 10px;
    }

    /* kontak */
    #kontak {
      background-color: transparent;
      color: white;
    }

    #kontak h2 {
      color: white;
      font-weight: bold;
    }

    #kontak .form-label {
      color: white;
      font-weight: 500;
    }

    #kontak .form-control {
      border: 1px solid #fff;
      background-color: rgba(255, 255, 255, 0.1);
      color: white;
    }

    #kontak .form-control::placeholder {
      color: rgba(255, 255, 255, 0.6);
    }

    #kontak .form-control:focus {
      border-color: #ffffff;
      box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.25);
    }

    #kontak .btn-primary {
      background-color: #ffffff;
      color: #000;
      border-color: #ffffff;
      transition: 0.3s;
    }

    #kontak .btn-primary:hover {
      background-color: #f8f9fa;
      color: #000;
      border-color: #f8f9fa;
    }

    .btn-primary {
      transition: transform 0.3s ease;
      /* animasi smooth */
    }

    .btn-primary:active {
      background-color: transparent !important;
      color: #0d6efd;
      /* biar tulisan tetap terlihat */
      box-shadow: none;
      transform: translateY(0);
      /* hilangkan efek ngangkat saat klik */
    }

    .btn-primary:hover {
      background-color: transparent !important;
      transform: translateY(-5px);
      /* ngangkat tombol 5px ke atas */
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      /* efek bayangan supaya terangkat */
      color: white;
      /* teks jadi putih saat hover */
    }


@media (max-width: 768px) {
  .animate-left, .animate-right {
    opacity: 1;
    transform: translateX(0);
    transition: all 0.5s ease-in-out;
  }
}

  </style>
</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-transparent fixed-top shadow-sm">
    <div class="container-fluid px-4">
      <!-- logo di kiri -->
      <h2>Creative Cell</h2>

      <!-- hamburger menu di kanan -->
      <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- isi menu -->
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav text-end">
          <li class="nav-item"> 
            <a class="nav-link active" href="<?= base_url('home') ?>">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#layanan">Layanan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#kontak">Kontak</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="keranjang.html" title="Keranjang">
              <i class="bi bi-cart3 fs-5"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('login') ?>" title="Login">
              <i class="bi bi-person-circle fs-5"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <!-- header -->
  <header class="header-section text-dark py-5">
    <div class="container">
      <div class="row align-items-center text-center text-md-start">
        <!-- bagian teks -->
        <div class="col-md-8 custom-header">
        <h1 class="display-4 fw-bold animate animate-from-top">
  <span style="color: rgb(255, 255, 255);">Selamat Datang di </span>
  <span style="color: rgb(0, 0, 0);">Creative Cell!</span>
</h1>
          <p class="animate animate-from-bottom">
            Halo! 👋👋👋 <br> Di Creative Cell, kamu bisa beli berbagai jenis voucher digital dengan cara yang cepat,
            gampang,
            dan aman.
            Semua tersedia online, jadi kamu tinggal pilih voucher yang kamu butuhin, bayar, dan beres deh!
            Biar makin praktis, beli voucher sekarang nggak perlu ribet lagi.
          </p>
        </div>

        <!-- bagian gambar -->
        <div class="col-md-4 text-center">
          <img src="images/rea lucu.png" class="img-fluid animate animate-from-right" style="max-height: 200px;">
        </div>
      </div>
    </div>
  </header>

  <div class="slider-wrapper">
  <div id="sliderCreativeCell" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/ket1.jpg" class="d-block w-100" alt="Promo 1">
      </div>
      <div class="carousel-item">
        <img src="images/ket2.jpg" class="d-block w-100" alt="Promo 2">
      </div>
      <div class="carousel-item">
        <img src="images/ket3.jpg" class="d-block w-100" alt="Promo 3">
      </div>
      <div class="carousel-item">
        <img src="images/ket4.jpg" class="d-block w-100" alt="Promo 4">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#sliderCreativeCell" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#sliderCreativeCell" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>
</div>



    <section id="layanan" class="py-5">
      <div class="container">
        <h2 class="text-center mb-5">Layanan Kami</h2>
        <div class="row">
          <!-- gambar di sebelah kiri -->
          <div class="col-md-4 d-flex align-items-center justify-content-center mb-4 mb-md-0 animate-left">
            <img src="images/endul.png" alt="Ilustrasi Layanan" class="custom-image img-fluid">
          </div>

          <!-- kolom kanan untuk kartu voucher -->
          <div class="col-md-8 animate-right">
            <div class="row">
              <!-- kolom 1 -->
              <div class="col-md-6 mb-4">
                <a href="<?= base_url('xl') ?>" class="text-decoration-none text-dark">
                  <div class="card shadow-sm h-100">
                    <div class="card-body text-center">
                      <img src="images/logo xl.png" alt="Logo XL" class="mb-3 logo-layanan">
                      <h5 class="card-title">Voucher XL</h5>
                      <p class="card-text">Kuota Stabil & Jaringan Luas.</p>
                    </div>
                  </div>
                </a>
              </div>

              <!-- kolom 2 -->
              <div class="col-md-6 mb-4">
                <a href="<?= base_url('axis') ?>" class="text-decoration-none text-dark">
                  <div class="card shadow-sm h-100">
                    <div class="card-body text-center">
                      <img src="images/logo axis.png" alt="Logo Axis" class="mb-3 logo-layanan">
                      <h5 class="card-title">Voucher Axis</h5>
                      <p class="card-text">Paket Internet & Nelpon Murah.</p>
                    </div>
                  </div>
                </a>
              </div>

              <!-- kolom 3 -->
              <div class="col-md-6 mb-4">
                <a href="<?= base_url('indosat') ?>" class="text-decoration-none text-dark">
                  <div class="card shadow-sm h-100">
                    <div class="card-body text-center">
                      <img src="images/logo indosat.png" alt="Logo Indosat" class="mb-3 logo-layanan">
                      <h5 class="card-title">Voucher Indosat</h5>
                      <p class="card-text">Paket Internet & Nelpon Lengkap.</p>
                    </div>
                  </div>
                </a>
              </div>

              <!-- kolom 4 -->
              <div class="col-md-6 mb-4">
                <a href="<?= base_url('smartfren') ?>" class="text-decoration-none text-dark">
                  <div class="card shadow-sm h-100">
                    <div class="card-body text-center">
                      <img src="images/logo smartfren.png" alt="Logo Smartfren" class="mb-3 logo-layanan">
                      <h5 class="card-title">Voucher Smartfren</h5>
                      <p class="card-text">Internet Stabil & Harga Bersahabat.</p>
                    </div>
                  </div>
                </a>
              </div>

              <!-- kolom 5 -->
              <div class="col-md-6 mb-4">
                <a href="<?= base_url('tri') ?>" class="text-decoration-none text-dark">
                  <div class="card shadow-sm h-100">
                    <div class="card-body text-center">
                      <img src="images/logo tri.png" alt="Logo Tri" class="mb-3 logo-layanan">
                      <h5 class="card-title">Voucher Tri</h5>
                      <p class="card-text">Kuota Melimpah & Jaringan Anak Muda.</p>
                    </div>
                  </div>
                </a>
              </div>

              <!-- kolom 6 -->
              <div class="col-md-6 mb-4">
                <a href="<?= base_url('telkomsel') ?>" class="text-decoration-none text-dark">
                  <div class="card shadow-sm h-100">
                    <div class="card-body text-center">
                      <img src="images/logo telkom.png" alt="Logo Telkomsel" class="mb-3 logo-layanan">
                      <h5 class="card-title">Voucher Telkomsel</h5>
                      <p class="card-text">Sinyal Kuat & Akses Cepat di Mana Saja.</p>
                    </div>
                  </div>
                </a>
              </div>
    </section>

    <section id="kontak" class="py-5">
      <div class="container">
        <h2 class="text-center mb-4">Hubungi Kami</h2>
        <div class="row">
          <div class="col-md-6 mx-auto">
            <form>
              <div class="mb-3 kontak-slide-left" id="anim-nama">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Anda" />
              </div>
              <div class="mb-3 kontak-slide-right" id="anim-email">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Masukkan Email Anda" />
              </div>
              <div class="mb-3 kontak-slide-left" id="anim-pesan">
                <label for="pesan" class="form-label">Pesan</label>
                <textarea class="form-control" id="pesan" rows="3" placeholder="Tulis Pesan Anda..."></textarea>
              </div>
              <div class="d-flex justify-content-center kontak-slide-right" id="anim-button">
                <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
          </div>
        </div>
      </div>
    </section>

    <footer class="text-center py-3">
      <p>&copy; 2023 Creative Cell. All rights reserved.</p>
    </footer>

    <script>
  document.addEventListener("DOMContentLoaded", function () {
    // ========================
    // KONFIGURASI OBSERVER
    // ========================
    const observerOptions = {
      root: null,
      rootMargin: "0px",
     threshold: 0
    };

  const observerCallback = (entries) => {
  entries.forEach((entry) => {
    console.log("observed:", entry.target, "intersecting:", entry.isIntersecting); // <--- debug

    if (entry.isIntersecting) {
      entry.target.classList.add("show");
    } else {
      entry.target.classList.remove("show");
    }
  });
};

    const observer = new IntersectionObserver(observerCallback, observerOptions);

    // ========================
    // OBSERVE SEMUA ELEMEN ANIMASI
    // Pastikan class .animate juga ditambahkan di HTML
    // ========================
    const animateElements = document.querySelectorAll(".animate-left, .animate-right, .animate");
    animateElements.forEach((el) => observer.observe(el));

    // ========================
    // ANIMASI KHUSUS FORM KONTAK
    // ========================
    const kontakElements = [
      document.getElementById("anim-nama"),
      document.getElementById("anim-email"),
      document.getElementById("anim-pesan"),
      document.getElementById("anim-button"),
    ];

    const kontakObserver = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            kontakElements.forEach((el) => el.classList.remove("kontak-show"));
            setTimeout(() => kontakElements[0].classList.add("kontak-show"), 200);
            setTimeout(() => kontakElements[1].classList.add("kontak-show"), 400);
            setTimeout(() => kontakElements[2].classList.add("kontak-show"), 600);
            setTimeout(() => kontakElements[3].classList.add("kontak-show"), 800);
          } else {
            kontakElements.forEach((el) => el.classList.remove("kontak-show"));
          }
        });
      },
      {
        root: null,
        rootMargin: "0px",
        threshold: 0.2,
      }
    );

    const kontakSection = document.getElementById("kontak");
    kontakObserver.observe(kontakSection);
  });
</script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>

  </html>