@extends('layouts.main')

@section('content')
<style>
    .card { background: var(--bg-card); border: 1px solid #334155; border-radius: 15px; transition: 0.4s; overflow: hidden; }
    .card:hover { transform: translateY(-10px); border-color: var(--accent); }
    .tech-badge { font-size: 0.75rem; background: rgba(56, 189, 248, 0.1); color: var(--accent); padding: 5px 12px; border-radius: 5px; margin-right: 5px; }
    .hero-img { border: 5px solid var(--bg-card); box-shadow: 0 0 30px rgba(56, 189, 248, 0.2); }
</style>

<section id="home" class="py-5">
    <div class="container py-5 text-center">
        <img src="https://rakamin-lms.s3.ap-southeast-1.amazonaws.com/images/foto_untuk_wisuda_pakai_background-75cf753c-0551-4734-941e-b84ac64fd790.png" class="rounded-circle hero-img mb-4" width="150">
        <h1 class="display-3 fw-bold mt-2">Hi, I'm <span class="text-gradient">Refido Arjunal Akmal</span></h1>
        <p class="lead text-secondary mx-auto mb-5" style="max-width: 700px;">
            A passionate Software Engineer specialized in building exceptional digital experiences using Laravel and modern web technologies.
        </p>
        <a href="#projects" class="btn btn-primary">View My Work</a>
    </div>
</section>

<section id="services" class="py-5" style="background: rgba(30, 41, 59, 0.3);">
    <div class="container">
        <h2 class="section-title">What I <span class="text-gradient">Offer</span></h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card p-4 text-center h-100">
                    <i class="fas fa-laptop-code fa-3x text-info mb-3"></i>
                    <h4>Web Development</h4>
                    <p class="text-secondary small">Custom web applications built with high performance and security.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 text-center h-100">
                    <i class="fas fa-mobile-alt fa-3x text-info mb-3"></i>
                    <h4>Responsive Design</h4>
                    <p class="text-secondary small">Websites that look stunning on any screen size, from mobile to desktop.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 text-center h-100">
                    <i class="fas fa-database fa-3x text-info mb-3"></i>
                    <h4>Backend Solutions</h4>
                    <p class="text-secondary small">Robust database architecture and API integration for your needs.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="projects" class="py-5">
    <div class="container">
        <h2 class="section-title">Latest <span class="text-gradient">Projects</span></h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="https://images.unsplash.com/photo-1557821552-17105176677c?q=80&w=2000" class="card-img-top" height="220">
                    <div class="card-body">
                        <h5 class="fw-bold">E-Commerce Platform</h5>
                        <p class="text-secondary small">A full-featured online store with payment gateway and admin panel.</p>
                        <div class="mt-3">
                            <span class="tech-badge">Laravel</span>
                            <span class="tech-badge">MySQL</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=2000" class="card-img-top" height="220">
                    <div class="card-body">
                        <h5 class="fw-bold">Analytics Dashboard</h5>
                        <p class="text-secondary small">Beautiful data visualization dashboard for monitoring business metrics.</p>
                        <div class="mt-3">
                            <span class="tech-badge">Vue.js</span>
                            <span class="tech-badge">Laravel</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="https://st.depositphotos.com/1000816/53934/i/600/depositphotos_539346028-stock-photo-collage-of-a-large-group.jpg" class="card-img-top" height="220">
                    <div class="card-body">
                        <h5 class="fw-bold">Corporate Profile</h5>
                        <p class="text-secondary small">Modern company profile website with CMS for easy content updates.</p>
                        <div class="mt-3">
                            <span class="tech-badge">Bootstrap 5</span>
                            <span class="tech-badge">SEO</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="skills" class="py-5" style="background: rgba(30, 41, 59, 0.3);">
    <div class="container">
        <h2 class="section-title">My <span class="text-gradient">Tech Stack</span></h2>
        <div class="row g-3 justify-content-center">
            <div class="col-6 col-md-2 text-center">
                <div class="card p-3 h-100 d-flex flex-column align-items-center justify-content-center">
                    <i class="fab fa-laravel fa-2x text-danger mb-2"></i>
                    <span class="small fw-bold">Laravel</span>
                </div>
            </div>
            <div class="col-6 col-md-2 text-center">
                <div class="card p-3 h-100 d-flex flex-column align-items-center justify-content-center">
                    <i class="fab fa-php fa-2x text-info mb-2"></i>
                    <span class="small fw-bold">PHP 8</span>
                </div>
            </div>
            <div class="col-6 col-md-2 text-center">
                <div class="card p-3 h-100 d-flex flex-column align-items-center justify-content-center">
                    <i class="fas fa-database fa-2x text-warning mb-2"></i>
                    <span class="small fw-bold">MySQL</span>
                </div>
            </div>
            <div class="col-6 col-md-2 text-center">
                <div class="card p-3 h-100 d-flex flex-column align-items-center justify-content-center">
                    <i class="fab fa-bootstrap fa-2x text-primary mb-2"></i>
                    <span class="small fw-bold">Bootstrap</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="contact" class="py-5">
    <div class="container text-center py-5">
        <h2 class="section-title">Get In <span class="text-gradient">Touch</span></h2>
        <p class="text-secondary mb-5">Interested in working together? Let's connect and build something great.</p>
        <div class="d-flex flex-wrap justify-content-center gap-3">
            <a href="mailto:emailanda@gmail.com" class="btn btn-primary px-5 py-3">
                <i class="fas fa-envelope me-2"></i> Email Me
            </a>
            <a href="https://wa.me/628123456789" class="btn btn-outline-info btn-lg px-5 py-3 rounded-pill">
                <i class="fab fa-whatsapp me-2"></i> WhatsApp
            </a>
        </div>
    </div>
</section>
@endsection