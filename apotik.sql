/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50141
Source Host           : localhost:3306
Source Database       : apotik

Target Server Type    : MYSQL
Target Server Version : 50141
File Encoding         : 65001

Date: 2013-12-06 14:50:16
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `barang`
-- ----------------------------
DROP TABLE IF EXISTS `barang`;
CREATE TABLE `barang` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_barang` varchar(25) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `stok` varchar(20) NOT NULL,
  `satuan` varchar(20) NOT NULL,
  `isi` varchar(20) NOT NULL,
  `harga_beli` varchar(30) NOT NULL,
  `harga_jual` varchar(30) NOT NULL,
  `expired` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=82 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of barang
-- ----------------------------
INSERT INTO `barang` VALUES ('76', 'B002  ', 'Psikotropika ', '27', '11', '10', '10 ', '1500000 ', '10000000 ', '0000-00-00');
INSERT INTO `barang` VALUES ('75', 'B001   ', 'Insana  ', '27', '10070', '11', '10  ', '2000 ', '2000   ', '0000-00-00');
INSERT INTO `barang` VALUES ('77', 'B003    ', 'Omegtamin    ', '27', '100', '12', '10   ', '1000   ', '1500   ', '0000-00-00');
INSERT INTO `barang` VALUES ('78', 'B004 ', 'Promag', '27', '101', '12', '10', '4500', '4800', '0000-00-00');
INSERT INTO `barang` VALUES ('79', 'B005  ', 'Antangin', '26', '100', '12', '1', '1000', '1200', '0000-00-00');
INSERT INTO `barang` VALUES ('80', '0212', 'Bodrexin', '27', '110', '12', '5', '500', '600', '0000-00-00');
INSERT INTO `barang` VALUES ('81', ' 2131 ', 'Obat', '27', '12', '12', '12', '2000', '13000', '0000-00-00');

-- ----------------------------
-- Table structure for `detail_pembelian`
-- ----------------------------
DROP TABLE IF EXISTS `detail_pembelian`;
CREATE TABLE `detail_pembelian` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pembelian` varchar(30) NOT NULL,
  `barang` varchar(30) NOT NULL,
  `jumlah` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=154 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of detail_pembelian
-- ----------------------------
INSERT INTO `detail_pembelian` VALUES ('137', '123', '75', '10');
INSERT INTO `detail_pembelian` VALUES ('136', '123', '77', '10');
INSERT INTO `detail_pembelian` VALUES ('135', '123', '75', '10');
INSERT INTO `detail_pembelian` VALUES ('134', '122', '76', '10');
INSERT INTO `detail_pembelian` VALUES ('133', '120', '76', '10');
INSERT INTO `detail_pembelian` VALUES ('132', '120', '76', '10');
INSERT INTO `detail_pembelian` VALUES ('131', '118', '75', '10');
INSERT INTO `detail_pembelian` VALUES ('130', '118', '76', '10');
INSERT INTO `detail_pembelian` VALUES ('129', '117', '75', '10');
INSERT INTO `detail_pembelian` VALUES ('128', '116', '76', '10');
INSERT INTO `detail_pembelian` VALUES ('138', '123', '76', '10');
INSERT INTO `detail_pembelian` VALUES ('139', '123', '75', '10');
INSERT INTO `detail_pembelian` VALUES ('140', '122', '76', '10');
INSERT INTO `detail_pembelian` VALUES ('141', '122', '75', '10');
INSERT INTO `detail_pembelian` VALUES ('142', '122', '77', '12');
INSERT INTO `detail_pembelian` VALUES ('143', '131', '76', '10000');
INSERT INTO `detail_pembelian` VALUES ('144', '131', '75', '10000');
INSERT INTO `detail_pembelian` VALUES ('145', '133', '76', '10');
INSERT INTO `detail_pembelian` VALUES ('146', '134', '76', '10');
INSERT INTO `detail_pembelian` VALUES ('147', '135', '76', '10');
INSERT INTO `detail_pembelian` VALUES ('148', '136', '75', '10');
INSERT INTO `detail_pembelian` VALUES ('149', '137', '80', '10');
INSERT INTO `detail_pembelian` VALUES ('150', '138', '79', '10');
INSERT INTO `detail_pembelian` VALUES ('151', '139', '78', '1');
INSERT INTO `detail_pembelian` VALUES ('152', '140', '75', '20');
INSERT INTO `detail_pembelian` VALUES ('153', '141', '76', '1');

-- ----------------------------
-- Table structure for `detail_penjualan`
-- ----------------------------
DROP TABLE IF EXISTS `detail_penjualan`;
CREATE TABLE `detail_penjualan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_penjualan` varchar(30) NOT NULL,
  `barang` varchar(30) NOT NULL,
  `jumlah` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of detail_penjualan
-- ----------------------------
INSERT INTO `detail_penjualan` VALUES ('1', '', '76', '10');
INSERT INTO `detail_penjualan` VALUES ('2', '12', '76', '10');
INSERT INTO `detail_penjualan` VALUES ('3', '12', '77', '10');
INSERT INTO `detail_penjualan` VALUES ('4', '14', '76', '50');
INSERT INTO `detail_penjualan` VALUES ('5', '14', '75', '20');
INSERT INTO `detail_penjualan` VALUES ('6', '16', '77', '23');
INSERT INTO `detail_penjualan` VALUES ('7', '17', '75', '10');
INSERT INTO `detail_penjualan` VALUES ('8', '18', '76', '10');
INSERT INTO `detail_penjualan` VALUES ('9', '19', '76', '10');
INSERT INTO `detail_penjualan` VALUES ('10', '19', '77', '50');
INSERT INTO `detail_penjualan` VALUES ('11', '21', '76', '10000');
INSERT INTO `detail_penjualan` VALUES ('12', '21', '77', '10000');
INSERT INTO `detail_penjualan` VALUES ('13', '23', '76', '10');
INSERT INTO `detail_penjualan` VALUES ('14', '23', '79', '10');

-- ----------------------------
-- Table structure for `dokter`
-- ----------------------------
DROP TABLE IF EXISTS `dokter`;
CREATE TABLE `dokter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_dokter` varchar(45) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `spesialisasi` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of dokter
-- ----------------------------
INSERT INTO `dokter` VALUES ('3', 'D001', 'Drs. Setyawan', 'Malang', 'Poli Kulit');
INSERT INTO `dokter` VALUES ('4', 'D002', 'Drs. Sugiono', 'Lawang', 'Poli Gigi');

-- ----------------------------
-- Table structure for `jual`
-- ----------------------------
DROP TABLE IF EXISTS `jual`;
CREATE TABLE `jual` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `faktur` varchar(30) NOT NULL,
  `barang` varchar(30) NOT NULL,
  `jumlah` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `customer` varchar(30) NOT NULL,
  `total` varchar(30) NOT NULL,
  `sesjual` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of jual
-- ----------------------------
INSERT INTO `jual` VALUES ('25', '', 'B002  ', '0', '2013-12-06', '', '0', '20131206141206');
INSERT INTO `jual` VALUES ('26', '', 'B002  ', '0', '2013-12-06', '', '0', '20131206141206');
INSERT INTO `jual` VALUES ('27', '', 'B002  ', '0', '2013-12-06', '', '0', '20131206141206');
INSERT INTO `jual` VALUES ('28', '', 'B002  ', '0', '2013-12-06', '', '0', '20131206141206');
INSERT INTO `jual` VALUES ('29', '', 'B002  ', '0', '2013-12-06', '', '0', '20131206141206');
INSERT INTO `jual` VALUES ('30', 'asf', 'B002  ', '0', '2013-12-06', 'asf', '0', '20131206141202');
INSERT INTO `jual` VALUES ('31', 'asf', 'B002  ', '0', '2013-12-06', 'asf', '0', '20131206141202');
INSERT INTO `jual` VALUES ('32', 'asf', 'B002  ', '0', '2013-12-06', 'asf', '0', '20131206141202');
INSERT INTO `jual` VALUES ('33', 'asf', 'B002  ', '0', '2013-12-06', 'asf', '0', '20131206141202');
INSERT INTO `jual` VALUES ('34', 'asf', 'B002  ', '0', '2013-12-06', 'asf', '0', '20131206141202');
INSERT INTO `jual` VALUES ('35', '211', 'B002  ', '0', '2013-12-06', '123', '0', '20131206141201');
INSERT INTO `jual` VALUES ('36', '211', 'B003    ', '0', '2013-12-06', '123', '0', '20131206141201');
INSERT INTO `jual` VALUES ('37', '211', 'B002  ', '0', '2013-12-06', '123', '0', '20131206141201');
INSERT INTO `jual` VALUES ('38', '213', 'B002  ', '0', '2013-12-06', '12', '0', '20131206141226');
INSERT INTO `jual` VALUES ('39', '213', 'B002  ', '0', '2013-12-06', '12', '0', '20131206141226');
INSERT INTO `jual` VALUES ('40', '213', 'B002  ', '0', '2013-12-06', '12', '0', '20131206141226');

-- ----------------------------
-- Table structure for `kategori`
-- ----------------------------
DROP TABLE IF EXISTS `kategori`;
CREATE TABLE `kategori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_kategori` varchar(10) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of kategori
-- ----------------------------
INSERT INTO `kategori` VALUES ('27', 'k003', 'Lemah');
INSERT INTO `kategori` VALUES ('26', 'k002', 'Danger');
INSERT INTO `kategori` VALUES ('25', 'k001 ', 'Menengah');
INSERT INTO `kategori` VALUES ('28', '0121  ', 'KUAT X');

-- ----------------------------
-- Table structure for `pembelian`
-- ----------------------------
DROP TABLE IF EXISTS `pembelian`;
CREATE TABLE `pembelian` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `barang` varchar(30) NOT NULL,
  `jumlah` varchar(20) NOT NULL,
  `faktur` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `supplier` varchar(30) NOT NULL,
  `total` int(30) NOT NULL,
  `subtotal` varchar(30) NOT NULL,
  `sesbeli` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=157 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pembelian
-- ----------------------------
INSERT INTO `pembelian` VALUES ('153', 'B002  ', '0', 'ASDSS', '2013-12-06', '12312 ', '0', '0', '20131206131252');
INSERT INTO `pembelian` VALUES ('154', 'B002  ', '0', 'ASDSS', '2013-12-06', '12312 ', '0', '0', '20131206131252');
INSERT INTO `pembelian` VALUES ('155', 'B002  ', '0', 'ASDSS', '2013-12-06', '12312 ', '0', '0', '20131206131252');
INSERT INTO `pembelian` VALUES ('156', 'B002  ', '12', 'ASDSS', '2013-12-06', '12312 ', '216000000', '18000000', '20131206131259');

-- ----------------------------
-- Table structure for `satuan`
-- ----------------------------
DROP TABLE IF EXISTS `satuan`;
CREATE TABLE `satuan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_satuan` varchar(10) NOT NULL,
  `satuan` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of satuan
-- ----------------------------
INSERT INTO `satuan` VALUES ('12', 'Sa003', 'Puyer');
INSERT INTO `satuan` VALUES ('11', 'Sa002', 'Tablet');
INSERT INTO `satuan` VALUES ('10', 'Sa001', 'Botol');
INSERT INTO `satuan` VALUES ('13', '0IDD', 'Tablet');

-- ----------------------------
-- Table structure for `supplier`
-- ----------------------------
DROP TABLE IF EXISTS `supplier`;
CREATE TABLE `supplier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_supplier` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `obat` varchar(35) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=100 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of supplier
-- ----------------------------
INSERT INTO `supplier` VALUES ('87', '12312 ', 'Agus', '76', 'JL Kebon Waru', '012123');
INSERT INTO `supplier` VALUES ('91', 'S003 ', 'Nindi', '76', 'Jl. Kebrao', '0891999929');
INSERT INTO `supplier` VALUES ('89', 'S001 ', 'Agus', '77', 'Pasuruan', '12121213212');
INSERT INTO `supplier` VALUES ('90', 'S002 ', 'Budi', '75', 'Pasuruan', '09090909');
INSERT INTO `supplier` VALUES ('98', 'S003 ', 'Nindi', '79', 'Jl. Kebrao', '0891999929');
INSERT INTO `supplier` VALUES ('94', 'S001 ', 'Agus', '78', 'Pasuruan', '12121213212');
INSERT INTO `supplier` VALUES ('97', 'S003 ', 'Nindi', '80', 'Jl. Kebrao', '0891999929');
INSERT INTO `supplier` VALUES ('99', 'S001 ', 'Agus', '75', 'Pasuruan', '12121213212');

-- ----------------------------
-- Table structure for `t_pegawai`
-- ----------------------------
DROP TABLE IF EXISTS `t_pegawai`;
CREATE TABLE `t_pegawai` (
  `nik` varchar(20) NOT NULL,
  `kd_level` varchar(10) DEFAULT NULL,
  `kar_peg` varchar(20) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `tgl_masuk` date DEFAULT NULL,
  `kd_cabang` varchar(20) DEFAULT NULL,
  `kd_jabatan` varchar(10) DEFAULT NULL,
  `kd_unit_kerja` varchar(20) DEFAULT NULL,
  `status_aktif` varchar(30) DEFAULT NULL,
  `status_kerja` varchar(20) DEFAULT NULL,
  `tgl_capeg` date DEFAULT NULL,
  `apr` char(1) DEFAULT NULL,
  `apr_by` varchar(20) DEFAULT NULL,
  `apr_tanggal` date DEFAULT NULL,
  `tanggal_sk` date DEFAULT NULL,
  `no_sk` varchar(50) DEFAULT NULL,
  `masa_kerja` int(11) DEFAULT NULL,
  `tanggal_hitung` date DEFAULT NULL,
  `tunjangan_jabatan` decimal(65,30) DEFAULT NULL COMMENT 'tunjangan sesuai kebijakan',
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_pegawai
-- ----------------------------
INSERT INTO `t_pegawai` VALUES ('00 00 123', '1', null, 'Rangga', null, '112', '26', 'A141', null, null, null, null, null, null, null, null, null, null, null, '1');
INSERT INTO `t_pegawai` VALUES ('00 00 136', '2', null, 'Jonas Johan Aipassa', '1900-01-01', '010', 'A60', 'B133', 'Aktif', 'Pegawai Tetap', '1900-01-01', 'T', '01 74 284', '2013-04-22', null, null, '0', null, '1.000000000000000000000000000000', '2');
INSERT INTO `t_pegawai` VALUES ('00 00 137', '2', null, 'Rani Mainake', '1900-01-01', '110', 'A60', 'D118', 'Aktif', 'Pegawai Tetap', '1900-01-01', 'T', '00 00 137', '2013-06-09', null, null, '0', null, '500000.000000000000000000000000000000', '3');
INSERT INTO `t_pegawai` VALUES ('00 00 138', '4', null, 'Frengky. M. N. Wairatta', '2009-06-01', '080', 'A60', 'B120', 'Aktif', 'Pegawai Tetap', '1950-01-01', 'T', '01 74 284', '2012-11-12', null, null, '0', null, '1.000000000000000000000000000000', '4');
INSERT INTO `t_pegawai` VALUES ('00 00 139', '4', null, 'Ronald. Y. Hehakaya', '2009-06-01', '140', 'A60', 'B120', 'Aktif', 'Pegawai Tetap', '1950-01-01', 'T', '01 74 284', '2012-11-12', null, null, '0', null, '1.000000000000000000000000000000', '5');
INSERT INTO `t_pegawai` VALUES ('00 00 140', '4', null, 'Novalina Soulissa', '2009-06-01', '110', 'A60', 'B120', 'Aktif', 'Pegawai Tetap', '1950-01-01', 'T', '01 74 284', '2012-11-12', null, null, '0', null, '1.000000000000000000000000000000', '6');
INSERT INTO `t_pegawai` VALUES ('00 00 141', '4', null, 'Noviyanti Ismi Latuconsina', '2009-06-01', '030', 'A60', 'B120', 'Aktif', 'Pegawai Tetap', '1950-01-01', 'T', null, null, null, null, '0', null, '1.000000000000000000000000000000', '7');
INSERT INTO `t_pegawai` VALUES ('00 00 142', '4', null, 'Ferdinand Rocky Parera', '2009-06-01', '000', 'A60', 'A14', 'Aktif', 'Pegawai Tetap', '1950-01-01', 'T', null, null, null, null, '0', null, '1.000000000000000000000000000000', '8');
INSERT INTO `t_pegawai` VALUES ('00 00 143', '4', null, 'Melattie Tuwanakotta', '2009-06-01', '150', 'A60', 'B120', 'Aktif', 'Pegawai Tetap', '1950-01-01', 'T', null, null, null, null, '3', null, '1.000000000000000000000000000000', '9');
INSERT INTO `t_pegawai` VALUES ('00 00 144', '2', null, 'Lisiani Herawati', '2009-06-01', '010', 'A60', 'C113', 'Aktif', 'Pegawai Tetap', '1950-01-01', 'T', null, null, null, null, '0', null, '1.000000000000000000000000000000', '10');
INSERT INTO `t_pegawai` VALUES ('00 00 145', '2', null, 'Vico Papilaya', '2009-06-01', '010', 'A60', 'B135', 'Aktif', 'Pegawai Tetap', '1950-01-01', 'T', null, null, null, null, '0', null, '1.000000000000000000000000000000', '11');
INSERT INTO `t_pegawai` VALUES ('00 00 146', '4', null, 'Ricardo. TH. P. Pattimahau', '2009-06-01', '263', 'A60', 'B111', 'Aktif', 'Pegawai Tetap', '1950-01-01', 'T', null, null, null, null, '0', null, '1.000000000000000000000000000000', '12');
INSERT INTO `t_pegawai` VALUES ('00 00 147', '3', null, 'Monika G.K. Siahaya', '1900-01-01', '010', 'A60', 'B131', 'Aktif', 'Pegawai Tetap', '1900-01-01', 'T', '01 74 284', '2013-04-22', null, null, '12', null, '1000000.000000000000000000000000000000', '13');
INSERT INTO `t_pegawai` VALUES ('00 00 148', '4', null, 'Gleenda Nicolas Hehamahua', '2009-06-01', '010', 'A60', 'B120', 'Aktif', 'Pegawai Tetap', '1950-01-01', 'T', null, null, null, null, '0', null, '1.000000000000000000000000000000', '14');
INSERT INTO `t_pegawai` VALUES ('00 00 149', '4', null, 'Elsa Adriana Lekatompessy', '2009-06-01', '100', 'A60', 'B120', 'Aktif', 'Pegawai Tetap', '1950-01-01', 'T', null, null, null, null, '0', null, '1.000000000000000000000000000000', '15');
INSERT INTO `t_pegawai` VALUES ('00 00 150', '4', null, 'Theddy Reymond Maitimu', '2009-06-01', '000', 'A51', 'A112', 'Aktif', 'Pegawai Tetap', '1950-01-01', 'T', null, null, null, null, '0', null, '1.000000000000000000000000000000', '16');
INSERT INTO `t_pegawai` VALUES ('00 00 151', '4', null, 'Husain Salampessy', '2009-06-01', '112', 'A60', 'B120', 'Aktif', 'Pegawai Tetap', '1950-01-01', 'T', null, null, null, null, '0', null, '1.000000000000000000000000000000', '17');
INSERT INTO `t_pegawai` VALUES ('00 00 152', '4', null, 'Ridwan Tuahena', '2009-06-01', '100', 'A60', 'C12', 'Aktif', 'Pegawai Tetap', '1950-01-01', 'T', null, null, null, null, '3', null, '1.000000000000000000000000000000', '18');
INSERT INTO `t_pegawai` VALUES ('00 00 153', '4', null, 'Sandra Cynthia Mahupale', '2009-06-01', '000', 'A60', 'A121', 'Aktif', 'Pegawai Tetap', '1950-01-01', 'T', null, null, null, null, '0', null, '1.000000000000000000000000000000', '19');
INSERT INTO `t_pegawai` VALUES ('00 00 154', '4', null, 'Abdullah Marasabessy', '2009-06-01', '090', 'A60', 'B120', 'Aktif', 'Pegawai Tetap', '1950-01-01', 'T', null, null, null, null, '0', null, '1.000000000000000000000000000000', '20');
INSERT INTO `t_pegawai` VALUES ('00 00 155', '4', null, 'Donatus Ferdinand. B. Anaktatoty', '2009-06-01', '010', 'B50', 'B120', 'Aktif', 'Pegawai Tetap', '1950-01-01', 'T', null, null, null, null, '0', null, '1.000000000000000000000000000000', '21');
INSERT INTO `t_pegawai` VALUES ('00 00 159', '7', null, 'Agus Edi Permadi', null, '255', '36', 'A123', null, null, null, null, null, null, null, null, null, null, null, '22');
INSERT INTO `t_pegawai` VALUES ('1234567', 'ho', null, 'ASEP DAYAT', null, '255', '35', 'A133', null, null, null, null, null, null, null, null, null, null, null, '29');

-- ----------------------------
-- Table structure for `t_user`
-- ----------------------------
DROP TABLE IF EXISTS `t_user`;
CREATE TABLE `t_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nik` varchar(20) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7879 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_user
-- ----------------------------
INSERT INTO `t_user` VALUES ('7874', '00 00 608', '0', '00 00 608', '6ff0ae65d2a0024d2c98acf7b4d193ac');
INSERT INTO `t_user` VALUES ('7875', '00 00 136', '0', 'admin', '21232f297a57a5a743894a0e4a801fc3');
INSERT INTO `t_user` VALUES ('7877', '00 00 138', '1', '00 00 138', '6c27412170c5d42364618aca20dede28');
INSERT INTO `t_user` VALUES ('7878', '1234567', '1', '1234567', 'fcea920f7412b5da7be0cf42b8c93759');
