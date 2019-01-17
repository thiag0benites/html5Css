<?php
    $src_img = "img/" . $_GET["img"];
    $alt = substr($_GET["img"], 0, strpos($_GET["img"], "."));
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" lang="pt-br">
        <meta name="viewport" content="width=device-width">
        <title>Temporada - Agende já</title>

        <link rel="stylesheet" href="css/agendar.css">
    </head>
    <body>
        <header class="cabecalho">
            <img src="img/logo.png" alt="Logo Tipo">
        </header>

        <section class="chamada">
            <h1>Agende já!</h1>
        </section>

        <main class="agendamento">
            <article>
                <h2><?php echo $alt; ?></h2>
                <img src=<?php echo $src_img; ?> alt=<?php echo $alt; ?>>

                <form action="" method="POST">
                    <input id="dt-entrada" type="text" placeholder="Data de Check-in">
                    <img src="img/calendario.jpg" alt="" class="cal">
                    <input id="dt-saida" type="text" placeholder="Data de Check-out">
                    <img src="img/calendario.jpg" alt="" class="cal">
                </form>
            </article>
        </main>
    </body>
</html>