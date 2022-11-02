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
                        $(`#${path_modal[1]}`).modal('show');
                    }
                    
                }
            }
        })
    })
})