<form method="post" action="/update">
    <input type="text" name="first_name" value="<?= $first_name ?>"> first name<br><br>
    <input type="text" name="last_name" value="<?= $last_name ?>"> last name<br><br>
    <select name="gender" value="<?= $gender ?>">gender
        <option value="male">Male</option>
        <option value="female">Female</option>
    </select>
    <input type="date" name="birth_date" value="<?= $birth_date ?>"> birth date<br><br>
    <input type="submit">
</form>