<?php foreach ($usersResult as $user): ?>
    <p>Имя:  <?= $user['first_name'] ?></p>
    <p>Фамилия:  <?= $user['last_name'] ?></p>
    <p>Пол:  <?= $user['gender'] ?></p>
    <p>Дата рождения:  <?= $user['birth_date'] ?></p>
    <hr>
<?php endforeach; ?>
