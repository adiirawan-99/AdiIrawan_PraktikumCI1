<!DOCTYPE html>
<html>
<!--ini adalah form validasi yang dibuat-->
<head>
	<title>Membuat form validation dengan Codeigniter | MalasNgoding.com</title>
</head>
<body>
	<h1>Membuat Form Validation dengan CodeIgniter</h1>
	<?php echo validation_errors(); ?> <!--menampilkan peringatan dari validation form yang terjadi jika tombol input diklik-->
	<?php echo form_open('form/aksi'); ?> <!--memanggil method aksi pada controller form-->
		<label>Nama</label><br/>
		<input type="text" name="nama"><br/>
		<label>Email</label><br/>
		<input type="text" name="email"><br/>
		<label>Konfirmasi Email</label><br/>
		<input type="text" name="konfir_email"><br/>
		<input type="submit" value="Simpan">
	</form>
</body>
</html>