<div class="container-fluid">
	<div class="row">
		<div class="col-md-4">
			<section class="panel panel-default pos-rlt clearfix">
				<header class="panel-heading"> <i class="fa fa-user" style=""> Perfil</i> </header>
				<div class="modal fade" id="modal-form" style="display: none;" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-body">
								<div class="row">
									<div class="col-sm-12">
										<h3 class="m-t-none m-b text">Poliza</h3>
										<form role="form" action="" method="post">
											<div class="row">
												<div class="col-sm-3"> 
													<div class="form-group"> 
														<div class="radio"> 
															<label> <input type="radio" name="optionsRadios" id="" value="option1" checked=""> General</label> 
														</div> 
														<div class="radio"> 
															<label> <input type="radio" name="optionsRadios" id="" value="option2"> Por Cliente</label> 
														</div> 
													</div> 
												</div>
												<div class="col-sm-4"> 
													<div class="form-group"> 
														<div class="radio"> 
															<label> <input type="radio" name="optionsRadios1" id="" value="option1" checked=""> Por Rango de Fecha</label> 
														</div> 
														<div class="radio"> 
															<label> <input type="radio" name="optionsRadios1" id="" value="option2"> Por Rango de Folio</label> 
														</div>  
													</div> 
												</div>
												<div class="col-sm-5"> 
													<div class="form-group"> 
														<div class="input-group m-b" id="txtdesde"> 
															<span class="input-group-addon">Desde: </span> 
															<input type="text" class="form-control"> 
														</div> 
														<div class="input-group m-b" id="txthasta"> 
															<span class="input-group-addon">Hasta: </span> 
															<input type="text" class="form-control"> 
														</div>  
													</div> 
												</div>
											</div>
											<div class="form-group">
												<button type="submit" class="btn btn-block btn-success pull-right text-uc m-t-n-xs"><strong><i class="fa fa-check"></i> Imprimir Reporte</strong></button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div><!-- /.modal-content --> 
					</div><!-- /.modal-dialog -->
				</div>
				<div class="row wrapper">
					<section class="scrollable wrapper"> 
						<i class="fa fa-apple fa fa-3x"></i> 
						<div class="row"> 
							<div class="col-xs-6"> 
								<h4>Apple Inc.</h4> 
								<p><a href="http://www.apple.com">www.apple.com</a></p> 
								<p>1 Infinite Loop <br> 95014 Cuperino, CA<br> United States </p> 
								<p> Telephone: 800-692-7753<br> Fax: 800-692-7753 </p> 
							</div> 
							<div class="col-xs-6 text-right"> 
								<p class="h4">#9048392</p> 
								<h5>29th Mar 2013</h5> 
							</div> 
						</div> 
					</section>
				</div>
			</section>
		</div>
		<div class="col-md-8">
			<section class="panel panel-default pos-rlt clearfix">
				<header class="panel-heading"> <i class="fa fa-file-o" style=""> Polizas</i> </header>
				<div class="col-sm-6">
					<div class="select filter" data-resize="auto"> 
						<br>
						<button data-toggle="dropdown" class="btn btn-sm btn-default dropdown-toggle"> 
							<span class="dropdown-label">Buscar por </span> 
							<span class="caret"></span> 
						</button> 
						<ul class="dropdown-menu"> 
							<li data-value="all"><a href="#">Poliza</a></li> 
							<li data-value="lt5m"><a href="#">Aseguradora</a></li> 
							<li data-value="gte5m"><a href="#">Agente</a></li> 
						</ul> 
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<br>
						<div class="input-group">
						<input type="text" class="input-sm form-control" placeholder="Buscar"> <span class="input-group-btn"> <button class="btn btn-sm btn-default" type="button"> <i class="fa fa-search"></i> </button> </span>
						</div>
					</div>
				</div>
				<div class="table-responsive">
					<table class="table table-striped b-t b-light">
						<thead>
							<tr>
								<th width="80"># Poliza</th>
								<th>Aseguradora</th>
								<th>Agente</th>
								<th width="100">Iva</th>
								<th width="100">Prima total</th>
								<th width="120"></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>columna 1 </td>
								<td>columna 2 </td>
								<td>columna 3 </td>
								<td>columna 4 </td>
								<td>columna 5 </td>
								<td style="">
									<a href="#modal-form" data-toggle="modal" id="reportes" class="btn btn-sm btn-default"> <i class="fa fa-eye"></i> </a> &nbsp;&nbsp;&nbsp;
									<a href="admin.php?m=clientes&del=" class="btn btn-sm btn-danger"> <i class="fa fa-times"></i> </a>
								</td>
							</tr>
							<tr>
								<td>columna 1 </td>
								<td>columna 2 </td>
								<td>columna 3 </td>
								<td>columna 4 </td>
								<td>columna 5 </td>
								<td style="">
									<a href="#modal-form" data-toggle="modal" id="reportes" class="btn btn-sm btn-default"> <i class="fa fa-eye"></i> </a> &nbsp;&nbsp;&nbsp;
									<a href="admin.php?m=clientes&del=" class="btn btn-sm btn-danger"> <i class="fa fa-times"></i> </a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</section>
		</div>
	</div>
</div>
