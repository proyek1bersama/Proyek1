<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register - Creative Cell</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

  <style>
    body {
      background: linear-gradient(to right, #a83252, #1a1a2e);
      color: white;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
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
      text-shadow:
        0 2px 4px rgba(0, 0, 0, 0.7),
        0 4px 8px rgba(0, 0, 0, 0.6),
        0 6px 12px rgba(0, 0, 0, 0.5);
    }

    .logo-layanan {
      max-width: 80px;
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
      color: rgba(255, 255, 255, 0.7);
    }

    .btn-success {
      background-color: #fff;
      color: #000;
      font-weight: bold;
      border: none;
    }

    .btn-success:hover {
      background-color: #eee;
    }

    .text-center a {
      color: #fff;
      text-decoration: underline;
    }
  </style>
</head>

<body>
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

  <!-- Form Register -->
  <div class="form-container mt-5 pt-5">
    <h2 class="text-center mb-4">Daftar Akun</h2>
    <form action="proses-register.php" method="post">
      <div class="mb-3">
        <input type="text" name="username" class="form-control" placeholder="Username" required />
      </div>
      <div class="mb-3">
        <input type="email" name="email" class="form-control" placeholder="Email" required />
      </div>

      <!-- Password -->
      <div class="mb-3 position-relative">
        <input type="password" id="password" name="password" class="form-control pe-5" placeholder="Password" required />
        <span class="position-absolute top-50 end-0 translate-middle-y me-3" onclick="togglePassword('password', 'icon1')" style="cursor:pointer;">
          <i id="icon1" class="fa-solid fa-eye-slash text-dark"></i>
        </span>
      </div>

      <!-- Konfirmasi Password -->
      <div class="mb-3 position-relative">
        <input type="password" id="confirm_password" name="konfirmasi_password" class="form-control pe-5" placeholder="Konfirmasi Password" required />
        <span class="position-absolute top-50 end-0 translate-middle-y me-3" onclick="togglePassword('confirm_password', 'icon2')" style="cursor:pointer;">
          <i id="icon2" class="fa-solid fa-eye-slash text-dark"></i>
        </span>
      </div>

      <div class="d-grid">
        <button type="submit" class="btn btn-success">Daftar</button>
      </div>
    </form>
    <p class="text-center mt-3">Sudah punya akun? <a href="<?= base_url('login') ?>">Login di sini</a></p>
  </div>

  <script>
    function togglePassword(inputId, iconId) {
      const input = document.getElementById(inputId);
      const icon = document.getElementById(iconId);

      if (input.type === "password") {
        input.type = "text";
        icon.classList.remove("fa-eye-slash");
        icon.classList.add("fa-eye");
      } else {
        input.type = "password";
        icon.classList.remove("fa-eye");
        icon.classList.add("fa-eye-slash");
      }
    }
  </script>
</body>
</html>
