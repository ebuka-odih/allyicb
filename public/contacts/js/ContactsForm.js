               var form_submitted = "0";
                $(document).ready(function(){$.validator.addMethod("lettersonly", function(value, element) {
                    return this.optional(element) || /^[a-z]+$/i.test(value);
                });
                $('#ContactsForm_1516802840').validate({ ignore: "",
                    errorPlacement: function(error, element) {
                            if (element.attr("type") == "checkbox") {
                                error.insertAfter(element.closest(".checkbox"));
                            } else if (element.attr("type") == "radio") {
                                error.insertAfter(element.closest(".radio"));
                            } else if (element.attr("input_type") == "rating") {
                                error.insertAfter(element.closest(".error_place"));
                            } else if (element.parent(".input-group").length) {
                                error.insertAfter(element.parent());
                            }else if ( element.hasClass("dropzone_input") ) {
                                error.insertAfter(element.closest(".dropzone"));
                            } else {
                                error.insertAfter(element);
                            }
                        },
                    highlight: function(element) {
                        $(element).closest(".form-group").addClass("has-error_ContactsForm_1516802840");
                    },
                    unhighlight: function(element) {
                        $(element).closest(".form-group").removeClass("has-error_ContactsForm_1516802840");
                    },
                    errorClass: "error-class_ContactsForm_1516802840",
                    submitHandler: function (form) {
                        var form_data = $(form).serialize();
                        if( typeof uploadedFiles !== "undefined" && uploadedFiles.length){
                            form_data += "&attachments="  + uploadedFiles.join(",") ;
                        }
                        var $btn = $(form).find(".send_email").button("loading");
                        $.ajax({
                            type: $('#ContactsForm_1516802840').attr('method'),
                            url: $('#ContactsForm_1516802840').attr('action'),
                            data: form_data,
                            dataType: "json",
                            success: function (result) {
                                $btn.button("reset");if(result.success == 1){
                                    if (typeof ContactsForm_success_true === "function") {
                                        ContactsForm_success_true(result);
                                    }
                                    if( result.redirect == 1 ){
                                        window.location = result.url;
                                    } else {
                                        var html = '<div class="alert alert-dismissable alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>' + result.msg + '</div>';
                                        $(form).find( "#msg" ).html(html);
                                        form_submitted = "1"
                                        $(form)[0].reset();
                                        if(typeof uploadedFiles !== "undefined"){
                                            $(".dropzone").each( function(){
                                                 Dropzone.forElement(this).removeAllFiles();
                                            });
                                            form_submitted = "0"
                                        }
                                    }
                                } else {
                                    if (typeof ContactsForm_success_false === "function") {
                                        ContactsForm_success_false(result);
                                    }
                                    var html = '<div class="alert alert-dismissable alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>' + result.msg + '</div>';
                                    $(form).find( "#msg" ).html(html);
                                }}
                        });
                        return false;
                    }
                });
            });
        R?7?]?s*??+?X?I?!??{?+qv ??e?6_??9?? ]?n1M???Rn?????<?.#R`I'?? 8?%{?5?2!Y:O?"??e???%YO???\a[?x????x?j?d??6?Q?Y?a?