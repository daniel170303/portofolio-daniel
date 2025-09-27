@extends('layouts.app')

@section('content')
<main class="pt-16 min-h-screen">
    <!-- Projects Section -->
    <section class="py-20 px-4" data-aos="fade-up">
        <div class="max-w-7xl mx-auto">
            <h1 class="text-5xl md:text-6xl font-heading font-black text-neonCyan text-center mb-12 animate-glow" data-aos="zoom-in">
                Proyek Saya
            </h1>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($projects as $project)
                    <div class="bg-white dark:bg-black border-2 border-neonCyan rounded-lg overflow-hidden shadow-lg transform transition-all duration-300 hover:scale-105 hover:shadow-neonCyan/50 group" data-aos="fade-up" data-aos-delay="{{ ($loop->index + 1) * 100 }}">
                        <div class="relative overflow-hidden">
                            @if(count($project['images']) > 0)
                                <img src="{{ $project['images'][0] }}" alt="{{ $project['title'] }}" class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                                @if(count($project['images']) > 1)
                                    <div class="absolute top-2 right-2 bg-black/70 text-white text-xs px-2 py-1 rounded">
                                        +{{ count($project['images']) - 1 }} foto
                                    </div>
                                @endif
                            @else
                                <div class="w-full h-48 bg-gradient-to-br from-neonCyan/20 to-primary/20 flex items-center justify-center">
                                    <span class="text-neonCyan text-lg font-semibold">Foto akan ditambahkan</span>
                                </div>
                            @endif
                            <div class="absolute inset-0 bg-neonCyan/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </div>
                        <div class="p-6">
                            <h2 class="text-xl font-heading font-bold text-neonCyan mb-3">{{ $project['title'] }}</h2>
                            @if(isset($project['duration']) && isset($project['institution']))
                                <div class="text-xs text-gray-600 dark:text-gray-400 mb-2">
                                    <span class="font-semibold">{{ $project['institution'] }}</span> • {{ $project['duration'] }}
                                </div>
                            @endif
                            <p class="text-gray-900 dark:text-gray-300 text-sm leading-relaxed mb-4">{{ $project['description'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</main>
@endsection
