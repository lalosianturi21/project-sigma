<div class="full1">
    <div class="text-dark p-1 text-center shadow-lg fontbg">
        <div class="title1">
        <h1 >suppliers<i class="fa-solid fa-user"></i> <div class="float-end me-md-2"><a href="./home"></a></i></div><br></h1>
    </div>
    </div>
    <h3>Tambah suppliers</h3>

<a href="/suppliers" class="btn btn-sm btn-primary mb-2">List Barang</a>

<form action="/suppliers" method="post" enctype="multipart/form-data">
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
        <label for="status_id" class="form-label">Status Id</label>
        <input type="text" name="status_id" id="status_id" class="form-contol" value="<?= set_value('status_id') ?>">
        <?php if(isset($errors) and $errors->getError('status_id')) { ?>
        <div class="text-danger mt-2">
            <?= $error = $errors->getError('status_id'); ?>
        </div>
        <?php } ?>
    </div>
    <div class="mb-3">
        <input type="submit" value="Simpan" class="btn btn-primary">
    </div>
        </form>  

</form>
</div>

