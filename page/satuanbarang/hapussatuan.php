 <?php
 
 $satuan = $_GET['id'];
 $sql = $koneksi->query("delete from satuan where satuan = '$satuan'");

 if ($sql) {
 
 ?>
 
 
	<script type="text/javascript">
	alert("Data Berhasil Dihapus");
	window.location.href="?page=satuanbarang";
	</script>
	
 <?php
 
 }
 
 ?>