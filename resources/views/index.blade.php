@extends('master')

@section('content')
<table class="table table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>Judul</th>
            <th>isi</th>
            <th>lihat komentar</th>
            <th>jawaban</th>
        </tr>
    </thead>
@foreach($pertanyaan as $key => $hasil)
      <tr>
        <td>{{ $key+1 }}</td>
        <td>{{ $hasil->judul }}</td>
        <td>{{ $hasil->isi }}</td>
        <td>
            <a href="{{ url('/jawaban/'.$hasil->id) }}">
                <button class="btn btn-success">lihat jawaban</button>
            </a>
        </td>
        <td>
            <form action="{{ url('/jawaban/'.$hasil->id) }}" method="post">
                @csrf
                <input type="text" name="isi">
                <input type="hidden" name="pertanyaan_id" value="{{$hasil->id}}">
                <button type="submit" class="btn btn-success">kirim jawaban</button>
            </form>
        </td>
      </tr>
@endforeach
    
    
  </table>

@endsection