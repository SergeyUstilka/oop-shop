<?php
/**
 * Created by PhpStorm.
 * User: NoteBook
 * Date: 07.12.2018
 * Time: 16:46
 */
\app\core\Helper::debug($photos);
?>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header"><strong>Товар</strong>
                <small> Добавить</small>
            </div>
            <div class="card-body card-block">
                <form method="post" enctype="multipart/form-data">
                    <div class="form-groupt">
                        <input type="file" name="image[]" multiple>
                    </div>
                    <button type="submit">Добавить</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <?php foreach ($photos as $photo):?>
    <div class="col-md-4">
        <img src="/public/product/<?=$photo->image_name?>" alt="">
    </div>
    <?php endforeach;?>
</div>
