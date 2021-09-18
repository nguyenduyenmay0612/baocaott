<?php

namespace App\Http\Controllers;
use App\Http\Controllers\DonhangController;
use Illuminate\Http\Request;

use DB;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class DonhangController extends Controller
{
    public function all_donhang(){

       $all_donhang = DB::table('donhang')->get();
       $manager_donhang = view('admin.all_donhang')->with('all_donhang',$all_donhang);

        return view('admin.dashboard')->with('admin.all_donhang', $manager_donhang);
    }

    public function delete_donhang($id_donhang){
      DB::table('donhang')->where('id_donhang',$id_donhang)->delete();
      Session::put('message','Xoá đon hàng thành công');
         return Redirect::to('all-donhang');


    }


     public function save_donhang(Request $request){
        $data = array();
        $data['name'] = $request->name;
        $data['phone'] = $request->phone;
        $data['name_sp'] = $request->name_sp;
        $data['add'] = $request->add;
       
            DB::table('donhang')->insert($data);
            // Session::put('message','Đặt hàng thành công');
            return Redirect::to('trang-chu');

    }

/////cauhoi
     public function all_cauhoi(){

       $all_cauhoi = DB::table('cauhoi')->get();
       $manager_cauhoi = view('admin.all_cauhoi')->with('all_cauhoi',$all_cauhoi);

        return view('admin.dashboard')->with('admin.all_cauhoi', $manager_cauhoi);
    }

    public function delete_cauhoi($id_cauhoi){
      DB::table('cauhoi')->where('id_cauhoi',$id_cauhoi)->delete();
      Session::put('message','Xoá câu hỏi thành công');
         return Redirect::to('all-cauhoi');


    }


     public function save_cauhoi(Request $request){
        $data1 = array();
        $data1['name'] = $request->name;
        $data1['phone'] = $request->phone;
        $data1['cauhoi'] = $request->cauhoi;
        
       
            DB::table('cauhoi')->insert($data1);
            
            return Redirect::to('trang-chu');

    }

}
