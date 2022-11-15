<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/style/item.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div class="full1">
    <div class="text-dark p-1 text-center shadow-lg fontbg">
        <div class="title1">
        <h1 >Staff <i class="fa-solid fa-user"></i> <div class="float-end me-md-2"><a href="./home"></a></i></div><br></h1>
    </div>
    </div>

<form action="/itemunits/<?= $itemunit['id'] ?>" method="post" enctype="multipart/form-data">
<input type="hidden" name="_method" value="PUT"/>
<div class="mb-3 row">
        <label for="name" class="form-label">Nama obat</label>
        <input type="text" name="name" id="name" class="form-contol" value="<?= $itemunit['name'] ?>">
        <?php if(isset($errors) and $errors->getError('name')) { ?>
        <div class="text-danger mt-2">
            <?= $error = $errors->getError('name'); ?>
        </div>
        <?php } ?>
    </div>
<div class="mb-3">
    <input type="submit" value="Perbarui" class="btn btn-primary">
</div>
    </form>
</body>
</html>