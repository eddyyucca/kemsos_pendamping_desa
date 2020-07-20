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
            <th>SURAT KUASA PENERIMAAN DANA BANTU LU</th>
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
            <td><?= $data->nama_lansia ?></td>
        </tr>
        <tr>
            <td width="100px">Tgl lahir</td>
            <td width="10px">:</td>
            <td><?= $data->ttl_lansia ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><?= $data->alamat_lansia ?></td>
        </tr>
        <tr>
            <td>No. KTP</td>
            <td>:</td>
            <td><?= $data->nik_lansia ?></td>
        </tr>
        <tr>
            <td>No. Telepon</td>
            <td>:</td>
            <td>-</td>
        </tr>
        <tr>
            <td colspan="3">Selanjutnya disebut <b>Pemberi Kuasa.</b></td>
        </tr>

        <br>
        <!-- 2 -->
        <tr>
            <td colspan="3">
                <p>Yang bertanda tangan dibawah ini :</p>
            </td>
        </tr>
        <tr>
            <td width="100px">Nama</td>
            <td width="10px">:</td>
            <td><?= $data->nama_wali ?></td>
        </tr>
        <tr>
            <td width="100px">Tgl lahir</td>
            <td width="10px">:</td>
            <td><?= $data->ttl_wali ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><?= $data->alamat_wali ?></td>
        </tr>
        <tr>
            <td>No. KTP</td>
            <td>:</td>
            <td><?= $data->nik_wali ?></td>
        </tr>
        <tr>
            <td>No. Telepon</td>
            <td>:</td>
            <td><?= $data->no_telpon_wali ?></td>
        </tr>
        <tr>
            <td colspan="3">Selanjutnya disebut <b><b>Pemberi Kuasa.</b> Kuasa.</b> <b>
        </tr>
    </table>
    <table align="center" width="600px" border="0">
        <tr>
            <td colspan="3">
                <p align=" justify">Dengan surat ini, saya sebagai Pemberi Kuasa, memberikan Kuasa kepada Penerima Kuasa untuk melakukan pengambilan uang secara tunai pada rekening BNI Pandai milik saya, dengan data-data sebagai berikut:</p>
            </td>
        </tr>
        <tr>
            <td width="100px">No Rekening</td>
            <td width="10px">:</td>
            <td><?= $data->no_rek ?></td>
        </tr>
        <tr>
            <td width="100px">Atas Nama</td>
            <td width="10px">:</td>
            <td><?= $data->nama_lansia ?></td>
        </tr>
        <tr>
            <td>Nama Bank</td>
            <td>:</td>
            <td><?= $data->nama_bank ?></td>
        </tr>
        <tr>
            <td colspan="3">
                <p align=" justify">Segala akibat yang timbul atas pemberian kuasa ini menjadi tanggung jawab Pemberi Kuasa sepenuhnya dengan membebaskan PT Bank Negara Indonesia (Persero) Tbk dari segala akibat tuntutan atau gugatan yang timbul dari penarikan dana bantuan dari rekening tersebut diatas. <br><br>
                    Demikian Surat Kuasa ini saya buat dengan kesadaran penuh dan tanpa ada paksaan dari pihak manapun dan dapat digunakan sebagaimana mestinya.</p>
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

    <table align="center" width="600px" border="1">
        <tr>
            <td width="420px">
                <p align=" justify">Penerima Kuasa</p>
                <br>
                <br>
                <br>
                <?= strtoupper($data->nama_wali); ?>
                <br>
                NIK. <?= $data->nik_wali ?>
            </td>

            <td>
                <p align=" justify">Rantau, <?= tgl_indo(date('Y-m-d')); ?><br>
                    Pemberi Kuasa, </p>
                <br>
                <br>
                <?= strtoupper($data->nama_lansia); ?>
                <br>
                NIK. <?= $data->nik_lansia ?>
            </td>
        </tr>
    </table>
    <br> <br>

    <script>
        window.print();
    </script>
</body>

</html>