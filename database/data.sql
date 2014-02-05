/**
 * Modelagem do banco de dados sociopata
 *
 * @author  Thiago Braga <thiago@sociopata.org>
 */


/**
 * Seleciona o banco de dados beta
 */
USE sociopata;


/**
 * Desabilita a checagem por FOREIGN KEY
 * para realizar a exclusão de dados com segurança.
 */
SET FOREIGN_KEY_CHECKS = 0;


/**
 * Remove e insere dados na tabela albuns
 */
TRUNCATE albuns;
ALTER TABLE albuns AUTO_INCREMENT = 1;

INSERT INTO
    albuns (codigo, nome, info, ano, tipo_album, criado_em, situacao)
VALUES
    (1, 'Sociopata', 'EP com 3 músicas lançado em Dezembro de 2013, gravado e mixado no RMS Studio em Agudos - SP.', 2013, 2, '2013-11-11 04:04:00', 1);

/**
 * Remove e insere dados na tabela eventos
 */
TRUNCATE eventos;
ALTER TABLE eventos AUTO_INCREMENT = 1;

INSERT INTO
    eventos (codigo, nome, info, local, valor, data, criado_em, situacao)
VALUES
    (1, 'Dias de Um Futuro Passado', 'SOCIOPATA + ARTIGO DZ9? + AUTOBONECO', 'Casarão Petiscaria (Agudos-SP)', 8.00, '2013-02-02 22:30:00', '2013-02-01 22:30:00', 1),
    (2, 'Affliction Rock Fest 11', 'SOCIOPATA + PLAGUE REMAINS + FOME DO CÃO + METAL GEAR + HORROR SHOW', 'Jack Music Pub (Bauru-SP)', 0.00, '2013-03-10 16:00:00', '2013-03-10 16:00:00', 1),
    (3, 'Dopamina Music Fest I', 'SOCIOPATA + STONE COLD SUN', 'Exilio Art Pub (Bauru-SP)', 5.00, '2013-04-05 23:59:00', '2013-04-05 23:59:00', 1),
    (4, 'Dopamina Music Fest III', 'SOCIOPATA + STONE COLD SUN + NASTCUT', 'Exilio Art Pub (Bauru-SP)', 5.00, '2013-06-08 23:59:00', '2013-06-08 23:59:00', 1),
    (5, 'Underground Mental #2', 'SOCIOPATA + THE BAD MIND TEMPER + AUTOBONECO', 'Casa do Aran (Bauru-SP)', 3.00, '2013-06-23 15:00:00', '2013-06-23 15:00:00', 1),
    (6, 'Sunday Grind Madness', 'SOCIOPATA + HUTT + NASTCUT + D.C.H. + ABUSIVE', 'Jack Music Pub (Bauru-SP)', 5.00, '2013-07-21 16:00:00', '2013-07-21 16:00:00', 1),
    (7, 'Nonsense Nuclear Noise III', 'SOCIOPATA + INFRAMUNDO + VENTO NA CARA', 'Exilio Art Pub (Bauru-SP)', 5.00, '2013-08-24 23:59:00', '2013-08-24 23:59:00', 1),
    (8, 'Noisecore Fest XI', 'SOCIOPATA + CAD + STREET FEAR + D.O.S.', 'Jack Music Pub (Bauru-SP)', 7.00, '2013-09-22 16:00:00', '2013-09-22 16:00:00', 1),
    (9, 'Fck Off Fest', 'SOCIOPATA + NASTCUT + IMMORTUOS', 'Exilio Art Pub (Bauru-SP)', 5.00, '2013-10-04 23:59:00', '2013-10-04 23:59:00', 1),
    (10, 'Domingo Rock', 'SOCIOPATA + METROFIRE + ATACK SONORO + HELLSBURN', 'Arte & Bola Café (Araraquara-SP)', 10.00, '2013-10-06 18:30:00', '2013-10-06 18:30:00', 1),
    (11, '1º International Tattoo Convention', 'SOCIOPATA + ROMERO + OS PATRÕES', 'Pavilhão de Exposições (Barra Bonita-SP)', 0.00, '2013-12-08 18:30:00', '2013-12-08 18:30:00', 1),
    (12, 'Rock In Christmas II', 'SOCIOPATA + ANIMALS + DINOHORSE + MAIDE IN MAIDEN + SIMBIOZE + MARIA DA SEGUNDA DISTRAÇÃO + TORMENTAURUS', 'Praça Frederico Ozanan (Lins-SP)', 0.00, '2013-12-14 15:00:00', '2013-12-14 15:00:00', 1),
    (13, 'Nonsense Nuclear Noise', 'SOCIOPATA + ROMERO + IMMORTUOS', 'Exilio Art Pub (Bauru-SP)', 7.00, '2014-01-25 23:45:00', '2014-02-02 15:00:00', 1),
    (14, 'Bazar Cultural III', 'O bazar dará início as 11;00 hrs, com a seguinte programação:<br/>11:00 hrs - Bazar de roupas, acessórios e artesanatos, tudo acompanhado de boa música e barzinho no local.<br/>15:00 hrs- Show com a "Banda Acitsim"- Agudos<br/>16:30 hrs- Show com "Sociopata"- Bauru<br/>18:00 hrs - "Outro Núcleo de Espetacularidades<br/> Na entrada serão arrecadados alimentos e o que mais quiserem ajudar. Será destinado a casa abrigo Amorada!" - Bauru<br/>', 'Avenida João Paccola, 205 (Lençois Paulista-SP)', 0.00, '2014-02-09 11:00:00', '2014-02-02 15:00:00', 1);

/**
 * Remove e insere dados na tabela instrumentos
 */
TRUNCATE instrumentos;
ALTER TABLE instrumentos AUTO_INCREMENT = 1;

INSERT INTO
    instrumentos (codigo, nome, criado_em, situacao)
VALUES
    (1, 'Guitarra', '2013-11-11 04:04:00', 1),
    (2, 'Baixo', '2013-11-11 04:04:00', 1),
    (3, 'Bateria', '2013-11-11 04:04:00', 1),
    (4, 'Voz', '2013-11-11 04:04:00', 1),
    (5, 'Backing Vocal', '2013-11-11 04:04:00', 1);

/**
 * Remove e insere dados na tabela integrantes
 */
TRUNCATE integrantes;
ALTER TABLE integrantes AUTO_INCREMENT = 1;

INSERT INTO
    integrantes (codigo, nome, info, criado_em, situacao)
VALUES
    (1, 'Thiago Braga', 'Guitarrista, backing vocal, fundador e principal compositor, já participou de bandas como Dope Messias, Biochoque, No Name Band, e hoje integra Sociopata e Escape From the World.', '2013-11-11 04:04:00', 1),
    (2, 'Birão Spoldari', 'Baixista, backing vocal, fundador e compositor, participou da banda Running Amok entre 2002 e 2006, lançando uma demo contendo as músicas Evolução e Music.', '2013-11-11 04:04:00', 1),
    (3, 'Kleber Cabrera', 'Vocalista, letrista e fundador da banda, tocava na extinta banda Revel, lançando uma Demo entitulada. A banda já abriu o show das bandas Ratos de Porão, etc.', '2013-11-11 04:04:00', 1),
    (4, 'Gustavo Panurge', 'Baterista que integrou a banda em 2012, participando da gravação do primeiro EP da Sociopata em 2013 e também realizando diversos shows n mesmo ano. Tocava na banda Expiring de Thrash Metal nos anos 80 na região de Lins, a qual gravou...', '2013-11-11 04:04:00', 1),
    (5, 'Leopoldo Sanches', 'Guitarrista e compositor, entrou na banda no final de 2012 auxiliando nas composições e harmonias rente ao peso iminente da banda. Tocou nas bandas Buraco da Desgraça, Running Amok e atualmente toca baixo e canta na Artigo DZ9?, banda na qual já tocava antes mesmo da Sociopata.', '2013-11-11 04:04:00', 1),
    (6, 'Juninho Miguel', 'Baterista e fundador da banda. Atualmente é baterista da banda Artigo DZ9?, a qual toca desde antes do início da Sociopata e do projeto de Doom Metal nome da banda.', '2013-11-11 04:04:00', 0),
    (7, 'Maic Trash', 'Baterista que integrou a banda entre 2009 e 2010, realizando diversos shows pela região, inclusive gravando uma demo lançada somente online. Atualmente é baterista da banda Psicultura, a qual sempre tocou em paralelo com a Sociopata.', '2013-11-11 04:04:00', 0),
    (8, 'Gerson Sampaio', 'Baterista que integrou a Sociopata entre 2011 e 2012, realizando diversos shows pela região. Gerson já tocou em bandas como Stereo S/A e The Almighty Devildogs, entre outras bandas da região.', '2013-11-11 04:04:00', 0);

/**
 * Remove e insere dados na tabela integrantes_instrumentos
 */
TRUNCATE integrantes_instrumentos;
ALTER TABLE integrantes_instrumentos AUTO_INCREMENT = 1;

INSERT INTO
    integrantes_instrumentos (integrante, instrumento, situacao)
VALUES
    (1, 1, 1),
    (1, 5, 1),
    (2, 2, 1),
    (2, 5, 1),
    (3, 4, 1),
    (4, 3, 1),
    (5, 1, 1),
    (6, 3, 1),
    (7, 3, 1),
    (8, 3, 1);

/**
 * Remove e insere dados na tabela musicas
 */
TRUNCATE musicas;
ALTER TABLE musicas AUTO_INCREMENT = 1;

INSERT INTO
    musicas (codigo, nome, tamanho, letra, criado_em, situacao)
VALUES
    (1, 'Corpos', '02:30:00', '<p>O corpo mesmo mutilado<br/>É instrumento de evolução<br/>O corpo mesmo mutilado<br/>É instrumento de evolução</p><p>Corpos, santuário<br/>Corpos, oficina<br/>Corpos, bençãos<br/>Corpos, esconderijos</p><p>Corpos flagelados<br/>Corpos, ambulâncias<br/>Corpos, cárceres<br/>Corpos, expiação</p><p>Corpos<br/>Evolução<br/>Evolução</p>', '2013-11-11 04:04:00', 1),
    (2, 'Crianças', '02:30:00', '', '2013-11-11 04:04:00', 1),
    (3, 'Torre do Tempo', '02:30:00', '', '2013-11-11 04:04:00', 1),
    (4, 'Celebrar', '02:30:00', '', '2013-11-11 04:04:00', 1),
    (5, 'Coma', '02:30:00', '', '2013-11-11 04:04:00', 1),
    (6, 'Desinformação', '02:30:00', '', '2013-11-11 04:04:00', 1),
    (7, 'Em Dobro', '02:30:00', '', '2013-11-11 04:04:00', 1),
    (8, 'Espinhos', '02:30:00', '', '2013-11-11 04:04:00', 1),
    (9, 'Fumaça', '02:30:00', '', '2013-11-11 04:04:00', 1),
    (10, 'Indiferença', '02:30:00', '', '2013-11-11 04:04:00', 1),
    (11, 'Máscaras', '02:30:00', '', '2013-11-11 04:04:00', 1),
    (12, 'Pensamento', '02:30:00', '', '2013-11-11 04:04:00', 1),
    (13, 'Preserve', '02:30:00', '', '2013-11-11 04:04:00', 1),
    (14, 'Sociedade Pacífica', '02:30:00', '', '2013-11-11 04:04:00', 1),
    (15, 'Soluciona', '02:30:00', '', '2013-11-11 04:04:00', 1),
    (16, 'Última Hora', '02:30:00', '', '2013-11-11 04:04:00', 1),
    (17, 'Utopia', '02:30:00', '', '2013-11-11 04:04:00', 1),
    (18, 'Ventos da Liberdade', '02:30:00', '', '2013-11-11 04:04:00', 1);

/**
 * Remove e insere dados na tabela musicas_albuns
 */
TRUNCATE musicas_albuns;
ALTER TABLE musicas_albuns AUTO_INCREMENT = 1;

INSERT INTO
    musicas_albuns (musica, album, situacao)
VALUES
    (1, 1, 1),
    (2, 1, 1),
    (3, 1, 1);

/**
 * Remove e insere dados na tabela noticias
 */
TRUNCATE noticias;
ALTER TABLE noticias AUTO_INCREMENT = 1;

INSERT INTO
    noticias (codigo, nome, descricao, imagem, situacao)
VALUES
    (1, 'Lançamento do primeiro álbum', 'O debut autointitulado foi gravado e mixado entre novembro e dezembro de 2013 no RMS Studio em Agudos - SP e lançado oficialmente em 6 de dezembro de 2013. Para adquirir, acesse a página de <a href="/contato">Contato</a>.', 'albuns/44b8803095fdc5b06f3a46efee354cb74e93cbd8-small.jpg', 1);

/**
 * Remove e insere dados na tabela tipos_albuns
 */
TRUNCATE tipos_albuns;
ALTER TABLE tipos_albuns AUTO_INCREMENT = 1;

INSERT INTO
    tipos_albuns (codigo, nome, situacao)
VALUES
    (1, 'CD', 1),
    (2, 'EP', 1),
    (3, 'Compilação', 1),
    (4, 'Ao Vivo', 1),
    (5, 'DVD', 1),
    (6, 'LP', 1),
    (7, 'MP3', 1);

/**
 * Remove e insere dados na tabela usuarios
 */
TRUNCATE usuarios;
ALTER TABLE usuarios AUTO_INCREMENT = 1;

INSERT INTO
    usuarios (codigo, nome, login, senha, email, criado_em, editado_em, situacao)
VALUES
    (1, 'Thiago Braga', 'thiago.braga', '90a82750d7cf78e7750d75fb2ca10c65', 'thiago@sociopata.org', '2013-03-23 02:59:40', '2013-03-23 02:59:40', 1),
    (2, 'Birão Spoldari', 'birao.spoldari', '8cfd7d1dec7896c697f401a057625ab4', 'birao@sociopata.org', '2013-03-23 02:59:40', '2013-03-23 02:59:40', 1),
    (3, 'Kleber Cabrera', 'kleber.cabrera', '8cfd7d1dec7896c697f401a057625ab4', 'kleber@sociopata.org', '2013-03-23 02:59:40', '2013-03-23 02:59:40', 1),
    (4, 'Leo Sanches', 'leo.sanches', '8cfd7d1dec7896c697f401a057625ab4', 'leo@sociopata.org', '2013-03-23 02:59:40', '2013-03-23 02:59:40', 1),
    (5, 'Gustavo Panurge', 'gustavo.panurge', '8cfd7d1dec7896c697f401a057625ab4', 'gustavo@sociopata.org', '2013-03-23 02:59:40', '2013-03-23 02:59:40', 1);


SET FOREIGN_KEY_CHECKS = 1;
