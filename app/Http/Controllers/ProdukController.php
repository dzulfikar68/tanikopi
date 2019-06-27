<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Model\Product;
use Validator;

class ProdukController extends Controller
{
    //
    public function index(Request $request)
    {
        $id = $request->session()->get('id');

        if($request->session()->get('role') == 'admin'){
            $products = Product::all();
        } else if($request->session()->get('role') == 'pengelola'){
            $products = Product::where('user_id', $id)->get();
        }

        return view('admin.list-produk', compact('products'));
    }

    public function create()
    {
        return view('admin.add-produk');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name_product'  => 'required|max:30',
            'code_product' => 'required|int',
            'image' => 'required',
            'price' => 'required',
            'qty_available' => 'required',
        ]);

        $product = new Product;
        $product->user_id = $request->session()->get('id');
        $product->name_product = $request->name_product;
        $product->code_product = $request->code_product;
        $product->price = $request->price;
        $product->qty_available = $request->qty_available;
        $product->status = 0;
        $product->sold_count = 0;
        $product->link_gsheet = '';
        if ($request->hasFile('image')) {
            $dir = 'uploads/';
            $extension = strtolower($request->file('image')->getClientOriginalExtension()); // get image extension
            $fileName = str_random() . '.' . $extension; // rename image
            $request->file('image')->move($dir, $fileName);
            $product->image = $fileName;
            $product->save();
            $request->session()->flash('alert', 'alert-info');
            $request->session()->flash('message', 'Tambah Produk Sukses!');
            return redirect('admin/produk');
        } else{
            $request->session()->flash('alert', 'alert-danger');
            $request->session()->flash('message', 'Foto Harus Diisi!');
            return redirect('admin/produk/create');
        }
    }

    public function edit($id)
    {
        $product = Product::find($id);

        return view('admin.edit-produk', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name_product'  => 'required|max:30',
            'code_product' => 'required',
            'image' => 'sometimes',
            'price' => 'required',
            'qty_available' => 'required',
        ]);

        $product = Product::find($id);
        if ($request->hasFile('image')) {
            $dir = 'uploads/';
            if ($product->image != '' && File::exists($dir . $product->image))
                File::delete($dir . $product->image);
            $extension = strtolower($request->file('image')->getClientOriginalExtension());
            $fileName = str_random() . '.' . $extension;
            $request->file('image')->move($dir, $fileName);
            $product->image = $fileName;
        }
        $product->name_product = $request->name_product;
        $product->code_product = $request->code_product;
        $product->price = $request->price;
        $product->qty_available = $request->qty_available;
        $product->update();

        $request->session()->flash('alert', 'alert-info');
        $request->session()->flash('message', 'Edit Produk Sukses!');
        return redirect('admin/produk');
    }

    public function verify(Request $request, $id)
    {
        $this->validate($request, [
            'link_gsheet'  => 'required',
        ]);

        $product = Product::find($id);
        $product->link_gsheet = $request->link_gsheet;
        $product->status = $request->status;
        $product->update();

        $request->session()->flash('alert', 'alert-info');
        $request->session()->flash('message', 'Edit Verify Sukses!');
        return redirect('admin/produk');
    }

    public function destroy(Request $request, $id)
    {
        $product = Product::find($id);
        $dir = 'uploads/';
        if (File::exists($dir . $product->image))
                File::delete($dir . $product->image);
        $product->delete();

        $request->session()->flash('alert', 'alert-info');
        $request->session()->flash('message', 'Hapus Produk Sukses!');
        return redirect('admin/produk');
    }
}
