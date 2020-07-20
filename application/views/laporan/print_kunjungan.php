<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Report</title>
    <style>
        th .a {
            height: 50px;
            padding-left: 10px;
            vertical-align: top;

        }


        table {
            border-collapse: collapse;
            height: 100%;
        }



        tr .bungkus {
            padding-left: 20px;
        }
    </style>
</head>
<?php
$tgl = date('d-m-Y');
function tgl_indo($tgl)
{
    $bulan = array(
        1 =>   'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
    $pecahkan = explode('-', $tgl);

    // variabel pecahkan 0 = tanggal
    // variabel pecahkan 1 = bulan
    // variabel pecahkan 2 = tahun

    return $pecahkan[2] . ' ' . $bulan[(int) $pecahkan[1]] . ' ' . $pecahkan[0];
}

// 21 Oktober 2017

// echo "<br/>";
// echo "<br/>";

// echo tgl_indo("1994-02-15"); // 15 Februari 1994
?>
<table border="0" align="center" width="600px">
    <tr>
        <th>
            <p><img src="<?= base_url('assets/img/cop.png') ?>" width="600px"></p>
        </th>
    </tr>


    <table border="0" align="center" width="600px">
        <tr>
            <td colspan="3">
                <h6 align="center">CATATAN KUNJUNGAN DAN PERKEMBANGAN LANJUT USIA</h6>
                <hr width="600px">
            </td>
        </tr>
        <tr>
            <td width="200px">Nama Lanjut Usia</td>
            <td>:</td>
            <td><?= $data2->nama_lansia; ?></td>
        </tr>
        <tr>
            <td>Umur</td>
            <td width="10px">:</td>
            <td><?php
                $tanggal_lahir = $data2->ttl_lansia;
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
            <td><?= $data2->alamat_lansia ?></td>
        </tr>
        <tr>
            <td>Nomor Induk Kependudukan</td>
            <td>:</td>
            <td><?= $data2->nik_lansia ?></td>
        </tr>

    </table>
    <br><br>

    <table border="1" align="center" width="600px">
        <tr>
            <th>Kunjungan</th>
            <th>Hari/Tanggal</th>
            <th>Catatan Kunjungan/Kondisi<br>Terkini Lanjut Usia</th>
            <th>Catatan Atas Perubahan <br>Yang Terjadi Setelah<br>Kunjungan</th>
        </tr>
        <?php
        $no = 1;

        foreach ($data as $x) { ?>
            <tr>
                <td align="center"><?= $no++ ?></td>
                <td align="center"><?= $x->tanggal_kunjungan ?></td>
                <td align="center"><?= $x->catatan_kondisi ?></td>
                <td align="center"><?= $x->catatan_perubahan ?></td>

            </tr>
        <?php } ?>
    </table>
    <br>
    <table border="0" align="center" width="600px">
        <tr>
            <td width="400px"></td>
            <td>
                <p align="center">Rantau, <?= tgl_indo(date('Y-m-d')); ?>
                    <br>
                    <p align="center">Pendamping </p>
                    <br><br>

                    <p align="center"> <?= $data2->nama ?></p>
                </p>
            </td>
        </tr>
    </table>

</table>
<script>
    window.print()
</script>