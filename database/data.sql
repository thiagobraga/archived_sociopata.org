/**
 * Modelagem do banco de dados sociopata
 *
 * @author  Thiago Braga <thiago@sociopata.org>
 */


/**
 * Seleciona o banco de dados bsociopataeta
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
 * Remove e insere dados na tabela musicas
 */
TRUNCATE musicas;
ALTER TABLE musicas AUTO_INCREMENT = 1;

INSERT INTO musicas VALUES
(1, 'Corpos', '02:30:00', '<p>O corpo mesmo mutilado<br/>É instrumento de evolução<br/>O corpo mesmo mutilado<br/>É instrumento de evolução</p><p>Corpos, santuário<br/>Corpos, oficina<br/>Corpos, bençãos<br/>Corpos, esconderijos</p><p>Corpos flagelados<br/>Corpos, ambulâncias<br/>Corpos, cárceres<br/>Corpos, expiação</p><p>Corpos<br/>Evolução<br/>Evolução</p>', '2013-11-11 04:04:00', 1),
(2, 'Crianças', '02:30:00', '', '2013-11-11 04:04:00', 1),
(3, 'Torre do Tempo', '02:30:00', '', '2013-11-11 04:04:00', 1),
(4, 'Celebrar', '02:30:00', '', '2013-11-11 04:04:00', 1),
(5, 'Coma', '02:30:00', '', '2013-11-11 04:04:00', 1),
(6, 'Desinformação', '02:30:00', '', '2013-11-11 04:04:00', 1),
(7, 'Em Dobro', '02:30:00', '', '2013-11-11 04:04:00', 1),
(8, 'Indiferença', '02:30:00', '', '2013-11-11 04:04:00', 1),
(9, 'Máscaras', '02:30:00', '', '2013-11-11 04:04:00', 1),
(10, 'Pensamento', '02:30:00', '', '2013-11-11 04:04:00', 1),
(11, 'Sociedade Pacífica', '02:30:00', '', '2013-11-11 04:04:00', 1),
(12, 'Soluciona', '02:30:00', '', '2013-11-11 04:04:00', 1),
(13, 'Última Hora', '02:30:00', '', '2013-11-11 04:04:00', 1),
(14, 'Utopia', '02:30:00', '', '2013-11-11 04:04:00', 1);

/**
 * Remove e insere dados na tabela musicas_albuns
 */
TRUNCATE musicas_albuns;
ALTER TABLE musicas_albuns AUTO_INCREMENT = 1;

INSERT INTO musicas_albuns VALUES
(1, 1, 1),
(2, 1, 1),
(3, 1, 1);

/**
 * Remove e insere dados na tabela eventos
 */
TRUNCATE eventos;
ALTER TABLE eventos AUTO_INCREMENT = 1;

INSERT INTO
eventos (codigo, nome, info, local, url_amigavel, facebook, valor, data, criado_em, situacao)
VALUES
(1, 'Dias de Um Futuro Passado', 'SOCIOPATA + ARTIGO DZ9? + AUTOBONECO', 'Casarão Petiscaria (Agudos-SP)', 'dias-de-um-futuro-passado', '', 8.00, '2013-02-02 22:30:00', '2013-02-01 22:30:00', 1),
(2, 'Affliction Rock Fest 11', 'SOCIOPATA + PLAGUE REMAINS + FOME DO CÃO + METAL GEAR + HORROR SHOW', 'Jack Music Pub (Bauru-SP)', 'affliction-rock-fest-11', '', 0.00, '2013-03-10 16:00:00', '2013-03-10 16:00:00', 1),
(3, 'Dopamina Music Fest I', 'SOCIOPATA + STONE COLD SUN', 'Exilio Art Pub (Bauru-SP)', 'dopamina-music-fest-i', '', 5.00, '2013-04-05 23:59:00', '2013-04-05 23:59:00', 1),
(4, 'Dopamina Music Fest III', 'SOCIOPATA + STONE COLD SUN + NASTCUT', 'Exilio Art Pub (Bauru-SP)', 'dopamina-music-fest-iii', '', 5.00, '2013-06-08 23:59:00', '2013-06-08 23:59:00', 1),
(5, 'Underground Mental #2', 'SOCIOPATA + THE BAD MIND TEMPER + AUTOBONECO', 'Casa do Aran (Bauru-SP)', 'underground-mental-2', '', 3.00, '2013-06-23 15:00:00', '2013-06-23 15:00:00', 1),
(6, 'Sunday Grind Madness', 'SOCIOPATA + HUTT + NASTCUT + D.C.H. + ABUSIVE', 'Jack Music Pub (Bauru-SP)', 'sunday-grind-madness', '', 5.00, '2013-07-21 16:00:00', '2013-07-21 16:00:00', 1),
(7, 'Nonsense Nuclear Noise III', 'SOCIOPATA + INFRAMUNDO + VENTO NA CARA', 'Exilio Art Pub (Bauru-SP)', 'nonsense-nuclear-noise-iii', '', 5.00, '2013-08-24 23:59:00', '2013-08-24 23:59:00', 1),
(8, 'Noisecore Fest XI', 'SOCIOPATA + CAD + STREET FEAR + D.O.S.', 'Jack Music Pub (Bauru-SP)', 'noisecore-fest-xi', '', 7.00, '2013-09-22 16:00:00', '2013-09-22 16:00:00', 1),
(9, 'Fck Off Fest', 'SOCIOPATA + NASTCUT + IMMORTUOS', 'Exilio Art Pub - Av. Duque de Caxias, 10-26, Bauru - SP', 'fck-off-fest', '', 5.00, '2013-10-04 23:59:00', '2013-10-04 23:59:00', 1),
(10, 'Domingo Rock', 'SOCIOPATA + METROFIRE + ATACK SONORO + HELLSBURN', 'Arte & Bola Café, Araraquara - SP', 'domingo-rock', '', 10.00, '2013-10-06 18:30:00', '2013-10-06 18:30:00', 1),
(11, '1º International Tattoo Convention', 'SOCIOPATA + ROMERO + OS PATRÕES', 'Pavilhão de Exposições, Barra Bonita - SP', '1-international-tattoo-convention', '', 0.00, '2013-12-08 18:30:00', '2013-12-08 18:30:00', 0),
(12, 'Rock In Christmas II', 'SOCIOPATA + ANIMALS + DINOHORSE + MAIDE IN MAIDEN + SIMBIOZE + MARIA DA SEGUNDA DISTRAÇÃO + TORMENTAURUS', 'Praça Frederico Ozanan, Lins - SP', 'rock-in-christmas-ii', '', 0.00, '2013-12-14 15:00:00', '2013-12-14 15:00:00', 1),
(13, 'Nonsense Nuclear Noise', 'SOCIOPATA + ROMERO + IMMORTUOS', 'Exilio Art Pub - Av. Duque de Caxias, 10-26, Bauru - SP', 'nonsense-nuclear-noise', '', 7.00, '2014-01-25 23:45:00', '2014-02-02 15:00:00', 1),
(14, 'Bazar Cultural III', 'O bazar dará início as 11:00 hrs, com a seguinte programação:<br/>11:00 hrs - Bazar de roupas, acessórios e artesanatos, tudo acompanhado de boa música e barzinho no local.<br/>15:00 hrs- Show com a "Banda Acitsim"- Agudos<br/>16:30 hrs- Show com "Sociopata"- Bauru<br/>18:00 hrs - "Outro Núcleo de Espetacularidades<br/> Na entrada serão arrecadados alimentos e o que mais quiserem ajudar. Será destinado a casa abrigo Amorada!" - Bauru', 'Avenida João Paccola, 205, Lençois Paulista - SP', 'bazar-cultural-iii', NULL, 0.00, '2014-02-09 16:30:00', '2014-02-02 15:00:00', 1),
(15, 'Lins Rock Festival', 'Somente Bandas Autorais!<br/><br/>Na Casa da Cultura de Lins<br/><br/>Com as bandas:<br/>FIT OF RAGE<br/>La Burca<br/>Maria da Segunda Distração<br/>Modo Turbo Band<br/>OxPxC Hardcore Marilia-SP<br/>Romero<br/>SimbioZe<br/>Sociopata', 'Casa de Cultura, Lins - SP', 'lins-rock-festival', NULL, 0.00, '2014-05-03 16:00:00', '2014-04-23 22:16:00', 1),
(16, 'Metalstock Jack Pub', 'Mais uma vez as portas do Jack Pub se abrem para a produção<br/>MetalStock!!<br/>A partir das 16 horas dia 4/5 (domingo), teremos a presença de 4 bandas independentes, autorais, e claro, padrão metalstock.<br/>INGRESSOS A R$5,00<br/><br/>Maiores informações na sequencia, inclusive postaremos os links com os respectivos trabalhos!!<br/><br/>DEVILS PUNCH - AVARÉ<br/>SIOD - AVARÉ<br/>SOCIOPATA - BAURU<br/>ELEPHANT KING - BAURU<br/><br/>Contamos com a sua presença!!', 'Jack Music Pub - Av. Duque de Caxias, 8-56, Bauru - SP', 'metalstock-jack-pub', NULL, 5.00, '2014-05-04 16:00:00', '2014-05-02 01:40:00', 1),
(17, 'Virada Cultural Paulista 2014', 'A Virada Cultural Paulista realiza sua oitava edição com uma ótima notícia para o público. Neste ano, 28 municípios recebem uma das maiores festas populares do Estado de São Paulo em dois fins de semana. Isso mesmo, 24 horas de programação cultural de altíssima qualidade em duas doses: metade das cidades em 24 e 25 de maio; a outra metade em 31 de maio e 1º de junho.<br> <br> Com isso, a população pode aproveitar muito mais ao curtir a programação cultural em mais de um município, escolhendo seus artistas e bandas preferidos a cada dia. E o que é melhor: tudo de graça!<br> <br> Em uma mistura de estilos e linguagens, o público terá acesso aos melhores espetáculos de teatro adulto e infantil, dança, circo, artes visuais e, claro, muita música, ocupando as ruas, as praças e os teatros municipais em uma grande festa popular que celebra toda a diversidade cultural paulista e brasileira.<br> <br> Dos nomes mais atuais que têm despontado na cena artística aos já consagrados, a Virada segue antenada nas tendências de vanguarda do universo cultural.<br> <br> Isso tudo não seria possível sem a correalização das Prefeituras participantes e das parcerias do MIS e do SESC – SP, que também dedicará seus espaços no interior a uma programação especialmente pensada para a Virada.<br> <br> Portanto, agradecemos aos parceiros envolvidos e desejamos a todos uma ótima festa!<br> <br>  Secretaria de Estado da Cultura de São Paulo', 'Cultura Botucatu - Av. Dom Lucio, 755, 18602-092, Botucatu - SP', 'virada-cultural-paulista-2014', 1444188975828644, 0, '2014-05-25 16:00:00', '2014-05-13 13:40:00', 1),
(18, 'Seletivas do 7º Solidary Rock', NULL, 'Jack Music Pub - Av. Duque de Caxias, 8-56, Bauru - SP', 'seletivas-do-7-solidary-rock', NULL, NULL, '2014-07-08 23:00:00', '2014-05-13 13:40:10', 1),
(19, 'Projeto Animal III', 'A entrada para o evento é 1 kg de ração para cães ou gatos (adultos e filhotes) ou R$ 10,00 por pessoa para cada dia do evento.<br> Curta a página &gt;&gt;&gt; <a href="https://www.facebook.com/pages/Pet-Metal/430347140365333" data-hovercard="/ajax/hovercard/page.php?id=430347140365333">Pet Metal</a><br> <br> Dia 07/Junho - Sábado<br> 18:30  Aberturados portões 19:00       Academia Ryan Gracie - Bauru (Professor Cacá)<br> 20:00       Garden`sgroove<br> 21:30    Quase 6<br> 23:00       Trio João Andarilho<br> <br> Dia 08/Junho - Domingo<br> 16:00       Aberturados portões<br> 16:30   Mastodontes<br> 18:00   Sociopata<br> 19:00       Grupo de dança Karen Marono<br> 20:00         Soul Flames<br> <br> Exposição com os ativistas <a href="https://www.facebook.com/leandrotessari" data-hovercard="/ajax/hovercard/user.php?id=100002449178282">Leandro Tessari</a>, <a href="https://www.facebook.com/tania.oliveira.963" data-hovercard="/ajax/hovercard/user.php?id=1764414850">Tania Oliveira</a> e da Loja Moda Inclusiva (Drika Valério). <br> <br> Venda de SALGADOS VEGANOS da <a href="https://www.facebook.com/RespectxLife" data-hovercard="/ajax/hovercard/page.php?id=155795891253029">Respect Life</a><br> <br> Realização: Equipe Pet Metal (Súsel Lopes, Deborah Rodrigues, Ana Sichieri e Vanessa Melo)<br> Apoio: Sociedade Esportiva Arapongas,  <a href="https://www.facebook.com/RadioAuriVerde" data-hovercard="/ajax/hovercard/page.php?id=363640920376651">Rádio Auri-Verde</a>, CooperCitrus.<br> <br> Todo o valor arrecadado é revertido para abrigos de animais abandonados de Bauru e Região.', 'Rua Presidente Kennedy 14-30, Bauru - SP', 'projeto-animal-iii', 736430296409978, 0, '2014-06-08 18:00:00', '2014-05-13 13:40:50', 1),
(20, 'Bandanos em Bauru', 'Pela primeira vez em Bauru, Bandanos na turnê de divulgação de seu novo álbum "nobody brings my coffin until I die".<br/><br/>E mais as bandas:<br/>- Sociopata - http://facebook.com/sociopatabr - www.sociopata.org<br/>- Violent Illusion - ViolentIllusion Crossover - http://violentillusion.tnb.art.br/<br/>- Se Fosse Eu - http://sefosseeu.bandcamp.com/ - Vs. D.C.H. - http://disturbiocapitalistahumano.bandcamp.com/ - dividindo o mesmo palco simultaneamente.', 'Exilio Art Pub - Av. Duque de Caxias, 10-26, Bauru - SP', 'bandanos-em-bauru', 753818377970441, 8.00, '2014-06-21 23:00:00', '2014-05-13 13:40:30', 1),
(21, 'Vitória Rock Bauru', '', 'Pça. Vitória Régia, Bauru - SP', 'vitoria-regia-bauru', NULL, 0, '2014-07-06 20:30:00', '2014-07-06 20:30:00', 1),
(22, 'Exilio Art Pub', 'Immortuos + Sociopata + Weedgroove', '', 'exilio-art-pub', NULL, NULL, '2014-08-08 23:00:00', '2014-07-20 17:48:10', 1),
(23, 'Buk Fest', 'Sociopata + Romero', 'Buk Bar - Rua Herminio Pinto 13-39 Loja 02/03', 'buk-fest', NULL, NULL, '2014-08-09 23:00:00', '2014-07-20 17:48:10', 1),
(24, 'Adios Guadalajara', NULL, '', 'adios-guadalajara', NULL, NULL, '2014-08-10 14:00:00', CURRENT_TIMESTAMP, 1),
(25, 'Solidary Rock 7', NULL, '', 'solidary-rock-7', NULL, NULL, '2014-08-23 14:00:00', '2014-07-20 17:48:10', 1),
(26, 'Rapidão Rock Fest', NULL, 'Ferro Velho Pub - Rua Goiás, 1538, Avaré - SP', 'rapidao-rock-fest', NULL, 5.00, '2014-09-21 14:00:00', CURRENT_TIMESTAMP, 1),
(27, 'Lançamento do EP da Romero', 'Dia 05/12, sexta-feira, a partir das 19:00, ocorrerá o lançamento do primeiro EP da <a href="https://www.facebook.com/romeropunkrock">Romero</a> no <a href="https://www.facebook.com/bukbar">Buk Bar</a>. Nós da <a href="https://www.facebook.com/sociopatabr">Sociopata</a> e o pessoal da <a href="https://www.facebook.com/artigo.dz9.hc">ARTIGO DZ9?</a> fomos convidados para essa festa. A portaria é R$ 6,00 e quem quiser adquirir o EP paga R$ 10,00 na portaria.<br><br>Haverá também venda de materiais independentes das distros <a href="https://www.facebook.com/distroneblina">Neblina Distro</a> e <a href="https://www.facebook.com/subvertadistrorecs">Subverta Distro &amp; Records</a>.<br><br>Compareçam. Incentivem a música autoral.<br><a href="http://sociopata.bandcamp.com/" target="_blank">http://sociopata.bandcamp.com/</a><br><a href="http://sociopata.org" target="_blank">http://sociopata.org/</a>', 'Buk Bar - Rua Herminio Pinto 13-39 Loja 02/03', 'lancamento-ep-romero', 1374337176193436, 10.00, '2014-12-05 19:00:00', CURRENT_TIMESTAMP, 1),
(28, '4º Rock in Christmas', '4º Rock in Christmas dia 20 de Dezembro na praça Frederico Ozanam (ao lado da rodoviaria)<br/><br/>Alem da qualidade das bandas, o evento também se destaca pela arrecadação de brinquedos que é feita desde a sua primeira edição e são distribuídos no Natal a varias crianças, brinquedos novos e usados em bom estado.<br/><br/>AS DOAÇÕES JA PODEM SER FEITAS!!!<br/>Conto com a colaboração de todos', 'Praça Frederico Ozanan (ao lado da Rodoviária), Lins - SP', '4-rock-in-christmas', NULL, 0, '2014-12-20 16:00:00', CURRENT_TIMESTAMP, 1);


/**
 * Remove e insere dados na tabela informacoes
 */
TRUNCATE informacoes;
ALTER TABLE informacoes AUTO_INCREMENT = 1;

INSERT INTO informacoes VALUES
(1, '<p>A banda Sociopata iniciou seus projetos no ano de 2008 em Agudos/Bauru (interior de São Paulo).</p><p>O nome do grupo suscita argumentação crítica das mazelas, muitas vezes inconscientes e sensíveis vividas num cotidiano de manipulações embutidas nas relações humanas. Temas sociais psíquicos e espirituais fundamentam o incômodo na vontade de se encontrar e se impor à realidade manifesta; como que em um pesadelo onde a escolha se faz subjugada aos fatos irreais da mente Sociopata na sua condição moral de desprezo egocêntrico, e no próprio cinismo e no falso arrependimento de suas emoções superficiais.</p><p>Nesta personalidade perturbada e doentia encontram-se incrustadas atitudes e condutas de total repulsa e revolta à ética materialista, sendo que por via de uma sonoridade diversa, onde sincrônico e distônico se fundem na própria carne, a banda Sociopata transmite em suas músicas sua oportuna identidade e intenção de si mesma.</p>', 1);


/**
 * Remove e insere dados na tabela instrumentos
 */
TRUNCATE instrumentos;
ALTER TABLE instrumentos AUTO_INCREMENT = 1;

INSERT INTO instrumentos VALUES
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

INSERT INTO integrantes VALUES
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

INSERT INTO integrantes_instrumentos VALUES
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
 * Remove e insere dados na tabela noticias
 */
TRUNCATE noticias;
ALTER TABLE noticias AUTO_INCREMENT = 1;

INSERT INTO noticias VALUES
(1, 'Gravação do segundo material', 'Em breve novo material.<br/><br/>Ouçam nosso primeiro álbum:<br/>http://sociopata.bandcamp.com/', 'photos/44b8803095fdc5b06f3a46efee354cb74e93cbd8-small.jpg', '2013-12-06 20:00:00', 1);


/**
 * Remove e insere dados na tabela tipos_albuns
 */
TRUNCATE tipos_albuns;
ALTER TABLE tipos_albuns AUTO_INCREMENT = 1;

INSERT INTO tipos_albuns VALUES
(1, 'CD', 1),
(2, 'EP', 1),
(3, 'Compilação', 1),
(4, 'Ao Vivo', 1),
(5, 'DVD', 1),
(6, 'LP', 1),
(7, 'MP3', 1);


SET FOREIGN_KEY_CHECKS = 1;
