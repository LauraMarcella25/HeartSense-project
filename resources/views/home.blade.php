<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HeartSense - Prediksi Risiko Jantung</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-white">
    <!-- Header -->
    <header class="sticky top-0 z-50 bg-white border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-6">
            <nav class="flex items-center justify-between py-4">
                <div class="flex items-center gap-3">
                    <svg class="w-10 h-10 text-blue-600" viewBox="0 0 24 24" fill="currentColor">
                         <img src="logokita.png" width="50" alt="HeartSense logo">
                    </svg>
                    <span class="text-xl font-bold text-gray-900">HEARTSENSE</span>
                </div>
                <div class="hidden md:flex items-center gap-8">
                    <a href="{{ route('home') }}" class="text-gray-600 hover:text-blue-600 font-medium transition">Home</a>
                    <a href="#how-it-works" class="text-gray-600 hover:text-blue-600 font-medium transition">How it works</a>
                    <a href="#about" class="text-gray-600 hover:text-blue-600 font-medium transition">About me</a>
                    <a href="{{ route('predict.form') }}" class="text-gray-600 hover:text-blue-600 font-medium transition">Prediction</a>
                </div>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="home" class="bg-gradient-to-br from-blue-50 via-purple-50 to-white py-20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h1 class="text-4xl md:text-5xl font-bold text-gray-900 leading-tight mb-6">
                        Prediksi Risiko Jantung Anda dengan Teknologi AI
                    </h1>
                    <p class="text-gray-600 text-lg mb-8">
                        Analisis cepat, akurat, dan mudah dipahami berdasarkan data kesehatan anda
                    </p>
                    <a href="{{ route('predict.form')}}" class="bg-blue-600 text-white px-8 py-3 rounded-full font-semibold hover:bg-blue-700 transition shadow-lg">
                        Cek Risiko Sekarang
                    </a>

                    <div class="grid md:grid-cols-2 gap-6 mt-10">
                        <div class="bg-white p-6 rounded-3xl shadow-xl">
                            <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center mb-4">
                                <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <img src="otakkecil.png" width="70">
                                </svg>
                            </div>
                            <h3 class="font-bold text-gray-900 mb-2">AI Risk Prediction</h3>
                            <p class="text-gray-600 text-sm">Akurasi model 73% untuk prediksi serangan jantung</p>
                        </div>

                        <div class="bg-white p-6 rounded-3xl shadow-xl">
                            <div class="w-16 h-16 bg-purple-100 rounded-2xl flex items-center justify-center mb-4">
                                <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <img src="otak.png" width="70">
                                </svg>
                            </div>
                            <h3 class="font-bold text-gray-900 mb-2">Personal Health Insight</h3>
                            <p class="text-gray-600 text-sm">Model machine learning untuk prediksi risiko serangan jantung</p>
                        </div>

                    </div>
                </div>

                <div class="flex items-center justify-center">
                    <div class="relative w-full max-w-md flex items-center justify-center">

                        <img src="jantung.png" alt="Heart illustration" style="max-width:450px; width:100%;">

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section id="how-it-works" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-4xl font-bold text-center text-gray-900 mb-16">How It Works</h2>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="w-20 h-20 bg-blue-600 text-white rounded-full flex items-center justify-center text-3xl font-bold mx-auto mb-6 shadow-lg">
                        1
                    </div>
                    <div class="w-20 h-20 mx-auto mb-6">
                        <svg class="w-full h-full text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Masukan data anda</h3>
                    <p class="text-gray-600">Usia, tekanan darah, dan beberapa info kesehatan lain</p>
                </div>

                <div class="text-center">
                    <div class="w-20 h-20 bg-blue-600 text-white rounded-full flex items-center justify-center text-3xl font-bold mx-auto mb-6 shadow-lg">
                        2
                    </div>
                    <div class="w-20 h-20 mx-auto mb-6">
                        <svg class="w-full h-full text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">AI menganalisis</h3>
                    <p class="text-gray-600">Model akan memproses data yang anda berikan</p>
                </div>

                <div class="text-center">
                    <div class="w-20 h-20 bg-blue-600 text-white rounded-full flex items-center justify-center text-3xl font-bold mx-auto mb-6 shadow-lg">
                        3
                    </div>
                    <div class="w-20 h-20 mx-auto mb-6">
                        <svg class="w-full h-full text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Lihat skor risiko anda</h3>
                    <p class="text-gray-600">Dapatkan prediksi risiko anda</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-blue-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-12 items-center mb-16">
                <div>
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">Tentang HeartSense</h2>
                    <p class="text-gray-600 text-lg">Membantu anda memahami risiko jantung dengan teknologi AI</p>
                </div>
                <div class="flex justify-center">
                    <svg class="w-64 h-64" viewBox="0 0 200 200" fill="none">
                        <img src="hati.png">
                    </svg>
                </div>
            </div>

            <!-- Vision & Mission -->
            <div class="mb-16">
                <h3 class="text-3xl font-bold text-gray-900 mb-8">Visi & Misi</h3>
                <div class="grid md:grid-cols-2 gap-8">
                    <div class="bg-white p-8 rounded-3xl shadow-lg">
                        <div class="flex items-start gap-4">
                            <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-8 h-8 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
                                    <img src="bendera.png">
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-gray-900 mb-2">Visi</h4>
                                <p class="text-gray-600">Memudahkan skrining risiko jantung untuk semua orang, kapan pun, di mana pun</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white p-8 rounded-3xl shadow-lg">
                        <div class="flex items-start gap-4">
                            <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-8 h-8 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
                                    <img src="tembak.png">
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-gray-900 mb-2">Misi</h4>
                                <ol class="text-gray-600 list-decimal list-inside space-y-1">
                                    <li>Menggunakan AI untuk prediksi risiko secara akurat</li>
                                    <li>Memberikan edukasi pencegahan risiko serangan jantung</li>
                                    <li>Memudahkan akses ke skrining awal</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Our Story -->
            <div class="bg-white p-10 rounded-3xl shadow-lg">
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <div>
                        <h3 class="text-3xl font-bold text-gray-900 mb-6">Our Story</h3>
                        <p class="text-gray-600 mb-4">
                            HeartSense lahir dari kepedulian terhadap deteksi risiko jantung yang sering terlambat. Kami percaya bahwa setiap orang berhak atas informasi kesehatan yang mudah diakses dan dipahami.
                        </p>
                        <p class="text-gray-600">
                            Dengan Kecerdasan Buatan (AI), HeartSense mengubah data kompleks menjadi wawasan sederhana, memberdayakan Anda untuk mengambil tindakan dini. Kami bukan hanya aplikasi; kami adalah gerakan menuju masa depan kesehatan yang lebih cerdas dan inklusif.
                        </p>
                    </div>
                    <div class="flex justify-center">
                        <svg class="w-64 h-64" viewBox="0 0 200 200" fill="none">
                            <img src = "dokter.png">
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white border-t border-gray-200 py-8">
        <div class="max-w-7xl mx-auto px-6 text-center text-gray-600">
            © 2024 HeartSense. All rights reserved.
        </div>
    </footer>
</body>
</html>
