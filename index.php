<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Jogo da velha</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <h1>Jogo da Velha</h1>
    <div id="tabuleiro">

        <button class="casa" onclick="casa(0)"></button>
        <button class="casa" onclick="casa(1)"></button>
        <button class="casa" onclick="casa(2)"></button>

        <button class="casa" onclick="casa(3)"></button>
        <button class="casa" onclick="casa(4)"></button>
        <button class="casa" onclick="casa(5)"></button>

        <button class="casa" onclick="casa(6)"></button>
        <button class="casa" onclick="casa(7)"></button>
        <button class="casa" onclick="casa(8)" ></button>


 
  </div>

  <button id="reiniciar">Reiniciar Jogo</button>

  <script src="script.js"></script>
</body>
</html>