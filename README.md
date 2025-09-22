# 🏥 Le Noyer - WordPress Medical Center Theme

<div align="center">
  <img src="assets/img/logo/logo.png" alt="Le Noyer Logo" width="200" />
  
  **A custom WordPress theme for Le Noyer Medical Center with comprehensive content management**
  
  [![WordPress](https://img.shields.io/badge/WordPress-Custom%20Theme-21759B?style=for-the-badge&logo=wordpress)](https://wordpress.org/)
  [![PHP](https://img.shields.io/badge/PHP-8.0+-777BB4?style=for-the-badge&logo=php)](https://php.net/)
  [![CSS3](https://img.shields.io/badge/CSS3-Modern-1572B6?style=for-the-badge&logo=css3)](https://www.w3.org/Style/CSS/)
  [![JavaScript](https://img.shields.io/badge/JavaScript-jQuery-F7DF1E?style=for-the-badge&logo=javascript)](https://jquery.com/)
</div>

---

## 🎯 About

This is a **custom WordPress theme** designed for **Le Noyer Medical Center** (Maison Médicale Le Noyer), a multidisciplinary healthcare facility providing quality, accessible, continuous, comprehensive and integrated care. The theme empowers medical staff to easily manage and modify every section of the website through the WordPress admin panel.

Originally coded as a static website, it was then expertly converted into a fully dynamic WordPress theme, allowing non-technical users to update content, manage team members, services, activities, and patient information seamlessly.

## ✨ Features

- 🏥 **Medical Center Focus** - Dedicated sections for healthcare services and team presentation
- 👨‍⚕️ **Team Management** - Easy-to-manage staff profiles and specializations
- 📅 **Activities System** - Manage recurring and one-time activities for patients
- 📱 **Fully Responsive** - Optimized for desktop, tablet, and mobile devices
- 🎬 **Smooth Animations** - Professional scroll animations and micro-interactions
- 📧 **Contact Forms** - Integrated contact and appointment request forms
- 🌐 **Multi-Page Structure** - Comprehensive page templates for all sections
- 📰 **News/Journal System** - Keep patients informed with latest updates
- 🔒 **GDPR Compliant** - Dedicated privacy policy and data protection pages
- 🎯 **SEO Optimized** - Clean markup and semantic HTML structure
- ♿ **Accessibility** - Following healthcare website accessibility standards

## 🛠️ Tech Stack

<div align="center">

| Backend | Frontend | Styling | Animation | Libraries |
|---------|----------|---------|-----------|-----------|
| ![WordPress](https://img.shields.io/badge/WordPress-21759B?style=flat&logo=wordpress&logoColor=white) | ![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=flat&logo=javascript&logoColor=black) | ![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=flat&logo=css3&logoColor=white) | ![CSS3](https://img.shields.io/badge/Animations-1572B6?style=flat&logo=css3&logoColor=white) | ![Bootstrap](https://img.shields.io/badge/Bootstrap-7952B3?style=flat&logo=bootstrap&logoColor=white) |
| PHP 8.0+ | jQuery | Bootstrap 5 | WOW.js | Slick Carousel |
| Custom Templates | Vanilla JS | CSS3 Grid/Flexbox | CSS Transitions | Magnific Popup |

</div>

### Core Technologies

- **[WordPress](https://wordpress.org/)** - CMS with custom theme development
- **[PHP](https://php.net/)** - Server-side scripting and WordPress functions
- **[Bootstrap 5](https://getbootstrap.com/)** - Responsive framework for consistent UI
- **[jQuery](https://jquery.com/)** - JavaScript library for DOM manipulation

### JavaScript Libraries

- **[Slick Carousel](https://kenwheeler.github.io/slick/)** - Responsive carousel/slider
- **[WOW.js](https://wowjs.uk/)** - Scroll-triggered animations
- **[Magnific Popup](https://dimsemenov.com/plugins/magnific-popup/)** - Responsive lightbox plugin
- **[jQuery UI](https://jqueryui.com/)** - User interface interactions and effects
- **[Isotope](https://isotope.metafizzy.co/)** - Grid layout and filtering
- **[Odometer](https://github.hubspot.com/odometer/)** - Smooth number transitions

## 📁 Project Structure

```
le-noyer-theme/
├── 📄 Core WordPress Files
│   ├── index.php              # Main template
│   ├── home.php               # Homepage template
│   ├── functions.php          # Theme functions
│   ├── style.css              # WordPress theme info
│   └── screenshot.jpg         # Theme screenshot
├── 📄 Page Templates
│   ├── page-about.php         # About us page
│   ├── page-equipe.php        # Team page
│   ├── page-services.php      # Services page
│   ├── page-activites.php     # Activities overview
│   ├── page-activitessingle.php # Single activity
│   ├── page-fonctionnement.php  # How we work
│   ├── page-espace-patients.php # Patient portal
│   ├── page-contact.php       # Contact page
│   ├── page-journal.php       # News/journal
│   ├── page-reseau.php        # Network partners
│   ├── page-rgpd.php          # Privacy policy
│   └── page-succes.php        # Success page
├── 📄 Single Post Templates
│   ├── single-activite-ponctuelle.php  # One-time activities
│   └── single-activite-recurrente.php  # Recurring activities
├── 📁 partials/              # Template partials
│   ├── header.php            # Site header
│   ├── navigation.php        # Main navigation
│   ├── footer.php            # Site footer
│   └── main.php              # Main content area
├── 📁 assets/                # Asset files
│   ├── css/                  # Stylesheets
│   │   ├── bootstrap.min.css # Bootstrap framework
│   │   ├── style.css         # Main styles
│   │   ├── responsive.css    # Responsive design
│   │   └── *.css             # Various plugin styles
│   ├── js/                   # JavaScript files
│   │   ├── main.js           # Main functionality
│   │   ├── bootstrap.min.js  # Bootstrap JS
│   │   └── *.js              # Various plugins
│   ├── img/                  # Image assets
│   │   ├── logo/             # Logo variations
│   │   ├── Team/             # Team member photos
│   │   ├── activités/        # Activity images
│   │   ├── partenaires/      # Partner logos
│   │   ├── reseau/           # Network logos
│   │   ├── Pictogrammes/     # Icons and pictograms
│   │   └── banner/           # Banner images
│   └── fonts/                # Custom fonts
└── 📄 PHP_Tags.php           # PHP utility functions
```

## 🎯 Key Features Breakdown

### 🏥 Medical Center Management
```php
// Custom page templates for healthcare sections
page-equipe.php      // Team management with specializations
page-services.php    // Medical services offered
page-activites.php   // Patient activities and programs
```

### 👨‍⚕️ Team & Services Management
```php
// Dynamic content management through WordPress admin
- Add/edit team members with photos and specializations
- Manage medical services and descriptions
- Update contact information and schedules
```

### 📅 Activities System
```php
// Two types of activities with dedicated templates
single-activite-ponctuelle.php   // One-time events
single-activite-recurrente.php   // Recurring activities
```

### 📱 Responsive Design
```css
/* Mobile-first responsive approach */
@media (max-width: 768px) {
  .medical-card { transform: scale(0.95); }
  .team-grid { grid-template-columns: 1fr; }
}
```

### 🎬 Professional Animations
```javascript
// Smooth scroll animations for medical professionalism
$(window).scroll(function() {
  var scrollbarLocation = $(this).scrollTop();
  // Gentle fade-in animations for content sections
});
```

## 🚀 Installation & Setup

### Prerequisites
- WordPress 5.0+
- PHP 8.0+
- Modern web browser
- Access to WordPress admin panel

### Installation Steps

1. **Download the theme**
   ```bash
   # Clone or download the theme files
   git clone [repository-url]
   ```

2. **Upload to WordPress**
   ```
   wp-content/themes/maison-medicale-le-noyer/
   ```

3. **Activate the theme**
   - Go to WordPress Admin → Appearance → Themes
   - Activate "Maison Médicale Le Noyer"

4. **Configure content**
   - Create pages for each section (About, Team, Services, etc.)
   - Upload team member photos and information
   - Set up activities and services
   - Configure contact forms

### Content Management

1. **Adding Team Members**
   - Create new posts in the Team section
   - Add featured images for profile photos
   - Include specializations and contact details

2. **Managing Activities**
   - Use custom post types for activities
   - Categorize as "ponctuelle" (one-time) or "recurrente" (recurring)
   - Add activity images and descriptions

3. **Updating Services**
   - Edit service pages through WordPress admin
   - Update descriptions, schedules, and contact information

## 🎨 Customization

### Adding New Services
1. Create new service pages in WordPress admin
2. Use the services page template structure
3. Add relevant medical icons and descriptions

### Modifying Team Section
```php
// partials/team-member.php
<div class="team-member">
  <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
  <h3><?php the_title(); ?></h3>
  <p><?php the_field('specialization'); ?></p>
</div>
```

### Custom Styling
```css
/* assets/css/style.css */
.medical-section {
  background: #f8f9fa;
  padding: 60px 0;
  border-radius: 10px;
}

.service-card {
  transition: transform 0.3s ease;
  box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}
```

## 📋 Page Templates Overview

### Core Pages
- **Homepage** (`home.php`) - Welcome and overview
- **About** (`page-about.php`) - Medical center presentation
- **Team** (`page-equipe.php`) - Staff and specialists
- **Services** (`page-services.php`) - Medical services offered

### Specialized Pages
- **Activities** (`page-activites.php`) - Patient programs
- **Functioning** (`page-fonctionnement.php`) - How the center works
- **Patient Portal** (`page-espace-patients.php`) - Patient resources
- **Network** (`page-reseau.php`) - Partner organizations

### Legal & Contact
- **Contact** (`page-contact.php`) - Contact information and forms
- **GDPR** (`page-rgpd.php`) - Privacy policy
- **Journal** (`page-journal.php`) - News and updates

## 📧 Contact & Support

For questions about this theme or custom development:

- **Developer**: Oliver Van Droogenbroeck
- **Medical Center**: Le Noyer (Maison Médicale Le Noyer)
- **Theme Version**: 1.0
- **Description**: Le Noyer est une maison médicale composée d'une équipe pluridisciplinaire dispensant des soins de qualité, accessibles, continus, globaux et intégrés.

---

## 🏗️ Architecture Highlights

### WordPress Integration
- Custom page templates for healthcare content
- Post thumbnail support for team and activity images
- Clean, semantic HTML structure
- SEO-optimized metadata

### Performance Optimizations
- Minified CSS and JavaScript files
- Optimized image loading and sizing
- Efficient jQuery implementations
- Fast-loading medical content

### Healthcare Focus
- GDPR compliance features
- Accessibility considerations
- Professional medical design
- Patient-focused user experience

### Browser Compatibility
- Modern browsers (Chrome, Firefox, Safari, Edge)
- Mobile-responsive design
- Touch-friendly navigation
- Progressive enhancement

---

## 🌟 Special Features

### Multi-Language Ready
- French language implementation
- Semantic HTML structure for translation
- Cultural considerations for medical content

### Content Management Excellence
- Non-technical user friendly
- Visual content editing
- Image management system
- Form handling capabilities

### Medical Industry Standards
- Professional healthcare design
- Patient privacy considerations
- Accessible navigation
- Trust-building visual elements

---

<div align="center">
  <p>🏥 <strong>Built with care for healthcare professionals and their patients</strong></p>
  <p>⭐ Empowering medical centers with modern web technology</p>
</div>

---

*This theme represents the perfect fusion of healthcare expertise and modern web development, creating a professional digital presence for Le Noyer Medical Center while ensuring easy content management for healthcare professionals.*
