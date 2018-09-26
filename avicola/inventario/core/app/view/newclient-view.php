<div class="row">
	<div class="col-md-12">
	<h1>Nuevo Cliente</h1>
	<br>
		<form class="form-vertical" method="post" id="addproduct" action="index.php?view=addclient" role="form">


  <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">Tipo Identificación</label>
                        <select name="tipoidentificacion" class="form-control selectpicker" required>
                            <option value="1">Cedúla</option>
                            <option value="2">RUC</option>

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">Identificación</label>
                        <input name="identificacion" type="text" class="form-control" maxlength="13" required>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label"> Razon Social o Nombres</label>
                        <input name="nombres" type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">Observacion</label>
                        <textarea name="direccion" cols="30" class="form-control" rows="2"></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Teléfono</label>
                                <input name="telefono" type="text" class="form-control" maxlength="10">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Celular</label>
                                <input name="celular" type="text" class="form-control" maxlength="10">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">Email</label>
                        <input name="email" type="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">Dirección</label>
                        <textarea name="direccion" cols="30" class="form-control" rows="2"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Saldo Inicial</label>
                                <input name="telefono" type="text" class="form-control" maxlength="10">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Nombre Comercial</label>
                                <input name="celular" type="text" class="form-control" maxlength="10">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            



  <p class="alert alert-info">* Campos obligatorios</p>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary">Agregar Cliente</button>
    </div>
  </div>
</form>
	</div>
</div>