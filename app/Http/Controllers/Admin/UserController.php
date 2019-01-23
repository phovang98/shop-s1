<?php

namespace App\Http\Controllers\Admin;

use App\Model\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index(Request $request){
        $keyword = $request->keyword;
        if ($request->keyword){
            $users = User::where('name', 'like', "%$request->keyword%")->paginate(20);
            $users->withPath('?keyword='. $request->keyword);
        }else{
            $users = User::paginate(20);
        }

        return view('admin.user.index',compact('users','keyword'));
    }

    public function add(){
        $model = new User();
        return view('admin.user.add',compact('model'));
    }

    public function postAdd(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required|max:191',
            'email' => 'nullable|email|max:191|unique:users',
            'avatar' => 'nullable|image|max:2048|mimes:jpeg,png,jpg,gif,svg',
            'role' => 'required|numeric',
            'password' => 'required|min:6|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('user.add')
                ->withErrors($validator)
                ->withInput();
        }

        $model = new User();

        $model->fill($request->all());
        $model->password = Hash::make($request->password);

        if ($request->hasFile('avatar')){
            $image = $request->file('avatar');
            //Đặt tên ảnh
            $imageName = time() . $image->getClientOriginalName();
            //Lưu thư mục nào
            $path = $image->storeAs('images/' . $model->getTable(),$imageName);
            //Lưu DB
            $model->avatar = $path;
        }

        $flag = $model->save();

        if ($flag) {
            session()->flash('success', "Thành công!!!");
        } else {
            session()->flash('danger', "Không thành công!!!");
        }

        return redirect(route('user.list'));

    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.user.edit',compact('user'));
    }

    public function postEdit(Request $request, $id){
        $validator = Validator::make($request->all(),[
            'title' => 'required|max:191|unique:users,title,'. $id,
            'name' => 'required|max:191',
            'email' => 'nullable|email|max:191|unique:users,email,'. $id,
            'avatar' => 'nullable|image|max:2048|mimes:jpeg,png,jpg,gif,svg',
            'role' => 'required|numeric',
            'password' => 'required|min:6|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('user.edit', $id)
                ->withErrors($validator)
                ->withInput();
        }

        $model = User::findOrFail($id);

        if ($request->hasFile('avatar')) {
            if (file_exists($model->avatar))
                unlink(public_path($model->avatar));
        }

        $model->fill($request->all());

        if ($request->hasFile('avatar')){
            $image = $request->file('avatar');
            //Đặt tên ảnh
            $imageName = time() . $image->getClientOriginalName();
            //Lưu thư mục nào
            $path = $image->storeAs('images/' . $model->getTable(),$imageName);
            //Lưu DB
            $model->avatar = $path;
        }

        $flag = $model->save();

        if ($flag) {
            session()->flash('success', "Thành công!!!");
        } else {
            session()->flash('danger', "Không thành công!!!");
        }

        return redirect(route('user.edit', $id));
    }

    public function remove($id){
        $model = User::find($id);
        $msg = $model->delete();

        if ($msg) {
            if (file_exists($model->avater))
                unlink(public_path($model->avater));

//            return response()->json(array(
//                'status' => 204,
//                'msg' => '204: HTTP requests successful'
//            ));
            return redirect(route('user.list'));
        }

//        return response()->json(array(
//            'status' => 400,
//            'msg' => '400: Bad Request'
//        ));
    }
}
