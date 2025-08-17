@extends('_layouts.base')

@section('body')
<section id="top" class="relative overflow-hidden bg-radial">
  <div class="relative mx-auto max-w-6xl px-4 py-20 md:py-28">
    <div class="grid md:grid-cols-2 gap-10 items-center">
      <div>
        <p class="text-sm uppercase tracking-[0.2em] text-neutral-300/80">{{ $page->siteTagline }}</p>
        <h1 class="mt-3 text-4xl md:text-6xl font-bold leading-tight">
          I build fast one-pagers, set up hosting & domains, and streamline workflows.
        </h1>
        <p class="mt-5 max-w-2xl text-neutral-300">
          Skills across self-publishing, web development (TALL & MERN), DigitalOcean server management,
          CRM/ERP configuration, graphics & video editing, and sales/lead-gen—so clients get an idea,
          a site, and a working system.
        </p>
        <div class="mt-8 flex flex-wrap gap-3">
          <a href="#contact" class="rounded-2xl bg-brand-600 px-5 py-3 text-sm font-medium hover:bg-brand-500">Start a project</a>
          <a href="#work" class="rounded-2xl border border-white/10 px-5 py-3 text-sm font-medium hover:bg-white/10">See my work</a>
        </div>
      </div>
      <div class="flex md:justify-end">
        <img src="assets/img/me.jpg" alt="{{ $page->siteName }}" class="w-56 h-56 md:w-72 md:h-72 object-cover rounded-2xl border border-white/10 shadow-lg"/>
      </div>
    </div>

    <div class="mt-12 grid grid-cols-2 sm:grid-cols-4 gap-6 text-center">
      <div class="rounded-2xl border border-white/10 p-5">
        <div class="text-2xl font-semibold">8+</div>
        <div class="text-xs text-neutral-400">Years experience</div>
      </div>
      <div class="rounded-2xl border border-white/10 p-5">
        <div class="text-2xl font-semibold">120+</div>
        <div class="text-xs text-neutral-400">Projects shipped</div>
      </div>
      <div class="rounded-2xl border border-white/10 p-5">
        <div class="text-2xl font-semibold">~1s</div>
        <div class="text-xs text-neutral-400">Typical LCP</div>
      </div>
      <div class="rounded-2xl border border-white/10 p-5">
        <div class="text-2xl font-semibold">100</div>
        <div class="text-xs text-neutral-400">Lighthouse a11y</div>
      </div>
    </div>
  </div>
</section>

<section id="services" class="mx-auto max-w-6xl px-4 py-20">
  <h2 class="text-2xl md:text-3xl font-semibold">What I do</h2>
  <p class="mt-2 text-neutral-300">I ship one-pagers and small sites, wire up automations, and handle hosting—end to end.</p>
  <div class="mt-8 grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
    <article data-reveal class="rounded-2xl border border-white/10 p-6">
      <h3 class="font-semibold">Websites & One-Pagers</h3>
      <p class="mt-2 text-sm text-neutral-300">Fast, responsive, SEO-ready pages with clean copy and analytics.</p>
      <ul class="mt-4 space-y-2 text-sm text-neutral-300 list-disc list-inside">
        <li>HTML/CSS/JS • Tailwind • React</li>
        <li>TALL & MERN approaches</li>
        <li>Accessibility & performance</li>
      </ul>
    </article>
    <article data-reveal class="rounded-2xl border border-white/10 p-6">
      <h3 class="font-semibold">Hosting, Domains & Deploys</h3>
      <p class="mt-2 text-sm text-neutral-300">From free static hosting to VPS (DigitalOcean), SSL, and custom domains.</p>
      <ul class="mt-4 space-y-2 text-sm text-neutral-300 list-disc list-inside">
        <li>GitHub Pages/Netlify/Vercel</li>
        <li>DigitalOcean droplets</li>
        <li>Basic DB setup (MySQL/Postgres)</li>
      </ul>
    </article>
    <article data-reveal class="rounded-2xl border border-white/10 p-6">
      <h3 class="font-semibold">Design, Video & Marketing</h3>
      <p class="mt-2 text-sm text-neutral-300">Brand-aligned graphics, photo retouch, short-form video, and lead-gen support.</p>
      <ul class="mt-4 space-y-2 text-sm text-neutral-300 list-disc list-inside">
        <li>Photoshop • Illustrator • Premiere</li>
        <li>Copy polish & landing optimization</li>
        <li>CRM/ERP config & automations</li>
      </ul>
    </article>
  </div>
</section>

<section id="skills" class="mx-auto max-w-6xl px-4 py-20">
  <h2 class="text-2xl md:text-3xl font-semibold">Skills & Tools</h2>
  <p class="mt-2 text-neutral-300">Video/photo editing, website dev, hosting & deployment, database setup, cloud (DigitalOcean), team tooling (Google Workspace, Microsoft 365).</p>
  <div class="mt-8 grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-3">
    @php $icons = [
      ['alt'=>'Photoshop','url'=>'https://cdn.simpleicons.org/adobephotoshop/31A8FF'],
      ['alt'=>'Illustrator','url'=>'https://cdn.simpleicons.org/adobeillustrator/FF9A00'],
      ['alt'=>'Premiere Pro','url'=>'https://cdn.simpleicons.org/adobepremierepro/9999FF'],
      ['alt'=>'Figma','url'=>'https://cdn.simpleicons.org/figma/F24E1E'],
      ['alt'=>'Canva','url'=>'https://cdn.simpleicons.org/canva/00C4CC'],
      ['alt'=>'React','url'=>'https://cdn.simpleicons.org/react/61DAFB'],
      ['alt'=>'Tailwind CSS','url'=>'https://cdn.simpleicons.org/tailwindcss/38BDF8'],
      ['alt'=>'Laravel','url'=>'https://cdn.simpleicons.org/laravel/FF2D20'],
      ['alt'=>'MySQL','url'=>'https://cdn.simpleicons.org/mysql/4479A1'],
      ['alt'=>'PostgreSQL','url'=>'https://cdn.simpleicons.org/postgresql/4169E1'],
      ['alt'=>'DigitalOcean','url'=>'https://cdn.simpleicons.org/digitalocean/0080FF'],
      ['alt'=>'GitHub','url'=>'https://cdn.simpleicons.org/github/BBBBBB'],
      ['alt'=>'Netlify','url'=>'https://cdn.simpleicons.org/netlify/00C7B7'],
      ['alt'=>'Vercel','url'=>'https://cdn.simpleicons.org/vercel/FFFFFF'],
      ['alt'=>'Google Workspace','url'=>'https://cdn.simpleicons.org/google/4285F4'],
      ['alt'=>'Microsoft 365','url'=>'https://cdn.simpleicons.org/microsoft/666666']
    ]; @endphp
    @foreach($icons as $i)
      <div data-reveal class="flex items-center gap-2 rounded-xl border border-white/10 px-3 py-2 text-sm">
        <img alt="{{ $i['alt'] }}" class="w-5 h-5" src="{{ $i['url'] }}"/>
        <span>{{ $i['alt'] }}</span>
      </div>
    @endforeach
  </div>
</section>

<section id="work" class="mx-auto max-w-6xl px-4 py-20">
  <div class="flex items-end justify-between gap-4">
    <h2 class="text-2xl md:text-3xl font-semibold">Recent work</h2>
    <a href="#contact" class="text-sm text-brand-500 hover:text-brand-600">Work with me →</a>
  </div>
  <div class="mt-8 grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
    <a data-reveal href="#" class="group rounded-2xl border border-white/10 overflow-hidden block hover:bg-white/5 transition">
      <div class="p-5">
        <div class="text-sm text-brand-500">One-pager</div>
        <div class="mt-1 font-semibold">Retail Supply Landing</div>
        <p class="mt-2 text-sm text-neutral-300">SEO + form capture, fast deploy.</p>
      </div>
    </a>
    <a data-reveal href="#" class="group rounded-2xl border border-white/10 overflow-hidden block hover:bg-white/5 transition">
      <div class="p-5">
        <div class="text-sm text-brand-500">Automation</div>
        <div class="mt-1 font-semibold">Leads → Sheets → Email</div>
        <p class="mt-2 text-sm text-neutral-300">Auto replies & tracking, no backend.</p>
      </div>
    </a>
    <a data-reveal href="#" class="group rounded-2xl border border-white/10 overflow-hidden block hover:bg-white/5 transition">
      <div class="p-5">
        <div class="text-sm text-brand-500">Mini App</div>
        <div class="mt-1 font-semibold">Quote Calculator</div>
        <p class="mt-2 text-sm text-neutral-300">Embeddable widget with export.</p>
      </div>
    </a>
  </div>
</section>

<section id="experience" class="mx-auto max-w-6xl px-4 py-20">
  <h2 class="text-2xl md:text-3xl font-semibold">Experience</h2>
  <div class="mt-6 grid md:grid-cols-2 gap-6">
    <div data-reveal class="rounded-2xl border border-white/10 p-6">
      <div class="text-sm text-neutral-400">Oct 2023 – Present</div>
      <h3 class="font-semibold">Entrepreneur — School & Office Supply • Forex Trading</h3>
      <ul class="mt-3 space-y-2 text-sm text-neutral-300 list-disc list-inside">
        <li>Operate retail supply business for institutions & LGUs.</li>
        <li>End-to-end ops: procurement, sales, logistics, client success.</li>
        <li>Forex trading; build helpful automations & tools.</li>
      </ul>
    </div>
    <div data-reveal class="rounded-2xl border border-white/10 p-6">
      <div class="text-sm text-neutral-400">Nov 2020 – Sept 2023</div>
      <h3 class="font-semibold">COO — Better Bound Advertising</h3>
      <ul class="mt-3 space-y-2 text-sm text-neutral-300 list-disc list-inside">
        <li>Led campaign execution & process improvements.</li>
        <li>Resource allocation and inter-team coordination.</li>
        <li>Strengthened client relationships & service quality.</li>
      </ul>
    </div>
    <div data-reveal class="rounded-2xl border border-white/10 p-6">
      <div class="text-sm text-neutral-400">2017 – 2020</div>
      <h3 class="font-semibold">Marketing Specialist — Honda, Toyota, Nissan</h3>
      <ul class="mt-3 space-y-2 text-sm text-neutral-300 list-disc list-inside">
        <li>Advised clients on products, financing, and after-sales.</li>
        <li>Negotiations and closings while building long-term clients.</li>
        <li>Delivered strong customer experience through clear comms.</li>
      </ul>
    </div>
    <div data-reveal class="rounded-2xl border border-white/10 p-6">
      <div class="text-sm text-neutral-400">2015 – 2017</div>
      <h3 class="font-semibold">ESL Instructor</h3>
      <ul class="mt-3 space-y-2 text-sm text-neutral-300 list-disc list-inside">
        <li>Taught Creative Writing & ESL; designed engaging lessons.</li>
      </ul>
    </div>
  </div>
</section>

<section id="contact" class="mx-auto max-w-6xl px-4 py-20">
  <div class="rounded-2xl border border-white/10 p-8">
    <h2 class="text-2xl md:text-3xl font-semibold">Let’s work together</h2>
    <p class="mt-2 text-neutral-300">Email or book a call. For detailed briefs, use the intake form below.</p>
    <div class="mt-6 flex flex-wrap gap-3">
      <a href="mailto:{{ $page->email }}?subject=Project%20inquiry&body=Hi%20Venancio,%20here's%20what%20I%20need:" class="rounded-2xl bg-brand-600 px-5 py-3 text-sm font-medium hover:bg-brand-500">Email me</a>
      <a href="{{ $page->whatsAppUrl }}" class="rounded-2xl border border-white/10 px-5 py-3 text-sm font-medium hover:bg-white/10">WhatsApp</a>
      <noscript><a class="rounded-2xl border border-white/10 px-5 py-3 text-sm font-medium" href="{{ $page->calendarBookingUrl }}">Book a call</a></noscript>
    </div>

    <h3 class="mt-10 font-semibold">Discovery Form — Short Intake (3–5 min)</h3>
    <div class="mt-4">
      <iframe src="{{ $page->formEmbedSrc }}" width="100%" height="1600" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
    </div>
  </div>
</section>
@endsection