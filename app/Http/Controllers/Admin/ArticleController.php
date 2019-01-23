<?php

namespace App\Http\Controllers\Admin;

use App\Model\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ArticleController extends Controller
{
    public function index(Request $request){
        $keyword = $request->keyword;
        if ($request->keyword){
            $articles = Article::where('name', 'like', "%$request->keyword%")->paginate(20);
            $articles->withPath('?keyword='. $request->keyword);
        }else{
            $articles = Article::paginate(20);
        }

        return view('admin.article.index',compact('articles','keyword'));
    }

    public function add(){
        $model = new Article();
        return view('admin.article.add',compact('model'));
    }

    public function postAdd(Request $request){
        $validator = Validator::make($request->all(),[
            'title' => 'required|unique:articles|max:191',
            'slug' => 'required|max:191',
            'author' => 'required|max:191',
            'image' => 'nullable|image|max:2048|mimes:jpeg,png,jpg,gif,svg',
            'video' => 'nullable|max:191',
            'overview' => 'nullable|max:1000',
            'description' => 'nullable|max:1000',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('article.add')
                ->withErrors($validator)
                ->withInput();
        }

        $model = new Article();

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

        return redirect(route('article.list'));

    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('admin.article.edit',compact('article'));
    }

    public function postEdit(Request $request, $id){
        $validator = Validator::make($request->all(),[
            'title' => 'required|max:191|unique:articles,title,'. $id,
            'slug' => 'required|max:191',
            'author' => 'required|max:191',
            'image' => 'nullable|image|max:2048|mimes:jpeg,png,jpg,gif,svg',
            'video' => 'nullable|max:191',
            'overview' => 'nullable|max:1000',
            'description' => 'nullable|max:1000',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('article.edit', $id)
                ->withErrors($validator)
                ->withInput();
        }

        $model = Article::findOrFail($id);

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

        return redirect(route('article.edit', $id));
    }

    public function remove($id){
        $model = Article::find($id);
        $msg = $model->delete();

        if ($msg) {
            if (file_exists($model->image))
                unlink(public_path($model->image));

//            return response()->json(array(
//                'status' => 204,
//                'msg' => '204: HTTP requests successful'
//            ));
            return redirect(route('article.list'));
        }

//        return response()->json(array(
//            'status' => 400,
//            'msg' => '400: Bad Request'
//        ));
    }
}
