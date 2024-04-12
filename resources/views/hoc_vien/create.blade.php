@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Thêm Học Viên Mới</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('hoc_vien.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="ho_ten">Họ và tên:</label>
                <input type="text" class="form-control" id="ho_ten" name="ho_ten" value="{{ old('ho_ten') }}" required>
            </div>

            <!-- Thêm trường input cho ảnh 3x4 -->
            <div class="form-group">
                <label for="anh_3_4">Ảnh 3x4:</label>
                <input type="file" class="form-control-file" id="anh_3_4" name="anh_3_4">
            </div>

            <!-- Thêm trường input cho số căn cước công dân -->
            <div class="form-group">
                <label for="so_can_cuoc">Số căn cước công dân:</label>
                <input type="text" class="form-control" id="so_can_cuoc" name="so_can_cuoc" value="{{ old('so_can_cuoc') }}" required>
            </div>

            <!-- Thêm trường input cho ngày cấp căn cước công dân -->
            <div class="form-group">
                <label for="ngay_cap_can_cuoc">Ngày cấp căn cước công dân:</label>
                <input type="date" class="form-control" id="ngay_cap_can_cuoc" name="ngay_cap_can_cuoc" value="{{ old('ngay_cap_can_cuoc') }}">
            </div>

            <!-- Thêm trường input cho nơi cấp căn cước công dân -->
            <div class="form-group">
                <label for="noi_cap_can_cuoc">Nơi cấp căn cước công dân:</label>
                <input type="text" class="form-control" id="noi_cap_can_cuoc" name="noi_cap_can_cuoc" value="{{ old('noi_cap_can_cuoc') }}">
            </div>

            <!-- Thêm trường input cho ngày sinh -->
            <div class="form-group">
                <label for="ngay_sinh">Ngày sinh:</label>
                <input type="date" class="form-control" id="ngay_sinh" name="ngay_sinh" value="{{ old('ngay_sinh') }}">
            </div>

            <!-- Thêm trường input cho nơi sinh -->
            <div class="form-group">
                <label for="noi_sinh">Nơi sinh:</label>
                <input type="text" class="form-control" id="noi_sinh" name="noi_sinh" value="{{ old('noi_sinh') }}">
            </div>

            <!-- Thêm trường input cho dân tộc -->
            <div class="form-group">
                <label for="dan_toc">Dân tộc:</label>
                <input type="text" class="form-control" id="dan_toc" name="dan_toc" value="{{ old('dan_toc') }}">
            </div>

            <!-- Thêm trường input cho số điện thoại -->
            <div class="form-group">
                <label for="so_dien_thoai">Số điện thoại:</label>
                <input type="text" class="form-control" id="so_dien_thoai" name="so_dien_thoai" value="{{ old('so_dien_thoai') }}">
            </div>

            <div class="form-group">
                <label for="id_khoa_hoc">Chọn Khoá học:</label>
                <select class="form-control" id="id_khoa_hoc" name="id_khoa_hoc">
                    <option value="">Chọn Khoá học</option>
                    @foreach($khoaHocs as $khoaHoc)
                        <option value="{{ $khoaHoc->id_khoa_hoc }}">{{ $khoaHoc->ten_khoa_hoc }}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="form-group">
                <label for="id_nganh">Chọn Ngành học:</label>
                <select class="form-control" id="id_nganh" name="id_nganh">
                    <option value="">Chọn Ngành học</option>
                    @foreach($nghanhs as $nganh)
                        <option value="{{ $nganh->id_nganh }}">{{ $nganh->ten_nganh }}</option>
                    @endforeach
                </select>
            </div>
            

            <!-- Thêm trường input cho ngày đăng ký -->
            <div class="form-group">
                <label for="ngay_dang_ky">Ngày đăng ký:</label>
                <input type="date" class="form-control" id="ngay_dang_ky" name="ngay_dang_ky" value="{{ old('ngay_dang_ky') }}">
            </div>

            <!-- Thêm select box cho giới tính -->
            <div class="form-group">
                <label for="gioi_tinh">Giới tính:</label>
                <select class="form-control" id="gioi_tinh" name="gioi_tinh">
                    <option value="">Chọn giới tính</option>
                    <option value="Nam">Nam</option>
                    <option value="Nữ">Nữ</option>
                    <option value="Khác">Khác</option>
                </select>
            </div>

            <!-- Thêm select box cho ứng dụng CNTT -->
            <div class="form-group">
                <label for="ung_dung_cntt">Ứng dụng CNTT:</label>
                <select class="form-control" id="ung_dung_cntt" name="ung_dung_cntt">
                    <option value="">Chọn ứng dụng CNTT</option>
                    <option value="Nâng cao">Nâng cao</option>
                    <option value="Cơ bản">Cơ bản</option>
                </select>
            </div>

            <!-- Thêm trường input cho ghi chú -->
            <div class="form-group">
                <label for="ghi_chu">Ghi chú:</label>
                <textarea class="form-control" id="ghi_chu" name="ghi_chu" rows="3">{{ old('ghi_chu') }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Thêm Học Viên</button>
        </form>
    </div>
@endsection
