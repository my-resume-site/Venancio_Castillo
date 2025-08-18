<header class="sticky top-0 z-50 backdrop-blur supports-[backdrop-filter]:bg-white/70 dark:supports-[backdrop-filter]:bg-neutral-950/70 border-b border-black/5 dark:border-white/10">
  <div class="mx-auto max-w-6xl px-4 py-3 flex items-center justify-between">
    <a href="#top" class="font-semibold tracking-tight">
      Venancio<span class="text-brand-600">Castillo</span>
    </a>

    <nav class="hidden md:flex gap-6 text-sm">
      <a href="#forex"     class="hover:text-brand-600">Forex</a>
      <a href="#projects"  class="hover:text-brand-600">Projects</a>
      <a href="#services"  class="hover:text-brand-600">Services</a>
      <a href="#skills"    class="hover:text-brand-600">Tools</a>
      <a href="#experience" class="hover:text-brand-600">Experience</a>
      <a href="#contact"   class="hover:text-brand-600">Contact</a>
    </nav>

    <div class="flex items-center gap-3">
      <span id="cal-button-mount"></span>

      <!-- Theme toggle -->
      <button
        @click="dark = !dark"
        :aria-pressed="dark.toString()"
        class="rounded-xl border border-black/10 dark:border-white/15 px-3 py-2 text-xs
               hover:bg-black/5 dark:hover:bg-white/10"
        title="Toggle dark mode"
      >
        <span x-text="dark ? '🌙 Dark' : '☀️ Light'"></span>
      </button>
    </div>
  </div>
</header>