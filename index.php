<?php
include_once 'config.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/normalize.css">
    <link href="css/style.css" rel="stylesheet">
    <title>zadanie</title>
    <script>
        var site_url = '<?php echo $site_url ?>';
    </script>
</head>

<body>
    <?php $data = $database->select('items', '*'); ?>
    <ul id="list" class="list">
        <?php foreach ($data as $item) {
            echo '<li id="item-' . $item['id'] . '" class="data"><p>' . $item['text'] . ' zamestnany(á) ako: ' . $item['positions'] . '</p>';
            echo '<div class="controls">';
            echo '<a href="edit.php?id=' . $item['id'] . '" class="edit-link">Edit</a>';
            echo '<a href="deleted.php?id=' . $item['id'] . '" class="delete-link">Delete</a>';
            echo '</div>';
            echo '</li>';
        } ?>
    </ul>
    <form action="./spracovanie-dat/spracuj.php" method="post" id="spracuj">
        <div class="form">
            <input id="text" minlength="3" name="message" autocomplete="off" value="" required>
            <label for="text" class="label-name">
                <span class="content-name">Meno</span>
            </label>
        </div>
        <select id="positions" name="positions" required>
            <option value="">Pozícia</option>
            <option value="Kúrenár">Kúrenár</option>
            <option value="Údržbár">Údržbár</option>
            <option value="Mechanik">Mechanik</option>
            <option value="Riaditeľ">Riaditeľ</option>
        </select>
        <input class="btn" type="submit" value="Odoslať!">
    </form>
    <script src="js/jquery.min.js"></script>
    <script src="js/colors.js"></script>
    <script src="js/app.js"></script>
</body>

</html>