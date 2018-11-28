<?php
/**
 * Created by PhpStorm.
 * User: NoteBook
 * Date: 22.11.2018
 * Time: 14:14
 */
//\app\models\Blog::getPagination();

\app\core\Helper::debug(\app\models\Blog::getPagination());
$pagination = \app\models\Blog::getPagination();

?>


<section>
    <div class="container">
        <div class="row">
            <?php include __DIR__.'/../common/sidebar.php'?>

            <div class="col-sm-9">
                <div class="blog-post-area">
                    <h2 class="title text-center">Latest From our Blog</h2>
                    <?php foreach ($pages as $post):?>
                    <div class="single-blog-post">
                        <h2>Статья № <?=$post['id']?></h2>
                        <h3><?=$post['name']?></h3>

                        <div class="post-meta">
                            <ul>
                                <li><i class="fa fa-user"></i> Mac Doe</li>
                                <li><i class="fa fa-clock-o"></i> 1:33 pm</li>
                                <li><i class="fa fa-calendar"></i> DEC 5, 2013</li>
                            </ul>
                            <span>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-half-o"></i>
								</span>
                        </div>
                        <a href="">
                            <img src="/Eshopper/images/blog/blog-one.jpg" alt="">
                        </a>
                        <p><?=$post['content']?></p>
                        <a class="btn btn-primary" href="/blog/article/<?=$post['id']?>">Read More</a>
                    </div>
                    <?php endforeach ?>

                    <div class="pagination-area">
                        <ul class="pagination">
                            <?php for($i=1;$i<$pagination;$i++){
                                if( \app\core\App::$pageId== $i){
                                     echo '<li><a href="/blog/'.$i.'" class="active">'.$i.'</a></li>';
                                }else{
                                    echo '<li><a href="/blog/'.$i.'">'.$i.'</a></li>';
                                }
                            }
                           ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>