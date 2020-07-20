<div class="container col-6">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Data Pendamping</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">

                <div class="cantainer">
                    <form action="<?= base_url('pendamping/proses_edit_pendamping/') . $x->id_pen ?>" method="post">
                        <div class="form-group mb-2">
                            <label for="inputItem">NIK</label>
                            <input type="number" class="form-control" name="nik" placeholder="Nomor Indek Penduduk" value="<?= $x->nik ?>" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="form-group mb-2">
                            <label for="inputItem">Nama Lengkap</label>
                            <input type="text" class="form-control" value="<?= $x->nama ?>" placeholder="Nama Lengkap" name="nama" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="form-group mb-2">
                            <label for="inputItem">Tanggal Lahir</label>
                            <input type="date" class="form-control" value="<?= $x->ttl ?>" name="ttl" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="form-group mb-2">
                            <label for="inputItem">Alamat</label>
                            <textarea class="form-control" name="alamat" cols="30"><?= $x->alamat ?></textarea>
                        </div>
                        <div class="form-group mb-2">
                            <label for="inputItem">No Telpon</label>
                            <input type="text" class="form-control" value="<?= $x->no_hp ?>" placeholder="No Telepon" name="no_hp" aria-label="Username" aria-describedby="basic-addon1">
                        </div>

                        <hr>
                        <button class="btn btn-primary">Ubah</button>
                        <a href="<?= base_url('pendamping/index') ?>" class="btn btn-danger">Batal</a>
                    </form>
                </div>
            </div> <!-- akhir container-->
        </div>
    </div>
</div>