@include('pages.posts.header')
<!-- AOS CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">

<body style="background-color: #1e1e2e; color: #f8f9fa;">
  <div class="wrapper">
      <!-- Navbar -->
@include('layouts.components.navbar')

      <!-- Hero Section -->
      <div class="container content text-center my-5">
          <div class="hero bg-dark text-light py-5 rounded shadow-lg"
               data-aos="fade-up" data-aos-duration="1000">
              <h1 class="fw-bold">📍 Selamat Datang di Kode Pos Indonesia</h1>
              <p class="fs-5">Temukan kode pos di seluruh Indonesia dengan mudah dan cepat.</p>

              <!-- Form Pencarian -->                        
              <form class="d-flex flex-column align-items-center mt-4" id="search-form">
                <div class="input-group w-75">
                  <input type="search" name="query" id="search-input" class="form-control form-control-lg rounded-pill bg-light border-0 shadow-sm" placeholder="🔍 Cari Kode Pos, Provinsi, Desa, Kota, Kecamatan" aria-label="Search">
              <button class="btn btn-warning rounded-pill px-4 py-2" type="submit">Cari</button>
              </form>
          </div>
      </div>

      <!-- Informasi -->
      <div class="container mt-5">
          <div class="row g-4">
              <div class="col-md-4" data-aos="fade-right" data-aos-duration="1000">
                  <div class="card p-4 text-center shadow-lg border-0 bg-secondary text-light">
                      <h4>📦 Lebih dari 80.000+ Kode Pos</h4>
                      <p>Database lengkap kode pos dari Sabang sampai Merauke.</p>
                  </div>
              </div>
              <div class="col-md-4" data-aos="zoom-in" data-aos-duration="1000">
                  <div class="card p-4 text-center shadow-lg border-0 bg-dark text-light">
                      <h4>🔍 Cari Kode Pos dengan Mudah</h4>
                      <p>Gunakan fitur pencarian untuk menemukan kode pos daerah Anda.</p>
                  </div>
              </div>
              <div class="col-md-4" data-aos="fade-left" data-aos-duration="1000">
                  <div class="card p-4 text-center shadow-lg border-0 bg-secondary text-light">
                      <h4>📆 Update Berkala</h4>
                      <p>Data kode pos diperbarui secara berkala untuk keakuratan terbaik.</p>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

  <script>
    document.getElementById("search-form").addEventListener("submit", function(event) {
      event.preventDefault();
      let searchQuery = document.getElementById("search-input").value.trim(); 
      if (searchQuery !== "") {
          window.location.href = "/cari?query=" + encodeURIComponent(searchQuery);
      }
  });
  </script>
  
 
  <!-- AOS JS -->
  <!-- Tambahkan AOS Script -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <script>
      AOS.init();
  </script>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init(); // Inisialisasi AOS
</script>
@include('footer.indukFooter')
</body>
