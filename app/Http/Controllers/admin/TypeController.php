<?php

namespace App\Http\Controllers\admin;

use App\Type_product;
use App\Home;
use App\Popular;
use App\User;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function create(Request $request)
    {
        //dd($request);
        $validatedData = $request->validate(
            [
                'type_product' => 'required|unique:type_products|max:255',
            ],
            [
                'type_product.required' => 'กรุณาป้อนข้อมูลประเภทสินค้าก่อน',
                'type_product.unique' => 'มีชื่อประเภทสินค้านี้อยู่ในฐานข้อมูลแล้ว',
                'type_product.max' => 'กรอกข้อมูลได้สูงสุด 255 ตัวอักษร'
            ]
        );
        $type_product = new Type_product;
        $type_product->type_product = $request->type_product;
        $type_product->id_user = Auth::user()->id;
        $type_product->save();
        return redirect('/admin/type-product')->with('success', 'บันทึกข้อมูลเรียบร้อย');
    }

    public function edit($id_type_product)
    {
        // dd($category);
        $edit = Type_product::find($id_type_product);
        $popular_product_check  = Popular::all();
        $product_check = Home::all();
        $type_product_check  = Type_product::all();
        $user_check  = User::all();
        return view('admin.type-product.edit', compact('popular_product_check','product_check','type_product_check','user_check','edit'));
    }

    public function update(Request $request, $id_type_product)
    {
        $validatedData = $request->validate(
            [
                'type_product' => 'required|unique:type_products|max:255',
            ],
            [
                'type_product.required' => 'กรุณาป้อนข้อมูลประเภทสินค้าก่อน',
                'type_product.unique' => 'มีชื่อประเภทสินค้านี้อยู่ในฐานข้อมูลแล้ว',
                'type_product.max' => 'กรอกข้อมูลได้สูงสุด 255 ตัวอักษร'
            ]
        );
        $type_product = Type_product::find($id_type_product);
        $type_product->type_product = $request->type_product;
        $type_product->save();
        return redirect('/admin/type-product')->with('update', 'แก้ไขข้อมูลเรียบร้อย');
    }

    public function delete($id_type_product)
    {
        $type = Type_product::find($id_type_product);
        if($type->product->count()>0){
            return redirect()->back()->with('error','ไม่สามารถลบประเภทสินค้าได้');
        }
        if($type->popular->count()>0){
            return redirect()->back()->with('error','ไม่สามารถลบประเภทสินค้าได้');
        }
        Type_product::destroy($id_type_product);
        return redirect('/admin/type-product')->with('delete', 'ลบข้อมูลเรียบร้อย');
    }
}
