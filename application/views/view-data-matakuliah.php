<html>

<head>
    <title>Data Matakuliah</title>
</head>

<body>
    <center>
        <table>
            <tr>
                <th colspan="3">
                    Data matakuliah
                </th>
            </tr>

            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>

            <tr>
                <th>Kode MTK</th>
                <td>:</td>
                <td><?= $kode; ?></td>
            </tr>

            <tr>
                <th>Nama MTK</th>
                <td>:</td>
                <td><?= $nama; ?></td>
            </tr>

            <tr>
                <th>SKS</th>
                <td>:</td>
                <td><?= $sks; ?></td>
            </tr>

            <tr>
                <td colspan="3" align="center">
                    <a href="<?= base_url('matakuliah'); ?>"> Kembali</a>
                </td>
            </tr>
        </table>
    </center>
</body>

</html>