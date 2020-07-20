<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Data Wali</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <a href="<?= base_url('pendamping/tambah_pendamping') ?>" class="btn btn-primary">Tambah Pendamping</a>
                <hr>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>No Telpon</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data as $row) : ?>
                            <tr>
                                <th><?= $no++ ?></th>
                                <th><?= $row->nik ?></th>
                                <th><?= $row->nama ?></th>
                                <th><?= $row->no_hp ?></th>
                                <th>
                                    <a class="btn btn-primary" href="<?= base_url('obat/edit_obat/') . $row->id_pen; ?>"><i class="fas fa-edit"></i></a>
                                    <a class="btn btn-danger" href="<?= base_url('obat/hapus_obat/') . $row->id_pen; ?>"><i class="fas fa-trash"></i></a>
                                    <a class="btn btn-warning" href="<?= base_url('obat/hapus_obat/') . $row->id_pen; ?>"><i class="fas fa-eye"></i></a>
                                </th>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>