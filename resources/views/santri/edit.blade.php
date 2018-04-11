<h1>Edit Data Santri</h1>
<!-- <form action="santri" method="post"> -->
{{-- <!-- <form action="{{ url('santri.store') }}" method="post"> --> --}}
<form action="{{ route('santri.store') }}" method="post">

  @csrf

  <input type="text" name="nama" value="{{$santri->nama}}"><br>
  @if ($errors->has('nama'))
    <strong>{{ $errors->first('nama')}}</strong> <br>
  @endif

  <input type="text" name="umur" value="{{$santri->umur}}"><br>
  @if ($errors->has('umur'))
    <strong>{{ $errors->first('umur')}}</strong> <br>
  @endif

  <textarea name="alamat" >{{$santri->alamat}}</textarea><br>
  @if ($errors->has('alamat'))
    <strong>{{ $errors->first('alamat')}}</strong> <br>
  @endif

  <input type="text" name="jenis_kelamin" value="{{$santri->jenis_kelamin}}"><br>
  @if ($errors->has('jenis_kelamin'))
    <strong>{{ $errors->first('jenis_kelamin')}}</strong> <br>
  @endif

  <input type="submit" name="submit" value="Submit">
  <button type="button" name="button"><a href="{{route('santri.index')}}">Batal</a></button>
</form>
