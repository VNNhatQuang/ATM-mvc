<?php

    class DangNhapModel {
        
        public function ktdn($stk, $mk) {
            require_once('KetNoi.php');
            $kn = new KetNoi;
            $kn->KetNoi();

            $sql = "select * from taikhoan where SoTaiKhoan='$stk' and MatKhau='$mk'";
            $result = $kn->cn->query($sql);

            $kn->cn->close();
            if($result->num_rows == 1) {
                // Vì câu lệnh query trả về kiểu mảng nên để lấy phần tử đầu tiên, phải làm như dưới:
                foreach ($result as $i)
                    return $i;
            }
            else
                return null;
        }


    }

?>
