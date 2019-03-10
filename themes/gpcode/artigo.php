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
                        <h1><?= $post_title; ?></h1>
                    </header>
                    <div class="time">
                        <span>Postado por: <b>Railan Bernardo</b> em</span>
                        <time datetime="<?= date('Y-m-d', strtotime($post_date)); ?>" pubdate> <?= date('d/m/Y H:i', strtotime($post_date)); ?><span> Hs</span></time>
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
                        <?= Check::Image('uploads' . DIRECTORY_SEPARATOR . $post_cover, $post_title, 578); ?>
                    </div>

                    <div class="box_artigo_content_desc">
                        <p>
                            <?= $post_content; ?>
                        </p>
                    </div>
                </article>
  
 
            </section>

            <!-- Main aside -->
            <?php
                require(REQUIRE_PATH . '/inc/aside.inc.php');
            ?>
         </section>
    
    <!-- Relacionados -->
    <section class="relacionado">
        <header>
                <h1>Recomendadas pra Você</h1>
        </header>
        <div class="box_relacionadas">
        <?php
            $readMore = new Read;
            $readMore->ExeRead("ws_posts", "WHERE post_status = 1 AND post_id != :id AND post_category = :cat ORDER BY rand() LIMIT 8", "id={$post_id}&cat={$post_category}");
            if ($readMore->getResult()):
                $View = new View;
                $tpl_r = $View->Load('article-recomenda');
                
                        foreach ($readMore->getResult() as $more):
                            $more['post_title'] = Check::Words($more['post_title'], 3);
                            $more['datetime'] = date('Y-m-d', strtotime($more['post_date']));
                            $more['pubdate'] = date('d/m/Y H:i', strtotime($more['post_date']));
                            $more['post_content'] = Check::Words($more['post_content'], 13);

                            $View->Show($more, $tpl_r);
                        endforeach;
            endif;
            ?>
        </div>
    </section>
                <!-- Ads_950 -->
            <section class="ads_950">

            </section>
     <div class="clear"></div>
     </div>
    </main><!-- End Main container  -->