$(document).ready(function() {
    $("#form").submit(function() {
        let form_data = $(this).serialize();
        let formNm = $('#' + formID);
        $.ajax({
            type: "POST",
            url: "contact.php",
            data: form_data.serialize(),
            success: swal({
                title: "Спасибо за заявку!",
                type: "success",
                showConfirmButton: false,
                timer: 2000
            });
        });
        $(this).find('input,textarea').prop('disabled', true);
        event.preventDefault();
    });
});
