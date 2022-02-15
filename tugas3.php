<?php

$pro = [

    '11' => 'ACEH',
    '12' => 'SUMATERA UTARA',
    '13' => 'SUMATERA BARAT',
    '14' => 'RIAU',
    '15' => 'JAMBI',
    '16' => 'SUMATERA SELATAN',
    '17' => 'BENGKULU',
    '18' => 'LAMPUNG',
    '19' => 'KEPULAUAN BANGKA BELITUNG',
    '21' => 'KEPULAUAN RIAU',
    '31' => 'DKI JAKARTA',
    '32' => 'JAWA BARAT',
    '33' => 'JAWA TENGAH',
    '34' => 'DI YOGYAKARTA',
     '35' => 'JAWA TIMUR',
     '36' => 'BANTEN',
     '51' => 'BALI',
     '52' => 'NUSA TENGGARA BARAT',
     '53' => 'NUSA TENGGARA TIMUR',
     '61' => 'KALIMANTAN BARAT',
     '62' => 'KALIMANTAN TENGAH',
     '63' => 'KALIMANTAN SELATAN',
     '64' => 'KALIMANTAN TIMUR',
     '65' => 'KALIMANTAN UTARA',
     '71' => 'SULAWESI UTARA',
     '72' => 'SULAWESI TENGAH',
     '73' => 'SELAWESI SELATAN',
     '74' => 'SULAWESI TANGGARA',
     '75' => 'GORONTALO',
     '76' => 'SULAWESI BARAT',
     '81' => 'MALUKU',
     '82' => 'MALUKU UTARA',
     '91' => 'PAPUA BARAT',
     '94' => 'PAPUA', 
];


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="tugas3.css">
        <title>Document</title>
    </head>
    <body>
        <div class="color">
            <table class = "tabel">
                <h2>Original</h2>
                <tr class = "tr1">
                    <th>ID</th>
                    <th>PROVINSI</th>
                </tr>
                <?php

                foreach ($pro as $key => $array) {
                    echo '
                    <tr class = tr2>
                        <td>'.$key.'</td>
                        <td>'.$array.'</td>
                    </tr>
                    ';
                }

                ?>
            </table>
            <table class = "tabel">
                <h2>Move To The Top JAWA BARAT, DKI JAKARTA, DI YOKYAKARTA</h2>
                <tr class = "tr1">
                    <th>ID</th>
                    <th>PROVINSI</th>
                </tr>        
            <?php
                move_to_top($pro, '34');
                move_to_top($pro, '31');
                move_to_top($pro, '32');
                function move_to_top(&$array, $key) {
                    $temp = array($key => $array[$key]);
                    unset($array[$key]);
                    $array = $temp + $array;
                }
    
            foreach ($pro as $key => $array) {
                echo '
                <tr class = tr2>
                    <td>'.$key.'</td>
                    <td>'.$array.'</td>
                </tr>
                ';
            }
    
            ?>
        </table>
        <table class = "tabel">
            <h2>Move To Bottom SUMATRA BARAT, ACEH</h2>
            <tr class = "tr1">
                <th>ID</th>
                <th>Provinsi</th>
            </tr>
            <?php
        move_to_bottom($pro, '13');
        move_to_bottom($pro, '11');
        function move_to_bottom(&$array, $key) {
            $value = $array[$key];
            unset($array[$key]);
            $array[$key] = $value;
        }
        foreach ($pro as $key => $array) {
            echo '
            <tr class = tr2>
                <td>'.$key.'</td>
                <td>'.$array.'</td>
            </tr>
            ';
        }
        ?>
        </table>
    </div>
    
    
</body>
</html>