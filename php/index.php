<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel=stylesheet href=../css/index.css>
</head>
<body>
    <?php include 'header.php'; ?>
    <?php include "menu.php"; ?>
    <input type="text" div class="zoekbalk">
    <div class="filter">
        <h2>filter</h2>
        <form action="action_page.php">
        <input type="checkbox" id="filter" name="vehicle1" value="2D">
        <label for="vehicle1">2D</label>
        <input type="checkbox" id="filter" name="vehicle1" value="3D">
        <label for="vehicle1">3D</label>
        <input type="checkbox" id="filter" name="vehicle1" value="Indie">
        <label for="vehicle1">indie</label>
        </form>
    </div>
</body>
</html>