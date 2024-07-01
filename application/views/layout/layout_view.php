<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" type="text/css" href="/application/css/styles.css">
</head>
<body>
    <?php include 'application/views/layout/header_view.php'; ?>
    <main>
        <?php include 'application/views/' . $content_view; ?>
    </main>
</body>
</html>

