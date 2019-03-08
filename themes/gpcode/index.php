<?php
$View = new View;
$tpl_h = $View->Load('article-home');
$tpl_s = $View->Load('article-aside');
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

               <?php
                //Destaques
                $getPage = filter_input(INPUT_GET, 'page', FILTER_VALIDATE_INT);
                $Pager = new Pager('index.php?page=');
                $Pager->ExePager($getPage, 12);
        
                $readPosts = new Read;
                $readPosts->ExeRead("ws_posts", "ORDER BY post_status ASC, post_date DESC LIMIT :limit OFFSET :offset", "limit={$Pager->getLimit()}&offset={$Pager->getOffset()}"); 
                    
        
             $cat = Check::CatByName('destaques');
             $post = new Read;
             $post->ExeRead("ws_posts", "WHERE post_status = 1 AND (post_cat_parent = :cat OR post_category = :cat) ORDER BY post_date DESC LIMIT :limit OFFSET :offset", "cat={$cat}&limit={$Pager->getLimit()}&offset={$Pager->getOffset()}");
            if (!$post->getResult()):
                WSErro('Desculpe, ainda não existem notícias cadastradas. Favor volte mais tarde!', WS_INFOR);
            else:
                foreach ($post->getResult() as $noticia):
                    $noticia['post_title'] = Check::Words($noticia['post_title'], 8);
                    $noticia['post_content'] = Check::Words($noticia['post_content'], 15);
                    $noticia['datetime'] = date('Y-m-d', strtotime($noticia['post_date']));
                    $noticia['pubdate'] = date('d/m/Y H:i', strtotime($noticia['post_date']));
                    $View->Show($noticia, $tpl_h);
                endforeach;
            endif;
               ?>
 
            </section>

            <!-- Main aside -->
            <?php
                require(REQUIRE_PATH . '/inc/aside.inc.php');
            ?>
         </section>
                 <!-- Paginator -->
                 <div class="paginator">
                <ul class="paginators">
                <?php
                $Pager->ExePaginator("ws_posts");
                echo $Pager->getPaginator();
                ?>
                </ul>
            </div>

            <section class="ads_950">

            </section>
     <div class="clear"></div>
     </div>
    </main><!-- End Main container  -->