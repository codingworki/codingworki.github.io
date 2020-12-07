$(document).ready(function () {
    $(".form-element").submit(function () {
        let formID = $(this).attr('id');
        let formNm = $('#' + formID);
        $.ajax({
            type: "POST",
            url: 'contact.php',
            data: formNm.serialize(),
            success: function (data) {
              alert('Спасибо, скоро мы вам позвоним!');
            },
            error: function (error) {
                alert(error);
               
            }
        });
        return false;
    });
});