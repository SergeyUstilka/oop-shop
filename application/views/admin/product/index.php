<?php
//\app\core\Helper::debug($categories);

?>
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Товары</strong></br></br><a href="/admin/product/create" class="btn btn-primary">Добавить товар</a>
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Название</th>
                    <th scope="col">Цена</th>
                    <th scope="col">Описание</th>
                    <th scope="col">Категория</th>
                    <th scope="col">Бренд</th>
                    <th scope="col">Изображение</th>
                    <th scope="col">Действия</th>
                </tr>
                </thead>
                <tbody>
                <?php for($i=0; $i<count($products); $i++): ?>
                    <tr>
                        <th scope="row"><?=$i+1?></th>
                        <td><?=$products[$i]['name']?></td>
                        <td><?=$products[$i]['price']?></td>
                        <td><?=$products[$i]['description']?></td>
                        <td><?=$products[$i]['category_id']?></td>
                        <td><?=$products[$i]['brand_id']?></td>
                        <td><img src="../upload/product/<?=$products[$i]['img']?>"></td>
                        <td>
                            <a href="/admin/product/edit/<?=$products[$i]['id']?>" class="btn btn-secondary">Редактировать</a>
                            <a href="/admin/product/store/<?=$products[$i]['id']?>" class="btn btn-danger">Удалить</a>
                        </td>
                    </tr>
                <?php endfor; ?>
                </tbody>
            </table>

        </div>
    </div>
</div>
