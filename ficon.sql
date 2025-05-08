create database ficon;
use ficon;
create table usuario (
cod_usuario integer primary key,
email	varchar(20)  not null,
senha	varchar(11)	 not null,
nome	varchar(120)  not null,
idade	char(2)			not null
);
create table gastosfixos(
cod_gastosfixos integer primary key,
nome varchar(12),
valor decimal(5,2));
create table gastosvariados(
cod_gastosvariados integer primary key,
nome varchar(12),
valor decimal(5,2));
create table gastos(
cod_usuario integer primary key,
fixos decimal(5,2),
variados decimal(5,2));
create table saldo(
cod_saldo integer primary key,
saldoinicial decimal(5,2),
saldofinal decimal(5,2),
meta  decimal(5,2));

