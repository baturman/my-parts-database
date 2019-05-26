let Backend = function() {

    /* General */
    let initSideMenuBarToggleButton = function () {
        $("#menu-toggle").click(function(e) {
            e.preventDefault();

            $("#wrapper").toggleClass("toggled");
            $('#page-content-wrapper').toggleClass("toggled");
            $('#top-nav-bar').toggleClass("toggled");
        });
    };

    return {
        init: function() {
            initSideMenuBarToggleButton();
        },
    };

}();

jQuery(document).ready(function() {
    Backend.init();
});

