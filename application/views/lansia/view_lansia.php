<div class="container col-6">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data lansia</h6>
        </div>
        <div class="card-body">
            <h5 align="center">Data Lansia</h5>
            <hr>
            <table>
                <tr>
                    <td valign="top">Nama Lanisa</td>
                    <td valign="top">:</td>
                    <td valign="top"><?= $x->nama_lansia ?></td>
                </tr>
                <tr>
                    <td valign="top">NO BDT Lanisa</td>
                    <td valign="top">:</td>
                    <td valign="top"><?= $x->bdt ?></td>
                </tr>
                <tr>
                    <td valign="top">NIK Lanisa</td>
                    <td valign="top">:</td>
                    <td valign="top"><?= $x->nik_lansia ?></td>
                </tr>
                <tr>
                    <td valign="top">tanggal Lahir Lanisa</td>
                    <td valign="top">:</td>
                    <td valign="top"><?= $x->ttl_lansia ?></td>
                </tr>

                <tr>
                    <td valign="top">Alamat Lanisa</td>
                    <td valign="top">:</td>
                    <td valign="top"><?= $x->alamat_lansia ?></td>
                </tr>
            </table>
            <hr>
            <h5 align="center">Data Wali</h5>
            <hr>
            <table>
                <tr>
                    <td valign="top">Nama</td>
                    <td valign="top">:</td>
                    <td valign="top"><?= $x->nama_wali ?></td>
                </tr>
                <tr>
                    <td valign="top">NIK</td>
                    <td valign="top">:</td>
                    <td valign="top"><?= $x->nik_wali ?></td>
                </tr>
                <tr>
                    <td valign="top">No Telpon </td>
                    <td valign="top">:</td>
                    <td valign="top"><?= $x->no_telpon_wali ?></td>
                </tr>
                <tr>
                    <td valign="top">Alamat</td>
                    <td valign="top">:</td>
                    <td valign="top"><?= $x->alamat_wali ?></td>
                </tr>
            </table>
            <hr>
            <h5 align="center">Data Pendamping</h5>
            <hr>
            <table>
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
            </table>
        </div>
    </div>
</div>