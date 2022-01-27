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

class ProductController extends Controller
{
    public function __construct(){
        $this->middleware("VerifyIsType")->only(['create']);
    }
    public function create(Request $request){
        $validatedData = $request->validate([
            'type_product' => 'required',
            'product' => 'required',
            'price' => 'required|numeric',
            'image' => 'mimes:jpeg,jpg,png,gif,bmp,svg|file|max:12040',
        ],
        [
            'type_product.required' => 'ต้องเลือกหมวดหมู่สินค้า',
            'product.required' => 'กรุณากรอกชื่อสินค้า',
            'price.required' => 'กรุณากรอกราคาสินค้า',
            'price.numeric' => 'ป้อนได้เฉพาะตัวเลขเท่านั้น',
            'image.mimes' => 'กรุณาอัพโหลดภาพที่นามสกุลไฟล์ลงท้ายด้วย jpeg,jpg,png,gif,bmp,svg เท่านั้น',
            'image.file' => 'อัพโหลดได้เฉพาะไฟล์รูปภาพ',
            'image.max' => 'ขนาดภาพเกิน 10 MB',
        ]);

        $product = new Home();
        $product->type_product = $request->type_product;
        $product->product = $request->product;
        $product->price = $request->price;
        $product->id_user = Auth::user()->id;

        if ($request->hasFile('image')) {
            $filename = Str::random(10).'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/admin/Product_images/',$filename);
            Image::make(public_path().'/admin/Product_images/'.$filename);
            $product->image = $filename;
        }else{
            $product->image = 'no-pictures.png';
        }
        $product->save();
        return redirect('/admin/product')->with('success', 'บันทึกข้อมูลเรียบร้อย');
    }

    public function edit($id){
        $Edit_product = Home::find($id);
        $popular_product_check  = Popular::all();
        $product_check = Home::all();
        $type_product_check  = Type_product::all();
        $user_check  = User::all();
        return view('admin.product.edit', compact('popular_product_check','product_check','type_product_check','user_check','Edit_product'))->with('products_type',Type_product::all());
    }

    public function update(Request $request, $id){
        $validatedData = $request->validate([
            'type_product' => 'required',
            'product' => 'required',
            'price' => 'required|numeric',
            'image' => 'mimes:jpeg,jpg,png,gif,bmp,svg|file|max:12040',
        ],
        [
            'type_product.required' => 'ต้องเลือกหมวดหมู่สินค้า',
            'product.required' => 'กรุณากรอกชื่อสินค้า',
            'price.required' => 'กรุณากรอกราคาสินค้า',
            'price.numeric' => 'ป้อนได้เฉพาะตัวเลขเท่านั้น',
            'image.mimes' => 'กรุณาอัพโหลดภาพที่นามสกุลไฟล์ลงท้ายด้วย jpeg,jpg,png,gif,bmp,svg เท่านั้น',
            'image.file' => 'อัพโหลดได้เฉพาะไฟล์รูปภาพ',
            'image.max' => 'ขนาดภาพเกิน 10 MB',
        ]);

        if ($request->hasFile('image')) {
            $product = Home::find($id);
            if($product->image != 'no-pictures.png'){
                File::delete(public_path().'/admin/Product_images/'.$product->image);
            }
            $filename = Str::random(10).'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/admin/Product_images/',$filename);
            Image::make(public_path().'/admin/Product_images/'.$filename);
            $product->image = $filename;
            $product->type_product = $request->type_product;
            $product->product = $request->product;
            $product->price = $request->price;
        }else{
            $product = Home::find($id);
            $product->type_product = $request->type_product;
            $product->product = $request->product;
            $product->price = $request->price;
        }
        $product->save();
        return redirect('/admin/product')->with('update', 'แก้ไขข้อมูลเรียบร้อย');

    }

    public function delete($id){
        $delete = Home::find($id);
        if($delete->image != 'no-pictures.png'){
            File::delete(public_path().'/admin/Product_images/'.$delete->image);
        }
        $delete->delete();
        return redirect('/admin/product')->with('delete', 'ลบข้อมูลเรียบร้อย');
    }
    public function FindCategory($id_type_product){
        $find_type_product = Type_product::find($id_type_product);
        return view('layouts.Find_Category.find_product')
        ->with('category', Type_product::all()->sortBy('name'))
        ->with('product',$find_type_product->product()->paginate(100))
        ->with('popular',$find_type_product->popular()->paginate(100));
    }
}
