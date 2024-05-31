const scrollY = 20;
const defaultClass = "border-transparent";
const activeClass = "bg-white/80 dark:bg-gray-900/80 border-gray-200 dark:border-gray-700 backdrop-blur-lg";

let scrollPos = 0;
let ticking = false;

function OnScroll(scrollPos) {
    const headers = document.querySelectorAll(".sticky-header");
    const classArray = activeClass.split(" ");
    const replaceArray = defaultClass.split(" ");

    headers.forEach((header) => {
        if (scrollPos > scrollY) {
            header.classList.remove(...replaceArray);
            header.classList.add("is-active", ...classArray);
            header.setAttribute("active", "");
        }

        if (scrollPos < Math.max(scrollY - 10, 0)) {
            header.classList.remove("is-active", ...classArray);
            header.classList.add(...replaceArray);
            header.removeAttribute("active");
        }
    });
}

// Scroll event throttling as per MDN
// https://developer.mozilla.org/en-US/docs/Web/API/Document/scroll_event

document.addEventListener("scroll", (event) => {
    scrollPos = window.scrollY;
    if (!ticking) {
        window.requestAnimationFrame(() => {
            OnScroll(scrollPos);
            ticking = false;
        });

        ticking = true;
    }
});