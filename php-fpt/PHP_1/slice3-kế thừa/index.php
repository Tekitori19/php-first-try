<?php

class NguoiViet {
    protected string $QQ = 'VN';
    static bool $laNguoiVN = true;

    public function __construct(public string $CCCD, public string $Ten) {}

    static function NgaoNghe() {
        if (self::$laNguoiVN) {
            echo 'Từ nơi đồng xanh thơm hương lúa';
        } else {
            echo 'Người nước ngoài';
        }
    }
};

class SinhVien extends NguoiViet {
    public string $MSSV;
    public string $Lop;

    public function __construct(string $MSSV, string $Lop, string $CCCD, string $Ten) {
        $this->MSSV = $MSSV;
        $this->Lop = $Lop;
        parent::__construct($CCCD, $Ten);
    }

    public function getQQ() {
        return $this->QQ;
    }

    public function printAll() {
        echo "<br>";
        print_r([
            $this->MSSV,
            $this->Lop,
            $this->CCCD,
            $this->Ten
        ]);
        echo "<br>";
    }

    public function nguoiNuocNgoai() {
        $this->QQ = 'NA';
        self::$laNguoiVN = false;
    }

    public function nguoiVN() {
        $this->QQ = 'VN';
        self::$laNguoiVN = true;
    }
};

$sv1 = new SinhVien('21115055120210', '21TDH2', '201888', 'Dat');
$sv2 = new SinhVien('111', '21TDH1', '111', 'Dat09');
// echo $sv1->getQQ();
// echo $sv1->printAll();
echo $sv1->NgaoNghe();
echo '<br>';
echo $sv1->nguoiNuocNgoai();
echo $sv1->NgaoNghe();
echo '<br>';
echo $sv2->NgaoNghe();