<?php
// Fixed elements: WhatsApp icon and scroll-to-top button
?>

<!-- WhatsApp Icon -->
<a href="https://wa.me/918080858170" target="_blank" rel="noopener noreferrer" class="whatsapp-icon" title="Chat on WhatsApp">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
        <path d="M17.507 14.307l-.611-1.418a1.44 1.44 0 0 0-1.966-.727l-.882.539a11.342 11.342 0 0 1-1.279-.369 11.342 11.342 0 0 1-1.115-1.059l.539-.882a1.44 1.44 0 0 0-.727-1.966l-1.418-.611a1.44 1.44 0 0 0-1.972.845l-.231.913a1.44 1.44 0 0 0 1.234 1.85c.59.082 1.177.203 1.747.369a13.114 13.114 0 0 0 1.732 1.105l-.363.594a1.44 1.44 0 0 0-.227 1.404l.611 1.418a1.44 1.44 0 0 0 1.966.727l.882-.539a11.342 11.342 0 0 1 1.279.369 11.342 11.342 0 0 1 1.115 1.059l-.539.882a1.44 1.44 0 0 0 .727 1.966l1.418.611a1.44 1.44 0 0 0 1.972-.845l.231-.913a1.44 1.44 0 0 0-1.234-1.85c-.59-.082-1.177-.203-1.747-.369a13.114 13.114 0 0 0-1.732-1.105l.363-.594a1.44 1.44 0 0 0 .227-1.404M12 2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10S17.523 2 12 2"/>
    </svg>
</a>

<!-- Scroll to Top Button -->
<button class="scroll-to-top" id="scrollToTopBtn" title="Go to top">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
        <path d="M7 14l5-5 5 5z"/>
    </svg>
</button>

<script>
    // Scroll to Top Button Functionality
    const scrollToTopBtn = document.getElementById('scrollToTopBtn');

    // Show/hide button based on scroll position
    window.addEventListener('scroll', function() {
        if (window.pageYOffset > 300) {
            scrollToTopBtn.classList.add('show');
        } else {
            scrollToTopBtn.classList.remove('show');
        }
    });

    // Scroll to top on button click
    scrollToTopBtn.addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
</script>
