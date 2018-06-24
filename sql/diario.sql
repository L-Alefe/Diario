CREATE SCHEMA IF NOT EXISTS diarioLemu;
USE diarioLemu;

CREATE TABLE IF NOT EXISTS usuario(
	email VARCHAR(255) NOT NULL,
	senha VARCHAR(255) NOT NULL,
	id INT AUTO_INCREMENT,
	PRIMARY KEY(id)
);

INSERT INTO usuario (email, senha) VALUES("lemuelalefe.y@gmail.com", "queridoLemu");

CREATE TABLE IF NOT EXISTS menuSobreMim(
	titulo VARCHAR(255) NOT NULL,
	itemMenu1 VARCHAR(255) NOT NULL,
	itemMenu2 VARCHAR(255) NOT NULL,
	itemMenu3 VARCHAR(255) NOT NULL,
	id INT AUTO_INCREMENT,
	PRIMARY KEY(id)
);

INSERT INTO menuSobreMim (titulo, itemMenu1, itemMenu2, itemMenu3) VALUES("MENU","Programar","Basquete","Academia");

CREATE TABLE IF NOT EXISTS apresentacao(
	nome VARCHAR(255) NOT NULL,
	funcao VARCHAR(255) NOT NULL,
	descricao VARCHAR(255) NOT NULL,
	img LONGBLOB,
	id INT AUTO_INCREMENT,
	PRIMARY KEY(id)
);

INSERT INTO apresentacao (nome, funcao, descricao) VALUES("Lemuel Álefe","Full stack developer","Olá a todos. Confira aqui no meu diário online os acontecimentos destes três anos passados na E.E.E.P. Paulo Petrola.");

CREATE TABLE IF NOT EXISTS primeiroFazer(
	pergunta VARCHAR(255) NOT NULL,
	euFaco VARCHAR(255) NOT NULL,
	ligUm VARCHAR(255) NOT NULL,
	ligDois VARCHAR(255) NOT NULL,
	ligTres VARCHAR(255) NOT NULL,
	descricao VARCHAR(255) NOT NULL,
	img LONGBLOB,
	id INT AUTO_INCREMENT,
	PRIMARY KEY(id)
);

INSERT INTO primeiroFazer (pergunta, euFaco, ligUm, ligDois, ligTres, descricao) VALUES("O que faço no meu tempo livre?","Programar minhas linguagens preferidas...","PHP", "Python", "Java Script", "Tenho o objetivo de me especializar na área de programação de desenvolvimento!");

CREATE TABLE IF NOT EXISTS segundoFazer(
	euFaco VARCHAR(255) NOT NULL,
	descricao VARCHAR(255) NOT NULL,
	img LONGBLOB,
	img1 LONGBLOB,
	id INT AUTO_INCREMENT,
	PRIMARY KEY(id)
);

INSERT INTO segundoFazer (euFaco, descricao) VALUES("Treinar basquete...","Faço parte do time escolar do PP! Por isso eu sempre treino basquete quando posso para que assim eu atinja um alto nível de esporte e consiga fazer um bom jogo no interclasse.");

CREATE TABLE IF NOT EXISTS terceiroFazer(
	euFaco VARCHAR(255) NOT NULL,
	descricao VARCHAR(255) NOT NULL,
	img LONGBLOB,
	img1 LONGBLOB,
	id INT AUTO_INCREMENT,
	PRIMARY KEY(id)
);

INSERT INTO terceiroFazer (euFaco, descricao) VALUES("Academia...","Nesse ano de 2018, decidi começar a ir para a academia como um novo hobby... Adademia Himpérium.");

CREATE TABLE IF NOT EXISTS histo1(
	titulo VARCHAR(255) NOT NULL,
	subTitulo VARCHAR(255) NOT NULL,
	descricao VARCHAR(255) NOT NULL,
	img LONGBLOB,
	id INT AUTO_INCREMENT,
	PRIMARY KEY(id)
);

INSERT INTO histo1 (titulo, subTitulo, descricao) VALUES("Adaptação no PP", "Primeira prova do curso técnico", "No início do ano de 2016, fazia eu o 1° ano. Lembro como se fosse hoje [...] A primeira prova do curso técnico em informática na disciplina de Informática básica. Era um dia chuvoso, acinzentado; fazia muito frio no auditório da escola.");

CREATE TABLE IF NOT EXISTS histo2(
	titulo VARCHAR(255) NOT NULL,
	subTitulo VARCHAR(255) NOT NULL,
	descricao VARCHAR(255) NOT NULL,
	img LONGBLOB,
	id INT AUTO_INCREMENT,
	PRIMARY KEY(id)
);

INSERT INTO histo2 (titulo, subTitulo, descricao) VALUES("Festival de dança 2016", "Nossos primeiros ensaios..", "Não tivemos muitas dificuldades de nos inturmarmos e, logo depois que soubemos que iria ocorrer o festival de dança no final do ano letivo, começamos a ensaiar constantemente para fazermos uma boa apresentação!");

CREATE TABLE IF NOT EXISTS histo3(
	titulo VARCHAR(255) NOT NULL,
	subTitulo VARCHAR(255) NOT NULL,
	descricao VARCHAR(255) NOT NULL,
	img LONGBLOB,
	id INT AUTO_INCREMENT,
	PRIMARY KEY(id)
);

INSERT INTO histo3 (titulo, subTitulo, descricao) VALUES("Interclasse 2017", "Meu primeiro interclasse PP", "Não participei do interclasse 2016 por alguns motivos específicos. Porém no ano seguinte, eu participei e joguei as seguintes modalidades: basquete, handball, voleyball e carimba. Infelizmente não conseguimos ganhar em nenhuma modalidade [kkk].");

CREATE TABLE IF NOT EXISTS histo4(
	titulo VARCHAR(255) NOT NULL,
	subTitulo VARCHAR(255) NOT NULL,
	descricao VARCHAR(255) NOT NULL,
	img LONGBLOB,
	id INT AUTO_INCREMENT,
	PRIMARY KEY(id)
);

INSERT INTO histo4 (titulo, subTitulo, descricao) VALUES("Acolhida 2018", "Essa realmente marcou..", "Participei das acolhidas 2017 e 2018, sendo assim uma honra ter colaborada para fazer a escola ser quem ela é, uma escola diferenciada devido a esse projeto tão maravilhoso de recepção dos novatos dos 1° anos.. E nesse ano a colhida realmente me marcou.");
