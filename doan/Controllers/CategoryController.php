<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\API;
use App\SanPham as AppSanPham;

class CategoryController extends Controller
{
    function LayDanhSach()
    {
        $danhsach = Category::all();
        return json_encode([
            'Success'=>true,
            'Data' =>$danhsach,
        ]);
    }
    function find($id)
    {
        $category = Category::find($id);
        if(empty($category)){
            return json_encode([
                'Success'=>false,
                'Message' =>'Không Tìm Thấy Sản Phẩm Có id Là : '.$id,
            ]);
        }
        return json_encode([
            'Success'=>true,
            'Data' =>$category,
        ]);
    }
    function create(Request $request)
    {
        $category = new Category();
        $category->Name=$request->Name;
        $category->Status=$request->Status;
        $category->save();
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
        $category = $request::find($id);
        $category->Name=$request->Name;
        $category->Status=$request->Status;
        $category->save();
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
    function delete($id)
    {
        $category = Category::find($id);
        $category ->delete();
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
    
}