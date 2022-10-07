create database BD_A;
use BD_A;

create table tbl_produto(
codigo int primary key auto_increment,
produto varchar(200),
preco decimal(6,2),
Qtd bigint,
cod_cad int,
foreign key (cod_cad) references tbl_categoria(cd_cad)
);

create table tbl_categoria(
cd_cad int primary key auto_increment,
categoria varchar(200)
);

create table tbl_compra(
NumeroCompra bigint primary key auto_increment,
Qtd bigint,
ValorTotal decimal(8,2),
ValorUnitario decimal(6,2),
codigoProd int,
foreign key (codigoProd) references tbl_produto(codigo)
);

insert into tbl_produto(produto, preco, Qtd, cod_cad)
				 values('Camisa Brasil', 280.00, 10, 1),
                       ('Corneta', 56.00, 10, 2),
                       ('Chapeu Brasil', 68.00, 20, 2),
                       ('Calça Agasalho', 220.00, 15, 1);
                       
insert into tbl_categoria(categoria)
                   values('Vestimenta'),
                         ('Acessorio');

delimiter $$
create procedure spInsertComp(vNomeProd varchar(200), vQtd bigint)
begin
	set @codigo = (select codigo from tbl_produto where produto = vNomeProd);
	set @ValorUnitario = (select preco from tbl_produto where produto = vNomeProd);
	insert into tbl_compra(NumeroCompra, Qtd, ValorTotal, ValorUnitario, codigoProd)
				    values(default, vQtd, vQtd * @ValorUnitario, @ValorUnitario, (select codigo from tbl_produto where produto = vNomeProd));
	update tbl_produto set Qtd = Qtd - vQtd where codigo = @codigo;
end $$

call spInsertComp('Camisa Brasil', 2);
call spInsertComp('Corneta', 5);
select * from tbl_produto;
select * from tbl_compra;

create view vw_prod as
select
	tbl_produto.codigo,
    tbl_produto.produto,
    tbl_produto.preco,
    tbl_produto.qtd,
    tbl_produto.cod_cad,
	tbl_categoria.cd_cad,
    tbl_categoria.categoria
from tbl_produto inner join tbl_categoria on tbl_produto.cod_cad = tbl_categoria.cd_cad;

create view vw_comp as
select
	tbl_compra.NumeroCompra,
    tbl_compra.Qtd,
    tbl_compra.ValorTotal,
    tbl_compra.ValorUnitario,
    tbl_compra.codigoProd,
    tbl_produto.codigo,
    tbl_produto.produto
from tbl_compra inner join tbl_produto on tbl_compra.codigoProd = tbl_produto.codigo;

select * from vw_prod;
select * from vw_comp;

select * from tbl_categoria;

create table tbl_usuario(
Codigo bigint primary key auto_increment,
Nome varchar(200) not null,
Login varchar(200) not null,
Senha bigint not null,
Acesso boolean default (0)
);

insert into tbl_usuario values(default, 'Felipe', 'felp@gmail.com', 123456, 1);

select * from tbl_usuario;

select cd_cad, categoria from tbl_categoria where  cd_cad = 1 union select cd_cad, categoria from tbl_categoria;

create table tbl_ProdHist like tbl_Produto;
alter table tbl_ProdHist add Ocorrencia varchar(20);
alter table tbl_ProdHist add Atualizacao datetime;
alter table tbl_ProdHist modify codigo int auto_increment;
alter table tbl_ProdHist drop primary key;
alter table tbl_ProdHist add primary key(codigo, Ocorrencia, Atualizacao);

Delimiter $$
create trigger trgInsertProd after insert on tbl_Produto
	for each row
begin
	insert into tbl_ProdHist set
		 codido = new.codigo,
		 produto = new.produto,
		 preco = new.preco,
		 Qtd = new.Qtd,
         cod_cad = new.cod.cad,
		 Ocorrencia = "Novo",
		 Atualizacao = current_timestamp();
end $$

delimiter $$
create trigger tgrUpdateProd after update on tbl_Produto
	for each row
begin
	insert into tbProdHist
		set  		 
         codido = new.codigo,
		 produto = new.produto,
		 preco = new.preco,
		 Qtd = new.Qtd,
         cod_cad = new.cod.cad,
		 Ocorrencia = "Atualizado",
		 Atualizacao = current_timestamp();
end$$

select * from tbl_prodhist;