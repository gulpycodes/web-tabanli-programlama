<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Sonuçlar</title>
</head>
<body>
    <h2>Cevaplarınız:</h2>
    <?php
    if ($_POST) {
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
        echo "<br><a href='index.php'>Geri Dön</a>";
    } else {
        echo "Form boş geldi.";
    }
    ?>
</body>
</html>