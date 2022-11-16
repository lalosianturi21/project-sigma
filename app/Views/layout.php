<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.css" rel="stylesheet">
        <link href="/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="/style/style.css" rel="stylesheet">
        <link href="/style/dashboard.css" rel="stylesheet">
        <link href="/style/staff.css" rel="stylesheet"> 
        <script src="https://code.jquery.com/jquery-3.6.1.min.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.full.min.js" crossorigin="anonymous"></script>
        <style>
      ul.ui-autocomplete {
        z-index: 99999;
      }
    </style>
    </head>
    <body>
        <?php echo view('navbar') ?>
        <?php echo view($main_view) ?>

        <script src="/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="/javascript/sidebar.js"></script>
        <script src="/javascript/datepicker.js"></script>
        
    </body>
</html>