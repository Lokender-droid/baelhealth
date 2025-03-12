// Select elements
const hamburger = document.querySelector(".hamburger");
const navLinks = document.querySelector(".nav-links");
const dropdowns = document.querySelectorAll(".dropdown > a"); // Only selecting dropdown links
const subDropdowns = document.querySelectorAll(".dropdown-submenu > a"); // Nested dropdowns

// Toggle mobile menu
if (hamburger && navLinks) {
    hamburger.addEventListener("click", () => {
        navLinks.classList.toggle("active");

        // Close all open dropdowns when mobile menu is toggled
        document.querySelectorAll(".dropdown").forEach(dropdown => {
            dropdown.classList.remove("open");
        });
    });
}

// Toggle dropdowns in mobile view
dropdowns.forEach(link => {
    link.addEventListener("click", function (e) {
        e.preventDefault();
        this.parentElement.classList.toggle("open");

        // Close other dropdowns when one is opened
        dropdowns.forEach(otherLink => {
            if (otherLink !== this) {
                otherLink.parentElement.classList.remove("open");
            }
        });
    });
});

// Toggle sub-dropdowns in mobile view
subDropdowns.forEach(link => {
    link.addEventListener("click", function (e) {
        e.preventDefault();
        this.parentElement.classList.toggle("open");

        // Close other sub-dropdowns when one is opened
        subDropdowns.forEach(otherLink => {
            if (otherLink !== this) {
                otherLink.parentElement.classList.remove("open");
            }
        });
    });
});

// Close dropdowns when clicking outside (Only on mobile view)
document.addEventListener("click", function (event) {
    if (window.innerWidth <= 768 && !event.target.closest(".dropdown")) {
        document.querySelectorAll(".dropdown").forEach(dropdown => {
            dropdown.classList.remove("open");
        });
    }
});

// GSAP Animations for menu
gsap.from(".nav-links li", { opacity: 0, y: -10, duration: 0.5, stagger: 0.1 });
gsap.from(".logo img", { opacity: 0, scale: 0.8, duration: 0.5 });

// Text Section Animation
if (document.querySelector(".txsection")) {
    gsap.fromTo(".txsection",
        { opacity: 0, y: 50 }, // Start position
        { opacity: 1, y: 0, duration: 1.5, ease: "power3.out" } // End position with smooth effect
    );
}

// Typewriter effect for heading
document.addEventListener("DOMContentLoaded", function () {
    let lines = document.querySelectorAll("#mainHeading span");

    function typeLine(index) {
        if (index < lines.length) {
            gsap.to(lines[index], {
                duration: 1.5,
                opacity: 1, // Fade in effect
                ease: "power1.inOut",
                onComplete: function () {
                    setTimeout(() => typeLine(index + 1), 500); // Delay between lines
                }
            });
        }
    }

    if (lines.length > 0) {
        typeLine(0); // Start typing from the first line
    }
});

// GSAP Animations for hero section
gsap.from(".hero-content h1", { duration: 1, opacity: 0, y: -50, ease: "power3.out" });
gsap.from(".hero-content p", { duration: 1, opacity: 0, y: 30, delay: 0.3, ease: "power3.out" });
gsap.from(".hero-cta", { duration: 1, opacity: 0, scale: 0.8, delay: 0.6, ease: "back.out(1.7)" });
gsap.from(".feature-item", {
    duration: 0.8,
    opacity: 0,
    y: 40,
    stagger: 0.2,
    delay: 0.9,
    ease: "power2.out"
});

// Parallax effect on scroll (Only for large screens)
function applyParallax() {
    if (window.innerWidth > 768) {
        window.addEventListener("scroll", () => {
            const scrollPos = window.scrollY;
            gsap.to(".hero-bg video", {
                y: scrollPos * 0.2,
                ease: "none",
                duration: 0
            });
        });
    }
}
window.addEventListener("resize", applyParallax);
applyParallax(); // Run initially


document.getElementById('adherenceChart')?.addEventListener('click', function (event) {
    const points = adherenceChart.getElementsAtEventForMode(event, 'nearest', { intersect: true }, true);
    
    if (points.length) {
        const firstPoint = points[0];
        const label = adherenceChart.data.labels[firstPoint.index];
        const datasetLabel = adherenceChart.data.datasets[firstPoint.datasetIndex].label;
        const value = adherenceChart.data.datasets[firstPoint.datasetIndex].data[firstPoint.index];

        // Select button
        const button = document.getElementById('chartButton'); 
        if (button) {
            button.style.backgroundColor = button.style.backgroundColor === "blue" ? "red" : "blue";
        }

        alert(`Date: ${label}\n${datasetLabel}: ${value}%`);
    }
});

// carousel
document.addEventListener("DOMContentLoaded", function () {
    const slides = document.querySelectorAll(".carousel-slide");
    const nextBtn = document.querySelector(".next-btn");
    const prevBtn = document.querySelector(".prev-btn");
    let currentIndex = 0;

    function showSlide(index) {
        let currentSlide = slides[currentIndex];
        let nextSlide = slides[index];

        // GSAP Animation
        gsap.to(currentSlide, { opacity: 0, x: "-100%", duration: 1 });
        gsap.to(nextSlide, { opacity: 1, x: "0%", duration: 1 });

        currentSlide.classList.remove("active");
        nextSlide.classList.add("active");

        currentIndex = index;
    }

    nextBtn.addEventListener("click", function () {
        let nextIndex = (currentIndex + 1) % slides.length;
        showSlide(nextIndex);
    });

    prevBtn.addEventListener("click", function () {
        let prevIndex = (currentIndex - 1 + slides.length) % slides.length;
        showSlide(prevIndex);
    });


    // Index page animation 
// Initial animation setup
    slides.forEach((slide, index) => {
        if (index !== 0) gsap.set(slide, { opacity: 0, x: "100%" });
    });
});

// 11:56:23pm animations
gsap.from("#animatedText", {
    opacity: 0,
    y: 50,
    duration: 1.5,
    ease: "power3.out"
});
// end of index inimation

// about us animation code : =>

     // Initialize Locomotive Scroll
     const scroll = new LocomotiveScroll({
        el: document.querySelector(".smooth-scroll"),
        smooth: true
    });

    // GSAP Animations
    gsap.to("h1", { opacity: 1, y: -20, duration: 1, delay: 0.3 });
    gsap.to("p", { opacity: 1, y: -20, duration: 1, delay: 0.6 });
    gsap.to("a", { opacity: 1, y: -20, duration: 1, delay: 0.9 });
    gsap.to("img", { opacity: 1, scale: 1, duration: 1, delay: 1.2 });

    // Three.js Background Animation
    const canvas = document.querySelector("#bgCanvas");
    const scene = new THREE.Scene();
    const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
    const renderer = new THREE.WebGLRenderer({ canvas, alpha: true });

    renderer.setSize(window.innerWidth, window.innerHeight);
    document.body.appendChild(renderer.domElement);

    const geometry = new THREE.SphereGeometry(5, 32, 32);
    const material = new THREE.MeshStandardMaterial({ color: 0xffffff, wireframe: true });
    const sphere = new THREE.Mesh(geometry, material);
    scene.add(sphere);

    const light = new THREE.PointLight(0xffffff, 1, 100);
    light.position.set(10, 10, 10);
    scene.add(light);

    camera.position.z = 15;

    function animate() {
        requestAnimationFrame(animate);
        sphere.rotation.x += 0.01;
        sphere.rotation.y += 0.01;
        renderer.render(scene, camera);
    }

    animate();

    // Responsive Resize
    window.addEventListener("resize", () => {
        camera.aspect = window.innerWidth / window.innerHeight;
        camera.updateProjectionMatrix();
        renderer.setSize(window.innerWidth, window.innerHeight);
    });

// hospital and clinics
let currentIndex = 0;
        const testimonials = document.querySelectorAll('.testimonial-card');

        function showTestimonial(index) {
            testimonials.forEach((testimonial, i) => {
                testimonial.classList.toggle('active', i === index);
            });
        }

        function prevTestimonial() {
            currentIndex = (currentIndex === 0) ? testimonials.length - 1 : currentIndex - 1;
            showTestimonial(currentIndex);
        }

        function nextTestimonial() {
            currentIndex = (currentIndex === testimonials.length - 1) ? 0 : currentIndex + 1;
            showTestimonial(currentIndex);
        }

        setInterval(nextTestimonial, 4000); // Auto-slide every 4 seconds

// about us 
document.addEventListener("DOMContentLoaded", function () {
    gsap.from(".vision-img", {
        opacity: 0,
        x: -100,
        duration: 1,
        ease: "power2.out"
    });

    gsap.from(".vision-text", {
        opacity: 0,
        x: 100,
        duration: 1,
        ease: "power2.out",
        delay: 0.3
    });

    gsap.from(".vision-list", {
        opacity: 0,
        y: 30,
        duration: 1,
        ease: "power2.out",
        stagger: 0.3,
        delay: 0.6
    });
});
