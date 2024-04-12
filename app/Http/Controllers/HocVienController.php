<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HocVien;
use App\Models\KhoaHoc;
use App\Models\Nganh;

class HocVienController extends Controller
{
    public function index()
    {
        $hocViens = HocVien::all();
        return view('hoc_vien.index', compact('hocViens'));
    }

    public function create()
    {
        $khoaHocs = KhoaHoc::all();
        $nghanhs = Nganh::all();
        return view('hoc_vien.create', compact('khoaHocs', 'nghanhs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'ho_ten' => 'required|string|max:255',
            'id_khoa_hoc' => 'nullable|exists:khoa_hoc,id_khoa_hoc',
            'id_nganh' => 'nullable|exists:nganh,id_nganh',
            // Thêm các trường dữ liệu khác vào đây...
            'anh_3_4' => 'nullable|image|max:2048',
            'so_can_cuoc' => 'required|string|max:20',
            'ngay_cap_can_cuoc' => 'nullable|date',
            'noi_cap_can_cuoc' => 'nullable|string|max:255',
            'ngay_sinh' => 'nullable|date',
            'noi_sinh' => 'nullable|string|max:255',
            'dan_toc' => 'nullable|string|max:50',
            'so_dien_thoai' => 'nullable|string|max:15',
            'ngay_dang_ky' => 'nullable|date',
            'gioi_tinh' => 'nullable|string|in:Nam,Nữ,Khác',
            'ung_dung_cntt' => 'nullable|string|max:255',
            'ghi_chu' => 'nullable|string',
        ]);

        $idKhoaHoc = $request->input('id_khoa_hoc');
        $idNganh = $request->input('id_nganh');

        $hocVien = new HocVien([
            'ho_ten' => $request->input('ho_ten'),
            'id_khoa_hoc' => $idKhoaHoc,
            'id_nganh' => $idNganh,
            'anh_3_4' => '/anhhocvien/' . $request->file('anh_3_4')->getClientOriginalName(),
            'so_can_cuoc' => $request->input('so_can_cuoc'),
            'ngay_cap_can_cuoc' => $request->input('ngay_cap_can_cuoc'),
            'noi_cap_can_cuoc' => $request->input('noi_cap_can_cuoc'),
            'ngay_sinh' => $request->input('ngay_sinh'),
            'noi_sinh' => $request->input('noi_sinh'),
            'dan_toc' => $request->input('dan_toc'),
            'so_dien_thoai' => $request->input('so_dien_thoai'),
            'ngay_dang_ky' => $request->input('ngay_dang_ky'),
            'gioi_tinh' => $request->input('gioi_tinh'),
            'ung_dung_cntt' => $request->input('ung_dung_cntt'),
            'ghi_chu' => $request->input('ghi_chu'),
        ]);

        $hocVien->save();

        return redirect()->route('hoc_vien.index');
    }

    public function show(HocVien $hocVien)
    {
        return view('hoc_vien.show', compact('hocVien'));
    }

    public function edit(HocVien $hocVien)
    {
        $khoaHocs = KhoaHoc::all();
        $nghanhs = Nganh::all();
        return view('hoc_vien.edit', compact('hocVien', 'khoaHocs', 'nghanhs'));
    }

    public function update(Request $request, HocVien $hocVien)
    {
        $request->validate([
            'ho_ten' => 'required|string|max:255',
            'id_khoa_hoc' => 'nullable|exists:khoa_hoc,id_khoa_hoc',
            'id_nganh' => 'nullable|exists:nganh,id_nganh',
            // Thêm các trường dữ liệu khác vào đây...
            'anh_3_4' => 'nullable|image|max:2048',
            'so_can_cuoc' => 'required|string|max:20',
            'ngay_cap_can_cuoc' => 'nullable|date',
            'noi_cap_can_cuoc' => 'nullable|string|max:255',
            'ngay_sinh' => 'nullable|date',
            'noi_sinh' => 'nullable|string|max:255',
            'dan_toc' => 'nullable|string|max:50',
            'so_dien_thoai' => 'nullable|string|max:15',
            'ngay_dang_ky' => 'nullable|date',
            'gioi_tinh' => 'nullable|string|in:Nam,Nữ,Khác',
            'ung_dung_cntt' => 'nullable|string|max:255',
            'ghi_chu' => 'nullable|string',
        ]);

        $idKhoaHoc = $request->input('id_khoa_hoc');
        $idNganh = $request->input('id_nganh');

        $hocVien->update([
            'ho_ten' => $request->input('ho_ten'),
            'id_khoa_hoc' => $idKhoaHoc,
            'id_nganh' => $idNganh,
            'anh_3_4' => '/anhhocvien/' . $request->file('anh_3_4')->getClientOriginalName(),
            'so_can_cuoc' => $request->input('so_can_cuoc'),
            'ngay_cap_can_cuoc' => $request->input('ngay_cap_can_cuoc'),
            'noi_cap_can_cuoc' => $request->input('noi_cap_can_cuoc'),
            'ngay_sinh' => $request->input('ngay_sinh'),
            'noi_sinh' => $request->input('noi_sinh'),
            'dan_toc' => $request->input('dan_toc'),
            'so_dien_thoai' => $request->input('so_dien_thoai'),
            'ngay_dang_ky' => $request->input('ngay_dang_ky'),
            'gioi_tinh' => $request->input('gioi_tinh'),
            'ung_dung_cntt' => $request->input('ung_dung_cntt'),
            'ghi_chu' => $request->input('ghi_chu'),
        ]);

        return redirect()->route('hoc_vien.index');
    }

    public function destroy(HocVien $hocVien)
    {
        $hocVien->delete();
        return redirect()->route('hoc_vien.index');
    }
}
