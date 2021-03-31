<div class="row">
    <div class="col-xl-6 col-xxl-5 d-flex">
        <div class="w-100">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mb-4">Total Responden</h5>
                            <h1 class="mt-1 mb-3"><?= $total; ?> Orang</h1>
                            <div class="mb-1">
                                <span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> Update</span>
                                <span class="text-muted"><?= tanggal(date('Y-m-d')); ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mb-4">Siswa</h5>
                            <h1 class="mt-1 mb-3"><?= $count->siswa; ?> Orang</h1>
                            <div class="mb-1">
                                <span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> Update</span>
                                <span class="text-muted"><?= tanggal(date('Y-m-d')); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mb-4">Guru</h5>
                            <h1 class="mt-1 mb-3"><?= $count->guru; ?> Orang</h1>
                            <div class="mb-1">
                                <span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> Update</span>
                                <span class="text-muted"><?= tanggal(date('Y-m-d')); ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mb-4">Karyawan</h5>
                            <h1 class="mt-1 mb-3"><?= $count->karyawan; ?> Orang</h1>
                            <div class="mb-1">
                                <span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> Update</span>
                                <span class="text-muted"><?= tanggal(date('Y-m-d')); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mb-4">Umum</h5>
                            <h1 class="mt-1 mb-3"><?= $count->umum; ?> Orang</h1>
                            <div class="mb-1">
                                <span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> Update</span>
                                <span class="text-muted"><?= tanggal(date('Y-m-d')); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-6 col-xxl-7">
        <div class="card flex-fill w-100">
            <div class="card-header">

                <h5 class="card-title mb-0">Recent Respondent</h5>
            </div>
            <div class="card-body py-3">
                <div class="chart chart-sm">
                    <canvas id="chartjs-dashboard-line"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="col-12  d-flex">
    <div class="card flex-fill">
        <div class="card-header">
            <h5 class="card-title mb-0">Jumlah Responden Siswa Berdasarkan Kelas</h5>
        </div>
        <table class="table table-hover my-0">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Kelas</th>
                    <th>Tahun Pelajaran</th>
                    <th>Status</th>
                    <th class="d-none d-md-table-cell">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($kelas as $k) : ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $k['kelas']; ?></td>
                        <td><?= $k['tp']; ?></td>
                        <td>
                            <?php
                            $jml = $this->db->get_where('tbl_screening', ['kelas' => $k['id']])->result_array();
                            $result = count($jml);

                            if ($result < 1) {
                                echo "<span class='btn btn-danger'>$result Siswa</span>";
                            } else {
                                echo "<span class='btn btn-warning'>$result Siswa</span>";
                            }
                            ?>
                        </td>
                        <td>
                            <a href="<?= base_url('admin/dtl_kls?kelas=') . $k['kelas']; ?>"><span class="btn btn-primary">Detail</span></a>
                        </td>
                    </tr>
                    <?php $no++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>