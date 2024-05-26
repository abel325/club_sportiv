<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="announcements.css">
    <title>Anunturi</title>
</head>
<body>
    <div class="container">
        <?php include '../../includes/nav.php' ?>
        <div class="container__content">
            <h1>Anunturi</h1>
            <div class="container__content__announcements">
                <?php include '../../scripts/get_announcements.php'?>
            </div>
        </div>
    </div>
</body>
</html>