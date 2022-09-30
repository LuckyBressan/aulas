-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Set-2022 às 18:48
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `meu_commerce`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `categoria_pai` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `descricao`, `categoria_pai`) VALUES
(1, 'eletrônicos', NULL),
(2, 'celulares e smartphones', 1),
(3, 'tv e vídeo', 1),
(4, 'consoles e games', 1),
(5, 'áudio', 1),
(6, 'câmeras e drones', 1),
(7, 'telefonia fixa', 1),
(8, 'informática e acessórios', NULL),
(9, 'informática', 8),
(10, 'acessórios e periféricos', 8),
(11, 'pc gamer', 8),
(12, 'comércio e segurança', NULL),
(13, 'agro, indústria e comércio', 12),
(14, 'sinalização e segurança', 12),
(15, 'casa', NULL),
(16, 'eletrodomésticos', 15),
(17, 'eletroportáteis', 15),
(18, 'ar e ventilação', 15),
(19, 'móveis e decoração', 15),
(20, 'casa e construção', 15),
(21, 'utilidades domésticas', 15),
(22, 'cama, mesa e banho', 15),
(23, 'lazer e entretenimento', NULL),
(24, 'livros', 23),
(25, 'instrumentos musicais', 23),
(26, 'música', 23),
(27, 'filmes e séries', 23),
(28, 'artigos de festas', 23),
(29, 'artesanato', 23),
(30, 'pra você e sua família', NULL),
(31, 'mercado', 30),
(32, 'automotivo', 30),
(33, 'brinquedos', 30),
(34, 'bebês', 30),
(35, 'gift cards', 30),
(36, 'pet shop', 30),
(37, 'malas, mochilas e acessórios', 30),
(38, 'papelaria', 30),
(39, 'vale presente', 30),
(40, 'esporte, sáude e bem-estar', NULL),
(41, 'esporte, fitness e lazer', 40),
(42, 'saúde e bem-estar', 40),
(43, 'suplementos e vitaminas', 40),
(44, 'roupas e acessórios esportivos', 40),
(45, 'moda e beleza', NULL),
(46, 'beleza e perfumaria', 45),
(47, 'moda', 45),
(48, 'relógios', 45),
(49, 'pra sua empresa', NULL),
(50, 'Americanas Empresas', 49),
(51, 'cotações online', 49),
(52, 'soluções corporativas', 49),
(53, 'receba em 3 horas', 49),
(54, 'confira também', NULL),
(55, 'serviços', 54),
(56, 'sustentabilidade', 54);

-- --------------------------------------------------------

--
-- Estrutura da tabela `paginas`
--

CREATE TABLE `paginas` (
  `id` int(11) NOT NULL,
  `url` varchar(100) NOT NULL,
  `label` varchar(30) NOT NULL,
  `corpo` varchar(3000) NOT NULL,
  `categoria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `paginas`
--

INSERT INTO `paginas` (`id`, `url`, `label`, `corpo`, `categoria`) VALUES
(1, 'contato', 'Contato', '<h1>Página de Contato</h1>', 'menu'),
(2, 'endereco', 'Endereço', '<h1>Endereço da empresa.</h1>', 'menu'),
(3, 'home', 'Home', '<h3>home</h3>', 'menu'),
(4, 'listagem', 'listagem', '<h3>Listagem</h3>', ''),
(5, 'produtos/listagem', 'listagem de produtos', '', ''),
(6, 'login', 'Login', '', ''),
(7, 'carrinho', 'carrinho', '', ''),
(8, 'realizar_pedido', 'Realizar Pedido', '', ''),
(9, 'logout', 'logout', '', ''),
(10, 'meus_pedidos', 'Meus Pedidos', '', 'menu');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `caracteristicas` varchar(3000) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `valor` float NOT NULL,
  `estoque` int(11) NOT NULL,
  `imagem` varchar(100) NOT NULL,
  `resumo` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `caracteristicas`, `categoria_id`, `valor`, `estoque`, `imagem`, `resumo`) VALUES
(1, 'Smartphone Redmi Note 10s 128GB/6GB global Onyx Gray', 'Armazenamento e ram 6 gb Ram + 128GB Rom \r\n- Processador - MediaTek Helio G95 \r\n- cpu: frequência máxima da cpu de 2,05 GHz \r\n- gpu: arm Mali-G76 MC4\r\n- Bateria e carregamento: 5.000 mAh (typ) - Carregamento rápido de 33 w \r\n- Câmera - Câmera grande angular de 64 mp \r\n- Tamanho do sensor: 1/1,97\" - Tamanho do pixel: 0,7 m - f/1,79 \r\n- Câmera ultra-angular de 8 mp - fov 118° - f/2,2 \r\n- Câmera macro de 2 mp - f/2,4 \r\n- Sensor de profundidade de 2 mp - f/2,4 \r\n- Recursos de fotografia da câmera traseira - Modo de 64 mp - Modo noturno - Embelezador ia - Modo retrato com ia, bokeh e controle de profundidade \r\n- Recursos de vídeo da câmera traseira - Modo macro de vídeo - Vídeo em time-lapse pro - Vídeo em câmera lenta \r\n- Gravação de vídeo com a câmera traseira 4K, 3840 x 2160 a 30 fps 1080p, 1920 x 1080 a 60 fps 1080p, 1920 x 1080 a 30 fps \r\n- Câmera frontal de 13 mp - f/2,45 \r\n- Recursos de fotografia da câmera frontal - Disparo contínuo - Embelezador ia - Modo retrato com ia, bokeh e controle de profundidade \r\n- Recursos de vídeo da câmera frontal - Time-lapse - Gravação de vídeo com a câmera frontal 1080p, 1920 x 1080 a 30 fps 720p, 1280 x 720 a 30 fps \r\n- Segurança: - Sensor de impressão digital no arco lateral - Desbloqueio por reconhecimento facial com ia\r\n- Rede e conectividade: - Dual sim \r\n- Bandas de rede: - 2G: gsm 850, 900, 1.800, 1.900 MHz - 3G: wcdma B1/2/4/5/8 - 4G: lte fdd B1/2/3/4/5/7/8/20/28 - 4G: lte tdd B38/40/41 (de 2535 a 2655 MHz) \r\n- Redes sem fio - Wi-Fi de 2,4 GHz/5 GHz - Bluetooth 5.0 \r\n- Navegação e posicionamento: - gps: L1 - Galileo: E1, Glonass: G1 \r\n- Beidou Áudio: - Alto-falante duplo - Entrada para fone de ouvido de 3,5 mm - Certificação de áudio de alta resolução \r\n- Sensores: - Sensor de proximidade - Sensor de luz ambiente - Acelerômetro - Giroscópio - Bússola eletrônica - Motor de vibração linear - ir Blaster \r\n- Sistemas operacionais: - miui 12,5 no Android 11\r\n- Dimensões - Altura: 160,46 mm - Largura: 74,5 mm - Espessura: 8,29 mm - Peso: 178,8 g\r\n- Conteúdo da embalagem: - Redmi Note 10S - Adaptador - Cabo USB Tipo c - Ferramenta de ejeção de sim - Capa de proteção - Guia de início rápido - Cartão de garantia\r\nGarantia do Fornecedor 3 meses\r\nItens Inclusos 1x Redmi Note 10S 128gb 6gb Cinza - Fonte - Cabo carregador - Extrator de chip - Capinha - ManualModelo Redmi Note 10S', 2, 1.599, 10, 'img/produtos/note10s.jfif', 'Armazenamento e ram 6 gb Ram + 128GB Rom Processador - MediaTek Helio G95'),
(2, 'iPhone 13 Apple (256GB) Estelar, Tela de 6,1\", 5G e Câmera Dupla de 12MP', 'Sistema Operacional\r\niOS 15\r\n\r\nTela\r\nTamanho: 6,1\"*\r\nMaterial: Super Retina XDR\r\nResolução: 2532 x 1170 pixels a 460 ppp\r\nDesign resistente com Ceramic Shield  \r\nHDR  \r\nTrue Tone  \r\nAmpla tonalidade de cores (P3)\r\nResposta tátil  \r\nProporção de contraste: 2.000.000:1 (típica)  \r\nBrilho máx. de 800 nits (típico); brilho máx. de 1200 nits (HDR)  \r\nRevestimento resistente a impressões digitais e oleosidade  \r\nSuporte à exibição simultânea de vários idiomas e caracteres ', 2, 5.799, 150, 'img/produtos/iphone.png', 'Tela de 6,1\", 5G + Wi-Fi, 256GB de Capacidade, Processador A15 Bionic, Sistema Operacional iOS 15 e Câmera Frontal com 12 MP');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `login` varchar(100) NOT NULL,
  `senha` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `login`, `senha`) VALUES
(1, 'lucas.bressan@unidavi.edu.br', '40f5a3eeec051b0d8a5a8ad4b5a5fb04');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

CREATE TABLE `vendas` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `data_venda` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `vendas`
--

INSERT INTO `vendas` (`id`, `usuario_id`, `data_venda`) VALUES
(1, 1, '2022-08-24 20:14:00'),
(9, 1, '2022-09-14 16:08:32'),
(10, 1, '2022-09-14 16:10:41'),
(11, 1, '2022-09-19 14:27:02'),
(12, 1, '2022-09-19 14:28:31'),
(14, 1, '2022-09-19 14:33:53'),
(29, 1, '2022-09-27 16:47:24'),
(30, 1, '2022-09-27 16:52:25'),
(31, 1, '2022-09-27 17:00:01'),
(32, 1, '2022-09-27 17:04:36');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas_produtos`
--

CREATE TABLE `vendas_produtos` (
  `id` int(11) NOT NULL,
  `produto_id` int(11) NOT NULL,
  `venda_id` int(11) NOT NULL,
  `valor_venda` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `vendas_produtos`
--

INSERT INTO `vendas_produtos` (`id`, `produto_id`, `venda_id`, `valor_venda`) VALUES
(1, 1, 1, 1400),
(2, 1, 9, 1.599),
(3, 1, 10, 1.599),
(4, 1, 11, 1.599),
(5, 2, 11, 5.799),
(6, 2, 11, 5.799),
(7, 1, 12, 1.599),
(8, 1, 14, 1.599),
(9, 1, 29, 1.599),
(10, 2, 29, 5.799),
(11, 2, 29, 5.799),
(12, 2, 30, 5.799),
(13, 1, 31, 1.599),
(14, 2, 32, 5.799);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_categorias_pai` (`categoria_pai`);

--
-- Índices para tabela `paginas`
--
ALTER TABLE `paginas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_produtos_categorias` (`categoria_id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `vendas`
--
ALTER TABLE `vendas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_vendas_usuario` (`usuario_id`);

--
-- Índices para tabela `vendas_produtos`
--
ALTER TABLE `vendas_produtos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_produtos` (`produto_id`),
  ADD KEY `FK_vendas` (`venda_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT de tabela `paginas`
--
ALTER TABLE `paginas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `vendas`
--
ALTER TABLE `vendas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de tabela `vendas_produtos`
--
ALTER TABLE `vendas_produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `categorias`
--
ALTER TABLE `categorias`
  ADD CONSTRAINT `FK_categorias_pai` FOREIGN KEY (`categoria_pai`) REFERENCES `categorias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `FK_produtos_categorias` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `vendas`
--
ALTER TABLE `vendas`
  ADD CONSTRAINT `FK_vendas_usuario` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `vendas_produtos`
--
ALTER TABLE `vendas_produtos`
  ADD CONSTRAINT `FK_produtos` FOREIGN KEY (`produto_id`) REFERENCES `produtos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_vendas` FOREIGN KEY (`venda_id`) REFERENCES `vendas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
