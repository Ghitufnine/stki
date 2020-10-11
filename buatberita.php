<?php
$title = "Buat Berita";
include 'header.php';
include 'index.php';
include 'koneksi.php';
?>
<div class="container">
	<form method='POST'>
		<table>
			<tr>
				<td><b>Judul Berita: </b></td>
				<td><input type='text' name='judul' style='width:500px' class="form-control"/></td>
			</tr>
			<tr>
				<td><b>Isi berita: </b> </td>
				<td><textarea name='isi' cols='100' rows='10' tabindex='4' class="form-control"></textarea></td>
			<tr>
			<tr>
				<td><b>URL: </b></td>
				<td><input type='text' name='url' style='width:300px' class="form-control"/></td>
			</tr>
		</table>
		<hr>
		<td><input type="submit" value="Tambah!" name="BtnAdd" class="btn btn-primary form-control"></td>

	</form>

	<?php
	if(isset($_POST['BtnAdd'])){ // jika tombol 'BtnAdd' di klik, lakukan proses:
		// ambil judul, isi berita, url
		$judul1 = $_POST['judul'];
		$isi1 = $_POST['isi'];
		$url1 = $_POST['url'];
		$id1 = str_replace(" ", "_", $judul1); // replace spasi dgn '_' utk dijadikan id_berita/

	// masukkan ke database
	$query = "INSERT INTO berita VALUES ('0','$id1','$judul1','$isi1','$url1')"; 
	$insert_query  = mysqli_query($koneksi,$query);
	}

?>
</div>