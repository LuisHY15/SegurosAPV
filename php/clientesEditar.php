<?php
$id = mysql_real_escape_string($_GET['id']);

if ( isset($_POST['nombre']) ){

	$num_cliente 	= mysql_real_escape_string($_POST['num_cliente']);
	$nombre 		= mysql_real_escape_string($_POST['nombre']);
	$rfc 			= mysql_real_escape_string($_POST['rfc']);
	$direccion  	= mysql_real_escape_string($_POST['direccion']);
	$correo  		= mysql_real_escape_string($_POST['correo']);
	$colonia  		= mysql_real_escape_string($_POST['colonia']);
	$cp  			= mysql_real_escape_string($_POST['cp']);
	$ciudad  		= mysql_real_escape_string($_POST['ciudad']);
	$estado  		= mysql_real_escape_string($_POST['estado']);
	$telefono  		= mysql_real_escape_string($_POST['telefono']);


	if ( mysql_query("UPDATE clientes SET num_cliente='".$num_cliente."',nombre='".$nombre."',rfc='".$rfc."',direccion='".$direccion."',email='".$correo."',colonia='".$colonia."',cp='".$cp."',ciudad='".$ciudad."',estado='".$estado."',telefono='".$telefono."' WHERE id='".$id."'") ){
		$errorMsg = '<div class="alert alert-success">
				<i class="fa fa-check"></i> Cliente editado correctamente.
			</div>';
	} else {
		$errorMsg = '<div class="alert alert-danger">
			<i class="fa fa-times"></i> Error, intenta nuevamente.
		</div>';
	}

}

$data = mysql_fetch_object(mysql_query("SELECT * FROM clientes WHERE id='".$id."' LIMIT 1"));

?>
		<section class="panel panel-default">
			<header class="panel-heading">
				<div class="pull-right">
					<a href="" class="return"><i class="fa fa-mail-reply"></i> Regresar</a>
				</div>
				<i class="fa fa-plus icon"></i> Editar Cliente
			</header>
			<div class="panel-body">
				<form class="bs-example form-horizontal" action="" method="post">
					<?php echo $errorMsg; ?>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-lg-2 control-label">Nombre: </label>
								<div class="col-lg-10"><input type="text" name="nombre" value="<?php echo $data->nombre; ?>" class="form-control" placeholder=""></div>
							</div>
						</div>	
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-lg-2 control-label">RFC</label>
								<div class="col-lg-10"><input type="text" name="rfc" value="<?php echo $data->rfc; ?>" class="form-control" placeholder=""></div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-lg-2 control-label">Tel&eacute;fono</label>
								<div class="col-lg-10"><input type="text" name="telefono" value="<?php echo $data->telefono; ?>" class="form-control" placeholder=""></div>
							</div>
						</div>
						<div class="col-md-6">
								<div class="form-group">
									<label class="col-lg-2 control-label">Correo</label>
									<div class="col-lg-10"><input type="text" name="correo" value="<?php echo $data->correo; ?>" class="form-control" placeholder=""></div>
								</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-lg-2 control-label">Direcci&oacute;n</label>
								<div class="col-lg-10"><input type="text" name="direccion" value="<?php echo $data->direccion; ?>" class="form-control" placeholder=""></div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-lg-2 control-label">Colonia: </label>
								<div class="col-lg-4"><input type="text" name="contacto" value="<?php echo $data->contacto; ?>" class="form-control" placeholder=""></div>
								<label class="col-lg-2 control-label">CP: </label>
								<div class="col-lg-4"><input type="text" name="cp" value="<?php echo $data->cp; ?>" class="form-control" placeholder=""></div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-lg-2 control-label">Ciudad: </label>
								<div class="col-lg-10"><input type="text" name="ciudad" value="<?php echo $data->ciudad; ?>" class="form-control" placeholder=""></div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-lg-2 control-label">Estado: </label>
								<div class="col-lg-10"><input type="text" name="estado" value="<?php echo $data->estado; ?>" class="form-control" placeholder=""></div>
							</div>
						</div>
					</div>
					<div class="line line-dashed line-lg pull-in"></div>
					<div class="form-group text-right">
						<div class="col-lg-12"> 
							<button type="submit" class="btn btn-sm btn-success"><i class="fa fa-check icon"></i> Guardar</button>
							<a href="admin.php?m=clientes" class="btn btn-sm btn-danger"><i class="fa fa-times icon"></i> Cancelar</a>
						</div>
					</div>
				</form>		
			</div>		
		</section>
