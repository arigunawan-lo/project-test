@include('pages.posts.header')



<body style="background-color: #121212; color: #f8f9fa;">
    @include('layouts.components.navbar')
    
    <div class="container my-5">
        <div class="card shadow-lg border-0 bg-dark text-light">
            <div class="card-body">
                <h1 class="text-center mb-4">📌 Daftar Kode Pos Seluruh Indonesia</h1>
                @include('layouts.components.navbarBeranda')
                
                <div class="table-responsive">
                    <table class="table table-striped align-middle">
                        <thead class="bg-secondary text-center">
                            <tr>
                                <th>No</th>
                                <th>Kode Wilayah</th>
                                <th>Kode Pos</th>
                                <th>Desa</th>
                                <th>Kecamatan</th>
                                <th>Kota/Kabupaten</th>
                                <th>Provinsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($poscodes as $index => $poscode)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration + ($poscodes->currentPage() - 1) * $poscodes->perPage() }}</td>
                                    <td>{{ $poscode->kode_wilayah }}</td>
                                    <td class="text-center">
                                        <span class="badge bg-warning text-dark">{{ $poscode->kode_pos }}</span>
                                    </td>
                                    <td>{{ $poscode->desa }}</td>
                                    <td>{{ $poscode->kecamatan }}</td>
                                    <td>{{ $poscode->kota }}</td>
                                    <td>{{ $poscode->provinces->provinsi }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Navigasi Halaman -->
                <div class="d-flex justify-content-center mt-3">
                    {{ $poscodes->links() }}
                </div>

                <!-- Tombol Kembali -->
                <div class="text-center mt-4">
                    <a href="{{ url('/') }}" class="btn btn-outline-warning">⬅ Kembali ke Beranda</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @include('footer.indukFooter')
</body>
