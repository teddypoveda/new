form de creacion de solicitudes

<form action="{{ url('/solicitude') }}" method="post" enctype="multipart/form-data">
@csrf

<label for="PresupuestoSolicitado">Presupuesto Solicitado</label>
<input type="number" name="PresupuestoSolicitado" id="PresupuestoSolicitado">
<br>

<label for="NotaCredito">Nota credito</label>
<input type="file" name="NotaCredito" id="NotaCredito"> 
<br>

<label for="Soporte">Soporte</label>
<input type="file" name="Soporte" id="Soporte">
<br>

<input type="submit" value="Enviar solicitud" >
<br>


</form>