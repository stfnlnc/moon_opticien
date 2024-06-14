import Alpine from 'alpinejs';
import 'htmx.org';
import * as htmx from "htmx.org";
import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

document.addEventListener('DOMContentLoaded', function () {
    document.body.addEventListener('htmx:configRequest', (event) => {
        event.detail.headers['X-CSRF-Token'] = '{{ csrf_token() }}';
    })
});

htmx.onLoad(function (target) {

    const navMenu = document.getElementById('nav');
    const navPop = document.getElementById('nav-pop');
    const nav = document.querySelector('nav');
    const mode = navMenu.dataset.mode

    function hideNavAtScroll(mode) {
        if(window.scrollY > 100) {
            nav.style.top = '-' + navPop.offsetHeight + 'px'
            navMenu.style.backgroundColor = 'var(--secondary-' + mode + ')'
        } else {
            navMenu.style.backgroundColor = 'unset'
            nav.style.top = '0'
        }
    }

    hideNavAtScroll(mode)

    document.addEventListener('scroll', () => {
        hideNavAtScroll(mode)
    })

    // Mobile menu dropdown
    const menu = document.querySelector('.mobile-menu')
    const close = document.querySelector('.mobile-menu-close')
    const dropdown = document.querySelector('.mobile-dropdown')
    const body = document.querySelector('body')
    body.style.overflow = 'auto'

    window.addEventListener('resize', () => {
        dropdown.style.right = '-100%'
        body.style.overflow = 'auto'
    })

    menu.addEventListener('click', () => {
        dropdown.style.right = '0'
        body.style.overflow = 'hidden'
    })

    close.addEventListener('click', () => {
        dropdown.style.right = '-100%'
        body.style.overflow = 'auto'
    })


    // Show form content with filters
    /*const message = document.getElementById('message')
    const messageContent = document.getElementById('message-content')
    const shop = document.getElementById('shop')
    const shopContent = document.getElementById('shop-content')
    const home = document.getElementById('home')
    const homeContent = document.getElementById('home-content')
    const lens = document.getElementById('lens')
    const lensContent = document.getElementById('lens-content')
    const filters = document.querySelectorAll('.filter')

    message.addEventListener('click', () => {
        filters.forEach((filter) => {
            filter.classList.remove('filter--active')
        })
        message.classList.toggle('filter--active')
        messageContent.classList.toggle('form-content')
    })

    shop.addEventListener('click', () => {
        filters.forEach((filter) => {
            filter.classList.remove('filter--active')
        })
        shop.classList.toggle('filter--active')
        shopContent.classList.toggle('form-content')
    })*/

});

window.Alpine = Alpine;

Alpine.start();

/*gsap.to('.box', {
    yPercent: -5,
    duration: 2,
    scrollTrigger: {
        trigger: '.box',
        toggleActions: 'restart reverse play reverse',
        start: 'top 40%',
        end: 'bottom 30%',
        markers: false,
        scrub: 1
    }
});

gsap.to('.box2', {
    yPercent: -20,
    duration: 2,
    scrollTrigger: {
        trigger: '.box2',
        toggleActions: 'restart reverse play reverse',
        start: 'top 40%',
        end: 'bottom 30%',
        markers: false,
        scrub: 1
    }
});*/
