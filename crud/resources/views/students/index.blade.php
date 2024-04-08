@extends('master')

@section('title', 'Students')

@section('content')
<h2>Quản lí học sinh</h2>
<a href="{{ route('create') }}" >Thêm sinh viên</a>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Tên</th>
            <th>Số điện thoại</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    @foreach($students as $student)
        <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->phone }}</td>
            <td>
                <a href="{{ route('edit', ['id' => $student->id]) }}" >Sửa</a>
            </td>
            <td>
                <a href="{{ route('delete', ['id' => $student->id]) }}" >Xoá</a>
            </td>
        </tr>
    @endforeach

    </tbody>
</table>
@endsection