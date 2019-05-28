
let Parts = function() {

    let initComponents = function(){

        $(document).on('change', '.custom-file-input', function (event) {
            $(this).next('.custom-file-label').html(event.target.files[0].name);
        });

        $('#sub_category_id').select2({
            theme: 'bootstrap4',
            placeholder: 'Select..',
        });

        $('#location_id').select2({
            theme: 'bootstrap4',
            placeholder: 'Select..',
        });

        $('#e_sub_category_id').select2({
            theme: 'bootstrap4',
        });

        $('#e_location_id').select2({
            theme: 'bootstrap4',
        });

        window.tinymce.init({
            selector: "textarea#notes",
            plugins: "link",
            toolbar: ["undo redo | styleselect | bold italic underline",
                'alignleft aligncenter alignright alignjustify | removeformat'],
            resize: false,
            height: 600,
            content_css: '/css/tinymce.css',
        });

        window.tinymce.init({
            selector: "textarea#e_notes",
            plugins: "link",
            toolbar: ["undo redo | styleselect | bold italic underline",
                'alignleft aligncenter alignright alignjustify | removeformat'],
            resize: false,
            height: 600,
            content_css: '/css/tinymce.css',
        });

        $('#add-new-part-modal').on('shown.bs.modal', function () {
            $('#name').focus();
        })

    };

    let clearPartPreview = function(){
        let tagsNone = $('#part_tags_none');
        let tags = $('#part_tags');

        let attachmentsNone = $('#part_attachments_none');
        let attachments = $('#part_attachments');

        $('#part_name').html("Not Available");
        $('#part_image').attr("src", "/images/no-image.svg");
        $('#part_description').html("Not Available");
        $('#part_category').html("Not Available");
        $('#part_subcategory').html("Not Available");
        $('#part_stock').html("Not Available");
        $('#part_price').html("Not Available");
        $('#part_location').html("Not Available");
        $('#part_location_image').attr("src", "/images/no-image.svg");

        $('#part_created_at').html("Not Available");
        $('#part_updated_at').html("Not Available");

        tags.removeClass('show-stuff').addClass('hide-stuff');
        tagsNone.removeClass('hide-stuff').addClass('show-stuff');

        attachments.removeClass('show-stuff').addClass('hide-stuff');
        attachmentsNone.removeClass('hide-stuff').addClass('show-stuff');
    };

    let setPartPreview = function(data){
        let tagsNone = $('#part_tags_none');
        let tags = $('#part_tags');

        let attachmentsNone = $('#part_attachments_none');
        let attachments = $('#part_attachments');

        $('#d_id').val(data['id']);

        $('#part_name').html(data['name']);
        $('#d_name').html(data['name']);

        $('#part_image').attr("src", data['image']);
        $('#d_image').attr("src", data['image']);

        $('#part_description').html(data['description']);
        $('#d_description').html(data['description']);

        $('#part_category').html(data['subcategory']['category']['name']);
        $('#d_category').html(data['subcategory']['category']['name']);

        $('#part_subcategory').html(data['subcategory']['name']);
        $('#d_subcategory').html(data['subcategory']['name']);

        $('#part_stock').html(data['stock']);
        $('#d_stock').html(data['stock']);

        $('#part_price').html(data['price']);
        $('#d_price').html(data['price']);

        $('#part_location').html(data['location']['name']);
        $('#d_location').html(data['location']['name']);

        $('#part_url').html('<a href="' + data['url'] + '" target="_blank"' + '>Visit URL</a>');

        $('#part_location_image').attr("src", data['location']['image']);
        $('#part_location_description').html(data['location']['description']);

        $('#part_created_at').html(data['created_at']);
        $('#part_updated_at').html(data['updated_at']);

        let tagsFound = false;
        tags.empty();
        data['tags'].forEach(function(entry) {
            tags.append('<li><h4 class="py-0 my-0 mx-1 my-1" ><span class="badge badge-secondary p-2">'+ entry + '</span></h4></li>');
            tagsFound = true;
        });

        if (tagsFound){
            tags.removeClass('hide-stuff').addClass('show-stuff');
            tagsNone.removeClass('show-stuff').addClass('hide-stuff');
        }

        let attachmentsFound = false;
        attachments.empty();

        data['attachments'].forEach(function(entry) {
            attachments.append('<li><h4 class="py-0 my-0 mx-1 my-1" ><a href="' + entry['file_url']+ '" class="badge badge-secondary p-2">'+ entry['file_name'] + '</a></h4></li>');
            attachmentsFound = true;
        });

        if (attachmentsFound){
            attachments.removeClass('hide-stuff').addClass('show-stuff');
            attachmentsNone.removeClass('show-stuff').addClass('hide-stuff');
        }else{
            attachments.removeClass('show-stuff').addClass('hide-stuff');
            attachmentsNone.removeClass('hide-stuff').addClass('show-stuff');
        }

        $('#edit-part-btn').attr('href', '/parts/' + data['id'] + '/edit');
    };

    let initPartsTable = function () {
        let table = $('#parts_table').DataTable({
            responsive: true,

            ajax: {
                url: "/ajax/part",
                dataSrc: "data"
            },

            buttons: [
                {
                    extend: 'print',
                    filename: "MPD"
                },
                {
                    extend: 'copyHtml5',
                    filename: "MPD"
                },
                {
                    extend: 'excelHtml5',
                    filename: "MPD"
                },
                {
                    extend: 'csvHtml5',
                    filename: "MPD"
                },
                {
                    extend: 'pdfHtml5',
                    filename: "MPD"
                }
            ],

            columns: [
                { data: null, defaultContent: ""},
                { data: "id" },
                { data: "name" },
                { data: "stock" },
                { data: "price" },
                { data: "subcategory.name" },
                { data: "location.name" }
            ],

            columnDefs: [
                {
                    className: 'control', sortable: false, targets: 0
                },
                { targets: 1, title: "Id", responsivePriority: 1 },
                { targets: 2, title: 'Name' , responsivePriority: 2 },
                { targets: 3, title: 'Stock', responsivePriority: 3},
                { targets: 4, title: 'Price', responsivePriority: 4},
                { targets: 5, title: 'Subcategory', responsivePriority: 5},
                { targets: 6, title: 'Location', responsivePriority: 6}
            ],

            order: [[ 0, "asc" ]],
            iDisplayLength: 20,
            lengthMenu : [[20, 40, 60, -1], [20, 40, 60, "All"]],
            select: {
                style: 'single'
            },
        });

        table.on( 'select', function ( e, dt, type, indexes ) {
            if ( type === 'row' ) {
                let data = (table.rows('.selected').data()[0]);
                setPartPreview(data);

                $('#edit-part-btn').prop('disabled', false).removeClass('disabled');
                $('#delete-part-btn').prop('disabled', false);
            }
        });

        table.on( 'deselect', function ( e, dt, type, indexes ) {
            $('#edit-part-btn').prop('disabled', true).addClass('disabled');
            $('#delete-part-btn').prop('disabled', true);
            clearPartPreview();
        } );

        $('#export_print').on('click', function(e) {
            e.preventDefault();
            table.button(0).trigger();
        });

        $('#export_copy').on('click', function(e) {
            e.preventDefault();
            table.button(1).trigger();
        });

        $('#export_excel').on('click', function(e) {
            e.preventDefault();
            table.button(2).trigger();
        });

        $('#export_csv').on('click', function(e) {
            e.preventDefault();
            table.button(3).trigger();
        });

        $('#export_pdf').on('click', function(e) {
            e.preventDefault();
            table.button(4).trigger();
        });
    };

    let initDeletePartConfirmButton = function () {
        $('#delete-part-confirm-btn').on('click', function () {
            let partId = $('#d_id').val();

            $('#delete-part-modal').modal('hide');

            window.ajaxDeleteRequest(
                '/ajax/part/' + partId,
                function (data) {
                    let status = data['status'];
                    let message = data['message'];
                    window.showNotification(status, message);
                    $('#parts_table').DataTable().ajax.reload();
                    clearPartPreview();
                }
            );
        });
    };


    return {
        init: function() {
            initComponents();
            initPartsTable();
            clearPartPreview();

            initDeletePartConfirmButton();

        },
    };

}();

jQuery(document).ready(function() {
    Parts.init();
});