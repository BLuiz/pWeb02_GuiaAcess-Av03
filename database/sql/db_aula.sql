-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           8.0.30 - MySQL Community Server - GPL
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para db_guia_acess
CREATE DATABASE IF NOT EXISTS `db_guia_acess` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `db_guia_acess`;

-- Copiando estrutura para tabela db_guia_acess.categoria
CREATE TABLE IF NOT EXISTS `categoria` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_guia_acess.categoria: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela db_guia_acess.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_guia_acess.failed_jobs: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela db_guia_acess.local
CREATE TABLE IF NOT EXISTS `local` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coordenada` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagem` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acessibilidade` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_guia_acess.local: ~2 rows (aproximadamente)
INSERT INTO `local` (`id`, `nome`, `descricao`, `telefone`, `coordenada`, `imagem`, `acessibilidade`, `created_at`, `updated_at`) VALUES
	(1, 'sads', 'dasdas', 'asdasd', 'sadads', NULL, '"{\\"caoGuia\\":\\"0\\",\\"lavabo\\":\\"0\\",\\"prioridade\\":\\"0\\",\\"palco\\":\\"0\\",\\"balcao\\":\\"0\\",\\"elevador\\":\\"0\\",\\"refeitorio\\":\\"0\\",\\"sinalizacao\\":\\"0\\",\\"estacionamento\\":\\"0\\",\\"rampa\\":\\"0\\",\\"escada\\":\\"0\\",\\"apoiador\\":\\"0\\"}"', '2023-06-29 01:32:24', '2023-06-29 01:32:24'),
	(2, 'luiz', 'dasdas', 'asdasd', 'sadads', 'imagem/20230628224646.jpg', '"{\\"caoGuia\\":\\"1\\",\\"lavabo\\":\\"1\\",\\"prioridade\\":\\"0\\",\\"palco\\":\\"1\\",\\"balcao\\":\\"0\\",\\"elevador\\":\\"1\\",\\"refeitorio\\":\\"0\\",\\"sinalizacao\\":\\"0\\",\\"estacionamento\\":\\"0\\",\\"rampa\\":\\"0\\",\\"escada\\":\\"1\\",\\"apoiador\\":\\"0\\"}"', '2023-06-29 01:46:46', '2023-06-29 01:46:46'),
	(3, 'luiz', 'dasdas', '312312', '12312', NULL, '"{\\"C\\\\u00e3o-guia\\":\\"1\\",\\"lavabo\\":\\"0\\",\\"prioridade\\":\\"0\\",\\"palco\\":\\"0\\",\\"balcao\\":\\"0\\",\\"elevador\\":\\"0\\",\\"refeitorio\\":\\"0\\",\\"sinalizacao\\":\\"0\\",\\"estacionamento\\":\\"0\\",\\"rampa\\":\\"0\\",\\"escada\\":\\"0\\",\\"apoiador\\":\\"0\\"}"', '2023-06-29 03:29:59', '2023-06-29 03:29:59'),
	(4, 'Lugar incrivel', 'teste', '49 999999999', '12312312132123', 'imagem/20230629003654.jpg', '"{\\"C\\\\u00e3o-guia\\":\\"1\\",\\"Lavabo acessivel\\":\\"1\\",\\"Prioridade no atendimento\\":\\"1\\",\\"Palco para interprete\\":\\"1\\",\\"Balc\\\\u00e3o acessivel\\":\\"1\\",\\"Elevador acessivel\\":\\"1\\",\\"Refeitorio acessivel\\":\\"1\\",\\"Sinalizac\\\\u00e3o\\":\\"1\\",\\"Estacionamento prioritario\\":\\"1\\",\\"Rampa\\":\\"1\\",\\"Escada acessivel\\":\\"1\\",\\"Apoiador\\":\\"1\\"}"', '2023-06-29 03:36:54', '2023-06-29 03:36:54'),
	(5, 'Local pessimo', 'teste2', '11 11111111111111', '89898989898989898989', 'imagem/20230629004828.jpg', '"{\\"C\\\\u00e3o-guia\\":\\"0\\",\\"Lavabo acessivel\\":\\"0\\",\\"Prioridade no atendimento\\":\\"0\\",\\"Palco para interprete\\":\\"0\\",\\"Balc\\\\u00e3o acessivel\\":\\"0\\",\\"Elevador acessivel\\":\\"0\\",\\"Refeitorio acessivel\\":\\"0\\",\\"Sinalizac\\\\u00e3o\\":\\"0\\",\\"Estacionamento prioritario\\":\\"0\\",\\"Rampa\\":\\"0\\",\\"Escada acessivel\\":\\"0\\",\\"Apoiador\\":\\"0\\"}"', '2023-06-29 03:48:28', '2023-06-29 03:48:28');

-- Copiando estrutura para tabela db_guia_acess.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_guia_acess.migrations: ~0 rows (aproximadamente)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2023_04_14_165129_create_usuario', 1),
	(6, '2023_04_28_175149_create_categorias_table', 1),
	(7, '2023_06_20_041721_create_local_table', 1),
	(8, '2023_06_21_220245_create_suporte_table', 1);

-- Copiando estrutura para tabela db_guia_acess.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_guia_acess.password_resets: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela db_guia_acess.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_guia_acess.personal_access_tokens: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela db_guia_acess.suporte
CREATE TABLE IF NOT EXISTS `suporte` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `assunto` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mensagem` varchar(999) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_guia_acess.suporte: ~3 rows (aproximadamente)
INSERT INTO `suporte` (`id`, `nome`, `email`, `assunto`, `mensagem`, `created_at`, `updated_at`) VALUES
	(1, 'luiz', 'admin@admin.com', 'banana', 'derrubaram banana em mim. como processar? aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2023-06-29 01:12:16', '2023-06-29 01:12:27'),
	(3, 'mari', 'admin@admin.com', 'abacate', 'derrubaram banana em mim. como processar? aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2023-06-29 01:14:27', '2023-06-29 01:14:27'),
	(4, 'joao', 'banana@admin.com', 'abacaxi', 'derrubaram banana em mim. como processar? aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2023-06-29 01:15:41', '2023-06-29 01:15:41');

-- Copiando estrutura para tabela db_guia_acess.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_guia_acess.users: ~2 rows (aproximadamente)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'luiz', 'admin@admin.com', NULL, '$2y$10$EOzNg9Rg1gSJR0dq9pXg0eM8X4Qy0syr.auuKyejabONFToIpfmTi', NULL, '2023-06-29 01:11:17', '2023-06-29 01:11:17'),
	(2, 'joao', 'joao@joao', NULL, '$2y$10$63H9VFj5VgzaKvs9n/A3dOlR/OLwHoysWLZGgq9O7FCdG/WR7rTsu', NULL, '2023-06-29 02:20:54', '2023-06-29 02:20:54');

-- Copiando estrutura para tabela db_guia_acess.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagem` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `categoria_id` bigint unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `usuario_categoria_id_foreign` (`categoria_id`),
  CONSTRAINT `usuario_categoria_id_foreign` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_guia_acess.usuario: ~0 rows (aproximadamente)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
