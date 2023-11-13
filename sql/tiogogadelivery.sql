
--
-- Banco de dados: `tiogogadelivery`
--
DROP DATABASE IF EXISTS tiogogadelivery;

CREATE DATABASE tiogogadelivery;
USE tiogogadelivery;
-- --------------------------------------------------------

--
-- Estrutura para tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `descricao` varchar(50) NOT NULL,
  `nome_url` varchar(50) NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `categorias`
--

INSERT INTO `categorias` (`id`, `nome`, `descricao`, `nome_url`) VALUES
(1, 'pizza', '1 sabor', ''),
(2, 'bebidas', 'geladas', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `email` varchar(80) NOT NULL,
  `rua` varchar(100) NOT NULL,
  `numero` varchar(20) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `estado` varchar(15) NOT NULL,
  `cep` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `cpf`, `telefone`, `email`, `rua`, `numero`, `bairro`, `cidade`, `estado`, `cep`) VALUES
(1, 'dias', '259.746.371-00', '(61) 99406-5329', 'dias@gmail.com', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(50) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `descricao` Text NULL,
  `valor` int(50) NOT NULL,
  `categoria` INT NOT NULL,
  `imagem` varchar(255) NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `descricao`,  `valor`, `categoria`, `imagem`) VALUES
(1, 'pizza', 'milho com milho', 20, '1', 'images.jpg'),
(2, 'calabresa', 'bladinho com queijo', 200, '1', 'e523b713-objeto-inteligente-de-vetor_1000000000000'),
(3, 'Mariammm', 'mayara com mayara', 20, '1', 'pizza05.jpeg'),
(4, 'pizza', '1 sabor',  20, '1', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `email` varchar(70) NOT NULL,
  `senha` varchar(35) NOT NULL,
  `nivel` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `cpf`, `telefone`, `email`, `senha`, `nivel`) VALUES
(3, 'maria ', '259.746.371-00', '(61) 99406-5329', 'maria@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'cliente'),
(4, 'maria ', '259.746.371-00', '(61) 99406-5329', 'maria@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'cliente'),
(5, 'monica ', '000.555.999-99', '(61) 99888-8888', 'monica@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'cliente'),
(7, 'maria risoleta ', '024.230.851-17', '(61) 99342-6065', 'mariarisoleta3@gmail.com', '64122b3d53eee5c95a9ad503ea0e9e72', 'admin'),
(9, 'douglas', '012.398.621-48', '(61) 99190-6531', 'douglasdcdnet@gmail.com', '5a2939e9a8645471c17c8b1d1ea161e6', 'admin'),
(11, 'douglas', '259.746.371-00', '(61) 99406-5329', 'dcdnet@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'cliente'),
(12, 'douglas', '000.555.999-99', '(61) 99406-5329', 'douglas@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'cliente'),
(13, 'dcdnet', '000.555.999-99', '(61) 99406-5329', 'net@gmail.com', '202cb962ac59075b964b07152d234b70', 'cliente');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

