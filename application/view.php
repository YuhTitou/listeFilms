<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>Films</title>
        <meta charset="UTF-8">
        <meta name="description" content="Films">     
    </head>
    <header>
        <nav>
            <ul>
                <li>Accueil</li>
                <li>Films</li>
                <li>Inscription</li>
                <li>Connexion</li>
            </ul>
        </nav>
    </header>
    <h1>Films</h1>
    <?php foreach ($data as $titre => $contenu):?>
            <h3><?php echo $titre; ?>
            <table>
                <thead>
                    <tr>
                    <?php foreach (current($contenu) as $nomatt => $val):?>
                        <td><?php echo $nomatt;?></td>
                    <?php endforeach ?>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($contenu as $ligne):?>
                    <tr>
                        <?php foreach ($ligne as $val):?>
                            <td><?php echo $val;?></td>
                        <?php endforeach?>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        <?php endforeach ?>
    <body>
</html>