<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Daftar Siswa Kelas <?= $kelas; ?></h5>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIS</th>
                    <th width="150px">Nama</th>
                    <th>Kelas</th>
                    <th>Status</th>
                    <th>Tanggal Screening</th>
                    <th>Score / Status</th>
                    <th>Actions</th>
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
                            $jml = $this->db->get_where('tbl_screening', ['no_id' => $d['nis']])->result_array();
                            $result = count($jml);

                            if ($result < 1) {
                                echo "<span class='btn btn-danger'>$result Screening</span>";
                            } else {
                                echo "<span class='btn btn-warning'>$result Screening</span>";
                            }
                            ?>
                        </td>
                        <td>
                            <?php
                            $rincian = $this->db->get_where('tbl_screening', ['no_id' => $d['nis']])->result_array();
                            foreach ($rincian as $r) :
                                echo "<ul><li>" . tgl2($r['date']) . "</li></ul>";
                            endforeach;
                            ?>
                        </td>
                        <td>
                            <?php
                            $rincian = $this->db->get_where('tbl_screening', ['no_id' => $d['nis']])->result_array();
                            foreach ($rincian as $r) :
                                $result = $this->db->get_where('tbl_screening', ['no_id' => $d['nis'], 'date' => $r['date']])->row_array();
                                $score = $result['p1'] + $result['p2'] + $result['p3'] + $result['p4'] + $result['p5'] + $result['p6'] + $result['p7'];
                                // echo $score;
                                if ($score <= 60) {
                                    echo "<ul><li><span class='btn btn-danger'>$score / Berbahaya</li></ul></span>";
                                } else if ($score < 75) {
                                    echo "<ul><li><span class='btn btn-warning'>$score / Waspada</li></ul></span>";
                                } else if ($score >= 75) {
                                    echo "<ul><li><span class='btn btn-success'>$score / Aman</li></ul></span>";
                                }
                            endforeach;
                            ?>
                        </td>
                        <td class="table-action">
                            <a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
                            <a href="#"><i class="align-middle" data-feather="trash"></i></a>
                        </td>
                    </tr>
                    <?php $no++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>