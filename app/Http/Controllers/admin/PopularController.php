<?php

namespace App\Http\Controllers\admin;

use App\Type_product;
use App\Home;
use App\Popular;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Auth;
use Image;
use File;

class PopularController extends Controller
{
    public function __construct(){
        $this->middleware("VerifyIsType")->only(['create']);
    }
    public function create(Request $request){
        $validatedData = $request->validate([
            'type_product' => 'required',
            'popular' => 'required',
            'price' => 'required|numeric',
            'image' => 'mimes:jpeg,jpg,png,gif,bmp,svg|file|max:12040',
        ],
        [
            'type_product.required' => 'ต้องเลือกหมวดหมู่สินค้า',
            'popular.required' => 'กรุณากรอกชื่อสินค้า',
            'price.required' => 'กรุณากรอกราคาสินค้า',
            'price.numeric' => 'ป้อนได้เฉพาะตัวเลขเท่านั้น',
            'image.mimes' => 'กรุณาอัพโหลดภาพที่นามสกุลไฟล์ลงท้ายด้วย jpeg,jpg,png,gif,bmp,svg เท่านั้น',
            'image.file' => 'อัพโหลดได้เฉพาะไฟล์รูปภาพ',
            'image.max' => 'ขนาดภาพเกิน 10 MB',
        ]);

        $popular_product = new Popular();
        $popular_product->type_product = $request->type_product;
        $popular_product->popular = $request->popular;
        $popular_product->price = $request->price;
        $popular_product->id_user = Auth::user()->id;

        if ($request->hasFile('image')) {
            $filename = Str::random(10).'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/admin/Popular_images/',$filename);
            Image::make(public_path().'/admin/Popular_images/'.$filename);
            $popular_product->image = $filename;
        }else{
            $popular_product->image = 'no-pictures.png';
        }
        $popular_product->save();
        return redirect('/admin/popular')->with('success', 'บันทึกข้อมูลเรียบร้อย');
    }

    public function edit($id){
        $Edit_popular = Popular::find($id);
        $popular_product_check  = Popular::all();
        $product_check = Home::all();
        $type_product_check  = Type_product::all();
        $user_check  = User::all();
        return view('admin.popular.edit', compact('popular_product_check','product_check','type_product_check','user_check','Edit_popular'))->with('products_type',Type_product::all());
    }

    public function update(Request $request, $id){
        $validatedData = $request->validate([
            'type_product' => 'required',
            'popular' => 'required',
            'price' => 'required|numeric',
            'image' => 'mimes:jpeg,jpg,png,gif,bmp,svg|file|max:12040',
        ],
        [
            'type_product.required' => 'ต้องเลือกหมวดหมู่สินค้า',
            'popular.required' => 'กรุณากรอกชื่อสินค้า',
            'price.required' => 'กรุณากรอกราคาสินค้า',
            'price.numeric' => 'ป้อนได้เฉพาะตัวเลขเท่านั้น',
            'image.mimes' => 'กรุณาอัพโหลดภาพที่นามสกุลไฟล์ลงท้ายด้วย jpeg,jpg,png,gif,bmp,svg เท่านั้น',
            'image.file' => 'อัพโหลดได้เฉพาะไฟล์รูปภาพ',
            'image.max' => 'ขนาดภาพเกิน 10 MB',
        ]);

        if ($request->hasFile('image')) {
            $popular_product = Popular::find($id);
            if($popular_product->image != 'no-pictures.png'){
                File::delete(public_path().'/admin/Popular_images/'.$popular_product->image);
            }
            $filename = Str::random(10).'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/admin/Popular_images/',$filename);
            Image::make(public_path().'/admin/Popular_images/'.$filename);
            $popular_product->image = $filename;
            $popular_product->type_product = $request->type_product;
            $popular_product->popular = $request->popular;
            $popular_product->price = $request->price;
        }else{
            $popular_product = Popular::find($id);
            $popular_product->type_product = $request->type_product;
            $popular_product->popular = $request->popular;
            $popular_product->price = $request->price;
        }
        $popular_product->save();
        return redirect('/admin/popular')->with('update', 'แก้ไขข้อมูลเรียบร้อย');

    }

    public function delete($id){
        $delete = Popular::find($id);
        if($delete->image != 'no-pictures.png'){
            File::delete(public_path().'/admin/Popular_images/'.$delete->image);
        }
        $delete->delete();
        return redirect('/admin/popular')->with('delete', 'ลบข้อมูลเรียบร้อย');
    }
}
