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
        while ($a < $b) {
            echo "<br>";
            $a++;
            $i = 1;
            while ($i <= $a ) {
                echo $i." ";
                $i++;
            } 
        }  
    
    } else if ($plh == 2) {
    
        
        $a = $b+1;
        while ($a > 1 ) {
            
            $a--;
            echo "<br>";
            $c = $b;
            while ($c > $a) {
                echo "&nbsp";
                $c--;
            } 
            
            $j = 1; 
            while ($j <= $a ) {
                
                echo $j." ";
                $j++;
            } 
            
        }  
        
    
    } else if ($plh == 3) {
    
        $a = $b;
        while ($a >= 1) {
            echo "<br>";
            $a--;
            $i >= $b;
            while ($i >= $a ) {
                print $i." ";
                $i--;
            } 
        }  
    
    }
}


?>