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
				<h3>Edit Mahasiswa</h3>
			</div>
		</div>
		<div class="row" style="margin-top:5px">
			<div class="col-12">
				<?php echo form_open('main/edit');?>
				<?php echo form_hidden('nim',$mahasiswa[0]->nim);?>
				<table class="table">
				    <tr><td>NIM</td><td><?php echo form_input('',$mahasiswa[0]->nim,"disabled class='form-control'");?></td></tr>		    
				    <tr><td>NAMA</td><td><?php echo form_input('nama',$mahasiswa[0]->nama,"class='form-control'");?></td></tr>
				    <tr><td>JURUSAN</td><td>
				            <select name="jurusan" class="form-control">
				            <?php
				            foreach ($jurusan as $j){
				                echo "<option value='$j->id_jurusan' ";
				                echo $mahasiswa[0]->id_jurusan==$j->id_jurusan?'selected':'';
				                echo ">$j->nama_jurusan</option>";
				            }
				            ?>
				            </select>
				        </td></tr>
				    <tr><td>ALAMAT</td><td><?php echo form_input('alamat',$mahasiswa[0]->alamat,"class='form-control'");?></td></tr>
				    <tr><td colspan="2">
				        <?php echo form_submit('submit','Simpan','class="btn btn-simpan"');?>
				        <?php echo anchor('main','Kembali','class="btn btn-warning"');?></td></tr>
				</table>
				<?php
				echo form_close();
				?>
			</div>
		</div>
	</div>
</body>
</html>