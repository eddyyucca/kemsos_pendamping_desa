<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Data Lanisa</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <a href="<?= base_url('rekening/rekening_kosong') ?>" class="btn btn-danger">Tambah Rekening Lansia</a>
                <hr>

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIK</th>
                            <th>Nama Lansia</th>
                            <th>Bank</th>
                            <th>No Rekening</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <?php

                    $no = 1;
                    foreach ($data as $row) { ?>
                        <tr>
                            <th><?= $no++ ?></th>
                            <th><?= $row->nik_lansia ?></th>
                            <th><?= $row->nama_lansia ?></th>
                            <th><?= $row->nama_bank ?></th>
                            <th><?= $row->no_rek ?></th>

                            <th>
                                <a class="btn btn-primary" href="<?= base_url('rekening/edit_rekening/') . $row->id_rekening; ?>">Ubah Rekening</i></a>
                            </th>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>