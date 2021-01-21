<?php
require_once 'config.php';
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

<body class="del">
    <form action="./spracovanie-dat/vymaz.php" method="post" id="deleted">
        <div class="form">
            <input id="text" name="message" disabled autocomplete="off" value="<?php echo $item ?>">
        </div>
        <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
        <input class="btn" type="submit" value="Zmazať!">
        <a href="<?php echo $site_url ?>">speť</a>
    </form>
    <script src="js/jquery.min.js"></script>
    <script src="js/colors.js"></script>
    <script src="js/app.js"></script>
    <!-- Stranka na mazanie -->

</body>

</html>