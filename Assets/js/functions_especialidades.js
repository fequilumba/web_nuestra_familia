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

    var formEspecialidad = document.querySelector("#formEspecialidad");
    formEspecialidad.onsubmit = function(e) {
        e.preventDefault(); // esta línea previene que se recargue el fromulario o la página de este modo no puede enviar los datos por medio de la URL

        var intIdEspecialidad = document.querySelector('#idEspecialidad').value;
        var strNombre = document.querySelector('#txtNombre').value;
        var intEstado = document.querySelector('#listEstado').value; 
             
        if(strNombre == '' || intEstado == '')
        {
            swal("Atención", "Todos los campos son obligatorios." , "error");
            return false;
        }


        var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');  //hacemos un if resumido lo que hace es verificar si estamos en chrome crear un nuevo elemento de XMLHttpRequest de lo contrario si estamos en explorer crea un elemento nuevo de ActiveXObject
        var ajaxUrl = base_url+'/Especialidades/setEspecialidad';    // creamos la variable ajaxUrl la base se dirige a roles y metodo setRol
        var formData = new FormData(formEspecialidad);      // con la variable formData creamos un nuevo objeto por medio de FormData y hacemos referencia a formRol
        request.open("POST",ajaxUrl,true);         //enviamos los datos por medio de ajax y metodo POST
        request.send(formData);                    //enviamos la información por medio de send de la variable formData
        request.onreadystatechange = function(){   //declaramos el request donde estamos detonando la funcion
            if(request.readyState == 4 && request.status == 200){
                
                var objData = JSON.parse(request.responseText);
                if(objData.status)
                {
                    $('#modalFormEspecialidades').modal("hide");
                    formEspecialidad.reset();
                    swal("Especialidades", objData.msg ,"success");
                    tableEspecialidades.api().ajax.reload(function(){ 
                        //fntEditEspecialidad();
                        //fntDelEspecialidad();
                    });
                }else{
                    swal("Error", objData.msg , "error");
                }              
            } 
        }
    }
});

function openModal(){

    document.querySelector('#idEspecialidad').value =""; 
    document.querySelector('.modal-header').classList.replace("headerUpdate", "headerRegister"); //Nos dirigimos con document.querySelector a la clase modal-header y con classList.replace estamos reemplazando la clase headerUpdate por la clase headerRegister
    document.querySelector('#btnActionForm').classList.replace("btn-info", "btn-primary"); //estamos cambiando la clase de btn-info a btn-primary
    document.querySelector('#btnText').innerHTML ="Guardar"; //Aqui cambiamos el texto del btn a Guardar
    document.querySelector('#titleModal').innerHTML = "Nueva Especialidad"; //Aqui nos referimos al titulo y con innerHTML estamos colocando Nuevo Rol
    document.querySelector("#formEspecialidad").reset(); //En esta línea reseteamos el formulario con .reset limpiando todos los campos 

    $('#modalFormEspecialidades').modal('show');
}