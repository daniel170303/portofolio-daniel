@extends('layouts.app')

@section('content')
<main class="pt-16">
    <!-- Hero Section -->
    <section class="flex items-center justify-center min-h-screen text-center px-4" data-aos="fade-up">
        <div class="max-w-4xl">
            <h1 class="text-6xl md:text-8xl font-heading font-black text-neonCyan animate-glow mb-6" data-aos="zoom-in" data-aos-delay="200">
                Daniel Pascalis Prima 
            </h1>
            <p class="text-xl md:text-2xl text-gray-900 dark:text-gray-300 mb-8 font-body" data-aos="fade-up" data-aos-delay="400">
                Mahasiswa Informatika Universitas Atma Jaya Yogyakarta | Pengembang Web & Mobile | Pecinta Teknologi & Inovasi
            </p>
            <a href="{{ route('projects') }}" class="inline-block bg-neonCyan hover:bg-white dark:hover:bg-gray-800 text-black dark:text-white font-bold py-4 px-8 rounded-lg shadow-lg hover:shadow-neonCyan/50 transform hover:scale-105 transition-all duration-300 animate-pulse" data-aos="fade-up" data-aos-delay="600">
                Lihat Karya Saya
            </a>
        </div>
    </section>
</main>
@endsection
