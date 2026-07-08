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
    const langSelectors = document.querySelectorAll('.lang-selector, .mobile-lang-selector');
    
    function getCookie(name) {
        const value = "; " + document.cookie;
        const parts = value.split("; " + name + "=");
        if (parts.length === 2) return parts.pop().split(';').shift();
        return null;
    }

    const googtrans = getCookie('googtrans');
    let currentLang = 'da';
    if (googtrans && googtrans.endsWith('/en')) {
        currentLang = 'en';
    }

    function doTranslate(langCode) {
        document.cookie = "googtrans=/da/" + langCode + "; path=/;";
        document.cookie = "googtrans=/da/" + langCode + "; domain=" + window.location.hostname + "; path=/;";
        
        const select = document.querySelector('select.goog-te-combo');
        if (select) {
            select.value = langCode;
            select.dispatchEvent(new Event('change'));
        } else {
            setTimeout(() => {
                const selectRetry = document.querySelector('select.goog-te-combo');
                if (selectRetry) {
                    selectRetry.value = langCode;
                    selectRetry.dispatchEvent(new Event('change'));
                } else {
                    window.location.reload();
                }
            }, 500);
        }
    }

    langSelectors.forEach(langSelector => {
        const langDA = langSelector.querySelector('span:first-child');
        const langEN = langSelector.querySelector('span:last-child');
        
        if(langDA && langEN) {
            // Set initial active state based on cookie
            if (currentLang === 'en') {
                langEN.classList.add('active');
                langDA.classList.remove('active');
            } else {
                langDA.classList.add('active');
                langEN.classList.remove('active');
            }

            langDA.addEventListener('click', () => {
                if(currentLang !== 'da') {
                    currentLang = 'da';
                    langSelectors.forEach(ls => {
                        const lDA = ls.querySelector('span:first-child');
                        const lEN = ls.querySelector('span:last-child');
                        if (lDA && lEN) { lDA.classList.add('active'); lEN.classList.remove('active'); }
                    });
                    doTranslate('da');
                }
            });
            
            langEN.addEventListener('click', () => {
                if(currentLang !== 'en') {
                    currentLang = 'en';
                    langSelectors.forEach(ls => {
                        const lDA = ls.querySelector('span:first-child');
                        const lEN = ls.querySelector('span:last-child');
                        if (lDA && lEN) { lEN.classList.add('active'); lDA.classList.remove('active'); }
                    });
                    doTranslate('en');
                }
            });
        }
    });

});
    
// Initialize Swiper
document.addEventListener('DOMContentLoaded', function() {
    if (document.querySelector('.mySwiper')) {
        var swiper = new Swiper('.mySwiper', {
            slidesPerView: 'auto',
            spaceBetween: 20,
            loop: true,
            grabCursor: true,
            allowTouchMove: true,
            mousewheel: {
                forceToAxis: true,
            },
            freeMode: {
                enabled: true,
                momentum: true,
            },
        });
    }
});



