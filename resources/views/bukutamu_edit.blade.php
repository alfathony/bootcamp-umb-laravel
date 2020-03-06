@extends('template.template')

@section('content')

<h1>Buku Tamu Edit</h1>

<form method="POST" action="{{ route('update_bukutamu', $getData->id ) }}">
  @csrf
    <div class="form-group">
        <label for="nama">Nama Lengkap</label>
        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan nama lengkap" value="{{ $getData->nama_lengkap }}">
    </div>

    <div class="form-group">
      <label for="email">Email address</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" value="{{ $getData->email }}">
    </div>

    <div class="form-group">
        <label for="alamat">Alamat</label>
        <textarea class="form-control" id="alamat" name="alamat" rows="3"> {{ $getData->alamat }} </textarea>
    </div>

    <div>
        <button type="submit" class="btn btn-primary">Kirim</button>
    </div>
</form>

@endsection