<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alueasy</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>

     <!--INICIO DESTAQUE TOPO SITE -->
    <div class="destaque">

        <!--MENU DO SITE -->
        <nav id="navBar">
           <a href="<?= base_url('home_site') ?>"> <img src="<?= base_url('assets/img/logo alueasy.png') ?>" alt="" class="logo"></a>
            <ul class="nav-links">
                <li><a href="<?= base_url('home_site/categorias') ?>" title="" class="active">Lugares Populares</a></li>
                <li><a href="#" title="">Viajar Agora</a></li>
                <li><a href="#" title="">Pacotes Online</a></li>
            </ul>
            <a href="" title="" class="cadastro-btn">Cadastre-se Agora</a>

             <!--MENU CELULAR SITE -->
            <ion-icon name="menu-outline" class="menu-outline" onclick="menucelular()"></ion-icon>
             <!--MENU CELULAR SITE-->

        </nav>
         <!--FIM MENU DO SITE -->

       <!--INICIO CORPO MENU -->
        <div class="container">
            <h1>Encontre Sua Próxima Estadia</h1>
             <!--INICIO BUSCA -->
             <div class="busca-site">
                <form action="" method="post">

                    <div class="local-input">
                        <label>Localização</label>
                        <input type="text" placeholder="Onde você está indo? ">
                    </div>

                    <div>
                        <label>Data Inicial</label>
                        <input type="text" placeholder="Adicione a data">
                    </div>

                    <div>
                        <label>Data Final</label>
                        <input type="text" placeholder="Adicione a data">
                    </div>


                    <div>
                        <label>Quem</label>
                        <input type="text" placeholder="Adicionar hóspedes">
                    </div>

                    <button type="submit"><img src="<?= base_url('assets/img/busca-maykon.png') ?>" alt=""></button>

                </form>
             </div>
             <!--FIM BUSCA -->
        </div>
         <!--FIM CORPO MENU -->

    </div>
     <!--FIM TOPO SITE -->

      <!--INICIO CORPO  SITE -->
      <div class="container">
        <h2 class="sub-titulo">Exclusivos</h2>

        <!--INICIO EXCLUSIVOS CORPO SITE -->
        <div class="exclusivos">

            <div>
                <img src="<?= base_url('assets/img/miniatura-1.png') ?>" alt="">
                <span>
                    <h3>Bombinhas</h3>
                    <p>Comprar R$ 777</p>
                </span>
            </div>
            
            <div>
                <img src="<?= base_url('assets/img/miniatura-2.png') ?>" alt="">
                <span>
                    <h3>Mariscal</h3>
                    <p>Comprar R$ 777</p>
                </span>
            </div>

            <div>
                <img src="<?= base_url('assets/img/miniatura-3.png') ?>" alt="">
                <span>
                    <h3>Nordeste</h3>
                    <p>Comprar R$ 777</p>
                </span>
            </div>

            <div>
                <img src="<?= base_url('assets/img/miniatura-4.png') ?>" alt="">
                <span>
                    <h3>Nordeste</h3>
                    <p>Comprar R$ 777</p>
                </span>
            </div>

            <div>
                <img src="<?= base_url('assets/img/miniatura-5.png') ?>" alt="">
                <span>
                    <h3>Camboriu</h3>
                    <p>Comprar R$ 777</p>
                </span>
            </div>

            <div>
                <img src="<?= base_url('assets/img/miniatura-6.png') ?>" alt="">
                <span>
                    <h3>Jalapão</h3>
                    <p>Comprar R$ 777</p>
                </span>
            </div>
            
            <div>
                <img src="<?= base_url('assets/img/miniatura-7.png') ?>" alt="">
                <span>
                    <h3>Curitiba</h3>
                    <p>Comprar R$ 777</p>
                </span>
            </div>

            <div>
                <img src="<?= base_url('assets/img/miniatura-8.png') ?>" alt="">
                <span>
                    <h3>Maranhão</h3>
                    <p>Comprar R$ 777</p>
                </span>
            </div>

            <div>
                <img src="<?= base_url('assets/img/miniatura-9.png') ?>" alt="">
                <span>
                    <h3>Tocantins</h3>
                    <p>Comprar R$ 777</p>
                </span>
            </div>

            <div>
                <img src="<?= base_url('assets/img/miniatura-10.png') ?>" alt="">
                <span>
                    <h3>Rio </h3>
                    <p>Comprar R$ 777</p>
                </span>
            </div>
        
        </div>

        <!--FIM  EXCLUSIVOS CORPO SITE-->


        <!--INICIO LOCAIS MAIS ALUGADOS CORPO SITE -->
        <h2 class="sub-titulo">Locais Mais Visitados</h2>

        <div class="lacais-quentes">

            <div>
                <img src="assets/img/foto-1.jpg" alt="">
                <h3>Rio de Janeiro</h3>
            </div>

            <div>
                <img src="assets/img/foto-2.jpg" alt="">
                <h3>Jalapão TO</h3>
            </div>

            <div>
                <img src="assets/img/foto-3.jpg" alt="">
                <h3>Bombinhas SC</h3>
            </div>

            
            <div>
                <img src="assets/img/foto-4.jpg" alt="">
                <h3>Palmas TO</h3>
            </div>


        </div>
         <!--FIM LOCAIS MAIS ALUGADOS CORPO SITE -->


    <!--INICIO CHAMADA PARA AÇÃO CORPO SITE -->
       <div class="cta">
        <h3>Nossa <br>História</h3>
        <p>Empresa fundada em 2020 e desde então vem crescendo absurdamente em todos território nacional</p>
        <a href="" class="cta-btn">Saiba Mais</a>
       </div>
    <!--FIM CHAMADA PARA AÇÃO CORPO  SITE -->


     <!-- INICIO STORIES CORPO SITE -->
     <h2 class="sub-titulo">Turismo</h2>
      <div class="stories">

      <div>
        <img src="<?= base_url('assets/img/historia-1.png') ?>" alt="">
        <p>O Melhor Turismo é no Brasil Apenas R$ 777,77</p>
      </div>

      <div>
        <img src="<?= base_url('assets/img/historia-2.png') ?>" alt="">
        <p>O Melhor Turismo é no Brasil Apenas R$ 777,77</p>
      </div>


      <div>
        <img src="<?= base_url('assets/img/historia-3.png') ?>" alt="">
        <p>O Melhor Turismo é no Brasil Apenas R$ 777,77</p>
      </div>

      
    </div>
     <!-- FIM STORIES CORPO SITE -->



     <footer class="rodape"> 
        <a href=""><ion-icon name="logo-facebook"></ion-icon></a>
        <a href=""><ion-icon name="logo-instagram"></ion-icon></a>
        <a href=""><ion-icon name="logo-linkedin"></ion-icon></a>
        <a href=""><ion-icon name="logo-youtube"></ion-icon></a>
        <hr>
     <p>Todos os direitos reservados © 2024</p>
     </footer>


      </div>
      <!--FIM CORPO SITE -->
      <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
      <script src="<?= base_url('assets/js/app.js') ?>"></script>
</body>
</html>