window.showNotification = function (result, message){
    window.toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": true,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "9000",
        "extendedTimeOut": "3000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };

    switch (result) {
        case "success":
            window.toastr.success(message);
            break;
        case "error":
            window.toastr.error(message);
            break;
        case "info":
            window.toastr.info(message);
            break;
        case "warning":
            window.toastr.warning(message);
            break;
    }
};

window.ajaxGetRequest = function (url, onSuccess) {
    $.ajax({
        url         : url,
        type        : 'get',
        cache       : false,
        dataType    : 'json',
        success     : onSuccess,
        error: function (jqXHR, exception) {
            if (jqXHR.status === 0) {
                window.showNotification("error", "Ajax get request to server failed. Please make sure server is alive.");
            }else if (jqXHR.status === 404){
                window.showNotification("error", "URL not found [404]. Please make sure url is valid and server is alive.");
            }else if (jqXHR.status === 500){
                window.showNotification("error", "Internal server error. [500]");
            }else if (jqXHR.status === 419){
                window.showNotification("error", "Token check failed. Make sure you are logged in. [419]");
            }else if (exception === 'timeout') {
                window.showNotification("error", "Request time out.");
            }else{
                window.showNotification("error", "Uncaught ajax error occurred.");
            }
        },
    });
};


window.ajaxPostRequest = function (url, postData, onSuccess) {
    $.ajax({
        url         : url,
        type        : 'post',
        data        : postData,
        cache       : false,
        dataType    : 'json',
        success     : onSuccess,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        error: function (jqXHR, exception) {
            if (jqXHR.status === 0) {
                window.showNotification("error", "Ajax get request to server failed. Please make sure server is alive.");
            }else if (jqXHR.status === 404){
                window.showNotification("error", "URL not found [404]. Please make sure url is valid and server is alive.");
            }else if (jqXHR.status === 500){
                window.showNotification("error", "Internal server error. [500]");
            }else if (jqXHR.status === 419){
                window.showNotification("error", "Token check failed. Make sure you are logged in. [419]");
            }else if (exception === 'timeout') {
                window.showNotification("error", "Request time out.");
            }else{
                window.showNotification("error", "Uncaught ajax error occurred.");
            }
        }
    });
};


window.ajaxPutRequest = function (url, postData, onSuccess) {
    $.ajax({
        url         : url,
        type        : 'put',
        data        : postData,
        cache       : false,
        dataType    : 'json',
        success     : onSuccess,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        error: function (jqXHR, exception) {
            if (jqXHR.status === 0) {
                window.showNotification("error", "Ajax get request to server failed. Please make sure server is alive.");
            }else if (jqXHR.status === 404){
                window.showNotification("error", "URL not found [404]. Please make sure url is valid and server is alive.");
            }else if (jqXHR.status === 500){
                window.showNotification("error", "Internal server error. [500]");
            }else if (jqXHR.status === 419){
                window.showNotification("error", "Token check failed. Make sure you are logged in. [419]");
            }else if (exception === 'timeout') {
                window.showNotification("error", "Request time out.");
            }else{
                window.showNotification("error", "Uncaught ajax error occurred.");
            }
        }
    });
};


window.ajaxDeleteRequest = function (url, onSuccess) {
    $.ajax({
        url         : url,
        type        : 'delete',
        cache       : false,
        success     : onSuccess,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        error: function (jqXHR, exception) {
            if (jqXHR.status === 0) {
                window.showNotification("error", "Ajax get request to server failed. Please make sure server is alive.");
            }else if (jqXHR.status === 404){
                window.showNotification("error", "URL not found [404]. Please make sure url is valid and server is alive.");
            }else if (jqXHR.status === 500){
                window.showNotification("error", "Internal server error. [500]");
            }else if (jqXHR.status === 419){
                window.showNotification("error", "Token check failed. Make sure you are logged in. [419]");
            }else if (exception === 'timeout') {
                window.showNotification("error", "Request time out.");
            }else{
                window.showNotification("error", "Uncaught ajax error occurred.");
            }
        }
    });
};