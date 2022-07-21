<html>
	<head>
		<title>Pendaftaran</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<style type="text/css">
		body{
			background:url("wall.jpeg");
		}
		.judul{
			text-align:center;
			font-size:"6";
		}
		.klik a{
			text-decoration:none;
		}
		.home a{
			text-decoration:none;
		}
		</style>
	</head>
	<body>
	<script language="JavaScript" SRC="nav.js"></script>
		<div class="judul">
			<strong><h1>DAFTARKAN DIRI ANDA TERLEBIH DAHULU!</strong><br>
		</div>
		<form name="form1" method="post" action="proses.php">
			<table width="100%" border="0" align="left">
				<tr>
				    <td>Nama Lengkap</td>
					<td><input name="nama" type="text" id="nama"></td>
				</tr>
                <tr>
                    <td>NIK</td>
                    <td><input name="nik" type="number" id="nik"></td>
                </tr>
				<tr>
					<td>Alamat</td>
					<td><textarea name="alamat" type="text" id="alamat"></textarea></td>
				</tr>
				<tr>
					<td>No WhatsApp</td>
					<td><input name="noHp" type="number" id="noHp"></td>
				</tr>
				<tr>
					<td>Jenis Kelmin</td>
					<td><select name="jenisKelamin" id="jenisKelamin">
						    <option value="Laki-Laki">Laki-Laki</option>
						    <option value="Perempuan">Perempuan</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Harga</td>
					<td><select name="harga" id="harga" size="1">
                            <option value="Rp2,8jt/bln">Rp2,8jt/bln</option>
                            <option value="Rp3,4jt/bln">Rp3,4jt/bln</option>
                            <option value="Rp3,6jt/bln">Rp3,6jt/bln</option>
                            <option value="Rp3,8jt/bln">Rp3,8jt/bln</option>
                            <option value="Rp4,0jt/bln">Rp4,0jt/bln</option>
                        </select></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="Submit" value="Kirim">
						<input type="reset" name="Submit2" value="Batal">
					</td>
				</tr>
			</table>
		</form>
		<br>
		<div class="klik">
			<a href="isi.php">~Klik untuk melihat~</a>
		</div>
		<div class="home">
			<a href="index.php">~Kembali ke Halaman Utama~</a>
		</div>
	</body>
</html>