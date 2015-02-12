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
 * albuns
 */
TRUNCATE albuns;
ALTER TABLE albuns AUTO_INCREMENT = 1;

INSERT INTO
albuns (codigo, nome, slug, info, tipo_album, ano, soundcloud, lancado_em, criado_em, situacao)
VALUES
(1, 'Sociopata', 'sociopata', 'EP com 3 músicas lançado em Dezembro de 2013, gravado e mixado no RMS Studio em Agudos - SP.', 2, 2013, 'https://soundcloud.com/sociopata/sets/2013-sociopata', '2013-11-11 04:04:00', CURRENT_TIMESTAMP, 1),
(2, 'Corrosão', 'corrosao', 'EP com 6 músicas lançado em Janeiro de 2015, gravado e mixado no RMS Studio em Agudos - SP.', 2, 2015, '', '2015-03-01 16:20:00', CURRENT_TIMESTAMP, 1);

/**
 * banners
 */
TRUNCATE banners;
ALTER TABLE banners AUTO_INCREMENT = 1;

INSERT INTO
banners (codigo, arquivo, descricao, criado_em, situacao)
VALUES
(1, 'novo-album.jpg', '<p class="lead">Novo álbum em breve</p><p>Gravações finalizadas, em processo de masterização e prensagem.</p>', CURRENT_TIMESTAMP, 1),
(2, 'primeiro-album.jpg', '<p class="lead">Conheça o primeiro álbum</p><p>Nosso primeiro material está disponível<br/> no <a href="http://sociopata.bandcamp.com" target="_blank">Bandcamp</a> e no <a href="http://soundcloud.com/sociopata" target="_blank">Soundcloud</a></p>', CURRENT_TIMESTAMP, 1),
(3, 'siga-facebook.jpg', '<p class="lead">Acompanhe as notícias no Facebook</p><p>Receba informações e datas de shows na sua timeline<br/>seguindo a fanpage da <a href="http://facebook.com/sociopatabr" target="_blank">Sociopata</a></p>', CURRENT_TIMESTAMP, 1),
(4, 'banner-05.jpg', '<p class="lead">Lorem ipsum dolor sit amet</p><p>Consectetur adipisicing elit<br/>Dolores quae quam consequuntur</p>', CURRENT_TIMESTAMP, 1);

/**
 * musicas
 */
TRUNCATE musicas;
ALTER TABLE musicas AUTO_INCREMENT = 1;

INSERT INTO
musicas (codigo, nome, tamanho, letra, soundcloud, criado_em, situacao)
VALUES
(1, 'Corpos', '00:03:11', 'O corpo mesmo mutilado<br/>É instrumento de evolução<br/>O corpo mesmo mutilado<br/>É instrumento de evolução<br/><br/>Corpos, santuário<br/>Corpos, oficina<br/>Corpos, bençãos<br/>Corpos, esconderijos<br/><br/>Corpos flagelados<br/>Corpos, ambulâncias<br/>Corpos, cárceres<br/>Corpos, expiação<br/><br/>Corpos<br/>Evolução<br/>Evolução', 'https://soundcloud.com/sociopata/corpos?in=sociopata/sets/2013-sociopata', '2013-11-11 04:04:00', 1),
(2, 'Crianças', '00:02:43', 'Quantas crianças nascem por dia<br/>Quantas crianças pedem na esquina<br/>Quantas crianças morrem no fim do dia<br/>Ninguém liga, a noite vem, o frio, a solidão<br/><br/>Já não sabem o que são,<br/>Muitas vezes produto de exportação<br/>E não querem andar na contramão<br/><br/>Crianças não podem roubar, temos que ensinar<br/>Crianças não podem matar, temos que desarmar<br/>Crianças não podem se drogar, temos que educar<br/>Crianças, crianças', 'https://soundcloud.com/sociopata/criancas?in=sociopata/sets/2013-sociopata', '2013-11-11 04:04:00', 1),
(3, 'Torre do Tempo', '00:02:54', 'O povo revoltado com sua situação<br/>Julga, condena os líderes da nação<br/>Revolucionários exaltados por todos os lados<br/>Extravasam sua crueldade nos que julgam criminosos<br/>Sangue inocente banha as ruas da cidade<br/>Achando que um mundo novo surgiria dos assassinatos<br/><br/>Como em toda explosão da irracionalidade<br/>Os possíveis ideais desaparecem<br/>Interesses egoístas os substituem<br/>Vinganças, cobiça, inveja<br/><br/>São instrumentos usados para justificar<br/>A morte de inocentes e culpados<br/>O juiz de ontem poderá ser guilhotinado<br/>Por ter se tornado empecilho<br/>Aos interesses de outros mais ousados<br/>De outros mais ousados<br/><br/>Trevas nos dois mundos<br/>O inteligível e o sensível<br/>Se unem e o caos impera<br/>Suborno, dinheiro consegue salvar os menos importantes<br/><br/>Dor, injustiça, corrupção<br/>Povo racional vê seus filhos transformados em lobos selvagens<br/>Quando as armas substituem o diálogo, tudo pode acontecer<br/>A guerra nunca tem razão<br/>O sangue dos mortos nunca traz a solução', 'https://soundcloud.com/sociopata/torre-do-tempo?in=sociopata/sets/2013-sociopata', '2013-11-11 04:04:00', 1),
(4, 'Indiferença', '00:04:21', 'O trato humano com a diferença da qual o outro é portador<br/>Tem sido motivo de conflitos e adversidades<br/>Há diferentes e diferenças<br/>A indiferença é a negação da diferença<br/>O outro não faz diferença nenhuma<br/><br/>Adota-se a exclusão afetiva como suposta solução<br/>Para os embates do relacionamento<br/>Conviver é um desafio<br/><br/>Morte da indiferença<br/>Morte da indiferença<br/>Morte da indiferença<br/>Morte da indiferença<br/><br/>Diferenças não são defeitos<br/>Os diferentes não são oponentes<br/>E a indiferença é o recolhimento egoísta<br/>Do afeto na escura masmorra do desamor', '', '2013-11-11 04:04:00', 1),
(5, 'Coma', '00:02:54', 'Chega de vegetar, se liberta desse estado de coma<br/>Toda experiência pode te levar a enxergar<br/>Com outro olhar a sua realidade<br/><br/>Novas maneiras de se expressar<br/>Novas paisagens a conquistar<br/>Nenhum veneno vai te contaminar<br/>Nenhum veneno vai te contaminar<br/><br/>Coma induzido, coma<br/>Coma induzido, coma', '', '2013-11-11 04:04:00', 1),
(6, 'Sociedade Pacífica', '00:02:56', 'Terceiro milênio, fanáticos suicidas<br/>Terroristas roubam nossas vidas<br/>Líderes mal intencionados<br/>Convencem seguidores que morrendo assim,<br/>Matando, estarão habilitados ao paraíso<br/>Setenta e duas virgens a serví-los<br/>Setenta e duas virgens a servi-los<br/><br/>Um harém no além<br/>Um harém no além<br/>Um harém no além<br/>Um harém no além<br/><br/>Fanatismo religioso<br/>Inspirado na ignorância<br/>Falta de bom senso<br/><br/>Tolerância, sociedade pacífica<br/>Tolerância, sociedade pacífica<br/>Tolerância, sociedade pacífica<br/>Sociedade pacífica, sociedade pacífica', '', '2013-11-11 04:04:00', 1),
(7, 'Desinformação', '00:02:01', 'Desinformação, corrupção<br/>Caminham lado a lado pra sua alienação<br/>No brilho da televisão, vida boa e carnaval<br/>Não são a realidade em que vive o cidadão<br/><br/>Que precisa aprender a dizer não<br/>Dizer não!<br/>Dizer não!<br/>Dizer não!<br/>Dizer não!', '', '2013-11-11 04:04:00', 1),
(8, 'Soluciona', '00:03:28', 'Sua cabeça da voltas<br/>Não consegue mais se controlar<br/>A todo momento busca uma fuga<br/>Fica sempre a pergunta<br/>Onde isso vai dar?<br/><br/>Murro em ponta de faca<br/>Uma hora vai se machucar<br/>Sangra<br/>Sangra<br/><br/>Não deixe seus problemas<br/>Dominarem sua cabeça<br/>Viaja, resolva, soluciona<br/>Mais uma pergunta<br/>Quem é que manda na sua vida?<br/>Levanta, decida, anda... anda!<br/>Ainda há estrelas, cachoeiras<br/>Resolva.<br/><br/>Murro em ponta de faca<br/>Uma hora vai se machucar<br/>Sangra<br/>Sangra<br/><br/>Agora é teu melhor tempo<br/>Momento pra refazer teu conceito<br/>Sobre amizade, felicidade<br/>Morte física, desilusão<br/>Resolve então', '', '2013-11-11 04:04:00', 1),
(9, 'Utopia', '00:03:47', 'Não há liberdade, não há democracia<br/>A repressão está nas entrelinhas<br/>Nada mudou! Nada mudou!<br/>Retalhação daqueles que expressam sua verdadeira opinião<br/><br/>Nada mudou! Nada mudou!<br/>Querem nos impor o que sentir, o que pensar e falar,<br/>Como nos vestir, ouvir, se comportar, até em quem votar<br/>Essa é a democracia que querem nos fazer acreditar<br/><br/>E você vai continuar a aceitar<br/><br/>Eu quero a real liberdade, real democracia<br/>Nova era, sem miséria, pré-conceito e sim respeito<br/><br/>Ter certeza da dimensão que cada um deve ter<br/>Diante da vida, posição até política<br/>Mundo novo, novo mundo<br/>Direitos iguais pra todo mundo', '', '2013-11-11 04:04:00', 1),
(10, 'Máscaras', '00:02:30', 'Tudo está nu e descoberto<br/>Aos olhos da nossa consciência<br/>Nossas ações não são efetivadas<br/>Sem razões anteriores<br/><br/>Toda atuação de hoje<br/>É influenciada por crenças<br/>Preconceitos, valores éticos,<br/>Convenções sociais<br/><br/>Ação, reação<br/>Jamais a censura, mortificação e castigo<br/><br/>Visto que é por detrás<br/>Da cortina do teatro da vida<br/>Que estão as verdadeiras razões<br/>Do nosso jeito de agir e de pensar<br/><br/>Ação, reação<br/>Jamais a censura, mortificação e castigo<br/>Ação, reação<br/>Jamais a censura, mortificação e castigo', '', '2013-11-11 04:04:00', 1),
(11, 'Celebrar', '00:02:40', 'Fique sabendo, portanto, que hei de voltar<br/>Do silêncio maior, um pouco de tempo<br/>Um momento de repouso sobre o vento<br/>Toque que nos desperta<br/><br/>Existimos em um lugar<br/>Onde os séculos duram apenas segundos<br/><br/>E depois de mil vidas<br/>Nossos olhos começam a abrir-se<br/>Vem, vamos celebrar a vida mais uma noite<br/>Todas as oportunidades de mudança<br/><br/>Celebrar a liberdade<br/>Já que você é o arquiteto do seu destino<br/><br/>É quem escreve sua história<br/>Faça suas escolhas agora<br/>E continue a caminhar de cabeça erguida<br/>E continue a caminhar de cabeça erguida', '', '2013-11-11 04:04:00', 1),
(12, 'Ações', '00:04:20', '', '', '2013-11-11 04:04:00', 1),
(13, 'Pensamento', '00:04:20', 'Pensamento tem forma e movimento<br/>Pensamento tem a força do sentimento<br/>Com teus pensamentos você pode construir<br/>Destruir<br/><br/>Viver no drama ou na realidade,<br/>Na aflição ou na serenidade<br/>É postura que está relacionada<br/>Com teu modo de pensar<br/><br/>Agir, sentir<br/><br/>Pensamento tem forma e movimento<br/>Pensamento tem a força do sentimento<br/>Pense no que está pensando,<br/>Questione, não aja sem pensar<br/><br/>Sem medir o alcance de suas palavras<br/>Gestos, atitudes', '', '2013-11-11 04:04:00', 1),
(14, 'Última Hora', '00:03:20', 'Somos cegos que enxergam, surdos que ouvem<br/>Olhamos e ouvimos apenas o que nos seja conveniente<br/>Escutamos e ouvimos apenas aquilo que nos seja agradável<br/>Não conseguimos ver longe nem escutar com sabedoria o soar<br/><br/>Do trovão que vem do horizonte<br/>Corremos para recolher a criação<br/>Apenas quando as primeiras gotas fortes de água<br/>Nos surpreendem no impacto com o telheiro<br/><br/>Cegos da última hora<br/>Surdos da última hora<br/>Cegos da última hora<br/>Surdos da última hora<br/><br/>O céu já está escuro, o vento já anuncia a chuva<br/>E nós, invigilantes nos deixamos ficar<br/>Na situação daquele que espera o inevitável<br/><br/>Para adotar as medidas que já poderiam ter evitado<br/>Toda a correria da ultima hora muitas vezes inútil e funesta<br/><br/>Cegos da última hora<br/>Surdos da última hora<br/>Cegos da última hora<br/>Surdos da última hora', '', '2013-11-11 04:04:00', 1),
(15, 'Em Dobro', '00:03:30', 'Não se importa com ninguém<br/>Seu negócio e se dar bem<br/>Nem que pra isso<br/>Você tenha que matar alguém<br/>Vive numa constante<br/>Ausência de sentimentos<br/><br/>Seu pensamento é só tirar vantagens<br/>Mais um dia sem medir conseqüências<br/>Dos seus atos, mas se esquece que o universo é regido por leis<br/>E uma delas é a de ação e reação<br/>E uma delas é a de ação e reação<br/><br/>E tudo pode mudar<br/>Você vai ter que pagar<br/>Você vai ter que pagar<br/>Em dobro<br/>Em dobro<br/><br/>O orgulho e o egoísmo são o câncer da humanidade<br/>A semeadura é livre, mas a colheita é obrigatória<br/>Essa é a natureza das coisas, tudo pode mudar<br/>Você vai ter que pagar, você vai ter que pagar', '', '2013-11-11 04:04:00', 1),
(16, 'Ventos da Liberdade', '00:03:30', 'Trabalhadores na madrugada em busca<br/>do salário desvalorizado proletário,<br/>discriminado, se sente acuado,<br/>o chamam de folgado<br/>ele revoltado arranca do peito toda dor...<br/><br/>e lança mão, não da violencia,<br/>mas sim de uma nova consciência,<br/>novas idéias, experiências,<br/>outra historia a ser contada...<br/><br/>sem exploração, massacre da liberdade,<br/>escravidão pro orgulho e egoismo de alguns<br/>riqueza capitalista, regras estabelecidas,<br/>desigualdade, uns passam fome,<br/>outros constroem castelos...<br/><br/>carnificina global, tudo cheira mal<br/>desde o imperialismo tudo igual,<br/>tudo isso não cabe mais<br/>houve e há evolução,<br/>na ciência na construção de uma<br/>sociedade digna...<br/><br/>faça sua parte, façamos nossa parte!<br/>ventos da liberdade!', '', '2013-11-11 04:04:00', 1);

/**
 * musicas_albuns
 */
TRUNCATE musicas_albuns;
ALTER TABLE musicas_albuns AUTO_INCREMENT = 1;

INSERT INTO
musicas_albuns (musica, album, situacao)
VALUES
(1, 1, 1),
(2, 1, 1),
(3, 1, 1),
(4, 2, 1),
(5, 2, 1),
(6, 2, 1),
(7, 2, 1),
(8, 2, 1),
(9, 2, 1);

/**
 * eventos
 */
TRUNCATE eventos;
ALTER TABLE eventos AUTO_INCREMENT = 1;

INSERT INTO
eventos (codigo, nome, info, local, slug, facebook, valor, data, criado_em, situacao)
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
(28, '4º Rock in Christmas', '4º Rock in Christmas dia 20 de Dezembro na praça Frederico Ozanam (ao lado da rodoviaria)<br/><br/>Alem da qualidade das bandas, o evento também se destaca pela arrecadação de brinquedos que é feita desde a sua primeira edição e são distribuídos no Natal a varias crianças, brinquedos novos e usados em bom estado.<br/><br/>AS DOAÇÕES JA PODEM SER FEITAS!!!<br/>Conto com a colaboração de todos', 'Praça Frederico Ozanan (ao lado da Rodoviária), Lins - SP', '4-rock-in-christmas', NULL, 0, '2014-12-20 16:00:00', CURRENT_TIMESTAMP, 1),
(29, 'Caos Underground Fest II', '2º edição do Caos Underground, desta vez com mais bandas, na versão "Festival".<br/><br/>15 bandas e 12 horas seguidas de barulho.<br/><br/>LINEUP:<br/><a href="https://www.facebook.com/intotheendgrindviolence">Into the end</a>, grindcore/powerviolence/sludge (Centro Oeste Paulista)<br/><a href="https://www.facebook.com/pages/Headshot/735514963161875">Headshot</a>, rapcore/hardcore (Marília-SP)<br/><a href="https://www.facebook.com/xBalaclavax">Balaclava XVX</a>, anarcorap vegan straight edge (Periferia de São Paulo)<br/><a href="https://www.facebook.com/romeropunkrock">Romero</a>, punk rock (Bauru-SP)<br/>La Desgracione, noisecoredadaanarcoknupcore (Araçatuba-SP)<br/><a href="https://www.facebook.com/artigo.dz9.hc">ARTIGO DZ9?</a>, hardcore punk (Agudos-SP)<br/><a href="https://www.facebook.com/pages/Burning-Universe/154414604668042">Burning Universe</a>, hardcore/post-hc/screamo (Campo Grande-MS)<br/><a href="https://www.facebook.com/sociopatabr">Sociopata</a>, metal/hardcore/trash/progressive (Bauru-SP)<br/><a href="https://www.facebook.com/Porcria">Porcria</a>, hardcore punk (Ilha Solteira-SP)<br/><a href="https://www.facebook.com/fitofragehc">FIT OF RAGE</a>, hardcore (Bauru-SP)<br/><a href="https://www.facebook.com/desgraceria">Desgraceria</a>, grindcore (Maringá-PR)<br/><a href="https://www.facebook.com/weedgroove">Weedgroove</a>, sludge (Marília-SP)<br/><a href="https://www.facebook.com/pages/Bico-do-Corvo/1388603081371811">Bico do Corvo</a>, death metal/groove (Três Lagoas-MS)<br/><a href="https://www.facebook.com/Ortodoxospunk">Ortodoxospunk</a>, punk (Votuporanga-SP)<br/><a href="https://www.facebook.com/pages/Rigidez-Cadav%C3%A9rica/208900995943422">Rigidez Cadavérica</a>, goregrind (São José do Rio Preto - SP)<br/><br/><br/>Sorteio de box com materiais independentes.<br/><br/>Venda de Rango Vegan.<br/><br/>Venda de material independente.<br/><br/>Espaço para troca/doação de livros, leve o seu!<br/><br/>Este é um evento underground (DIY), sem financiamento de órgão governamental ou de capital privado. Portanto, o valor das entradas será destinado para cobrir os custos do evento.<br/><br/>Machistas, fascistas, racistas, homofóbicos e skinheads de qualquer espécie não serão bem vindos e caso apareçam, serão boicotados!<br/><br/>Único lote antecipado (Limitado): R$15,00<br/>Após acabar o lote antecipado e no dia: R$20,00', 'Ilha Solteira - SP', 'caos-underground-fest-ii', 1534763756768962, 20.00, '2015-01-17 16:00:00', CURRENT_TIMESTAMP, 1),
(30, 'Dopamina', 'Sociopata + Se Fosse Eu + The Antons Shaking Weapons', 'Exilio Art Pub (Bauru-SP)', 'dopamina-2015', '', 10.00, '2013-01-30 23:00:00', CURRENT_TIMESTAMP, 1),
(31, 'III Carnametal Rio Claro', 'BANDAS:<br> <br> HAVOK 666 - BRUTAL DEATH METAL - SALTO/SP<br> <a href="https://www.facebook.com/havok666brutaldeathmetal?fref=ts" rel="nofollow"><span>https://www.facebook.com/</span><wbr><span class="word_break"></span><span>havok666brutaldeathmetal?fr</span><wbr><span class="word_break"></span>ef=ts</a><br> CELLMYS - PIRACICABA<br> <a href="https://www.facebook.com/Cellmys?fref=ts" rel="nofollow"><span>https://www.facebook.com/</span><wbr><span class="word_break"></span>Cellmys?fref=ts</a><br> MACHINAGE - JUNDIAÍ<br> <a href="https://www.facebook.com/machinage.Official?fref=ts" rel="nofollow"><span>https://www.facebook.com/</span><wbr><span class="word_break"></span>machinage.Official?fref=ts</a><br> SOCIOPATA - BAURU<br> <a href="https://www.facebook.com/sociopatabr?fref=ts" rel="nofollow"><span>https://www.facebook.com/</span><wbr><span class="word_break"></span>sociopatabr?fref=ts</a><br> LAMB OF GOD COVER - AMERICANA<br> <a href="https://m.facebook.com/omertalambofgodcover?ref=bookmark" rel="nofollow"><span>https://m.facebook.com/</span><wbr><span class="word_break"></span><span>omertalambofgodcover?ref=bo</span><wbr><span class="word_break"></span>okmark</a><span class="text_exposed_hide">...</span><span class="text_exposed_show"><br> CHACINA - PIRACICABA<br> <a href="https://www.facebook.com/chacinametal?fref=ts" rel="nofollow"><span>https://www.facebook.com/</span><wbr><span class="word_break"></span>chacinametal?fref=ts</a><br> <br> <br> entrada: 10 reais para ajudar as bandas/organização/etc<br> <br> MAIS UMA EDIÇÃO AVASSALADORA PARA INFERNAR A GALERA DAS ESCOLAS DE SAMBA. QUEM PUDER DAR UMA FORÇA NA DIVULGAÇÃO DO EVENTO A GENTE AGRADECE, ESSE ANO PROMETE COMO TODOS OS OUTROS , METAL RIO CLARO E REGIÃO!!</span><span class="text_exposed_hide"> <span class="text_exposed_link"><a class="see_more_link" onclick="var func = function(e) { e.preventDefault(); }; var parent = Parent.byClass(this, &quot;text_exposed_root&quot;); if (parent &amp;&amp; parent.getAttribute(&quot;id&quot;) == &quot;id_54c7140abf6884610893796&quot;) { CSS.addClass(parent, &quot;text_exposed&quot;); Arbiter.inform(&quot;reflow&quot;); }; func(event); " href="#" data-ft="{&quot;tn&quot;:&quot;e&quot;}" role="button">Ver mais</a></span></span>', 'Pepper Bar - Rua Quatorze, 2161, 13500-270, Rio Claro - SP', 'carnametal-rio-claro-2015', 694967190622863, 10.00, '2015-02-15 17:00:00', CURRENT_TIMESTAMP, 1);


/**
 * informacoes
 */
TRUNCATE informacoes;
ALTER TABLE informacoes AUTO_INCREMENT = 1;

INSERT INTO informacoes VALUES
(1, '<p>A banda Sociopata iniciou seus projetos no ano de 2008 em Agudos/Bauru (interior de São Paulo).</p><p>O nome do grupo suscita argumentação crítica das mazelas, muitas vezes inconscientes e sensíveis vividas num cotidiano de manipulações embutidas nas relações humanas. Temas sociais psíquicos e espirituais fundamentam o incômodo na vontade de se encontrar e se impor à realidade manifesta; como que em um pesadelo onde a escolha se faz subjugada aos fatos irreais da mente Sociopata na sua condição moral de desprezo egocêntrico, e no próprio cinismo e no falso arrependimento de suas emoções superficiais.</p><p>Nesta personalidade perturbada e doentia encontram-se incrustadas atitudes e condutas de total repulsa e revolta à ética materialista, sendo que por via de uma sonoridade diversa, onde sincrônico e distônico se fundem na própria carne, a banda Sociopata transmite em suas músicas sua oportuna identidade e intenção de si mesma.</p>', 1);


/**
 * instrumentos
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
 * integrantes
 */
TRUNCATE integrantes;
ALTER TABLE integrantes AUTO_INCREMENT = 1;

INSERT INTO integrantes VALUES
(1, 'Thiago Braga', 'Guitarrista, backing vocal, fundador e principal compositor, já participou de bandas como Dope Messias, Biochoque, No Name Band, Autoboneco e hoje integra Sociopata e Escape From the World.', '2013-11-11 04:04:00', 1),
(2, 'Birão Spoldari', 'Baixista, backing vocal, fundador e compositor, participou da banda Running Amok entre 2002 e 2006, lançando uma demo contendo as músicas Evolução.', '2013-11-11 04:04:00', 1),
(3, 'Kleber Cabrera', 'Vocalista, letrista e fundador da banda, tocava na extinta banda Revel, lançando uma Demo entitulada. A banda já abriu o show das bandas Ratos de Porão, etc.', '2013-11-11 04:04:00', 1),
(4, 'Gustavo Panurge', 'Baterista que integrou a banda em 2012, participando da gravação do primeiro EP da Sociopata em 2013 e também realizando diversos shows no mesmo ano. Tocava na banda Expiring de Thrash Metal nos anos 80 na região de Lins, a qual gravou...', '2013-11-11 04:04:00', 1),
(5, 'Leopoldo Sanches', 'Guitarrista e compositor, entrou na banda no final de 2012 auxiliando nas composições e harmonias rente ao peso iminente da banda. Tocou nas bandas Buraco da Desgraça, Running Amok e atualmente toca baixo e canta na Artigo DZ9?, banda na qual já tocava antes mesmo da Sociopata.', '2013-11-11 04:04:00', 1),
(6, 'Juninho Miguel', 'Baterista e fundador da banda. Atualmente é baterista da banda Artigo DZ9?, a qual toca desde antes do início da Sociopata e do projeto de Doom Metal nome da banda.', '2013-11-11 04:04:00', 0),
(7, 'Maic Trash', 'Baterista que integrou a banda entre 2009 e 2010, realizando diversos shows pela região, inclusive gravando uma demo lançada somente online. Atualmente é baterista da banda Psicultura, a qual sempre tocou em paralelo com a Sociopata.', '2013-11-11 04:04:00', 0),
(8, 'Gerson Sampaio', 'Baterista que integrou a Sociopata entre 2011 e 2012, realizando diversos shows pela região. Gerson já tocou em bandas como Stereo S/A e The Almighty Devildogs, entre outras bandas da região.', '2013-11-11 04:04:00', 0);

/**
 * integrantes_instrumentos
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
 * tipos_albuns
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
