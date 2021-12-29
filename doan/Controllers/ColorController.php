<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\API;
use App\SanPham as AppSanPham;

class ColorController extends Controller
{
    function LayDanhSach()
    {
        $danhsach = Color::all();
        return json_encode([
            'Success'=>true,
            'Data' =>$danhsach,
        ]);
    }
    function find($id)
    {
        $color = Color::find($id);
        if(empty($color)){
            return json_encode([
                'Success'=>false,
                'Message' =>'Không Tìm Thấy Sản Phẩm Có id Là : '.$id,
            ]);
        }
        return json_encode([
            'Success'=>true,
            'Data' =>$color,
        ]);
    }
    function create(Request $request)
    {
        $color = new Color();
        $color->Name=$request->Name;
        $color->save();
        if(empty($color)){
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
        $color = $request::find($id);
        $color->Name=$request->Name;
        $color->save();
        if(empty($color)){
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
        $color = Color::find($id);
        $color ->delete();
        if(empty($color)){
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