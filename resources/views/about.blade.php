@extends('layouts.app')

@section('content')
<main class="pt-16 min-h-screen">
    <!-- About Section -->
    <section class="py-20 px-4" data-aos="fade-up">
        <div class="max-w-6xl mx-auto">
            <h1 class="text-5xl md:text-6xl font-heading font-black text-neonCyan text-center mb-12 animate-glow" data-aos="zoom-in">
                About Me
            </h1>
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div data-aos="fade-right">
                    <p class="text-lg text-gray-600 dark:text-gray-300 mb-6 font-body leading-relaxed">
                        Saya adalah seorang mahasiswa Informatika yang memiliki pengalaman lintas bidang, mulai dari teknik mesin,
                        teknologi informasi, budaya dan bahasa Mandarin, hingga kepemimpinan organisasi. 
                    </p>
                    <p class="text-lg text-gray-600 dark:text-gray-300 mb-6 font-body leading-relaxed">
                        Saya memiliki pengetahuan luas tentang teknologi, termasuk pemrograman, teknologi informasi, dan budaya.                    </p>
                    <p class="text-lg text-gray-600 dark:text-gray-300 mb-6 font-body leading-relaxed">
                        Memiliki keterampilan dalam software perkantoran, pemrograman dasar, dan komunikasi antarbudaya, saya dikenal sebagai pribadi yang bertanggung jawab, disiplin, serta mampu bekerja secara kolaboratif maupun mandiri
                    </p>
                </div>
                <div class="text-center" data-aos="fade-left">
                    <img src="{{ asset('storage/profile.jpg') }}" alt="Daniel Pascalis" class="w-64 h-64 mx-auto rounded-full object-cover border-4 border-neonCyan animate-glow shadow-lg shadow-neonCyan/50">
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section class="py-20 px-4 bg-gray-50 dark:bg-darkGray/20" data-aos="fade-up">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-4xl md:text-5xl font-heading font-bold text-neonCyan text-center mb-12" data-aos="zoom-in">
                Skills & Technologies
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-5 gap-8">
                <div class="text-center group" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-20 h-20 mx-auto bg-white dark:bg-black border-2 border-neonCyan rounded-lg flex items-center justify-center mb-4 group-hover:shadow-neonCyan/50 group-hover:scale-110 transition-all duration-300">
                        <svg class="w-10 h-10 text-neonCyan" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
                        </svg>
                    </div>
                    <p class="text-gray-900 dark:text-white font-semibold">Laravel</p>
                </div>
                <div class="text-center group" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-20 h-20 mx-auto bg-white dark:bg-black border-2 border-neonCyan rounded-lg flex items-center justify-center mb-4 group-hover:shadow-neonCyan/50 group-hover:scale-110 transition-all duration-300">
                        <svg class="w-10 h-10 text-neonCyan" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm-.01 22.838c-5.47 0-9.91-4.44-9.91-9.91 0-5.47 4.44-9.91 9.91-9.91s9.91 4.44 9.91 9.91c0 5.47-4.44 9.91-9.91 9.91zm4.96-13.49l-1.41-1.41L12 10.18 8.46 7.93 7.05 9.34l3.54 2.25-3.54 2.25 1.41 1.41L12 12.82l3.54 2.25 1.41-1.41-3.54-2.25 3.54-2.25z"/>
                        </svg>
                    </div>
                    <p class="text-gray-900 dark:text-white font-semibold">PHP</p>
                </div>
                <div class="text-center group" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-20 h-20 mx-auto bg-white dark:bg-black border-2 border-neonCyan rounded-lg flex items-center justify-center mb-4 group-hover:shadow-neonCyan/50 group-hover:scale-110 transition-all duration-300">
                        <svg class="w-10 h-10 text-neonCyan" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                        </svg>
                    </div>
                    <p class="text-gray-900 dark:text-white font-semibold">MySQL</p>
                </div>
                <div class="text-center group" data-aos="fade-up" data-aos-delay="400">
                    <div class="w-20 h-20 mx-auto bg-white dark:bg-black border-2 border-neonCyan rounded-lg flex items-center justify-center mb-4 group-hover:shadow-neonCyan/50 group-hover:scale-110 transition-all duration-300">
                        <svg class="w-10 h-10 text-neonCyan" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
                        </svg>
                    </div>
                    <p class="text-gray-900 dark:text-white font-semibold">TailwindCSS</p>
                </div>
                <div class="text-center group" data-aos="fade-up" data-aos-delay="500">
                    <div class="w-20 h-20 mx-auto bg-white dark:bg-black border-2 border-neonCyan rounded-lg flex items-center justify-center mb-4 group-hover:shadow-neonCyan/50 group-hover:scale-110 transition-all duration-300">
                        <svg class="w-10 h-10 text-neonCyan" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 0c-6.626 0-12 5.373-12 12 0 6.627 5.374 12 12 12s12-5.373 12-12c0-6.627-5.374-12-12-12zm2.218 18.616c-.354.069-.468-.054-.468-.54v-2.742c0-.534-.238-1.093-.793-1.248-.557-.157-1.156-.234-1.753-.234-.597 0-1.196.077-1.753.234-.555.155-.793.714-.793 1.248v2.742c0 .486-.114.609-.468.54-1.355-.277-2.218-1.379-2.218-2.732 0-1.353.863-2.455 2.218-2.732.354-.069.468.054.468.54v.964c0 .534.238 1.093.793 1.248.557.157 1.156.234 1.753.234.597 0 1.196-.077 1.753-.234.555-.155.793-.714.793-1.248v-.964c0-.486.114-.609.468-.54 1.355.277 2.218 1.379 2.218 2.732 0 1.353-.863 2.455-2.218 2.732z"/>
                        </svg>
                    </div>
                    <p class="text-gray-900 dark:text-white font-semibold">Git</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Experience & Education Timeline -->
    <section class="py-20 px-4" data-aos="fade-up">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-4xl md:text-5xl font-heading font-bold text-neonCyan text-center mb-12" data-aos="zoom-in">
                Experience & Education
            </h2>
            <div class="relative">
                <div class="absolute left-1/2 transform -translate-x-1/2 w-1 bg-neonCyan h-full"></div>
                <div class="space-y-12">
                    <div class="flex items-center" data-aos="fade-right">
                        <div class="w-1/2 pr-8 text-right">
                            <div class="bg-white dark:bg-black border border-neonCyan p-6 rounded-lg shadow-lg">
                                <h3 class="text-xl font-heading font-bold text-neonCyan">Ketua Umum</h3>
                                <p class="text-gray-600 dark:text-gray-300">Koperasi Mahasiswa Universitas Atma Jaya Yogyakarta | 2024 – 2025</p>
                                <ul class="text-sm text-gray-500 dark:text-gray-400 mt-2 list-disc list-inside space-y-1">
                                    <li>Memimpin seluruh kegiatan organisasi dan unit usaha koperasi.</li>
                                    <li>Mengkoordinasikan berbagai divisi dan mengambil keputusan strategis.</li>
                                    <li>Menjalin komunikasi dengan mitra dan pihak kampus.</li>
                                    <li>Mengawasi administrasi dan pelaksanaan program kerja koperasi.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="w-4 h-4 bg-neonCyan rounded-full border-4 border-white dark:border-black"></div>
                        <div class="w-1/2"></div>
                    </div>
                    <div class="flex items-center" data-aos="fade-left">
                        <div class="w-1/2"></div>
                        <div class="w-4 h-4 bg-neonCyan rounded-full border-4 border-white dark:border-black"></div>
                        <div class="w-1/2 pl-8">
                            <div class="bg-white dark:bg-black border border-neonCyan p-6 rounded-lg shadow-lg">
                                <h3 class="text-xl font-heading font-bold text-neonCyan">Manajer Operasional</h3>
                                <p class="text-gray-600 dark:text-gray-300">Koperasi Mahasiswa Universitas Atma Jaya Yogyakarta | 2023 – 2024</p>
                                <ul class="text-sm text-gray-500 dark:text-gray-400 mt-2 list-disc list-inside space-y-1">
                                    <li>Mengawasi kelancaran operasional harian koperasi.</li>
                                    <li>Membantu staf administrasi dalam pengelolaan dokumen dan data.</li>
                                    <li>Mendukung kegiatan operasional unit usaha agar berjalan sesuai target.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center" data-aos="fade-right">
                        <div class="w-1/2 pr-8 text-right">
                            <div class="bg-white dark:bg-black border border-neonCyan p-6 rounded-lg shadow-lg">
                                <h3 class="text-xl font-heading font-bold text-neonCyan">Mahasiswa</h3>
                                <p class="text-gray-600 dark:text-gray-300">Wuxi Institute Of Technology | 2021 – 2022</p>
                                <ul class="text-sm text-gray-500 dark:text-gray-400 mt-2 list-disc list-inside space-y-1">
                                    <li>Belajar Chinese Culture and Language.</li>
                                    <li>Mendapat keterampilan berkomunikasi bahasa Mandarin dasar (lisan & tulisan).</li>
                                    <li>Mempelajari tradisi, etika, dan budaya Tiongkok.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="w-4 h-4 bg-neonCyan rounded-full border-4 border-white dark:border-black"></div>
                        <div class="w-1/2"></div>
                    </div>
                    <div class="flex items-center" data-aos="fade-left">
                        <div class="w-1/2"></div>
                        <div class="w-4 h-4 bg-neonCyan rounded-full border-4 border-white dark:border-black"></div>
                        <div class="w-1/2 pl-8">
                            <div class="bg-white dark:bg-black border border-neonCyan p-6 rounded-lg shadow-lg">
                                <h3 class="text-xl font-heading font-bold text-neonCyan">Siswa</h3>
                                <p class="text-gray-600 dark:text-gray-300">SMK Kolese Mikael | 2018 – 2021</p>
                                <ul class="text-sm text-gray-500 dark:text-gray-400 mt-2 list-disc list-inside space-y-1">
                                    <li>Jurusan Teknik Mesin.</li>
                                    <li>Mempelajari pengoperasian mesin konvensional dan CNC.</li>
                                    <li>Memahami dasar otomotif serta perawatan/perbaikan mesin.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
