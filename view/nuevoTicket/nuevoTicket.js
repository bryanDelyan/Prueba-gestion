function init() {
$("#nueva_solicitud").on("submit", function(e){
    guardaryeditar(e);
    
})};


$(document).ready(function() {
    $('#soli').summernote({
        height: 200,
    });
    
});

function guardaryeditar(e){
    e.preventDefault();
    var formData = new FormData($("#nueva_solicitud")[0]);

    $.ajax({ 

        url: "../../controlador/soli.php?op=insertar",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(datos){
            $('#solicitud_titulo').val('');
            $('#soli').summernote('reset');
        }

    });
}

init();