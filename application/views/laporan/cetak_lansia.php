<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Lansia Bantuan LU</title>
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

<body>
    <table align="center" width="600px" border="0">
        <tr>
            <th>
                <p><img src="<?= base_url('assets/img/cop.png') ?>" width="600px"></p>
            </th>
        </tr>
        <tr>
            <th>Data Lansia Penerima Bantuan LU
                <hr>
            </th>

        </tr>

    </table>

    <table align="center" width="600px" border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>NIK</th>
                <th>Nama Lansia</th>
                <th>Umur Lansia</th>
                <th>NIK Wali</th>
                <th>Nama Wali</th>
                <th>Alamat</th>
                <th>Nama Pendamping</th>
                <th>Nama Bank</th>
                <th>No Rekening</th>


            </tr>
        </thead>

        <?php

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
        // echo hitung_umur($tanggal_lahir);
        // echo " Tahun";
        $no = 1;
        foreach ($data as $row) { ?>
            <tr>
                <th><?= $no++ ?></th>
                <th><?= $row->nik_lansia ?></th>
                <th><?= $row->nama_lansia ?></th>
                <th><?= hitung_umur($row->ttl_lansia); ?></th>
                <th><?= $row->nik_wali ?></th>
                <th><?= $row->nama_wali ?></th>
                <th><?= $row->alamat_lansia ?></th>
                <th><?= $row->nama ?></th>
                <th><?= $row->nama_bank ?></th>
                <th><?= $row->no_rek ?></th>

            </tr>
        <?php } ?>
        </tbody>
    </table>

    <script>
        window.print();
    </script>
</body>

</html>