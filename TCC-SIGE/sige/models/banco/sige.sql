CREATE TABLE pertence (
idnum int,
idinfracao int
);

CREATE TABLE infracao (
qtd_pen varchar(16),
idinfracao int PRIMARY KEY,
razao varchar(30)
);

CREATE TABLE possui (
idinfracao int,
idpenalidade int,
FOREIGN KEY(idinfracao) REFERENCES infracao (idinfracao)
);

CREATE TABLE calendario (
horario varchar(18),
data date,
idcalendario int PRIMARY KEY,
idnum int
);

CREATE TABLE pedido (
horario varchar(18),
num_pedido varchar(24),
idpedido int PRIMARY KEY,
cpf bigint
);

CREATE TABLE cad_user (
sexo varchar(16),
data_nasc date,
nome varchar(40),
ocupacao varchar(36),
cpf bigint PRIMARY KEY,
curso varchar(36),
matricula varchar(32)
);

CREATE TABLE emprestimo (
nome varchar(40),
especificacao varchar(32),
descricao varchar(36),
historico varchar(32),
tipo_emp varchar(18),
idnum int PRIMARY KEY,
qtd varchar(16),
idpedido int,
FOREIGN KEY(idpedido) REFERENCES pedido (idpedido)
);

CREATE TABLE penalidade (
idpenalidade int PRIMARY KEY,
desc_pen varchar(36)
);

ALTER TABLE pertence ADD FOREIGN KEY(idnum) REFERENCES emprestimo (idnum);
ALTER TABLE pertence ADD FOREIGN KEY(idinfracao) REFERENCES infracao (idinfracao);
ALTER TABLE possui ADD FOREIGN KEY(idpenalidade) REFERENCES penalidade (idpenalidade);
ALTER TABLE calendario ADD FOREIGN KEY(idnum) REFERENCES emprestimo (idnum);
ALTER TABLE pedido ADD FOREIGN KEY(cpf) REFERENCES cad_user (cpf);
