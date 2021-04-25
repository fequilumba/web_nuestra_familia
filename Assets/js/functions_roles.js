var tableRoles;

document.addEventListener('DOMContentLoaded', function(){

	tableRoles = $('#tableRoles').dataTable( {
		"aProcessing":true,
		"aServerSide":true,
        "language": {
        	"url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
        },
        "ajax":{
            "url": " "+base_url+"/Roles/getRoles",
            "dataSrc":""
        },
        "columns":[
            {"data":"idrol"},
            {"data":"nombre"},
            {"data":"options"}
        ],
        "resonsieve":"true",
        "bDestroy": true,
        "iDisplayLength": 10,
        "order":[[0,"desc"]]  
    });

    //NUEVO ROL, utilizamos ajax puro hay que evitar utilizar jquery ya que este sirve unicamente para nuestro dataTable
    var formRol = document.querySelector("#formRol");
    formRol.onsubmit = function(e) {
        e.preventDefault(); // esta línea previene que se recargue el fromulario o la página de este modo no puede enviar los datos por medio de la URL

        var intIdRol = document.querySelector('#idRol').value;
        var strNombre = document.querySelector('#txtNombre').value;
             
        if(strNombre == '')
        {
            swal("Atención", "Todos los campos son obligatorios." , "error");
            return false;
        }


        var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');  //hacemos un if resumido lo que hace es verificar si estamos en chrome crear un nuevo elemento de XMLHttpRequest de lo contrario si estamos en explorer crea un elemento nuevo de ActiveXObject
        var ajaxUrl = base_url+'/Roles/setRol';    // creamos la variable ajaxUrl la base se dirige a roles y metodo setRol
        var formData = new FormData(formRol);      // con la variable formData creamos un nuevo objeto por medio de FormData y hacemos referencia a formRol
        request.open("POST",ajaxUrl,true);         //enviamos los datos por medio de ajax y metodo POST
        request.send(formData);                    //enviamos la información por medio de send de la variable formData
        request.onreadystatechange = function(){   //declaramos el request donde estamos detonando la funcion
            if(request.readyState == 4 && request.status == 200){
                
                var objData = JSON.parse(request.responseText);
                if(objData.status)
                {
                    $('#modalFormRol').modal("hide");
                    formRol.reset();
                    swal("Roles de usuario", objData.msg ,"success");
                    tableRoles.api().ajax.reload(function(){ 
                        fntEditRol();
                        fntDelRol();
                    });
                }else{
                    swal("Error", objData.msg , "error");
                }              
            } 
        }
    }
});

$('#tableRoles').DataTable();

function openModal(){

    document.querySelector('#idRol').value =""; 
    document.querySelector('.modal-header').classList.replace("headerUpdate", "headerRegister"); //Nos dirigimos con document.querySelector a la clase modal-header y con classList.replace estamos reemplazando la clase headerUpdate por la clase headerRegister
    document.querySelector('#btnActionForm').classList.replace("btn-info", "btn-primary"); //estamos cambiando la clase de btn-info a btn-primary
    document.querySelector('#btnText').innerHTML ="Guardar"; //Aqui cambiamos el texto del btn a Guardar
    document.querySelector('#titleModal').innerHTML = "Nuevo Rol"; //Aqui nos referimos al titulo y con innerHTML estamos colocando Nuevo Rol
    document.querySelector("#formRol").reset(); //En esta línea reseteamos el formulario con .reset limpiando todos los campos 

    $('#modalFormRol').modal('show');
}

window.addEventListener('load', function() {  //Esta línea va agregar el evento load cuando cargue todo el documento y va a ejecutar la función
    fntEditRol(); //Y en esta funcion tenemos el llamado a la función fntEditRol
    fntDelRol();
}, false);

//Esta funcio cuando se ejecute recorre todos los elementos que tengan la calse btnEditRol y va asignar el evento click
function fntEditRol(){
    var btnEditRol = document.querySelectorAll(".btnEditRol");
    btnEditRol.forEach(function(btnEditRol) {
        btnEditRol.addEventListener('click', function(){
            
            document.querySelector('#titleModal').innerHTML ="Actualizar Rol"; // Esta línea cambia el título del modal Nuevo rol a Actualizar Rol
            document.querySelector('.modal-header').classList.replace("headerRegister", "headerUpdate"); //Nos dirigimos con document.querySelector a la clase modal-header y con classList.replace estamos reemplazando la clase headerRegister por la clase headerUpdate
            document.querySelector('#btnActionForm').classList.replace("btn-primary", "btn-info"); //estamos cambiando la clase de btn-primary a btn-info
            document.querySelector('#btnText').innerHTML ="Actualizar"; //Aqui cambiamos el texto del btn a Actualizar

            var idrol = this.getAttribute("rl");
            var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
            var ajaxUrl = base_url+'/Roles/getRol/'+idrol;
            request.open("GET",ajaxUrl ,true);
            request.send();

            request.onreadystatechange = function(){
                if(request.readyState == 4 && request.status == 200){
                    
                    var objData = JSON.parse(request.responseText); //Esta respuesta la convertimos en un objeto el fromato json que estamos recibiendo del ajax
                    // Problemas
                    if(objData.status)
                    {
                        document.querySelector("#idRol").value = objData.data.idrol;
                        document.querySelector("#txtNombre").value = objData.data.nombre;
                        
                        $('#modalFormRol').modal('show');
                    }else{
                        swal("Error", objData.msg , "error");
                    }

                }   
            }     
        });
    });
}

// Script Funcion eliminar Rol
function fntDelRol(){
    var btnDelRol = document.querySelectorAll(".btnDelRol");
    btnDelRol.forEach(function(btnDelRol) {
        btnDelRol.addEventListener('click', function(){
            var idrol = this.getAttribute("rl");

           swal({
                title: "Eliminar Rol",
                text: "¿Realmente quiere eliminar el Rol?",
                type: "warning",
                showCancelButton: true,
                confirmButtonText: "Si, eliminar!",
                cancelButtonText: "No, cancelar!",
                closeOnConfirm: false,
                closeOnCancel: true
                }, function(isConfirm) {
                
                if (isConfirm) 
                {
                    var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                    var ajaxUrl = base_url+'/Roles/delRol/';
                    var strData = "idrol="+idrol;
                    request.open("POST",ajaxUrl,true);
                    request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    request.send(strData);
                    request.onreadystatechange = function(){
                        if(request.readyState == 4 && request.status == 200){
                            var objData = JSON.parse(request.responseText);
                            if(objData.status)
                            {
                                swal("Eliminar!", objData.msg , "success");
                                tableRoles.api().ajax.reload(function(){
                                    fntEditRol();
                                    fntDelRol();
                                });
                            }else{
                                swal("Atención!", objData.msg , "error");
                            }
                        }
                    }
                }

            });

        });
    });
}
