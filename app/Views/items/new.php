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
        <label for="nama" class="form-label">Nama obat</label>
        <input type="text" name="nama" id="nama" class="form-contol" value="<?= set_value('nama') ?>">
        <?php if(isset($errors) and $errors->getError('nama')) { ?>
        <div class="text-danger mt-2">
            <?= $error = $errors->getError('nama'); ?>
        </div>
        <?php } ?>
    </div>
    <div class="mb-3">
        <label for="tanggal" class="form-label">Tanggal</label>
        <input type="date" name="tanggal" id="tanggal" class="form-contol" value="<?= set_value('tanggal') ?>">
        <?php if(isset($errors) and $errors->getError('tanggal')) { ?>
        <div class="text-danger mt-2">
            <?= $error = $errors->getError('tanggal'); ?>
        </div>
        <?php } ?>
    </div>
    <div class="mb-3">
    <label for="staff" class="form-label">Status</label>
        <select name="staff" class="form-control" id="staff">
            <option value="Kasir">Kasir </option>
            <option value="Penjaga toko">Penjaga toko</option>
        </select>
        </div>

    <div class="mb-3">
        <label for="harga" class="form-label">Harga</label>
        <input type="text" name="harga" id="harga" class="form-contol" value="<?= set_value('harga') ?>">
        <?php if(isset($errors) and $errors->getError('harga')) { ?>
        <div class="text-danger mt-2">
            <?= $error = $errors->getError('harga'); ?>
        </div>
        <?php } ?>
    </div>

    <div class="mb-3">
        <label for="stock" class="form-label">Stock</label>
        <input type="text" name="stock" id="stock" class="form-contol" value="<?= set_value('stock') ?>">
        <?php if(isset($errors) and $errors->getError('stock')) { ?>
        <div class="text-danger mt-2">
            <?= $error = $errors->getError('stock'); ?>
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
    <label for="expired" class="form-label">Expired</label>
        <select name="expired" class="form-control" id="expired">
            <option value="Belum kadaluarsa">Belum kadaluarsa</option>
            <option value="Sudah kadaluarsa">Sudah kadaluarsa</option>
        </select>
        </div>
    <div class="mb-3">
        <input type="submit" value="Simpan" class="btn btn-primary">
    </div>
        </form>  

</form>
</div>

