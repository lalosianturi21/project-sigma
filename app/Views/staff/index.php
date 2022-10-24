<div class="full1">
    <div class="text-dark p-1 text-center shadow-lg fontbg">
        <div class="title1">
        <h1 >Staff <i class="fa-solid fa-user"></i> <div class="float-end me-md-2"><a href="./home"></a></i></div><br></h1>
    </div>
    </div>

    <h3>List barang</h3>

    <a href="staff/new" class="btn btn-sm btn-primary mb-2">Tambah Barang</a>

    <?php foreach (session()->getFlashdata() as $key => $flash) :?>
        <div class="alert alert-<?= $key ?>" role="alert">
        <?= $flash ?>
    </div>
    <?php endforeach; ?>

    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Pengguna</th>
                <th scope="col">Umur</th>
                <th scope="col">Profesi</th>
            </tr>
        </thead>
        <tbody>
            <?php if(empty($items)): ?>
                <tr>
                    <td colspan=3>Tidak ada data</td>
                </tr>
                <?php else: ?>
                    <?php foreach($items as $index => $item): ?>
                        <tr>
                            <td><?= $index + 1 ?></td>
                            <td><?= $item->namapengguna ?></td>
                            <td><?= $item->umur ?></td>
                            <td><?= $item->profesi ?></td>
                                <form action="/items/delete" method="post">
                                    <input type="hidden" name="_method" value="DELETE" />
                                    <input type="hidden" name="id" value="<?= $item->id ?>" />
                                    <a href="/staff/<?= $item->id ?>/edit" class="btn btn-sm btn-warning">Ubah</a>
                                    <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        <?php endif; ?>
        </tbody>
    </table>

</div>