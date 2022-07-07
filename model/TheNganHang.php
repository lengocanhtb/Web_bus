<?php
    class TheNganHang
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
        // lấy thông tin thẻ
        function create($SoThe, $NganHang, $MaKH){
            $NganHang = mysqli_real_escape_string($this->conn, $NganHang);
            $SoThe = mysqli_real_escape_string($this->conn, $SoThe);
            $sql = "INSERT INTO TheNganHang(SoThe, NganHang, MaKH) Value ('{$SoThe}','{$NganHang}','{$MaKH}')";
            $result = mysqli_query($this->conn,$sql);
            echo var_dump($result);
            return $result;
        }
        
    }