@extends('master')

@section('content')
<form action="/pertanyaan" method="POST" class=" ml-3 mt-3">
@csrf
  <div class="form-group">
    <label for="judul">Judul:</label>
    <input type="text" class="form-control" name="judul" placeholder="Enter Judul" id="judul">
  </div>
  <div class="form-group">
    <label for="jawaban">Jawaban:</label>
    <input type="text" class="form-control" name="isi" placeholder="Enter Isi" id="jawaban">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection