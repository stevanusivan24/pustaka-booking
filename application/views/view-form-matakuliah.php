<html>

<head>
    <title>Form input matakuliah</title>
</head>

<body>
    <center>
        <form action="<?= base_url('Matakuliah/cetak'); ?>" method="post">
            <table>
                <tr>
                    <th colspan="3">Form Input Matakuliah</th>
                </tr>

                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>

                <tr>
                    <th>Kode MTK</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="kode" id="kode"><?= form_error('kode', '<br><span style="color:red;">', '</span>'); ?>
                    </td>
                </tr>

                <tr>
                    <th>Nama MTK</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama" id="nama"><?= form_error('nama', '<br><span style="color:red;">', '</span>'); ?>
                    </td>
                </tr>



                <tr>
                    <th>SKS</th>
                    <td>:</td>
                    <td>
                        <select name="sks" id="sks">
                            <option selected disabled>Pilih SKS</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" value="submit">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>