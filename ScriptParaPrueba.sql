create database db_examen;
use db_examen;
create table tblUsuario(
	IdUsuario int auto_increment,
    NombreUsuario nvarchar(100) not null,
    Contra nvarchar(100) not null,
    primary key(IdUsuario)
);
insert into tblUsuario(NombreUsuario,Contra)
values('Admin','1234');
delimiter //
CREATE DEFINER=`root`@`localhost` PROCEDURE `csp_Login`(
	in NombreUsuario_ nvarchar(100),
    in Contra_ nvarchar(100)
)
begin
	select count(*) as numUsuario from tblUsuario 
    where NombreUsuario = NombreUsuario_
    and Contra=Contra_;
end
//
create table tblProveedores(
	IdProveedor int auto_increment,
    Nombres nvarchar(100),
    Telefono int,
    Ciudad nvarchar(100),
    Descuento int,
    MetodoCobro nvarchar(100),
    primary key(IdProveedor)
);