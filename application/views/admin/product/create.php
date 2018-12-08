<?php

?>
<div class="col-lg-12">
    <div class="card">
        <div class="card-header"><strong>Товар</strong><small> Добавить</small></div>
        <div class="card-body card-block">
            <form action="/admin/product/create" method="post" enctype="multipart/form-data" >
                <div class="form-group"><label for="name" class=" form-control-label">Название</label>
                    <input type="text" id="name"  class="form-control" name="name">
                </div>
                <div class="form-group"><label for="price" class=" form-control-label">Цена</label>
                    <input type="text" id="price"  class="form-control" name="price">
                </div>
                <div class="form-group"><label for="description" class=" form-control-label">Описание</label>
                    <input type="text" id="description"  class="form-control" name="description">
                </div>
                <div class="form-group"><label for="company" class=" form-control-label">Категория</label>
                    <select name="category_id" id="">
                        <?php foreach ($categories as $category):?>
                        <option value="<?=$category['id']?>"><?=$category['name']?></option>
                        <?php endforeach;?>
                    </select>

                </div>
                <div class="form-group"><label for="company" class=" form-control-label">Бренды</label>
                    <select name="brand_id" id="">
                        <?php foreach ($brands as $brand):?>
                            <option value="<?=$brand['id']?>"><?=$brand['name']?></option>
                        <?php endforeach;?>
                    </select>

                </div>
                <div class="form-groupt">
                    <input type="file" name="image">
                </div>


                <button type="submit">Добавить</button>
            </form>
        </div>
    </div>
</div>