<?php
  include "../config/cek_siswa.php";
  include "../theme/header.php";
  include "../theme/sidebar-siswa.php";

  require_once "../config/koneksi.php";
	$sesi = $_SESSION["username"];
  
    $query = mysqli_query($koneksi, "SELECT * FROM siswa WHERE nis='$sesi'") or die('Query Error : '.mysqli_error($koneksi));
        while ($data  = mysqli_fetch_assoc($query)) {
          $id           = $data['id'];
          $nis           = $data['nis'];
          $nama          = $data['nama'];
          $tempat_lahir  = $data['tempat_lahir'];
          
          $tanggal       = $data['tgl_lahir'];
          $tgl           = explode('-',$tanggal);
          $tgl_lahir     = $tgl[2]."-".$tgl[1]."-".$tgl[0];
          
          $jenis_kelamin = $data['jenis_kelamin'];
        }
  
?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header"><h1></h1></section>

   <!-- Main content -->
   <section class="content container-fluid">
      <div class="box">
         <!-- /.box-header -->
         <div class="box-header with-border"><h3 class="box-title">Biodata Siswa</h3></div>
         <!-- /.box-body -->
         <div class="box-body">
            <div class="col-sm-8">
<!-- Form Edit -->              
               <form action="siswa_proses_update.php" method="POST" class="form-horizontal">
                  <div class="form-group">
					<input type="hidden" class="form-control" name="id" value="<?php echo $id; ?>" required>
                     <label for="nis" class="col-sm-2 control-label">NIS</label>
                     <div class="col-sm-4">
                        <input type="hidden" class="form-control" name="nis" value="<?php echo $nis; ?>" required>
						<input type="text" class="form-control" name="nisPalsu" value="<?php echo $nis; ?>" disabled>
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="nama" class="col-sm-2 control-label">Nama</label>
                     <div class="col-sm-6">
                        <input type="hidden" class="form-control" name="nama" value="<?php echo $nama; ?>" required>
						<input type="text" class="form-control" name="namaPalsu" value="<?php echo $nama; ?>" disabled>
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="tempat_lahir" class="col-sm-2 control-label">Tempat Lahir</label>
                     <div class="col-sm-4">
                        <input type="text" class="form-control" name="tempat_lahir" value="<?php echo $tempat_lahir; ?>" required>
                     </div>
                  </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Tanggal Lahir</label>
              <div class="col-sm-4">
                <div class="input-group">
                  <input type="text" class="form-control date-picker" data-date-format="dd-mm-yyyy" name="tgl_lahir" autocomplete="off" value="<?php echo $tgl_lahir; ?>" required>
                  <span class="input-group-addon">
                    <i class="glyphicon glyphicon-calendar"></i>
                  </span>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Jenis Kelamin</label>
              <div class="col-sm-4">
              <?php
              if ($jenis_kelamin =='Laki-laki') { ?>
                <label class="radio-inline">
                  <input type="radio" name="jenis_kelamin" value="Laki-laki" checked> Laki-laki
                </label>

                <label class="radio-inline">
                  <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
                </label>
              <?php
              } else { ?>
                <label class="radio-inline">
                  <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki
                </label>

                <label class="radio-inline">
                  <input type="radio" name="jenis_kelamin" value="Perempuan" checked> Perempuan
                </label>
              <?php
              }
              ?>
              </div>
            </div>
               <div class="form-group">
                     <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" name="update" class="btn btn-sm btn-info">UPDATE</button>
                        <a href="biodata.php" class="btn btn-sm btn-warning btn-reset">BATAL</a>
                     </div>
                  </div>
                  
               </form>
            </div>
         </div>
      </div><!-- /.box -->
   </section><!-- /.Main content -->
</div><!-- /.content-wrapper -->
  
<?php include "../theme/footer.php"; ?>