<!doctype html>
<html
  lang="en"
  x-data="{
    dark: (localStorage.theme==='dark')
      || (!localStorage.theme && window.matchMedia('(prefers-color-scheme: dark)').matches)
  }"
  x-init="
    // apply initial theme
    document.documentElement.classList.toggle('dark', dark);
    // react to button clicks and persist
    $watch('dark', v => {
      document.documentElement.classList.toggle('dark', v);
      localStorage.theme = v ? 'dark' : 'light';
    });
  "
  class="scroll-smooth"
>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $page->siteName }} — Portfolio</title>
  <meta name="description" content="One-pager websites, hosting & deployments, design/video editing, CRM/ERP setup, and automations.">
  <link rel="icon" href='data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><text y=".9em" font-size="80">🚀</text></svg>'>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

  <!-- IMPORTANT: relative path so it works under /portfolio/ -->
  <link rel="stylesheet" href="assets/css/main.css">
</head>

<body class="bg-neutral-50 text-neutral-900 dark:bg-neutral-950 dark:text-neutral-100">
  @include('_partials.header')

  <main>
    @yield('body')
  </main>

  @include('_partials.footer')

  <script>
    // Minimal reveal-on-scroll helper
    document.addEventListener('DOMContentLoaded', () => {
      const els = document.querySelectorAll('[data-reveal]');
      els.forEach(el => el.classList.add('reveal'));
      const io = new IntersectionObserver((entries) => {
        entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('inview'); });
      }, { threshold: .1, rootMargin: '0px 0px -10% 0px' });
      els.forEach(el => io.observe(el));
    });
  </script>

  <!-- Google Calendar booking button (popup) -->
  <link href="https://calendar.google.com/calendar/scheduling-button-script.css" rel="stylesheet">
  <script src="https://calendar.google.com/calendar/scheduling-button-script.js" async></script>
  <script>
    window.addEventListener('load', function () {
      const target = document.getElementById('cal-button-mount');
      if (target) {
        calendar.schedulingButton.load({
          url: '{{ $page->calendarBookingUrl }}',
          color: '#4F46E5',
          label: 'Book a call',
          target
        });
      }
    });
  </script>
</body>
</html>