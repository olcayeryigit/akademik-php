document.addEventListener("DOMContentLoaded", () => {
    const topButton = document.querySelector(".scroll-top");

    // Scroll event listener for progress effect
    window.addEventListener("scroll", () => {
        const scrollTop = window.scrollY; // Current scroll position
        const scrollHeight = document.documentElement.scrollHeight - window.innerHeight; // Total scrollable height
        const scrollFraction = scrollTop / scrollHeight; // Percentage scrolled (0 to 1)

        const progressDegree = scrollFraction * 360; // Rotate the border based on scroll fraction

        // Apply rotation to border (increasing as you scroll down)
        topButton.style.background = `conic-gradient(#ff9300 ${progressDegree}deg, transparent 0deg)`;

        // Show the button once the scroll height is reached
        if (scrollTop > 500) { // Button appears after scrolling 500px
            topButton.classList.add("opacity-100");
            topButton.classList.remove("opacity-0");
        } else {
            topButton.classList.add("opacity-0");
            topButton.classList.remove("opacity-100");
        }
    });

    // Click event to scroll to the top
    topButton.addEventListener("click", (e) => {
        e.preventDefault();
        window.scrollTo({
            top: 0,
            behavior: "smooth",
        });
    });
});