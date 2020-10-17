<?php
$title = "Hapus Tanda Baca";
include "header.php";
?>
<div class="container">
    <div class="table-responisve">
        <table class="table table-striped">
        <tr>
<td>ID</td>
<td>Judul</td>
<td>Isi</td>
<td>Url</td>

</tr>
<?php
include "index.php";
include "koneksi.php";

$query = "SELECT * FROM berita";
$result = mysqli_query($koneksi,$query);
$numrows = mysqli_num_rows($result);
$no=1;
while($row = mysqli_fetch_array($result)){  
echo "<tr>";

$id1 = $row['id'];
$judul1 = $row['judul'];
$isi1 = $row['isi'];
$url1 = $row['url'];

$judul2 = preg_replace("/[^a-zA-Z]+/"," ",$judul1);
$isi2 = preg_replace("/[^a-zA-Z]+/"," ",$isi1);

echo "<td><font color=blue></font>" .  $id1 . "<br></td>"; 
echo "<td><font color=blue></font>" .  strtolower($judul2) . "<br></td>"; 
echo "<td><font color=blue></font>" .  strtolower($isi2) . "<br></td>"; 
echo "<td><font color=blue></font>" .  strtolower($url1) . "<br></td>"; 
echo "</tr>";
$no++;

}

?>
        </table>
    </div>
</div>