<div class="container col-8">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Rekening</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="container">
                    <form action="<?= base_url('rekening/proses_tambah_rek/') . $id ?>" method="post">
                        <div class="form-group mb-2">
                            <label for="inputItem">Nama Bank</label>
                            <input type="text" class="form-control" name="nama_bank" placeholder="Nama Bank" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="form-group mb-2">
                            <label for="inputItem">No Rekening</label>
                            <input type="number" class="form-control" name="no_rek" placeholder="No Rekening" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <hr>
                        <button class="btn btn-primary">Simpan</button>
                        <a href="<?= base_url('rekening/index') ?>" class="btn btn-danger">Batal</a>
                    </form>
                </div>
            </div> <!-- akhir container-->
        </div>
    </div>
</div>