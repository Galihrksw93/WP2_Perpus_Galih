<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <style type="text/css">
        .table-data {
            width: 100%;
            border-collapse: collapse;
        }

        .table-data tr th,
        .table-data tr td {
            border: 1px solid black;
            font-size: 11pt;
            font-family: Verdana;
            padding: 10px 10px 10px 10px;
        }

        h3 {
            font-family: Verdana;
        }
    </style>
    <h3>
        <center>Laporan Data Anggota Perputakaan Online</center>
    </h3>
    <br />
    <table class="table-data">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Member Sejak</th>
                <th>Image</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $genap = "#CCCCCC";
            $ganjil = "#FFFFFF";
            $no = 1;
            foreach ($anggota as $a) {
                if ($no % 2 == 0) {
                    $warna = $genap;
                } else {
                    $warna = $ganjil;
                }
                echo "<tr bgcolor = '$warna'>";
            ?>
                <th scope="row"><?= $no++; ?></th>
                <td><?= $a['nama']; ?></td>
                <td><?= $a['email']; ?></td>
                <td><?= date('d F Y', $a['tanggal_input']); ?></td>
                <td>
                    <picture>
                        <source srcset="" type="image/svg+xml">
                        <img src="<?= base_url('assets/img/profile/') . $a['image']; ?>" class="img-fluid img-thumbnail" alt="..." style="width:60px;height:80px;">
                    </picture>
                </td>
                </tr>
            <?php } ?>
        </tbody>
        <?php
        $tglcetak = date('Y-m-d');
        echo "<br>";
        echo "<div align='right'> Tanggal Cetak : $tglcetak</div>";
        ?>
    </table>
    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>