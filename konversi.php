<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="get">
        Masukkan nilai :
        <input type="number" name="angka"> <br>
        <input type="submit" value="konversi"><br>
    </form>
    hasil konversi:
    <?php
    $angka = null;
    class konversi
    {
        function nilai($angka)
        {
            if ($angka <= 40) {
                $angka = 'E';
                echo "<input type='text' value='$angka'>";;
            }
            elseif ($angka <= 60) {
                $angka = 'D';
                echo "<input type='text' value='$angka'>";;
            }
            elseif ($angka <= 80) {
                $angka = 'C';
                echo "<input type='text' value='$angka'>";;
            }
            elseif ($angka <= 95) {
                $angka = 'B';
                echo "<input type='text' value='$angka'>";;
            }
            elseif ($angka <= 100) {
                $angka = 'A';
                echo "<input type='text' value='$angka'>";;
            }
        }
    }
    $konversi = new konversi;
    if (isset($_GET['angka'])) {
        $angka = $_GET['angka'];
    }
    $hasil = $konversi->nilai($angka)

    ?>
</body>

</html>