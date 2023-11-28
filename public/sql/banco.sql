/* DROP E ALTER APENAS PARA ANTIGAS IMPLEMENTAÇÕES */
DROP SEQUENCE s_un_medida_id;
DROP SEQUENCE s_categoria_id;
DROP SEQUENCE s_lote_id;
DROP SEQUENCE s_user_id;
DROP SEQUENCE s_item_id;
DROP TABLE N_USUARIO CASCADE CONSTRAINTS PURGE ;
DROP TABLE N_LOTE CASCADE CONSTRAINTS PURGE ;
DROP TABLE N_ITEM CASCADE CONSTRAINTS PURGE ;
DROP TABLE N_CATEGORIA CASCADE CONSTRAINTS PURGE ;
DROP TABLE N_UNIDADE_MEDIDA CASCADE CONSTRAINTS PURGE ;

CREATE SEQUENCE s_user_id START WITH 1 INCREMENT BY 1 NOCACHE NOCYCLE;
CREATE SEQUENCE s_item_id START WITH 1 INCREMENT BY 1 NOCACHE NOCYCLE;
CREATE SEQUENCE s_un_medida_id START WITH 1 INCREMENT BY 1 NOCACHE NOCYCLE;
CREATE SEQUENCE s_categoria_id START WITH 1 INCREMENT BY 1 NOCACHE NOCYCLE;
CREATE SEQUENCE s_lote_id START WITH 100 INCREMENT BY 1 NOCACHE NOCYCLE;


CREATE TABLE n_usuario (
                           id_usuario       NUMBER          NOT NULL,
                           nome             VARCHAR2(150)   NOT NULL,
                           cpf              VARCHAR2(30)    NOT NULL UNIQUE,
                           dt_nascimento    DATE            NOT NULL,
                           tipo_usuario     VARCHAR2(2)     NOT NULL,
                           flag_ativo       VARCHAR2(1)     NOT NULL,
                           login            VARCHAR2(1)     NOT NULL,
                           email            VARCHAR2(200)   NOT NULL UNIQUE,
                           senha            VARCHAR2(200)   NOT NULL,
                           create_date      TIMESTAMP       NOT NULL,
                           created_by       NUMBER          NOT NULL,
                           last_updated_by  NUMBER          NOT NULL,
                           last_update_date TIMESTAMP        NOT NULL,
                           CONSTRAINT pk_usuario PRIMARY KEY (id_usuario)
);
CREATE TABLE n_unidade_medida (
                                  id_unidade_medida  NUMBER          NOT NULL,
                                  unidade_nome       VARCHAR2(100)   NOT NULL,
                                  create_date        TIMESTAMP        NOT NULL,
                                  created_by         NUMBER          NOT NULL,
                                  last_updated_by    NUMBER          NOT NULL,
                                  last_update_date   TIMESTAMP        NOT NULL,
                                  CONSTRAINT pk_un_medida PRIMARY KEY (id_unidade_medida)
);


CREATE TABLE n_categoria (
                             id_categoria       NUMBER          NOT NULL,
                             categoria_nome     VARCHAR2(100)   NOT NULL,
                             create_date        TIMESTAMP        NOT NULL,
                             created_by         NUMBER          NOT NULL,
                             last_updated_by    NUMBER          NOT NULL,
                             last_update_date   TIMESTAMP        NOT NULL,
                             CONSTRAINT pk_categoria PRIMARY KEY (id_categoria)
);

CREATE TABLE n_item (

                        id_item          NUMBER          NOT NULL,
                        item_nome        VARCHAR2(150)   NOT NULL,
                        id_categoria     NUMBER          NOT NULL,
                        id_un_medida     NUMBER          NOT NULL,
                        create_date      TIMESTAMP        NOT NULL,
                        created_by       NUMBER          NOT NULL,
                        last_updated_by  NUMBER          NOT NULL,
                        last_update_date TIMESTAMP       NOT NULL,
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
                        create_date      TIMESTAMP        NOT NULL,
                        created_by       NUMBER          NOT NULL,
                        last_updated_by  NUMBER          NOT NULL,
                        last_update_date TIMESTAMP        NOT NULL,
                        CONSTRAINT pk_lote PRIMARY KEY (id_lote),
                        CONSTRAINT fk_item FOREIGN KEY (id_item) REFERENCES n_item (id_item)
);

INSERT INTO n_usuario VALUES (
                                 s_user_id.nextval,'Admin NanoG','9999999999',TO_DATE('1990-01-01', 'YYYY-MM-DD'),'AD','1','0','admin@nanog.com.br','$argon2id$v=19$m=65536,t=4,p=1$Yk11RjlGUGMxaDM3SlZyOA$J0dr0G/2xpzqvsv+4ezlcKXobxJ512lny9Ee/Waxs70',SYSDATE,1,1,SYSDATE
                             );
INSERT ALL
    INTO N_CATEGORIA VALUES (1, 'Materia Prima',SYSDATE,1,1,SYSDATE)
INTO N_CATEGORIA VALUES (2, 'Produto Final',SYSDATE,1,1,SYSDATE)
INTO N_CATEGORIA VALUES (3, 'Embalagem',SYSDATE,1,1,SYSDATE)
SELECT 1 FROM dual;

INSERT ALL
    INTO n_unidade_medida VALUES(1,'Kg (Quilogramas)',SYSDATE,1,1,SYSDATE)
INTO n_unidade_medida VALUES(2,'g (Gramas)',SYSDATE,1,1,SYSDATE)
INTO n_unidade_medida VALUES(3,'Un (Unidades)',SYSDATE,1,1,SYSDATE)
INTO n_unidade_medida VALUES(4,'PCT (Pacotes)',SYSDATE,1,1,SYSDATE)
INTO n_unidade_medida VALUES(5,'L (Litros)',SYSDATE,1,1,SYSDATE)
SELECT 1 FROM dual;

COMMIT;