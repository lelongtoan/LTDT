<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\API;
use App\SanPham as AppSanPham;

class ProductDetailController extends Controller
{
    function LayDanhSach()
    {
        $danhsach = ProductDetail::all();
        return json_encode([
            'Success'=>true,
            'Data' =>$danhsach,
        ]);
    }
    function find($id)
    {
        $productDetail = ProductDetail::find($id);
        if(empty($productDetail)){
            return json_encode([
                'Success'=>false,
                'Message' =>'Không Tìm Thấy Sản Phẩm Có id Là : '.$id,
            ]);
        }
        return json_encode([
            'Success'=>true,
            'Data' =>$productDetail,
        ]);
    }
    function create(Request $request)
    {
        $productDetail = new ProductDetail();
        $productDetail->description=$request->description;
        $productDetail->SizeId=$request->SizeId;
        $productDetail->ColorId=$request->ColorId;
        $productDetail->Quantity=$request->Quantity;
        $productDetail->Image=$request->Image;
        $productDetail->Status=$request->Status;
        $productDetail->save();
        if(empty($productDetail)){
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
        $productDetail = $request::find($id);
        $productDetail->description=$request->description;
        $productDetail->SizeId=$request->SizeId;
        $productDetail->ColorId=$request->ColorId;
        $productDetail->Quantity=$request->Quantity;
        $productDetail->Image=$request->Image;
        $productDetail->Status=$request->Status;
        $productDetail->save();
        if(empty($productDetail)){
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
        $productDetail = ProductDetail::find($id);
        $productDetail ->delete();
        if(empty($productDetail)){
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