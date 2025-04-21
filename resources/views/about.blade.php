@extends('layouts.app')

@section('title', 'About Us')

@section('content')

<div class="container mt-4">

    <div class="card bg-white shadow-sm p-4 mb-4">
        <h1 class="text-center">🔹 Tentang Kami</h1>
        <p class="text-center"> MyApp adalah perusahaan teknologi yang berfokus pada pengembangan solusi digital yang inovatif dan berkualitas tinggi.</p>
    </div>

    <div class="card bg-white shadow-sm p-4 mb-4">
        <h2 class="text-center">🎯 Visi & Misi</h2>

        <div class="card bg-white shadow-sm p-3 mb-3">
            <h3>🌟 Visi</h3>
            <p>🚀 Membangun ekosistem digital yang mendukung bisnis dan individu dalam meningkatkan efisiensi dan produktivitas mereka.</p>
        </div>

        <div class="card bg-white shadow-sm p-3">
            <h3>🎯 Misi</h3>
            <ul>
                <li>🛡️ Menyediakan solusi teknologi berbasis web yang fleksibel dan aman.</li>
                <li>💡 Mengembangkan aplikasi inovatif yang dapat meningkatkan daya saing bisnis.</li>
                <li>📚 Memberikan edukasi dan pelatihan digital kepada masyarakat.</li>
                <li>🤝 Membangun kolaborasi dengan berbagai industri untuk menciptakan solusi digital yang lebih luas.</li>
            </ul>
        </div>
    </div>

    <div class="card bg-white shadow-sm p-4 mb-4">
        <h2 class="text-center">📖 Sejarah Kami</h2>
        <p>🏢 MyApp didirikan pada tahun 2018 dengan tujuan utama membantu UMKM dalam melakukan digitalisasi bisnis. Berawal dari layanan pembuatan website sederhana, kini kami telah berkembang menjadi perusahaan teknologi yang menangani berbagai proyek digital, mulai dari pengembangan aplikasi berbasis web, e-commerce, hingga sistem informasi perusahaan.</p>
        <p>Seiring dengan perkembangan teknologi, kami terus berinovasi dengan mengadopsi tren terbaru, seperti kecerdasan buatan, cloud computing, dan UI/UX modern. Saat ini, MyApp telah membantu lebih dari 500 perusahaan dan individu dalam mengembangkan solusi digital mereka.</p>
    </div>

    <div class="card bg-white shadow-sm p-4 mb-4">
        <h2 class="text-center">💼 Layanan Kami</h2>
        <ul>
            <li><strong> Pengembangan Web Aplikasi:</strong> Kami membangun aplikasi berbasis web yang responsif dan skalabel.</li>
            <li><strong> E-commerce Solutions:</strong> Kami membantu bisnis menjual produk mereka secara online.</li>
            <li><strong> UI/UX Design:</strong> Kami menciptakan desain antarmuka yang menarik.</li>
            <li><strong> Keamanan Cyber:</strong> Kami memastikan keamanan data pengguna.</li>
            <li><strong> Konsultasi Digital:</strong> Kami memberikan strategi dan solusi terbaik untuk transformasi digital.</li>
        </ul>
    </div>

    <div class="card bg-white shadow-sm p-4 mb-4">
        <h2 class="text-center">👥 Tim Kami</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card shadow-sm text-center p-3">
                    <img src="{{ asset('image/avatar.jpg') }}" class="rounded-circle mx-auto d-block mb-3" width="100" alt="Andi Prasetyo">
                    <h4>🧑‍💼 Andi Prasetyo</h4>
                    <p>Founder & CEO</p>
                    <p>Andi memiliki pengalaman lebih dari 10 tahun dalam pengembangan perangkat lunak.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm text-center p-3">
                    <img src="{{ asset('image/bella.jpg') }}" class="rounded-circle mx-auto d-block mb-3" width="100" alt="Siti Rahma">
                    <h4>👩‍💻 Siti Rahma</h4>
                    <p>Lead Developer</p>
                    <p>Siti adalah seorang developer berbakat yang telah mengembangkan berbagai aplikasi.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm text-center p-3">
                    <img src="{{ asset('image/picture.jpg') }}"class="rounded-circle mx-auto d-block mb-3" width="100" alt="Daniel Kurniawan">
                    <h4>🎨 Daniel Kurniawan</h4>
                    <p>UI/UX Designer</p>
                    <p>Daniel bertanggung jawab atas desain antarmuka yang intuitif, modern, dan estetis.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="card bg-white shadow-sm p-4 mb-4">
        <h2 class="text-center">📞 Hubungi Kami</h2>
        <p class="text-center"> Jika Anda memiliki pertanyaan atau masukan, silakan hubungi kami melalui:</p>
        <ul class="text-center list-unstyled">
            <p><strong>📧 Email:</strong> <a href="mailto:nayla@myapp.com">nayla@myapp.com</a></p>
            <p><strong>📱 Telepon:</strong> <a href="tel:+628123456789">+62 812-3456-789</a></p>
            <p><strong>📍 Alamat:</strong> Jl. Teknologi No.45, Jakarta, Indonesia</p>
            <p><strong>⏰ Jam Operasional:</strong> Senin - Jumat, 08:00 - 17:00 WIB</p>
        </ul>
    </div>

</div>
@endsection