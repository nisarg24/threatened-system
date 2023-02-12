<?php 
include_once("layout/header.php");
include_once("layout/header-top.php");
include_once("layout/sidebar.php") 
?>	

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>
						Threatened Report List
					</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Report</li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<!-- <div class="card-header">
							<h3 class="card-title">Threatened Report List</h3>
						</div> -->
						<!-- /.card-header -->
						<div class="card-body">
							<table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>Client Id</th>
										<th>Client Name</th>
										<th>Scan Id</th>
										<th>Final Score</th>
										<th>Status</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<a href="<?php echo URL_ROOT . '/client/profile/1000' ?>">1000</a>
										</td>
										<td>
											<a href="<?php echo URL_ROOT . '/client/profile/1000' ?>">CyberLab Inc</a>
										</td>
										<td>005</td>
										<td>-210</td>
										<td>
											<p style="color: #f70535;">Vulnerability level below minimal threshold ,urgent attention required</p>
										</td>
									</tr>
								</tbody>
								<tfoot>
									<tr>
										<th>Client Id</th>
										<th>Client Name</th>
										<th>Scan Id</th>
										<th>Final Score</th>
										<th>Status</th>
									</tr>
								</tfoot>
							</table>
						</div>
						<!-- /.card-body -->
					</div>
					<!-- /.card -->
				</div>
				<!-- /.col -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include_once("layout/footer.php") ?>
<script>
	$(function () {
		$("#example1").DataTable({
			"responsive": true, "lengthChange": false, "autoWidth": false,
			"buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
		}).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
	});
</script>
</body>

</html>