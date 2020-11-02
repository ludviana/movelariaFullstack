create database if not exists moveis;
use moveis;

create table if not exists produtos(
idProduto int primary key not null auto_increment,
nome varchar(100),
descricao varchar(300),
preco decimal(8,2),
imagem varchar(300)
);

alter table produtos add column categoria varchar(100);


insert into produtos values 
(null,'guardaRoupa','Guarda-roupa 6 portas',2500.00,'../armarios/guarda2.jpg','Guarda-Roupas'),
(null,'guardaRoupa','Guarda-roupa solteiro',1800.00,'../armarios/guarda4.jpeg','Guarda-Roupas'),
(null,'guardaRoupa','Guarda-roupa portas de correr',2100.00,'../armarios/guarda3.jpg','Guarda-Roupas'),
(null,'cozinha','Cozinha completa',1450.00,'../armarios/cozinha.jpg','Cozinhas'),
(null,'cozinha','Cozinha completa',1200.00,'../armarios/cozinha2.png','Cozinhas'),
(null,'cozinha','Cozinha completa',1900.00,'../armarios/cozinha3.jpg','Cozinhas'),
(null,'painelTV','Painel de TV',987.00,'../armarios/home.jpg','Painel de TV'),
(null,'armarioAlto','Armario alto',784.00,'../armarios/armamulti.jpg','Armario Alto'),
(null,'armarioPequeno','Armario pequeno',698.00,'../armarios/armariopq.jpeg','Armario pequeno');

/*
insert into produtos values(null,'gabinete','gabinete muito bonito',200.00,'../armarios/armariopq.jpeg','Gabinete');
insert into produtos values(null,'guardaRoupa','Guarda-roupa 6 portas',2500.00,'../armarios/guarda2.jpg','Guarda-Roupas');
*/

create table if not exists pedidos(
idPedido int primary key not null auto_increment,
nomeCliente varchar(200),
endereco varchar(200),
telefone bigint(15),
nomeProduto varchar(100),
valorUnitario decimal(8,2),
quantidade int
);


create table if not exists comentarios(
id_comentarios int primary key not null auto_increment,
nome varchar(100),
genero varchar(15),
email varchar(200),
telefone int,
tipo varchar(30),
mensagem text
);



select*from comentarios;
select*from pedidos;
select*from produtos;
