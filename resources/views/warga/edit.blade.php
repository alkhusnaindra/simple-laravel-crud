<h1>Edit Warga</h1>

<form action="/warga/{{$warga->id}}" method="POST">
    @method('PUT')
    @csrf
    <input type="text" name="nama" placeholder="nama" value="{{$warga->nama}}"><br>
    <input type="text" name="nik" placeholder="nik" value="{{$warga->nik}}"><br>
    <input type="text" name="no_kk" placeholder="no_kk" value="{{$warga->no_kk}}"><br>
    <select name="" id="">
        <option value="">Pilih Jenis Kelamin</option>
        <option value="Laki-Laki" @if ($warga->jenis_kelamin == 'Laki-Laki') selected @endif> Laki - Laki</option>
        <option value="Perempuan" @if($warga->jenis_kelamin == 'Perempuan') selected @endif>Perempuan</option>
    </select><br>
    <textarea name="alamat" id="alamat" cols="30" rows="10" placeholder="alamat" >{{$warga->alamat}}</textarea><br>
    <input type="submit" name="submit" value="Update">
</form>
