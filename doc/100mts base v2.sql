-- Todas as interatividades tem um peso (Quanto mais interatividade mais se ganha)
-- Utilizando o PadraoCakePHP (Nomes das tabelas em plural e underscore com id)

-- Apenas para o Login
CREATE TABLE users (id INTEGER PRIMARY KEY, username TEXT, password TEXT, role TEXT);

-- Perfil atual do jogador
CREATE TABLE usuarios (id INTEGER, login TEXT, nome TEXT, senha TEXT, score NUMERIC, velocidade_media NUMERIC, data_hora_jogada TEXT, tipo_categoria NUMERIC, tipo_tennis NUMERIC, tipo_shorts NUMERIC, tipo_camisa NUMERIC);

-- Historico (No final de cada jogada essa tabela deverá ser atualizada)
-- Historico de jogadas
CREATE TABLE usuario_historicos (id INTEGER PRIMARY KEY, usuario_id INTEGER, data_hora_jogada TEXT, score NUMERIC, velocidade_media NUMERIC, tipo_categoria NUMERIC, tipo_tennis NUMERIC, tipo_shorts NUMERIC, tipo_camisas NUMERIC);

CREATE TABLE interatividades (id INTEGER PRIMARY KEY, login_origem TEXT, login_dest TEXT, data TEXT, tipo_interatividade NUMERIC, peso NUMERIC);
CREATE TABLE itens (id INTEGER PRIMARY KEY, valor NUMERIC, data NUMERIC, tipo_categoria NUMERIC, tipo_tennis NUMERIC, tipo_shorts NUMERIC, tipo_camisa NUMERIC);
CREATE TABLE tipo_camisas (id INTEGER PRIMARY KEY, descricao TEXT, peso NUMERIC);
CREATE TABLE tipo_categorias (id INTEGER PRIMARY KEY, descricao TEXT, peso NUMERIC);
CREATE TABLE tipo_interatividades (id INTEGER PRIMARY KEY, descricao TEXT);
CREATE TABLE tipo_shorts (id INTEGER PRIMARY KEY, descricao TEXT, peso NUMERIC);
CREATE TABLE tipo_tennis (id INTEGER PRIMARY KEY, descricao TEXT, peso NUMERIC);

CREATE TABLE usuario_itens (usuario_id NUMERIC, item_id NUMERIC);

CREATE INDEX idx_usuarios ON usuarios(login ASC);

CREATE INDEX idx_categorias ON tipo_categorias(id ASC);
CREATE INDEX idx_historicos ON usuario_historicos(login ASC);
CREATE INDEX idx_interatividades ON interatividades(login_origem ASC);
CREATE INDEX idx_interatividades_dest ON interatividades(login_dest ASC);
CREATE INDEX idx_itens ON itens(id ASC);
CREATE INDEX idx_iteratividades_tp ON tipo_interatividades(id ASC);
CREATE INDEX idx_shorts ON tipo_shorts(id ASC);
CREATE INDEX idx_tennis ON tipo_tennis(id ASC);
CREATE INDEX idx_uhistoricos ON usuario_historicos(usuario_id ASC);
CREATE INDEX idx_uitens ON usuario_itens(usuario_id ASC);


-- INSERTS --------------------------------------------------------------------
INSERT INTO usuarios VALUES (1, 'ADMIN', 'Administrador do sistema', 'admin', 0, 0, '2013-08-31 13:13:59', 1,1,1,1);
INSERT INTO usuarios VALUES (1, 'teste', 'Jogador TESTE do sistema', 'teste', 0, 0, '2013-08-31 13:13:59', 1,1,1,1);

INSERT INTO tipo_camisas VALUES (1, 'mike1', 1);
INSERT INTO tipo_camisas VALUES (2, 'mike2', 2);
INSERT INTO tipo_camisas VALUES (3, 'mike3', 3);
INSERT INTO tipo_camisas VALUES (4, 'adirdas1', 1);
INSERT INTO tipo_camisas VALUES (5, 'adirdas2', 2);
INSERT INTO tipo_camisas VALUES (6, 'adirdas3', 3);

INSERT INTO tipo_tennis VALUES (1, 'mike1', 1);
INSERT INTO tipo_tennis VALUES (2, 'mike2', 2);
INSERT INTO tipo_tennis VALUES (3, 'mike3', 3);
INSERT INTO tipo_tennis VALUES (4, 'adirdas1', 1);
INSERT INTO tipo_tennis VALUES (5, 'adirdas2', 2);
INSERT INTO tipo_tennis VALUES (6, 'adirdas3', 3);

INSERT INTO tipo_shorts VALUES (1, 'branco', 1);
INSERT INTO tipo_shorts VALUES (2, 'vermelho', 1);
INSERT INTO tipo_shorts VALUES (3, 'azul', 1);

INSERT INTO tipo_categorias VALUES (1, 'torcedor', 0);
INSERT INTO tipo_categorias VALUES (2, 'beginner', 1);
INSERT INTO tipo_categorias VALUES (3, 'standard', 2);
INSERT INTO tipo_categorias VALUES (4, 'professional', 3);



-- DateTime() = '2013-08-31 13:13:59'

