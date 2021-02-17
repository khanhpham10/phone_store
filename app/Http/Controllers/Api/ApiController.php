<?php

namespace App\Http\Controllers\Api;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{
  
  
    
    public function thongke_top3_sanpham_moinhat() {
        // Sử dụng Query Builder
        // Query top 3 loại sản phẩm (có sản phẩm) mới nhất
        $ds_top3_newest_loaisanpham = DB::table('cusc_sanpham')
            ->join('cusc_loai', 'cusc_loai.l_ma', '=', 'cusc_sanpham.l_ma')
            ->orderBy('l_capNhat')->take(3)->get();
    
        return response()->json(array(
            'code'  => 200,
            'result' => $ds_top3_newest_loaisanpham,
        ));
    }
}
