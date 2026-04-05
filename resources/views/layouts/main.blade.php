<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Saya | Creative Developer</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --bg-dark: #0f172a;
            --bg-card: #1e293b;
            --accent: #38bdf8;
            --accent-grad: linear-gradient(135deg, #38bdf8, #818cf8);
        }

        body { font-family: 'Poppins', sans-serif; background-color: var(--bg-dark); color: #f8fafc; overflow-x: hidden; }
        html { scroll-behavior: smooth; }

        /* Navbar Styling */
        .navbar { background-color: rgba(15, 23, 42, 0.95); backdrop-filter: blur(10px); padding: 15px 0; }
        .navbar-brand { font-weight: 700; font-size: 1.5rem; letter-spacing: 1px; }
        .text-gradient { background: var(--accent-grad); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
        .nav-link { font-weight: 500; margin: 0 10px; transition: 0.3s; }
        .nav-link:hover { color: var(--accent) !important; }

        /* Global Elements */
        .btn-primary { background: var(--accent-grad); border: none; padding: 12px 35px; border-radius: 50px; font-weight: 600; transition: 0.3s; }
        .btn-primary:hover { transform: translateY(-3px); box-shadow: 0 10px 20px rgba(56, 189, 248, 0.3); }
        .section-title { font-weight: 700; margin-bottom: 50px; text-align: center; }

        footer { border-top: 1px solid #334155; padding: 40px 0; margin-top: 50px; }
        .social-icons a { color: #94a3b8; font-size: 1.5rem; margin: 0 15px; transition: 0.3s; }
        .social-icons a:hover { color: var(--accent); }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">MY<span class="text-gradient">PORTFOLIO</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
                    <li class="nav-item"><a class="btn btn-outline-info ms-lg-3 px-4 rounded-pill text-white" href="#contact">Contact Me</a></li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <footer class="text-center">
        <div class="container">
            <div class="social-icons mb-3">
                <a href="https://github.com/minangcoding"><i class="fab fa-github"></i></a>
                <a href="www.linkedin.com/in/refido-arjunal-akmal"><i class="fab fa-linkedin"></i></a>
                <a href="https://www.instagram.com/kopi_erte/"><i class="fab fa-instagram"></i></a>
            </div>
            <p class="text-secondary">© 2026 Refido Arjunal Akmal. Built with Laravel & Bootstrap 5.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>