<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\EditUserRequest;
use App\Http\Requests\AddUserRequest;
use App\Model\User;

class UserController extends Controller
{
    function getUser() {
        $data['user'] = User::paginate(20);
        return view('admin.user.user', $data);
    }
    function getAddUser(){
        return view('admin.user.add_user');
    }
    function postAddUser(AddUserRequest $r){
        // dd($r->all());
        $user = new User;
        $user->email = $r->user_email;
        $user->password = bcrypt($r->password);
        $user->full = $r->user_full;
        $user->address = $r->user_address;
        $user->phone = $r->user_phone;
        $user->level = $r->user_level;
        $user->remember_token = $r->_token;
        $user->save();
        return redirect('admin/user')->with('thongbao','Đã thêm thanh viên mới');
    }
    function getEditUser($id){
        $data['user'] = User::find($id);
        return view('admin.user.edit_user', $data);
    }
    function postEditUser($id, Request $r){
        $user = User::find($id);
        
        if ($r->_token == $user->remember_token && $r->password == $user->password){
            $user->email = $r->user_email;
            $user->full = $r->user_full;
            $user->address = $r->user_address;
            $user->phone = $r->user_phone;
            $user->level = $r->user_level;
            $user->password = $r->new_password;
            $user->save();
            return redirect('admin/user')->with('thongbao','Đã chính sửa thanh viên thành công');
        } else {
            return redirect()->back()->with('thongbao','Bạn nhập mất khẩu không chính xác');
        }

        
    }

    function deleteUser($id){
        User::destroy($id);
        return redirect()->back()->with('thongbao','Đã xóa thành công');
    }
}
