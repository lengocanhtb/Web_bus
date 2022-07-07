<?php
    class VeThuong
    {
        private $conn;
		function  __construct()
   		{
    		$this->conn = $conn = new mysqli("localhost", "root", "", "bus");
     			// Check connection
    		if ($conn->connect_error) {
      			die("Connection failed: " . $conn->connect_error);
    		}
  		}
        function view()
        {
            // Câu truy vấn
            $ticket1 = array();
            $sql= "SELECT * FROM VeThuong";
            $i=0;
            $result = mysqli_query($this->conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                  $ticket1[$i++]=$row;
                }
              } else {
                echo "0 results";
              }
            return $ticket1;
        }
        // hàm lấy danh sách vé theo khách hàng
        function getTicketByUser($MaKH)
        {
            $sql= "SELECT * FROM VeThuong WHERE MaKH = '{$MaKH}'";
            $result = mysqli_query($this->conn, $sql);
            return $result;
        }
        // hàm thêm vé
        function addTicket($MaTuyen, $MaKH, $ThoiGian)
        {
            $sql = "INSERT INTO VeThuong(MaTuyen, MaKH, ThoiGian, TrangThai) VALUES ('{$MaTuyen}','{$MaKH}','{$ThoiGian}',1)";
            $result = mysqli_query($this->conn, $sql);
            return $result;
        }

        function status($MaVe)
        {
            $sql = "SELECT TrangThai FROM VeThuong WHERE MaVe = '{$MaVe}'";
            $result = mysqli_query($this->conn,$sql);
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                $row = mysqli_fetch_assoc($result);
                $TrangThai = $row['TrangThai'];
                return $TrangThai;
            } else {
                echo "Mã vé không chính xác !!!";
            }
        }
        // hàm cập nhật trạng thái
        function update($MaVe)
        {
            $sql = "UPDATE VeThuong SET TrangThai = 0 WHERE MaVe = '{$MaVe}' ";
            if (mysqli_query($this->conn, $sql)) {
                return true;
            } else {
                return false;
            } 
        }
    }