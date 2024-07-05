import Alpine from 'alpinejs';
import 'htmx.org';
import * as htmx from "htmx.org";
import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import { TextPlugin } from "gsap/TextPlugin";

gsap.registerPlugin(ScrollTrigger);
gsap.registerPlugin(TextPlugin);

document.addEventListener('DOMContentLoaded', function () {
    document.body.addEventListener('htmx:configRequest', (event) => {
        event.detail.headers['X-CSRF-Token'] = '{{ csrf_token() }}';
    })
});

htmx.onLoad(function (target) {
    // Hide top header at scrolling and change background nav
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

    // Review slider

    const reviews = document.querySelectorAll('.slider__review')
    const prevReview = document.querySelector('.slider__prev')
    const nextReview = document.querySelector('.slider__next')
    let i = 0
    let reviewLength = reviews.length

    if(reviewLength > 0) {
        nextReview.addEventListener('click', (e) => {
            e.preventDefault()
            if(i - 1 <= -reviewLength) {

            } else {
                i--
                reviews.forEach((review, key) => {
                    review.style.left = ((key + i) * 100) + 50 + '%'
                })
            }
        })

        prevReview.addEventListener('click', (e) => {
            e.preventDefault()
            if(i >= 0) {

            } else {
                i++
                reviews.forEach((review, key) => {
                    review.style.left = ((key + i) * 100) + 50 + '%'
                })
            }
        })
    }

    // Smooth scroll element

    const smooth = document.querySelectorAll('.smooth')
    const smoothRev = document.querySelectorAll('.smooth-rev')
    const smoothSlow = document.querySelectorAll('.smooth-slow')
    const smoothFast = document.querySelectorAll('.smooth-fast')

    smooth.forEach((s) => {
        gsap.to(s, {
            yPercent: -10,
            duration: 10,
            ease: 'power3',
            scrollTrigger: {
                trigger: s,
                start: 'top 30%',
                end: 'bottom',
                toggleActions: 'restart reverse play reverse',
                markers: false,
                scrub: 1
            }
        })
    })

    smoothRev.forEach((s) => {
        gsap.to(s, {
            yPercent: 10,
            duration: 10,
            ease: 'power3',
            scrollTrigger: {
                trigger: s,
                start: 'top 30%',
                end: 'bottom',
                toggleActions: 'restart reverse play reverse',
                markers: false,
                scrub: 1
            }
        })
    })

    smoothSlow.forEach((s) => {
        gsap.to(s, {
            yPercent: -5,
            duration: 10,
            ease: 'power3',
            scrollTrigger: {
                trigger: s,
                start: 'top 30%',
                end: 'bottom',
                toggleActions: 'restart reverse play reverse',
                markers: false,
                scrub: 1
            }
        })
    })

    smoothFast.forEach((s) => {
        gsap.to(s, {
            yPercent: -20,
            duration: 10,
            ease: 'power3',
            scrollTrigger: {
                trigger: s,
                start: 'top 30%',
                end: 'bottom',
                toggleActions: 'restart reverse play reverse',
                markers: false,
                scrub: 1
            }
        })
    })

    // Brand infinite scrolling
    const scroll = document.querySelectorAll('.infinite-scroll')

    scroll.forEach((s) => {
        gsap.to(s, {
            xPercent: 50,
            duration: 5,
            scrollTrigger: {
                trigger: s,
                toggleActions: 'restart reverse play reverse',
                markers: false,
                scrub: 1
            }
        });
    })


    // Show form content with filters
    const message = document.getElementById('message')
    const messageContent = document.getElementById('message-content')
    const shop = document.getElementById('shop')
    const shopContent = document.getElementById('shop-content')
    const home = document.getElementById('home')
    const homeContent = document.getElementById('home-content')
    const lens = document.getElementById('lens')
    const lensContent = document.getElementById('lens-content')
    const prescription = document.getElementById('prescription-send')
    const prescriptionContent = document.getElementById('prescription-send-content')
    const information = document.getElementById('information-send')
    const informationContent = document.getElementById('information-send-content')
    const filters = document.querySelectorAll('.filter')
    const filtersSub = document.querySelectorAll('.filter-sub')
    const contents = document.querySelectorAll('.content')
    const contentsSub = document.querySelectorAll('.content-sub')

    function showContent(element, content) {
        element.addEventListener('click', () => {
            filters.forEach((filter) => {
                filter.classList.remove('filter--active')
            })
            contents.forEach((content) => {
                content.classList.add('form-content')
            })
            element.classList.toggle('filter--active')
            content.classList.toggle('form-content')
        })
    }
    function showSubContent(element, content) {
        element.addEventListener('click', () => {
            filtersSub.forEach((filterSub) => {
                filterSub.classList.remove('filter-sub--active')
            })
            contentsSub.forEach((contentSub) => {
                contentSub.classList.add('form-sub-content')
            })
            element.classList.toggle('filter-sub--active')
            content.classList.toggle('form-sub-content')
        })
    }

    if(filters.length !== 0) {
        showContent(message, messageContent)
        showContent(shop, shopContent)
        showContent(home, homeContent)
        showContent(lens, lensContent)
        showSubContent(prescription, prescriptionContent, true)
        showSubContent(information, informationContent, true)
    }
});

window.Alpine = Alpine;

Alpine.start();




