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
					<a href="admin.php?m=endozos" class="return"><i class="fa fa-mail-reply"></i> Regresar</a>
				</div>
				<i class="fa fa-plus icon"></i> Editar Endozos
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
								<label class="col-lg-8 control-label">Inicio de Vigencia:</label>
								<div class="col-lg-4"><input type="text" name="vigencia" class="form-control" placeholder=""></div>
							</div>
						</div>	
						<div class="col-md-4">
							<div class="form-group">
								<label class="col-lg-7 control-label">Vencimiento:</label>
								<div class="col-lg-5"><input type="text" name="vencimiento" class="form-control" placeholder=""></div>
							</div>
						</div>							
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class=" col-lg-3 control-label">Clientes:</label>
								<div class="col-lg-9"><input type="text" name="clientes" class="form-control" placeholder=""></div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-lg-2 control-label">Ramo:</label>
								<div class="col-lg-10"><input type="text" name="ramo" class="form-control" placeholder=""></div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-lg-3 control-label">No. P&oacute;liza:</label>
								<div class="col-lg-9"><input type="text" name="no_poliza" class="form-control" placeholder=""></div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-lg-2 control-label">No Endozo:</label>
								<div class="col-lg-10"><input type="text" name="no_endozo" class="form-control" placeholder=""></div>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-8">
							<div class="form-group">
								<label class="col-lg-3 control-label">Concepto del endoso:</label>
								<div class="col-lg-9"><input type="text" name="con_endozo" class="form-control" placeholder></div>
						    </div>
						</div>

						<div class="col-md-4">
							<div class="form-group">
								<label class="col-lg-8 control-label">Tipo de endoso:</label>
								<div class="col-lg-4"><input type="text" name="tip_endozo" class="form-control" placeholder></div>
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
								<label class="col-lg-6 control-label">Recargo:</label>
								<div class="col-lg-6"><input type="text" name="recargo" class="form-control" placeholder=""></div>
							</div>

							<div class="form-group">
								<label class="col-lg-6 control-label">Derecho de poliza:</label>
								<div class="col-lg-6"><input type="text" name="der_poliza" class="form-control" placeholder=""></div>
							</div>
							<div class="form-group">
								<label class="col-lg-6 control-label">Primer pago:</label>
								<div class="col-lg-6"><input type="text" name="prim_pago" class="form-control" placeholder=""></div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group">
								<label class="col-lg-6 control-label">I.V.A:</label>
								<div class="col-lg-6"><input type="text" name="iva" class="form-control" placeholder=""></div>
							</div>

							<div class="form-group">
								<label class="col-lg-6 control-label">Com. Agente:</label>
								<div class="col-lg-6"><input type="text" name="com_agente" class="form-control" placeholder=""></div>
							</div>

							<div class="form-group">
								<label class="col-lg-6 control-label">Prima total:</label>
								<div class="col-lg-6"><input type="text" name="prim_total" class="form-control" placeholder=""></div>
							</div>
							<div class="form-group">
								<label class="col-lg-6 control-label">Pago subsecuente</label>
								<div class="col-lg-6"><input type="text" name="pago_sub" class="form-control" placeholder=""></div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group" >
								<label class="col-lg-6 control-label">informacion  adicional</label>
								<div class="col-md-6"></div>
							</div>
							<div>
								<div class="col-lg-12">
									<textarea name="infoadicional" class="form-control"  style="width:400px;height:140px;"></textarea>
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
