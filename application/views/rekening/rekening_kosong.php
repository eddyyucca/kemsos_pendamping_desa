<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Lansia Belum Ada Rekening BANK</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">


                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIK</th>
                            <th>Nama Lansia</th>
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
                            <th>
                                <a class="btn btn-primary" href="<?= base_url('rekening/tambah_rek/') . $row->id_lansia; ?>">Tambah Rekening</a>
                            </th>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>