<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                Soal 1 <br>
            </tr>
            <tr>
                Soal 2 <br>
            </tr>
            <tr>
                Soal 3 <br>
            </tr>
            <tr>
                <td>
                    <label for="">
                        Pilih Soal? 
                    </label>
                </td>
                <td>
                    <input type="text" name="tre" id="">

                </td>
            </tr>
            <tr>
                <td>
                    <label for="">
                        Masukan Angka! 
                    </label>
                </td>
                <td>
                    <input type="number" name="ttw" id="">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name= "tr" value="SET">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php

if (isset($_POST['tr'])) {
    $plh = $_POST['tre'];
    $b = $_POST['ttw'];

    if ($plh == 1) {
        for ($a = 0; $a <= $b; $a++) {
            for ($i = 1; $i <= $a; $i++) {
                echo $i." ";
            }
            echo "<br>";
        }

    } else if ($plh == 2) {
        for ($a = $b ; $a >= 1; $a--) {
            for ($c = $b; $c > $a; $c--) {
                echo "&nbsp";
            }
            for ($j = 1; $j <= $a; $j++) {
                echo $j." ";
            }
            echo "<br>";
        }

    } else if ($plh == 3) {
        for ($a = $b; $a >= 1; $a--) {
            for ($i = $b; $i >= $a; $i--) {
                print $i." ";
            }
            echo "<br>";
        }
    }

}