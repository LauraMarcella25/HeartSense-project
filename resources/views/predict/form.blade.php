<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heart Disease Prediction</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .step-active {
            background-color: #2563eb;
            color: white;
        }
        .step-completed {
            background-color: white;
            color: black;
        }
    </style>
</head>
<body class="bg-gray-100">
    <!-- Header -->

    <div class="bg-blue-600 text-white py-12">
        <div class="max-w-6xl mx-auto px-6">
            <a href="{{ route('home') }}" class="text-black-600 hover:text-blue-600">Back</a>
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                </svg>
            <h1 class="text-3xl md:text-4xl font-bold mb-2">Heart Disease Prediction</h1>
            <p class="text-blue-100 text-lg">Masukan data medis untuk memprediksi resiko serangan jantung</p>
        </div>
    </div>

    <div class="max-w-6xl mx-auto px-6 py-8">
        <!-- Result Section -->
        <div id="resultSection" class="hidden">
            <div class="text-center mb-12">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-2">Hasil Analisis Risiko Anda</h1>
            </div>

            <div class="max-w-2xl mx-auto">
                <!-- Result Card -->
                <div id="resultCard" class="border-4 rounded-2xl p-12 bg-white shadow-xl text-center">
                    <div id="resultIcon" class="flex justify-center mb-8"></div>
                    <h2 id="resultTitle" class="text-3xl md:text-4xl font-bold mb-6"></h2>
                    <p id="resultDescription" class="text-gray-700 text-lg leading-relaxed"></p>
                </div>

                <div class="flex justify-center mt-12">
                    <button onclick="resetForm()" class="bg-blue-600 text-white px-12 py-4 rounded-lg font-semibold hover:bg-blue-700 transition shadow-lg text-lg">
                        Cek Risiko Lagi
                    </button>
                </div>
            </div>
        </div>

        <!-- Step Progress -->
        <div class="mb-8" id="stepProgressSection">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Profil & Gejala</h2>
            <div class="flex gap-3">
                <button class="step-active px-8 py-3 rounded-lg font-semibold transition" onclick="showStep(1)">
                    Langkah 1
                </button>
                <button class="step-completed px-8 py-3 rounded-lg font-semibold transition border-2 border-gray-300" onclick="showStep(2)">
                    <span class="hidden md:inline"></span>Langkah 2
                </button>
                <button class="bg-white px-8 py-3 rounded-lg font-semibold transition border-2 border-gray-300 text-gray-400" onclick="showStep(3)">
                    Langkah 3
                </button>
            </div>
        </div>

        <!-- Form Container -->
        <div id="formContainer" class="bg-white rounded-2xl shadow-lg p-8 md:p-12">
            <!-- Step 1: Profil & Gejala -->
            <div id="step1" class="step-content">
                <h3 class="text-2xl font-bold text-gray-900 mb-8">Lengkapi Profil & Gejala Anda</h3>

                <div class="grid md:grid-cols-2 gap-8">
                    <!-- Usia -->
                    <div>
                        <label class="block text-gray-900 font-semibold mb-3">Usia (Tahun)</label>
                        <input type="number" id="age" placeholder="Usia" class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:border-blue-600 focus:outline-none transition">
                    </div>

                    <!-- Jenis Kelamin -->
                    <div>
                        <label class="block text-gray-900 font-semibold mb-3">Jenis Kelamin</label>
                        <div class="grid grid-cols-2 gap-4">
                            <button type="button" onclick="selectGender('male')" id="btn-male" class="px-6 py-3 border-2 border-gray-300 rounded-lg font-semibold hover:border-blue-600 transition flex items-center justify-center gap-2">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/>
                                    <path d="M12 6c-3.31 0-6 2.69-6 6s2.69 6 6 6 6-2.69 6-6-2.69-6-6-6z"/>
                                </svg>
                                Laki-Laki
                            </button>
                            <button type="button" onclick="selectGender('female')" id="btn-female" class="px-6 py-3 border-2 border-gray-300 rounded-lg font-semibold hover:border-blue-600 transition flex items-center justify-center gap-2">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/>
                                    <circle cx="12" cy="12" r="4"/>
                                </svg>
                                Perempuan
                            </button>
                        </div>
                    </div>

                    <!-- Tipe Nyeri Dada -->
                    <div>
                        <label class="block text-gray-900 font-semibold mb-3">Tipe Nyeri Dada(CP)</label>
                        <select id="cp" class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:border-blue-600 focus:outline-none transition bg-white">
                            <option value="">-- Pilih Tipe Nyeri --</option>
                            <option value="0">0 - Typical angina</option>
                            <option value="1">1 - Atypical angina</option>
                            <option value="2">2 - Non-anginal pain</option>
                            <option value="3">3 - Asymptomatic</option>
                        </select>
                    </div>

                    <!-- Nyeri dada saat olahraga -->
                    <div>
                        <label class="block text-gray-900 font-semibold mb-3">Nyeri dada saat olahraga</label>
                        <div class="grid grid-cols-2 gap-4">
                            <button type="button" onclick="selectExang('yes')" id="btn-exang-yes" class="px-6 py-3 border-2 border-gray-300 rounded-lg font-semibold hover:border-blue-600 transition">
                                Ya
                            </button>
                            <button type="button" onclick="selectExang('no')" id="btn-exang-no" class="px-6 py-3 border-2 border-gray-300 rounded-lg font-semibold hover:border-blue-600 transition">
                                Tidak
                            </button>
                        </div>
                    </div>
                </div>

                <div class="flex justify-end mt-8">
                    <button onclick="nextStep(1)" class="bg-blue-600 text-white px-10 py-3 rounded-lg font-semibold hover:bg-blue-700 transition shadow-lg">
                        Lanjut
                    </button>
                </div>
            </div>

            <!-- Step 2: Data Pengukuran -->
            <div id="step2" class="step-content hidden">
                <h3 class="text-2xl font-bold text-gray-900 mb-8">Lengkapi Data Pengukuran Vital</h3>

                <div class="grid md:grid-cols-2 gap-8">
                    <!-- Tekanan Darah -->
                    <div>
                        <label class="block text-gray-900 font-semibold mb-3">Tekanan Darah</label>
                        <input type="number" id="trestbps" placeholder="Contoh : 120" class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:border-blue-600 focus:outline-none transition">
                    </div>

                    <!-- Detak Jantung Maks -->
                    <div>
                        <label class="block text-gray-900 font-semibold mb-3">Detak Jantung Maks (bpm)</label>
                        <input type="number" id="thalach" placeholder="Contoh : 150" class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:border-blue-600 focus:outline-none transition">
                    </div>

                    <!-- Kadar Kolesterol -->
                    <div>
                        <label class="block text-gray-900 font-semibold mb-3">Kadar Kolestrol (mg/dL)</label>
                        <input type="number" id="chol" placeholder="Contoh : 200" class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:border-blue-600 focus:outline-none transition">
                    </div>

                    <!-- Gula Darah -->
                    <div>
                        <label class="block text-gray-900 font-semibold mb-3">Gula Darah > 120 mg/dL</label>
                        <div class="grid grid-cols-2 gap-4">
                            <button type="button" onclick="selectFbs('yes')" id="btn-fbs-yes" class="px-6 py-3 border-2 border-gray-300 rounded-lg font-semibold hover:border-blue-600 transition">
                                Ya
                            </button>
                            <button type="button" onclick="selectFbs('no')" id="btn-fbs-no" class="px-6 py-3 border-2 border-gray-300 rounded-lg font-semibold hover:border-blue-600 transition">
                                Tidak
                            </button>
                        </div>
                    </div>
                </div>

                <div class="flex justify-between mt-8">
                    <button onclick="showStep(1)" class="bg-white border-2 border-blue-600 text-blue-600 px-10 py-3 rounded-lg font-semibold hover:bg-blue-50 transition shadow-lg">
                        Kembali
                    </button>
                    <button onclick="nextStep(2)" class="bg-blue-600 text-white px-10 py-3 rounded-lg font-semibold hover:bg-blue-700 transition shadow-lg">
                        Lanjut
                    </button>
                </div>
            </div>

            <!-- Result Display -->
            <div id="resultSection" class="hidden mb-8">
                <div class="border-2 border-blue-600 rounded-2xl p-8 bg-blue-50">
                    <h5 class="text-2xl font-bold text-blue-600 mb-4">Hasil Prediksi</h5>
                    <div id="resultMessage" class="text-3xl font-bold mb-6"></div>

                    <hr class="my-6 border-gray-300">

                    <h6 class="text-lg font-semibold text-gray-900 mb-4">Data yang Anda masukkan</h6>
                    <div id="resultData" class="grid md:grid-cols-2 gap-3 text-sm text-gray-700"></div>
                </div>
            </div>

            <!-- Step 3: Data Lanjutan -->
            <div id="step3" class="step-content hidden">
                <h3 class="text-2xl font-bold text-gray-900 mb-8">Lengkapi Profil & Gejala Anda</h3>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Hasil Resting ECG -->
                    <div>
                        <label class="block text-gray-900 font-semibold mb-3">Hasil Resting ECG</label>
                        <select id="restecg" class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:border-blue-600 focus:outline-none transition bg-white">
                            <option value="">-- Pilih Hasil ECG --</option>
                            <option value="0">0 - Normal</option>
                            <option value="1">1 - Memiliki kelainan gelombang ST-T</option>
                            <option value="2">2 - Hipertrofi ventrikel kiri</option>
                        </select>
                    </div>

                    <!-- Slope segmen ST -->
                    <div>
                        <label class="block text-gray-900 font-semibold mb-3">Slope segmen ST saat exercise (slope)</label>
                        <select id="slp" class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:border-blue-600 focus:outline-none transition bg-white">
                            <option value="">-- Pilih Slope --</option>
                            <option value="0">0 - Up-slope</option>
                            <option value="1">1 - Flat</option>
                            <option value="2">2 - Down-slope</option>
                        </select>
                    </div>

                    <!-- Hasil Tes Thal -->
                    <div>
                        <label class="block text-gray-900 font-semibold mb-3">Hasil Tes Thal (thal)</label>
                        <select id="thall" class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:border-blue-600 focus:outline-none transition bg-white">
                            <option value="">-- Pilih Hasil Thal --</option>
                            <option value="0">0 - Normal</option>
                            <option value="1">1 - Fixed defect</option>
                            <option value="2">2 - Reversible defect</option>
                            <option value="3">3 - Unknown</option>
                        </select>
                    </div>

                    <!-- Oldpeak -->
                    <div>
                        <label class="block text-gray-900 font-semibold mb-3">Oldpeak (ST depression)</label>
                        <input type="number" step="0.1" id="oldpeak" placeholder="ST Depression" class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:border-blue-600 focus:outline-none transition">
                    </div>

                    <!-- Jumlah Pembuluh Utama -->
                    <div>
                        <label class="block text-gray-900 font-semibold mb-3">Jumlah Pembuluh Utama (caa)</label>
                        <input type="number" id="caa" placeholder="Jumlah Pembuluh Utama" class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:border-blue-600 focus:outline-none transition">
                    </div>
                </div>

                <div class="flex justify-between mt-8">
                    <button onclick="showStep(2)" class="bg-white border-2 border-blue-600 text-blue-600 px-10 py-3 rounded-lg font-semibold hover:bg-blue-50 transition shadow-lg">
                        Kembali
                    </button>
                    <button onclick="submitForm()" class="bg-blue-600 text-white px-10 py-3 rounded-lg font-semibold hover:bg-blue-700 transition shadow-lg">
                        Analisi Risiko Sekarang
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        let currentStep = 1;
        let selectedGender = null;
        let selectedExang = null;
        let selectedFbs = null;

        function showStep(step) {
            // Hide all steps
            document.querySelectorAll('.step-content').forEach(el => {
                el.classList.add('hidden');
            });

            // Show selected step
            document.getElementById('step' + step).classList.remove('hidden');
            currentStep = step;

            // Update step buttons
            const stepButtons = document.querySelectorAll('[onclick^="showStep"]');
            stepButtons.forEach((btn, index) => {
                btn.classList.remove('step-active', 'step-completed');
                btn.classList.add('bg-white', 'text-gray-400');

                if (index + 1 === step) {
                    btn.classList.remove('bg-white', 'text-gray-400');
                    btn.classList.add('step-active');
                } else if (index + 1 < step) {
                    btn.classList.remove('bg-white', 'text-gray-400');
                    btn.classList.add('step-completed');
                }
            });

            // Update section title
            const titles = {
                1: 'Profil & Gejala',
                2: 'Data Pengukuran',
                3: 'Profil & Gejala'
            };
            document.querySelector('h2').textContent = titles[step];
        }

        function nextStep(currentStepNum) {
            // Validation for Step 1
            if (currentStepNum === 1) {
                const age = document.getElementById('age').value;
                const cp = document.getElementById('cp').value;

                if (!age) {
                    alert('Mohon isi Usia terlebih dahulu');
                    return;
                }
                if (!selectedGender) {
                    alert('Mohon pilih Jenis Kelamin terlebih dahulu');
                    return;
                }
                if (!cp) {
                    alert('Mohon pilih Tipe Nyeri Dada terlebih dahulu');
                    return;
                }
                if (selectedExang === null) {
                    alert('Mohon pilih apakah ada Nyeri dada saat olahraga');
                    return;
                }
            }

            // Validation for Step 2
            if (currentStepNum === 2) {
                const trestbps = document.getElementById('trestbps').value;
                const thalach = document.getElementById('thalach').value;
                const chol = document.getElementById('chol').value;

                if (!trestbps) {
                    alert('Mohon isi Tekanan Darah terlebih dahulu');
                    return;
                }
                if (!thalach) {
                    alert('Mohon isi Detak Jantung Maksimum terlebih dahulu');
                    return;
                }
                if (!chol) {
                    alert('Mohon isi Kadar Kolesterol terlebih dahulu');
                    return;
                }
                if (selectedFbs === null) {
                    alert('Mohon pilih status Gula Darah terlebih dahulu');
                    return;
                }
            }

            // If all validations pass, go to next step
            showStep(currentStepNum + 1);
        }

        function selectGender(gender) {
            selectedGender = gender;
            document.getElementById('btn-male').classList.remove('bg-blue-600', 'text-white', 'border-blue-600');
            document.getElementById('btn-female').classList.remove('bg-blue-600', 'text-white', 'border-blue-600');

            if (gender === 'male') {
                document.getElementById('btn-male').classList.add('bg-blue-600', 'text-white', 'border-blue-600');
            } else {
                document.getElementById('btn-female').classList.add('bg-blue-600', 'text-white', 'border-blue-600');
            }
        }

        function selectExang(value) {
            selectedExang = value;
            document.getElementById('btn-exang-yes').classList.remove('bg-blue-600', 'text-white', 'border-blue-600');
            document.getElementById('btn-exang-no').classList.remove('bg-blue-600', 'text-white', 'border-blue-600');

            if (value === 'yes') {
                document.getElementById('btn-exang-yes').classList.add('bg-blue-600', 'text-white', 'border-blue-600');
            } else {
                document.getElementById('btn-exang-no').classList.add('bg-blue-600', 'text-white', 'border-blue-600');
            }
        }

        function selectFbs(value) {
            selectedFbs = value;
            document.getElementById('btn-fbs-yes').classList.remove('bg-blue-600', 'text-white', 'border-blue-600');
            document.getElementById('btn-fbs-no').classList.remove('bg-blue-600', 'text-white', 'border-blue-600');

            if (value === 'yes') {
                document.getElementById('btn-fbs-yes').classList.add('bg-blue-600', 'text-white', 'border-blue-600');
            } else {
                document.getElementById('btn-fbs-no').classList.add('bg-blue-600', 'text-white', 'border-blue-600');
            }
        }

        function submitForm() {
            // Validation for Step 3
            const restecg = document.getElementById('restecg').value;
            const slp = document.getElementById('slp').value;
            const thall = document.getElementById('thall').value;
            const oldpeak = document.getElementById('oldpeak').value;
            const caa = document.getElementById('caa').value;

            if (!restecg) {
                alert('Mohon pilih Hasil Resting ECG terlebih dahulu');
                return;
            }
            if (!slp) {
                alert('Mohon pilih Slope segmen ST terlebih dahulu');
                return;
            }
            if (!thall) {
                alert('Mohon pilih Hasil Tes Thal terlebih dahulu');
                return;
            }
            if (!oldpeak) {
                alert('Mohon isi Oldpeak terlebih dahulu');
                return;
            }
            if (!caa) {
                alert('Mohon isi Jumlah Pembuluh Utama terlebih dahulu');
                return;
            }

            const formData = {
                age: document.getElementById('age').value,
                sex: selectedGender === 'male' ? 1 : 0,
                cp: document.getElementById('cp').value,
                trestbps: document.getElementById('trestbps').value,
                chol: document.getElementById('chol').value,
                fbs: selectedFbs === 'yes' ? 1 : 0,
                restecg: document.getElementById('restecg').value,
                thalach: document.getElementById('thalach').value,
                exang: selectedExang === 'yes' ? 1 : 0,
                oldpeak: document.getElementById('oldpeak').value,
                slp: document.getElementById('slp').value,
                caa: document.getElementById('caa').value,
                thall: document.getElementById('thall').value
            };

            console.log('Form Data:', formData);

            // Simulate prediction (in real app, this would be an API call)
            // For demo, random result
            const predictedRisk = Math.random() > 0.5 ? 'high' : 'low';

            displayResult(predictedRisk, formData);
        }

        function displayResult(result, data) {
            // Hide form and step progress
            document.getElementById('formContainer').classList.add('hidden');
            document.getElementById('stepProgressSection').classList.add('hidden');

            // Show result section
            const resultSection = document.getElementById('resultSection');
            resultSection.classList.remove('hidden');

            const resultCard = document.getElementById('resultCard');
            const resultIcon = document.getElementById('resultIcon');
            const resultTitle = document.getElementById('resultTitle');
            const resultDescription = document.getElementById('resultDescription');

            if (result === 'high' || result === '1' || result === 'yes' || result === 'true') {
                // High Risk
                resultCard.className = 'border-4 border-red-600 rounded-2xl p-10 mb-8 text-center bg-white';
                resultIcon.innerHTML = `
                    <svg class="w-24 h-24 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                    </svg>
                `;
                resultTitle.className = 'text-3xl font-bold mb-4 text-red-600';
                resultTitle.textContent = 'Berpotensi Serangan Jantung';
                resultDescription.innerHTML = `Hasil ini bukan merupakan diagnosis medis profesional. Berdasarkan analisis 13 data yang Anda masukkan, model AI kami mendeteksi indikasi yang memerlukan perhatian serius dan tindak lanjut segera.`;
            } else {
                // Low Risk
                resultCard.className = 'border-4 border-green-600 rounded-2xl p-10 mb-8 text-center bg-white';
                resultIcon.innerHTML = `
                    <svg class="w-24 h-24 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                `;
                resultTitle.className = 'text-3xl font-bold mb-4 text-green-600';
                resultTitle.textContent = 'Risiko Rendah';
                resultDescription.innerHTML = `Hasil ini bukan merupakan diagnosis medis profesional. Berdasarkan analisis 13 data yang Anda masukkan, model AI kami mendeteksi risiko yang rendah. Tetap jaga pola hidup sehat dan konsultasi rutin dengan dokter.`;
            }

            // Scroll to top
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        function resetForm() {
            // Reset all inputs
            document.getElementById('age').value = '';
            document.getElementById('cp').value = '';
            document.getElementById('trestbps').value = '';
            document.getElementById('chol').value = '';
            document.getElementById('restecg').value = '';
            document.getElementById('thalach').value = '';
            document.getElementById('oldpeak').value = '';
            document.getElementById('slp').value = '';
            document.getElementById('caa').value = '';
            document.getElementById('thall').value = '';

            selectedGender = null;
            selectedExang = null;
            selectedFbs = null;

            // Reset buttons
            document.getElementById('btn-male').classList.remove('bg-blue-600', 'text-white', 'border-blue-600');
            document.getElementById('btn-female').classList.remove('bg-blue-600', 'text-white', 'border-blue-600');
            document.getElementById('btn-exang-yes').classList.remove('bg-blue-600', 'text-white', 'border-blue-600');
            document.getElementById('btn-exang-no').classList.remove('bg-blue-600', 'text-white', 'border-blue-600');
            document.getElementById('btn-fbs-yes').classList.remove('bg-blue-600', 'text-white', 'border-blue-600');
            document.getElementById('btn-fbs-no').classList.remove('bg-blue-600', 'text-white', 'border-blue-600');

            // Hide result and show form
            document.getElementById('resultSection').classList.add('hidden');
            document.getElementById('formContainer').classList.remove('hidden');
            document.getElementById('stepProgressSection').classList.remove('hidden');
            showStep(1);

            // Scroll to top
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }
    </script>
</body>
</html>
