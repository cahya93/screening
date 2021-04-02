<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="SATGAS COVID-19 SMK Muhammadiyah Karangmojo">
    <meta name="description" content="Aplikasi Screening Tim SATGAS COVID-19 SMK Muhammadiyah Karangmojo">
    <meta name="author" content="Eko Cahyanto">
    <link rel="icon" href="<?= base_url(); ?>/assets/favicon.ico" type="image/gif" />
    <link href="<?= base_url(); ?>assets/backend/static/css/app.css" rel="stylesheet">
    <title>Hasil Screening</title>
</head>

<body>
    <div class="container">
        <div class="card">
            <h2 style="text-align:center;font-weight:bolder">Kartu Hasil Screening</h2>
            <table class="table">
                <thead style="text-align:left">
                    <tr>
                        <th width="180px">Tanggal Screening</th>
                        <th width="5px">:</th>
                        <th><?= format_indo($data['timestamp']); ?></th>
                    </tr>
                    <tr>
                        <th>No. Identitas</th>
                        <th>:</th>
                        <th><?= $data['no_id']; ?></th>
                    </tr>
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
                        <th>Status</th>
                        <th>:</th>
                        <th>
                            <?php
                            $status = $this->db->get_where('tbl_kategori', ['id' => $data['kategori']])->row_array();
                            echo $status['nama'];
                            ?>
                        </th>
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
                </thead>
            </table>
            <p style="text-align: center;font-size: 20px;font-weight:bolder;margin-top:15px;">
                <?php
                $waspada = "<i style='text-transform: uppercase;'><b>Maka Anda dinyatakan harus isolasi mandiri. Jangan bepergian, bekerja dan belajar dari rumah saja.</b></i>";
                $aman = "<i style='text-transform: uppercase;'>ANDA DINYATAKAN SEHAT, IN SYAA ALLAH. JIKA ANDA JUJUR MENGISI INSTRUMEN INI</i>";
                // $info = "<i style='text-transform: uppercase;'><b>Info lebih lanjut hubungi SATGAS COVID Sekolah di nomor WA <a href='https://wa.me/6285729598484?text=Assamualaikum,%20saya%20butuh%20informasi%20mengenai%20hasil%20screening%20Saya...'>085729598484 (Pak Ahsan)</a> </b></i>";
                // $info2 = "<i style='text-transform: uppercase;'><b>dan <a href='https://wa.me/6288225237456?text=Assamualaikum,%20saya%20butuh%20informasi%20mengenai%20hasil%20screening%20Saya...'>0882-2523-7456 (Bu Dwinana)</a></b></i>";

                if ($score <= 79) {
                    echo $waspada;
                } else if ($score >= 90) {
                    echo $aman;
                }
                ?>
            </p>
            <p style="text-align:center;font-size: 20px;">
                <i style='text-transform: uppercase;'>Info lebih lanjut hubungi SATGAS COVID Sekolah<br /> di nomor WA <a href='https://wa.me/6285729598484?text=Assamualaikum,%20saya%20butuh%20informasi%20mengenai%20hasil%20screening%20Saya...'>085729598484 (Pak Ahsan)</a></i>
                <i style='text-transform: uppercase;'>dan <a href='https://wa.me/6288225237456?text=Assamualaikum,%20saya%20butuh%20informasi%20mengenai%20hasil%20screening%20Saya...'>0882-2523-7456 (Bu Dwinana)</a></i>
            </p>
            <p style="text-transform: uppercase;margin-left:10px;margin-bottom:0;">
                Catatan:<br />
                <b>
                    <ol style="margin-top: 0;">
                        <li>Kartu ini hanya bisa di akses 1x yaitu setelah anda mengisi screening</li>
                        <li>Silahkan di Sreenshoot dan tunjukan kepada petugas piket saat anda memasuki lingkungan SMK Muhammadiyah Karangmojo</li>
                        <li>Masa berlaku kartu ini hanya 1 (satu) hari</li>
                    </ol>
                </b>
            </p>
        </div>
    </div>
</body>

</html>