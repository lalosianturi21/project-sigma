<div class="full1">
    <div class="text-dark p-1 text-center shadow-lg fontbg">
        <div class="title1">
        <h1 >Sales<i class="fa-solid fa-user"></i> <div class="float-end me-md-2"><a href="./home"></a></i></div><br></h1>
    </div>
    </div>
    <h3>Tambah Sales</h3>

<a href="/sales" class="btn btn-sm btn-primary mb-2">List Barang</a>

<form action="/sales" method="post" enctype="multipart/form-data">
    <!-- <div class="mb-3">
        <label for="invoice_no" class="form-label">Invoice No</label>
        <input type="text" name="invoice_no" id="invoice_no" class="form-contol" value="<?= set_value('invoice_no') ?>">
        <?php if(isset($errors) and $errors->getError('invoice_no')) { ?>
        <div class="text-danger mt-2">
            <?= $error = $errors->getError('invoice_no'); ?>
        </div>
        <?php } ?>
    </div> -->
    <div class="mb-3">
        <label for="invoice_date" class="form-label">Invoice date</label>
        <input type="text" name="invoice_date" id="invoice_date" class="form-contol" value="<?= set_value('invoice_date') ?>">
        <?php if(isset($errors) and $errors->getError('invoice_date')) { ?>
        <div class="text-danger mt-2">
            <?= $error = $errors->getError('invoice_date'); ?>
        </div>
        <?php } ?>
    </div>
    <div class="mb-3">
        <label for="supplier_id" class="form-label">Supplier ID</label>
        <input type="text" name="supplier_id" id="supplier_id" class="form-contol" value="<?= set_value('supplier_id') ?>">
        <?php if(isset($errors) and $errors->getError('supplier_id')) { ?>
        <div class="text-danger mt-2">
            <?= $error = $errors->getError('supplier_id'); ?>
        </div>
        <?php } ?>
    </div>

    <div class="mb-3">
        <label for="grand_total" class="form-label">Grand Total</label>
        <input type="text" name="grand_total" id="grand_total" class="form-contol" value="<?= set_value('grand_total') ?>">
        <?php if(isset($errors) and $errors->getError('grand_total')) { ?>
        <div class="text-danger mt-2">
            <?= $error = $errors->getError('grand_total'); ?>
        </div>
        <?php } ?>
    </div>


   

    <div class="mb-3">
        <input type="submit" value="Simpan" class="btn btn-primary">
    </div>
        </form>  

</form>

<script>
  $('#invoice_date').datetimepicker();
</script>

</div>

