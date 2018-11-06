<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Aula 32 - Criando Sites com PHP</title>
  </head>
  <body>
    <h2>Exemplo de site PHP</h2>
    <p>Você pode colocar html dentro de arquivo php</p>

    <p>
      Para acessar seu site, va em
      <a href="http://localhost/tecnologias_web/2_trimestre/aula32.php">http://localhost/tecnologias_web/2_trimestre/aula32.php</a>
      <a href="#"></a>

      <ul>
        <li> <a href="#">Página inicial</a></li>
        <li> <a href="#">Sobre</a></li>
        <li> <a href="#">Cadastro</a></li>
        <li> <a href="#">Login</a></li>
      </ul>
    </p>

    <?php
      include("menu.php"); # Incluir seu menu, ou seja incluir de outro arquivo
     ?>

  </body>
</html>
