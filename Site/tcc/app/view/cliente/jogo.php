<!DOCTYPE html>

<html lang="en">



<head>



  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="shortcut icon" href="../../lib/img/favicon/favicon.ico" />



  <title>CORY</title>

  <!-- Fonte -->

  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Press+Start+2P&display=swap" rel="stylesheet">

  <!-- Estilos -->

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"

    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <link rel="stylesheet" href="../../lib/css/stylegame.css">



</head>



<body>

  <header>

    <div class="container" id="nav-container">

      <!-- add essa class -->

      <nav class="navbar navbar-expand-lg fixed-top navbar-dark">

        <a class="navbar-brand" href="../../../index.html">

          <img id="logo" src="../../lib/img/logo/cory.png" alt="Cory Delivery">

        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links"

          aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">

          <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbar-links">

          <div class="navbar-nav">

            <a class="nav-item nav-link" id="home-menu" href="../../../index.html">HOME</span></a>

            <a class="nav-item nav-link" id="apply-menu" href="jogo.php">GAME</a>

            <a class="nav-item nav-link" id="portfolio-menu" href="cardapio.html">CARDAPIO</a>

	    <a class="nav-item nav-link"  href="carrinho.html">CARRINHO</a>

            <a class="nav-item nav-link" id="about-menu" href="sobre.html">SOBRE</a>

            <a class="nav-item nav-link" id="contact-menu" href="contato.html">CONTATO</a>

          </div>

        </div>

      </nav>

    </div>

  </header>

  <br><br><br><br>

  <!-- iframe -->

<div id="iframe-cont">

  <div class="container">

    <div class="row">

      <div class="col iframe-cont">

      <h3 class="main-title">NOSSO JOGO 🕹️</h3>

      </div>

      <div class="col-12">

        <div id="game-frame">

          <iframe src="http://projetotcc.educacao.ws/app/view/jogo/jogo.html" title="W3Schools Free Online Web Tutorials" style="border:none;"></iframe>

        </div>



        <div class="menuAjuste">		

          <table class="table">

              <h2 id="font-rank">🏆 RANKING 🏆</h2>

            <thead>

              <tr>

                <th scope="col">POSIÇÃO</th>

                <th scope="col">NOME</th>

                <th scope="col" coldspan="2">PONTUAÇÃO</th>

              </tr>

            </thead>

            <tbody>



              <?php

                include_once "../../lib/php/connect/conexao.php";

                $count = 0;
    

                $listar = "SELECT * FROM game ORDER BY PONTOS DESC";

                foreach($sql->query($listar) as $coluna)
                {
                  if ($count >= 10){break;}
                  $count = $count + 1;

                  $id = $count;

                  $username = $coluna['USERNAME'];

                  $pontos = $coluna['PONTOS'];
                  
                    echo"
  
                      <tr>                    
                        <td>$id</td>
  
                        <td>$username</td>
  
                        <td>$pontos</td>
                      </tr>";
                };

              ?>



            </tbody>

          </table>

        </div>



      </div>

      <div class="col">

      </div>

    </div>

  </div>

</div>



  

  





  <div id="copy-area">

    <div class="container">

      <div class="row">

        <div class="col-md-12">

          <p>Desenvolvido por <b>Squad Flame Pixel Studio</b> &copy; 2020</p>

        </div>

      </div>

    </div>

  </div>





  <script src="https://code.jquery.com/jquery-3.4.1.min.js"

    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"

    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"

    crossorigin="anonymous"></script>

  <!-- Scripts do projeto -->

  <script src="../../lib/js/scripts.js"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"

    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"

    crossorigin="anonymous"></script>

  <!-- Font Awesome -->

  <script src="https://kit.fontawesome.com/bf7e05c402.js" crossorigin="anonymous"></script>

  <script src="https://kit.fontawesome.com/a076d05399.js"></script>



  <!-- Parallax -->

  <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>



</body>



</html>