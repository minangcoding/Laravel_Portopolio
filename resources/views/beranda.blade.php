<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Awesome Laravel Site</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* CSS Kustom untuk Tampilan Lebih Halus */
        :root {
            --primary-color: #ff2d20; /* Merah Laravel */
            --dark-color: #2b3035;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #495057;
        }
        .navbar {
            padding: 1rem 0;
            border-bottom: 2px solid var(--primary-color);
        }
        .navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
            color: white !important;
        }
        .hero {
            background: linear-gradient(135deg, var(--primary-color), #ff7e5f);
            color: white;
            padding: 140px 0; /* Spasi atas bawah lebih luas */
            margin-bottom: 0;
        }
        .hero h1 {
            font-size: 4rem;
            line-height: 1.2;
            margin-bottom: 20px;
        }
        .hero p {
            font-size: 1.4rem;
            opacity: 0.95;
            max-width: 700px;
            margin: 0 auto 40px auto;
        }
        .feature-icon {
            font-size: 2.5rem;
            color: var(--primary-color);
            background-color: #fff1f0;
            width: 70px;
            height: 70px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            margin: 0 auto 20px auto;
        }
        .fitur-card h3 {
            font-size: 1.6rem;
            margin-bottom: 10px;
        }
        .fitur-card p {
            font-size: 1.1rem;
            line-height: 1.6;
        }
        footer {
            border-top: 2px solid var(--primary-color);
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">LaravelKu</a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="{{ url('/') }}">Beranda</a>
                <a class="nav-link" href="{{ url('/tentang') }}">Tentang Saya</a>
            </div>
        </div>
    </nav>

    <header class="hero text-center">
        <div class="container">
            <h1 class="display-4 fw-bold">Selamat Datang di Dunia Laravel</h1>
            <p class="lead">Langkah awal menjadi seorang Full-stack Developer yang hebat.</p>
            <a href="#fitur" class="btn btn-light btn-lg px-5 py-3 fw-bold">Pelajari Lebih Lanjut</a>
        </div>
    </header>

    <section id="fitur" class="py-5 bg-white">
        <div class="container">
            <div class="row text-center gy-5 fitur-card">
                <div class="col-md-4">
                    <div class="feature-icon">🚀</div>
                    <h3>Cepat</h3>
                    <p>Pengembangan website jadi jauh lebih cepat dengan Laravel.</p>
                </div>
                <div class="col-md-4">
                    <div class="feature-icon">🔒</div>
                    <h3>Aman</h3>
                    <p>Keamanan website sudah dijamin dengan sistem bawaan yang kuat.</p>
                </div>
                <div class="col-md-4">
                    <div class="feature-icon">💎</div>
                    <h3>Elegan</h3>
                    <p>Kode yang dihasilkan sangat rapi dan mudah dibaca.</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-dark text-white text-center py-4">
        <div class="container">
            <p class="m-0">&copy; 2024 Proyek Belajar Laravel. Dibuat dengan semangat.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>