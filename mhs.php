<?php
include 'koneksi.php';
if(isset($_POST['submit'])){
	$nama = $_POST['nama'];
}
else
	$nama = '';
?>
<!DOCTYPE html>
<html>
	<head>
		<title>mhs</title>
	</head>
<body>
	<?php include 'header.php';?>
	<?php include 'menu.php';?>

	<table width='100%' border='1'>
		<thead>
			<tr>
				<th width='5%'>No.</th>
				<th width='15%'>NPM</th>
				<th width='25%'>Nama</th>
				<th>Alamat</th>
			</tr>
		</thead>
		<tbody>
			<br>
			<form action="" method="post">
				Cari mhs <input type="text" name="nama" value="<?= $nama?>" placeholder="nama"> 
				<input type="submit" name="submit" value="Cari">
			</form>
			<?php
			$sql = "SELECT * FROM mhs WHERE nama LIKE '%$nama%'";
			$res = $conn->query($sql);
			if($res->num_rows > 0){
			$i = 0;
			while($dat = $res->fetch_assoc()){
				$i++;
				echo "<tr>
				<td>$i</td>
				<td><a href='mhs_detil.php?npm=".$dat['npm']."'>".
				$dat["npm"]."</a></td>
				<td>".$dat["nama"]."</td>
				<td>".$dat["alamat"]."</td>
				</tr>";
				}
			}
			?>
		</tbody>
	</table>
</body>
</html>