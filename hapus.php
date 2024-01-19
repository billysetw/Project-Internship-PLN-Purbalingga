<?php 

	include './db/config.php';
	$id = $_GET["id"];

    if (hapusSuratMasuk($id)) {
        echo "
            <script>
                alert('Data Berhasil di Hapus');
                document.location.href = 'monitoring.php';
            </script>
            ";
    }else {
        echo "
            <script>
                alert('Data Gagal di Hapus');
                document.location.href = 'monitoring.php';
            </script>
            ";
    }

?>