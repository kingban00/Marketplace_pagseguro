<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once "funcoes.php";
require_once "config/config.php";

if (!isset($_GET["id"]) || $_GET["id"] == "") {
  header("Location: index.php");
}

$id = $_GET["id"];
$pagseguro_token = "221DF1406C454C69A4D1CD7A63579241";
$pagseguro_vendedor = "yann.gabriel1@hotmail.com";
$pagseguro_postback = "https://webhook.site/0f04d4db-78df-45a9-9161-bee86b9615ad";


switch ($id) {
  case '0':
    $dados["nome"] = "Denji";
    $dados["valor"] = "33,00";
    $dados["transacao"] = "avista";
    $dados["origem"] = "Animação Japonesa, Chainsaw Man";
    $dados["descricao"] = "Quando menino, ele herda a dívida de seu pai da yakuza após a morte dele. Depois de conhecer o Demônio Pochita, ele se torna um Caçador de demônios para a yakuza em uma tentativa de quitar sua dívida. Após a yakuza, que estava sob o controle do Demônio Zumbi, traí-lo, ele morre, e Pochita se torna seu coração, cumprindo um contrato com Denji - ao se tornar seu coração, o garoto mostra a Pochita seus sonhos de uma vida normal. Depois disso, ele pode se transformar no híbrido demônio-humano conhecido como Chainsaw Man (ou Homem-Serra Elétrica em português) puxando a corda em seu peito. Depois de conhecer Makima, ele se torna um Caçador de Demônios da Segurança Pública para viver como um humano.";
    break;

  case '1':
    $dados["nome"] = "Sarutobi Hiruzen";
    $dados["valor"] = "34,00";
    $dados["transacao"] = "avista";
    $dados["origem"] = "Animação Japonesa, Naruto";
    $dados["descricao"] = "Hiruzen Sarutobi (猿飛ヒルゼン, Sarutobi Hiruzen) foi o Terceiro Hokage (三代目火影, Sandaime Hokage de Konohagakure. Sendo um discípulo do Hokage anterior da vila, Hiruzen era um ninja poderoso, aclamado como o Deus Shinobi (忍の神, Shinobi no Kami). Embora ele seja originalmente o professor dos Sannin, várias gerações de ninjas de Konoha se beneficiaram de sua sabedoria durante sua vida.";
    # code...
    break;

  case '2':
    $dados["nome"] = "Escanor";
    $dados["valor"] = "35,00";
    $dados["transacao"] = "avista";
    $dados["origem"] = "Animação Japonesa, Nanatsu no Taizai";
    $dados["descricao"] = "Escanor 「エ ス カ ノ ー ル」 era o Pecado do Leão do Orgulho dos Sete Pecados Capitais, o ex-segundo príncipe do Reino de Castellio, e o homem conhecido em todo o Reino de Liones como 'O Cavaleiro Sagrado Mais Forte'. Seu Tesouro Sagrado era o Machado Divino, Rhitta, e seu poder inerente se chamava Sunshine, o que o tornou conhecido por ganhar imenso poder durante o dia, e gradualmente enfraquecer com o pôr do sol, deixando-o frágil e submisso à noite.";
    # code...
    break;

  case '3':
    $dados["nome"] = "Uchiha Itachi";
    $dados["valor"] = "36,00";
    $dados["transacao"] = "avista";
    $dados["origem"] = "Animação Japonesa, Naruto";
    $dados["descricao"] = "Itachi Uchiha (うちはイタチ, Uchiha Itachi) foi um prodígio do clã Uchiha de Konohagakure. Ele se tornou um criminoso internacional depois de assassinar seu clã inteiro, poupando apenas seu irmão mais novo, Sasuke. Ele se juntou a Akatsuki, onde ele entrou em frequentes conflitos com Konoha e seus ninjas, incluindo Sasuke, que procurou vingar sua família. Depois de morrer durante uma batalha com Sasuke, as motivações de Itachi foram reveladas serem mais complicadas do que pareciam ele só queria proteger seu irmão e a vila, permanecendo um shinobi leal a Konohagakure até o fim.";
    # code...
    break;

  case '4':
    $dados["nome"] = "Uzumaki Minato";
    $dados["valor"] = "39,00";
    $dados["transacao"] = "avista";
    $dados["origem"] = "Animação Japonesa, Naruto";
    $dados["descricao"] = "Minato Namikaze (波風ミナト, Namikaze Minato), conhecido como Relâmpago Amarelo de Konoha (木ノ葉の黄色い閃光, Konoha no Kiiroi Senkō; literalmente significa: 'Flash Amarelo de Konoha'), foi um shinobi lendário que se tornou o Quarto Hokage (四代目火影, Yondaime Hokage; literalmente significa: 'Quarta Sombra do Fogo') de Konohagakure. Morreu sacrificando sua vida durante o Ataque do Nove-Caudas em Konoha para selar metade do demônio em seu filho, morrendo heroicamente no processo.";
    # code...
    break;

  case '5':
    $dados["nome"] = "Uchiha Obito";
    $dados["valor"] = "27,00";
    $dados["transacao"] = "avista";
    $dados["origem"] = "Animação Japonesa, Naruto";
    $dados["descricao"] = "Obito Uchiha (うちはオビト, Uchiha Obito) foi um membro do clã Uchiha de Konohagakure. Acreditava-se que ele tinha morrido durante a Terceira Guerra Mundial Shinobi, com seu único legado sobrevivente sendo o Sharingan que ele deu ao seu companheiro de equipe, Kakashi Hatake. Na verdade, Obito foi salvo da morte e treinado por Madara Uchiha, mas os acontecimentos da guerra deixaram Obito desiludido com o mundo, e ele tentou substituí-lo por um novo. Madara Uchiha fez Obito Uchiha ser seu sucessor, lhe dando o Plano Olho da Lua. Usando o pseudônimo de Tobi (トビ, Tobi) e Madara Uchiha, Obito manipulou a Akatsuki das sombras para dar continuidade aos seus planos, eventualmente, indo a público com eles e, no processo, iniciando a Quarta Guerra Mundial Shinobi sendo manipulado pelo Zetsu Negro. Durante a guerra, Obito teve uma mudança no coração, porém, ele acabou sacrificando sua vida para ajudar a salvar o mundo.";
    # code...
    break;

  case '6':
    $dados["nome"] = "Uchiha Obito";
    $dados["valor"] = "26,00";
    $dados["transacao"] = "avista";
    $dados["origem"] = "Animação Japonesa, Naruto";
    $dados["descricao"] = "Obito Uchiha (うちはオビト, Uchiha Obito) foi um membro do clã Uchiha de Konohagakure. Acreditava-se que ele tinha morrido durante a Terceira Guerra Mundial Shinobi, com seu único legado sobrevivente sendo o Sharingan que ele deu ao seu companheiro de equipe, Kakashi Hatake. Na verdade, Obito foi salvo da morte e treinado por Madara Uchiha, mas os acontecimentos da guerra deixaram Obito desiludido com o mundo, e ele tentou substituí-lo por um novo. Madara Uchiha fez Obito Uchiha ser seu sucessor, lhe dando o Plano Olho da Lua. Usando o pseudônimo de Tobi (トビ, Tobi) e Madara Uchiha, Obito manipulou a Akatsuki das sombras para dar continuidade aos seus planos, eventualmente, indo a público com eles e, no processo, iniciando a Quarta Guerra Mundial Shinobi sendo manipulado pelo Zetsu Negro. Durante a guerra, Obito teve uma mudança no coração, porém, ele acabou sacrificando sua vida para ajudar a salvar o mundo.";
    # code...
    break;

  case '7':
    $dados["nome"] = "Monkey D. Luffy";
    $dados["valor"] = "28,00";
    $dados["transacao"] = "avista";
    $dados["origem"] = "Animação Japonesa, One Piece";
    $dados["descricao"] = "Monkey D. Luffy, também conhecido como Luffy Chapéu de Palha ou Chapéu de Palha,é um pirata e o protagonista do anime e mangá One Piece. Ele é o fundador e o capitão do cada vez mais infame e poderoso Piratas do Chapéu de Palha, bem como um de seus principais lutadores. Seu sonho de vida é se tornar o Rei dos Piratas, encontrando o lendário tesouro deixado pelo falecido Rei dos Piratas, Gol D. Roger. Ele acredita que ser o Rei dos Piratas significa ter a maior liberdade do mundo.";
    # code...
    break;

  default:
    # code...
    break;
}
// var_dump($dados);
$dados_json = json_encode($dados);
// var_dump($dados_json);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>E-Commerce! | </title>

  <!-- Bootstrap -->
  <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="../build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
  <script type="text/javascript" src="<?= SCRIPT_PAGSEGURO ?>"></script>
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="index.php" class="site_title"><i class="fa fa-paw"></i> <span>E-Commerce</span></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->

          <!-- /menu profile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu">
                <li><a href="index.php"><i class="fa fa-home"></i> Compras </a>

                </li>
              </ul>
            </div>


          </div>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
          <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
              <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
              <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
          </div>
          <!-- /menu footer buttons -->
        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">
        <div class="nav_menu">
          <div class="nav toggle">
            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
          </div>
          <nav class="nav navbar-nav">
            <ul class=" navbar-right">
              <li class="nav-item dropdown open" style="padding-left: 15px;">
                <a href="#" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                  <img src="images/img.jpg" alt="">John Doe
                </a>
                <!-- <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item"  href="javascript:;"> Profile</a>
                        <a class="dropdown-item"  href="javascript:;">
                          <span class="badge bg-red pull-right">50%</span>
                          <span>Settings</span>
                        </a>
                    <a class="dropdown-item"  href="javascript:;">Help</a>
                      <a class="dropdown-item"  href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                    </div> -->
              </li>

              <li role="presentation" class="nav-item dropdown open">
                <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-envelope-o"></i>
                  <span class="badge bg-green">6</span>
                </a>
                <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                  <li class="nav-item">
                    <a class="dropdown-item">
                      <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                      <span>
                        <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="dropdown-item">
                      <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                      <span>
                        <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="dropdown-item">
                      <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                      <span>
                        <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="dropdown-item">
                      <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                      <span>
                        <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <div class="text-center">
                      <a class="dropdown-item">
                        <strong>See All Alerts</strong>
                        <i class="fa fa-angle-right"></i>
                      </a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <!-- /top navigation -->

      <!-- page content -->
      <div class="right_col" role="main">

        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>E-commerce :: Product Page</h3>
            </div>

            <div class="title_right">
              <div class="col-md-5 col-sm-5  form-group pull-right top_search">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search for...">
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="button">Go!</button>
                  </span>
                </div>
              </div>
            </div>
          </div>

          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12 col-sm-12 ">
              <div class="x_panel">
                <div class="x_title">
                  <h2>E-commerce page design</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Settings 1</a>
                        <a class="dropdown-item" href="#">Settings 2</a>
                      </div>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  <div class="col-md-7 col-sm-7 ">
                    <div class="product-image">
                      <img src="images/<?php echo $_GET["id"] ?>.png" alt="..." />
                    </div>
                    <div class="product_gallery">
                      <a>
                        <img src="images/<?php echo $_GET["id"] ?>.png" alt="..." />
                      </a>
                      <a>
                        <img src="images/<?php echo $_GET["id"] ?>.png" alt="..." />
                      </a>
                      <a>
                        <img src="images/<?php echo $_GET["id"] ?>.png" alt="..." />
                      </a>
                      <a>
                        <img src="images/<?php echo $_GET["id"] ?>.png" alt="..." />
                      </a>
                    </div>
                  </div>

                  <div class="col-md-5 col-sm-5 " style="border:0px solid #e5e5e5;">

                    <h3 class="prod_title"><?php echo $dados["nome"] ?></h3>

                    <p style="text-align: justify;"><?php echo $dados["descricao"] ?>.</p>
                    <br />
                    <p><?php echo $dados["origem"] ?>.</p>

                    <br />

                    <br />

                    <div class="">
                      <div class="product_price" style="display: flex; justify-content: center;">
                        <h1 class="price">R$<?php echo $dados["valor"] ?></h1>
                        <!-- <span class="price-tax">Ex Tax: Ksh80.00</span> -->
                        <br>
                      </div>
                    </div>

                    <div class="">
                      <button type="button" id="btn_buy" class="btn btn-primary btn-lg" onclick="comprar()">Comprar</button>

                    </div>


                  </div>



                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /page content -->

      <!-- footer content -->

      <!-- /footer content -->
    </div>
  </div>

  <!-- jQuery -->
  <script src="../vendors/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- FastClick -->
  <script src="../vendors/fastclick/lib/fastclick.js"></script>
  <!-- NProgress -->
  <script src="../vendors/nprogress/nprogress.js"></script>

  <!-- Custom Theme Scripts -->
  <script src="../build/js/custom.min.js"></script>
  <script>
    var dados = <?php echo  $dados_json ?>;
    $(document).ready(function() {
      $("#btn_buy").on("click", comprar)
    });

    function comprar() {
      console.log("id: " + <?php echo  $id ?>);
      console.log(dados);
    }


    var settings = {
      "url": "{{url}}/oauth2/application",
      "method": "POST",
      "timeout": 0,
      "headers": {
        "Authorization": "Bearer TOKEN",
        "Content-Type": "application/json"
      },
      "data": JSON.stringify({
        "name": "App Name",
        "description": "Descrição da platforma",
        "site": "http://www.parceiro.com.br",
        "redirect_uri": "http://www.parceiro.com.br/retorno",
        "logo": "https://www.parceiro.com/static/media/logo.d2ebaf8f.svg"
      }),
    };

    $.ajax(settings).done(function(response) {
      console.log(response);
    });
  </script>
</body>

</html>