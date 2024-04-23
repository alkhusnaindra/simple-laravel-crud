<h1>Create Warga</h1>

<form action="/warga/store" method="POST">
    @csrf
    <input type="text" name="nama" placeholder="nama"><br>
    <input type="text" name="nik" placeholder="nik"><br>
    <input type="text" name="no_kk" placeholder="no_kk"><br>
    <select name="" id="">
        <option value="">Pilih Jenis Kelamin</option>
        <option value="Laki-Laki">Laki - Laki</option>
        <option value="Perempuan">Perempuan</option>
    </select><br>
    <textarea name="alamat" id="alamat" cols="30" rows="10" placeholder="alamat"></textarea><br>
    <input type="submit" name="submit" value="submit">
</form>
