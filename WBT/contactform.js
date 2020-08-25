$(document).ready(function () {
    $("#form").submit(function () {
        var formID = $(this).attr('id');
        var formNm = $('#' + formID);
        $.ajax({
            type: "POST",
            url: 'contact.php',
            data: formNm.serialize(),
            success: function (data) {
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
