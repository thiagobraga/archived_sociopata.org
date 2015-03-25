<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Sociopata - <?php echo $subject ?></title>
    </head>
    <body>
        <p>
            O usuário <?php echo $name ?> enviou a seguinte mensagem:<br/>
            <br/>
            ----------------------<br/>
            <?php echo $message ?><br/>
            ----------------------
        </p>
        <br/>
        <b>Informações adicionais</b><br/>
        <ul>
            <li>E-mail: <?php echo $email ?></li>
            <li>Navegador: <?php echo $browser ?></li>
            <li>Versão: <?php echo $version ?></li>
            <li>Mobile: <?php echo $mobile == null ? 'Não' : $mobile ?></li>
            <li>Plataforma: <?php echo $platform ?></li>
        </ul>
    </body>
</html>
