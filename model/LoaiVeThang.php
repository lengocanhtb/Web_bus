<?php
    class LoaiVeThang
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
        function updatePrice($GiaVe, $MaLoaiVe)
        {
            // Câu truy vấn
            $sql = "UPDATE LoaiVeThang SET GiaVe='{$GiaVe}' WHERE MaLoaiVe= $MaLoaiVe";
            if (mysqli_query($this->conn, $sql)) {
                return true;
            } else {
                return false;
            }
            
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
        // hàm câ
    }