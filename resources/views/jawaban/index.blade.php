@extends('master')

<!-- @section('content') -->
<!-- @foreach($pertanyaan as $key => $view)
    <h2>{{ $view->judul }}</h2>
    <div>
    <p>{{ $view->isi</p>
    </div>
@endforeach
<table class="table table-bordered">
        <thead>
            <tr>
                <th>Jawaban</th>
            </tr>
        </thead>
@foreach($jawaban as $key => $isi)
            <tr>
                <td>{{ $isi->isi }}</td>
            </tr>
@endforeach
</table>
<form action="/jawaban/{pertanyaan_id}" method="POST" class=" ml-3 mt-3">
@csrf
  <div class="form-group">
    <label for="jawaban">Tulis Jawaban Disini:</label>
    <input type="text" class="form-control" name="isi" placeholder="Enter Judul" id="jawaban">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection -->