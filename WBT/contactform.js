jQuery(document).ready(function() {
    jQuery("#form").submit(function() {
        let form_data = jQuery(this).serialize();
        jQuery.ajax({
            type: "POST",
            url: "contact.php",
            data: form_data,
            success: swal({
                title: "Спасибо за заявку!",
                type: "success",
                showConfirmButton: false,
                timer: 2000
            })
        });
        $(this).find('input,textarea').prop('disabled', true);
        event.preventDefault();
    });
});
