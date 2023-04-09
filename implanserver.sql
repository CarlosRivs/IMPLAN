-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.0.30 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Volcando estructura para tabla proyect1bd.privilege
DROP TABLE IF EXISTS `privilege`;
CREATE TABLE IF NOT EXISTS `privilege` (
  `privilege_ID` int NOT NULL AUTO_INCREMENT,
  `privilege-Tipo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`privilege_ID`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla proyect1bd.privilege: ~2 rows (aproximadamente)
REPLACE INTO `privilege` (`privilege_ID`, `privilege-Tipo`) VALUES
	(1, 'Admin'),
	(2, 'Comun');

-- Volcando estructura para tabla proyect1bd.usuario
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `usr_ID` int NOT NULL AUTO_INCREMENT,
  `privilege_ID` int NOT NULL DEFAULT '2',
  `usr_Name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `usr_LastName` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `usr_Direccion` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `usr_FNacimiento` date DEFAULT NULL,
  `usr_FRegistro` datetime DEFAULT NULL,
  `usr_Email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `usr_UserName` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `usr_Password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`usr_ID`) USING BTREE,
  UNIQUE KEY `usr-Email` (`usr_Email`) USING BTREE,
  UNIQUE KEY `usr-UserName` (`usr_UserName`) USING BTREE,
  KEY `privilege-ID` (`privilege_ID`) USING BTREE,
  CONSTRAINT `privilege-ID` FOREIGN KEY (`privilege_ID`) REFERENCES `privilege` (`privilege_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla proyect1bd.usuario: ~5 rows (aproximadamente)
REPLACE INTO `usuario` (`usr_ID`, `privilege_ID`, `usr_Name`, `usr_LastName`, `usr_Direccion`, `usr_FNacimiento`, `usr_FRegistro`, `usr_Email`, `usr_UserName`, `usr_Password`) VALUES
	(6, 2, 'Carlos', 'Rivas', 'Av. Palmas', '2022-07-06', '2022-12-12 15:40:51', NULL, NULL, NULL),
	(16, 2, 'PEDRO', 'LEONEL NOGUEDA', 'Av.Palmas', '2023-02-01', '2023-02-05 14:01:54', 'pedroleonel974@gmail.com', 'Pedro', 'b1ea458c839fe62689906c83955d5491d337155c4fa10358652d202081fb91c43bfc63b6a16ef1e5d508221d40d3aa4118055edca106a22551012a34d4f98c33d5afb02729502fbeda3bb21e6dc98a264fbf4d'),
	(18, 1, 'Oscar', 'Leonel', 'Av.Palmas', '2001-04-30', '2023-02-05 20:43:53', 'oscarleonel438@gmail.com', 'Oscar', '5792a48a6e4480ebf7c53b25baa9a6c856c0f700dd0f9a778444b9fcea68492c366ca158eff0e52de223df6e563d72bbf7c1a66bf08cda0b2966f42e24af9eed6183a055bffe434cfb1ebea757178671b47e66'),
	(28, 2, 'Eymy', 'Anette', 'av. palmas', '2023-01-30', '2023-02-23 16:05:24', 'eymyy@gmail.com', 'Eymy', 'abe17db38e78cbac4dc74042d4455ca64793cfa1032f6c367b36536a9f8e6e66d19308df1c195f408121b8f9e6d75700471b70383b6458a3bb6efa12fab67a91e036e9906ea721a2c83dd2b6231467ac15e657'),
	(29, 2, 'PAblo ', 'Higuera', 'por su casa', '2023-01-29', '2023-02-23 18:40:41', 'pablo20@gmail.com', 'Pablito', 'a3f5f74f04eca4c476b3ab9163e9e22c96d166ebc304c43c686639bafee75959b55fe0ade757c4fa07c32931820d05ee5046ab319d26799bb9840f57969b7cc3d27fea561feed93738cbed80e0c2ae465eedbd');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
