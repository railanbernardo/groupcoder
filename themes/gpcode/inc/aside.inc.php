<?php
$View = (!empty($View) ? $View : $View = new View);
$post_id = (!empty($post_id) ? $post_id : null);

$Side = new Read;
$tpl_s = $View->Load('article-aside');
?>
<aside class="main_aside_lateral">

            <!-- ads_250 -->
                <div class="ads_lateral_250">

                </div>
                
                <!-- artigos mais vistos -->
                <article class="box_controle_left">
                    <header class="title_header_mais_v">
                        <h1 class="icon-flame">
                            Artigos Mais Lidos
                        </h1>
                    </header>
 
                    <?php
                                $Side->ExeRead("ws_posts", "WHERE post_status = 1 AND post_id != :side ORDER BY post_views DESC LIMIT 10", "side={$post_id}");
                                if ($Side->getResult()):
                                    foreach ($Side->getResult() as $most):
                                        $most['post_tile'] = Check::Words($most['post_title'], 8);
                                        $View->Show($most, $tpl_s);
                                    endforeach;
                                endif;
                                ?>
                    

                </article>

                <!-- Ads 620 -->
                <article class="ads_620">
                    
                </article>
            </aside>