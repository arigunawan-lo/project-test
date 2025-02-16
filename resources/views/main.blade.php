@include('pages.posts.header')


<body style="background-color: #121212; color: #f8f9fa;">

    @include('layouts.components.navbar')

    <div class="container my-5">
        <div class="card shadow-lg border-0 bg-dark text-light">
            <div class="card-body">
        <h3 class="text-center mb-4">🔍 Hasil Pencarian: <strong>"{{ $query }}"</strong></h3>
        @include('layouts.components.navbarBeranda')
        @if ($results->isEmpty())
            <div class="alert alert-warning text-center">
                <strong>😢 Tidak ada hasil yang ditemukan.</strong>
            </div>
        @else
                    <div class="table-responsive">
                        <table class="table table-striped align-middle">
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
                                @foreach ($results as $item)
                                    <tr>
                                        <td>{{ $item->kode_wilayah }}</td>
                                        <td class="text-center">
                                            <span class="badge bg-warning text-dark">{{ $item->kode_pos }}</span>
                                        </td>
                                        <td>{{ $item->desa }}</td>
                                        <td>{{ $item->kecamatan }}</td>
                                        <td>{{ $item->kota }}</td>
                                        <td>{{ $item->provinces->provinsi }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-center mt-3">
                {{ $results->links() }}
            </div>

            <!-- Tombol Kembali -->
            <div class="text-center mt-4">
                <a href="{{ url('/') }}" class="btn btn-outline-warning">⬅ Kembali ke Beranda</a>
            </div>
        @endif
    </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @include('footer.indukFooter')
</body>

