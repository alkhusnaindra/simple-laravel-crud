<h1>ini adalah halaman warga</h1>

<a href="/warga/create">Create Warga</a>

<table border="1">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>NIK</th>
        <th>No KK</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </tr>
    @foreach ($warga as $w)
    <tr>
        <td>{{$w->id}}</td>
        <td>{{$w->nama}}</td>
        <td>{{$w->nik}}</td>
        <td>{{$w->no_kk}}</td>
        <td>{{$w->jenis_kelamin}}</td>
        <td>{{$w->alamat}}</td>
        <td>
            <a href="/warga/{{$w->id}}/edit" class="btn btn-primary">Edit</a>

            <form action="/warga/{{$w->id}}" method="POST">
                @method('DELETE')
                @csrf
                <input type="submit" value="Delete" onclick="return confirm('Are you sure?')">
            </form>
        </td>
    </tr>
    @endforeach
</table>
