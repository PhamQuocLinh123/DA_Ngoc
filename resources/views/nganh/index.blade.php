<!-- resources/views/nganh/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Danh sách ngành</h1>
    <a href="{{ route('nganh.create') }}" class="btn btn-primary mb-3">Thêm mới</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Tên ngành</th>
                <th scope="col">Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @foreach($nganhs as $nganh)
            <tr>
                <td>{{ $nganh->id_nganh }}</td>
                <td>{{ $nganh->ten_nganh }}</td>
                <td>
                    <a href="{{ route('nganh.show', $nganh->id_nganh) }}" class="btn btn-info">Xem</a>
                    <a href="{{ route('nganh.edit', $nganh->id_nganh) }}" class="btn btn-warning">Sửa</a>
                    <form action="{{ route('nganh.destroy', $nganh->id_nganh) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Xóa</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
