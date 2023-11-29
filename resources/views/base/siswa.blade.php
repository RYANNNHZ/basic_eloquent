@extends('content.master')

@section('content')

<table class="border">
    <tr>
        <td class="border">nis</td>
        <td class="border">nama</td>
        <td class="border">umur</td>
    </tr>


    @foreach ($siswa as $s)
    <tr class="border">
        <td class="border">{{$s->id}}</td>
        <td class="border">{{$s->nama}}</td>
        <td class="border">{{$s->umur}}</td>
        <td class="border">
            <a href="/siswa/hapus/{{$s->id}}" class="btn btn-danger">hapus</a>
            <a href="/siswa/edit/{{$s->id}}" class="btn btn-success">edit</a>
        </td>
    </tr>
    @endforeach

</table>

{{$siswa->links()}}
@endsection
