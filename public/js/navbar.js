document.addEventListener("DOMContentLoaded", () => {
    let currentPath = location.pathname,
        navLinks = document.querySelectorAll('.nav-link');

    document.querySelectorAll('.nav-item').forEach(navItem => {
        navItem.classList.remove('active');
    });    

    navLinks.forEach(navLink => {
        if(navLink.pathname === currentPath) {
            navLink.parentElement.classList.add('active');
        }
    })
})