<form action="" method="post">
	<div class="row">
		<label>Nama Mahasiswa</label>
		<input type="text" name="nama" value="<?=isset($_POST['nama']) ? $_POST['nama'] : ''?>"/>
	</div>
	<div class="row">
		<label>NIM Mahasiswa</label>
		<input type="text" name="nim" value="<?=isset($_POST['nim']) ? $_POST['nim'] : ''?>"/>
	</div>
	<!-- <div class="row">
		<label>Lokasi</label>
		<select name="area">
			<?php $options = array('Jakarta', 'Semarang', 'Surakarta', 'Yogyakarta', 'Surabaya');
			foreach ($options as $area) {
				$selected = @$_POST['area'] == $area ? ' selected="selected"' : '';
				echo '<option value="' . $area . '"' . $selected . '>' . $area . '</option>';
			}?>
		</select>
	</div> -->
	<div class="row">
		<label>Jenis Kelamin</label>
		<div class="options">
			<?php
			$jenis_kelamin = array('Laki-laki' => 'Laki Laki', 'Perempuan' => 'Perempuan');
			foreach ($jenis_kelamin as $kode => $detail) {
				$checked = @$_POST['jenis_kelamin'] == $kode ? ' checked="checked"' : '';
				echo '<label class="radio">
						<input name="jenis_kelamin" type="radio" value="' . $kode . '"' . $checked . '>' . $detail . '</option>
					</label>';
			}
			?>
		</div>
	</div>
	<div class="row">
		<div class="options">
			<?php 
			echo '<label>Program Studi</label>';
			echo '<select name="jurusan" id="jurusan">
					<option value="opsi">-Pilih Prodi-</option>
					<option value="Teknik Informatika">Teknik Informatika</option>
					<option value="Sistem Informasi">Sistem Informasi</option>
					<option value="Teknologi Informasi">Teknolgoi Informasi</option>
		 		 </select>';
			?>
		</div>
	</div>
	<div>
		<label for="">Alamat</label>
		<textarea name="alamat" id="alamat" cols="30" rows="5" value="<?=isset($_POST['alamat']) ? $_POST['alamat'] : ''?>"></textarea>
	</div>
	<div class="row">
		<input type="submit" name="submit" value="Simpan"/>
	</div>
</form>
<?php
if (isset($_POST['submit'])) {
	echo '<table border="2">';
    echo '<tr>';
    echo '<td colspan="2"> DATA MAHASISWA';
    echo '<tr>';
    echo '<td width=125>Nama Mahasiswa </td>';
	echo '<td width=300>'. $_POST['nama'].'</td>' ;
    echo '<tr>';
    echo '<td>NIM Mahasiswa </td>';
	echo '<td>'. $_POST['nim'] . '</td>';
    echo '<tr>';
    echo '<td>Jenis Kelamin </td>';
	echo '<td>'. $_POST['jenis_kelamin'] . '</td>';
    echo '<tr>';
    echo '<td>Program Studi </td>';
	echo '<td>'. $_POST['jurusan'] . '</td>';
    echo '<tr>';
    echo '<tr height=50>';
    echo '<td rowspan="2">Alamat </td>';
	echo '<td rowspan="2">'. $_POST['alamat'] . '</td>';
    echo '<tr>';
	echo '<tr></tr>';	
	
}?>