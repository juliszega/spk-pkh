<?php include 'src/header.php'; ?>
                    
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-icon" data-background-color="purple">
                <i class="material-icons">apps</i>
            </div>
            <div class="card-content">
                <h4 class="card-title">Data Warga Calon Penerima PKH</h4>
                <a href="warga_tambah.php"><button type="button" class='d-sm-inline-block btn btn-sm btn-success shadow-sm'><span aria-hidden="true"></span>Create</button></a>
                <a href="warga_cetak.php" target="_blank()"><button type="button" class='d-sm-inline-block btn btn-sm btn-danger shadow-sm'><span aria-hidden="true"></span>Cetak</button></a>
                <div class="material-datatables">
                    <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                        <thead>
                            <tr>
                                <th class="text-center">No.</th>
                                <th class="text-center">NIK</th>
                                <th class="text-center">No KK</th>
                                <th class="text-center">Nama Warga</th>
                                <th class="text-center">Tempat Lahir</th>
                                <th class="text-center">Tanggal Lahir</th>
                                <th class="text-center">Ibu Kandung</th>
                                <th class="text-center">jenis Kelamin</th>
                                <th class="text-center">jenis Pekerjaan</th>
                                <th class="text-center">Alamat</th>
                                <th class="text-center">RT</th>
                                <th class="text-center">RW</th>
                                <th class="text-center">Provinsi</th>
                                <th class="text-center">Kabupaten</th>
                                <th class="text-center">Kecamatan</th>
                                <th class="text-center">Kelurahan</th>
                                <?php
                                $qry  = mysqli_query($koneksi, "SELECT * FROM data_kriteria");
                                while($dt = mysqli_fetch_array($qry)){
                                  echo "<th class='text-center'>$dt[nama_kriteria]</th>";
                                }
                                ?>
                                <th class="disabled-sorting text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $no = 1;
                                $query = mysqli_query($koneksi, "SELECT * FROM data_warga");
                                while($data = mysqli_fetch_array($query)){
                                    include 'src/kondisi.php';
                              ?>
                            <tr class="text-center">
                                <td><?= $no++ ?></td>
                                <td><?= $data['NIK'] ?></td>
                                <td><?= $data['no_kk'] ?></td>
                                <td><?= $data['nama_warga'] ?></td>
                                <td><?= $data['tempat_lahir'] ?></td>
                                <td><?= $data['tanggal_lahir'] ?></td>
                                <td><?= $data['ibu_kandung'] ?></td>
                                <td><?= $data['jenis_kelamin'] ?></td>
                                <td><?= $data['jenis_pekerjaan'] ?></td>
                                <td><?= $data['alamat'] ?></td>
                                <td><?= $data['rt'] ?></td>
                                <td><?= $data['rw'] ?></td>
                                <td><?= $data['provinsi'] ?></td>
                                <td><?= $data['kabupaten'] ?></td>
                                <td><?= $data['kecamatan'] ?></td>
                                <td><?= $data['kelurahan'] ?></td>
                                <td><?= $k1 ?></td>
                                <td><?= $k2 ?></td>
                                <td><?= $k3 ?></td>
                                <td><?= $data['k4'] ?></td>
                                <td><?= $k5 ?></td>
                                <td>
                                  <a href="warga_edit.php?id_warga=<?php echo $data['id_warga']; ?>"><button type="button" class='d-sm-inline-block btn btn-sm btn-primary shadow-sm'><span aria-hidden="true"></span>Edit</button></a>
                                  <a href="warga_hapus.php?id_warga=<?php echo $data['id_warga']; ?>"><button type="button" class='d-sm-inline-block btn btn-sm btn-danger shadow-sm'><span aria-hidden="true"></span>Delete</button></a>
                              </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'src/footer.php'; ?>        