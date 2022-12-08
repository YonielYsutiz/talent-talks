$(function() {
    $("#form-login").on("submit", function(e){
        e.preventDefault();

        $.ajax({
            url: $(this).attr('action'),
            method: $(this).attr('method'),
            data: new FormData(this),
            processData: false,
            dataType: 'json',
            contentType: false,
            beforeSend: function() {
                $("#alert-error-login").addClass("hidden")
            },
            success: function(data) {
                if (data.status == 0) {
                    $("#alert-error-login").removeClass("hidden")
                } else {
                    // $('#myModal').modal('hide')
                    $("#close-modal-login").trigger("click");

                    window.localStorage.setItem('user_id', data.user_id);
                    
                    var url = $(location).attr('href');
                    path_modal = url.split("#")
                    if(path_modal.length > 0) {
                        // $(`#${path_modal[1]}`).modal('show');
                        $(`a.${path_modal[1]}`).trigger("click");
                        // 'a[href*="#seccion-45"]'
                    }
                    
                }
            }
        })
    })
})

function goViewVacant(url_vacant) {
    if(window.localStorage.getItem('user_id') == undefined) {
        return $("#show-modal-login").trigger("click");;
    } else {
        window.location.href = url_vacant;
    }
}

function addLocalSession(bool, user_id) {
    if (bool) {
        window.localStorage.setItem('user_id', user_id);
    } else {
        localStorage.removeItem('user_id');
    }
}