var tableEspecialidades;

document.addEventListener('DOMContentLoaded', function(){

	tableEspecialidades = $('#tableEspecialidades').dataTable( {
		"aProcessing":true,
		"aServerSide":true,
        "language": {
        	"url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
        },
        "ajax":{
            "url": " "+base_url+"/Especialidades/getEspecialidades",
            "dataSrc":""
        },
        "columns":[
            {"data":"idespecialidad"},
            {"data":"nombre"},
            {"data":"estado"},
            {"data":"options"}
        ],
        "resonsieve":"true",
        "bDestroy": true,
        "iDisplayLength": 10,
        "order":[[0,"desc"]]  
    });
});