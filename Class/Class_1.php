<?php
class Class1
{
    public $ten = '';
    public $diachi = '';
    public $email = '';
    public $phone = '';
    public function __construct($ten, $dc, $email, $phone)
    {
        $this->ten = $ten;
        $this->diachi = $dc;
        $this->email = $email;
        $this->phone = $phone;
    }
    public function hienthi()
    {
        echo '<br>';
        echo 'Thông tin cá nhân: <br>';
        echo 'Tên: ' . $this->ten . '<br>';
        echo 'Địa chỉ: ' . $this->diachi . '<br>';
        echo 'Điện thoại: ' . $this->phone . '<br>';
        echo 'Email: ' . $this->email . '<br>';

    }
    public function nhap($t1, $t2, $t3, $t4, $t5)
    {
        $this->ten = $t1;
        $this->diachi = $t2;
        $this->phone = $t3;
        $this->email = $t4;

    }
}

class Nhanvien extends Class1
{
    public $bangcap = '';
    public function __construct($ten, $dc, $email, $phone, $bc)
    {
        parent::__construct($ten, $dc, $email, $phone);
        $this->bangcap = $bc;
    }
    public function hienthi()
    {
        parent::hienthi();
        echo 'Bằng cấp: ' . $this->bangcap . '<br>';
    }
    public function nhap($t1, $t2, $t3, $t4, $t5)
    {
        parent::nhap($t1, $t2, $t3, $t4, $t5);
        $this->bangcap = $t5;
    }
}
class KhachHang extends Class1
{
    public $LoaiKH = '';
    public function __construct($ten, $dc, $email, $phone, $loaiKH)
    {
        parent::__construct($ten, $dc, $email, $phone);
        $this->LoaiKH = $loaiKH;
    }
    public function hienthi()
    {
        parent::hienthi();
        echo 'Loại Khách Hàng: ' . $this->LoaiKH . '<br>';
    }
    public function nhap($t1, $t2, $t3, $t4, $t5)
    {
        parent::nhap($t1, $t2, $t3, $t4, $t5);
        $this->LoaiKH = $t5;
    }
}


?>