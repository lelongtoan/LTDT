<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\API;
use App\SanPham as AppSanPham;

class OrderDetailController extends Controller
{
    function LayDanhSach()
    {
        $danhsach = OrderDetail::all();
        return json_encode([
            'Success'=>true,
            'Data' =>$danhsach,
        ]);
    }
    function find($id)
    {
        $orderDetail = OrderDetail::find($id);
        if(empty($orderDetail)){
            return json_encode([
                'Success'=>false,
                'Message' =>'Không Tìm Thấy Sản Phẩm Có id Là : '.$id,
            ]);
        }
        return json_encode([
            'Success'=>true,
            'Data' =>$orderDetail,
        ]);
    }
    function create(Request $request)
    {
        $orderDetail = new OrderDetail();
        $orderDetail->OrderId=$request->OrderId;
        $orderDetail->ProductDetailId=$request->ProductDetailId;
        $orderDetail->Quantity=$request->Quantity;
        $orderDetail->Price=$request->Price;
        $orderDetail->save();
        if(empty($orderDetail)){
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
        $orderDetail = $request::find($id);
        $orderDetail->OrderId=$request->OrderId;
        $orderDetail->ProductDetailId=$request->ProductDetailId;
        $orderDetail->Quantity=$request->Quantity;
        $orderDetail->Price=$request->Price;
        $orderDetail->save();
        if(empty($orderDetail)){
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
        $orderDetail = OrderDetail::find($id);
        $orderDetail ->delete();
        if(empty($orderDetail)){
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