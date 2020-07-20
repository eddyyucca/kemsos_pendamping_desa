<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Data Pendamping</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <a href="<?= base_url('lansia/tambah_lansia') ?>" class="btn btn-primary">Tambah Data Lansai</a>
                <hr>

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIK</th>
                            <th>Nama Lansia</th>
                            <th>Nama Wali</th>
                            <th>Nama Pendamping</th>
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
                            <th><?php if ($row->id_wali == false) {
                                    echo "Wali Kosong";
                                } else {
                                    echo $row->nama_wali;
                                }; ?></th>
                            <th><?= $row->nama ?></th>
                            <th>
                                <a class="btn btn-primary" href="<?= base_url('lansia/edit_lansia/') . $row->id_lansia; ?>"><i class="fas fa-edit"></i></a>
                                <a class="btn btn-danger" href="<?= base_url('lansia/view_lansia/') . $row->id_lansia ?>"><i class="fas fa-trash"></i></a>
                                <a class="btn btn-warning" href="<?= base_url('lansia/view_lansia/') . $row->id_lansia; ?>"><i class="fas fa-eye"></i></a>
                                <?php if ($row->id_wali == 0) { ?>
                                    <br> <a class="btn btn-primary mt-1" href="<?= base_url('wali/tambah_wali/') . $row->id_lansia; ?>">Tambah Wali</a>
                                <?php }; ?>
                            </th>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>