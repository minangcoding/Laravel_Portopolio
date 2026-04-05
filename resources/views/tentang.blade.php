<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Saya - LaravelKu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #ff2d20;
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
        .main-content {
            padding: 80px 0;
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

    <div class="container main-content">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1 class="mb-4 text-center">Tentang Saya</h1>
                <p class="lead">Halo! Saya adalah seorang pengembang website pemula yang sedang menjelajahi kekuatan Laravel.</p>
                <p>Website ini adalah proyek belajar saya untuk memahami konsep dasar *routing*, *views*, dan *templating* di Laravel. Saya sangat bersemangat untuk terus belajar dan membangun website yang lebih kompleks lagi.</p>
                <a href="{{ url('/') }}" class="btn btn-primary mt-4">Kembali ke Beranda</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>