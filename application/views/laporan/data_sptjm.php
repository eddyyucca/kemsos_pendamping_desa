<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Lansia</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">

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

                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data as $row) : ?>
                            <tr>
                                <th><?= $no++ ?></th>
                                <th><?= $row->nik_lansia ?></th>
                                <th><?= $row->nama_lansia ?></th>
                                <th><?php if ($row->id_wali == 0) {
                                        echo "Wali Kosong";
                                    } else {
                                        echo $row->nama_wali;
                                    }; ?></th>
                                <th><?= $row->nama ?></th>
                                <th>
                                    <a class="btn btn-primary" href="<?= base_url('laporan/sptjm/')  . $row->id_lansia; ?>">SPTJM</a>
                                </th>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>