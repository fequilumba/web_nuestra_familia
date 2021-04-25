<div class="modal fade" id="modalFormUsuario" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header headerRegister">
                <h5 class="modal-title" id="titleModal">Nuevo Usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
    
                <form id="formUsuario" name="formUsuario" class="form-horizontal">
                    <input type="hidden" id="idUsuario" name="idUsuario" value="">

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="txtIdentificacion">Cédula (*)</label>
                            <input type="text" class="form-control" id="txtIdentificacion" name="txtIdentificacion">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="txtNombre">Nombres (*)</label>
                            <input type="text" class="form-control valid validText" id="txtNombre" name="txtNombre">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="txtApellido">Apellidos (*)</label>
                            <input type="text" class="form-control valid validText" id="txtApellido" name="txtApellido">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="txtEmail">Email</label>
                            <input type="email" class="form-control valid validEmail" id="txtEmail" name="txtEmail">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="txtTelefono">Teléfono</label>
                            <input type="text" class="form-control valid validNumber" id="txtTelefono" name="txtTelefono">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="txtDireccion">Dirección (*)</label>
                            <input type="direccion" class="form-control valid validDireccion" id="txtDireccion" name="txtDireccion">
                        </div>
                    </div>

                    <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="txtCiudad">Ciudad (*)</label>
                                <input type="ciudad" class="form-control valid validCiudad" id="txtCiudad" name="txtCiudad">
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="fNacimiento">Fecha Nacimiento (*)</label>
                                <input type="date" class="form-control valid validDate" id="fNacimiento" name="fNacimiento">
                            </div>
                            
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="listGenero">Genero (*)</label>
                            <select class="form-control selectpicker" id="listGenero" name="listGenero">
                                <option value="1">Masculino</option>
                                <option value="2">Femenino</option>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="listEstado">Estado (*)</label>
                            <select class="form-control selectpicker" id="listEstado" name="listEstado">
                                <option value="1">Activo</option>
                                <option value="0">Inactivo</option>
                            </select>
                        </div>
                    </div>

                    <!--<div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="listRolid">Rol (*)</label>
                            <select class="form-control" data-live-search="true" id="listRolid" name="listRolid">
                            </select>
                        </div>
                        </div>-->

                    <div class="tile-footer">
                        <button id="btnActionForm" class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i><span id="btnText">Guardar</span></button>&nbsp;&nbsp;&nbsp;
                        <button class="btn btn-danger" type="button" data-dismiss="modal"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cerrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>