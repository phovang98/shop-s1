<?php

namespace App\Http\Controllers\Admin;

use App\Model\Supplier;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class SupplierController extends Controller
{
    public function index(Request $request){
        $keyword = $request->keyword;
        if ($request->keyword){
            $suppliers = Supplier::where('name', 'like', "%$request->keyword%")->paginate(20);
            $suppliers->withPath('?keyword='. $request->keyword);
        }else{
            $suppliers = Supplier::paginate(20);
        }

        return view('admin.supplier.index',compact('suppliers','keyword'));
    }

    public function add(){
        $model = new Supplier();
        return view('admin.supplier.add',compact('model'));
    }

    public function postAdd(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required|unique:suppliers|max:191',
            'email' => 'nullable|email|unique:suppliers',
            'hotline' => 'nullable|numeric',
            'address' => 'nullable|max:191',
            'note' => 'nullable|max:1000',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('supplier.add')
                ->withErrors($validator)
                ->withInput();
        }

        $model = new Supplier();

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

        return redirect(route('supplier.list'));

    }

    public function edit($id)
    {
        $supplier = Supplier::findOrFail($id);
        return view('admin.supplier.edit',compact('supplier'));
    }

    public function postEdit(Request $request, $id){
        $validator = Validator::make($request->all(),[
            'name' => 'required|max:191|unique:suppliers,name,'. $id,
            'email' => 'nullable|email|unique:suppliers,email,'. $id,
            'hotline' => 'nullable|numeric',
            'address' => 'nullable|max:191',
            'note' => 'nullable|max:1000',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('supplier.edit', $id)
                ->withErrors($validator)
                ->withInput();
        }

        $model = Supplier::findOrFail($id);

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

        return redirect(route('supplier.edit', $id));
    }

    public function remove($id){
        $model = Supplier::find($id);
        $msg = $model->delete();
        if ($msg) {
            return redirect(route('supplier.list'));
        }

    }
}
