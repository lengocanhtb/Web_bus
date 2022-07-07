<?php
    class TheXeBus
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
        // tạo thẻ
        function create($SĐT, $SoDu, $TheVatLy, $MaKH, $SoThe){
            $sql = "INSERT INTO TheXeBuyt values ('{$SĐT}','{$SoDu}','{$TheVatLy}','{$MaKH}','{$SoThe}')";
            $result = mysqli_query($this->conn,$sql);
            return $result;
        }
        // lấy thông tin thẻ
        function view($MaKH){
            $sql = "SELECT * FROM TheXeBuyt WHERE MaKH ='{$MaKH}'";
            $result = mysqli_query($this->conn,$sql);
            return $result;
        }
        //Hàm kiểm tra đăng nhập
        function getCard($SoThe, $MaKH)
        {
            $SoThe = mysqli_real_escape_string($this->conn, $SoThe);
            // Câu truy vấn
            $sql = "SELECT * FROM TheXeBuyt WHERE SoThe= '{$SoThe}' AND MaKH ='{$MaKH}'";
            $result = mysqli_query($this->conn,$sql);
            return $result;
        }
        // hàm nạp tiền
        function addMoney($MaThe, $SoDu)
        {
            $MaThe = mysqli_real_escape_string($this->conn, $MaThe);
            $SoDu = mysqli_real_escape_string($this->conn, $SoDu);
            $sql = "UPDATE TheXeBuyt SET SoDu = '{$SoDu}' where MaThe ='{$MaThe}'";
            $result = mysqli_query($this->conn,$sql);
            return $result;
        }
        // hàm lấy số dư
        function getMoney($MaKH)
        {
            $sql = "SELECT SoDu FROM TheXeBuyt WHERE MaKH = '{$MaKH}'";
            $result = mysqli_query($this->conn, $sql);
            return $result;
        }
        // hàm update số tiền
        function updateMoney($SoDu)
        {
            $SoDu = mysqli_real_escape_string($this->conn, $SoDu);
            $sql = "UPDATE TheXeBuyt SET SoDu = '{$SoDu}'";
            $result = mysqli_query($this->conn, $sql);
            return $result;
        }
        // kiểm tra người dùng đã có thẻ hay chưa
        function checkCard($MaKH)
        {
            $sql = "SELECT MaThe FROM TheXeBuyt WHERE MaKH = '{$MaKH}'";
            $result = mysqli_query($this->conn, $sql);
            if(mysqli_num_rows($result) > 0){
                return true;
            } else {
                return false;
            }
        }
    }