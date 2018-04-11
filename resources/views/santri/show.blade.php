<h1>Data diri {{ $santris->nama }}</h1>

<ul>
  <li>umur: {{$santris->umur}}</li>
  <li>alamat: {{$santris->alamat}}</li>
  <li>jenis_kelamin: {{$santris->jenis_kelamin}}</li>
</ul>

<hr>

<a href="{{ route('santri.index') }}">Home</a>
