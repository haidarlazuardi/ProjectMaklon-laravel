<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        $data_brand = \App\Brand::all();
        return view('brand.index',['data_brand' => $data_brand]);
    }

    public function create(Request $request)    
    {
        $brand = \App\Brand::create($request->all());
        return redirect('/brand');
        
    }

    public function edit($id)
    {
        $brand = \App\Brand::find($id);
        return view('brand.edit',['brand' => $brand]);
    }

    public function delete($id)
    {
        $brand = \App\Brand::find($id);
        $brand->delete($brand);
        return redirect('/brand');
    }
}
