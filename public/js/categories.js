let Categories = function() {

    let initComponents = function(){
        $('#new_category_id').select2({
            theme: 'bootstrap4',
            placeholder: 'Select Category..',
        });

        $('#create-sc-category-id').select2({
            theme: 'bootstrap4',
            placeholder: 'Select Category..',
        });
    };

    let initMainCategoryEditFormValidation = function () {
        let form = $('#main-category-edit-form');

        form.validate({
            rules: {
                name: {
                    required: true,
                    maxlength: 40,
                    minlength: 5
                },
            },

            submitHandler: function () {
                window.tinymce.triggerSave();

                let data = form.serializeArray();
                let mcId = $('#main-category-id').val();

                $('#main-category-edit-modal').modal('hide');

                window.ajaxPutRequest(
                    '/ajax/category/' + mcId,
                    data,
                    function (data) {
                        let status = data['status'];
                        let message = data['message'];
                        window.showNotification(status, message);
                        if (status === 'success'){
                            $('#mc-' + mcId).text($('#name').val());
                            form.trigger('reset');
                        }
                    }
                );
            }
        });
    };

    let initMainCategoryEditButton = function(){
        $('.mc-edit-select').on('click', function (event) {
            event.preventDefault();
            let mainCategoryId = $(this).attr('data-item-id');

            window.ajaxGetRequest(
                '/ajax/category/' + mainCategoryId,
                function (data) {
                    let status = data['status'];
                    let message = data['message'];
                    if (status === 'info'){
                        let categoryId = data['data']['id'];
                        let categoryName = data['data']['name'];
                        let categoryDescription = data['data']['description'];

                        $('#main-category-id').val(categoryId);
                        $('#edit-mc-name').val(categoryName);
                        if (categoryDescription != null){
                            window.tinymce.activeEditor.setContent(categoryDescription, {format: 'raw'});
                        }

                        $('#main-category-edit-modal').modal({
                            backdrop: 'static',
                            show: true
                        });
                    }else{
                        window.showNotification(status, message);
                    }
                }
            );

        });
    };

    let initMainCategorySaveConfirmButton = function(){
        $('#main-category-save-btn').on('click', function () {
            $('#main-category-edit-form').submit();
        });
    };

    let initMainCategoryEditTinyMCEEditor = function () {
        tinymce.init({
            selector: "textarea#edit-mc-description",
            plugins: "link",
            toolbar: ["undo redo | styleselect | bold italic underline",
                'alignleft aligncenter alignright alignjustify | removeformat'],
            resize: false,
            height: 350,
            content_css: '/css/tinymce.css',
        });
    };

    let initMainCategoryCreateTinyMCEEditor = function () {
        tinymce.init({
            selector: "textarea#create-mc-description",
            plugins: "link",
            toolbar: ["undo redo | styleselect | bold italic underline",
                'alignleft aligncenter alignright alignjustify | removeformat'],
            resize: false,
            height: 350,
            content_css: '/css/tinymce.css',
        });
    };

    let initMainCategoryCreateFormValidation = function () {
        let form = $('#main-category-create-form');

        form.validate({
            rules: {
                name: {
                    required: true,
                    maxlength: 40,
                    minlength: 5
                },
            },

            submitHandler: function () {
                window.tinymce.triggerSave();

                let data = form.serializeArray();

                $('#main-category-create-modal').modal('hide');

                window.ajaxPostRequest(
                    '/ajax/category',
                    data,
                    function (data) {
                        let status = data['status'];
                        let message = data['message'];
                        window.showNotification(status, message);
                        if (status === 'success'){
                            form.trigger('reset');
                        }
                    }
                );
            }
        });
    };

    let initMainCategoryCreateConfirmButton = function(){
        $('#main-category-create-btn').on('click', function () {
            $('#main-category-create-form').submit();
        });
    };

    let initMainCategoryDeleteConfirmButton = function(){
        $('#main-category-delete-btn').on('click', function () {
            $('#main-category-delete-modal').modal('hide');
            let mainCategoryId = $('#mc-del-id').val();

            window.ajaxDeleteRequest(
                '/ajax/category/' + mainCategoryId,
                function (data) {
                    let status = data['status'];
                    let message = data['message'];
                    window.showNotification(status, message);
                }
            );
        });
    };

    let initMainCategoryMoveAndDeleteConfirmButton = function(){
        $('#main-category-move-and-delete-btn').on('click', function () {
            $('#main-category-delete-modal').modal('hide');
            let mainCategoryId = $('#mc-del-id').val();
            let targetCategoryId = $('#new_category_id').val();

            window.ajaxGetRequest(
                '/ajax/category/migrate/' + mainCategoryId + "/" + targetCategoryId,
                function (data) {
                    let status = data['status'];
                    let message = data['message'];
                    window.showNotification(status, message);
                }
            );

        });
    };

    let initMainCategoryDeleteButton = function(){
        $('.mc-delete-select').on('click', function (event) {
            event.preventDefault();
            let mainCategoryId = $(this).attr('data-item-id');
            let mainCategoryName = $(this).attr('data-item-name');

            $('#mc-del-id').val(mainCategoryId);
            $('#main-category-name').text(mainCategoryName);
            $("#new_category_id option[value='"+ mainCategoryId +"']").remove(); // this will remove main categories each consecutive runs. Page needs to be refreshed.
            $('#main-category-delete-modal').modal('show');
        });
    };

    let initSubcategoryCreateTinyMCEEditor = function () {
        tinymce.init({
            selector: "textarea#create-sc-description",
            plugins: "link",
            toolbar: ["undo redo | styleselect | bold italic underline",
                'alignleft aligncenter alignright alignjustify | removeformat'],
            resize: false,
            height: 350,
            content_css: '/css/tinymce.css',
        });
    };

    let initSubcategoryCreateFormValidation = function () {
        let form = $('#sub-category-create-form');

        form.validate({
            rules: {
                name: {
                    required: true,
                    maxlength: 40,
                    minlength: 5
                },
                category_id:{
                    required: true
                }
            },
            errorPlacement: function(error, e) {
                e.parents('.form-group').append(error);
            },
            submitHandler: function () {
                window.tinymce.triggerSave();

                let data = form.serializeArray();

                $('#sub-category-create-modal').modal('hide');

                window.ajaxPostRequest(
                    '/ajax/subcategory',
                    data,
                    function (data) {
                        let status = data['status'];
                        let message = data['message'];
                        window.showNotification(status, message);
                        if (status === 'success'){
                            form.trigger('reset');
                        }
                    }
                );
            }
        });
    };

    let initSubcategoryCreateConfirmButton = function(){
        $('#sub-category-create-btn').on('click', function () {
            $('#sub-category-create-form').submit();
        });
    };


    return {
        init: function() {
            initComponents();

            initMainCategoryEditButton();
            initMainCategorySaveConfirmButton();
            initMainCategoryEditTinyMCEEditor();
            initMainCategoryEditFormValidation();

            initMainCategoryCreateTinyMCEEditor();
            initMainCategoryCreateFormValidation();
            initMainCategoryCreateConfirmButton();

            initSubcategoryCreateTinyMCEEditor();
            initSubcategoryCreateFormValidation();
            initSubcategoryCreateConfirmButton();

            initMainCategoryDeleteButton();
            initMainCategoryDeleteConfirmButton();
            initMainCategoryMoveAndDeleteConfirmButton();
        },
    };

}();

jQuery(document).ready(function() {
    Categories.init();
});