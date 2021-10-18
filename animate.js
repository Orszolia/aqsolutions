gsap.registerPlugin(ScrollTrigger);

let landing = gsap.timeline();

landing.from(".landing", { y: 200, duration: 1, opacity:0, delay:0.5})

landing.from(".card", {y: "random(-200, 200)", duration: 1, opacity: 0, stagger: 0.5});

gsap.from('.section1', {
    scrollTrigger: {
        trigger: ".section1",
        toggleActions: "play none none none"
    },
    x: -200,
    duration: 1,
    opacity: 0
});

gsap.from('.section1_img', {
    scrollTrigger: {
        trigger: ".section1_img",
        toggleActions: "play none none none"
    },
    x: 200,
    duration: 1,
    opacity: 0
});

gsap.from('.section2', {
    scrollTrigger: {
        trigger: ".section2",
        toggleActions: "play none none none"
    },
    x: 200,
    duration: 1,
    opacity: 0
});

gsap.from('.section2_img', {
    scrollTrigger: {
        trigger: ".section2_img",
        toggleActions: "play none none none"
    },
    x: -200,
    duration: 1,
    opacity: 0
});

gsap.from('.section3', {
    scrollTrigger: {
        trigger: ".section3",
        toggleActions: "play none none none"
    },
    x: -200,
    duration: 1,
    opacity: 0
});

gsap.from('.section3_img', {
    scrollTrigger: {
        trigger: ".section3_img",
        toggleActions: "play none none none"
    },
    x: 200,
    duration: 1,
    opacity: 0
});

gsap.from('.section4', {
    scrollTrigger: {
        trigger: ".section4",
        toggleActions: "play none none none"
    },
    x: 200,
    duration: 1,
    opacity: 0
});

gsap.from('.section4_img', {
    scrollTrigger: {
        trigger: ".section4_img",
        toggleActions: "play none none none"
    },
    x: -200,
    duration: 1,
    opacity: 0
});

gsap.from('.section5', {
    scrollTrigger: {
        trigger: ".section5",
        toggleActions: "play none none none"
    },
    x: -200,
    duration: 1,
    opacity: 0
});

gsap.from('.section5_img', {
    scrollTrigger: {
        trigger: ".section5_img",
        toggleActions: "play none none none"
    },
    x: 200,
    duration: 1,
    opacity: 0
});

gsap.from('.section6', {
    scrollTrigger: {
        trigger: ".section6",
        toggleActions: "play none none none"
    },
    x: 200,
    duration: 1,
    opacity: 0
});

gsap.from('.section6_img', {
    scrollTrigger: {
        trigger: ".section6_img",
        toggleActions: "play none none none"
    },
    x: -200,
    duration: 1,
    opacity: 0
});