<?php
 	include "../config/koneksi.php";
  include "../config/cek_admin.php";
 	include "../theme/header.php";
 	include "../theme/sidebar-admin.php";
?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header"><h1>Dashboard</h1></section>

   <!-- Main content -->
   <section class="content container-fluid">
      <div class="box">
         <!-- /.box-header -->
         <div class="box-header with-border">
            <h3 class="box-title">Daftar Guru</h3>
            <span class="pull-right"><a class="btn btn-xs btn-info" href="guru_form_tambah.php" title="Tambah Data" role="button"><i class="fa fa-user-plus"></i> Tambah</a></span>
         </div>
<!-- Pesan opersasi CRUD -->
<?php  
  if (empty($_GET['alert'])) {
    echo "";
  } elseif ($_GET['alert'] == 1) {
    echo "<div class='alert alert-danger alert-dismissible' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='glyphicon glyphicon-alert'></i> Gagal!</strong> Terjadi kesalahan.
          </div>";
  } elseif ($_GET['alert'] == 2) {
    echo "<div class='alert alert-success alert-dismissible' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='glyphicon glyphicon-ok-circle'></i> Sukses!</strong> Data guru berhasil disimpan.
          </div>";
  } elseif ($_GET['alert'] == 3) {
    echo "<div class='alert alert-success alert-dismissible' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='glyphicon glyphicon-ok-circle'></i> Sukses!</strong> Data guru berhasil diubah.
          </div>";
  } elseif ($_GET['alert'] == 4) {
    echo "<div class='alert alert-success alert-dismissible' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
            <strong><i class='glyphicon glyphicon-ok-circle'></i> Sukses!</strong> Data guru berhasil dihapus.
          </div>";
  }
?>


         <!-- /.box-body -->
         <div class="box-body">
            <table id="data_guru" class="table table-bordered table-striped">
               <thead>
                  <tr>
                     <th width="6px">NO</th>
                     <th>NAMA</th>
                     <th>NIP</th>
                     <th>TEMPAT LAHIR</th>
                     <th>TANGGAL LAHIR</th>
                     <th>JENIS KELAMIN</th>
                     <th>KELOLA</th>
                  </tr>
               </thead>
               <tbody>
               <?php
                  $guru = mysqli_query($koneksi, "SELECT * FROM guru");
                  $no=0;
                  foreach ($guru as $row){
                  $no++;
               ?>
                  <tr>
							       <td class="text-center"><?php echo $no ?></td>
			               <td><?php echo $row['nama'] ?></td>
                     <td><?php echo $row['nip'] ?></td>
                     <td><?php echo $row['tempat_lahir'] ?></td>
                     <td><?php echo $row['tgl_lahir'] ?></td>
                     <td><?php echo $row['jenis_kelamin'] ?></td>
                     <td>
                        <a href="guru_form_edit.php?id=<?php echo $row['id'] ?>" class="btn btn-xs btn-primary" title="Edit dosen"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                        <a href="guru_proses_delete.php?id=<?php echo $row['id'] ?>" class="btn btn-xs btn-danger" title="Delete Guru" onclick="return confirm('Anda yakin ingin menghapus data <?php echo $row['nama']; ?>?');"><i class="glyphicon glyphicon-trash"></i> Delete</a>
                     </td>
						</tr>
               <?php } ?>
               </tbody>
            </table>
         </div><!-- /.box-body -->
      </div><!-- /.box -->
   </section><!-- /.Main content -->
</div><!-- /.content-wrapper -->
  

<!-- page script -->
<script type="text/javascript" charset="utf-8">
  $('#data_guru').DataTable( {
    //paging: false
  } );
</script>

<?php include "../theme/footer.php"; ?>