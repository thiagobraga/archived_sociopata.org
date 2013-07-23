--
-- @file     database.sql
-- @project  Sociopata
-- @created  Thiago Braga <thibraga06@gmail.com>
-- @url      http://sociopata.org
--


SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;
SET TIME_ZONE = 'SYSTEM';
SET SQL_MODE = 'NO_AUTO_VALUE_ON_ZERO';


--
-- @database sociopata
-- @description Banco de dados da Sociopata.
-- @character-set utf8
--
CREATE DATABASE IF NOT EXISTS sociopata
DEFAULT CHARACTER SET utf8;
USE sociopata;


--
-- @table eventos
-- @description Agenda de eventos da Sociopata.
-- @primary_key id
--
DROP TABLE IF EXISTS eventos;
CREATE TABLE eventos (
  id TINYINT(3) NOT NULL AUTO_INCREMENT,
  nome VARCHAR(255) NOT NULL,
  imagem VARCHAR(50) NOT NULL,
  info VARCHAR(255) NOT NULL,
  descricao VARCHAR(3000) NOT NULL,
  local VARCHAR(255) NOT NULL,
  endereco VARCHAR(255) NOT NULL,
  facebook VARCHAR(50) NOT NULL,
  data DATETIME DEFAULT NULL,
  valor DECIMAL(5,2) NOT NULL,
  criado_em DATETIME NOT NULL,
  editado_em DATETIME NOT NULL,
  situacao CHAR(1) NOT NULL,
  PRIMARY KEY (id)
)
CHARACTER SET utf8
COLLATE utf8_general_ci
ENGINE = InnoDB
COMMENT = 'Agenda de eventos da Sociopata.';

INSERT INTO eventos VALUES
(1, 'Dias de Um Futuro Passado', 'dias-de-um-futuro-passado', '<p>SOCIOPATA + ARTIGO DZ9? + AUTOBONECO</p>', '<p>Volta aos palcos com nova formação e quatro novas pedradas. Repertório rápido, enérgico e pesado ao lado de duas grandes bandas do cenário independente. Compareça, nesse sábado dia 02/02/2013 às 22:30, no Casarão em Agudos-SP.</p><p>ARTIGO DZ9? - Lançando o CD "Liberte-se do Medo de Se Expressar"<br /><a href="//artigodz9.com" title="artigodz9.com"><i class="icon-site"></i></a> <a href="//facebook.com/artigo.dz9.hc" title="facebook.com/artigo.dz9.hc"><i class="icon-facebook"></i></a> <a href="//twitter.com/artigo_dz9" title="twitter.com/artigo_dz9"><i class="icon-twitter"></i></a> <a href="//myspace.com/artigodz9hc" title="myspace.com/artigodz9hc"><i class="icon-myspace"></i></a></p><p>AUTOBONECO - Comemorando 20 anos de Arte Exxxtrema Noise Multimídia<br /><a href="//autoboneco.org" title="autoboneco.org"><i class="icon-site"></i></a> <a href="//facebook.com/autoboneco" title="facebook.com/autoboneco"><i class="icon-facebook"></i></a> <a href="//myspace.com/bonequinho" title="myspace.com/bonequinho"><i class="icon-myspace"></i></a> <a href="//soundcloud.com/autoboneco" title="soundcloud.com/autoboneco"><i class="icon-soundcloud"></i></a></p><p>SOCIOPATA - De volta aos palcos com nova formação e músicas inéditas<br /><a href="//sociopata.org" title="sociopata.org"><i class="icon-site"></i></a> <a href="//facebook.com/sociopatabr" title="facebook.com/sociopatabr"><i class="icon-facebook"></i></a> <a href="//twitter.com/sociopatabr" title="twitter.com/sociopatabr"><i class="icon-twitter"></i></a> <a href="//myspace.com/sociopata" title="myspace.com/sociopata"><i class="icon-myspace"></i></a> <a href="//soundcloud.com/sociopata" title="soundcloud.com/sociopata"><i class="icon-soundcloud"></i></a></p>', 'Casarão Petiscaria', '<dd><a href="//facebook.com/casarao.pub.agudos">Casarão Petiscaria</a></dd><dd><a href="//goo.gl/maps/467gn">goo.gl/maps/467gn</a></dd><dd>Rua 13 de Maio, 198</dd><dd>Agudos-SP</dd>', 'fb.com/events/133878423439354', '2013-02-02 08:49:53', 8.00, '2013-02-02 08:49:53', 'A'),
(2, 'Affliction Rock Fest 11', 'affliction-rock-fest-11', '<p>SOCIOPATA + PLAGUE REMAINS + FOME DO CÃO + METAL GEAR + HORROR SHOW</p>', '<p>Voltando com força total o evento mensal Affliction Rock Fest, com a edição número 11, e também em novo local, dessa vez realizado no Jack Music Pub, no dia 10 de Março de 2013 das 16:00 às 22:00, evento esse "GRATUITO"! Isso mesmo, "GRATUITO"! Então sem desculpa galera... bora aproveitar o domingão curtindo boas bandas, reunir a galera.</p><p>METALGEAR - Garotos que não sabem brincar resolveram vomitar de suas entranhas perturbadas a única salvação possível para mentes perturbadas: fazer METAL! Assinado o contrato com o Mizofio, eles partiram para agressão e desde então, nunca mais voltaram... (Play - Troops of Doom - Sepultura)</p><p>HORROR SHOW - Heavy Metal/Power Metal. A Horror Show toca covers de Grave Digger e outras bandas de heavy metal.</p><p>SOCIOPATA - Voltando aos palcos do Jack Music Pub e do Affliction Rock Fest, com um metal cadenciado, progressivo e pesado. Porrada na orelha.<br /><a href="//sociopata.org" title="sociopata.org"><i class="icon-site"></i></a> <a href="//facebook.com/sociopatabr" title="facebook.com/sociopatabr"><i class="icon-facebook"></i></a> <a href="//twitter.com/sociopatabr" title="twitter.com/sociopatabr"><i class="icon-twitter"></i></a> <a href="//myspace.com/sociopata" title="myspace.com/sociopata"><i class="icon-myspace"></i></a> <a href="//soundcloud.com/sociopata" title="soundcloud.com/sociopata"><i class="icon-soundcloud"></i></a></p><p>PLAGUE REMAINS - Meninos problemáticos vagando a procura de perigo e destruição enxergaram um meio possível de criar caos abundante e extremo: fazer METAL! Assinado o contrato com o Cramunhão, eles partiram para a anarquização e desde então, não se ouviu mais falar sobre eles... (Play - Postmortem - Slayer)<br /><a href="//facebook.com/plagueremains" title="facebook.com/plagueremains"><i class="icon-facebook"></i></a> <a href="//myspace.com/plagueremains" title="myspace.com/plagueremains"><i class="icon-myspace"></i></a></p><p>FOME DO CÃO - (Raimundos Tributo) - Mulecada cabrera da peste, dexa a cambada arretada pur demais, que o facão come solto nas roda desse funk baile funk do capeta! Ôôôxxxxx bixim, dexe dessa prosa abestada que isso num é Roque... e eu quero é Roque mininu! Roque pru cacete du delegado! Eitcha diaxu!<br /><a href="//facebook.com/bandafomedocao" title="facebook.com/bandafomedocao"><i class="icon-facebook"></i></a></p>', 'Jack Music Pub', '<dd><a href="//facebook.com/JackMusicPub">Jack Music Pub</a></dd><dd><a href="//goo.gl/maps/XHN6i">goo.gl/maps/XHN6i</a></dd><dd>Av. Duque de Caxias, 8-56</dd><dd>Bauru-SP</dd>', 'fb.com/events/491617427563924', '2013-03-10 08:49:53', 0.00, '2013-02-20 08:49:53', 'A'),
(3, 'Dopamina Music Fest I', 'dopamina-music-fest-I', '<p>SOCIOPATA + STONE COLD SUN</p>', '<p>Na ressonância profunda de cada universo, rege uma orquestra própria de aflições, confissões e ações que fazem existir, ou não, aquilo que você é - na natureza nada se cria, tudo se transforma? Então vamos transformar até transtornar e deformar as estruturas do Exilio ArtPub, bizarramente localizado na av. Duque de Caxias 10-26, e que apresentara os conjuntos dantescos de musicalidade autoralmente caótica, de nosso querido interior paulistano:</p><p>STONE COLD SUN - Nos longíquos e oniricos templos dos desertos verdes da cidade lanche, quatro mentes (in)sanas despertaram seu elefante branco, furioso e visceral, na pegada StonerRockMetal que constrói sua essência criativa. Peso musical transcendental, para te levar a um mundo de ódio, melancolia e glória - Salvador Dali + Black Sabbath + Herman Hesse<br /><a href="//facebook.com/StoneColdSunOficial" title="facebook.com/StoneColdSunOficial"><i class="icon-facebook"></i></a> <a href="//soundcloud.com/stone-cold-sun" title="soundcloud.com/stone-cold-sun"><i class="icon-soundcloud"></i></a></p><p>SOCIOPATA - O velho e bom mundo cão cria tanto a crença quanto a desgraça. Nesta matrix sem fim de culpa e medo, a velha escola TrashPunkCore bauruense volta para ensinar pra garotada como se deve mandar tomar no cu de acordo, com garganta e verbo pro contra, peso e cadência nas cordas, frenesi e porrada nas baquetas - Banksy + Black Flag + Dostoievisk<br /><a href="//sociopata.org" title="sociopata.org"><i class="icon-site"></i></a> <a href="//facebook.com/sociopatabr" title="facebook.com/sociopatabr"><i class="icon-facebook"></i></a> <a href="//twitter.com/sociopatabr" title="twitter.com/sociopatabr"><i class="icon-twitter"></i></a> <a href="//myspace.com/sociopata" title="myspace.com/sociopata"><i class="icon-myspace"></i></a> <a href="//soundcloud.com/sociopata" title="soundcloud.com/sociopata"><i class="icon-soundcloud"></i></a></p>', 'Exilio Art Pub', '<dd><a href="//facebook.com/exilioartpub">Exilio ArtPub</a></dd><dd><a href="//goo.gl/maps/j689r">goo.gl/maps/j689r</a></dd><dd>Av. Duque de Caxias, 10-26</dd><dd>Bauru-SP</dd>', 'fb.com/events/594304640597297', '2013-04-05 23:13:33', 5.00, '2013-04-01 23:13:33', 'A'),
(4, 'Dopamina Music Fest III', 'dopamina-music-fest-III', '<p>Novamente nos palcos do Exilio Art Pub dia 08/06, ao lado das bandas Nastcut e Stone Cold Sun.</p>', '<p>SOCIOPATA + STONE COLD SUN (ELEPHANT KING - new official name) + NASTCUT</p>', 'Exilio Art Pub', '<dd><a href="//facebook.com/exilioartpub">Exilio ArtPub</a></dd><dd><a href="//goo.gl/maps/j689r">goo.gl/maps/j689r</a></dd><dd>Av. Duque de Caxias, 10-26</dd><dd>Bauru-SP</dd>', 'fb.com/events/295948283874862', '2013-06-08 23:40:00', 5.00, '2013-06-04 23:13:33', 'A'),
(5, 'Underground Mental #2', 'underground-mental-2', '<p>Novamente nos palcos do Exilio Art Pub dia 08/06, ao lado das bandas Nastcut e Stone Cold Sun.</p>', '<p>SOCIOPATA + STONE COLD SUN (ELEPHANT KING - new official name) + NASTCUT</p>', 'Exilio Art Pub', '<dd><a href="//facebook.com/exilioartpub">Exilio ArtPub</a></dd><dd><a href="//goo.gl/maps/j689r">goo.gl/maps/j689r</a></dd><dd>Av. Duque de Caxias, 10-26</dd><dd>Bauru-SP</dd>', 'fb.com/events/295948283874862', '2013-06-08 23:40:00', 5.00, '2013-06-04 23:13:33', 'A'),
(6, 'Sunday Grind Madness', 'sunday-grind-madness', '<p>Novamente nos palcos do Exilio Art Pub dia 08/06, ao lado das bandas Nastcut e Stone Cold Sun.</p>', '<p>SOCIOPATA + STONE COLD SUN (ELEPHANT KING - new official name) + NASTCUT</p>', 'Exilio Art Pub', '<dd><a href="//facebook.com/exilioartpub">Exilio ArtPub</a></dd><dd><a href="//goo.gl/maps/j689r">goo.gl/maps/j689r</a></dd><dd>Av. Duque de Caxias, 10-26</dd><dd>Bauru-SP</dd>', 'fb.com/events/295948283874862', '2013-06-08 23:40:00', 5.00, '2013-06-04 23:13:33', 'A');


--
-- Definition for table usuarios
-- Usuários do sistema.
--
DROP TABLE IF EXISTS usuarios;
CREATE TABLE usuarios (
  id INT(11) NOT NULL AUTO_INCREMENT,
  nome VARCHAR(255) NOT NULL,
  password VARCHAR(32) NOT NULL,
  login VARCHAR(11) NOT NULL,
  email VARCHAR(50) NOT NULL,
  ativo TINYINT(1) NOT NULL,
  ultimo_acesso DATETIME NOT NULL,
  criacao DATETIME DEFAULT NULL,
  atualizacao DATETIME DEFAULT NULL,
  PRIMARY KEY (id),
  UNIQUE KEY login (login)
)
COMMENT = 'Usuários do sistema.'
ENGINE = InnoDB;

--
-- Dumping data for table usuarios
--
INSERT INTO usuarios VALUES
(1, 'Thiago Braga', '90a82750d7cf78e7750d75fb2ca10c65', '34384947879', 'thibraga06@gmail.com', 1, '2013-03-23 02:59:40', '2012-09-20 05:19:50', NULL),
(2, 'Birão Spoldari', '8cfd7d1dec7896c697f401a057625ab4', '21963573838', 'contato@sitesg.com.br', 1, '2012-12-29 19:17:53', '2012-12-29 19:17:53', NULL);