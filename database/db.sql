create database crud_ifood;
use crud_ifood;

create table cliente (
    id int auto_increment primary key,
    nome varchar(100) not null,
    email varchar(100) not null,
    telefone varchar(100) not null,
    endereco varchar(100) not null
);

create table restaurante (
    id int auto_increment primary key, 
    nome varchar(100) not null,
    categoria varchar(100) not null,
    telefone varchar(100) not null,
    endereco varchar(100) not null
);

create table pedido (
    id int auto_increment primary key,
    data_pedido date not null, 
    valor float not null,
    status varchar(100) not null, 
    id_cliente int not null,
    id_restaurante int not null,

    foreign key (id_cliente) references cliente(id),
    foreign key (id_restaurante) references restaurante(id)
);