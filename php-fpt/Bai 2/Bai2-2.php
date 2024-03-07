<?php
echo "<br>";
echo "Bài 1<br>";
$age = 51;

echo match (true) {
    $age <= 30 => "your age less than or equal 30!",
    $age <= 40 => "your age between 30 and 40!",
    $age <= 50 => "your age between 40 and 50!",
    default => "your age greater than 50!"
};

echo "<br>";
echo "Bài 2<br>";
$max = 0;
$i = 0; 
$j = 1; 
$result = 0;

while ($max < 10) {
    $result = $i + $j;

    $i = $j;
    $j = $result;

    $max +=1;
    echo $result.",";
}

echo "<br>";
echo "Bài 3<br>";

$fruits = ["apple","banana","orange","grapes"];
foreach ($fruits as $fruit) {
    echo $fruit."<br>";
}

$employees = [
    "name" => "Mặc Vy",
    "age" => 22,
    "job" => "giáo viên ngữ văn"
];
foreach ($employees as $key => $value) {
    echo "<br>";
    echo sprintf("%s: %s, ", $key, $value);
}

echo "<br>";
echo "Bài 4<br>";

echo "Simple Break";
for ($i=1; $i <= 2; $i++) { 
    echo "\n".'$i = '.$i.' ';
    for ($j=1; $j < 6; $j++) { 
        if ($j === 2) {
            break;
        }
        echo '$j = '.$j.' ';
    }
}

echo "<br>Multi-level Break";
for ($i=1; $i <=2 ; $i++) { 
    echo "\n".'$i = '.$i.' ';
    for ($j=1; $j < 6; $j++) { 
        if ($j === 2) {
            break 2;
        }
        echo '$j = '.$j.' ';
    }
}