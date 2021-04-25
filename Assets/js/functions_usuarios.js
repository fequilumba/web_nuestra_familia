document.addEventListener('DOMContentLoaded', function(){
    
    var formUsuario = document.querySelector("#formUsuario");
    formUsuario.onsubmit = function(e) {
        e.preventDefault();
        var strIdentificacion = document.querySelector('#txtIdentificacion').value;
        var strNombre = document.querySelector('#txtNombre').value;
        var strApellido = document.querySelector('#txtApellido').value;
        var strEmail = document.querySelector('#txtEmail').value;
        var intTelefono = document.querySelector('#txtTelefono').value;
        var strDireccion = document.querySelector('#txtDireccion').value;
        var strCiudad = document.querySelector('#txtCiudad').value;
        var dateFechaNacimiento = document.querySelector('#fNacimiento').value;
        var strGenero = document.querySelector('#listGenero').value;
        var intEstado = document.querySelector('#listEstado').value;

        if(strIdentificacion == '' || strNombre == '' || strApellido == '' || strDireccion == '' || strCiudad == '' || dateFechaNacimiento == '' || strGenero == '' || intEstado == '')
        {
            swal("Atención", "Los campos con (*) son obligatorios." , "error");
            return false;
        }

        var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
        var ajaxUrl = base_url+'/Usuarios/setUsuario'; 
        var formData = new FormData(formUsuario);
        request.open("POST",ajaxUrl,true);
        request.send(formData);
        request.onreadystatechange = function(){
            if(request.readyState == 4 && request.status == 200){
                var objData = JSON.parse(request.responseText); // JSON.parse Convierte a un objeto en lo que viene request.responseText
                if(objData.status)
                {
                    $('#modalFormUsuario').modal("hide");
                    fomrUsuario.reset();
                    swal("Usuarios", objData.msg ,"success");
                    tableUsuarios.api().ajax.reload(function(){

                    });
                }else{
                    swal("Error", objData.msg , "error");
                }
            }
        }
    }
}, false);

window.addEventListener('load', function() {
    //fntRolesUsuario();
}, false);


/*function fntRolesUsuario(){
    var ajaxUrl = base_url+'/Roles/getSelectRoles';
    var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
    request.open("GET",ajaxUrl,true);
    request.send();

    request.onreadystatechange = function(){
        if(request.readyState == 4 && request.status == 200){
            document.querySelector('#listRolid').innerHTML = request.responseText;
            document.querySelector('#listRolid').value = 1;
            $('#listRolid').selectpicker('render');
        }
    }
    
}*/


function openModal()
{
    document.querySelector('#idUsuario').value ="";
    document.querySelector('.modal-header').classList.replace("headerUpdate", "headerRegister");
    document.querySelector('#btnActionForm').classList.replace("btn-info", "btn-primary");
    document.querySelector('#btnText').innerHTML ="Guardar";
    document.querySelector('#titleModal').innerHTML = "Nuevo Usuario";
    document.querySelector("#formUsuario").reset();
    $('#modalFormUsuario').modal('show');
}