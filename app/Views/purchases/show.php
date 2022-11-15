<table class="table table-bordered">
    <tbody>
        <tr>
            <th width="30%">ID</th>
            <td><?= $purchase["id"] ?></td>
        </tr>
        <tr>
            <th width="30%">Invoice No</th>
            <td><?= $purchase["invoice_no"] ?></td>
        </tr>
        <tr>
            <th width="30%">Invoice Date</th>
            <td><?= $purchase["invoice_date"] ?></td>
        </tr>
        <tr>
            <th width="30%">Supplier Id</th>
            <td><?= $purchase["supplier_id"] ?></td>
        </tr>
        <tr>
            <th width="30%">Grand Total</th>
            <td><?= $purchase["grand_total"] ?></td>
        </tr>
        <tr>
            <th width="30%">User Id</th>
            <td><?= $purchase["user_id"] ?></td>
        </tr>
    </tbody>
</table>