<!doctype html>
<html lang="pt-br">

<!-- HEAD -->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BoxVault</title>
  <!-- Link de referência ao CSS do Bootstrap -->
  <link href="CSS/est.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-xxxxxxx" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

</head>

<!-- BODY -->
<body>

  <!-- MENU -->
  <nav class="navbar navbar-expand-lg body justify-content-center bg-primary bg-gradient">
    <div class="container mx-5 my-1">
    <i class="bi bi-box-seam-fill fs-1 text-light"></i>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="menubtn collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
        <div class="navbar-nav text-uppercase fw-bold">
          <a class="link-light text-dark nav-link text-light mx-3" href="#menu-inicio">Início</a>
          <a class="link-light text-dark nav-link text-light mx-3" href="#menu-sobre">Sobre</a>
          <a class="link-light text-dark nav-link text-light mx-3" href="#menu-recursos">Recursos</a>
          <a class="link-light text-dark nav-link text-light mx-3" href="#menu-contato">Contato</a>
          <div class="ms-5">
            <a href="user/form-create.php">
              <button type="button" class="btn btn-light fw-bold text-uppercase shadow-sm">Cadastrar</button>
            </a>
            <a href="login/form-login.php">
              <button type="button" class="btn btn-light fw-bold text-uppercase shadow-sm">Login</button>
            </a>
          </div>
        </div>

      </div>
    </div>
  </nav>

  <!-- MAIN -->
  <main class="container-fluid p-0">

    <!--PRIMEIRA SECTION-->
    <section id="menu-inicio" class="container-fluid p-0 text-center bg-light py-5">
      <div class="container">
        <div class="row flex-column flex-md-row">
          <div class="col d-flex flex-column justify-content-center sm-12 md-12 lg-12">
            <h1 class="text-start mb-3 fw-semibold text-primary title-shadow">Otimize sua gestão de estoque com nosso sistema intuitivo e fácil de usar.</h1>
            <p class="text-start mb-3 fs-5">Gerencie seu estoque de forma eficiente e rentável com nosso sistema intuitivo e fácil de usar, com monitoramento de níveis, rastreamento de movimentos e relatórios avançados para tomada de decisões informadas. Tranquilidade garantida.</p>
            <div class="inicioBtn text-start">
              <button type="button" class="btn btn-outline-primary me-2">Entre em contato</button>
              <button type="button" class="btn btn-outline-primary me-2">Mais sobre nós</button>
            </div>
          </div>
          <div class="d-flex align-items-center justify-content-center col sm-12 md-12 lg-12">
            <img class="inicioImg" src="img\sectionInicio.svg" alt="auto" width="80%" height="auto">
          </div>
        </div>
      </div>
    </section>

    <!--SEGUNDA SECTION-->
    <section id="menu-sobre" class="container-fluid p-0 text-center bg-primary bg-gradient  py-5">
      <div class="container">
        <div class="row flex-column flex-md-row">

          <div class="col d-flex align-items-center justify-content-center overflow-hidden">
            <img src="img\Data extraction-pana.svg" alt="" width="80%" height="auto">
          </div>
          <div class="col d-flex flex-column text-start align-items-start justify-content-center ">
            <div class="p-5 m-0 bg-light border border-primary shadow-sm rounded">
              <h1 class="text-uppercase fw-bold text-primary title-shadow">Box Vault</h1>
              <p class="fs-5">Não há dúvidas de que um gerenciamento eficiente de estoque pode levar a uma redução nos custos operacionais e a uma maior lucratividade do negócio. Com o nosso sistema de gerenciamento de estoque, você pode ter uma visão clara das informações de estoque em tempo real, o que pode ajudar a evitar faltas de estoque e excessos de inventário. Entre em contato conosco agora e descubra como podemos ajudar a otimizar seus processos de gerenciamento de estoque.</p>
              <h5 class="fs-5">Porque usar Box Vault:</h5>
              <ul class="list-unstyled fs-5">
                <li class="ms-3">Monitoramento de estoque</li>
                <li class="ms-3">Gerenciamento de reabastecimento</li>
                <li class="ms-3">Rastreamento de vendas</li>
                <li class="ms-3">Gerenciamento de inventário</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>

    <!--TERCEIRA SECTION-->
    <section id="menu-recursos" class="container-fluid p-0 text-center bg-light  py-5">
      <div class="container py-5">
        <!--row titulo-->
        <div class="row">
          <!--titulo e descricao da seção-->
          <div class="col text-start">
            <h1 class="fw-bold text-uppercase text-primary title-shadow">Benefícios do Box Vault</h1>
            <p class="fs-3">Descubra como o Box Vault pode ajudar a melhorar o gerenciamento de estoque do seu negócio. Com recursos avançados de rastreamento e análise, reduza custos operacionais e aumente a eficiência. Experimente agora e veja a diferença.</p>
          </div>
        </div>
        <!--row cards-->
        <div class="row align-items-stretch py-5 gy-5">
          <!--card eficiencia-->
          <div class="col d-flex justify-content-center">
            <!--galeria cards de beneficios-->
            <div class="card shadow p-3" style="width: 20rem;">
              <img src="img\Efficiency-amico.svg" class="card-img-top" alt="..." width="200" height="200">
              <div class="card-body text-center">
                <h5 class="card-title">Eficiência</h5>
                <p class="card-text">
                  Mais produção com menos recursos e redução de custos para seu negócio, além de aumentar a satisfação do cliente com entregas rápidas e precisas. Aperfeiçoar a gestão de recursos e aumentar a lucratividade do negócio.</p>
              </div>
            </div>
          </div>
          <!--card automacao-->
          <div class="col d-flex justify-content-center">
            <!--galeria cards de beneficios-->
            <div class="card shadow p-3" style="width: 20rem;">
              <img src="img\Data extraction-bro.svg" class="card-img-top" alt="..." width="200" height="200">
              <div class="card-body text-center">
                <h5 class="card-title">Automação</h5>
                <p class="card-text">Aumento da eficiência, redução de erros e aumento da produtividade,levando a uma maior lucratividade do negócio. A automação pode liberar os funcionários para outras tarefas que exigem habilidades humanas, como a interação com clientes e tomada de decisões estratégicas.</p>
              </div>
            </div>
          </div>
          <!--card estrategia-->
          <div class="col d-flex justify-content-center">
            <!--galeria cards de beneficios-->
            <div class="card shadow p-3" style="width: 20rem;">
              <img src="img\Development focus-amico.svg" class="card-img-top" alt="..." width="200" height="200">
              <div class="card-body text-center">
                <h5 class="card-title">Estratégia</h5>
                <p class="card-text">Permite identificar e aproveitar oportunidades de crescimento, bem como se adaptar às mudanças do mercado. Com uma estratégia bem definida, seu negócio pode aumentar a competitividade, melhorar a eficiência e alcançar melhores resultados financeiros.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- FOOTER -->
  <footer id="menu-contato" class="bg-primary bg-gradient text-white pt-5 pb-2">
    <div class="container text-center text-md-left">
      <div class="row text-center text-md-left align-items-center">
        <!--FOOTER-CONTAINER-IMAGE-->
        <div class="d-none d-sm-flex justify-content-center col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 col-xxl-4 text-start">
          <img class="" src="img\Mobile Marketing-cuate.svg" alt="" height="250" width="250">
        </div>
        <!--FOOTER-LINKS-UTEIS-->
        <div class="g-5 col-xs-12 col-sm-12 col-md-5 col-lg-4 col-xl-4 col-xxl-4  mx-auto text-start d-flex flex-column align-items-center justify-content-center">
          <div class="text-center text-md-start">
            <h5 class="fs-4 text-uppercase fw-bold text-light title-shadow">Links Úteis</h5>
            <p>
              <a class="text-uppercase fw-semibold  fs-5 letter-space fs-5 link-light text-dark nav-link" href="#">Página inicial</a>
            </p>
            <!---->
            <p>
              <a class="text-uppercase fw-semibold  fs-5 letter-space fs-5 link-light text-dark nav-link" href="#">Cadastro</a>
            </p>
            <!---->
            <p>
              <a class="text-uppercase fw-semibold  fs-5 letter-space fs-5 link-light text-dark nav-link" href="#">Login</a>
            </p>
          </div>

        </div>
        <!--FOOTER-CONTATO-->
        <div class="g-5 col-xs-12 col-sm-12 col-md-5 col-lg-4 col-xl-4 col-xxl-4  mx-auto text-start d-flex flex-column align-items-center justify-content-center">
          <div class="text-center text-md-start">
            <h5 class="fs-4 text-uppercase fw-bold text-light title-shadow">
              Contato
            </h5>
            <p>
              <span class="fw-semibold  fs-5 letter-space">Botucatu, SP</span>
            </p>
            <!---->
            <p>
              <span class="fw-semibold  fs-5 letter-space">contato@boxvault.com.br</span>
            </p>
            <!---->
            <p>
              <span class="fw-semibold  fs-5 letter-space">(14) 99999-9999</span>
            </p>

            <!-- BOTOES REDES SOCIAIS - IMPLEMENTAR
            <div class="d-flex gap-3 justify-content-center">
              <p class="footer-redes-sociais-icon ">
                <a href="#" class="btn-floating btn-sm text-white" style="font-size: 28px;"><i class="fab fa-facebook mb-3 icon-shadow text-dark"></i></a>
              </p>
              
              <p class="footer-redes-sociais-icon">
                <a href="#" class="btn-floating btn-sm text-white" style="font-size: 28px;"><i class="fab fa-twitter mb-3"></i></a>
              </p>
              
              <p class="footer-redes-sociais-icon">
                <a href="#" class="btn-floating btn-sm text-white" style="font-size: 28px;"><i class="fab fa-google-plus mb-3"></i></a>
              </p>
              
              <p class="footer-redes-sociais-icon">
                <a href="#" class="btn-floating btn-sm text-white" style="font-size: 28px;"><i class="fab fa-linkedin-in mb-3"></i></a>
              </p>
            </div>
             BOTOES REDES SOCIAIS - IMPLEMENTAR -->

          </div>
        </div>
        <hr class="mb-4">
        <!--FOOTER-COPY-->
        <div class="row align-items-center text-shadow">
          <p>Copyright @2020All rights reservedby:
            <a href="#" style="text-decoration: none;">
              <strong class="text-white fw-bold">
                Box Vault
              </strong>
            </a>
          </p>
        </div>
      </div>
    </div>
  </footer>
  
  <!-- Link de referência ao JS do Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>