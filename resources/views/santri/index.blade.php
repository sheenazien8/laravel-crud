<h1>Daftar nama seluruh santri</h1>
<a href="{{ route('santri.create') }}">+Tambah Data</a>
<table border="1">
  <thead>
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Umur</th>
      <th>Alamat</th>
      <th>Jenis Kelamin</th>
    </tr>
    <tbody>
      @foreach ($santris as $key => $santri)
        <tr>
          <td>{{$key+1}}</td>
          <td>{{$santri->nama}}</td>
          <td>{{$santri->umur}}</td>
          <td>{{$santri->alamat}}</td>
          <td>{{$santri->jenis_kelamin}}</td>

        </tr>
      @endforeach
    </tbody>
  </thead>
</table>
