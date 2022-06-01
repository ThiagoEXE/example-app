?<!DOCTYPE html>
<html>
<head>
    <title>Séries</title>
    <meta charset="utf-8">
</head>
<body>
    <h1>Séries</h1>

    <ul>
        <?php foreach ($series as $serie):  ?>
            <li><?=$serie; ?></li>
            <?php endforeach; ?>
    </ul>
</body>
</html>