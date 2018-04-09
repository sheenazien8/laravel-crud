<h1>input Data Santri</h1>
<!-- <form action="santri" method="post"> -->
<!-- <form action="{{ url('santri.store') }}" method="post"> -->
<form action="{{ route('santri.store') }}" method="post">

  @csrf

  <input type="text" name="nama" placeholder="Masukkan Namamu">
  <br>
  <input type="text" name="umur" placeholder="Masukkan umur">
  <br>
  <textarea name="alamat" placeholder="Masukkan alamat"></textarea>
  <br>
  <input type="text" name="jenis_kelamin" placeholder="jenis kelamin">
  <br>
  <input type="submit" name="submit" value="Submit">
</form>
