# Business Website Development Skill & Project Blueprint

A reusable guide and AI-agent brief for building professional business/service websites in two synchronized versions:

1. **Static website:** HTML, CSS and JavaScript.
2. **WordPress website:** a compatible theme with genuinely **Elementor-editable page content**.

Use this for real estate, vehicle rentals and sales, construction, education, consulting and other service businesses. Adapt the design to the actual business rather than reusing the same visual template for every client.

---

## 1. Role and objective

Act as a business website strategist, UI/UX designer, frontend developer, WordPress/Elementor implementer and QA engineer.

Deliver a trustworthy, responsive website that explains the business, presents its services clearly and helps visitors make an enquiry. Produce matching static and WordPress versions with consistent branding, copy, navigation, imagery and functionality.

**Never describe a page as Elementor-editable simply because Elementor is installed.** Its main content must be built with native Elementor containers/widgets and tested in the editor. A hardcoded PHP page, an iframe or one large HTML widget is not an acceptable substitute for editable sections.

## 2. Collect the project brief

Ask only for information that materially affects the work. Track unanswered items rather than inventing facts.

| Input | What to collect |
|---|---|
| Identity | Business name, legal identity if relevant, slogan, location and service area |
| Audience | Customer types, languages, needs, objections and preferred contact method |
| Services | Exact services, scope, priorities, exclusions, real pricing if available |
| Conversion | Primary action: WhatsApp, call, quotation, booking, application or email |
| Contact | Business WhatsApp, phone, email, address and opening hours |
| Brand | Logo, approved colors, typography, reference sites and desired personality |
| Content | Approved copy, genuine photos, team details and permission to use assets |
| Trust | Verifiable testimonials, qualifications, registrations and completed work |
| Platform | Hosting, domain, WordPress access, deployment target and existing site constraints |
| Elementor | Free or Pro, installed version, existing theme and required integrations |
| Functionality | Forms, booking, filters, payments, multilingual content and integrations |
| Legal | Privacy, cookies, regulated-service disclaimers and applicable business requirements |
| Attribution | Optional developer credit, exact text and separate developer contact link |

Keep developer contact links separate from business enquiries. Do not reuse a previous client's phone number, token, domain, branding or private information.

## 3. Core skills required

### 3.1 Business strategy and content

- Audience research, competitor review and service positioning.
- Information architecture, page hierarchy and customer journeys.
- Benefit-led, specific copywriting with clear calls to action.
- Service-specific FAQs, process explanations and objection handling.
- Honest trust signals: distinguish stated commitments from external certifications.
- Conversion design without misleading urgency, fake reviews or fabricated numbers.
- Basic local SEO and regulated-service risk awareness.

### 3.2 UI/UX and visual design

- Brand interpretation and moodboard creation.
- Color theory, accessible contrast and semantic color systems.
- Typography pairing, readable scales, line lengths and font licensing.
- Layout composition, visual hierarchy, spacing systems and grid design.
- Responsive art direction and mobile-first design.
- Component systems: buttons, cards, navigation, forms, accordions and banners.
- Photography selection, image cropping, retouching and optimization.
- Appropriate use of AI images without representing concepts as real stock or completed work.
- Interaction states: hover, focus, active, loading, success, empty and error.
- Motion design that supports meaning, avoids layout jumps and respects reduced motion.
- Accessibility: keyboard use, focus visibility, labels, landmarks and screen-reader semantics.

### 3.3 HTML/CSS/JavaScript

- Semantic HTML5, meaningful headings and actual separate page URLs.
- Modern CSS: custom properties, Flexbox, Grid, fluid sizing and media queries.
- Design tokens shared across pages and reusable components.
- JavaScript modules or clearly scoped components with safe initialization and cleanup.
- DOM events, form validation, URL parameters and reliable state management.
- Progressive enhancement and useful failure states.
- Accessible menus, accordions, sliders, dialogs and optional sound controls.
- Safe DOM updates, output encoding and third-party script discipline.
- Web performance: responsive images, compression, lazy loading, font loading and caching.
- Browser debugging, automated tests, Git and static deployment.

### 3.4 WordPress development

- WordPress installation, staging, backups and environment configuration.
- PHP, WordPress hooks, template hierarchy and theme lifecycle.
- Theme support, menus, image sizes and proper asset enqueueing.
- Child themes when extending third-party themes; never modify WordPress core.
- Output escaping, input sanitization, validation, nonces and capability checks.
- Pages/posts, taxonomies, custom post types and custom fields when needed.
- Plugin selection, dependency documentation and conflict troubleshooting.
- Settings management, safe database migrations and export/import workflows.
- SEO, redirects, permalinks, caching, image optimization and updates.
- Roles, least-privilege access, mail configuration and server-side form security.

### 3.5 Elementor-specific skills

- Elementor installation and compatible theme selection.
- Flexbox containers, nesting, alignment, spacing and responsive layout controls.
- Native Heading, Text Editor, Image, Button, Icon, Accordion and related widgets.
- Global colors, global fonts, Site Settings and reusable style systems.
- Reusable templates, template kits and properly exported/imported templates.
- Clear Navigator labels so nontechnical editors can find sections.
- Theme Builder headers, footers and archives **when Elementor Pro is available**.
- Dynamic tags, Loop Grid and custom-field integrations only when supported/licensed.
- Elementor Pro Forms, actions after submit and webhooks when Pro is available.
- Free-compatible form plugins or custom integrations when Pro is not available.
- Custom CSS/JS placement without scattering duplicate scripts across widgets.
- Editor/frontend parity, generated CSS regeneration and cache troubleshooting.
- Responsive editing with tablet/mobile overrides that do not damage desktop layout.
- Performance discipline: shallow container nesting, restrained addons and no duplicate libraries.
- Editor handoff: demonstrate how to change headings, images, service cards and contact settings.

**Licensing rule:** Do not assume Pro widgets are available in Elementor Free. Do not distribute paid plugin binaries or license keys. Identify every paid dependency before implementation.

## 4. Design skills by business sector

| Business | Recommended visual direction | Useful content/sections | Important safeguards |
|---|---|---|---|
| Property & real estate | Clear location-led imagery, structured cards, readable specifications | Buy/rent services, locations, process, genuine listings, enquiry form | Do not imply ownership, availability or verified title without evidence |
| Car rental | Practical premium feel, vehicle categories, strong mobile contact actions | Rental process, fleet if genuine, terms, driver options, availability enquiry | Confirm actual fleet, deposits, mileage, eligibility and insurance terms |
| Vehicle sales/purchase | Clean specification hierarchy and comparison-friendly layouts | Genuine listings, condition details, inspection process, selling enquiry | Never fabricate stock, inspection results or financing promises |
| Construction/development | Strong project imagery, technical clarity and disciplined typography | Capabilities, process, scope, verified projects, quotation request | Label conceptual images; do not invent completed projects or certifications |
| Financial/forex education | Calm editorial design, learning structure and clear risk notices | Curriculum, learning levels, instructor facts, FAQs, education enquiry | No guaranteed profits, fake performance results or implied regulatory approval |
| Consulting/professional services | Clear expertise, measured visual style and focused copy | Problems solved, deliverables, approach, verified credentials, consultation | Do not invent clients, outcomes or qualifications |
| Healthcare/wellness | Accessible, calm, readable and reassuring | Services, verified practitioner details, appointment process | Protect sensitive data; no unsupported health claims |
| Hospitality/local services | Location-led storytelling and simple booking/enquiry journey | Offerings, amenities, hours, location, genuine reviews | Make prices, availability and booking conditions clear |

A premium design does not always mean black and gold. Choose the visual language to match audience expectations, brand personality and service category.

## 5. Recommended page architecture

Choose the pages the business actually needs. A multi-service company may use:

- Home
- About / Our story
- Services overview
- A separate page for each service
- Approach / How it works
- Projects, listings or case studies **only when real content exists**
- Vision, mission and values when they add meaningful information
- FAQ
- Contact / Enquiry
- Privacy information
- Terms and service disclaimers

### Homepage structure

1. Clear value proposition and primary CTA.
2. Relevant hero image or accessible service slider.
3. Service overview with individual page links.
4. Business introduction and genuine differentiators.
5. Process / how enquiries are handled.
6. Verified work or honest capability explanations.
7. Trust, FAQs and risk/disclaimer content where needed.
8. Final CTA and contact route.
9. Footer with navigation, contact information, legal links and optional developer credit.

### Service-page structure

Explain who it is for, what is included, benefits, process, requirements, limitations, genuine examples and FAQs. Link to the enquiry page with the correct service already selected.

## 6. Dual-version implementation plan

### A. Static HTML/CSS/JavaScript deliverable

- Build actual standalone pages, not only an in-page demo.
- Centralize brand tokens, shared components and public contact settings.
- Keep all essential images, fonts and scripts local where practical.
- Use a build step to generate repeated header/footer markup from shared source.
- Use service query parameters for enquiry preselection.
- Document whether forms use WhatsApp, an API, email or are demonstration-only.
- Include setup instructions and a static-host deployment package.

Suggested structure:

```text
project/
  source/
    pages/
    assets/
      css/
      js/
      images/
      fonts/
    components/
    site-config.json
  tools/
  static-site/
  wordpress/
  docs/
  tests/
  README.md
```

Adapt the structure to the actual toolchain; do not require a framework for a simple brochure website.

### B. WordPress + Elementor deliverable

Choose and document one approach:

**Approach 1 — lightweight compatible theme + Elementor templates**

- Use Hello Elementor or another suitable maintained theme.
- Build pages with native Elementor containers and widgets.
- Supply reusable page/section templates and an import guide.
- Use Elementor Pro Theme Builder for global header/footer only when licensed.
- With Elementor Free, use theme-level header/footer editing or a documented compatible plugin. State exactly which elements are editable where.
- Do not redistribute a third-party theme as if it were custom-authored.

**Approach 2 — custom compatible theme + Elementor page content**

- Build a proper uploadable custom theme.
- Provide necessary templates and call `the_content()` so Elementor can render page content.
- Register menus and enqueue theme assets using WordPress conventions.
- Do not replace Elementor page content with hardcoded service markup.
- Build matching page templates using native Elementor widgets.
- Include separate Elementor template exports; the theme ZIP alone usually does not contain editable page content.
- Document theme-level versus Elementor-level controls.

### Editable content matrix

| Element | Expected editing location |
|---|---|
| Page headings, text, images and buttons | Native Elementor widgets |
| Service sections and cards | Elementor containers/widgets or documented dynamic content |
| Global typography and colors | Elementor Site Settings plus aligned theme tokens |
| Header/footer | Pro Theme Builder, theme controls or documented Free-compatible solution |
| Navigation items | WordPress menus or the selected header system |
| WhatsApp/business settings | Central settings or documented configuration field |
| Slider content | Supported native/editable component or documented structured settings |
| Forms | Named form plugin/settings with integration instructions |
| Developer attribution | Documented footer control/template |

If a custom widget is necessary, make meaningful fields editable and document its dependency. Do not claim arbitrary HTML blobs are fully editable.

### Synchronization rules

- Maintain one content inventory and brand token specification.
- Reflect approved changes in both versions.
- Maintain feature parity, not necessarily identical DOM markup.
- Keep the same service names, legal claims and contact destinations.
- Record any unavoidable platform differences.
- Re-export Elementor templates after changing page content.
- Validate exports by importing them into a clean staging installation.

## 7. Forms and WhatsApp integration

### Expected visitor flow

1. Visitor enters name, email, optional phone, service and message.
2. Required fields and consent are validated.
3. Website creates a properly encoded WhatsApp link.
4. WhatsApp opens with all details filled in.
5. **Visitor presses Send inside WhatsApp.**

A `wa.me` link cannot send automatically or confirm delivery. Fully automatic messaging requires a suitable server-side WhatsApp Business Platform integration, current platform compliance and any required recipient permissions/templates. Never put API credentials in frontend JavaScript.

Use international digits only in links:

```js
const number = config.businessWhatsApp.replace(/\D/g, '');
const message = [
  'New website enquiry',
  '',
  `Name: ${name}`,
  `Email: ${email}`,
  `Phone: ${phone || 'Not provided'}`,
  `Service: ${service}`,
  '',
  'Message:',
  messageBody
].join('\n');
const url = `https://wa.me/${number}?text=${encodeURIComponent(message)}`;
```

Implementation requirements:

- Validate fields, consent and the configured destination number.
- Open WhatsApp only after a direct user submit action.
- Preserve form values; do not show a false “sent successfully” message.
- Provide a visible fallback link if a popup is blocked.
- Explain that details are included in the external WhatsApp URL and its privacy rules apply.
- Avoid sensitive information and excessive message lengths; test supported mobile/desktop flows.
- Keep the business destination separate from any developer-credit destination.
- For Elementor Pro Forms, use a documented submit-success integration or custom action; prevent unwanted duplicate email/storage actions if WhatsApp-only behavior is intended.
- For Free-compatible forms, test the chosen plugin's validation and submit lifecycle rather than relying on fragile DOM selectors.
- With server-side forms, validate again on the server; browser validation alone is not security.

## 8. Hero sliders and motion

Only use a slider when it helps visitors understand services.

- Use relevant, licensed or approved generated banners.
- Keep one clear page-level heading and meaningful image alternatives.
- Provide previous/next, service indicators and pause/play controls.
- Support keyboard access and mobile swipe without trapping vertical scrolling.
- Respect `prefers-reduced-motion`; stop autoplay by default for reduced-motion users.
- Pause when the tab is hidden and handle hover/focus accessibly.
- Use the client's approved interval and transition direction; do not silently change them.
- A three-second interval may be too short for long copy: keep copy brief and offer pause controls.
- Prevent layout shift and button overlap on small screens.
- Clean up timers/listeners when components are removed or preview pages change.

## 9. Responsive and accessibility checklist

Target WCAG 2.2 AA practices where applicable; do not claim certification without an audit.

- Test at approximately 320, 390, 768, 1024 and 1440 pixels, plus real devices when possible.
- No horizontal scrolling, clipped headings or overlapping floating controls.
- Keyboard-accessible navigation with Escape behavior and sensible focus handling.
- Clear labels, appropriate autocomplete, useful validation messages and status announcements.
- Descriptive link names and comfortable touch targets.
- Visible focus, readable contrast and usable 200% zoom.
- Correct heading order, landmarks and skip navigation.
- Decorative images use empty alt text; meaningful images have useful alternatives.
- No information conveyed only by color or motion.
- No autoplay audio; optional effects must have an accessible mute control.

## 10. Performance, SEO and security

### Performance

- Optimize images, provide dimensions and use responsive sources where useful.
- Avoid lazy-loading the first essential hero image; lazy-load below-the-fold media.
- Use compressed formats with practical fallbacks and licensed local fonts.
- Avoid excessive Elementor addons, deep nesting and duplicate CSS/JS libraries.
- Measure LCP, CLS and INP; target good Core Web Vitals, not fabricated scores.
- Report real measurements with their environment and limitations.

### SEO

- Unique page titles, descriptions, one clear main heading and meaningful internal links.
- Search-friendly URLs, sitemap, robots configuration and canonical URLs.
- Set staging to noindex; remove accidental noindex before production launch.
- Configure social sharing metadata and accurate business schema when appropriate.
- Never publish fake ratings, addresses, business registrations or service areas.

### Security and privacy

- HTTPS, maintained dependencies, least-privilege accounts and tested backups.
- Keep credentials out of repositories, browser bundles, ZIPs, screenshots and documentation.
- Use secure credential-entry mechanisms; do not request secrets in public project files.
- In WordPress, escape output and validate/sanitize input; enforce capabilities and nonces where relevant.
- Protect real server submissions with appropriate anti-abuse controls.
- Document third-party services, data flows, retention settings and required consent.
- AI-generated assets must not create misleading factual claims.

## 11. QA and acceptance criteria

### Static version

- Every intended URL loads; all navigation and service enquiry links work.
- Forms validate and produce the correct destination/message.
- Test special characters, line breaks, optional fields and missing configuration.
- Verify sliders, keyboard controls, reduced motion, sound toggles and mobile interactions.
- No browser errors, broken assets or horizontal overflow.

### WordPress + Elementor version

- Theme activates without fatal errors; PHP syntax checks pass.
- Test in an actual WordPress staging installation, not only static preview.
- Install the documented Free/Pro and plugin versions.
- Import the supplied templates/kit on a clean staging site.
- Open each page in Elementor and change a heading, image, button and layout setting.
- Save and confirm changes render on the frontend at desktop/mobile widths.
- Confirm header/footer editing works through the documented system.
- Confirm forms use the correct integration and do not duplicate submissions.
- Confirm CSS regeneration, caching, menus, permalinks and required settings work.
- Never claim Elementor QA passed if only theme PHP or static markup was tested.

### Publication

- Publish only with explicit user authorization to the correct site/repository.
- Preserve unrelated repository files and existing hosting configuration.
- Wait for the deployment to finish; verify public pages and updated assets.
- Check the actual changed behavior on the live site.
- State clearly whether work is local, uploaded, deployed or live-verified.
- Never say “live” based only on a local build.

## 12. Required handoff deliverables

1. Static HTML/CSS/JS website package.
2. Uploadable custom/child theme ZIP **if that implementation was selected**.
3. Elementor page/section exports or a compatible kit, with dependencies identified.
4. Installation/import guide covering theme, plugins, pages, menus and global settings.
5. Editing guide showing which areas are editable in Elementor versus theme controls.
6. Asset folder, image credits and applicable font/image/code licenses.
7. Contact and integration configuration guide with no secrets included.
8. QA report distinguishing completed checks from untested items.
9. Deployment instructions and verified live URL when deployment is requested/completed.
10. Known limitations, paid dependencies and maintenance responsibilities.

Use descriptive filenames and version numbers. Do not label a classic hardcoded theme as an Elementor template kit.

## 13. Reusable project prompt

Copy this section into a new project and complete the placeholders:

> Build a professional responsive website for **[BUSINESS NAME]**, serving **[LOCATION / AUDIENCE]** and offering **[SERVICES]**.
>
> Deliver two matching versions: (1) separate HTML/CSS/JavaScript pages and (2) a WordPress implementation with genuinely Elementor-editable page content. Use **[ELEMENTOR FREE / PRO / CONFIRM FIRST]**. Explain the theme and plugin dependencies before using paid features.
>
> Brand direction: **[COLORS, LOGO, TYPOGRAPHY, REFERENCES]**. Adapt the visual design to the business category. Use supplied or properly licensed assets; label illustrative concepts appropriately. Do not invent reviews, clients, certifications, stock or completed projects.
>
> Required pages: **[PAGE LIST]**. Primary CTA: **[WHATSAPP / CALL / BOOK / QUOTE]**. Business WhatsApp: **[INTERNATIONAL NUMBER]**. Optional developer footer credit: **[TEXT + SEPARATE DESTINATION]**.
>
> Forms must **[DESIRED WORKFLOW]**. If using WhatsApp links, include all entered details, validate inputs, preserve data, provide a fallback link and clearly say the visitor must press Send in WhatsApp.
>
> Required interactions: **[SLIDER, INTERVAL, DIRECTION, REVEALS, ETC.]**. Provide accessible controls and reduced-motion handling. Keep the mobile experience readable and avoid overlapping floating buttons.
>
> Build a clear content hierarchy, service-specific pages, appropriate trust/disclaimer content and a reusable design system. Maintain parity between the static and WordPress versions.
>
> Test responsive layouts, links, forms, accessibility basics and performance. For WordPress, import and test the Elementor templates in a real staging installation and demonstrate editing native widgets. Do not call hardcoded HTML/PHP Elementor-editable.
>
> Provide source files, packages, Elementor exports, setup/editing instructions, licenses and an honest QA report. Publish only to **[AUTHORIZED DESTINATION]** after authorization and verify the deployed changes. Never include credentials in deliverables.

## 14. Reference website / screenshot replica workflow

When the user uploads a reference theme image, screenshot, design file or website URL and asks for a clone, treat **high-fidelity replication, not a loose redesign**, as an acceptance requirement. Reproduce every visible major and minor detail supported by the supplied reference; do not silently omit sections or replace its layout with a generic template.

### Reference audit and implementation

- Inventory every supplied screenshot/page and its viewport size. If a URL is supplied, inspect accessible pages and interaction states as well as the homepage.
- Record header structure, logo sizing, navigation, announcement bars, hero, section order, column widths, cards, images, icons, forms, CTAs, footer and floating controls.
- Match typography, font weights, line heights, letter spacing, colors, backgrounds, gradients, overlays, borders, shadows, corner radii, image crops, alignment, whitespace and content density.
- Include small details: dividers, labels, badges, breadcrumbs, button icons, hover/focus states, sticky behavior, dropdowns and mobile menu behavior where observable.
- Preserve the reference's hierarchy, proportions and composition. Apply client-specific text/branding only where requested; do not introduce an unrelated visual style.
- Keep the same visual fidelity in both static and WordPress/Elementor versions. Editable widgets must not become an excuse to omit design details.
- Create a section-by-section and component-by-component checklist. Mark every element as matched, intentionally changed with approval, or blocked by missing information.

### Do not invent unavailable details

A single screenshot cannot reveal off-screen content, hidden interactions, exact fonts, other pages, checkout behavior or responsive layouts. Ask for missing screenshots, assets, mobile references or access where needed. When inference is unavoidable, label the assumption and obtain approval for consequential differences. Never promise a complete site-wide exact replica from a partial image alone.

Use assets and theme/plugin code the user owns or is licensed to reuse. Do not copy third-party branding in a deceptive way, remove license restrictions or claim ownership of someone else's proprietary theme. If rights or assets are missing, explain the limitation and offer an original implementation with appropriately licensed replacements; record any resulting visual differences.

### Replica QA

1. Capture the implementation at the same viewport as each reference.
2. Compare side by side and, where possible, with an overlay or image diff.
3. Check alignment, spacing, font metrics, image crops, colors and small decorative elements—not only section presence.
4. Test observed interactions and available responsive reference widths.
5. Fix discrepancies and repeat. Report remaining deviations rather than claiming “pixel-perfect” without evidence.

**Acceptance target:** as close to a same-to-same replica as the supplied references, available assets, permissions and platform allow, with no unexplained missing elements. Explicitly list anything that could not be verified or reproduced.

## 15. WooCommerce for product-selling websites

If the business sells physical or digital products, evaluate **WordPress + WooCommerce** rather than treating the site as an enquiry-only brochure. Use a maintained WooCommerce-compatible theme or a custom theme with proper WooCommerce support. Preserve Elementor editing for marketing pages and supported store templates.

### Required skills and planning

- WooCommerce installation, setup, theme compatibility and template/hooks knowledge.
- Product types: simple, variable, grouped, external and downloadable/virtual as applicable.
- Product attributes, variations, SKUs, categories, stock, pricing and sale rules.
- Product photography, galleries, sizing/specification information and accessible selectors.
- Shop/category pages, product detail, search/filter/sort, cart, checkout and customer account journeys.
- Payments using supported gateways for the merchant's country/currency; sandbox testing before live transactions.
- Shipping zones/methods, delivery terms, tax configuration, coupons, refunds and transactional emails.
- Privacy, terms, returns/refund policies, secure checkout and appropriate account permissions.
- Compatibility with current WooCommerce storage and checkout systems where relevant; test extensions and any classic/block checkout dependency explicitly.
- Elementor Pro WooCommerce widgets/Theme Builder when licensed; otherwise use supported WooCommerce blocks, shortcodes or theme templates and state their editing limitations.

### Product-store acceptance tests

Test product variations, stock availability, add-to-cart, cart edits, coupons, shipping/tax calculations, guest/account checkout, payment success/failure/cancellation, order status, emails, refunds and downloadable-file permissions when applicable. Use test payments, not real charges, unless separately authorized.

A static HTML version may reproduce the storefront design and demonstrate interactions, but it **must not be described as a working secure checkout or inventory system without a real backend/service**. Explain that the WordPress/WooCommerce version handles production commerce.

## 16. Selling courses: WooCommerce + an appropriate LMS

If the user sells courses, first distinguish a simple paid download from a structured learning platform:

- **Digital file/course download:** WooCommerce downloadable/virtual products may be sufficient.
- **Structured learning:** evaluate a maintained LMS such as LearnDash, Tutor LMS or LifterLMS, including its current WooCommerce integration and licensing requirements. Confirm compatibility instead of assuming it.
- **Subscription/membership learning:** identify the necessary membership/subscription extensions, recurring-payment support and cancellation/access rules before implementation.

### Course-platform skills

- Course catalog, categories, curriculum, lessons, previews and instructor profiles.
- Video hosting/embedding strategy, content licensing and protected learning access.
- Enrollment lifecycle tied to verified payment/order status, not merely a return URL.
- Student dashboard, lesson progress, quizzes, assignments and prerequisites where required.
- Certificates only when genuinely offered; no false accreditation claims.
- Course-specific pricing, bundles, coupons, refunds and access duration.
- Transactional emails, account creation, password reset and student permissions.
- Elementor-compatible course layouts using supported widgets/integrations; identify areas controlled by the LMS rather than Elementor.
- Accessible lesson content, mobile learning usability and privacy/security for learner data.

### Course acceptance tests

Test a complete sandbox purchase, enrollment, student login, protected lesson access, progress, assessment rules if enabled, completion/certificates if offered, expiry/cancellation/refund access changes, and prevention of unpaid access. Document gateway/LMS behavior and any manual administration steps.

Do not assume WooCommerce alone provides quizzes, lesson tracking, certificates or a complete LMS. Do not promise subscription functionality or premium LMS features without the required supported extensions/licenses.

## 17. Additional reusable prompt clauses

Append these to the project prompt when relevant:

> **Reference matching:** If I upload a reference website screenshot/theme image or supply a reference URL and request a replica, reproduce the observed design as closely as possible, including every visible section and minor detail. Do not turn it into a generic redesign. Audit layout, typography, spacing, colors, image crops, borders, icons, navigation, footer, responsive views and observable interactions. Compare screenshots at matching viewports, fix discrepancies and report any remaining differences. Ask for missing views/assets instead of pretending hidden details are known. Respect asset/code licenses and do not claim unverified pixel-perfect completeness.
>
> **Product selling:** If this business sells products, deliver a WooCommerce-compatible WordPress store with the required product types, shop, product pages, cart, checkout, account, payment, shipping/tax, policy and order workflows. Confirm dependencies and test end to end in sandbox mode. Clearly distinguish the static storefront demonstration from production commerce.
>
> **Course selling:** If this business sells courses, determine whether it needs downloadable products or a full LMS. Use WooCommerce with an appropriate supported LMS/integration when needed; implement and test payments, enrollment, learner access and required learning features. Document paid dependencies, editing boundaries and access/refund rules.

## 18. Existing-project compatibility note

If adapting an existing classic WordPress theme, audit it before promising Elementor support. Rebuilding page content as Elementor containers/widgets, preserving URLs/SEO, migrating global styles, validating forms and testing imports are separate implementation tasks. This guide describes the requirements; writing the guide does not itself convert an existing theme into an Elementor-editable website.
