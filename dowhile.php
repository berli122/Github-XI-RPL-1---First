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
    
        $a = 0;
        do {
            echo "<br>";
            $a++;
            $i = 1;
            do {
                echo $i." ";
                $i++;
            } while ($i <= $a );
        }  while ($a < $b);
    
    } else if ($plh == 2) {
    
        echo "<center>";
        $a = $b+1;
        do {
            
            $a--;
            echo "<br>";
            $c = $b;
            do {
                echo "&nbsp";
                $c--;
            } while ($c > $a);
            
            $j = 1; 
            do {
                
                echo $j." ";
                $j++;
            } while ($j <= $a );
            
        }  while ($a > 1 );
        echo "</center>";
    
    } else if ($plh == 3) {
    
        $a = $b;
        do {
            echo "<br>";
            $a--;
            $i >= $b;
            do {
                print $i." ";
                $i--;
            } while ($i >= $a );
        }  while ($a >= 1);
    
    }
}


?>










