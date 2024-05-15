<?php
echo "<br>";
echo "Bài 1<br>";
$colors = ["red", "green", "blue"];

print_r($colors);

$ages = [];
$ages[] = 20;
$ages[] = 22;
$ages[] = 24;
$ages[] = 26;

echo "<br>";
var_dump($ages);

$salaries = [
    "Thảo Vy" => "100",
    "Nguyệt Anh" => "90",
    "Mặc Vy" => "80",
    "Yến Nhi" => "70"
];
?>

<?php
echo "<br>";
echo "<br>";
echo "Bài 2<br>";
?>
<ul>
<?php foreach ($salaries as $key => $value) {
    ?>
        <li>Nhân viên <?=$key?> có lương <?= $value?>$</li>
    <?php
}
?>
</ul>

<?php
    const LOCATION = "/location";
    const CLASSES = LOCATION."/code/classes";
    const FUNCTIONS = LOCATION."/code/functions";
    const USERDIR = LOCATION."/user";

    // echo LOCATION,CLASSES,FUNCTIONS,USERDIR;
?>