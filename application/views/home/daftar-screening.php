<style>
    * {
        box-sizing: border-box;
    }

    #myInput {
        background-image: url('/css/searchicon.png');
        background-position: 10px 10px;
        background-repeat: no-repeat;
        width: 100%;
        font-size: 16px;
        padding: 12px 20px 12px 40px;
        border: 1px solid #ddd;
        margin-bottom: 12px;
    }

    #myTable {
        border-collapse: collapse;
        width: 100%;
        border: 1px solid #ddd;
        font-size: 18px;
        margin-bottom: 10px;
    }

    #myTable th,
    #myTable td {
        text-align: left;
        padding: 12px;
    }

    #myTable tr {
        border-bottom: 1px solid #ddd;
    }

    #myTable tr.header,
    #myTable tr:hover {
        background-color: #f1f1f1;
    }
</style>
<!-- banner section start -->
<div class="container">
    <div class="about_taital_main">
        <h2 class="about_tag">Daftar Hasil Screening Responden</h2>
    </div>
</div>
<!-- banner section end -->
</div>
<!-- header section end -->
<!-- protect section start -->
<div class="protect_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="protect_taital">Tabel Responden</h1>
            </div>
        </div>
        <table class="table table-striped table-inverse table-responsive">
            <thead class="thead-inverse">
                <tr>
                    <th>No</th>
                    <th>Kategori</th>
                    <th>Jumlah Responden</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row">1</td>
                    <td>Umum</td>
                    <td><?= $count->umum; ?> Orang</td>
                </tr>
                <tr>
                    <td scope="row">2</td>
                    <td>Guru</td>
                    <td><?= $count->guru; ?> Orang</td>
                </tr>
                <tr>
                    <td scope="row">3</td>
                    <td>Karyawan</td>
                    <td><?= $count->karyawan; ?> Orang</td>
                </tr>
                <tr>
                    <td scope="row">4</td>
                    <td>Siswa</td>
                    <td><?= $count->siswa; ?> Orang</td>
                </tr>
                <tr>
                    <td colspan="2">Total Responden</td>
                    <td>
                        <?php
                        $result = $count->umum + $count->guru + $count->karyawan + $count->siswa;
                        echo $result . " Orang";
                        ?>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="table-responsive">
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

            <table id="myTable" border="1" cellspacing="0">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th width="150px">Tanggal</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Kategori</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($data as $d) : ?>
                        <tr>
                            <td scope="row"><?= $no; ?></td>
                            <td><?= tanggal($d['date']); ?></td>
                            <td><?= $d['nama']; ?></td>
                            <td><?= $d['alamat']; ?></td>
                            <td>
                                <?php
                                $kategori = $this->db->get_where('tbl_kategori', ['id' => $d['kategori']])->row_array();
                                echo $kategori['nama'];
                                ?>
                            </td>
                            <!-- <td>
                                <?php
                                $kelas = $this->db->get_where('tbl_kelas', ['id' => $d['kelas']])->row_array();
                                echo $kelas['kelas'];
                                ?>
                            </td> -->
                            <!-- <td>
                                <a href="<?= base_url('home/cetak_kartu/') . $d['id']; ?>"><button class="btn btn-primary">CETAK</button></a>
                            </td> -->
                        </tr>
                        <?php $no++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- protect section end -->
<script>
    function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[2];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>