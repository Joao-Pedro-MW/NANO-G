create database nano_g;

use nano_g;

create table usuario (
	nome 			int 			not null primary key  auto_increment,
    cpf 			varchar(15) 	not null,
    email 			varchar(200) 	not null,
    dt_nascimento 	date 			not null,
	telefone 		varchar(16) 	not null,
    tipo_usuario 	varchar(2) 		not null,
    dt_admissao 	date 			not null,
    flag_ativo		boolean 		not null,
    img_perfil		varchar(50)		not null    
);