(() => {
  const root = document.documentElement;
  root.classList.add('js');

  const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  const progressBar = document.getElementById('scroll-progress');
  let scrollFrame = 0;

  const updateProgress = () => {
    if (scrollFrame) return;
    scrollFrame = window.requestAnimationFrame(() => {
      const scrollable = document.documentElement.scrollHeight - window.innerHeight;
      const progress = scrollable > 0 ? window.scrollY / scrollable : 0;
      progressBar?.style.setProperty('transform', `scaleX(${Math.min(1, Math.max(0, progress))})`);
      if (!reduceMotion) {
        document.querySelector('.hero-portrait')?.style.setProperty('--portrait-shift', `${-Math.min(window.scrollY * 0.035, 22)}px`);
      }
      scrollFrame = 0;
    });
  };
  window.addEventListener('scroll', updateProgress, { passive: true });
  window.addEventListener('resize', updateProgress, { passive: true });
  updateProgress();

  const revealItems = [...document.querySelectorAll('[data-reveal]')];
  if (reduceMotion || !('IntersectionObserver' in window)) {
    revealItems.forEach((item) => item.classList.add('is-visible'));
  } else {
    const revealObserver = new IntersectionObserver((entries, observer) => {
      entries.forEach((entry) => {
        if (!entry.isIntersecting) return;
        entry.target.classList.add('is-visible');
        observer.unobserve(entry.target);
      });
    }, { threshold: 0.12, rootMargin: '0px 0px -36px 0px' });
    revealItems.forEach((item) => revealObserver.observe(item));
  }

  const menuButton = document.querySelector('.menu-toggle');
  const navigation = document.getElementById('site-navigation');
  const setMenu = (open) => {
    menuButton?.setAttribute('aria-expanded', String(open));
    menuButton?.setAttribute('aria-label', open ? 'Close navigation' : 'Open navigation');
    navigation?.classList.toggle('is-open', open);
    document.body.classList.toggle('menu-open', open);
  };
  menuButton?.addEventListener('click', () => {
    setMenu(menuButton.getAttribute('aria-expanded') !== 'true');
  });
  navigation?.querySelectorAll('a').forEach((link) => link.addEventListener('click', () => setMenu(false)));
  document.addEventListener('keydown', (event) => {
    if (event.key === 'Escape') setMenu(false);
  });
  window.matchMedia('(min-width: 761px)').addEventListener?.('change', () => setMenu(false));

  const themeButton = document.querySelector('.theme-toggle');
  const applyThemeState = () => {
    const isDark = root.dataset.theme === 'dark';
    themeButton?.setAttribute('aria-pressed', String(isDark));
    themeButton?.setAttribute('aria-label', isDark ? 'Switch to light theme' : 'Switch to dark theme');
  };
  applyThemeState();
  themeButton?.addEventListener('click', () => {
    const useDark = root.dataset.theme !== 'dark';
    if (useDark) root.dataset.theme = 'dark';
    else delete root.dataset.theme;
    try { localStorage.setItem('theme', useDark ? 'dark' : 'light'); } catch (_) {}
    applyThemeState();
  });

  const contactForm = document.getElementById('contact-form');
  const formNote = document.getElementById('form-note');
  contactForm?.addEventListener('submit', (event) => {
    event.preventDefault();
    if (!contactForm.reportValidity()) return;
    const details = new FormData(contactForm);
    const message = [
      'Hi Shah Faisal, I saw your portfolio and would like to discuss a project.',
      '',
      `Name: ${details.get('name')}`,
      `Email: ${details.get('email')}`,
      `Interested in: ${details.get('service')}`,
      `Project details: ${details.get('message')}`,
    ].join('\n');
    const url = `https://wa.me/923159531434?text=${encodeURIComponent(message)}`;
    window.open(url, '_blank', 'noopener,noreferrer');
    if (formNote) {
      formNote.textContent = 'Your WhatsApp draft is ready. Review the details, then tap Send in WhatsApp.';
      formNote.classList.remove('is-error');
    }
  });

  const year = document.getElementById('current-year');
  if (year) year.textContent = String(new Date().getFullYear());
})();
