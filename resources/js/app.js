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

    function hideNavAtScroll() {
        if(window.scrollY > 100) {
            nav.style.top = '-' + navPop.offsetHeight + 'px'
            navMenu.style.backgroundColor = 'var(--secondary-dark)'
        } else {
            navMenu.style.backgroundColor = 'unset'
            nav.style.top = '0'
        }
    }

    hideNavAtScroll()

    document.addEventListener('scroll', () => {
        hideNavAtScroll()
    })
});

window.Alpine = Alpine;

Alpine.start();
