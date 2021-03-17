<!DOCTYPE html>
<html>
<head>
	<title>Tugas kuliah web service</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
	<style type="text/css">
		.container {
		  padding: 2rem 0rem;
		}

		h4 {
		  margin: 2rem 0rem 1rem;
		}

		.table-image {
		  td, th {
		    vertical-align: middle;
		  }
		}
	</style>
</head>
<body>
	<div class="container">
  
 		<div class="row">
			<div class="col-md-12">
				<h3>Data Mahasiswa</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12" style="text-align:right">
				<a class="btn btn-success" href="<?php echo base_url() ?>main/create"><i class="fas fa-plus"></i> Tambah</a>
			</div>
		</div>
		<div class="row" style="margin-top:5px">
			<div class="col-12">
				<table class="table table-bordered">
					<thead>
						<tr>
						<th scope="col">NIM</th>
						<th scope="col">NAMA</th>
						<th scope="col">ID JURUSAN</th>
						<th scope="col">ALAMAT</th>
						<th scope="col">Actions</th>
						</tr>
					</thead>
				<tbody>
					<?php foreach($mahasiswa as $row) { ?>
					<tr>
						<td scope="row"><?php echo $row->nim ?></td>
						<td scope="row"><?php echo $row->nama ?></td>
						<td scope="row"><?php echo $row->id_jurusan ?></td>
						<td scope="row"><?php echo $row->alamat ?></td>
						<td>
							<a class="btn btn-success" href="<?php echo base_url() ?>main/edit/<?php echo $row->nim ?>"><i class="fas fa-edit"></i></a>
							<a class="btn btn-danger" href="<?php echo base_url() ?>main/delete/<?php echo $row->nim ?>"><i class="far fa-trash-alt"></i></a>
						</td>
					</tr>
					<?php } ?>
				</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>