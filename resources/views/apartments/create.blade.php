@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('apartments.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Tên chung cư</label>
                <input type="text" class="form-control" id="name" name="name" required minlength="10" maxlength="50">
            </div>
            <div class="form-group">
                <label for="address">Địa chỉ</label>
                <input type="text" class="form-control" id="address" name="address" required>
            </div>
            <div class="form-group">
                <label for="price">Giá bán (triệu/m2)</label>
                <input type="number" class="form-control" id="price" name="price" required>
            </div>
            <div class="form-group">
                <label for="image_url">Hình đại diện</label>
                <input type="url" class="form-control" id="image_url" name="image_url" required>
            </div>
            <div class="form-group">
                <label for="status">Trạng thái bán</label>
                <input type="number" class="form-control" id="status" name="status" required min="1" max="3">
            </div>
            <button type="submit" class="btn btn-primary">Thêm mới</button>
        </form>
    </div>
@endsection
