-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           8.0.13 - MySQL Community Server - GPL
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para gincana
DROP DATABASE IF EXISTS `gincana`;
CREATE DATABASE IF NOT EXISTS `gincana` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `gincana`;

-- Copiando estrutura para tabela gincana.ci_sessions
DROP TABLE IF EXISTS `ci_sessions`;
CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela gincana.ci_sessions: ~51 rows (aproximadamente)
/*!40000 ALTER TABLE `ci_sessions` DISABLE KEYS */;
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
	('q2u4csatjdhn82cguh0rrnqk9jp9jjl8', '127.0.0.1', 1557960152, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313535373936303135323B696455737561696F7C733A313A2235223B656D61696C7C733A32373A22636869682E79616E6740616C756E6F2E73632E73656E61632E6272223B6C6F6761646F7C623A313B69645573756172696F7C733A313A2235223B6E6F6D657C733A343A227279616E223B),
	('21acr50j09v60ffca3epjjhlpv8871bp', '127.0.0.1', 1557960468, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313535373936303436383B696455737561696F7C733A313A2235223B656D61696C7C733A32373A22636869682E79616E6740616C756E6F2E73632E73656E61632E6272223B6C6F6761646F7C623A313B69645573756172696F7C733A313A2235223B6E6F6D657C733A343A227279616E223B),
	('ld4aeqgum9en12tbbrlelkc8599stijd', '127.0.0.1', 1557960820, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313535373936303832303B696455737561696F7C733A313A2235223B656D61696C7C733A32373A22636869682E79616E6740616C756E6F2E73632E73656E61632E6272223B6C6F6761646F7C623A313B69645573756172696F7C733A313A2235223B6E6F6D657C733A343A227279616E223B),
	('v5c7agthh9oochjd30gj0rakulgq2qq9', '127.0.0.1', 1557961360, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313535373936313336303B69645573756172696F7C733A313A2234223B6E6F6D657C733A353A2261646D696E223B656D61696C7C733A31343A2261646D696E4073656E61632E6272223B6C6F6761646F7C623A313B),
	('pdc5d4b8u8rsvsihl5l7g50bd6eri2ko', '127.0.0.1', 1557962103, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313535373936323130333B69645573756172696F7C733A313A2234223B6E6F6D657C733A353A2261646D696E223B656D61696C7C733A31343A2261646D696E4073656E61632E6272223B6C6F6761646F7C623A313B),
	('msaldh8vl88eud1cih2blaec26t2glpr', '127.0.0.1', 1557962444, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313535373936323434343B69645573756172696F7C733A313A2234223B6E6F6D657C733A353A2261646D696E223B656D61696C7C733A31343A2261646D696E4073656E61632E6272223B6C6F6761646F7C623A313B),
	('a5qu044ujjvod2cd2b8v0lu8uk81o0f7', '127.0.0.1', 1557962755, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313535373936323735353B69645573756172696F7C733A313A2234223B6E6F6D657C733A353A2261646D696E223B656D61696C7C733A31343A2261646D696E4073656E61632E6272223B6C6F6761646F7C623A313B6D656E736167656D7C733A33333A2245717569706520616C74657261646F20636F6D207375636573736F202120212021223B5F5F63695F766172737C613A313A7B733A383A226D656E736167656D223B733A333A226F6C64223B7D),
	('k6p6aeuv2q4f811ek96s5l0i0behvukv', '127.0.0.1', 1557963241, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313535373936333234313B69645573756172696F7C733A313A2234223B6E6F6D657C733A353A2261646D696E223B656D61696C7C733A31343A2261646D696E4073656E61632E6272223B6C6F6761646F7C623A313B),
	('d3snrou365ksd8a3rahq83sbllk06a4m', '127.0.0.1', 1557963685, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313535373936333638353B69645573756172696F7C733A313A2234223B6E6F6D657C733A353A2261646D696E223B656D61696C7C733A31343A2261646D696E4073656E61632E6272223B6C6F6761646F7C623A313B),
	('p47o7hjrl0ps10nunpjil2k02ade9266', '127.0.0.1', 1557964020, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313535373936343032303B69645573756172696F7C733A313A2234223B6E6F6D657C733A353A2261646D696E223B656D61696C7C733A31343A2261646D696E4073656E61632E6272223B6C6F6761646F7C623A313B),
	('3arak30jl5gng3n9908asjocb51gu99l', '127.0.0.1', 1557964348, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313535373936343334383B69645573756172696F7C733A313A2234223B6E6F6D657C733A353A2261646D696E223B656D61696C7C733A31343A2261646D696E4073656E61632E6272223B6C6F6761646F7C623A313B),
	('v4g50tu4aua4ahgel2gcv5riu6p33488', '127.0.0.1', 1557964677, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313535373936343637373B69645573756172696F7C733A313A2234223B6E6F6D657C733A353A2261646D696E223B656D61696C7C733A31343A2261646D696E4073656E61632E6272223B6C6F6761646F7C623A313B),
	('8vhopegqol4naqdcrtltmkvi4gvhhhq4', '127.0.0.1', 1557965049, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313535373936353034393B69645573756172696F7C733A313A2234223B6E6F6D657C733A353A2261646D696E223B656D61696C7C733A31343A2261646D696E4073656E61632E6272223B6C6F6761646F7C623A313B),
	('6vfmoiesulh69rbmouveodmm0jajsu4u', '127.0.0.1', 1557965485, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313535373936353438353B69645573756172696F7C733A313A2234223B6E6F6D657C733A353A2261646D696E223B656D61696C7C733A31343A2261646D696E4073656E61632E6272223B6C6F6761646F7C623A313B),
	('rblodfbe00nc6gtm0rp6roi25nkdp89n', '127.0.0.1', 1557965836, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313535373936353833363B69645573756172696F7C733A313A2234223B6E6F6D657C733A353A2261646D696E223B656D61696C7C733A31343A2261646D696E4073656E61632E6272223B6C6F6761646F7C623A313B6D656E736167656D7C733A33393A22506F6E747561C3A7C3A36F206361646173747261646F20636F6D207375636573736F2120212021223B5F5F63695F766172737C613A313A7B733A383A226D656E736167656D223B733A333A226F6C64223B7D),
	('4v65g5q802vb8bd0tpjaanm0qvnfthim', '127.0.0.1', 1557966247, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313535373936363234373B69645573756172696F7C733A313A2235223B6E6F6D657C733A343A227279616E223B656D61696C7C733A32373A22636869682E79616E6740616C756E6F2E73632E73656E61632E6272223B6C6F6761646F7C623A313B),
	('lcvpdk1aj80ltmm17n0hvco3vm946f34', '127.0.0.1', 1557966669, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313535373936363636393B69645573756172696F7C733A313A2234223B6E6F6D657C733A353A2261646D696E223B656D61696C7C733A31343A2261646D696E4073656E61632E6272223B6C6F6761646F7C623A313B),
	('k6tecti0ggn1ffajhnk91hssc2oftrt6', '127.0.0.1', 1557967775, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313535373936373736323B69645573756172696F7C733A313A2235223B6E6F6D657C733A343A227279616E223B656D61696C7C733A32373A22636869682E79616E6740616C756E6F2E73632E73656E61632E6272223B6C6F6761646F7C623A313B),
	('nr0p4jfc5ogmd5jj22gnv2af2dhfle8h', '127.0.0.1', 1557967762, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313535373936373736323B69645573756172696F7C733A313A2235223B6E6F6D657C733A343A227279616E223B656D61696C7C733A32373A22636869682E79616E6740616C756E6F2E73632E73656E61632E6272223B6C6F6761646F7C623A313B);
/*!40000 ALTER TABLE `ci_sessions` ENABLE KEYS */;

-- Copiando estrutura para tabela gincana.equipe
DROP TABLE IF EXISTS `equipe`;
CREATE TABLE IF NOT EXISTS `equipe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nome` (`nome`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela gincana.equipe: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `equipe` DISABLE KEYS */;
INSERT INTO `equipe` (`id`, `nome`) VALUES
	(38, 'A'),
	(39, 'B'),
	(40, 'C');
/*!40000 ALTER TABLE `equipe` ENABLE KEYS */;

-- Copiando estrutura para tabela gincana.integrante
DROP TABLE IF EXISTS `integrante`;
CREATE TABLE IF NOT EXISTS `integrante` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_equipe` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `data_nasc` date DEFAULT NULL,
  `rg` varchar(11) DEFAULT NULL,
  `cpf` varchar(14) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_integrante_equipe` (`id_equipe`),
  CONSTRAINT `FK_integrante_equipe` FOREIGN KEY (`id_equipe`) REFERENCES `equipe` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela gincana.integrante: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `integrante` DISABLE KEYS */;
INSERT INTO `integrante` (`id`, `id_equipe`, `nome`, `data_nasc`, `rg`, `cpf`) VALUES
	(28, 38, 'ryan', '2019-05-17', 'j99t75g9', '147.698.632-99'),
	(29, 39, 'Rafael', '2019-05-31', 'k99i48j4', '963.582.942-63'),
	(30, 40, 'admin', '2019-05-20', 'k697j594i', '963.852.741-66');
/*!40000 ALTER TABLE `integrante` ENABLE KEYS */;

-- Copiando estrutura para tabela gincana.pontuacao
DROP TABLE IF EXISTS `pontuacao`;
CREATE TABLE IF NOT EXISTS `pontuacao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_equipe` int(11) NOT NULL,
  `id_prova` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `pontos` float NOT NULL,
  `data_hora` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_pontuacao_equipe` (`id_equipe`),
  KEY `FK_pontuacao_prova` (`id_prova`),
  KEY `FK_pontuacao_usuario` (`id_usuario`),
  CONSTRAINT `FK_pontuacao_equipe` FOREIGN KEY (`id_equipe`) REFERENCES `equipe` (`id`),
  CONSTRAINT `FK_pontuacao_prova` FOREIGN KEY (`id_prova`) REFERENCES `prova` (`id`),
  CONSTRAINT `FK_pontuacao_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela gincana.pontuacao: ~8 rows (aproximadamente)
/*!40000 ALTER TABLE `pontuacao` DISABLE KEYS */;
INSERT INTO `pontuacao` (`id`, `id_equipe`, `id_prova`, `id_usuario`, `pontos`, `data_hora`) VALUES
	(29, 39, 17, 5, 300, '2019-05-15 21:35:54'),
	(30, 38, 18, 4, 600, '2019-05-15 21:36:16'),
	(31, 38, 17, 4, 100, '2019-05-15 21:39:05'),
	(32, 40, 17, 5, 300, '2019-05-15 21:39:19');
/*!40000 ALTER TABLE `pontuacao` ENABLE KEYS */;

-- Copiando estrutura para tabela gincana.prova
DROP TABLE IF EXISTS `prova`;
CREATE TABLE IF NOT EXISTS `prova` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(35) DEFAULT NULL,
  `tempo` int(2) DEFAULT NULL,
  `descricao` text,
  `NumIntegrantes` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela gincana.prova: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `prova` DISABLE KEYS */;
INSERT INTO `prova` (`id`, `nome`, `tempo`, `descricao`, `NumIntegrantes`) VALUES
	(17, 'Corrida', 60, 'Corrida', 6),
	(18, 'Futebol', 60, 'Futebol', 12);
/*!40000 ALTER TABLE `prova` ENABLE KEYS */;

-- Copiando estrutura para tabela gincana.usuario
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `senha` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela gincana.usuario: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`) VALUES
	(4, 'admin', 'admin@senac.br', 'e2589cf3dfc0cb7416867988fbfb01641a32923b'),
	(5, 'ryan', 'chih.yang@aluno.sc.senac.br', '6110bbc3b63ee854997b05075aec1b4a1d540f71');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
