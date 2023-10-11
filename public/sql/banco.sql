CREATE SEQUENCE s_user_id START WITH 0 INCREMENT BY 1 NOCACHE NOCYCLE;
CREATE SEQUENCE s_item_id START WITH 0 INCREMENT BY 1 NOCACHE NOCYCLE;
CREATE SEQUENCE s_un_medida_id START WITH 0 INCREMENT BY 1 NOCACHE NOCYCLE;
CREATE SEQUENCE s_categoria_id START WITH 0 INCREMENT BY 1 NOCACHE NOCYCLE;
CREATE SEQUENCE s_lote_id START WITH 100 INCREMENT BY 1 NOCACHE NOCYCLE;

CREATE TABLE n_usuario (
    id_usuario      int             not null default s_user_id.nextval,
    nome            varchar2(150)   not null,
    cpf             varchar2(30)    not null,
    dt_nascimento   date            not null,
    tipo_usuario    varchar2(2)     not null,
    flag_ativo      varchar2(1)     not null,
    email           varchar2(200)   not null,
    senha           varchar2(50)    not null,
    CONSTRAINT pk_usuario PRIMARY KEY (id_usuario)
);


CREATE TABLE n_item (
    id_item         integer         not null default s_item_id.nextval,
    item_nome       varchar2(150)   not null,
    quantidade      integer         not null,
    id_categoria    integer         not null,
    id_un_medida    integer         not null,
    CONSTRAINT pk_item PRIMARY KEY (id_item),
    CONSTRAINT fk_categoria
        FOREIGN KEY (id_categoria) REFERENCES categoria(id_categoria),
    CONSTRAINT fk_un_medida
        FOREIGN KEY (id_un_medida) REFERENCES unidade_medida(id_unidade_medida)
);


CREATE TABLE n_unidade_medida (
    id_unidade_medida   integer not null default s_un_medida_id.nextval,
    unidade_nome        varchar2(100) not null,
    CONSTRAINT pk_un_medida PRIMARY KEY (id_unidade_medida)
);


CREATE TABLE n_categoria (
    id_categoria    integer not null default s_categoria_id.nextval,
    categoria_nome  varchar2(100),
    CONSTRAINT pk_categoria PRIMARY KEY (id_categoria)
);


CREATE TABLE n_lote (
    id_lote         integer not null default s_lote_id.nextval,
    id_item         integer not null,
    data_validade   date    not null,
    CONSTRAINT pk_lote PRIMARY KEY (id_lote),
    CONSTRAINT fk_item
        FOREIGN KEY (id_item) REFERENCES item(id_item)
);





