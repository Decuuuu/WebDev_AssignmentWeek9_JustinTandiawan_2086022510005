<nav class="fixed w-full z-50 bg-white/80 backdrop-blur-md border-b border-zinc-200 animate-fade-in-up">
    <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
        <span class="text-xl font-bold text-zinc-900 tracking-widest">JT.</span>
        <div class="flex gap-8">
            <a href="/" class="{{ request()->is('/') ? 'text-zinc-900 font-bold border-b-2 border-zinc-900 pb-1' : 'text-zinc-500 hover:text-zinc-900 transition-colors' }} tracking-wide">Home</a>
            <a href="/about" class="{{ request()->is('about') ? 'text-zinc-900 font-bold border-b-2 border-zinc-900 pb-1' : 'text-zinc-500 hover:text-zinc-900 transition-colors' }} tracking-wide">About</a>
            <a href="/blog" class="{{ request()->is('blog') ? 'text-zinc-900 font-bold border-b-2 border-zinc-900 pb-1' : 'text-zinc-500 hover:text-zinc-900 transition-colors' }} tracking-wide">Blog</a>
            <a href="/contact" class="{{ request()->is('contact') ? 'text-zinc-900 font-bold border-b-2 border-zinc-900 pb-1' : 'text-zinc-500 hover:text-zinc-900 transition-colors' }} tracking-wide">Contact</a>
        </div>
    </div>
</nav>