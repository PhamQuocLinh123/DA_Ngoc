@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Thông Tin Học Viên</h1>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Họ và Tên: {{ $hocVien->ho_ten }}</h5>
                <p class="card-text">Số Căn Cước: {{ $hocVien->so_can_cuoc }}</p>
                <p class="card-text">Ngày Cấp Căn Cước: {{ $hocVien->ngay_cap_can_cuoc }}</p>
                <p class="card-text">Nơi Cấp Căn Cước: {{ $hocVien->noi_cap_can_cuoc }}</p>
                <p class="card-text">Ngày Sinh: {{ $hocVien->ngay_sinh }}</p>
                <p class="card-text">Nơi Sinh: {{ $hocVien->noi_sinh }}</p>
                <p class="card-text">Dân Tộc: {{ $hocVien->dan_toc }}</p>
                <p class="card-text">Số Điện Thoại: {{ $hocVien->so_dien_thoai }}</p>
                <p class="card-text">Ngày Đăng Ký: {{ $hocVien->ngay_dang_ky }}</p>
                <p class="card-text">Giới Tính: {{ $hocVien->gioi_tinh }}</p>
                <p class="card-text">Ứng Dụng CNTT: {{ $hocVien->ung_dung_cntt }}</p>
                <p class="card-text">Ghi Chú: {{ $hocVien->ghi_chu }}</p>
                <a href="{{ route('hoc_vien.index') }}" class="btn btn-primary">Quay Lại</a>
            </div>
        </div>
    </div>
@endsection
