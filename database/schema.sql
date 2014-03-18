--
-- Banco de dados: sociopata
--
DROP DATABASE IF EXISTS sociopata;
CREATE DATABASE sociopata
    CHARACTER SET utf8
    DEFAULT CHARACTER SET utf8
    COLLATE utf8_unicode_ci
    DEFAULT COLLATE utf8_unicode_ci;

USE sociopata;

--
-- Estrutura para tabela albuns
--
DROP TABLE IF EXISTS albuns;
CREATE TABLE IF NOT EXISTS albuns (
    codigo      TINYINT(3)   NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome        VARCHAR(255) NOT NULL,
    info        TEXT         NOT NULL,
    ano         YEAR(4)      NOT NULL,
    tipo_album  TINYINT(3)   NOT NULL,
    criado_em   TIMESTAMP    NOT NULL,
    situacao    BIT(1)       NOT NULL
)
ENGINE InnoDB
DEFAULT CHARACTER SET utf8
COLLATE utf8_unicode_ci
COMMENT 'Discografia incluindo EPs, CDs, demos e compilações da Sociopata.';

--
-- Estrutura para tabela eventos
--
DROP TABLE IF EXISTS eventos;
CREATE TABLE IF NOT EXISTS eventos (
    codigo     TINYINT(3)   NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome       VARCHAR(255) NOT NULL,
    info       TEXT         NOT NULL,
    local      VARCHAR(255) NOT NULL,
    valor      DECIMAL(5,2) NOT NULL,
    data       TIMESTAMP    NOT NULL,
    criado_em  TIMESTAMP    NOT NULL,
    situacao   BIT(1)       NOT NULL
)
ENGINE InnoDB
DEFAULT CHARACTER SET utf8
COLLATE utf8_unicode_ci
COMMENT 'Agenda de eventos da Sociopata.';

--
-- Estrutura para tabela informacoes
--
DROP TABLE IF EXISTS informacoes;
CREATE TABLE IF NOT EXISTS informacoes (
    codigo     TINYINT(3)   NOT NULL AUTO_INCREMENT PRIMARY KEY,
    biografia  TEXT         NOT NULL,
    situacao   BIT(1)       NOT NULL
)
ENGINE InnoDB
DEFAULT CHARACTER SET utf8
COLLATE utf8_unicode_ci
COMMENT 'Informações gerais da banda como release, influências, gênero, etc.';

--
-- Estrutura para tabela instrumentos
--
DROP TABLE IF EXISTS instrumentos;
CREATE TABLE IF NOT EXISTS instrumentos (
    codigo     TINYINT(3)   NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome       VARCHAR(255) NOT NULL,
    criado_em  TIMESTAMP    NOT NULL,
    situacao   BIT(1)       NOT NULL
)
ENGINE InnoDB
DEFAULT CHARACTER SET utf8
COLLATE utf8_unicode_ci
COMMENT 'Instrumentos utilizados pela banda.';

--
-- Estrutura para tabela integrantes
--
DROP TABLE IF EXISTS integrantes;
CREATE TABLE IF NOT EXISTS integrantes (
    codigo     TINYINT(3)   NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome       VARCHAR(255) NOT NULL,
    info       TEXT         NOT NULL,
    criado_em  TIMESTAMP    NOT NULL,
    situacao   BIT(1)       NOT NULL
)
ENGINE InnoDB
DEFAULT CHARACTER SET utf8
COLLATE utf8_unicode_ci
COMMENT 'Integrantes da Sociopata.';

--
-- Estrutura para tabela integrantes_instrumentos
--
DROP TABLE IF EXISTS integrantes_instrumentos;
CREATE TABLE IF NOT EXISTS integrantes_instrumentos (
    integrante   TINYINT(3) NOT NULL,
    instrumento  TINYINT(3) NOT NULL,
    situacao     BIT(1)     NOT NULL
)
ENGINE InnoDB
DEFAULT CHARACTER SET utf8
COLLATE utf8_unicode_ci
COMMENT 'Instrumentos utilizados pela banda.';

--
-- Estrutura para tabela musicas
--
DROP TABLE IF EXISTS musicas;
CREATE TABLE IF NOT EXISTS musicas (
    codigo     TINYINT(3)   NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome       VARCHAR(255) NOT NULL,
    tamanho    TIME         NOT NULL,
    letra      TEXT         NOT NULL,
    criado_em  TIMESTAMP    NOT NULL,
    situacao   BIT(1)       NOT NULL
)
ENGINE InnoDB
DEFAULT CHARACTER SET utf8
COLLATE utf8_unicode_ci
COMMENT 'Registro de todas as músicas e letras da Sociopata.';

--
-- Estrutura para tabela musicas_albuns
--
DROP TABLE IF EXISTS musicas_albuns;
CREATE TABLE IF NOT EXISTS musicas_albuns (
    musica    TINYINT(3) NOT NULL,
    album     TINYINT(3) NOT NULL,
    situacao  BIT(1)     NOT NULL
)
ENGINE InnoDB
DEFAULT CHARACTER SET utf8
COLLATE utf8_unicode_ci
COMMENT 'Relacionamento entre músicas e álbuns. A ordem salva no banco para cada álbum é a própria ordem do CD.';

--
-- Estrutura para tabela noticias
--
DROP TABLE IF EXISTS noticias;
CREATE TABLE IF NOT EXISTS noticias (
    codigo     TINYINT(3)   NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome       VARCHAR(255) NOT NULL,
    descricao  TEXT         NOT NULL,
    imagem     VARCHAR(64)  NOT NULL,
    situacao   BIT(1)       NOT NULL
)
ENGINE InnoDB
DEFAULT CHARACTER SET utf8
COLLATE utf8_unicode_ci
COMMENT 'Notícias e destaques.';

--
-- Estrutura para tabela tipos_albuns
--
DROP TABLE IF EXISTS tipos_albuns;
CREATE TABLE IF NOT EXISTS tipos_albuns (
    codigo    TINYINT(3)   NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome      VARCHAR(255) NOT NULL,
    situacao  BIT(1)       NOT NULL
)
ENGINE InnoDB
DEFAULT CHARACTER SET utf8
COLLATE utf8_unicode_ci
COMMENT 'Tipos de álbuns lançados.';

--
-- Estrutura para tabela usuarios
--
DROP TABLE IF EXISTS usuarios;
CREATE TABLE IF NOT EXISTS usuarios (
    codigo      TINYINT(11)  NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome        VARCHAR(255) NOT NULL,
    login       VARCHAR(50)  NOT NULL UNIQUE KEY,
    senha       VARCHAR(32)  NOT NULL,
    email       VARCHAR(50)  NOT NULL,
    criado_em   TIMESTAMP    NOT NULL,
    editado_em  TIMESTAMP    NOT NULL,
    situacao    BIT(1)       NOT NULL
)
ENGINE InnoDB
DEFAULT CHARACTER SET utf8
COLLATE utf8_unicode_ci
COMMENT 'Usuários do sistema.';
