<?php
/**
 * Created by PhpStorm.
 * User: NoteBook
 * Date: 03.12.2018
 * Time: 16:40
 */
?>

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Категории</strong></br></br><a href="/admin/category/create" class="btn btn-primary">Добавить категорию</a>
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Название</th>
                    <th scope="col">Описание</th>
                    <th scope="col">Действия</th>
                </tr>
                </thead>
                <tbody>
                <?php for($i=0; $i<count($categories); $i++): ?>
                <tr>
                    <th scope="row"><?=$i+1?></th>
                    <td><?=$categories[$i]['name']?></td>
                    <td><?=$categories[$i]['description']?></td>
                    <td>
                        <a href="/admin/category/edit/<?=$categories[$i]['id']?>" class="btn btn-secondary">Редактировать</a>
                        <a href="/admin/category/store/<?=$categories[$i]['id']?>" class="btn btn-danger">Удалить</a>
                    </td>
                </tr>
                <?php endfor; ?>
                </tbody>
            </table>

        </div>
    </div>
</div>
