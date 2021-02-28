<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kartu Screening</title>
    <style>
        h2 {
            text-align: center;
            font-size: 30px;
            margin: 0;
        }

        h3 {
            margin: 0;
            margin-bottom: 10px;
            text-align: center;
            font-size: 28;
        }

        table th {
            text-align: left;
        }

        p {
            text-align: justify;
        }
    </style>

</head>

<body>
    <h2>Kartu Hasil Screening</h2>
    <h3>SMK Muhammadiyah Karangmojo</h3>

    <!-- <p> Yang bertanda Tangan dibawah ini:</p>
    <table id="tabel">
        <tr>
            <th>Nama</th>
            <th>:</th>
            <th>Ahsan Fauzi, S.Pd</th>
        </tr>
        <tr>
            <th>NBM</th>
            <th>:</th>
            <th></th>
        </tr>
        <tr>
            <th>Jabatan</th>
            <th>:</th>
            <th>Ketua SATGAS COVID-19 SMK Muhammadiyah Karangmojo</th>
        </tr>
    </table> -->

    <!-- <p>Menerangkan Bahwa:</p> -->
    <table id="tabel">
        <tr>
            <th>Nama</th>
            <th>:</th>
            <th><?= ucwords(strtolower($data['nama'])); ?></th>
        </tr>
        <tr>
            <th>Alamat</th>
            <th>:</th>
            <th><?= $data['alamat']; ?></th>
        </tr>
        <tr>
            <th>Status</th>
            <th>:</th>
            <th>
                <?php
                $kategori = $this->db->get_where('tbl_kategori', ['id' => $data['kategori']])->row_array();
                echo $kategori['nama'];
                ?>
            </th>
        <tr>
            <th>Kelas</th>
            <th>:</th>
            <th>
                <?php
                $kelas = $this->db->get_where('tbl_kelas', ['id' => $data['kelas']])->row_array();
                echo $kelas['kelas'];
                ?>
            </th>
        </tr>
    </table>

    <p>
        Telah melakukan screening pada laman <a href="https://screening.smkmuhkarangmojo.sch.id">https://screening.smkmuhkarangmojo.sch.id</a> pada tanggal <?= tgl2($data['date']); ?> dengan rincian hasil sebagai berikut:
    </p>

    <ol>
        <li>
            Apakah saat ini anda sedang memiliki penyakit bawaan atau comorbid yang tidak terkontrol? Jika Ya, sebutkan apa penyakitnya. (misal : asma, diabetes, jantung, dll)
        </li>
        <p>
            Jawaban: <?= $data['p1']; ?>
        </p>
        <li>
            Apakah dalam kurun waktu 14 hari terakhir anda mengalami sakit tertentu? Jika Ya, sebutkan apa sakitnya.
        </li>
        <p>
            Jawaban: <?= $data['p2']; ?>
        </p>
        <li>
            Apakah dalam kurun waktu 14 hari terakhir anda memiliki riwayat perjalanan dari daerah/kota dengan kategori zona Merah? Jika Ya, sebutkan riwayat perjalanannya dari kota mana saja.
        </li>
        <p>
            Jawaban: <?= $data['p3']; ?>
        </p>
        <li>
            Apakah dalam kurun waktu 14 hari terakhir anda atau keluarga anda memiliki riwayat kontak dengan orang yang terkonfirmasi positif covid-19?
        </li>
        <p>
            Jawaban: <?= $data['p4']; ?>
        </p>
        <li>
            Apakah ada anggota keluarga atau tetangga sekitar tempat tinggal yang terkonfirmasi positif covid-19?
        </li>
        <p>
            Jawaban: <?= $data['p5']; ?>
        </p>
        <li>
            Apakah anda memiliki akses transportasi yang memungkinkan penerapan jaga jarak?
        </li>
        <p>
            Jawaban: <?= $data['p6']; ?>
        </p>
        <li>
            Apakah anda bersedia untuk mematuhi dan melaksanakan segala bentuk pencegahan dengan protokol kesehatan covid-19 yang diterapkan di lingkungan SMK Muhammadiyah Karangmojo?
        </li>
        <p>
            Jawaban: <?= $data['p7']; ?>
        </p>
    </ol>
    <!-- <p>
        Demikian Kartu Screening ini dibuat agar digunakan sebagaimana mestinya.
    </p> -->
</body>

</html>