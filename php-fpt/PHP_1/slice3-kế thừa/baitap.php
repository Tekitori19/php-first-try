<?php

enum TrachNhiem {
    case Nho;
    case Lon;
    case GiamDoc;
};

class NhanVien {
    public string $hoTen;
    protected float $luong;

    public function __construct($hoTen, $luong) {
        $this->hoTen = $hoTen;
        $this->luong = $luong;
    }

    public function getThuNhap() {
        return $this->luong;
    }
}

class TruongPhong extends NhanVien {
    public TrachNhiem $trachNhiem;

    public function __construct($hoTen, $luong, $trachNhiem) {
        $this->trachNhiem = $trachNhiem;
        parent::__construct($hoTen, $luong);
    }

    public function getThuNhap() {
        return match ($this->trachNhiem) {
            TrachNhiem::Nho => $this->luong * 30,
            TrachNhiem::Lon => $this->luong * 60,
            TrachNhiem::GiamDoc => $this->luong * 100,
            default => 'truy tố trách nhiệm hình sự'
        };
    }
}

class LaoCong extends NhanVien {
    public $soGioLamViec;

    public function __construct($hoTen, $luong, $soGioLamViec) {
        $this->soGioLamViec = $soGioLamViec;
        parent::__construct($hoTen, $luong);
    }

    public function getThuNhap() {
        return $this->luong * $this->soGioLamViec;
    }
}

$nv1 = new NhanVien('J97', 5_000_000);
echo $nv1->getThuNhap();
echo "<br>";
$tp1 = new TruongPhong('J97', 5_000_000, TrachNhiem::GiamDoc);
echo $tp1->getThuNhap();
echo "<br>";
$lc1 = new LaoCong('J97', 17_000, 30);
echo $lc1->getThuNhap();