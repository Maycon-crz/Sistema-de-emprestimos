-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23-Jun-2021 às 11:47
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `desafio_serasa`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `sobrenome` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `senha` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `sobrenome`, `email`, `senha`) VALUES
(1, 'Maycon', 'Nascimento de Oliveira', 'sdfds@gmail.com', '$2y$10$pYd8TjdzCokfpW8DB//wtedctWSz2pt/hfSQw8oBxbKFbMvjMo7dG'),
(2, 'Maycon', 'Nascimento de Oliveira', 'asd@gmail.com', '$2y$10$HKFGltbCXpCegqz28ZlnHulQ.xX5jQPU/VhcghBM.ESLvmjYNp3iq'),
(3, 'aaa', 'bbb', 'aaaa@gmail.com', '$2y$10$5OJNnXjMlxX59lK40wrlsOjeekl2VKR3gll5tp9TxHqGNgrLFe.72'),
(4, 'cccc', 'dddd', 'dddd@gmail.com', '$2y$10$6c5DyYHJnCDWSMs/HhGE3OyWSdY8SIngKEo6nW8h4qEIbc4ujk1ka'),
(5, 'eee', 'ffff', 'eee@gmail.com', '$2y$10$5KlUMM7VzjN4kp1H7ItBn.nscI4Ds/PA6n8r5fx0b1ZJ.2Ny0cLny'),
(6, 'ggg', 'hhhh', 'hhhh@gmail.com', '$2y$10$SeQdOnXnuTtfZF6MWenfheTWMD7JSEnN0ljGEFLOXzso.6ZfmSdeq'),
(7, 'iiiii', 'jjjjj', 'jjjjj@gmail.com', '$2y$10$B1FSwDL5Mh2AFM8PMWKtdewOquLMo790.b9P2bmd7Gx2WiH.whd1G'),
(8, 'kkkk', 'llllll', 'llllll@gmail.com', '$2y$10$cG5jnyyvJM5o2u.HaZY8PeqKJK6MB57w/oV5P3QnHdLpf.mYu9wdS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
