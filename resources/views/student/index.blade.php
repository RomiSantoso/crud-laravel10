@extends('template')

@section('content')
<table class="table">
    <a href="{{ route('students.create') }}" class="btn btn-warning mb-3">Tambah</a>
    <thead class="bg-primary text-center text-white">
      <tr>
        <th scope="col">#</th>
        <th scope="col">NIS</th>
        <th scope="col">Nama</th>
        <th scope="col">Kelas</th>
        <th scope="col">-</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach ($students as $student)
        <th scope="row">{{ $loop->iteration }}</th>
        <td>{{ $student->nis }}</td>
        <td>{{ $student->name }}</td>
        <td class="text-center">{{ $student->class }}</td>
        <td class="text-center">
            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('students.destroy', $student->id) }}" method="post">
              
                <a href="{{ route('students.show', $student->id) }}" class="btn btn-sm btn-dark">lihat</a>
                <a href="{{ route('students.edit', $student->id) }}" class="btn btn-sm btn-primary">edit</a>
                
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger">hapus</button>
            </form>
        </td>

        </td>
      </tr>
      @endforeach
    </tbody>
</table>
@endsection