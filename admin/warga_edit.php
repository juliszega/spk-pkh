<?php
include 'src/header.php';

if(isset($_POST['simpan'])){
  $nik  = $_POST['NIK'];
  $nokk  = $_POST['no_kk'];
  $nama  = $_POST['nama_warga'];
  $tl  = $_POST['tempat_lahir'];
  $tgl  = $_POST['tanggal_lahir'];
  $ibu  = $_POST['ibu_kandung'];
  $jk  = $_POST['jenis_kelamin'];
  $jp  = $_POST['jenis_pekerjaan'];
  $alamat  = $_POST['alamat'];
  $rt  = $_POST['rt'];
  $rw  = $_POST['rw'];
  $prov  = $_POST['provinsi'];
  $kab  = $_POST['kabupaten'];
  $kec  = $_POST['kecamatan'];
  $kel  = $_POST['kelurahan'];  
  $k1    = $_POST['k1'];
  $k2    = $_POST['k2'];
  $k3    = $_POST['k3'];
  $k4    = $_POST['k4'];
  $k5    = $_POST['k5'];

  $simpan = mysqli_query($koneksi, "UPDATE data_warga SET NIK = '$nik', no_kk = '$nokk', nama_warga = '$nama', tempat_lahir = '$tl', tanggal_lahir = '$tgl', ibu_kandung = '$ibu', jenis_kelamin = '$jk', jenis_pekerjaan = '$jp', k1 = '$k1', k2 = '$k2', k3 = '$k3', k4 = '$k4', k5 = '$k5' WHERE id_warga = '$_GET[id_warga]'");
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
                              <label class="form-control-label" for="no_kk">No KK</label>
                              <input type="number" class="form-control" name="no_kk" value="<?php echo $data['no_kk'] ?>" placeholder="Input No KK">
                            </div>
                            <div class="form-group">
                              <label class="form-control-label" for="nama_warga">Nama Warga</label>
                              <input type="text" class="form-control" name="nama_warga" value="<?php echo $data['nama_warga'] ?>" placeholder="Input Nama Lengkap Warga" required>
                            </div>
                            <div class="form-group">
                              <label class="form-control-label" for="tempat_lahir">Tempat Lahir</label>
                              <input type="text" class="form-control" name="tempat_lahir" value="<?php echo $data['tempat_lahir'] ?>" placeholder="masukkan tempat lahir">
                            </div>
                            <div class="form-group">
                              <label class="form-control-label" for="tanggal_lahir">Tanggal Lahir</label>
                              <input type="date" class="form-control" name="tanggal_lahir" value="<?php echo $data['tanggal_lahir'] ?>" placeholder="masukkan tanggal lahir">
                            </div>
                            <div class="form-group">
                              <label class="form-control-label" for="ibu_kandung">Ibu Kandung</label>
                              <input type="text" class="form-control" name="ibu_kandung" value="<?php echo $data['ibu_kandung'] ?>" placeholder="Ibu Kandung">
                            </div>
                            <div class="form-group">
                              <label class="form-control-label" for="jenis_kelamin">Jenis Kelamin</label>
                              <select class="form-control" name="jenis_kelamin" required>
                              <option value="LAKI-LAKI" <?php if($data['jenis_kelamin'] == "LAKI-LAKI" ){ echo "selected"; } ?> >LAKI-LAKI</option>
                              <option value="PEREMPUAN" <?php if($data['jenis_kelamin'] == "PEREMPUAN" ){ echo "selected"; } ?> >PEREMPUAN</option>
                              </select>    
                            </div>
                            <div class="form-group">
                              <label class="form-control-label" for="jenis_pekerjaan">Jenis Pekerjaan</label>
                              <select class="form-control" name="jenis_pekerjaan" required>
                                <option>pilih jenis pekerjaan</option>
                                <option value="AKUNTAS" <?php if($data['jenis_pekerjaan'] == "AKUNTAS" ){ echo "selected"; } ?> >AKUNTAS</option>
                                <option value="ANGGOTA BPK" <?php if($data['jenis_pekerjaan'] == "ANGGOTA BPK" ){ echo "selected"; } ?> >ANGGOTA BPK</option>
                                <option value="ANGGOTA DPD" <?php if($data['jenis_pekerjaan'] == "ANGGOTA DPD" ){ echo "selected"; } ?> >ANGGOTA DPD</option>
                                <option value="ANGGOTA DPR RI" <?php if($data['jenis_pekerjaan'] == "ANGGOTA DPR RI" ){ echo "selected"; } ?>>ANGGOTA DPR RI</option>
                                <option value="ANGGOTA DPRD KAB." <?php if($data['jenis_pekerjaan'] == "ANGGOTA DPRD KAB." ){ echo "selected"; } ?> >ANGGOTA DPRD KAB.</option>
                                <option value="ANGGOTA DPRD PROP." <?php if($data['jenis_pekerjaan'] == "ANGGOTA DPRD PROP." ){ echo "selected"; } ?> >ANGGOTA DPRD PROP.</option>
                                <option value="APOTOKER" <?php if($data['jenis_pekerjaan'] == "APOTEKER" ){ echo "selected"; } ?> >APOTEKER</option>
                                <option value="ARSITEK" <?php if($data['jenis_pekerjaan'] == "ARSITEK" ){ echo "selected"; } ?>>ARSITEK</option>
                                <option value="BELUM/TIDAK BEKERJA" <?php if($data['jenis_pekerjaan'] == "BELUM/TIDAK BEKERJA" ){ echo "selected"; } ?> >BELUM/TIDAK BERKERJA</option>
                                <option value="BIARAWATI" <?php if($data['jenis_pekerjaan'] == "BIARAWATI" ){ echo "selected"; } ?> >BIARAWATI</option>
                                <option value="BIDAN" <?php if($data['jenis_pekerjaan'] == "BIDAN" ){ echo "selected"; } ?> >BIDAN</option>
                                <option value="BUPATI" <?php if($data['jenis_pekerjaan'] == "BUPATI" ){ echo "selected"; } ?> >BUPATI</option>
                                <option value="BURUH HARIAN LEPAS" <?php if($data['jenis_pekerjaan'] == "BURUAN HARIAN LEPAS" ){ echo "selected"; } ?> >BURUH HARIAN LEPAS</option>
                                <option value="BURUH NELAYAN/PERIKANAN" <?php if($data['jenis_pekerjaan'] == "BURUH NELAYAN/PERIKANAN" ){ echo "selected"; } ?>>BURUH NELAYAN/PERIKANAN</option>
                                <option value="BURUH PERTENAKAN" <?php if($data['jenis_pekerjaan'] == "BURUH PERTENAKAN" ){ echo "selected"; } ?>>BURUH PERTENAKAN</option>
                                <option value="BURUH TANI/PERKEBUNAN" <?php if($data['jenis_pekerjaan'] == "BURUH TANI/PERKEBUNAN" ){ echo "selected"; } ?> >BURUH TANI/PERKEBUNAN</option>
                                <option value="DOKTER" <?php if($data['jenis_pekerjaan'] == "DOKTER" ){ echo "selected"; } ?> >DOKTER</option>
                                <option value="DOSEN" <?php if($data['jenis_pekerjaan'] == "DOSEN" ){ echo "selected"; } ?> >DOSEN</option>
                                <option value="DUTA BESAR" <?php if($data['jenis_pekerjaan'] == "DUTA BESAR" ){ echo "selected"; } ?> >DUTA BESAR</option>
                                <option >GURU</option>
                                <option >IMAM MASJID</option>
                                <option >INDUSTRI</option>
                                <option >JURU MASAK</option>
                                <option >KARYAWAN BUMD</option>
                                <option >KARYAWAN BUMN</option>
                                <option >KARYAWAN HONORER</option>
                                <option >KARYAWAN SWASTA</option>
                                <option >KEPALA DESA</option>
                                <option >KEPOLISIAN RI (POLRI}</option>
                                <option >KONTRUKSI</option>
                                <option >KONSULTAN</option>
                                <option >MEKANIK</option>
                                <option >MENGURUS RUMAH TANGGA</option>
                                <option >NELAYAN/PERIKAN</option>
                                <option >NOTARIS</option>
                                <option >PARAJI</option>
                                <option >PARANORMAL</option>
                                <option >PASTOR</option>
                                <option >PEDAGANG</option>
                                <option >PEGAWAI NEGERI SIPIL (PNS)</option>
                                <option >PEKERJAAN LAINNYA</option>
                                <option >PELAJAR/MAHASISWA</option>
                                <option >PELAUT</option>
                                <option >PEMBANTU RUMAH TANGGA</option>
                                <option >PENATA BUSANA</option>
                                <option >PENATA RIAS</option>
                                <option >PENATA RAMBUT</option>
                                <option >PENDETA</option>
                                <option >PENELITI</option>
                                <option >PENGACARA</option>
                                <option >PENSIUNAN</option>
                                <option >PENTERJEMAH</option>
                                <option >PENYIAR RADIO</option>
                                <option >PENYIAR TELEVISI</option>
                                <option >PERANCANG BUSANA</option>
                                <option >PERANGKAT DESA</option>
                                <option >PERAWAT</option>
                                <option >PERDAGANGAN</option>
                                <option >PETANI/PEKEBUN</option>
                                <option >PETERNAK</option>
                                <option >PIALANG</option>
                                <option >PILOT</option>
                                <option >PROMOTOR ACARA</option>
                                <option >PSIKIATER/PSIKOLOG</option>
                                <option >SENIMAN</option>
                                <option >SOPIR</option>
                                <option >TABIB</option>
                                <option >TENTARA NASIONAL INDONESIA (TNI)</option>
                                <option >TIDAK TERDEFINISI</option>
                                <option >TRANSPORTASI</option>
                                <option >TUKANG BATU</option>
                                <option >TUKANG CUKUR</option>
                                <option >TUKANG GIGI</option>
                                <option >TUKANG JAHIT</option>
                                <option >TUKANG KAYU</option>
                                <option >TUKANG LAS/PANDAI BESI</option>
                                <option >TUKANG LISTRIK</option>
                                <option >TUKANG SOL SEPATU</option>
                                <option >USTADZ/MUBALIGH</option>
                                <option >WAKIL BUPATI</option>
                                <option >WARTAWAN</option>
                                <option >WIRASAWTA</option>
                                
                              </select> 
                            </div>
                            <div class="form-group">
                              <label class="form-control-label" for="alamat">Alamat</label>
                              <input type="text" class="form-control" name="alamat" value="<?php echo $data['alamat'] ?>" placeholder="Alamat">
                            </div>
                            <div class="form-group">
                              <label class="form-control-label" for="rt">RT</label>
                              <input type="text" class="form-control" name="rt" value="<?php echo $data['rt'] ?>" placeholder="RT">
                            </div>
                            <div class="form-group">
                              <label class="form-control-label" for="rw">RW</label>
                              <input type="text" class="form-control" name="rw" value="<?php echo $data['rw'] ?>" placeholder="RW">
                            </div>
                            <div class="form-group">
                              <label class="form-control-label" for="provinsi">Provinsi</label>
                              <select class="form-control" name="provinsi" value="<?php echo $data['provinsi'] ?>" required>
                                <option>pilih provinsi</option>
                                <option >KEPULAUAN RIAU</option>
                              </select> 
                            </div>
                            <div class="form-group">
                              <label class="form-control-label" for="kabupaten">Kabupaten</label>
                              <select class="form-control" name="kabupaten" value="<?php echo $data['kabupaten'] ?>" required>
                                <option>pilih kabupaten</option>
                                <option >KOTA TANJUNG PINANG</option>
                              </select> 
                            </div>
                            <div class="form-group">
                              <label class="form-control-label" for="kecamatan">Kecamatan</label>
                              <select class="form-control" name="kecamatan" value="<?php echo $data['kecamatan'] ?>" required>
                                <option>pilih kecamatan</option>
                                <option >BUKIT BESTARI</option>
                                <option >TANJUNG PINANG KOTA</option>
                                <option >TANJUNG PINANG BARAT</option>
                                <option >TANJUNG PINANG TIMUR</option>
                              </select> 
                            </div>
                            <div class="form-group">
                              <label class="form-control-label" for="kelurahan">Kelurahan</label>
                              <select class="form-control" name="kelurahan" value="<?php echo $data['kelurahan'] ?>" required>
                                <option>pilih kelurahan</option>
                                <option >DOMPAK</option>
                                <option >SEI JANG</option>
                                <option >TANJUNG AYUN SAKTI</option>
                                <option >TANJUNGPINANG TIMUR</option>
                                <option >TANJUNG UNGGAT</option>
                                <option >BUKIT CERMIN</option>
                                <option >KAMPUNG BARU</option>
                                <option >KEMBOJA</option>
                                <option >TANJUNGPINANG BARAT</option>
                                <option >KAMPUNG BUGIS</option>
                                <option >PENYENGAT</option>
                                <option >SENGGARANG</option>
                                <option >TANJUNGPINANG KOTA</option>
                                <option >AIR RAJA</option>
                                <option >BATU IX</option>
                                <option >KAMPUNG BULANG</option>
                                <option >MELAYU KOTA PIRING</option>
                                <option >PINANG KENCANA</option>
                              </select> 
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
                                <option value="0.55" <?php if($data['k1'] == 0.55){ echo "selected"; } ?> >55 Tahun</option>
                                <option value="0.54" <?php if($data['k1'] == 0.54){ echo "selected"; } ?> >54 Tahun</option>
                                <option value="0.53" <?php if($data['k1'] == 0.53){ echo "selected"; } ?> >53 Tahun</option>
                                <option value="0.52" <?php if($data['k1'] == 0.52){ echo "selected"; } ?> >52 Tahun</option>
                                <option value="0.51" <?php if($data['k1'] == 0.51){ echo "selected"; } ?> >51 Tahun</option>
                                <option value="0.50" <?php if($data['k1'] == 0.50){ echo "selected"; } ?> >50 Tahun</option>
                                <option value="0.49" <?php if($data['k1'] == 0.49){ echo "selected"; } ?> >49 Tahun</option>
                                <option value="0.48" <?php if($data['k1'] == 0.48){ echo "selected"; } ?> >48 Tahun</option>
                                <option value="0.47" <?php if($data['k1'] == 0.47){ echo "selected"; } ?> >47 Tahun</option>
                                <option value="0.46" <?php if($data['k1'] == 0.46){ echo "selected"; } ?> >46 Tahun</option>
                                <option value="0.45" <?php if($data['k1'] == 0.45){ echo "selected"; } ?> >45 Tahun</option>
                                <option value="0.44" <?php if($data['k1'] == 0.44){ echo "selected"; } ?> >44 Tahun</option>
                                <option value="0.43" <?php if($data['k1'] == 0.43){ echo "selected"; } ?> >43 Tahun</option>
                                <option value="0.42" <?php if($data['k1'] == 0.42){ echo "selected"; } ?> >42 Tahun</option>
                                <option value="0.41" <?php if($data['k1'] == 0.41){ echo "selected"; } ?> >41 Tahun</option>
                                <option value="0.40" <?php if($data['k1'] == 0.40){ echo "selected"; } ?> >40 Tahun</option>
                                <option value="0.39" <?php if($data['k1'] == 0.39){ echo "selected"; } ?> >39 Tahun</option>
                                <option value="0.38" <?php if($data['k1'] == 0.38){ echo "selected"; } ?> >38 Tahun</option>
                                <option value="0.37" <?php if($data['k1'] == 0.37){ echo "selected"; } ?> >37 Tahun</option>
                                <option value="0.36" <?php if($data['k1'] == 0.36){ echo "selected"; } ?> >36 Tahun</option>
                                <option value="0.35" <?php if($data['k1'] == 0.35){ echo "selected"; } ?> >35 Tahun</option>
                                <option value="0.34" <?php if($data['k1'] == 0.34){ echo "selected"; } ?> >34 Tahun</option>
                                <option value="0.33" <?php if($data['k1'] == 0.33){ echo "selected"; } ?> >33 Tahun</option>
                                <option value="0.32" <?php if($data['k1'] == 0.32){ echo "selected"; } ?> >32 Tahun</option>
                                <option value="0.31" <?php if($data['k1'] == 0.31){ echo "selected"; } ?> >31 Tahun</option>
                                <option value="0.30" <?php if($data['k1'] == 0.30){ echo "selected"; } ?> >30 Tahun</option>
                                <option value="0.29" <?php if($data['k1'] == 0.29){ echo "selected"; } ?> >29 Tahun</option>
                                <option value="0.28" <?php if($data['k1'] == 0.28){ echo "selected"; } ?> >28 Tahun</option>
                                <option value="0.27" <?php if($data['k1'] == 0.27){ echo "selected"; } ?> >27 Tahun</option>
                                <option value="0.26" <?php if($data['k1'] == 0.26){ echo "selected"; } ?> >26 Tahun</option>
                                <option value="0.25" <?php if($data['k1'] == 0.25){ echo "selected"; } ?> >25 Tahun</option>
                                <option value="0.24" <?php if($data['k1'] == 0.24){ echo "selected"; } ?> >24 Tahun</option>
                                <option value="0.23" <?php if($data['k1'] == 0.23){ echo "selected"; } ?> >23 Tahun</option>
                                <option value="0.22" <?php if($data['k1'] == 0.22){ echo "selected"; } ?> >22 Tahun</option>
                                <option value="0.21" <?php if($data['k1'] == 0.21){ echo "selected"; } ?> >21 Tahun</option>
                                <option value="0.20" <?php if($data['k1'] == 0.20){ echo "selected"; } ?> >20 Tahun</option>
                                <option value="0.19" <?php if($data['k1'] == 0.19){ echo "selected"; } ?> >19 Tahun</option>
                                <option value="0.18" <?php if($data['k1'] == 0.18){ echo "selected"; } ?> >18 Tahun</option>
                                <option value="0.17" <?php if($data['k1'] == 0.17){ echo "selected"; } ?> >17 Tahun</option>
                                <option value="0.16" <?php if($data['k1'] == 0.16){ echo "selected"; } ?> >16 Tahun</option>
                                <option value="0.15" <?php if($data['k1'] == 0.15){ echo "selected"; } ?> >15 Tahun</option>
                                <option value="0.14" <?php if($data['k1'] == 0.14){ echo "selected"; } ?> >14 Tahun</option>
                                <option value="0.13" <?php if($data['k1'] == 0.13){ echo "selected"; } ?> >13 Tahun</option>
                                <option value="0.12" <?php if($data['k1'] == 0.12){ echo "selected"; } ?> >12 Tahun</option>
                                <option value="0.11" <?php if($data['k1'] == 0.11){ echo "selected"; } ?> >11 Tahun</option>
                                <option value="0.10" <?php if($data['k1'] == 0.10){ echo "selected"; } ?> >10 Tahun</option>
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
                                <option value="3" <?php if($data['k5'] == 3){ echo "selected"; } ?> >Ada</option>
                                <option value="1" <?php if($data['k5'] == 1){ echo "selected"; } ?> >Tidak Ada</option>
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