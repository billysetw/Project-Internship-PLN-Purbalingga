<?php 

	$koneksi = mysqli_connect("localhost","root","","db_pengarsipan");

	function query($query){
		global $koneksi;

		$ambil 	= mysqli_query($koneksi, $query);
		$rows 	= [];

		while ($row = mysqli_fetch_assoc($ambil)) {
			$rows[] = $row;
		}

		return $rows;
	}

	function login($data){
		global $koneksi;

		$username	= htmlspecialchars($data["username"]);
		$password	= htmlspecialchars($data["password"]);

		$query = "SELECT * FROM tb_login WHERE username = '$username' AND password = '$password'";

		mysqli_query($koneksi, $query);

		return mysqli_affected_rows($koneksi);
	}

	function tambahSuratMasuk($data){
		global $koneksi;

	    $noAgenda 		= htmlspecialchars($data["noAgenda"]);
	    $tglMasuk 		= htmlspecialchars($data["tglMasuk"]);
	    $noSurat 		= htmlspecialchars($data["noSurat"]);
	    $asalSurat 		= htmlspecialchars($data["asalSurat"]);
	    $contactPerson 	= htmlspecialchars($data["contactPerson"]);
	    $tujuanSurat 	= htmlspecialchars($data["tujuanSurat"]);
	    $perihal 		= htmlspecialchars($data["perihal"]);
	    $disposisi 		= htmlspecialchars($data["disposisi"]);

	    $query = "INSERT INTO tb_suratmasuk VALUES(' ','$noAgenda','$tglMasuk','$noSurat','$asalSurat','$contactPerson','$tujuanSurat','$perihal','$disposisi')";

	    mysqli_query($koneksi, $query);

	    return mysqli_affected_rows($koneksi);
	}

	function ubahSuratMasuk($data){
	    global $koneksi;

	    $id             = $data["id"];
	    $noAgenda 		= htmlspecialchars($data["noAgenda"]);
	    $tglMasuk 		= htmlspecialchars($data["tglMasuk"]);
	    $noSurat 		= htmlspecialchars($data["noSurat"]);
	    $asalSurat 		= htmlspecialchars($data["asalSurat"]);
	    $contactPerson 	= htmlspecialchars($data["contactPerson"]);
	    $tujuanSurat 	= htmlspecialchars($data["tujuanSurat"]);
	    $perihal 		= htmlspecialchars($data["perihal"]);
	    $disposisi 		= htmlspecialchars($data["disposisi"]);

	    $query = "UPDATE tb_suratmasuk SET noAgenda = '$noAgenda', tglMasuk = '$tglMasuk' , noSurat = '$noSurat' ,  asalSurat = '$asalSurat', contactPerson = '$contactPerson', tujuanSurat = '$tujuanSurat', perihal = '$perihal', disposisi = 'disposisi' WHERE id = $id";
	    mysqli_query($koneksi, $query);

	    return mysqli_affected_rows($koneksi);
	}  	

	function hapusSuratMasuk($id){
		global $koneksi;

	    mysqli_query($koneksi, "DELETE FROM tb_suratmasuk WHERE id = '$id'");


	    return mysqli_affected_rows($koneksi);
	}
?>