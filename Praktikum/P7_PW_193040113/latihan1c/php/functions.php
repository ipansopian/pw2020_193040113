<?php
function koneksi() {
	$conn = mysqli_connect("localhost", "root",  "")
	or die ("Koneksi ke DB gagal");
mysqli_select_db($conn, "tubes_193040113") or die ("Database salah");

return $conn;

}
function query ($buku) {
    $conn = koneksi();
		$result = mysqli_query ($conn, $buku);
		if (mysqli_num_rows($result) == 1) {
			return mysqli_fetch_assoc($result);
		}
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

function tambah($data){
	$conn = koneksi();
	 
			$No = htmlspecialchars($data["No"]);
   	 	$Gambar = htmlspecialchars($data["Gambar"]);
    	$NamaBuku = htmlspecialchars($data["NamaBuku"]);
    	$Pengarang = htmlspecialchars($data["Pengarang"]);
    	$Harga = htmlspecialchars($data["Harga"]);
    	$TahunRilis = htmlspecialchars($data["TahunRilis"]);

    $query = "INSERT INTO bukubestseller 
										VALUES
    					(null,'$No','$Gambar','$NamaBuku','$Pengarang','$TahunRilis','$Harga') ";

		mysqli_query($conn, $query) or die(mysqli_error($conn));
		echo mysqli_error($conn);
		return mysqli_affected_rows($conn);
}

function hapus($id){
   $conn= koneksi();
	 mysqli_query($conn, "DELETE FROM bukubestseller WHERE id=$id")
	 or die(mysqli_error($conn)); 
   return mysqli_affected_rows($conn);
}
function ubah($data)
{
	$conn = koneksi();

			$id = htmlspecialchars($data["id"]);
			$No = htmlspecialchars($data["No"]);
			$Gambar = htmlspecialchars($data["Gambar"]);
			$NamaBuku = htmlspecialchars($data["NamaBuku"]);
			$Pengarang = htmlspecialchars($data["Pengarang"]);
			$Harga = htmlspecialchars($data["Harga"]);
			$TahunRilis = htmlspecialchars($data["TahunRilis"]);
	
	$query = "UPDATE bukubestseller SET
						
						No = '$No',
						Gambar =	'$Gambar', 
						NamaBuku = '$NamaBuku', 
						pengarang = '$pengarang', 
						Harga = '$Harga',
						TahunRilis = '$TahunRilis',
						Harga = '$Harga'
					
						WHERE id = '$id'";

	mysqli_query($conn, $query) or die(mysqli_error($conn));
	return mysqli_affected_rows($conn);
}
function cari($keyword){
$query = "SELECT * FROM bukubestseller
					WHERE
					NamaBuku = '$keyword'
					";
return query ($query);
}
function registrasi($data){
	$conn = koneksi();
	$username = strtolower(stripcslashes($data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);

	// cek username sudah ada atau belum
	$result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
	if(mysqli_fetch_assoc($result)) {
			echo "
			<script>
					alert('username sudah digunakan');
			</script>";
			return false;
	}

	//enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);

	// tambah user baru
	$query_tambah = "INSERT INTO user VALUES ('' , '$username' , '$password')";
	mysqli_query($conn, $query_tambah);

	return mysqli_affected_rows($conn);
}
