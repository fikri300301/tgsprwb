<?php 
include 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah tahun kuliah</title>
</head>

<body>
    <form action="ta_proc.php" method="post">
        id:
        <input type="text" name="id">
        <br>tahun
        <input type="text" name="nama">

        <button type="submit" name="proses" value="simpan">SIMPAN</button>
    </form>

</body>


</html>