<?php
    class User
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
        function checkUser($SĐT, $MatKhau)
        {
            // Câu truy vấn
			$SĐT = mysqli_real_escape_string($this->conn, $SĐT);
			$MatKhau = mysqli_real_escape_string($this->conn, $MatKhau);
            $sql = "SELECT * FROM KhachHang WHERE SĐT = '{$SĐT}' AND MatKhau = '{$MatKhau}'";
            // thực thi
            $result = $this->conn->query($sql);

            // Trả về kết quả
            return $result;
        }
		function getUser($SĐT)
        {
            // Câu truy vấn
			$SĐT = mysqli_real_escape_string($this->conn, $SĐT);
            $sql = "SELECT * FROM KhachHang WHERE SĐT = '{$SĐT}'";
            // thực thi
            $result = $this->conn->query($sql);

            // Trả về kết quả
            return $result;
        }
        
        // Hàm tạo
        function addUser($SĐT, $MatKhau, $HoTen)
        {
			$SĐT = mysqli_real_escape_string($this->conn, $SĐT);
			$MatKhau = mysqli_real_escape_string($this->conn, $MatKhau);
			$HoTen = mysqli_real_escape_string($this->conn, $HoTen);
            $sql = "INSERT INTO KhachHang (SĐT, MatKhau, HoTen) VALUES ( '{$SĐT}', '{$MatKhau}', '{$HoTen}' )";

            // thực thi
            $result = mysqli_query($this->conn, $sql);

            // Trả về kết quả
             return $result;
        }
        //Hàm cập nhật thông tin tài khoản
		function updateUser($HoTen,$GioiTinh,$DiaChi,$NgaySinh,$MaKH)
		{
			//Câu truy vấn
			$HoTen = mysqli_real_escape_string($this->conn, $HoTen);
			$GioiTinh = mysqli_real_escape_string($this->conn, $GioiTinh);
			$DiaChi = mysqli_real_escape_string($this->conn, $DiaChi);
			$NgaySinh = mysqli_real_escape_string($this->conn, $NgaySinh);
			$sql = "UPDATE KhachHang SET HoTen='{$HoTen}', GioiTinh='{$GioiTinh}', DiaChi='{$DiaChi}', NgaySinh='{$NgaySinh}' WHERE MaKH=$MaKH";
			//Thực thi câu truy vấn
			$result = mysqli_query($this->conn, $sql);

			//Trả về kết quả
			return $result;
		}

		//Hàm xoá tài khoản
		function remove($user)
		{
			
		}

		//Hàm lấy thông tin tài khoản
		function getInfo($user)
		{
			
		}

		//Hàm lấy danh sách tài khoản
		function view()
		{
			//Nếu không truyền tham số thì sẽ hiển thị toàn bộ danh sách
			$sql= "SELECT * FROM KhachHang";
			$result = mysqli_query($this->conn, $sql);
			//Thực thi câu truy vấn
			$users = array();
			$i = 0;
			if (mysqli_num_rows($result) > 0) {
  			// output data of each row
  				while($row = mysqli_fetch_assoc($result)) {
    				$users[$i++] = $row;
  				}
			} else {
  				echo "0 results";
			}
			//Trả về giá trị
			return $users;
		}

		//Hàm đổi mật khẩu
		function changePassword($user,$pass)
		{
			//Câu truy vấn

			//Trả về kết quả
		}
    }