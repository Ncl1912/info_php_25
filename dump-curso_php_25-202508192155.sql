-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: curso_php_25
-- ------------------------------------------------------
-- Server version	5.5.5-10.6.22-MariaDB-0ubuntu0.22.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `endereco`
--

DROP TABLE IF EXISTS `endereco`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `endereco` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `bairro` varchar(255) NOT NULL,
  `logradouro` varchar(255) NOT NULL,
  `complemento` varchar(100) DEFAULT NULL,
  `numero` varchar(11) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `pais` varchar(100) NOT NULL,
  `cep` varchar(11) NOT NULL,
  `tipo_endereco` enum('residencial','comercial','industrial','hospitalar') NOT NULL DEFAULT 'residencial',
  `id_pessoas` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `endereco_pessoas_FK` (`id_pessoas`),
  CONSTRAINT `endereco_pessoas_FK` FOREIGN KEY (`id_pessoas`) REFERENCES `pessoas` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `endereco`
--

LOCK TABLES `endereco` WRITE;
/*!40000 ALTER TABLE `endereco` DISABLE KEYS */;
INSERT INTO `endereco` VALUES (1,'Borgo','Fiorelo Bertuol','apto 201','1030','Bento Gonçalves','RS','Brasil','95705-540','residencial',NULL);
/*!40000 ALTER TABLE `endereco` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pessoas`
--

DROP TABLE IF EXISTS `pessoas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pessoas` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `data_nascimento` date NOT NULL,
  `nacionalidade` varchar(100) NOT NULL,
  `estado_civil` enum('solteiro','casado','divorciado','viuvo') NOT NULL DEFAULT 'solteiro',
  `sexo` enum('M','F') NOT NULL DEFAULT 'M',
  `nome_mae` varchar(255) NOT NULL,
  `nome_pai` varchar(255) NOT NULL,
  `cpf` varchar(11) DEFAULT NULL,
  `escolaridade` varchar(100) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `id_usuario` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pessoas_usuarios_FK` (`id_usuario`),
  CONSTRAINT `pessoas_usuarios_FK` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pessoas`
--

LOCK TABLES `pessoas` WRITE;
/*!40000 ALTER TABLE `pessoas` DISABLE KEYS */;
INSERT INTO `pessoas` VALUES (1,'Nicole de Oliveira Darui','2006-12-19','Brasileiro','solteiro','F','Deise Silva de Oliveira','Vaine Venicius Darui','12345678901','2° grau completo','54999918438','nnicoledeoliveiradarui@gmail.com',NULL);
/*!40000 ALTER TABLE `pessoas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `senha` text NOT NULL,
  `nome_usuario` varchar(255) NOT NULL,
  `email_recuperacao` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `tipo_perfil` varchar(100) NOT NULL,
  `permissoes` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'nicole','1234','nicole_darui','nnicoledeoliveiradarui@gmail.com',1,'adm','all'),(2,'felipe','4567','felipe_borges','felipe@infoserv.com',0,'convidado','deny'),(3,'fulano','8901','fulaninho','fulano@infoserv.com',1,'convidado','parcial');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'curso_php_25'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-08-19 21:55:07

SELECT u.login, u.nome_usuario AS "nome", p.sexo, e.cidade FROM usuarios AS u
INNER JOIN pessoas p ON u.id = p.id_usuario
INNER JOIN endereco e ON p.id = e.id_pessoa;


SELECT u.login, u.nome_usuario AS "nome", p.sexo FROM usuarios AS u
LEFT JOIN pessoas p ON u.id = p.id_usuario;


SELECT u.login, u.nome_usuario AS "nome", p.sexo FROM usuarios AS u
RIGHT JOIN pessoas p ON u.id = p.id_usuario;


--  $retornoBanco = [
--      [
--          "login" => "fulano",
--          "nome" => "fulano de tal",
--          "sexo" => "M",
--      ],
--      [
--          "login" => "joao.caminhao",
--          "nome" => "joao.caminhao",
--          "sexo" => "M",
--      ]
--  ];

--  foreach ($retornoBanco as $idx => $arrayAssociativo) {

--      echo $arrayAssociativo["login"];
--      echo $arrayAssociativo->login;
--      echo $arrayAssociativo["nome"];
--      echo $arrayAssociativo["sexo"];

--  }

--  echo $retornoBanco[1]["login"]; // "joao.caminhao"
