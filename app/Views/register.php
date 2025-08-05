<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Register - Creative Cell</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

  <style>
    body {
      background: linear-gradient(to right, #a83252, #1a1a2e);
      color: white;
      font-family: Georgia, 'Times New Roman', Times, serif;
      margin: 0;
      padding: 0;
    }

    .navbar {
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      height: 70px;
      background-color: rgba(0, 0, 0, 0.4);
    }

    .navbar-toggler-icon {
      filter: invert(1);
    }

    .nav-link {
      position: relative;
      color: #fff !important;
      font-weight: 500;
      font-size: 18px;
      padding: 8px 12px;
      transition: all 0.3s ease;
      display: inline-block;
    }

    .nav-link:hover {
      transform: translateY(-3px);
      text-shadow:
        0 2px 4px rgba(0, 0, 0, 0.7),
        0 4px 8px rgba(0, 0, 0, 0.6),
        0 6px 12px rgba(0, 0, 0, 0.5);
    }

    @media (max-width: 768px) {
      .navbar-collapse {
        background-color: white;
        border-radius: 12px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        position: absolute;
        top: 70px;
        right: 16px;
        width: 180px;
        padding: 10px 14px;
        z-index: 999;
      }

      .navbar-nav {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
      }

      .nav-link {
        color: #222 !important;
        font-size: 16px;
        font-weight: 600;
        padding: 8px 0;
        width: 100%;
        border-radius: 6px;
        transition: background-color 0.2s ease;
      }

      .nav-link:hover {
        background-color: rgba(255, 255, 255, 0.5);
        text-shadow: none;
        transform: none;
      }
    }

    .form-container {
      background-color: rgba(255, 255, 255, 0.1);
      padding: 30px;
      border-radius: 15px;
      width: 100%;
      max-width: 450px;
    }

    .form-control {
      background-color: rgba(255, 255, 255, 0.2);
      border: none;
      color: white;
    }

    .form-control::placeholder {
      color: rgba(0, 0, 0, 0.7);
    }

    .btn-success {
      background-color: #fff;
      color: #000;
      font-weight: bold;
      border: none;
      transition: all 0.3s ease;
    }

    .btn-success:hover {
      background-color: transparent;
      color: #fff;
      border: 2px solid #fff;
    }

    .text-center a {
      color: #fff;
      text-decoration: underline;
    }

    footer {
      background-color: rgba(0, 0, 0, 0.3);
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      padding: 1rem;
    }
  </style>
</head>

<body>
  <div class="page-wrapper d-flex flex-column min-vh-100">

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent fixed-top shadow-sm">
      <div class="container-fluid px-4">
        <h2>Creative Cell</h2>
        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav text-end">
            <li class="nav-item">
                   <a class="nav-link active" href="<?= base_url('home') ?>">Beranda</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="<?= base_url('keranjang') ?>" title="Keranjang">
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

    <!-- konten utama -->
    <main class="flex-grow-1 d-flex justify-content-center align-items-center mt-5 pt-4">
      <div class="form-container">
        <h2 class="text-center mb-4">Daftar Akun</h2>
        <form action="/register/save" method="post">
          <div class="mb-3">
            <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap" required />
          </div>
          <div class="mb-3">
            <input type="text" name="username" class="form-control" placeholder="Username" required />
          </div>
          <div class="mb-3 position-relative">
            <input type="password" name="password" id="password" class="form-control" placeholder="Password" required />
            <i class="bi bi-eye-slash position-absolute top-50 end-0 translate-middle-y me-3 toggle-password"
              style="cursor: pointer; color: rgb(0, 0, 0);" data-target="password"></i>
          </div>
          <div class="mb-3 position-relative">
            <input type="password" name="confirm_password" id="confirm_password" class="form-control"
              placeholder="Confirm Password" required />
            <i class="bi bi-eye-slash position-absolute top-50 end-0 translate-middle-y me-3 toggle-password"
              style="cursor: pointer; color: rgb(0, 0, 0);" data-target="confirm_password"></i>
          </div>
          <div class="d-grid">
            <button type="submit" class="btn btn-success">Daftar</button>
          </div>
        </form>
        <p class="text-center mt-3">Sudah punya akun? <a href="<?= base_url('login') ?>">Login di sini</a></p>
  </div>
    </main>

    <!-- footer -->
    <footer class="text-center">
      <p>&copy; 2025 Creative Cell. All rights reserved.</p>
      <p>📍Jl. Sarikaso III No.3, Sarijadi, Kec. Sukasari, Kota Bandung, Jawa Barat 40151</p>
    </footer>
  </div>

  <script>
    document.querySelectorAll('.toggle-password').forEach(function (icon) {
      icon.addEventListener('click', function () {
        const targetId = this.getAttribute('data-target');
        const target = document.getElementById(targetId);
        const type = target.getAttribute('type') === 'password' ? 'text' : 'password';
        target.setAttribute('type', type);
        this.classList.toggle('bi-eye');
        this.classList.toggle('bi-eye-slash');
      });
    });
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>