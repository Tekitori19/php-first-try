<?php
if (isset($_FILES['picture1'])) {
    $picture = $_FILES['picture1'];
    $path = __DIR__ . '/uploadFiles';
    if (!is_dir($path))
        mkdir($path);
    // Hàm di chuyển file
    if ( move_uploaded_file( $picture['tmp_name'],
            __DIR__ . '/uploadFiles/' . $picture['name'])) {
        echo 'Upload file thành công!';
    } else {
        echo 'Upload file không thành công!';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <img src="uploadFiles/group.JPG" width="300px" height="300px" > -->
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="picture1">
        <input type="submit">
    </form>
</body>

</html>