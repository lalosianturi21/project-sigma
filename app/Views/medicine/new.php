<div class="full1">
    <div class="text-dark p-1 text-center shadow-lg fontbg">
        <div class="title1">
        <h1 >Medicine <i class="fa-solid fa-user"></i> <div class="float-end me-md-2"><a href="./home"></a></i></div><br></h1>
    </div>
    </div>
    <h3>Tambah Medicine</h3>

<a href="/medicine" class="btn btn-sm btn-primary mb-2">List Barang</a>

<form action="/medicine" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="code" class="form-label">Code</label>
        <input type="text" name="code" id="code" class="form-contol" value="<?= set_value('code') ?>">
        <?php if(isset($errors) and $errors->getError('code')) { ?>
        <div class="text-danger mt-2">
            <?= $error = $errors->getError('code'); ?>
        </div>
        <?php } ?>
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" id="name" class="form-contol" value="<?= set_value('name') ?>">
        <?php if(isset($errors) and $errors->getError('name')) { ?>
        <div class="text-danger mt-2">
            <?= $error = $errors->getError('name'); ?>
        </div>
        <?php } ?>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <input type="text" name="description" id="description" class="form-contol" value="<?= set_value('description') ?>">
        <?php if(isset($errors) and $errors->getError('description')) { ?>
        <div class="text-danger mt-2">
            <?= $error = $errors->getError('description'); ?>
        </div>
        <?php } ?>
    </div>

    <div class="mb-3">
        <label for="min-stock" class="form-label">Min stock</label>
        <input type="text" name="min-stock" id="min-stock" class="form-contol" value="<?= set_value('min-stock') ?>">
        <?php if(isset($errors) and $errors->getError('min-stock')) { ?>
        <div class="text-danger mt-2">
            <?= $error = $errors->getError('min-stock'); ?>
        </div>
        <?php } ?>
    </div>

    <div class="mb-3">
        <label for="image_upload" class="form-label">Images</label>
        <input type="file" name="image_upload" id="image_upload" class="form-contol" value="<?= set_value('image_upload') ?>">
        <?php if(isset($errors) and $errors->getError('image_upload')) { ?>
        <div class="text-danger mt-2">
            <?= $error = $errors->getError('image_upload'); ?>
        </div>
        <?php } ?>
    </div>


    <div class="mb-3">
        <label for="max-stock" class="form-label">Max stock</label>
        <input type="text" name="max-stock" id="max-stock" class="form-contol" value="<?= set_value('max-stock') ?>">
        <?php if(isset($errors) and $errors->getError('max-stock')) { ?>
        <div class="text-danger mt-2">
            <?= $error = $errors->getError('max-stock'); ?>
        </div>
        <?php } ?>
    </div>

    <div class="mb-3">
        <label for="current_stock" class="form-label">Current stock</label>
        <input type="text" name="current_stock" id="current_stock" class="form-contol" value="<?= set_value('current_stock') ?>">
        <?php if(isset($errors) and $errors->getError('current_stock')) { ?>
        <div class="text-danger mt-2">
            <?= $error = $errors->getError('current_stock'); ?>
        </div>
        <?php } ?>
    </div>

    <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="text" name="price" id="price" class="form-contol" value="<?= set_value('price') ?>">
        <?php if(isset($errors) and $errors->getError('price')) { ?>
        <div class="text-danger mt-2">
            <?= $error = $errors->getError('price'); ?>
        </div>
        <?php } ?>
    </div>

    <div class="mb-3">
        <label for="status_id" class="form-label">Status id</label>
        <input type="text" name="status_id" id="status_id" class="form-contol" value="<?= set_value('status_id') ?>">
        <?php if(isset($errors) and $errors->getError('status_id')) { ?>
        <div class="text-danger mt-2">
            <?= $error = $errors->getError('status_id'); ?>
        </div>
        <?php } ?>
    </div>

    <div class="mb-3">
        <label for="item_unit_id" class="form-label">Item unit id</label>
        <input type="text" name="item_unit_id" id="item_unit_id" class="form-contol" value="<?= set_value('item_unit_id') ?>">
        <?php if(isset($errors) and $errors->getError('item_unit_id')) { ?>
        <div class="text-danger mt-2">
            <?= $error = $errors->getError('item_unit_id'); ?>
        </div>
        <?php } ?>
    </div>
    <div class="mb-3">
        <input type="submit" value="Simpan" class="btn btn-primary">
    </div>
        </form>  

</form>
</div>

