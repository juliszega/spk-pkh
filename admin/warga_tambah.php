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

  $simpan = mysqli_query($koneksi, "SELECT * FROM data_warga WHERE NIK = '$nik'") or die (mysqli_error($con));
  if(mysqli_num_rows($simpan) > 0) {
    echo "<script>alert('NIK Sudah Digunakan!');window.location='warga_tambah.php'</script>";
  } else {
        mysqli_query($koneksi, "INSERT INTO data_warga VALUES('','$nik','$nokk','$nama','$tl','$tgl','$ibu','$jk','$jp','$alamat','$rt','$rw','$prov','$kab','$kec','$kel','$k1','$k2','$k3','$k4','$k5')");
        echo "<script>alert('Data Berhasil Di Simpan');window.location='data_warga.php'</script>";
  }
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
                              <input type="text" class="form-control" name="NIK" placeholder="Input Nik Warga"  minlength="16" maxlength="16"/>
                             </div>
                            <div class="form-group">
                              <label class="form-control-label" for="no_kk">No KK</label>
                              <input type="number" class="form-control" name="no_kk" placeholder="Input No KK">
                            </div>
                            <div class="form-group">
                              <label class="form-control-label" for="nama_warga">Nama Warga</label>
                              <input type="text" class="form-control" name="nama_warga" placeholder="Input Nama Lengkap Warga" required>
                            </div>
                            <div class="form-group">
                              <label class="form-control-label" for="tempat_lahir">Tempat Lahir</label>
                              <input type="text" class="form-control" name="tempat_lahir" placeholder="masukkan tempat lahir">
                            </div>
                            <div class="form-group">
                              <label class="form-control-label" for="tanggal_lahir">Tanggal Lahir</label>
                              <input type="date" class="form-control" name="tanggal_lahir" placeholder="masukkan tanggal lahir">
                            </div>
                            <div class="form-group">
                              <label class="form-control-label" for="ibu_kandung">Ibu Kandung</label>
                              <input type="text" class="form-control" name="ibu_kandung" placeholder="Ibu Kandung">
                            </div>
                            <div class="form-group">
                              <label class="form-control-label" for="jenis_kelamin">Jenis Kelamin</label>
                              <select class="form-control" name="jenis_kelamin" required>
                                <option>jenis kelamin</option>
                                <option >LAKI-LAKI</option>
                                <option >PEREMPUAN</option>
                              </select>    
                            </div>
                            <div class="form-group">
                              <label class="form-control-label" for="jenis_pekerjaan">Jenis Pekerjaan</label>
                              <select class="form-control" name="jenis_pekerjaan" required>
                                <option>pilih jenis pekerjaan</option>
                                <option >AKUNTAS</option>
                                <option >ANGGOTA BPK</option>
                                <option >ANGGOTA DPD</option>
                                <option >ANGGOTA DPR RI</option>
                                <option >ANGGOTA DPRD KAB.</option>
                                <option >ANGGOTA DPRD PROP.</option>
                                <option >APOTEKER</option>
                                <option >ARSITEK</option>
                                <option >BELUM/TIDAK BERKERJA</option>
                                <option >BIARAWATI</option>
                                <option >BIDAN</option>
                                <option >BUPATI</option>
                                <option >BURUH HARIAN LEPAS</option>
                                <option >BURUH NELAYAN/PERIKANAN</option>
                                <option >BURUH PERTENAKAN</option>
                                <option >BURUH TANI/PERKEBUNAN</option>
                                <option >DOKTER</option>
                                <option >DOSEN</option>
                                <option >DUTA BESAR</option>
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
                              <input type="text" class="form-control" name="alamat" placeholder="Alamat">
                            </div>
                            <div class="form-group">
                              <label class="form-control-label" for="rt">RT</label>
                              <input type="text" class="form-control" name="rt" placeholder="RT">
                            </div>
                            <div class="form-group">
                              <label class="form-control-label" for="rw">RW</label>
                              <input type="text" class="form-control" name="rw" placeholder="RW">
                            </div>
                            <div class="form-group">
                              <label class="form-control-label" for="provinsi">Provinsi</label>
                              <select class="form-control" name="provinsi" required>
                                <option>pilih provinsi</option>
                                <option >KEPULAUAN RIAU</option>
                              </select> 
                            </div>
                            <div class="form-group">
                              <label class="form-control-label" for="kabupaten">Kabupaten</label>
                              <select class="form-control" name="kabupaten" required>
                                <option>pilih kabupaten</option>
                                <option >KOTA TANJUNG PINANG</option>
                              </select> 
                            </div>
                            <div class="form-group">
                              <label class="form-control-label" for="kecamatan">Kecamatan</label>
                              <select class="form-control" name="kecamatan" required>
                                <option>pilih kecamatan</option>
                                <option >BUKIT BESTARI</option>
                                <option >TANJUNG PINANG KOTA</option>
                                <option >TANJUNG PINANG BARAT</option>
                                <option >TANJUNG PINANG TIMUR</option>
                              </select> 
                            </div>
                            <div class="form-group">
                              <label class="form-control-label" for="kelurahan">Kelurahan</label>
                              <select class="form-control" name="kelurahan" required>
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
                                <option value="">-- <?= $namaKriteria[0] ?> --</option>
                                <option value="3"> >60 Tahun</option>
                                <option value="2.5">59 Tahun</option>
                                <option value="2">58 Tahun</option>
                                <option value="1.5">57 Tahun</option>
                                <option value="1">56 Tahun</option>
                                <option value="0.55">55 Tahun</option>
                                <option value="0.54">54 Tahun</option>
                                <option value="0.53">53 Tahun</option>
                                <option value="0.52">52 Tahun</option>
                                <option value="0.51">51 Tahun</option>
                                <option value="0.50">50 Tahun</option>
                                <option value="0.49">49 Tahun</option>
                                <option value="0.48">48 Tahun</option>
                                <option value="0.47">47 Tahun</option>
                                <option value="0.46">46 Tahun</option>
                                <option value="0.45">45 Tahun</option>
                                <option value="0.44">44 Tahun</option>
                                <option value="0.43">43 Tahun</option>
                                <option value="0.42">42 Tahun</option>
                                <option value="0.41">41 Tahun</option>
                                <option value="0.40">40 Tahun</option>
                                <option value="0.39">39 Tahun</option>
                                <option value="0.38">38 Tahun</option>
                                <option value="0.37">37 Tahun</option>
                                <option value="0.36">36 Tahun</option>
                                <option value="0.35">35 Tahun</option>
                                <option value="0.34">34 Tahun</option>
                                <option value="0.33">33 Tahun</option>
                                <option value="0.32">32 Tahun</option>
                                <option value="0.31">31 Tahun</option>
                                <option value="0.30">30 Tahun</option>
                                <option value="0.29">29 Tahun</option>
                                <option value="0.28">28 Tahun</option>
                                <option value="0.27">27 Tahun</option>
                                <option value="0.26">26 Tahun</option>
                                <option value="0.25">25 Tahun</option>
                                <option value="0.24">24 Tahun</option>
                                <option value="0.23">23 Tahun</option>                                
                                <option value="0.22">22 Tahun</option>                       
                                <option value="0.21">21 Tahun</option>                                
                                <option value="0.20">20 Tahun</option>                                
                                <option value="0.19">19 Tahun</option>                                
                                <option value="0.18">18 Tahun</option>                                
                                <option value="0.17">17 Tahun</option>                                
                                <option value="0.16">16 Tahun</option>                                
                                <option value="0.15">15 Tahun</option>                                
                                <option value="0.14">14 Tahun</option>                                
                                <option value="0.13">13 Tahun</option>                                
                                <option value="0.12">12 Tahun</option>                                
                                <option value="0.11">11 Tahun</option>                                
                                <option value="0.10">10 Tahun</option>                                
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