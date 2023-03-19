@extends('template')
@section('content')
<form action="{{ route('students.store') }}" method="post">
    <h3 class="text-center mt-4">Form Data Siswa</h3>
    @csrf

    <div class="mb-3">
      <label for="nis" class="form-label">NIS</label>
      <input type="number" class="form-control" id="nis" name="nis" aria-describedby="nis">
      @error('nis')
      @if ($errors->has('nis'))
      <span class="text-danger">{{ $errors->first('nis') }}</span>
      @endif
      @enderror
    </div>

    <div class="mb-3">
        <label for="name" class="form-label">Nama</label>
        <input type="text" class="form-control" id="name" name="name" aria-describedby="name">
        @error('name')
        @if ($errors->has('name'))
        <span class="text-danger">{{ $errors->first('name') }}</span>
        @endif
        @enderror
    </div>

    <div class="mb-3">
        <label for="class" class="form-label">Kelas</label>
        <input type="text" class="form-control" id="class" name="class" aria-describedby="class">
        @error('class')
        @if ($errors->has('class'))
        <span class="text-danger">{{ $errors->first('class') }}</span>
        @endif
        @enderror
      </div>

    <div class="mb-3">
        <label for="address" class="form-label">Alamat</label>
        <textarea name="address" class="form-control" id="address" name="address" cols="30" rows="10"></textarea>
        @error('address')
        @if ($errors->has('address'))
        <span class="text-danger">{{ $errors->first('address') }}</span>
        @endif
        @enderror
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection