<div class="full1">
    <div class="text-dark p-1 text-center shadow-lg fontbg">
        <div class="title1">
        <h1 >Staff <i class="fa-solid fa-user"></i> <div class="float-end me-md-2"><a href="./home"></a></i></div><br></h1>
    </div>
    </div>
    <h3>Tambah Barang</h3>

<a href="/staff" class="btn btn-sm btn-primary mb-2">List Barang</a>

<form action="/staff" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="namapengguna" class="form-label">Nama Pengguna</label>
        <input type="text" name="namapengguna" id="namapengguna" class="form-contol" value="<?= set_value('namapengguna') ?>">
        <?php if(isset($errors) and $errors->getError('namapengguna')) { ?>
        <div class="text-danger mt-2">
            <?= $error = $errors->getError('namapengguna'); ?>
        </div>
        <?php } ?>
    </div>
    <div class="mb-3">
        <label for="umur" class="form-label">Umur</label>
        <input type="text" name="umur" id="tanggal" class="form-contol" value="<?= set_value('umur') ?>">
        <?php if(isset($errors) and $errors->getError('umur')) { ?>
        <div class="text-danger mt-2">
            <?= $error = $errors->getError('umur'); ?>
        </div>
        <?php } ?>
    </div>
    <div class="mb-3">
        <label for="profesi" class="form-label">Profesi</label>
        <input type="text" name="profesi" id="profesi" class="form-contol" value="<?= set_value('profesi') ?>">
        <?php if(isset($errors) and $errors->getError('profesi')) { ?>
        <div class="text-danger mt-2">
            <?= $error = $errors->getError('profesi'); ?>
        </div>
        <?php } ?>
    </div>
    <div class="mb-3">
        <input type="submit" value="Simpan" class="btn btn-primary">
    </div>
        </form>  

</form>
</div>


