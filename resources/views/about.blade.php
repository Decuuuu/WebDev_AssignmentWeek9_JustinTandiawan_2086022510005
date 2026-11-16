@extends('layouts.app')

@section('content')
<main class="flex-1 max-w-5xl w-full mx-auto px-6 py-16">
    <div class="mb-12">
        <p class="text-zinc-500 uppercase tracking-[0.25em] text-xs font-bold mb-2">Tentang Saya</p>
        <h1 class="text-3xl md:text-4xl font-bold text-zinc-100 mb-4">Keahlian & Teknologi</h1>
        <p class="text-zinc-400 max-w-2xl leading-relaxed">
            Mahasiswa Informatika yang berfokus pada pengembangan perangkat lunak lintas platform, mulai dari aplikasi mobile hingga arsitektur backend.
        </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @forelse ($skills as $skill)
            <div class="bg-zinc-900/60 border border-zinc-800 p-6 rounded-xl hover:border-zinc-600 transition-all">
                <span class="text-xs font-semibold text-zinc-500 uppercase tracking-wider">{{ $skill->category }}</span>
                <h3 class="text-xl font-bold text-zinc-100 mt-1 mb-4">{{ $skill->name }}</h3>
                <span class="inline-block px-3 py-1 bg-zinc-800 text-zinc-300 text-xs font-medium rounded-full border border-zinc-700">
                    {{ $skill->level }}
                </span>
            </div>
        @empty
            <p class="text-zinc-500 col-span-3">Belum ada data keahlian di database.</p>
        @endforelse
    </div>
</main>
@endsection