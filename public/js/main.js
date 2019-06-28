jQuery(document).ready(function () {
    /*
    $('#part_name').keyup(function () {
        let resultObject = $('#partList');
        let query = $(this).val();
        if (query !== ''){
            let token = $('input[name="_token"]').val();
            $.ajax({
                url: '/search',
                method: 'post',
                data: {
                    query: query,
                    _token: token
                },
                success: function (data) {
                    resultObject.fadeIn();
                    resultObject.html(data);
                }
            });
        }
    });
    */

    jQuery(document).ready(function($) {
        var bestPictures = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            remote: {
                url: '/find?q=%QUERY',
                wildcard: '%QUERY'
            }
        });

        $('#remote .typeahead').typeahead(null, {
            name: 'best-pictures',
            display: 'value',
            templates: {
                empty: [
                    '<div class="empty-message">',
                    'Nothing found with given query :(',
                    '</div>'
                ].join('\n'),
                suggestion: Handlebars.compile(
                    '<div class="row align-items-center my-2">\n' +
                    '    <div class="col-md-1"><img src="{{thumb}}" alt="thumb" /> </div>\n' +
                    '    <div class="col-md-10" style="border-right: 1px solid #dddddd">\n' +
                    '        <div class="pl-3">'+
                    '           <h6 style="font-weight: bold;" class="no-x-margin no-x-padding">{{name}}</h6>\n' +
                    '           <p class="font-color-lighter mt-1" ">{{description}}</p>'+
                    '            <ul class="categoryItems mt-1">\n' +
                    '                <li class="breadcrumb-item">{{subcategory.category.name}}</li>\n' +
                    '                <li class="breadcrumb-item">{{subcategory.name}}</li>\n' +
                    '           </ul>\n' +
                    '        </div>\n' +
                    '    </div>\n' +
                    '    <div class="col-md-1" >' +
                    '       {{stock}} pc(s)' +
                    '    </div>' +
                    '</div>'
                )
            },
            source: bestPictures
        });
    });
});

