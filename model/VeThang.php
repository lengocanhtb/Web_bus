<?php
    class VeThang
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
            $ticket2 = array();
            $sql= "SELECT * FROM VeThang";
            $i=0;
            $result = mysqli_query($this->conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                  $ticket2[$i++]=$row;
                }
              } else {
                echo "0 results";
              }
            return $ticket2;
        }
        //Hàm lấy giá vé tháng
        function getPriceTicket($MaLoaiVe)
        {
            // Câu truy vấn
            $sql = "SELECT GiaVe FROM LoaiVeThang Where MaLoaiVe = '{$MaLoaiVe}'";
            $result = mysqli_query($this->conn, $sql);
            return $result;
        }
        //
        function getTicketByUser($MaKH)
        {
            $sql= "SELECT * FROM VeThang WHERE MaKH = '{$MaKH}'";
            $result = mysqli_query($this->conn, $sql);
            return $result;
        }
        // hàm thêm vé
        function addTicket($MaTuyen, $MaKH, $ThoiGian, $Thang, $MaLoaiVe)
        {
            $sql = "INSERT INTO VeThang(MaTuyen, MaKH, ThoiGian, Thang, TrangThai, MaLoaiVe) VALUES ('{$MaTuyen}','{$MaKH}','{$ThoiGian}', '{$Thang}', 1, '{$MaLoaiVe}')";
            $result = mysqli_query($this->conn, $sql);
            return $result;
        }
        // hàm lấy trạng thái vé
        function status($MaVe)
        {
            $sql = "SELECT TrangThai FROM VeThang WHERE MaVe = '{$MaVe}'";
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
        // hàm update
        function update($MaVe)
        {
            $sql = "UPDATE VeThang SET TrangThai = 0 WHERE MaVe = '{$MaVe}' ";
            if (mysqli_query($this->conn, $sql)) {
                return true;
            } else {
                return false;
            } 
        }
    }