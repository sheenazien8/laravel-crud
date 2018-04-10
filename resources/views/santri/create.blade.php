<h1>input Data Santri</h1>
<!-- <form action="santri" method="post"> -->
<!-- <form action="{{ url('santri.store') }}" method="post"> -->
<form action="{{ route('santri.store') }}" method="post">

  @csrf

  <input type="text" name="nama" placeholder="Masukkan Namamu"><br>
  @if ($errors->has('nama'))
    <strong>{{ $errors->first('nama')}}</strong> <br>
  @endif

  <input type="text" name="umur" placeholder="Masukkan umur"><br>
  @if ($errors->has('umur'))
    <strong>{{ $errors->first('umur')}}</strong> <br>
  @endif

  <textarea name="alamat" placeholder="Masukkan alamat"></textarea><br>
  @if ($errors->has('alamat'))
    <strong>{{ $errors->first('alamat')}}</strong> <br>
  @endif

  <input type="text" name="jenis_kelamin" placeholder="jenis kelamin"><br>
  @if ($errors->has('jenis_kelamin'))
    <strong>{{ $errors->first('jenis_kelamin')}}</strong> <br>
  @endif

  <input type="submit" name="submit" value="Submit">
</form>
