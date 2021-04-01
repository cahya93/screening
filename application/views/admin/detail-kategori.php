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
                        <th>Alamat</th>
                        <th>:</th>
                        <th><?= $data['alamat']; ?></th>
                    </tr>
                    <tr>
                        <th>Tanggal</th>
                        <th>:</th>
                        <th><?= format_indo($data['timestamp']); ?></th>
                    </tr>
                    <tr>
                        <th>Total Score</th>
                        <th>:</th>
                        <th>
                            <?php
                            $score = $data['p1'] + $data['p2'] + $data['p3'] + $data['p4'] + $data['p5'] + $data['p6'] + $data['p7'] + $data['p8'] + $data['p9'] + $data['p10'];
                            // echo $score;
                            if ($score <= 79) {
                                echo "<span class='btn btn-danger'>$score</span>";
                            } else if ($score < 89) {
                                echo "<span class='btn btn-warning'>$score</span>";
                            } else if ($score >= 90) {
                                echo "<span class='btn btn-success'>$score</span>";
                            }
                            ?>
                        </th>
                    </tr>
                </table>

                <h3 style="margin-top: 25px;">Rincian Jawaban:</h3>
                <ol>
                    <li>
                        Saya memiliki penyakit bawaan atau comorbid yang tidak terkontrol (seperti asma, diabetes, jantung, dll)
                    </li>
                    <p>
                        Jawaban: <?php
                                    $p1 = $data['p1'];
                                    if ($p1 == 5) {
                                        echo "<span class='btn btn-success'>Tidak</span>";
                                    } else {
                                        echo "<span class='btn btn-danger'>$p1</span>";
                                    } ?>

                    </p>
                    <li>
                        Saya sedang demam dengan suhu badan diatas 37,3 derajat Celcius
                    </li>
                    <p>
                        Jawaban: <?php
                                    $p1 = $data['p2'];
                                    if ($p1 == 10) {
                                        echo "<span class='btn btn-success'>Tidak</span>";
                                    } else {
                                        echo "<span class='btn btn-danger'>$p1</span>";
                                    } ?>
                    </p>
                    <li>
                        Saya sedang batuk
                    </li>
                    <p>
                        Jawaban: <?php
                                    $p3 = $data['p3'];
                                    if ($data['p3'] == 10) {
                                        echo "<span class='btn btn-success'>Tidak</span>";
                                    } else {
                                        echo "<span class='btn btn-danger'>$p3</span>";
                                    } ?>
                    </p>
                    <li>
                        Saya sedang sakit tenggorokan / nyeri saat menelan
                    </li>
                    <p>
                        Jawaban: <?php
                                    $p4 = $data['p4'];
                                    if ($data['p4'] == 10) {
                                        echo "<span class='btn btn-success'>Tidak</span>";
                                    } else {
                                        echo "<span class='btn btn-danger'>$p4</span>";
                                    } ?>
                    </p>
                    <li>
                        Saya sedang sesak napas / kesulitan berbicara
                    </li>
                    <p>
                        Jawaban: <?php
                                    $p5 = $data['p5'];
                                    if ($p5 == 10) {
                                        echo "<span class='btn btn-success'>Tidak</span>";
                                    } else {
                                        echo "<span class='btn btn-danger'>$p5</span>";
                                    } ?>
                    </p>
                    <li>
                        Saya sedang mengalami masalah pada indera penciuman/perasa
                    </li>
                    <p>
                        Jawaban: <?php
                                    $p6 = $data['p6'];
                                    if ($p6 == 10) {
                                        echo "<span class='btn btn-success'>Tidak</span>";
                                    } else {
                                        echo "<span class='btn btn-danger'>$p6</span>";
                                    } ?>
                    </p>
                    <li>
                        Dalam kurun waktu 14 hari terakhir saya mengalami sakit tertentu (seperti demam/batuk/sakit tenggorokan/sesak napas/dll)/batuk/sakit tenggorokan/sesak napas/dll)
                    </li>
                    <p>
                        Jawaban: <?php
                                    $p7 = $data['p7'];
                                    if ($p7 == 10) {
                                        echo "<span class='btn btn-success'>Tidak</span>";
                                    } else {
                                        echo "<span class='btn btn-danger'>$p7</span>";
                                    } ?>
                    </p>
                    <li>
                        Dalam kurun waktu 14 hari terakhir saya melakukan perjalanan ke luar kota/daerah dengan kategori zona merah
                    </li>
                    <p>
                        Jawaban: <?php
                                    $p7 = $data['p8'];
                                    if ($p7 == 10) {
                                        echo "<span class='btn btn-success'>Tidak</span>";
                                    } else {
                                        echo "<span class='btn btn-danger'>$p7</span>";
                                    } ?>
                    </p>
                    <li>
                        Dalam kurun waktu 14 hari terakhir, saya terdapat riwayat kontak (seperti bersentuhan/jabat tangan, mengobrol lama atau dalam satu ruangan) dengan orang yang sudah terkonfirmasi positif terinfeksi virus covid-19
                    </li>
                    <p>
                        Jawaban: <?php
                                    $p7 = $data['p9'];
                                    if ($p7 == 15) {
                                        echo "<span class='btn btn-success'>Tidak</span>";
                                    } else {
                                        echo "<span class='btn btn-danger'>$p7</span>";
                                    } ?>
                    </p>
                    <li>
                        Saya bersedia untuk mematuhi dan melaksanakan segala bentuk protokol kesehatan pencegahan covid-19 di lingkungan SMK Muhammadiyah Karangmojo
                    </li>
                    <p>
                        Jawaban: <?php
                                    $p7 = $data['p10'];
                                    if ($p7 == 10) {
                                        echo "<span class='btn btn-success'>Ya</span>";
                                    } else {
                                        echo "<span class='btn btn-danger'>$p7</span>";
                                    } ?>
                    </p>
                </ol>
            </div>
        </div>
    </div>
</div>