@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Sửa Thông Tin Học Viên</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('hoc_vien.update', $hocVien->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="ho_ten">Họ và tên:</label>
                <input type="text" class="form-control" id="ho_ten" name="ho_ten" value="{{ old('ho_ten', $hocVien->ho_ten) }}" required>
            </div>

            <div class="form-group">
                <label for="anh_3_4">Ảnh 3x4:</label>
                <input type="file" class="form-control-file" id="anh_3_4" name="anh_3_4">
            </div>

            <div class="form-group">
                <label for="so_can_cuoc">Số căn cước công dân:</label>
                <input type="text" class="form-control" id="so_can_cuoc" name="so_can_cuoc" value="{{ old('so_can_cuoc', $hocVien->so_can_cuoc) }}" required>
            </div>
            
            <div class="form-group">
                <label for="ngay_cap_can_cuoc">Ngày cấp căn cước công dân:</label>
                <input type="date" class="form-control" id="ngay_cap_can_cuoc" name="ngay_cap_can_cuoc" value="{{ old('ngay_cap_can_cuoc', $hocVien->ngay_cap_can_cuoc) }}">
            </div>
            
            <div class="form-group">
                <label for="noi_cap_can_cuoc">Nơi cấp căn cước công dân:</label>
                <input type="text" class="form-control" id="noi_cap_can_cuoc" name="noi_cap_can_cuoc" value="{{ old('noi_cap_can_cuoc', $hocVien->noi_cap_can_cuoc) }}">
            </div>
            
            <div class="form-group">
                <label for="ngay_sinh">Ngày sinh:</label>
                <input type="date" class="form-control" id="ngay_sinh" name="ngay_sinh" value="{{ old('ngay_sinh', $hocVien->ngay_sinh) }}">
            </div>
            
            <div class="form-group">
                <label for="noi_sinh">Nơi sinh:</label>
                <input type="text" class="form-control" id="noi_sinh" name="noi_sinh" value="{{ old('noi_sinh', $hocVien->noi_sinh) }}">
            </div>
            
            <div class="form-group">
                <label for="dan_toc">Dân tộc:</label>
                <input type="text" class="form-control" id="dan_toc" name="dan_toc" value="{{ old('dan_toc', $hocVien->dan_toc) }}">
            </div>
            
            <div class="form-group">
                <label for="so_dien_thoai">Số điện thoại:</label>
                <input type="text" class="form-control" id="so_dien_thoai" name="so_dien_thoai" value="{{ old('so_dien_thoai', $hocVien->so_dien_thoai) }}">
            </div>

            <div class="form-group">
                <label for="id_khoa_hoc">Khoá học:</label>
                <select class="form-control" id="id_khoa_hoc" name="id_khoa_hoc">
                    <option value="">Chọn Khoá học</option>
                    @foreach($khoaHocs as $khoaHoc)
                        <option value="{{ $khoaHoc->id }}" {{ $khoaHoc->id == $hocVien->id_khoa_hoc ? 'selected' : '' }}>{{ $khoaHoc->ten_khoa_hoc }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="id_nganh">Ngành học:</label>
                <select class="form-control" id="id_nganh" name="id_nganh">
                    <option value="">Chọn Ngành học</option>
                    @foreach($nghanhs as $nganh)
                        <option value="{{ $nganh->id }}" {{ $nganh->id == $hocVien->id_nganh ? 'selected' : '' }}>{{ $nganh->ten_nganh }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="ngay_dang_ky">Ngày đăng ký:</label>
                <input type="date" class="form-control" id="ngay_dang_ky" name="ngay_dang_ky" value="{{ old('ngay_dang_ky', $hocVien->ngay_dang_ky) }}">
            </div>

            <div class="form-group">
                <label for="gioi_tinh">Giới tính:</label>
                <select class="form-control" id="gioi_tinh" name="gioi_tinh">
                    <option value="">Chọn giới tính</option>
                    <option value="Nam" {{ $hocVien->gioi_tinh == 'Nam' ? 'selected' : '' }}>Nam</option>
                    <option value="Nữ" {{ $hocVien->gioi_tinh == 'Nữ' ? 'selected' : '' }}>Nữ</option>
                    <option value="Khác" {{ $hocVien->gioi_tinh == 'Khác' ? 'selected' : '' }}>Khác</option>
                </select>
            </div>

            <div class="form-group">
                <label for="ung_dung_cntt">Ứng dụng CNTT:</label>
                <select class="form-control" id="ung_dung_cntt" name="ung_dung_cntt">
                    <option value="">Chọn ứng dụng CNTT</option>
                    <option value="Nâng cao" {{ $hocVien->ung_dung_cntt == 'Nâng cao' ? 'selected' : '' }}>Nâng cao</option>
                    <option value="Cơ bản" {{ $hocVien->ung_dung_cntt == 'Cơ bản' ? 'selected' : '' }}>Cơ bản</option>
                </select>
            </div>

            <div class="form-group">
                <label for="ghi_chu">Ghi chú:</label>
                <textarea class="form-control" id="ghi_chu" name="ghi_chu" rows="3">{{ old('ghi_chu', $hocVien->ghi_chu) }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Lưu Thay Đổi</button>
        </form>
    </div>
@endsection
