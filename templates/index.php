<?php foreach ($usersResult as $user): ?>
    <p>Имя: <?= $user['first_name'] ?></p>
    <p>Фамилия: <?= $user['last_name'] ?></p>
    <p>Пол: <?= $user['gender'] ?></p>
    <p>Дата рождения: <?= $user['birth_date'] ?></p>
    <form method="post" action="/delete">
        <input hidden type="text" name="id" value="<?= $user['id'] ?>">
        <input type="submit" value="delete">
    </form>
    <hr>
<?php endforeach; ?>
