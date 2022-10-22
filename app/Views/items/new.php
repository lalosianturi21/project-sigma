<div class="full1">
    <div class="text-dark p-1 text-center shadow-lg fontbg">
        <div class="title1">
        <h1 >Staff <i class="fa-solid fa-user"></i> <div class="float-end me-md-2"><a href="./home"></a></i></div><br></h1>
    </div>
    </div>
    <h3>Tambah Barang</h3>

<a href="/items" class="btn btn-sm btn-primary mb-2">List Barang</a>

<form action="/items" method="post" enctype="multipart/form-data">
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
        <label for="unit" class="form-label">Unit</label>
        <input type="text" name="unit" id="unit" class="form-contol" value="<?= set_value('unit') ?>">
        <?php if(isset($errors) and $errors->getError('unit')) { ?>
        <div class="text-danger mt-2">
            <?= $error = $errors->getError('unit'); ?>
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
        <label for="nomor_telepon" class="form-label">Nomor Telepon</label>
        <input type="text" name="nomor_telepon" id="nomor_telepon" class="form-contol" value="<?= set_value('nomor_telepon') ?>">
        <?php if(isset($errors) and $errors->getError('nomor_telepon')) { ?>
        <div class="text-danger mt-2">
            <?= $error = $errors->getError('nomor_telepon'); ?>
        </div>
        <?php } ?>
    </div>
    <div class="mb-3">
        <label for="image_upload" class="form-label">Image</label>
        <input type="file" name="image_upload" id="image_upload" class="form-contol" value="<?= set_value('image_upload') ?>">
        <?php if(isset($errors) and $errors->getError('image_upload')) { ?>
        <div class="text-danger mt-2">
            <?= $error = $errors->getError('image_upload'); ?>
        </div>
        <?php } ?>
    </div>
    <div class="mb-3">
        <input type="submit" value="Simpan" class="btn btn-primary">
    </div>
        </form>  

</form>
</div>

