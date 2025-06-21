<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Keranjang - Creative Cell</title>
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
    

    .card-keranjang {
      background-color: rgba(255, 255, 255, 0.1);
      color: white;
      border: none;
    }

    .btn-hapus {
      background-color: #ff4444;
      color: white;
      font-weight: bold;
      border: none;
    }

    .btn-hapus:hover {
      background-color: #cc0000;
      color: white;
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
            <a class="nav-link" href="<?= base_url() ?>#layanan">Layanan</a>
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

  <!-- konten keranjang -->
  <div class="container py-5 mt-5">
    <h2 class="mb-4 fw-semibold text-white">Keranjang Kamu</h2>
    <div id="keranjangContainer" class="row"></div>
    <div id="kosongText" class="text-center text-light mt-5" style="display: none;">Keranjang kamu masih kosong.</div>
    <div class="text-center mt-4">
  <button id="beliSemuaBtn" class="btn btn-success px-4 fw-bold" style="display: none;">Beli Sekarang</button>
</div>

  </div>

  <div class="text-center mt-4">
  <button id="checkoutBtn" class="btn btn-dark px-4 py-2">Checkout</button>
</div>

  <footer class="text-center py-3 mt-5 shadow-sm">
    <p>&copy; 2025 Creative Cell. All rights reserved.</p>
    <p>📍Jl. Sarikaso III No.3, Sarijadi, Kec. Sukasari, Kota Bandung, Jawa Barat 40151</p>
  </footer>

  <script>
    const keranjangContainer = document.getElementById("keranjangContainer");
    const kosongText = document.getElementById("kosongText");
    let keranjang = JSON.parse(localStorage.getItem("keranjang")) || [];

    function tampilkanKeranjang() {
      keranjangContainer.innerHTML = "";

      if (keranjang.length === 0) {
        kosongText.style.display = "block";
        return;
      }

      kosongText.style.display = "none";

      keranjang.forEach((item, index) => {
        const col = document.createElement("div");
        col.className = "col-md-4 mb-4";

        col.innerHTML = `
          <div class="card card-keranjang h-100 text-center shadow-sm">
            <div class="card-body">
              <img src="${item.image}" alt="produk" class="img-fluid mb-3" style="max-width: 80px;">
              <h5 class="card-title">${item.title}</h5>
              <p class="card-text">${item.desc}</p>
              <button class="btn btn-hapus" onclick="hapusItem(${index})">Hapus</button>
            </div>
          </div>
        `;

        keranjangContainer.appendChild(col);
      });
    }

    function hapusItem(index) {
      if (confirm("Yakin ingin menghapus item ini dari keranjang?")) {
        keranjang.splice(index, 1);
        localStorage.setItem("keranjang", JSON.stringify(keranjang));
        tampilkanKeranjang();
      }
    }

    tampilkanKeranjang();

    document.getElementById("checkoutBtn").addEventListener("click", () => {
  if (keranjang.length === 0) {
    alert("Keranjang masih kosong.");
    return;
  }

  const konfirmasi = confirm("Kamu yakin ingin membeli semua item di keranjang?");
  if (konfirmasi) {
    localStorage.removeItem("keranjang");
    keranjang = [];
    tampilkanKeranjang();
    alert("Pembelian berhasil! Terima kasih.");
    // kalau mau redirect ke halaman sukses, bisa pakai ini:
    // window.location.href = "sukses.html";
  }
});

// Script untuk aksi tombol checkout
  document.getElementById('checkoutBtn').addEventListener('click', function() {
    // Contoh: munculkan alert konfirmasi
    alert('Terima kasih! Checkout berhasil. Kami akan memproses pesanan Anda.');
    // Nanti bisa diarahkan ke halaman pembayaran atau invoice
  });

  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
