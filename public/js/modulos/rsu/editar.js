var CicloEdit = function () {

    //== Private functions
    var app = function () {
        // minimum setup

        $("#m_select_catedra").select2({
            placeholder: "Escriba una letra para comenzar la búsqueda",
            language: "es",
            allowClear: true,
            width: '100%',
            ajax: {
                url: "/admin/tipo_catedra/select",
                dataType: 'json',
                delay: 250,
                data: function(params) {
                    return {
                        q: params.term,
                        page: params.page
                    };
                },
                processResults: function(data, params) {
                    return {
                        results:  $.map(data.data, function (item) {
                            return {
                                text: item.name,
                                id: item.id
                            }
                        })
                    };
                },
                cache: true
            },
            escapeMarkup: function(markup) {
                return markup;
            },
            minimumInputLength: 1
        });
        $("#m_select_catedra").select2("trigger", "select", {
            data: { id: tipo_catedra_id, text: tipo_catedra_name }
        });

        $('.timepicker').timepicker({
            minuteStep: 1,
            showSeconds: false,
            showMeridian: false,
            snapToStep: true
        });
    };

    var initValidation = function () {
        validator = $( "#m_form_ciclo" ).validate({
            // define validation rules
            onkeyup: function(element, event) {
                if (event.which === 9 && this.elementValue(element) === "") {
                    return;
                } else {
                    this.element(element);
                }
            },
            onfocusout: function(element) {
                this.element(element);
            },
            rules: {
                year: {
                    required: true
                },
                number: {
                    required: true,
                    number: true,
                    min: 0,
                    max: 12
                },
                date_ini: {
                    required: true,
                    date: true
                },
                date_fin: {
                    required: true,
                    date: true
                }
            },
            invalidHandler: function(event, validator) {
                var alert = $('#m_form_1_msg');
                alert.removeClass('m--hide').show();
                mApp.scrollTo(alert, -200);
            },
            submitHandler: function (form) {
                form[0].submit();
            }
        });
    };

    var optionButtons =  function (){
        $('#btn-cancel').on('click',function(){
            swal({
                title: '¿Estas seguro?',
                text: "Los datos modificados no serán guardados",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si',
                cancelButtonText: 'No'
            }).then((result) => {
                window.location.href = route('admin.ciclo');
            });
        });
    };

    var schedule = function(){
        $.ajax({
            type: "GET",
            url: "/actividad/schedule/find/"+id_theory,
            success: function (data) {
                $('select[name="day_theory"]').val(data.data.day);
                $('#hour_ini_theory').val(data.data.hour_ini);
                $('#hour_ini_theory').timepicker('setTime', data.data.hour_ini);
                $('#hour_fin_theory').val(data.data.hour_fin);
                $('#hour_fin_theory').timepicker('setTime', data.data.hour_fin);
            },
            error: function (xhr, ajaxOptions, thrownError) {

            }
        });

        $.ajax({
            type: "GET",
            url: "/actividad/schedule/find/"+id_practice,
            success: function (data) {
                $('select[name="day_practice"]').val(data.data.day);
                $('#hour_ini_practice').val(data.data.hour_ini);
                $('#hour_ini_practice').timepicker('setTime', data.data.hour_ini);
                $('#hour_fin_practice').val(data.data.hour_fin);
                $('#hour_fin_practice').timepicker('setTime', data.data.hour_fin);
            },
            error: function (xhr, ajaxOptions, thrownError) {

            }
        });
    };

    return {
        // public functions
        init: function() {
            schedule();
            initValidation();
            app();
            optionButtons();
        }
    };

}();

jQuery(document).ready(function() {
    CicloEdit.init();
});