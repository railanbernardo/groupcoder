<?php
if($Link->getData()):
    extract($Link->getData());
else:
    header('Location: ' . HOME . DIRECTORY_SEPARATOR . '404');
endif;
?>
    <!-- Main container, corpo do site -->
    <main class="main_content">
     <div class="content">
        <?php
            require(REQUIRE_PATH . '/inc/categori.inc.php')
        ?>
         <!-- ads 950 -->
         <section class="ads_950">
            
         </section>

         <!-- Main content artigo -->
         <section class="main_content_artigo">

            <!-- Box content artigos -->
            <section class="main_box_content">
                <article class="main_box_artigo_content">
                    <header class="header_artigo_title">
                        <h1>Você ainda usa jQuery? …Será que você realmente precisa dele?</h1>
                    </header>
                    <div class="time">
                        <span>Postado por: <b>Railan Bernardo</b> em</span>
                        <time>08/03/2019 ás <span>19:20 Hs</span> | <a href="">Destaques</a></b></time>
                    </div>

                    <!-- Compartilhar -->
                    <div class="compartilhar">
                        <ul class="compartilha_list">
                            <li><a href="" title="Compartilhar no Facebook" class="facebook"><i class="icon-facebook-square"></i>Compartilhar no Facebook</a></li>
                            <li><a href="" title="Compartilhar no Twitter" class="twitter"><i class="icon-twitter-alt"></i>compartilhar no Twitter</a></li>
                            <li><a href="" title="Fazer um Comentário" class="comentario"><i class="icon-comment-discussion"></i>Comentar</a></li>
                        </ul>
                    </div>

                    <!-- Ads_950_200 -->
                    <div class="ads_850_200">

                    </div>

                    <div class="box_img_artigo">
                        <img src="<?= INCLUDE_PATH ?>/images/ovg.jpg"/>
                    </div>

                    <div class="box_artigo_content_desc">
                        <p>
                            <a href="">Aqui um link</a>
                            Neste artigo, eu vou apresentar a vocês leitores, uma guia chamada “You Might Not Need jQuery”, que tem como proposta mostrar, como usar JavaScript puro, de forma realmente simples, como uma alternativa ao jQuery. Além disso, vou apresentar um pouco da minha trajetória com o jQuery e meu ponto de vista do porque eu decidi não usar mais essa biblioteca JavaScript.

Um pouco da minha História com jQuery e JavaScript puro
Quando eu comecei minha carreia como Desenvolvedor Web eu tinha no meu leque de habilidades o conhecimento básico de HTML, CSS e um pouco de PHP. Eu lembro que um dia um cliente me pediu que no site dele, tivesse um “carousel” com alguns produtos passando e um link para esses produtos.

Naquela época era impossível fazer isso só com HTML e CSS, foi ai que eu tive meu primeiro contato com JavaScript. O problema é que esse meu primeiro contato com JavaScript não foi nada agradável! Muito pelo contrário, a linguagem me assuntou bastante e eu decidi procurar alternativas mais simples e ao invés de aprender JavaScript puro, eu pulei alguns degraus e fui direto para o jQuery.

Quando eu comecei usar jQuery nos meus projetos, eu esqueci completamente de JavaScript. Chegou um ponto em que eu pesquisavas coisas como “Como fazer X coisa em jQuery…”, e se eu achasse um resultado que ensinava fazer com JavaScript puro, eu simplesmente ignorava e ia atrás da solução com jQuery. O grande problema dessa abordagem é que, eu abstrai totalmente da minha cabeça o simples fato de que jQuery, na verdade, é tão somente JavaScript!

Quando, com o tempo, eu tive a necessidade de fazer coisas mais complexas, como por exemplo, “Two Way Data Bind”, eu não sabia nem ao menos por onde começar a pesquisar e quando eu achava uma solução, mesmo que em jQuery, como por exemplo o jquerymy.js, eu ficava completamente perdido, pois eu sabia jQuery, mas não tinha a menor noção de JavaScript e existiam diversos conceitos que precisam de um conhecimento prévio, de um pouco de base.

O ponto de eu estar contato isso aqui, é que eu tenho certeza que muitos dos leitores vão se identificar com essa situação. Para muitos, jQuery é uma alternativa mais simples e funcional ao javaScript puro, tanto que muito chegam a pensar que os dois são tecnologias separadas. Porém, quando eu perdi o medo de estudar javaScript, e encarrei ele de frente, eu percebi algo fantástico: talvez eu não precise mais de jQuery!

Mas afinal, porque não usar mais o jQuery?
Nem de longe a ideia desse artigo ou da ferramenta que ele cita é “cargar regra” contra o uso do jQuery. A reflexão proposta é se você realmente precisa usa-lo.

Como eu já defendi em outros artigos como o “Como criar seu próprio Grid System Responsivo em CSS sem usar Frameworks”, se sua única necessidade é apertar um parafuso, você não precisa de uma caixa de ferramentas inteira, você só precisa de uma chave de fenda. Então pra que carregar todo peso extra de outras ferramentas?

A lógica no Desenvolvimento Web é a mesma. Você não precisa carregar todos os 80kb do jQuery (minificado) na sua aplicação, se sua única necessidade é, por exemplo, manipular elementos no DOM ou fazer requisições Ajax.

Então a questão não é usar ou não jQuery e sim, enter os mecanismos por trás do mesmo, para de forma mais consciente, decidir quando usa-lo.

No meu caso, eu decidi não usar mais jQuery nos meus projetos pessoas e nem nos projetos que eu atuo como gerente. Isso pelo simples fato de que, dentro dos projetos que eu atuo, não existe uma necessidade real que justifique o peso extra na aplicação. Além disso, abrir mão do jQuery me forçou a aprender JavaScript, o que por sua vez me abriu as portas para um novo horizonte incrível de frameworks e bibliotecas como Vue.js e React.

Mas afinal, qual alternativa ao jQuery?
Eu passei muito, muito, muito tempo pensando em escrever um artigo e, consecutivamente, gravar um vídeo (o que ainda vou fazer), ensinando como migrar algumas das principais funções do jQuery para Javascript puro. Infelizmente eu passei tanto tempo pensando, que outra pessoa acabou fazendo antes de mim, e de fato, fez um trabalho muito melhor do que eu imaginaria poder fazer.

Sendo assim, se você quiser entender melhor como usar o JavaScript puro como alternativa ao jQuery, recomendo muito o estudo aprofundado do guia: YOU MIGHT NOT NEED JQUERY.

Como a leitura dessa guia, você vai aprender como usar JavaScript puro, para resolver problemas simples do dia a dia, tal como requisições Ajax, manipulação do DOM, manipulação de eventos, etc. Além disso, outro ponto forte dessa guia é que o mesmo apresenta outras bibliotecas menores que resolvem problemas específicos, como por exemplo Bonzo, que é uma alternativa para quem quer manipular o DOM de forma mais simples.

Por fim, apensar de tudo apresentado aqui, a decisão final sobre usar ou não jQuery cabe unicamente a você e seu gerente de projetos. Sendo assim, minha recomendação é que estude a fundo o JavaScript para que sua escolha seja a mais consciente possível. E aí, você ainda precisa de jQuery?
                            <img src="<?= INCLUDE_PATH ?>/images/ovg.jpg"/>
                        </p>
                    </div>
                </article>
  
 
            </section>

            <!-- Main aside -->
            <?php
                require(REQUIRE_PATH . '/inc/aside.inc.php');
            ?>
         </section>
   
                <!-- Ads_950 -->
            <section class="ads_950">

            </section>
     <div class="clear"></div>
     </div>
    </main><!-- End Main container  -->