CREATE DATABASE bd_lojinha2000;
USE bd_lojinha2000;

CREATE TABLE tbCliente(
	codcliente INT PRIMARY KEY AUTO_INCREMENT,
	cliente VARCHAR(90) NOT NULL,
	cpf INT,
	codvendedor INT
);

CREATE TABLE tbVendedor(
	codvend INT PRIMARY KEY AUTO_INCREMENT, -- int auto_increment (em teoria o que estaria errado aqui seria o pk, fora isso apenas int e auto_increment, se precisar eu altero depois)
    vendedor VARCHAR(90) -- varchar (90)
);

alter table tbCliente add
foreign key(codcliente)
references
tbvendedor(codvend);

insert into tbVendedor(vendedor)values('Lucas');

Select * from tbVendedor;
