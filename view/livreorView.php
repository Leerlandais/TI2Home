<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TI2 | Livre d'or</title>
    <link rel="icon" type="image/x-icon" href="img/favicon.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/validation.css">
</head>
<body>
    <h1>TI2 | Livre d'or</h1>

    <div class="prevMessages">
        <h3 id="prevMessHead">Messages précedents</h3>
        <?php foreach ($messages as $mess) : ?>
            <div class="messageHolder">
                <h4><span class="italic"><?=$mess["firstname"]?></span> à envoyé ce message le <?=$mess["datemessage"] ?></h2>
                <p><?= $mess["message"] ?></p>
            </div>
<?php
    endforeach;
    ?>
    </div>
<script src="js/validation.js"></script>
</body>
</html>
