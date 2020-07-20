<div class="container col-8">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Kunjungan</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="container">
                    <form action="<?= base_url('laporan/proses_edit_kunjungan/') . $id ?>" method="post">
                        <div class="form-group mb-2">
                            <label for="inputItem">Hari/Tanggal</label>
                            <input type="date" class="form-control" name="tanggal_kunjungan" value="<?= $data->tanggal_kunjungan ?>" aria-label="Username" aria-describedby="basic-addon1">
                        </div>

                        <div class="form-group mb-2">
                            <label for="inputItem">Catatan Kondisi</label>
                            <input type="text" class="form-control" name="catatan_kondisi" value="<?= $data->catatan_kondisi ?>" placeholder="Catatan Kondisi" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="form-group mb-2">
                            <label for="inputItem">Catatan Perubaha</label>
                            <textarea class="form-control" name="catatan_perubahan" id="" cols="30" rows="10"><?= $data->catatan_perubahan ?></textarea>
                        </div>
                        <input type="hidden" name="lansia_id" value="<?= $data->lansia_id ?>">

                        <hr>
                        <button class="btn btn-primary">Simpan</button>
                        <a href="<?= base_url('laporan/index') ?>" class="btn btn-danger">Batal</a>
                    </form>
                </div>
            </div> <!-- akhir container-->
        </div>
    </div>
</div>