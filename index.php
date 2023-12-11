<!DOCTYPE html>
<html>
	<header>
		<title>Data Jadwal Mahasiswa</title>
		<link rel="stylesheet" href="./assets/css/index.css">
	</header>
	<body>
		<div>
			<h1>Data Jadwal Mahasiswa</h1>
			<form method = "POST" action = "save.php">
				<table border = 0>
					<tr>
						<td>ID_Jadwal</td>
						<td><input type = "text" placeholder = "ID_Jadwal" name = "ID_Jadwal" id = "ID_Jadwal"></td>
					</tr>
					<tr>
						<td>Thn_ajaran</td>
						<td>
							<select name = "Thn_ajaran" id = "Thn_ajaran">
								<option value = "2022-2023">2022-2023</option>
								<option value = "2023-2024">2023-2024</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Semester</td>
						<td>
							<select name = "Semester" id = "Semester">
								<option value = "Gasal">Gasal</option>
								<option value = "Genap">Genap</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Kelas</td>
						<td>
							<input type="text" placeholder="Kelas" name = "Kelas" id="Kelas"></td>
					</tr>
					<tr>
						<td>waktu</td>
						<td>
							<input type="text" placeholder="Waktu" name = "Waktu" id="Waktu"></td>
					</tr>
					<tr>
						<td>Hari</td>
						<td>
							<select name = "Hari" id = "Hari">
								<option value = "Sabtu">Sabtu</option>
								<option value = "Minggu">Minggu</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Matkul</td>
						<td>
							<input type="text" placeholder="Matkul" name = "Matkul" id="Matkul"></td>
					</tr>
					<tr>
						<td><input type = "submit" placeholder = "Save" name = "Save" id = "Save"></td>
					</tr>
				</table>
			</form>
		</div>
	</body>
</html>
