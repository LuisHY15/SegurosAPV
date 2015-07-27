<?php

# folio,poliza,emision,vencimiento,inicio_vig,moneda,aseguradora,ramo,agente,cliente,aseguradora,neto,recargo,derpoliza,iva,total,formapago,anticipo,pago,adicional

$id = mysql_real_escape_string($_GET['id']);

if ( isset($_POST['nombre']) ){

	$folio 		   = mysql_real_escape_string($_POST['folio']);
	$poliza        = mysql_real_escape_string($_POST['poliza']);
	$emision       = mysql_real_escape_string($_POST['emision']);
	$vencimiento   = mysql_real_escape_string($_POST['vencimiento']);
	$inicio_vig    = mysql_real_escape_string($_POST['inicio_vig']);
	$moneda        = mysql_real_escape_string($_POST['moneda']);
	$aseguradora   = mysql_real_escape_string($_POST['aseguradora']);
	$ramo          = mysql_real_escape_string($_POST['ramo']);
	$agente        = mysql_real_escape_string($_POST['agente']);
	$cliente       = mysql_real_escape_string($_POST['cliente']);
	$asegurado     = mysql_real_escape_string($_POST['asegurado']);
	$prima_neta    = mysql_real_escape_string($_POST['neto']);
	$recargo       = mysql_real_escape_string($_POST['recargo']);
	$der_poliza    = mysql_real_escape_string($_POST['derpoliza']);
	$iva           = mysql_real_escape_string($_POST['iva']);
	$primatotal    = mysql_real_escape_string($_POST['total']);
	$form_total    = mysql_real_escape_string($_POST['formapago']);
	$prim_pago     = mysql_real_escape_string($_POST['anticipo']);
	$pago_sub      = mysql_real_escape_string($_POST['pago']);
	$infoadicional = mysql_real_escape_string($_POST['adicional']);

	if ( mysql_query("UPDATE polizas SET fecha='".date("Y-m-d").
		"',folio='".$folio.
		"',poliza='".$poliza.
		"',emision='".$emision.
		"',vencimiento='".$vencimiento.
		"',inicio_vig='".$inicio_vig.
		"',moneda='".$moneda.
		"',aseguradora='".$aseguradora.
		"',ramo='".$ramo.
		"',agente='".$agente.
		"',cliente='".$cliente.
		"',asegurado='".$asegurado.
		"',neto='".$neto.
		"',recargo='".$recargo.
		"',derpoliza='".$derpoliza.
		"',iva='".$iva.
		"',total='".$total.
		"',formapago='".$formapago.
		"',anticipo='".$anticipo.
		"',pago='".$pago.
		"',adicional='".$adicional.
		"'") ){
		$errorMsg = '<div class="alert alert-success">
				<i class="fa fa-check"></i> Poliza editada correctamente.
			</div>';
	} else {
		$errorMsg = '<div class="alert alert-danger">
			<i class="fa fa-times"></i> Error, intenta nuevamente.
		</div>';
	}

}

$data = mysql_fetch_object(mysql_query("SELECT * FROM polizas WHERE id='".$id."' LIMIT 1"));

?>
		<section class="panel panel-default">
			<header class="panel-heading">
				<div class="pull-right">
					<a href="admin.php?m=polizas&id=" class="return"><i class="fa fa-mail-reply"></i> Regresar</a>
				</div>
				<i class="fa fa-plus icon"></i> Agregar Poliza
			</header>
			<div class="panel-body">
				<form class="bs-example form-horizontal" action="" method="post">
					<?php echo $errorMsg; ?>

					<div class="row">
						<div class="col-md-6">
							<div class="col-md-6">
							<div class="form-group">
								<label class="col-lg-4 control-label"># Folio</label>
								<div class="col-lg-8"><input type="text" name="folio" value="<?php echo $data->folio; ?>" class="form-control" placeholder=""></div>
							</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-lg-4 control-label"># Poliza</label>
									<div class="col-lg-8"><input type="text" name="poliza" value="<?php echo $data->poliza; ?>" class="form-control" placeholder=""></div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-lg-3 control-label">Aseguradora</label>
								<div class="col-lg-9">
									<select class="form-control" name"aseguradora" value="<?php echo $data->aseguradora; ?>">
									  <option>aseguradora 1</option>
									  <option>aseguradora 2</option>
									</select>
								</div>
							</div>
						</div>	
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-lg-4 control-label">Fecha Emisión</label>
									<div class="col-lg-8"><input type="date" name="emision" value="<?php echo $data->emision; ?>" class="form-control" placeholder=""></div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-lg-4 control-label">Vencimiento</label>
									<div class="col-lg-8"><input type="date" name="vencimiento" value="<?php echo $data->vencimiento; ?>" class="form-control" placeholder=""></div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-lg-3 control-label">Ramo</label>
								<div class="col-lg-9">
									<select class="form-control" name="ramo" value="<?php echo $data->ramo; ?>">
									  <option>ramo 1</option>
									  <option>ramo 2</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-lg-4 control-label">Inicio vig.</label>
									<div class="col-lg-8"><input type="date" name="vigencia" value="<?php echo $data->vigencia; ?>" class="form-control" placeholder=""></div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-lg-4 control-label">Moneda</label>
									<div class="col-lg-8">
									<select class="form-control" name="moneda" value="<?php echo $data->moneda; ?>">
									  <option>Pesos</option>
									  <option>Dolares</option>
									</select>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-lg-3 control-label">Agente</label>
								<div class="col-lg-9">
									<select class="form-control" name="agente" value="<?php echo $data->agente; ?>">
									  <option>agente 1</option>
									  <option>agente 2</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="col-md-4">
								<div class="form-group">
									<label class="col-lg-6 control-label">Cliente</label>
									<div class="col-lg-6">
										<input type="text" name="cliente" value="<?php echo $data->cliente; ?>" class="form-control" placeholder="">
									</div>
								</div>
							</div>
							<div class="col-lg-8">
								<input type="text" name="agente" class="form-control" placeholder="">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-lg-3 control-label">Asegurado</label>
								<div class="col-lg-9"><input type="text" name="asegurado" value="<?php echo $data->asegurado; ?>" class="form-control" placeholder=""></div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-lg-6 control-label">Prima Neta:</label>
									<div class="col-lg-6"><input type="text" name="neto" value="<?php echo $neto->neto; ?>" class="form-control" placeholder=""></div>
								</div>
								
								<div class="form-group">
									<label class="col-lg-6 control-label">Recargo</label>
									<div class="col-lg-6"><input type="text" name="recargo" value="<?php echo $data->recargo; ?>" class="form-control" placeholder=""></div>
								</div>

								<div class="form-group">
									<label class="col-lg-6 control-label">Derecho de Poliza:</label>
									<div class="col-lg-6"><input type="text" name="derpoliza" value="<?php echo $data->derpoliza; ?>" class="form-control" placeholder=""></div>
								</div>
								<div class="form-group">
									<label class="col-lg-6 control-label">I.V.A:</label>
									<div class="col-lg-6"><input type="text" name="iva" value="<?php echo $data->iva; ?>" value="<?php echo $data->iva; ?>" class="form-control" placeholder=""></div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-lg-6 control-label">Prima Total:</label>
									<div class="col-lg-6"><input type="text" name="primatotal" value="<?php echo $data->primatotal; ?>" class="form-control" placeholder=""></div>
								</div>

								<div class="form-group">
									<label class="col-lg-6 control-label">Forma de pago:</label>
									<div class="col-lg-6">
										<select class="form-control" name="formapago" value="<?php echo $data->formapago; ?>">
										  <option>Efectivo</option>
										  <option>Cheque</option>
										  <option>Transeferencia</option>
										</select>
									</div>
								</div>

								<div class="form-group">
									<label class="col-lg-6 control-label">Primer pago:</label>
									<div class="col-lg-6"><input type="text" name="anticipo" value="<?php echo $data->anticipo; ?>" class="form-control" placeholder=""></div>
								</div>
								<div class="form-group">
									<label class="col-lg-6 control-label">Pago subsecuente</label>
									<div class="col-lg-6"><input type="text" name="pago" value="<?php echo $data->pago; ?>" class="form-control" placeholder=""></div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group" style="">
								<label class="col-md-3 control-label">Información Adicional</label>
								<div class="col-md-9"><textarea name="adicional" value="<?php echo $data->adicional; ?>" class="form-control"  style="height:85px;"></textarea></div>
							</div>
						</div>
					</div>
		
			
					<div class="line line-dashed line-lg pull-in"></div>
					<div class="form-group text-right">
						<div class="col-lg-12"> 
							<button type="submit" class="btn btn-sm btn-success"><i class="fa fa-check icon"></i> Guardar</button>
							<a href="admin.php?m=polizas" class="btn btn-sm btn-danger"><i class="fa fa-times icon"></i> Cancelar</a>
						</div>
					</div>
				</form>
			</div>
		</section>