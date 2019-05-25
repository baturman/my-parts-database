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
                    '<div class="row align-items-center">\n' +
                    '    <div class="col-auto"><img src="{{thumb}}" alt="thumb" /> </div>\n' +
                    '    <div class="col" style="border-right: 1px solid #dddddd">\n' +
                    '        <h6 style="font-weight: bold;" class="no-x-margin no-x-padding">{{name}}</h6>\n' +
                    '        <p style="color: #dadada">{{brand}} - {{model}}</p>'+
                    '        <ul class="categoryItems">\n' +
                    '                <li class="breadcrumb-item font-weight-bolder">{{subcategory.category.name}}</li>\n' +
                    '                <li class="breadcrumb-item font-weight-bolder">{{subcategory.name}}</li>\n' +
                    '        </ul>\n' +
                    '    </div>\n' +
                    '    <div class="col-auto" >' +
                    '       {{amount}} pc(s)' +
                    '    </div>' +
                    '</div>'
                )
            },
            source: bestPictures
        });
    });
});

