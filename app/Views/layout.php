<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link href="/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="/style/style.css" rel="stylesheet">
    </head>
    <body>
        <?php echo view('navbar') ?>
        <?php echo view($main_view) ?>

        <script src="/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="/javascript/sidebar.js"></script>
    </body>
</html>