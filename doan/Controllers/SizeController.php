<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\API;

class SizeController extends Controller
{
    function LayDanhSach()
    {
        $danhsach = Size::all();
        return json_encode([
            'Success'=>true,
            'Data' =>$danhsach,
        ]);
    }
    function find($id)
    {
        $size = Size::find($id);
        if(empty($size)){
            return json_encode([
                'Success'=>false,
                'Message' =>'Không Tìm Thấy Sản Phẩm Có id Là : '.$id,
            ]);
        }
        return json_encode([
            'Success'=>true,
            'Data' =>$size,
        ]);
    }
    function create(Request $request)
    {
        $size = new Size();
        $size->Name=$request->Name;
        $size->save();
        if(empty($size)){
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
        $size->Name=$request->Name;
        $size->save();
        if(empty($size)){
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
        $size = Size::find($id);
        $size ->delete();
        if(empty($size)){
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