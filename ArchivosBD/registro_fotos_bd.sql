/*
 Navicat Premium Data Transfer

 Source Server         : MySQL
 Source Server Type    : MySQL
 Source Server Version : 100414
 Source Host           : localhost:3306
 Source Schema         : fotos_db

 Target Server Type    : MySQL
 Target Server Version : 100414
 File Encoding         : 65001

 Date: 22/02/2022 21:02:07
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for documents
-- ----------------------------
DROP TABLE IF EXISTS `documents`;
CREATE TABLE `documents`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `idproject` bigint UNSIGNED NOT NULL,
  `document` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `documents_idproject_foreign`(`idproject`) USING BTREE,
  CONSTRAINT `documents_idproject_foreign` FOREIGN KEY (`idproject`) REFERENCES `projects` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 35 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of documents
-- ----------------------------
INSERT INTO `documents` VALUES (17, 9, '1a.jpg', NULL, '2022-02-22 15:13:00', '2022-02-22 15:13:00');
INSERT INTO `documents` VALUES (18, 9, '2a.jpg', NULL, '2022-02-22 15:13:00', '2022-02-22 15:13:00');
INSERT INTO `documents` VALUES (19, 9, '3a.jpg', NULL, '2022-02-22 15:13:00', '2022-02-22 15:13:00');
INSERT INTO `documents` VALUES (20, 7, '1b.jpg', NULL, '2022-02-22 15:14:43', '2022-02-22 15:14:43');
INSERT INTO `documents` VALUES (21, 7, '2b.jpg', NULL, '2022-02-22 15:14:43', '2022-02-22 15:14:43');
INSERT INTO `documents` VALUES (22, 7, '3b.jpg', NULL, '2022-02-22 15:14:43', '2022-02-22 15:14:43');
INSERT INTO `documents` VALUES (23, 7, '4b.jpg', NULL, '2022-02-22 15:14:43', '2022-02-22 15:14:43');
INSERT INTO `documents` VALUES (24, 8, '1c.jpg', NULL, '2022-02-22 15:16:22', '2022-02-22 15:16:22');
INSERT INTO `documents` VALUES (25, 8, '2c.jpg', NULL, '2022-02-22 15:16:22', '2022-02-22 15:16:22');
INSERT INTO `documents` VALUES (26, 8, '3c.jpg', NULL, '2022-02-22 15:16:22', '2022-02-22 15:16:22');
INSERT INTO `documents` VALUES (27, 8, '4c.jpg', NULL, '2022-02-22 15:16:22', '2022-02-22 15:16:22');
INSERT INTO `documents` VALUES (28, 9, '4a.jpg', NULL, '2022-02-22 15:24:47', '2022-02-22 15:24:47');
INSERT INTO `documents` VALUES (29, 9, '5a.jpg', NULL, '2022-02-22 15:24:48', '2022-02-22 15:24:48');
INSERT INTO `documents` VALUES (30, 9, '6a.jpg', NULL, '2022-02-22 15:24:48', '2022-02-22 15:24:48');
INSERT INTO `documents` VALUES (31, 7, '5b.jpg', NULL, '2022-02-22 15:26:06', '2022-02-22 15:26:06');
INSERT INTO `documents` VALUES (32, 7, '6b.jpg', NULL, '2022-02-22 15:26:06', '2022-02-22 15:26:06');
INSERT INTO `documents` VALUES (33, 8, '5c.jpg', NULL, '2022-02-22 15:29:19', '2022-02-22 15:29:19');
INSERT INTO `documents` VALUES (34, 8, '6c.jpg', NULL, '2022-02-22 15:29:19', '2022-02-22 15:29:19');

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp(0) NOT NULL DEFAULT current_timestamp(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for historials
-- ----------------------------
DROP TABLE IF EXISTS `historials`;
CREATE TABLE `historials`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `idproject` bigint UNSIGNED NOT NULL,
  `descripcion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `historials_idproject_foreign`(`idproject`) USING BTREE,
  CONSTRAINT `historials_idproject_foreign` FOREIGN KEY (`idproject`) REFERENCES `projects` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of historials
-- ----------------------------
INSERT INTO `historials` VALUES (7, 9, 'LA OBRA ESTA EMPEZANDO Y LOS TRABAJDORES YA TIENE UN BUIEN AVANCE DE LA CONSTRUCCION', '2022-02-22 15:13:00', '2022-02-22 15:13:00');
INSERT INTO `historials` VALUES (8, 7, 'LA OBRA ESTA EN PLENA CONSTRUCCION LOS TRABAJADORES TUVIERON INCONVENIENTES AL MOMENTO DE EMPEZAR', '2022-02-22 15:14:43', '2022-02-22 15:14:43');
INSERT INTO `historials` VALUES (9, 8, 'LA OBRA YA AVANZO BASTANTE EN EL TRANSCURSO DE LOS DIAS Y SE ADJUNTA LAS IMAGENES DE DICHO AVANCE', '2022-02-22 15:16:22', '2022-02-22 15:16:22');
INSERT INTO `historials` VALUES (10, 9, 'LA OBRA VA EN PROGRESO Y LOS TRABAJDORES ESTAN AVANZANDO RAPIDO EN LA CONSTRUCCION', '2022-02-22 15:24:48', '2022-02-22 15:24:48');
INSERT INTO `historials` VALUES (11, 7, 'SE ESTA CONLUYENDO CON LA OBRA YA QUE LOS TRABAJDORES AVANZARON MUCHO', '2022-02-22 15:26:06', '2022-02-22 15:26:06');
INSERT INTO `historials` VALUES (12, 8, 'LA OBRA ESTA YA POR FINALIZAR SOLO FALTA ALGUNOS AJUSTES Y ESTARA LISTO', '2022-02-22 15:29:20', '2022-02-22 15:29:20');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2015_01_20_084450_create_roles_table', 1);
INSERT INTO `migrations` VALUES (4, '2015_01_20_084525_create_role_user_table', 1);
INSERT INTO `migrations` VALUES (5, '2015_01_24_080208_create_permissions_table', 1);
INSERT INTO `migrations` VALUES (6, '2015_01_24_080433_create_permission_role_table', 1);
INSERT INTO `migrations` VALUES (7, '2015_12_04_003040_add_special_role_column', 1);
INSERT INTO `migrations` VALUES (8, '2017_10_17_170735_create_permission_user_table', 1);
INSERT INTO `migrations` VALUES (9, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (10, '2022_02_11_154145_create_projects_table', 1);
INSERT INTO `migrations` VALUES (11, '2022_02_11_154922_create_workers_table', 1);
INSERT INTO `migrations` VALUES (12, '2022_02_11_155338_create_documents_table', 1);
INSERT INTO `migrations` VALUES (13, '2022_02_11_191313_create_historials_table', 1);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for permission_role
-- ----------------------------
DROP TABLE IF EXISTS `permission_role`;
CREATE TABLE `permission_role`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `permission_role_permission_id_index`(`permission_id`) USING BTREE,
  INDEX `permission_role_role_id_index`(`role_id`) USING BTREE,
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 30 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of permission_role
-- ----------------------------
INSERT INTO `permission_role` VALUES (1, 10, 2, '2022-02-22 08:45:04', '2022-02-22 08:45:04');
INSERT INTO `permission_role` VALUES (2, 11, 2, '2022-02-22 08:45:04', '2022-02-22 08:45:04');
INSERT INTO `permission_role` VALUES (3, 12, 2, '2022-02-22 08:45:04', '2022-02-22 08:45:04');
INSERT INTO `permission_role` VALUES (4, 13, 2, '2022-02-22 08:45:04', '2022-02-22 08:45:04');
INSERT INTO `permission_role` VALUES (5, 14, 2, '2022-02-22 08:45:04', '2022-02-22 08:45:04');
INSERT INTO `permission_role` VALUES (6, 15, 2, '2022-02-22 08:45:04', '2022-02-22 08:45:04');
INSERT INTO `permission_role` VALUES (8, 17, 2, '2022-02-22 08:45:04', '2022-02-22 08:45:04');
INSERT INTO `permission_role` VALUES (9, 18, 2, '2022-02-22 08:45:04', '2022-02-22 08:45:04');
INSERT INTO `permission_role` VALUES (10, 19, 2, '2022-02-22 08:45:04', '2022-02-22 08:45:04');
INSERT INTO `permission_role` VALUES (11, 1, 3, '2022-02-22 08:45:57', '2022-02-22 08:45:57');
INSERT INTO `permission_role` VALUES (12, 2, 3, '2022-02-22 08:45:57', '2022-02-22 08:45:57');
INSERT INTO `permission_role` VALUES (13, 3, 3, '2022-02-22 08:45:57', '2022-02-22 08:45:57');
INSERT INTO `permission_role` VALUES (14, 5, 3, '2022-02-22 08:45:57', '2022-02-22 08:45:57');
INSERT INTO `permission_role` VALUES (15, 6, 3, '2022-02-22 08:45:58', '2022-02-22 08:45:58');
INSERT INTO `permission_role` VALUES (16, 7, 3, '2022-02-22 08:45:58', '2022-02-22 08:45:58');
INSERT INTO `permission_role` VALUES (17, 8, 3, '2022-02-22 08:45:58', '2022-02-22 08:45:58');
INSERT INTO `permission_role` VALUES (18, 10, 3, '2022-02-22 08:45:58', '2022-02-22 08:45:58');
INSERT INTO `permission_role` VALUES (19, 11, 3, '2022-02-22 08:45:58', '2022-02-22 08:45:58');
INSERT INTO `permission_role` VALUES (20, 12, 3, '2022-02-22 08:45:58', '2022-02-22 08:45:58');
INSERT INTO `permission_role` VALUES (21, 14, 3, '2022-02-22 08:45:58', '2022-02-22 08:45:58');
INSERT INTO `permission_role` VALUES (22, 15, 3, '2022-02-22 08:45:58', '2022-02-22 08:45:58');
INSERT INTO `permission_role` VALUES (23, 16, 3, '2022-02-22 08:45:58', '2022-02-22 08:45:58');
INSERT INTO `permission_role` VALUES (24, 17, 3, '2022-02-22 08:45:58', '2022-02-22 08:45:58');
INSERT INTO `permission_role` VALUES (25, 19, 3, '2022-02-22 08:45:58', '2022-02-22 08:45:58');
INSERT INTO `permission_role` VALUES (26, 20, 3, '2022-02-22 08:45:58', '2022-02-22 08:45:58');
INSERT INTO `permission_role` VALUES (27, 21, 3, '2022-02-22 08:45:58', '2022-02-22 08:45:58');
INSERT INTO `permission_role` VALUES (28, 22, 3, '2022-02-22 08:45:58', '2022-02-22 08:45:58');
INSERT INTO `permission_role` VALUES (29, 23, 3, '2022-02-22 08:45:58', '2022-02-22 08:45:58');

-- ----------------------------
-- Table structure for permission_user
-- ----------------------------
DROP TABLE IF EXISTS `permission_user`;
CREATE TABLE `permission_user`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `permission_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `permission_user_permission_id_index`(`permission_id`) USING BTREE,
  INDEX `permission_user_user_id_index`(`user_id`) USING BTREE,
  CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `permission_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of permission_user
-- ----------------------------

-- ----------------------------
-- Table structure for permissions
-- ----------------------------
DROP TABLE IF EXISTS `permissions`;
CREATE TABLE `permissions`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `permissions_slug_unique`(`slug`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 25 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of permissions
-- ----------------------------
INSERT INTO `permissions` VALUES (1, 'USUARIO', 'users.index', 'NAVEGA LA TABLA USUARIOS', '2022-02-21 15:33:40', '2022-02-21 15:33:40');
INSERT INTO `permissions` VALUES (2, 'USUARIO', 'users.show', 'VISUALIZA A UN USUARIO EN ESPECIFICO', '2022-02-21 15:33:40', '2022-02-21 15:33:40');
INSERT INTO `permissions` VALUES (3, 'USUARIO', 'users.edit', 'EDITA A UN USUARIO EN ESPECIFICO', '2022-02-21 15:33:40', '2022-02-21 15:33:40');
INSERT INTO `permissions` VALUES (4, 'USUARIO', 'users.destroy', 'ELIMINA UN USUARIO EN ESPECIFICO', '2022-02-21 15:33:41', '2022-02-21 15:33:41');
INSERT INTO `permissions` VALUES (5, 'ROLES', 'roles.index', 'NAVEGA LA TABLA USUARIOS', '2022-02-21 15:33:41', '2022-02-21 15:33:41');
INSERT INTO `permissions` VALUES (6, 'ROLES', 'roles.show', 'VISUALIZA A UN ROL EN ESPECIFICO', '2022-02-21 15:33:41', '2022-02-21 15:33:41');
INSERT INTO `permissions` VALUES (7, 'ROLES', 'roles.create', 'CREA UN NUEVO ROL EN EL SISTEMA', '2022-02-21 15:33:41', '2022-02-21 15:33:41');
INSERT INTO `permissions` VALUES (8, 'ROLES', 'roles.edit', 'EDITA UN ROL EN ESPECIFICO', '2022-02-21 15:33:41', '2022-02-21 15:33:41');
INSERT INTO `permissions` VALUES (9, 'ROLES', 'roles.destroy', 'ELIMINA UN ROL EN ESPECIFICO', '2022-02-21 15:33:41', '2022-02-21 15:33:41');
INSERT INTO `permissions` VALUES (10, 'DOCUMENTO', 'documents.index', 'NAVEGA LA TABLA IMAGENES', '2022-02-21 15:33:41', '2022-02-21 15:33:41');
INSERT INTO `permissions` VALUES (11, 'DOCUMENTO', 'documents.show', 'VISUALIZA A UN IMAGENES EN ESPECIFICO', '2022-02-21 15:33:41', '2022-02-21 15:33:41');
INSERT INTO `permissions` VALUES (12, 'DOCUMENTO', 'documents.create', 'CREA UN NUEVO IMAGENES EN EL SISTEMA', '2022-02-21 15:33:41', '2022-02-21 15:33:41');
INSERT INTO `permissions` VALUES (13, 'DOCUMENTO', 'documents.destroy', 'ELIMINA N REGISTRO DE IMAGEN EN ESPECIFICO', '2022-02-21 15:33:41', '2022-02-21 15:33:41');
INSERT INTO `permissions` VALUES (14, 'PROYECTO', 'projects.index', 'NAVEGA LA TABLA PROYECTO', '2022-02-21 15:33:41', '2022-02-21 15:33:41');
INSERT INTO `permissions` VALUES (15, 'PROYECTO', 'projects.show', 'VISUALIZA A UN PROYECTO EN ESPECIFICO', '2022-02-21 15:33:41', '2022-02-21 15:33:41');
INSERT INTO `permissions` VALUES (16, 'PROYECTO', 'projects.create', 'CREA UN NUEVO PROYECTO EN EL SISTEMA', '2022-02-21 15:33:41', '2022-02-21 15:33:41');
INSERT INTO `permissions` VALUES (17, 'PROYECTO', 'projects.edit', 'EDITA UN PROYECTO EN ESPECIFICO', '2022-02-21 15:33:41', '2022-02-21 15:33:41');
INSERT INTO `permissions` VALUES (18, 'PROYECTO', 'projects.destroy', 'ELIMINA UN PROYECTO EN ESPECIFICO', '2022-02-21 15:33:41', '2022-02-21 15:33:41');
INSERT INTO `permissions` VALUES (19, 'PROYECTO', 'projects.pdf', 'SACA REPORTE DEL SEGUIMIENTO EN PDF', '2022-02-21 15:33:41', '2022-02-21 15:33:41');
INSERT INTO `permissions` VALUES (20, 'TRABAJADORES', 'workers.index', 'NAVEGA LA TABLA TRABAJADORES', '2022-02-21 15:33:41', '2022-02-21 15:33:41');
INSERT INTO `permissions` VALUES (21, 'TRABAJADORES', 'workers.show', 'VISUALIZA A UN TRABAJADOR EN ESPECIFICO', '2022-02-21 15:33:41', '2022-02-21 15:33:41');
INSERT INTO `permissions` VALUES (22, 'TRABAJADORES', 'workers.create', 'CREA UN NUEVO TRABAJADOR EN EL SISTEMA', '2022-02-21 15:33:41', '2022-02-21 15:33:41');
INSERT INTO `permissions` VALUES (23, 'TRABAJADORES', 'workers.edit', 'EDITA UN TRABAJADOR EN ESPECIFICO', '2022-02-21 15:33:41', '2022-02-21 15:33:41');
INSERT INTO `permissions` VALUES (24, 'TRABAJADORES', 'workers.destroy', 'ELIMINA UN TRABAJADOR EN ESPECIFICO', '2022-02-21 15:33:41', '2022-02-21 15:33:41');

-- ----------------------------
-- Table structure for projects
-- ----------------------------
DROP TABLE IF EXISTS `projects`;
CREATE TABLE `projects`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `typeproject` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateb` date NOT NULL,
  `datef` date NOT NULL,
  `dateentry` date NOT NULL,
  `surface` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `latlon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of projects
-- ----------------------------
INSERT INTO `projects` VALUES (7, 'VIVIENDA SOCIAL LAJA', 'CONSTRUCCIÓN NUEVA', '2022-02-22', '2022-04-22', '2022-04-25', 'COMEDOR, COCINA, BAÑO, 3 DORMITORIOS, PATIO', 'EL PROYECTO CUENTA CON UNA TOPOLOGÍA DE VIVIENDA, CONSTRUIDA EN UN ÁREA DE 60.80 M2 Y CUENTA CON DOS DORMITORIOS, BAÑO, COCINA Y ESTAR-COMEDOR. EL SISTEMA CONSTRUCTIVO ES EL TRADICIONAL: CON CIMIENTOS Y SOBRECIMIENTOS DE HºCº, VIGA CADENA DE HºAº LADRILLO DE 6 H EN MUROS Y CUBIERTA DE CALAMINA GALVANIZADA N°… ETC', 'LAJA CENTRO COMUNAL LAJA 2', '-16.534467,-68.383979', '2022-02-22 12:14:02', '2022-02-22 12:14:02');
INSERT INTO `projects` VALUES (8, 'VIVENDA SOCIAL PUCARANI', 'CONSTRUCCIÓN NUEVA', '2022-02-22', '2022-03-23', '2022-03-28', 'COMEDOR, COCINA, BAÑO, 3 DORMITORIOS, PATIO', 'EL PROYECTO CUENTA CON UNA TOPOLOGÍA DE VIVIENDA, CONSTRUIDA EN UN ÁREA DE 60.80 M2 Y CUENTA CON DOS DORMITORIOS, BAÑO, COCINA Y ESTAR-COMEDOR. EL SISTEMA CONSTRUCTIVO ES EL TRADICIONAL: CON CIMIENTOS Y SOBRECIMIENTOS DE HºCº, VIGA CADENA DE HºAº LADRILLO DE 6 H EN MUROS Y CUBIERTA DE CALAMINA GALVANIZADA N°… ETC', 'PUCARANI ESTADIUM PUCARANI AV. PUCARANI CALLE. 5', '-16.400547,-68.476487', '2022-02-22 12:15:59', '2022-02-22 12:17:06');
INSERT INTO `projects` VALUES (9, 'VIVIENDA SOCIAL TIAHUANACU', 'CONSTRUCCIÓN NUEVA', '2022-02-01', '2022-03-31', '2022-04-01', 'COMEDOR, COCINA, BAÑO, 3 DORMITORIOS, PATIO', 'EL PROYECTO CUENTA CON UNA TOPOLOGÍA DE VIVIENDA, CONSTRUIDA EN UN ÁREA DE 60.80 M2 Y CUENTA CON DOS DORMITORIOS, BAÑO, COCINA Y ESTAR-COMEDOR. EL SISTEMA CONSTRUCTIVO ES EL TRADICIONAL: CON CIMIENTOS Y SOBRECIMIENTOS DE HºCº, VIGA CADENA DE HºAº LADRILLO DE 6 H EN MUROS Y CUBIERTA DE CALAMINA GALVANIZADA N°… ETC', 'TIAHUANACU HUARICHICO', '-16.55349,  -68.67944', '2022-02-22 14:32:46', '2022-02-22 14:32:46');

-- ----------------------------
-- Table structure for role_user
-- ----------------------------
DROP TABLE IF EXISTS `role_user`;
CREATE TABLE `role_user`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `role_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `role_user_role_id_index`(`role_id`) USING BTREE,
  INDEX `role_user_user_id_index`(`user_id`) USING BTREE,
  CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of role_user
-- ----------------------------
INSERT INTO `role_user` VALUES (1, 1, 45, NULL, NULL);
INSERT INTO `role_user` VALUES (2, 2, 47, '2022-02-22 08:51:31', '2022-02-22 08:51:31');
INSERT INTO `role_user` VALUES (3, 2, 48, '2022-02-22 08:51:37', '2022-02-22 08:51:37');
INSERT INTO `role_user` VALUES (5, 2, 49, '2022-02-22 15:20:32', '2022-02-22 15:20:32');

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `special` enum('all-access','no-access') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `roles_name_unique`(`name`) USING BTREE,
  UNIQUE INDEX `roles_slug_unique`(`slug`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES (1, 'Admin', 'admin', 'superUsuario', '2022-02-21 15:33:43', '2022-02-21 15:33:43', 'all-access');
INSERT INTO `roles` VALUES (2, 'Supervisor', 'Supervisor', 'Supervisor de Obras', '2022-02-22 08:45:04', '2022-02-22 08:45:04', NULL);
INSERT INTO `roles` VALUES (3, 'Ayudante', 'Ayudante', 'Ayudante de Recepcion', '2022-02-22 08:45:57', '2022-02-22 08:45:57', NULL);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp(0) NULL DEFAULT NULL,
  `direccion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `telefono` int NULL DEFAULT NULL,
  `fechanacimiento` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 50 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (45, 'Mauricion Quispe Lima', 'mauricio@gmail.com', NULL, 'EL ALTO', 65498754, '26/12/2000', '$2y$10$DPCJ9akRRc585hs3P3c65O.oydoscGhjJoJMOA/uunUkJXzgLeY1K', NULL, '2022-02-21 15:34:45', '2022-02-22 15:20:00');
INSERT INTO `users` VALUES (47, 'Maritza Santalla Alvaradp', 'maritza@gmail.com', NULL, 'Z. Villa el Tejar', 65432154, '25/12/1994', '$2y$10$bIHvxOtLovPqi7MFAU4Jn.YYViLMFOwWV3J1/YSeQeAuv6GGS4RQe', NULL, '2022-02-22 08:48:49', '2022-02-22 15:19:34');
INSERT INTO `users` VALUES (48, 'Mariale Mendoza Mamani', 'mariela@gmail.com', NULL, 'Z. Villa Bolivar A el Alto', 78945612, '01/09/2000', '$2y$10$NlM2HtSuLXZdljkQueMMzensnauqcNP7Tengkr.xV8FW.OS8ivZj2', NULL, '2022-02-22 08:49:47', '2022-02-22 08:49:47');
INSERT INTO `users` VALUES (49, 'Jorge Alberto Mendoza Quispe', 'jorge@gmail.com', NULL, 'z. villa Adela el Alto', 65432154, '09/02/1998', '$2y$10$tMeAZQTrc6g6s/4g0hAOxOeAV8n8xVlVCT0RzPSVooAe/jGfcYg3G', NULL, '2022-02-22 08:50:59', '2022-02-22 08:50:59');

-- ----------------------------
-- Table structure for workers
-- ----------------------------
DROP TABLE IF EXISTS `workers`;
CREATE TABLE `workers`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `iduser` bigint UNSIGNED NOT NULL,
  `idproject` bigint UNSIGNED NOT NULL,
  `position` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `workers_iduser_foreign`(`iduser`) USING BTREE,
  INDEX `workers_idproject_foreign`(`idproject`) USING BTREE,
  CONSTRAINT `workers_idproject_foreign` FOREIGN KEY (`idproject`) REFERENCES `projects` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `workers_iduser_foreign` FOREIGN KEY (`iduser`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of workers
-- ----------------------------
INSERT INTO `workers` VALUES (6, 48, 7, 'SUPERVISOR DE OBRA', '2022-02-22 12:23:45', '2022-02-22 12:23:45');
INSERT INTO `workers` VALUES (7, 49, 8, 'SUPERVISOR DE OBRA', '2022-02-22 12:23:55', '2022-02-22 12:23:55');
INSERT INTO `workers` VALUES (8, 47, 9, 'SUPERVISOR DE OBRA', '2022-02-22 14:32:59', '2022-02-22 14:32:59');

SET FOREIGN_KEY_CHECKS = 1;
