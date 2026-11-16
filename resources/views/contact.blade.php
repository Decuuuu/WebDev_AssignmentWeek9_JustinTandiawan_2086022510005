@extends("layouts.app")

@section("content")
<main class="flex-grow flex items-center justify-center px-6 pt-24 pb-16">
    <div class="max-w-2xl w-full bg-zinc-900 border border-zinc-800 rounded-lg p-10 shadow-2xl">
        <div class="text-center mb-10">
            <h1 class="text-3xl font-bold text-zinc-100 mb-3">Mari Berdiskusi</h1>
            <p class="text-zinc-400">Tertarik untuk kolaborasi proyek atau sekadar terhubung? Silakan hubungi saya melalui platform di bawah ini.</p>
        </div>

        <div class="space-y-4">
            
            
            <a href="mailto:jtandiawan@student.ciputra.ac.id" class="flex items-center gap-6 p-4 rounded bg-zinc-950 border border-zinc-800 hover:border-zinc-500 hover:bg-zinc-800 transition-all group">
                <div class="text-zinc-500 group-hover:text-zinc-200 transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                </div>
                <div>
                    <p class="text-sm text-zinc-500 font-semibold uppercase tracking-wider">Email Akademik</p>
                    <p class="text-zinc-200 font-medium">jtandiawan@student.ciputra.ac.id</p>
                </div>
            </a>

            
            <a href="https://wa.me/6282252192704" target="_blank" class="flex items-center gap-6 p-4 rounded bg-zinc-950 border border-zinc-800 hover:border-zinc-500 hover:bg-zinc-800 transition-all group">
                <div class="text-zinc-500 group-hover:text-zinc-200 transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                </div>
                <div>
                    <p class="text-sm text-zinc-500 font-semibold uppercase tracking-wider">WhatsApp</p>
                    <p class="text-zinc-200 font-medium">0822-5219-2704</p>
                </div>
            </a>

            
            <a href="https://instagram.com/jazzzutinnnz_" target="_blank" class="flex items-center gap-6 p-4 rounded bg-zinc-950 border border-zinc-800 hover:border-zinc-500 hover:bg-zinc-800 transition-all group">
                <div class="text-zinc-500 group-hover:text-zinc-200 transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path></svg>
                </div>
                <div>
                    <p class="text-sm text-zinc-500 font-semibold uppercase tracking-wider">Instagram</p>
                    <p class="text-zinc-200 font-medium">@jazzzutinnnz_</p>
                </div>
            </a>
        </div>
    </div>
</main>
@endsection