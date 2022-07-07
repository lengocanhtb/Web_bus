<?php
    class Admin
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
        function getAdmin($SĐT)
        {
            // Câu truy vấn
			$SĐT = mysqli_real_escape_string($this->conn, $SĐT);
            $sql = "SELECT * FROM QuanLy WHERE MaQL = '{$SĐT}'";
            // thực thi
            $result = $this->conn->query($sql);
            // Trả về kết quả
            return $result;
        }
        //Hàm kiểm tra đăng nhập
        function checkAdmin($SĐT, $MatKhau)
        {
            $SĐT = mysqli_real_escape_string($this->conn, $SĐT);
			$MatKhau = mysqli_real_escape_string($this->conn, $MatKhau);
            // Câu truy vấn
            $sql = "SELECT * FROM QuanLy WHERE MaQL = '{$SĐT}' AND MatKhau = '{$MatKhau}'";
            // thực thi
            $result = $this->conn->query($sql);
            // Trả về kết quả
            return $result;
        }
        
    }