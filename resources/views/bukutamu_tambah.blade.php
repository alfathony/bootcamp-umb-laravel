@extends('template.template')

@section('content')

<h1>Buku Tamu</h1>

<form method="POST" action="{{ route('simpan_bukutamu') }}">
  @csrf
    <div class="form-group">
        <label for="nama">Nama Lengkap</label>
        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan nama lengkap">
    </div>

    <div class="form-group">
      <label for="email">Email address</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
    </div>

    <div class="form-group">
        <label for="alamat">Alamat</label>
        <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
    </div>

    <div>
        <button type="submit" class="btn btn-primary">Kirim</button>
    </div>
</form>

@endsection