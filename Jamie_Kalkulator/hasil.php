<html>
    <head>
        <title>kalkulator</title>
        <link href="style1.css" rel="stylesheet" type="text/CSS">
    </head>
    <body>
        <form>
            <h1>Hasil</h1>
            <?php
                $angka1=$_GET['angka1'];
                $angka2=$_GET['angka2'];
                $operator=$_GET['operator'];

                if($operator == '+'){
                $hasil = $angka1 + $angka2;
                }else if($operator == '-'){
                $hasil = $angka1 - $angka2;
                }else if($operator == ':'){
                $hasil = $angka1 / $angka2;
                }else if($operator == 'x'){
                $hasil = $angka1 * $angka2;
                }
                echo $angka1 . $operator . $angka2 . '=' . $hasil;
            ?>
            <a href="kalkulator.php">Kembali</a>
            <a type="button" onclick= "return window.print()">Cetak</a>
        </form>
    </body>
</html>
