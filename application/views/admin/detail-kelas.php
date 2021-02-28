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
                    <th>Nama</th>
                    <th>Kelas</th>
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
                        <td><?= $d['nama']; ?></td>
                        <td><?= $d['kelas']; ?></td>
                        <td>
                            <?php
                            $jml = $this->db->get_where('tbl_screening', ['no_id' => $d['nis']])->result_array();
                            $result = count($jml);

                            if ($result < 1) {
                                echo "<span class='btn btn-danger'>$result Siswa</span>";
                            } else {
                                echo "<span class='btn btn-warning'>$result Siswa</span>";
                            }
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