<?php
class Khachhang {
  private $Ten;
  private $Diachi;
  private $Email;
  private $Sodienthoai;
  private $Loaikhachhang;

  public function setTen($ten) {
    $this->Ten = $ten;
  }

  public function setDiachi($diachi) {
    $this->Diachi = $diachi;
  }

   public function setEmai($email) {
    $this->Email = $email;
  }
   public function setSodienthoai($soDT)
    {
        $this->Sodienthoai = $soDT;
    }
    public function setLoaikhachhang($khachhang)
    {
        $this->Loaikhachhang = $khachhang;{
            return $this->Loaikhachhang;
        }
    }
  }


class Nhanvien {
  private $Ten;
  private $Diachi;
  private $Email;
  private $Sodienthoai;
  private $Bangcap;

  public function setTen($ten) {
    $this->Ten = $ten;
  }

  public function setDiachi($diachi) {
    $this->Diachi = $diachi;
  }

   public function setEmai($email) {
    $this->Email = $email;
  }
   public function setSodienthoai($soDT)
    {
        $this->Sodienthoai = $soDT;
    }
    public function setBangcap($bangcap)
    {
        $this->Bangcap = $bangcap; 
    }
  

  public function lienHe($soDT) {
    $this->Sodienthoai = $soDT;
    echo "Thông tin liên hệ của khách hàng là: <br>";
    echo "Họ tên: " . $this->Ten . "<br>";
    echo "Địa chỉ: " . $this->Diachi . "<br>";
    echo "Email: " . $this->Email . "<br>";
    echo "Số điện thoại: " . $this->Sodienthoai . "<br>";
    echo "Bằng cấp: " . $this->Bangcap . "<br>";

  }
}


$nhanVien1 = new NhanVien();
$nhanVien1->setTen("Cao Tuyến");
$nhanVien1->setDiachi("101B-Lê Hữu Trác");
$nhanVien1->setEmai("caotuyenks1605@gmail.com");
$nhanVien1->setSodienthoai("0964984046");
$nhanVien1->setBangcap("Đại Học");



$khachHang1 = new Khachhang();
$khachHang1->setTen("Cao Tuyến");
$khachHang1->setDiachi("101B-Lê Hữu Trác");
$khachHang1->setEmai("caotuyenks1605@gmail.com");
$khachHang1->setSodienthoai("0964984046");
$khachHang1->setLoaikhachhang("VIP");
{
    echo "Thông tin khách hàng: <br>";
    echo "Họ tên: " . $khachHang1->Ten . "<br>";
    echo "Địa chỉ: " . $khachHang1->Diachi . "<br>";
    echo "Email: " . $khachHang1->Email . "<br>";
    echo "Số điện thoại: " . $khachHang1->Sodienthoai . "<br>";
    echo "Loại khách hàng: " . $khachHang1->Loaikhachhang . "<br>";

    echo "<br>";

    echo "Thông tin nhân viên: <br>";
    echo "Họ tên: " . $nhanVien1->Ten . "<br>";
    echo "Địa chỉ: " . $nhanVien1->Diachi . "<br>";
    echo "Email: " . $nhanVien1->Email . "<br>";
    echo "Số điện thoại: " . $nhanVien1->Sodienthoai . "<br>";
    echo "Bằng cấp: " . $nhanVien1->Bangcap . "<br>";
}


?>

