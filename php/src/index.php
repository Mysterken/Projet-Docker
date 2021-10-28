<?php
require "./common.php";

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Homepage</title>
    <link rel="stylesheet" href="css\index.css">
    <script src="js\index.js"></script>
</head>
<body>
<div class="content">
    <div class="select-classe" onchange="verif()">
        <label for="classe">Choisissez votre classe:</label>
        <select name="classe" id="classe">
            <option value=""> --- </option>
            <option value="0">Magicien</option>
            <option value="1">Guerrier</option>
        </select>
    </div>
    <div class="select-name" onchange="verif()">
        <label for="nom">Choisissez votre nom:</label>
        <input name="nom" type="text" placeholder="Nom" id="nom">
    </div>
    <button id="validation" disabled>Valider</button>
</div>
</body>
</html>
