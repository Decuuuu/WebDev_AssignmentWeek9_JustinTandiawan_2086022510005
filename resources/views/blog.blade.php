@extends('layouts.app')

@section('content')
<main class="flex-1 max-w-6xl w-full mx-auto px-6 py-16">
    <div class="text-center mb-14">
        <h1 class="text-3xl md:text-4xl font-bold text-zinc-100 mb-4">Karya & Proyek</h1>
        <p class="text-zinc-400">Implementasi kode dan eksplorasi teknologi yang telah saya kerjakan.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @forelse ($projects as $project)
            <div class="bg-zinc-900/60 border border-zinc-800 p-6 rounded-xl hover:border-zinc-600 transition-all">
                <h3 class="text-xl font-bold text-zinc-100 mb-2">{{ $project->title }}</h3>
                <p class="text-zinc-400 text-sm mb-6 leading-relaxed">
                    {{ $project->description }}
                </p>
                <span class="text-xs font-bold text-zinc-500 uppercase tracking-widest">{{ $project->tech_stack }}</span>
            </div>
        @empty
            <p class="text-zinc-500 col-span-3 text-center">Belum ada data proyek di database.</p>
        @endforelse
    </div>
</main>
@endsection