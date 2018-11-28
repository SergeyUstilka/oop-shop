<?php
/**
 * Created by PhpStorm.
 * User: NoteBook
 * Date: 28.11.2018
 * Time: 14:47
 */
//\app\core\Helper::debug($products);
?>
<section>
    <div class="container">
        <div class="row">
<?php include '../common/sidebar.php'?>
            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Features Items</h2>
                    <? foreach ($products as $product):?>

                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="/Eshopper/images/shop/product12.jpg" alt="">
                                    <h2>BYN <?=$product['price']?></h2>
                                    <p><?=$product['name']?></p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
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
                    <ul class="pagination">
                        <li class="active"><a href="">1</a></li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li>
                        <li><a href="">»</a></li>
                    </ul>
                </div><!--features_items-->
            </div>
        </div>
    </div>
</section>
