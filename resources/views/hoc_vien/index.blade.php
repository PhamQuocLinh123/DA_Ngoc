@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Danh sách học viên</div>

                    <div class="card-body">
                        @if (count($hocViens) > 0)
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Họ và Tên</th>
                                        <th>Số Căn Cước</th>
                                        <th>Ngày Đăng Ký</th>
                                        <th>Thao Tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($hocViens as $hocVien)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $hocVien->ho_ten }}</td>
                                            <td>{{ $hocVien->so_can_cuoc }}</td>
                                            <td>{{ $hocVien->ngay_dang_ky }}</td>
                                            <td>
                                                @if ($hocVien->id_hoc_vien)
                                                    <a href="{{ route('hoc_vien.show', $hocVien->id_hoc_vien) }}" class="btn btn-info">Xem</a>
                                                    <a href="{{ route('hoc_vien.edit', $hocVien->id_hoc_vien) }}" class="btn btn-primary">Sửa</a>
                                                    <form action="{{ route('hoc_vien.destroy', $hocVien->id_hoc_vien) }}" method="POST" style="display: inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa học viên này không?')">Xóa</button>
                                                    </form>
                                                @else
                                                    <span class="text-muted">Không có ID</span>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <p>Không có học viên nào.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
