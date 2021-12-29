<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\API;
use App\SanPham as AppSanPham;

class SanPhamController extends Controller
{
    function LayDanhSach()
    {
        $danhsach = SanPham::all();
        return json_encode([
            'Success'=>true,
            'Data' =>$danhsach,
        ]);
    }
    function find($id)
    {
        $sanPham = SanPham::find($id);
        if(empty($sanPham)){
            return json_encode([
                'Success'=>false,
                'Message' =>'Không Tìm Thấy Sản Phẩm Có id Là : '.$id,
            ]);
        }
        return json_encode([
            'Success'=>true,
            'Data' =>$sanPham,
        ]);
    }
    function create(Request $request)
    {
        $sanPham = new SanPham();
        $sanPham->Name=$request->Name;
        $sanPham->Price=$request->Price;
        $sanPham->CategoryId=$request->CategoryId;
        $sanPham->ProduceId=$request->ProduceId;
        $sanPham->ProductDetailId=$request->ProductDetailId;
        $sanPham->TotalQuantity=$request->TotalQuantity;
        $sanPham->discount=$request->discount;
        $sanPham->Status=$request->Status;
        $sanPham->save();
        if(empty($sanPham)){
            return json_encode([
                'Success'=>false,
                'Message' =>'Error',
            ]);
        }
        return json_encode([
            'Success'=>true,
            'Data' =>'Done',
        ]);
    }
    function edit(Request $request,$id)
    {
        $sanPham = $request::find($id);
        $sanPham->Name=$request->Name;
        $sanPham->Price=$request->Price;
        $sanPham->CategoryId=$request->CategoryId;
        $sanPham->ProduceId=$request->ProduceId;
        $sanPham->ProductDetailId=$request->ProductDetailId;
        $sanPham->TotalQuantity=$request->TotalQuantity;
        $sanPham->discount=$request->discount;
        $sanPham->Status=$request->Status;
        $sanPham->save();
        if(empty($sanPham)){
            return json_encode([
                'Success'=>false,
                'Message' =>'Error',
            ]);
        }
        return json_encode([
            'Success'=>true,
            'Data' =>'Done',
        ]);
    }
    function delete($id)
    {
        $sanPham = SanPham::find($id);
        $sanPham ->delete();
        if(empty($sanPham)){
            return json_encode([
                'Success'=>false,
                'Message' =>'Error',
            ]);
        }
        return json_encode([
            'Success'=>true,
            'Data' =>'Done',
        ]);
    }
    
}