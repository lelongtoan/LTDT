<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\API;

class OrderController extends Controller
{
    function LayDanhSach()
    {
        $danhsach = Order::all();
        return json_encode([
            'Success'=>true,
            'Data' =>$danhsach,
        ]);
    }
    function find($id)
    {
        $order = Order::find($id);
        if(empty($order)){
            return json_encode([
                'Success'=>false,
                'Message' =>'Không Tìm Thấy Hóa Đơn Có id Là : '.$id,
            ]);
        }
        return json_encode([
            'Success'=>true,
            'Data' =>$order,
        ]);
    }
    function create(Request $request)
    {
        $order = new Order();
        $order->AccountId=$request->AccountId;
        $order->IssueDate=$request->IssueDate;
        $order->FullName=$request->FullName;
        $order->Address=$request->Address;
        $order->Total=$request->Total;
        $order->Phone=$request->Phone;
        $order->Status=$request->Status;
        $order->save();
        if(empty($order)){
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
        $order = $request::find($id);
        $order->AccountId=$request->AccountId;
        $order->IssueDate=$request->IssueDate;
        $order->FullName=$request->FullName;
        $order->Address=$request->Address;
        $order->Total=$request->Total;
        $order->Phone=$request->Phone;
        $order->Status=$request->Status;
        $order->save();
        if(empty($order)){
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
        $order = Order::find($id);
        $order ->delete();
        if(empty($order)){
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
