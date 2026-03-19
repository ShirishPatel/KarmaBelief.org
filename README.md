# Karma Belief Charitable Trust Website

A modern, responsive website for Karma Belief Charitable Trust - a volunteer-driven NGO based in Ahmedabad, Gujarat, India.

## 🌟 Overview

This website showcases the work of Karma Belief Charitable Trust, founded on 9th July 2019, working across education, environment, women empowerment, and community welfare.

**Tagline:** Serving Humanity with Compassion Since 2019

## 📁 Project Structure

```
karma-belief-website/
│
├── index.html              # Home page
├── about-us.html          # About Us page
├── causes.html            # Causes & Initiatives
├── gallery.html           # Photo gallery
├── donate.html            # Donation information
├── faq.html               # Frequently Asked Questions
├── contact-us.html        # Contact form & details
├── sitemap.html           # Site navigation map
│
├── assets/
│   ├── css/
│   │   ├── main.css       # Main styles & design system
│   │   └── animations.css # Animation keyframes
│   │
│   ├── js/
│   │   ├── main.js        # Core functionality
│   │   ├── gallery.js     # Gallery & lightbox
│   │   └── form.js        # Form validation
│   │
│   └── img/
│       ├── certs/         # Certificate PDFs
│       ├── causes/        # Cause-specific images
│       └── gallery/       # Gallery photos
│
├── images/                # Existing images
├── Certificates/          # Original certificates
└── CLAUDE.md             # Design specifications
```

## 🎨 Design System

### Color Palette
- **Primary (Sky Blue):** #0EA5E9 - Trust, clarity, compassion
- **Accent (Deep Blue):** #0284C7 - Stability, depth
- **Light Blue:** #38BDF8 - Freshness, hope
- **Background:** White with sky blue gradient - Clean, modern

### Typography
- **Display/Headings:** Cormorant Garamond (elegant, literary)
- **Body/UI:** DM Sans (clean, humanist)
- **Hindi Accent:** Tiro Devanagari Hindi

### Key Features
- Mobile-first responsive design
- Smooth scroll animations with IntersectionObserver
- Accessible (WCAG compliant)
- SEO optimized with Schema.org markup
- 80G tax benefit information prominently displayed

## 🚀 Getting Started

### Prerequisites
- Modern web browser (Chrome, Firefox, Safari, Edge)
- Web server (optional for local development)

### Installation

1. Clone or download the repository
2. Open `index.html` in your browser, or
3. Use a local server:
   ```bash
   # Python 3
   python -m http.server 8000
   
   # Node.js
   npx serve
   ```
4. Visit `http://localhost:8000`

## 📝 Configuration

### Contact Form Setup
The contact form uses Formspree. To activate:
1. Sign up at [formspree.io](https://formspree.io)
2. Create a new form
3. Replace `YOUR_FORM_ID` in `contact-us.html`:
   ```html
   <form action="https://formspree.io/f/YOUR_FORM_ID" method="POST">
   ```

### Google Maps
The map embed in `contact-us.html` is already configured with the correct location for Karma Belief Charitable Trust at:
**B/806 Ashima Tower, Near Sandesh Press, Bodakdev, Ahmedabad – 380054**

## 🔧 Customization

### Adding Gallery Images
1. Add images to `assets/img/gallery/`
2. Update `gallery.html`:
   ```html
   <div class="gallery-item" data-category="environment">
     <img src="assets/img/gallery/your-image.jpg" alt="Description" loading="lazy">
     <div class="overlay">Caption Text</div>
   </div>
   ```

### Updating Bank Details
Bank details are in multiple locations:
- `index.html` (CTA banner)
- `donate.html` (main section)
- `contact-us.html` (footer section)

Ensure consistency across all pages.

## 📱 Pages Overview

1. **Home** - Hero, impact numbers, causes overview, mission/vision
2. **About Us** - Story, timeline, mission/vision/values, certifications
3. **Causes** - Detailed information on all 4 cause areas
4. **Gallery** - Filterable photo gallery with lightbox
5. **Donate** - Bank details, 80G info, donation process
6. **FAQ** - Accordion-style Q&A
7. **Contact** - Form, contact details, map
8. **Sitemap** - Complete site navigation

## 🎯 Key Information

### Organization Details
- **Registration #:** E/22616/AHMEDABAD
- **NGO Darpan #:** GJ/2019/0240259
- **PAN:** AAETK0087F
- **Founded:** 9th July 2019
- **Location:** Ahmedabad, Gujarat, India

### Bank Details
- **Account Name:** Karma Belief Charitable Trust
- **Bank:** Equitas Small Finance Bank, Prahladnagar Branch
- **Account #:** 100056019687
- **IFSC:** ESFB0007023

### Contact
- **Phone:** +91 988 659 6789
- **Email:** info@karmabelief.org
- **Website:** www.karmabelief.org
- **Facebook:** facebook.com/karmabeliefcharitabletrust

## 🌐 Browser Support
- Chrome (last 2 versions)
- Firefox (last 2 versions)
- Safari (last 2 versions)
- Edge (last 2 versions)
- Mobile: iOS Safari, Android Chrome

## ♿ Accessibility
- Semantic HTML5 structure
- ARIA labels on interactive elements
- Keyboard navigation support
- Alt text on all images
- Color contrast ratio ≥ 4.5:1

## 📊 SEO Features
- Unique meta titles and descriptions per page
- Open Graph tags for social sharing
- Schema.org JSON-LD markup
- Semantic HTML structure
- Optimized images with lazy loading

## 🤝 Contributing
This is a website for a charitable trust. For updates or corrections:
1. Contact via email: info@karmabelief.org
2. Submit issues or suggestions through official channels

## 📄 License
© 2024 Karma Belief Charitable Trust. All Rights Reserved.

## 🙏 Acknowledgments
Built with compassion for a cause that serves humanity.

---

**"Service to humanity is service to God."**
