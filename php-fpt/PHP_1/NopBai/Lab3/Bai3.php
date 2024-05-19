<?php

class SinhVien {
    protected string $hoTen;
    protected string $maSinhVien;
    protected float $diemThi;

    public function __construct(string $hoTen, string $maSinhVien, float $diemThi) {
        $this->hoTen = $hoTen;
        $this->maSinhVien = $maSinhVien;
        $this->diemThi = $diemThi;
    }

    public function getHoTen(): string {
        return $this->hoTen;
    }

    public function getMaSinhVien(): string {
        return $this->maSinhVien;
    }

    public function getDiemThi(): float {
        return $this->diemThi;
    }

    public function xepLoai(): string {
        if ($this->diemThi >= 9) {
            return "Giỏi";
        } elseif ($this->diemThi >= 8) {
            return "Khá";
        } elseif ($this->diemThi >= 5) {
            return "Trung Bình";
        } else {
            return "Yếu";
        }
    }

    public function displayInfo(): void {
        echo "Tên: " . $this->getHoTen() . "<br>";
        echo "Mã Sinh Viên: " . $this->getMaSinhVien() . "<br>";
        echo "Điểm Thi: " . $this->getDiemThi() . "<br>";
        echo "Xếp Loại: " . $this->xepLoai() . "<br>";
    }
}

class SinhVienDaiHoc extends SinhVien {
    private string $nganhHoc;

    public function __construct(string $hoTen, string $maSinhVien, float $diemThi, string $nganhHoc) {
        parent::__construct($hoTen, $maSinhVien, $diemThi);
        $this->nganhHoc = $nganhHoc;
    }

    public function getNganhHoc(): string {
        return $this->nganhHoc;
    }

    public function xepLoai(): string {
        if ($this->diemThi >= 9.5 && $this->nganhHoc === "Công nghệ thông tin") {
            return "Xuất sắc";
        }
        return parent::xepLoai();
    }

    public function displayInfo(): void {
        parent::displayInfo();
        echo "Ngành Học: " . $this->getNganhHoc() . "\n";
    }
}

class SinhVienCaoDang extends SinhVien {
    private string $khoaHoc;

    public function __construct(string $hoTen, string $maSinhVien, float $diemThi, string $khoaHoc) {
        parent::__construct($hoTen, $maSinhVien, $diemThi);
        $this->khoaHoc = $khoaHoc;
    }

    public function getKhoaHoc(): string {
        return $this->khoaHoc;
    }

    public function xepLoai(): string {
        if ($this->diemThi >= 8.5 && $this->khoaHoc === "Nhóm ngành kỹ thuật") {
            return "Giỏi";
        }
        return parent::xepLoai();
    }

    public function displayInfo(): void {
        parent::displayInfo();
        echo "Khoa Học: " . $this->getKhoaHoc() . "\n";
    }
}

class SinhVienChinhQuy extends SinhVienDaiHoc {
    public function __construct(string $hoTen, string $maSinhVien, float $diemThi, string $nganhHoc) {
        parent::__construct($hoTen, $maSinhVien, $diemThi, $nganhHoc);
    }

    public function displayInfo(): void {
        parent::displayInfo();
    }
}

$svDaiHoc = new SinhVienDaiHoc("Nguyen Van A", "SV001", 9.6, "Công nghệ thông tin");
$svDaiHoc->displayInfo();

echo "<br>";

$svCaoDang = new SinhVienCaoDang("Tran Thi B", "SV002", 8.6, "kỹ thuật");
$svCaoDang->displayInfo();

echo "<br>";

$svChinhQuy = new SinhVienChinhQuy("Le Van C", "SV003", 9.2, "Kinh tế");
$svChinhQuy->displayInfo();

?>
