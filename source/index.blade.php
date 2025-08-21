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
          <a href="#forex" class="rounded-2xl border border-black/10 dark:border-white/10 px-5 py-3 text-sm font-medium hover:bg-black/5 dark:hover:bg-white/10">Know me more</a>
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

<!-- ABOUT ME -->
<section id="forex" class="mx-auto max-w-6xl px-4 py-20">
  <div class="relative overflow-hidden rounded-2xl border border-black/10 dark:border-white/10 bg-white/70 dark:bg-neutral-900/70 p-6 md:p-10">
    <!-- soft glow decoration -->
    <div class="pointer-events-none absolute -top-24 -right-24 h-72 w-72 rounded-full bg-brand-600/15 blur-3xl"></div>

    <div class="grid md:grid-cols-2 items-center gap-8 md:gap-12">
      <!-- copy -->
      <div data-reveal>
        <h2 class="text-2xl md:text-3xl font-semibold">About me</h2>
        <p class="mt-3 text-neutral-600 dark:text-neutral-300">
          I'm Venancio — operator, trainer, and profitable forex trader based in Cebu. I’ve led sales and ops as a COO,
          coached BPO teams, and build simple, reliable systems for the web and for trading.
        </p>

        <ul class="mt-5 space-y-2 text-sm text-neutral-700 dark:text-neutral-300">
          <li>• <span class="font-medium">Sales & communication:</span> English-first client work, training, and playbooks.</li>
          <li>• <span class="font-medium">Ops & systems:</span> CRM/ERP workflows, automations, SOPs.</li>
          <li>• <span class="font-medium">Forex:</span> rules-based process, journaling, MT4/5 EAs.</li>
          <li>• <span class="font-medium">Design & content:</span> Canva/Adobe, decks, brand refreshes.</li>
        </ul>

        <div class="mt-6 flex flex-wrap gap-3">
          <a
            href="assets/docs/resume.pdf"
            download
            class="rounded-2xl border border-black/10 dark:border-white/10 px-5 py-3 text-sm font-medium hover:bg-black/5 dark:hover:bg-white/10"
          >Download résumé (PDF)</a>

          <!-- <a
            href="#contact"
            class="rounded-2xl bg-brand-600 px-5 py-3 text-sm font-medium text-white hover:bg-brand-500"
          >Book a call</a> -->
        </div>
      </div>

      <!-- portrait -->
      <div class="md:justify-self-end" data-reveal>
        <img
          src="assets/img/about-portrait.jpg"
          alt="Venancio Castillo Jr"
          width="960" height="1280"
          class="w-full max-w-sm md:max-w-md aspect-[3/4] object-cover rounded-2xl border border-black/10 dark:border-white/10 shadow-xl ring-1 ring-black/5 dark:ring-white/10"
        />
      </div>
    </div>
  </div>
</section>

<!-- MISSION / VISION / HOW I CAN HELP -->
<section id="experience" class="mx-auto max-w-6xl px-4 py-20">
  <h2 class="text-2xl md:text-3xl font-semibold">Mission, Vision & Goal</h2>
  <p class="mt-2 text-neutral-600 dark:text-neutral-300">
    A clear purpose, a calm process, and support that feels personal.
  </p>

  <div class="mt-6 grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
    <!-- Mission -->
    <article data-reveal class="rounded-2xl border border-black/10 dark:border-white/10 p-6 bg-white/70 dark:bg-neutral-900/70">
      <h3 class="font-semibold">Mission</h3>
      <p class="mt-2 text-sm text-neutral-700 dark:text-neutral-300">
        Help small teams and solo founders win back time and trust by building lean systems—
        clear websites, dependable automations, and disciplined trading routines that put
        results (not noise) first.
      </p>
    </article>

    <!-- Vision -->
    <article data-reveal class="rounded-2xl border border-black/10 dark:border-white/10 p-6 bg-white/70 dark:bg-neutral-900/70">
      <h3 class="font-semibold">Vision</h3>
      <p class="mt-2 text-sm text-neutral-700 dark:text-neutral-300">
        A calm, resilient business where operations run smoothly, clients feel cared for,
        and decisions are guided by data—not guesswork—with room for people to do their best work.
      </p>
    </article>

    <!-- How I can help -->
    <article data-reveal class="rounded-2xl border border-black/10 dark:border-white/10 p-6 bg-white/70 dark:bg-neutral-900/70">
      <h3 class="font-semibold">How I can help</h3>
      <p class="mt-2 text-sm text-neutral-700 dark:text-neutral-300">
        I have sat as (COO), trained sales and support teams, and built
        practical tools—webpages, CRM/ERP flows, and MT4/5 EAs. I will listen first, design
        a simple plan, and ship improvements you can feel: faster pages, clearer workflows,
        and a repeatable trading/process rhythm you can trust.
      </p>
      <ul class="mt-3 list-disc list-inside text-sm text-neutral-700 dark:text-neutral-300 space-y-1">
        <li>One-pager sites that explain and convert</li>
        <li>CRM/ERP workflows & light automations</li>
        <li>Training, SOPs, and hand-off docs your team will use</li>
      </ul>
      <!-- <div class="mt-5 flex flex-wrap gap-3">
        <a href="#contact" class="rounded-2xl bg-brand-600 px-5 py-3 text-sm font-medium text-white hover:bg-brand-500">Let us work together</a>
        <a href="mailto:{{ $page->email }}" class="rounded-2xl border border-black/10 dark:border-white/10 px-5 py-3 text-sm font-medium hover:bg-black/5 dark:hover:bg-white/10">Email me</a>
      </div> -->
    </article>
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
    {"title":"Hubstaff Documentaion for client","desc":"Simple guide for staffs","meta":"Case study","img":"assets/img/projects/1.jpg","url":null,"tags":["Tailwind","CRM","Deploy"]},
    {"title":"Performance Evaluation","desc":"Thorough data-driven analysis","meta":"Ops system","img":"assets/img/projects/2.jpg","url":null,"tags":["Automation","CRM"]},
    {"title":"Author Pitch Deck","desc":"Branding + Design","meta":"Design system","img":"assets/img/projects/3.jpg","url":null,"tags":["Design","Web"]},
    {"title":"Author Guidelines","desc":"Simple guide for authors","meta":"Design system","img":"assets/img/projects/4.jpg","url":null,"tags":["Design","Web"]},
    {"title":"Digital Marketing","desc":"Creation + Training","meta":"Ops system","img":"assets/img/projects/5.jpg","url":null,"tags":["Design","Web"]},
    {"title":"Business Outlook","desc":"Thorough data-driven analysis","meta":"Case study","img":"assets/img/projects/6.jpg","url":null,"tags":["Ops","SOPs"]},
    {"title":"Business Proposal","desc":"Tapping opportunities","meta":"Deploy","img":"assets/img/projects/7.jpg","url":null,"tags":["Pages","SEO"]},
    {"title":"Event Flyering","desc":"Digital Ads","meta":"Ops system","img":"assets/img/projects/8.jpg","url":null,"tags":["CRM","Automation"]},
    {"title":"Graphic Design Options","desc":"Design + Creation","meta":"Design","img":"assets/img/projects/9.jpg","url":null,"tags":["Training","Playbooks"]},
    {"title":"Seasonal Project","desc":"Siezing every opportunity","meta":"Case Study","img":"assets/img/projects/10.jpg","url":null,"tags":["MT4/5","Backtests"]},
    {"title":"Character Dossier","desc":"Creative pack","meta":"Design","img":"assets/img/projects/11.jpg","url":null,"tags":["Tailwind","Copy"]},
    {"title":"Character Dossier","desc":"Creative pack","meta":"Design","img":"assets/img/projects/12.jpg","url":null,"tags":["PS","Premiere"]},
    {"title":"COC Creation","desc":"Ops metrics dashboard","meta":"Ops system","img":"assets/img/projects/13.jpg","url":null,"tags":["KPI","Automation"]},
    {"title":"Sales Training","desc":"Training deck + playbook","meta":"Ops system","img":"assets/img/projects/14.jpg","url":null,"tags":["Design","System"]},
    {"title":"MT4 Custom Indicators","desc":"Profitable trading playbook","meta":"Trading","img":"assets/img/projects/15.jpg","url":null,"tags":["Trading","System"]},
    {"title":"MT4 Custom Indicators","desc":"Profitable trading playbook","meta":"Trading","img":"assets/img/projects/16.jpg","url":null,"tags":["Trading","System"]},
    {"title":"MT4 Custom EAs","desc":"Profitable trading playbook","meta":"Trading","img":"assets/img/projects/17.jpg","url":null,"tags":["Trading","System"]}
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
    ['Notion',              'notion',            '#000000'],
    ['ClickUp',             'clickup',           '#7C3AED'],
    ['ChatGPT / OpenAI',    'openai',            '#10A37F'],
    ['Gamma (AI)',          null,                '#7C3AED', 'GM'],
    ['Whisper (transcription)', null,            '#10A37F', 'Wh'],

    // Project & task management
    ['Trello',              'trello',            '#0079BF'],
    ['Asana',               'asana',             '#F06A6A'],

    // Automation
    ['Zapier',              'zapier',            '#FF4A00'],
    ['Google Apps Script',  null,                '#34A853', 'GAS'],
    ['Make (Integromat)',   'make',              '#FF4A00'],
    ['n8n',                 'n8n',               '#00BFA5'],
    ['Pipedream',           null,                '#00C4CC', 'Pd'],

    // Platforms
    ['Google Workspace',    'google',            '#4285F4'],
    ['Microsoft 365',       null,                '#F25022', 'MS'],

    // Trading / payments
    ['MetaTrader 4/5',      null,                '#10B981', 'MT'],
    ['Stripe',              'stripe',            '#635BFF'],
    ['Wise',                'wise',              '#22C55E'],
    ['Payoneer',            'payoneer',          '#FF4800'],
    ['PayPal',              'paypal',            '#00457C'],

    // Dev
    ['Visual Studio Code',  null,                '#007ACC', 'VS'],
    ['Laravel',             'laravel',           '#FF2D20'],
    ['Laravel Herd',        null,                '#FF2D20', 'LH'],
    ['Tailwind',            'tailwindcss',       '#06B6D4'],
    ['Alpine.js',           'alpinedotjs',       '#77C1D2'],
    ['Node.js',             'nodedotjs',         '#339933'],
    ['MySQL',               'mysql',             '#4479A1'],
    ['phpMyAdmin',          'phpmyadmin',        '#6C78AF'], 
    ['Git',                 'git',               '#F05032'],
    ['GitHub',              'github',            '#181717'],
    ['Docker',              'docker',            '#2496ED'],
    ['Vercel',              'vercel',            '#000000'],
    ['Netlify',             'netlify',           '#00C7B7'],
    ['DigitalOcean',        'digitalocean',      '#0080FF'],
    ['AWS (Amazon Web Services)', null,          '#FF9900', 'AWS'],
    ['Google Cloud Platform', 'googlecloud',     '#4285F4'],
    ['Firebase',            'firebase',          '#FFCA28'],
    ['Postman',             'postman',           '#FF6C37'],
    ['GitHub Actions',      'githubactions',     '#2088FF'],

    // Remote & support / comms
    ['RingCentral',         null,                '#FF7A00', 'RC'],
    ['Slack',               'slack',             '#4A154B'],
    ['Discord',             'discord',           '#5865F2'],
    ['Zoom',                'zoom',              '#2D8CFF'],
    ['Google Meet',         'googlemeet',        '#34A853'],
    ['Microsoft Teams',     null,                '#6264A7', 'T'],
    ['WhatsApp',            'whatsapp',          '#25D366'],
    ['Telegram',            'telegram',          '#0088CC'],
    ['Viber',               'viber',             '#59267C'],
    ['Facebook Messenger',  'messenger',         '#0084FF'],
    ['Google Chat',         'googlechat',        '#34A853'],
    ['Microsoft Outlook',   null,                '#0078D4', 'Ms'],
    ['Zoom',                'zoom',              '#2D8CFF'],
    ['MS Remote Desktop',   null,                '#0078D4', 'RD'],
    ['TeamViewer',          'teamviewer',        '#0E8EE9'],
    ['AnyDesk',             'anydesk',           '#EF233C'],

    // Design / content & site builders
    ['Figma',               'figma',             '#F24E1E'],
    ['Webflow',             'webflow',           '#4353FF'],
    ['TailGrids',           null,                '#06B6D4', 'TG'],
    ['SVGs',                null,                '#FFB13B', 'SVG'],
    ['LottieFiles',         'lottiefiles',       '#FF6F61'],
    ['Adobe Illustrator',   null,                '#FF9A00', 'Ai'],
    ['Adobe After Effects', null,                '#9999FF', 'Ae'],
    ['Adobe InDesign',      null,                '#FF3366', 'Id'],
    ['SVGator',             null,                '#FFB13B', 'SG'],
    ['Shapr3D',             null,                '#08A0F7', 's3D'],
    ['Adobe Photoshop',     null,                '#31A8FF', 'Ps'],
    ['Premiere Pro',        null,                '#9999FF', 'Pr'],
    ['CapCut',              null,                '#c3ccddff', 'CC'],
    ['Canva',               'canva',             '#00C4CC'],
    ['Prezi',               'prezi',             '#3181FF'],

    // Learning
    ['Udemy',               'udemy',             '#A435F0'],

    // Ops / CRM / time
    ['HighLevel (CRM)',     null,                '#2563EB', 'HL'],
    ['HubSpot',             'hubspot',           '#FF7A59'],
    ['Hubstaff',            null,                '#00AEF0', 'Hs'],
    ['Time Doctor',         null,                '#F25A2B', 'TD'],
    ['Lead gen workflows',  null,                '#A78BFA', 'LG'],
    ['CRM/ERP config',      null,                '#F59E0B', 'CE'],
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

<!-- SERVICES — responsive card slider (Alpine + scroll-snap) -->
<section id="services" class="mx-auto max-w-6xl px-4 py-20">
  <h2 class="text-2xl md:text-3xl font-semibold">What I can achieve for you</h2>
  <p class="mt-2 text-neutral-600 dark:text-neutral-300">
    I ship one-pagers, wire up automations, and handle ops—end to end.
  </p>

  <div x-data="svcCarousel()" x-init="init()" class="relative mt-8">
    <!-- track -->
    <div
      x-ref="tray"
      class="flex gap-4 overflow-x-auto scroll-smooth snap-x snap-mandatory pb-2
             [scrollbar-color:transparent_transparent]"
      aria-roledescription="carousel"
    >
      <template x-for="(s,i) in items" :key="i">
        <article
          class="snap-start shrink-0 w-[88%] sm:w-[48%] lg:w-[32%]
                 rounded-2xl border border-black/10 dark:border-white/10
                 bg-white/70 dark:bg-neutral-900/70 p-6
                 hover:-translate-y-0.5 transition shadow-sm hover:shadow"
          role="group"
          :aria-label="`Slide ${i+1} of ${items.length}`"
        >
          <h3 class="font-semibold" x-text="s.title"></h3>
          <p class="mt-2 text-sm text-neutral-700 dark:text-neutral-300" x-text="s.desc"></p>
          <ul class="mt-4 space-y-2 text-sm text-neutral-700 dark:text-neutral-300 list-disc list-inside">
            <template x-for="(pt,pi) in s.points" :key="pi">
              <li x-text="pt"></li>
            </template>
          </ul>
        </article>
      </template>
    </div>

    <!-- controls -->
    <button
      @click="prev()" aria-label="Previous"
      class="absolute left-3 top-1/2 -translate-y-1/2 rounded-full border
             border-black/10 dark:border-white/10 bg-white/80 dark:bg-neutral-900/80
             px-3 py-2 text-sm hover:bg-black/5 dark:hover:bg-white/10"
    >‹</button>
    <button
      @click="next()" aria-label="Next"
      class="absolute right-3 top-1/2 -translate-y-1/2 rounded-full border
             border-black/10 dark:border-white/10 bg-white/80 dark:bg-neutral-900/80
             px-3 py-2 text-sm hover:bg-black/5 dark:hover:bg-white/10"
    >›</button>

    <!-- dots -->
    <div class="mt-5 flex items-center justify-center gap-2">
      <template x-for="(_, idx) in pages" :key="idx">
        <button
          class="h-2.5 w-2.5 rounded-full border border-black/20 dark:border-white/20"
          :class="page===idx ? 'bg-brand-600' : 'bg-white/70 dark:bg-neutral-800'"
          @click="go(idx)"
          :aria-label="`Go to slide ${idx+1}`"></button>
      </template>
    </div>
  </div>

  <!-- Inline JSON you can edit anytime -->
  <script id="services-data" type="application/json">
  [
  {
    "title": "Websites & One-Pagers",
    "desc": "Fast, responsive, SEO-ready pages with clean copy and analytics.",
    "points": [
      "Services included — Tailwind / Alpine / React builds",
      "Services included — Accessibility & performance passes",
      "Services included — Custom domains, DNS & HTTPS",
      "Deliverables — 1–3 page responsive site",
      "Deliverables — Analytics + Search Console wired",
      "Deliverables — Deployment guide & hand-off",
      "Deliverables — 30-day post-launch support"
    ]
  },
  {
    "title": "Forex Coaching (Beg → Adv)",
    "desc": "Rules-based system: plan → execute → record → review.",
    "points": [
      "Services included — Risk management & psychology",
      "Services included — Setups, journaling & reviews",
      "Services included — Accountability & trade feedback",
      "Deliverables — Weekly 60-min sessions",
      "Deliverables — Personal trading plan (PDF)",
      "Deliverables — Notion/Sheets journal templates",
      "Deliverables — Progress summary every 2 weeks"
    ]
  },
  {
    "title": "Forex EA / Automation (MT4/5)",
    "desc": "Automate entries/exits, alerts, BE/TSL and risk.",
    "points": [
      "Services included — Strategy inputs & logic design",
      "Services included — Backtests & optimization",
      "Services included — Install + VPS recommendations",
      "Deliverables — Inputs doc & risk presets",
      "Deliverables — Backtest/optimization report",
      "Deliverables — Install & usage guide",
      "Deliverables — 2-week support window"
    ]
  },
  {
    "title": "Ops & Training (COO)",
    "desc": "Playbooks, SOPs, and team training for delivery.",
    "points": [
      "Services included — Sales & service workflows",
      "Services included — KPI dashboards & cadences",
      "Services included — Team enablement & onboarding",
      "Deliverables — SOP pack + checklists",
      "Deliverables — Dashboard starter (Sheets/Notion)",
      "Deliverables — Training deck & recordings",
      "Deliverables — 90-day rollout roadmap"
    ]
  },
  {
    "title": "Lead Gen / Social",
    "desc": "Inbound + outbound workflows and content engines.",
    "points": [
      "Services included — Funnels, CRMs & auto-DMs",
      "Services included — Campaign planning & copy",
      "Services included — Reporting & QA loops",
      "Deliverables — 4-week content calendar",
      "Deliverables — Funnel map + CRM stages",
      "Deliverables — 10 DM/email scripts",
      "Deliverables — Weekly metrics snapshot"
    ]
  },
  {
    "title": "Design / Photo / Video",
    "desc": "Clean brand pieces and edits for web & social.",
    "points": [
      "Services included — PS / PR / CapCut / Canva",
      "Services included — Thumbnails, reels & promos",
      "Services included — Brand kits & templates",
      "Deliverables — Mini brand kit (fonts/colors)",
      "Deliverables — 10 social templates",
      "Deliverables — 5 edited assets (reels/thumbs)",
      "Deliverables — Web-ready export pack"
    ]
  },
  {
    "title": "Business Coaching (PH)",
    "desc": "From permits to ops and go-to-market basics.",
    "points": [
      "Services included — Entity setup guidance",
      "Services included — Vendor & budget planning",
      "Services included — GTMP: offers → channels → ops",
      "Deliverables — Setup checklist",
      "Deliverables — Budget & vendor sheet",
      "Deliverables — Go-to-market outline",
      "Deliverables — Reusable doc templates"
    ]
  },
  {
    "title": "Executive Assistant",
    "desc": "Inbox, calendar, travel, research, and follow-ups.",
    "points": [
      "Services included — Email triage & scheduling",
      "Services included — Notes, docs & slides",
      "Services included — Client comms & follow-ups",
      "Deliverables — Inbox rules & labels",
      "Deliverables — Meeting notes template",
      "Deliverables — Travel booking checklist",
      "Deliverables — Weekly status report"
    ]
  }
  ]
  </script>

  <!-- Alpine logic -->
  <script>
    function svcCarousel(){
      return {
        items: [], page: 0, pages: 1, tray: null,
        init(){
          try { this.items = JSON.parse(document.getElementById('services-data').textContent) || []; }
          catch(e){ this.items = []; }
          this.tray = this.$refs.tray;
          this.onResize();
          window.addEventListener('resize', () => this.onResize());
          this.tray.addEventListener('scroll', () => this._updatePage(), {passive:true});
        },
        perView(){
          const w = this.tray?.clientWidth || window.innerWidth;
          if (w >= 1024) return 3;   // lg
          if (w >= 640)  return 2;   // sm+
          return 1;                   // mobile
        },
        onResize(){
          const pv = this.perView();
          this.pages = Math.max(1, Math.ceil(this.items.length / pv));
          this._updatePage();
        },
        go(n){
          const pv = this.perView();
          n = Math.max(0, Math.min(n, this.pages - 1));
          const startIdx = Math.min(n * pv, Math.max(0, this.items.length - pv));
          const cardEl = this.tray.children[startIdx];
          if (!cardEl) return;
          const left = cardEl.offsetLeft - this.tray.offsetLeft;
          this.tray.scrollTo({ left, behavior: 'smooth' });
        },
        next(){ this.go(this.page + 1); },
        prev(){ this.go(this.page - 1); },
        _updatePage(){
          const pv = this.perView();
          // find nearest page by looking at the first visible card
          let firstIdx = 0;
          for (let i=0;i<this.tray.children.length;i++){
            const c = this.tray.children[i];
            if (c.offsetLeft + c.offsetWidth > this.tray.scrollLeft + 4) { firstIdx = i; break; }
          }
          this.page = Math.round(firstIdx / pv);
        }
      }
    }
  </script>
</section>

<!-- CONTACT -->
<section id="contact" class="mx-auto max-w-6xl px-4 py-20">
  <div class="rounded-2xl border border-black/10 dark:border-white/10 p-6 bg-white/70 dark:bg-neutral-900/70">
    <h2 class="text-2xl md:text-3xl font-semibold">Let's take your business to the next level.</h2>
    <p class="mt-2 text-neutral-600 dark:text-neutral-300">Having me means you can focus on your strengths while I take care of the weaknesses holding you back.</p>

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