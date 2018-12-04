<?php
/**
 * Created by PhpStorm.
 * User: NoteBook
 * Date: 04.12.2018
 * Time: 16:22
 */

?>
<div class="col-lg-12">
    <div class="card">
        <div class="card-header"><strong>Категория</strong><small> создать</small></div>
        <div class="card-body card-block">
            <form action="/admin/category/store" method="post">
                <div class="form-group"><label for="company" class=" form-control-label">Название категории</label>
                    <input type="text" id="company"  class="form-control" name="name">
                </div>
                <div class="form-group"><label for="company" class=" form-control-label">Описание</label>
                    <input type="text" id="description"  class="form-control" name="description">
                </div>
                <button type="submit">Создать</button>
            </form>
        </div>
    </div>
</div>
