<?php

namespace App\Http\Controllers\Admin;

use App\Model\Slide;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class SlideController extends Controller
{
    public function index(Request $request){
        $keyword = $request->keyword;
        if ($request->keyword){
            $slides = Slide::where('name', 'like', "%$request->keyword%")->paginate(20);
            $slides->withPath('?keyword='. $request->keyword);
        }else{
            $slides = Slide::paginate(20);
        }

        return view('admin.slide.index',compact('slides','keyword'));
    }

    public function add(){
        $model = new Slide();
        return view('admin.slide.add',compact('model'));
    }

    public function postAdd(Request $request){
        $validator = Validator::make($request->all(),[
            'title' => 'required|unique:slides|max:191',
            'image' => 'required|image|max:2048|mimes:jpeg,png,jpg,gif,svg',
            'alt' => 'nullable|max:191',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('slide.add')
                ->withErrors($validator)
                ->withInput();
        }

        $model = new Slide();

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

        return redirect(route('slide.list'));

    }

    public function edit($id)
    {
        $slide = Slide::findOrFail($id);
        return view('admin.slide.edit',compact('slide'));
    }

    public function postEdit(Request $request, $id){
        $validator = Validator::make($request->all(),[
            'title' => 'required|unique:slides|max:191',
            'image' => 'required|image|max:2048|mimes:jpeg,png,jpg,gif,svg',
            'alt' => 'nullable|max:191',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('slide.edit', $id)
                ->withErrors($validator)
                ->withInput();
        }

        $model = Slide::findOrFail($id);

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

        return redirect(route('slide.edit', $id));
    }

    public function remove($id){
        $model = Slide::find($id);
        $msg = $model->delete();

        if ($msg) {
            if (file_exists($model->image))
                unlink(public_path($model->image));

//            return response()->json(array(
//                'status' => 204,
//                'msg' => '204: HTTP requests successful'
//            ));
            return redirect(route('slide.list'));
        }

//        return response()->json(array(
//            'status' => 400,
//            'msg' => '400: Bad Request'
//        ));
    }
}
