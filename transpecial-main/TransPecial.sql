-- Active: 1686679780716@@localhost@3306@transpecial
drop database if exists TransPecial;
create database TransPecial;
use TransPecial;

#BIT: 1= True / 2= False

create table Usuario (
    id                  int             auto_increment         primary key,
    nome                varchar(55)     not null,
    cpf                 varchar(11)     not null                unique,
    dataNasc            date            not null,
    telefone            varchar(11)     not null,
    acompanhante        varchar(5)      not null,
    cadeirante          varchar(5)      not null,
    enderecoRes         varchar(500)    not null,
    login               varchar(11)     not null                unique,
    senha               varchar(10)     not null
);

create table Administrador (
    id                  int             auto_increment         primary key,
    nome                varchar(50)     not null,
    cpf                 varchar(11)     not null                unique,
    telefone            varchar(11)     not null,
    login               varchar(11)     not null                unique,
    senha               varchar(10)     not null
);

create table Viagens (
    id                  int             auto_increment         primary key,
    idUsuario           int             not null                references Usuario(id),
    enderecoEmbarque    varchar(500)    not null,
    enderecoDesembarque varchar(500)    not null,
    horarioLocal        time            not null,
    horarioRetorno      time            not null,
    dataviagem          DATE            not null,
    causa               VARCHAR(20)     not null
);

create table Log_Viagens (
    id                  int             auto_increment         primary key,
    idViagem            int             not null                references Viagens(id)
); 
    
# Procedure para criação de viagens
delimiter $
create procedure registrarViagem (
    idUsuarioProc           int,
    enderecoEmbarqueProc    varchar(500),
    enderecoDesembarqueProc varchar(500),
    horarioLocalProc        time,
    horarioRetornoProc      time,
    dataviagemProc          DATE
)
begin
    insert into Viagens (idUsuario, enderecoEmbarque, enderecoDesembarque, horarioLocal, horarioRetorno, dataviagem, causa)
    values (idUsuarioProc, enderecoEmbarqueProc, enderecoDesembarqueProc, horarioLocalProc, horarioRetornoProc, dataviagemProc);
end$
delimiter ;

# Triggers para a tabela de log
delimiter $
create trigger log_viagens_update after update on Viagens
    for each row
    begin
        insert into Log_Viagens (idViagem) values (old.id);
    end$
delimiter ;

-- Insert 1 administrator
INSERT INTO Administrador (nome, cpf, telefone, login, senha)
VALUES ('John Doe', '12345678901', '1234567890', '12345678901', 'senha1');

-- Insert 1 user
INSERT INTO Usuario (nome, cpf, dataNasc, telefone, acompanhante, cadeirante, enderecoRes, login, senha)
VALUES ('Jane Smith', '98765432101', '1990-01-01', '9876543210', 'sim', 'não', 'rua das flores, 39, votorantim-sp', '98765432101', 'senha1');

-- Insert 1 trip
INSERT INTO Viagens (idUsuario, enderecoEmbarque, enderecoDesembarque, horarioLocal, horarioRetorno, dataviagem, causa)
VALUES (1, 'rua das flores, 39, votorantim-sp', 'rua das flores, 39, votorantim-sp', '09:00:00', '18:00:00', '2023-06-14', 'Causa1');


delimiter $
create trigger log_viagens_delete after delete on Viagens
    for each row
    begin
        insert into Log_Viagens (idViagem) values (old.id);
    end$
delimiter ;
