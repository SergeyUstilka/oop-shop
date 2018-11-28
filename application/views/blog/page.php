<?php
/**
 * Created by PhpStorm.
 * User: NoteBook
 * Date: 24.11.2018
 * Time: 13:54
 */
\app\core\Helper::debug($blogPage);
?>

<section>
    <div class="container">
        <div class="row">
            <?php include __DIR__.'/../common/sidebar.php'?>
            <div class="col-sm-9">
                <div class="blog-post-area">
                    <h2 class="title text-center">Заголовок статьи</h2>
                    <div class="single-blog-post">
                        <h3><?=$blogPage->name?></h3>
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
                        <div>
                            <?=$blogPage->content?>
                        </div>
                        <div class="pager-area">
                            <ul class="pager pull-right">
                                <li><a href="#">Pre</a></li>
                                <li><a href="#">Next</a></li>
                            </ul>
                        </div>
                    </div>
                </div><!--/blog-post-area-->



                <div class="socials-share">
                    <a href=""><img src="images/blog/socials.png" alt=""></a>
                </div><!--/socials-share-->

            </div>
        </div>
    </div>
</section>
