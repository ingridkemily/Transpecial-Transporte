drop database if exists TransPecial;
create database TransPecial;
use TransPecial;

#BIT: 1= True / 2= False

create table Usuario (
id							int				auto_increment			primary key,
nome						varchar(55)		not null,
cpf							varchar(20)		not null				unique,
dataNasc					date			not null,
telefone					varchar(11)		not null,
acompanhante				int				not null				check(acompanhante < 2 and acompanhante >= 0), #BIT
cadeirante					int				not null				check(cadeirante < 2 and cadeirante >= 0), #BIT
enderecoRes					varchar(500) 	not null,
login						varchar(30)		not null				unique,	
senha						varchar(30)		not null
);

create table Administrador (
id							int				auto_increment			primary key,
nome						varchar(50)		not null,
cpf							varchar(20)		not null				unique,
telefone					varchar(11)		not null,
login						varchar(30)		not null				unique,	
senha						varchar(30)		not null
);

create table Viagens (
id							int				auto_increment			primary key,
idUsuario					int				not null				references Usuario(id),
enderecoEmbarque			varchar(50)		not null,
enderecoDesembarque			varchar(50)		not null,
horarioLocal				time			not null,
horarioRetorno				time			not null,
dataviagem					DATE			not null
);

create table Log_Viagens (
id							int				auto_increment			primary key,
idViagem					int				not null				references Viagens(id)
); 
    
# Procedure para criação de viagens
delimiter $
create procedure registrarViagem (
idUsuarioProc int,
enderecoEmbarqueProc varchar(200),
enderecoDesembarqueProc varchar(200),
horarioLocalProc time,
horarioRetornoProc time,
dataviagemProc DATE,
)
begin
    insert into Viagens(idUsuario, enderecoEmbarque, enderecoDesembarque, horarioLocal, horarioRetorno, dataviagem) values
    (idUsuarioProc, enderecoEmbarqueProc, enderecoDesembarqueProc, horarioLocalProc, horarioRetornoProc, dataviagemProc);
end$
delimiter ;

# Triggers para a tabela de log
delimiter $
create trigger log_viagens_update after update on Viagens
	for each row
	begin
		insert into log_Viagens(idViagem) values (old.id, user(), sysdate(), 'Update');
	end$
delimiter ;

delimiter $
create trigger log_viagens_delete after delete on Viagens
	for each row
	begin
		insert into log_Viagens(idViagem) values (old.id, user(), sysdate(), 'Delete');
	end$
delimiter ;

