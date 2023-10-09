CREATE TABLE n_usuario (
    id_usuario      int             not null,
    nome            varchar2(150)   not null,
    dt_nascimento   date            not null,
    tipo_usuario    varchar2(2)     not null,
    flag_ativo      varchar2(1)     not null,
    user_login      varchar2(100)   not null,
    senha           varchar2(50)    not null,
    CONSTRAINT pk_usuario PRIMARY KEY (id_usuario)
);


CREATE TABLE n_item (
    id_item         integer         not null,
    item_nome       varchar2(150)   not null,
    quantidade      integer         not null,
    id_categoria    integer         not null,
    id_un_medida    integer         not null,
    CONSTRAINT pk_item PRIMARY KEY (id_item),
    CONSTRAINT fk_categoria
        FOREIGN KEY (id_categoria) REFERENCES n_categoria(id_categoria),
    CONSTRAINT fk_un_medida
        FOREIGN KEY (id_un_medida) REFERENCES n_unidade_medida(id_unidade_medida)
);

CREATE TABLE n_unidade_medida (
    id_unidade_medida   integer not null,
    unidade_nome        varchar2(100) not null,
    CONSTRAINT pk_un_medida PRIMARY KEY (id_unidade_medida)
);


CREATE TABLE n_categoria (
    id_categoria    integer not null,
    categoria_nome  varchar2(100),
    CONSTRAINT pk_categoria PRIMARY KEY (id_categoria)
);


CREATE TABLE n_lote (
    id_lote         integer not null,
    id_item         integer not null,
    data_validade   date    not null,
    CONSTRAINT pk_lote PRIMARY KEY (id_lote),
    CONSTRAINT fk_item
        FOREIGN KEY (id_item) REFERENCES n_item(id_item)
);