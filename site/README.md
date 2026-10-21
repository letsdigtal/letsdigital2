# Roof Top Repair - Static HTML (Reusable)

## Clean, No External Host Links
- No `httrack` / `hhr` / `backblue.gif` / `fade.gif` artifacts
- No `https://mediumaquamarine-wolf-455501.hostingersite.com` hardcodes
- All assets relative: `assets/images/*`, `assets/css/style.css`, `assets/js/main.js`
- Only external dependencies: Google Fonts + Font Awesome CDN (replaceable with local copy for offline)

## Structure
- `index.html` - Home (Hero, Trusted Team, 3 Services, Premium, Core Solution, Execution, Service Areas, Features, Recent Projects, FAQ, Testimonials, CTA, Footer)
- `services.html` - Services (Hero, 3 Services, Why Us, Who We Are, Location, Testimonials, FAQ, Estimate Form)
- `assets/css/style.css` - Fully responsive (640px mobile hamburger, 1024px tablet, desktop) - same as WP theme
- `assets/js/main.js` - Mobile menu, FAQ accordion, tabs, form handlers
- `assets/images/` - 10 local images (logo.png + 8 roofing AI banners + NYC map)

## How to Reuse for New Client
1. Edit `assets/images/logo.png` (replace)
2. Edit brand text in header/footer (search AVENUE)
3. Edit contact in HTML: `info@avenueroofing.com` / `+1 (342) 231-8237` (topbar + footer + hero)
4. Optional: replace CDN links with local fonts for offline

## Preview (local)
```
npx serve site -l 5173
# open http://localhost:5173/
```

Deployed to WordPress as `wp-theme/roof-top-repair/` (same design, PHP with Customizer).
