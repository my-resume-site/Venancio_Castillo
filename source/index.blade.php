@extends('_layouts.base')

@section('body')
<!-- HERO -->
<section id="top" class="relative overflow-hidden bg-aurora">
  <div class="relative mx-auto max-w-6xl px-4 py-20 md:py-28">
    <div class="grid md:grid-cols-2 gap-10 items-center">
      <div>
        <p class="text-xs uppercase tracking-[0.20em] text-neutral-600 dark:text-neutral-400">
          Forex Trader • Operator • Trainer — Cebu, PH
        </p>
        <h1 class="mt-3 text-4xl md:text-6xl font-bold leading-tight">
          I build reliable systems—<span class="text-brand-600">trading</span>, web, and operations—
          so you get outcomes, not chaos.
        </h1>
        <p class="mt-5 max-w-2xl text-neutral-700 dark:text-neutral-300">
          Full-stack operator (former COO) and profitable forex trader. I ship one-pagers,
          wire up automations, and coach teams—while running a disciplined, risk-first FX process.
        </p>
        <div class="mt-8 flex flex-wrap gap-3">
          <a href="#contact" class="rounded-2xl bg-brand-600 px-5 py-3 text-sm font-medium text-white hover:bg-brand-500">Start a project</a>
          <a href="#forex" class="rounded-2xl border border-black/10 dark:border-white/10 px-5 py-3 text-sm font-medium hover:bg-black/5 dark:hover:bg-white/10">Forex spotlight</a>
          <!-- Résumé button restored -->
          <a href="assets/docs/resume.pdf"
             download="Venancio_Castillo_Resume.pdf"
             target="_blank" rel="noopener"
             class="rounded-2xl border border-black/10 dark:border-white/10 px-5 py-3 text-sm font-medium hover:bg-black/5 dark:hover:bg-white/10">
            Download résumé (PDF)
          </a>
        </div>
      </div>

      <div class="flex md:justify-end">
        <img
          src="assets/img/me.jpg"
          srcset="assets/img/me.jpg 800w"
          sizes="(min-width: 768px) 288px, 224px"
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
        <div class="text-xs text-neutral-500 dark:text-neutral-400">Years in ops & sales</div>
      </div>
      <div class="rounded-2xl border border-black/10 dark:border-white/10 p-5">
        <div class="text-2xl font-semibold">120+</div>
        <div class="text-xs text-neutral-500 dark:text-neutral-400">Projects shipped</div>
      </div>
      <div class="rounded-2xl border border-black/10 dark:border-white/10 p-5">
        <div class="text-2xl font-semibold">MT4/5</div>
        <div class="text-xs text-neutral-500 dark:text-neutral-400">EA & systems</div>
      </div>
      <div class="rounded-2xl border border-black/10 dark:border-white/10 p-5">
        <div class="text-2xl font-semibold">COO</div>
        <div class="text-xs text-neutral-500 dark:text-neutral-400">Ops leadership & training</div>
      </div>
    </div>
  </div>
</section>

<!-- FOREX SPOTLIGHT -->
<section id="forex" class="mx-auto max-w-6xl px-4 py-20">
  <div class="rounded-2xl border border-black/10 dark:border-white/10 p-6 bg-white/70 dark:bg-neutral-900/70">
    <h2 class="text-2xl md:text-3xl font-semibold">Forex trading — disciplined & repeatable</h2>
    <p class="mt-2 text-neutral-600 dark:text-neutral-300">
      I trade a structured, rules-based system: plan → execute → record → review.
      Focus: risk management, journaling, and continuous iteration. I also build MT4/5 EAs to automate parts of the process.
    </p>
    <div class="mt-6 grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
      <div class="rounded-xl border border-black/10 dark:border-white/10 p-4">
        <div class="text-sm text-neutral-500 dark:text-neutral-400">Approach</div>
        <div class="mt-1 font-semibold">Price action + risk-first</div>
      </div>
      <div class="rounded-xl border border-black/10 dark:border-white/10 p-4">
        <div class="text-sm text-neutral-500 dark:text-neutral-400">System</div>
        <div class="mt-1 font-semibold">Documented rules & playbooks</div>
      </div>
      <div class="rounded-xl border border-black/10 dark:border-white/10 p-4">
        <div class="text-sm text-neutral-500 dark:text-neutral-400">Automation</div>
        <div class="mt-1 font-semibold">EA builds, alerts, backtests</div>
      </div>
      <div class="rounded-xl border border-black/10 dark:border-white/10 p-4">
        <div class="text-sm text-neutral-500 dark:text-neutral-400">Coaching</div>
        <div class="mt-1 font-semibold">Beginner → Advanced, journals</div>
      </div>
    </div>
    <p class="mt-4 text-xs text-neutral-500 dark:text-neutral-400">
      *Trading involves risk. This is not financial advice; results vary with discipline and risk management.
    </p>
  </div>
</section>

{{-- ===== PROJECTS (client-side JSON + Alpine slider) ===== --}}
<section id="projects" class="mx-auto max-w-6xl px-4 py-20">
  <h2 class="text-2xl md:text-3xl font-semibold">Projects</h2>
  <p class="mt-2 text-neutral-600 dark:text-neutral-300">A rotating look at shipped work and systems.</p>

  <div
    x-data="projectsCarousel()"
    x-init="init()"
    @keydown.left.prevent="prev()" @keydown.right.prevent="next()"
    tabindex="0"
    class="mt-8 relative rounded-2xl overflow-hidden border border-black/10 dark:border-white/10 bg-white/60 dark:bg-neutral-900/60"
    @pointerdown="onDown($event)" @pointerup="onUp($event)"
    @touchstart.passive="onDown($event)" @touchend.passive="onUp($event)"
  >
    <template x-if="items.length === 0">
      <div class="p-5 text-sm text-neutral-500 dark:text-neutral-400">
        Add items below in <code class="px-1 py-0.5 rounded bg-black/5 dark:bg-white/10">#projects-data</code>.
      </div>
    </template>

    <div class="relative overflow-hidden" x-show="items.length">
      <div
        x-ref="track"
        class="flex transition-transform duration-500 ease-[cubic-bezier(.22,.61,.36,1)] will-change-transform"
      >
        <template x-for="(p, idx) in items" :key="idx">
          <article
            class="w-full shrink-0 grid md:grid-cols-2 gap-8 items-center content-center p-6 md:p-8 lg:p-10 min-h-[460px]"
            aria-roledescription="slide"
          >
            <div class="order-2 md:order-1 md:justify-self-center self-center text-left max-w-xl w-full">
              <h3 class="text-xl md:text-2xl font-semibold" x-text="p.title"></h3>
              <p class="mt-3 text-neutral-700 dark:text-neutral-300" x-text="p.desc"></p>
              <template x-if="p.meta">
                <div class="mt-4 text-xs uppercase tracking-wide text-neutral-500 dark:text-neutral-400" x-text="p.meta"></div>
              </template>

              <template x-if="p.tags && p.tags.length">
                <div class="mt-4 flex flex-wrap gap-2">
                  <template x-for="(t, ti) in p.tags" :key="ti">
                    <span class="text-xs px-2 py-1 rounded-full border border-black/10 dark:border-white/10 text-neutral-600 dark:text-neutral-300" x-text="t"></span>
                  </template>
                </div>
              </template>

              <template x-if="p.url">
                <div class="mt-5">
                  <a :href="p.url" class="text-sm text-brand-600 hover:underline" target="_blank" rel="noopener">View case study →</a>
                </div>
              </template>
            </div>

            <div class="order-1 md:order-2 md:justify-self-center">
              <img
                :src="p.img"
                :alt="p.title || ''"
                width="800" height="600"
                class="w-full aspect-[4/3] object-cover rounded-xl border border-black/10 dark:border-white/10 shadow"
                loading="lazy"
              />
            </div>
          </article>
        </template>
      </div>
    </div>

    <!-- Prev / Next -->
    <button
      @click="prev()" aria-label="Previous"
      class="absolute left-3 top-1/2 -translate-y-1/2 rounded-full border border-black/10 dark:border-white/10 bg-white/70 dark:bg-neutral-900/70 px-3 py-2 text-sm hover:bg-black/5 dark:hover:bg-white/10"
      x-show="items.length"
    >‹</button>
    <button
      @click="next()" aria-label="Next"
      class="absolute right-3 top-1/2 -translate-y-1/2 rounded-full border border-black/10 dark:border-white/10 bg-white/70 dark:bg-neutral-900/70 px-3 py-2 text-sm hover:bg-black/5 dark:hover:bg-white/10"
      x-show="items.length"
    >›</button>

    <!-- Dots -->
    <div class="absolute bottom-3 left-0 right-0 flex items-center justify-center gap-2" x-show="items.length">
      <template x-for="(_, idx) in items" :key="idx">
        <button
          class="h-2.5 w-2.5 rounded-full border border-black/20 dark:border-white/20"
          :class="i===idx ? 'bg-brand-600' : 'bg-white/70 dark:bg-neutral-800'"
          @click="go(idx)"
          :aria-label="`Go to slide ${idx+1}`"></button>
      </template>
    </div>
  </div>

  <!-- Inline JSON data you can edit -->
  <script id="projects-data" type="application/json">
  [
    {"title":"Hubstaff Documentaion for client","desc":"Web / Ops / Design","meta":"Case study","img":"assets/img/projects/1.jpg","url":null,"tags":["Tailwind","CRM","Deploy"]},
    {"title":"Performance Evaluation","desc":"Lead gen funnel","meta":"Ops system","img":"assets/img/projects/2.jpg","url":null,"tags":["Automation","CRM"]},
    {"title":"Author Pitch Deck","desc":"Brand + site refresh","meta":"Design system","img":"assets/img/projects/3.jpg","url":null,"tags":["Design","Web"]},
    {"title":"Author Guidelines","desc":"Brand + site refresh","meta":"Design system","img":"assets/img/projects/4.jpg","url":null,"tags":["Design","Web"]},
    {"title":"Digital Marketing","desc":"Brand + site refresh","meta":"Ops system","img":"assets/img/projects/5.jpg","url":null,"tags":["Design","Web"]},
    {"title":"Business Outlook","desc":"Web / Ops / Design","meta":"Case study","img":"assets/img/projects/6.jpg","url":null,"tags":["Ops","SOPs"]},
    {"title":"Business Proposal","desc":"One-pager + analytics","meta":"Deploy","img":"assets/img/projects/7.jpg","url":null,"tags":["Pages","SEO"]},
    {"title":"Event Flyering","desc":"CRM pipeline + automations","meta":"Ops system","img":"assets/img/projects/8.jpg","url":null,"tags":["CRM","Automation"]},
    {"title":"Graphic Design Options","desc":"Training deck & playbook","meta":"Design","img":"assets/img/projects/9.jpg","url":null,"tags":["Training","Playbooks"]},
    {"title":"Seasonal Project","desc":"EA backtests bundle","meta":"Case Study","img":"assets/img/projects/10.jpg","url":null,"tags":["MT4/5","Backtests"]},
    {"title":"Character Dossier","desc":"Creative pack","meta":"Design","img":"assets/img/projects/11.jpg","url":null,"tags":["Tailwind","Copy"]},
    {"title":"Character Dossier","desc":"Creative pack","meta":"Design","img":"assets/img/projects/12.jpg","url":null,"tags":["PS","Premiere"]},
    {"title":"COC Creation","desc":"Ops metrics dashboard","meta":"Ops system","img":"assets/img/projects/13.jpg","url":null,"tags":["KPI","Automation"]},
    {"title":"Sales Training","desc":"Brand kit & style tiles","meta":"Ops system","img":"assets/img/projects/14.jpg","url":null,"tags":["Design","System"]},
    {"title":"MT4 Custom Indicators","desc":"Brand kit & style tiles","meta":"Trading","img":"assets/img/projects/15.jpg","url":null,"tags":["Trading","System"]},
    {"title":"MT4 Custom Indicators","desc":"Brand kit & style tiles","meta":"Trading","img":"assets/img/projects/16.jpg","url":null,"tags":["Trading","System"]},
    {"title":"MT4 Custom EAs","desc":"Brand kit & style tiles","meta":"Trading","img":"assets/img/projects/17.jpg","url":null,"tags":["Trading","System"]}
  ]
  </script>

  <!-- Alpine component for the slider -->
  <script>
    function projectsCarousel(){
      return {
        items: [],
        i: 0, t: null, track: null, startX: null,
        interval: 4500,
        init(){
          try {
            const el = document.getElementById('projects-data');
            this.items = el ? JSON.parse(el.textContent) : [];
          } catch(e) { this.items = []; }
          this.$nextTick(()=>{ this.track = this.$refs.track; this.play(); });
        },
        play(){ this.stop(); if(this.items.length>1) this.t = setInterval(()=>this.next(), this.interval); },
        stop(){ if(this.t) clearInterval(this.t); },
        go(n){ if(!this.items.length) return; this.i = (n + this.items.length) % this.items.length; this._translate(); this.play(); },
        next(){ this.go(this.i + 1); },
        prev(){ this.go(this.i - 1); },
        _translate(){ if(this.track) this.track.style.transform = `translate3d(-${this.i * 100}%,0,0)`; },
        onDown(e){ this.startX = (e.touches?.[0] || e).clientX; this.stop(); },
        onUp(e){
          const endX = (e.changedTouches?.[0] || e).clientX;
          const dx = endX - (this.startX ?? endX);
          if (dx > 40) this.prev(); else if (dx < -40) this.next();
          this.play(); this.startX = null;
        }
      }
    }
  </script>
</section>
{{-- ===== /PROJECTS ===== --}}

<!-- SERVICES -->
<section id="services" class="mx-auto max-w-6xl px-4 py-20">
  <h2 class="text-2xl md:text-3xl font-semibold">Services</h2>
  <div class="mt-8 grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
    <article data-reveal class="rounded-2xl border border-black/10 dark:border-white/10 p-6 bg-white/70 dark:bg-neutral-900/70">
      <h3 class="font-semibold">Forex coaching & EA</h3>
      <ul class="mt-3 list-disc list-inside text-sm text-neutral-700 dark:text-neutral-300 space-y-1">
        <li>Beginner → Advanced training</li>
        <li>Risk mgmt, journaling, psychology</li>
        <li>MT4/5 EA builds & backtests</li>
      </ul>
    </article>
    <article data-reveal class="rounded-2xl border border-black/10 dark:border-white/10 p-6 bg-white/70 dark:bg-neutral-900/70">
      <h3 class="font-semibold">Websites & one-pagers</h3>
      <ul class="mt-3 list-disc list-inside text-sm text-neutral-700 dark:text-neutral-300 space-y-1">
        <li>Tailwind / Alpine / React</li>
        <li>Hosting & deployments</li>
        <li>SEO & analytics</li>
      </ul>
    </article>
    <article data-reveal class="rounded-2xl border border-black/10 dark:border-white/10 p-6 bg-white/70 dark:bg-neutral-900/70">
      <h3 class="font-semibold">Ops & training (COO)</h3>
      <ul class="mt-3 list-disc list-inside text-sm text-neutral-700 dark:text-neutral-300 space-y-1">
        <li>Sales & service playbooks</li>
        <li>Team training & SOPs</li>
        <li>CRM/ERP workflows</li>
      </ul>
    </article>
  </div>
</section>

<!-- TOOLS / SKILLS (logos) -->
<section id="skills" class="mx-auto max-w-6xl px-4 py-20">
  <h2 class="text-2xl md:text-3xl font-semibold">Tools I use</h2>
  <p class="mt-2 text-neutral-600 dark:text-neutral-300">
    My stack for planning, trading, dev, ops, integration, automation and content.
  </p>

  @php
    // Order roughly by day-to-day usability / frequency
    $tools = [
      // Planning / AI
      ['Notion',              'notion',          '#000000'],
      ['ClickUp',             'clickup',         '#7C3AED'],
      ['ChatGPT / OpenAI',    'openai',          '#10A37F'],
      ['Gamma (AI)',          null,              '#7C3AED', 'GM'],

      // Project & task management
      ['Trello',              'trello',          '#0079BF'],
      ['Asana',               'asana',           '#F06A6A'],

      // Automation
      ['Zapier',              'zapier',          '#FF4A00'],

      // Platforms
      ['Google Workspace',    'google',          '#4285F4'],
      ['Microsoft 365',       null,              '#F25022', 'MS'],

      // Trading / payments
      ['MetaTrader 4/5',      null,              '#10B981', 'MT'],
      ['Stripe',              'stripe',          '#635BFF'],
      ['Wise',                'wise',            '#22C55E'],        
      ['Payoneer',            'payoneer',        '#FF4800'],
      ['PayPal',              'paypal',          '#00457C'],

      // Dev
      ['DigitalOcean',        'digitalocean',    '#0080FF'],
      ['Laravel',             'laravel',         '#FF2D20'],    
      ['Laravel Herd',        null,              '#FF2D20', 'LH'],
      ['Tailwind',            'tailwindcss',     '#06B6D4'],
      ['Alpine.js',           'alpinedotjs',     '#77C1D2'],
      ['Node.js',             'nodedotjs',       '#339933'],
      ['GitHub Actions',      'githubactions',   '#2088FF'],

      // Ops / CRM / time
      ['HighLevel (CRM)',     null,              '#2563EB', 'HL'],
      ['HubSpot',             'hubspot',         '#FF7A59'],
      ['Hubstaff',            null,              '#00AEF0', 'HS'],
      ['Time Doctor',         null,              '#F25A2B', 'TD'],
      ['Lead gen workflows',  null,              '#A78BFA', 'LG'],
      ['CRM/ERP config',      null,              '#F59E0B', 'CE'],

      // Remote & support
      ['MS Remote Desktop',   null,              '#0078D4', 'Ms'],
      ['TeamViewer',          'teamviewer',      '#0E8EE9'],
      ['AnyDesk',             'anydesk',         '#EF233C'],

      // Design / content
      ['Adobe Photoshop',     null,              '#31A8FF', 'Ps'],
      ['Premiere Pro',        null,              '#9999FF', 'Pr'],
      ['Canva',               'canva',           '#00C4CC'],
      ['CapCut',              null,              '#c3ccddff', 'CC'],

    ];
  @endphp

  <div class="mt-6 grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
    @foreach ($tools as $t)
      @php
        [$name, $slug, $hex, $fallback] = [$t[0], $t[1] ?? null, $t[2] ?? '#e5e7eb', $t[3] ?? null];
      @endphp
      <div
        class="group flex items-center gap-3 rounded-xl border px-3 py-2
               bg-white/70 dark:bg-neutral-900/70 border-black/10 dark:border-white/10
               hover:-translate-y-0.5 transition shadow-sm hover:shadow"
        style="box-shadow: 0 0 0 1px {{ $hex }}22 inset;"
      >
        @if ($slug)
          <img
            src="https://cdn.simpleicons.org/{{ $slug }}/ffffff"
            alt="{{ $name }} logo"
            class="h-5 w-5 rounded"
            style="background-color: {{ $hex }}"
            loading="lazy"
          />
        @else
          <div class="h-5 w-5 grid place-items-center rounded text-[10px] font-semibold"
               style="background-color: {{ $hex }}; color: #0b1220">
            {{ $fallback ?? '•' }}
          </div>
        @endif
        <span class="text-sm text-neutral-800 dark:text-neutral-200">{{ $name }}</span>
      </div>
    @endforeach
  </div>
</section>

<!-- EXPERIENCE -->
<section id="experience" class="mx-auto max-w-6xl px-4 py-20">
  <h2 class="text-2xl md:text-3xl font-semibold">Experience</h2>
  <div class="mt-6 grid gap-4">
    <div class="rounded-2xl border border-black/10 dark:border-white/10 p-5 bg-white/70 dark:bg-neutral-900/70">
      <div class="font-semibold">Entrepreneur — School & Office Supply; Forex Trading</div>
      <div class="text-xs text-neutral-500 dark:text-neutral-400">Oct 2023 — Present</div>
      <ul class="mt-2 list-disc list-inside text-sm text-neutral-700 dark:text-neutral-300 space-y-1">
        <li>Built and ran disciplined FX trading system with documented rules</li>
        <li>Managed operations: procurement, logistics, client relationships</li>
      </ul>
    </div>
    <div class="rounded-2xl border border-black/10 dark:border-white/10 p-5 bg-white/70 dark:bg-neutral-900/70">
      <div class="font-semibold">COO — Better Bound Advertising</div>
      <div class="text-xs text-neutral-500 dark:text-neutral-400">Nov 2020 — Sep 2023</div>
      <ul class="mt-2 list-disc list-inside text-sm text-neutral-700 dark:text-neutral-300 space-y-1">
        <li>Led sales, production, and IT teams; built SOPs & training programs</li>
        <li>Drove campaign execution, resource allocation, and delivery quality</li>
      </ul>
    </div>
    <div class="rounded-2xl border border-black/10 dark:border-white/10 p-5 bg-white/70 dark:bg-neutral-900/70">
      <div class="font-semibold">Marketing Specialist — Nissan, Toyota, Honda Cebu</div>
      <div class="text-xs text-neutral-500 dark:text-neutral-400">2017 — 2020</div>
      <ul class="mt-2 list-disc list-inside text-sm text-neutral-700 dark:text-neutral-300 space-y-1">
        <li>Sales training, negotiations, and customer experience improvements</li>
      </ul>
    </div>
  </div>
</section>

<!-- CONTACT -->
<section id="contact" class="mx-auto max-w-6xl px-4 py-20">
  <div class="rounded-2xl border border-black/10 dark:border-white/10 p-6 bg-white/70 dark:bg-neutral-900/70">
    <h2 class="text-2xl md:text-3xl font-semibold">Let’s work together</h2>
    <p class="mt-2 text-neutral-600 dark:text-neutral-300">Email or book a call. For detailed briefs, use the intake form below.</p>

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