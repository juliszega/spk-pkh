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

  $simpan = mysqli_query($koneksi, "INSERT INTO data_warga VALUES('','$nik','$nama','$k1','$k2','$k3','$k4','$k5')");
  echo "<script>alert('Data Berhasil Di Simpan');window.location='data_warga.php'</script>";

}
?>
                    
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-icon" data-background-color="purple">
                <i class="material-icons">add</i>
            </div>
            <div class="card-content">
                <h4 class="card-title">Tambah Data Warga</h4>
                    <div class="table-responsive">
                        <form action="" method="POST">
                        <div class="form-group">
                              <label class="form-control-label" for="NIK">NIK</label>
                              <input type="text" class="form-control" name="NIK" placeholder="Input Nik Warga">
                            </div>
                            <div class="form-group">
                              <label class="form-control-label" for="nama_warga">Nama Warga</label>
                              <input type="text" class="form-control" name="nama_warga" placeholder="Input Nama Lengkap Warga" required>
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
                                <option value="">-- <?= $namaKriteria[0] ?> --</option>
                                <option value="3"> >60 Tahun</option>
                                <option value="2.5">59 Tahun</option>
                                <option value="2">58 Tahun</option>
                                <option value="1.5">57 Tahun</option>
                                <option value="1">56 Tahun</option>
                                <option value="1">55 Tahun</option>
                                <option value="1">54 Tahun</option>
                                <option value="1">53 Tahun</option>
                                <option value="1">52 Tahun</option>
                                <option value="1">51 Tahun</option>
                                <option value="1">50 Tahun</option>
                                <option value="1">49 Tahun</option>
                                <option value="1">48 Tahun</option>
                                <option value="1">47 Tahun</option>
                                <option value="1">46 Tahun</option>
                                <option value="1">45 Tahun</option>
                                <option value="1">44 Tahun</option>
                                <option value="1">43 Tahun</option>
                                <option value="1">42 Tahun</option>
                                <option value="1">41 Tahun</option>
                                <option value="1">40 Tahun</option>
                                <option value="1">39 Tahun</option>
                                <option value="1">38 Tahun</option>
                                <option value="1">37 Tahun</option>
                                <option value="1">36 Tahun</option>
                                <option value="1">35 Tahun</option>
                                <option value="1">34 Tahun</option>
                                <option value="1">33 Tahun</option>
                                <option value="1">32 Tahun</option>
                                <option value="1">31 Tahun</option>
                                <option value="1">30 Tahun</option>
                                <option value="1">29 Tahun</option>
                                <option value="1">28 Tahun</option>
                                <option value="1">27 Tahun</option>
                                <option value="1">26 Tahun</option>
                                <option value="1">25 Tahun</option>
                                <option value="1">24 Tahun</option>
                                <option value="1">23 Tahun</option>                                
                                <option value="1">22 Tahun</option>                                
                                <option value="1">20 Tahun</option>                                
                                <option value="1">21 Tahun</option>                                
                                <option value="1">20 Tahun</option>                                
                                <option value="1">19 Tahun</option>                                
                                <option value="1">18 Tahun</option>                                
                                <option value="1">17 Tahun</option>                                
                                <option value="1">16 Tahun</option>                                
                                <option value="1">15 Tahun</option>                                
                                <option value="1">14 Tahun</option>                                
                                <option value="1">13 Tahun</option>                                
                                <option value="1">12 Tahun</option>                                
                                <option value="1">11 Tahun</option>                                
                                <option value="1">10 Tahun</option>                                
                              </select>
                            </div>
                            <div class="form-group">
                              <label class="form-control-label" for="k2"><?= $namaKriteria[1] ?></label>
                              <select class="form-control" name="k2" required>
                                <option value="">-- <?= $namaKriteria[1] ?> --</option>
                                <option value="3">Ada</option>
                                <option value="1">Tidak Ada</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label class="form-control-label" for="k3"><?= $namaKriteria[2] ?></label>
                              <select class="form-control" name="k3" required>
                                <option value="">-- <?= $namaKriteria[2] ?> --</option>
                                <option value="3">SD</option>
                                <option value="3">SMP</option>
                                <option value="3">SMA</option>
                                <option value="1">Tidak Ada</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label class="form-control-label" for="k4"><?= $namaKriteria[3] ?></label>
                              <select class="form-control" name="k4" required>
                                <option value="">-- <?= $namaKriteria[3] ?> --</option>
                                <option value="1">Tidak Ada</option>
                                <option value="3">6 Tahun</option>
                                <option value="3">5 Tahun</option>
                                <option value="3">4 Tahun</option>
                                <option value="3">3 Tahun</option>
                                <option value="3">2 Tahun</option>
                                <option value="3">1 Tahun</option>
                              
                            </select>
                            </div>
                            <!-- <div class="form-group">
                              <label class="form-control-label" for="k4"><?= $namaKriteria[3] ?></label>
                              <input type="number" name="k4" placeholder="Input Jumlah tanggungan" class="form-control" required>
                            </div>
                            <div class="form-group">
                              <label class="form-control-label" for="k4"><?= $namaKriteria[3] ?></label>
                              <input type="number" name="k4" placeholder="Input Jumlah tanggungan" class="form-control" required>
                            </div> -->
                            <div class="form-group">
                              <label class="form-control-label" for="k5"><?= $namaKriteria[4] ?></label>
                              <select class="form-control" name="k5" required>
                                <option value="">-- <?= $namaKriteria[4] ?> --</option>
                                <option value="3">Ada</option>
                                <option value="1">Tidak Ada</option>
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