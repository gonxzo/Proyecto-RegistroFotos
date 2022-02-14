/*
 Navicat Premium Data Transfer

 Source Server         : MySQL
 Source Server Type    : MySQL
 Source Server Version : 100414
 Source Host           : localhost:3306
 Source Schema         : registro_fotos_bd

 Target Server Type    : MySQL
 Target Server Version : 100414
 File Encoding         : 65001

 Date: 14/02/2022 22:07:24
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
  CONSTRAINT `documents_idproject_foreign` FOREIGN KEY (`idproject`) REFERENCES `projects` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 24 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of documents
-- ----------------------------
INSERT INTO `documents` VALUES (13, 3, '0.jpg', NULL, '2022-02-11 08:37:00', '2022-02-12 06:37:08');
INSERT INTO `documents` VALUES (14, 3, '1.jpg', NULL, '2022-02-11 08:37:00', '2022-02-12 06:37:08');
INSERT INTO `documents` VALUES (15, 3, '2.jpg', NULL, '2022-02-11 08:37:00', '2022-02-12 06:37:08');
INSERT INTO `documents` VALUES (16, 3, '3.jpg', NULL, '2022-02-12 06:39:36', '2022-02-12 06:39:36');
INSERT INTO `documents` VALUES (17, 3, '4.jpg', NULL, '2022-02-12 06:39:36', '2022-02-12 06:39:36');
INSERT INTO `documents` VALUES (18, 3, '5.jpg', NULL, '2022-02-12 06:39:36', '2022-02-12 06:39:36');
INSERT INTO `documents` VALUES (19, 3, '6.jpg', NULL, '2022-02-12 06:39:36', '2022-02-12 06:39:36');
INSERT INTO `documents` VALUES (20, 4, '0.jpg', NULL, '2022-02-12 16:18:52', '2022-02-12 16:18:52');
INSERT INTO `documents` VALUES (21, 4, '6.jpg', NULL, '2022-02-12 16:26:45', '2022-02-12 16:26:45');
INSERT INTO `documents` VALUES (22, 4, '7.jpg', NULL, '2022-02-12 16:26:45', '2022-02-12 16:26:45');
INSERT INTO `documents` VALUES (23, 4, '8.jpg', NULL, '2022-02-12 16:26:45', '2022-02-12 16:26:45');

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
  CONSTRAINT `historials_idproject_foreign` FOREIGN KEY (`idproject`) REFERENCES `projects` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of historials
-- ----------------------------
INSERT INTO `historials` VALUES (3, 3, 'EMPEZANDO LA EDIFICACION LOS OBREROS ESTAN EMPEZANDO CON LAS EXCAVACIONES DE LAS ZAPATAS', '2022-02-11 08:37:00', '2022-02-12 06:37:08');
INSERT INTO `historials` VALUES (4, 3, 'YA SE EMPEZO A LEVANTAR LOS MACHONES EN TODA LA OBRA', '2022-02-12 06:39:36', '2022-02-12 06:39:36');
INSERT INTO `historials` VALUES (5, 4, 'LA OBRA EN CURSO ESTA EMPEZANDO Y LOS OBRERO ESTAN HACIENDO LA EXCABACION PARA LA ZAPATA', '2022-02-12 16:18:52', '2022-02-12 16:18:52');
INSERT INTO `historials` VALUES (6, 4, 'YA SE EMPEZO A RELLENAR LAS ZAPATAS CON CONCRETO', '2022-02-12 16:26:45', '2022-02-12 16:26:45');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 19 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

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
INSERT INTO `migrations` VALUES (10, '2021_02_24_194434_create_documentos_table', 1);
INSERT INTO `migrations` VALUES (11, '2021_08_24_174148_create_proyectos_table', 2);
INSERT INTO `migrations` VALUES (12, '2021_08_24_174657_create_asistencias_table', 3);
INSERT INTO `migrations` VALUES (13, '2021_10_11_123853_create_trabajadors_table', 4);
INSERT INTO `migrations` VALUES (14, '2022_01_26_115628_create_trabajadors_table', 5);
INSERT INTO `migrations` VALUES (15, '2022_02_11_154145_create_projects_table', 6);
INSERT INTO `migrations` VALUES (16, '2022_02_11_154922_create_workers_table', 7);
INSERT INTO `migrations` VALUES (17, '2022_02_11_155338_create_documents_table', 8);
INSERT INTO `migrations` VALUES (18, '2022_02_11_191313_create_historials_table', 9);

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
) ENGINE = InnoDB AUTO_INCREMENT = 22 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of permission_role
-- ----------------------------
INSERT INTO `permission_role` VALUES (7, 49, 4, '2022-02-12 08:16:03', '2022-02-12 08:16:03');
INSERT INTO `permission_role` VALUES (8, 50, 4, '2022-02-12 08:16:03', '2022-02-12 08:16:03');
INSERT INTO `permission_role` VALUES (9, 51, 4, '2022-02-12 08:16:03', '2022-02-12 08:16:03');
INSERT INTO `permission_role` VALUES (10, 52, 4, '2022-02-12 08:16:03', '2022-02-12 08:16:03');
INSERT INTO `permission_role` VALUES (11, 53, 4, '2022-02-12 08:16:03', '2022-02-12 08:16:03');
INSERT INTO `permission_role` VALUES (12, 54, 4, '2022-02-12 08:16:03', '2022-02-12 08:16:03');
INSERT INTO `permission_role` VALUES (13, 55, 4, '2022-02-12 08:16:03', '2022-02-12 08:16:03');
INSERT INTO `permission_role` VALUES (14, 56, 4, '2022-02-12 08:16:03', '2022-02-12 08:16:03');
INSERT INTO `permission_role` VALUES (15, 57, 4, '2022-02-12 08:16:03', '2022-02-12 08:16:03');
INSERT INTO `permission_role` VALUES (16, 58, 4, '2022-02-12 08:16:03', '2022-02-12 08:16:03');
INSERT INTO `permission_role` VALUES (17, 59, 4, '2022-02-12 08:16:03', '2022-02-12 08:16:03');
INSERT INTO `permission_role` VALUES (18, 60, 4, '2022-02-12 08:16:03', '2022-02-12 08:16:03');
INSERT INTO `permission_role` VALUES (19, 61, 4, '2022-02-12 08:16:03', '2022-02-12 08:16:03');
INSERT INTO `permission_role` VALUES (20, 62, 4, '2022-02-12 08:16:03', '2022-02-12 08:16:03');
INSERT INTO `permission_role` VALUES (21, 63, 4, '2022-02-12 08:16:03', '2022-02-12 08:16:03');

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
) ENGINE = InnoDB AUTO_INCREMENT = 64 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of permissions
-- ----------------------------
INSERT INTO `permissions` VALUES (40, 'USUARIO', 'users.index', 'NAVEGA LA TABLA USUARIOS', '2022-02-12 08:06:26', '2022-02-12 08:06:26');
INSERT INTO `permissions` VALUES (41, 'USUARIO', 'users.show', 'VISUALIZA A UN USUARIO EN ESPECIFICO', '2022-02-12 08:06:27', '2022-02-12 08:06:27');
INSERT INTO `permissions` VALUES (42, 'USUARIO', 'users.edit', 'EDITA A UN USUARIO EN ESPECIFICO', '2022-02-12 08:06:27', '2022-02-12 08:06:27');
INSERT INTO `permissions` VALUES (43, 'USUARIO', 'users.destroy', 'ELIMINA UN USUARIO EN ESPECIFICO', '2022-02-12 08:06:27', '2022-02-12 08:06:27');
INSERT INTO `permissions` VALUES (44, 'ROLES', 'roles.index', 'NAVEGA LA TABLA USUARIOS', '2022-02-12 08:06:27', '2022-02-12 08:06:27');
INSERT INTO `permissions` VALUES (45, 'ROLES', 'roles.show', 'VISUALIZA A UN ROL EN ESPECIFICO', '2022-02-12 08:06:27', '2022-02-12 08:06:27');
INSERT INTO `permissions` VALUES (46, 'ROLES', 'roles.create', 'CREA UN NUEVO ROL EN EL SISTEMA', '2022-02-12 08:06:27', '2022-02-12 08:06:27');
INSERT INTO `permissions` VALUES (47, 'ROLES', 'roles.edit', 'EDITA UN ROL EN ESPECIFICO', '2022-02-12 08:06:27', '2022-02-12 08:06:27');
INSERT INTO `permissions` VALUES (48, 'ROLES', 'roles.destroy', 'ELIMINA UN ROL EN ESPECIFICO', '2022-02-12 08:06:27', '2022-02-12 08:06:27');
INSERT INTO `permissions` VALUES (49, 'DOCUMENTO', 'documents.index', 'NAVEGA LA TABLA IMAGENES', '2022-02-12 08:06:27', '2022-02-12 08:06:27');
INSERT INTO `permissions` VALUES (50, 'DOCUMENTO', 'documents.show', 'VISUALIZA A UN IMAGENES EN ESPECIFICO', '2022-02-12 08:06:27', '2022-02-12 08:06:27');
INSERT INTO `permissions` VALUES (51, 'DOCUMENTO', 'documents.create', 'CREA UN NUEVO IMAGENES EN EL SISTEMA', '2022-02-12 08:06:27', '2022-02-12 08:06:27');
INSERT INTO `permissions` VALUES (52, 'DOCUMENTO', 'documents.destroy', 'ELIMINA N REGISTRO DE IMAGEN EN ESPECIFICO', '2022-02-12 08:06:27', '2022-02-12 08:06:27');
INSERT INTO `permissions` VALUES (53, 'PROYECTO', 'projects.index', 'NAVEGA LA TABLA PROYECTO', '2022-02-12 08:06:27', '2022-02-12 08:06:27');
INSERT INTO `permissions` VALUES (54, 'PROYECTO', 'projects.show', 'VISUALIZA A UN PROYECTO EN ESPECIFICO', '2022-02-12 08:06:28', '2022-02-12 08:06:28');
INSERT INTO `permissions` VALUES (55, 'PROYECTO', 'projects.create', 'CREA UN NUEVO PROYECTO EN EL SISTEMA', '2022-02-12 08:06:28', '2022-02-12 08:06:28');
INSERT INTO `permissions` VALUES (56, 'PROYECTO', 'projects.edit', 'EDITA UN PROYECTO EN ESPECIFICO', '2022-02-12 08:06:28', '2022-02-12 08:06:28');
INSERT INTO `permissions` VALUES (57, 'PROYECTO', 'projects.destroy', 'ELIMINA UN PROYECTO EN ESPECIFICO', '2022-02-12 08:06:28', '2022-02-12 08:06:28');
INSERT INTO `permissions` VALUES (58, 'PROYECTO', 'projects.pdf', 'SACA REPORTE DEL SEGUIMIENTO EN PDF', '2022-02-12 08:06:28', '2022-02-12 08:06:28');
INSERT INTO `permissions` VALUES (59, 'TRABAJADORES', 'workers.index', 'NAVEGA LA TABLA TRABAJADORES', '2022-02-12 08:06:28', '2022-02-12 08:06:28');
INSERT INTO `permissions` VALUES (60, 'TRABAJADORES', 'workers.show', 'VISUALIZA A UN TRABAJADOR EN ESPECIFICO', '2022-02-12 08:06:28', '2022-02-12 08:06:28');
INSERT INTO `permissions` VALUES (61, 'TRABAJADORES', 'workers.create', 'CREA UN NUEVO TRABAJADOR EN EL SISTEMA', '2022-02-12 08:06:28', '2022-02-12 08:06:28');
INSERT INTO `permissions` VALUES (62, 'TRABAJADORES', 'workers.edit', 'EDITA UN TRABAJADOR EN ESPECIFICO', '2022-02-12 08:06:28', '2022-02-12 08:06:28');
INSERT INTO `permissions` VALUES (63, 'TRABAJADORES', 'workers.destroy', 'ELIMINA UN TRABAJADOR EN ESPECIFICO', '2022-02-12 08:06:28', '2022-02-12 08:06:28');

-- ----------------------------
-- Table structure for projects
-- ----------------------------
DROP TABLE IF EXISTS `projects`;
CREATE TABLE `projects`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `latlon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of projects
-- ----------------------------
INSERT INTO `projects` VALUES (3, 'EDIFICION NUEVA GENERACION', 'LA PAZ Z. ACHACHICALA CALLE 6 Nº 7', '-16.5544959, -68.2027732', '2022-02-12 06:35:57', '2022-02-12 06:35:57');
INSERT INTO `projects` VALUES (4, 'CONSTRUCCION EDIFICIO BANCARIO OBRERO', 'EL ALTO Z. VILLA ESPERANZA C. ALMIRANTE NRO. 1123', '-16.5544959, -68.2027732', '2022-02-12 15:54:10', '2022-02-12 15:54:10');
INSERT INTO `projects` VALUES (5, 'RECONTRUCCION DEL PUENTE TOPATER SENKATA', 'EL ALTO Z. SENKATA', '-16.5544959, -68.2027732', '2022-02-12 16:29:35', '2022-02-12 16:29:35');

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
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of role_user
-- ----------------------------
INSERT INTO `role_user` VALUES (3, 1, 45, '2022-01-26 09:34:36', '2022-01-26 09:34:36');
INSERT INTO `role_user` VALUES (6, 4, 48, '2022-02-12 08:18:12', '2022-02-12 08:18:12');
INSERT INTO `role_user` VALUES (7, 1, 49, '2022-02-12 08:30:06', '2022-02-12 08:30:06');

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
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES (1, 'Admin', 'admin', 'superUsuario', '2021-08-09 18:30:10', '2021-08-09 18:30:10', 'all-access');
INSERT INTO `roles` VALUES (4, 'SEGUIMIENTO PROYECTO', 'SEGUIMIENTO', 'SEGUIMIENTO DE UN PROYECTO', '2022-01-26 16:53:14', '2022-01-26 16:53:14', NULL);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` int NOT NULL,
  `fechanacimiento` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp(0) NULL DEFAULT NULL,
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
INSERT INTO `users` VALUES (45, 'GONZALO CARANI CONDORI', 'gonzalo.carani@gmail.com', 'Z. VILLA MERCEDARIO', 65432165, '', NULL, '$2y$10$znrI1S2il6tco7pCB0peKOUmAE9TzdiQrlqOCdWWSi0TdNx0vEVW.', NULL, '2022-01-26 09:28:23', '2022-01-26 09:28:23');
INSERT INTO `users` VALUES (48, 'FEDERICO CASTILLO MAMANI', 'fede@gmail.com', 'EL ALTO Z. BALLIBIAS', 77896654, '26/12/1997', NULL, '$2y$10$MjAixIb.tH0m174jzeehrOdCxZLC5Bzvvq3BKaeiogKHDDufBg2S2', NULL, '2022-02-12 08:17:49', '2022-02-12 08:17:49');
INSERT INTO `users` VALUES (49, 'MAURICIO', 'mauricio@gmail.com', 'EL ALTO V BALLIBIAN CALLE 4', 77758565, '26/12/90', NULL, '$2y$10$b0s1W8yDjV4j8xorv1vbc.033a5y36HgHkY3qeZTtgxYZu45uGjTG', NULL, '2022-02-12 08:29:36', '2022-02-12 08:29:36');

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
  CONSTRAINT `workers_idproject_foreign` FOREIGN KEY (`idproject`) REFERENCES `projects` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `workers_iduser_foreign` FOREIGN KEY (`iduser`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of workers
-- ----------------------------
INSERT INTO `workers` VALUES (3, 45, 3, 'SUPERVISOR DE OBRA', '2022-02-12 06:36:07', '2022-02-12 06:36:07');
INSERT INTO `workers` VALUES (4, 48, 4, 'SUPERVISOR DE OBRA', '2022-02-12 15:54:37', '2022-02-12 16:21:40');
INSERT INTO `workers` VALUES (5, 48, 5, 'SUPERVISOR DE OBRA', '2022-02-12 16:29:58', '2022-02-12 16:29:58');

SET FOREIGN_KEY_CHECKS = 1;
