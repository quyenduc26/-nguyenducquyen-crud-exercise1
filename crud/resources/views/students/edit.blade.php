@extends('master')

@section('title', 'Update student')


@section('content')
<div class="container mt-5">
    <h2>Chỉnh sửa thông tin sinh viên</h2>
    <form action="{{ route('update') }}"  method="POST">
        @csrf
        @method('POST')
        <div class="form-group">
            <label for="name">Tên:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$student->name}}">
        </div>
        <div class="form-group">
            <label for="phone">Số điện thoại:</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{$student->phone}}">
        </div>
        <input type="hidden" name='id' value="{{$student->id}}">
        <button type="submit" class="btn btn-primary">Lưu</button>
    </form>
</div>
@endsection