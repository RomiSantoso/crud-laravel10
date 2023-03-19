@extends('template')

@section('content')
<div class="card">
    <div class="card-body">
      <h3>Detail Data Siswa</h3>
      <table>
        <tbody>
            <tr>
                <td>NIS</td>
                <td>: {{ $student->nis }}</td>
              </tr>
              <tr>
                <td>Nama</td>
                <td>: {{ $student->name }}</td>
              </tr>
              <tr>
                <td>Kelas</td>
                <td>: {{ $student->class }}</td>
              </tr>
              <tr>
                <td>Alamat</td>
                <td>: {{ $student->address }}</td>
              </tr>
        </tbody>
      </table>
      <a href="{{ route('students.index') }}" class="text-primary"> >>kembali</a>
    </div>
  </div>
@endsection