document.addEventListener('DOMContentLoaded', function() {
    const slider = document.querySelector('.slider');
    if (!slider) return;

    const slides = slider.querySelectorAll('.slide');
    const totalSlides = slides.length;
    let currentIndex = 0;
    let autoplayInterval;
    let touchStartX = 0;
    let touchEndX = 0;

    // Ajouter la classe active au premier slide
    slides[0].classList.add('active');

    function showSlide(index) {
        // Retirer la classe active de tous les slides
        slides.forEach(slide => slide.classList.remove('active'));
        // Ajouter la classe active au slide courant
        slides[index].classList.add('active');
    }

    function nextSlide() {
        currentIndex = (currentIndex + 1) % totalSlides;
        showSlide(currentIndex);
    }

    function prevSlide() {
        currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
        showSlide(currentIndex);
    }

    // Événements pour les flèches
    slider.querySelector('.arrow-left').addEventListener('click', () => {
        prevSlide();
        resetAutoplay();
    });

    slider.querySelector('.arrow-right').addEventListener('click', () => {
        nextSlide();
        resetAutoplay();
    });

    // Événements tactiles pour le swipe mobile
    slider.addEventListener('touchstart', (e) => {
        touchStartX = e.touches[0].clientX;
    });

    slider.addEventListener('touchend', (e) => {
        touchEndX = e.changedTouches[0].clientX;
        handleSwipe();
    });

    function handleSwipe() {
        const swipeThreshold = 50;
        const diff = touchStartX - touchEndX;

        if (Math.abs(diff) > swipeThreshold) {
            if (diff > 0) {
                nextSlide();
            } else {
                prevSlide();
            }
            resetAutoplay();
        }
    }

    // Navigation au clavier
    document.addEventListener('keydown', (e) => {
        if (e.key === 'ArrowLeft') {
            prevSlide();
            resetAutoplay();
        } else if (e.key === 'ArrowRight') {
            nextSlide();
            resetAutoplay();
        }
    });

    // Fonctionnalité autoplay

});

document.addEventListener('DOMContentLoaded', function() {
    const filterInputs = document.querySelectorAll('.filter-input');
    const articles = document.querySelectorAll('.article-card-ligne');
    
    function updateFilters() {
        const selectedFilters = Array.from(filterInputs)
            .filter(input => input.checked)
            .map(input => input.value);
        
        articles.forEach(article => {
            const articleFilters = article.dataset.filters.split(',').map(f => f.trim().toLowerCase());
            
            if (selectedFilters.length === 0) {
                article.classList.remove('hidden');
            } else {
                const shouldShow = selectedFilters.some(filter => 
                    articleFilters.includes(filter.toLowerCase())
                );
                article.classList.toggle('hidden', !shouldShow);
            }
        });
    }
    
    filterInputs.forEach(input => {
        input.addEventListener('change', updateFilters);
    });
});

document.addEventListener('DOMContentLoaded', function() {
    const filterInputs = document.querySelectorAll('.filter-input');
    const articles = document.querySelectorAll('.article-card-mat');
    
    function updateFilters() {
        const selectedFilters = Array.from(filterInputs)
            .filter(input => input.checked)
            .map(input => input.value);
        
        articles.forEach(article => {
            const articleFilters = article.dataset.filters.split(',').map(f => f.trim().toLowerCase());
            
            if (selectedFilters.length === 0) {
                article.classList.remove('hidden');
            } else {
                const shouldShow = selectedFilters.some(filter => 
                    articleFilters.includes(filter.toLowerCase())
                );
                article.classList.toggle('hidden', !shouldShow);
            }
        });
    }
    
    filterInputs.forEach(input => {
        input.addEventListener('change', updateFilters);
    });
});

document.addEventListener('DOMContentLoaded', () => {
    const burgerMenu = document.querySelector('.burger-menu');
    const mobileMenu = document.querySelector('.mobile-menu');
  
    burgerMenu.addEventListener('click', () => {
      mobileMenu.classList.toggle('active');
    });
  });