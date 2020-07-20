<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Kunjungan</h6>
        </div>
        <div class="card-body">

            <a href="<?= base_url('laporan/tambah_kunjungan/') . $data_lansia->id_lansia ?>" class="btn btn-primary">Tambah Kunjungan</a>
            <hr>
            <h6 align="center">CATATAN KUNJUNGAN DAN PERKEMBANGAN LANJUT USIA</h6>
            <hr>
            <table border="0" width="400px">
                <tr>
                    <td>Nama Lanjut Usia</td>
                    <td>:</td>
                    <td><?= $data_lansia->nama_lansia; ?></td>
                </tr>
                <tr>
                    <td>Umur</td>
                    <td>:</td>
                    <td><?php
                        $tanggal_lahir = $data_lansia->ttl_lansia;
                        function hitung_umur($tanggal_lahir)
                        {
                            list($year, $month, $day) = explode("-", $tanggal_lahir);
                            $year_diff  = date("Y") - $year;
                            $month_diff = date("m") - $month;
                            $day_diff   = date("d") - $day;
                            if ($month_diff < 0) $year_diff--;
                            elseif (($month_diff == 0) && ($day_diff < 0)) $year_diff--;
                            return $year_diff;
                        }
                        //Tampilkan Umur dengan Tanggal Lahir 1990-Oktober-25
                        echo hitung_umur($tanggal_lahir);
                        echo " Tahun"; ?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><?= $data_lansia->alamat_lansia ?></td>
                </tr>
                <tr>
                    <td>Nomor Induk Kependudukan</td>
                    <td>:</td>
                    <td><?= $data_lansia->nik_lansia ?></td>
                </tr>
                <tr>
                    <td>Nama Wali</td>
                    <td>:</td>
                    <td><?= $data_lansia->nama_wali ?></td>
                </tr>
                <tr>
                    <td>Nama Pendamping</td>
                    <td>:</td>
                    <td><?= $data_lansia->nama ?></td>
                </tr>
            </table>
            <hr>
            <a href="<?= base_url('laporan/print_kunjungan/') . $id ?>" class="btn btn-danger">Print PDF</a>

            <hr>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Kunjungan</th>
                            <th>Hari/Tanggal</th>
                            <th>Catatan Kunjungan</th>
                            <th>Catatan perubahan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php
                        $no = 1;
                        foreach ($data_kunjungan as $row) { ?>


                            <tr>
                                <th><?= $no++; ?></th>
                                <th><?= $row->tanggal_kunjungan ?></th>
                                <th><?= $row->catatan_kondisi ?></th>
                                <th><?= $row->catatan_perubahan ?></th>
                                <th> <a class="btn btn-primary" href="<?= base_url('laporan/edit_kunjungan/') . $row->id_kunjungan; ?>"><i class="fas fa-edit"></i></a>
                                    <a class="btn btn-danger" href="<?= base_url('laporan/hapus_kunjungan/') . $row->id_kunjungan; ?>"><i class="fas fa-trash"></i></a>
                                </th>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>