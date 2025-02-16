@include('pages.posts.header')

<!-- Google Font: Poppins -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="{{ asset('templates/plugins/fontawesome-free/css/all.min.css') }}">
<!-- Theme style -->
<link rel="stylesheet" href="{{ asset('templates/dist/css/adminlte.min.css') }}">

<style>
  .navbar-nav .nav-link {
    font-size: 24px;
    padding-top: 0px;
}

.navbar .navbar-brand {
  font-size: 24px;
  padding-top: 0px;
  font-weight: bold;
}
.custom-navbar{
background: linear-gradient(90deg, #4b6cb7, #182848);
}
</style>

<nav class="navbar navbar-expand-lg navbar-dark fixed-top shadow-lg custom-navbar">
  <div class="container">
    <a class="navbar-brand fw-bold text-warning" href="/">
      <img src="{{ asset('templates/logo/POSIND_2023.svg.png') }}" alt="Pos Indonesia" height="40">
    </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav ms-auto">
              <li class="nav-item"><a class="nav-link text-light" href="/">🏠 Beranda</a></li>
              <li class="nav-item"><a class="nav-link text-light" href="/kodepos">📌 Data Kode Pos</a></li>
              <li class="nav-item"><a class="nav-link text-light" href="/home">🗺️ Provinsi</a></li>
              <li class="nav-item">
              </li>
          </ul>
      </div>
  </div>
</nav>

<!-- Jarak agar konten tidak tertutup navbar -->
<div style="height: 80px;"></div>

<script>
  
  document.addEventListener("DOMContentLoaded", function () {
      const navbarToggler = document.querySelector(".navbar-toggler");
      const navbarCollapse = document.querySelector("#navbarNav");

      // Tutup navbar saat klik di luar menu
      document.addEventListener("click", function (event) {
          if (!navbarToggler.contains(event.target) && !navbarCollapse.contains(event.target)) {
              navbarCollapse.classList.remove("show");
          }
      });

      // Tutup navbar saat scrolling
      window.addEventListener("scroll", function () {
          navbarCollapse.classList.remove("show");
      });
  });

  document.getElementById("search-form").addEventListener("submit", function(event) {
      event.preventDefault();
      let searchQuery = document.getElementById("search-input").value.trim(); 
      if (searchQuery !== "") {
          window.location.href = "/main?query=" + encodeURIComponent(searchQuery);
      }
  });
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</script>