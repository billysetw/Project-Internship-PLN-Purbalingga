<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home</title>
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

	<div class="content-home">
		<div class="content2">
			<h1>Selamat Datang di</h1>
			<h4>PLN Unit Layanan Pelanggan Purbalingga	</h4>
			<img src="./img/PLN-PURBALINGGA.jpg">
			<table>
				<tr>
					<td colspan="3">
						<i class="fa fa-map-marker"></i>
						<b>Alamat lokasi : </b>
						Jl. Jend. Sudirman, No. 113, Purbalingga Lor, Purbalingga, Purbalingga Lor, Kec. Purbalingga, Kabupaten Purbalingga, Jawa Tengah 53316, Indonesia                      
					</td>
				</tr>
				<tr>
					<td>Nomor Telpon</td>
					<td> : </td>
					<td> (0281) 895074 </td>
				</tr>
				<tr>
					<td>Kategori</td>
					<td> : </td>
					<td> BUMN </td>
				</tr>
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