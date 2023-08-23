const navigationBar = document.querySelector('.navigation-bar');
let lastScrollPosition = 0;

window.addEventListener('scroll', () => {
    const currentScrollPosition = window.scrollY;
    
    if (currentScrollPosition > lastScrollPosition) {
        navigationBar.style.top = '-173px'; // Hide the navigation bar by moving it above the viewport
    } else {
        navigationBar.style.top = '0'; // Bring back the navigation bar to the top
    }

    lastScrollPosition = currentScrollPosition;
});