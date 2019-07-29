-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.1.21-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para yapay
CREATE DATABASE IF NOT EXISTS `yapay` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `yapay`;

-- Copiando estrutura para tabela yapay.calendario
CREATE TABLE IF NOT EXISTS `calendario` (
  `cal_ID` int(11) NOT NULL AUTO_INCREMENT,
  `cal_usr_ID` int(11) NOT NULL,
  `cal_NOME` varchar(110) NOT NULL,
  `cal_DATE` datetime NOT NULL,
  `cal_sta_ID` int(11) NOT NULL DEFAULT '9',
  PRIMARY KEY (`cal_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela yapay.calendario: ~0 rows (aproximadamente)
DELETE FROM `calendario`;
/*!40000 ALTER TABLE `calendario` DISABLE KEYS */;
/*!40000 ALTER TABLE `calendario` ENABLE KEYS */;

-- Copiando estrutura para tabela yapay.pets
CREATE TABLE IF NOT EXISTS `pets` (
  `pet_ID` int(11) NOT NULL AUTO_INCREMENT,
  `pet_usr_ID` int(11) NOT NULL,
  `pet_NOME` varchar(50) NOT NULL,
  `pet_TIPO` varchar(50) NOT NULL,
  `pet_DATA` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`pet_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela yapay.pets: ~0 rows (aproximadamente)
DELETE FROM `pets`;
/*!40000 ALTER TABLE `pets` DISABLE KEYS */;
/*!40000 ALTER TABLE `pets` ENABLE KEYS */;

-- Copiando estrutura para tabela yapay.status
CREATE TABLE IF NOT EXISTS `status` (
  `sta_ID` int(11) NOT NULL AUTO_INCREMENT,
  `sta_NAME` varchar(150) NOT NULL,
  PRIMARY KEY (`sta_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela yapay.status: ~6 rows (aproximadamente)
DELETE FROM `status`;
/*!40000 ALTER TABLE `status` DISABLE KEYS */;
INSERT INTO `status` (`sta_ID`, `sta_NAME`) VALUES
	(1, 'Ativo'),
	(4, 'Urgencia'),
	(6, 'Inativo'),
	(7, 'admin'),
	(8, 'Retorno'),
	(9, 'Rotina');
/*!40000 ALTER TABLE `status` ENABLE KEYS */;

-- Copiando estrutura para tabela yapay.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `usr_ID` int(11) NOT NULL AUTO_INCREMENT,
  `usr_NAME` varchar(220) NOT NULL,
  `usr_LNAME` varchar(220) NOT NULL,
  `usr_EMAIL` varchar(220) NOT NULL,
  `usr_STREET` varchar(220) NOT NULL,
  `usr_NUMBER` varchar(220) NOT NULL,
  `usr_PHONE` varchar(220) NOT NULL,
  `usr_pess_ID` int(11) NOT NULL,
  `usr_PASSWORD` varchar(220) NOT NULL,
  `usr_CREATE` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `usr_STATUS` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`usr_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela yapay.usuarios: 2 rows
DELETE FROM `usuarios`;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`usr_ID`, `usr_NAME`, `usr_LNAME`, `usr_EMAIL`, `usr_STREET`, `usr_NUMBER`, `usr_PHONE`, `usr_pess_ID`, `usr_PASSWORD`, `usr_CREATE`, `usr_STATUS`) VALUES
	(15, 'Caique', 'Lopes', 'caiquef.lopes@gmail.com', 'Rua Josino de Andrade', '67', '18998246134', 0, '23b3e8e5e3459e8518f4ed74ad733c0c', '2019-07-28 02:01:45', 7),
	(16, 'jeca', 'tatu', 'jecatatu@hotmail.com', 'rua das estrela', '33', '99574', 0, '202cb962ac59075b964b07152d234b70', '2019-07-28 14:34:44', 1);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
