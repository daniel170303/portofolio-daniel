import './bootstrap';
import AOS from 'aos';

// Initialize AOS (Animate On Scroll)
document.addEventListener('DOMContentLoaded', function() {
    AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: true,
        offset: 100
    });

    // Dark mode toggle
    console.log('Dark mode script loaded in app.js');
    const darkModeToggle = document.getElementById('dark-mode-toggle');
    const darkModeIcon = document.getElementById('dark-mode-icon');
    const html = document.documentElement;

    // Default to dark mode
    const savedTheme = localStorage.getItem('theme') || 'dark';
    console.log('Saved theme:', savedTheme);

    if (savedTheme === 'dark') {
        html.classList.add('dark');
        if (darkModeToggle) darkModeToggle.checked = true;
        if (darkModeIcon) darkModeIcon.textContent = '🌙';
    } else {
        html.classList.remove('dark');
        if (darkModeToggle) darkModeToggle.checked = false;
        if (darkModeIcon) darkModeIcon.textContent = '☀️';
    }

    if (darkModeToggle && darkModeIcon) {
        // Listen for input change
        darkModeToggle.addEventListener('change', () => {
            console.log('Toggle changed to:', darkModeToggle.checked);
            if (darkModeToggle.checked) {
                html.classList.add('dark');
                darkModeIcon.textContent = '🌙';
                localStorage.setItem('theme', 'dark');
            } else {
                html.classList.remove('dark');
                darkModeIcon.textContent = '☀️';
                localStorage.setItem('theme', 'light');
            }
        });

        // Additional click listener on icon for reliability
        darkModeIcon.addEventListener('click', () => {
            darkModeToggle.checked = !darkModeToggle.checked;
            darkModeToggle.dispatchEvent(new Event('change'));
        });
    }
});

// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// Back-to-top button functionality
const backToTopButton = document.getElementById('back-to-top');
if (backToTopButton) {
    // Show/hide button based on scroll position
    window.addEventListener('scroll', function() {
        if (window.pageYOffset > 300) {
            backToTopButton.classList.remove('opacity-0', 'invisible', 'translate-y-4');
            backToTopButton.classList.add('opacity-100', 'visible', 'translate-y-0');
        } else {
            backToTopButton.classList.add('opacity-0', 'invisible', 'translate-y-4');
            backToTopButton.classList.remove('opacity-100', 'visible', 'translate-y-0');
        }
    });

    // Scroll to top when clicked
    backToTopButton.addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
}

// Global smooth scroll behavior
document.documentElement.style.scrollBehavior = 'smooth';
