<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Daftar Rekap Siswa Kelas <?= $kls; ?> Tanggal <?= tgl2($date); ?></h5>
        </div>
        <form action="" method="get">
            <select class="form-select" style="width: 20%;margin-left:10px;" name="kelas" id="kelas">
                <option value="">Pilih Kelas</option>
                <?php foreach ($kelas as $k) : ?>
                    <option value="<?= $k['kelas']; ?>"><?= $k['kelas']; ?></option>
                <?php endforeach; ?>
            </select>
            <input class="form-control mt-2" style="width: 20%;margin-left:10px;" type="date" name="date" id="date">
            <button class="btn btn-primary mt-2" style="margin-left:10px;" type="submit"> view</button>
        </form>
        <table class="table table-striped">
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
                            $jml = $this->db->get_where('tbl_screening', ['no_id' => $d['nis'], 'date' => $date])->result_array();
                            $result = count($jml);
                            // echo $result;

                            if ($result >= 1) {
                                echo "<span class='btn btn-success'>Sudah</span>";
                            } else {
                                echo "<span class='btn btn-danger'>Belum</span>";
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
                            $score = $rincian['p1'] + $rincian['p2'] + $rincian['p3'] + $rincian['p4'] + $rincian['p5'] + $rincian['p6'] + $rincian['p7'] + $rincian['p8'] + $rincian['p9'] + $rincian['p10'];
                            // echo $score;
                            if ($score <= 69) {
                                echo "<span class='btn btn-danger'>$score</span>";
                            } else if ($score < 89) {
                                echo "<span class='btn btn-warning'>$score</span>";
                            } else if ($score >= 90) {
                                echo "<span class='btn btn-success'>$score</span>";
                            }
                            ?>
                        </td>
                        <td>
                            <?php
                            $rincian = $this->db->get_where('tbl_screening', ['no_id' => $d['nis'], 'date' => $date])->row_array();
                            $score = $rincian['p1'] + $rincian['p2'] + $rincian['p3'] + $rincian['p4'] + $rincian['p5'] + $rincian['p6'] + $rincian['p7'] + $rincian['p8'] + $rincian['p9'] + $rincian['p10'];
                            // echo $score;
                            if ($score <= 60) {
                                echo "<span class='btn btn-danger'>Stop</span>";
                            } else if ($score < 75) {
                                echo "<span class='btn btn-warning'>Waspada</span>";
                            } else if ($score >= 75) {
                                echo "<span class='btn btn-success'>Aman</span>";
                            }
                            ?>
                        </td>
                        <td class="table-action">
                            <a href="<?= base_url('Admin/dtl_siswa?nis=') . $d['nis'] . "&date=" . $date; ?>"><i class="align-middle" data-feather="edit-2"></i></a>
                            <a href="#"><i class="align-middle" data-feather="trash"></i></a>
                        </td>
                    </tr>
                    <?php $no++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div class="container mt-3">
            <a href="<?= base_url('admin/ctk_siswa?kelas=') . $kls . "&date=" . $date; ?>"><button class="btn btn-danger"><i class="fa fa-file-pdf" aria-hidden="true"> PDF</i></button></a>
        </div>
    </div>
</div>