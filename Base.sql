--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id` int(11) NOT NULL,
  `produto` varchar(30) DEFAULT NULL,
  `perecivel` int(11) DEFAULT NULL,
  `valor` float(10,2) DEFAULT NULL,
  `tipo` varchar(30) DEFAULT NULL,
  `imagem` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `produto`, `perecivel`, `valor`, `tipo`, `imagem`) VALUES
(1, 'PÃ£o FrancÃªs', 1, 0.50, 'salgado', 'https://th.bing.com/th/id/OIP.HrEXuBjCf3Qsi2KGPnO6xAAAAA?pid=ImgDet&rs=1'),
(2, 'Coxinha de Frango', 1, 2.50, 'salgado', 'https://th.bing.com/th/id/OIP.FBQr5UiKmKqhRKzBL_NuUQHaHa?pid=ImgDet&rs=1'),
(4, 'Brigadeiro', 1, 2.50, 'doce', 'https://th.bing.com/th/id/R.97b9800248b41ad5779cb3c656892a72?rik=Rz2DwWYlXpTq0A&riu=http%3a%2f%2fdellybrazil.com%2fwp-content%2fuploads%2fshutterstock_319500128.jpg&ehk=HziuxzUVFJQG9vPqCuR8vZCCaFdAKR1IIVmZCJjXx1o%3d&risl=&pid=ImgRaw&r=0'),
(5, 'Torta de LimÃ£o', 1, 7.50, 'doce', 'https://www.receitas-sem-fronteiras.com/media/torta-de-lima-o_crop.jpg/rh/torta-de-limao-azedinha-e-doce.jpg'),
(6, 'Biscoito', 1, 10.00, 'salgado', 'https://th.bing.com/th/id/R.0af60371872b61eee3b4154dc09f138a?rik=hzWFqFWhaHvQ9w&riu=http%3a%2f%2fimg.itdg.com.br%2ftdg%2fimages%2fblog%2fuploads%2f2017%2f11%2fbiscoitochampagne-1.jpg&ehk=9IwqLk50W%2bPTLGaSq69wDY7gJMqF6kFyhSKc4sKz7m0%3d&risl=&pid=ImgRaw&r=0'),
(9, 'PÃ£o de Mel', 1, 25.00, 'doce', 'https://th.bing.com/th/id/R.8fc717f0399c78cb40d00a0553aaaff9?rik=inIsgjpQ%2f72BiQ&pid=ImgRaw&r=0'),
(10, 'Coca-Cola', 1, 5.00, 'bebida', 'https://th.bing.com/th/id/R.5295181fce7a97ca38f3c640c70db74d?rik=D3Qs%2fchwSOSGoA&pid=ImgRaw&r=0'),
(11, 'Guarana', 1, 3.50, 'bebida', 'https://th.bing.com/th/id/OIP.WWKfgF5f4GFlfaGr-xfJKgHaHa?pid=ImgDet&rs=1'),
(12, 'Pepsi', 1, 4.00, 'bebida', 'https://cdn.awsli.com.br/1000x1000/914/914004/produto/35314543/286969a663.jpg'),
(13, 'Bolo de morango', 1, 150.00, 'doce', 'https://th.bing.com/th/id/OIP.O6Yb1YaX32Io3TeW9zeXTgHaHa?pid=ImgDet&w=500&h=500&rs=1'),
(14, 'CamarÃ£o', 1, 50.00, 'salgado', 'https://th.bing.com/th/id/R.eb2bda71ebaef95b9e7772979c44fc7f?rik=9w5wsZyRSEkTlw&pid=ImgRaw&r=0');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `senha` varchar(32) DEFAULT NULL,
  `chave` varchar(20) DEFAULT NULL,
  `admin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`, `chave`, `admin`) VALUES
(6, 'Vinicius Pereira Lucchesi', 'vinicius.lucchesi@gmail.com', 'aa7b11a7654533a7b58ec1b1d69183f1', '336-926', NULL),
(8, 'Marcos', 'marcos@gmail.com', '17ec5ad3d6e7d313377b90b397a6e019', '883-250', NULL),
(9, 'Evandro Guedes', 'evandro.guedes@gmail.com', 'aa7b11a7654533a7b58ec1b1d69183f1', '361-055', NULL);

--
-- Ãndices para tabelas despejadas
--

--
-- Ãndices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`);

--
-- Ãndices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;
