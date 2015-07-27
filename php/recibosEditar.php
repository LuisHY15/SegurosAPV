<?php

if ( isset($_POST['nombre']) ){



	if ( mysql_query() ){
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
					<a href="admin.php?m=recibos&id=" class="return"><i class="fa fa-mail-reply"></i> Regresar</a>
				</div>
				<i class="fa fa-plus icon"></i> Modificar recibo
			</header>
			<div class="panel-body">
				<form class="bs-example form-horizontal" action="" method="post">
					<?php echo $errorMsg; ?>


					<div class="row">

						<div class="col-md-3">
							<div class="form-group">
								<label class="col-lg-4 control-label">Vencimiento</label>
								<div class="col-lg-8"><input type="text" name="vencimiento" class="form-control" placeholder=""></div>
							</div>
						</div>

						<div class="col-md-3">
							<div class="form-group">
								<label class="col-lg-4 control-label">Monto</label>
								<div class="col-lg-8"><input type="text" name="monto" class="form-control" placeholder=""></div>
							</div>
						</div>

							<div class="col-md-3">
							<div class="form-group">
								<label class="col-lg-4 control-label">Comision</label>
								<div class="col-lg-8"><input type="text" name="comision" class="form-control" placeholder=""></div>
							</div>
						</div>

						<div class="col-md-3">
							<div class="form-group">
								<label class="col-lg-4 control-label">Serie</label>
								<div class="col-lg-8"><input type="text" name="serie" class="form-control" placeholder=""></div>
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