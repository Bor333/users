<?php foreach ($usersResult as $user): ?>
    <p>Имя: <?= $user['first_name'] ?></p>
    <p>Фамилия: <?= $user['last_name'] ?></p>
    <p>Пол: <?= $user['gender'] ?></p>
    <p>Дата рождения: <?= $user['birth_date'] ?></p>
    <form method="post" action="/delete">
        <input hidden type="text" name="id" value="<?= $user['id'] ?>">
        <input type="submit" value="delete">
    </form>
    <form method="post" action="/update">
        <input hidden type="text" name="id" value="<?= $user['id'] ?>">
        <input hidden type="text" name="first_name" value="<?= $user['first_name'] ?>">
        <input hidden type="text" name="last_name" value="<?= $user['last_name'] ?>">
        <input hidden type="text" name="gender" value="<?= $user['gender'] ?>">
        <input hidden type="text" name="birth_date" value="<?= $user['birth_date'] ?>">
        <input type="submit" value="update">
    </form>
    <hr>
<?php endforeach; ?>
