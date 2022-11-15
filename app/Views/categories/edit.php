<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/style/categorie$categorie.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div class="full1">
    <div class="text-dark p-1 text-center shadow-lg fontbg">
        <div class="title1">
        <h1 >Categories<i class="fa-solid fa-user"></i> <div class="float-end me-md-2"><a href="./home"></a></i></div><br></h1>
    </div>
    </div>

<form action="/categories/<?= $categorie['id'] ?>" method="post" enctype="multipart/form-data">
<input type="hidden" name="_method" value="PUT"/>
<div class="mb-3 row">
        <label for="name" class="form-label">name Categories</label>
        <input type="text" name="name" id="name" class="form-contol" value="<?= $categorie['name'] ?>">
        <?php if(isset($errors) and $errors->getError('name')) { ?>
        <div class="text-danger mt-2">
            <?= $error = $errors->getError('name'); ?>
        </div>
        <?php } ?>
    </div>
    <div class="mb-3 row">
        <label for="description" class="form-label">Description</label>
        <input type="text" name="description" id="description" class="form-contol" value="<?= $categorie['description'] ?>">
        <?php if(isset($errors) and $errors->getError('description')) { ?>
        <div class="text-danger mt-2">
            <?= $error = $errors->getError('description'); ?>
        </div>
        <?php } ?>
    </div>
    <div class="mb-3 row">
        <label for="status_id" class="form-label">Status Id</label>
        <input type="text" name="status_id" id="status_id" class="form-contol" value="<?= $categorie['status_id'] ?>">
        <?php if(isset($errors) and $errors->getError('status_id')) { ?>
        <div class="text-danger mt-2">
            <?= $error = $errors->getError('status_id'); ?>
        </div>
        <?php } ?>
    </div>

   
<div class="mb-3">
    <input type="submit" value="Perbarui" class="btn btn-primary">
</div>
    </form>
</body>
</html>