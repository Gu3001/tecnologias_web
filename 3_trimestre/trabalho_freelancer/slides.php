<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Plugin jquery</title>

    <!-- carregar bibliotecas do plugin no jquerry-->
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <script src="js/popper.min.js"></script>
    <script src="css/bootstrap.min.js"></script>


    <link rel="stylesheet" type="text/css" href="css/index.css">
    <script src="js/jquery-3.3.1.js"></script>
    <!-- Código style do plugin ====================================================-->
    <style>
    body {
      background-color: #ffffff;
      color: #000000;
      font-family: 'Roboto';
      min-height: 100vh;
    }

    * {
      margin: 0;
      padding: 0;
    }

    img {
      vertical-align: top;
    }

    .clearfix::after {
      content: "";
      display: table;
      clear: both;
    }

    ul li {
      list-style: none;
    }

    .banner {
      display: inline-block;
    }
    /*Configuração da faixa com letras do slide*/
    #banner1 h1 {
      position: absolute;
      width: 100%;
      height: 50px;
      bottom: 0;
      left: 0;
      background-color: rgba(0, 0, 0, 0.8);
      line-height: 50px;
      color: white;
    }

    #ctrl {
      text-align: center;
    }

  </style>
  </head>
  <!-- Estilo do plugin-->
  <body>


  <!--Código do plugin slide================================================================-->
  <a id="topo"></a>
  <div class="slide">

    <div class="text-center">

          <div class="banner" id="banner1">
              <div class="move" id="move">
                  <ul>                       <!--aqui você inseri as imagens do slide-->
                    <li><h1>As melhores viagens!</h1><img src="img/portfolio/LG_logo.png" alt="" width="650" height="460"></li>
                      <li><h1>Paris, Torre Eiffel</h1><img src="img/portfolio/sparta.jpg" alt="" width="650" height="460"></li>
                      <li><h1>Praia do Rio de Janeiro</h1><img src="img/portfolio/Terceirao.png" alt="" width="650" height="460"></li>
                      <li><h1>O Coliseu de Roma</h1><img src="img/portfolio/canil1.png" alt="" width="650" height="460"></li>
                  </ul>
              </div>
              <div class="ctrl" id="ctrl"></div>
          </div>
        </div>
    </div>


      <script src="js/myscroll.js"></script>
      <script>
      $(function() {
          $('#banner1').myscroll({
              picEl: $('#move'),
              ctrlEl: $('#ctrl'),                                         // opcoes de controle
              libs: true, //cria aquele pontinho em baixo, na transicao   | true / false
              arrows: true, //  flechas para passar de slide              | true / false
              autoPlay: true,  //passar de slide automaticamente          | true / false
              time: 2000,      //tempo que fica parado na tela            | 0 ate o que vc quiser
              speed: 1000 ,     //velocidade da transicao                 | 0 ate o que vc quiser
              effect: 'left', //  efeitos de transicao                    | top left fade
              hover: false  // flechas aparecem com o mouse na imagem      |true / false
          });
      })
      </script>

      <!--Explicações=================================-->

  </body>
</html>
