@extends('layouts.app')

@section('content')
<main class="flex-1 max-w-6xl w-full mx-auto px-6 py-20">
    {{-- Bagian Utama (Tetap Nama Justin Tandiawan) --}}
    <div class="max-w-4xl mx-auto text-center mb-24">
        <p class="text-zinc-500 uppercase tracking-[0.3em] mb-4 text-sm font-semibold">
            {{ $profile->role ?? 'Informatics Student & Developer' }}
        </p>
        <h1 class="text-5xl md:text-7xl font-extrabold mb-6 tracking-tight text-zinc-100">
            {{ $profile->name ?? 'Justin Tandiawan' }}
        </h1>
        <p class="text-base md:text-lg text-zinc-400 max-w-2xl mx-auto leading-relaxed mb-10">
            {{ $profile->bio ?? 'Membangun solusi digital yang elegan, efisien, dan responsif.' }}
        </p>
        <div class="flex justify-center gap-4">
            <a href="/blog" class="px-8 py-3 bg-zinc-100 text-zinc-950 font-semibold rounded hover:bg-white transition-all">
                Lihat Karya
            </a>
            <a href="/contact" class="px-8 py-3 border border-zinc-700 text-zinc-300 font-medium rounded hover:border-zinc-400 hover:text-white transition-all">
                Hubungi Saya
            </a>
        </div>
    </div>

    {{-- 10 Data Dummy dari Tabel Profiles --}}
    <div class="border-t border-zinc-800 pt-16">
        <div class="mb-10">
            <p class="text-zinc-500 uppercase tracking-[0.25em] text-xs font-bold mb-2">Developer Focus</p>
            <h2 class="text-2xl md:text-3xl font-bold text-zinc-100">Profil & Spesialisasi</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse ($profiles as $item)
                <div class="bg-zinc-900/60 border border-zinc-800 p-6 rounded-xl hover:border-zinc-600 transition-all">
                    <span class="text-xs font-semibold text-zinc-500 uppercase tracking-wider">{{ $item->role }}</span>
                    <h3 class="text-lg font-bold text-zinc-100 mt-1 mb-3">{{ $item->name }}</h3>
                    <p class="text-zinc-400 text-sm leading-relaxed">{{ $item->bio }}</p>
                </div>
            @empty
                <p class="text-zinc-500 col-span-3">Belum ada data profil di database.</p>
            @endforelse
        </div>
    </div>
</main>
@endsection