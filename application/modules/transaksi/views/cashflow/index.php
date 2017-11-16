
	<div class="row"> 
		<div class="col-md-12"> 
			<div class="box"> 
				<div class="box-header with-border"> 
					<h3 class="box-title">&nbsp;</h3> 
					<div class="box-tools pull-right"> 
						<a class="btn btn-box-tool" href="{site_url}/transaksi/cashflow/create"><i class="glyphicon glyphicon-plus"></i></a> 
					</div> 
				</div> 
				<div class="box-body"> 
					<table id="datatables" class="table"> 
						<thead> 
							<tr> 
								<th>No</th> 
								<th>Tanggal</th> 
								<th>Debet</th> 
								<th>Kredit</th> 
								<th>Posisi</th> 
								<th>Option</th> 
							</tr> 
						</thead> 
						<tbody></tbody> 
					</table> 
				</div> 
			</div> 
		</div> 
	</div>
<script src="{adminlte}plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{adminlte}plugins/datatables/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">
	var t;

	$(document).ready(function(){
	    t = $('#datatables').DataTable({
	        pageLength: 50,  
	        serverSide: true,
	        autoWidth: false,
	        order: [ [0,'desc'] ],
	        ajax: { url: '{site_url}/transaksi/cashflow/ajax_list', type: 'POST' },
	        columns: [
	            {"data": "no", "className": "detail text-center", "width": "10%"},
	            {"data": "tanggal"},
	            {"data": "debet"},
	            {"data": "kredit"},
	            {"data": "posisi"},
	            {"data": "keterangan", "width": "15%", "className": "text-center"}
	        ],
	        "fnRowCallback": function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
	        	$("td:eq(0)", nRow).html('<button class="btn btn-default btn-xs">'+aData['no']+'</button>');

	        	var option = '';
	        	option += '<a class="btn btn-success btn-xs" href="{site_url}/transaksi/cashflow/edit/'+aData['no']+'"><i class="fa fa-pencil"></i> Edit</a>&nbsp;&nbsp;';
	        	option += '<a class="btn btn-danger btn-xs" href="{site_url}/transaksi/cashflow/delete/'+aData['no']+'" onclick="return confirm(\'{deleteconfirmmsg}\')"><i class="fa fa-trash-o"></i> Delete</a>';
	        	$("td:eq(5)", nRow).html(option);
	            return nRow;
	        }
	    })
	})

	$('#datatables tbody').on('click','td.detail', function(){
	    t = $('#datatables').DataTable()
	    alert( t.cell( t.row().index(),1 ).data() )

	})	
</script>