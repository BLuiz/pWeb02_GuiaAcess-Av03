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
  `nome` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_guia_acess.categoria: ~0 rows (aproximadamente)
INSERT INTO `categoria` (`id`, `nome`, `created_at`, `updated_at`) VALUES
	(1, 'Paloma Madalena Maia', NULL, NULL),
	(2, 'Allan Dias Amaral Filho', NULL, NULL),
	(3, 'Sra. Viviane Maldonado Marin', NULL, NULL),
	(4, 'Ziraldo Faro Filho', NULL, NULL),
	(5, 'Sr. Josué Vega Santacruz', NULL, NULL);

-- Copiando estrutura para tabela db_guia_acess.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_guia_acess.failed_jobs: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela db_guia_acess.feedback
CREATE TABLE IF NOT EXISTS `feedback` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nota` double(8,2) NOT NULL,
  `avaliacao` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `users_id` bigint unsigned DEFAULT NULL,
  `local_id` bigint unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `feedback_users_id_foreign` (`users_id`),
  KEY `feedback_local_id_foreign` (`local_id`),
  CONSTRAINT `feedback_local_id_foreign` FOREIGN KEY (`local_id`) REFERENCES `local` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `feedback_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_guia_acess.feedback: ~0 rows (aproximadamente)
INSERT INTO `feedback` (`id`, `nota`, `avaliacao`, `created_at`, `updated_at`, `users_id`, `local_id`) VALUES
	(10, 5.00, 'linda', '2023-06-30 01:09:09', '2023-06-30 01:09:09', 1, 9),
	(12, 4.00, 'show', '2023-06-30 01:10:45', '2023-06-30 01:10:45', 3, 10);

-- Copiando estrutura para tabela db_guia_acess.local
CREATE TABLE IF NOT EXISTS `local` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefone` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `coordenada` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagem` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acessibilidade` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_guia_acess.local: ~2 rows (aproximadamente)
INSERT INTO `local` (`id`, `nome`, `descricao`, `telefone`, `coordenada`, `imagem`, `acessibilidade`, `created_at`, `updated_at`) VALUES
	(9, 'Catedral 123', 'missa', '4562462245', '12151641', 'imagem/20230629214541.jpg', '"{\\"C\\\\u00e3o-guia\\":\\"0\\",\\"Sinalizac\\\\u00e3o\\":\\"0\\",\\"Estacionamento prioritario\\":\\"0\\",\\"Lavabo acessivel\\":\\"0\\",\\"Prioridade no atendimento\\":\\"0\\",\\"Palco para interprete\\":\\"0\\",\\"Balc\\\\u00e3o acessivel\\":\\"0\\",\\"Rampa\\":\\"0\\",\\"Escada acessivel\\":\\"0\\",\\"Apoiador\\":\\"0\\",\\"Elevador acessivel\\":\\"0\\",\\"Refeitorio acessivel\\":\\"0\\"}"', '2023-06-30 00:45:41', '2023-06-30 00:46:06'),
	(10, 'Estadio', 'esporte', '3123123', '12312312', 'imagem/20230629221027.jpg', '"{\\"C\\\\u00e3o-guia\\":\\"1\\",\\"Sinalizac\\\\u00e3o\\":\\"0\\",\\"Estacionamento prioritario\\":\\"1\\",\\"Lavabo acessivel\\":\\"1\\",\\"Prioridade no atendimento\\":\\"0\\",\\"Palco para interprete\\":\\"1\\",\\"Balc\\\\u00e3o acessivel\\":\\"0\\",\\"Rampa\\":\\"0\\",\\"Escada acessivel\\":\\"0\\",\\"Apoiador\\":\\"0\\",\\"Elevador acessivel\\":\\"0\\",\\"Refeitorio acessivel\\":\\"0\\"}"', '2023-06-30 01:10:27', '2023-06-30 01:10:27');

-- Copiando estrutura para tabela db_guia_acess.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_guia_acess.migrations: ~10 rows (aproximadamente)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2023_04_14_165129_create_usuario', 1),
	(6, '2023_04_28_175149_create_categorias_table', 1),
	(7, '2023_06_20_041721_create_local_table', 1),
	(8, '2023_06_21_220245_create_suporte_table', 1),
	(9, '2023_06_28_210841_create_feedback_table', 1);

-- Copiando estrutura para tabela db_guia_acess.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_guia_acess.password_resets: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela db_guia_acess.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
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
  `nome` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `assunto` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mensagem` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_guia_acess.suporte: ~0 rows (aproximadamente)
INSERT INTO `suporte` (`id`, `nome`, `email`, `assunto`, `mensagem`, `created_at`, `updated_at`) VALUES
	(4, 'joao', 'joaozin@gmail.com', 'eu sou o joao', 'gostaria de ser o joao', '2023-06-30 00:04:28', '2023-06-30 00:04:28'),
	(6, 'Pedro', 'joaocarlos@gmail.com', 'Catedral', 'muito bonita', '2023-06-30 01:08:22', '2023-06-30 01:08:22');

-- Copiando estrutura para tabela db_guia_acess.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_guia_acess.users: ~0 rows (aproximadamente)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'admin', 'admin@admin.com', NULL, '$2y$10$Qtz.Wb4EFfdlDOWY4uEjAeWVgW6lB/v4gpsiqJOZS0b7iwb2c70Ku', NULL, '2023-06-29 20:52:17', '2023-06-29 20:52:17'),
	(2, 'luiz', 'admin@123', NULL, '$2y$10$BpeTJnPz0y9XK7G60XDyJObwRW5kZdl9P09y79oE1ImfBzv74fkRW', NULL, '2023-06-29 20:53:49', '2023-06-29 20:53:49'),
	(3, 'bernardo', 'bernardo@gmail.com', NULL, '$2y$10$0DOjFUsez9TwnAxLkorUhOGZHZc414iGGMsRvU90PA0QwKEKe5x42', NULL, '2023-06-30 01:09:31', '2023-06-30 01:09:31');

-- Copiando estrutura para tabela db_guia_acess.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagem` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `categoria_id` bigint unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `usuario_categoria_id_foreign` (`categoria_id`),
  CONSTRAINT `usuario_categoria_id_foreign` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_guia_acess.usuario: ~0 rows (aproximadamente)
INSERT INTO `usuario` (`id`, `nome`, `telefone`, `email`, `imagem`, `created_at`, `updated_at`, `categoria_id`) VALUES
	(2, 'Matehus', '2315426363', 'matehus@email.com', 'imagem/20230629214434.jpg', '2023-06-30 00:36:21', '2023-06-30 00:44:34', 2),
	(4, 'joao carlos', '1342657546', 'joaocarlos@gmail.com', 'imagem/20230629214353.jpg', '2023-06-30 00:43:53', '2023-06-30 00:43:53', 5);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
