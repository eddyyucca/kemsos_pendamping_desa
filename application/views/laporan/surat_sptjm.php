<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Surat SPTJM</title>

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
    <table align="center">
        <tr>
            <th>
                <p><img src="<?= base_url('assets/img/cop.png') ?>" width="600px"></p>
            </th>
        </tr>
        <tr>
            <th>SURAT PERTANGGUNGJAWABAN MUTLAK (SPTJM)<br>
                AKTIVITAS REKENING DAN PENCAIRAN DANA BANTUAN LU TAHUN 2019</th>
        </tr>
    </table>
    <br>
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
            <td colspan="3">
                <p>Yang bertanda tangan dibawah ini, saya:</p>
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
            <td>No Telpon/HP</td>
            <td>:</td>
            <td><?= $data->no_telpon_wali ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><?= $data->id_wali ?></td>
        </tr>
    </table>


    <table align="center" width="600px" border="0">
        <tr>
            <td valign="top">
                <p>1. </p>
            <td>
                <p align=" justify">Bertanggung jawab penuh untuk melakukan aktivasi rekening penerima Bantu LU serta menerima Buku Tabungan dan/atau starter kit (Kartu Debit/ATM dan PIN) sejumlah 1 (satu) penerima Bantu LU sesuai surat kuasa Pengambilan dana Bantu LU serta menyerahkan Buku Tabungan dan strater kit tersebut kepada penerima Bantu LU.</p>
            </td>
            </td>
        </tr>
        <tr>
            <td valign="top">
                <p>2. </p>
            <td>
                <p align=" justify">Bertanggung jawab penuh atas penerimaan dana tunai yang bersumber dari aktivasi rekening dan pencairan dana Bantu LU sesuai surat kuasa Pengambilan dana Bantu LU.</p>
            </td>

            </th>
        </tr>
        <tr>
            <td valign="top">
                <p>3.</p>
            </td>
            <td>
                <p align=" justify">Bertanggung jawab penuh untuk menyalurkan/memberikan Buku Tabungan dan starter kit (Kartu Debit/ATM dan PIN) serta dana tunai kepada penerima Bantu LU sesuai Surat Kuasa penerima Bantu LU dalam waktu paling lambat 5 hari kerja setelah pencairan kolektif dilakukan.</p>
            </td>
        </tr>
        <tr>
            <td valign="top">
                <p> 4.</p>
            </td>
            <td>
                <p align=" justify">Apabila di kemudian hari terjadi tuntutan hukum baik pidana maupun perdata terkait dengan pencairan dana Bantu LU secara kolektif ini, maka saya siap untuk bertanggung jawab.</p>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <p>Demikian surat pernyataan pertanggungjawaban mutlak ini saya buat dengan kesadaran dan penuh tanggung jawab.</p>
            </td>
        </tr>
    </table>

    <table align="center" width="600px" border="0">
        <tr>
            <td width="420px">
                <p align=" justify">Mengetahui, <br>Pendamping Bantu LU </p>
                <br>
                <br>
                <br>
                <br>

                <?= strtoupper($data->nama); ?>
                <br>
                NIK. <?= $data->nik ?>
            </td>

            <td>
                <p align=" justify">Rantau, <?= tgl_indo(date('Y-m-d')); ?><br>
                    Wali Penerima Bantu LU </p>
                <br>
                <br>
                <br>
                <br>
                <?= strtoupper($data->nama_wali); ?>
                <br>
                NIK. <?= $data->nik_wali ?>
            </td>
        </tr>
    </table>
    <br> <br>

    <script>
        window.print();
    </script>
</body>

</html>