<?php
    class TuyenBuyt
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
        //Hàm kiểm tra đăng nhập
        function getListByTuyen($MaTuyen)
        {
            // Câu truy vấn
            $sql="SELECT * FROM TuyenBuyt 
                  INNER JOIN DiemDung ON diemdung.MaDiemDung = tuyenbuyt.MaDiemDung 
                  AND MaTuyen='{$MaTuyen}'";
            $result = mysqli_query($this->conn, $sql);
            return $result;
        }
        // Hàm lấy giá vé
        function getPriceTicket($MaTuyen)
        {
            $sql = "SELECT GiaVe FROM TuyenXe WHERE MaTuyen='{$MaTuyen}'";
            $result = mysqli_query($this->conn, $sql);
            return $result;
        }
        
    }

?>