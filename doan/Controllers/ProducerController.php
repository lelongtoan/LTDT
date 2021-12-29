<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\API;

class ProducerController extends Controller
{
    function LayDanhSach()
    {
        $danhsach = Producer::all();
        return json_encode([
            'Success'=>true,
            'Data' =>$danhsach,
        ]);
    }
    function find($id)
    {
        $producer = Producer::find($id);
        if(empty($producer)){
            return json_encode([
                'Success'=>false,
                'Message' =>'Không Tìm Thấy Sản Phẩm Có id Là : '.$id,
            ]);
        }
        return json_encode([
            'Success'=>true,
            'Data' =>$producer
        ]);
    }
    function create(Request $request)
    {
        $producer = new Producer();
        $producer->Name=$request->Name;
        $producer->email=$request->email;
        $producer->address=$request->address;
        $producer->phone=$request->phone;
        $producer->save();
        if(empty($category)){
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
        $size = $request::find($id);
        $producer->Name=$request->Name;
        $producer->email=$request->email;
        $producer->address=$request->address;
        $producer->phone=$request->phone;
        $size->save();
        if(empty($producer)){
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
        $producer = Producer::find($id);
        $producer ->delete();
        if(empty($producer)){
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