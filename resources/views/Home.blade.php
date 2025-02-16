@include('pages.posts.header')

<head>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #1e1e2f, #12121c); /* Gradasi Elegan */
            color: #ffffff;
        }

        /* Container */
        .container {
            padding-top: 30px;
        }

        /* Kartu Provinsi (Glassmorphism) */
        .card-hover {
            padding: 1px; /* Kurangi padding agar lebih kecil */
            border-radius: 10px;
            text-align: center;
            transition: transform 0.3s;
            background: #2a2a2a; /* Warna lebih elegan */
            color: white;
        }

        .card-hover:hover {
            transform: scale(1.05);
            box-shadow: 0px 10px 25px rgba(0, 255, 255, 0.3);
        }

        /* Gambar Provinsi */
        .province-image {
            width: 45px;
            height: 50px;
            object-fit: fill;
            margin-bottom: 10px auto;
            display: flex;
        }

        /* Teks di dalam kartu */
        .text-card {
            font-size: 24px;
            font-weight: 600;
            margin-top: 10px;
            color: #181818;
            display: flex;
        }

        /* Judul */
        .text {
            color: #FFB22C;
            font-weight: bold;
        }
        /* Responsif */
        @media (max-width: 768px) {
            .province-image {
                width: 60px;
                height: 60px;
            }
            .text-card {
                font-size: 16px;
            }
        }
    </style>
</head>

<body>
    @include('layouts.components.navbar')
    <div class="container my-5">
        <div class="container my-5">
        <h1 class="text text-center mb-4">🌍 Daftar Provinsi</h1>
        @include('layouts.components.navbarBeranda')
        <div class="row justify-content-center">

            @foreach ($provinces as $province)
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <a href="{{ url('/province/' . $province->id) }}" class="text-decoration-none">
                        <div class="card card-hover">
                            <img src="{{ asset('image/' . $province->id . '.png') }}" alt="{{ $province->provinsi }}" class="province-image">
                            <h4 class="text-card">{{ $province->provinsi }}</h4>
                        </div>
                    </a>
                </div>
            @endforeach

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @include('footer.indukFooter')
</body>

