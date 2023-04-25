-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Tempo de geração: 24/04/2023 às 17:39
-- Versão do servidor: 10.11.2-MariaDB-1:10.11.2+maria~ubu2204
-- Versão do PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `lodge`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `ldg_bookings`
--

CREATE TABLE `ldg_bookings` (
  `bookingId` int(11) NOT NULL,
  `customerId` int(11) NOT NULL,
  `bookingDtm` datetime NOT NULL,
  `roomId` int(11) NOT NULL,
  `floorId` int(11) NOT NULL,
  `roomSizeId` int(11) NOT NULL,
  `bookStartDate` datetime NOT NULL,
  `bookEndDate` datetime NOT NULL,
  `bookingComments` varchar(2048) DEFAULT NULL,
  `isDeleted` tinyint(4) NOT NULL,
  `createdBy` int(11) NOT NULL,
  `createdDtm` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Despejando dados para a tabela `ldg_bookings`
--

INSERT INTO `ldg_bookings` (`bookingId`, `customerId`, `bookingDtm`, `roomId`, `floorId`, `roomSizeId`, `bookStartDate`, `bookEndDate`, `bookingComments`, `isDeleted`, `createdBy`, `createdDtm`, `updatedBy`, `updatedDtm`) VALUES
(1, 1, '2023-04-24 17:37:56', 1, 1, 1, '2023-04-24 00:00:00', '2023-04-25 00:00:00', '', 0, 1, '2023-04-24 17:37:56', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `ldg_customer`
--

CREATE TABLE `ldg_customer` (
  `customerId` int(11) NOT NULL,
  `customerName` varchar(50) NOT NULL,
  `customerAddress` varchar(2048) DEFAULT NULL,
  `customerPhone` varchar(15) DEFAULT NULL,
  `customerEmail` varchar(128) DEFAULT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT 0,
  `createdBy` int(11) NOT NULL,
  `createdDtm` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Despejando dados para a tabela `ldg_customer`
--

INSERT INTO `ldg_customer` (`customerId`, `customerName`, `customerAddress`, `customerPhone`, `customerEmail`, `isDeleted`, `createdBy`, `createdDtm`, `updatedBy`, `updatedDtm`) VALUES
(1, 'Leandro', 'Rua teste, numero 0800', '988732168', 'leandro@email.com', 0, 1, '2023-04-24 17:37:22', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `ldg_floor`
--

CREATE TABLE `ldg_floor` (
  `floorId` tinyint(4) NOT NULL,
  `floorCode` varchar(10) NOT NULL,
  `floorName` varchar(50) NOT NULL,
  `floorDescription` text NOT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT 0,
  `createdBy` int(11) NOT NULL,
  `createdDtm` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci COMMENT='Floor Table';

--
-- Despejando dados para a tabela `ldg_floor`
--

INSERT INTO `ldg_floor` (`floorId`, `floorCode`, `floorName`, `floorDescription`, `isDeleted`, `createdBy`, `createdDtm`, `updatedBy`, `updatedDtm`) VALUES
(1, 'TÉRREO', 'Térreo', '<p>Térreo</p>', 0, 1, '2023-04-24 17:21:33', 1, '2023-04-24 17:26:23'),
(2, '1 ANDAR', '1 Andar', '<p>1 andar</p>', 0, 1, '2023-04-24 17:21:43', NULL, NULL),
(3, '2 ANDAR', '2 Andar', '<p>2 andar</p>', 0, 1, '2023-04-24 17:21:49', NULL, NULL),
(4, '3 ANDAR', '3 Andar', '<p>3 andar</p>', 0, 1, '2023-04-24 17:21:56', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `ldg_lodge`
--

CREATE TABLE `ldg_lodge` (
  `lodgeId` int(11) NOT NULL,
  `lodgeName` varchar(128) NOT NULL,
  `lodgeAddress` varchar(512) NOT NULL,
  `lodgeCity` varchar(50) NOT NULL,
  `lodgeState` varchar(50) NOT NULL,
  `lodgeCountry` varchar(50) DEFAULT NULL,
  `lodgePincode` varchar(10) DEFAULT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT 0,
  `createdBy` int(11) NOT NULL DEFAULT 0,
  `createdDtm` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci COMMENT='Information of lodge';

-- --------------------------------------------------------

--
-- Estrutura para tabela `ldg_reset_password`
--

CREATE TABLE `ldg_reset_password` (
  `id` bigint(20) NOT NULL,
  `email` varchar(128) NOT NULL,
  `activation_id` varchar(32) NOT NULL,
  `agent` varchar(512) NOT NULL,
  `client_ip` varchar(32) NOT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT 0,
  `createdBy` bigint(20) NOT NULL DEFAULT 1,
  `createdDtm` datetime NOT NULL,
  `updatedBy` bigint(20) DEFAULT NULL,
  `updatedDtm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `ldg_reset_password`
--

INSERT INTO `ldg_reset_password` (`id`, `email`, `activation_id`, `agent`, `client_ip`, `isDeleted`, `createdBy`, `createdDtm`, `updatedBy`, `updatedDtm`) VALUES
(25, 'email@gmail.com', 'nxwY5JKbbNcTRju', 'Chrome 56.0.2924.87', '0.0.0.0', 0, 1, '2017-03-22 18:11:25', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `ldg_roles`
--

CREATE TABLE `ldg_roles` (
  `roleId` tinyint(4) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci COMMENT='Information of roles';

--
-- Despejando dados para a tabela `ldg_roles`
--

INSERT INTO `ldg_roles` (`roleId`, `role`) VALUES
(1, 'System Administrator'),
(2, 'Lodge Manager'),
(3, 'Booker');

-- --------------------------------------------------------

--
-- Estrutura para tabela `ldg_rooms`
--

CREATE TABLE `ldg_rooms` (
  `roomId` int(11) NOT NULL,
  `roomNumber` varchar(50) NOT NULL,
  `roomSizeId` int(11) NOT NULL COMMENT 'FK : ldg_room_sizes',
  `floorId` tinyint(4) NOT NULL COMMENT 'FK : ldg_floor',
  `isDeleted` tinyint(4) NOT NULL DEFAULT 0,
  `createdBy` int(11) NOT NULL DEFAULT 0,
  `createdDtm` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci COMMENT='Information of rooms';

--
-- Despejando dados para a tabela `ldg_rooms`
--

INSERT INTO `ldg_rooms` (`roomId`, `roomNumber`, `roomSizeId`, `floorId`, `isDeleted`, `createdBy`, `createdDtm`, `updatedBy`, `updatedDtm`) VALUES
(1, '001', 1, 1, 0, 1, '2023-04-24 17:26:50', NULL, NULL),
(2, '002', 1, 1, 0, 1, '2023-04-24 17:26:56', NULL, NULL),
(3, '003', 1, 1, 0, 1, '2023-04-24 17:27:01', NULL, NULL),
(4, '004', 2, 1, 0, 1, '2023-04-24 17:27:08', NULL, NULL),
(5, '005', 2, 1, 0, 1, '2023-04-24 17:27:16', NULL, NULL),
(6, '006', 2, 1, 0, 1, '2023-04-24 17:27:21', NULL, NULL),
(7, '007', 3, 1, 0, 1, '2023-04-24 17:27:31', NULL, NULL),
(8, '008', 3, 1, 0, 1, '2023-04-24 17:27:38', NULL, NULL),
(9, '009', 3, 1, 0, 1, '2023-04-24 17:27:44', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `ldg_room_base_fare`
--

CREATE TABLE `ldg_room_base_fare` (
  `bfId` bigint(20) NOT NULL,
  `sizeId` int(11) NOT NULL,
  `baseFareHour` double NOT NULL,
  `baseFareDay` double NOT NULL,
  `serviceTax` double NOT NULL,
  `serviceCharge` double NOT NULL,
  `fareTotal` double NOT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT 0,
  `createdBy` int(11) NOT NULL,
  `createdDtm` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Despejando dados para a tabela `ldg_room_base_fare`
--

INSERT INTO `ldg_room_base_fare` (`bfId`, `sizeId`, `baseFareHour`, `baseFareDay`, `serviceTax`, `serviceCharge`, `fareTotal`, `isDeleted`, `createdBy`, `createdDtm`, `updatedBy`, `updatedDtm`) VALUES
(1, 1, 30, 80, 10, 5, 92, 0, 1, '2023-04-24 17:29:36', NULL, NULL),
(2, 2, 50, 120, 10, 5, 138, 0, 1, '2023-04-24 17:29:49', NULL, NULL),
(3, 3, 80, 150, 10, 5, 172.5, 0, 1, '2023-04-24 17:29:59', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `ldg_room_sizes`
--

CREATE TABLE `ldg_room_sizes` (
  `sizeId` int(11) NOT NULL,
  `sizeTitle` varchar(512) NOT NULL,
  `sizeDescription` text NOT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT 0,
  `createdBy` int(11) NOT NULL DEFAULT 0,
  `createdDtm` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci COMMENT='Information of room sizes';

--
-- Despejando dados para a tabela `ldg_room_sizes`
--

INSERT INTO `ldg_room_sizes` (`sizeId`, `sizeTitle`, `sizeDescription`, `isDeleted`, `createdBy`, `createdDtm`, `updatedBy`, `updatedDtm`) VALUES
(1, 'Suíte standart', '<p>- 1 CAMA DE CASAL</p>\r\n<p>- FRIGOBAR</p>\r\n<p>- TV 24\"</p>\r\n<p>- AR CONDICIONADO</p>', 0, 1, '2023-04-24 17:22:30', 1, '2023-04-24 17:23:26'),
(2, 'Suíte família', '<p>- 1 CAMA DE CASAL</p>\r\n<p>- 1 CAMA DE SOLTEIRO</p>\r\n<p>- FRIGOBAR</p>\r\n<p>- TV 32\"</p>\r\n<p>- AR CONDICIONADO</p>\r\n<p>- CHUVEIRO ELÉTRICO</p>', 0, 1, '2023-04-24 17:23:14', 1, '2023-04-24 17:24:05'),
(3, 'Suíte 2 casais', '<table class=\"table table-hover\">\r\n<tbody>\r\n<tr>\r\n<td>\r\n<p>- 2 CAMA DE CASAL</p>\r\n<p>- FRIGOBAR</p>\r\n<p>- TV 42\"</p>\r\n<p>- AR CONDICIONADO</p>\r\n<p>- CHUVEIRO ELÉTRICO</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>', 0, 1, '2023-04-24 17:25:08', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `ldg_users`
--

CREATE TABLE `ldg_users` (
  `userId` int(11) NOT NULL,
  `userEmail` varchar(128) NOT NULL,
  `userPassword` varchar(128) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `userPhone` varchar(20) NOT NULL,
  `userAddress` varchar(1024) NOT NULL,
  `roleId` tinyint(4) NOT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT 0,
  `createdBy` int(11) NOT NULL DEFAULT 0,
  `createdDtm` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci COMMENT='Information of administrative users';

--
-- Despejando dados para a tabela `ldg_users`
--

INSERT INTO `ldg_users` (`userId`, `userEmail`, `userPassword`, `userName`, `userPhone`, `userAddress`, `roleId`, `isDeleted`, `createdBy`, `createdDtm`, `updatedBy`, `updatedDtm`) VALUES
(1, 'email@gmail.com', '$2y$10$W0JwINh/A4eadWvp1.AxkejudEgv8Wg5vUMCcX4MKtdoCimQieBdK', 'Usuário', '9890098900', '', 1, 0, 1, '2017-01-01 00:00:00', NULL, NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `ldg_bookings`
--
ALTER TABLE `ldg_bookings`
  ADD PRIMARY KEY (`bookingId`);

--
-- Índices de tabela `ldg_customer`
--
ALTER TABLE `ldg_customer`
  ADD PRIMARY KEY (`customerId`);

--
-- Índices de tabela `ldg_floor`
--
ALTER TABLE `ldg_floor`
  ADD PRIMARY KEY (`floorId`),
  ADD UNIQUE KEY `floorCode` (`floorCode`);

--
-- Índices de tabela `ldg_lodge`
--
ALTER TABLE `ldg_lodge`
  ADD PRIMARY KEY (`lodgeId`);

--
-- Índices de tabela `ldg_reset_password`
--
ALTER TABLE `ldg_reset_password`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `ldg_roles`
--
ALTER TABLE `ldg_roles`
  ADD PRIMARY KEY (`roleId`);

--
-- Índices de tabela `ldg_rooms`
--
ALTER TABLE `ldg_rooms`
  ADD PRIMARY KEY (`roomId`);

--
-- Índices de tabela `ldg_room_base_fare`
--
ALTER TABLE `ldg_room_base_fare`
  ADD PRIMARY KEY (`bfId`);

--
-- Índices de tabela `ldg_room_sizes`
--
ALTER TABLE `ldg_room_sizes`
  ADD PRIMARY KEY (`sizeId`);

--
-- Índices de tabela `ldg_users`
--
ALTER TABLE `ldg_users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `ldg_bookings`
--
ALTER TABLE `ldg_bookings`
  MODIFY `bookingId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `ldg_customer`
--
ALTER TABLE `ldg_customer`
  MODIFY `customerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `ldg_floor`
--
ALTER TABLE `ldg_floor`
  MODIFY `floorId` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `ldg_lodge`
--
ALTER TABLE `ldg_lodge`
  MODIFY `lodgeId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `ldg_reset_password`
--
ALTER TABLE `ldg_reset_password`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `ldg_roles`
--
ALTER TABLE `ldg_roles`
  MODIFY `roleId` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `ldg_rooms`
--
ALTER TABLE `ldg_rooms`
  MODIFY `roomId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `ldg_room_base_fare`
--
ALTER TABLE `ldg_room_base_fare`
  MODIFY `bfId` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `ldg_room_sizes`
--
ALTER TABLE `ldg_room_sizes`
  MODIFY `sizeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `ldg_users`
--
ALTER TABLE `ldg_users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
