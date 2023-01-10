<?php

    class DangKyModel {

        public function dangky($SoTaiKhoan, $HoTen, $SoTien, $MatKhau) {
            require_once('KetNoi.php');
            $kn = new KetNoi;
            $kn->KetNoi();

            $sql = "insert into taikhoan values ('$SoTaiKhoan', '$HoTen', $SoTien, '$MatKhau')";
            $result = $kn->cn->query($sql);

            $kn->cn->close();
            if($result) {
                require_once('DangNhapModel.php');
                $dn = new DangNhapModel;
                return $dn->ktdn($SoTaiKhoan, $MatKhau);
            }
            else {
                print_r($result->error);
                return null;
            }

        }

    }

    // $dk = new DangKyModel;
    // $result = $dk->dangky('abcd', 'A BÊ CÊ ĐÊ', 4321, '1234');
    // echo $result['HoTen'];

?>
