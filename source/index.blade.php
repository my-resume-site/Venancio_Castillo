@extends('_layouts.base')

@section('body')
<!-- HERO -->
<section id="top" class="relative overflow-hidden bg-aurora">
  <div class="relative mx-auto max-w-6xl px-4 py-20 md:py-28">
    <div class="grid md:grid-cols-2 gap-10 items-center">
      <div>
        <p class="text-xs uppercase tracking-[0.20em] text-neutral-600 dark:text-neutral-400">
          {{ $page->siteTagline }}
        </p>
        <h1 class="mt-3 text-4xl md:text-6xl font-bold leading-tight">
          I build fast one-pagers, set up hosting & domains, and streamline workflows.
        </h1>
        <p class="mt-5 max-w-2xl text-neutral-700 dark:text-neutral-300">
          Skills across self-publishing, web development (TALL & MERN), DigitalOcean server management,
          CRM/ERP configuration, graphics & video editing, and sales/lead-gen — so clients get an idea,
          a site, and a working system.
        </p>
        <div class="mt-8 flex flex-wrap gap-3">
          <a href="#contact" class="rounded-2xl bg-brand-600 px-5 py-3 text-sm font-medium text-white hover:bg-brand-500">
            Start a project
          </a>
          <a href="#work" class="rounded-2xl border border-black/10 dark:border-white/10 px-5 py-3 text-sm font-medium hover:bg-black/5 dark:hover:bg-white/10">
            See my work
          </a>
        </div>
      </div>

      <div class="flex md:justify-end">
        <img
          src="assets/img/me.jpg"
          alt="Venancio Castillo Jr"
          width="288" height="288"
          class="w-56 h-56 md:w-72 md:h-72 object-cover rounded-2xl border border-black/10 dark:border-white/10 shadow-lg"
        />
      </div>
    </div>

    <!-- quick stats -->
    <div class="mt-12 grid grid-cols-2 sm:grid-cols-4 gap-6 text-center">
      <div class="rounded-2xl border border-black/10 dark:border-white/10 p-5">
        <div class="text-2xl font-semibold">8+</div>
        <div class="text-xs text-neutral-500 dark:text-neutral-400">Years experience</div>
      </div>
      <div class="rounded-2xl border border-black/10 dark:border-white/10 p-5">
        <div class="text-2xl font-semibold">120+</div>
        <div class="text-xs text-neutral-500 dark:text-neutral-400">Projects shipped</div>
      </div>
      <div class="rounded-2xl border border-black/10 dark:border-white/10 p-5">
        <div class="text-2xl font-semibold">~1s</div>
        <div class="text-xs text-neutral-500 dark:text-neutral-400">Typical LCP</div>
      </div>
      <div class="rounded-2xl border border-black/10 dark:border-white/10 p-5">
        <div class="text-2xl font-semibold">100</div>
        <div class="text-xs text-neutral-500 dark:text-neutral-400">Lighthouse a11y</div>
      </div>
    </div>
  </div>
</section>

<!-- SERVICES -->
<section id="services" class="mx-auto max-w-6xl px-4 py-20">
  <h2 class="text-2xl md:text-3xl font-semibold">What I do</h2>
  <p class="mt-2 text-neutral-600 dark:text-neutral-300">
    I ship one-pagers and small sites, wire up automations, and handle hosting — end to end.
  </p>

  <div class="mt-8 grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
    <article data-reveal class="rounded-2xl border border-black/10 dark:border-white/10 p-6 bg-white/70 dark:bg-neutral-900/70">
      <h3 class="font-semibold">Websites & One-Pagers</h3>
      <ul class="mt-4 space-y-2 text-sm text-neutral-700 dark:text-neutral-300 list-disc list-inside">
        <li>HTML/CSS/JS • Tailwind • Alpine/React</li>
        <li>TALL & MERN approaches</li>
        <li>Performance, accessibility, SEO</li>
      </ul>
    </article>

    <article data-reveal class="rounded-2xl border border-black/10 dark:border-white/10 p-6 bg-white/70 dark:bg-neutral-900/70">
      <h3 class="font-semibold">Hosting & Deployments</h3>
      <ul class="mt-4 space-y-2 text-sm text-neutral-700 dark:text-neutral-300 list-disc list-inside">
        <li>GitHub Pages / Vercel / Netlify</li>
        <li>DigitalOcean server management</li>
        <li>Domains, DNS, emails</li>
      </ul>
    </article>

    <article data-reveal class="rounded-2xl border border-black/10 dark:border-white/10 p-6 bg-white/70 dark:bg-neutral-900/70">
      <h3 class="font-semibold">Design / Photo / Video</h3>
      <ul class="mt-4 space-y-2 text-sm text-neutral-700 dark:text-neutral-300 list-disc list-inside">
        <li>Photoshop / Premiere / Canva</li>
        <li>Brand kits, short-form edits</li>
        <li>Thumbnails, posts, banners</li>
      </ul>
    </article>

    <article data-reveal class="rounded-2xl border border-black/10 dark:border-white/10 p-6 bg-white/70 dark:bg-neutral-900/70">
      <h3 class="font-semibold">CRM/ERP & Automations</h3>
      <ul class="mt-4 space-y-2 text-sm text-neutral-700 dark:text-neutral-300 list-disc list-inside">
        <li>CRM/ERP config & data flows</li>
        <li>Forms, zaps, reporting</li>
        <li>Google Workspace & 365</li>
      </ul>
    </article>

    <article data-reveal class="rounded-2xl border border-black/10 dark:border-white/10 p-6 bg-white/70 dark:bg-neutral-900/70">
      <h3 class="font-semibold">Lead Gen / Ops</h3>
      <ul class="mt-4 space-y-2 text-sm text-neutral-700 dark:text-neutral-300 list-disc list-inside">
        <li>Executive assistant / SMM</li>
        <li>Prospecting pipelines</li>
        <li>Outbound scripts & tracking</li>
      </ul>
    </article>

    <article data-reveal class="rounded-2xl border border-black/10 dark:border-white/10 p-6 bg-white/70 dark:bg-neutral-900/70">
      <h3 class="font-semibold">Forex Systems & Coaching</h3>
      <ul class="mt-4 space-y-2 text-sm text-neutral-700 dark:text-neutral-300 list-disc list-inside">
        <li>EA/automation (MT4/MT5)</li>
        <li>Risk, journaling, psychology</li>
        <li>Beginner → Advanced coaching</li>
      </ul>
    </article>
  </div>
</section>

<!-- TOOLS / SKILLS (with logos) -->
<section id="skills" class="mx-auto max-w-6xl px-4 py-20">
  <h2 class="text-2xl md:text-3xl font-semibold">Tools I use</h2>
  <p class="mt-2 text-neutral-600 dark:text-neutral-300">
    My everyday stack for design, dev, hosting, and automation.
  </p>

  @php
    $tools = [
      ['Tailwind','tailwindcss','#06B6D4'],
      ['Alpine.js','alpinedotjs','#77C1D2'],
      ['Laravel / Blade','laravel','#FF2D20'],
      ['Node.js','nodedotjs','#339933'],
      ['GitHub Actions','githubactions','#2088FF'],
      ['DigitalOcean','digitalocean','#0080FF'],
      ['Google Workspace','google','#4285F4'],
      ['Microsoft 365','microsoft','#F25022'],
      ['Adobe Photoshop','adobephotoshop','#31A8FF'],
      ['Premiere Pro','adobepremierepro','#9999FF'],
      ['Canva','canva','#00C4CC'],
      ['MetaTrader 4/5',null,'#6EE7B7'],
      ['Lead gen workflows',null,'#A78BFA'],
      ['CRM/ERP config',null,'#F59E0B'],
    ];
  @endphp

  <div class="mt-6 grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
    @foreach ($tools as [$name,$slug,$hex])
      <div class="group flex items-center gap-3 rounded-xl border px-3 py-2 bg-white/70 dark:bg-neutral-900/70
                  border-black/10 dark:border-white/10 hover:-translate-y-0.5 transition shadow-sm hover:shadow"
           style="box-shadow: 0 0 0 1px {{ $hex }}22 inset;">
        @if ($slug)
          <img src="https://cdn.simpleicons.org/{{ $slug }}/ffffff" alt="{{ $name }} logo"
               class="h-5 w-5 rounded" style="background-color: {{ $hex }}" loading="lazy" />
        @else
          <div class="h-5 w-5 grid place-items-center rounded text-sm"
               style="background-color: {{ $hex }}; color: #0b1220">📈</div>
        @endif
        <span class="text-sm text-neutral-800 dark:text-neutral-200">{{ $name }}</span>
      </div>
    @endforeach
  </div>
</section>

<!-- WORK -->
<section id="work" class="mx-auto max-w-6xl px-4 py-20">
  <h2 class="text-2xl md:text-3xl font-semibold">Selected work</h2>
  <p class="mt-2 text-neutral-600 dark:text-neutral-300">Case studies coming soon. Meanwhile, here’s my resume:</p>
  <a href="assets/docs/resume.pdf" class="mt-4 inline-block rounded-2xl border border-black/10 dark:border-white/10 px-5 py-3 text-sm hover:bg-black/5 dark:hover:bg-white/10">
    Download resume (PDF)
  </a>
</section>

<!-- EXPERIENCE -->
<section id="experience" class="mx-auto max-w-6xl px-4 py-20">
  <h2 class="text-2xl md:text-3xl font-semibold">Experience</h2>
  <div class="mt-6 grid gap-4">
    <div class="rounded-2xl border border-black/10 dark:border-white/10 p-5 bg-white/70 dark:bg-neutral-900/70">
      <div class="font-semibold">Entrepreneur — School & Office Supply; Forex Trading</div>
      <div class="text-xs text-neutral-500 dark:text-neutral-400">Oct 2023 — Present</div>
      <ul class="mt-2 list-disc list-inside text-sm text-neutral-700 dark:text-neutral-300 space-y-1">
        <li>End-to-end ops: procurement, logistics, client management</li>
        <li>Automated trading systems for consistency & decision-making</li>
      </ul>
    </div>
    <div class="rounded-2xl border border-black/10 dark:border-white/10 p-5 bg-white/70 dark:bg-neutral-900/70">
      <div class="font-semibold">COO — Better Bound Advertising</div>
      <div class="text-xs text-neutral-500 dark:text-neutral-400">Nov 2020 — Sep 2023</div>
      <ul class="mt-2 list-disc list-inside text-sm text-neutral-700 dark:text-neutral-300 space-y-1">
        <li>Oversaw campaign execution, resource allocation, and QA</li>
        <li>Strengthened client relationships & delivery processes</li>
      </ul>
    </div>
    <div class="rounded-2xl border border-black/10 dark:border-white/10 p-5 bg-white/70 dark:bg-neutral-900/70">
      <div class="font-semibold">Marketing Specialist — Nissan, Toyota, Honda Cebu</div>
      <div class="text-xs text-neutral-500 dark:text-neutral-400">2017 — 2020</div>
      <ul class="mt-2 list-disc list-inside text-sm text-neutral-700 dark:text-neutral-300 space-y-1">
        <li>Advised clients, handled negotiations & closings</li>
        <li>Delivered standout customer experiences</li>
      </ul>
    </div>
  </div>
</section>

<!-- CONTACT -->
<section id="contact" class="mx-auto max-w-6xl px-4 py-20">
  <div class="rounded-2xl border border-black/10 dark:border-white/10 p-6 bg-white/70 dark:bg-neutral-900/70">
    <h2 class="text-2xl md:text-3xl font-semibold">Let’s work together</h2>
    <p class="mt-2 text-neutral-600 dark:text-neutral-300">
      Email or book a call. For detailed briefs, use the intake form below.
    </p>

    <div class="mt-6 flex flex-wrap gap-3">
      <a href="mailto:{{ $page->email }}?subject=Project%20inquiry&body=Hi%20Venancio,%0A%0AWhat%20do%20you%20need:"
         class="rounded-2xl border border-black/10 dark:border-white/10 px-5 py-3 text-sm font-medium hover:bg-black/5 dark:hover:bg-white/10">
        Email me
      </a>
      <a href="{{ $page->whatsAppUrl }}"
         class="rounded-2xl border border-black/10 dark:border-white/10 px-5 py-3 text-sm font-medium hover:bg-black/5 dark:hover:bg-white/10">
        WhatsApp
      </a>
      <noscript>
        <a href="{{ $page->calendarBookingUrl }}" class="rounded-2xl bg-brand-600 px-5 py-3 text-sm font-medium text-white">Book a call</a>
      </noscript>
    </div>

    <h3 class="mt-10 font-semibold">Discovery Form — Short Intake (≈3–5 min)</h3>
    <div class="mt-4">
      <iframe src="{{ $page->formEmbedSrc }}" width="100%" height="1600" frameborder="0" marginheight="0" marginwidth="0">
        Loading…
      </iframe>
    </div>

    <div class="mt-6">
      <span id="cal-button-mount"></span>
    </div>
  </div>
</section>
@endsection