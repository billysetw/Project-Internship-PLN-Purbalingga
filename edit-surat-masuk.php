<?php 

	include './db/config.php';

	$id=$_GET['id'];

	$data= query("SELECT * FROM tb_suratmasuk WHERE id = $id")[0];

	if (isset($_POST["edit"])) {
		if(ubahSuratMasuk($_POST) > 0) {
			echo "
			<script>
				alert('Berhasil di edit');
				document.location.href = 'monitoring.php';
			</script>
			";
		} else {
			echo "
			<script>
				alert('Gagal di edit');
				document.location.href = 'edit-surat-masuk.php';
			</script>
			";
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="icon" href="img/icon.png">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<body>
	<div class="content-edit">
		<form method="POST" action="">
		<center>
			<table>
				<tr>
					<th colspan="2"><h2>Ubah Data</h2></th>
				</tr>
				<tr>
					<td><input type="hidden" name="id" value="<?php echo $data['id'] ?>"></td>
				</tr>
				<tr>
					<td>No. Agenda</td>
					<td><input type="text" style="width: 303px;" value="<?php echo $data['noAgenda'] ?>" name="noAgenda"></td>
				</tr>
				<tr>
					<td>Tanggal Masuk</td>
					<td><input type="date" style="width: 300px;" value="<?php echo $data['tglMasuk'] ?>" name="tglMasuk"></td>
				</tr>
				<tr>
					<td>No. Surat</td>
					<td><input type="text" style="width: 303px;" value="<?php echo $data['noSurat'] ?>" name="noSurat"></td>
				</tr>
				<tr>
					<td>Asal Surat</td>
					<td><input type="text" style="width: 300px;" value="<?php echo $data['asalSurat'] ?>" name="asalSurat"></td>
				</tr>
				<tr>
					<td>Contact Person</td>
					<td><input type="text" style="width: 300px;" value="<?php echo $data['contactPerson'] ?>" name="contactPerson"></td>
				</tr>
				<tr>
					<td>Tujuan Surat</td>
					<td>
						<select name="tujuanSurat">
			                <option <?php echo ($data["tujuanSurat"] == 'MULP') ? "selected": "" ?>>MULP</option>
			                <option <?php echo ($data["tujuanSurat"] == 'Supervisor Teknik') ? "selected": "" ?>>Supervisor Teknik</option>
			                <option <?php echo ($data["tujuanSurat"] == 'Supervisor PP & ADM') ? "selected": "" ?>>Supervisor PP & ADM</option>
			                <option <?php echo ($data["tujuanSurat"] == 'Supervisor TE') ? "selected": "" ?>>Supervisor TE</option>
			                <option <?php echo ($data["tujuanSurat"] == 'Pejabat K3L') ? "selected": "" ?>>Pejabat K3L</option>
			                <option <?php echo ($data["tujuanSurat"] == 'Lainnya') ? "selected": "" ?>>Lainnya</option>
			            </select>	
					</td>
				</tr>
				<tr>
					<td>Perihal</td>
					<td>
						<select name="perihal">
			                <option <?php echo ($data["perihal"] == 'Pasang Baru') ? "selected": "" ?>>Pasang Baru</option>
			                <option <?php echo ($data["perihal"] == 'Perbaikan Tiang') ? "selected": "" ?>>Perbaikan Tiang</option>
			                <option <?php echo ($data["perihal"] == 'Geser Tiang') ? "selected": "" ?>>Geser Tiang</option>
			                <option <?php echo ($data["perihal"] == 'Umum') ? "selected": "" ?>>Umum</option>
			            </select>					
					</td>
				</tr>
				<tr>
					<td>Disposisi</td>
					<td><input type="text" style="width: 300px;" value="<?php echo $data['disposisi'] ?>" name="disposisi"></td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<input type="submit" name="edit" value="Edit" class="btn-edit"><br>
						<a href="monitoring.php" class="btn-batal">Batal</a>
					</td>
				</tr>
			</table>
		</center>
		</form>
	</div>
</body>
</html>