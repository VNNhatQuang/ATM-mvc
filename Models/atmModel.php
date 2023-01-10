<?php

    class atmModel {

        public function XemSoDu($SoTaiKhoan) {
            require_once('KetNoi.php');
            $kn = new KetNoi;
            $kn->KetNoi();
            $sql = "select SoTien from taikhoan where SoTaiKhoan='$SoTaiKhoan'";
            $rs = $kn->cn->query($sql);
            $kn->cn->close();
            if($rs) {
                foreach($rs as $i)
                    return $i['SoTien'];
            }
            else
                return null;
        }

        public function RutTien($SoTaiKhoan, $SoTienRut) {
            // Nếu số dư khả dụng
            if($this->XemSoDu($SoTaiKhoan) > ($SoTienRut+50000)) {
                require_once('KetNoi.php');
                $kn = new KetNoi;
                $kn->KetNoi();
                // Update bảng taikhoan
                $SoTienCon = $this->XemSoDu($SoTaiKhoan) - $SoTienRut;
                $sql = "update taikhoan set SoTien=$SoTienCon where SoTaiKhoan='$SoTaiKhoan'";
                $rs = $kn->cn->query($sql);
                // Insert vào bảng chitiettaikhoan
                $NgayRutTien = date('Y-m-d');
                $sql = "insert into chitiettaikhoan values(null,'$NgayRutTien',$SoTienRut,'$SoTaiKhoan','Rút tiền')";
                $rs = $kn->cn->query($sql);
                $kn->cn->close();
                return $rs;
            }
            else
                return false;
        }

        public function ChuyenKhoan($SoTaiKhoanG, $SoTienChuyen, $SoTaiKhoanN) {
            // Nếu số dư khả dụng
            if($this->XemSoDu($SoTaiKhoanG) > ($SoTienChuyen+50000)) {
                require_once('KetNoi.php');
                $kn = new KetNoi;
                $kn->KetNoi();
                // Trừ tiền TK người gửi
                $SoTienCon = $this->XemSoDu($SoTaiKhoanG) - $SoTienChuyen;
                $sql = "update taikhoan set SoTien=$SoTienCon where SoTaiKhoan='$SoTaiKhoanG'";
                $rs = $kn->cn->query($sql);
                // Nạp vào TK người nhận
                $SoTienCon = $this->XemSoDu($SoTaiKhoanN) + $SoTienChuyen;
                $sql = "update taikhoan set SoTien=$SoTienCon where SoTaiKhoan='$SoTaiKhoanN'";
                $rs = $kn->cn->query($sql);
                // Insert ĐÃ CHUYỂN KHOẢN vào ChiTietTaiKhoan
                $NgayRutTien = date('Y-m-d');
                $sql = "insert into chitiettaikhoan values(null,'$NgayRutTien',$SoTienChuyen,'$SoTaiKhoanG','Chuyển khoản')";
                $rs = $kn->cn->query($sql);
                // Insert NHÂN TIỀN vào ChiTietTaiKhoan
                $sql = "insert into chitiettaikhoan values(null,'$NgayRutTien',$SoTienChuyen,'$SoTaiKhoanN','Nhận tiền')";
                $rs = $kn->cn->query($sql);
                $kn->cn->close();
                return $rs;
            }
            else
                return false;
        }

        public function NapTien($SoTaiKhoan, $SoTienNap) {
            require_once('KetNoi.php');
            $kn = new KetNoi;
            $kn->KetNoi();
            // Nạp tiền vào TK
            $SoTienMoi = $this->XemSoDu($SoTaiKhoan) + $SoTienNap;
            $sql = "update taikhoan set SoTien=$SoTienMoi where SoTaiKhoan='$SoTaiKhoan'";
            $rs = $kn->cn->query($sql);
            // Cập nhật ĐÃ NẠP TIỀN vào ChiTietTaiKhoan
            $NgayRutTien = date('Y-m-d');
            $sql = "insert into chitiettaikhoan values (null,'$NgayRutTien',$SoTienNap,'$SoTaiKhoan','Nạp tiền')";
            $rs = $kn->cn->query($sql);
            $kn->cn->close();
            return $rs;
        }

        public function DoiMaPIN($SoTaiKhoan, $MaPINMoi) {
            require_once('KetNoi.php');
            $kn = new KetNoi;
            $kn->KetNoi();
            $sql = "update taikhoan set MatKhau='$MaPINMoi' where SoTaiKhoan='$SoTaiKhoan'";
            $rs = $kn->cn->query($sql);
            $kn->cn->close();
            return $rs;
        }

        public function XemLSGD($SoTaiKhoan) {
            require_once('KetNoi.php');
            $kn = new KetNoi;
            $kn->KetNoi();
            $sql = "select * from chitiettaikhoan where SoTaiKhoan='$SoTaiKhoan'";
            $rs = $kn->cn->query($sql);
            $kn->cn->close();
            return $rs;
        }




    }

?>

<?php

    $atm = new atmModel;
    // $atm->RutTien('vnnquang', 2001);
    // echo $atm->XemSoDu('vnnquang');
    // $atm->ChuyenKhoan('vnnquang', 1, 'htlam');
    // $atm->NapTien('vnnquang', 1);
    // $atm->DoiMaPIN('nvquy', 'danquy123');
    // $rs = $atm->XemLSGD('htlam');
    
?>