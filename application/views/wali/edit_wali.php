<div class="container col-6">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Data Wali</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">

                <div class="cantainer">

                    <form action="<?= base_url('wali/proses_edit_wali/') . $id ?>" method="post">
                        <div class="form-group mb-2">
                            <label for="inputItem">NIK</label>
                            <input type="number" class="form-control" name="nik_wali" value="<?= $data->nik_wali ?>" placeholder="Nomor Indek Penduduk" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="form-group mb-2">
                            <label for="inputItem">Nama Lengkap</label>
                            <input type="text" class="form-control" value="<?= $data->nama_wali ?>" placeholder="Nama Lengkap" name="nama_wali" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="form-group mb-2">
                            <label for="inputItem">No Telpon</label>
                            <input type="text" class="form-control" value="<?= $data->no_telpon_wali ?>" placeholder="No Telepon" name="no_telpon_wali" aria-label="Username" aria-describedby="basic-addon1">
                        </div>

                        <div class="form-group mb-2">
                            <label for="inputItem">Alamat</label>
                            <textarea class="form-control" name="alamat_wali" cols="30"><?= $data->alamat_wali ?></textarea>
                        </div>

                        <hr>
                        <button class="btn btn-primary">Simpan</button>
                        <a href="<?= base_url('lansia/index') ?>" class="btn btn-danger">Batal</a>
                    </form>

                </div> <!-- akhir container-->
            </div>
        </div>
    </div>
</div>