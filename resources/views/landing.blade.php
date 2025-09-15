<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page Sederhana Laravel</title>
    {{-- Menggunakan asset() helper untuk stylesheet --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <h1>Selamat Datang di Landing page yang dibuat dengan Framework Laravel!!</h1>
        <p>ini adalah perjalanan pertama saya dalam mempelajari pembuaatan website dengan Framework Laravel</p>
    </header>

    <main>
        <section id="hero">
            <h2>Lanjutkan Penjelajahan</h2>
            <p>Nikmati Proses dan keseruan bersama saya</p>
            <button id="ctaButton">Ayo ikut denganku!!</button>
        </section>

        <!-- <section id="features">
            <h2>Fitur Utama</h2>
            <ul>
                <li>Cepat dan Efisien</li>
                <li>Desain Responsif</li>
                <li>Mudah Digunakan</li>
            </ul>
        </section>

        <section id="contact">
            <h2>Hubungi Kami</h2>
            {{-- Form tanpa action karena akan ditangani oleh JavaScript --}}
            <form id="contactForm">
                @csrf {{-- Penting untuk keamanan Laravel --}}
                <input type="text" id="name" placeholder="Nama Anda" required>
                <input type="email" id="email" placeholder="Email Anda" required>
                <textarea id="message" placeholder="Pesan Anda"></textarea>
                <button type="submit">Kirim Pesan</button>
            </form>
            <p id="formMessage"></p>
        </section>
    </main>

    <footer>
        <p>&copy; 2023 Landing Page Sederhana Laravel</p>
    </footer>

    {{-- Menggunakan asset() helper untuk JavaScript --}}
    <script src="{{ asset('js/mainController.js') }}"></script> -->
</body>
</html>