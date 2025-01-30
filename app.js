const menu = document.querySelector('#mobile-menu');
const menuLinks = document.querySelector('.navbar_menu');

menu.addEventListener('click', function() {
    const isOpen = menu.classList.toggle('is-active');
    menuLinks.classList.toggle('active');
    menu.setAttribute('aria-expanded', isOpen); //aria-expanded
});

// scroll to the Contact Us container
function scrollToContactUs() {
    // Check if URL contains the #contact-us hash
    if (window.location.hash === "#contact-us") {
        // Get Contact Us container
        const contactUsContainer = document.getElementById("contact-us");
        if (contactUsContainer) {
            // Scroll to the Contact Us container
            contactUsContainer.scrollIntoView({ behavior: "smooth" });
        }
    }
}
// Run the function when the page loads
window.addEventListener("load", scrollToContactUs);