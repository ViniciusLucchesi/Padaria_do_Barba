CREATE DATABASE barba;

CREATE TABLE produto(
    id INT AUTO_INCREMENT PRIMARY KEY,
    produto VARCHAR( 30 ),
    perecivel INT,
    valor DECIMAL( 10, 2 ),
    tipo VARCHAR( 30 ),
    imagem VARCHAR( 1500 )
);

CREATE TABLE usuario(
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR( 30 ),
    nome INT,
    chave DECIMAL( 10, 2 ),
    tipo VARCHAR( 30 ),
    imagem VARCHAR( 1500 )
);

-- Dados da tabela produto
INSERT INTO `produto` (`id`, `produto`, `perecivel`, `valor`, `tipo`, `imagem`) VALUES
(1, 'PÃ£o FrancÃªs', 1, 0.50, 'salgado', 'https://th.bing.com/th/id/OIP.HrEXuBjCf3Qsi2KGPnO6xAAAAA?pid=ImgDet&rs=1'),
(2, 'Coxinha de Frango', 1, 3.00, 'salgado', 'https://th.bing.com/th/id/OIP.FBQr5UiKmKqhRKzBL_NuUQHaHa?pid=ImgDet&rs=1'),
(4, 'Brigadeiro', 1, 2.50, 'doce', 'https://th.bing.com/th/id/R.97b9800248b41ad5779cb3c656892a72?rik=Rz2DwWYlXpTq0A&riu=http%3a%2f%2fdellybrazil.com%2fwp-content%2fuploads%2fshutterstock_319500128.jpg&ehk=HziuxzUVFJQG9vPqCuR8vZCCaFdAKR1IIVmZCJjXx1o%3d&risl=&pid=ImgRaw&r=0'),
(5, 'Torta de LimÃ£o', 1, 7.50, 'doce', 'https://www.receitas-sem-fronteiras.com/media/torta-de-lima-o_crop.jpg/rh/torta-de-limao-azedinha-e-doce.jpg'),
(6, 'Biscoito', 1, 10.00, 'salgado', 'https://th.bing.com/th/id/R.0af60371872b61eee3b4154dc09f138a?rik=hzWFqFWhaHvQ9w&riu=http%3a%2f%2fimg.itdg.com.br%2ftdg%2fimages%2fblog%2fuploads%2f2017%2f11%2fbiscoitochampagne-1.jpg&ehk=9IwqLk50W%2bPTLGaSq69wDY7gJMqF6kFyhSKc4sKz7m0%3d&risl=&pid=ImgRaw&r=0'),
(9, 'PÃ£o de Mel', 1, 25.00, 'doce', 'https://th.bing.com/th/id/R.8fc717f0399c78cb40d00a0553aaaff9?rik=inIsgjpQ%2f72BiQ&pid=ImgRaw&r=0'),
(10, 'Coca-Cola', 1, 5.00, 'bebida', 'https://th.bing.com/th/id/R.5295181fce7a97ca38f3c640c70db74d?rik=D3Qs%2fchwSOSGoA&pid=ImgRaw&r=0'),
(11, 'Guarana', 1, 3.50, 'bebida', 'https://th.bing.com/th/id/OIP.WWKfgF5f4GFlfaGr-xfJKgHaHa?pid=ImgDet&rs=1'),
(12, 'Pepsi', 1, 4.00, 'bebida', 'https://cdn.awsli.com.br/1000x1000/914/914004/produto/35314543/286969a663.jpg');
