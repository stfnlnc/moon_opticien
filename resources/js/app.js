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
