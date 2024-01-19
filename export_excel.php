<?php 
    include './db/config.php';

    $ambil = query("SELECT * FROM tb_suratmasuk");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Export Ke Excel</title>
	<link rel="icon" href="img/icon.png">
</head>
<body>
	<style type="text/css">
	body{
		font-family: sans-serif;
	}
	table{
		margin: 20px auto;
		border-collapse: collapse;
	}
	table th,
	table td{
		border: 1px solid #3c3c3c;
		padding: 3px 8px;
 
	}
	a{
		background: blue;
		color: #fff;
		padding: 8px 10px;
		text-decoration: none;
		border-radius: 2px;
	}
	</style>
 
	<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Monitoring Surat Masuk.xls");
	?>
 
	<center>
		<h1>Monitoring Surat Masuk</h1>
	</center>
 
	<table border="1">
		<tr>
			<th>No. Agenda</th>
			<th>Tanggal Masuk</th>
			<th>No. Surat</th>
			<th>Asal Surat</th>
			<th>Contact Person</th>
			<th>Tujuan Surat</th>
			<th>Perihal</th>
			<th>Disposisi</th>
			<th>Scan Surat</th>
		</tr>
		<?php foreach ($ambil as $row):?>
			<tr align="center">
				<td><?php echo $row["noAgenda"] ?></td>
				<td><?php echo $row["tglMasuk"] ?></td>
				<td><?php echo $row["noSurat"] ?></td>
				<td><?php echo $row["asalSurat"] ?></td>
				<td><?php echo $row["contactPerson"] ?></td>
				<td><?php echo $row["tujuanSurat"] ?></td>
				<td><?php echo $row["perihal"] ?></td>
				<td><?php echo $row["disposisi"] ?></td>
				<td><?php echo $row["scan"] ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>