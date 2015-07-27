<?php
#campos: fecha,clave,nombre

if ( isset($_POST['nombre']) ){

	$num_cliente 	= mysql_real_escape_string($_POST['clave']);
	$nombre 		= mysql_real_escape_string($_POST['nombre']);


	if ( mysql_query("INSERT INTO aseguradoras SET fecha='".date("Y-m-d")."',clave='".$clave."',nombre='".$nombre."'") ){
		$errorMsg = '<div class="alert alert-success">
				<i class="fa fa-check"></i> Aseguradora agregada correctamente.
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
					<a href="" class="return"><i class="fa fa-mail-reply"></i> Regresar</a>
				</div>
				<i class="fa fa-plus icon"></i> Agregar Aseguradora
			</header>
			<div class="panel-body">
				<form class="bs-example form-horizontal" action="" method="post">
					<?php echo $errorMsg; ?>
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
								<label class="col-lg-2 control-label">Clave: </label>
								<div class="col-lg-10"><input type="text" name="clave" class="form-control" placeholder=""></div>
							</div>
						</div>	
						<div class="col-md-9">
							<div class="form-group">
								<label class="col-lg-2 control-label">Nombre</label>
								<div class="col-lg-10"><input type="text" name="nombre" class="form-control" placeholder=""></div>
							</div>
						</div>
					</div>
					<div class="line line-dashed line-lg pull-in"></div>
					<div class="form-group text-right">
						<div class="col-lg-12"> 
							<button type="submit" class="btn btn-sm btn-success"><i class="fa fa-check icon"></i> Agregar</button>
							<a href="admin.php?m=aseguradoras" class="btn btn-sm btn-danger"><i class="fa fa-times icon"></i> Cancelar</a>
						</div>
					</div>
				</form>
			</div>
		</section>
