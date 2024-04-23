<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listagem alueasy</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>

<body>


    <nav id="navBar" class="navalu">
        <a href="<?= base_url('home_site') ?>"></div><img src="<?= base_url('assets/img/logo alueasy.png') ?>" alt="" class="logo"></a>
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

    <div class="container">

        <div class="lista-imoveis">

            <div class="coluna-esquerda">
                <p>200+ Opções</p>
                <h1>Lista de imóveis</h1>



                <?php foreach($categorias as $categoria){?>
                <div class="imovel">
                    <div class="imovel-img">
                        <a href="imovel.html">
                        <img src="<?= base_url('assets/img/'.$categoria["link_img"]) ?>" alt="">
                        </a>
                    </div>

                    <div class="imovel-info">
                        <p><?=$categoria["titulo_secundario"];?></p>
                        <h3><?=$categoria["titulo_primario"] ?></h3>
                        <p><?=$categoria["qtd_quartos"];?> Quarto | <?=$categoria["qtd_banheiros"];?> Banheiros <?=$categoria["opcionais"];?></p>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star-half"></ion-icon>
                        <div class="imovel-valor">
                            <p><?=$categoria["qtd_hospedes"];?> Hóspedes</p>
                            <h4>R$<?=$categoria["valor_diaria"];?> <span>/ dia</span></h4>
                        </div>

                    </div>

                </div>
                <?php }?>   

            </div>

            <div class="coluna-direita">
                <div class="barra-lateral">
                    <h2>Filtro de busca</h2>
                    <h3>Tipo de imóvel</h3>
                    <form action="" method="post">

                        <div class="filtro">
                            <input type="checkbox" name="" id="">
                            <p>casa</p> <span>(0)</span>

                        </div>
                        <div class="filtro">
                            <input type="checkbox" name="" id="">
                            <p>Apartamento</p> <span>(0)</span>

                        </div>
                        <div class="filtro">
                            <input type="checkbox" name="" id="">
                            <p>Albergue</p> <span>(0)</span>

                        </div>
                        <div class="filtro">
                            <input type="checkbox" name="" id="">
                            <p>Chalé</p> <span>(0)</span>

                        </div>
                        <div class="filtro">
                            <input type="checkbox" name="" id="">
                            <p>Chácara</p> <span>(0)</span>

                        </div>
                        <h3>Facilidades</h3>
                        <div class="filtro">
                            <input type="checkbox" name="" id="">
                            <p>Ar Condicionado</p> <span>(0)</span>

                        </div>
                        <div class="filtro">
                            <input type="checkbox" name="" id="">
                            <p>Wifi</p> <span>(0)</span>
                        </div>
                        <div class="filtro">
                            <input type="checkbox" name="" id="">
                            <p>Psicina</p> <span>(0)</span>
                        </div>
                        <div class="filtro">
                            <input type="checkbox" name="" id="">
                            <p>Academia</p> <span>(0)</span>
                        </div>
                        <div class="filtro">
                            <input type="checkbox" name="" id="">
                            <p>Cozinha</p> <span>(0)</span>


                        </div>

                        <div class="barra-lateral-link">
                            <a href="">Veja Mais</a>
                        </div>

                        <h3>Estado / Cidade</h3>

                        <div class="filtro1">
                            <select name="" id="">,
                                <option value="">parana</option>
                                <option value="">tocantins</option>
                            </select>
                        </div>

                        <div class="filtro1">
                            <select name="" id="">,
                                <option value="">Rio de Janeiro</option>
                                <option value="">Niteroi</option>

                            </select>
                        </div>
                        <br>

                        <button class="cadastro-btn">Buscar</button>

                    </form>

                </div>

            </div>


        </div>
    </div>

    <div class="paginacao">
        <img src="<?= base_url('assets/img/arrow.png') ?>" alt="">
        <span class="ativo">1</span>
        <span>2</span>
        <span>3</span>
        <span>4</span>
        <span>5</span>
        <span>&middot; &middot; &middot; &middot;</span>
        <span>17</span>
        <img src="<?= base_url('assets/img/arrow.png') ?>" alt="" class="seta-direita">
    </div>

    <div>
        <footer class="rodape">
            <a href=""><ion-icon name="logo-facebook"></ion-icon></a>
            <a href=""><ion-icon name="logo-instagram"></ion-icon></a>
            <a href=""><ion-icon name="logo-linkedin"></ion-icon></a>
            <a href=""><ion-icon name="logo-youtube"></ion-icon></a>
            <hr>

            <p>Todos os direitos reservados © 2024</p>
        </footer>
    </div>



    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="<?= base_url('assets/js/app.js') ?>"></script>
</body>

</html>