<?php
    const POSTS = [
        "Tiêu đề 1" => "Nội dung bài đăng 1",
        "Tiêu đề 2" => "Nội dung bài đăng 2",
        "Tiêu đề 3" => "Nội dung bài đăng 3",
        "Tiêu đề 4" => "Nội dung bài đăng 4",
        "Tiêu đề 5" => "Nội dung bài đăng 5",
        "Tiêu đề 6" => "Nội dung bài đăng 6"
    ];
?>

<h1>Báo sinh viên</h1>

<?php foreach (POSTS as $title => $content):?>
    <div style="margin-top: 8px;">
        <h2><?= $title?></h2>
        <p><?= $content?></p>
    </div>
<?php endforeach;?>