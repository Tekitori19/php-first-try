<?php

function GiaiPhuongTrinhBac1($a, $b) {
    if ($a == 0)
    {
        if ($b == 0)
        {
            echo"Phương trình vô số nghiệm";
            echo "<br>";
        } else
        {
            echo"Phương trình vô nghiệm";
            echo "<br>";
        }   
    } else
    {
        $ket_qua = -$b/$a;
        echo "Phương trình có nghiệm x = ". $ket_qua;
        echo "<br>";
    }
};

function GiaiPhuongTrinhBac2(float $a,float $b, float $c) {

    echo "Giải phương trình bậc 2 (ax^2 + bx +c = 0)";
    echo "<br>";

    if ($a == 0)
    {
        echo "Vì a bằng 0 nên thành phương trình bậc 1";
        echo "<br>";
        GiaiPhuongTrinhBac1($b, $c);
    } else {
        $delta = pow($b, 2) - 4*$a*$c;

        if ($delta < 0)
        {
            echo "Phương trình vô nghiệm";
            echo "<br>";
        } else if ($delta == 0)
        {
            $nghiem_kep = -$b/($a*2);
            echo "Phương trình có nghiệm kép: ". $nghiem_kep;
            echo "<br>";
        } else {
            $nghiem_x1 = (-$b + sqrt($delta))/(2*$a);
            $nghiem_x2 = (-$b - sqrt($delta))/(2*$a);

            echo "Phương trình có nghiệm ".$nghiem_x1." và ".$nghiem_x2;
            echo "<br>";
        }
    }
}
?>

<form name="form" action="" method="get">
    <h1>Giải phương trình bậc 2 (ax^2 + bx +c = 0)</h1>
    <label for="so1">Nhập số thứ a:</label>
    <br>
    <input type="number" name="so1" id="so1" >
    <br>
    <label for="so2">Nhập số thứ b:</label>
    <br>
    <input type="number" name="so2" id="so2" >
    <br>
    <label for="so3">Nhập số thứ c:</label>
    <br>
    <input type="number" name="so3" id="so3" >
    <br>
    <button type="submit">Gửi</button>
</form>

<?php
   $so1 = (float)($_GET["so1"] ?? "chưa có giá trị 1");
   $so2 = (float)($_GET["so2"] ?? "chưa có giá trị 2");
   $so3 = (float)($_GET["so3"] ?? "chưa có giá trị 2");
   GiaiPhuongTrinhBac2($so1, $so2, $so3);
?>
