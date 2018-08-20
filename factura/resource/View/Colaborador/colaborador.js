table = $("div[Listado] table");
selections = [];
op = "colaborador";
url_Local = getURL("_colaborador");

$(function () {
    $("div[Listado] table").bootstrapTable(TablePaginationDefault);
});
function edit(datos) {
    form = "div[Registro] form";
    $(form).data("id", datos.id);
    for (var clave in datos) {
        $(form + " [name='" + clave + "']").val(datos[clave]);
    }
}