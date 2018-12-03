<?php
/**
 * Created by PhpStorm.
 * User: NoteBook
 * Date: 28.11.2018
 * Time: 14:47
 */
//\app\core\Helper::debug($products);
$pagination = \app\models\Product::getPagination();
?>
<section>
    <div class="container">
        <div class="row">
            <?php include __DIR__.'/../common/sidebar.php'?>
            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Features Items</h2>
                    <? foreach ($products as $product):?>

                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <a href="/shop/product/<?=$product['id']?>">
                                        <img src="/Eshopper/images/shop/product12.jpg" alt="">
                                        <h2>BYN <?=$product['price']?></h2>
                                        <p><?=$product['name']?></p>
                                    </a>
                                    <form action="/cart/add" method="post">
                                        <input type="hidden" name="id" value="<?=$product['id']?>">
                                        <button class="btn btn-default add-to-cart" type="submit" ><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                    </form>
                                </div>
                            </div>
                            <div class="choose">
                                <ul class="nav nav-pills nav-justified">
                                    <li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                    <li><a href=""><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <? endforeach;?>
                    <div class="clearfix"></div>
                    <div class="pagination-area">
                        <ul class="pagination">
                            <?php for($i=1;$i<=$pagination;$i++){
                                if( \app\core\App::$pageId== $i){
                                    echo '<li><a href="/shop/'.$i.'" class="active">'.$i.'</a></li>';
                                }else{
                                    echo '<li><a href="/shop/'.$i.'">'.$i.'</a></li>';
                                }
                            }
                            ?>
                        </ul>
                    </div>
                </div><!--features_items-->
            </div>
        </div>
    </div>
</section>
