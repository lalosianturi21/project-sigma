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
        <h1 > Edit Sales<i class="fa-solid fa-user"></i> <div class="float-end me-md-2"><a href="./home"></a></i></div><br></h1>
        </div>
    </div>

<form action="/sales/<?= $sale['id'] ?>" method="post" enctype="multipart/form-data">
<input type="hidden" name="_method" value="PUT"/>
<div class="mb-3">
        <label for="invoice_no" class="form-label">Invoice No</label>
        <input type="text" name="invoice_no" id="invoice_no" class="form-contol" value="<?= $sale['invoice_no'] ?>">
        <?php if(isset($errors) and $errors->getError('invoice_no')) { ?>
        <div class="text-danger mt-2">
            <?= $error = $errors->getError('invoice_no'); ?>
        </div>
        <?php } ?>
    </div>

    <div class="mb-3">
        <label for="invoice_date" class="form-label">Invoice Date</label>
        <input type="date" name="invoice_date" id="invoice_date" class="form-contol" value="<?= $sale['invoice_date'] ?>">
        <?php if(isset($errors) and $errors->getError('invoice_date')) { ?>
        <div class="text-danger mt-2">
            <?= $error = $errors->getError('invoice_date'); ?>
        </div>
        <?php } ?>
    </div>

    <div class="mb-3">
        <label for="supplier_id" class="form-label">Supplier Id</label>
        <input type="text" name="supplier_id" id="supplier_id" class="form-contol" value="<?= $sale['supplier_id'] ?>">
        <?php if(isset($errors) and $errors->getError('supplier_id')) { ?>
        <div class="text-danger mt-2">
            <?= $error = $errors->getError('supplier_id'); ?>
        </div>
        <?php } ?>
    </div>

    <div class="mb-3">
        <label for="grand_total" class="form-label">Grand Total</label>
        <input type="text" name="grand_total" id="grand_total" class="form-contol" value="<?= $sale['grand_total'] ?>">
        <?php if(isset($errors) and $errors->getError('grand_total')) { ?>
        <div class="text-danger mt-2">
            <?= $error = $errors->getError('grand_total'); ?>
        </div>
        <?php } ?>
    </div>

    <div class="mb-3">
        <label for="user_id" class="form-label">User Id</label>
        <input type="text" name="user_id" id="user_id" class="form-contol" value="<?= $sale['user_id'] ?>">
        <?php if(isset($errors) and $errors->getError('user_id')) { ?>
        <div class="text-danger mt-2">
            <?= $error = $errors->getError('user_id'); ?>
        </div>
        <?php } ?>
    </div>

<div class="mb-3">
    <input type="submit" value="Perbarui" class="btn btn-primary">
</div>
    </form>
        </div>
</body>
</html>