<div class="full1">
    <div class="text-dark p-1 text-center shadow-lg fontbg">
        <div class="title1">
        <h1 >Items <i class="fa-solid fa-book"></i> </h1>
    </div>
    </div>
    
</br>


<h3>Tambah Barang</h3>



<a href="/users" class="btn btn-sm btn-primary mb-2">List Barang</a>

<form action="/users" method="post" enctype="multipart/form-data">
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
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" id="email" class="form-contol" value="<?= set_value('email') ?>">
        <?php if(isset($errors) and $errors->getError('email')) { ?>
        <div class="text-danger mt-2">
            <?= $error = $errors->getError('email'); ?>
        </div>
        <?php } ?>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" id="password" class="form-contol" value="<?= set_value('password') ?>">
        <?php if(isset($errors) and $errors->getError('password')) { ?>
        <div class="text-danger mt-2">
            <?= $error = $errors->getError('password'); ?>
        </div>
        <?php } ?>
    </div>
    <div class="mb-3">
        <label for="status_id" class="form-label">Status</label>
        <select name="status_id" class=""form-control>
            <option value="1">Aktif</option>
            <option value="2">Tidak Aktif</option>
        </select>
    </div>
   
    <div class="mb-3">
        <input type="submit" value="Simpan" class="btn btn-primary">
    </div>
        </form>  
        </div>


        