@extends('template.template')

@section('content')

<div class="row">
  <div class="col-md-8">
    <h1>List Tamu</h1>
  </div>
  <div class="col-md-4">
  <a href="{{ route('tambah_bukutamu') }}" class="btn btn-primary float-right">Tambah Tamu</a>
  </div>
</div>

<table class="table">
  <tr>
    <th>Nama Lengkap</th>
    <th>Email</th>
    <th>Alamat</th>
    <th>Action</th>
  </tr>

  {{-- Looping pake foreach --}}

  @foreach ($getData as $item)
    <tr>
      <td>{{ $item->nama_lengkap }}</td>
      <td>{{ $item->email }}</td>
      <td>{{ $item->alamat }}</td>
      <td>
        <a href="{{ route('edit_bukutamu', $item->id)}}" class="btn btn-secondary btn-sm mr-2">Update</a>
        <a href="{{ route('hapus_bukutamu', $item->id)}}" class="btn btn-danger btn-sm">Delete</a>
      </td>
    </tr>
  @endforeach
  
  
</table>


@endsection