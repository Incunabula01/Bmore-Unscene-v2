// Variable to detect window width.
var windowWidth = $(window).width();
function slider() {
    $('#featured').orbit();
};
// Wait for the page to load
jQuery(document).ready(function ($) {
    // Trigger function for a certain window width
    if (windowWidth >= 768) {
        // Load the orbit slider.
        slider();
    }
});