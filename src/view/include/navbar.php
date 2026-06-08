<?php
    $pagina_atual = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
?>

<header class="mb-5">

    <nav class="navbar navbar-expand-lg bg_principal fixed-top shadow-sm" data-bs-theme="dark"> 
        <div class="container-fluid"> 

            <a class="navbar-brand" href="/">
              <img src="/src/assets/img/logo.png" alt="">
            </a> 

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> 
              <span class="navbar-toggler-icon"></span> 
            </button> 

            <div class="collapse navbar-collapse" id="navbarSupportedContent"> 
                <ul class="navbar-nav me-auto mb-2 mb-lg-0"> 

                  <li class="nav-item"> 
                    <a class="nav-link <?= $pagina_atual == '/' ? 'active' : '' ?>" aria-current="page" href="/">Home</a> 
                  </li> 

                  <li class="nav-item"> 
                    <a class="nav-link <?= $pagina_atual == '/galeria' ? 'active' : '' ?>" href="/galeria">Galeria</a> 
                  </li> 

                  <li class="nav-item"> 
                    <a class="nav-link <?= $pagina_atual == '/informes' ? 'active' : '' ?>" href="/informes">Informes</a> 
                  </li> 

                  <li class="nav-item"> 
                    <a class="nav-link <?= $pagina_atual == '/sobre' ? 'active' : '' ?>" href="/sobre">Sobre Nós</a> 
                  </li> 

                  <li class="nav-item"> 
                    <a class="nav-link <?= $pagina_atual == '/institucional' ? 'active' : '' ?>" href="/institucional">Institucional</a> 
                  </li> 

                </ul> 

            </div> 

        </div> 

    </nav>

</header>

