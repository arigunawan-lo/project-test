@include('pages.posts.header')


    @include('layouts.components.navbar')
    <body style="background-color: #121212; color: #f8f9fa;">
    
    <div class="container my-5">
        <div class="card shadow-lg border-0 bg-dark text-light">
            <div class="card-body">
                <h1 class="text-center text-primary mb-4">
                    📍 Kode Pos di {{ $province->provinsi }}
                </h1>
                @include('layouts.components.navbarBeranda')
    
                <div class="table-responsive">
                    <table class="table table-striped align-middle shadow-sm">
                        <thead class="bg-secondary text-center">
                            <tr>
                                <th>Kode Wilayah</th>
                                <th>Kode Pos</th>
                                <th>Desa</th>
                                <th>Kecamatan</th>
                                <th>Kota</th>
                                <th>Provinsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($poscodes as $poscode)
                                <tr>
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
    
                <!-- Paginasi -->
                <div class="d-flex justify-content-center mt-3">
                    {{ $poscodes->links() }}
                </div>
    
                <!-- Tombol Kembali -->
                <div class="text-center mt-4">
                    <a href="{{ url('/home') }}" class="btn btn-outline-warning">
                        ⬅ Kembali ke Daftar Provinsi
                    </a>
                </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @include('footer.indukFooter')
    </body>