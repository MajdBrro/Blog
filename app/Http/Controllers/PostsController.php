<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Str;
class PostsController extends Controller
{
    
    public function index(){
        // $post= Post :: all();
        // dd($post);
        // return view('blog.index',[ // الطريقة الاولى لتمرير الريكورد
        //     'posts' => Post::all()//  get ولكن الافضل هو all هنا كنا نضع 
        // ]);
        return view('blog.index') -> with('posts', Post::get());
        // return Post::all();
    }
//-----------------------------------------------------------------------------------------------------------------------
public function create(){
    return view('blog.create');
}
public function store(Request $request){
    $request ->validate([
        'title' => 'required',
        'description' => 'required',
        'image' => 'required|mimes:jpg,png|max:5048',
    ]);
    $slug=Str::slug($request->title , '_');
    $NewImageName= uniqid() . '-' . $slug . '_' . $request->image->extension(); 
    $request->image->move(public_path('images'), $NewImageName);
    $localimage_path= '/images/' . $NewImageName;
    // post::create([
        //     'title'=>$request -> input('title'),
        //     'description'=>$request -> input('description'),
        //     'slug'=>$slug,
        //     'image_path'=> $localimage_path,
        //     'user_id'=> auth()->user()->id
        // ]);
        $post =new post();
        $post -> title = strip_tags ($request -> input('title'));
        $post -> description = strip_tags ($request -> input('description'));
        $post -> image_path = $localimage_path;
        $post -> slug = $slug;
        $post -> user_id = auth()->user()->id;
        $post->save();
        
        
        return redirect() -> route('blog.index');
        // return redirect('/blog');
    }
//-----------------------------------------------------------------------------------------------------------------------
    public function show($id){
        return view('blog.show', [
            'post' => post::findOrfail($id)
        ]);
    }
//-----------------------------------------------------------------------------------------------------------------------
public function edit($id){
    return view('blog.edit',[
            'post' => post::findOrfail($id)
        ]);
    }
//-----------------------------------------------------------------------------------------------------------------------
public function update(Request $request, $id){
    $request ->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpg,png|max:5048',
        ]);
        $slug=Str::slug($request->title , '_');
        $NewImageName= uniqid() . '-' . $slug . '_' . $request->image->extension(); 
        $request->image->move(public_path('images'), $NewImageName);
        $localimage_path= '/images/' . $NewImageName;

        // post::where ('id' , $id) -> update([
        //     'title'=>$request -> input('title'),
        //     'description'=>$request -> input('description'),
        //     'slug'=>$slug,
        //     'image_path'=> $localimage_path,
        //     'user_id'=> auth()->user()->id
        // ]);

        $post = Post::findOrFail($id);
        $post -> title = strip_tags ($request -> input('title'));
        $post -> description = strip_tags ($request -> input('description'));
        $post -> image_path = $localimage_path;
        $post -> slug = $slug;
        $post -> user_id = auth()->user()->id;
        $post->save();
        
        
        return redirect() -> route('blog.index');
    }
//-----------------------------------------------------------------------------------------------------------------------
    public function destroy($id){
        $delpost=post::findorfail($id);
        $delpost -> delete();
        return redirect() -> route('blog.index');
    }
}
//-----------------------------------------------------------------------------------------------------------------------
