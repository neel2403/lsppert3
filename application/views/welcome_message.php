<h2>Form Data Mahasiswa</h2>
<form method="POST" action="<?php echo site_url('Welcome/simpan') ?>">
 <input type="text" name="npm" placeholder="NPM">
 <br>
 <input type="text" name="nama" placeholder="Nama">
 <br>
 <select name="jurusan">
  <option value="Sistem Informasi">Sistem Informasi</option>
  <option value="Sistem Komputer">Sistem Komputer</option>
 </select>
 <br>
 <input type="text" name="alamat" placeholder="Alamat">
 <br><br>
 <button type="submit">Simpan Data</button>
 &nbsp;
 <a href="<?php echo site_url('Welcome/tampil') ?>">Tampil Data</a>
</form>