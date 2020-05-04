<?php
function koneksi() {
	$conn = mysqli_connect("localhost", "root",  "") or die ("Koneksi ke DB gagal");
mysqli_select_db($conn, "pw_193040113") or die ("Database salah");

return $conn;

}
function query ($buku) {
      $conn = koneksi();
$result = mysqli_query ($conn, "$buku");

	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}

	return $rows;
}

?>