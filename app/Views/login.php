<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login - Creative Cell</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


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
      /* warna putih cerah biar kontras */
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
      max-width: 400px;
    }

    .form-control {
      background-color: rgba(255, 255, 255, 0.2);
      border: none;
      color: white;
    }

    .form-control::placeholder {
      color: rgba(255, 255, 255, 0.7);
    }

    .btn-primary {
      background-color: #fff;
      color: #000;
      font-weight: bold;
      border: none;
    }

    .btn-primary:hover {
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

 <div class="form-container">
  <h2 class="text-center mb-4">Login</h2>
  <form action="proses-login.php" method="post">
    <div class="mb-3">
      <input type="text" name="username" class="form-control" placeholder="Username" required />
    </div>

    <!-- Ganti bagian ini -->
    <div class="mb-3 position-relative">
  <input type="password" id="password" name="password" class="form-control pe-5" placeholder="Password" required />
  <span class="position-absolute top-50 end-0 translate-middle-y me-3" onclick="togglePassword()" style="cursor:pointer; z-index:10;">
    <i id="toggleIcon" class="fa-solid fa-eye-slash text-dark"></i>
  </span>
</div>


    <div class="d-grid">
      <button type="submit" class="btn btn-primary">Masuk</button>
    </div>
  </form>
    <p class="text-center mt-3">Belum punya akun? <a href="<?= base_url('register') ?>">Daftar dulu</a></p>
  </div>
  </div>
</body>
<script>
  function togglePassword() {
    const passwordField = document.getElementById("password");
    const toggleIcon = document.getElementById("toggleIcon");

    if (passwordField.type === "password") {
      passwordField.type = "text";
      toggleIcon.classList.remove("fa-eye-slash");
      toggleIcon.classList.add("fa-eye");
    } else {
      passwordField.type = "password";
      toggleIcon.classList.remove("fa-eye");
      toggleIcon.classList.add("fa-eye-slash");
    }
  }
</script>


</html>
