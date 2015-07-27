<?php

if ( isset($_POST['nombre']) ){

	$categoria 	   = mysql_real_escape_string($_POST['categoria']);
	$fecha_emision = mysql_real_escape_string($_POST['fecha_emision']);
	$vencimiento   = mysql_real_escape_string($_POST['vencimiento']);
	$inicio_vig    = mysql_real_escape_string($_POST['inicio_vig']);
	$moneda        = mysql_real_escape_string($_POST['moneda']);
	$aseguradora   = mysql_real_escape_string($_POST['aseguradora']);
	$ramo          = mysql_real_escape_string($_POST['ramo']);
	$agente        = mysql_real_escape_string($_POST['agente']);
	$cliente       = mysql_real_escape_string($_POST['cliente']);
	$asegurado     = mysql_real_escape_string($_POST['asegurado']);
	$prima_neta    = mysql_real_escape_string($_POST['prima_neta']);
	$recargo       = mysql_real_escape_string($_POST['recargo']);
	$der_poliza    = mysql_real_escape_string($_POST['der_poliza']);
	$iva           = mysql_real_escape_string($_POST['iva']);
	$primatotal    = mysql_real_escape_string($_POST['primatotal']);
	$form_total    = mysql_real_escape_string($_POST['form_total']);
	$prim_pago     = mysql_real_escape_string($_POST['prim_pago']);
	$pago_sub      = mysql_real_escape_string($_POST['pago_sub']);
	$infoadicional = mysql_real_escape_string($_POST['infoadicional']);

	

	if ( mysql_query("INSERT INTO clientes SET fecha='".date("Y-m-d")."',categoria='".$categoria."',nombre='".$nombre."',direccion='".$direccion."',telefono='".$telefono."',contacto='".$contacto."',email='".$correo."',rfc='".$rfc."'") ){
		$errorMsg = '<div class="alert alert-success">
				<i class="fa fa-check"></i> Cliente agregado correctamente.
			</div>';
	} else {
		$errorMsg = '<div class="alert alert-danger">
			<i class="fa fa-times"></i> Error, intenta nuevamente.
		</div>';
	}

}

?>
		<section class="panel panel-default">
			<header class="panel-heading">
				<div class="pull-right">
					<a href="admin.php?m=polizas&id=" class="return"><i class="fa fa-mail-reply"></i> Regresar</a>
				</div>
				<i class="fa fa-plus icon"></i> Renovacion de polizas
			</header>
			<div class="panel-body">
				<form class="bs-example form-horizontal" action="" method="post">
					<?php echo $errorMsg; ?>

					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
							
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label class="col-lg-7 control-label">Fecha emision</label>
								<div class="col-lg-5"><input type="text" name="fecha_emision" class="form-control" placeholder=""></div>
							</div>
						</div>	
						<div class="col-md-4">
							<div class="form-group">
								<label class="col-lg-7 control-label">Vencimiento</label>
								<div class="col-lg-5"><input type="text" name="vencimiento" class="form-control" placeholder=""></div>
							</div>
						</div>							
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-lg-3 control-label">No. P&oacute;liza:</label>
								<div class="col-lg-9"><input type="text" name="poliza" class="form-control" placeholder=""></div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-lg-2 control-label">Nuevo No. poliza:</label>
								<div class="col-lg-10"><input type="text" name="ramo" class="form-control" placeholder=""></div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-lg-3 control-label">Inicio de vig.</label>
								<div class="col-lg-9"><input type="text" name="vigencia" class="form-control" placeholder=""></div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-lg-2 control-label">Agente</label>
								<div class="col-lg-10"><input type="text" name="agente" class="form-control" placeholder=""></div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-lg-3 control-label">Moneda</label>
								<div class="col-lg-9"><input type="text" name="moneda" class="form-control" placeholder=""></div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-lg-2 control-label">Cliente</label>
								<div class="col-lg-10"><input type="text" name="cliente" class="form-control" placeholder=""></div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-lg-3 control-label">Aseguradora</label>
								<div class="col-lg-9"><input type="text" name="aseguradora" class="form-control" placeholder=""></div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-lg-2 control-label">Asegurado</label>
								<div class="col-lg-10"><input type="text" name="asegurado" class="form-control" placeholder=""></div>
							</div>
						</div>
					</div>
					<div class="row">

						<div class="col-md-4">
							<div class="form-group">
								<label class="col-lg-6 control-label">Prima Neta:</label>
								<div class="col-lg-6"><input type="text" name="prima_neta" class="form-control" placeholder=""></div>
							</div>
							
							<div class="form-group">
								<label class="col-lg-6 control-label">Recargo</label>
								<div class="col-lg-6"><input type="text" name="recargo" class="form-control" placeholder=""></div>
							</div>

							<div class="form-group">
								<label class="col-lg-6 control-label">Derecho de Poliza:</label>
								<div class="col-lg-6"><input type="text" name="derpoliza" class="form-control" placeholder=""></div>
							</div>
							<div class="form-group">
								<label class="col-lg-6 control-label">I.V.A:</label>
								<div class="col-lg-6"><input type="text" name="iva" class="form-control" placeholder=""></div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group">
								<label class="col-lg-6 control-label">Prima Total:</label>
								<div class="col-lg-6"><input type="text" name="primatotal" class="form-control" placeholder=""></div>
							</div>

							<div class="form-group">
								<label class="col-lg-6 control-label">Forma de pago:</label>
								<div class="col-lg-6"><input type="text" name="forpago" class="form-control" placeholder=""></div>
							</div>

							<div class="form-group">
								<label class="col-lg-6 control-label">Primer pago:</label>
								<div class="col-lg-6"><input type="text" name="primpago" class="form-control" placeholder=""></div>
							</div>
							<div class="form-group">
								<label class="col-lg-6 control-label">Pago subsecuente</label>
								<div class="col-lg-6"><input type="text" name="pagosub" class="form-control" placeholder=""></div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group" style="text-right">
								<label class="col-lg-6 control-label">informacion adicional</label>
								<div class="col-md-6"></div>
							</div>
							<div>
								<div class="col-lg-12">
									<textarea name="infoadicional" class="form-control"  style="width:280px;height:140px;"></textarea>
								</div>
							</div>
						</div>

					</div>
		
			
					<div class="line line-dashed line-lg pull-in"></div>
					<div class="form-group text-right">
						<div class="col-lg-12"> 
							<button type="submit" class="btn btn-sm btn-success"><i class="fa fa-check icon"></i> Agregar</button>
							<a href="admin.php?m=clientes" class="btn btn-sm btn-danger"><i class="fa fa-times icon"></i> Cancelar</a>
						</div>
					</div>
				</form>
			</div>
		</section>