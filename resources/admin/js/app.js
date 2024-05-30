import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// Mobile Navigation
const menuOpen = document.querySelector('.mobile-menu')
const menuClose = document.querySelector('.mobile-close')
const menu = document.querySelector('.mobile-dropdown')

menuOpen.addEventListener('click', () => {
    menu.style.left = '0'
})

menuClose.addEventListener('click', () => {
    menu.style.left = '-330px'
})


