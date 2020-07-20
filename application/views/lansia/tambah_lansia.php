<div class="container col-8">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Obat Baru</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="container">
                    <form action="<?= base_url('lansia/proses_tambah_lansia') ?>" method="post">
                        <div class="form-group mb-2">
                            <label for="inputItem">ID BDT</label>
                            <input type="number" class="form-control" name="bdt" placeholder="ID BDT" aria-label="Username" aria-describedby="basic-addon1">
                        </div>

                        <div class="form-group mb-2">
                            <label for="inputItem">Pendamping</label>
                            <select class="form-control" name="id_pendamping" id="">

                                <option value="">--PILIH PENDAMPING--</option>
                                <?php foreach ($pendamping as $x) { ?>
                                    <option value="<?= $x->id_pen ?>"><?= $x->nama ?></option>
                                <?php   } ?>


                            </select>
                        </div>
                        <div class="form-group mb-2">
                            <label for="inputItem">NIK</label>
                            <input type="number" class="form-control" placeholder="Nomor Induk Penduduk" name="nik_lansia" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="form-group mb-2">
                            <label for="inputItem">Nama</label>
                            <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama_lansia" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="form-group mb-2">
                            <label for="inputItem">Tanggal Lahir</label>
                            <input type="date" class="form-control" name="ttl_lansia" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="form-group mb-2">
                            <label for="inputItem">Alamat</label>
                            <textarea class="form-control" name="alamat_lansia" cols="30"></textarea>
                        </div>
                        <hr>
                        <button class="btn btn-primary">Simpan</button>
                        <a href="<?= base_url('lansia/index') ?>" class="btn btn-danger">Batal</a>
                    </form>
                </div>
            </div> <!-- akhir container-->
        </div>
    </div>
</div>