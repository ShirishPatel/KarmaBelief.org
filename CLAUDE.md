# CLAUDE.md — Karma Belief Charitable Trust Website

## Project Overview

**NGO Name:** Karma Belief Charitable Trust  
**Tagline:** Serving Humanity with Compassion Since 2019  
**Type:** Volunteer-driven non-profit NGO, Ahmedabad, Gujarat, India  
**Founded:** 9th July 2019  
**Registration #:** E/22616/AHMEDABAD  
**NGO Darpan #:** GJ/2019/0240259  
**PAN:** AAETK0087F  
**Website:** www.karmabelief.org  
**Email:** info@karmabelief.org  
**Phone:** +91 9886596789
**Address:** B/806 Ashima Tower, Near Sandesh Press, Bodakdev, Ahmedabad – 380054, Gujarat, India

---

## Design Philosophy & Aesthetic Direction

### Aesthetic: Warm Earthy Minimalism meets Indian Cultural Vibrancy

The website should evoke **trust, warmth, and grassroots authenticity**. Avoid the corporate NGO look. Think:
- Handcrafted warmth of Indian textiles
- The ochre-saffron of Gujarat's landscape
- Clean editorial structure with generous whitespace
- Organic shapes, not rigid grids

### Color Palette (CSS Variables)
```css
:root {
  --color-primary: #C8570A;       /* Deep Saffron — energy, compassion */
  --color-primary-light: #E8813A; /* Warm Marigold */
  --color-accent: #2B6049;        /* Forest Green — environment, growth */
  --color-accent-light: #4A8F68;  /* Sage Green */
  --color-earth: #8B4513;         /* Earthy Brown */
  --color-gold: #D4A017;          /* Ceremonial Gold */
  --color-bg: #FAF6F0;            /* Warm Ivory — never pure white */
  --color-bg-card: #FFFFFF;
  --color-text-dark: #1A1208;     /* Near-black with warm tint */
  --color-text-body: #3D2B1A;     /* Warm dark brown */
  --color-text-muted: #7A6352;    /* Muted warm grey */
  --color-border: #E8DDD0;
  --color-hero-overlay: rgba(26, 18, 8, 0.55);
}
```

### Typography
```css
/* Import from Google Fonts */
@import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;0,700;1,400&family=DM+Sans:wght@300;400;500;600&family=Tiro+Devanagari+Hindi&display=swap');

/* Display/Headings: Cormorant Garamond — elegant, literary, timeless */
--font-display: 'Cormorant Garamond', Georgia, serif;

/* Body/UI: DM Sans — clean, humanist, approachable */
--font-body: 'DM Sans', sans-serif;

/* Accent (Hindi quote callouts): Tiro Devanagari Hindi */
--font-hindi: 'Tiro Devanagari Hindi', serif;
```

### Motion Principles
- Page load: staggered fade-up reveals with `animation-delay` increments (0.1s, 0.2s, 0.3s...)
- Hero: slow Ken Burns zoom on background image
- Cards: gentle lift on hover (`transform: translateY(-4px)`, subtle box-shadow)
- Nav links: underline slide-in on hover
- CTA buttons: background fill sweep from left
- Scroll-triggered: use `IntersectionObserver` to add `.visible` class on scroll
- NO janky transitions, NO heavy JS libraries — pure CSS where possible

### Layout Principles
- Max content width: `1200px`, centered
- Generous section padding: `80px 0` desktop, `48px 0` mobile
- Grid-breaking hero sections with diagonal cuts (`clip-path: polygon(...)`)
- Section alternation: light bg → tinted bg → white
- Decorative motif: subtle geometric rangoli-inspired SVG pattern as bg texture on select sections
- Mobile-first responsive, breakpoints at 768px and 1024px

---

## Shared Components (Used Across All Pages)

### HTML Head Template
```html
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" type="image/png" href="assets/img/favicon.png">
<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;0,700;1,400&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
<!-- Shared CSS -->
<link rel="stylesheet" href="assets/css/main.css">
```

### Navigation (`<header>`)
- Logo: SVG or PNG mark + "Karma Belief" wordmark in Cormorant Garamond
- Links: Home | About Us | Causes | Gallery | Donate | FAQ | Contact
- Sticky on scroll: background transitions from transparent → `--color-bg` with subtle shadow
- Hamburger menu on mobile with smooth slide-down drawer
- "Donate" nav item styled as filled button in `--color-primary`
- Active page link underlined

### Footer
```
Logo + Tagline
Quick Links | Contact Details | Social Links | Bank/Donation Info
Registration details: Reg #, NGO Darpan #, PAN, 80G/12AB certified badge
Copyright © 2019-2026 Karma Belief Charitable Trust | All Rights Reserved
```

Socials:
- Facebook: https://www.facebook.com/karmabeliefcharitabletrust/
- JustDial listing: https://www.justdial.com/Ahmedabad/Karma-Belief-Charitable-Trust-Bodakdev/...

### Shared CSS Classes
```css
.section-title        /* Cormorant Garamond, 2.8rem, --color-primary */
.section-subtitle     /* DM Sans, 1.05rem, --color-text-muted, italic */
.btn-primary          /* Filled saffron CTA button */
.btn-secondary        /* Outlined button */
.btn-donate           /* Gold filled, slightly larger */
.card                 /* White card, border-radius 12px, shadow */
.reveal               /* opacity:0 → opacity:1 on scroll */
.highlight-strip      /* Thin saffron left-border blockquote */
.tag                  /* Small pill badge for categories */
```

---

## Pages

---

### 1. `index.html` — Home Page

**SEO Title:** Karma Belief Charitable Trust | NGO in Ahmedabad | Volunteer-Driven Nonprofit  
**Meta Description:** Karma Belief Charitable Trust is an Ahmedabad-based NGO run by volunteers since 2019. We work for education, women empowerment, environment, scholarships, and community welfare.

#### Sections

**[1] Hero**
- Full-viewport height
- Background: high-quality image of volunteers/community (warm, candid)
- Dark overlay `--color-hero-overlay`
- Headline (Cormorant Garamond, 4.5rem, white):  
  `"Karma Belief Charitable Trust"`  
  `"Serving Humanity with Compassion Since 2019"`
- Subheading (DM Sans, 1.2rem, rgba(255,255,255,0.85)):  
  "A volunteer-driven NGO based in Ahmedabad, working for education, environment, women empowerment, and community welfare."
- CTAs: `[Donate Now]` (gold) · `[Become a Volunteer]` (outlined white) · `[Explore Our Work]` (text link with arrow)
- Diagonal bottom clip: `clip-path: polygon(0 0, 100% 0, 100% 92%, 0 100%)`
- Scroll indicator: animated chevron at bottom center

**[2] Impact Numbers Strip**
- Full-width saffron bg (`--color-primary`)
- 4 animated counters (count up on scroll):
  - `2019` — Year Founded
  - `5+` — Causes We Support
  - `100+` — Volunteers
  - `∞` — Lives Touched
- White text, Cormorant Garamond numerals, DM Sans labels

**[3] About Us Snapshot**
- 2-column: left = text, right = image collage / single warm photo
- Heading: "Who We Are"
- 2–3 short paragraphs about the trust (draw from About Us content)
- Link: `[Read Our Full Story →]`

**[4] Our Causes (Cards)**
- Heading: "Our Causes & Initiatives"
- 4 cards in 2×2 grid (2 cols desktop, 1 col mobile):
  1. 🌱 **Environment** — Tree plantations, river clean-up, awareness
  2. 👩 **Women Empowerment** — Scholarships, skill development, workshops
  3. 💍 **Marriage Assistance** — Supporting underprivileged families
  4. 🎓 **Scholarship & Education** — Study materials, merit support
- Each card: icon, title, 2-line desc, `[Learn More →]` link
- Hover: lift effect + saffron left border appears

**[5] Mission & Vision Blockquote**
- Centered, full-width, soft ivory bg with rangoli SVG watermark
- Large pull-quote (Cormorant Garamond italic, 2.2rem):  
  `"Service to humanity is service to God."`
- Below: Mission + Vision in two columns

**[6] Gallery Teaser**
- Heading: "Moments of Impact"
- Masonry-style or CSS grid photo grid, 6 photos
- Hover: saffron overlay with activity label
- `[View Full Gallery →]` button

**[7] Get Involved**
- 3-column layout: Donate · Volunteer · Partner
- Each has icon, title, description, CTA button
- BG: subtle green tint (`--color-accent` at 8% opacity)

**[8] Certifications Strip**
- "Officially Recognized" heading
- 4 certificate logos/badges:
  - Trust Registration
  - NITI Aayog NGO Darpan
  - Section 12AB (Income Tax)
  - Section 80G(5)(iv) (Tax Deductible Donations)
- Clickable → open PDF in new tab

**[9] CTA Banner**
- Dark earthy bg, saffron and gold text
- Heading: "Every Rupee You Donate Changes a Life"
- `[Donate Now]` prominent button
- Bank details preview (A/C name, bank, UPI hint)

---

### 2. `about-us.html` — About Us

**SEO Title:** About Karma Belief Charitable Trust | Ahmedabad NGO Since 2019  
**Meta Description:** Learn about Karma Belief Charitable Trust — our mission, vision, values, and the work we've been doing since 2019 to uplift communities in Ahmedabad and Gujarat.

#### Sections

**[1] Page Hero**
- Shorter hero (50vh), diagonal clip bottom
- Breadcrumb: Home > About Us
- Page title: "About Us" (large, white)

**[2] Our Story**
- Two-column: text left, founder/team photo right
- Content: founding in July 2019, volunteer spirit, Ahmedabad roots
- Key quote highlighted: `"We believe that Service to humanity is service to God."`
- Timeline (vertical): 2019 founding → key milestones

**[3] Mission, Vision, Values**
- 3 cards side-by-side
  - **Mission:** "To serve humanity with compassion, empower communities, and build a sustainable and inclusive society."
  - **Vision:** "A world where every individual has access to education, dignity, opportunities, and a clean environment."
  - **Values:** Compassion · Integrity · Sustainability · Equality · Service (icon list)

**[4] Our Work Areas**
- Accordion or tabbed interface listing all 4 cause areas with full descriptions

**[5] Certifications & Recognition**
- Each certificate: icon, title, issuing body, date, download PDF button
  1. Trust Registration Certificate (E/22616/AHMEDABAD, 9 July 2019)
  2. NITI Aayog NGO Darpan (GJ/2019/0240259)
  3. Section 12AB — Income Tax Act 1961
  4. Section 80G(5)(iv) — Tax Deductible Donations

**[6] Our Team (Optional)**
- Volunteer grid with photos, names, roles if available

**[7] Registration Details Box**
- Stylized info card showing all official details:
  - Reg #, Darpan #, PAN, Bank details, Address, Phone, Email

---

### 3. `causes.html` — Causes

**SEO Title:** Our Causes | Environment, Women Empowerment, Scholarships | Karma Belief  
**Meta Description:** Explore the causes Karma Belief Charitable Trust works for — environmental conservation, women empowerment, marriage assistance, and scholarships in Ahmedabad.

#### Sections

**[1] Page Hero**
- Breadcrumb + Title: "Our Causes & Initiatives"
- Subheading: "We work across social, environmental, and educational domains."

**[2] Cause Cards (Full Detail)**

Each cause gets a dedicated full-width section alternating layout (image left/right):

**Cause 1 — Environment 🌱**
- Color accent: `--color-accent` (green)
- Image: tree plantation / river clean event photo
- Content:
  - Problem statement: human impact on environment
  - What we do: tree plantation drives, river/lake clean-up, awareness programs
  - Goal: clean, green, safe planet for future generations
- Stats if available

**Cause 2 — Women Empowerment 👩**
- Color accent: saffron
- Content:
  - Why it matters: social marginalisation, barriers to education
  - What we do: scholarships for girl students, skill development workshops, financial independence training
  - Motto: "Empowering Education, Empowering Womanhood"

**Cause 3 — Marriage Assistance 💍**
- Color accent: gold
- Content:
  - Problem: financial struggles preventing dignified marriage ceremonies
  - What we do: support underprivileged brides and families
  - Tone: empathetic, dignified

**Cause 4 — Scholarship & Education 🎓**
- Color accent: earthy brown
- Content:
  - Distribution of scholarships to underprivileged students
  - Study materials for school children
  - Encouraging higher education for girls

**[3] Get Involved CTA**
- "Support a Cause" with links to Donate + Volunteer

---

### 4. `gallery.html` — Gallery

**SEO Title:** Gallery | Photos & Activities | Karma Belief Charitable Trust  
**Meta Description:** Browse photos from Karma Belief Charitable Trust's activities — tree plantations, river clean-up, scholarship distribution, old age home visits, and women empowerment events.

#### Sections

**[1] Page Hero**
- Title: "Gallery — Moments of Impact"
- Subtitle: "Every photo tells a story of compassion in action."

**[2] Filter Tabs**
- All | Environment | Women Empowerment | Education | Community
- CSS-only tab switching via `:target` pseudo-class or minimal JS
- Smooth fade transition between categories

**[3] Photo Grid**
- Masonry CSS grid or auto-fill columns: `grid-template-columns: repeat(auto-fill, minmax(280px, 1fr))`
- Categories of photos:
  - Tree plantation drives
  - River/lake cleaning campaigns
  - Scholarship distribution ceremonies
  - Old age home visits
  - Women empowerment workshops
  - Community events
- Hover: saffron overlay with caption text
- Click: lightbox modal with prev/next navigation (pure CSS or minimal JS)
- Alt text for all images (accessibility)

**[4] Video Gallery (Optional)**
- YouTube/Facebook embed section if videos exist
- Thumbnail grid with play overlay

---

### 5. `donate.html` — Donate

**SEO Title:** Donate to Karma Belief Charitable Trust | Support Education & Environment  
**Meta Description:** Donate to Karma Belief Charitable Trust and support education, environment, women empowerment, and community welfare in Ahmedabad. 80G tax benefits available.

#### Sections

**[1] Page Hero**
- Impactful headline: "Your Generosity Creates Change"
- Subheading: "Every donation — big or small — directly impacts lives."
- Hero bg: warm, candid volunteer photo

**[2] Why Donate?**
- 3 columns: 80G Tax Benefit · 100% Volunteer-run · Transparent & Certified
- Each with icon and 2-line description

**[3] Bank Transfer Details (Primary)**
```
Stylized card / info box:
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
  BANK DETAILS FOR DONATION
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
  Account Name : Karma Belief Charitable Trust
  Bank         : ICICI Bank, Bodakdev Branch, Ahmedabad
  Account No.  : 2308 0500 1088
  IFSC Code    : ICIC0002308
  MICR Code    : 380229045
  Account Type : Current Account
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
  [Copy Account Number]  [Copy IFSC]
```
- "Copy" buttons with clipboard JS

**[4] Other Ways to Donate**
- In-kind donations (materials, books, food)
- Volunteering as a form of contribution
- Corporate/CSR partnerships

**[5] 80G Tax Benefit Info**
- Highlighted box: donations eligible for deduction under Section 80G(5)(iv) of Income Tax Act
- PAN: AAETK0087F
- Note: "Please save your bank transfer receipt and contact us to receive your 80G certificate."

**[6] After Donating**
- Steps: 1. Transfer funds → 2. Email us proof → 3. Receive acknowledgment + 80G receipt
- Contact: info@karmabelief.org | +91 9886596789

**[7] Impact of Your Donation (Optional)**
- Infographic: ₹500 = study materials for 1 child, ₹1000 = workshop for 1 woman, etc.

---

### 6. `faq.html` — FAQ

**SEO Title:** Frequently Asked Questions | Karma Belief Charitable Trust  
**Meta Description:** Find answers to common questions about donating, volunteering, certifications, and activities at Karma Belief Charitable Trust, Ahmedabad.

#### Sections

**[1] Page Hero**
- Title: "Frequently Asked Questions"
- Search input (optional): filter FAQs in real-time with JS

**[2] FAQ Accordion**

Styled accordion: category headings, expandable Q&A items, smooth height animation.

**Category: About the Organisation**
- Q: What is Karma Belief Charitable Trust?
- Q: When was it established?
- Q: Where is Karma Belief based?
- Q: Is Karma Belief a government-recognized NGO?

**Category: Donations**
- Q: How can I donate to Karma Belief Charitable Trust?
  A: Bank transfer to ICICI Bank A/C 2308 0500 1088, IFSC ICIC0002308
- Q: Is my donation eligible for tax deduction?
  A: Yes. Donations are eligible under Section 80G(5)(iv). PAN: AAETK0087F
- Q: How will I receive my 80G certificate?
  A: Email proof of transfer to info@karmabelief.org with your name and PAN
- Q: Is there a minimum donation amount?
  A: No minimum. Every rupee counts.
- Q: Can I donate in-kind (food, books, clothes)?
  A: Yes. Please contact us to arrange.
- Q: Is online donation available?
  A: Currently via bank transfer. UPI/online coming soon. Contact us for help.

**Category: Volunteering**
- Q: How can I become a volunteer?
- Q: Do I need any special skills?
- Q: Can organisations/companies volunteer as a group?

**Category: Our Work**
- Q: What areas does Karma Belief work in?
- Q: Do you work outside Ahmedabad?
- Q: How can I see your past activities?
  A: Visit our Gallery page.

**Category: Transparency & Certifications**
- Q: Are you a registered NGO?
  A: Yes. Registration #: E/22616/AHMEDABAD. Also registered with NITI Aayog NGO Darpan.
- Q: Where can I verify your registration?
  A: NGO Darpan portal: ngodarpan.gov.in | Darpan ID: GJ/2019/0240259
- Q: What certifications do you hold?
  A: Trust Registration, NITI Aayog Enrollment, Section 12AB, Section 80G(5)(iv)

**[3] Still Have Questions?**
- CTA box: "Can't find your answer? Write to us."
- Button → `contact-us.html`

---

### 7. `contact-us.html` — Contact Us

**SEO Title:** Contact Karma Belief Charitable Trust | Ahmedabad NGO  
**Meta Description:** Get in touch with Karma Belief Charitable Trust. Reach us to donate, volunteer, partner, or learn more about our work in Ahmedabad, Gujarat.

#### Sections

**[1] Page Hero**
- Title: "Get in Touch"
- Subtitle: "Whether you want to donate, volunteer, or collaborate — we'd love to hear from you."

**[2] Contact Grid (2 columns)**

**Left: Contact Details**
```
📍 Address:
   B/806 Ashima Tower, Near Sandesh Press,
   Bodakdev, Ahmedabad – 380054
   Gujarat, India

📞 Phone:
   +91 9886596789
   +91 96648 53379
   (Shirish Patel)

📧 Email:
   info@karmabelief.org

🌐 Website:
   www.karmabelief.org

🕐 Response Time:
   We typically respond within 1–2 business days.
```

Social links: Facebook (karmabeliefcharitabletrust)

**Right: Contact Form**
```html
Fields:
- Full Name (required)
- Email Address (required)
- Phone Number
- Purpose: [Donate] [Volunteer] [Partner with Us] [General Enquiry]
- Message (textarea, required)
- [Send Message] button
```
- Form validation (HTML5 + JS)
- On submit: show success message or use Formspree/EmailJS for actual delivery
- `action="https://formspree.io/f/YOUR_FORM_ID"` recommended

**[3] Google Map Embed**
- Embed Google Maps for Bodakdev, Ahmedabad area
- Styled to match site palette (optional: desaturated map filter with saffron pin)

**[4] Bank Details for Donations (Footer of contact page)**
- Compact version of bank details for easy reference

---

### 8. `sitemap.html` — Sitemap

**SEO Title:** Sitemap | Karma Belief Charitable Trust  
**Meta Description:** Browse the complete sitemap of the Karma Belief Charitable Trust website.

#### Layout

- Clean, structured list of all pages and sub-sections
- Organized by hierarchy with indentation
- Each item is a clickable `<a>` link

```
Home (index.html)
About Us (about-us.html)
  ├── Our Story
  ├── Mission & Vision
  ├── Certifications
Causes (causes.html)
  ├── Environment
  ├── Women Empowerment
  ├── Marriage Assistance
  └── Scholarship & Education
Gallery (gallery.html)
Donate (donate.html)
FAQ (faq.html)
Contact Us (contact-us.html)
Sitemap (sitemap.html)
```

---

## File & Folder Structure

```
karma-belief-website/
│
├── index.html
├── about-us.html
├── causes.html
├── gallery.html
├── donate.html
├── faq.html
├── contact-us.html
├── sitemap.html
│
├── assets/
│   ├── css/
│   │   ├── main.css          ← Global styles, variables, components
│   │   └── animations.css    ← All keyframes and scroll-reveal logic
│   │
│   ├── js/
│   │   ├── main.js           ← Nav sticky, hamburger, accordion, counter
│   │   ├── gallery.js        ← Lightbox, filter tabs
│   │   └── form.js           ← Contact form validation
│   │
│   ├── img/
│   │   ├── logo.svg
│   │   ├── favicon.png
│   │   ├── hero-home.jpg
│   │   ├── hero-about.jpg
│   │   ├── causes/
│   │   │   ├── environment.jpg
│   │   │   ├── women.jpg
│   │   │   ├── marriage.jpg
│   │   │   └── education.jpg
│   │   ├── gallery/
│   │   │   └── *.jpg
│   │   └── certs/
│   │       ├── trust-cert.pdf
│   │       ├── niti-aayog.pdf
│   │       ├── 12ab.pdf
│   │       └── 80g.pdf
│   │
│   └── fonts/                ← (if self-hosting fonts)
│
└── CLAUDE.md
```

---

## Technical Requirements

### Performance
- Lazy-load all images: `loading="lazy"` attribute
- WebP format preferred for photos
- Minified CSS/JS for production
- Google Fonts loaded with `display=swap`

### Accessibility
- All images must have descriptive `alt` text
- Color contrast ratio ≥ 4.5:1 for body text
- Focus outlines preserved (never `outline: none` without replacement)
- Form labels tied to inputs with `for`/`id`
- ARIA labels on icon-only buttons

### SEO
- Unique `<title>` and `<meta name="description">` per page
- Open Graph tags on each page:
  ```html
  <meta property="og:title" content="...">
  <meta property="og:description" content="...">
  <meta property="og:image" content="assets/img/og-image.jpg">
  <meta property="og:url" content="https://www.karmabelief.org/...">
  <meta property="og:type" content="website">
  ```
- Semantic HTML: `<header>`, `<nav>`, `<main>`, `<section>`, `<article>`, `<footer>`
- Heading hierarchy: one `<h1>` per page, logical `<h2>` → `<h3>` order

### Schema Markup (JSON-LD)
Add to `<head>` on all pages:
```json
{
  "@context": "https://schema.org",
  "@type": "NGO",
  "name": "Karma Belief Charitable Trust",
  "url": "https://www.karmabelief.org",
  "logo": "https://www.karmabelief.org/assets/img/logo.svg",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "B/806 Ashima Tower, Near Sandesh Press, Bodakdev",
    "addressLocality": "Ahmedabad",
    "addressRegion": "Gujarat",
    "postalCode": "380054",
    "addressCountry": "IN"
  },
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+91-9886596789",
    "email": "info@karmabelief.org"
  },
  "sameAs": [
    "https://www.facebook.com/karmabeliefcharitabletrust/",
    "https://ngodarpan.gov.in/index.php/home/statewise_ngo/535/32/18"
  ]
}
```

### Browser Support
- Chrome, Firefox, Safari, Edge (last 2 versions)
- Mobile: iOS Safari, Android Chrome
- No IE11 support required

---

## Copy & Content Reference

### Key Phrases / Slogans
- "Service to humanity is service to God."
- "Serving Humanity with Compassion Since 2019"
- "Empowering Education, Empowering Womanhood"
- "Every small effort counts — together we make a lasting impact."
- "Volunteer-driven, community-focused."

### Core Causes Summary
| Cause | Color | Icon | Short Tagline |
|-------|-------|------|--------------|
| Environment | Green (#2B6049) | 🌱 | Protect Earth, Protect Future |
| Women Empowerment | Saffron (#C8570A) | 👩 | She rises, society rises |
| Marriage Assistance | Gold (#D4A017) | 💍 | Dignity for every union |
| Scholarship & Education | Brown (#8B4513) | 🎓 | Learning lights the way |

### Tone of Voice
- Warm, empathetic, hopeful — never preachy
- First-person plural ("We believe...", "Our volunteers...")
- Action-oriented CTAs: "Join us", "Make a difference", "Be the change"
- Avoid corporate jargon; keep language accessible

---

## Important Notes for Claude

1. **Each HTML file is standalone** — include full `<!DOCTYPE html>` structure, shared nav and footer inline (or use JS includes for DRY).

2. **Consistency** — all pages share `main.css`. Per-page styles go in `<style>` blocks at the bottom of `<head>` only if minimal.

3. **No placeholder images** — use descriptive placeholder divs with bg colors and labels if real photos aren't provided yet. Never use Lorem Picsum or random stock images for an NGO.

4. **Donate page is critical** — bank details must be 100% accurate, copy buttons must work, 80G info must be clearly presented.

5. **Mobile-first** — design for mobile viewport first, then enhance for desktop.

6. **No jQuery** — use vanilla JavaScript only.

7. **Saffron is primary, not dominant** — use it for accents, CTAs, borders, and highlights. Background should remain warm ivory for readability.

8. **Certificate PDFs** — link to actual PDF files in `assets/img/certs/` folder. Show them as downloadable cards, not just raw links.

9. **Contact form** — use Formspree or EmailJS for backend-free form submissions. Provide clear fallback with email address.

10. **Gallery lightbox** — implement a pure CSS/minimal JS lightbox. Do not import heavy libraries.
