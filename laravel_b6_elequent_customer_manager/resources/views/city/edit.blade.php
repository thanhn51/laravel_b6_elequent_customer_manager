@extends('home')
@section('title', 'Chỉnh sửa tên tỉnh thành')
@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12"><h1>Chỉnh sửa tên tỉnh</h1></div>
            <div class="col-12">
                <form method="post" action="{{ route('cities.update', $city->id) }}">
                    @csrf
                    <div class="form-group">
                        <label>Tên thành phố</label>
                        <input type="text" class="form-control" name="name" value="{{ $city->name }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>
@endsection
