<?php
session_start();
require "./inc_connect.php";
$result = mysqli_query($conn, "SELECT * FROM data_eskrim");

$data_eskrim = [];

while ($row = mysqli_fetch_assoc($result)) {
	$data_eskrim[] = $row;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Database</title>
	<link rel="icon" href="../assets/icon.png" >
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../style/crud.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<style>
	</style>
	<script>
		$(document).ready(function() {
			$('[data-toggle="tooltip"]').tooltip();

			var checkbox = $('table tbody input[type="checkbox"]');
			$("#selectAll").click(function() {
				if (this.checked) {
					checkbox.each(function() {
						this.checked = true;
					});
				} else {
					checkbox.each(function() {
						this.checked = false;
					});
				}
			});
			checkbox.click(function() {
				if (!this.checked) {
					$("#selectAll").prop("checked", false);
				}
			});
		});
	</script>
</head>

<body>
	<div class="container-xl">
		<div class="table-responsive">
			<div class="table-wrapper">
				<div class="table-title">
					<div class="row">
						<div class="col-sm-6">
							<h2><img src="../assets/icon.png" style="width: 50px;" alt="">Liyue Ice Cream <b>Database</b></h2>
						</div>
						<div class="col-sm-6 align-self-center">
							<a href="#addEmployeeModal" class="btn btn-success btn-color-suc" style="background-color: #77DD77 !important;" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Tambah Produk</span></a>
						</div>
					</div>
				</div>
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>
								<span></span>
							</th>
							<th>Nama Produk </th>
							<th>Harga</th>
							<th>Varian</th>
							<th>Stok</th>
							<th>Deskripsi</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						<?php $i = 1;
						foreach ($data_eskrim as $eskrim) : ?>
							<tr>
								<td>
								<span></span>
								<td><?php echo $eskrim["nama"] ?></td>
								<td><?php echo $eskrim["harga"] ?></td>
								<td><?php echo $eskrim["varian"] ?></td>
								<td><?php echo $eskrim["stok"] ?></td>
								<td><?php echo $eskrim["deskripsi"] ?></td>
								<td class="action">
									<a href="#editEmployeeModal<?php echo $eskrim['id'] ?>" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit" name="edit">&#xE254;</i></a>
									<a href="#deleteEmployeeModal<?php echo $eskrim['id'] ?>" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete" name="delete">&#xE872;</i></a>
									<div id="editEmployeeModal<?php echo $eskrim['id'] ?>" class="modal fade">
										<div class="modal-dialog">
											<div class="modal-content">
												<form action="./inc_update.php?id=<?php echo $eskrim['id'] ?>" method="post" enctype="multipart/form-data">
													<div class="modal-header">
														<h4 class="modal-title">Edit Data Produk</h4>
														<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
													</div>
													<div class="modal-body">
														<div class="form-group">
															<label>Name Produk</label>
															<input type="text" class="form-control" name="nama_product" value="<?php echo $eskrim['nama'] ?>" required>
														</div>
														<div class="form-group">
															<label>Harga</label>
															<input type="text" class="form-control" name="harga_product" value="<?php echo $eskrim['harga'] ?>" required>
														</div>
														<div class="form-group">
															<label>Varian</label>
															<input type="text" class="form-control" name="varian_product" value="<?php echo $eskrim['varian'] ?>" required>
														</div>
														<div class="form-group">
															<label>Stok</label>
															<input type="number" class="form-control" name="stok_product" value="<?php echo $eskrim['stok'] ?>" required>
														</div>
														<div class="form-group">
															<label>Deskripsi</label>
															<textarea class="form-control" name="desc_product" required></textarea>
														</div>
													</div>
													<div class="modal-footer">
														<input type="button" class="btn btn-default" data-dismiss="modal" value="Batalkan" name="batal">
														<input type="submit" class="btn btn-info" style="background-color: #77DD77 !important;" value="Simpan" name="simpan">
													</div>
												</form>
											</div>
										</div>
									</div>
									<div id="deleteEmployeeModal<?php echo $eskrim['id'] ?>" class="modal fade">
										<div class="modal-dialog">
											<div class="modal-content">
												<form action="./inc_delete.php?id=<?php echo $eskrim['id'] ?>" method="POST">
													<div class="modal-header">
														<h4 class="modal-title">Hapus Data Produk</h4>
														<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
													</div>
													<div class="modal-body">
														<p>Apakah Anda yakin ingin menghapus data ini??</p>
														<p class="text-warning" style="color: crimson !important;"><small>Tindakan ini tidak dapat dibatalkan.</small></p>
													</div>
													<div class="modal-footer">
														<input type="button" class="btn btn-default" data-dismiss="modal" value="Batalkan">
														<input type="submit" class="btn btn-danger" value="Hapus">
													</div>
												</form>
											</div>
										</div>
									</div>
								</td>
								</td>
							</tr>
						<?php $i++;endforeach; ?>
					</tbody>
				</table>
				<!-- <div> -->
				<a href="./inc_logout.php"><button id="btn-kembali">Logout</button></a>
				<!-- </div> -->
			</div>
		</div>
	</div>

	<!-- . Modal HTML -->
	<div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="./inc_create.php" method="POST" enctype="multipart/form-data">
					<div class="modal-header">
						<h4 class="modal-title">Tambah Data Produk</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label>Name Produk</label>
							<input type="text" class="form-control" name="nama_product" required>
						</div>
						<div class="form-group">
							<label>Harga</label>
							<input type="text" class="form-control" name="harga_product" required>
						</div>
						<div class="form-group">
							<label>Varian</label>
							<input type="text" class="form-control" name="varian_product" required>
						</div>
						<div class="form-group">
							<label>Stok</label>
							<input type="number" class="form-control" name="stok_product" required>
						</div>
						<div class="form-group">
							<label>Gambar</label>
							<input type="file" class="form-control" id="gambar" name="gambar_product" required>
						</div>
						<div class="form-group">
							<label>Deskripsi</label>
							<textarea class="form-control" name="desc_product" required></textarea>
						</div>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Batalkan">
						<input type="submit" class="btn btn-info" style="background-color: #77DD77 !important;" value="Simpan" name="simpan">
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>