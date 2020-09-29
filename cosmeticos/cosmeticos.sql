-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 20-Jun-2017 às 08:18
-- Versão do servidor: 10.1.10-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cosmeticos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin`
--

CREATE TABLE `admin` (
  `id_func` int(2) NOT NULL,
  `nome_func` varchar(45) NOT NULL,
  `login_func` varchar(100) NOT NULL,
  `senha_func` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `admin`
--

INSERT INTO `admin` (`id_func`, `nome_func`, `login_func`, `senha_func`) VALUES
(1, 'lucas', 'lucasv@gmail.com', '1234qwer');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `id_cat` int(2) NOT NULL,
  `nome_cat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id_cat`, `nome_cat`) VALUES
(1, 'Perfumes'),
(2, 'Maquiagens'),
(3, 'Corpo & Banho'),
(4, 'Cabelos'),
(5, 'Tratamento');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cpf` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `rua` varchar(100) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `num_casa` int(100) NOT NULL,
  `telefone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nome`, `cpf`, `senha`, `cep`, `rua`, `bairro`, `cidade`, `estado`, `num_casa`, `telefone`, `email`) VALUES
(1, 'Gabriel Eugenio', '645.543.566-88', '123', '', 'Vinte Sete de Juhlo', 'Planalto Airton Senna', 'Fortaleza', 'CE', 6534, '(85)97542-3255', 'Gabriel123@gmail.com'),
(2, 'Carlos Eduardo', '285.543.566-84', '123', '', 'Rua Juraci MagalhÃ£es', 'Planalto Ayrton Senna', 'Fortaleza', 'CE', 4421, '(43)24324-3242', 'Carlos123@gmail.com'),
(3, 'Lucas Vieira da silva', '987797', 'qqqq', '', 'L', 'Passare', 'Fortaleza', 'Ce', 1124, '85988616851', 'lucasvieiradasilvajw@gmail.com'),
(4, 'Daniel Ferreira', '868585', 'www', '', 'Rua Doutor Pedro Sampaio', 'Passare', 'Fortaleza', 'CE', 24, '(75)78588-6678', 'L@gmail.com'),
(5, 'Daniel Ferreira', '757.868.768-79', 't6766967', '34235-235', 'l', 'Passare', 'Fortaleza', '', 0, '(68)69789-5786', 'dan@gmail.com'),
(6, 'Daniel Ferreira', '757.868.768-79', '67575544', '34235-235', 'l', 'Passare', 'Fortaleza', 'CE', 3577, '(68)69789-5786', 'dan@gmail.com'),
(7, 'Micael ', '868.237.526-58', '65752457', '08654-567', '45', 'JosÃ© Walter', 'Fortaleza', 'CE', 134, '(89)78465-6347', 'lucasvieiradasilvajw@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id_produtos` int(2) NOT NULL,
  `nome_prod` varchar(75) NOT NULL,
  `preco` decimal(10,2) UNSIGNED NOT NULL,
  `estoque` int(50) NOT NULL,
  `imagem` varchar(200) NOT NULL,
  `descricao` varchar(100) DEFAULT NULL,
  `id_categoria` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id_produtos`, `nome_prod`, `preco`, `estoque`, `imagem`, `descricao`, `id_categoria`) VALUES
(3, 'honey_marc_jacobs', '45.99', 15, 'honey_marc_jacobs.jpg', 'FragrÃ¢ncia de mel', 1),
(4, 'Batom-BBB', '15.99', 11, 'batons-BBB.jpg', 'Labios com mais tonalidades', 2),
(5, 'Tratamento para o rosto', '24.99', 62, 'corpo-e-rosto.jpg', 'Cuide da saÃºde do seu rosto!', 5),
(20, 'Cicatricure Gel', '79.99', 72, 'cicatricure.jpg', 'Trate as suas cicatrizes com rapidez', 5),
(21, 'Redken cachos', '12.00', 234, 'redken_cachos.jpg', 'Cahos sedosos', 2),
(22, 'Elseve', '12.99', 35, 'elseve.jpg', 'Cuide dos sues cabelos com qualidade', 4),
(23, 'Palterm Pernas', '68.99', 53, 'palterm_pernas.jpg', 'O melhor', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

CREATE TABLE `vendas` (
  `id_venda` int(3) NOT NULL,
  `id_clientes` int(3) NOT NULL,
  `total` int(50) NOT NULL,
  `qtd_vendida` int(50) NOT NULL,
  `forma_pagamento` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `vendas`
--

INSERT INTO `vendas` (`id_venda`, `id_clientes`, `total`, `qtd_vendida`, `forma_pagamento`) VALUES
(22, 1, 35, 4, 'Avista');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_func`);

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_cat`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id_produtos`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indexes for table `vendas`
--
ALTER TABLE `vendas`
  ADD PRIMARY KEY (`id_venda`),
  ADD UNIQUE KEY `forma_pagamento` (`forma_pagamento`),
  ADD KEY `id_clientes` (`id_clientes`),
  ADD KEY `forma_pagamento_2` (`forma_pagamento`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_func` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_cat` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id_produtos` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `vendas`
--
ALTER TABLE `vendas`
  MODIFY `id_venda` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `id_categoria` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_cat`);

--
-- Limitadores para a tabela `vendas`
--
ALTER TABLE `vendas`
  ADD CONSTRAINT `id_clientes` FOREIGN KEY (`id_venda`) REFERENCES `clientes` (`id_clientes`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
