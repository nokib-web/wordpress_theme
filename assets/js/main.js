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

    // Gallery Horizontal Scroll by Mouse Drag & Infinite Loop
    const sliders = document.querySelectorAll('.gallery-images');
    
    sliders.forEach(slider => {
        let isDown = false;
        let startX;
        let scrollLeft;
        
        // Clone elements for infinite scroll effect (clone twice to be safe)
        const children = Array.from(slider.children);
        if (children.length === 0) return;
        
        const originalCount = children.length;
        
        // Append a set of clones
        children.forEach(child => {
            const clone = child.cloneNode(true);
            clone.classList.add('clone-appended');
            slider.appendChild(clone);
        });
        
        // Prepend a set of clones
        children.slice().reverse().forEach(child => {
            const clone = child.cloneNode(true);
            clone.classList.add('clone-prepended');
            slider.prepend(clone);
        });
        
        let wrapWidth = 0;
        
        function updateWrapWidth() {
            // First original element is at index `originalCount`
            const firstOriginal = slider.children[originalCount];
            // First appended clone is at index `originalCount * 2`
            const firstAppendedClone = slider.children[originalCount * 2];
            
            if (firstOriginal && firstAppendedClone) {
                wrapWidth = firstAppendedClone.offsetLeft - firstOriginal.offsetLeft;
                
                // Initialize scroll position to the first original element if we are at 0
                if (slider.scrollLeft === 0 || slider.scrollLeft < 10) {
                    slider.scrollLeft = firstOriginal.offsetLeft - slider.offsetLeft;
                }
            }
        }
        
        // Wait a bit for images to render and calculate widths
        setTimeout(updateWrapWidth, 300);
        window.addEventListener('resize', updateWrapWidth);
        
        slider.addEventListener('mousedown', (e) => {
            isDown = true;
            slider.classList.add('active');
            startX = e.pageX - slider.offsetLeft;
            scrollLeft = slider.scrollLeft;
        });
        
        slider.addEventListener('mouseleave', () => {
            isDown = false;
            slider.classList.remove('active');
        });
        
        slider.addEventListener('mouseup', () => {
            isDown = false;
            slider.classList.remove('active');
        });
        
        slider.addEventListener('mousemove', (e) => {
            if (!isDown) return;
            e.preventDefault();
            const x = e.pageX - slider.offsetLeft;
            const walk = (x - startX) * 2; 
            slider.scrollLeft = scrollLeft - walk;
        });
        
        slider.addEventListener('scroll', () => {
            if (!wrapWidth) return;
            
            const firstOriginal = slider.children[originalCount];
            if (!firstOriginal) return;
            
            const startScroll = firstOriginal.offsetLeft - slider.offsetLeft;
            
            // Seamlessly wrap around when scrolling too far left or right
            if (slider.scrollLeft < startScroll - wrapWidth / 2) {
                slider.style.scrollSnapType = 'none'; // Temporarily disable snapping to avoid jump glitches
                slider.scrollLeft += wrapWidth;
                setTimeout(() => slider.style.scrollSnapType = '', 50);
            } else if (slider.scrollLeft > startScroll + wrapWidth / 2) {
                slider.style.scrollSnapType = 'none';
                slider.scrollLeft -= wrapWidth;
                setTimeout(() => slider.style.scrollSnapType = '', 50);
            }
        });
    });
});
