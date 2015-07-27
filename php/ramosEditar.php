<?php
$id = mysql_real_escape_string($_GET['id']);

if ( isset($_POST['nombre']) ){

	$num_cliente 	= mysql_real_escape_string($_POST['aseguradora']);
	$nombre 		= mysql_real_escape_string($_POST['num_ramo']);
	$rfc 			= mysql_real_escape_string($_POST['comision']);
	$direccion  	= mysql_real_escape_string($_POST['descripcion']);
	$correo  		= mysql_real_escape_string($_POST['adicional']);


	if ( mysql_query("UPDATE ramos SET aseguradora='".$aseguradora."',num_ramo='".$num_ramo."',comision='".$comision."',descripcion='".$descripcion."',adicional='".$adicional."'") ){
		$errorMsg = '<div class="alert alert-success">
				<i class="fa fa-check"></i> Ramo editado correctamente.
			</div>';
	} else {
		$errorMsg = '<div class="alert alert-danger">
			<i class="fa fa-times"></i> Error, intenta nuevamente.
		</div>';
	}

}

$data = mysql_fetch_object(mysql_query("SELECT * FROM ramos WHERE id='".$id."' LIMIT 1"));

?>
		<section class="panel panel-default">
			<header class="panel-heading">
				<div class="pull-right">
					<a href="" class="return"><i class="fa fa-mail-reply"></i> Regresar</a>
				</div>
				<i class="fa fa-plus icon"></i> Editar Ramo
			</header>
			<div class="panel-body">
				<form class="bs-example form-horizontal" action="" method="post">
					<?php echo $errorMsg; ?>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-lg-2 control-label">Aseguradora: </label>
								<div class="col-lg-10"><input type="text" name="aseguradora" value="<?php echo $data->aseguradora; ?>" class="form-control" placeholder=""></div>
							</div>
						</div>	
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-lg-2 control-label">No. Ramo</label>
								<div class="col-lg-4"><input type="text" name="ramo" value="<?php echo $data->ramo; ?>" class="form-control" placeholder=""></div>
								<label class="col-lg-2 control-label">% Comisión</label>
								<div class="col-lg-4"><input type="text" name="comision" value="<?php echo $data->comision; ?>"  class="form-control" placeholder=""></div>
							</div>
						</div>
						<div class="col-md-6">
								<div class="form-group">
									<label class="col-lg-2 control-label">Descripcion del Ramo</label>
									<div class="col-lg-10"><input type="text" name="descripcion" value="<?php echo $data->descripcion; ?>" class="form-control" placeholder=""></div>
								</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-lg-2 control-label">Información Adicional</label>
								<div class="col-lg-10"><textarea type="text" name="adicional" value="<?php echo $data->adicional; ?>" class="form-control" placeholder=""></textarea></div>
							</div>
						</div>
					<div class="line line-dashed line-lg pull-in"></div>
					<div class="form-group text-right">
						<div class="col-lg-12"> 
							<button type="submit" class="btn btn-sm btn-success"><i class="fa fa-check icon"></i> Guardar</button>
							<a href="admin.php?m=ramos" class="btn btn-sm btn-danger"><i class="fa fa-times icon"></i> Cancelar</a>
						</div>
					</div>
				</div>
			</form>
		</section>
