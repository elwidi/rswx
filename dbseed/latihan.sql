/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : latihan

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-01-07 21:18:28
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for barang
-- ----------------------------
DROP TABLE IF EXISTS `barang`;
CREATE TABLE `barang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_barang` varchar(100) DEFAULT NULL,
  `nama_barang` varchar(400) DEFAULT NULL,
  `harga` varchar(100) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `last_updated_date` date DEFAULT NULL,
  `last_updated_by` varchar(100) DEFAULT NULL,
  `delete_flag` varchar(255) DEFAULT NULL,
  `jenis_barang` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of barang
-- ----------------------------
INSERT INTO `barang` VALUES ('4', 'SPM001', 'Supermi Mie Goreng Isi 2', '2500', '2018-01-07 14:08:36', 'admin', null, null, null, null);
INSERT INTO `barang` VALUES ('9', 'MKNSAO0', 'Saos ABC 75ml', '4750', '2018-01-07 14:57:36', 'admin', null, null, '0', null);
INSERT INTO `barang` VALUES ('10', 'TOISAB0', 'Sabun Nuvo 65g', '1275', '2018-01-07 14:57:57', 'admin', null, null, '0', null);

-- ----------------------------
-- Table structure for jenis_barang
-- ----------------------------
DROP TABLE IF EXISTS `jenis_barang`;
CREATE TABLE `jenis_barang` (
  `id` int(11) DEFAULT NULL,
  `jenis_barang` varchar(200) DEFAULT NULL,
  `kode_jenis` varchar(50) DEFAULT NULL,
  `counter` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of jenis_barang
-- ----------------------------
INSERT INTO `jenis_barang` VALUES ('1', 'Makanan', 'MKN', '1');
INSERT INTO `jenis_barang` VALUES ('2', 'Toiletteries', 'TOI', '1');
INSERT INTO `jenis_barang` VALUES ('3', 'Lain-lain', 'OTH', '0');

-- ----------------------------
-- Table structure for pelanggan
-- ----------------------------
DROP TABLE IF EXISTS `pelanggan`;
CREATE TABLE `pelanggan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `address` varchar(400) DEFAULT NULL,
  `contact1` varchar(100) DEFAULT NULL,
  `contact2` varchar(200) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `last_updated_date` date DEFAULT NULL,
  `last_updated_by` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=106 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pelanggan
-- ----------------------------
INSERT INTO `pelanggan` VALUES ('1', 'Pelanggan ke - 1', 'Jalan Tambak No. 1', '0898980901', 'pelangganke1@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('2', 'Pelanggan ke - 2', 'Jalan Tambak No. 2', '0898980902', 'pelangganke2@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('3', 'Pelanggan ke - 3', 'Jalan Tambak No. 3', '0898980903', 'pelangganke3@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('4', 'Pelanggan ke - 4', 'Jalan Tambak No. 4', '0898980904', 'pelangganke4@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('5', 'Pelanggan ke - 5', 'Jalan Tambak No. 5', '0898980905', 'pelangganke5@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('6', 'Pelanggan ke - 6', 'Jalan Tambak No. 6', '0898980906', 'pelangganke6@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('7', 'Pelanggan ke - 7', 'Jalan Tambak No. 7', '0898980907', 'pelangganke7@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('8', 'Pelanggan ke - 8', 'Jalan Tambak No. 8', '0898980908', 'pelangganke8@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('9', 'Pelanggan ke - 9', 'Jalan Tambak No. 9', '0898980909', 'pelangganke9@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('10', 'Pelanggan ke - 10', 'Jalan Tambak No. 10', '08989809010', 'pelangganke10@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('11', 'Pelanggan ke - 11', 'Jalan Tambak No. 11', '08989809011', 'pelangganke11@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('12', 'Pelanggan ke - 12', 'Jalan Tambak No. 12', '08989809012', 'pelangganke12@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('13', 'Pelanggan ke - 13', 'Jalan Tambak No. 13', '08989809013', 'pelangganke13@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('14', 'Pelanggan ke - 14', 'Jalan Tambak No. 14', '08989809014', 'pelangganke14@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('15', 'Pelanggan ke - 15', 'Jalan Tambak No. 15', '08989809015', 'pelangganke15@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('16', 'Pelanggan ke - 16', 'Jalan Tambak No. 16', '08989809016', 'pelangganke16@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('17', 'Pelanggan ke - 17', 'Jalan Tambak No. 17', '08989809017', 'pelangganke17@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('18', 'Pelanggan ke - 18', 'Jalan Tambak No. 18', '08989809018', 'pelangganke18@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('19', 'Pelanggan ke - 19', 'Jalan Tambak No. 19', '08989809019', 'pelangganke19@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('20', 'Pelanggan ke - 20', 'Jalan Tambak No. 20', '08989809020', 'pelangganke20@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('21', 'Pelanggan ke - 21', 'Jalan Tambak No. 21', '08989809021', 'pelangganke21@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('22', 'Pelanggan ke - 22', 'Jalan Tambak No. 22', '08989809022', 'pelangganke22@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('23', 'Pelanggan ke - 23', 'Jalan Tambak No. 23', '08989809023', 'pelangganke23@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('24', 'Pelanggan ke - 24', 'Jalan Tambak No. 24', '08989809024', 'pelangganke24@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('25', 'Pelanggan ke - 25', 'Jalan Tambak No. 25', '08989809025', 'pelangganke25@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('26', 'Pelanggan ke - 26', 'Jalan Tambak No. 26', '08989809026', 'pelangganke26@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('27', 'Pelanggan ke - 27', 'Jalan Tambak No. 27', '08989809027', 'pelangganke27@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('28', 'Pelanggan ke - 28', 'Jalan Tambak No. 28', '08989809028', 'pelangganke28@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('29', 'Pelanggan ke - 29', 'Jalan Tambak No. 29', '08989809029', 'pelangganke29@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('30', 'Pelanggan ke - 30', 'Jalan Tambak No. 30', '08989809030', 'pelangganke30@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('31', 'Pelanggan ke - 31', 'Jalan Tambak No. 31', '08989809031', 'pelangganke31@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('32', 'Pelanggan ke - 32', 'Jalan Tambak No. 32', '08989809032', 'pelangganke32@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('33', 'Pelanggan ke - 33', 'Jalan Tambak No. 33', '08989809033', 'pelangganke33@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('34', 'Pelanggan ke - 34', 'Jalan Tambak No. 34', '08989809034', 'pelangganke34@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('35', 'Pelanggan ke - 35', 'Jalan Tambak No. 35', '08989809035', 'pelangganke35@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('36', 'Pelanggan ke - 36', 'Jalan Tambak No. 36', '08989809036', 'pelangganke36@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('37', 'Pelanggan ke - 37', 'Jalan Tambak No. 37', '08989809037', 'pelangganke37@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('38', 'Pelanggan ke - 38', 'Jalan Tambak No. 38', '08989809038', 'pelangganke38@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('39', 'Pelanggan ke - 39', 'Jalan Tambak No. 39', '08989809039', 'pelangganke39@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('40', 'Pelanggan ke - 40', 'Jalan Tambak No. 40', '08989809040', 'pelangganke40@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('41', 'Pelanggan ke - 41', 'Jalan Tambak No. 41', '08989809041', 'pelangganke41@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('42', 'Pelanggan ke - 42', 'Jalan Tambak No. 42', '08989809042', 'pelangganke42@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('43', 'Pelanggan ke - 43', 'Jalan Tambak No. 43', '08989809043', 'pelangganke43@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('44', 'Pelanggan ke - 44', 'Jalan Tambak No. 44', '08989809044', 'pelangganke44@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('45', 'Pelanggan ke - 45', 'Jalan Tambak No. 45', '08989809045', 'pelangganke45@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('46', 'Pelanggan ke - 46', 'Jalan Tambak No. 46', '08989809046', 'pelangganke46@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('47', 'Pelanggan ke - 47', 'Jalan Tambak No. 47', '08989809047', 'pelangganke47@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('48', 'Pelanggan ke - 48', 'Jalan Tambak No. 48', '08989809048', 'pelangganke48@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('49', 'Pelanggan ke - 49', 'Jalan Tambak No. 49', '08989809049', 'pelangganke49@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('50', 'Pelanggan ke - 50', 'Jalan Tambak No. 50', '08989809050', 'pelangganke50@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('51', 'Pelanggan ke - 51', 'Jalan Tambak No. 51', '08989809051', 'pelangganke51@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('52', 'Pelanggan ke - 52', 'Jalan Tambak No. 52', '08989809052', 'pelangganke52@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('53', 'Pelanggan ke - 53', 'Jalan Tambak No. 53', '08989809053', 'pelangganke53@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('54', 'Pelanggan ke - 54', 'Jalan Tambak No. 54', '08989809054', 'pelangganke54@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('55', 'Pelanggan ke - 55', 'Jalan Tambak No. 55', '08989809055', 'pelangganke55@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('56', 'Pelanggan ke - 56', 'Jalan Tambak No. 56', '08989809056', 'pelangganke56@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('57', 'Pelanggan ke - 57', 'Jalan Tambak No. 57', '08989809057', 'pelangganke57@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('58', 'Pelanggan ke - 58', 'Jalan Tambak No. 58', '08989809058', 'pelangganke58@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('59', 'Pelanggan ke - 59', 'Jalan Tambak No. 59', '08989809059', 'pelangganke59@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('60', 'Pelanggan ke - 60', 'Jalan Tambak No. 60', '08989809060', 'pelangganke60@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('61', 'Pelanggan ke - 61', 'Jalan Tambak No. 61', '08989809061', 'pelangganke61@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('62', 'Pelanggan ke - 62', 'Jalan Tambak No. 62', '08989809062', 'pelangganke62@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('63', 'Pelanggan ke - 63', 'Jalan Tambak No. 63', '08989809063', 'pelangganke63@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('64', 'Pelanggan ke - 64', 'Jalan Tambak No. 64', '08989809064', 'pelangganke64@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('65', 'Pelanggan ke - 65', 'Jalan Tambak No. 65', '08989809065', 'pelangganke65@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('66', 'Pelanggan ke - 66', 'Jalan Tambak No. 66', '08989809066', 'pelangganke66@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('67', 'Pelanggan ke - 67', 'Jalan Tambak No. 67', '08989809067', 'pelangganke67@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('68', 'Pelanggan ke - 68', 'Jalan Tambak No. 68', '08989809068', 'pelangganke68@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('69', 'Pelanggan ke - 69', 'Jalan Tambak No. 69', '08989809069', 'pelangganke69@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('70', 'Pelanggan ke - 70', 'Jalan Tambak No. 70', '08989809070', 'pelangganke70@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('71', 'Pelanggan ke - 71', 'Jalan Tambak No. 71', '08989809071', 'pelangganke71@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('72', 'Pelanggan ke - 72', 'Jalan Tambak No. 72', '08989809072', 'pelangganke72@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('73', 'Pelanggan ke - 73', 'Jalan Tambak No. 73', '08989809073', 'pelangganke73@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('74', 'Pelanggan ke - 74', 'Jalan Tambak No. 74', '08989809074', 'pelangganke74@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('75', 'Pelanggan ke - 75', 'Jalan Tambak No. 75', '08989809075', 'pelangganke75@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('76', 'Pelanggan ke - 76', 'Jalan Tambak No. 76', '08989809076', 'pelangganke76@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('77', 'Pelanggan ke - 77', 'Jalan Tambak No. 77', '08989809077', 'pelangganke77@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('78', 'Pelanggan ke - 78', 'Jalan Tambak No. 78', '08989809078', 'pelangganke78@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('79', 'Pelanggan ke - 79', 'Jalan Tambak No. 79', '08989809079', 'pelangganke79@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('80', 'Pelanggan ke - 80', 'Jalan Tambak No. 80', '08989809080', 'pelangganke80@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('81', 'Pelanggan ke - 81', 'Jalan Tambak No. 81', '08989809081', 'pelangganke81@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('82', 'Pelanggan ke - 82', 'Jalan Tambak No. 82', '08989809082', 'pelangganke82@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('83', 'Pelanggan ke - 83', 'Jalan Tambak No. 83', '08989809083', 'pelangganke83@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('84', 'Pelanggan ke - 84', 'Jalan Tambak No. 84', '08989809084', 'pelangganke84@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('85', 'Pelanggan ke - 85', 'Jalan Tambak No. 85', '08989809085', 'pelangganke85@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('86', 'Pelanggan ke - 86', 'Jalan Tambak No. 86', '08989809086', 'pelangganke86@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('87', 'Pelanggan ke - 87', 'Jalan Tambak No. 87', '08989809087', 'pelangganke87@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('88', 'Pelanggan ke - 88', 'Jalan Tambak No. 88', '08989809088', 'pelangganke88@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('89', 'Pelanggan ke - 89', 'Jalan Tambak No. 89', '08989809089', 'pelangganke89@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('90', 'Pelanggan ke - 90', 'Jalan Tambak No. 90', '08989809090', 'pelangganke90@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('91', 'Pelanggan ke - 91', 'Jalan Tambak No. 91', '08989809091', 'pelangganke91@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('92', 'Pelanggan ke - 92', 'Jalan Tambak No. 92', '08989809092', 'pelangganke92@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('93', 'Pelanggan ke - 93', 'Jalan Tambak No. 93', '08989809093', 'pelangganke93@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('94', 'Pelanggan ke - 94', 'Jalan Tambak No. 94', '08989809094', 'pelangganke94@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('95', 'Pelanggan ke - 95', 'Jalan Tambak No. 95', '08989809095', 'pelangganke95@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('96', 'Pelanggan ke - 96', 'Jalan Tambak No. 96', '08989809096', 'pelangganke96@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('97', 'Pelanggan ke - 97', 'Jalan Tambak No. 97', '08989809097', 'pelangganke97@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('98', 'Pelanggan ke - 98', 'Jalan Tambak No. 98', '08989809098', 'pelangganke98@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('99', 'Pelanggan ke - 99', 'Jalan Tambak No. 99', '08989809099', 'pelangganke99@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('100', 'Pelanggan ke - 100', 'Jalan Tambak No. 100', '089898090100', 'pelangganke100@mail.com', '1991-01-01', '2017-11-04', 'system', null, null);
INSERT INTO `pelanggan` VALUES ('101', 'Hanan difa', 'Jalan Bungur', '215487', 'hanan@mail.com', '1997-11-20', '2017-11-07', null, null, null);
INSERT INTO `pelanggan` VALUES ('103', 'Herawati', 'Jalan Melati', '0124578651', 'herawati@mail.co', '1990-03-16', '2017-11-07', null, null, null);
INSERT INTO `pelanggan` VALUES ('104', 'Melawati', 'Jl. Angsana', '454545', 'mela@mail.com', '1981-07-28', '2017-11-07', null, null, null);

-- ----------------------------
-- Table structure for penjualan_tmp
-- ----------------------------
DROP TABLE IF EXISTS `penjualan_tmp`;
CREATE TABLE `penjualan_tmp` (
  `kode_barang` varchar(100) DEFAULT NULL,
  `nama_barang` varchar(400) DEFAULT NULL,
  `harga` varchar(100) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of penjualan_tmp
-- ----------------------------
