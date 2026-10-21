# Roof Top Repair - Drive Cleanup & Reusable Theme

## What was removed (HHTrack / external links)

**HTTrack artifacts removed from Google Drive folder `roof top repair` (ID: 1ad1P_zP1mDkg3gkMVEWmRkkLGBLhC_38):**
- `hts-log.txt` - HTTrack log (contained mirror command with host URL)
- `index.html` (root HTTrack index) - linked to backblue.gif / fade.gif with HTTrack branding
- `backblue.gif` / `fade.gif` - HTTrack template images
- `hts-cache/` folder + contents (`new.zip`, `new.lst`, `new.txt`, `readme.txt`, `doit.log`, `winprofile.ini`) - internal HTTrack cache

**Remaining folder now contains only:**
- `mediumaquamarine-wolf-455501.hostingersite.com/` (original mirrored content, kept for reference)
- `roof-top-repair-theme-v1.0.0.zip` - Reusable WordPress theme (new)
- `roof-top-repair-static-v1.0.0.zip` - Clean static HTML version (new)

## What “other website link” was removed

**Absolute host links removed from both deliverables:**
- No hardcoded `https://mediumaquamarine-wolf-455501.hostingersite.com/*` URLs
- No feed/oembed `https://mediumaquamarine.../feed/`, `/wp-json/` references
- No `<!-- Mirrored from ... by HTTrack ... -->` comments
- No `doubleclick.net`, `httrack` or `hhr` (HTTrack) traces
- All assets use relative / `get_template_directory_uri()` paths

Theme uses local `assets/images/` (AI-regenerated roofing banners + new logo) and local CSS/JS. External only: Font Awesome CDN + Google Fonts (can be made fully offline by downloading them into `assets/`).

## Reusable WordPress Theme structure

`wp-theme/roof-top-repair/`:
- `style.css` - Theme header (no external host URI)
- `functions.php` - Registers menus, logo support, enqueues local assets, removes external head links (feeds/oembed), adds Customizer for phone/email (so same theme works for any client)
- `header.php` / `footer.php` - Use `home_url()`, `get_template_directory_uri()`, `get_theme_mod('roof_phone')` / `roof_email` - fully reusable
- `front-page.php` - Home: hero, trusted team, 3 services, premium, core solution, execution, service areas, features, recent projects, FAQ, testimonials, CTA
- `page-services.php` (Template Name: Services) - Services: same hero, 3 services, Why Us, Who We Are, Location map, testimonials, FAQ, estimate form with `wp_mail()` + nonce
- `index.php` - Fallback generic template
- `assets/css/theme.css` - Exact clone responsive CSS (640px/1024px breakpoints, hamburger mobile)
- `assets/js/theme.js` - Mobile menu, FAQ accordion, tabs, form handlers
- `assets/images/` - 10 local images (logo + hero + 3 roofs + map + workers etc.), no host dependency

## Installation

1. Upload `roof-top-repair-theme-v1.0.0.zip` via WordPress > Appearance > Themes > Add New > Upload
2. Activate “Roof Top Repair - Avenue Roofing”
3. Appearance > Customize > Branding & Contact: set phone/email for any client (no code change)
4. Pages > Add New: set Template “Services” for Services page, set Front Page to static Home (front-page.php auto-used)
5. Menus > Primary Menu: create Home, Services, Service Details items (replaces hardcoded links)
6. Optional: Install Elementor (Free) - theme declares `add_theme_support('elementor')`, sections use compatible markup

## Static version

`roof-top-repair-static-v1.0.0.zip` contains clean `site/index.html` + `site/services.html` with same CSS/JS/images, no external host links - deploy to any static host.

