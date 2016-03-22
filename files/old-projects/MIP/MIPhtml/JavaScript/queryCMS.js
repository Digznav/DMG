/*$(document).ready(function(){
});*/
function elimina(idAction,newActionValue) {
	var returnValue = confirm("¿Está seguro de eliminar este registro?");
	if (returnValue) { $(idAction).attr("value", newActionValue); };
	return returnValue;
};