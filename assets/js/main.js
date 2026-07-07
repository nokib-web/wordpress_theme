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
});


