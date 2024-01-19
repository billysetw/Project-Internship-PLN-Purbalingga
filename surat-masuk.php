<?php 
    include './db/config.php';

    if (isset($_POST["submit"])) {
        if (tambahSuratMasuk($_POST) > 0){
            echo "
                <script>
                    alert('Data Berhasil di Tambahkan');
                    document.location.href = 'surat-masuk.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('Data Gagal di Tambahkan');
                    document.location.href = 'surat-masuk.php';
                </script>
            ";
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tambah Baru</title>
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

	<div class="surat-masuk">
		<div class="header">
			<i class='bx bxs-file-plus'></i>
	  		<h1>Tambah Surat Masuk</h1>
		</div>

	  <form action="" method="POST">
	    <label>No. Agenda <span style="color: red;">*</span></label>
	    <input type="text" id="nAgenda" name="noAgenda" placeholder="Silahkan masukkan nomor agenda..." required>

	    <label>Tanggal Masuk <span style="color: red;">*</span></label>
	    <input type="date" id="tgl-masuk" name="tglMasuk" required>

	    <label>No. Surat <span style="color: red;">*</span></label>
	    <input type="text" id="no-surat" name="noSurat" placeholder="Silahkan masukkan nomor surat..." required>

	    <label>Asal Surat <span style="color: red;">*</span></label>
	    <input type="text" id="asal-surat" name="asalSurat" placeholder="Silahkan masukkan asal surat..." required>

	    <label>Contact Person <span style="color: red;">*</span></label>
	    <input type="text" id="contact-person" name="contactPerson" placeholder="Silahkan masukkan contact person..." required>

	    <label>Tujuan Surat <span style="color: red;">*</span></label>
	    <select id="tujuan-surat" name="tujuanSurat" required>
	      <option value="">Silahkan Pilih</option>
	      <option value="MULP">MULP</option>
	      <option value="Supervisor Teknik">Supervisor Teknik</option>
	      <option value="Supervisor PP & ADM">Supervisor PP & ADM</option>
	      <option value="Supervisor TE">Supervisor TE</option>
		  <option value="Pejabat K3L">Pejabat K3L</option>
		  <option value="Lainnya">Lainnya</option>
	    </select>

	    <label>Perihal <span style="color: red;">*</span></label>
	    <select id="perihal" name="perihal" required>
	       <option value="">Silahkan Pilih</option>
	       <option value="Pasang Baru">Pasang Baru</option>
	       <option value="Perbaikan Tiang">Perbaikan Tiang</option>
	       <option value="Geser Tiang">Geser Tiang</option>
		     <option value="Umum">Umum</option>
	    </select>

	    <label>Disposisi <span style="color: red;">*</span></label>
	    <input type="text" id="disposisi" name="disposisi" placeholder="Silahkan masukkan disposisi..." required>
	  
	    <input type="submit" name="submit" value="Submit">

	  </form>
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