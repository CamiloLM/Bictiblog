$(document).ready(function() {
    var id, opcion;
    opcion = 4;
    tablaPosts = $("#tablaPosts").DataTable({
        ajax: {
            url: "bd/crud.php",
            method: "POST",
            data: { opcion: opcion },
            dataSrc: ""
        },
        columns: [
            { data: "id" },
            { data: "titulo" },
            { data: "contenido" },
            { data: "categoria" },
            { data: "fecha_edicion" },
            { data: "imagen" },
            {
                defaultContent:
                    "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btn-sm btnEditar'><i class='material-icons'>edit</i></button><button class='btn btn-danger btn-sm btnBorrar'><i class='material-icons'>delete</i></button></div></div>"
            }
        ],
        language: {
            lengthMenu: "Mostrar _MENU_ registros",
            zeroRecords: "No se encontraron resultados",
            info:
                "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            infoEmpty:
                "Mostrando registros del 0 al 0 de un total de 0 registros",
            infoFiltered: "(filtrado de un total de _MAX_ registros)",
            sSearch: "Buscar:",
            oPaginate: {
                sFirst: "Primero",
                sLast: "Último",
                sNext: "Siguiente",
                sPrevious: "Anterior"
            },
            sProcessing: "Procesando..."
        }
    });
    var fila;
    $("#formPost").submit(function(e) {
        e.preventDefault();
        titulo = $.trim($("#titulo").val());
        contenido = $.trim($("#contenido").val());
        categoria = $.trim($("#categoria").val());
        fecha_edicion = $.trim($("#fecha_edicion").val());
        imagen = $.trim($("#imagen").val());
        $.ajax({
            url: "bd/crud.php",
            type: "POST",
            dataType: "json",
            data: {
                id: id,
                titulo: titulo,
                contenido: contenido,
                categoria: categoria,
                fecha_edicion: fecha_edicion,
                imagen: imagen,
                opcion: opcion
            },
            success: function(data) {
                tablaPosts.ajax.reload(null, false);
            }
        });
        $("#modalCRUD").modal("hide");
    });
    // Evento para crear un nuevo post
    $("#btnNuevo").click(function() {
        opcion = 1;
        id = null;
        $("#formPost").trigger("reset");
        $(".modal-header").css("background-color", "#17a2b8");
        $(".modal-header").css("color", "white");
        $(".modal-title").text("Nuevo Post");
        $("#modalCRUD").modal("show");
    });
    // Evento para editar un post
    $(document).on("click", ".btnEditar", function() {
        opcion = 2;
        fila = $(this).closest("tr");
        id = parseInt(fila.find("td:eq(0)").text());
        titulo = fila.find("td:eq(1)").text();
        contenido = fila.find("td:eq(2)").text();
        categoria = fila.find("td:eq(3)").text();
        fecha_edicion = fila.find("td:eq(4)").text();
        imagen = fila.find("td:eq(5)").text();
        $("#titulo").val(titulo);
        $("#contenido").val(contenido);
        $("#categoria").val(categoria);
        $("#fecha_edicion").val(fecha_edicion);
        $("#imagen").val(imagen);
        $(".modal-header").css("background-color", "#007bff");
        $(".modal-header").css("color", "white");
        $(".modal-title").text("Modificar Post");
        $("#modalCRUD").modal("show");
    });
    // Evento para borrar un post
    $(document).on("click", ".btnBorrar", function() {
        fila = $(this);
        id = parseInt(
            $(this)
                .closest("tr")
                .find("td:eq(0)")
                .text()
        );
        opcion = 3;
        var respuesta = confirm(
            `¿Esta seguro de querer eliminar el registro: ${id}?`
        );
        if (respuesta) {
            $.ajax({
                url: "bd/crud.php",
                type: "POST",
                dataType: "json",
                data: { opcion: opcion, id: id },
                success: function() {
                    tablaPosts
                        .row(fila.parents("tr"))
                        .remove()
                        .draw();
                }
            });
        }
    });
});
