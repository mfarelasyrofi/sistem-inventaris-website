

<?php
 $kode_supplier = $_GET['id'];
 $sql2 = $koneksi->query("select * from jenis_barang where id = '$id'");
 $tampil = $sql2->fetch_assoc();
 

 
 
 
 ?>
 
  <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Ubah Supplier</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
							
							
							<div class="body">

							<form method="POST" enctype="multipart/form-data">
							
							<label for="">Kode Supplier</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input type="text" name="jenis_barang" value="<?php echo $tampil['jenis_barang']; ?>" class="form-control" />
	 
							</div>
                            </div>
							
                            </div>
	
							<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
							
							</form>
							
							
							
							<?php
							
							if (isset($_POST['simpan'])) {
								
								$jenis_barang= $_POST['jenis_barang'];
								
								
								$sql = $koneksi->query("update jenis_barang set jenis_barang='$jenis_barang'where id='$id'"); 
								
								if ($sql) {
									?>
									
										<script type="text/javascript">
										alert("Data Berhasil Diubah");
										window.location.href="?page=supplier";
										</script>
										
										<?php
								}
							
								}
							
							
								
							?>
										
										
										
								
								
								
								
								
