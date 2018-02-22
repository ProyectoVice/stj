var BootstrapSelect = function () {

    var demos = function () {

        var datatable = $('.m_datatable').mDatatable({
            data: {
                type: 'remote',
                source: {
                    read: {
                        method: 'GET',
                        url: '/roles/student/get',
                        map: function(raw) {
                            var dataSet = raw;
                            if (typeof raw.data !== 'undefined') {
                                dataSet = raw.data;
                            }
                            return dataSet;
                        }
                    }
                },
                pageSize: 10,
                serverPaging: true,
                serverFiltering: true,
                serverSorting: false,
            },
            layout: {
                theme: 'default',
                class: '',
                scroll: true,
                footer: false,
                smoothScroll: {
                    scrollbarShown: true
                },
            },
            sortable: false,
            pagination: true,
            toolbar: {
                items: {
                    pagination: {
                        pageSizeSelect: [10, 20, 30, 50, 100]
                    }
                }
            },
            columns: [
                {
                    field: 'id',
                    title: '#',
                    width: 40,
                    selector: false,
                    textAlign: 'center'
                }, {
                    field: 'fullname',
                    title: 'Nombres y Apellido',
                    textAlign: 'center'
                }, {
                    field: 'code',
                    title: 'Código',
                    textAlign: 'center'
                }, {
                    field: 'escuela_sede',
                    title: 'Escuela - Sede',
                    textAlign: 'center'
                }, {
                    field: 'period',
                    title: 'Ciclo',
                    textAlign: 'center'
                }, {
                    field: 'Acciones',
                    width: 110,
                    title: 'Acciones',
                    sortable: false,
                    overflow: 'visible',
                    template: function (row) {
                        var dropup = (row.getDatatable().getPageSize() - row.getIndex()) <= 4 ? 'dropup' : '';
                        return '\
                        <a href="/roles/student/edit/'+row.id+'" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Editar">\
                            <i class="la la-edit"></i>\
                        </a>\
                        <a href="#" data-id="'+row.id+'" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" title="Eliminar">\
                            <i class="la la-trash"></i>\
                        </a>\
                    ';
                    }
                }
            ],
            translate: {
                records: {
                    processing: 'Espere por favor...',
                    noRecords: 'No existen registros'
                },
                toolbar: {
                    pagination: {
                        items: {
                            default: {
                                first: 'Primero',
                                prev: 'Anterior',
                                next: 'Siguiente',
                                last: 'Ultimo',
                                more: 'Más',
                                input: 'Número de página',
                                select: 'Seleccione la cantidad de registros'
                            },
                            info: 'Mostrar {{start}} - {{end}} de {{total}} registros'
                        }
                    }
                }
            }
        });

        $('.m_datatable').on('click','.m-btn--hover-danger',function(){
            var id = $(this).data('id');

            swal({
                title: '¿Estas seguro?',
                text: "El registro será eliminado y no podrá recuperarse.",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si',
                cancelButtonText: 'No'
            }).then((result) => {
                $.ajax({
                url: '/roles/student/delete/'+id,
                type: 'DELETE',
                success: function(data) {
                    swal("Listo!", 'El registro se ha eliminado correctamente.', "success");
                    datatable.reload();
                },
                error: function(request, status, error){
                    swal("Error", 'Ha ocurrido un error al intentar registrar la información.', "error");
                },
            });
        });
        });

        var query = datatable.getDataSourceQuery();

    };
    return {
        init: function() {
            demos();
        }
    };
}();

jQuery(document).ready(function() {
    BootstrapSelect.init();
});