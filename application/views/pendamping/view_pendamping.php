<div class="container col-6">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Pendamping</h6>
        </div>
        <div class="card-body">

            <table>
                <tr>
                    <td valign="top">Nama</td>
                    <td valign="top">:</td>
                    <td valign="top"><?= $x->nama ?></td>
                </tr>
                <tr>
                    <td valign="top">NIK</td>
                    <td valign="top">:</td>
                    <td valign="top"><?= $x->nik ?></td>
                </tr>
                <tr>
                    <td valign="top">tanggal Lahir</td>
                    <td valign="top">:</td>
                    <td valign="top"><?= $x->ttl ?></td>
                </tr>
                <tr>
                    <td valign="top">No telepon</td>
                    <td valign="top">:</td>
                    <td valign="top"><?= $x->no_hp ?></td>
                </tr>
                <tr>
                    <td valign="top">Alamat</td>
                    <td valign="top">:</td>
                    <td valign="top"><?= $x->alamat ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>