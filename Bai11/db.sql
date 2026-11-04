create database netflix;
-- phim
-- the loai
-- quoc gia
-- dien vien
-- giao dien
-- tap phim
-- nguoi dung

-- Table nguoi dung
CREATE TABLE IF NOT EXISTS nguoi_dung(
    id int AUTO_INCREMENT PRIMARY KEY,
    ten_dang_nhap varchar(30) NOT NULL,
    mat_khau varchar(30) NOT NULL,
    email varchar(30) NOT NULL,
    ho_ten varchar(30) NOT NULL,
    ngay_sinh date NOT NULL,
    so_dien_thoai varchar(10) NOT NULL,
    gioi_tinh boolean NOT NULL
)
-- the_loai
CREATE TABLE the_loai(
id key AUTO_INCREMENT int,
ten_the_loai varchar(255) NOT NULL,
)

-- dien_vien
CREATE TABLE dien_vien(
id key AUTO_INCREMENT int,
ho_ten varchar(100) NOT NULL,
ngay_sinh date,
)

-- dao_dien
CREATE TABLE dao_dien(
id key AUTO_INCREMENT int,
ho_ten varchar(100) NOT NULL,
ngay_sinh date,
)

--phim
CREATE TABLE phim(
id key AUTO_INCREMENT int,
ten_phim varchar(255) NOT NULL,
quoc_gia varchar(100) NOT NULL,
dao_dien_id int,
nam datetime,
do_tuoi int,
mo_ta varchar(255) NOT NULL,
)

--phim_the_loai
CREATE TABLE phim_the_loai(
id key AUTO_INCREMENT int,
phim_id int,
the_loai_id int,
)

--phim_dien_vien
CREATE TABLE phim_dien_vien(
id key AUTO_INCREMENT int,
phim_id int,
dien_vien_id int,
)
-- dao_dien
INSERT INTO `dao_dien`( `ho_ten`, `ngay_sinh`) VALUES ('Nguyễn Thị Nhung','2006-07-17');
INSERT INTO `dao_dien`( `ho_ten`, `ngay_sinh`) VALUES ('Nguyễn Thị Dung','2006-06-12');
INSERT INTO `dao_dien`( `ho_ten`, `ngay_sinh`) VALUES ('Trần Thị Yến Nhi','2006-06-23');

-- phim
INSERT INTO `phim`( `ten_phim`, `quoc_gia`,  `dao_dien_id`, `nam`, `do_tuoi`) VALUES ('Doremon','Nhật Bản',1,'2018-1-1','8');
INSERT INTO `phim`( `ten_phim`, `quoc_gia`,  `dao_dien_id`, `nam`, `do_tuoi`) VALUES ('Thỏ ơi','Việt Nam',2,'2026-2-4','1');
INSERT INTO `phim`( `ten_phim`, `quoc_gia`,  `dao_dien_id`, `nam`, `do_tuoi`) VALUES ('Bố già','Việt Nam',3,'2017-5-6','9');

-- phim_the_loai
INSERT INTO `phim_the_loai`( `phim_id`, `the_loai_id`) VALUES (1,1);
INSERT INTO `phim_the_loai`( `phim_id`, `the_loai_id`) VALUES (1,5);
INSERT INTO `phim_the_loai`( `phim_id`, `the_loai_id`) VALUES (2,1);
INSERT INTO `phim_the_loai`( `phim_id`, `the_loai_id`) VALUES (2,4);
INSERT INTO `phim_the_loai`( `phim_id`, `the_loai_id`) VALUES (3,1);

-- phim_dien_vien
INSERT INTO `phim_dien_vien`( `phim_id`, `dien_vien_id`) VALUES (1,1);
INSERT INTO `phim_dien_vien`( `phim_id`, `dien_vien_id`) VALUES (2,2);
INSERT INTO `phim_dien_vien`( `phim_id`, `dien_vien_id`) VALUES (3,3);

-- nguoi_dung
INSERT INTO `nguoi_dung`( `ten_dang_nhap`, `mat_khau`, `email`, `ho_ten`, `ngay_sinh`, `so_dien_thoai`, `gioi_tinh`) VALUES ('Nhung','acb','admin@gmail.com','Nguyễn Thị Nhung','2006-07-17','0123456789',1);

