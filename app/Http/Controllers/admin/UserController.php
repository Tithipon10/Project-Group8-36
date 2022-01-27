<?php

namespace App\Http\Controllers\admin;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function edit($id)
    {
        $user_edit = User::find($id);
        // dd($category);
        return view('admin.profile', compact('user_edit'));
    }

    public function update(Request $request, $id)
    {
        $User = User::find($id);
        $User->email = $request->email;
        $User->phone = $request->phone;
        $User->save();
        return redirect('/admin/profile')->with('update', 'แก้ไขข้อมูลเรียบร้อย');
    }

    public function delete($id)
    {
        $delete = User::find($id);
        User::destroy($id);
        return redirect('/admin/profile')->with('delete', 'ลบข้อมูลเรียบร้อย');
    }
}
