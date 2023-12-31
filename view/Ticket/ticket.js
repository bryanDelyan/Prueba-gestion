var tabla;

function init() {

}

$(document).ready(function () {

    tabla = $('#solicitud_data').dataTable({

        "aProcessing": true,
        "aServerSide": true,
        "dom": 'Bfrtip',
        "searching": true,
        lengthChange: false,
        colReorder: true,  // Corrected typo here
        buttons: [
            'copyHtml5', 'csvHtml5', 'excelHtml5', 'pdfHtml5'
        ],
        "ajax": {
            url: '../../controlador/soli.php?op=listar',
            type: "post",
            dataType: "json",
            data: { usuario_id: 1},

            error: function (e) {
                console.log(e.responseText);
            }
        },
        "bDestroy": true,
        "responsive": true,
        "bInfo": true,
        "iDisplayLength": 10,
        "autoWidth": false,
        "language": {
            "sProcessing": "Procesando...",
            "sLengthMenu": "Mostrar _MENU_ registros",
            "sZeroRecords": "No se encontraron resultados",
            "sEmptyTable": "Ningún dato disponible en esta tabla",
            "sInfo": "Mostrando un total de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando un total de 0 registros",
            "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix": "",
            "sSearch": "Buscar:",
            "sUrl": "",
            "sInfoThousands": ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Último",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
        }


    }).DataTable();

});

init();
