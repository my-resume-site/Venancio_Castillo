<footer class="border-t border-white/10">
  <div class="mx-auto max-w-6xl px-4 py-10 text-sm text-neutral-400 flex flex-wrap items-center justify-between gap-4">
    <div>© <span id="year">{{ date('Y') }}</span> {{ $page->siteName }}. Cebu, PH.</div>
    <div class="flex gap-4">
      <a href="https://github.com/my-resume-site/Venancio_Castillo" class="hover:text-neutral-200">GitHub</a>
      <a href="{{ $page->whatsAppUrl }}" class="hover:text-neutral-200">WhatsApp</a>
      <a href="#top" class="hover:text-neutral-200">Back to top ↑</a>
    </div>
  </div>
</footer>