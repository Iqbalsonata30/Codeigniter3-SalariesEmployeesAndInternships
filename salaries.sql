# Host: localhost  (Version 5.5.5-10.4.22-MariaDB)
# Date: 2022-06-16 09:40:41
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "datagajikaryawan"
#

DROP TABLE IF EXISTS `datagajikaryawan`;
CREATE TABLE `datagajikaryawan` (
  `id_gaji` int(11) NOT NULL AUTO_INCREMENT,
  `jabatan` varchar(255) DEFAULT NULL,
  `gajipokok` varchar(255) DEFAULT NULL,
  `pajak` varchar(255) DEFAULT NULL,
  `tunjanganJabatan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_gaji`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

#
# Data for table "datagajikaryawan"
#

INSERT INTO `datagajikaryawan` VALUES (1,'CEO (Chief Executive Officer)','5000000','0.15','0.45'),(2,'CMO (Chief Marketing Officer)','5000000','0.15','0.40'),(3,'CTO (Chief Technology Officer)','5000000','0.15','0.35'),(4,'CFO (Chief Financial Officer)','5000000','0.15','0.30'),(5,'COO (Chief Operating Officer)','5000000','0.15','0.25'),(7,'Sales Manager','5000000','0.15','0.20');

#
# Structure for table "datagajimagang"
#

DROP TABLE IF EXISTS `datagajimagang`;
CREATE TABLE `datagajimagang` (
  `id_gaji` int(11) NOT NULL,
  `gajipokok` varchar(255) DEFAULT NULL,
  `pajak` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_gaji`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# Data for table "datagajimagang"
#

INSERT INTO `datagajimagang` VALUES (1,'3000000','0.10');

#
# Structure for table "karyawan"
#

DROP TABLE IF EXISTS `karyawan`;
CREATE TABLE `karyawan` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `id_Karyawan` int(11) DEFAULT NULL,
  `Nama` varchar(255) DEFAULT NULL,
  `Jeniskelamin` varchar(255) DEFAULT NULL,
  `Jabatan` varchar(255) DEFAULT NULL,
  `Alamat` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`),
  KEY `id_Karyawan` (`id_Karyawan`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

#
# Data for table "karyawan"
#

INSERT INTO `karyawan` VALUES (1,211012719,'Iqbal Sonata','Pria','CEO (Chief Executive Officer)','Gang Nangka'),(2,211012720,'Raga Setia Wibawa','Pria','CMO (Chief Marketing Officer)','Jl.Harapan Baru'),(3,211012706,'Fery Richardo','Pria','CTO (Chief Technology Officer)','Jl.Obor 2'),(4,211012703,'Zilla Pranandha Putri','Wanita','CFO (Chief Financial Officer)','Jl.Obor 2'),(5,211012709,'Jill Fathan Ulhaq','Pria','CTO (Chief Technology Officer)','Jl.Tribrata'),(6,211012723,'Brema Pratama Sembiring','Pria','Sales Manager','Jl.Tribrata'),(7,211012718,'Nurhaisyah','Wanita','COO (Chief Operating Officer)','Desa Buluh Apo'),(8,211012724,'Pitri Muliani','Wanita','Sales Manager','Desa Buluh Apo');

#
# Structure for table "karyawan_magang"
#

DROP TABLE IF EXISTS `karyawan_magang`;
CREATE TABLE `karyawan_magang` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `ID_Magang` int(11) DEFAULT NULL,
  `Nama` varchar(255) DEFAULT NULL,
  `Jeniskelamin` varchar(255) DEFAULT NULL,
  `Tahun_Masuk` date DEFAULT NULL,
  `Alamat` varchar(255) DEFAULT NULL,
  `Gambar` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`),
  KEY `ID_Magang` (`ID_Magang`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

#
# Data for table "karyawan_magang"
#

INSERT INTO `karyawan_magang` VALUES (1,1001,'Shelly Sagita','Wanita','2020-04-26','Jl.Harapan Baru','images1.jpg'),(2,1002,'Monkey.D.Luffy',' Pria','2019-02-16','East Blue','aneh311.jpg'),(3,1003,'Reza Oktovian',' Pria','2021-12-12','Jl.Sudirman','asdadadas11.jpg'),(4,1004,'Agung Hapsah',' Pria','2019-04-11','Komplek Merapi','FLPxgoLVkBAokyH11.jpg');

#
# Structure for table "user"
#

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `confir_password` varchar(255) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  `date_created` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

#
# Data for table "user"
#

INSERT INTO `user` VALUES (2,'admin','admin','default.svg','$2y$10$MprQc5u2IKmiWn8TDPjuRukRqC4UfN7VajlvGS9qVQ2TbJmv2kgjK','$2y$10$J0YcCszsRHBOeiC13.rj5uwHSB1n24H/N4TSqJp9S/0GHi96Ol/Bi',1,1,'1654873514'),(3,'raga','Raga Setia Wibawa','default.svg','$2y$10$dMORwn.z62C4Cdst0wP41.4Box5cW0O9WDIYLB9EZGFT53rLDLZny','$2y$10$pcfWkLor.N8F4c2x3fhfA.NaEfA0Hh.y8F1fNsWhHLvd2l6HTqKW2',2,1,'1654873514'),(4,'iqbalsonata','Iqbal Sonata','default.svg','$2y$10$qG3JTv4vcNhzCsjS0eGr4.eL0RQgsNDpwmw08O.nE6FHLBeHdNYiy','$2y$10$OAzXHMjBO8l5pHNbqCT29OU1saE1xj4Wy.2.7qGm/KWERLYJg0Pmy',2,1,'1654874081'),(5,'shelly','Shelly Sagita','default.svg','$2y$10$nk8Mw/1OWXAaHJBHk3IC4.POZ/XijKOAMuQWkQGnn974lfm77bFJi','$2y$10$Wy9NQBtmmWvQYyAfgD60Oe1A0fG/yKy0CVgdp4fUNxwc7hqPvgPLu',3,1,'1654874090'),(6,'rahmad','Rahmad Hidayat','default.svg','$2y$10$0b4sz1ZSihuuwO7.fkV..uMft8ZXL1yIJo1Chp6kJ4utbUggHMtWa','$2y$10$Do/UqpehkbEDyM78QOcVwe6rqV6xx/Gg0rW2D9apoAjYJX6xgStpS',3,1,'1655175828'),(7,'fery','Fery Richardo','default.svg','$2y$10$Qk2Vx2ww/E68SvRNV4HYPuXDqT1iX0PBkXGol/xbWO15tZ1j4.Th.','$2y$10$gIm0TWOMU0dM4lPgsTB26OOc.UbHr1HUGnecUPFvJaErAR5xgi88u',2,1,'1655175910');
