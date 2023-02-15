create database lojaOnlineSkin;
use lojaOnlineSkin;



CREATE TABLE Tbl_Adm (
  idTbl_Adm INT(5)  NOT NULL  AUTO_INCREMENT,
  Nome_Registro VARCHAR(50)  NOT NULL  ,
  Codigo_Acesso INT(8)  NOT NULL  ,
PRIMARY KEY(idTbl_Adm));
SELECT*FROM tbl_adm;

insert into Tbl_Adm (Nome_Registro, Codigo_Acesso) values ('ana',12345);


CREATE TABLE tbl_Usuario (
  idtbl_Usuario INT(5) UNSIGNED  NOT NULL   AUTO_INCREMENT,
  nome VARCHAR(15)  NOT NULL  ,
  Sobrenome VARCHAR(45)  NOT NULL  ,
  Email VARCHAR(65)  NOT NULL ,
  Senha VARCHAR(35)  NOT NULL,
  Telefone INT(15)  NOT NULL ,
  PRIMARY KEY(idtbl_Usuario));
  ALTER TABLE `lojaonlineskin`.`tbl_Usuario` 
CHANGE COLUMN `Email` `Email` VARCHAR(255) NOT NULL ;


CREATE TABLE tbl_raridade (
  id_raridade INTEGER UNSIGNED  NOT NULL   AUTO_INCREMENT,
  Raridade VARCHAR (30)  NULL    ,
PRIMARY KEY(id_raridade));




CREATE TABLE tbl_camp (
  id_camp INT  NOT NULL   AUTO_INCREMENT,
  Nome VARCHAR (50)  NULL  ,
  Funcao VARCHAR (40) NULL  ,
  Lane VARCHAR (10) NULL    ,
PRIMARY KEY(id_camp));




CREATE TABLE tbl_skin (
  id_skin INT  NOT NULL  AUTO_INCREMENT,
  idcamp_FK INT  NOT NULL  ,
  idraridade_FK INTEGER UNSIGNED  NOT NULL  ,
  nome VARCHAR (100)   NOT NULL  ,
  preco DECIMAL (5,2)  NOT NULL  ,
  img VARCHAR (255)  NOT NULL  ,
  detalhe VARCHAR (80)  	NULL    ,
PRIMARY KEY(id_skin)  ,
INDEX tbl_skin_FKIndex1(idcamp_FK)  ,
INDEX tbl_skin_FKIndex2(idraridade_FK),
  FOREIGN KEY(idcamp_FK)
    REFERENCES tbl_camp(id_camp)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(idraridade_FK)
    REFERENCES tbl_raridade(id_raridade)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION);
      ALTER TABLE tbl_skin MODIFY COLUMN preco DECIMAL (6,2);

CREATE VIEW view_skin AS
SELECT 
s.id_skin as id_skin,
c.Nome as nome_camp,
r.Raridade as raridade,
s.nome as nome,
s.preco as preco,
s.img as img,
s.detalhe as detalhe
FROM tbl_skin as s INNER JOIN tbl_camp AS c ON s.idcamp_FK = c.id_camp INNER JOIN tbl_raridade as r on s.idraridade_FK = r.id_raridade;

DROP TABLE tbl_skin;


