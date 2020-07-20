<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SURAT KUASA PENERIMAAN DANA BANTU LU</title>

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

<body>
    <table align="center" width="600px" border="0">
        <tr>
            <th>
                <p><img src="<?= base_url('assets/img/cop.png') ?>" width="600px"></p>
            </th>
        </tr>
        <tr>
            <th>SURAT PENUNJUKAN WALI LANSIA PENERIMA PROGRAM BANTU LU</th>
        </tr>
        <tr>
            <th>
                <hr>
            </th>
        </tr>
    </table>

    <table align="center" width="600px" border="0">

        <tr>
            <td colspan="3">
                <p>Yang bertanda tangan dibawah ini :</p>
            </td>
        </tr>
        <tr>
            <td width="100px">Nama</td>
            <td width="10px">:</td>
            <td>..........................................</td>
        </tr>
        <tr>
            <td width="100px">jabatan</td>
            <td width="10px">:</td>
            <td>..........................................</td>
        </tr>
        <tr>
            <td width="100px">NIP</td>
            <td width="10px">:</td>
            <td>..........................................</td>
        </tr>
        <tr>
            <td colspan="3">
                <p>Dengan ini menunjuk saudara/saudari : </p>
            </td>
        </tr>
        <tr>
            <td width="100px">Nama</td>
            <td width="10px">:</td>
            <td><?= $data->nama ?></td>
        </tr>
        <tr>
            <td width="100px">NIK</td>
            <td width="10px">:</td>
            <td><?= $data->nik ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><?= $data->alamat ?></td>
        </tr>


        <br>
        <!-- 2 -->
        <tr>
            <td colspan="3">
                <p>Sebagai Wali dari Lansia Penerima Program Bantu LU a.n :</p>
            </td>
        </tr>
        <tr>
            <td width="100px">Nama</td>
            <td width="10px">:</td>
            <td><?= $data->nama_wali ?></td>
        </tr>
        <tr>
            <td>NIK</td>
            <td>:</td>
            <td><?= $data->nik_wali ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><?= $data->alamat_wali ?></td>
        </tr>
    </table>
    <table align="center" width="600px" border="0">
        <tr>
            <td colspan="3">
                <p align=" justify">Dengan surat penunjukan ini, maka wali lansia tersebut akan bertanggung jawab dalam membantu PM lanjut usia penerima Bantuan Bertujuan (BANTU) LU untuk melakukan pembukaan rekening, pencairan dan penyampaian dana bantuan sosial kepada lanjut usia. Bantuan tersebut untuk digunakan PM lanjut usia sesuai petunjuk yang berlaku. <br><br>
                    Demikian Surat Penunjukan Wali ini dibuat dengan sebenarnya untuk dapat dipergunakan sebagaimana mestinya. </p>
            </td>
        </tr>

    </table>
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

    <table align="center" width="600px" border="0">
        <tr>
            <td width="400px"></td>
            <td>
                <p align=" justify">Rantau, <?= tgl_indo(date('Y-m-d')); ?><br>
                    Kepala Dinas Sosial <br> Kab/Kota atau yang mewakili </p>
                <br>
                <br>
                <br>
                <br>
                EDDY ADHA SAPUTRA
                <br>
                NIP. 28384774382928
            </td>
        </tr>
    </table>
    <br> <br>

    <script>
        window.print();
    </script>
</body>

</html>