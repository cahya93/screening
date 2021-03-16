<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Daftar Rekap kategori Responden Tanggal <?= tgl2($date); ?></h5>
        </div>
        <form action="" method="get">
            <select name="kategori" id="kategori">
                <option value="">Pilih Kategori</option>
                <?php foreach ($kategori as $k) : ?>
                    <option value="<?= $k['id']; ?>"><?= $k['nama']; ?></option>
                <?php endforeach; ?>
            </select>
            <input type="date" name="date" id="date">
            <button type="submit"> view</button>
        </form>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th width="50px">N0</th>
                    <th width="50px">NBM/NIP/NIK</th>
                    <th width="250px">Nama</th>
                    <th width="50px">Score</th>
                    <th width="50px">Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($data as $d) : ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $d['no_id']; ?></td>
                        <td width="150px"><?= $d['nama']; ?></td>
                        <td>
                            <?php
                            $score = $d['p1'] + $d['p2'] + $d['p3'] + $d['p4'] + $d['p5'] + $d['p6'] + $d['p7']+$d['p8']+$d['p9']+$d['p10'];
                            // echo $score;
                            if ($score <= 60) {
                                echo "<span class='btn btn-danger'>$score</span>";
                            } else if ($score < 75) {
                                echo "<span class='btn btn-warning'>$score</span>";
                            } else if ($score >= 75) {
                                echo "<span class='btn btn-success'>$score</span>";
                            }
                            ?>
                        </td>
                        <td>
                            <?php
                            $score = $d['p1'] + $d['p2'] + $d['p3'] + $d['p4'] + $d['p5'] + $d['p6'] + $d['p7'];
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
                            <a href="<?= base_url('Admin/dtl_ktgr?id=') . $d['id'] . "&date=" . $date; ?>"><i class="align-middle" data-feather="edit-2"></i></a>
                            <a href="#"><i class="align-middle" data-feather="trash"></i></a>
                        </td>
                    </tr>
                    <?php $no++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="<?= base_url('admin/ctk_siswa?kelas=') . $ktgr . "&date=" . $date; ?>"><button class="btn btn-danger"><i class="fa fa-file-pdf" aria-hidden="true"> pdf</i></button></a>
    </div>
</div>