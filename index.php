<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>APLIKASI Contact</title>
		<link rel="stylesheet" href="./vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
	</head>
	<body>
		<div class="container">
			<br>
			<CENTER><h1>Data Contact</h1></CENTER>
			<a href="create.php" class="btn btn-success">Tambah Contact</a>
			<?php
				if (isset($_SESSION['success'])) {
					echo "<div class='alert alert-success'>".$_SESSION['success']."</div>";
				}
			?>
			<table class="table">
				<thead class="thead-dark">
					<tr>
						<th scope="col">Nama</th>
						<th scope="col">NoHp</th>
						<th scope="col">Alamat</th>
						<th scope="col">Aksi</th>
					</tr>
				</thead>
				<?php
					require 'config.php';
					$Mahasiswa = $collection->find();
					foreach ($Mahasiswa as $contact) {
						echo "<tr>";
						echo "<td>".$contact->Nama."</td>";
						echo "<th scope='row'>".$contact->Nohp."</th>";
						echo "<td>".$contact->Alamat."</td>";
						echo "<td>";
						echo "<a href = 'edit.php?id=".$contact->_id."'class='btn btn-primary'>EDIT</a>";
						echo "<a href = 'hapus.php?id=".$contact->_id."'class='btn btn-danger'>HAPUS</a>";
						echo "</td>";
						echo "</tr>";
					}
				?>
			</table>
		</div>
	</body>
</html>