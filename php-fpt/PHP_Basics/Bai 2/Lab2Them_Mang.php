<?php

$mang_so_nguyen = [
    78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,  
	68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73
];
$trung_binh = 0;


function in5So($mang_so_nguyen) {
    $arr = [];
    foreach ($mang_so_nguyen as $value) {
        if (count($arr)===5) {
            break;
        }
        if (!in_array($value, $arr) ) {
            $arr[] = $value;
        }
    }
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
}

foreach ($mang_so_nguyen as $value) {
    $trung_binh += $value;
}

$trung_binh = $trung_binh / count($mang_so_nguyen);
echo $trung_binh;

array_multisort($mang_so_nguyen);
in5So($mang_so_nguyen);

array_multisort($mang_so_nguyen, SORT_DESC);
in5So($mang_so_nguyen);