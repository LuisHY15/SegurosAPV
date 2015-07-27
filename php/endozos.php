<section class="panel panel-default pos-rlt clearfix">

	<header class="panel-heading"> <i class="fa fa-list"></i> Endozos</header>
	
	<div class="row wrapper">
		<div class="col-xs-2 col-sm-2  m-b-xs">
			<a href="admin.php?m=endozosAgregar" class="pull-left btn btn-sm btn-success"><i class="fa fa-plus"></i> Nuevo Endozo</a>
		</div>
		<div class="col-xs-3 col-sm-7 m-b-xs text-center">

		</div>
		<div class="col-xs-7 col-sm-3">
			<div class="input-group">
				<input type="text" class="input-sm form-control" placeholder="Buscar"> <span class="input-group-btn"> <button class="btn btn-sm btn-default" type="button"> <i class="fa fa-search"></i> </button> </span>
			</div>
		</div>
	</div>

	<div class="table-responsive">
		<table class="table table-striped b-t b-light">
			<thead>
				<tr>
					<th>No. Endozo</th>
					<th>No. Poliza</th>
					<th>Cliente</th>
					<th>Inicio de Vigencia</th>
					<th width="250">Vencimiento</th>
					<th width="120"></th>
				</tr>
			</thead>
			<tbody>

				<tr>
					<td>columna 1</td>
					<td>columna 2 </td>
					<td>columna 3</td>
					<td>columna 4 </td>
					<td>columna 5 </td>
					<td>
						<a href="admin.php?m=endozosEditar&id=" class="btn btn-sm btn-default"> <i class="fa fa-pencil"></i> </a> &nbsp;&nbsp;&nbsp;
						<a href="admin.php?m=endozo&del=" class="btn btn-sm btn-danger"> <i class="fa fa-times"></i> </a>
					</td>
				</tr>
			</tbody>
		</table>
	</div>

</section>