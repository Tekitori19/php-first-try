<?php
    require 'database.php';

    if (isset($_POST['submit'])) {
        $params = [
            'tensach' => $_POST['tensach'] ?? '',
            'hinhanh' => $_POST['hinhanh'] ?? '',
            'tacgia' => $_POST['tacgia'] ?? '',
            'giatien' => floatval($_POST['giatien']) ?? 0,
            'nxb' => $_POST['nxb']
        ];

        try {
            
        $stmt = $pdo->prepare("
            INSERT INTO SACH
            (
                TENSACH, HINHANH, TACGIA, GIATIEN, NHAXUATBAN
            )
            VALUES
            (
                :tensach, :hinhanh, :tacgia, :giatien, :nxb
            )
        ");

        $stmt->execute($params);
        echo "thêm thành công";
        } catch (PDOException $e) {
            throw new Error("Thêm thất bại: {$e->getMessage()}");
        }

    }
?>

<form action="insert.php" method="post">
    <div>
        <label for="tensach">Tên sách: </label>
        <input type="text" name="tensach" id="tensach">
    </div>
    <div>
        <label for="hinhanh">Hình ảnh: </label>
        <input type="text" name="hinhanh" id="hinhanh">
    </div>
    <div>
        <label for="tacgia">Tác giả: </label>
        <input type="text" name="tacgia" id="tacgia">
    </div>
    <div>
        <label for="giatien">Giá tiền: </label>
        <input type="text" name="giatien" id="giatien">
    </div>
    <div>
        <label for="nxb">NXB</label>
        <input type="text" name="nxb" id="nxb">
    </div>
    <div>
        <button type="submit" name="submit">Thêm</button>
    </div>
</form>