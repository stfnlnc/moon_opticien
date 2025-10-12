import Alpine from "alpinejs";
import "htmx.org";
import * as htmx from "htmx.org";
import {gsap} from "gsap";
import {ScrollTrigger} from "gsap/ScrollTrigger";
import {ScrollSmoother} from "gsap/ScrollSmoother";
import {TextPlugin} from "gsap/TextPlugin";

gsap.registerPlugin(ScrollTrigger, ScrollSmoother);
gsap.registerPlugin(TextPlugin);

document.addEventListener("DOMContentLoaded", function () {
    document.body.addEventListener("htmx:configRequest", (event) => {
        event.detail.headers["X-CSRF-Token"] = "{{ csrf_token() }}";
    });
});

htmx.onLoad(function (target) {
    // Hide top header at scrolling and change background nav
    const navMenu = document.getElementById("nav");
    const mode = navMenu.dataset.mode;

    function hideNavAtScroll(mode) {
        if (window.scrollY > 100) {
            navMenu.style.backgroundColor = "var(--secondary-" + mode + ")";
        } else {
            navMenu.style.backgroundColor = "unset";
        }
    }

    hideNavAtScroll(mode);

    document.addEventListener("scroll", () => {
        hideNavAtScroll(mode);
    });

    // Mobile menu dropdown
    const menu = document.querySelector(".mobile-menu");
    const close = document.querySelector(".mobile-menu-close");
    const dropdown = document.querySelector(".mobile-dropdown");
    const body = document.querySelector("body");
    body.style.overflow = "auto";

    window.addEventListener("resize", () => {
        dropdown.style.right = "-100%";
        body.style.overflow = "auto";
    });

    menu.addEventListener("click", () => {
        dropdown.style.right = "0";
        body.style.overflow = "hidden";
    });

    close.addEventListener("click", () => {
        dropdown.style.right = "-100%";
        body.style.overflow = "auto";
    });

    // Review slider
    const reviews = document.querySelectorAll(".slider__review");
    const prevReview = document.querySelector(".slider__prev");
    const nextReview = document.querySelector(".slider__next");
    let i = 0;
    let reviewLength = reviews.length;

    if (reviewLength > 0) {
        nextReview.addEventListener("click", (e) => {
            e.preventDefault();
            if (i - 1 <= -reviewLength) {
            } else {
                i--;
                reviews.forEach((review, key) => {
                    review.style.left = (key + i) * 100 + 50 + "%";
                });
            }
        });

        prevReview.addEventListener("click", (e) => {
            e.preventDefault();
            if (i >= 0) {
            } else {
                i++;
                reviews.forEach((review, key) => {
                    review.style.left = (key + i) * 100 + 50 + "%";
                });
            }
        });
    }

    // Smooth scroll element

    let reveals = [];

    function reveal(value, delay, direction = null) {
        let yFrom = 100;
        let yTo = 0;
        let xFrom = 0;
        let xTo = 0;
        if (direction === "left") {
            yFrom = 0;
            yTo = 0;
            xFrom = -100;
            xTo = 0;
        } else if (direction === "right") {
            yFrom = 0;
            yTo = 0;
            xFrom = 100;
            xTo = 0;
        }

        value.forEach((v) => {
            gsap.set(v, {opacity: 0, x: xFrom, y: yFrom});
            gsap.to(v, {
                x: xTo,
                y: yTo,
                opacity: 1,
                delay: delay,
                duration: 1.5,
                ease: "power4",
                immediateRender: false,
                scrollTrigger: {
                    trigger: v,
                    start: "top 100%",
                    markers: false,
                },
            });
        });
    }

    for (let i = 0; i <= 6; i++) {
        reveals[i] = document.querySelectorAll(".reveal-" + i);
        reveal(reveals[i], 0.1 * i);
    }

    const revealLeft = document.querySelectorAll(".reveal-left");
    reveal(revealLeft, 0, "left");
    const revealRight = document.querySelectorAll(".reveal-right");
    reveal(revealRight, 0, "right");

    // Brand infinite scrolling
    const brandFilters = document.querySelectorAll('.btn--filter')
    const brandImages = document.querySelectorAll('.brand-img')

    gsap.utils.toArray(".scroller").forEach((line, i) => {
        const speed = 1; // (in pixels per second)

        const links = line.querySelectorAll("img"),
            tl = horizontalLoop(links, {speed: speed, reversed: true, repeat: -1});

        links.forEach((link) => {
            link.addEventListener("mouseenter", () =>
                gsap.to(tl, {timeScale: 0, overwrite: true})
            );
            link.addEventListener("mouseleave", () =>
                gsap.to(tl, {timeScale: -1, overwrite: true})
            );
        });
    });

    function horizontalLoop(items, config) {
        items = gsap.utils.toArray(items);
        config = config || {};
        let tl = gsap.timeline({
                repeat: config.repeat,
                paused: config.paused,
                defaults: {ease: "none"},
                onReverseComplete: () => tl.totalTime(tl.rawTime() + tl.duration() * 100)
            }),
            length = items.length,
            startX = items[0].offsetLeft,
            times = [],
            widths = [],
            xPercents = [],
            curIndex = 0,
            pixelsPerSecond = (config.speed || 1) * 100,
            snap = config.snap === false ? (v) => v : gsap.utils.snap(config.snap || 1),
            totalWidth,
            curX,
            distanceToStart,
            distanceToLoop,
            item,
            i;
        gsap.set(items, {
            // convert "x" to "xPercent" to make things responsive, and populate the widths/xPercents Arrays to make lookups faster.
            xPercent: (i, el) => {
                let w = (widths[i] = parseFloat(gsap.getProperty(el, "width", "px")));
                xPercents[i] = snap(
                    (parseFloat(gsap.getProperty(el, "x", "px")) / w) * 100 +
                    gsap.getProperty(el, "xPercent")
                );
                return xPercents[i];
            }
        });
        gsap.set(items, {x: 0});
        totalWidth =
            items[length - 1].offsetLeft +
            (xPercents[length - 1] / 100) * widths[length - 1] -
            startX +
            items[length - 1].offsetWidth *
            gsap.getProperty(items[length - 1], "scaleX") +
            (parseFloat(config.paddingRight) || 0);
        for (i = 0; i < length; i++) {
            item = items[i];
            curX = (xPercents[i] / 100) * widths[i];
            distanceToStart = item.offsetLeft + curX - startX;
            distanceToLoop =
                distanceToStart + widths[i] * gsap.getProperty(item, "scaleX");
            tl.to(
                item,
                {
                    xPercent: snap(((curX - distanceToLoop) / widths[i]) * 100),
                    duration: distanceToLoop / pixelsPerSecond
                },
                0
            )
                .fromTo(
                    item,
                    {
                        xPercent: snap(
                            ((curX - distanceToLoop + totalWidth) / widths[i]) * 100
                        )
                    },
                    {
                        xPercent: xPercents[i],
                        duration:
                            (curX - distanceToLoop + totalWidth - curX) / pixelsPerSecond,
                        immediateRender: false
                    },
                    distanceToLoop / pixelsPerSecond
                )
                .add("label" + i, distanceToStart / pixelsPerSecond);
            times[i] = distanceToStart / pixelsPerSecond;
        }

        function toIndex(index, vars) {
            vars = vars || {};
            Math.abs(index - curIndex) > length / 2 &&
            (index += index > curIndex ? -length : length); // always go in the shortest direction
            let newIndex = gsap.utils.wrap(0, length, index),
                time = times[newIndex];
            if (time > tl.time() !== index > curIndex) {
                // if we're wrapping the timeline's playhead, make the proper adjustments
                vars.modifiers = {time: gsap.utils.wrap(0, tl.duration())};
                time += tl.duration() * (index > curIndex ? 1 : -1);
            }
            curIndex = newIndex;
            vars.overwrite = true;
            return tl.tweenTo(time, vars);
        }

        tl.next = (vars) => toIndex(curIndex + 1, vars);
        tl.previous = (vars) => toIndex(curIndex - 1, vars);
        tl.current = () => curIndex;
        tl.toIndex = (index, vars) => toIndex(index, vars);
        tl.times = times;
        tl.progress(1, true).progress(0, true); // pre-render for performance
        if (config.reversed) {
            tl.vars.onReverseComplete();
            tl.reverse();
        }
        return tl;
    }


    // Show form content with filters
    const message = document.getElementById("message");
    const messageContent = document.getElementById("message-content");
    const shop = document.getElementById("shop");
    const shopContent = document.getElementById("shop-content");
    const home = document.getElementById("home");
    const homeContent = document.getElementById("home-content");
    const lens = document.getElementById("lens");
    const lensContent = document.getElementById("lens-content");
    const prescription = document.getElementById("prescription-send");
    const prescriptionContent = document.getElementById(
        "prescription-send-content"
    );
    const information = document.getElementById("information-send");
    const informationContent = document.getElementById(
        "information-send-content"
    );
    const filters = document.querySelectorAll(".filter");
    const filtersSub = document.querySelectorAll(".filter-sub");
    const contents = document.querySelectorAll(".content");
    const contentsSub = document.querySelectorAll(".content-sub");

    function showContent(element, content) {
        element.addEventListener("click", () => {
            filters.forEach((filter) => {
                filter.classList.remove("filter--active");
            });
            contents.forEach((content) => {
                content.classList.add("form-content");
            });
            element.classList.toggle("filter--active");
            content.classList.toggle("form-content");
        });
    }

    function showSubContent(element, content) {
        element.addEventListener("click", () => {
            filtersSub.forEach((filterSub) => {
                filterSub.classList.remove("filter-sub--active");
            });
            contentsSub.forEach((contentSub) => {
                contentSub.classList.add("form-sub-content");
            });
            element.classList.toggle("filter-sub--active");
            content.classList.toggle("form-sub-content");
        });
    }

    if (filters.length !== 0) {
        showContent(message, messageContent);
        showContent(shop, shopContent);
        showContent(home, homeContent);
        showContent(lens, lensContent);
        showSubContent(prescription, prescriptionContent, true);
        showSubContent(information, informationContent, true);
    }
});


window.Alpine = Alpine;

Alpine.start();
