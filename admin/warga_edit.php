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
  $almt  = $_POST['alamat'];
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

  $simpan = mysqli_query($koneksi, "UPDATE data_warga SET NIK = '$nik', no_kk = '$nokk', nama_warga = '$nama', tempat_lahir = '$tl', tanggal_lahir = '$tgl', ibu_kandung = '$ibu', jenis_kelamin = '$jk', jenis_pekerjaan = '$jp', alamat = '$almt', rt = '$rt', rw = '$rw', provinsi = '$prov', kabupaten = '$kab', kecamatan = '$kec', kelurahan = '$kel', k1 = '$k1', k2 = '$k2', k3 = '$k3', k4 = '$k4', k5 = '$k5' WHERE id_warga = '$_GET[id_warga]'");
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
                                <option value="GURU" <?php if($data['jenis_pekerjaan'] == "GURU" ){ echo "selected"; } ?>>GURU</option>
                                <option value="IMAM MASJID" <?php if($data['jenis_pekerjaan'] == "IMAM MASJID" ){ echo "selected"; } ?> >IMAM MASJID</option>
                                <option value="INDUSTRI" <?php if($data['jenis_pekerjaan'] == "INDUSTRI" ){ echo "selected"; } ?> >INDUSTRI</option>
                                <option value="JURU MASAK" <?php if($data['jenis_pekerjaan'] == "JURU MASAK" ){ echo "selected"; } ?> >JURU MASAK</option>
                                <option value="KARYAWAN BUMD" <?php if($data['jenis_pekerjaan'] == "KARYAWAN BMUD" ){ echo "selected"; } ?> >KARYAWAN BUMD</option>
                                <option value="KARYAWAN BUMN" <?php if($data['jenis_pekerjaan'] == "KARYAWAN BUMN" ){ echo "selected"; } ?> >KARYAWAN BUMN</option>
                                <option value="KARYAWAN HONORER" <?php if($data['jenis_pekerjaan'] == "KARYAWAN HONORER" ){ echo "selected"; } ?> >KARYAWAN HONORER</option>
                                <option value="KARYAWAN SWASTA" <?php if($data['jenis_pekerjaan'] == "KARYAWAN SWASTA" ){ echo "selected"; } ?> >KARYAWAN SWASTA</option>
                                <option value="KEPALA DESA" <?php if($data['jenis_pekerjaan'] == "KEPALA DESA" ){ echo "selected"; } ?> >KEPALA DESA</option>
                                <option value="KEPOLISIAN RI (POLRI)" <?php if($data['jenis_pekerjaan'] == "KEPOLISIAN RI (POLRI)" ){ echo "selected"; } ?> >KEPOLISIAN RI (POLRI}</option>
                                <option value="KONTRUKSI" <?php if($data['jenis_pekerjaan'] == "KONTRUKSI" ){ echo "selected"; } ?> >KONTRUKSI</option>
                                <option value="KONSULTAN" <?php if($data['jenis_pekerjaan'] == "KONSULTAN" ){ echo "selected"; } ?> >KONSULTAN</option>
                                <option value="MEKANIK" <?php if($data['jenis_pekerjaan'] == "MEKANIK" ){ echo "selected"; } ?> >MEKANIK</option>
                                <option value="MENGURUS RUMAH TANGGA" <?php if($data['jenis_pekerjaan'] == "MENGURUS RUMAH TANGGA" ){ echo "selected"; } ?> >MENGURUS RUMAH TANGGA</option>
                                <option value="NELAYAN/PERIKANAN" <?php if($data['jenis_pekerjaan'] == "NELAYAN/PERIKANAN" ){ echo "selected"; } ?> >NELAYAN/PERIKAN</option>
                                <option value="NOTARIS" <?php if($data['jenis_pekerjaan'] == "NOTARIS" ){ echo "selected"; } ?> >NOTARIS</option>
                                <option value="PARAJI" <?php if($data['jenis_pekerjaan'] == "PARAJI" ){ echo "selected"; } ?> >PARAJI</option>
                                <option value="PARANORMAL" <?php if($data['jenis_pekerjaan'] == "PARANORMAL" ){ echo "selected"; } ?> >PARANORMAL</option>
                                <option value="PASTOR" <?php if($data['jenis_pekerjaan'] == "PASTOR" ){ echo "selected"; } ?> >PASTOR</option>
                                <option value="PEDAGANG" <?php if($data['jenis_pekerjaan'] == "PEDAGANG" ){ echo "selected"; } ?> >PEDAGANG</option>
                                <option value="PEGAWAI NEGERU SIPIL (PNS)" <?php if($data['jenis_pekerjaan'] == "PEGAWAI NEGERI SIPIL (PNS)" ){ echo "selected"; } ?> >PEGAWAI NEGERI SIPIL (PNS)</option>
                                <option value="PEKERJAAN LAINNYA" <?php if($data['jenis_pekerjaan'] == "PEKERJAAN LAINNYA" ){ echo "selected"; } ?> >PEKERJAAN LAINNYA</option>
                                <option value="PELAJAR/MAHASISWA" <?php if($data['jenis_pekerjaan'] == "PELAJAR/MAHASISWA" ){ echo "selected"; } ?> >PELAJAR/MAHASISWA</option>
                                <option value="PELAUT" <?php if($data['jenis_pekerjaan'] == "PELAUT" ){ echo "selected"; } ?> >PELAUT</option>
                                <option value="PEMBANTU RUMAH TANGGA" <?php if($data['jenis_pekerjaan'] == "PEMBANTU RUMAH TANGGA" ){ echo "selected"; } ?> >PEMBANTU RUMAH TANGGA</option>
                                <option value="PENATA BUSANA" <?php if($data['jenis_pekerjaan'] == "PENATA BUSANA" ){ echo "selected"; } ?> >PENATA BUSANA</option>
                                <option value="PENATA RIAS" <?php if($data['jenis_pekerjaan'] == "PENATA RIAS" ){ echo "selected"; } ?> >PENATA RIAS</option>
                                <option value="PENATA RAMBUT" <?php if($data['jenis_pekerjaan'] == "PENATA RAMBUT" ){ echo "selected"; } ?> >PENATA RAMBUT</option>
                                <option value="PENDETA" <?php if($data['jenis_pekerjaan'] == "PENDETA" ){ echo "selected"; } ?> >PENDETA</option>
                                <option value="PENELITI" <?php if($data['jenis_pekerjaan'] == "PENELITI" ){ echo "selected"; } ?> >PENELITI</option>
                                <option value="PENGACARA" <?php if($data['jenis_pekerjaan'] == "PENGACARA" ){ echo "selected"; } ?> >PENGACARA</option>
                                <option value="PENSIUNAN" <?php if($data['jenis_pekerjaan'] == "PENSIUNAN" ){ echo "selected"; } ?> >PENSIUNAN</option>
                                <option value="PENTERJEMAH" <?php if($data['jenis_pekerjaan'] == "PENTERJEMAH" ){ echo "selected"; } ?> >PENTERJEMAH</option>
                                <option value="PENYIAR RADIO" <?php if($data['jenis_pekerjaan'] == "PENYIAR RADIO" ){ echo "selected"; } ?> >PENYIAR RADIO</option>
                                <option value="PENYIAR TELEVISI" <?php if($data['jenis_pekerjaan'] == "PENYIAR TELEVISI" ){ echo "selected"; } ?> >PENYIAR TELEVISI</option>
                                <option value="PERANCANG BUSANA" <?php if($data['jenis_pekerjaan'] == "PERANCANG BUSANA" ){ echo "selected"; } ?> >PERANCANG BUSANA</option>
                                <option value="PERANGKAT DESA" <?php if($data['jenis_pekerjaan'] == "PERANGKAT DESA" ){ echo "selected"; } ?> >PERANGKAT DESA</option>
                                <option value="PERAWAT" <?php if($data['jenis_pekerjaan'] == "PERAWAT" ){ echo "selected"; } ?> >PERAWAT</option>
                                <option value="PERDAGANGAN" <?php if($data['jenis_pekerjaan'] == "PERDAGANGAN" ){ echo "selected"; } ?> >PERDAGANGAN</option>
                                <option value="PETANI/PEKEBUN" <?php if($data['jenis_pekerjaan'] == "PETANI/PEKEBUN" ){ echo "selected"; } ?> >PETANI/PEKEBUN</option>
                                <option value="PETERNAK" <?php if($data['jenis_pekerjaan'] == "PETERNAK" ){ echo "selected"; } ?> >PETERNAK</option>
                                <option value="PIALANG" <?php if($data['jenis_pekerjaan'] == "PIALANG" ){ echo "selected"; } ?> >PIALANG</option>
                                <option value="PILOT" <?php if($data['jenis_pekerjaan'] == "PILOT" ){ echo "selected"; } ?> >PILOT</option>
                                <option value="PROMOTOR ACARA" <?php if($data['jenis_pekerjaan'] == "PEMOTOR ACARA" ){ echo "selected"; } ?> >PROMOTOR ACARA</option>
                                <option value="PSIKIATER/PSIKOLOG" <?php if($data['jenis_pekerjaan'] == "" ){ echo "selected"; } ?> >PSIKIATER/PSIKOLOG</option>
                                <option value="SENIMAN" <?php if($data['jenis_pekerjaan'] == "SENIMAN" ){ echo "selected"; } ?> >SENIMAN</option>
                                <option value="SOPIR" <?php if($data['jenis_pekerjaan'] == "SOPIR" ){ echo "selected"; } ?> >SOPIR</option>
                                <option value="TABIB" <?php if($data['jenis_pekerjaan'] == "TABIB" ){ echo "selected"; } ?> >TABIB</option>
                                <option value="TENTARA NASIONAL INDONESIA (TNI)" <?php if($data['jenis_pekerjaan'] == "TENTARA NASIONAL INDONESIA (TNI)" ){ echo "selected"; } ?> >TENTARA NASIONAL INDONESIA (TNI)</option>
                                <option value="TIDAK TERDEFINISI" <?php if($data['jenis_pekerjaan'] == "TIDAK TERDEFINISI" ){ echo "selected"; } ?> >TIDAK TERDEFINISI</option>
                                <option value="TRANSPORTASI" <?php if($data['jenis_pekerjaan'] == "TRANSPORTASI" ){ echo "selected"; } ?> >TRANSPORTASI</option>
                                <option value="TUKANG BATU" <?php if($data['jenis_pekerjaan'] == "TUKANG BATU" ){ echo "selected"; } ?> >TUKANG BATU</option>
                                <option value="TUKANG CUKUR" <?php if($data['jenis_pekerjaan'] == "TUKANG CUKUR" ){ echo "selected"; } ?> >TUKANG CUKUR</option>
                                <option value="TUKANG GIGI" <?php if($data['jenis_pekerjaan'] == "TUKANG GIGI" ){ echo "selected"; } ?> >TUKANG GIGI</option>
                                <option value="TUKANG JAHIT" <?php if($data['jenis_pekerjaan'] == "TUKANG JAHIT" ){ echo "selected"; } ?> >TUKANG JAHIT</option>
                                <option value="TUKANG KAYU" <?php if($data['jenis_pekerjaan'] == "TUKANG KAYU" ){ echo "selected"; } ?> >TUKANG KAYU</option>
                                <option value="TUKANG LAS/PANDAI BESI" <?php if($data['jenis_pekerjaan'] == "TUKANG LAS/PANDAI BESI" ){ echo "selected"; } ?> >TUKANG LAS/PANDAI BESI</option>
                                <option value="TUKANG LISTRIK" <?php if($data['jenis_pekerjaan'] == "TUKANG LISTRIK" ){ echo "selected"; } ?> >TUKANG LISTRIK</option>
                                <option value="TUKANG SOL SEPATU" <?php if($data['jenis_pekerjaan'] == "TUKANG SOL SEPATU" ){ echo "selected"; } ?> >TUKANG SOL SEPATU</option>
                                <option value="USTADZ/MUBALIGH" <?php if($data['jenis_pekerjaan'] == "USTADZ/MUBALIGH" ){ echo "selected"; } ?> >USTADZ/MUBALIGH</option>
                                <option value="WAKIL BUPATI" <?php if($data['jenis_pekerjaan'] == "WAKIL BUPATI" ){ echo "selected"; } ?> >WAKIL BUPATI</option>
                                <option value="WARTAWAN" <?php if($data['jenis_pekerjaan'] == "WARTAWAN" ){ echo "selected"; } ?> >WARTAWAN</option>
                                <option value="WIRASWASTA" <?php if($data['jenis_pekerjaan'] == "WIRASWASTA" ){ echo "selected"; } ?> >WIRASWASTA</option>
                                
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