<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Задание 4</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
if (!empty($messages['success'])){
    print '<div>' . $messages['success'] . '</div>';
}
?>

<div class="col-12 m order-2 order-sm-3" id="bc">

    <h1 id="c">Форма</h1>

    <form action="" method="POST" class="row g-3">

        <div class="col-md-6 col-sm-12">
            <label for="iname" class="form-label">
                Имя:<br>
            </label><br>
            <input name="name" class="form-control <?php if ($errors['name']) print 'error'; ?>" id="iname"
                   value="<?php print $values['name']; ?>" placeholder="Введите ваше имя" required>
        </div>
        <?php if ($errors['name']) {
            print '<div class="error-message">' . $messages['name'] . '</div>';
        } ?><br>

        <div class="col-md-6 col-sm-12">
            <label for="inmail" class="form-label">
                e-mail:<br>
            </label><br>
            <input type="email" name="email" class="form-control <?php if ($errors['email']) print 'error'; ?>"
                   id="inmail" value="<?php print($values['email']); ?>" placeholder="Введите ваш e-mail" required>
        </div>

        <div class="col-12">
            <label for="inbirth" class="form-label">
                Дата рождения:<br>
            </label><br>
            <input type="date" min="2000-01-01" max="2005-12-31" name="dob" class="form-control" id="inbirth"
                   value="<?php print($values['dob']); ?>" required>
        </div>

        <div class="col-md-6 col-sm-12">
            Пол:
            <div class="form-check-inline">
                <label class="form-check-label">
                    Мужской
                </label>
                <input type="radio" class="form-check-input" checked="checked" name="radio-1" value="m">
            </div>

            <div class="form-check-inline">
                <label class="form-check-label">
                    Женский
                </label>
                <input type="radio" class="form-check-input" name="radio-1" value="f"
                    <?php if ($values['radio-1'] == 'f') {
                        print 'checked';
                    } ?>>
            </div>
        </div>

        <div class="col-md-6 col-sm-12">
            Количество конечностей:
            <div class="form-check-inline">
                <label class="form-check-label">
                    4
                </label>
                <input type="radio" class="form-check-input" name="radio-2" checked="checked" value="4">
            </div>

            <div class="form-check-inline">
                <label class="form-check-label">
                    3
                </label>
                <input type="radio" class="form-check-input" name="radio-2" value="3"
                       <?php if ($values['radio-2'] == '3') {
                           print 'checked';
                       } ?>>
            </div>

            <div class="form-check-inline">
                <label class="form-check-label">
                    2
                </label>
                <input type="radio" class="form-check-input" name="radio-2" value="2"
                       <?php if ($values['radio-2'] == '2') {
                           print 'checked';
                       } ?>>
            </div>

            <div class="form-check-inline">
                <label class="form-check-label">
                    1
                </label>
                <input type="radio" class="form-check-input" name="radio-2" value="1" <?php if ($values['radio-2'] == 1) {
                    print 'checked';
                } ?>>
            </div>
        </div>

        <div class="col-12">
            <label>
                Сверхспособности:<br>
                <select name="powers[]" multiple="multiple">
                    <option value="immortal" <?php if (!empty($values['superpowers']['immortal'])) print 'selected'; ?>>Бессмертие</option>
                    <option value="through" <?php if (!empty($values['superpowers']['through'])) print 'selected'; ?>>Прохождение сквозь стены</option>
                    <option value="levitate" <?php if (!empty($values['superpowers']['levitate'])) print 'selected'; ?>>Левитация</option>
                </select>
            </label><br>
        </div>

        <div class="col-12">
            <label>
                Биография:<br>
                <textarea class="form-control <?php if ($errors['life']) print 'error'; ?>" name="life" required><?php print $values['life']; ?></textarea>
            </label>
        </div>
        <?php if ($errors['life']) {
            print '<div class="error-message">' . $messages['life'] . '</div>';
        } ?><br>

        <div class="col-12">
            <label>
                С контрактом ознакомлен(-а):<br>
                <input type="checkbox" name="choice" <?php if ($values['choice'] == 'on') {
                    print 'checked';
                } ?> required>
            </label><br>
        </div>

        <div class="col-12">
            <input type="submit" value="Отправить">
        </div>
    </form>
</div>
</body>
</html>