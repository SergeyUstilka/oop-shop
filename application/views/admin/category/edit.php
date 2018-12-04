<?php
\app\core\Helper::debug($category);

?>
<div class="col-lg-12">
    <div class="card">
        <div class="card-header"><strong>Категория</strong><small> редактировать</small></div>
        <div class="card-body card-block">
            <form action="/admin/category/store/<?=$category->id?>" method="post">
                <div class="form-group"><label for="company" class=" form-control-label">Company</label>
                    <input type="text" id="company" value="<?=$category->name?>" class="form-control" name="name">
                    </br>
                    <input type="text" id="description" value="<?=$category->description?>" class="form-control" name="description">
                </div>
                <button type="submit">Редактировать</button>
            </form>
        </div>
    </div>
</div>