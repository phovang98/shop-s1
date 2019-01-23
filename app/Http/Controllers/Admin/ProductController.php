<?php

namespace App\Http\Controllers\Admin;

use App\Model\ProductGallery;
use App\Model\Supplier;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Product;
use App\Model\Category;
use Illuminate\Support\Facades\Validator;


class ProductController extends Controller
{
    public function index(Request $request){
        $keyword = $request->keyword;
        if ($request->keyword){
            $products = Product::where('name', 'like', "%$request->keyword%")->paginate(20);
            $products->withPath('?keyword='. $request->keyword);
        }else{
            $products = Product::paginate(20);
        }

        return view('admin.product.index',compact('products','keyword'));
    }

    public function add(){
        $model = new Product();
        $cates = Category::all();
        $suppliers = Supplier::all();
        return view('admin.product.add',compact('model', 'cates','suppliers'));
    }

    public function postAdd(Request $request){
        $validator = Validator::make($request->all(),[
            'category_id' => 'required|numeric',
            'supplier_id' => 'required|numeric',
            'name' => 'required|unique:products|max:191',
            'image' => 'nullable|image|max:2048|mimes:jpeg,png,jpg,gif,svg',
            'video' => 'nullable|max:191',
            'overview' => 'nullable|max:1000',
            'description' => 'nullable|max:1000',
            'cost' => 'nullable|numeric',
            'price' => 'required|numeric',
            'percent' => 'nullable|numeric',
            'discount' => 'nullable|numeric',
            'views' => 'nullable|numeric',
            'star' => 'nullable|numeric',
            'galleries.*' => 'nullable|image|max:2048|mimes:jpeg,png,jpg,gif,svg',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('product.add')
                ->withErrors($validator)
                ->withInput();
        }

        $model = new Product();

        $model->fill($request->all());

        if ($request->hasFile('image')){
            $image = $request->file('image');
            //Đặt tên ảnh
            $imageName = time() . $image->getClientOriginalName();
            //Lưu thư mục nào
            $path = $image->storeAs('images/' . $model->getTable(),$imageName);
            //Lưu DB
            $model->image = $path;
        }

        $flag = $model->save();

        if ($request->hasFile('galleries')) {

            $images = $request->file('galleries');
            foreach ($images as $image){
                $gallery = new ProductGallery();
                //Đặt tên ảnh
                $imageName = time() . $image->getClientOriginalName();
                //Lưu thư mục nào
                $path = $image->storeAs('images/' . $gallery->getTable(),$imageName);
                //Lưu DB
                $gallery->image = $path;
                $gallery->product_id = $model->id;
//                $gallery->title = $request->title;
//                $gallery->alt = $request->alt;
                $gallery->save();
            }

        }

        if ($flag) {
            session()->flash('success', "Thành công!!!");
        } else {
            session()->flash('danger', "Không thành công!!!");
        }

        return redirect(route('product.list'));

    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $cates = Category::all();
        $suppliers = Supplier::all();
        $galleries = ProductGallery::where('product_id', $id)->get();
        return view('admin.product.edit',compact('product', 'cates','suppliers','galleries'));
    }

    public function postEdit(Request $request, $id){
        $validator = Validator::make($request->all(),[
            'category_id' => 'required|numeric',
            'supplier_id' => 'required|numeric',
            'name' => 'required|max:191|unique:products,name,'. $id,
            'image' => 'nullable|image|max:2048|mimes:jpeg,png,jpg,gif,svg',
            'video' => 'nullable|max:191',
            'overview' => 'nullable|max:1000',
            'description' => 'nullable|max:1000',
            'cost' => 'nullable|numeric',
            'price' => 'required|numeric',
            'percent' => 'nullable|numeric',
            'discount' => 'nullable|numeric',
            'views' => 'nullable|numeric',
            'star' => 'nullable|numeric',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('product.edit', $id)
                ->withErrors($validator)
                ->withInput();
        }

        $model = Product::findOrFail($id);

        if ($request->hasFile('image')) {
            if (file_exists($model->image))
                unlink(public_path($model->image));
        }

        $model->fill($request->all());

        if ($request->hasFile('image')){
            $image = $request->file('image');
            //Đặt tên ảnh
            $imageName = time() . $image->getClientOriginalName();
            //Lưu thư mục nào
            $path = $image->storeAs('images/' . $model->getTable(),$imageName);
            //Lưu DB
            $model->image = $path;
        }

        $flag = $model->save();

        if ($flag) {
            session()->flash('success', "Thành công!!!");
        } else {
            session()->flash('danger', "Không thành công!!!");
        }

        return redirect(route('product.edit', $id));
    }

    public function remove($id){
        $model = Product::find($id);
        $msg = $model->delete();

        if ($msg) {
            if (file_exists($model->image))
                unlink(public_path($model->image));

//            return response()->json(array(
//                'status' => 204,
//                'msg' => '204: HTTP requests successful'
//            ));
            return redirect(route('product.list'));
        }

//        return response()->json(array(
//            'status' => 400,
//            'msg' => '400: Bad Request'
//        ));
    }

    public function uploadGallery(Request $request, $id){

        if ($request->hasFile('galleries')) {
            $images = $request->file('galleries');
            foreach ($images as $image){
                $gallery = new ProductGallery();
                //Đặt tên ảnh
                $imageName = time() . $image->getClientOriginalName();
                //Lưu thư mục nào
                $path = $image->storeAs('images/' . $gallery->getTable(),$imageName);
                //Lưu DB
                $gallery->image = $path;
                $gallery->product_id = $id;
//                $gallery->title = $request->title;
//                $gallery->alt = $request->alt;
                $flag = $gallery->save();
                if ($flag) {
                    session()->flash('success', "Thành công!!!");
                } else {
                    session()->flash('danger', "Không thành công!!!");
                }
            }
        }

        return redirect(route('product.edit', $id));
    }

    public function removeGallery($id){
        $model = ProductGallery::find($id);
        $msg = $model->delete();
        if ($msg) {
            if (file_exists($model->image))
                unlink(public_path($model->image));
            return response()->json(['success' => true, 'id' => $id]);
        }

    }
}
