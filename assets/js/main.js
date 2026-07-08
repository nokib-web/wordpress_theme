// Prevent browser from restoring scroll position on reload
if ('scrollRestoration' in history) {
    history.scrollRestoration = 'manual';
}

// Force scroll to top on reload/load
window.scrollTo(0, 0);

document.addEventListener("DOMContentLoaded", function() {

    // Mobile Menu Toggle
    const mobileMenuToggle = document.getElementById('mobileMenuToggle');
    const mobileNavOverlay = document.getElementById('mobileNavOverlay');
    const mobileMenuClose = document.getElementById('mobileMenuClose');

    if (mobileMenuToggle && mobileNavOverlay) {
        mobileMenuToggle.addEventListener('click', function() {
            mobileNavOverlay.classList.add('active');
            mobileMenuToggle.classList.add('active');
        });

        if (mobileMenuClose) {
            mobileMenuClose.addEventListener('click', function() {
                mobileNavOverlay.classList.remove('active');
                mobileMenuToggle.classList.remove('active');
            });
        }

        // Close mobile drawer on clicking links
        const mobileLinks = mobileNavOverlay.querySelectorAll('a');
        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileNavOverlay.classList.remove('active');
                mobileMenuToggle.classList.remove('active');
            });
        });
    }

    // Intersection Observer for scroll animations
    if ('IntersectionObserver' in window) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.15 });

        const elementsToAnimate = document.querySelectorAll(
            '.welcome-content, .welcome-image, .concert-card, .support-content'
        );
        
        elementsToAnimate.forEach((el, index) => {
            el.classList.add('animate-on-scroll');
            if (el.classList.contains('concert-card')) {
                el.style.transitionDelay = `${index * 0.15}s`;
            }
            observer.observe(el);
        });
    }

    // Menu Accordion Logic
    const accordions = document.querySelectorAll('.menu-accordion-header');
    accordions.forEach(acc => {
        acc.addEventListener('click', function() {
            const item = this.parentElement;
            
            // Toggle active class
            item.classList.toggle('active');
            
            // Close other items
            const allItems = document.querySelectorAll('.menu-accordion-item');
            allItems.forEach(i => {
                if (i !== item) {
                    i.classList.remove('active');
                }
            });
        });
    });

    // Back to Top Button
    const backToTopBtn = document.getElementById('backToTop');
    if (backToTopBtn) {
        backToTopBtn.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }

    // Header Scroll Logic
    const header = document.getElementById('siteHeader');
    let lastScrollY = window.scrollY;

    if (header) {
        window.addEventListener('scroll', () => {
            const currentScrollY = window.scrollY;
            
            if (currentScrollY <= 50) {
                header.classList.remove('sticky');
                header.classList.remove('hidden');
            } 
            else if (currentScrollY > lastScrollY && currentScrollY > 200) {
                header.classList.add('hidden');
                header.classList.remove('sticky');
            } 
            else if (currentScrollY < lastScrollY && currentScrollY > 50) {
                header.classList.remove('hidden');
                header.classList.add('sticky');
            }
            
            lastScrollY = currentScrollY;
        }, { passive: true });
    }

    // Language Translator Logic
    const langSelector = document.querySelector('.lang-selector');
    if (langSelector) {
        const langDA = langSelector.querySelector('span:first-child');
        const langEN = langSelector.querySelector('span:last-child');
        
        function setLanguage(langCode) {
            const select = document.querySelector('select.goog-te-combo');
            if (select) {
                select.value = langCode;
                select.dispatchEvent(new Event('change'));
            }
        }
        
        langDA.addEventListener('click', () => {
            setLanguage('da');
            langDA.classList.add('active');
            langEN.classList.remove('active');
        });
        
        langEN.addEventListener('click', () => {
            setLanguage('en');
            langEN.classList.add('active');
            langDA.classList.remove('active');
        });
    }

    
// Initialize Swiper
document.addEventListener('DOMContentLoaded', function() {
    if (document.querySelector('.mySwiper')) {
        var swiper = new Swiper('.mySwiper', {
            slidesPerView: 'auto',
            spaceBetween: 24,
            freeMode: true,
            loop: true,
            speed: 800,
            grabCursor: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
        });
    }
});
