<div class="card-header">
    <h2 style="text-align: center;">Daftar Rekap Siswa</h2>
    <h3 style="text-align: center;">Kelas <?= $kls; ?> </h3>
    <p>Tanggal <?= tgl2($date); ?></p>
</div>
<table class="table table-striped" border="1" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>NIS</th>
            <th width="150px">Nama</th>
            <th>Kelas</th>
            <th>Status</th>
            <th>Tanggal Screening</th>
            <th>Score</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; ?>
        <?php foreach ($data as $d) : ?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $d['nis']; ?></td>
                <td width="150px"><?= $d['nama']; ?></td>
                <td><?= $d['kelas']; ?></td>
                <td>
                    <?php
                    $jml = $this->db->get_where('tbl_screening', ['no_id' => $d['nis'], 'date' => $date])->result_array();
                    $result = count($jml);
                    // echo $result;

                    if ($result >= 1) {
                        echo "<span style='background-color:green;' class='btn btn-success'>Sudah</span>";
                    } else {
                        echo "<span style='background-color:red;' class='btn btn-danger'>Belum</span>";
                    }
                    ?>
                </td>
                <td>
                    <?php
                    $rincian = $this->db->get_where('tbl_screening', ['no_id' => $d['nis'], 'date' => $date])->row_array();
                    echo tgl2($rincian['date']);
                    ?>
                </td>
                <td>
                    <?php
                    $rincian = $this->db->get_where('tbl_screening', ['no_id' => $d['nis'], 'date' => $date])->row_array();
                    $score = $rincian['p1'] + $rincian['p2'] + $rincian['p3'] + $rincian['p4'] + $rincian['p5'] + $rincian['p6'] + $rincian['p7'];
                    // echo $score;
                    if ($score <= 60) {
                        echo "<span style='background-color:red;' class='btn btn-danger'>$score</span>";
                    } else if ($score < 75) {
                        echo "<span style='background-color:yellow;' class='btn btn-warning'>$score</span>";
                    } else if ($score >= 75) {
                        echo "<span style='background-color:green;' class='btn btn-success'>$score</span>";
                    }
                    ?>
                </td>
                <td>
                    <?php
                    $rincian = $this->db->get_where('tbl_screening', ['no_id' => $d['nis'], 'date' => $date])->row_array();
                    $score = $rincian['p1'] + $rincian['p2'] + $rincian['p3'] + $rincian['p4'] + $rincian['p5'] + $rincian['p6'] + $rincian['p7'];
                    // echo $score;
                    if ($score <= 60) {
                        echo "<span style='background-color:red;' class='btn btn-danger'>Stop</span>";
                    } else if ($score < 75) {
                        echo "<span style='background-color:yellow;' class='btn btn-warning'>Waspada</span>";
                    } else if ($score >= 75) {
                        echo "<span style='background-color:green;' class='btn btn-success'>Aman</span>";
                    }
                    ?>
                </td>
            </tr>
            <?php $no++; ?>
        <?php endforeach; ?>
    </tbody>
</table>