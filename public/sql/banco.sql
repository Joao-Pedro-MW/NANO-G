CREATE SEQUENCE s_user_id START WITH 1 INCREMENT BY 1 NOCACHE NOCYCLE;
CREATE SEQUENCE s_item_id START WITH 1 INCREMENT BY 1 NOCACHE NOCYCLE;
CREATE SEQUENCE s_un_medida_id START WITH 1 INCREMENT BY 1 NOCACHE NOCYCLE;
CREATE SEQUENCE s_categoria_id START WITH 1 INCREMENT BY 1 NOCACHE NOCYCLE;
CREATE SEQUENCE s_lote_id START WITH 100 INCREMENT BY 1 NOCACHE NOCYCLE;

CREATE TABLE n_usuario (
 id_usuario       NUMBER          NOT NULL,
 nome             VARCHAR2(150)   NOT NULL,
 cpf              VARCHAR2(30)    NOT NULL,
 dt_nascimento    DATE            NOT NULL,
 tipo_usuario     VARCHAR2(2)     NOT NULL,
 flag_ativo       VARCHAR2(1)     NOT NULL,
 login            VARCHAR2(1)     NOT NULL,
 email            VARCHAR2(200)   NOT NULL,
 senha            VARCHAR2(200)   NOT NULL,
 create_date      DATETIME        NOT NULL,
 created_by       NUMBER          NOT NULL,
 last_updated_by  NUMBER          NOT NULL,
 last_update_date DATETIME        NOT NULL,
 CONSTRAINT pk_usuario PRIMARY KEY (id_usuario)
);


CREATE TABLE n_unidade_medida (
 id_unidade_medida  NUMBER          NOT NULL,
 unidade_nome       VARCHAR2(100)   NOT NULL,
 create_date        DATETIME        NOT NULL,
 created_by         NUMBER          NOT NULL,
 last_updated_by    NUMBER          NOT NULL,
 last_update_date   DATETIME        NOT NULL,
 CONSTRAINT pk_un_medida PRIMARY KEY (id_unidade_medida)
);


CREATE TABLE n_categoria (
 id_categoria       NUMBER          NOT NULL,
 categoria_nome     VARCHAR2(100)   NOT NULL,
 create_date        DATETIME        NOT NULL,
 created_by         NUMBER          NOT NULL,
 last_updated_by    NUMBER          NOT NULL,
 last_update_date   DATETIME        NOT NULL,
 CONSTRAINT pk_categoria PRIMARY KEY (id_categoria)
);


CREATE TABLE n_item (
 id_item          NUMBER          NOT NULL,
 item_nome        VARCHAR2(150)   NOT NULL,
 id_categoria     NUMBER          NOT NULL,
 id_un_medida     NUMBER          NOT NULL,
 create_date      DATETIME        NOT NULL,
 created_by       NUMBER          NOT NULL,
 last_updated_by  NUMBER          NOT NULL,
 last_update_date DATETIME        NOT NULL,
 CONSTRAINT pk_item PRIMARY KEY (id_item),
 CONSTRAINT fk_categoria FOREIGN KEY (id_categoria) REFERENCES n_categoria (id_categoria),
 CONSTRAINT fk_un_medida FOREIGN KEY (id_un_medida) REFERENCES n_unidade_medida (id_unidade_medida)
);


CREATE TABLE n_lote (
 id_lote          NUMBER          NOT NULL,
 id_item          NUMBER          NOT NULL,
 valor_item       NUMBER          NOT NULL,
 quantidade       NUMBER          NOT NULL,
 data_validade    DATE            NOT NULL,
 create_date      DATETIME        NOT NULL,
 created_by       NUMBER          NOT NULL,
 last_updated_by  NUMBER          NOT NULL,
 last_update_date DATETIME        NOT NULL,
 CONSTRAINT pk_lote PRIMARY KEY (id_lote),
 CONSTRAINT fk_item FOREIGN KEY (id_item) REFERENCES n_item (id_item)
);
