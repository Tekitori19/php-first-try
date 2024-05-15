<?php
echo "Bài 1:<br>";
$x = (2 == 3);
var_dump($x);
echo "<br>";

$x = (2 != 3);
var_dump($x);
echo "<br>";

$x = (2 <> 3);
var_dump($x);
echo "<br>";

$x = (2 === "2");
var_dump($x);
echo "<br>";

$x = (2 !== "2");
var_dump($x);
echo "<br>";

$x = (2 > 3);
var_dump($x);
echo "<br>";

$x = (2 < 3);
var_dump($x);
echo "<br>";

$x = (2 >= 3);
var_dump($x);
echo "<br>";

$x = (2 <= 3);
var_dump($x);
echo "<br>";

echo "<br>Bài 2: <br>";
$a = "Hello \"World\"";
echo $a;

function add($num1, $num2) {
    echo $num1 + $num2;
}
?>


<!-- https://stackoverflow.com/questions/13447554/how-to-get-input-field-value-using-php -->
<br>
<br>
<p>Bài 3:</p>
<form name="form" action="" method="get">
    <label for="so1">Nhập số thứ nhất:</label>
    <br>
    <input type="number" name="so1" id="so1" >
    <br>
    <label for="so2">Nhập số thứ hai:</label>
    <br>
    <input type="number" name="so2" id="so2" >
    <br>
    <button type="submit">Gửi</button>
</form>

<?php
   $so1 = $_GET["so1"] ?? "chưa có giá trị 1";
   $so2 = $_GET["so2"] ?? "chưa có giá trị 2";
   echo (float)$so1+(float)$so2;
?>