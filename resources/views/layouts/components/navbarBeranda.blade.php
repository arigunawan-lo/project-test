
<!-- Form Pencarian -->                        
<form class="d-flex flex-column align-items-center mt-4" id="search-form">
  <div class="input-group w-75">
    <input type="search" name="query" id="search-input" class="form-control form-control-lg rounded-pill bg-light border-0 shadow-sm" placeholder="🔍 Cari Kode Pos, Provinsi, Desa, Kota, Kecamatan" aria-label="Search">
<button class="btn btn-warning rounded-pill px-4 py-2" type="submit">Cari</button>
</form>
</div>
</div>

<script>
  document.getElementById("search-form").addEventListener("submit", function(event) {
    event.preventDefault();
    let searchQuery = document.getElementById("search-input").value.trim(); 
    if (searchQuery !== "") {
        window.location.href = "/cari?query=" + encodeURIComponent(searchQuery);
    }
});
</script>