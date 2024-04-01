<footer>
        <p>© 2024 E-कृषिवैद्य.</p>
        <!-- Social media icons and links go here -->
    </footer>
    <script>
         const slider = document.querySelector('.slider');
    let isTransitioning = false;

    function nextSlide() {
        if (!isTransitioning) {
            isTransitioning = true;
            slider.style.transition = 'transform 0.8s ease-in-out';
            slider.style.transform = 'translateX(-100%)';

            // After transition, move the first slide to the end
            setTimeout(() => {
                const firstSlide = slider.firstElementChild;
                slider.appendChild(firstSlide);
                slider.style.transition = 'none';
                slider.style.transform = 'translateX(0)';
                isTransitioning = false;
            }, 800);
        }
    }

    // Call nextSlide function periodically to create a loop
    setInterval(nextSlide, 3000); // Change slide every 3 seconds (adjust as needed)
    </script>
    
</body>
</html>