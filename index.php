<html xmlns="http://www.w3.org/1999/xhtml">
<meta lang="pt-br" charset="utf-8">
<title>E-commerce layout</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="./src/css/style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,-25" />

  <script>
      document.getElementsByClassName(".card-img-top").forEach( function()  {
    
      document.addEventListener("mouseover", function() {
        $( ".card-img-top" ).animate({marginTop:-15},500)
        $( ".card-img-top" ).animate({marginTop:0},500)
    });

      })



  </script>

</head>

<body>
  <header>
    <nav class="navbar navbar-expand-sm">
      <div class="navbar-brand">
        <a href="acervo_compras.php">
          <img id="logo" src="./src/img/logo.png" alt="Acervo" class="d-none d-md-inline-block"></a>
        <img id="logo2" src="./src/img/logo-min.png" alt="Acervo Logo" class="d-inline-block d-md-none">
      </div>
      <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#Nav1">
        <span class="navbar-toggler-icon" style="background-color: white;border: 1px solid black;"></span>
      </button>
      <div id="Nav1" class="collapse navbar-collapse justify-content-end mt-3">
        <ul class="navbar-nav">
          <li class='nav-item'>
            <a href='#' class='nav-link'>
              <button type="button" class="btn btn-primary btn-rounded">Crie sua conta</button>
            </a>
          </li>
          <li class='nav-item'>
            <a href='#' class='nav-link'>
              <button type="button" class="btn btn-outline-primary" data-mdb-ripple-color="dark">Login</button>
            </a>
          </li>
        </ul>
      </div>
    </nav>
    <hr>
    <nav id="menu2" class="navbar navbar-expand-sm" style="background-color:none;">
      <div class="container">
        <form class="form-inline m-auto" style="width: 70%;">
          <input id="barra_pesquisa" class="form-control text-center" type="search" placeholder="Pesquisar" aria-label="Pesquisar" style="width: 89%;">
          <button id="btn-pesquisar" class="btn btn-sm ml-2" type="submit" style="position: absolute;">
            <span class="material-symbols-outlined">search</span>
          </button>
        </form>
        <div class="box-card">
          <button type="button" class="btn btn-light" style="background:none;">
            <span class="material-symbols-outlined" style="font-size: 42px;">
              shopping_cart
            </span>
          </button>
        </div>
      </div>
    </nav>
  </header>

  <!--CARROSSEL PRINCIPAL -->
  <?php 
    include('./src/carrossel/car_principal.php');
  ?>
  <!--CARROSSEL PRINCIPAL -->

  <div class="container-fluid mt-5">

    <!--CATEGORIAS -->
    <?php
      include('categorias.php');
    ?>
    <!--CATEGORIAS -->
    <br>
    <blockquote class="blockquote4  text-center pt-4 m-auto">
      <h1 id="fonte_blockote_titulo" style="font-size:50px;">Destaques do mês</h1>
    </blockquote>

    <?php //Botões Categorias
    include('./src/carrossel/car_destaques.php')

    ?>


    <br>
  <hr>
    <br>

    <blockquote class="blockquote4  text-center p-4 m-auto">
      <h3 id="fonte_blockote_titulo" style="font-size:50px;"> NOVIDADE ! </h3>
    </blockquote>

    <?php //Botões Categorias
     include('./src/carrossel/car_novos.php')
    ?>

    <br>
    <br>
    <hr>
    <br>
    <br>

    <blockquote class="blockquote4  text-center p-4 m-auto">
      <h3 id="fonte_blockote_titulo" style="font-size:50px;"> <strong>PROMOÇÃO</strong> 20% off </h3>
    </blockquote>

    <?php //Botões Categorias
    include('estante_sale.php')
    ?>
    

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <?php //Botões Categorias
    include('./src/carrossel/carrossel.banners.php')
    ?>

    <br>
    <br>
    <br>


    <blockquote class="blockquote4  text-center p-4 m-auto">
      <h3 id="fonte_blockote_titulo" style="font-size:80px;"> Outras <strong>OFERTAS !</strong></h3>
    </blockquote>

    <?php //Botões Categorias
    include('./src/carrossel/carrossel.ofertas.php')
    ?>

    <br>
    <br>
    <br>
    <hr>
 

    <blockquote class="blockquote4  text-center p-4 m-auto">
      <h3 id="fonte_blockote_titulo" style="font-size:70px; text-align: center; ">Seu tipo ? </h3>
    </blockquote>
    <br>
    <br>
    <br>


    <div class="card-deck">

      <div class="card border-0">
        <img class="card-img-top" src="./src/img/pexels-rodnae-productions-6517345.jpg" alt="Card image cap" style="border-radius: 35px;">
        <div class="card-body">
          <h5 id="fonte_blockote_titulo" class="card-title" style="text-align:center; font-weight: 400; font-size: 26px;">Feminino</h5>
          <hr>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>

      </div>
      <div class="card border-0">
        <img class="card-img-top" src="./src/img/pexels-andrea-piacquadio-3755706.jpg" alt="Card image cap" style="border-radius: 35px;">
        <div class="card-body">
          <h5 id="fonte_blockote_titulo" class="card-title" style="text-align:center;font-weight: 400; font-size: 26px;">Masculino</h5>
          <hr>
          <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
        </div>
      </div>

      <div class="card border-0">
        <img class="card-img-top" src="./src/img/pexels-rodnae-productions-10565583.jpg" alt="Card image cap" style="border-radius: 35px;">
        <div class="card-body">
          <h5 id="fonte_blockote_titulo" class="card-title" style="text-align:center;font-weight: 400; font-size: 26px;">Infântil</h5>
          <hr>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
      </div>

      <div class="card border-0">
        <img class="card-img-top " src="./src/img/pexels-liza-summer-6347558.jpg" alt="Card image cap" style="border-radius: 35px;">
        <div class="card-body">
          <h5 id="fonte_blockote_titulo" class="card-title" style="text-align:center;font-weight: 400; font-size: 26px;">Influêncer</h5>
          <hr>
          <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
        </div>
      </div>


    </div>
  </div>



  <br>
    <br>
    <br>
    <hr>
 





































































  <footer>
    <a href='https://br.freepik.com/fotos-vetores-gratis/banner-moderno'>Banner moderno vetor criado por BiZkettE1 - br.freepik.com</a>
    <a href='https://br.freepik.com/fotos-vetores-gratis/banner-moderno'>Banner moderno vetor criado por BiZkettE1 - br.freepik.com</a>
    <a href='https://www.freepik.com/psd/digital-store'>Digital store psd created by syifa5610 - www.freepik.com</a>
    <a href='https://www.freepik.com/psd/e-commerce-template'>E commerce template psd created by freepik - www.freepik.com</a>
    <a href='https://www.freepik.com/psd/ecommerce-banner'>Ecommerce banner psd created by freepik - www.freepik.com</a>
    Foto de RODNAE Productions: https://www.pexels.com/pt-br/foto/adulto-bebida-drink-tomada-de-grande-angular-6517345/(feminino)
    Foto de RODNAE Productions: https://www.pexels.com/pt-br/foto/colagem-ligacao-crianca-filho-10565583/(criança)
    Foto de Andrea Piacquadio: https://www.pexels.com/pt-br/foto/roupas-masculinas-elegantes-em-manequins-em-boutique-moderna-3755706/(gravata)
    Foto de Liza Summer: https://www.pexels.com/pt-br/foto/mulher-com-sueter-marrom-em-pe-ao-lado-do-espelho-6347558/(influencer)
  </footer>




  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/src/umd/popper.min.js"></script>
  <script src="./src/js/scripts.js"></script>


</body>








</html>