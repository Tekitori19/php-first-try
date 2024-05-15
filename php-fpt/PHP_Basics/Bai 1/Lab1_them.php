<?php
    $datas = [
        'tư vấn' => 1000,
        'kinh doanh' => 1500,
        'IT' => 2000
    ];
    echo "Bài 1"."<br>";
?>
<table border="1">
    <?php foreach ($datas as $key => $value) { ?>
        <tr>
            <?php 
            echo "<td style=\"color: blue;\">"."Lương nhân viên ".$key."</td>" ?>
            <?= "<td>". $value."$"."</td>"?>
        </tr>
    <?php }
    ?>
</table>

<?php
    echo "<br>"."Bài 2"."<br>";
    $file = basename($_SERVER["PHP_SELF"]);
    $so_dong = count(file($file));
    echo "Có $so_dong dòng trong $file"."<br>"
?>

<?php
    echo "<br>"."Bài 3"."<br>";
    function kiem_tra_so($so) {
       return match (true) {
            $so > 20 => "số lớn hơn 20",
            $so > 15 => "số lớn hơn 15",
            $so > 10 => "số lớn hơn 10",
            default => "số không lớn hơn 10, 15, 20"
        };
    };
    echo kiem_tra_so(21)."<br>";
    echo kiem_tra_so(16)."<br>";
    echo kiem_tra_so(11)."<br>";
    echo kiem_tra_so(10)."<br>";
?>