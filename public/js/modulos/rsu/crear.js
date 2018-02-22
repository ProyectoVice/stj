var CicloCreate = function () {

    //== Private functions
    var app = function () {
        // minimum setup
        $('#m_datepicker_year').datepicker({
            autoclose: true,
            format: " yyyy",
            viewMode: "years",
            minViewMode: "years",
            startDate: '1995',
            templates: {
                leftArrow: '<i class="la la-angle-left"></i>',
                rightArrow: '<i class="la la-angle-right"></i>'
            },
            onSelect: function(dateStr) {
                $('#m_form_ciclo').validate().element(this);
            }
        });

        $('#m_datepicker_dateini').datepicker({
            todayHighlight: true,
            language: 'es',
            autoclose: true,
            minDate: new Date(default_date),
            templates: {
                leftArrow: '<i class="la la-angle-left"></i>',
                rightArrow: '<i class="la la-angle-right"></i>'
            }
        }).on('changeDate', function (e) {
            $('#m_datepicker_datefin').datepicker('setStartDate', e.date);
        });
        $('#m_datepicker_dateini').on('changed.bs.select', function() {
            validator.element($(this));
        });

        $('#m_datepicker_datefin').datepicker({
            todayHighlight: true,
            language: 'es',
            autoclose: true,
            onSelect: function(){
                $('#m_datepicker_dateini').datepicker('option', 'minDate', $("#m_datepicker_datefin").datepicker("getDate"));
            },
            templates: {
                leftArrow: '<i class="la la-angle-left"></i>',
                rightArrow: '<i class="la la-angle-right"></i>'
            }
        }).on('changeDate', function (e) {
            $('#m_datepicker_dateini').datepicker('setEndDate', e.date);
        });
        $('#m_datepicker_dateini').on('changed.bs.select', function() {
            validator.element($(this));
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


    return {
        // public functions
        init: function() {
            initValidation();
            app();
            optionButtons();
        }
    };
}();

jQuery(document).ready(function() {
    CicloCreate.init();
});