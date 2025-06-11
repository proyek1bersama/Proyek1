<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Voucher Axis - Creative Cell</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />

  <style>
    body {
      background: linear-gradient(to right, #a83252, #1a1a2e);
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
      font-weight: 50px;
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
    .logo-layanan {
      max-width: 80px;
    }

    .card-voucher {
      background-color: rgba(255, 255, 255, 0.1);
      color: white;
      transition: transform 0.2s;
      border: none;
    }

    .card-voucher:hover {
      transform: scale(1.02);
    }

    .btn-tambah {
      background-color: #fff;
      color: #000;
      font-weight: bold;
      border: none;
    }

    .btn-tambah:hover {
      background-color: #eee;
      color: #000;
    }

    footer {
      background-color: rgba(255, 255, 255, 0.1);
      color: #fff;
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
            <a class="nav-link active" href="index.html">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="keranjang.html" title="Keranjang">
              <i class="bi bi-cart3 fs-5"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.html" title="Login">
              <i class="bi bi-person-circle fs-5"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- konten -->
  <div class="container py-5 mt-5">
    <h2 class="mb-4 fw-semibold text-white">Daftar Voucher Axis</h2>
    <div class="row">

      <div class="col-md-4 mb-4">
        <div class="card shadow-sm card-voucher h-100 text-center">
          <div class="card-body">
            <img src="images/logo axis.png" alt="Logo XL" class="logo-layanan mb-3" />
            <h5 class="card-title">Axis Rp 6.000</h5>
            <p class="card-text">Kuota 1,5 GB, masa aktif 1 hari.</p>
            <a href="#" class="btn btn-tambah">Tambahkan ke keranjang</a>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="card shadow-sm card-voucher h-100 text-center">
          <div class="card-body">
            <img src="images/logo axis.png" alt="Logo axis" class="logo-layanan mb-3" />
            <h5 class="card-title">Axis Rp 8.000</h5>
            <p class="card-text">Kuota 2,5 GB, masa aktif 1 hari.</p>
            <a href="#" class="btn btn-tambah">Tambahkan ke keranjang</a>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="card shadow-sm card-voucher h-100 text-center">
          <div class="card-body">
            <img src="images/logo axis.png" alt="Logo axis" class="logo-layanan mb-3" />
            <h5 class="card-title">Axis Rp 10.000</h5>
            <p class="card-text">Kuota 2 GB, masa aktif 3 hari.</p>
            <a href="#" class="btn btn-tambah">Tambahkan ke keranjang</a>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="card shadow-sm card-voucher h-100 text-center">
          <div class="card-body">
            <img src="images/logo axis.png" alt="Logo axis" class="logo-layanan mb-3" />
            <h5 class="card-title">Axis Rp 12.000</h5>
            <p class="card-text">Kuota 4 GB, masa aktif 3 hari.</p>
            <a href="#" class="btn btn-tambah">Tambahkan ke keranjang</a>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="card shadow-sm card-voucher h-100 text-center">
          <div class="card-body">
            <img src="images/logo axis.png" alt="Logo axis" class="logo-layanan mb-3" />
            <h5 class="card-title">Axis Rp 15.000</h5>
            <p class="card-text">Kuota 6 GB, masa aktif 3 hari.</p>
            <a href="#" class="btn btn-tambah">Tambahkan ke keranjang</a>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="card shadow-sm card-voucher h-100 text-center">
          <div class="card-body">
            <img src="images/logo axis.png" alt="Logo axis" class="logo-layanan mb-3" />
            <h5 class="card-title">Axis Rp 17.000</h5>
            <p class="card-text">Kuota 10 GB, masa aktif 3 hari.</p>
            <a href="#" class="btn btn-tambah">Tambahkan ke keranjang</a>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="card shadow-sm card-voucher h-100 text-center">
          <div class="card-body">
            <img src="images/logo axis.png" alt="Logo axis" class="logo-layanan mb-3" />
            <h5 class="card-title">Axis Rp 13.000</h5>
            <p class="card-text">Kuota 3,5 GB, masa aktif 5 hari.</p>
            <a href="#" class="btn btn-tambah">Tambahkan ke keranjang</a>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="card shadow-sm card-voucher h-100 text-center">
          <div class="card-body">
            <img src="images/logo axis.png" alt="Logo axis" class="logo-layanan mb-3" />
            <h5 class="card-title">Axis Rp 16.000</h5>
            <p class="card-text">Kuota 4 GB, masa aktif 5 hari.</p>
            <a href="#" class="btn btn-tambah">Tambahkan ke keranjang</a>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="card shadow-sm card-voucher h-100 text-center">
          <div class="card-body">
            <img src="images/logo axis.png" alt="Logo axis" class="logo-layanan mb-3" />
            <h5 class="card-title">Axis Rp 17.000</h5>
            <p class="card-text">Kuota 4,5 GB, masa aktif 5 hari.</p>
            <a href="#" class="btn btn-tambah">Tambahkan ke keranjang</a>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="card shadow-sm card-voucher h-100 text-center">
          <div class="card-body">
            <img src="images/logo axis.png" alt="Logo axis" class="logo-layanan mb-3" />
            <h5 class="card-title">Axis Rp 23.000</h5>
            <p class="card-text">Kuota 7,5 GB, masa aktif 5 hari.</p>
            <a href="#" class="btn btn-tambah">Tambahkan ke keranjang</a>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="card shadow-sm card-voucher h-100 text-center">
          <div class="card-body">
            <img src="images/logo axis.png" alt="Logo axis" class="logo-layanan mb-3" />
            <h5 class="card-title">Axis Rp 28.000</h5>
            <p class="card-text">Kuota 12 GB, masa aktif 5 hari.</p>
            <a href="#" class="btn btn-tambah">Tambahkan ke keranjang</a>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="card shadow-sm card-voucher h-100 text-center">
          <div class="card-body">
            <img src="images/logo axis.png" alt="Logo axis" class="logo-layanan mb-3" />
            <h5 class="card-title">Axis Rp 15.000</h5>
            <p class="card-text">Kuota 1,5 GB, masa aktif 7 hari.</p>
            <a href="#" class="btn btn-tambah">Tambahkan ke keranjang</a>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="card shadow-sm card-voucher h-100 text-center">
          <div class="card-body">
            <img src="images/logo axis.png" alt="Logo axis" class="logo-layanan mb-3" />
            <h5 class="card-title">Axis Rp 25.000</h5>
            <p class="card-text">Kuota 7 GB, masa aktif 7 hari.</p>
            <a href="#" class="btn btn-tambah">Tambahkan ke keranjang</a>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="card shadow-sm card-voucher h-100 text-center">
          <div class="card-body">
            <img src="images/logo axis.png" alt="Logo axis" class="logo-layanan mb-3" />
            <h5 class="card-title">Axis Rp 17.000</h5>
            <p class="card-text">Kuota 2 GB, masa aktif 30 hari.</p>
            <a href="#" class="btn btn-tambah">Tambahkan ke keranjang</a>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="card shadow-sm card-voucher h-100 text-center">
          <div class="card-body">
            <img src="images/logo axis.png" alt="Logo axis" class="logo-layanan mb-3" />
            <h5 class="card-title">Axis Rp 21.000</h5>
            <p class="card-text">Kuota 3 GB, masa aktif 30 hari.</p>
            <a href="#" class="btn btn-tambah">Tambahkan ke keranjang</a>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="card shadow-sm card-voucher h-100 text-center">
          <div class="card-body">
            <img src="images/logo axis.png" alt="Logo axis" class="logo-layanan mb-3" />
            <h5 class="card-title">Axis Rp 33.000</h5>
            <p class="card-text">Kuota 6 GB, masa aktif 30 hari.</p>
            <a href="#" class="btn btn-tambah">Tambahkan ke keranjang</a>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="card shadow-sm card-voucher h-100 text-center">
          <div class="card-body">
            <img src="images/logo axis.png" alt="Logo axis" class="logo-layanan mb-3" />
            <h5 class="card-title">Axis Rp 42.000</h5>
            <p class="card-text">Kuota 8 GB, masa aktif 30 hari.</p>
            <a href="#" class="btn btn-tambah">Tambahkan ke keranjang</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card shadow-sm card-voucher h-100 text-center">
          <div class="card-body">
            <img src="images/logo axis.png" alt="Logo axis" class="logo-layanan mb-3" />
            <h5 class="card-title">Axis Rp 60.000</h5>
            <p class="card-text">Kuota 14 GB, masa aktif 30 hari.</p>
            <a href="#" class="btn btn-tambah">Tambahkan ke keranjang</a>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="card shadow-sm card-voucher h-100 text-center">
          <div class="card-body">
            <img src="images/logo axis.png" alt="Logo axis" class="logo-layanan mb-3" />
            <h5 class="card-title">Axis Rp 75.000</h5>
            <p class="card-text">Kuota 20 GB, masa aktif 30 hari.</p>
            <a href="#" class="btn btn-tambah">Tambahkan ke keranjang</a>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="card shadow-sm card-voucher h-100 text-center">
          <div class="card-body">
            <img src="images/logo axis.png" alt="Logo axis" class="logo-layanan mb-3" />
            <h5 class="card-title">Axis Rp 95.000</h5>
            <p class="card-text">Kuota 30 GB, masa aktif 30 hari.</p>
            <a href="#" class="btn btn-tambah">Tambahkan ke keranjang</a>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- footer -->
  <footer class="text-center py-3 mt-5 shadow-sm">
    <small>&copy; 2025 Creative Cell. All rights reserved.</small>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
