<?php
  include "../config/cek_guru.php";
  include "../theme/header.php";
  include "../theme/sidebar-guru.php";

  require_once "../config/koneksi.php";
	$sesi = $_SESSION["username"];
  
    $query = mysqli_query($koneksi, "SELECT * FROM guru WHERE nip='$sesi'") or die('Query Error : '.mysqli_error($koneksi));
        while ($data  = mysqli_fetch_assoc($query)) {
          $id           = $data['id'];
          $nip           = $data['nip'];
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
   <section class="content-header"><h1>Dashboard Admin</h1></section>

   <!-- Main content -->
   <section class="content container-fluid">
      <div class="box">
         <!-- /.box-header -->
         <div class="box-header with-border"><h3 class="box-title">Edit Guru</h3></div>
         <!-- /.box-body -->
         <div class="box-body">
            <div class="col-sm-8">
<!-- Form Edit -->              
               <form action="siswa_proses_update.php" method="POST" class="form-horizontal">
                  <div class="form-group">
                     <label for="nis" class="col-sm-2 control-label">NIP</label>
                     <div class="col-sm-4">
                        <input type="text" class="form-control" name="nis" value="<?php echo $nip; ?>" disabled>
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="nama" class="col-sm-2 control-label">Nama</label>
                     <div class="col-sm-6">
                        <input type="text" class="form-control" name="nama" value="<?php echo $nama; ?>" disabled>
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="tempat_lahir" class="col-sm-2 control-label">Tempat Lahir</label>
                     <div class="col-sm-4">
                        <input type="text" class="form-control" name="tempat_lahir" value="<?php echo $tempat_lahir; ?>" disabled>
                     </div>
                  </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Tanggal Lahir</label>
              <div class="col-sm-4">
                <div class="input-group">
                  <input type="text" class="form-control date-picker" data-date-format="dd-mm-yyyy" name="tgl_lahir" autocomplete="off" value="<?php echo $tgl_lahir; ?>" disabled>
                  <span class="input-group-addon">
                    <i class="glyphicon glyphicon-calendar"></i>
                  </span>
                </div>
              </div>
            </div>
            <div class="form-group">
				 <label for="tempat_lahir" class="col-sm-2 control-label">Jenis Kelamin</label>
				 <div class="col-sm-4">
					<input type="text" class="form-control" name="tempat_lahir" value="<?php echo $jenis_kelamin; ?>" disabled>
				 </div>
			  </div>
               
                  
               </form>
            </div>
         </div>
      </div><!-- /.box -->
   </section><!-- /.Main content -->
</div><!-- /.content-wrapper -->
  
<?php include "../theme/footer.php"; ?>