<?php 
    include './db/config.php';

    $ambil = query("SELECT * FROM tb_suratmasuk");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Monitoring</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="icon" href="img/icon.png">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<body>
	<!-- The sidebar -->
	<div class="sidebar">
		<div class="logo_content">
			<div class="logo">
				<img src="./img/pln.png">
				<div class="logo_name">PLN</div>
			</div>
			<i class='bx bx-menu' id="btn"></i>
		</div>
		<ul class="nav_list">
			<li>
				<a href="home.php">
					<i class='bx bxs-home'></i>
					<span class="links_name">Home</span>
				</a>
				<span class="tooltip">Home</span>
			</li>
			<li>
				<a href="monitoring.php">
					<i class='bx bxs-objects-vertical-bottom'></i>
					<span class="links_name">Monitoring SM</span>
				</a>
				<span class="tooltip">Monitoring Surat Masuk</span>
			</li>
			<li>
				<a href="surat-masuk.php">
					<i class='bx bxs-file-plus'></i>
					<span class="links_name">Tambah SM</span>
				</a>
				<span class="tooltip">Tambah Surat Masuk</span>
			</li>
		</ul>
		<div class="profile_content">
			<div class="profile">
				<div class="profile_details">
					<img src="./img/profile.png">
					<div class="name_jobs">
						<div class="name">Admin</div>
						<div class="status">Online</div>
					</div>
				</div>
				<a href="logout.php" onclick="return confirm('Apakah anda yakin ingin keluar ?')"><i class='bx bx-log-out' id="log_out"></i></a>
			</div>
		</div>
	</div>
	</div>

	<div class="content">
		<div class="header">
			<i class='bx bxs-objects-vertical-bottom'></i>
			<h1>Monitoring Surat Masuk</h1>
		</div>
		
		<a href="export_excel.php" class="download"><i class='bx bxs-download'></i> Export to Excel</a>
		<div class="content1">
			<table>
				<tr>
					<th>No. Agenda</th>
					<th>Tanggal Masuk</th>
					<th>No. Surat</th>
					<th>Asal Surat</th>
					<th>Contact Person</th>
					<th>Tujuan Surat</th>
					<th>Perihal</th>
					<th>Disposisi</th>
					<th>Aksi</th>
				</tr>
				<?php 
				$home = mysqli_query($koneksi, "SELECT * FROM tb_suratmasuk ORDER BY id DESC");
				if(mysqli_num_rows($home) > 0){
					while($row = mysqli_fetch_array($home)){ 
				?>

				<tr align="center">
					<td><?php echo $row["noAgenda"] ?></td>
					<td><?php echo $row["tglMasuk"] ?></td>
					<td><?php echo $row["noSurat"] ?></td>
					<td><?php echo $row["asalSurat"] ?></td>
					<td><?php echo $row["contactPerson"] ?></td>
					<td><?php echo $row["tujuanSurat"] ?></td>
					<td><?php echo $row["perihal"] ?></td>
					<td><?php echo $row["disposisi"] ?></td>
					<td>
                       <a class="edit" href="edit-surat-masuk.php?id=<?php echo $row["id"]; ?>" onclick = "return confirm('Anda yakin ingin mengubah data ini?');">Edit</a> | <a class="hapus" href="hapus.php?id=<?php echo $row["id"]; ?>" onclick = "return confirm('Anda yakin ingin mengahapus data ini?');">Hapus</a> 
                   </td>
				</tr>
				<?php }}else{ ?>
	              <tr>
	                <td colspan="9">Tidak ada data</td>
	              </tr>
            	<?php } ?>
			</table>
		</div>
	</div>
	<script>
		let btn = document.querySelector("#btn");
		let sidebar = document.querySelector(".sidebar");

		btn.onclick = function(){
			sidebar.classList.toggle("active");
		}
	</script>
</body>
</html>