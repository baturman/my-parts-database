let Categories = function() {

    let initMainCategoryEditButton = function(){
        $('.main-category-select').on('click', function (event) {
            event.preventDefault();
            let mainCategoryId = $(this).attr('data-item-id');

            $('#main_category_edit_model').modal({
                backdrop: 'static',

            });
        });
    };

    return {
        init: function() {
            initMainCategoryEditButton();
        },
    };

}();

jQuery(document).ready(function() {
    Categories.init();
});