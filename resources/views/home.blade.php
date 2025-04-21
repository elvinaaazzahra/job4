@extends('layouts.app')

@section('title', 'Home - MyApp')

@section('content')

<div class="jumbotron text-center bg-light py-5">
    <h1 class="dispay-4">Selamat Datang di My App</h1>
    <p>Aplikasi Laravel sederhana dengan Laravel Blade</p>

    @if(Route::has('profile'))
        <a href="{{ route('profile') }}" class="btn btn-primary btn-lg">Lihat Profile</a>
    @endif
</div>

<h2 class="my-5 text-center">🔥 Keunggulan MyApp</h2>
<div class="row">
    <div class="col-md-4">
        <div class="card shadow p-4 text-center">
            <h1>🚀</h1>
            <h3 class="fw-bold">Inovatif</h3>
            <p>Inovasi teknologi terbaru adalah prioritas utama kami dengan standar solusi terbaik bagi pelanggan.</p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card shadow p-4 text-center">
            <h1>🛡️</h1>
            <h3 class="fw-bold">Keamanan Tinggi</h3>
            <p>Keamanan data pelanggan adalah prioritas utama kami dengan standar keamanan tinggi.</p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card shadow p-4 text-center">
            <h1>⚡</h1>
            <h3 class="fw-bold">Efisiensi</h3>
            <p>Solusi yang cepat dan efisien adalah prioritas utama kami dengan standar produktivitas tinggi.</p>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-md-4">
        <div class="card shadow p-4 text-center">
            <h1>👨‍💻</h1>
            <h3 class="fw-bold">Profesional</h3>
            <p>Tim ahli berpengalaman adalah prioritas utama kami dengan standar layanan terbaik bagi pelanggan.</p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card shadow p-4 text-center">
            <h1>📞</h1>
            <h3 class="fw-bold">Dukungan 24/7</h3>
            <p>Layanan pelanggan responsif adalah prioritas utama kami dengan standar dukungan profesional.</p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card shadow p-4 text-center">
            <h1>🌍</h1>
            <h3 class="fw-bold">Dukungan Global</h3>
            <p>Pelanggan di seluruh dunia adalah prioritas utama kami dengan standar solusi digital terbaik.</p>
        </div>
    </div>
</div>

<div class="container my-5">
    <h2 class="text-center">💬 Testimoni Pelanggan</h2>
    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card p-4 text-center testimonial-card">
                <p class="testimonial-text">"Aplikasi ini benar-benar membantu bisnis saya berkembang!"</p>
                <small><strong>-Budi</strong>, Pemilik Toko Online</small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-4 text-center testimonial-card">
                <p class="testimonial-text">"Fitur-fiturnya lengkap dan benar-benar membantu usaha saya tumbuh!"
                </p>
                <small><strong>-Siti</strong>, Pengusaha Kuliner</small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-4 text-center testimonial-card">
                <p class="testimonial-text">"Aplikasi ini sangat berguna dan membuat bisnis saya berkembang pesat!"
                </p>
                <small><strong>-Rudi</strong>, Freelancer</small>
            </div>
        </div>
    </div>
</div>

<div class="container my-5">
    <h2 class="text-center">🔎 FAQ (Pertanyaan yang Sering Diajukan)</h2>
    <div class="accordion mt-4" id="faqAccordion">

        <div class="accordion-item">
            <h2 class="accordion-header" id="faq1">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#answer1">
                    Bagaimana cara menggunakan MyApp?
                </button>
            </h2>
            <div id="answer1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Anda dapat menggunakan MyApp dengan mendaftar terlebih dahulu, lalu mengikuti panduan yang tersedia di dalam aplikasi.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="faq2">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#answer2">
                    Apakah ada versi gratis?
                </button>
            </h2>
            <div id="answer2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Ya, MyApp menyediakan versi gratis dengan fitur dasar. Anda juga bisa meningkatkan ke versi premium untuk fitur tambahan.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="faq3">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#answer3">
                    Apakah data saya aman?
                </button>
            </h2>
            <div id="answer3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Tentu! MyApp menggunakan enkripsi tingkat tinggi dan sistem keamanan canggih untuk melindungi data pengguna.
                </div>
            </div>
        </div>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/countup.js/2.0.8/countUp.umd.js"></script>

<div class="container text-center my-5">
    <h2 class="fw-bold">📊 Kredibilitas MyApp</h2>
    <div class="row mt-4">
        <div class="col-md-4" data-aos="fade-up">
            <h1 class="fw-bold"><span id="users">0</span>+</h1>
            <p>Pengguna Aktif</p>
        </div>
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
            <h1 class="fw-bold"><span id="businesses">0</span>+</h1>
            <p>Bisnis Tumbuh</p>
        </div>
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
            <h1 class="fw-bold">⭐ <span id="rating">0</span>/5</h1>
            <p>Rating Pengguna</p>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    AOS.init();
    function animateCount(id, end) {
        new countUp.CountUp(id, end, { duration: 3 }).start();
    }
    document.addEventListener("DOMContentLoaded", function () {
        animateCount("users", 10000);
        animateCount("businesses", 500);
        animateCount("rating", 4.9);
    });
</script>
@endsection