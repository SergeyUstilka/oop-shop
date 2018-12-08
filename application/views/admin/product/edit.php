<?php
//\app\core\Helper::debug($brands);
//\app\core\Helper::debug($product);
?>
<div class="col-lg-12">
    <div class="card">
        <div class="card-header"><strong>Товар</strong><small> редактировать</small></div>
        <div class="card-body card-block">
            <form  method="post" enctype="multipart/form-data" >
                <div class="form-group"><label for="name" class=" form-control-label">Название</label>
                    <input type="text" id="name"  class="form-control" name="name" value="<?=$product->name?>">
                </div>
                <div class="form-group"><label for="price" class=" form-control-label">Цена</label>
                    <input type="text" id="price"  class="form-control" name="price" value="<?=$product->price?>">
                </div>
                <div class="form-group"><label for="description" class=" form-control-label">Описание</label>
                    <input type="text" id="description"  class="form-control" name="description" value="<?=$product->description?>">
                </div>
                <div class="form-group"><label for="company" class=" form-control-label">Категория</label>
                    <select name="category_id" id="">
                        <?php foreach ($categories as $category):?>
                            <?php  if($category['id']== $product->category_id):?>
                                <option value="<?=$category['id']?>" selected><?=$category['name']?></option>
                            <?php else:?>
                                <option value="<?=$category['id']?>" ><?=$category['name']?></option>
                            <?php endif; endforeach;?>
                    </select>

                </div>
                <div class="form-group"><label for="company" class=" form-control-label">Бренды</label>
                    <select name="brand_id" id="">
                        <?php foreach ($brands as $brand):?>
                        <?php  if($brand['id']== $product->brand_id):?>
                            <option value="<?=$brand['id']?>" selected><?=$brand['name']?></option>
                        <?php else:?>
                            <option value="<?=$brand['id']?>" ><?=$brand['name']?></option>
                        <?php endif; endforeach;?>
                    </select>

                </div>
                <div class="form-group">
                    <label  class=" form-control-label">Загрузить другое изображение</label>
                </br><input type="file" name="image">
                </div>
                <div class="form-group col-md-4"><label for="img" class=" form-control-label">Изображение</label>
                    <img src="/public/product/<?=$product->img?>">
                </div>

                <button type="submit">Добавить</button>
            </form>
        </div>
    </div>
</div>