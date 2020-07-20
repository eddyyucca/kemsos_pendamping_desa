<div class="container col-8">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Lansia</h6>
        </div>
        <div class="card-body">
            <?php
            if ($x->id_wali == true) { ?>
                <a class="btn btn-primary" href="<?= base_url('wali/edit_wali/') . $x->id_wali ?>">Edit Wali</a>
                <hr>
            <?php } elseif ($x->id_wali == false) {
            } ?>

            <div class="row">
                <div class="container">
                    <form action="<?= base_url('lansia/proses_tambah_lansia') ?>" method="post">
                        <div class="form-group mb-2">
                            <label for="inputItem">ID BDT</label>
                            <input type="number" class="form-control" value="<?= $x->bdt ?>" name="bdt" placeholder="ID BDT" aria-label="Username" aria-describedby="basic-addon1">
                        </div>

                        <div class="form-group mb-2">
                            <label for="inputItem">Pendamping</label>
                            <select class="form-control" name="id_pendamping" id="">

                                <option value="">--PILIH PENDAMPING--</option>
                                <?php foreach ($pendamping as $pen) { ?>
                                    <option value="<?= $pen->id_pen ?>" <?= $pen->id_pen == $x->id_pendamping ? 'selected=selected' : ''; ?>><?= $pen->nama ?></option>
                                <?php   } ?>


                            </select>
                        </div>
                        <div class="form-group mb-2">
                            <label for="inputItem">NIK</label>
                            <input type="number" class="form-control" value="<?= $x->nik_lansia ?>" placeholder="Nomor Induk Penduduk" name="nik_lansia" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="form-group mb-2">
                            <label for="inputItem">Nama</label>
                            <input type="text" class="form-control" value="<?= $x->nama_lansia ?>" placeholder="Nama Lengkap" name="nama_lansia" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="form-group mb-2">
                            <label for="inputItem">Tanggal Lahir</label>
                            <input type="date" class="form-control" value="<?= $x->ttl_lansia ?>" name="ttl_lansia" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="form-group mb-2">
                            <label for="inputItem">Alamat</label>
                            <textarea class="form-control" name="alamat_lansia" cols="30"><?= $x->alamat_lansia ?></textarea>
                        </div>
                        <hr>
                        <button class="btn btn-primary">ubah</button>
                        <a href="<?= base_url('lansia/index') ?>" class="btn btn-danger">Batal</a>
                    </form>
                </div>
            </div> <!-- akhir container-->
        </div>
    </div>
</div>