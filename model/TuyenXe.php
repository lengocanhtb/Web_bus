<?php
    class TuyenXe
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
        function view()
        {
            // Câu truy vấn
            $buses = array();
            $sql= "SELECT * FROM TuyenXe";
            $i=0;
            $result = mysqli_query($this->conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                  $buses[$i++]=$row;
                }
              } else {
                echo "0 results";
              }
            return $buses;
        }
        function create($MaTuyen, $SoXe, $TGChay, $TGDung, $TGGianCach, $GiaVe)
        {
            // Câu truy vấn
            $MaTuyen = mysqli_real_escape_string($this->conn, $SoDu);
            $SoXe = mysqli_real_escape_string($this->conn, $SoXe);
            $TGGianCach = mysqli_real_escape_string($this->conn, $TGGianCach);
            $GiaVe = mysqli_real_escape_string($this->conn, $GiaVe);
            $sql = "INSERT INTO TuyenXe (MaTuyen, SoXe, TGChay, TGDung, TGGianCach, GiaVe) VALUES ( '{$MaTuyen}', '{$SoXe}', '{$TGChay}', '{$TGDung}', '{$TGGianCach}', '{$GiaVe}')";
            $result = mysqli_query($this->conn, $sql);
            return $result;
        }
        // Hàm lấy giá vé
        function delete($MaTuyen)
        {
            $sql1 = "DELETE FROM TuyenBuyt WHERE MaTuyen = '{$MaTuyen}'";
            $sql = "DELETE FROM TuyenXe WHERE MaTuyen = '{$MaTuyen}'";
            if(mysqli_query($this->conn, $sql1)&&mysqli_query($this->conn, $sql)) {
                return true;
            } else {
              return false;
            }
        }
        //
        function updatePrice($MaTuyen, $GiaVe)
        {
            $GiaVe = mysqli_real_escape_string($this->conn, $GiaVe); 
            $sql = "UPDATE TuyenXe SET GiaVe='{$GiaVe}' WHERE MaTuyen= '{$MaTuyen}'";
            if(mysqli_query($this->conn, $sql)) {
                return true;
            } else {
              return false;
            }
        }
        
    }
?>