<!doctype html>
<html
  lang="en"
  x-data="{
    dark: (localStorage.theme==='dark') ||
          (!localStorage.theme && window.matchMedia('(prefers-color-scheme: dark)').matches)
  }"
  x-init="
    document.documentElement.classList.toggle('dark', dark);
    $watch('dark', v => { document.documentElement.classList.toggle('dark', v); localStorage.theme = v ? 'dark' : 'light'; });
  "
  class="scroll-smooth"
>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $page->siteName }} — Portfolio</title>
  <meta name="description" content="Forex trader & operator. One-pager sites, hosting & deployments, CRM/ERP automations, and training.">
  <link rel="icon" href='data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><text y=".9em" font-size="80">🚀</text></svg>'>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <!-- RELATIVE path so it works under /portfolio/ -->
  <link rel="stylesheet" href="assets/css/main.css">
</head>

<body class="bg-neutral-50 text-neutral-900 selection:bg-brand-600/20 dark:bg-neutral-950 dark:text-neutral-100">
  @include('_partials.header')

  <main>
    @yield('body')
  </main>

  @include('_partials.footer')

  <script>
    // Reveal-on-scroll
    document.addEventListener('DOMContentLoaded', () => {
      const els = document.querySelectorAll('[data-reveal]');
      els.forEach(el => el.classList.add('reveal'));
      const io = new IntersectionObserver((entries)=>{
        entries.forEach(e => { if(e.isIntersecting) e.target.classList.add('inview'); });
      }, {threshold:.1, rootMargin:'0px 0px -10% 0px'});
      els.forEach(el => io.observe(el));
    });
  </script>

  <!-- Google Calendar booking button (popup) -->
  <link href="https://calendar.google.com/calendar/scheduling-button-script.css" rel="stylesheet">
  <script src="https://calendar.google.com/calendar/scheduling-button-script.js" async></script>
  <script>
    window.addEventListener('load', function(){
      const target = document.getElementById('cal-button-mount');
      if(target){
        calendar.schedulingButton.load({
          url: '{{ $page->calendarBookingUrl }}',
          color: '#4F46E5',
          label: 'Book a call',
          target
        });
      }
    });
  </script>

  <!-- Alpine helper: lightweight carousel -->
  <script>
    function carousel({ count, interval = 5000 }) {
      return {
        i: 0, count, t: null, startX: null,
        init(){ this.play() },
        play(){ this.stop(); this.t = setInterval(()=>this.next(), interval) },
        stop(){ if (this.t) clearInterval(this.t) },
        go(n){ this.i = (n + this.count) % this.count; this.play() },
        next(){ this.go(this.i + 1) },
        prev(){ this.go(this.i - 1) },
        onDown(e){ this.startX = (e.touches?.[0] || e).clientX },
        onUp(e){
          const endX = (e.changedTouches?.[0] || e).clientX;
          const dx = endX - (this.startX ?? endX);
          if (dx > 40) this.prev(); else if (dx < -40) this.next();
          this.startX = null;
        }
      }
    }
  </script>
</body>
</html>