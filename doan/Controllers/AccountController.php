<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\API;

class AccountController extends Controller
{
    function LayDanhSach()
    {
        $danhsach = Account::all();
        return json_encode([
            'Success'=>true,
            'Data' =>$danhsach,
        ]);
    }
    function find($id)
    {
        $account = Account::find($id);
        if(empty($account)){
            return json_encode([
                'Success'=>false,
                'Message' =>'Không Tìm Thấy Tài Khoản Có id Là : '.$id,
            ]);
        }
        return json_encode([
            'Success'=>true,
            'Data' =>$account,
        ]);
    }
    function create(Request $request)
    {
        $account = new Account();
        $account->email=$request->email;
        $account->Password=$request->Password;
        $account->FullName=$request->FullName;
        $account->Address1=$request->Address1;
        $account->Address2=$request->Address2;
        $account->Phone=$request->Phone;
        $account->Avatar=$request->Avatar;
        $account->IsAdmin=$request->IsAdmin;
        $account->Status=$request->Status;
        $account->save();
        if(empty($account)){
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
    function edit(Account $request,$id)
    {
        $account = $request::find($id);
        $account->email=$request->email;
        $account->Password=$request->Password;
        $account->FullName=$request->FullName;
        $account->Address1=$request->Address1;
        $account->Address2=$request->Address2;
        $account->Phone=$request->Phone;
        $account->Avatar=$request->Avatar;
        $account->IsAdmin=$request->IsAdmin;
        $account->Status=$request->Status;
        $account->save();
        if(empty($account)){
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
        $account = Account::find($id);
        $account ->delete();
        if(empty($account)){
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
