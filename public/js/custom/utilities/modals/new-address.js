"use strict";

var KTModalNewAddress = (function () {
    var modal, form, submitButton;

    return {
        init: function () {
            modal = new bootstrap.Modal(document.querySelector("#kt_modal_new_address"));
            form = document.querySelector("#kt_modal_new_address_form");
            submitButton = document.getElementById("kt_modal_new_address_submit");

            submitButton.addEventListener("click", function (event) {
                event.preventDefault();

                // Display success message
                Swal.fire({
                    text: "Form has been successfully submitted!",
                    icon: "success",
                    buttonsStyling: false,
                    confirmButtonText: "Ok, got it!",
                    customClass: {
                        confirmButton: "btn btn-primary",
                    },
                }).then(function (result) {
                    if (result.isConfirmed) {
                        modal.hide(); // Hide the modal upon confirmation
                    }
                });
            });
        },
    };
})();

KTUtil.onDOMContentLoaded(function () {
    KTModalNewAddress.init();
});
