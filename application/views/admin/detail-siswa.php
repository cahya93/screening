<?php
$kelas = $this->db->get_where('tbl_kelas', ['id' => $data['kelas']])->row_array();
?>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Hasil Responden</h5>
            </div>
            <div class="card-body">
                <table>
                    <tr>
                        <th>Nama</th>
                        <th>:</th>
                        <th><?= $data['nama']; ?></th>
                    </tr>
                    <tr>
                        <th>Kelas</th>
                        <th>:</th>
                        <th><?= $kelas['kelas']; ?></th>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <th>:</th>
                        <th><?= $data['alamat']; ?></th>
                    </tr>
                    <tr>
                        <th>Total Score</th>
                        <th>:</th>
                        <th>
                            <?php
                            $score = $data['p1'] + $data['p2'] + $data['p3'] + $data['p4'] + $data['p5'] + $data['p6'] + $data['p7'];
                            // echo $score;
                            if ($score <= 60) {
                                echo "<span class='btn btn-danger'>$score</span>";
                            } else if ($score < 75) {
                                echo "<span class='btn btn-warning'>$score</span>";
                            } else if ($score >= 75) {
                                echo "<span class='btn btn-success'>$score</span>";
                            }
                            ?>
                        </th>
                    </tr>
                </table>

                <h3 style="margin-top: 25px;">Rincian Jawaban:</h3>
                <ol>
                    <li>
                        Apakah saat ini anda sedang memiliki penyakit bawaan atau comorbid yang tidak terkontrol? Jika Ya, sebutkan apa penyakitnya. (misal : asma, diabetes, jantung, dll)
                    </li>
                    <p>Jawaban:
                        <?php
                        $p1 = $data['p1'];
                        if ($p1 == 5) {
                            echo "<span class='btn btn-success'>Tidak</span>";
                        } else {
                            echo "<span class='btn btn-warning'>$p1</span>";
                        } ?>
                    </p>
                    <li>
                        Apakah dalam kurun waktu 14 hari terakhir anda mengalami sakit tertentu? Jika Ya, sebutkan apa sakitnya.
                    </li>
                    <p>Jawaban:
                        <?php
                        $p2 = $data['p2'];
                        if ($data['p2'] == 5) {
                            echo "<span class='btn btn-success'>Tidak</span>";
                        } else {
                            echo "<span class='btn btn-warning'>$p2</span>";
                        } ?>
                    </p>
                    <li>
                        Apakah dalam kurun waktu 14 hari terakhir anda memiliki riwayat perjalanan dari daerah/kota dengan kategori zona Merah? Jika Ya, sebutkan riwayat perjalanannya dari kota mana saja
                    </li>
                    <p>Jawaban:
                        <?php
                        $p3 = $data['p3'];
                        if ($data['p3'] == 25) {
                            echo "<span class='btn btn-success'>Tidak</span>";
                        } else {
                            echo "<span class='btn btn-warning'>$p3</span>";
                        } ?>
                    </p>
                    <li>
                        Apakah dalam kurun waktu 14 hari terakhir anda atau keluarga anda memiliki riwayat kontak dengan orang yang terkonfirmasi positif covid-19?
                    </li>
                    <p>Jawaban:
                        <?php
                        $p4 = $data['p4'];
                        if ($data['p4'] == 25) {
                            echo "<span class='btn btn-success'>Tidak</span>";
                        } else {
                            echo "<span class='btn btn-warning'>$p4</span>";
                        } ?>
                    </p>
                    <li>
                        Apakah ada anggota keluarga atau tetangga sekitar tempat tinggal yang terkonfirmasi positif covid-19?
                    </li>
                    <p>Jawaban:
                        <?php
                        $p5 = $data['p5'];
                        if ($p5 == 25) {
                            echo "<span class='btn btn-success'>Tidak</span>";
                        } else {
                            echo "<span class='btn btn-warning'>$p5</span>";
                        } ?>
                    </p>
                    <li>
                        Apakah anda memiliki akses transportasi yang memungkinkan penerapan jaga jarak?
                    </li>
                    <p>Jawaban:
                        <?php
                        $p6 = $data['p6'];
                        if ($p6 == 10) {
                            echo "<span class='btn btn-success'>Ya</span>";
                        } else {
                            echo "<span class='btn btn-warning'>$p6</span>";
                        } ?>
                    </p>
                    <li>
                        Apakah anda bersedia untuk mematuhi dan melaksanakan segala bentuk pencegahan dengan protokol kesehatan covid-19 yang diterapkan di lingkungan SMK Muhammadiyah Karangmojo?
                    </li>
                    <p>Jawaban:
                        <?php
                        $p7 = $data['p7'];
                        if ($p7 == 5) {
                            echo "<span class='btn btn-success'>Ya</span>";
                        } else {
                            echo "<span class='btn btn-warning'>$p7</span>";
                        } ?>
                    </p>
                </ol>
            </div>
        </div>
    </div>
</div>