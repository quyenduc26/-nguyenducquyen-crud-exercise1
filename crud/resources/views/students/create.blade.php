@extends('master')

@section('title', 'Add students')


@section('content')

<div class="container mt-5">
    <h2>Tạo mới sinh viên</h2>
    <form action="{{ route('store') }}"  method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Tên:</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="phone">Số điện thoại:</label>
            <input type="text" class="form-control" id="phone" name="phone">
        </div>
        <button type="submit" class="btn btn-primary">Tạo mới</button>
    </form>
</div>

@endsection 