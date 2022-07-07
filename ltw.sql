create database bus;
use bus;
create table KhachHang (
MaKH int(6) auto_increment NOT NULL primary key,
SĐT varchar(10) not null,
Matkhau varchar(15) not null,
HoTen varchar(30),
GioiTinh int(1),
DiaChi varchar(30),
NgaySinh date
);
INSERT INTO KhachHang (SĐT, MatKhau, HoTen, GioiTinh, DiaChi, NgaySinh) VALUES 
('0985020034','123', 'Chu Hien', '1', 'Nghệ An', '2000-02-04');
create table TuyenXe (
MaTuyen varchar(5) NOT NULL primary key,
SoXe int(3) NOT NULL,
TGChay time,
TGDung time,
TGGianCach int(2),
GiaVe float NOT NULL
);
insert into TuyenXe (MaTuyen, SoXe, TGChay, TGDung, TGGianCach, GiaVe) values
('TX01', '01','05:00:00', '21:00:00', '30', '7000'),
('TX02', '02','05:00:00', '21:00:00', '30', '7000'),
('TX03', '03','05:00:00', '21:00:00', '30', '7000'),
('TX04', '04','05:00:00', '21:00:00', '30', '7000');
create table VeThuong (
MaVe int(5) auto_increment not null primary key,
MaTuyen varchar(5) NOT NULL,
MaKH int(6) NOT NULL,
ThoiGian time,
TrangThai int(1) not null,
FOREIGN KEY (MaTuyen) REFERENCES TuyenXe(MaTuyen),
foreign key (MaKH) references KhachHang(MaKH)
);
create table LoaiVeThang (
MaLoaiVe int not null auto_increment primary key,
TenLoai text,
GiaVe float
);
insert into LoaiVeThang values 
(1, 'Một Tuyến', '50000'),
(2, 'Liên Tuyến', '100000');
create table VeThang (
MaVe int(5) auto_increment not null primary key,
MaTuyen varchar(5),
MaKH int(6) NOT NULL,
ThoiGian time,
Thang int(2) not null,
TrangThai int(1) not null,
MaLoaiVe int,
foreign key (MaLoaiVe) references LoaiVeThang(MaLoaiVe),
foreign key (MaKH) references KhachHang(MaKH)
);
insert into VeThuong values
('1','TX01','1','7:30','1'),
('2','TX02','1','10:00','1');
create table DiemDung (
MaDiemDung int(5) auto_increment not null primary key,
DiemDung varchar(30) not null
);
insert into DiemDung values 
('1','Đại học Bách Khoa Hà Nội'),
('2','Học Viện Tài chính'),
('3','Bệnh viện 108'),
('4',' Đại học kinh tế quốc dân'),
('5',' Bến xe nước ngầm'),
('6','Bến xe Giáp bát');

create table TuyenBuyt(
MaTuyen varchar(5),
MaDiemDung int(5),
foreign key (MaDiemDung) references DiemDung(MaDiemDung),
foreign key (MaTuyen) references TuyenXe(MaTuyen)
);
insert into TuyenBuyt values
('TX01','1'),
('TX01','2'),
('TX02','1'),
('TX02','3'),
('TX03','4'),
('TX04','1');
create table TheNganHang (
SoThe varchar(15) not null primary key,
NganHang varchar(50) not null,
MaKH int(6) not null,
foreign key(MaKH) references KhachHang(MaKH)
);
insert into TheNganHang(SoThe, NganHang, MaKH) values
('987654321','ABC Bank','1');
create table TheXeBuyt (
MaThe varchar(10) not null primary key,
SoDu float not null,
TheVatLy int(3) not null,
MaKH int(6) NOT NULL,
SoThe varchar(15),
foreign key(MaKH) references KhachHang(MaKH),
foreign key(SoThe) references TheNganHang(SoThe)
);
insert into TheXeBuyt (MaThe, SoDu, TheVatLy, MaKH, SoThe) values
('0985020034','100000','1','1','987654321');
create table QuanLy (
MaQL varchar(15) not null primary key,
MatKhau varchar(15) not null,
HoTen varchar(30),
NgaySinh date
);
insert into bus.QuanLy (MaQL, MatKhau, HoTen, NgaySinh) values
('0123456789','123','Admin','2021-01-01');