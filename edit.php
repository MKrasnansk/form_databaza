<?php require_once 'config.php';
$item = $database->get("items", "text", [
    "id" => $_GET['id']
]);
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

<body class="edd">
    <form action="./spracovanie-dat/edituj.php" method="post" id="edituj">
        <div class="form-edit">
            <input id="text" name="message" autocomplete="off" value="<?php echo $item ?>" required>
        </div>
        <select id="positions" name="positions" value="<?php echo $item['positions'] ?>" required>
            <option value=""></option>
            <option value="Kúrenár">Kúrenár</option>
            <option value="Údržbár">Údržbár</option>
            <option value="Mechanik">Mechanik</option>
            <option value="Riaditeľ">Riaditeľ</option>
        </select>
        <input type="hidden" name="id" value=" <?php echo $_GET['id'] ?>">
        <input class="btn" type="submit" value="Upraviť!">
        <a href="<?php echo $site_url ?>">speť</a>
    </form>
    <script src="js/jquery.min.js"></script>
    <script src="js/colors.js"></script>
    <script src="js/app.js"></script>
    <!-- Stranka na editovanie -->
</body>

</html>