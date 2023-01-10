<?php

    class tknhanModel {

        public function getTaiKhoan($SoTaiKhoan) {
            require_once('KetNoi.php');
            $kn = new KetNoi;
            $kn->KetNoi();

            $sql = "select * from taikhoan where SoTaiKhoan='$SoTaiKhoan'";

            $result = $kn->cn->query($sql);

            $kn->cn->close();
            if($result->num_rows > 0) {
                foreach($result as $i)
                    return $i;
            }
            else
                return null;
        }

    }

    // $tknhan = new tknhanModel;
    // $result = $tknhan->getTaiKhoan('vnnquang');
    // echo $result['HoTen'];
?>
