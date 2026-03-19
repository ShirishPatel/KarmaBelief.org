# Social Media Icons Update

## Summary
Updated all website pages to replace the text-based Facebook link with professional social media icons for Facebook, LinkedIn, and YouTube.

## Changes Made

### Pages Updated
1. ✅ index.html
2. ✅ about-us.html
3. ✅ causes.html
4. ✅ gallery.html
5. ✅ donate.html
6. ✅ faq.html
7. ✅ contact-us.html (footer + contact details section)
8. ✅ sitemap.html

### Social Media Links Added

| Platform | URL |
|----------|-----|
| **Facebook** | https://www.facebook.com/karmabeliefcharitabletrust/ |
| **LinkedIn** | https://in.linkedin.com/company/karma-belief-charitable-trust |
| **YouTube** | https://www.youtube.com/channel/UCv6k8zQtATGW9VJKYHC91yw |

### Design Details

**Icon Style:**
- Circular buttons (40px × 40px)
- Brand colors:
  - Facebook: #1877F2 (blue)
  - LinkedIn: #0A66C2 (blue)
  - YouTube: #FF0000 (red)
- White SVG icons
- Hover effect with opacity transition
- 12px gap between icons

**Location:**
- Footer "Registration" section on all pages
- Contact details section on contact-us.html

### Before vs After

**Before:**
```html
<a href="https://www.facebook.com/karmabeliefcharitabletrust/" target="_blank" style="color: var(--color-primary-light);">Facebook →</a>
```

**After:**
```html
<h3 style="margin-top: 20px;">Follow Us</h3>
<div style="display: flex; gap: 12px; margin-top: 12px;">
  <a href="[Facebook URL]" target="_blank" style="[circular icon styles]" title="Facebook">
    <svg>[Facebook icon]</svg>
  </a>
  <a href="[LinkedIn URL]" target="_blank" style="[circular icon styles]" title="LinkedIn">
    <svg>[LinkedIn icon]</svg>
  </a>
  <a href="[YouTube URL]" target="_blank" style="[circular icon styles]" title="YouTube">
    <svg>[YouTube icon]</svg>
  </a>
</div>
```

## Benefits

1. **Professional Appearance** - Modern icon-based design instead of text links
2. **Better Visibility** - Colorful brand icons are more recognizable
3. **Improved UX** - Clear visual indicators for social media platforms
4. **Accessibility** - Title attributes for screen readers
5. **Consistency** - Uniform design across all pages

## Testing Checklist

- [ ] Verify all icons display correctly on desktop
- [ ] Test hover effects on all icons
- [ ] Confirm links open in new tabs
- [ ] Check mobile responsiveness
- [ ] Validate all URLs are correct
- [ ] Test accessibility with screen readers

---

**Updated:** January 2025
**Status:** Complete ✅
