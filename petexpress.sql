-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Dez-2022 às 20:30
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `petexpress`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `name` text NOT NULL,
  `email` text NOT NULL,
  `senha` text NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`name`, `email`, `senha`, `id_user`) VALUES
('Gabriel B', 'gb@gmail.com', 'gabriel', 1),
('joao', 'joao@gmail.com', 'joao', 7),
('Gabriel Bernardino de Oliveira', 'gabriel1@gmail.com', 'gabriel', 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastrocard`
--

CREATE TABLE `cadastrocard` (
  `id_card` int(11) NOT NULL,
  `num_cartao` text DEFAULT NULL,
  `data` text DEFAULT NULL,
  `cvv` int(11) DEFAULT NULL,
  `nome` text DEFAULT NULL,
  `cpf` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadastrocard`
--

INSERT INTO `cadastrocard` (`id_card`, `num_cartao`, `data`, `cvv`, `nome`, `cpf`) VALUES
(7, '2948942892892829', '2026-12', 555, 'Joao silva', '09449933849'),
(9, '9999999999999999', '2027-01', 999, 'Gabriel Bernardino de Oliveira', '99999999999'),
(11, '8888888888888888', '2029-06', 888, 'Gabriel Oliveira', '88888888888');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastropet`
--

CREATE TABLE `cadastropet` (
  `nome_pet` text DEFAULT NULL,
  `raca` text DEFAULT NULL,
  `porte` text DEFAULT NULL,
  `obs` text DEFAULT NULL,
  `id_pet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadastropet`
--

INSERT INTO `cadastropet` (`nome_pet`, `raca`, `porte`, `obs`, `id_pet`) VALUES
('Calango', 'Pinsher', 'pequeno', 'Raivoso', 10),
('Calango', 'Pinsher', 'pequeno', 'Raivoso', 11),
('jubileu', 'pinsher', 'medio', 'nao tem', 12),
('bob', 'vira lata', 'medio', 'raivoso', 16);

-- --------------------------------------------------------

--
-- Estrutura da tabela `historico`
--

CREATE TABLE `historico` (
  `id_historico` int(11) NOT NULL,
  `cidade` text DEFAULT NULL,
  `petshop` text DEFAULT NULL,
  `pet` text DEFAULT NULL,
  `pagamento` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `historico`
--

INSERT INTO `historico` (`id_historico`, `cidade`, `petshop`, `pet`, `pagamento`) VALUES
(8, 'crato-ce', 'Pets House', 'Calango', '9892382938938293'),
(9, 'crato-ce', 'Pets House', 'Calango', '9892382938938293'),
(10, 'crato-ce', 'Pets House', 'Calango', '9892382938938293'),
(11, 'crato-ce', 'Mundo animal', 'jubileu', '2948942892892829'),
(12, 'crato-ce', 'Pets House', 'Calango', '9892382938938293'),
(14, 'juazeiro do norte-ce', 'Lar do pet', 'bob', '8888888888888888');

-- --------------------------------------------------------

--
-- Estrutura da tabela `petshop`
--

CREATE TABLE `petshop` (
  `id_petshop` int(11) NOT NULL,
  `petshop` text DEFAULT NULL,
  `local` text DEFAULT NULL,
  `valor` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `petshop`
--

INSERT INTO `petshop` (`id_petshop`, `petshop`, `local`, `valor`) VALUES
(6, 'Mundo do criador', 'crato-ce', '20'),
(7, 'Pets House', 'crato-ce', '20'),
(8, 'Mundo animal', 'crato-ce', '20'),
(9, 'Lar do pet', 'juazeiro do norte-ce', '30'),
(11, 'Nossos amiguinhos', 'juazeiro do norte-ce', '30'),
(12, 'Lar do pet', 'juazeiro do norte-ce', '30');

-- --------------------------------------------------------

--
-- Estrutura da tabela `valor`
--

CREATE TABLE `valor` (
  `id` int(11) NOT NULL,
  `cidade` text NOT NULL,
  `valor` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `valor`
--

INSERT INTO `valor` (`id`, `cidade`, `valor`) VALUES
(1, 'crato-ce', '20'),
(2, 'juazeiro do norte-ce', '30'),
(3, 'barbalha', '35'),
(4, 'crato-ce', '20'),
(5, 'juazeiro do norte-ce', '30'),
(6, 'barbalha-ce', '35');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id_user`);

--
-- Índices para tabela `cadastrocard`
--
ALTER TABLE `cadastrocard`
  ADD PRIMARY KEY (`id_card`);

--
-- Índices para tabela `cadastropet`
--
ALTER TABLE `cadastropet`
  ADD PRIMARY KEY (`id_pet`);

--
-- Índices para tabela `historico`
--
ALTER TABLE `historico`
  ADD PRIMARY KEY (`id_historico`);

--
-- Índices para tabela `petshop`
--
ALTER TABLE `petshop`
  ADD PRIMARY KEY (`id_petshop`);

--
-- Índices para tabela `valor`
--
ALTER TABLE `valor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `cadastrocard`
--
ALTER TABLE `cadastrocard`
  MODIFY `id_card` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `cadastropet`
--
ALTER TABLE `cadastropet`
  MODIFY `id_pet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `historico`
--
ALTER TABLE `historico`
  MODIFY `id_historico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `petshop`
--
ALTER TABLE `petshop`
  MODIFY `id_petshop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `valor`
--
ALTER TABLE `valor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
