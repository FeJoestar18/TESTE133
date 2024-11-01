CREATE TABLE vendas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    pedido_id INT,
    produto_id INT,
    quantidade INT NOT NULL,
    preco_unitario DECIMAL(10, 2),
    total_item DECIMAL(10, 2) AS (quantidade * preco_unitario) STORED,
    FOREIGN KEY (pedido_id) REFERENCES pedidos(id),
    FOREIGN KEY (produto_id) REFERENCES produtos(id)
);

-- Inserindo dados na tabela 'categoria'
INSERT INTO categoria (nome, descricao) VALUES
('Eletrônico', 'Produtos eletrônicos e dispositivos'),
('Periférico', 'Acessórios e dispositivos periféricos para computadores'),
('Networking', 'Equipamentos e acessórios de rede'),
('Armazenamento', 'Dispositivos de armazenamento de dados'),
('Acessório', 'Acessórios diversos para equipamentos');

-- Inserindo dados na tabela 'produtos' com referência à categoria
INSERT INTO produtos (nome, descricao, preco, categoria_id) VALUES
('Notebook Dell Inspiron 15', 'Notebook de alta performance para uso geral', 3500.00, 1),
('Mouse Gamer Logitech G502', 'Mouse gamer com alta precisão e customizável', 250.00, 2),
('Switch Gigabit TP-Link TL-SG105', 'Switch de rede gigabit com 5 portas', 150.00, 3),
('Monitor Samsung 27" Curved', 'Monitor de 27 polegadas com tela curva', 1200.00, 1),
('Teclado Mecânico Corsair K70 RGB', 'Teclado mecânico gamer com iluminação RGB', 800.00, 2),
('Fone de Ouvido Bluetooth JBL TUNE 500BT', 'Fone de ouvido bluetooth com som de alta qualidade', 200.00, 2),
('HD Externo Seagate 1TB', 'HD externo portátil com 1TB de capacidade', 400.00, 4),
('Placa de Vídeo NVIDIA GeForce RTX 3060', 'Placa de vídeo de alta performance para jogos', 3500.00, 1),
('Roteador TP-Link Archer C6', 'Roteador wireless com suporte a dual-band', 300.00, 3),
('SSD Kingston A400 480GB', 'SSD de alto desempenho com 480GB de capacidade', 350.00, 4),
('Cabo HDMI 2.0 de 2 Metros', 'Cabo HDMI para transmissão de vídeo em alta resolução', 50.00, 5),
('Hub USB-C com 4 Portas', 'Hub USB-C com quatro portas USB 3.0', 100.00, 5),
('Carregador Universal para Notebook', 'Carregador universal para notebooks de diversas marcas', 150.00, 5),
('Suporte para Notebook Ajustável', 'Suporte ajustável para notebooks', 80.00, 5),
('Webcam Logitech HD C920', 'Webcam de alta definição para videoconferências', 300.00, 2),
('Headset Gamer HyperX Cloud Stinger', 'Headset gamer com som surround e microfone acoplado', 250.00, 2),
('Teclado Wireless Logitech K400', 'Teclado wireless com touchpad integrado', 200.00, 2),
('Caixa de Som Bluetooth JBL GO 3', 'Caixa de som portátil com Bluetooth', 150.00, 2),
('Impressora Multifuncional HP DeskJet 2776', 'Impressora multifuncional com Wi-Fi', 400.00, 1),
('Apc Back-UPS BZ600-BR 600VA', 'No-break para proteção de equipamentos eletrônicos', 500.00, 1);

-- Inserindo dados na tabela 'estoque' ligados aos produtos
INSERT INTO estoque (produto_id, quantidade) VALUES
(1, 10),
(2, 30),
(3, 20),
(4, 15),
(5, 25),
(6, 40),
(7, 50),
(8, 5),
(9, 10),
(10, 20),
(11, 100),
(12, 50),
(13, 30),
(14, 40),
(15, 25),
(16, 30),
(17, 50),
(18, 60),
(19, 20),
(20, 15);

-- Exemplo de inserção de um pedido
INSERT INTO pedidos (cliente_nome, cliente_email, total, status)
VALUES ('João Silva', 'joao@gmail.com', 7000.00, 'pago');

-- Exemplo de inserção de uma venda para o pedido
INSERT INTO vendas (pedido_id, produto_id, quantidade, preco_unitario)
VALUES (1, 1, 2, 3500.00);

-- Atualizar o estoque após a venda
UPDATE estoque
SET quantidade = quantidade - 2
WHERE produto_id = 1;

-- Outro exemplo de inserção de pedido e venda
INSERT INTO pedidos (cliente_nome, cliente_email, total, status)
VALUES ('Maria Souza', 'maria@gmail.com', 500.00, 'pago');

INSERT INTO vendas (pedido_id, produto_id, quantidade, preco_unitario)
VALUES (2, 2, 2, 250.00);

-- Atualizar o estoque após a venda
UPDATE estoque
SET quantidade = quantidade - 2
WHERE produto_id = 2;
