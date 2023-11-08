/*
 Navicat Premium Data Transfer

 Source Server         : MARIA
 Source Server Type    : MySQL
 Source Server Version : 100522
 Source Host           : localhost:3306
 Source Schema         : supporttools

 Target Server Type    : MySQL
 Target Server Version : 100522
 File Encoding         : 65001

 Date: 03/11/2023 09:49:50
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for areas
-- ----------------------------
DROP TABLE IF EXISTS `areas`;
CREATE TABLE `areas`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama_area` varchar(75) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of areas
-- ----------------------------
INSERT INTO `areas` VALUES (2, 'Area_Surabaya_1');
INSERT INTO `areas` VALUES (3, 'Area_Surabaya_2');
INSERT INTO `areas` VALUES (4, 'Area_Surabaya_3');
INSERT INTO `areas` VALUES (5, 'Area_Surabaya_4');
INSERT INTO `areas` VALUES (6, 'Area_Surabaya_5');
INSERT INTO `areas` VALUES (7, 'Area_Surabaya_6');
INSERT INTO `areas` VALUES (8, 'Area_Surabaya_7');
INSERT INTO `areas` VALUES (9, 'Area_Surabaya_8');
INSERT INTO `areas` VALUES (10, 'Area_Surabaya_9');
INSERT INTO `areas` VALUES (11, 'Area_Surabaya_10');

-- ----------------------------
-- Table structure for inventory
-- ----------------------------
DROP TABLE IF EXISTS `inventory`;
CREATE TABLE `inventory`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `cabang` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `region` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `area` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kode_unit` int NULL DEFAULT NULL,
  `nama_unit` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `jumlah_kdo` int NULL DEFAULT NULL,
  `kdo_aktif` int NULL DEFAULT NULL,
  `kdo_rusak` int NULL DEFAULT NULL,
  `kdo_jt_lelang` int NULL DEFAULT NULL,
  `kdo_hilang` int NULL DEFAULT NULL,
  `jml_sdm_bisnis` int NULL DEFAULT NULL,
  `jml_std_kdo` int NULL DEFAULT NULL,
  `gap_kdo` int NULL DEFAULT NULL,
  `keterangan` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 55 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of inventory
-- ----------------------------
INSERT INTO `inventory` VALUES (2, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_1', 90143, 'M.WNKM-Wonokromo', 16, 16, 0, 0, 0, 10, 20, -4, 'tes', NULL, '2023-10-31 04:45:45');
INSERT INTO `inventory` VALUES (3, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_1', 92694, 'M.WNLO-Wonocolo', 13, 13, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory` VALUES (4, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_1', 93675, 'M.GAYU-Gayungan', 7, 7, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory` VALUES (5, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_1', 93907, 'M.WNK2-Wonokromo 2', 7, 7, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory` VALUES (6, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_10', 90475, 'M.SMPR-Semampir', 14, 12, 1, 1, 0, 12, 17, -5, NULL, NULL, '2023-10-26 10:49:10');
INSERT INTO `inventory` VALUES (7, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_10', 92136, 'M.PBCT-Pabean Cantian', 14, 10, 0, 4, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory` VALUES (8, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_10', 92351, 'M.SMP2-Semampir 2', 8, 8, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory` VALUES (9, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_10', 93316, 'M.SMP3-Semampir 3', 7, 7, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory` VALUES (10, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_10', 93698, 'M.PBC2-Pabean Cantian 2', 7, 7, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory` VALUES (11, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_2', 92215, 'M.RGKT-Rungkut', 4, 4, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory` VALUES (12, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_2', 92261, 'M.SKLG-Sukolilo Gresik', 12, 12, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory` VALUES (13, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_2', 93318, 'M.SKG2-Sukolilo Gresik 2', 7, 6, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory` VALUES (14, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_2', 93618, 'M.TSJY-Tenggilis Mejoyo', 6, 6, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory` VALUES (15, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_2', 93694, 'M.GYAR-Gunung anyar', 7, 7, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory` VALUES (16, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_3', 91987, 'M.GBSB-Gubeng Surabaya', 9, 9, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory` VALUES (17, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_3', 92301, 'M.TGRI-Tegalsari', 17, 16, 0, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory` VALUES (18, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_3', 93679, 'M.GNTG-Genteng', 7, 7, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory` VALUES (19, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_3', 93723, 'M.GUB2-Gubeng 2', 7, 7, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory` VALUES (20, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_3', 93909, 'M.TGI2-Tegalsari 2', 7, 7, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory` VALUES (21, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_4', 92282, 'M.TBSR-Tambaksari', 13, 13, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory` VALUES (22, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_4', 92350, 'M.TBK2-Tambaksari 2', 6, 1, 0, 5, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory` VALUES (23, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_4', 93627, 'M.BLAK-Bulak', 7, 6, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory` VALUES (24, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_4', 93704, 'M.MYJO-Mulyorejo', 6, 6, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory` VALUES (25, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_4', 93711, 'M.TBI3-Tambaksari 3', 7, 7, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory` VALUES (26, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_4', 93715, 'M.MYJ2-Mulyorejo 2', 7, 6, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory` VALUES (27, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_5', 90138, 'M.KNJR-Kenjeran', 21, 16, 1, 4, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory` VALUES (28, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_5', 91719, 'M.SIMT-Simokerto', 10, 10, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory` VALUES (29, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_5', 92689, 'M.KNJ2-Kenjeran 2', 8, 7, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory` VALUES (30, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_5', 92693, 'M.SIM2-Simokerto 2', 7, 6, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory` VALUES (31, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_5', 93317, 'M.SIM3-Simokerto 3', 7, 7, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory` VALUES (32, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_5', 93632, 'M.BLA2-Bulak 2', 6, 6, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory` VALUES (33, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_6', 92337, 'M.JBGN-Jambangan', 22, 15, 2, 5, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory` VALUES (34, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_6', 93635, 'M.KRPL-Karangpilang', 9, 9, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory` VALUES (35, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_6', 93684, 'M.LRSI-Lakarsantri', 7, 7, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory` VALUES (36, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_6', 93693, 'M.WYUG-Wiyung', 7, 7, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory` VALUES (37, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_6', 93716, 'M.DUPS-Dukuh Pakis', 6, 5, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory` VALUES (38, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_7', 90132, 'M.BYRP-Banyu Urip', 11, 11, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory` VALUES (39, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_7', 91701, 'M.SWHN-Sawahan', 16, 15, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory` VALUES (40, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_7', 92686, 'M.BYU2-Banyu Urip 2', 7, 6, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory` VALUES (41, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_7', 93322, 'M.SOML-Suko Manunggal', 7, 7, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory` VALUES (42, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_7', 93623, 'M.SOM2-Sukomanunggal 2', 7, 7, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory` VALUES (43, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_8', 90134, 'M.TNDS-Tandes', 9, 9, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory` VALUES (44, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_8', 92123, 'M.SMKP-Sambikerep', 11, 10, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory` VALUES (45, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_8', 92691, 'M.MNK2-Manukan 2', 9, 7, 2, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory` VALUES (46, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_8', 93626, 'M.ASWO-Asemrowo', 7, 7, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory` VALUES (47, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_8', 93731, 'M.BNWO-Benowo', 7, 7, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory` VALUES (48, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_9', 90133, 'M.KRBG-Krembangan', 16, 16, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory` VALUES (49, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_9', 91930, 'M.BBTN-Bubutan', 8, 7, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory` VALUES (50, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_9', 92690, 'M.KRBG-Krembangan', 6, 6, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory` VALUES (51, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_9', 93315, 'M.BTN2-Bubutan 2', 5, 5, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory` VALUES (54, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_1', 90132, 'M.BYRP- Banyu Urip', 10, 10, 0, 0, 0, 10, 10, 0, 'tes add', '2023-10-31 05:26:23', '2023-10-31 05:26:23');

-- ----------------------------
-- Table structure for inventory_copy1
-- ----------------------------
DROP TABLE IF EXISTS `inventory_copy1`;
CREATE TABLE `inventory_copy1`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `cabang` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `region` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `area` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kode_unit` int NULL DEFAULT NULL,
  `nama_unit` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `jumlah_kdo` int NULL DEFAULT NULL,
  `kdo_aktif` int NULL DEFAULT NULL,
  `kdo_rusak` int NULL DEFAULT NULL,
  `kdo_jt_lelang` int NULL DEFAULT NULL,
  `kdo_hilang` int NULL DEFAULT NULL,
  `jml_sdm_bisnis` int NULL DEFAULT NULL,
  `jml_std_kdo` int NULL DEFAULT NULL,
  `gap_kdo` int NULL DEFAULT NULL,
  `keterangan` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 52 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of inventory_copy1
-- ----------------------------
INSERT INTO `inventory_copy1` VALUES (2, 'PNM Surabaya', 'Reg. Surabaya 1', 'Area Surabaya 1', 90143, 'M.WNKM- Wonokromo', 16, 16, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory_copy1` VALUES (3, 'PNM Surabaya', 'Reg. Surabaya 1', 'Area Surabaya 1', 92694, 'M.WNLO- Wonocolo', 13, 13, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory_copy1` VALUES (4, 'PNM Surabaya', 'Reg. Surabaya 1', 'Area Surabaya 1', 93675, 'M.GAYU- Gayungan', 7, 7, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory_copy1` VALUES (5, 'PNM Surabaya', 'Reg. Surabaya 1', 'Area Surabaya 1', 93907, 'M.WNK2- Wonokromo 2', 7, 7, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory_copy1` VALUES (6, 'PNM Surabaya', 'Reg. Surabaya 1', 'Area Surabaya 10', 90475, 'M.SMPR- Semampir', 14, 12, 1, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory_copy1` VALUES (7, 'PNM Surabaya', 'Reg. Surabaya 1', 'Area Surabaya 10', 92136, 'M.PBCT- Pabean Cantian', 14, 10, 0, 4, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory_copy1` VALUES (8, 'PNM Surabaya', 'Reg. Surabaya 1', 'Area Surabaya 10', 92351, 'M.SMP2- Semampir 2', 8, 8, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory_copy1` VALUES (9, 'PNM Surabaya', 'Reg. Surabaya 1', 'Area Surabaya 10', 93316, 'M.SMP3- Semampir 3', 7, 7, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory_copy1` VALUES (10, 'PNM Surabaya', 'Reg. Surabaya 1', 'Area Surabaya 10', 93698, 'M.PBC2- Pabean Cantian 2', 7, 7, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory_copy1` VALUES (11, 'PNM Surabaya', 'Reg. Surabaya 1', 'Area Surabaya 2', 92215, 'M.RGKT- Rungkut', 4, 4, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory_copy1` VALUES (12, 'PNM Surabaya', 'Reg. Surabaya 1', 'Area Surabaya 2', 92261, 'M.SKLG- Sukolilo Gresik', 12, 12, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory_copy1` VALUES (13, 'PNM Surabaya', 'Reg. Surabaya 1', 'Area Surabaya 2', 93318, 'M.SKG2- Sukolilo Gresik 2', 7, 6, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory_copy1` VALUES (14, 'PNM Surabaya', 'Reg. Surabaya 1', 'Area Surabaya 2', 93618, 'M.TSJY- Tenggilis Mejoyo', 6, 6, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory_copy1` VALUES (15, 'PNM Surabaya', 'Reg. Surabaya 1', 'Area Surabaya 2', 93694, 'M.GYAR- Gunung anyar', 7, 7, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory_copy1` VALUES (16, 'PNM Surabaya', 'Reg. Surabaya 1', 'Area Surabaya 3', 91987, 'M.GBSB- Gubeng Surabaya', 9, 9, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory_copy1` VALUES (17, 'PNM Surabaya', 'Reg. Surabaya 1', 'Area Surabaya 3', 92301, 'M.TGRI- Tegalsari', 17, 16, 0, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory_copy1` VALUES (18, 'PNM Surabaya', 'Reg. Surabaya 1', 'Area Surabaya 3', 93679, 'M.GNTG- Genteng', 7, 7, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory_copy1` VALUES (19, 'PNM Surabaya', 'Reg. Surabaya 1', 'Area Surabaya 3', 93723, 'M.GUB2- Gubeng 2', 7, 7, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory_copy1` VALUES (20, 'PNM Surabaya', 'Reg. Surabaya 1', 'Area Surabaya 3', 93909, 'M.TGI2- Tegalsari 2', 7, 7, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory_copy1` VALUES (21, 'PNM Surabaya', 'Reg. Surabaya 1', 'Area Surabaya 4', 92282, 'M.TBSR- Tambaksari', 13, 13, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory_copy1` VALUES (22, 'PNM Surabaya', 'Reg. Surabaya 1', 'Area Surabaya 4', 92350, 'M.TBK2- Tambaksari 2', 6, 1, 0, 5, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory_copy1` VALUES (23, 'PNM Surabaya', 'Reg. Surabaya 1', 'Area Surabaya 4', 93627, 'M.BLAK- Bulak', 7, 6, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory_copy1` VALUES (24, 'PNM Surabaya', 'Reg. Surabaya 1', 'Area Surabaya 4', 93704, 'M.MYJO- Mulyorejo', 6, 6, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory_copy1` VALUES (25, 'PNM Surabaya', 'Reg. Surabaya 1', 'Area Surabaya 4', 93711, 'M.TBI3- Tambaksari 3', 7, 7, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory_copy1` VALUES (26, 'PNM Surabaya', 'Reg. Surabaya 1', 'Area Surabaya 4', 93715, 'M.MYJ2- Mulyorejo 2', 7, 6, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory_copy1` VALUES (27, 'PNM Surabaya', 'Reg. Surabaya 1', 'Area Surabaya 5', 90138, 'M.KNJR- Kenjeran', 21, 16, 1, 4, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory_copy1` VALUES (28, 'PNM Surabaya', 'Reg. Surabaya 1', 'Area Surabaya 5', 91719, 'M.SIMT- Simokerto', 10, 10, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory_copy1` VALUES (29, 'PNM Surabaya', 'Reg. Surabaya 1', 'Area Surabaya 5', 92689, 'M.KNJ2- Kenjeran 2', 8, 7, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory_copy1` VALUES (30, 'PNM Surabaya', 'Reg. Surabaya 1', 'Area Surabaya 5', 92693, 'M.SIM2- Simokerto 2', 7, 6, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory_copy1` VALUES (31, 'PNM Surabaya', 'Reg. Surabaya 1', 'Area Surabaya 5', 93317, 'M.SIM3- Simokerto 3', 7, 7, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory_copy1` VALUES (32, 'PNM Surabaya', 'Reg. Surabaya 1', 'Area Surabaya 5', 93632, 'M.BLA2- Bulak 2', 6, 6, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory_copy1` VALUES (33, 'PNM Surabaya', 'Reg. Surabaya 1', 'Area Surabaya 6', 92337, 'M.JBGN- Jambangan', 22, 15, 2, 5, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory_copy1` VALUES (34, 'PNM Surabaya', 'Reg. Surabaya 1', 'Area Surabaya 6', 93635, 'M.KRPL- Karangpilang', 9, 9, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory_copy1` VALUES (35, 'PNM Surabaya', 'Reg. Surabaya 1', 'Area Surabaya 6', 93684, 'M.LRSI- Lakarsantri', 7, 7, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory_copy1` VALUES (36, 'PNM Surabaya', 'Reg. Surabaya 1', 'Area Surabaya 6', 93693, 'M.WYUG- Wiyung', 7, 7, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory_copy1` VALUES (37, 'PNM Surabaya', 'Reg. Surabaya 1', 'Area Surabaya 6', 93716, 'M.DUPS- Dukuh Pakis', 6, 5, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory_copy1` VALUES (38, 'PNM Surabaya', 'Reg. Surabaya 1', 'Area Surabaya 7', 90132, 'M.BYRP- Banyu Urip', 11, 11, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory_copy1` VALUES (39, 'PNM Surabaya', 'Reg. Surabaya 1', 'Area Surabaya 7', 91701, 'M.SWHN- Sawahan', 16, 15, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory_copy1` VALUES (40, 'PNM Surabaya', 'Reg. Surabaya 1', 'Area Surabaya 7', 92686, 'M.BYU2- Banyu Urip 2', 7, 6, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory_copy1` VALUES (41, 'PNM Surabaya', 'Reg. Surabaya 1', 'Area Surabaya 7', 93322, 'M.SOML- Suko Manunggal', 7, 7, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory_copy1` VALUES (42, 'PNM Surabaya', 'Reg. Surabaya 1', 'Area Surabaya 7', 93623, 'M.SOM2- Sukomanunggal 2', 7, 7, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory_copy1` VALUES (43, 'PNM Surabaya', 'Reg. Surabaya 1', 'Area Surabaya 8', 90134, 'M.TNDS- Tandes', 9, 9, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory_copy1` VALUES (44, 'PNM Surabaya', 'Reg. Surabaya 1', 'Area Surabaya 8', 92123, 'M.SMKP- Sambikerep', 11, 10, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory_copy1` VALUES (45, 'PNM Surabaya', 'Reg. Surabaya 1', 'Area Surabaya 8', 92691, 'M.MNK2- Manukan 2', 9, 7, 2, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory_copy1` VALUES (46, 'PNM Surabaya', 'Reg. Surabaya 1', 'Area Surabaya 8', 93626, 'M.ASWO- Asemrowo', 7, 7, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory_copy1` VALUES (47, 'PNM Surabaya', 'Reg. Surabaya 1', 'Area Surabaya 8', 93731, 'M.BNWO- Benowo', 7, 7, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory_copy1` VALUES (48, 'PNM Surabaya', 'Reg. Surabaya 1', 'Area Surabaya 9', 90133, 'M.KRBG- Krembangan', 16, 16, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory_copy1` VALUES (49, 'PNM Surabaya', 'Reg. Surabaya 1', 'Area Surabaya 9', 91930, 'M.BBTN- Bubutan', 8, 7, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory_copy1` VALUES (50, 'PNM Surabaya', 'Reg. Surabaya 1', 'Area Surabaya 9', 92690, 'M.KRBG- Krembangan', 6, 6, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `inventory_copy1` VALUES (51, 'PNM Surabaya', 'Reg. Surabaya 1', 'Area Surabaya 9', 93315, 'M.BTN2- Bubutan 2', 5, 5, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for jenispelatihans
-- ----------------------------
DROP TABLE IF EXISTS `jenispelatihans`;
CREATE TABLE `jenispelatihans`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama_jenis` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of jenispelatihans
-- ----------------------------
INSERT INTO `jenispelatihans` VALUES (1, 'Reguler');
INSERT INTO `jenispelatihans` VALUES (2, 'Pameran');

-- ----------------------------
-- Table structure for jenisunits
-- ----------------------------
DROP TABLE IF EXISTS `jenisunits`;
CREATE TABLE `jenisunits`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `jenis_unit` varchar(35) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of jenisunits
-- ----------------------------
INSERT INTO `jenisunits` VALUES (1, 'Mekaar');
INSERT INTO `jenisunits` VALUES (2, 'ULaMM');

-- ----------------------------
-- Table structure for kodecabang
-- ----------------------------
DROP TABLE IF EXISTS `kodecabang`;
CREATE TABLE `kodecabang`  (
  `kode_cab` char(3) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '',
  `nama_cab` char(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '',
  `DATA_CAB` char(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'datasource_mtech',
  `IP_CAB` char(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT 'localhost',
  `DATABASE_CAB` char(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '',
  `GL_RAK_DB` char(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '',
  `GL_RAK_CR` char(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '',
  `tipe_cab` tinyint NOT NULL DEFAULT 0,
  `PWD_CAB` char(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'mmsPNMonl1n3',
  `DRIVER_CAB` char(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'MySQL ODBC 3.51 Driver',
  `USER_CAB` char(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'root',
  `KODE_CAB_INDUK` char(3) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '',
  `NAMA_CAB_INDUK` char(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '',
  `Port_Cab` char(4) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `posisi_konsolidasi` char(3) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT 'K00'
) ENGINE = MyISAM CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Fixed;

-- ----------------------------
-- Records of kodecabang
-- ----------------------------
INSERT INTO `kodecabang` VALUES ('001', 'KANTOR PUSAT', 'mydata', '192.168.1.125', 'Mtechkonve', '10704', '20904', 1, 'mmsPNMonl1n3', 'MySQL ODBC 3.51 Driver', 'root', '', '', '3307', 'K00');
INSERT INTO `kodecabang` VALUES ('002', 'KANTOR TANGGULANGIN', 'datasource_cab1', '103.77.157.186', 'mtechkonve', '10701', '20901', 2, 'mmsPNMonl1n3', 'MySQL ODBC 3.51 Driver', 'root', '', '', '3307', 'K01');
INSERT INTO `kodecabang` VALUES ('003', 'KANTOR MALANG', 'datasource_cab2', '103.77.157.24', 'mtechkonve', '21102', '21102', 2, 'mmsPNMonl1n3', 'MySQL ODBC 3.51 Driver', 'root', '', '', '3307', 'K02');
INSERT INTO `kodecabang` VALUES ('005', 'KANTOR PURWOSARI', 'datasource_cab4', '103.77.157.210', 'mtechkonve', '10703', '20903', 2, 'mmsPNMonl1n3', 'MySQL ODBC 3.51 Driver', 'root', '', '', '3307', 'K03');
INSERT INTO `kodecabang` VALUES ('004', 'KANTOR PASURUAN', 'datasource_cab3', '103.77.157.42', 'mtechkonve', '10703', '20903', 2, 'mmsPNMonl1n3', 'MySQL ODBC 3.51 Driver', 'root', '', '', '3307', 'K03');

-- ----------------------------
-- Table structure for logo
-- ----------------------------
DROP TABLE IF EXISTS `logo`;
CREATE TABLE `logo`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `logo_name` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of logo
-- ----------------------------
INSERT INTO `logo` VALUES (1, '1604728040.png');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2023_10_25_083911_create_inventory_table', 1);
INSERT INTO `migrations` VALUES (2, '2023_10_26_033124_create_unit_table', 2);
INSERT INTO `migrations` VALUES (3, '2023_10_26_061554_create_regions_table', 3);
INSERT INTO `migrations` VALUES (4, '2023_10_26_062304_create_areas_table', 3);
INSERT INTO `migrations` VALUES (5, '2023_10_31_103111_create_namapelatihans_table', 4);
INSERT INTO `migrations` VALUES (6, '2023_10_31_124434_create_pkuusers_table', 4);
INSERT INTO `migrations` VALUES (7, '2023_10_31_125957_create_jenispelatihans_table', 5);
INSERT INTO `migrations` VALUES (8, '2023_10_31_130027_create_jenisunits_table', 5);
INSERT INTO `migrations` VALUES (9, '2023_10_31_131733_create_pelatihans_table', 6);
INSERT INTO `migrations` VALUES (10, '2023_11_01_022531_create_pkudatas_table', 7);

-- ----------------------------
-- Table structure for namapelatihans
-- ----------------------------
DROP TABLE IF EXISTS `namapelatihans`;
CREATE TABLE `namapelatihans`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama_pelatihan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of namapelatihans
-- ----------------------------
INSERT INTO `namapelatihans` VALUES (1, 'Mba Maya');
INSERT INTO `namapelatihans` VALUES (2, 'Kak Wulan');

-- ----------------------------
-- Table structure for pelatihans
-- ----------------------------
DROP TABLE IF EXISTS `pelatihans`;
CREATE TABLE `pelatihans`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `pic` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jnspelatihan_id` int NOT NULL,
  `nmpelatihan_id` int NOT NULL,
  `jenisunit_id` int NOT NULL,
  `target` int NOT NULL,
  `realisasi` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pelatihans
-- ----------------------------

-- ----------------------------
-- Table structure for pkudatas
-- ----------------------------
DROP TABLE IF EXISTS `pkudatas`;
CREATE TABLE `pkudatas`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `pic_id` int NOT NULL,
  `mba_maya_mekaar_target` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `mba_maya_mekaar_realisasi` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `mba_maya_ulamm_target` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `mba_maya_ulamm_realisasi` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `kak_wulan_mekaar_target` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `kak_wulan_mekaar_realisasi` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `pameran_target` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `pameran_realisasi` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pkudatas
-- ----------------------------
INSERT INTO `pkudatas` VALUES (1, 1, '19', '19', '20', '20', '21', '21', '22', '22');
INSERT INTO `pkudatas` VALUES (2, 2, '10', '10', '10', '10', '10', '10', '10', '10');

-- ----------------------------
-- Table structure for pkudatas_copy1
-- ----------------------------
DROP TABLE IF EXISTS `pkudatas_copy1`;
CREATE TABLE `pkudatas_copy1`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `pic_id` int NOT NULL,
  `mba_maya_mekaar_target` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `mba_maya_mekaar_realisasi` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `mba_maya_ulamm_target` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `mba_maya_ulamm_realisasi` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `kak_wulan_mekaar_target` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `kak_wulan_mekaar_realisasi` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `pameran_target` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `pameran_realisasi` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pkudatas_copy1
-- ----------------------------

-- ----------------------------
-- Table structure for pkuusers
-- ----------------------------
DROP TABLE IF EXISTS `pkuusers`;
CREATE TABLE `pkuusers`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama` varchar(70) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pkuusers
-- ----------------------------
INSERT INTO `pkuusers` VALUES (1, 'MIO');
INSERT INTO `pkuusers` VALUES (2, 'RAL');
INSERT INTO `pkuusers` VALUES (3, 'HTA');
INSERT INTO `pkuusers` VALUES (4, 'PIR');

-- ----------------------------
-- Table structure for regions
-- ----------------------------
DROP TABLE IF EXISTS `regions`;
CREATE TABLE `regions`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama_region` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of regions
-- ----------------------------
INSERT INTO `regions` VALUES (1, 'Reg_Surabaya_1');
INSERT INTO `regions` VALUES (2, 'Reg_Surabaya_2');
INSERT INTO `regions` VALUES (3, 'Reg. Surabaya_3');

-- ----------------------------
-- Table structure for unit
-- ----------------------------
DROP TABLE IF EXISTS `unit`;
CREATE TABLE `unit`  (
  `kode_unit` int NOT NULL,
  `nama_unit` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`kode_unit`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of unit
-- ----------------------------
INSERT INTO `unit` VALUES (90132, 'M.BYRP- Banyu Urip');
INSERT INTO `unit` VALUES (90133, 'M.KRBG- Krembangan');
INSERT INTO `unit` VALUES (90134, 'M.TNDS- Tandes');
INSERT INTO `unit` VALUES (90138, 'M.KNJR- Kenjeran');
INSERT INTO `unit` VALUES (90143, 'M.WNKM- Wonokromo');
INSERT INTO `unit` VALUES (90475, 'M.SMPR- Semampir');
INSERT INTO `unit` VALUES (91701, 'M.SWHN- Sawahan');
INSERT INTO `unit` VALUES (91719, 'M.SIMT- Simokerto');
INSERT INTO `unit` VALUES (91930, 'M.BBTN- Bubutan');
INSERT INTO `unit` VALUES (91987, 'M.GBSB- Gubeng Surabaya');
INSERT INTO `unit` VALUES (92123, 'M.SMKP- Sambikerep');
INSERT INTO `unit` VALUES (92136, 'M.PBCT- Pabean Cantian');
INSERT INTO `unit` VALUES (92215, 'M.RGKT- Rungkut');
INSERT INTO `unit` VALUES (92261, 'M.SKLG- Sukolilo Gresik');
INSERT INTO `unit` VALUES (92282, 'M.TBSR- Tambaksari');
INSERT INTO `unit` VALUES (92301, 'M.TGRI- Tegalsari');
INSERT INTO `unit` VALUES (92337, 'M.JBGN- Jambangan');
INSERT INTO `unit` VALUES (92350, 'M.TBK2- Tambaksari 2');
INSERT INTO `unit` VALUES (92351, 'M.SMP2- Semampir 2');
INSERT INTO `unit` VALUES (92686, 'M.BYU2- Banyu Urip 2');
INSERT INTO `unit` VALUES (92689, 'M.KNJ2- Kenjeran 2');
INSERT INTO `unit` VALUES (92690, 'M.KRBG- Krembangan');
INSERT INTO `unit` VALUES (92691, 'M.MNK2- Manukan 2');
INSERT INTO `unit` VALUES (92693, 'M.SIM2- Simokerto 2');
INSERT INTO `unit` VALUES (92694, 'M.WNLO- Wonocolo');
INSERT INTO `unit` VALUES (93315, 'M.BTN2- Bubutan 2');
INSERT INTO `unit` VALUES (93316, 'M.SMP3- Semampir 3');
INSERT INTO `unit` VALUES (93317, 'M.SIM3- Simokerto 3');
INSERT INTO `unit` VALUES (93318, 'M.SKG2- Sukolilo Gresik 2');
INSERT INTO `unit` VALUES (93322, 'M.SOML- Suko Manunggal');
INSERT INTO `unit` VALUES (93618, 'M.TSJY- Tenggilis Mejoyo');
INSERT INTO `unit` VALUES (93623, 'M.SOM2- Sukomanunggal 2');
INSERT INTO `unit` VALUES (93626, 'M.ASWO- Asemrowo');
INSERT INTO `unit` VALUES (93627, 'M.BLAK- Bulak');
INSERT INTO `unit` VALUES (93632, 'M.BLA2- Bulak 2');
INSERT INTO `unit` VALUES (93635, 'M.KRPL- Karangpilang');
INSERT INTO `unit` VALUES (93675, 'M.GAYU- Gayungan');
INSERT INTO `unit` VALUES (93679, 'M.GNTG- Genteng');
INSERT INTO `unit` VALUES (93684, 'M.LRSI- Lakarsantri');
INSERT INTO `unit` VALUES (93693, 'M.WYUG- Wiyung');
INSERT INTO `unit` VALUES (93694, 'M.GYAR- Gunung anyar');
INSERT INTO `unit` VALUES (93698, 'M.PBC2- Pabean Cantian 2');
INSERT INTO `unit` VALUES (93704, 'M.MYJO- Mulyorejo');
INSERT INTO `unit` VALUES (93711, 'M.TBI3- Tambaksari 3');
INSERT INTO `unit` VALUES (93715, 'M.MYJ2- Mulyorejo 2');
INSERT INTO `unit` VALUES (93716, 'M.DUPS- Dukuh Pakis');
INSERT INTO `unit` VALUES (93723, 'M.GUB2- Gubeng 2');
INSERT INTO `unit` VALUES (93731, 'M.BNWO- Benowo');
INSERT INTO `unit` VALUES (93907, 'M.WNK2- Wonokromo 2');
INSERT INTO `unit` VALUES (93909, 'M.TGI2- Tegalsari 2');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `name` varbinary(70) NULL DEFAULT NULL,
  `email` varbinary(70) NULL DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '',
  `remember_token` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `privilege` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 0x697268616D2073796168, 0x697268616D70313240676D61696C2E636F6D, NULL, '$2y$10$ERMc13FZ8U51/AOxmecDde.CWOGXXsSavQQYZMWZrFNT52K5pi54u', NULL, 'admin', '2022-11-05 06:56:58', '2022-11-05 06:56:58');
INSERT INTO `users` VALUES (2, 0x697268616D2073796168, 0x6D6963726F62616E6B696E6773797374656D40676D61696C2E636F6D, NULL, '$2y$10$n7yYa30eNWtLYPQ8z3G/8u8JH6VpfxsIqlfflwg6mXWN.BfpsVb9W', NULL, 'admin', '2023-01-10 23:44:57', '2023-01-10 23:44:57');

SET FOREIGN_KEY_CHECKS = 1;
