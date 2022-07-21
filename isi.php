<html>
	<head>
		<title>Isi Form</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <style type="text/css">
		body{
			background-image:url("biru.jpeg");
		}
        .link a{
            text-decoration:none;
        }
        </style>
        </head>
	<body>
        <script language="JavaScript" SRC="nav.js"></script>
        <?php 
        $fp = fopen("kost.txt", "r");
        echo "<table border='1'>";
        while ($isi = fgets($fp)) {
            $pisah = explode('||', $isi);

            echo "<tr>
                    <th>Nama </th>
                    <th>NIK </th>
                    <th>Alamat </th>
                    <th>No WhatsApp </th>
                    <th>Jenis Kelamin </th>
                    <th>Harga </th>
                </tr>";
            echo "<tr>
                    <td> $pisah[0] </td>
                    <td> $pisah[1] </td>
                    <td> $pisah[2] </td>
                    <td> $pisah[3] </td>
                    <td> $pisah[4] </td>
                    <td> $pisah[5] </td>
                </tr>";
        }
        echo "</table>";
        ?>
        <div class="link">
            <a href='index.php'>~Kembali ke Halaman Utama~</a>
        </div>
    </body>
</html>
