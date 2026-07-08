# Lamfuz WordPress Theme

Custom WordPress theme for **Lamfuz Nepali Cuisine** restaurant — [lamfuz.dk](https://lamfuz.dk)

---

## 📁 Theme Structure

```
lamfuz/
├── style.css          # Theme info & global styles (required by WordPress)
├── index.php          # Main fallback template
├── functions.php      # Theme setup, enqueue scripts/styles
├── header.php         # Site header
├── footer.php         # Site footer
├── front-page.php     # Homepage template
├── page-about.php     # About page template
├── page-contact.php   # Contact page template
├── assets/
│   ├── css/main.css   # All styles
│   ├── js/main.js     # All JavaScript (menu, scroll, language toggle)
│   └── images/        # All site images (WebP format)
└── inc/
    └── gutenberg.php  # Gutenberg editor support
```

---

## 🖥️ Locally চালানোর নিয়ম (Run Locally)

### Method 1: Simple HTTP Server (Python)
```bash
# Theme folder এ যাও
cd c:\pixelora\wordpress_theme

# Python দিয়ে server চালাও
python -m http.server 8080

# Browser এ যাও
# http://localhost:8080/index.html
```

### Method 2: VS Code Live Server Extension
1. VS Code এ `index.html` খোলো
2. Bottom bar এ **"Go Live"** click করো
3. Browser automatically খুলবে

### Method 3: Node.js `http-server`
```bash
npm install -g http-server
cd c:\pixelora\wordpress_theme
http-server -p 8080

# Browser এ যাও
# http://localhost:8080
```

### Pages
| URL | Page |
|-----|------|
| `localhost:8080/index.html` | Homepage |
| `localhost:8080/about.html` | About Page |
| `localhost:8080/contact.html` | Contact Page |

---

## 🌐 WordPress এ Upload ও Activate করার নিয়ম

### Step 1: ZIP File তৈরি
Theme folder এ `lamfuz-theme.zip` আছে। অথবা নতুন করে বানাতে হলে:

**Windows PowerShell:**
```powershell
Compress-Archive -Path "c:\pixelora\wordpress_theme\*" -DestinationPath "c:\pixelora\lamfuz-theme.zip" -Force
```

### Step 2: WordPress Admin এ Upload
1. WordPress Admin Panel এ Login করো → `yoursite.com/wp-admin`
2. বাম মেনু থেকে **Appearance → Themes** এ যাও
3. উপরে **"Add New"** button এ click করো
4. **"Upload Theme"** button এ click করো
5. **"Choose File"** এ click করে `lamfuz-theme.zip` select করো
6. **"Install Now"** click করো
7. Install শেষ হলে **"Activate"** click করো ✅

### Step 3: Pages Setup (WordPress Admin)
WordPress এ নিচের pages তৈরি করতে হবে:

| Page Title | Template |
|-----------|----------|
| Forside (Homepage) | Front Page |
| Om Lamfuz | page-about.php |
| Kontakt | page-contact.php |

**Pages তৈরির নিয়ম:**
1. **Pages → Add New** এ যাও
2. Title দাও (যেমন: "Om Lamfuz")
3. Right sidebar এ **Page Attributes → Template** থেকে সঠিক template select করো
4. **Publish** করো

**Homepage Set করার নিয়ম:**
1. **Settings → Reading** এ যাও
2. **"A static page"** select করো
3. **"Homepage"** এ "Forside" page select করো
4. **Save Changes** করো

### Step 4: Permalinks Fix
Theme activate করার পর:
1. **Settings → Permalinks** এ যাও
2. **"Post name"** select করো
3. **"Save Changes"** click করো

---

## 🌍 Language Toggle (DA / EN)

Site এ Google Translate integration আছে:
- **DA** = Danish (Default)
- **EN** = English

Header এর top-right এ **DA / EN** toggle আছে। Click করলে সম্পূর্ণ site translate হবে।

---

## 📱 Responsive Breakpoints

| Breakpoint | Description |
|-----------|-------------|
| `> 992px` | Desktop — full navigation visible |
| `≤ 992px` | Tablet/Mobile — hamburger menu |
| `≤ 768px` | Mobile — compact header, smaller logo |

---

## 🔧 Customization

### Colors (CSS Variables — `assets/css/main.css`):
```css
:root {
    --primary-color: #a89066;   /* Gold/beige accent */
    --red-cta: #e52424;         /* CTA button red */
    --red-cta-hover: #c81c1c;   /* CTA hover */
}
```

### Fonts:
- **Headings:** Playfair Display (Google Fonts)
- **Body:** Inter (Google Fonts)

---

## 📞 Support

**Developed by:** Pixelora  
**Website:** [pixelora.dk](https://pixelora.dk)  
**Client:** Lamfuz Nepali Cuisine — [lamfuz.dk](https://lamfuz.dk)
