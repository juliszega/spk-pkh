<?php
include 'src/header.php';

if(isset($_POST['simpan'])){
  $nik  = $_POST['NIK'];
  $nama  = $_POST['nama_warga'];
  $k1    = $_POST['k1'];
  $k2    = $_POST['k2'];
  $k3    = $_POST['k3'];
  $k4    = $_POST['k4'];
  $k5    = $_POST['k5'];

  $simpan = mysqli_query($koneksi, "UPDATE data_warga SET NIK = '$nik', nama_warga = '$nama', k1 = '$k1', k2 = '$k2', k3 = '$k3', k4 = '$k4', k5 = '$k5' WHERE id_warga = '$_GET[id_warga]'");
  echo "<script>alert('Data Berhasil Di Simpan');window.location='data_warga.php'</script>";

}
?>
                    
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-icon" data-background-color="green">
                <i class="material-icons">edit</i>
            </div>
            <div class="card-content">
                <h4 class="card-title">Edit Data Warga</h4>
                    <div class="table-responsive">
                        <?php
                        $id    = $_GET['id_warga'];
                        $query = mysqli_query($koneksi, "SELECT * FROM data_warga WHERE id_warga = '$id'");
                        $data  = mysqli_fetch_array($query);
                        ?>
                        <form action="" method="POST">
                            <div class="form-group">
                              <label class="form-control-label" for="NIK">Nik</label>
                              <input type="text" class="form-control" name="NIK" value="<?php echo $data['NIK'] ?>" placeholder="Input Nik Warga" required>
                            </div>
                            <div class="form-group">
                              <label class="form-control-label" for="nama_warga">Nama Warga</label>
                              <input type="text" class="form-control" name="nama_warga" value="<?php echo $data['nama_warga'] ?>" placeholder="Input Nama Warga" required>
                            </div>
                            <?php
                              $namaKriteria = array();
                              $qry  = mysqli_query($koneksi, "SELECT * FROM data_kriteria");
                              while($dt = mysqli_fetch_array($qry)){
                                array_push($namaKriteria, $dt['nama_kriteria']);
                              }
                            ?>
                            <div class="form-group">
                              <label class="form-control-label" for="k1"><?= $namaKriteria[0] ?></label>
                              <select class="form-control" name="k1" required>
                                <option value="3" <?php if($data['k1'] == 3){ echo "selected"; } ?> >60 Tahun</option>
                                <option value="2.5" <?php if($data['k1'] == 2.5){ echo "selected"; } ?> >59 Tahun</option>
                                <option value="2" <?php if($data['k1'] == 2){ echo "selected"; } ?> >58 Tahun</option>
                                <option value="1.5" <?php if($data['k1'] == 1.5){ echo "selected"; } ?> >57 Tahun</option>
                                <option value="1" <?php if($data['k1'] == 1){ echo "selected"; } ?> >56 Tahun</option>
                                <option value="1" <?php if($data['k1'] == 1){ echo "selected"; } ?> >55 Tahun</option>
                                <option value="1" <?php if($data['k1'] == 1){ echo "selected"; } ?> >54 Tahun</option>
                                <option value="1" <?php if($data['k1'] == 1){ echo "selected"; } ?> >53 Tahun</option>
                                <option value="1" <?php if($data['k1'] == 1){ echo "selected"; } ?> >52 Tahun</option>
                                <option value="1" <?php if($data['k1'] == 1){ echo "selected"; } ?> >51 Tahun</option>
                                <option value="1" <?php if($data['k1'] == 1){ echo "selected"; } ?> >50 Tahun</option>
                                <option value="1" <?php if($data['k1'] == 1){ echo "selected"; } ?> >49 Tahun</option>
                                <option value="1" <?php if($data['k1'] == 1){ echo "selected"; } ?> >48 Tahun</option>
                                <option value="1" <?php if($data['k1'] == 1){ echo "selected"; } ?> >47 Tahun</option>
                                <option value="1" <?php if($data['k1'] == 1){ echo "selected"; } ?> >46 Tahun</option>
                                <option value="1" <?php if($data['k1'] == 1){ echo "selected"; } ?> >45 Tahun</option>
                                <option value="1" <?php if($data['k1'] == 1){ echo "selected"; } ?> >44 Tahun</option>
                                <option value="1" <?php if($data['k1'] == 1){ echo "selected"; } ?> >43 Tahun</option>
                                <option value="1" <?php if($data['k1'] == 1){ echo "selected"; } ?> >42 Tahun</option>
                                <option value="1" <?php if($data['k1'] == 1){ echo "selected"; } ?> >41 Tahun</option>
                                <option value="1" <?php if($data['k1'] == 1){ echo "selected"; } ?> >40 Tahun</option>
                                <option value="1" <?php if($data['k1'] == 1){ echo "selected"; } ?> >39 Tahun</option>
                                <option value="1" <?php if($data['k1'] == 1){ echo "selected"; } ?> >38 Tahun</option>
                                <option value="1" <?php if($data['k1'] == 1){ echo "selected"; } ?> >37 Tahun</option>
                                <option value="1" <?php if($data['k1'] == 1){ echo "selected"; } ?> >36 Tahun</option>
                                <option value="1" <?php if($data['k1'] == 1){ echo "selected"; } ?> >35 Tahun</option>
                                <option value="1" <?php if($data['k1'] == 1){ echo "selected"; } ?> >34 Tahun</option>
                                <option value="1" <?php if($data['k1'] == 1){ echo "selected"; } ?> >33 Tahun</option>
                                <option value="1" <?php if($data['k1'] == 1){ echo "selected"; } ?> >32 Tahun</option>
                                <option value="1" <?php if($data['k1'] == 1){ echo "selected"; } ?> >31 Tahun</option>
                                <option value="1" <?php if($data['k1'] == 1){ echo "selected"; } ?> >30 Tahun</option>
                                <option value="1" <?php if($data['k1'] == 1){ echo "selected"; } ?> >29 Tahun</option>
                                <option value="1" <?php if($data['k1'] == 1){ echo "selected"; } ?> >28 Tahun</option>
                                <option value="1" <?php if($data['k1'] == 1){ echo "selected"; } ?> >27 Tahun</option>
                                <option value="1" <?php if($data['k1'] == 1){ echo "selected"; } ?> >26 Tahun</option>
                                <option value="1" <?php if($data['k1'] == 1){ echo "selected"; } ?> >25 Tahun</option>
                                <option value="1" <?php if($data['k1'] == 1){ echo "selected"; } ?> >24 Tahun</option>
                                <option value="1" <?php if($data['k1'] == 1){ echo "selected"; } ?> >23 Tahun</option>
                                <option value="1" <?php if($data['k1'] == 1){ echo "selected"; } ?> >22 Tahun</option>
                                <option value="1" <?php if($data['k1'] == 1){ echo "selected"; } ?> >21 Tahun</option>
                                <option value="1" <?php if($data['k1'] == 1){ echo "selected"; } ?> >20 Tahun</option>
                                <option value="1" <?php if($data['k1'] == 1){ echo "selected"; } ?> >19 Tahun</option>
                                <option value="1" <?php if($data['k1'] == 1){ echo "selected"; } ?> >18 Tahun</option>
                                <option value="1" <?php if($data['k1'] == 1){ echo "selected"; } ?> >17 Tahun</option>
                                <option value="1" <?php if($data['k1'] == 1){ echo "selected"; } ?> >16 Tahun</option>
                                <option value="1" <?php if($data['k1'] == 1){ echo "selected"; } ?> >15 Tahun</option>
                                <option value="1" <?php if($data['k1'] == 1){ echo "selected"; } ?> >14 Tahun</option>
                                <option value="1" <?php if($data['k1'] == 1){ echo "selected"; } ?> >13 Tahun</option>
                                <option value="1" <?php if($data['k1'] == 1){ echo "selected"; } ?> >12 Tahun</option>
                                <option value="1" <?php if($data['k1'] == 1){ echo "selected"; } ?> >11 Tahun</option>
                                <option value="1" <?php if($data['k1'] == 1){ echo "selected"; } ?> >10 Tahun</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label class="form-control-label" for="k2"><?= $namaKriteria[1] ?></label>
                              <select class="form-control" name="k2" required>
                                <option value="3" <?php if($data['k2'] == 3){ echo "selected"; } ?> >Ada</option>
                                <option value="1" <?php if($data['k2'] == 1){ echo "selected"; } ?> >Tidak Ada</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label class="form-control-label" for="k3"><?= $namaKriteria[2] ?></label>
                              <select class="form-control" name="k3" required>
                                <option value="3" <?php if($data['k3'] == 3){ echo "selected"; } ?> >SD</option>
                                <option value="3" <?php if($data['k3'] == 3){ echo "selected"; } ?> >SMP</option>
                                <option value="3" <?php if($data['k3'] == 3){ echo "selected"; } ?> >SMA</option>
                                <option value="1" <?php if($data['k3'] == 1){ echo "selected"; } ?> >Tidak Ada</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label class="form-control-label" for="k4"><?= $namaKriteria[3] ?></label>
                              <input type="number" name="k4" placeholder="Input Jumlah tanggungan" value="<?php echo $data['k4'] ?>" class="form-control" required>
                            </div>
                            <div class="form-group">
                              <label class="form-control-label" for="k5"><?= $namaKriteria[4] ?></label>
                              <select class="form-control" name="k5" required>
                                <option value="5" <?php if($data['k5'] == 5){ echo "selected"; } ?> >< 10.000.000</option>
                                <option value="3" <?php if($data['k5'] == 3){ echo "selected"; } ?> >10.000.000 - 30.000.000</option>
                                <option value="2" <?php if($data['k5'] == 2){ echo "selected"; } ?> > 30.000.000</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <button type="submit" class='d-sm-inline-block btn btn-sm btn-primary shadow-sm' name="simpan"><span aria-hidden="true"></span>Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'src/footer.php'; ?>        